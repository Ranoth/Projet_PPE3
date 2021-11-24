<?php

namespace App\Controller;

use App\Repository\MedicamentsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MedicamentController extends AbstractController
{
    /**
     * @Route("/medicament", name="medicament_liste")
     */
    public function index(MedicamentsRepository $repo): Response
    {
        $medicaments = $repo->findAll();
        return $this->render('medicament/medicament.html.twig', [
            'medicaments' => $medicaments,
        ]);
    }
}
