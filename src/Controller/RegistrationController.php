<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Service\JWTService;
use App\Service\SendMailService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, SendMailService $mail,JWTService $jwt): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
          
                       // On génère le JWT de l'utilisateur
            // On crée le Header
            $header = [
                'typ' => 'JWT',
                'alg' => 'HS256'
            ];

            // On crée le Payload
            $payload = [
                'user_id' => $user->getId()
            ];

            // On génère le token
            $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

            // On envoie un mail
            $mail->send(
                'no-reply@monsite.net',
                $user->getEmail(),
                'Activation de votre compte sur le site e-commerce',
                'register',
                compact('user', 'token')
            );

            
    }
return $this->render('registration/register.html.twig', [
                'registrationForm' => $form->createView(),
            ]);
}
#[Route('/verif/{token}', name: 'verify_user')]
public function verifyUser($token, JWTService $jwt, UserRepository $UserRepository, EntityManagerInterface $em): Response
{
    //On vérifie si le token est valide, n'a pas expiré et n'a pas été modifié
    if($jwt->isValid($token) && !$jwt->isExpired($token) && $jwt->check($token, $this->getParameter('app.jwtsecret'))){
        // On récupère le payload
        $payload = $jwt->getPayload($token);

        // On récupère le user du token
        $user = $UserRepository->find($payload['user_id']);

        //On vérifie que l'utilisateur existe et n'a pas encore activé son compte
        if($user && !$user->getIsVerified()){
            $user->setIsVerified(true);
            $em->flush($user);
            $this->addFlash('success', 'Utilisateur activé');
            return $this->redirectToRoute('app_login');
        }
    }
    // Ici un problème se pose dans le token
    $this->addFlash('danger', 'Le token est invalide ou a expiré');
    return $this->redirectToRoute('app_login');
}
#[Route('/Reverif', name: 'resend_verify')]
public function resendVerif(JWTService $jwt, SendMailService $mail, UserRepository $UserRepository,EntityManager $em): Response
{
    $user = $this -> getUser();

    if(!$user){
        $this-> addFlash('danger', 'vous devez être connécté pour accéder a cette page');
        return $this -> redirectToRoute('app_login');
    }
    if($user-> getIsVerified()){
        $this-> addFlash('warning', 'cette utilisateur est deja activé');
        return $this -> redirectToRoute('app_login');
    }
                 // On génère le JWT de l'utilisateur
            // On crée le Header
            $header = [
                'typ' => 'JWT',
                'alg' => 'HS256'
            ];

            // On crée le Payload
            $payload = [
                'user_id' => $user->getId()
            ];

            // On génère le token
            $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

            // On envoie un mail
            $mail->send(
                'no-reply@monsite.net',
                $user->getEmail(),
                'Activation de votre compte sur le site e-commerce',
                'register',
                compact('user', 'token')
            );
            $mail->send(
                'no-reply@monsite.net',
                $user->getEmail(),
                'Activation de votre compte sur le site e-commerce',
                'register',
                compact('user', 'token')
            );
           
} 
}