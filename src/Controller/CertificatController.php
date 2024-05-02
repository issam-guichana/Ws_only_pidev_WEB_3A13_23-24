<?php

namespace App\Controller;

use App\Entity\Certificat;
use App\Form\CertificatType;
use App\Repository\CertificatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Snappy\Pdf;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Builder\BuilderInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Writer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use Stripe\PaymentIntent; // Add this line to import the PaymentIntent class
use Stripe\Stripe;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/certificat')]
class CertificatController extends AbstractController
{

    private $pdfService;

    #[Route('/', name: 'app_certificat_index', methods: ['GET'])]
public function index(EntityManagerInterface $entityManager): Response
{
    $certificats = $entityManager
        ->getRepository(Certificat::class)
        ->findAll();

    // Call the method to fetch certificate data for the chart
    $certificateData = $this->displayCertificatChart($entityManager);

    return $this->render('certificat/index.html.twig', [
        'certificats' => $certificats,
        'certificateData' => $certificateData // Pass certificate data to the template
    ]);
}


    public function __construct(Pdf $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    #[Route('/PDF', name: 'app_certificat_pdf', methods: ['GET'])]
    public function showCertificate(): Response
    {
        $qrCode = Builder::create()
        ->data('quizResultsUrl')
        ->size(150)
        ->margin(10)
        ->build();

    // Get the QR code as a data URL
    $qrCodeSrc = $qrCode->getDataUri();
        // Render the HTML content for the PDF
        $html = $this->renderView('certificat/PDF.html.twig', [
            'qrCodeImage' => $qrCodeSrc, // Pass the QR code image to the template
        ]);
        

        // Load the HTML into `dompdf` and render it as a PDF

        $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true); 

        $dompdf = new Dompdf($options); // Initialize Dompdf with appropriate options
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $pdfContent = $dompdf->output();

        // Define the filename
        $filename = 'certificat_' . uniqid() . '.pdf';

        // Return the PDF as a response
        return new Response(
            $pdfContent,
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"'
            ]
        );
    }
    
    #[Route("/payment", name:"certificat_payment")]
    public function processCertificatPayment(Request $request): Response
    {
        // Set your Stripe secret key

       
        \Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
    
        // Verify the reCAPTCHA token
        
 // Replace with your reCAPTCHA secret key from .env
        
    
        
        // Create a Stripe PaymentIntent
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => 100, // Amount in cents
            'currency' => 'usd',
        ]);
    
        return $this->render('certificat/payment_certificat.html.twig', [
             // Pass the recaptchaSiteKey variable to the template
            'clientSecret' => $paymentIntent->client_secret,
            'stripePublicKey' => $_ENV['STRIPE_PUBLIC_KEY'],
        ]);
    }
    


   

    #[Route('/certificatFront', name: 'app_certificatfront_index')]
    public function FrontAffichage(Request $request, PaginatorInterface $paginator): Response
    {
        $certificatsQuery = $this->getDoctrine()->getRepository(Certificat::class)->createQueryBuilder('c');
    
        // Use the paginator to paginate the query
        $certificats = $paginator->paginate(
            $certificatsQuery, // Query for results
            $request->query->getInt('page', 1), // Current page number
            2 // Number of items per page
        );
    
        return $this->render('certificat/front_certificat.html.twig', [
            'certificats' => $certificats,
        ]);
    }
    

    #[Route('/new', name: 'app_certificat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $certificat = new Certificat();
        $form = $this->createForm(CertificatType::class, $certificat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($certificat);
            $entityManager->flush();

            return $this->redirectToRoute('app_certificat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certificat/new.html.twig', [
            'certificat' => $certificat,
            'form' => $form,
        ]);
    }

    #[Route('/{idCertif}', name: 'app_certificat_show', methods: ['GET'])]
public function show(Certificat $certificat): Response
{
    return $this->render('certificat/show.html.twig', [
        'certificat' => $certificat,
    ]);
}

    #[Route('/{idCertif}/edit', name: 'app_certificat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Certificat $certificat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CertificatType::class, $certificat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_certificat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certificat/edit.html.twig', [
            'certificat' => $certificat,
            'form' => $form,
        ]);
    }


    public function displayCertificatChart(EntityManagerInterface $entityManager)
{
    $repository = $entityManager->getRepository(Certificat::class);

    // Fetch all certificats
    $certificats = $repository->findAll();

    // Initialize an array to hold monthly counts
    $monthlyCounts = [];

    // Count certificats for each month
    foreach ($certificats as $certificat) {
        $month = $certificat->getDateCertif()->format('F');
        
        // Increment the count for the month
        if (!isset($monthlyCounts[$month])) {
            $monthlyCounts[$month] = 1;
        } else {
            $monthlyCounts[$month]++;
        }
    }

    // Prepare data for Chart.js
    $data = [
        'labels' => array_keys($monthlyCounts),
        'data' => array_values($monthlyCounts)
    ];

    // Pass data to Twig template
    return $data;
}

    
   

    #[Route('/delete/{idCertif}', name: 'app_certificat_delete', methods: ['POST'])]
    public function delete($idCertif, EntityManagerInterface $entityManager, CertificatRepository $certificatRepository): Response
    {
        $certificat = $certificatRepository->find($idCertif);
        if (!$certificat) {
            throw $this->createNotFoundException('Certificat not found');
        }

     

        // Remove the certificat entity
        $entityManager->remove($certificat);
        $entityManager->flush();

        $this->addFlash('success', 'Certificat deleted successfully.');

        return $this->redirectToRoute('app_certificat_index');
    }


    

    
}
