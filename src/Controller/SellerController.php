<?php

namespace App\Controller;

use App\Repository\SellerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class SellerController extends AbstractController
{
  /**
   * @Route("/sellers/{id}", name="seller_show")
   */
  public function show($id, SellerRepository $sellerRepository)
  {
    $seller = $sellerRepository->find($id);

    // ...

    return new Response($seller->getName());
  }

  /**
   * @Route("/sellers", name="seller_list")
   */

  public function list(Request $request, SellerRepository $sellerRepository)
  {
    $sellers = $sellerRepository->findAll();
    $sellersAsArray = [];
    foreach ($sellers as $seller) {
      $sellersAsArray[] = [
        'id' => $seller->getId(),
        'name' => $seller->getName(),
        'country' => $seller->getCountry(),
        'registered' => $seller->getRegistered(),
      ];
    }
    $response = new JsonResponse();
    $response->headers->set('Access-Control-Allow-Origin', '*');
    $response->setData ($sellersAsArray);

    return $response;
  }
}
