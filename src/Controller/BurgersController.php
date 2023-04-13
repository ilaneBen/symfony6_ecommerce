<?php

namespace App\Controller;

use App\Entity\Burgers;
use App\Form\BurgersType;
use App\Repository\BurgersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/burgers')]
class BurgersController extends AbstractController
{
    #[Route('/', name: 'app_burgers_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $burgers = $entityManager -> getRepository(Burgers::class) ->findAll();
       
        return $this->render('burgers/index.html.twig', [
            
            'burgers' => $burgers
           
        ]);
    }
    #[Route('/new', name: 'app_burgers_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BurgersRepository $burgersRepository): Response
    {
        $burger = new Burgers();
        $form = $this->createForm(BurgersType::class, $burger);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $burgersRepository->save($burger, true);

            return $this->redirectToRoute('app_burgers_index');
        }

        return $this->render('burgers/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/{id}', name: 'app_burgers_show', methods: ['GET'])]
    public function show(burgers $burger): Response
    {
        return $this->render('burgers/show.html.twig', [
            'burger' => $burger,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_burgers_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Burgers $burger, BurgersRepository $burgersRepository): Response
    {
        $form = $this->createForm(BurgersType::class, $burger);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $burgersRepository->save($burger, true);

            return $this->redirectToRoute('app_burgers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('burgers/edit.html.twig', [
            'burger' => $burger,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_burgers_delete', methods: ['POST'])]
    public function delete(Request $request, Burgers $burger, BurgersRepository $burgersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$burger->getId(), $request->request->get('_token'))) {
            $burgersRepository->remove($burger, true);
        }

        return $this->redirectToRoute('app_burgers_index', [], Response::HTTP_SEE_OTHER);
    }
}
