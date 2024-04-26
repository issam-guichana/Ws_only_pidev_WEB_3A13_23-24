<?php

namespace App\Controller;

use App\Entity\Evenement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;

class EvenementCsvController extends AbstractController
{
    #[Route('/export-evenements-csv', name: 'export_evenements_csv')]
    public function exportEvenementsCsv(EntityManagerInterface $entityManager): Response
    {
        // Retrieve all Evenement entities
        $evenements = $entityManager->getRepository(Evenement::class)->findAll();

        // Generate the CSV content
        $csvContent = "ID,Description,Date Event,Heure Debut,Prix,Nom Event,NbrP,Lieu\n";
        foreach ($evenements as $evenement) {
            $csvContent .= "{$evenement->getIdEvent()},{$evenement->getDescription()},{$evenement->getDateEvent()->format('Y-m-d')},";
            $csvContent .= "{$evenement->getHeureDeb()->format('H:i')},{$evenement->getPrix()},{$evenement->getNomEvent()},";
            $csvContent .= "{$evenement->getNbrP()},{$evenement->getLieu()}\n";
        }

        // Set the response headers to force a download
        $response = new StreamedResponse(function () use ($csvContent) {
            $handle = fopen('php://output', 'wb');
            fwrite($handle, $csvContent);
            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="evenements.csv"');

        return $response;
    }
}