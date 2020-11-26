<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    
    public function load(ObjectManager $manager)
    {
        $json = file_get_contents("/src/DataFixtures/products.json");
        $productFixtures = json_decode($json, true);
        
        foreach ($productFixtures as $fixture) {
            $product = new Product();
            $product->setTitle($fixture['title']);
            $manager->persist($product);
        }
        
        $manager->flush();
    }
}
