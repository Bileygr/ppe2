<?php

namespace App\Controller;

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
     * @Route("/offre/ajout", name="offre_ajout")
     */
    public function ajout(Request $request, UserPasswordEncoderInterface $passwordEncoder)
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
            'formations' => $formations, 'registrationForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/offre/modification-des-informations", name="offre_modification")
     */
    public function modification(Request $request)
    {
        $id = $this->container->get('session')->get('offreId');
        $entityManager = $this->getDoctrine()->getManager();
        $offre = $entityManager->getRepository(Offre::class)->find($id);

        $repository = $this->getDoctrine()->getRepository(Formation::class);
        $formations = $repository->findAll();

        $debut=$offre->getDebut()->format('Y-m-d');
        $fin=$offre->getFin()->format('Y-m-d');

        $form = $this->createForm(OffreRegistrationFormType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $offre->setIdformation($request->request->get('formation'));
            $entityManager->flush();
            return $this->redirectToRoute('offre_liste_partenaire_connecte');
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
    public function listeDeTouteLesOffres()
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
             FROM App\Entity\Offre o ,App\Entity\User u, App\Entity\Formation f where o.idpartenaire = u.id  and o.idformation = f.id'
        );
        $offres = $query->execute();

        return $this->render('offre/index.html.twig', [
            'offres' => $offres,
            'controller_name' => 'OffreController',
        ]);
    }

    /**
     * @Route("/partenaire/gestion/offres/liste", name="offre_liste_partenaire_connecte")
     */
    public function listeDesOffresParPartenaire(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userid = $user->getId();

        $entityManager = $this->getDoctrine()->getManager();
        $offres = $this->getDoctrine()->getRepository(Offre::class)->vaTeFaireFoutre($userid);
        
        /*
            $entityManager = $this->getDoctrine()->getManager();
            $query = $entityManager->createQuery(
                'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
                 FROM App\Entity\Offre o ,App\Entity\User u, App\Entity\Formation f WHERE o.idpartenaire = u.id  AND o.idformation = f.id AND o.idpartenaire = '.$userid.''
            );
            $offres = $query->execute();
        */

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);

            $this->container->get('session')->set('offreId', $offre->getId());
            return $this->redirectToRoute('offre_modification');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);

            $entityManager->remove($offre);
            $entityManager->flush();

            return $this->redirectToRoute('gestion_des_offres');
        }

       dump($offres);

        return $this->render('offre/gestion.html.twig', [
            'offres' => $offres,
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/administrateur/gestion/offres", name="offre_gestion")
     */
    public function gestion(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
             FROM App\Entity\Offre o ,App\Entity\User u, App\Entity\Formation f where o.idpartenaire = u.id  and o.idformation = f.id'
        );
        $offres = $query->execute();

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);

            $this->container->get('session')->set('offreId', $offre->getId());
            return $this->redirectToRoute('modification_des_offres');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $offre = $entityManager->getRepository(Offre::class)->find($id);

            $entityManager->remove($offre);
            $entityManager->flush();

            return $this->redirectToRoute('gestion_des_offres');
        }

        return $this->render('offre/gestion.html.twig', [
            'offres' => $offres,
            'controller_name' => 'AdministrateurController',
        ]);
    }
}
