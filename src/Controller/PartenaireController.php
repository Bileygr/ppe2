<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Formation;
use App\Entity\Offre;
use App\Entity\User;
use App\Form\OffreRegistrationFormType;
use App\Form\PartenaireRegistrationFormType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository; 
use App\Repository\CandidatureRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PartenaireController extends AbstractController
{
    /**
     * @Route("/partenaire/modifier-ses-informations", name="partenaire_modification")
     */
    public function modificationDeSesInformations(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userId = $user->getId();
        $userPassword = $user->getPassword();
        
        $userModifie = new User();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $partenaire = $repository->find($userId);

        $form = $this->createForm(PartenaireRegistrationFormType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('accueil');
        }

        return $this->render('partenaire/modification_de_ses_informations.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/partenaire/gérer-les-candidatures", name="partenaire_gestion_des_candidatures")
     */
    public function gestionDesCandidatures(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Candidature::class);
        $candidatures = $repository->findByPartenaireId($user->getId());

        if(isset($_POST['download'])){
            $fileName = $request->request->get('cv');
            
            return $this->file($this->getParameter('cv_directory') . $fileName);
        }

        if(isset($_POST['accepter'])){
            $candidatureId = $request->request->get('id');
            $candidature = $repository->find($candidatureId);
            $candidature->setStatus(1);

            $entityManager->flush();
            return $this->redirectToRoute('partenaire_gestion_des_candidatures');
        }

        if(isset($_POST['refuser'])){
            $candidatureId = $request->request->get('id');
            $candidature = $repository->find($candidatureId);
            $candidature->setStatus(0);

            $entityManager->flush();
            return $this->redirectToRoute('partenaire_gestion_des_candidatures');
        }

        return $this->render('partenaire/gestion_des_candidatures.html.twig', [
            'candidatures' => $candidatures
        ]);
    }

    /**
     * @Route("/partenaire/gérer-les-offres", name="partenaire_gestion_des_offres")
     */
    public function gestionDesOffres(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $offres = $repository->findById($user->getId());

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);
            $this->container->get('session')->set('offreId', $offre->getId());

            return $this->redirectToRoute('partenaire_modification_des_informations_d_une_offre');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);

            $entityManager->remove($offre);
            $entityManager->flush();

            return $this->redirectToRoute('partenaire_gestion_des_offres');
        }

        return $this->render('partenaire/gestion_des_offres.html.twig', [
            'offres' => $offres,
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/partenaire/modification-des-informations-d-une-offre", name="partenaire_modification_des_informations_d_une_offre")
     */
    public function modificationDesInformationsOffres(Request $request)
    {
        $offreId = $this->container->get('session')->get('offreId');
        $entityManager = $this->getDoctrine()->getManager();
        $offre = $entityManager->getRepository(Offre::class)->find($offreId);

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

        return $this->render('partenaire/modification_des_informations_d_une_offre.html.twig', [
            'formations' => $formations,
            'idformation' => $offre->getIdformation(),
            'form' => $form->createView(),
            'controller_name' => 'OffreController',
        ]);
    }
}