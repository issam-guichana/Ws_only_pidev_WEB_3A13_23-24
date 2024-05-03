<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/signup', name: 'app_sign_up', methods: ['GET', 'POST'])]
    public function signUp(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $user->getPassword();
            $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
            $user->setMdp($hashedPassword);
            // Handle file upload
            $imageFile = $form->get('image')->getData(); // Get the uploaded file object
            if ($imageFile) {
                $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();
                try {
                    // Move the file to the upload directory
                    $imageFile->move(
                        $this->getParameter('app.path.product_images'),
                        $newFilename
                    );
                    $user->setImage($newFilename);
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Failed to upload the image.');
                    return $this->redirectToRoute('app_sign_up'); // Redirect back to new form
                }
            }
            // Save the user to the database
            //$entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // Redirect to some success page or do something else
            $this->addFlash('success', 'compte crée avec succès.');
            return $this->redirectToRoute('app_login');
        }
        return $this->render('sign_up\register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
