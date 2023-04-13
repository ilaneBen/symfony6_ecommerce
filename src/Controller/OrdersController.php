<?php

namespace App\Controller;
use App\Entity\Burgers;
use App\Entity\ItemOrders;
use App\Entity\Orders;
use App\Entity\User;
use App\Form\OrdersType;
use App\Repository\BurgersRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManager;
use Stripe\Stripe;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\StripeClient;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    #[Route('/checkout', name: 'app_checkout')]
    
      
    public function index(Request $request, SessionInterface $session, BurgersRepository $burgersRepository,EntityManagerInterface $em,UserRepository $userRepository): Response
    {
        $session = $request->getSession();
        $panier = $session->get('panier', []);

        if(!empty($panier)){

            $stripe = new StripeClient($_ENV['STRIPE_SECRET']);
            
            $items = [];

            foreach($panier as $id => $quantite) {
                $burger = $burgersRepository->find($id);

                $items[] = ['price_data' =>[
                    'unit_amount' => $burger->getPrix()*100,
                    'currency' => 'eur',
                    
                    'product_data'=>['name' => $burger->getNom(),
                                    //  'qte' => $quantite,
                ],
            ],
            'quantity' => $quantite,
            ];
            }

            $protocol = $_SERVER['HTTPS'] ? 'https' : 'http';
            $host = $_SERVER['SERVER_NAME'];
            $successUrl = $protocol . '://' . $host . '/checkout/success/{CHECKOUT_SESSION_ID}';
            $failureUrl = $protocol . '://' . $host . '/checkout/failure/{CHECKOUT_SESSION_ID}';

            $session = $stripe->checkout->sessions->create([
                'customer_email'=>$this->getUser()->getEmail(),
                'success_url' => $successUrl,
                'cancel_url' => $failureUrl,
                'payment_method_types' => ['card'],
                'mode' => 'payment',
                'line_items' => $items
            ]);
            
if ('success_url') {
    // array:1 [▼
    // 0 => array:2 [▼
    //   "price_data" => array:3 [▼
    //     "unit_amount" => 750.0
    //     "currency" => "eur"
    //     "product_data" => array:1 [▼
    //       "name" => "original"
    //     ]
    //   ]
    //   "quantity" => 1
    // ]


     

    //    $ref = sprintf('%s.%s', $date->format('Ymd.hi'), random_int(10000, 99999));
       
                
             
                 foreach ($items as $item) {
                $date = new \DateTime('now'); 
                $commande = new Orders();
                $itemOrders = new ItemOrders();
                $itemOrders->setName($item['price_data']['product_data']['name']);
                $itemOrders->setQuantite($item['quantity']);
                $itemOrders->setPrix($item['price_data']['unit_amount']/100) ;
              
                $commande->addItemOrder($itemOrders);
                
                $commande->setTotal($commande->getTotal()+$itemOrders->getPrix());
                $commande->setQuantite($commande->getQuantite()+$itemOrders->getQuantite());
                $commande->setDate(new \DateTime('now'));
                $commande->setReference(sprintf('%s.%s', $date->format('Ymd.hi'), random_int(10000, 99999)));
                dd($commande, $itemOrders);
                // $panier->setTotal($total);
                // $panier->setUser($this->getUser());
                }
                /**  @todo add reference, add dateTime */

                 $em->persist($itemOrders);
                 $em->persist($commande);
                 $em->flush();
                
            return new RedirectResponse( $session->url) ;
            
             
        }else{
            return $this->redirectToRoute('cart_index');
        }
        
        
        return $this->redirect($session->url);
        }
    }

    #[Route('/checkout/success/{stripeSessionId}', name: 'app_checkout_success')]
    public function success(string $stripeSessionId, SessionInterface $session, MailerInterface $mailer, BurgersRepository $burgersRepository): Response
    {
        $panier = $session->get('panier', []);

        $datapanier = [];

        foreach($panier as $id => $quantite) {
            $datapanier[] = [
                'burger' => $burgersRepository-> find($id),
                'quantite' => $quantite,
            ];
        }

        $user= $this->getUser();
        $email = (new TemplatedEmail())
            ->from('lagrilladerie69130@gmail.com')
            ->to ($user->getEmail())
            ->subject('Nous préparons votre commande!')
            ->htmlTemplate('checkout/sucess.html.twig')
            ->context([
                'panier' => $datapanier
            ])
        ;

        $mailer->send($email);
        
        $session->set('panier', []);

        return $this->render('checkout/sucess.html.twig', []);
    }

    #[Route('/checkout/failure/{stripeSessionId}', name: 'app_checkout_failure')]
    public function failure(string $stripeSessionId): Response
    {
        return $this->render('checkout/failure.html.twig', []);
    }

 
}