<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
#[Route('/evenement')]
class EvenementController extends AbstractController
{
    #[Route('/', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }
    #[Route('/search', name: 'app_evenement_search', methods: ['GET'])]
public function search(Request $request, EntityManagerInterface $entityManager): Response
{
    $searchText = $request->query->get('search');

    // Fetch filtered events based on search text
    $evenements = $entityManager
        ->getRepository(Evenement::class)
        ->createQueryBuilder('e')
        ->where('e.nomEvent LIKE :search')
        ->orWhere('e.description LIKE :search')
        ->orWhere('e.dateEvent LIKE :search')
        ->setParameter('search', '%' . $searchText . '%')
        ->getQuery()
        ->getResult();

    // Return a JSON response with the filtered events
    $serializedEvenements = [];
    foreach ($evenements as $evenement) {
        $serializedEvenements[] = [
            'nomEvent' => $evenement->getNomEvent(),
            'description' => $evenement->getDescription(),
            'dateEvent' => $evenement->getDateEvent() ? $evenement->getDateEvent()->format('Y-m-d') : null,
            'heureDeb' => $evenement->getHeureDeb() ? $evenement->getHeureDeb()->format('H:i:s') : null,
            'prix' => $evenement->getPrix(),
            'nbrp' => $evenement->getNbrp(),
            'lieu' => $evenement->getLieu(),
            'imageEvent' => $evenement->getImageEvent(),
            'idEvent' => $evenement->getIdEvent(),
        ];
    }

    return new JsonResponse([
        'evenements' => $serializedEvenements,
    ]);
}
    
    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageEvent')->getData();
    
            if ($imageFile) {
                $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();
    
                try {
                    // Move the uploaded file to the configured directory
                    $imageFile->move(
                        $this->getParameter('app.path.product_images'),
                        $newFilename
                    );
    
                    // Set the image filename on the Evenement entity
                    $evenement->setImageEvent($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload the image.');
                    return $this->redirectToRoute('app_evenement_new');
                }
            }
    
            // Persist the Evenement entity
            $entityManager->persist($evenement);
            $entityManager->flush();
    
            // Flash message for success
            $this->addFlash('success', 'Evenement created successfully.');
    
            // Redirect to the index page or another route after successful creation
            return $this->redirectToRoute('app_evenement_index');
        }
    
        // Render the new Evenement form
        return $this->render('evenement/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

 /**
     * @Route("/show/{idEvent}", name="app_evenement_show")
     */
    #[Route('/{idEvent}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        // Retrieve related UsrEvt entities for the given Evenement
        $usrEvts = $this->getDoctrine()->getRepository('App\Entity\UsrEvt')->findBy(['event' => $evenement]);

        return $this->render('usr_evt/index.html.twig', [
            'evenement' => $evenement,
            'usr_evts' => $usrEvts,
        ]);
    }

    /**
     * @Route("/edit/{idEvent}", name="app_evenement_edit")
     */

    #[Route('/{idEvent}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(EvenementType::class, $evenement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('imageEvent')->getData();

        if ($imageFile) {
            // Generate a unique filename
            $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();

            try {
                // Move the file to the upload directory
                $imageFile->move(
                    $this->getParameter('app.path.product_images'),
                    $newFilename
                );

                // Set the new image filename on the Evenement entity
                $evenement->setImageEvent($newFilename);
            } catch (FileException $e) {
                // Handle file upload error
                $this->addFlash('error', 'Failed to upload the image.');
                return $this->redirectToRoute('app_evenement_edit', ['idEvent' => $evenement->getIdEvent()]); // Redirect back to edit form
            }
        }

        // Persist changes to the Evenement entity
        $entityManager->flush();

        // Redirect to the index page after successful edit
        return $this->redirectToRoute('app_evenement_index');
    }

    // Render the edit Evenement form
    return $this->render('evenement/edit.html.twig', [
        'evenement' => $evenement,
        'form' => $form->createView(),
    ]);
}


    #[Route('/{idEvent}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }
}
