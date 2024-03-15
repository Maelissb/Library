<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MangaController extends AbstractController
{
    #[Route('/manga', name: 'manga.index')]
    public function index(Request $request): Response
    {
        return $this->render("manga/index.html.twig");
    }

    #[Route('/manga/{slug}-{id}', name: 'manga.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id): Response 
    {
        return $this->render( 'manga/show.html.twig', [
            'slug' => $slug,
            'demo' => '<strong>hello</strong>',
            'id' => $id
        ]);
    }
}
