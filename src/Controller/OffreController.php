<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Offre;
use App\Form\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class OffreController extends AbstractController
{
    /**
     * @Route("/partenaire/gestion/offres/ajout", name="offre_ajout")
     */
    public function ajout(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userid = $user->getId();
        
        $repository = $this->getDoctrine()->getRepository(Formation::class);
        $formations = $repository->findAll();

        $offre = new Offre();

        $form = $this->createFormBuilder($offre)
            ->add('nom', TextType::class, array('attr' => array('placeholder' => 'Nom')))
            ->add('adresse', TextType::class, array('attr' => array('placeholder' => 'Adresse')))
            ->add('ville', TextType::class, array('attr' => array('placeholder' => 'Ville')))
            ->add('codepostal', TextType::class, array('attr' => array('placeholder' => 'Code Postal')))
            ->add('debut', DateType::class)
            ->add('fin', DateType::class)
            ->add('description', TextareaType::class, array('attr' => array('placeholder' => 'Description du poste...')))
            ->add('ajout', SubmitType::class, array('label' => 'Déposer l\'offre'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $debut = $form->get('debut')->getData();
            $fin = $form->get('fin')->getData();

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

            return $this->redirectToRoute('partenaire_gestion_offres');
        }

        return $this->render('offre/ajout_des_offres.html.twig', [
            'formations' => $formations, 'registrationForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/administrateur/gestion/offres/modification-des-informations", name="offre_modification")
     */
    public function modification(Request $request)
    {
        $id = $this->container->get('session')->get('offreId');
        $entityManager = $this->getDoctrine()->getManager();
        $offre = $entityManager->getRepository(Offre::class)->find($id);
        $offreFormationId = $offre->getIdformation();

        $repository = $this->getDoctrine()->getRepository(Formation::class);
        $formations = $repository->findAll();

        $debut=$offre->getDebut()->format('Y-m-d');
        $fin=$offre->getFin()->format('Y-m-d');

        $form = $this->createFormBuilder($offre)
            ->add('nom', TextType::class, array('attr' => array('placeholder' => $offre->getNom())))
            ->add('adresse', TextType::class, array('attr' => array('placeholder' => $offre->getAdresse())))
            ->add('ville', TextType::class, array('attr' => array('placeholder' => $offre->getVille())))
            ->add('codepostal', TextType::class, array('attr' => array('placeholder' => $offre->getCodepostal())))
            ->add('debut', DateType::class, array('placeholder' => $debut))
            ->add('fin', DateType::class, array('placeholder' => $fin))
            ->add('description', TextareaType::class, array('attr' => array('placeholder' => $offre->getCodepostal())))
            ->add('modification', SubmitType::class, array('label' => 'Modifier'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $offre->setIdformation($request->request->get('formation'));
            $entityManager->flush();
            return $this->redirectToRoute('gestion_des_offres');

        }

        return $this->render('administrateur/modification_des_informations_offres.html.twig', [
            'formations' => $formations,
            'offreFormationId' => $offreFormationId,
            'form' => $form->createView(),
            'controller_name' => 'AdministrateurController',
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

        $query = $entityManager->createQuery(
            'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
             FROM App\Entity\Offre o ,App\Entity\User u, App\Entity\Formation f WHERE o.idpartenaire = u.id  AND o.idformation = f.id AND o.idpartenaire = '.$userid.''
        );

        // returns an array of Product objects
       $offres = $query->execute();
       dump($offres) ;

        return $this->render('partenaire/liste_des_offres.html.twig', [
            'offres' => $offres,
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/administrateur/gestion/offres", name="offre_gestion")
     */
    public function gestionDesOffres(Request $request)
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

        return $this->render('administrateur/gestion_des_offres.html.twig', [
            'offres' => $offres,
            'controller_name' => 'AdministrateurController',
        ]);
    }
}
