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
    public function show(Medicaments $medicament)
    {
            

        return $this->render('medicament/show1.html.twig', [
            'medicament' => $medicament
        ]);
    
    }
     /**
     * Permet de créer un medicament 
     *
     * @Route("/medicaments/new", name="medicament_create")
     * 
     * @return void
     */
    public function create(Request $request, EntityManagerInterface $manager) 
    {
        $medicament = new Medicaments();


        $form = $this->createForm(MedicamentsType::class, $medicament);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){
            
            $manager->persist($medicament);
            $manager->flush();
            $this->addFlash(
                'success',
                "L'annonce <strong>Test</strong> a bien été enregistrée !"
            ); 
         

            return $this->redirectToRoute('medicament_show', [
                   'nom_commercial' => $medicament->getNomCommercial()
            ]);

        }
                      

        return $this->render('Medicament/new.html.twig', [
            'form' => $form->createView()
        ]);
        }
    
    
        /* @Route("/delete/{id}" , name="medicament_delete")
        */
       public function deleteAction($id) {
        $medicament = $this->MedicamentsRepository->findOrFail($id);
        $medicament->delete();
   
       }
}