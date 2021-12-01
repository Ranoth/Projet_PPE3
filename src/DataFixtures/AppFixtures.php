<?php

namespace App\DataFixtures;


use Faker\Factory;

use App\Entity\Famille;
use App\Entity\Medicaments;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr-FR');

        $fichierFamilleCsv=fopen(__DIR__."/famille_medoc.csv","r");
        while (!feof($fichierFamilleCsv)){
            $lesFamilles[]=fgetcsv($fichierFamilleCsv);
        }
        fclose($fichierFamilleCsv);
     
        foreach ($lesFamilles as $value){
            $famille = new Famille();
            $famille->setNomFamille($value[0])
                    ->setImageFml('https://www.weblex.fr/images/flux_actus/medicaments3.jpg');
                    $manager->persist($famille);
        }
        $manager->flush();

 
   }   }     





       
        
    
        





        
        /*foreach ($lesMedocs as $value){
            $medoc = new Medicaments();
            $medoc  
                    ->setNomCommercial()
                    ->setPrixEchantion(mt_rand(40, 200))
                    ->setContreIndication('<p>' .join('</p><p>', $faker->paragraphs(5)). '</p>')
                    ->setEffet('<p>' .join('</p><p>', $faker->paragraphs(5)). '</p>')
                    ->setImageMed('https://www.weblex.fr/images/flux_actus/medicaments3.jpg');
                    $manager->persist($medoc);
        }
        $manager->flush();
 

}
















      

}