<?php

namespace App\Controller;

use App\Entity\Evenement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use TCPDF;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
class PdfController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/pdf-events", name="app_pdf_events")
     */
    public function generateEventsPdf(): Response
    {
        $events = $this->entityManager->getRepository(Evenement::class)->findAll();

        // Create a new TCPDF instance with A3 page format
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A3', true, 'UTF-8', false);

        // Set PDF metadata
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Liste des événements');
        $pdf->SetSubject('Liste des événements');
        $pdf->SetKeywords('PDF, events, Symfony');

        // Add a page
        $pdf->AddPage();

        // Define starting position of the table at the top of the page
        $startY = 20; // Y position

        // Cell dimensions for the table
        $cellHeight = 5; // Height of each cell
        $fontSize = 8; // Font size

        // Set column headers
        $pdf->setFillColor(255, 255, 255); // Background color
        $pdf->SetFont('Helvetica', 'B', $fontSize); // Font and style

        // Add a title
        $pdf->Cell(0, 20, 'Liste des événements', 0, 1, 'C'); // Centered title with spacing below

        // Column names
        $columnNames = [
            'ID',
            'Nom',
            'Date de l\'événement',
            'Heure de début',
            'Prix',
            'Nombre de participants',
            'Lieu',
            'Image'
        ];

        // Column widths
        $colWidths = [
            10, // ID
            40, // Nom
            30, // Date de l'événement
            25, // Heure de début
            20, // Prix
            25, // Nombre de participants
            30, // Lieu
            40  // Image
        ];

        // Add column names to PDF
        $x = 1; // Starting X position, shift left
        foreach ($columnNames as $index => $columnName) {
            if (array_key_exists($index, $colWidths)) {
                $pdf->SetXY($x, $startY + 10); // Shift down for title
                $pdf->Cell($colWidths[$index], $cellHeight, $columnName, 1, 0, 'C', true);
                $x += $colWidths[$index]; // Update X position for next column
            } else {
                $pdf->Cell(1, $cellHeight, $columnName, 1, 0, 'C', true); // Use default width of 10 for undefined columns
                $x += 1; // Update X position for next column
            }
        }
        $pdf->Ln(); // Move to next line

        // Add content to PDF
        $pdf->SetFont('Helvetica', '', 6); // Font and style for data
        foreach ($events as $event) {
            // Event data
            $data = [
                $event->getIdEvent(),
                $event->getNomEvent(),
                $event->getDateEvent() ? $event->getDateEvent()->format('Y-m-d') : '',
                $event->getHeureDeb() ? $event->getHeureDeb()->format('H:i') : '',
                $event->getPrix(),
                $event->getNbrP(),
                $event->getLieu(),
                $event->getImageEvent()
            ];

            // Add data to PDF
            $x = 1; // Starting X position, shift left
            foreach ($data as $index => $datum) {
                if (array_key_exists($index, $colWidths)) {
                    $pdf->SetXY($x, $pdf->GetY());
                    $pdf->Cell($colWidths[$index], $cellHeight, $datum, 1, 0, 'C');
                    $x += $colWidths[$index]; // Update X position for next column
                } else {
                    $pdf->Cell(1, $cellHeight, $datum, 1, 0, 'C'); // Use default width of 10 for undefined columns
                    $x += 1; // Update X position for next column
                }
            }
            $pdf->Ln(); // Move to next line after each data row
        }

        // Output PDF as a file (you can also use other output methods)
        $pdf->Output('liste_evenements.pdf', 'D');

        // Return a Symfony response
        return new Response();
    }
    /**
 * @Route("/event/{id}/generate-pdf", name="generate_event_pdf")
 */
public function generateEventPdf(int $id): Response
{
    // Fetch event details based on the provided ID
    $event = $this->getDoctrine()->getRepository(Evenement::class)->find($id);

    if (!$event) {
        throw $this->createNotFoundException('Event not found');
    }

    // Create a new TCPDF instance with A4 page format
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    // Set PDF metadata
    $pdf->SetCreator('Your Name');
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Event Ticket: ' . $event->getNomEvent());
    $pdf->SetSubject('Event Ticket');
    $pdf->SetKeywords('PDF, event, ticket, Symfony');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

  

    // Add event details to PDF
    $pdf->Cell(0, 10, 'Event Ticket: ' . $event->getNomEvent(), 0, 1, 'C');
    $pdf->Ln(10);

    // Add user information (assuming you want to display the current user's name)
    
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->Cell(0, 10, 'Name : issam ' , 0, 1);
    $pdf->Ln(5);

    // Add event details
    $pdf->SetFont('helvetica', '', 10);
    $pdf->Cell(0, 10, 'Event: ' . $event->getNomEvent(), 0, 1);
    $pdf->Cell(0, 10, 'Date: ' . $event->getDateEvent()->format('Y-m-d'), 0, 1);
    $pdf->Cell(0, 10, 'Time: ' . $event->getHeureDeb()->format('H:i'), 0, 1);
    $pdf->Cell(0, 10, 'Location: ' . $event->getLieu(), 0, 1);

    // Add image of the event (assuming 'imageEvent' is the property containing the image filename)
    if ($event->getImageEvent()) {
        $imagePath = $this->getParameter('app.path.product_images') . '/' . $event->getImageEvent();
        if (file_exists($imagePath)) {
            $pdf->Image($imagePath, 70, 100, 70, 0, '', '', '', false, 300);
        }
    }

    // Set custom styles/colors
    $pdf->SetFillColor(255, 191, 0); // Yellow close to orange
    $pdf->SetDrawColor(0, 0, 255); // Blue

    // Output PDF content as a response for download
    $pdfContent = $pdf->Output('event_ticket.pdf', 'S'); // Get PDF content as string
    $response = new Response($pdfContent);

    // Set headers to force download
    $disposition = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, 'event_ticket.pdf');
    $response->headers->set('Content-Type', 'application/pdf');
    $response->headers->set('Content-Disposition', $disposition);

    return $response;
}

}