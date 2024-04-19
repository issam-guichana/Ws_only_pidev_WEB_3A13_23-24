<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use App\Repository\RoomRepository;

use App\Entity\Room;
use App\Entity\User;

use App\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class MessageController extends AbstractController
{
    #[Route('/send', name: 'send', methods: ['POST'])]
    public function sendMessage(Request $request): JsonResponse
    {
        // Get the message from the request
        $message = $request->request->get('message');

        // Here you can process the message (e.g., save to the database, send to other users, etc.)

        // For demonstration purposes, I'm just returning the message back to the client
        return new JsonResponse(['message' => $message]);
    }
   

    #[Route('/messages/{idRoom}', name: 'get_messages_by_room')]
    public function getMessagesByRoom($idRoom, MessageRepository $messageRepository): Response
    {
        // Fetch messages by room ID
        $messages = $messageRepository->findBy(['room' => $idRoom]);

        // Convert messages to array (optional)
        $formattedMessages = [];
        foreach ($messages as $message) {
            $formattedMessages[] = [
                'idMsg' => $message->getIdMsg(),
                'contenu' => $message->getContenu(),
                // Add other message properties as needed
            ];
        }

        // Return messages as JSON response
       // return new JsonResponse(['messages' => $formattedMessages]);

       return $this->render('msg/listmsgbyid.html.twig', [
        'messages' => $formattedMessages,
    ]);
    }


    #[Route('/message', name: 'app_message')]
    public function index(): Response
    {   // $rooms = $this->getUser()->getRooms();
        //return $this->render('Front/message.html.twig', [
         //   'rooms' => $rooms,
        //]);

        $messages = $this->getDoctrine()->getRepository(Message::class)->findAll();
        return $this->render('msg/listmsg.html.twig', [
            'messages' => $messages,
        ]);
    }


    #[Route('/addmsg', name: 'addmsg')]
    public function addmsg(Request $request, ManagerRegistry $mr, RoomRepository $roomRepository, UserRepository $userRepository, MessageRepository $messageRepository): Response
   {
    $msg = $this->getDoctrine()->getRepository(Message::class)->findAll();
    $rooms = $roomRepository->findAll();
    $users = $userRepository->findAll();

    $message = new Message();

     if ($request->isMethod('POST')) {
      
        $formData = $request->request->all();

        $message->setContenu($formData['contenu']);
     
       
        $selectedRoomId = (int) $formData['combobox'];
        $selectedUserId = (int)$formData['comboboxu'];
       

       
       

        $user = $userRepository->find($selectedUserId);
        $room = $roomRepository->find($selectedRoomId);
    
    
       
    $message->setSenderMsg($selectedUserId);
    $message->setRoom($room);
   

    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->persist($message);
    $entityManager->flush();
   
        // Add a flash message to indicate success
        $this->addFlash('success', 'Room added successfully.');

        // Redirect to a different route after successful submission
        //return $this->redirectToRoute('addmsg');
    }
    // Render the template and pass the Room entity and formation choices to it
    //return $this->render('Back/addmsg.html.twig', [
        $messages = $this->getDoctrine()->getRepository(Message::class)->findAll();
        return $this->render('msg/listmsg.html.twig', [
            'messages' => $messages,
        
        'rooms' => $rooms,
        'msgs' => $msg,
        'users' => $users,
    ]);
}
#[Route('/deletemsg/{id}', name: 'deletemsg')]
    public function deleteRoom($id, MessageRepository $msgRepository): Response
    {
        // Retrieve the room entity to delete
        $msg = $msgRepository->find($id);
        if (!$msg) {
            throw $this->createNotFoundException('message not found');
        }

        // Get the EntityManager
        $entityManager = $this->getDoctrine()->getManager();

        // Remove the room entity
        $entityManager->remove($msg);
        $entityManager->flush();

        // Add a flash message to indicate success
        $this->addFlash('success', 'msg deleted successfully.');

        // Redirect to a different route after successful deletion
        return $this->redirectToRoute('success_route_name');
    }
    
}
