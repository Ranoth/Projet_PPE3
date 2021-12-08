<?php

namespace App\DataFixtures;

use App\Entity\Medoc;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class MedocFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder()]);

        $lesMedocs = $serializer->decode(file_get_contents("public/csv/medoc.csv"), 'csv');

        foreach ($lesMedocs as $value) {
            $medoc = new Medoc();
            $medoc->setNom(implode($value));

            $manager->persist($medoc);
        }

        $manager->flush();
    }
}
