<?php

namespace App\Controller;
use Symfony\Component\Mailer\MailerInterface;
use App\Entity\Quiz;
use App\Form\QuizType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\AbstractPart;
use Symfony\Component\Mime\Part\DataPart;
use Dompdf\Dompdf;


#[Route('/quiz')]
class QuizController extends AbstractController
{
    #[Route('/', name: 'app_quiz_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $quizzes = $entityManager
            ->getRepository(Quiz::class)
            ->findAll();

        return $this->render('quiz/index.html.twig', [
            'quizzes' => $quizzes,
        ]);
    }

    #[Route('/new', name: 'app_quiz_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $quiz = new Quiz();
        $form = $this->createForm(QuizType::class, $quiz);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('imageFile')->getData();
    
            if ($file) {
                $targetDirectory = 'img'; // Just the directory name under 'public'
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
    
                try {
                    // Move the file to the directory (relative to the public directory)
                    $file->move($this->getParameter('kernel.project_dir') . '/public/' . $targetDirectory, $newFilename);
                    // Store the relative path
                    $quiz->setImage($targetDirectory . '/' . $newFilename);
                } catch (FileException $e) {
                    // Handle exception if something happens during file upload
                }
            }
    
            $entityManager->persist($quiz);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_quiz_index');
        }
    
        return $this->renderForm('quiz/new.html.twig', [
            'quiz' => $quiz,
            'form' => $form,
        ]);
    }

    #[Route('/{idQuiz}', name: 'app_quiz_show', methods: ['GET'])]
    public function show(Quiz $quiz): Response
    {
        return $this->render('quiz/show.html.twig', [
            'quiz' => $quiz,
        ]);
    }

    #[Route('/{idQuiz}/edit', name: 'app_quiz_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        $originalImage = $quiz->getImage(); // Store the original image path
    $form = $this->createForm(QuizType::class, $quiz);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $file */
        $file = $form->get('imageFile')->getData(); // Make sure 'imageFile' is correctly configured in your form type

        if ($file) {
            $targetDirectory = 'img'; // Just the directory name under 'public'
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

            try {
                // Move the file to the directory (relative to the public directory)
                $file->move($this->getParameter('kernel.project_dir') . '/public/' . $targetDirectory, $newFilename);
                // Store the relative path
                $quiz->setImage($targetDirectory . '/' . $newFilename);
            } catch (FileException $e) {
                // Handle exception if something happens during file upload
            }
        }

        $entityManager->persist($quiz);
            $entityManager->flush();

        return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('quiz/edit.html.twig', [
        'quiz' => $quiz,
        'form' => $form,
    ]);
    }

    #[Route('/{idQuiz}', name: 'app_quiz_delete', methods: ['POST'])]
    public function delete(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quiz->getIdQuiz(), $request->request->get('_token'))) {
            $entityManager->remove($quiz);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/send-email/send', name: 'send_email_action', methods: ['GET', 'POST'])]
    public function sendEmail(MailerInterface $mailer): Response
    {
        // Render the HTML content from the Twig template
        $htmlContent = $this->renderView('quiz/pdf.html.twig', [
            'quizzes' => $this->getDoctrine()->getRepository(Quiz::class)->findAll(),
        ]);
    
        // Create a new instance of Dompdf
        $dompdf = new Dompdf();
    
        // Load the HTML content into Dompdf
        $dompdf->loadHtml($htmlContent);
    
        // (Optional) Configure Dompdf as needed
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the PDF
        $dompdf->render();
    
        // Get the generated PDF content
        $pdfContent = $dompdf->output();
    
        // Create an instance of Symfony's Email class
        $email = (new Email())
            ->from('sadok.mestiri@gmail.com')
            ->to('sadok.mestiri@gmail.com')
            ->subject('Quiz list')
            ->text('Voici la liste des quizes')
            ->attach($pdfContent, 'quiz_list.pdf', 'application/pdf'); // Attach the PDF content directly
    
        // Send the email
        $mailer->send($email);
    
        // Redirect to a page or return a response
        return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
    }
}
