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
                    $offre->setLibelle($form->get('libelle')->getData());
                    $offre->setAdresse($form->get('adresse')->getData());
                    $offre->setVille($form->get('ville')->getData());
                    $offre->setCodepostal($form->get('codepostal')->getData());
                    $offre->setDebut($debut);
                    $offre->setFin($fin);
                    $offre->setIdformation($request->request->get('formation'));
                    $offre->setDescription($form->get('description')->getData());
                    $offre->setIduser($user);

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
}