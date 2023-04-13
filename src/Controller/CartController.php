<?php

namespace App\Controller;

use App\Entity\Burgers;
use App\Entity\Orders;
use App\Entity\Sandwichs;
use App\Repository\BurgersRepository;
use App\Repository\OrdersRepository;
use App\Repository\SandwichsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/cart', name: 'cart_')]
class CartController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SessionInterface $session,SandwichsRepository $sandwichsRepository, BurgersRepository $burgersRepository, Request $request): Response
    {   $session = $request->getSession();
        $panier = $session ->get("panier",[]);
        $session-> set('panier', $panier);
        $_COOKIE = new Cookie('panier');

//on fabrique les données
 
        $datapanier = [];
        $total = 0;

        foreach($panier as $id => $quantite){
            $burger = $burgersRepository-> find($id);
            $sandwich =  $sandwichsRepository->find($id);
            $datapanier[]=[
                "sandwich" => $sandwich,
                "burger"=> $burger,
                "quantite" => $quantite
            ];
            $total += $burger -> getPrix() * $quantite;
            
        }
        

        return $this->render('cart/index.html.twig',  compact("datapanier", "total"));
    }


  /*  #[Route('/', name: 'indx')]
    public function inde(Request $request, OrdersRepository $ordersRepository): Response
    {  
        $order = new Orders();
        $form = $this->create(OrdersType::class, $order);
        $form->handleRequest($request);

        $panier = $session ->get("panier",[]);
//on fabrique les données
 
        $datapanier = [];
        $total = 0;

        foreach($panier as $id => $quantite){
            $burger = $burgersRepository-> find($id);
            $datapanier[]=[
                "burger"=> $burger,
                "quantite" => $quantite
            ];
            $total += $burger -> getPrix() * $quantite;
        }
        

        return $this->render('cart/index.html.twig',  compact("datapanier", "total"));
    }*/

    #[Route('/add/{id}', name: 'add')]
    public function add(Burgers $burgers,Sandwichs $sandwichs, SessionInterface $session, Request $request): Response
    {
          //reupere le panier actuel
          $session = $request->getSession();

          $panier = $session->get("panier", []) ;
          $id = $burgers->getid();
          

          if((!empty($panier[$id]))){
            $panier[$id]++;
          }
          else{
            $panier[$id] = 1 ;
          }

          //on sauvegarde dans la session
          $session-> set("panier", $panier);
         
          return $this->redirectToRoute("cart_index");

    }

    #[Route('/remove/{id}', name: 'remove')]
    public function remove(Burgers $burgers, SessionInterface $session, Request $request)
    {
          //reupere le panier actuel
          $session = $request->getSession();

          $panier = $session->get("panier", []) ;
          $id = $burgers->getid();

          if((!empty($panier[$id]))){
            if($panier[$id]> 1){
                $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
          }

          //on sauvegarde dans la session
          $session-> set("panier", $panier);
         
          return $this->redirectToRoute("cart_index");

    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(Burgers $burgers, SessionInterface $session, Request $request)
    {
          //reupere le panier actuel
          $session = $request->getSession();
          $panier = $session->get("panier", []) ;
          $id = $burgers->getid();

          if((!empty($panier[$id]))){
                unset($panier[$id]);
            }
          

          //on sauvegarde dans la session
          $session-> set("panier", $panier);
         
          return $this->redirectToRoute("cart_index");
            }


           
    }