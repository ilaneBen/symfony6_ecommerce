<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'profile_index')]
    public function index( EntityManagerInterface $em): Response
    {$user = $em -> getRepository(user::class) ->findall();
        return $this-> render('profile/profil.html.twig',[
            'user' => $user
        ]);
        }
}