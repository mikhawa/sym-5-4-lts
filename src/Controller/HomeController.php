<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
# on veut récupérer une requête
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    // nouvelle méthode vers l'URL page1
    #[Route('/page1', name: 'pageUne')]
    public function pageUne(Request $request): Response
    {
        # envoi d'une réponse de type var_dump() avec dump()
        return new Response("<pre>".dump($request)."<pre>");
    }
}
