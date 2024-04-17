<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/Front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('Front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
