<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExportTextFileController extends AbstractController
{
    #[Route('/csv', name: 'app_csv')]
    public function downloadCsv(EntityManagerInterface $entityManager): Response
    {
        // Récupérer les utilisateurs ayant le rôle "CLIENT" et le statut "Actif"
        $users = $entityManager->getRepository(User::class)->findAll();

        // Générer le contenu CSV
        $csvContent = "ID - Nom d'utilisateur - Email - Age - Genre - Status - Role\n";
        $csvContent .= "─────────────────────────────────────────────────────────────\n"; // Unicode line separator
        foreach ($users as $user) {
            $csvContent .= "{$user->getIdUser()} - ";
            $csvContent .= "{$user->getUsername()} - ";
            $csvContent .= "{$user->getEmail()} - ";
            $csvContent .= "{$user->getAge()} - ";
            $csvContent .= "{$user->getGender()} - ";
            $csvContent .= "{$user->getStatus()} - ";
            $csvContent .= "{$user->getRole()}\n";
            $csvContent .= "-------------------------------------------------------------\n";
        }
        $csvContent .= "─────────────────────────────────────────────────────────────\n";

        // Créer une réponse HTTP avec le contenu CSV
        $response = new Response($csvContent);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="liste_des_utilisateurs.csv"');

        return $response;
    }
}
