<?php

namespace App\Controller;

use App\Repository\ComposantRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ComposantController extends AbstractController
{
    /**
     * @Route("/composants", name="composants_liste")
     */
    public function listeComposant(ComposantRepository $repo)
    {

        $composants=$repo->findAll();
        return $this->render('composant/composant.html.twig', [
            'composants' => $composants
        ]);
    }
}
