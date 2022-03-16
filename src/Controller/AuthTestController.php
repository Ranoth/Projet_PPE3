<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthTestController extends AbstractController
{
    /**
     * @Route("/secret", name="auth_test")
     */
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('auth_test/index.html.twig', [
            'controller_name' => 'AuthTestController',
        ]);
    }
}
