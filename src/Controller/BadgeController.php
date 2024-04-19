<?php

namespace App\Controller;
use App\Repository\BadgeRepository;
use App\Entity\Badge;
use App\Form\BadgeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/badge')]
class BadgeController extends AbstractController
{
    #[Route('', name: 'app_badge_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $badges = $entityManager
            ->getRepository(Badge::class)
            ->findAll();

        return $this->render('badge/index.html.twig', [
            'badges' => $badges,
        ]);
    }

    

    #[Route('/new', name: 'app_badge_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $badge = new Badge();
        $form = $this->createForm(BadgeType::class, $badge);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle the image upload
            $imageFile = $form->get('imgBadge')->getData();
    
            if ($imageFile) {
                // If an image is provided
                // Generate a new unique filename for the image
                $newFilename = uniqid() . '.' . $imageFile->getClientOriginalExtension();
                // Move the uploaded file to the desired location
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
              // Set the new filename in the user entity
              $badge->setImgBadge($newFilename);
            }
            // else {
            //     // Set a default image or handle null image case
            //     $user->setImage('default_image.jpg'); // Replace 'default_image.jpg' with your default image filename
            // }
    
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($badge);
            $entityManager->flush();
    
            $this->addFlash('success', 'Badge added successfully.');
    
            return $this->redirectToRoute('app_badge_index');
        }
    
        return $this->render('badge/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

    
    #[Route('/delete/{id}', name: 'app_badge_delete', methods: ['POST'])]
    public function delete($id, EntityManagerInterface $entityManager, BadgeRepository $badgeRepository): Response
    {
        $badge = $badgeRepository->find($id);
        if (!$badge) {
            throw $this->createNotFoundException('Badge not found');
        }

     

        // Remove the Badge entity
        $entityManager->remove($badge);
        $entityManager->flush();

        $this->addFlash('success', 'Badge deleted successfully.');

        return $this->redirectToRoute('app_badge_index');
    }


    #[Route('/{id}/edit', name: 'app_Badge_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Badge $Badge, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BadgeType::class, $Badge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_badge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Badge/edit.html.twig', [
            'Badge' => $Badge,
            'form' => $form,
        ]);
    }
}
