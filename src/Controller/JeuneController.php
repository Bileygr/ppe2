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
     * @Route("/jeune/modifier-mes-informations", name="jeune_modification")
     */
    public function modification(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $user->getId();
        $userpassword = $user->getPassword();
        
        $user_modifie = new User();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $jeune = $repository->find($user_id);

        $form = $this->createForm(RegistrationFormType::class, $jeune);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('accueil');
        }

        return $this->render('default/modification.html.twig', [
            'jeune' => $jeune,
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/administration/modification-des-informations-d-un-jeune", name="jeune_modification_d_un_jeune")
     */
    public function modificationDeJeune(Request $request)
    {
        $id = $this->container->get('session')->get('jeune_id');
        $entityManager = $this->getDoctrine()->getManager();
        $jeune = $entityManager->getRepository(User::class)->find($id);

        $form = $this->createForm(RegistrationFormType::class, $jeune);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->flush();
            return $this->redirectToRoute('jeune_gestion');
        }

        return $this->render('default/modification.html.twig', [
            'jeune' => $jeune,
            'registrationForm' => $form->createView(),
            'controller_name' => 'JeuneController',
        ]);
    }

    /**
     * @Route("/administrateur/gérer-les-jeunes", name="jeune_gestion")
     */
    public function gestionDesJeunes(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $nomDelUtilisateur = $user->getNom();
        $prenomDelUtilisateur = $user->getPrenom();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $jeunes = $repository->findByRole('ROLE_JEUNE');

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $jeune = $entityManager->getRepository(User::class)->find($id);

            $this->container->get('session')->set('jeune_id', $jeune->getId());
            return $this->redirectToRoute('jeune_modification_d_un_jeune');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $user = $entityManager->getRepository(User::class)->find($id);

            $entityManager->remove($user);
            $entityManager->flush();

            return $this->redirectToRoute('jeune_gestion');
        }

        return $this->render('jeune/gestion.html.twig', [
            'jeunes' => $jeunes,
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/jeune/mes-candidatures", name="jeune_candidatures")
     */
    public function gestionDesCandidatures(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $nomDelUtilisateur = $user->getNom();
        $prenomDelUtilisateur = $user->getPrenom();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $jeunes = $repository->findByRole('ROLE_JEUNE');

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $jeune = $entityManager->getRepository(User::class)->find($id);

            $this->container->get('session')->set('jeune_id', $jeune->getId());
            return $this->redirectToRoute('jeune_modification_d_un_jeune');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $user = $entityManager->getRepository(User::class)->find($id);

            $entityManager->remove($user);
            $entityManager->flush();

            return $this->redirectToRoute('jeune_gestion');
        }

        return $this->render('jeune/gestion.html.twig', [
            'jeunes' => $jeunes,
            'controller_name' => 'AdministrateurController',
        ]);
    }
}
