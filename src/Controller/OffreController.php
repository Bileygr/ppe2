<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Formation;
use App\Entity\Offre;
use App\Entity\User;
use App\Form\OffreRegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class OffreController extends AbstractController
{
    /**
     * @Route("/offres", name="offres")
     */
    public function index(Request $request)
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $offres = $repository->findAllOffres();
        
        if(isset($_POST['candidature'])){
            $candidature = new Candidature();
            $offreId = $request->request->get('idoffre');
            $offre = $repository->find($offreId);

            $candidature->setIdoffre($offre);
            $candidature->setIduserpartenaire($offre->getIduser());
            $candidature->setIduserjeune($this->get('security.token_storage')->getToken()->getUser());
            $candidature->setStatus(2);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidature);
            $entityManager->flush();

            return $this->redirectToRoute('jeune_gestion_de_ses_candidatures');
        }

        if(isset($_POST['detail'])){
            $id = $request->request->get('idoffre');
            $offre = $entityManager->getRepository(Offre::class)->find($id);
            $this->container->get('session')->set('offreId', $offre->getId());

            return $this->redirectToRoute('offre_detail');
        }   

        return $this->render('offre/index.html.twig', [
            'offres' => $offres
        ]);
    }
    
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
                    $formation = $repository->find($request->request->get('formation'));
                    $offre->setLibelle($form->get('libelle')->getData());
                    $offre->setAdresse($form->get('adresse')->getData());
                    $offre->setVille($form->get('ville')->getData());
                    $offre->setCodepostal($form->get('codepostal')->getData());
                    $offre->setDebut($debut);
                    $offre->setFin($fin);
                    $offre->setIdformation($formation);
                    $offre->setDescription($form->get('description')->getData());
                    $offre->setIduser($user);

                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($offre);
                    $entityManager->flush();

                    return $this->redirectToRoute('partenaire_gestion_des_offres');
                }else{
                    return $this->redirectToRoute('partenaire_gestion_des_offres');
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
     * @Route("/offre-detail", name="offre_detail")
     */
    public function offreDetail(Request $request)
    {   
        $offreId = $this->container->get('session')->get('offreId');
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($offreId);
        $partenaire = $this->getDoctrine()->getRepository(User::class)->find($offre->getIduser()->getId());
        $formation = $this->getDoctrine()->getRepository(Formation::class)->find($offre->getIdformation()->getId());

        dump($offre, $partenaire, $formation);
        
        if(isset($_POST['candidature'])){
            $candidature = new Candidature();
            $candidature->setIdoffre($offre);
            $candidature->setIduserpartenaire($partenaire);
            $candidature->setIduserjeune($this->get('security.token_storage')->getToken()->getUser());
            $candidature->setStatus(2);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidature);
            $entityManager->flush();

            return $this->redirectToRoute('jeune_gestion_de_ses_candidatures');
        }
        
        return $this->render('offre/detail.html.twig', [
            'offre' => $offre,
            'partenaire' => $partenaire,
            'formation' => $formation,
        ]);
    }
}