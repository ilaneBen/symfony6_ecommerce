<?php

namespace App\Controller;

use App\Entity\Texmexs;
use App\Form\TexmexsType;
use App\Repository\TexmexsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/texmexs')]
class TexmexsController extends AbstractController
{
    #[Route('/', name: 'app_texmexs_index', methods: ['GET'])]
    public function index(TexmexsRepository $texmexsRepository): Response
    {
        return $this->render('texmexs/index.html.twig', [
            'texmexs' => $texmexsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_texmexs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TexmexsRepository $texmexsRepository): Response
    {
        $texmex = new Texmexs();
        $form = $this->createForm(TexmexsType::class, $texmex);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $texmexsRepository->save($texmex, true);

            return $this->redirectToRoute('app_texmexs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('texmexs/new.html.twig', [
            'texmex' => $texmex,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_texmexs_show', methods: ['GET'])]
    public function show(Texmexs $texmex): Response
    {
        return $this->render('texmexs/show.html.twig', [
            'texmex' => $texmex,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_texmexs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Texmexs $texmex, TexmexsRepository $texmexsRepository): Response
    {
        $form = $this->createForm(TexmexsType::class, $texmex);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $texmexsRepository->save($texmex, true);

            return $this->redirectToRoute('app_texmexs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('texmexs/edit.html.twig', [
            'texmex' => $texmex,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_texmexs_delete', methods: ['POST'])]
    public function delete(Request $request, Texmexs $texmex, TexmexsRepository $texmexsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$texmex->getId(), $request->request->get('_token'))) {
            $texmexsRepository->remove($texmex, true);
        }

        return $this->redirectToRoute('app_texmexs_index', [], Response::HTTP_SEE_OTHER);
    }
}
