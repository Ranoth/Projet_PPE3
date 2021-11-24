<?php

namespace App\DataFixtures;


use Faker\Factory;
use App\Entity\Image;

use App\Entity\Composant;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr-FR');

        $fichierMedocCsv=fopen(__DIR__."/medoc.csv","r");
        while (!feof($fichierMedocCsv)){
            $lesMedocs[]=fgetcsv($fichierMedocCsv);
        }
        fclose($fichierMedocCsv);

        foreach ($lesMedocs as $value){
            $medoc=new Medicaments();
            $medoc  ->setId(intval($value[0])) 
                    ->setNomCommercial("<p>".)
        }



















        /*


        for($i = 1; $i <= 30; $i++) 
        {
            $composant = new Composant;


   

            $nom_composant = $file->sentence();
            $composant->setNomComposant($nom_composant)
                        ->setImage($image);

            for($j = 1; $j <= mt_rand(2, 5); $j++)
            {
                $image = new Image();

                $image->setUrl($faker->imageUrl())
                    ->setCaption($faker->sentence())
                    ->setComposant($composant);
            
                $manager->persist($image);
            }
            $manager->persist($composant);
        }
        $manager->flush();  
        */ 
    }
}
