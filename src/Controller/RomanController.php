<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RomanController extends AbstractController
{
    #[Route('/roman', name: 'app_roman')]
    public function index(): Response
    {
        return $this->render('roman/index.html.twig', [
            'controller_name' => 'RomanController',
        ]);
    }
}
