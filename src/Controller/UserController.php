<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Knp\Component\Pager\PaginatorInterface;

class UserController extends AbstractController
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/user', name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request, UserRepository $userRepository, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();

         $userId = $this->getUser();
         $userInfo = [
            'name' => $user->getUsername(),
        ];
    
    // Retrieve the user entity from the database based on the user ID
    $entityManager = $this->getDoctrine()->getManager();
    $user = $entityManager->getRepository(User::class)->find($userId);

        $users = $userRepository->findAll();
        // Paginer les résultats de la requête
        $users = $paginator->paginate(
            $users, // Requête à paginer
            $request->query->getInt('page', 1), // Numéro de page
            4 // Nombre d'éléments par page
        );
        return $this->render('user/indexADMIN.html.twig', [
            'users' => $users,
            'userInfo' => $userInfo,
        ]);
    }
   

    #[Route('/user/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $user->getPassword(); // Assuming you have a getPassword() method in your User entity
            $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
            $user->setMdp($hashedPassword);

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
                    return $this->redirectToRoute('app_user_new'); // Redirect back to new form
                }
            }
            //$entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'User ajouté avec succès.');
            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/user/delete/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete($id, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $user = $userRepository->find($id);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', 'User deleted successfully.');

        return $this->redirectToRoute('app_user_index');
    }


    #[Route('/user/{id}/edit', name: 'app_User_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $user->getMdp();
            $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
            $user->setMdp($hashedPassword);

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                // Generate a unique filename
                $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();
                try {
                    // Move the file to the upload directory
                    $imageFile->move(
                        $this->getParameter('app.path.product_images'),
                        $newFilename
                    );
                    // Set the new image filename on the Evenement entity
                    $user->setImage($newFilename);
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Failed to upload the image.');
                    return $this->redirectToRoute('app_User_edit', ['id' => $user->getIdUser()]); // Redirect back to edit form
                }
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/user/change-status/{idUser}', name: 'app_user_change_status', methods: ['POST'])]
    public function changeStatus(int $idUser, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($idUser);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        $user->setStatus(!$user->getStatus());

        $entityManager->flush();

        $this->addFlash('success', 'User status updated successfully.');

        return $this->redirectToRoute('app_user_index');
    }
    #[Route('/search', name: 'app_search', methods: ['GET'])]
    public function search(Request $request, UserRepository $userRepository, PaginatorInterface $paginator): Response
    {
        // Get search query from the request
        $searchQuery = $request->query->get('search');

        // Get filter criteria from the request
     //$filterCriteria = $request->query->get('filter'); 

        // Retrieve users based on the search query
        $users = [];
        if ($searchQuery !== null && is_string($searchQuery)) {
           // $users = $userRepository->searchUsers($searchQuery, $filterCriteria);
            $users = $userRepository->searchUsers($searchQuery);
        }
        // Paginate the results
        $users = $paginator->paginate(
            $users,
            $request->query->getInt('page', 1),
            4 // Number of items per page
        );

        return $this->render('user\indexADMIN.html.twig', [
            'users' => $users,
            'controller_name' => 'UserController',
        ]);
    }
   
}
