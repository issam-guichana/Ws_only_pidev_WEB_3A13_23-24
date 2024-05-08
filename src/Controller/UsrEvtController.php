<?php

namespace App\Controller;

use App\Entity\UsrEvt;
use App\Form\UsrEvtType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/usr/evt')]
class UsrEvtController extends AbstractController
{
    #[Route('/', name: 'app_usr_evt_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $usrEvts = $entityManager
            ->getRepository(UsrEvt::class)
            ->findAll();

        return $this->render('usr_evt/index.html.twig', [
            'usr_evts' => $usrEvts,
        ]);
    }

    #[Route('/new', name: 'app_usr_evt_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $usrEvt = new UsrEvt();
        $form = $this->createForm(UsrEvtType::class, $usrEvt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($usrEvt);
            $entityManager->flush();

            return $this->redirectToRoute('app_usr_evt_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('usr_evt/new.html.twig', [
            'usr_evt' => $usrEvt,
            'form' => $form,
        ]);
    }

    #[Route('/{idUE}', name: 'app_usr_evt_show', methods: ['GET'])]
    public function show(UsrEvt $usrEvt): Response
    {
        return $this->render('usr_evt/show.html.twig', [
            'usr_evt' => $usrEvt,
        ]);
    }

    #[Route('/{idUE}/edit', name: 'app_usr_evt_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, int $idUE, EntityManagerInterface $entityManager): Response
{
    // Retrieve the UsrEvt entity by idUE
    $usrEvt = $entityManager->getRepository(UsrEvt::class)->find($idUE);

    if (!$usrEvt) {
        throw $this->createNotFoundException('UsrEvt not found');
    }

    $form = $this->createForm(UsrEvtType::class, $usrEvt);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        return $this->redirectToRoute('app_usr_evt_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('usr_evt/edit.html.twig', [
        'usr_evt' => $usrEvt,
        'form' => $form,
    ]);
}

    #[Route('/{idUE}', name: 'app_usr_evt_delete', methods: ['POST'])]
    public function delete(Request $request, UsrEvt $usrEvt, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usrEvt->getIdUE(), $request->request->get('_token'))) {
            $entityManager->remove($usrEvt);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_usr_evt_index', [], Response::HTTP_SEE_OTHER);
    }
}
