<?php

namespace App\Controller;

use App\Entity\UserFormation;
use App\Entity\Formation;
use App\Entity\UserFormRoom;
use App\Entity\Room;
use App\Form\FormationType;
use App\Repository\CategorieRepository;
use App\Repository\RoomRepository;
use App\Repository\FormationRepository;
use App\Repository\CertificatRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserFormRoomRepository;
use App\Controller\UserFormRoomController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
#[Route('/formation')]
class FormationController extends AbstractController
{
    public function __construct(private ValidatorInterface $validator)
    {
    }
    #[Route('/new', name: 'app_formation_new', methods: ['GET', 'POST'])]
    public function new(RoomRepository $roomRepository, Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, CategorieRepository $categorieRepository, CertificatRepository $certificatRepository): Response
    {
        // Fetch all users to include in the selection
        $users = $userRepository->findByRole('FORMATEUR');
        $rooms = $roomRepository->findAll(); // Use injected repository directly
    
        // Fetch all categories to include in the selection
        $categories = $categorieRepository->findAll();
        $certificats = $certificatRepository->findAll();

    
        // Create a new instance of Formation and Room
        $formation = new Formation();
        $room = new Room();
        
          // Fetch formateurs only
         // $formateurs = $userRepository->findByRole('FORMATEUR');
    
        // If the form is submitted via POST method
        if ($request->isMethod('POST')) {
            // Get form data
            $formData = $request->request->all();
    
            // Set formation data
            $formation->setNomForm($formData['nomForm']);
            $formation->setDescription($formData['description']);
    
            // Get selected category
            $selectedCategoryId = $formData['categoryId'];
            $categorie = $categorieRepository->find($selectedCategoryId);
            $formation->setCat($categorie);
    
            $room->setNomRoom($formData['nomRoom']);
            $room->setDateCRoom(new \DateTime());
            $room->setDescription($formData['description']);
    
            // Persist the formation and room
            $entityManager->persist($formation);
            $entityManager->persist($room);
            $entityManager->flush();
    
            // Get selected user
            $selectedUserId = (int) $formData['comboboxu'];
            $user = $userRepository->find($selectedUserId);
          //  $userId = $userRepository->find($selectedUserId);

            
          $errors = $this->validateEntities($formation, $room);
          if (count($errors) > 0) {
            return $this->render('formation/new.html.twig', [
                'formation' => $formation,
                'users' => $users,
                'categories' => $categories,
                'room' => $room,
                'certificats' => $certificats,
                'errors' => $errors,
            ]);
        }

            // Create a new instance of UserFormRoom
            $userFormRoom = new UserFormRoom();
            $userFormRoom->setUser($user );
            $userFormRoom->setForm($formation);
            $userFormRoom->setRoom($room); // Set room for userFormRoom
    
            // Persist the userFormRoom
            $entityManager->persist($userFormRoom);
    
            // Create a new instance of UserFormation
            $userFormation = new UserFormation();
            $userFormation->setUser($user );
            $userFormation->setFormation($formation);
    
            $selectedCertificatId = $formData['certificatId'];
            $certificat = $certificatRepository->find($selectedCertificatId);
            $userFormation->setCertif($certificat); // Set certificat for userFormation
    
            // Persist the userFormation
            $entityManager->persist($userFormation);
            $entityManager->flush();
    
            // Add a flash message to indicate success
            $this->addFlash('success', 'Formation added successfully.');
    
            // Redirect to the index route after successful submission
            return $this->redirectToRoute('app_list_formations');
        }
    
        // Render the template and pass the Formation entity, form, users, and categories to it
        return $this->render('formation/new.html.twig', [
            'formation' => $formation,
            'users' => $users,
            'categories' => $categories,
            'room' => $room,
            'certificats' => $certificats,
            
        ]);
    }


    #[Route('/{idForm}', name: 'app_formation_show', methods: ['GET'])]
    public function show(Formation $formation): Response
    {
        return $this->render('formation/show.html.twig', [
            'formation' => $formation,
        ]);
    }

