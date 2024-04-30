<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserFormRoom;
use App\Entity\UserFormation;
use App\Entity\Formation;
use App\Form\UserFormRoomType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use FullCalendar\CalendarBundle\Entity\Event;


#[Route('/user/form/room')]
class UserFormRoomController extends AbstractController
{
    #[Route('/', name: 'app_user_form_room_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        
        $allUserFormRooms = $entityManager
            ->getRepository(UserFormRoom::class)
            ->findAll();

        // Création d'un tableau vide pour stocker les données userformroom
        $uniqueUserFormRooms = [];

       
        foreach ($allUserFormRooms as $userFormRoom) {

            $existingFormationIds = array_map(function ($ufr) {
                return $ufr->getForm()->getIdForm();
            }, $uniqueUserFormRooms);

            if (!in_array($userFormRoom->getForm()->getIdForm(), $existingFormationIds)) {
           
                $uniqueUserFormRooms[] = $userFormRoom;
            }
        }

        return $this->render('user_form_room/index.html.twig', [
            'user_form_rooms' => $uniqueUserFormRooms,
        ]);
    }


    #[Route('/{idFR}', name: 'app_user_form_room_delete', methods: ['POST'])]
    public function delete(Request $request, UserFormRoom $userFormRoom, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $userFormRoom->getIdFR(), $request->request->get('_token'))) {
            $entityManager->remove($userFormRoom);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_form_room_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/inscription/{idForm}', name: 'app_user_form_room_inscription', methods: ['POST'])]
    public function inscription(int $idForm, EntityManagerInterface $entityManager): Response
    {
    
        $userId = 7; 

       
        $formation = $entityManager->getRepository(Formation::class)->find($idForm);
        if (!$formation) {
            throw $this->createNotFoundException('La formation demandée n\'existe pas.');
        }

        
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('L\'utilisateur demandé n\'existe pas.');
        }
        

        
        $userFormRoom = new UserFormRoom();
        $userFormRoom->setUser($user); 
        $userFormRoom->setForm($formation);
       
        $entityManager->persist($userFormRoom);
        $entityManager->flush();
        $userFormation = new UserFormation();
        $userFormation->setUser($user);
        $userFormation->setFormation($formation);

     
        $entityManager->persist($userFormation);
        $entityManager->flush();

        return $this->redirectToRoute('app_client_formations');
    }
    

    #[Route('/{idFR}/delete/client/{userId}', name: 'app_user_form_room_delete_client', methods: ['POST'])]
public function deleteClient(Request $request, int $idFR, int $userId, EntityManagerInterface $entityManager): Response
{
   
    $userFormRoom = $entityManager->getRepository(UserFormRoom::class)->find($idFR);
    $user = $entityManager->getRepository(User::class)->find($userId);

    
    if (!$userFormRoom || !$user) {
        throw $this->createNotFoundException('La relation utilisateur-formation demandée n\'existe pas.');
    }

    // get the UserFormation entity associated with the User and the Formation
    $userFormation = $entityManager->getRepository(UserFormation::class)->findOneBy([
        'user' => $user,
        'formation' => $userFormRoom->getForm()
    ]);

    
    if ($userFormation) {
       
        $entityManager->remove($userFormation);
    }


    $entityManager->remove($userFormRoom);

    
    $entityManager->flush();

  
    return $this->redirectToRoute('app_user_form_room_index');
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

    return $this->render('user_form_room/client.html.twig', [
        'user' => $user,
        'client_formations' => $clientFormations,
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

    return $this->render('user_form_room/formateur.html.twig', [
        'formateur' => $formateur,
        'formateur_formations' => $formateurFormationsList,
    ]);
}




#[Route('/new', name: 'app_user_form_room_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $userFormRoom = new UserFormRoom();
    $form = $this->createForm(UserFormRoomType::class, $userFormRoom);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($userFormRoom);
        $entityManager->flush();

        return $this->redirectToRoute('app_user_form_room_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('user_form_room/new.html.twig', [
        'user_form_room' => $userFormRoom,
        'form' => $form,
    ]);
}

#[Route('/{idFR}', name: 'app_user_form_room_show', methods: ['GET'])]
public function show(UserFormRoom $userFormRoom): Response
{


    return $this->render('user_form_room/show.html.twig', [
        'user_form_room' => $userFormRoom,
    ]);
}


#[Route('/{idFR}/edit', name: 'app_user_form_room_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, UserFormRoom $userFormRoom, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(UserFormRoomType::class, $userFormRoom);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        return $this->redirectToRoute('app_user_form_room_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('user_form_room/edit.html.twig', [
        'user_form_room' => $userFormRoom,
        'form' => $form,
    ]);
}
}
