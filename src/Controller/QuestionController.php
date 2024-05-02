<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Quiz;
use App\Form\QuestionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/question')]
class QuestionController extends AbstractController
{
     #[Route('/{idQuiz}', name: 'app_question_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, int $idQuiz): Response
    {
        // Fetching questions for a specific quiz using quizId
        $questions = $entityManager->getRepository(Question::class)->findBy(['quizId' => $idQuiz]);

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
            'idQuiz' => $idQuiz
        ]);
    }

    #[Route('/new/{idQuiz}', name: 'app_question_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, int $idQuiz): Response
{
    $question = new Question();
    $form = $this->createForm(QuestionType::class, $question);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Ensure the question is associated with the correct quiz
        $quiz = $entityManager->getRepository(Quiz::class)->find($idQuiz);
        if (!$quiz) {
            // Handle the error appropriately if the quiz is not found
            throw $this->createNotFoundException("Quiz not found for id {$idQuiz}");
        }

        // Associate the question with the quiz
        $question->setQuizId($quiz->getIdQuiz());

        $entityManager->persist($question);
        $entityManager->flush();

        // Redirect correctly using the route parameters
        return $this->redirectToRoute('app_question_index', ['idQuiz' => $idQuiz], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('question/new.html.twig', [
        'question' => $question,
        'form' => $form,
        'idQuiz' => $idQuiz  // Pass the quiz ID to the template for potential use
    ]);
}

    #[Route('/{idQuest}', name: 'app_question_show', methods: ['GET'])]
    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    #[Route('/{idQuest}/edit/{idQuiz}', name: 'app_question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question,int $idQuiz, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_question_index', ['idQuiz'=>$idQuiz], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question/edit.html.twig', [
            'question' => $question,
            'form' => $form,
            'idQuiz' => $idQuiz
        ]);
    }

    #[Route('/{idQuest}/{idQuiz}', name: 'app_question_delete', methods: ['POST'])]
    public function delete(Request $request, Question $question,int $idQuiz, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getIdQuest(), $request->request->get('_token'))) {
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_question_index', ['idQuiz'=>$idQuiz], Response::HTTP_SEE_OTHER);
    }
}
