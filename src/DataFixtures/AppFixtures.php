<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Composant;
use Faker\Provider\Image;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr-FR');


        for($i = 1; $i <= 30; $i++) {

       
        $composant = new Composant;


        $nom_composant = $faker->sentence();
       
        $coverImage = $faker->imageUrl(1000,350);
        
        $composant->setComposant($nom_composant)
                  ->setCoverImage($coverImage)
           
        for($j = 1; $j <= mt_rand(2, 5); $j++){
                 $image = new Image();
        
                 $image->setUrl($faker->imageUrl())
                       ->setCaption($faker->sentence())
                       ->setComposant($composant);
        
                    
                $manager->persist($image);
        }

        $manager->persist($composant);
        }
        $manager->flush();
    }

        
    
}
