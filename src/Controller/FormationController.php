<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
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
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;


#[Route('/formation')]
class FormationController extends AbstractController
{
    public function __construct(private ValidatorInterface $validator)
    {
    }
    #[Route('/new', name: 'app_formation_new', methods: ['GET', 'POST'])]
    public function new(RoomRepository $roomRepository, Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, CategorieRepository $categorieRepository, CertificatRepository $certificatRepository): Response
    {
       
        $users = $userRepository->findByRole('FORMATEUR');
        $rooms = $roomRepository->findAll();
    
        
        $categories = $categorieRepository->findAll();
        $certificats = $certificatRepository->findAll();

    
       
        $formation = new Formation();
        $room = new Room();
        
          
        if ($request->isMethod('POST')) {
       
            $formData = $request->request->all();
    
      
            $formation->setNomForm($formData['nomForm']);
            $formation->setDescription($formData['description']);
    
            
            $selectedCategoryId = $formData['categoryId'];
            $categorie = $categorieRepository->find($selectedCategoryId);
            $formation->setCat($categorie);
    
            $room->setNomRoom($formData['nomRoom']);
            $room->setDateCRoom(new \DateTime());
            $room->setDescription($formData['description']);
    
            
            $entityManager->persist($formation);
            $entityManager->persist($room);
            $entityManager->flush();
    
            $selectedUserId = (int) $formData['comboboxu'];
            $user = $userRepository->find($selectedUserId);
          
            
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

            $userFormRoom = new UserFormRoom();
            $userFormRoom->setUser($user );
            $userFormRoom->setForm($formation);
            $userFormRoom->setRoom($room); 
    
            
            $entityManager->persist($userFormRoom);
    
           
            $userFormation = new UserFormation();
            $userFormation->setUser($user );
            $userFormation->setFormation($formation);
    
            $selectedCertificatId = $formData['certificatId'];
            $certificat = $certificatRepository->find($selectedCertificatId);
            $userFormation->setCertif($certificat); 
    
           
            $entityManager->persist($userFormation);
            $entityManager->flush();
    
           
            $this->addFlash('success', 'Formation ajoutée avec succès.');
    
          
            return $this->redirectToRoute('app_list_formations');
        }
    
     
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
    //affichage avec room
    #[Route('/formations', name: 'app_list_formations', methods: ['GET'])]
    public function listFormations(FormationRepository $formationRepository, UserFormRoomRepository $userFormRoomRepository): Response
    {
        $formations = $formationRepository->findAll();
        $userFormRooms = [];

        foreach ($formations as $formation) {
            
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
public function courses(FormationRepository $formationRepository, PaginatorInterface $paginator, Request $request): Response
{
    // Récupérer toutes les formations
    $allFormations = $formationRepository->findAll();

    // Paginer les formations
    $formations = $paginator->paginate(
        $allFormations, // Requête à paginer
        $request->query->getInt('page', 1), // Numéro de page
        10 // Nombre d'éléments par page
    );

    return $this->render('formation/courses.html.twig', [
        'formations' => $formations,
    ]);
}
    
    #[Route('/newformation', name: 'app_formation_new1', methods: ['GET', 'POST'])]
    public function newFormation(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, CategorieRepository $categorieRepository, CertificatRepository $certificatRepository, RoomRepository $roomRepository): Response
    {
        
        $userId = 9;
    
        
        $specificUser = $userRepository->find($userId);
    
       
        $rooms = $roomRepository->findAll(); 
    
        
        $categories = $categorieRepository->findAll();
        $certificats = $certificatRepository->findAll(); 

        
        $formation = new Formation();
        $room = new Room();
    
        
        if ($request->isMethod('POST')) {
            
            $formData = $request->request->all();
    
            
            $formation->setNomForm($formData['nomForm']);
            $formation->setDescription($formData['description']);
    
           
            $selectedCategoryId = $formData['categoryId'];
            $categorie = $categorieRepository->find($selectedCategoryId);
            $formation->setCat($categorie);
    
            $room->setNomRoom($formData['nomRoom']);
            $room->setDateCRoom(new \DateTime());
            $room->setDescription($formData['description']);
    
            
            $entityManager->persist($formation);
            $entityManager->persist($room);
            $entityManager->flush();
    
           
            $userFormRoom = new UserFormRoom();
            $userFormRoom->setUser($specificUser);
            $userFormRoom->setForm($formation);
            $userFormRoom->setRoom($room); 
    
           
            $entityManager->persist($userFormRoom);
    
            $userFormation = new UserFormation();
            $userFormation->setUser($specificUser);
            $userFormation->setFormation($formation);
    
            $selectedCertificatId = $formData['certificatId'];
            $certificat = $certificatRepository->find($selectedCertificatId);
            $userFormation->setCertif($certificat);     
           
            $entityManager->persist($userFormation);
            $entityManager->flush();
    
          
            $this->addFlash('success', 'Formation ajoutée avec succès.');
    
            
            return $this->redirectToRoute('app_formateur_formations');
        }
    
       
        return $this->render('formation/ajoutf.html.twig', [
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


        $formationErrors = $this->validator->validate($formation);
        foreach ($formationErrors as $error) {                                 
            $errors['nomForm'] = $error->getMessage(); 
            $errors['descriptionF'] = $error->getMessage(); 
        }

      
        $roomErrors = $this->validator->validate($room);
        foreach ($roomErrors as $error) {
            $errors['nomRoom'] = $error->getMessage(); 
            $errors['descriptionR'] = $error->getMessage(); 
        }

        return $errors;
    } 

    #[Route('/botman', name: 'formation_botman', methods: ['GET', 'POST'])]
public function handleBotMan(Request $request, BotMan $botman): Response
{
    
    DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

    // Configuration for the BotMan WebDriver
    $config = [];

    // Create BotMan instance
    $botman = BotManFactory::create($config);

    // Give the bot some things to listen for.
    $botman->hears('(hello|hi|hey)', function ($bot) {
        $bot->reply('Hello!');
    });

    // Set a fallback
    $botman->fallback(function ($bot) {
        $bot->reply('Sorry, I did not understand.');
    });

    // Start listening
    $botman->listen();

    // Return a response if necessary
    return new Response();

}
}