<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdministrateurController extends AbstractController
{
    /**
     * @Route("/administrateur/profil", name="administrateur_profil")
     */
    public function profil()
    {
        return $this->render('administrateur/profil.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/administrateur/connexion", name="administrateur_connexion")
     */
    public function connexion()
    {
        return $this->render('administrateur/connexion.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/administrateur/inscription", name="administrateur_inscription")
     */
    public function inscription(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {

            $user->setNom($form->get('nom')->getData());
            $user->setPrenom($form->get('prenom')->getData());
            $user->setUsername();
            $user->setSIRET(0);
            $user->setRoles(array('ROLE_ADMINISTRATEUR'));
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('motdepasse')->getData()
                )
            );
            $user->setTelephone($form->get('telephone')->getData());
            $user->setEmail($form->get('email')->getData());
            $user->setAdresse($form->get('adresse')->getData());
            $user->setVille($form->get('ville')->getData());
            $user->setCodepostal($form->get('codepostal')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('administrateur_profil');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}