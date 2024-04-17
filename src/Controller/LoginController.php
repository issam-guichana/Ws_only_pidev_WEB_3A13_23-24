<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    public function login(AuthenticationUtils $authenticationUtils): Response
{    
    // Check if the user is authenticated
   
        // Check if the user is already authenticated
        if ($this->getUser()) {
            return $this->redirectToRoute('homepage');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('Front/logintest.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }



    #[Route('/login_check', name: 'login_check')]
    public function loginCheck(): Response
    {
        // This method will be handled by Symfony's security component
        // You don't need to implement logic here
    }
}
