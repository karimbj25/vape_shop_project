<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/products')]
class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository, \Symfony\Component\HttpFoundation\Request $request): Response
    {
        $categoryId = $request->query->get('category');
        $sort = $request->query->get('sort');
        
        $criteria = [];
        if ($categoryId) {
            $criteria['category'] = $categoryId;
        }

        $orderBy = [];
        if ($sort === 'newest') {
            $orderBy = ['id' => 'DESC'];
        }

        $products = $productRepository->findBy($criteria, $orderBy);

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/{id}', name: 'app_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }
}
