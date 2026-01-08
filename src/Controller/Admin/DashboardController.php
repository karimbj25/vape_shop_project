<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $isAdmin = $this->isGranted('ROLE_ADMIN');

        $stats = [
            'orders' => $this->entityManager->getRepository(Order::class)->count([]),
            'revenue' => $this->entityManager->getRepository(Order::class)->createQueryBuilder('o')
                ->select('SUM(o.totalPrice)')
                ->getQuery()
                ->getSingleScalarResult() ?? 0,
        ];

        if ($isAdmin) {
            $stats['users'] = $this->entityManager->getRepository(User::class)->count([]);
            $stats['products'] = $this->entityManager->getRepository(Product::class)->count([]);
        }

        $recentOrders = $this->entityManager->getRepository(Order::class)->findBy([], ['createdAt' => 'DESC'], 5);

        $lowStockProducts = [];
        if ($isAdmin) {
            $lowStockProducts = $this->entityManager->getRepository(Product::class)->createQueryBuilder('p')
                ->where('p.stock <= 5')
                ->orderBy('p.stock', 'ASC')
                ->getQuery()
                ->getResult();
        }

        return $this->render('admin/dashboard.html.twig', [
            'stats' => $stats,
            'recent_orders' => $recentOrders,
            'low_stock_products' => $lowStockProducts,
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('VapeShop Admin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        if ($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('Shop');
            yield MenuItem::linkToCrud('Categories', 'fas fa-list', Category::class);
            yield MenuItem::linkToCrud('Products', 'fas fa-tag', Product::class);
        }
        
        if ($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_VENTE')) {
            yield MenuItem::section('Sales');
            yield MenuItem::linkToCrud('Orders', 'fas fa-shopping-cart', Order::class);
        }
        
        if ($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('Users');
            yield MenuItem::linkToCrud('Users', 'fas fa-users', User::class);
        }
        
        yield MenuItem::section('System');
        yield MenuItem::linkToUrl('Back to Website', 'fas fa-arrow-left', '/');
        yield MenuItem::linkToLogout('Logout', 'fa fa-sign-out');
    }

    public function configureUserMenu(\Symfony\Component\Security\Core\User\UserInterface $user): \EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu
    {
        return parent::configureUserMenu($user)
            ->setMenuItems([
                MenuItem::linkToUrl('Back to Website', 'fa fa-home', '/'),
            ]);
    }
}
