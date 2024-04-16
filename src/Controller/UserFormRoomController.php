<?php

namespace App\Controller;

use App\Entity\UserFormRoom;
use App\Form\UserFormRoomType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
}
