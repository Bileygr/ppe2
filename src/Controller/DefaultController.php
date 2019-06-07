<?php

namespace App\Controller;

use App\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $nbOffres = $repository->countOffres();
        $nbOffres = $nbOffres[0]['COUNT(*)'];

        return $this->render('default/accueil.html.twig', [
            'nbOffres' => $nbOffres,
            'controller_name' => 'DefaultController',
        ]);
    }
}
