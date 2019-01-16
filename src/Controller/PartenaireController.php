<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PartenaireController extends AbstractController
{
    /**
     * @Route("/partenaire/profil", name="partenaire/profil")
     */
    public function profil()
    {
        return $this->render('partenaire/profil.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/partenaire/connexion", name="partenaire_connexion")
     */
    public function connexion()
    {
        return $this->render('partenaire/connexion.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/partenaire/inscription", name="partenaire_inscription")
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
            $user->setSIRET($form->get('siret')->getData());
            $user->setRoles(array('ROLE_PARTENAIRE'));
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

            return $this->redirectToRoute('partenaire_profil');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}