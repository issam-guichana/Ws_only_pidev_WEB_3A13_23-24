<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Quiz;
use App\Repository\QuizRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

    #[Route('/event-single.html.twig', name: 'app_es')]
    public function eventsingle(): Response
    {
        return $this->render('Front/event-single.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/events.html.twig', name: 'app_events')]
    public function events(): Response
    {
        return $this->render('Front/events.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/notice-single.html.twig', name: 'app_notices')]
    public function notices(): Response
    {
        return $this->render('Front/notice-single.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/quiz.html.twig', name: 'app_notice')]
    public function quiz(): Response
    {
         // Get the Doctrine EntityManager
         $entityManager = $this->getDoctrine()->getManager();

         // Get all quizzes from the database
         $quizzes = $entityManager->getRepository(Quiz::class)->findAll();
 
         // Render the template and pass the quizzes variable
         return $this->render('Front/quiz.html.twig', [
             'quizzes' => $quizzes,
         ]);
    }
    #[Route('/questions.html.twig/{id}', name: 'app_questions')]
    public function questions(int $id): Response
    {
       // Fetch the quiz from the database using the provided ID
       $quiz = $this->getDoctrine()->getRepository(Quiz::class)->find($id);

       // Fetch questions related to the quiz
       $questions = $this->getDoctrine()->getRepository(Question::class)->findBy(['quizId' => $id]);

       // Render the template with the quiz and questions
       return $this->render('Front/questions.html.twig', [
           'quiz' => $quiz,
           'questions' => $questions,
       ]);
    }
    #[Route('/research.html.twig', name: 'app_search')]
    public function search(): Response
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
    #[Route('/search', name: 'app_search')]
    public function recherche(Request $request, QuizRepository $quizRepository): Response
    {
        $searchTerm = $request->query->get('search');
    
        // Call the custom method defined in the QuizRepository to search for quizzes
        $searchResults = $quizRepository->findBySearchTerm($searchTerm);
    
        return $this->render('Front/quiz.html.twig', [
            'quizzes' => $searchResults,
        ]);
    }
}
