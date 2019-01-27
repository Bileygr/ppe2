<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class JeuneController extends AbstractController
{
    /**
     * @Route("/jeune/profil", name="jeune_profil")
     */
    public function profil()
    {
        return $this->render('jeune/profil.html.twig', [
            'controller_name' => 'JeuneController',
        ]);
    }
}
