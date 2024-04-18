<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RoomType;
use App\Form\RoomF;


use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Room;
use App\Entity\User;
use App\Entity\Formation;
use App\Entity\UserFormRoom;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\FormationRepository;
use App\Repository\UserRepository;
use App\Repository\RoomRepository;
use App\Form\EntityType;
use DateTime;
use App\Entity\Message;
use Symfony\Component\HttpFoundation\JsonResponse;




class RoomController extends AbstractController
{
    #[Route('/roomlist', name: 'app_room')]
    public function index(Request $request): Response
    {
        $roomId = $request->query->get('roomId');
        
        if ($roomId) {
            // If roomId is provided in the request, fetch messages for the specified room
            $room = $this->getDoctrine()->getRepository(Room::class)->find($roomId);
            $messages = $room->getMessages(); 
            $messagesArray = [];
            foreach ($messages as $message) {
                $messagesArray[] = [
                    'contenu' => $message->getContenu(), // Assuming the content property of the message entity
                    // Add other properties as needed
                ];
            }
            
            return new JsonResponse([
                'messages' => $messagesArray,
            ]);
        } else {
            // If roomId is not provided, return the regular room list view
            $rooms = $this->getDoctrine()->getRepository(Room::class)->findAll();
            return $this->render('room/listroom.html.twig', [
                'rooms' => $rooms,
            ]);
        }
    }
    



    #[Route('/addroom', name: 'addroom')]
    public function addroom(Request $request, ManagerRegistry $mr, FormationRepository $formationRepository, UserRepository $userRepository, RoomRepository $roomRepository): Response
    {

        $rooms = $this->getDoctrine()->getRepository(Room::class)->findAll();

        $formations = $formationRepository->findAll();
        $users = $userRepository->findAll();

        $room = new Room();

        if ($request->isMethod('POST')) {

            $formData = $request->request->all();

            $room->setNomRoom($formData['nomRoom']);
            $room->setDateCRoom(new \DateTime());
            // $currentDateTime = new DateTime();
            // $room->setDateCRoom($formData['$currentDateTime']);
            $room->setDescription($formData['description']);

            $selectedFormationId = $formData['combobox'];
            $selectedUserId = (int)$formData['comboboxu'];


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($room);
            $entityManager->flush();
            $idRoom = $room->getIdRoom();


            $formation = $this->getDoctrine()->getRepository(Formation::class)->find($selectedFormationId);
            // $user = $this->getDoctrine()->getRepository(User::class)->find($selectedUserId);
            $user = $userRepository->find($selectedUserId);
            $room = $roomRepository->find($idRoom);
            // $room = $this->getDoctrine()->getRepository(Room::class)->find($idRoom);

            $userFormRoom = new UserFormRoom();
            $userFormRoom->setUser($user);
            $userFormRoom->setForm($formation);
            $userFormRoom->setRoom($room);

            // Persist the UserFormRoom entity
            $entityManager->persist($userFormRoom);
            $entityManager->flush();

            // Add a flash message to indicate success
            $this->addFlash('success', 'Room added successfully.');

            // Redirect to a different route after successful submission
            return $this->redirectToRoute('success_route_name');
        }
        // Render the template and pass the Room entity and formation choices to it
        return $this->render('Back/addroom.html.twig', [
            'rooms' => $rooms,
            'room' => $room,
            'formations' => $formations,
            'users' => $users,
        ]);
    }

    #[Route('/updateroom/{id}', name: 'updateroom')]
    public function updateRoom($id, Request $request, RoomRepository $roomRepository, FormationRepository $formationRepository, UserRepository $userRepository): Response
    {
        // Retrieve the room entity to update
        $room = $roomRepository->find($id);
        if (!$room) {
            throw $this->createNotFoundException('Room not found');
        }

        // Fetch all rooms, formations, and users for form data
        $rooms = $roomRepository->findAll();
        $formations = $formationRepository->findAll();
        $users = $userRepository->findAll();

        // Handle form submission
        if ($request->isMethod('POST')) {
            $formData = $request->request->all();

            // Update the room entity with form data
            $room->setNomRoom($formData['nomRoom']);
            $room->setDescription($formData['description']);
            // Update other fields as needed

            // Persist the updated room entity
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            // Add a flash message to indicate success
            $this->addFlash('success', 'Room updated successfully.');

            // Redirect to a different route after successful update
            return $this->redirectToRoute('success_route_name');
        }

        // Render the template and pass the room entity and related entities to it
        return $this->render('Back/updateroom.html.twig', [
            'room' => $room,
            'rooms' => $rooms,
            'formations' => $formations,
            'users' => $users,
        ]);
    }
    #[Route('/deleteroom/{id}', name: 'deleteroom')]
    public function deleteRoom($id, RoomRepository $roomRepository): Response
    {
        // Retrieve the room entity to delete
        $room = $roomRepository->find($id);
        if (!$room) {
            throw $this->createNotFoundException('Room not found');
        }

        // Get the EntityManager
        $entityManager = $this->getDoctrine()->getManager();

        // Remove the room entity
        $entityManager->remove($room);
        $entityManager->flush();

        // Add a flash message to indicate success
        $this->addFlash('success', 'Room deleted successfully.');

        // Redirect to a different route after successful deletion
        return $this->redirectToRoute('success_route_name');
    }


   

    #[Route('/roomlist/{id}', name: 'app_room_d')]
public function index2(int $id): JsonResponse
{
    // Fetch the room by ID
    $room = $this->getDoctrine()->getRepository(Room::class)->find($id);
    
    if (!$room) {
        // If room not found, return an appropriate response
        // For example, throw a 404 Not Found exception
        throw $this->createNotFoundException('Room not found');
    }
    
    // Fetch messages associated with the room
    $messages = $room->getMessages();
    
    // Prepare messages array
    $messagesArray = [];
    foreach ($messages as $message) {
        $messagesArray[] = [
            'contenu' => $message->getContenu(), // Assuming the content property of the message entity
            // Add other properties as needed
        ];
    }
    
    return new JsonResponse([
        'messages' => $messagesArray,
    ]);
}
}