<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        // Auto-seed for demo purposes if empty
        $productRepo = $em->getRepository(Product::class);
        if ($productRepo->count([]) === 0) {
            $this->seedDemoData($em, $slugger);
        }

        $products = $productRepo->findBy([], null, 6); // Get 6 featured items
        $categories = $em->getRepository(Category::class)->findAll();

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    private function seedDemoData(EntityManagerInterface $em, SluggerInterface $slugger): void
    {
        $categories = ['Vapes', 'E-Liquids', 'Nicotine Salts', 'Disposable', 'Accessories', 'Mods & Kits'];
        $categoryEntities = [];
        foreach ($categories as $catName) {
            $category = new Category();
            $category->setName($catName);
            $category->setSlug($slugger->slug(strtolower($catName)));
            $category->setDescription("Premium $catName selection."); // Keep description for existing categories
            $em->persist($category);
            $categoryEntities[] = $category;
        }

        $products = [
            // Pods
            ['name' => 'Vaporesso XROS 3 Pod', 'price' => 95.00, 'cat' => 0, 'img' => '/uploads/products/xros_3.png', 'stock' => 25],
            ['name' => 'Voopoo Drag S Pro', 'price' => 145.00, 'cat' => 0, 'img' => 'https://images.unsplash.com/photo-1594177924852-1e79e8c18922?auto=format&fit=crop&q=80&w=600', 'stock' => 15],
            ['name' => 'Uwell Caliburn G3', 'price' => 85.00, 'cat' => 0, 'img' => 'https://plus.unsplash.com/premium_photo-1720012345687-fb48b2892e73?auto=format&fit=crop&q=80&w=600', 'stock' => 30],
            
            // E-Liquids 60ml
            ['name' => 'Grape Frost 60ml', 'price' => 25.00, 'cat' => 1, 'img' => '/uploads/products/grape_frost.png', 'stock' => 50],
            ['name' => 'Strawberry Bliss 60ml', 'price' => 22.50, 'cat' => 1, 'img' => '/uploads/products/strawberry_bliss.png', 'stock' => 4],
            ['name' => 'Blue Razz Ice 60ml', 'price' => 24.00, 'cat' => 1, 'img' => '/uploads/products/blue_razz.png', 'stock' => 0],
            ['name' => 'Peach Mango 60ml', 'price' => 23.00, 'cat' => 1, 'img' => 'https://images.unsplash.com/photo-1662735229836-e998b8676807?auto=format&fit=crop&q=80&w=600', 'stock' => 15],
            
            // Nic Salts 30ml
            ['name' => 'Cool Mint Salt 30ml', 'price' => 32.00, 'cat' => 2, 'img' => 'https://plus.unsplash.com/premium_photo-1678282075115-de1836c1393d?auto=format&fit=crop&q=80&w=600', 'stock' => 30],
            ['name' => 'Mango Ice Salt 30ml', 'price' => 32.00, 'cat' => 2, 'img' => 'https://images.unsplash.com/photo-1618589036063-e78447db6936?auto=format&fit=crop&q=80&w=600', 'stock' => 20],
            ['name' => 'Watermelon Candy Salt', 'price' => 34.00, 'cat' => 2, 'img' => 'https://images.unsplash.com/photo-1699631559121-d8fc97c1128b?auto=format&fit=crop&q=80&w=600', 'stock' => 12],
            
            // Disposables
            ['name' => 'Geek Bar Pulse 15k', 'price' => 45.00, 'cat' => 3, 'img' => 'https://plus.unsplash.com/premium_photo-1719431363708-30223a8f5280?auto=format&fit=crop&q=80&w=600', 'stock' => 100],
            ['name' => 'Lost Mary OS5000', 'price' => 38.00, 'cat' => 3, 'img' => 'https://images.unsplash.com/photo-1606752096575-400290b0493c?auto=format&fit=crop&q=80&w=600', 'stock' => 80],
            ['name' => 'Waka SoPro PA10000', 'price' => 48.00, 'cat' => 3, 'img' => 'https://plus.unsplash.com/premium_photo-1720012345670-013eda456af3?auto=format&fit=crop&q=80&w=600', 'stock' => 5],
            
            // Accessories
            ['name' => 'Replacement Coils (5pcs)', 'price' => 35.00, 'cat' => 4, 'img' => '/uploads/products/coils.png', 'stock' => 60],
            ['name' => 'Cotton Bacon Prime', 'price' => 18.00, 'cat' => 4, 'img' => 'https://images.unsplash.com/photo-1579165466814-e646cfa4a3be?auto=format&fit=crop&q=80&w=600', 'stock' => 40],
            ['name' => 'External 18650 Battery', 'price' => 25.00, 'cat' => 4, 'img' => 'https://images.unsplash.com/photo-1522741070277-b1b2ba3a7bd3?auto=format&fit=crop&q=80&w=600', 'stock' => 20],
            
            // Mods & Kits
            ['name' => 'Lost Vape Centaurus Q200', 'price' => 245.00, 'cat' => 5, 'img' => 'https://images.unsplash.com/photo-1636614616001-26c5a3db178c?auto=format&fit=crop&q=80&w=600', 'stock' => 10],
            ['name' => 'Aegis Legend 2 L200', 'price' => 210.00, 'cat' => 5, 'img' => 'https://images.unsplash.com/photo-1594177914682-d408d96e458b?auto=format&fit=crop&q=80&w=600', 'stock' => 12],
            ['name' => 'Smok Morph 3 Kit', 'price' => 195.00, 'cat' => 5, 'img' => 'https://images.unsplash.com/photo-1594189741508-5212175833ad?auto=format&fit=crop&q=80&w=600', 'stock' => 8],
        ];

        foreach ($products as $p) {
            $product = new Product();
            $product->setName($p['name']);
            $product->setSlug($slugger->slug(strtolower($p['name'])));
            $product->setPrice($p['price']);
            $product->setStock($p['stock']);
            $product->setDescription('High quality ' . $p['name'] . ' for an exceptional experience. Modern design and premium performance.');
            $product->setImage($p['img']);
            $product->setCategory($categoryEntities[$p['cat']]);
            $em->persist($product);
        }

        $em->flush();
    }
}
