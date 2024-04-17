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

#[Route('/user/form/room')]
class UserFormRoomController extends AbstractController
{
    #[Route('/', name: 'app_user_form_room_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer toutes les relations UserFormRoom
        $allUserFormRooms = $entityManager
            ->getRepository(UserFormRoom::class)
            ->findAll();

        // Créer un tableau vide pour stocker les UserFormRooms uniques
        $uniqueUserFormRooms = [];

        // Boucler à travers toutes les UserFormRooms
        foreach ($allUserFormRooms as $userFormRoom) {
            // Vérifier si l'ID de formation actuel de UserFormRoom est déjà dans le tableau uniqueUserFormRooms
            $existingFormationIds = array_map(function ($ufr) {
                return $ufr->getForm()->getIdForm();
            }, $uniqueUserFormRooms);

            if (!in_array($userFormRoom->getForm()->getIdForm(), $existingFormationIds)) {
                // Si l'ID de formation n'est pas déjà dans le tableau, ajouter UserFormRoom au tableau uniqueUserFormRooms
                $uniqueUserFormRooms[] = $userFormRoom;
            }
        }

        return $this->render('user_form_room/index.html.twig', [
            'user_form_rooms' => $uniqueUserFormRooms,
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
        // Ajoutez temporairement un identifiant utilisateur fictif
        $userId = 7; // Remplacez ceci par l'identifiant utilisateur fictif de votre choix

        // Récupérez l'objet Formation à partir de son identifiant
        $formation = $entityManager->getRepository(Formation::class)->find($idForm);
        if (!$formation) {
            throw $this->createNotFoundException('La formation demandée n\'existe pas.');
        }

        // Récupérer l'utilisateur
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('L\'utilisateur demandé n\'existe pas.');
        }

        // Créez une nouvelle inscription pour l'utilisateur fictif à cette formation
        $userFormRoom = new UserFormRoom();
        $userFormRoom->setUser($user); // Set the user object
        $userFormRoom->setForm($formation);
        // Assurez-vous que le rôle est correctement défini

        // Enregistrez l'inscription dans la base de données
        $entityManager->persist($userFormRoom);
        $entityManager->flush();
        $userFormation = new UserFormation();
        $userFormation->setUser($user);
        $userFormation->setFormation($formation);

        // Persist the UserFormation object to the database
        $entityManager->persist($userFormation);
        $entityManager->flush();

        // Redirigez l'utilisateur vers une page appropriée
        return $this->redirectToRoute('app_user_form_room_index');
    }
    

    #[Route('/{idFR}/delete/client/{userId}', name: 'app_user_form_room_delete_client', methods: ['POST'])]
public function deleteClient(Request $request, int $idFR, int $userId, EntityManagerInterface $entityManager): Response
{
    $userFormRoom = $entityManager->getRepository(UserFormRoom::class)->find($idFR);
    $user = $entityManager->getRepository(User::class)->find($userId);

    if (!$userFormRoom || !$user) {
        throw $this->createNotFoundException('La relation utilisateur-formation demandée n\'existe pas.');
    }

    // Assurez-vous que l'utilisateur supprimé est effectivement un client de la formation
    $userFormation = $entityManager->getRepository(UserFormation::class)->findOneBy([
        'formation' => $userFormRoom->getForm(),
        'user' => $user
    ]);

    if (!$userFormation || $userFormation->getRole() !== 'CLIENT') {
        throw $this->createNotFoundException('L\'utilisateur n\'est pas un client de cette formation.');
    }

    $entityManager->remove($userFormRoom);
    $entityManager->flush();

    // Redirection vers la page précédente ou une autre page appropriée
    return $this->redirectToRoute('app_user_form_room_index');
}

}
