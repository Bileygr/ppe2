<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdministrateurController extends AbstractController
{
    /**
     * @Route("/administration/gérer-les-administrateurs", name="administration_gestion_des_administrateurs")
     */
    public function gestionDesAdministrateurs(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);
        $administrateurs = $repository->findByRole('ADMINISTRATEUR');

        if(isset($_POST['modifier'])){
            $administrateurId = $request->request->get('id');
            $this->container->get('session')->set('administrateurId', $administrateurId);

            return $this->redirectToRoute('administration_modification_des_informations_d_un_administrateur');
        }

        if(isset($_POST['supprimer'])){
            $administrateurId = $request->request->get('id');
            $administrateur = $entityManager->getRepository(User::class)->find($administrateurId);

            $entityManager->remove($administrateur);
            $entityManager->flush();

            return $this->redirectToRoute('administration_gestion_des_administrateurs');
        }

        return $this->render('administrateur/gestion_des_administrateurs.html.twig', [
            'administrateurs' => $administrateurs
        ]);
    }

    /**
     * @Route("/administration/gérer-les-partenaires", name="administration_gestion_des_partenaires")
     */
    public function gestionDesPartenaires(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);
        $partenaires = $repository->findByRole('ROLE_PARTENAIRE');

        if(isset($_POST['modifier'])){
            $partenaireId = $request->request->get('id');
            $this->container->get('session')->set('partenaireId', $partenaireId);

            return $this->redirectToRoute('administration_modification_des_informations_d_un_partenaire');
        }

        if(isset($_POST['supprimer'])){
            $partenaire_id = $request->request->get('id');
            $partenaire = $entityManager->getRepository(User::class)->find($partenaire_id);

            $entityManager->remove($partenaire);
            $entityManager->flush();

            return $this->redirectToRoute('administration_gestion_des_partenaires');
        }

        return $this->render('partenaire/gestion.html.twig', [
            'partenaires' => $partenaires
        ]);
    }

    /**
     * @Route("/administration/gérer-les-jeunes", name="administration_gestion_des_jeunes")
     */
    public function gestionDesJeunes(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);
        $jeunes = $repository->findByRole('ROLE_JEUNE');

        if(isset($_POST['modifier'])){
            $jeuneId = $request->request->get('id');
            $this->container->get('session')->set('jeuneId', $jeuneId);

            return $this->redirectToRoute('administration_modification_des_informations_d_un_jeune');-
        }

        if(isset($_POST['supprimer'])){
            $jeuneId = $request->request->get('id');
            $jeune = $entityManager->getRepository(User::class)->find($jeuneId);

            $entityManager->remove($jeune);
            $entityManager->flush();

            return $this->redirectToRoute('administration_gestion_des_jeunes');
        }

        return $this->render('administrateur/gestion_des_jeunes.html.twig', [
            'jeunes' => $jeunes
        ]);
    }

     /**
     * @Route("/administration/gérer-les-offres", name="administration_gestioin_des_offres")
     */
    public function gestionDesOffres(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $offres = $repository->findAll();

        if(isset($_POST['modifier'])){
            $offreId = $request->request->get('id');
            $this->container->get('session')->set('offreId', $offreId);

            return $this->redirectToRoute('administration_modification_des_informations_d_une_offre');
        }

        if(isset($_POST['supprimer'])){
            $offreId = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($offreId);

            $entityManager->remove($offre);
            $entityManager->flush();

            return $this->redirectToRoute('administration_gestioin_des_offres');
        }

        return $this->render('administrateur/gestion_des_offres.html.twig', [
            'offres' => $offres
        ]);
    }

    /**
     * @Route("/administration/inscription-des-administrateurs", name="administration_inscription_d_un_administrateur")
     */
    public function inscriptionDesAdministrateurs(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $administrateur = new User();
        $form = $this->createForm(RegistrationFormType::class, $administrateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {

            $administrateur->setNom($form->get('nom')->getData());
            $administrateur->setPrenom($form->get('prenom')->getData());
            $administrateur->setUsername();
            if($request->request->get('superAdmin') != null){
                $administrateur->setRoles(array($request->request->get('superAdmin')));
            }else{
                $administrateur->setRoles(array('ROLE_ADMINISTRATEUR'));
            }
            $administrateur->setPassword(
                $passwordEncoder->encodePassword(
                    $administrateur,
                    $form->get('motdepasse')->getData()
                )
            );
            $administrateur->setTelephone($form->get('telephone')->getData());
            $administrateur->setEmail($form->get('email')->getData());
            $administrateur->setAdresse($form->get('adresse')->getData());
            $administrateur->setVille($form->get('ville')->getData());
            $administrateur->setCodepostal($form->get('codepostal')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($administrateur);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/administration/modifier-ses-informations", name="administrateur_modification")
     */
    public function modification(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $user->getId();
        $userpassword = $user->getPassword();
        
        $user_modifie = new User();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $administrateur = $repository->find($user_id);

        $form = $this->createForm(RegistrationFormType::class, $administrateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('accueil');
        }

        return $this->render('default/modification.html.twig', [
            'administrateur' => $administrateur,
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/administration/modification-des-informations-d-un-administrateur", name="administrateur_modification_d_un_administrateur")
     */
    public function modificationDeUnAdministrateur(Request $request)
    {
        $id = $this->container->get('session')->get('administrateur_id');
        $entityManager = $this->getDoctrine()->getManager();
        $administrateur = $entityManager->getRepository(User::class)->find($id);

        $form = $this->createForm(RegistrationFormType::class, $administrateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            if($request->request->get('super_admin') != null){
                $administrateur->setRoles(array($request->request->get('super_admin')));
            }else{
                $administrateur->setRoles(array('ROLE_ADMINISTRATEUR'));
            }
            $entityManager->flush();
            return $this->redirectToRoute('administrateur_gestion');
        }

        return $this->render('default/modification.html.twig', [
            'administrateur' => $administrateur,
            'registrationForm' => $form->createView(),
            'controller_name' => 'AdministrateurController',
        ]);
    }
}