    #[Route('/{idForm}/edit', name: 'app_formation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Formation $formation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_list_formations', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('formation/edit.html.twig', [
            'formation' => $formation,
            'form' => $form,
        ]);
    }
    #[Route('/formations', name: 'app_list_formations', methods: ['GET'])]
    public function listFormations(FormationRepository $formationRepository, UserFormRoomRepository $userFormRoomRepository): Response
    {
        $formations = $formationRepository->findAll();
        $userFormRooms = [];

        foreach ($formations as $formation) {
            // Fetch userFormRooms for each formation
            $userFormRooms[$formation->getIdForm()] = $userFormRoomRepository->findBy(['form' => $formation]);
        }

        return $this->render('formation/ListFormations.html.twig', [
            'formations' => $formations,
            'userFormRooms' => $userFormRooms,
        ]);
    }
    #[Route('/{idForm}', name: 'app_formation_delete', methods: ['POST'])]
    public function delete(Request $request, Formation $formation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $formation->getIdForm(), $request->request->get('_token'))) {
            $entityManager->remove($formation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_list_formations', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/courses', name: 'courses')]
    public function courses(FormationRepository $formationRepository): Response
    {
        // Fetch all formations from the repository
        $formations = $formationRepository->findAll();

        // Pass the formations to the Twig template
        return $this->render('Front/courses.html.twig', [
            'formations' => $formations,
        ]);
      
    }
    
    #[Route('/newformation', name: 'app_formation_new1', methods: ['GET', 'POST'])]
    public function newFormation(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, CategorieRepository $categorieRepository, CertificatRepository $certificatRepository, RoomRepository $roomRepository): Response
    {
        // Define the specific user ID
        $userId = 9;
    
        // Fetch the specific user from the repository
        $specificUser = $userRepository->find($userId);
    
        // Fetch other necessary data
        $rooms = $roomRepository->findAll(); // Use injected repository directly
    
        // Fetch all categories to include in the selection
        $categories = $categorieRepository->findAll();
        $certificats = $certificatRepository->findAll(); // Assuming the user has a method to retrieve associated rooms
    
        // Create a new instance of Formation and Room
        $formation = new Formation();
        $room = new Room();
    
        // If the form is submitted via POST method
        if ($request->isMethod('POST')) {
            // Get form data
            $formData = $request->request->all();
    
            // Set formation data
            $formation->setNomForm($formData['nomForm']);
            $formation->setDescription($formData['description']);
    
            // Get selected category
            $selectedCategoryId = $formData['categoryId'];
            $categorie = $categorieRepository->find($selectedCategoryId);
            $formation->setCat($categorie);
    
            $room->setNomRoom($formData['nomRoom']);
            $room->setDateCRoom(new \DateTime());
            $room->setDescription($formData['description']);
    
            // Persist the formation and room
            $entityManager->persist($formation);
            $entityManager->persist($room);
            $entityManager->flush();
    
            // Create a new instance of UserFormRoom
            $userFormRoom = new UserFormRoom();
            $userFormRoom->setUser($specificUser);
            $userFormRoom->setForm($formation);
            $userFormRoom->setRoom($room); // Set room for userFormRoom
    
            // Persist the userFormRoom
            $entityManager->persist($userFormRoom);
    
            // Create a new instance of UserFormation
            $userFormation = new UserFormation();
            $userFormation->setUser($specificUser);
            $userFormation->setFormation($formation);
    
            $selectedCertificatId = $formData['certificatId'];
            $certificat = $certificatRepository->find($selectedCertificatId);
            $userFormation->setCertif($certificat); // Set certificat for userFormation
    
            // Persist the userFormation
            $entityManager->persist($userFormation);
            $entityManager->flush();
    
            // Add a flash message to indicate success
            $this->addFlash('success', 'Formation added successfully.');
    
            // Redirect to the index route after successful submission
            return $this->redirectToRoute('app_formateur_formations');
        }
    
        // Render the template and pass the Formation entity, specific user, categories, room, and certificats to it
        return $this->render('Front/ajoutf.html.twig', [
            'formation' => $formation,
            'specificUser' => $specificUser,
            'categories' => $categories,
            'room' => $room,
            'certificats' => $certificats,
        ]);
    }

    private function validateEntities(Formation $formation, Room $room): array
    {
        $errors = [];

        // Validate Formation entity
        $formationErrors = $this->validator->validate($formation);
        foreach ($formationErrors as $error) {
            $errors['nomForm'] = $error->getMessage(); 
            $errors['descriptionF'] = $error->getMessage(); 
        }

        // Validate Room entity
        $roomErrors = $this->validator->validate($room);
        foreach ($roomErrors as $error) {
            $errors['nomRoom'] = $error->getMessage(); 
            $errors['descriptionR'] = $error->getMessage(); 
        }

        return $errors;
    } 


}