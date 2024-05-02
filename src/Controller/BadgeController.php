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
    public function index(BadgeRepository $badgeRepository): Response
    {
        // Obtenir le total des badges
        $totalBadges = $this->getTotalBadges($badgeRepository);

        // Obtenir le nom du top badge
        $topBadgeName = $this->getTopBadgeName($badgeRepository);

        $totalAssignedBadges = $this->getTotalAssignedBadges($badgeRepository);

        $totalAssignedUsers = $this->getTotalAssignedUsers($badgeRepository);



        // Récupérer tous les badges
        $badges = $badgeRepository->findAll();

        return $this->render('badge/index.html.twig', [
            'badges' => $badges,
            'totalBadges' => $totalBadges, 
            'topBadgeName' => $topBadgeName, 
            'TotalAssignedBadges'=> $totalAssignedBadges,
            'TotalAssignedUsers'=>$totalAssignedUsers,
        ]);
    }








    // Fonction indépendante pour obtenir le total des badges
    private function getTotalBadges(BadgeRepository $badgeRepository): int
    {
        return $badgeRepository->countTotalBadges();
    }

    // Fonction indépendante pour obtenir le nom du top badge
    private function getTopBadgeName(BadgeRepository $badgeRepository): ?string
    {
        return $badgeRepository->getTopBadgeName();
    }

    private function getTotalAssignedBadges(BadgeRepository $badgeRepository): ?string
    {
        return $badgeRepository->countTotalAssignedBadges();
    }

    private function getTotalAssignedUsers(BadgeRepository $badgeRepository): ?string
    {
        return $badgeRepository->countTotalAssignedUsers();
    }


    #[Route('/badgeFront', name: 'app_badgefront_index')]
    public function FrontAffichage(Request $request, EntityManagerInterface $entityManager): Response
    {
        $nomBadge = $request->query->get('nomBadge');
        $type = $request->query->get('type');

        // Start building the DQL query
        $qb = $entityManager->createQueryBuilder();
        $qb->select('b')
            ->from(Badge::class, 'b');

        // Apply filters based on user input
        if ($nomBadge) {
            $qb->andWhere('b.nomBadge LIKE :nomBadge')
                ->setParameter('nomBadge', '%' . $nomBadge . '%');
        }

        if ($type) {
            $qb->andWhere('b.type LIKE :type')
                ->setParameter('type', '%' . $type . '%');
        }

        // Execute the query
        $query = $qb->getQuery();
        $badges = $query->getResult();

        return $this->render('badge/front_badge.html.twig', [
            'badges' => $badges,
        ]);
    }

   

    
    #[Route('/new', name: 'app_badge_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $badge = new Badge(); // Corrected variable name
        $form = $this->createForm(BadgeType::class, $badge); // Corrected variable name
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imgBadge')->getData();
    
            if ($imageFile) {
                // Generate a unique filename
                $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();
    
                try {
                    // Move the file to the upload directory
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
    
                    // Set the image filename on the Badge entity
                    $badge->setImgBadge($newFilename);
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Failed to upload the image.');
                    return $this->redirectToRoute('app_badge_index'); // Redirect back to new form
                }
            }
    
            // Persist the entity
            $entityManager->persist($badge);
            $entityManager->flush();
    
            // Redirect to the index page after successful creation
            return $this->redirectToRoute('app_badge_index');
        }
    
        // Render the new Badge form
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
