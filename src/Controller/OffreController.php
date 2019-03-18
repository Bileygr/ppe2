<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Formation;
use App\Entity\Offre;
use App\Form\OffreRegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreController extends AbstractController
{
    /**
     * @Route("/ajout-d-une-offre", name="offre_ajout")
     */
    public function ajouter(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userid = $user->getId();
        
        $repository = $this->getDoctrine()->getRepository(Formation::class);
        $formations = $repository->findAll();

        $offre = new Offre();

        $form = $this->createForm(OffreRegistrationFormType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {   
            $aujourdhui = date("Y/m/d");
            $debut = $form->get('debut')->getData();
            $fin = $form->get('fin')->getData();

            if($debut > $aujourdhui){
                if($debut < $fin){
                    $offre->setNom($form->get('nom')->getData());
                    $offre->setAdresse($form->get('adresse')->getData());
                    $offre->setVille($form->get('ville')->getData());
                    $offre->setCodepostal($form->get('codepostal')->getData());
                    $offre->setDebut($debut);
                    $offre->setFin($fin);
                    $offre->setIdformation($request->request->get('formation'));
                    $offre->setDescription($form->get('description')->getData());
                    $offre->setIdpartenaire($userid);

                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($offre);
                    $entityManager->flush();

                    return $this->redirectToRoute('offre_liste_partenaire_connecte');
                }else{
                    return $this->redirectToRoute('offre_liste_partenaire_connecte');
                }
            }else{
                return $this->redirectToRoute('offre_ajout');
            }
        }

        return $this->render('offre/ajout.html.twig', [
            'formations' => $formations, 
            'registrationForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/modifier-les-informations-d-une-offre", name="offre_modification")
     */
    public function modifier(Request $request)
    {
        $offre_id = $this->container->get('session')->get('offre_id');
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
            /*
                $formation = $repository->findById($request->request->get('formation'));
                $formation_instance = new Formation;
                $formation_instance->setId($formation["id"]);
                $formation_instance->setNom($formation["nom"]);
            */

            $offre->setIdformation($request->request->get('formation'));
            $entityManager->flush();

            return $this->redirectToRoute('offre_gestion');
        }

        return $this->render('offre/modification.html.twig', [
            'formations' => $formations,
            'idformation' => $offre->getIdformation(),
            'form' => $form->createView(),
            'controller_name' => 'OffreController',
        ]);
    }

    /**
     * @Route("/offres", name="offres")
     */
    public function listerTouteLesOffres()
    {   
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $offres = $repository->findAll();

        if(isset($_POST['candidature'])){
            $candidature = new Candidature();

            $idoffre = $request->request->get('idoffre');
            $idpartenaire = $request->request->get('idpartenaire');
            $idjeune = $request->request->get('idjeune');

            $candidature->setIdoffre($idoffre);
            $candidature->setIduserpartenaire($idpartenaire);
            $candidature->setIduderjeune($user->getId());
            $candidature->setStatus(2);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidature);
            $entityManager->flush();

            return $this->redirectToRoute('offres');
        }

        return $this->render('offre/index.html.twig', [
            'offres' => $offres,
            'controller_name' => 'OffreController',
        ]);
    }

    /**
     * @Route("/partenaire/gestion-des-offres", name="offre_liste_partenaire_connecte")
     */
    public function listerLesOffresDuPartenaire(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $user->getId();

        $entityManager = $this->getDoctrine()->getManager();
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findById($user_id);

        if(isset($_POST['modifier'])){
            $offre_id = $request->request->get('id');
            $this->container->get('session')->set('offre_id', $offre_id);

            return $this->redirectToRoute('offre_modification');
        }

        if(isset($_POST['supprimer'])){
            $offre_id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($offre_id);

            $entityManager->remove($offre);
            $entityManager->flush();

            return $this->redirectToRoute('gestion_des_offres');
        }

        return $this->render('offre/gestion.html.twig', [
            'offres' => $offres,
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/administration/gérer-les-offres", name="offre_gestion")
     */
    public function gerer(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $offres = $repository->findAll();

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);
            $this->container->get('session')->set('offre_id', $offre->getId());

            return $this->redirectToRoute('offre_modification');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);

            $entityManager->remove($offre);
            $entityManager->flush();

            return $this->redirectToRoute('offre_gestion');
        }

        return $this->render('offre/gestion.html.twig', [
            'offres' => $offres,
            'controller_name' => 'AdministrateurController',
        ]);
    }
}