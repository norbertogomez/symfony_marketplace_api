<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    
    public function load(ObjectManager $manager)
    {
        $json = file_get_contents("/src/DataFixtures/products.json");
        $products = json_decode($json, true);
        products = array();

        for ($i = 0; $i < count($products); $i++) {
            $product = new Product();
            $product->name = $title;
            $manager->persist($product);
            echo $product; 
        }
        $manager->flush();
    }
}