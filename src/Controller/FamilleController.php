<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{
    /**
     * @Route("/famille", name="famille_liste")
     */
    public function index(FamilleRepository $repo): Response
    {
        $familles = $repo->findAll();
        return $this->render('famille/famille.html.twig', [
            'familles' => $familles,
        ]);
    }
    /**
     * Permet d'afficher une seule famille 
     * 
     *@Route("/famille/{nom_famille}", name="famille_show") 
     *
     * @return Response 
     */
    public function show(Famille $famille){
            

        return $this->render('famille/show.html.twig', [
            'famille' => $famille
        ]);
    
}

}

   


