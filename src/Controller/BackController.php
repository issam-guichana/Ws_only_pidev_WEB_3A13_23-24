<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    #[Route('/Back', name: 'app_back')]
    public function index(): Response
    {
        return $this->render('Back/indexadmin.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    #[Route('/Front', name: 'app_front')]
    public function index2(): Response
    {
        return $this->render('Front/base.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
}
