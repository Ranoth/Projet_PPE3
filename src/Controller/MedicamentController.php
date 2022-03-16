<?php

namespace App\Controller;

use App\Entity\Medicaments;
use App\Form\MedicamentsType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MedicamentsRepository;
use Symfony\Component\HttpFoundation\Request;
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
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
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
     /**
     * Permet de créer un medicament 
     *
     * @Route("/medicament/new", name="medicament_create")
     * 
     * @return void
     */
    public function create(Request $request, EntityManagerInterface $manager){
        $medicament = new Medicaments();


        $form = $this->createForm(MedicamentsType::class, $medicaments);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){
            
            $manager->persist($medicament);
            $manager->flush();



            $this->addFlash(
                'success',
                "Le medicament <strong>Test</strong> a bien été enregistrée !"
            ); 
         

            return $this->redirectToRoute('medicament_show', [
                   'nom_Commercial' => $medicaments->getNomCommercial()
            ]);

        }
}
}