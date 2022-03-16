<?php

namespace App\DataFixtures;




use Faker\Factory;
use App\Entity\Famille;

use App\Entity\Composant;
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

        for($i = 1; $i <= 20; $i++) {
        
                   $medicament = new Medicaments();
                   $medicament->setNomCommercial($faker->sentence(5))
                           ->setPrixEchantion(mt_rand(40, 200))
                           ->setContreIndication($faker->sentence(5))
                           ->setEffet($faker->sentence(5))
                           ->setImageMed('https://c8.alamy.com/compfr/r8b66m/gelules-comprime-bleu-et-blanc-isole-sur-fond-blanc-avec-l-ombre-le-concept-de-sante-globale-la-resistance-aux-antibiotiques-capsule-d-antimicrobiens-p-r8b66m.jpg');
                           $manager->persist($medicament);
               }
               $manager->flush();

    }
               

        
    }
 
     

 


















      

