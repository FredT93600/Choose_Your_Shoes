<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FemmeController extends AbstractController
{
    #[Route('/femme', name: 'app_femme')]
    public function index(): Response
    {
        return $this->render('femme/index.html.twig', [
            'controller_name' => 'FemmeController',
        ]);
    }
}
