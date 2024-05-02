<?php

namespace App\Controller;
use App\Entity\Evenement;
use App\Entity\UsrEvt;
use App\Entity\User; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Twilio\Rest\Client;
use App\Form\PhoneNumberFormType;
use App\Form\VerificationCodeFormType;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Mpdf\Mpdf;

use Symfony\Component\Security\Core\Security;
class TestController extends AbstractController
{


   // #[Route('/workshop', name: 'app_test', methods: ['GET'])]
    //public function index2(): Response
    //{
       // return $this->render('test/base.html.twig');
    //}


   // #[Route('/workshop', name: 'app_index', methods: ['GET'])]
    //public function indexs(StudentRepository $studentRepository): Response
    //{
      //  return $this->render('base.html.twig');
    //}

    #[Route('/test2', name: 'app_web')]
    public function index2(): Response
    {
        return $this->render('Front/test.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('Front/base.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/index.html.twig', name: 'app_indes')]
    public function indexhome(): Response
    {
        return $this->render('Front/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/about.html.twig', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('Front/about.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/courses.html.twig', name: 'app_courses')]
    public function courses(): Response
    {
        return $this->render('Front/courses.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/scholarship.html.twig', name: 'app_scholarship')]
    public function scholarship(): Response
    {
        return $this->render('Front/scholarship.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/blog.html.twig', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('Front/blog.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/blog-single.html.twig', name: 'app_blog-single')]
    public function blogsing(): Response
    {
        return $this->render('Front/blog-single.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/contact.html.twig', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('Front/contact.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/course-single.html.twig', name: 'app_cs')]
    public function coursesingle(): Response
    {
        return $this->render('Front/course-single.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/event/{idEvent}', name: 'app_es')]
public function eventsingle(Request $request, EntityManagerInterface $entityManager, int $idEvent): Response
{
    // Retrieve the Evenement entity by its idEvent
    $evenement = $entityManager->getRepository(Evenement::class)->find($idEvent);

    if (!$evenement) {
        throw $this->createNotFoundException('Event not found');
    }

    return $this->render('front/event-single.html.twig', [
        'event' => $evenement,
    ]);
}
    #[Route('/events.html.twig', name: 'app_events')]
    public function events(EntityManagerInterface $entityManager): Response
    {
        $evenements = $entityManager
        ->getRepository(Evenement::class)
        ->findAll();

    return $this->render('Front/events.html.twig', [
        'evenements' => $evenements,
    ]);
        
    }
    #[Route('/notice-single.html.twig', name: 'app_notices')]
    public function notices(): Response
    {
        return $this->render('Front/notice-single.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/notice.html.twig', name: 'app_notice')]
    public function notice(): Response
    {
        return $this->render('Front/notice.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/research.html.twig', name: 'app_search')]
    public function research(): Response
    {
        return $this->render('Front/research.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/teacher-single.html.twig', name: 'app_ts')]
    public function ts(): Response
    {
        return $this->render('Front/teacher-single.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/teacher.html.twig', name: 'app_teacher')]
    public function teacher(): Response
    {
        return $this->render('Front/teacher.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }


    //admin template 
    #[Route('/admin', name: 'app_admin')]
    public function aboutadmin(): Response
    {
        return $this->render('Back/admin.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/indexadmin', name: 'app_indexadmin')]
    public function indexadmin(): Response
    {
        return $this->render('Back/indexadmin.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/pages-profile.html.twig', name: 'app_admin2')]
    public function aboutadmin2(): Response
    {
        return $this->render('Back/pages-profile.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/pages-sign-in.html.twig', name: 'app_admin3')]
    public function aboutadmin3(): Response
    {
        return $this->render('Back/pages-sign-in.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/pages-sign-up.html.twig', name: 'app_admin4')]
    public function aboutadmin4(): Response
    {
        return $this->render('Back/pages-sign-up.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/charts-chartjs.html.twig', name: 'app_admin5')]
    public function aboutadmin5(): Response
    {
        return $this->render('Back/charts-chartjs.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/icons-feather.html.twig', name: 'app_admin6')]
    public function aboutadmin6(): Response
    {
        return $this->render('Back/icons-feather.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/index.html.twig', name: 'app_admin7')]
    public function aboutadmin7(): Response
    {
        return $this->render('Back/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/maps-google.html.twig', name: 'app_admin8')]
    public function aboutadmin8(): Response
    {
        return $this->render('Back/maps-google.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/pages-blank.html.twig', name: 'app_admin9')]
    public function aboutadmin9(): Response
    {
        return $this->render('Back/pages-blank.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/ui-buttons.html.twig', name: 'app_admin10')]
    public function aboutadmin10(): Response
    {
        return $this->render('Back/ui-buttons.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/ui-cards.html.twig', name: 'app_admin11')]
    public function aboutadmin11(): Response
    {
        return $this->render('Back/ui-cards.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/ui-forms.html.twig', name: 'app_admin12')]
    public function aboutadmin12(): Response
    {
        return $this->render('Back/ui-forms.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/ui-typography.html.twig', name: 'app_admin13')]
    public function aboutadmin13(): Response
    {
        return $this->render('Back/ui-typography.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/upgrade-to-pro.html.twig', name: 'app_admin14')]
    public function aboutadmin14(): Response
    {
        return $this->render('Back/upgrade-to-pro.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/search', name: 'app_search', methods: ['GET'])]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        $eventName = $request->query->get('eventName');
        $startDate = $request->query->get('startDate');
        $endDate = $request->query->get('endDate');

        // Start building the DQL query
        $qb = $entityManager->createQueryBuilder();
        $qb->select('e')
            ->from('App\Entity\Evenement', 'e');

        // Apply filters based on user input
        if ($eventName) {
            $qb->andWhere('e.nomEvent LIKE :eventName')
               ->setParameter('eventName', '%'.$eventName.'%');
        }

        if ($startDate) {
            $qb->andWhere('e.dateEvent >= :startDate')
               ->setParameter('startDate', new \DateTime($startDate));
        }

        if ($endDate) {
            $qb->andWhere('e.dateEvent <= :endDate')
               ->setParameter('endDate', new \DateTime($endDate));
        }

        // Execute the query
        $query = $qb->getQuery();
        $results = $query->getResult();

        return $this->render('Front/events.html.twig', [
            'evenements' => $results,
            'controller_name' => 'TestController',
        ]);
    }
/**
 * @Route("/event/{id}/apply", name="apply_event")
 */
public function applyEvent(Request $request, int $id, Client $twilioClient): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $event = $entityManager->getRepository(Evenement::class)->find($id);

    if (!$event) {
        throw $this->createNotFoundException('Event not found');
    }

    $phoneNumberForm = $this->createForm(PhoneNumberFormType::class);
    $phoneNumberForm->handleRequest($request);

    if ($phoneNumberForm->isSubmitted() && $phoneNumberForm->isValid()) {
        $phoneNumber = $phoneNumberForm->get('phoneNumber')->getData();

        // Ensure phone number starts with country code (+216)
        $formattedPhoneNumber = $this->formatPhoneNumber($phoneNumber);

        // Generate verification code
        $verificationCode = mt_rand(1000, 9999);

        // Store verification code in session
        $this->get('session')->set('verification_code', $verificationCode);

        try {
            // Send SMS using Twilio
            $twilioClient->messages->create(
                $formattedPhoneNumber,
                [
                    'from' => $_ENV['TWILIO_PHONE_NUMBER'],
                    'body' => "Your verification code for {$event->getNomEvent()} event is: $verificationCode"
                ]
            );

            // Redirect to verify code page
            return $this->redirectToRoute('verify_event_code', ['id' => $id]);
        } catch (\Exception $e) {
            // Handle Twilio API exception
            $this->addFlash('error', 'Failed to send verification code. Please try again later.');
        }
    }

    return $this->render('Front/apply.html.twig', [
        'event' => $event,
        'phoneNumberForm' => $phoneNumberForm->createView(),
    ]);
}

/**
 * Prefixes the given phone number with country code +216 if not already present.
 *
 * @param string $phoneNumber
 * @return string
 */
private function formatPhoneNumber(string $phoneNumber): string
{
    // Remove any non-numeric characters from the phone number
    $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

    // Check if the phone number already starts with +216
    if (strpos($phoneNumber, '+216') !== 0) {
        // Prepend +216 to the phone number
        $phoneNumber = '+216' . ltrim($phoneNumber, '0');
    }

    return $phoneNumber;
}


   /**
 * @Route("/event/{id}/verify", name="verify_event_code")
 */
public function verifyEventCode(Request $request, int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $event = $entityManager->getRepository(Evenement::class)->find($id);

    if (!$event) {
        throw $this->createNotFoundException('Event not found');
    }

    $verificationForm = $this->createForm(VerificationCodeFormType::class);
    $verificationForm->handleRequest($request);

    if ($verificationForm->isSubmitted() && $verificationForm->isValid()) {
        $enteredCode = $verificationForm->get('verificationCode')->getData();
        $storedCode = $this->get('session')->get('verification_code');

        if ($enteredCode == $storedCode) {
            // Code verified, proceed to payment
            return $this->redirectToRoute('stripe_payment', ['id' => $id]);
        } else {
            $this->addFlash('error', 'Invalid verification code. Please try again.');
        }
    }

    return $this->render('Front/verify_code.html.twig', [
        'event' => $event,
        'verificationForm' => $verificationForm->createView(),
    ]);
}
   /**
     * @Route("/event/{id}/payment", name="stripe_payment")
     */
    public function processStripePayment(int $id, Request $request): Response
    {
        // Hardcoded username (for testing purposes only)
        $defaultUsername = 'issam';

        // Get the repository for the User entity
        $userRepository = $this->getDoctrine()->getRepository(User::class);

        // Find the user by username
        $defaultUser = $userRepository->findOneBy(['username' => $defaultUsername]);

        if (!$defaultUser) {
            throw $this->createNotFoundException('Default user not found');
        }

        // Get the event by ID
        $event = $this->getDoctrine()->getRepository(Evenement::class)->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Event not found');
        }

        // Set your Stripe secret key
        \Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

        // Create a Stripe PaymentIntent (assuming you have a price or amount set for the event)
        $paymentIntent = PaymentIntent::create([
            'amount' => $event->getPrix() * 100, // Amount in cents
            'currency' => 'usd', // Currency code
            // Add more options as needed (e.g., metadata, description)
        ]);

        // Create and persist UsrEvt entity to associate the default user with the event
        $usrEvt = new UsrEvt();
        $usrEvt->setUser($defaultUser); // Set the default user
        $usrEvt->setEvent($event);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($usrEvt);
        $entityManager->flush();

        // Render the payment form template with necessary data
        return $this->render('Front/payment.html.twig', [
            'event' => $event,
            'clientSecret' => $paymentIntent->client_secret,
            'stripePublicKey' => $_ENV['STRIPE_PUBLIC_KEY'],
        ]);
    }

/**
 * @Route("/event/{id}/success", name="success_page")
 */
public function successPage(int $id): Response
{
    // Fetch event details based on the provided ID, if needed
    $event = $this->getDoctrine()->getRepository(Evenement::class)->find($id);

    if (!$event) {
        throw $this->createNotFoundException('Event not found');
    }

    return $this->render('Front/success.html.twig', [
        'event' => $event,
    ]);
}
}
