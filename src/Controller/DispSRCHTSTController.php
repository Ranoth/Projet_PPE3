<?php

namespace App\Controller;

use App\Entity\Medicament;
use App\Repository\MedicamentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DispSRCHTSTController extends AbstractController
{
    /**
     * @Route("/dispsrchtst/quickSearch", name="dispsrchtst_quick_search")
     */
    public function quickSearch(MedicamentRepository $repo, Request $request)
    {
        dump($request);

        $medicaments = $repo->findBy(
            ['Nom' => $request->request->get('search')]
        );

        return $this->render('disp_srchtst/index.html.twig', [
            'medicaments' => $medicaments
        ]);
    }

    /**
     * @Route("/dispsrchtst", name="dispsrchtst_list")
     */
    public function index(MedicamentRepository $repo): Response
    {
        $medicaments = $repo->findAll();

        return $this->render('disp_srchtst/index.html.twig', [
            'medicaments' => $medicaments
        ]);
    }
}
