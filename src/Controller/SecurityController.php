<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ForgotPasswordType;
use App\Form\PhoneNumberFormType;
use App\Form\UserType;
use App\Form\VerificationCodeFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Twilio\Rest\Client;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login2.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): RedirectResponse
    {
        return $this->redirectToRoute('app_login');
    }

    #[Route(path: '/forgot', name: 'forgot', methods: ['GET', 'POST'])]

    public function forgotPassword(Request $request, Client $twilioClient): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // Handle phone number form submission
        $phoneNumberForm = $this->createForm(PhoneNumberFormType::class);
        $phoneNumberForm->handleRequest($request);
        
        if ($phoneNumberForm->isSubmitted() && $phoneNumberForm->isValid()) {
            $email = $phoneNumberForm->get('email')->getData();
            $phoneNumber = $phoneNumberForm->get('phoneNumber')->getData();
            
            // Check if email exists in the database
            $user = $entityManager->getRepository(User::class)->findOneByEmail($email);
            if (!$user) {
                $this->addFlash('error', 'Email not found in our records.');
                return $this->redirectToRoute('forgot');
            }

            // Prefix the phone number with country code (+216)
            $formattedPhoneNumber = '+216' . $phoneNumber;

            // Generate verification code
            $verificationCode = mt_rand(100000, 999999);

            // Store verification code in session
            $this->get('session')->set('verification_code', $verificationCode);

            try {
                // Send SMS using Twilio
                $twilioClient->messages->create(
                    $formattedPhoneNumber,
                    [
                        'from' => $_ENV['TWILIO_PHONE_NUMBER'], // Use TWILIO_PHONE_NUMBER directly
                        'body' => "Your verification code for {$user->getUsername()} is: $verificationCode"
                    ]
                );

                // Redirect to verify code page
                return $this->redirectToRoute('verify_user_code', ['id' => $user->getIdUser()]);
            } catch (\Exception $e) {
                // Handle Twilio API exception (e.g., log error, display user message)
                $this->addFlash('error', 'Failed to send verification code. Please try again later.');
            }
        }

        return $this->render('security\forgotPassword.html.twig', [
            'phoneNumberForm' => $phoneNumberForm->createView(),
        ]);
    }

    /**
     * @Route("/forgot/{id}/verify", name="verify_user_code")
     */
    public function verifyUserCode(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $verificationForm = $this->createForm(VerificationCodeFormType::class);
        $verificationForm->handleRequest($request);

        if ($verificationForm->isSubmitted() && $verificationForm->isValid()) {
            $enteredCode = $verificationForm->get('verificationCode')->getData();
            $storedCode = $this->get('session')->get('verification_code');

            if ($enteredCode == $storedCode) {
                // Clear the stored verification code from the session
                $this->get('session')->remove('verification_code');
                // Add a success flash message
                $this->addFlash('success', 'Verification successful.');
                // Code verified, proceed to payment
                return $this->redirectToRoute('change_password', ['id' => $user->getIdUser()]);
            } else {
                $this->addFlash('error', 'Invalid verification code. Please try again.');
            }
        }

        return $this->render('security\verifyCode.html.twig', [
            'user' => $user,
            'verificationForm' => $verificationForm->createView(),
        ]);
    }

    // change password
    private $entityManager;
    private $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }
    #[Route("/forgot/{id}/changepassword", name: "change_password")]
    public function changePassword(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        $errorMessages = [];

        // Si le formulaire est soumis
        if ($request->isMethod('POST')) {
            $newPassword = $request->request->get('new-password');
            $confirmPassword = $request->request->get('confirm-new-password');
            // Vérifier si les champs sont vides
            if (empty($newPassword) || empty($confirmPassword)) {
                $errorMessages['all-fields'] = 'Tous les champs sont obligatoires.';
            }
            // Vérifier si les nouveaux mots de passe correspondent
            if ($newPassword !== $confirmPassword) {
                $errorMessages['new-password'] = 'Les nouveaux mots de passe ne correspondent pas.';
            }
            // Si aucune erreur, procéder à la modification du mot de passe
            if (empty($errorMessages)) {
                // Encoder le nouveau mot de passe
                $hashedPassword = $this->passwordHasher->hashPassword($user, $newPassword);
                // Mettre à jour le mot de passe de l'utilisateur directement dans l'entité User
                $user->setMdp($hashedPassword);
                // Mettre à jour l'entité dans la base de données
                $this->entityManager->flush();
                // Ajouter un message flash de succès
                $this->addFlash('success', 'Votre mot de passe a été modifié avec succès.');

                // Rediriger vers la page de changement de mot de passe
                return $this->redirectToRoute('app_login');
            }
        }
        // Afficher la page de modification de mot de passe avec le formulaire
        return $this->render('security\changePasswordForgot.html.twig', [
            'user' => $user,
            'id' => $id,
            'errorMessages' => $errorMessages,
        ]);
    }



    // /**
    //  * @Route("/forgot", name="forgot")
    //  */
    // public function forgotPassword(Request $request, UserRepository $userRepository,MailerInterface $mailer, TokenGeneratorInterface  $tokenGenerator)
    // {
    //     $form = $this->createForm(ForgotPasswordType::class);
    //     $form->handleRequest($request);
    //     if($form->isSubmitted() && $form->isValid()) {
    //         $donnees = $form->getData();//


    //         $user = $userRepository->findOneBy(['email'=>$donnees]);
    //         if(!$user) {
    //             $this->addFlash('danger','cette adresse n\'existe pas');
    //             return $this->redirectToRoute("forgot");

    //         }
    //         $token = $tokenGenerator->generateToken();

    //         try{
    //             $user->setResetToken($token);
    //             $entityManger = $this->getDoctrine()->getManager();
    //             $entityManger->persist($user);
    //             $entityManger->flush();
    //         }catch(\Exception $exception) {
    //             $this->addFlash('warning','une erreur est survenue :'.$exception->getMessage());
    //             return $this->redirectToRoute("app_login");
    //         }

    //         $url = $this->generateUrl('app_reset_password',array('token'=>$token),UrlGeneratorInterface::ABSOLUTE_URL);

    //         //BUNDLE MAILER
    //         $message = (new Email())
    //             ->from('issamguichana1@gmail.com')
    //             ->to($user->getEmail())
    //             ->subject('Mot de password oublié')
    //             ->html("<p> Bonjour</p> unde demande de réinitialisation de mot de passe a été effectuée. Veuillez cliquer sur le lien suivant :".$url);

    //         //send mail
    //         $mailer->send($message);
    //         $this->addFlash('message','E-mail  de réinitialisation du mp envoyé :');
    //     //    return $this->redirectToRoute("app_login");

    //     }
    //     return $this->render("security/forgotPassword.html.twig",['form'=>$form->createView()]);
    // }


    // /**
    //  * @Route("/resetpassword/{token}", name="app_reset_password")
    //  */
    // public function resetpassword(Request $request,string $token, UserPasswordEncoderInterface  $passwordEncoder)
    // {
    //     $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['reset_token'=>$token]);

    //     if($user == null ) {
    //         $this->addFlash('danger','TOKEN INCONNU');
    //         return $this->redirectToRoute("app_login");

    //     }

    //     if($request->isMethod('POST')) {
    //         $user->setResetToken(null);

    //         $user->setPassword($passwordEncoder->encodePassword($user,$request->request->get('password')));
    //         $entityManger = $this->getDoctrine()->getManager();
    //         $entityManger->persist($user);
    //         $entityManger->flush();

    //         $this->addFlash('message','Mot de passe mis à jour :');
    //         return $this->redirectToRoute("app_login");

    //     }
    //     else {
    //         return $this->render("security/resetPassword.html.twig",['token'=>$token]);

    //     }
    // }

}
