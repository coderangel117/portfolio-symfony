<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'titre' => 'IndexController',
        ]);
    }
    /**
    * @Route("/cv", name="cv")
    */
    public function cv(): Response
    {
        return $this->render('index/cv.html.twig', [
            'titre' => 'CV',
        ]);
    }
    /**
     * @Route("/realisations", name="realisations")
     */
    public function realisations(): Response
    {
        return $this->render('index/realisations.html.twig', [
            'titre' => 'Mes réalisations',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('index/contact.html.twig', [
            'titre' => 'Me contacter',
        ]);
    }
}
