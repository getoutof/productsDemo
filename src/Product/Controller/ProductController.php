<?php

declare(strict_types=1);

namespace App\Product\Controller;

use App\Product\Domain\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/products', name: 'app_products', methods: ['GET'])]
class ProductController extends AbstractController
{
    public function __construct(
        private readonly ManagerRegistry $doctrine
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $productList = $this->doctrine->getRepository(Product::class)->findAll();

        return $this->render('product/productList.html.twig', [
            'productList' => $productList,
        ]);
    }
}
