<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Offre;
use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class PartenaireController extends AbstractController
{
    /**
     * @Route("/partenaire/gestion/offres", name="partenaire_gestion_offres")
     */
    public function gestionOffres()
    {
        return $this->render('partenaire/gestion_des_offres.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/partenaire/gestion/offres/ajout", name="ajout_des_offres")
     */
    public function ajoutOffres(Request $request, UserPasswordEncoderInterface $passwordEncoder)
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
     * @Route("/partenaire/gestion/offres/liste", name="liste_des_offres_partenaire")
     */
    public function listeOffres(Request $request, UserPasswordEncoderInterface $passwordEncoder)
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
}