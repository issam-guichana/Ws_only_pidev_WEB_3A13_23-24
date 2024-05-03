<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProfileController extends AbstractController
{

    private $entityManager;
    private $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/profile', name: 'profil')]
    public function index(): Response
    {
        // // Get the current user
         $user = $this->getUser();

         $userId = $this->getUser();
    
    // Retrieve the user entity from the database based on the user ID
    $entityManager = $this->getDoctrine()->getManager();
    $user = $entityManager->getRepository(User::class)->find($userId);

         $userInfo = [
            'name' => $user->getUsername(),
            'email' => $user->getEmail(),
            'age' => $user->getAge(),
            'gender' => $user->getGender(),
            'profileImage' => $user->getImageFile(),
        ];
        // Pass the user's ID to the template
        return $this->render('profile\profileUser.html.twig', [
            'user' => $user,
            'userInfo' => $userInfo,
            'controller_name' => 'ProfilController',
        ]);
    }

    #[Route("/profile/{id}/changepassword", name: "app_change_password")]
    public function changePassword(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        $errorMessages = [];
        // Si le formulaire est soumis
        if ($request->isMethod('POST')) {
            $oldPassword = $request->request->get('old-password');
            $newPassword = $request->request->get('new-password');
            $confirmPassword = $request->request->get('confirm-new-password');
            // Vérifier si les champs sont vides
            if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
                $errorMessages['all-fields'] = 'Tous les champs sont obligatoires.';
            }
            // Utiliser l'encoder pour vérifier le mot de passe actuel
            if (!$this->passwordHasher->isPasswordValid($user, $oldPassword)) {
                $errorMessages['old-password'] = 'L\'ancien mot de passe est incorrect.';
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
                return $this->redirectToRoute('app_change_password', ['id' => $user->getIdUser()]);
            }
        }
        // Afficher la page de modification de mot de passe avec le formulaire
        return $this->render('profile\UserChangePassword.html.twig', [
            'user' => $user,
            'id' => $id,
            'errorMessages' => $errorMessages,
        ]);
    }
    
    #[Route('profile/{id}/change-photo', name: 'change_photo', methods: ['GET', 'POST'])]
    public function changePhoto(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);
        // If the request method is POST, handle the form submission
        if ($request->isMethod('POST')) {
            // Vérifier si une image a été uploadée
            $uploadedFile = $request->files->get('image');
            if ($uploadedFile instanceof UploadedFile) {
                // Générer un nom de fichier unique
                $fileName = md5(uniqid()) . '.' . $uploadedFile->guessExtension();
                // Définir le répertoire de destination dans le répertoire public/img
                $destination = $this->getParameter('kernel.project_dir') . '/public/Uploads';
                try {
                    // Déplacer le fichier téléchargé vers le répertoire de destination
                    $uploadedFile->move($destination, $fileName);
                } catch (FileException $e) {
                    // En cas d'erreur lors du déplacement du fichier
                    return new Response("Une erreur s'est produite lors de l'enregistrement de l'image.", Response::HTTP_INTERNAL_SERVER_ERROR);
                }
                // Mettre à jour le chemin de l'image de profil de l'utilisateur dans la base de données
                //$user = $this->getUser();

                $user->setImage($fileName);  // Assuming setImage() is a method to set the image path
                // Persistez les modifications de l'utilisateur dans la base de données
                $entityManager->flush();
                // Rediriger l'utilisateur vers une page appropriée
                return $this->redirectToRoute('change_photo', ['id' => $user->getIdUser()]);
            }
            // Gérer le cas où aucune image n'est téléchargée
            // Rediriger l'utilisateur vers une page d'erreur ou une page appropriée
            return new Response("Aucune image n'a été téléchargée.", Response::HTTP_BAD_REQUEST);
        }

        // If the request method is GET, render the form for uploading a new photo
        return $this->render('profile\UserPhoto.html.twig', [
            'user' => $user,
            'id' => $id,
        ]);
    }
}
