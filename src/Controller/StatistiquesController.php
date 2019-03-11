<?php

namespace App\Controller;

use App\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StatistiquesController extends AbstractController
{
    /**
     * @Route("/statistiques", name="statistiques")
     */
    public function index()
    {
    	$entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $stats1 = $repository->countFormation();
        $stats2 = $repository->countPartenaire();
        return $this->render('statistiques/index.html.twig', [
        	'stats1' => $stats1,
        	'stats2' => $stats2,
            'controller_name' => 'StatistiquesController',
        ]);
    }
}
