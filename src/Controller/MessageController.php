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
        return $this->redirectToRoute('success_route_name');
    }
    // Render the template and pass the Room entity and formation choices to it
    return $this->render('Back/addmsg.html.twig', [
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
