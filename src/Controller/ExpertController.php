<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpertController extends AbstractController
{
    #[Route('/expert', name: 'expert')]
    public function index(): Response
    {
        return $this->render('expert/expert.html.twig', [
            'controller_name' => 'ExpertController',
        ]);
    }
    #[Route('/devis', name: 'devis')]
    public function devis(): Response
    {
        return $this->render('expert/test.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
}
