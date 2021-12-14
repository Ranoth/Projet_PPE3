<?php

namespace App\Controller;

use App\Entity\Medicaments;
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
           /**
     * Permet d'afficher une seule famille 
     * 
     *@Route("/medicament/{nom_commercial}", name="medicament_show") 
     *
     * @return Response 
     */
    public function show(Medicaments $medicament){
            

        return $this->render('medicament/show1.html.twig', [
            'medicament' => $medicament
        ]);
    
}
}
