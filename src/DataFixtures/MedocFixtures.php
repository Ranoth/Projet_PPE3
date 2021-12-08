<?php

namespace App\DataFixtures;

use App\Serializer\CsvEncoder;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MedocFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $medoc = new Medoc();
        $medoc->setNom(CsvEncoder->$array = , 'csv', $context)

        $manager->flush();
    }
}
