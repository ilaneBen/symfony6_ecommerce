<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Form\OrdersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecapController extends AbstractController
{
    #[Route('/recap', name: 'app_recap')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $orders = $entityManager -> getRepository(Orders::class) -> findAll();
        
        return $this->render('recap/index.html.twig', [
            'orders' => $orders,
        ]);
    }
    #[Route('/recap/new', name: 'app_orders_new')]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $orders = new Orders();
        $form = $this -> createForm(OrdersType::class, $orders);
        $form -> handleRequest($request);
       
        if($form -> isSubmitted() && $form->isValid()){
      
        $manager -> persist($orders);
        $manager ->flush();
        return $this -> redirectToRoute('app_index');}

        return $this->render('recap/index.html.twig',[
            'form' => $form->createView()
        ]);
    }



}
