<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends AbstractController
{
  /**
   * @Route("/products/{id}", name="product_show")
   */
  public function show($id, ProductRepository $productRepository)
  {
    $product = $productRepository->find($id);

    // ...

    return new Response($product->getName());
  }

  /**
   * @Route("/products", name="product_list")
   */

  public function list(Request $request, ProductRepository $productRepository)
  {
    $products = $productRepository->findAll();
    $productsAsArray = [];
    foreach ($products as $product) {
      $productsAsArray[] = [
        'id' => $product->getId(),
        'title' => $product->getTitle(),
        'type' => $product->getType(),
        'description' => $product->getDescription(),
        'price' => $product->getPrice(),
        'sellerId' => $product->getSellerId(),
      ];
    }
    $response = new JsonResponse();
    $response->headers->set('Access-Control-Allow-Origin', '*');
    $response->setData ($productsAsArray);
    
    return $response;
  }
}
