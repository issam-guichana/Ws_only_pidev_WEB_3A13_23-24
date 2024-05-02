<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use App\Repository\RoomRepository;
use App\Repository\UserFormRoomRepository;

use App\Entity\UserFormRoom;

use App\Entity\Room;

use App\Entity\Formation;
use App\Entity\User;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use App\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Controller\Filter\OffensiveLanguageFilter;
use BotMan\BotMan\BotMan;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Message\EmailMessage;
use Symfony\Component\Mime\Email;
use Symfony\Component\Notifier\Recipient\Recipient;
use Symfony\Component\Notifier\Notification\Notification;
use App\Notification\CustomEmailNotification;







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

    private function validateEntities(Message $msg): array
    {
        $errors = [];

        
        // Validate Room entity
        $msgErrors = $this->validator->validate($msg);
        foreach ($msgErrors as $error) {
            $errors['contenu'] = $error->getMessage(); 
        }

        return $errors;
    }

    #[Route('/listmsg', name: 'listmsg')]
    public function listmsg(Request $request, ManagerRegistry $mr, RoomRepository $roomRepository, UserRepository $userRepository, MessageRepository $messageRepository): Response
   {

     $rooms = $roomRepository->findAll();

           return $this->render('room/listroomF.html.twig', [
            'rooms' => $rooms,
           ]);
   }
   #[Route('/emj', name: 'emj')]
   public function emj( ): Response
  {
    return $this->render('msg/emoji.html.twig');
  }

  private $customEmailNotification;

 
  public function __construct(private ValidatorInterface $validator, CustomEmailNotification $customEmailNotification)
  {
    $this->customEmailNotification = $customEmailNotification;

  }


    #[Route('/addmsg/{id}', name: 'addmsg')]
    public function addmsg(UserFormRoomRepository $UserFormRoomRepository,$id,Request $request, ManagerRegistry $mr,
     RoomRepository $roomRepository, UserRepository $userRepository, MessageRepository $messageRepository,  OffensiveLanguageFilter $offensiveLanguageFilter): Response
   {
    $msg = $this->getDoctrine()->getRepository(Message::class)->findAll();
    //$messages= $messageRepository->find($id);
    $room = $roomRepository->find($id);
    $roomname=$room->getNomRoom();
    $this->userformroomRepository = $UserFormRoomRepository;
    //= $this->getDoctrine()->getRepository(Message::class)->findAll();
    $messages = $messageRepository->findBy(['room' => $room]);
    foreach ($messages as $message) {
        if ($message->getStatus() === "Supprimer") {
            $message->setContenu("ce message a été supprimé");
        }
    }

    $participants = $this->getDoctrine()->getRepository(UserFormRoom::class)->findBy(['room' => $id]);


    $rooms = $roomRepository->findAll();
    $users = $userRepository->findAll();

    $message = new Message();


    //chatbot 

    

    // Define the chatbot's response to specific triggers
    //$botman->hears('I want more', function (BotMan $bot) {
      //  $bot->reply('Hey! Here are some suggestions...');
        // Implement logic to retrieve and display common messages
        // For now, let's just reply with a sample suggestion
        //$bot->reply('This is a sample suggestion.');
    //});
     if ($request->isMethod('POST')) {
      
        $formData = $request->request->all();
        $message->setContenu($formData['contenu']);
          // Check if the message contains the trigger words
          if (strpos($message->getContenu(), 'Monsieur') !== false || strpos($message->getContenu(), 'Aidez-moi svp') !== false) {
            //$receiver="rahmasakkat@gmail.com";
        // $message = "Bien recu";
        $receiver = $this->userformroomRepository->findByRoomIdAndUserRole($id);

        if ($receiver !== null) {
            $user = $receiver->getUser(); // Assuming there's a 'getUser' method in UserFormRoom entity to retrieve the associated User entity
            if ($user !== null) {
                $recipientEmail = $user->getEmail(); // Assuming there's an 'getEmail' method in User entity to retrieve the email address
                // Call the sendEmailNotification method with the email address of the recipient
                $this->customEmailNotification->sendEmailNotification($recipientEmail, '[Nouveau message]', '../src/Notification/New Template.html');
            } else {
                // Handle the case when the user is not found
            }
        } else {
            // Handle the case when the recipient is not found
        }
    }        

       // $selectedRoomId = (int) $formData['combobox'];
        //$selectedUserId = (int)$formData['comboboxu'];
        //$user = $userRepository->find($selectedUserId);
        //$room = $roomRepository->find($selectedRoomId);   
    //$message->setSenderMsg($selectedUserId);
    $message->setRoom($room);
     $content = $request->request->get('contenu');
     // Filter the message content for offensive language
     $filteredContent = $offensiveLanguageFilter->filter($content);

     // Set the filtered message content
     $message->setContenu($filteredContent);
        // Validate entities
        $errors = $this->validateEntities($message);






        if (count($errors) === 0) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();

            // Send email notification
          //  $receiver = $message->getIdUser()->getEmail();
        //  $customEmailNotification = new CustomEmailNotification();
         
          //  $this->customEmailNotification->sendEmailNotification("firasdhmaid@gmail.com", '[Nouvelle réclamation]', 'Une nouvelle réclamation a été ajoutée'.$message);

            // Add a flash message to indicate success
            $this->addFlash('success', 'Message added successfully.');
        }
    }

   
    return $this->render('msg/listmsg.html.twig', [
        'messages' => $messages,
        'roomname' => $roomname,
        'participants' => $participants,
        'rooms' => $rooms,
        'msgs' => $msg,
        'users' => $users,
        'errors' => $errors ?? [],
    ]);
}


//public function __construct()
//{
//}
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
