<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Medicament;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MedicamentsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create("fr_FR");
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 50; $i++) {
            $medicament = new Medicament();
            $medicament->setNom($faker->word(1))
                ->setDescription($faker->sentence(6))
                ->setImage("http://placehold.it/350x150");
            if ($i >= 25) {
                $medicament->setSubstance("paracetamol");
            }
            else {
                $medicament->setSubstance("inc..");
            }


            $manager->persist($medicament);
        }

        $manager->flush();
    }
}
