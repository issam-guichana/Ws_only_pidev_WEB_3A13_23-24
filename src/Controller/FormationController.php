<?php

namespace App\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\UserFormation;
use App\Entity\Formation;
use App\Entity\UserFormRoom;
use App\Entity\Room;
use App\Entity\User;
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

use Symfony\Component\HttpFoundation\JsonResponse;

use Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;





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
        
        // Ajoutez ces lignes pour récupérer les dates de début et de fin
        $dateDebut = \DateTime::createFromFormat('Y-m-d', $formData['dateDebut']);
        $dateFin = \DateTime::createFromFormat('Y-m-d', $formData['dateFin']);
        $formation->setDateDebut($dateDebut);
        $formation->setDateFin($dateFin);

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
    public function courses(FormationRepository $formationRepository, PaginatorInterface $paginator, EntityManagerInterface $entityManager, Request $request): Response
    {
        $userId = 7; // ID de l'utilisateur statique
    
        // Récupérer toutes les formations
        $allFormations = $formationRepository->findAll();
    
        // Paginer les formations
        $formations = $paginator->paginate(
            $allFormations, // Requête à paginer
            $request->query->getInt('page', 1), // Numéro de page
            3 // Nombre d'éléments par page
        );
    
        // Récupérer les formations précédemment consultées par l'utilisateur
        $userFormations = $entityManager->getRepository(UserFormation::class)->findBy(['user' => $userId]);
    
        // Récupérer les IDs des catégories des formations précédemment consultées
        $categoriesIds = [];
        foreach ($userFormations as $userFormation) {
            $formation = $userFormation->getFormation();
            if ($formation && $cat = $formation->getCat()) {
                $categoriesIds[] = $cat->getIdCat();
            }
        }
    
        // Récupérer d'autres formations dans les mêmes catégories que celles consultées précédemment
        $recommendations = new ArrayCollection();
        foreach ($categoriesIds as $categoryId) {
            $formationsInCategory = $formationRepository->findByCategory($categoryId);
            foreach ($formationsInCategory as $formation) {
                if (!$recommendations->contains($formation)) {
                    $recommendations->add($formation);
                }
            }
        }
        // Paginate recommendations
    $recommendations = $paginator->paginate(
        $recommendations, // Query to paginate
        $request->query->getInt('page', 1), // Page number
        3 // Number of items per page
    );
    
        return $this->render('formation/courses.html.twig', [
            'formations' => $formations,
            'recommendations' => $recommendations,
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
        $formation->setCat($categorieRepository->find($formData['categoryId']));

        // Convertir les dates de début et de fin en objets DateTime
        $dateDebut = \DateTime::createFromFormat('Y-m-d', $formData['dateDebut']);
        $dateFin = \DateTime::createFromFormat('Y-m-d', $formData['dateFin']);

        // Vérifiez si les dates ont été correctement converties
        if ($dateDebut instanceof \DateTime && $dateFin instanceof \DateTime) {
            $formation->setDateDebut($dateDebut);
            $formation->setDateFin($dateFin);
        } else {
            // Gérer les erreurs si la conversion échoue
            // ...
        }

        $room->setNomRoom($formData['nomRoom']);
        $room->setDescription($formData['description']);
        $room->setDateCRoom(new \DateTime());

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
    
#[Route('/user/formations', name: 'app_client_formations', methods: ['GET'])]
public function getUserFormations(EntityManagerInterface $entityManager): Response
{
    $userId = 7; 

   
    $user = $entityManager->getRepository(User::class)->find($userId);

 
    if (!$user) {
        throw $this->createNotFoundException('L\'utilisateur demandé n\'existe pas.');
    }

   
    $userFormations = $entityManager->getRepository(UserFormation::class)->findBy(['user' => $user]);

    
    $clientFormations = [];
    foreach ($userFormations as $userFormation) {
        if ($userFormation->getRole() === 'CLIENT') {
            $clientFormations[] = $userFormation->getFormation();
            
        }
    }
    

    return $this->render('formation/client.html.twig', [
        'user' => $user,
        'client_formations' => $clientFormations,
    ]);
    
}
#[Route('/formation/{id}/details', name: 'app_formation_details1', methods: ['GET'])]
public function formationDetails(Formation $formation): Response
{
    return $this->render('formation/detailsc.html.twig', [
        'formation' => $formation,
    ]);
}
#[Route('/formateur/formations', name: 'app_formateur_formations', methods: ['GET'])]
public function getFormateurFormations(EntityManagerInterface $entityManager): Response
{
    $formateurId = 9; 

    // get the formateur entity
    $formateur = $entityManager->getRepository(User::class)->find($formateurId);


    if (!$formateur) {
        throw $this->createNotFoundException('Le formateur demandé n\'existe pas.');
    }

    // get all UserFormation entities associated with the formateur
    $formateurFormations = $entityManager->getRepository(UserFormation::class)->findBy(['user' => $formateur]);

   
    $formateurFormationsList = [];
    foreach ($formateurFormations as $formateurFormation) {
        if ($formateurFormation->getRole() === 'FORMATEUR') {
            $formateurFormationsList[] = $formateurFormation->getFormation();
        }
    }

    return $this->render('formation/formateur.html.twig', [
        'formateur' => $formateur,
        'formateur_formations' => $formateurFormationsList,
    ]);
}


#[Route('/formation/{id}/details1', name: 'app_formation_details', methods: ['GET', 'POST'])]
public function details(Request $request, $id, EntityManagerInterface $entityManager, FormFactoryInterface $formFactory): Response
{
    // Retrieve the formation from the database
    $formation = $entityManager->getRepository(Formation::class)->find($id);

    if (!$formation) {
        throw $this->createNotFoundException('Formation not found');
    }

    // Create a form for uploading files
    $form = $this->createUploadForm($formFactory);

    // Handle form submission
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Get the uploaded files
        $uploadedFiles = $form->get('files')->getData();

        // Process each uploaded file
        foreach ($uploadedFiles as $file) {
            // Read the content of each uploaded file
            $content = file_get_contents($file->getPathname());

            // Set the file content to the content of the uploaded file
            $formation->setFileContent($content);

            // Persist the changes to the database
            $entityManager->persist($formation);
            $entityManager->flush();
        }

        // Redirect or display a success message
        $this->addFlash('success', 'File uploaded successfully.');
        return $this->redirectToRoute('app_formation_details', ['id' => $id]);
    }

    // Render the details template with the formation data and upload form
    return $this->render('formation/detailsf.html.twig', [
        'formation' => $formation,
        'form' => $form->createView(),
    ]);
}

private function createUploadForm(FormFactoryInterface $formFactory): FormInterface
{
    return $formFactory->createBuilder()
        ->add('files', FileType::class, [
            'label' => 'Choose files to upload',
            'multiple' => true, // Allow multiple file selection
        ])
        ->add('submit', SubmitType::class, ['label' => 'Upload'])
        ->getForm();
}
#[Route('/formation/{id}/pdf', name: 'app_formation_pdf', methods: ['GET'])]
public function viewPdf($id, EntityManagerInterface $entityManager): Response
{
    // Retrieve the formation from the database
    $formation = $entityManager->getRepository(Formation::class)->find($id);

    if (!$formation) {
        throw $this->createNotFoundException('Formation not found');
    }

    // Retrieve the file content
    $fileContent = stream_get_contents($formation->getFileContent());

    // Set the response headers
    $response = new Response($fileContent);
    $response->headers->set('Content-Type', 'application/pdf');
    $response->headers->set('Content-Disposition', 'inline; filename="formation.pdf"');

    return $response;
}
}
