<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResetMdpFormType;
use App\Form\ResetMdpRequestFormType;
use App\Repository\UserRepository;
use App\Service\SendMailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'logout')]
    public function logout(){
        return $this->redirectToRoute('app_main');
    }

    #[Route('/oubli-mdp', name:'app_mdp_oublier')]
    public function mdpOublier(Request $request, UserRepository $userRepository, TokenGeneratorInterface $tokenGeneratorInterface, EntityManagerInterface $entityManagerInterface, SendMailService $mail): Response
    {
        $form = $this->createForm(ResetMdpRequestFormType::class);
        
        $form-> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //on cherche lutilisateur par son email
        $user = $userRepository-> findOneByEmail($form->get('email')->getData());
             
        //on verifie si un utilisateur conrrespond a l'email
        if($user){

            // On genere un token de renitialisation
            $token = $tokenGeneratorInterface->generateToken();
            $user->setResetToken($token);
            $entityManagerInterface->persist($user);
            $entityManagerInterface->flush();

            // on genere un lien de renitialisation du mot de passe
            $url = $this->generateUrl('reset_mdp',['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
            

            //on créé les données du mail
             $context = compact('url', 'user');

            //on envoie le mail
            $mail->send(
                'no-reply@lagrilladerie.fr',
                $user->getEmail(),
                'Rénitialisation du mot de passe',
                'mdp_reset',
                $context
            );

            $this->addFlash('success', 'email envoyé avec succès');
            return $this->redirectToRoute('app_login');

        }
        $this->addFlash('danger', 'un problème est survenu');
        return $this->redirectToRoute('app_login');

        }    

        return $this->render('security/reset_mdp_request.html.twig', [
            'RequestMdpForm' => $form->createView(),
        ]);
    }

    #[Route('/oubli-mdp/{token}', name:'reset_mdp')]
    public function resetMdp(string $token, Request $request, UserRepository $userRepository, EntityManagerInterface $entityManagerInterface, UserPasswordHasherInterface $PasswordHasher): Response
    {
         //On verfie si on a ce token dans la bdd
         $user = $userRepository->findOneByresettoken($token);

         if($user){
             
            $form = $this->createForm(ResetMdpFormType::class);

            $form->handleRequest($request);
            if($form->isSubmitted()&& $form->isValid()){
                //on efface le token
                $user->setResetToken('');
                $user->setPassword(
                    $PasswordHasher->hashPassword($user, $form->get('plainPassword')->getData())
                );
                $entityManagerInterface->persist($user);
                $entityManagerInterface->flush();

                $this->addFlash('success', 'mot de passe renitialiser avec succès');

                return $this->redirectToRoute('app_login');
            }
            return $this->render('security/reset_mdp.html.twig', [
                'MdpForm' => $form->createView(),
            ]);

         }
        
         $this->addFlash('danger', 'jeton invalide');
         return $this->redirectToRoute('app_login');
    }
}
