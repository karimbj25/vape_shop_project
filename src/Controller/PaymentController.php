<?php

namespace App\Controller;

use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Routing\Attribute\Route;

#[IsGranted('ROLE_USER')]
class PaymentController extends AbstractController
{
    #[Route('/payment/{id}', name: 'app_payment')]
    public function index(Order $order): Response
    {
        // Secure owner check using IDs
        if ($order->getUser()->getId() !== $this->getUser()->getId()) {
            throw $this->createAccessDeniedException();
        }

        if ($order->getStatus() !== 'PENDING') {
            return $this->redirectToRoute('app_home');
        }

        return $this->render('payment/index.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/payment/process/{id}', name: 'app_payment_process', methods: ['POST'])]
    public function process(Order $order, EntityManagerInterface $em, SessionInterface $session, \Symfony\Component\HttpFoundation\Request $request): Response
    {
        // Secure owner check using IDs
        if ($order->getUser()->getId() !== $this->getUser()->getId()) {
            throw $this->createAccessDeniedException();
        }

        // Dummy validation of card data (simulation)
        if (!$this->isCardValid($request)) {
            $this->addFlash('error', 'Invalid card details. Please check your information.');
            return $this->redirectToRoute('app_payment', ['id' => $order->getId()]);
        }

        // Simulate API delay/processing
        sleep(1);

        // Update order status
        $order->setStatus('PAID');

        // Deduct Stock
        foreach ($order->getItems() as $item) {
            $product = $item->getProduct();
            if ($product) {
                $newStock = max(0, $product->getStock() - $item->getQuantity());
                $product->setStock($newStock);
            }
        }

        $em->flush();

        // Clear cart now that payment is confirmed
        $session->remove('cart');

        return $this->redirectToRoute('app_payment_success', ['id' => $order->getId()]);
    }

    #[Route('/payment/success/{id}', name: 'app_payment_success')]
    public function success(Order $order): Response
    {
        if ($order->getUser()->getId() !== $this->getUser()->getId()) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('checkout/success.html.twig', [
            'order' => $order,
        ]);
    }

    private function isCardValid(\Symfony\Component\HttpFoundation\Request $request): bool
    {
        // Simple simulation logic: check if parameters exist and card number has correct length
        $cardNumber = $request->request->get('card_number', '');
        $expiry = $request->request->get('expiry', '');
        $cvv = $request->request->get('cvv', '');

        // Strip spaces from card number
        $cardNumber = str_replace(' ', '', $cardNumber);

        return strlen($cardNumber) >= 13 && strlen($cardNumber) <= 19 
               && strlen($expiry) === 5 
               && strlen($cvv) === 3;
    }
}
