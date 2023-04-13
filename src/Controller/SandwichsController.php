<?php

namespace App\Controller;

use App\Entity\Sandwichs;
use App\Form\SandwichsType;
use App\Repository\SandwichsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/sandwichs')]
class SandwichsController extends AbstractController
{
    #[Route('/', name: 'app_sandwichs_index', methods: ['GET'])]
    public function index(SandwichsRepository $sandwichsRepository): Response
    {
        return $this->render('sandwichs/index.html.twig', [
            'sandwichs' => $sandwichsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sandwichs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SandwichsRepository $sandwichsRepository): Response
    {
        $sandwich = new Sandwichs();
        $form = $this->createForm(SandwichsType::class, $sandwich);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sandwichsRepository->save($sandwich, true);

            return $this->redirectToRoute('app_sandwichs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sandwichs/new.html.twig', [
            'sandwich' => $sandwich,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sandwichs_show', methods: ['GET'])]
    public function show(Sandwichs $sandwich): Response
    {
        return $this->render('sandwichs/show.html.twig', [
            'sandwich' => $sandwich,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sandwichs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sandwichs $sandwich, SandwichsRepository $sandwichsRepository): Response
    {
        $form = $this->createForm(SandwichsType::class, $sandwich);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sandwichsRepository->save($sandwich, true);

            return $this->redirectToRoute('app_sandwichs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sandwichs/edit.html.twig', [
            'sandwich' => $sandwich,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sandwichs_delete', methods: ['POST'])]
    public function delete(Request $request, Sandwichs $sandwich, SandwichsRepository $sandwichsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sandwich->getId(), $request->request->get('_token'))) {
            $sandwichsRepository->remove($sandwich, true);
        }

        return $this->redirectToRoute('app_sandwichs_index', [], Response::HTTP_SEE_OTHER);
    }
}
