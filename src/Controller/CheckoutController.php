<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/checkout')]
class CheckoutController extends AbstractController
{
    #[Route('/', name: 'app_checkout')]
    public function index(SessionInterface $session, ProductRepository $productRepository, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        $cart = $session->get('cart', []);
        if (empty($cart)) {
            return $this->redirectToRoute('app_cart_index');
        }

        $user = $this->getUser();
        $order = new Order();
        $order->setUser($user);
        $order->setCreatedAt(new \DateTimeImmutable());
        $order->setStatus('PENDING');
        
        $total = 0;

        foreach ($cart as $id => $quantity) {
            $product = $productRepository->find($id);
            if ($product) {
                $item = new OrderItem();
                $item->setProduct($product);
                $item->setQuantity($quantity);
                $item->setPriceAtPurchase($product->getPrice());
                $order->addItem($item);
                
                $total += $product->getPrice() * $quantity;
            }
        }
        
        $order->setTotalPrice($total);
        $em->persist($order);
        $em->flush();

        return $this->redirectToRoute('app_payment', ['id' => $order->getId()]);
    }
}
