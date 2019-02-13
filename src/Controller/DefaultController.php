<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('default/accueil.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
