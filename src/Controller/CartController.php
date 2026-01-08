<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/cart')]
class CartController extends AbstractController
{
    #[Route('/', name: 'app_cart_index')]
    public function index(SessionInterface $session, ProductRepository $productRepository): Response
    {
        $cart = $session->get('cart', []);
        
        $cartData = [];
        $total = 0;

        foreach ($cart as $id => $quantity) {
            $product = $productRepository->find($id);
            if ($product) {
                $cartData[] = [
                    'product' => $product,
                    'quantity' => $quantity
                ];
                $total += $product->getPrice() * $quantity;
            }
        }

        return $this->render('cart/index.html.twig', [
            'items' => $cartData,
            'total' => $total
        ]);
    }

    #[Route('/add/{id}', name: 'app_cart_add')]
    public function add($id, SessionInterface $session, ProductRepository $productRepository, Request $request): Response
    {
        $product = $productRepository->find($id);
        if (!$product || $product->getStock() <= 0) {
            if ($request->isXmlHttpRequest() || str_contains($request->headers->get('Accept'), 'application/json')) {
                return $this->json(['success' => false, 'message' => 'Product out of stock.'], 400);
            }
            $this->addFlash('error', 'This product is out of stock.');
            return $this->redirectToRoute('app_home');
        }

        $cart = $session->get('cart', []);
        
        if (!empty($cart[$id])) {
            $currentQty = $cart[$id];
            if ($currentQty >= $product->getStock()) {
                if ($request->isXmlHttpRequest() || str_contains($request->headers->get('Accept'), 'application/json')) {
                    return $this->json(['success' => false, 'message' => 'Not enough stock.'], 400);
                }
                $this->addFlash('warning', 'Only ' . $product->getStock() . ' items available in stock.');
                return $this->redirectToRoute('app_cart_index');
            }
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }
        
        $session->set('cart', $cart);

        // AJAX response
        if ($request->isXmlHttpRequest() || str_contains($request->headers->get('Accept'), 'application/json')) {
            $totalCount = array_sum($cart);
            return $this->json([
                'success' => true, 
                'message' => $product->getName() . ' added to cart!',
                'cartCount' => $totalCount
            ]);
        }
        
        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/remove/{id}', name: 'app_cart_remove')]
    public function remove($id, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        
        if (!empty($cart[$id])) {
            unset($cart[$id]);
        }
        
        $session->set('cart', $cart);
        
        return $this->redirectToRoute('app_cart_index');
    }
}
