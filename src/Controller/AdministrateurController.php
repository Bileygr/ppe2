<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Offre;
use App\Entity\Formation;
use App\Form\RegistrationFormType;
use App\Form\OffreRegistrationFormType;
use App\Form\PartenaireRegistrationFormType;
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

        return $this->render('administrateur/gestion_des_partenaires.html.twig', [
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

            return $this->redirectToRoute('administration_modification_des_informations_d_un_jeune');
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
     * @Route("/administration/gérer-les-offres", name="administration_gestion_des_offres")
     */
    public function gestionDesOffres(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $offres = $repository->findAll();

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);
            $this->container->get('session')->set('offreId', $offre->getId());

            return $this->redirectToRoute('administration_modification_des_informations_d_une_offre');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);

            $entityManager->remove($offre);
            $entityManager->flush();

            return $this->redirectToRoute('administration_gestion_des_offres');
        }

        return $this->render('administrateur/gestion_des_offres.html.twig', [
            'offres' => $offres,
            'controller_name' => 'AdministrateurController',
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
     * @Route("administration/inscription-des-parteniares", name="administration_inscription_d_un_partenaire")
     */
    public function inscriptionDesPartenaires(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();

        $form = $this->createForm(PartenaireRegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $user->setNom($form->get('nom')->getData());
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

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/administrateur/inscription-des-jeunes", name="administration_inscription_d_un_jeune")
     */
    public function inscriptionDesJeunes(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
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
            $user->setRoles(array('ROLE_JEUNE'));
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

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/administration/modifier-ses-informations", name="administrateur_modification")
     */
    public function modificationDeSesInformations(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $user->getId();
        $userpassword = $user->getPassword();
        
        $user_modifie = new User();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $administrateur = $repository->find($user_id);

        $form = $this->createForm(RegistrationFormType::class, $administrateur, ['allow_file_upload' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('accueil');
        }

        return $this->render('administrateur/modification_de_ses_informations.html.twig', [
            'administrateur' => $administrateur,
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/administration/modification-des-informations-d-un-administrateur", name="administration_modification_des_informations_d_un_administrateur")
     */
    public function modificationDesInformationsAdministrateur(Request $request)
    {
        $id = $this->container->get('session')->get('administrateurId');
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
            return $this->redirectToRoute('administration_gestion_des_administrateurs');
        }

        return $this->render('administrateur/modification_des_informations_d_un_administrateur.html.twig', [
            'administrateur' => $administrateur,
            'registrationForm' => $form->createView(),
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/administration/modification-des-informations-d-un-partenaire", name="administration_modification_des_informations_d_un_partenaire")
     */
    public function modificationDesInformationsPartenaire(Request $request)
    {
        $id = $this->container->get('session')->get('partenaireId');
        $entityManager = $this->getDoctrine()->getManager();
        $partenaire = $entityManager->getRepository(User::class)->find($id);

        $form = $this->createForm(PartenaireRegistrationFormType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->flush();
            return $this->redirectToRoute('administration_gestion_des_partenaires');
        }

        return $this->render('administrateur/modification_des_informations_d_un_partenaire.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/administration/modification-des-informations-d-un-jeune", name="administration_modification_des_informations_d_un_jeune")
     */
    public function modificationDesInformationsJeune(Request $request)
    {
        $id = $this->container->get('session')->get('jeuneId');
        $entityManager = $this->getDoctrine()->getManager();
        $jeune = $entityManager->getRepository(User::class)->find($id);

        $form = $this->createForm(RegistrationFormType::class, $jeune);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->flush();
            return $this->redirectToRoute('administration_gestion_des_jeunes');
        }

        return $this->render('administrateur/modification_des_informations_d_un_jeune.html.twig', [
            'jeune' => $jeune,
            'registrationForm' => $form->createView(),
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/administration/modification-des-informations-d-une-offre", name="administration_modification_des_informations_d_une_offre")
     */
    public function modificationDesInformationsOffres(Request $request)
    {
        $offre_id = $this->container->get('session')->get('offreId');
        $entityManager = $this->getDoctrine()->getManager();
        $offre = $entityManager->getRepository(Offre::class)->find($offre_id);

        $repository = $this->getDoctrine()->getRepository(Formation::class);
        $formations = $repository->findAll();

        $debut=$offre->getDebut()->format('Y-m-d');
        $fin=$offre->getFin()->format('Y-m-d');

        $form = $this->createForm(OffreRegistrationFormType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {   
            $formationInstance = new Formation();
            $formationId = $request->request->get('formation');
            $formationBDD = $repository->findById($formationId);

            dump($formationBDD);
            
            $formationInstance->setId($formationBDD[0]['id']);
            $formationInstance->setNom($formationBDD[0]['nom']);

            $offre->setIdformation($formationInstance);
            $entityManager->flush();

            return $this->redirectToRoute('administration_gestion_des_offres');
        }

        return $this->render('administrateur/modification_des_informations_d_une_offre.html.twig', [
            'formations' => $formations,
            'idformation' => $offre->getIdformation(),
            'form' => $form->createView(),
            'controller_name' => 'OffreController',
        ]);
    }

    /**
     * @Route("/administration/statistiques-des-offres", name="statistiques")
     */
    public function statistiquesDesOffres()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $stats1 = $repository->countFormation();
        $stats2 = $repository->countPartenaire();
        return $this->render('administrateur/statistiques_des_offres.html.twig', [
            'stats1' => $stats1,
            'stats2' => $stats2,
            'controller_name' => 'StatistiquesController',
        ]);
    }
}