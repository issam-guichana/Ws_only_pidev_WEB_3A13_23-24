<?php

namespace App\Controller;

use App\Entity\Certificat;
use App\Form\CertificatType;
use App\Repository\CertificatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/certificat')]
class CertificatController extends AbstractController
{
    #[Route('/', name: 'app_certificat_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $certificats = $entityManager
            ->getRepository(Certificat::class)
            ->findAll();

        return $this->render('certificat/index.html.twig', [
            'certificats' => $certificats,
        ]);
    }


     

    #[Route('/certificatFront', name: 'app_certificatfront_index')]
    public function FrontAffichage(): Response
    {
        $certificats = $this->getDoctrine()->getRepository(Certificat::class)->findAll();

        return $this->render('certificat/front_certificat.html.twig', [
            'certificats' => $certificats,
        ]);
    }
    

    #[Route('/new', name: 'app_certificat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $certificat = new Certificat();
        $form = $this->createForm(CertificatType::class, $certificat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($certificat);
            $entityManager->flush();

            return $this->redirectToRoute('app_certificat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certificat/new.html.twig', [
            'certificat' => $certificat,
            'form' => $form,
        ]);
    }

    #[Route('/{idCertif}', name: 'app_certificat_show', methods: ['GET'])]
public function show(Certificat $certificat): Response
{
    return $this->render('certificat/show.html.twig', [
        'certificat' => $certificat,
    ]);
}

    #[Route('/{idCertif}/edit', name: 'app_certificat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Certificat $certificat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CertificatType::class, $certificat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_certificat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certificat/edit.html.twig', [
            'certificat' => $certificat,
            'form' => $form,
        ]);
    }

   

    #[Route('/delete/{idCertif}', name: 'app_certificat_delete', methods: ['POST'])]
    public function delete($idCertif, EntityManagerInterface $entityManager, CertificatRepository $certificatRepository): Response
    {
        $certificat = $certificatRepository->find($idCertif);
        if (!$certificat) {
            throw $this->createNotFoundException('Certificat not found');
        }

     

        // Remove the certificat entity
        $entityManager->remove($certificat);
        $entityManager->flush();

        $this->addFlash('success', 'Certificat deleted successfully.');

        return $this->redirectToRoute('app_certificat_index');
    }


    

    
}
