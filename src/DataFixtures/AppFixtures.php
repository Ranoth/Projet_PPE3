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

        $fichierMedicamentCsv=fopen(__DIR__."/medoc.csv","r");
        while (!feof($fichierMedicamentCsv)){
            $lesMedicaments[]=fgetcsv($fichierMedicamentCsv);
        }
        fclose($fichierMedicamentCsv);
       
       foreach ($lesMedicaments as $value){
                   $medicament = new Medicaments();
                   $medicament->setNomCommercial($value[0])
                           ->setPrixEchantion(mt_rand(40, 200))
                           ->setContreIndication($faker->sentence(5))
                           ->setEffet($faker->sentence(5))
                           ->setImageMed('https://www.weblex.fr/images/flux_actus/medicaments3.jpg');
                           $manager->persist($medicament);
               }
               $manager->flush();

        
    }
   }  
     

 


















      

