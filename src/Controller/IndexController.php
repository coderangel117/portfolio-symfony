<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Route("/{_locale}"/, name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'titre' => 'Accueil']);
    }
    /**
    * @Route("/cv", name="cv")
     * @Route("/{_locale}/cv", name="cv")
    */
    public function cv(): Response
    {
        return $this->render('index/cv.html.twig', [
            'titre' => 'CV',
        ]);
    }
    /**
     * @Route("/realisations", name="realisations")
     *@Route("/{_locale}/realisations", name="realisations")
     */
    public function realisations(): Response
    {
        return $this->render('index/realisations.html.twig', [
            'titre' => 'Mes réalisations',
        ]);
    }
}
