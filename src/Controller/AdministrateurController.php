<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Offre;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;

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
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class AdministrateurController extends AbstractController
{
    /**
     * @Route("/administrateur/gestion/administrateurs", name="gestion_des_administrateurs")
     */
    public function gestionDesAdministrateurs()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $administrateurs = $repository->findByRole('ROLE_ADMINISTRATEUR');

        return $this->render('administrateur/gestion_des_administrateurs.html.twig', [
            'administrateurs' => $administrateurs,
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/administrateur/modifier-mes-informations", name="modification_des_informations_administrateur")
     */
    public function modificationDesInformationsAdministrateur(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userid = $user->getId();
        $userpassword = $user->getPassword();
        
        $user_modifie = new User();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $informations = $repository->find($userid);

        $form = $this->createFormBuilder($user)
            ->add('nom', TextType::class, array('attr' => array('placeholder' => $user->getNom())))
            ->add('prenom', TextType::class, array('attr' => array('placeholder' => $user->getPrenom())))
            //->add('motdepasse', PasswordType::class)
            ->add('telephone', TextType::class, array('attr' => array('placeholder' => $user->getTelephone())))
            ->add('email', TextType::class, array('attr' => array('placeholder' => $user->getEmail())))
            ->add('adresse', TextType::class, array('attr' => array('placeholder' => $user->getAdresse())))
            ->add('ville', TextType::class, array('attr' => array('placeholder' => $user->getVille())))
            ->add('codepostal', TextType::class, array('attr' => array('placeholder' => $user->getCodepostal())))
            ->add('modification', SubmitType::class, array('label' => 'Modifier'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $user_modifie->setId($userid);
            $user_modifie->setSIRET(0);
            $user_modifie->setUsername();
            $user_modifie->setRoles(array("ROLE_ADMINISTRATEUR"));
            $user_modifie->setPassword($userpassword);

            if($form->get('nom')->getData() == $user->getNom()){
                $user_modifie->setNom($user->getNom());
            }else{
                $user_modifie->setNom($form->get('nom')->getData());
            }

            if($form->get('prenom')->getData() == $user->getPrenom()){
                $user_modifie->setPrenom($user->getPrenom());
            }else{
                $user_modifie->setPrenom($form->get('prenom')->getData());
            }

            /*(
                if($form->get('motdepasse')->getData() == $user->getPassword()){
                    $user_modifie->setPassword($user->getPassword());
                }else{
                    $user_modifie->setPassword($form->get('motdepasse')->getData());
                }
            */

            if($form->get('telephone')->getData() == $user->getTelephone()){
                $user_modifie->setTelephone($user->getTelephone());
            }else{
                $user_modifie->setTelephone($form->get('telephone')->getData());
            }

            if($form->get('email')->getData() == $user->getEmail()){
                $user_modifie->setEmail($user->getEmail());
            }else{
                $user_modifie->setEmail($form->get('email')->getData());
            }

            if($form->get('adresse')->getData() == $user->getAdresse()){
                $user_modifie->setAdresse($user->getAdresse());
            }else{
                $user_modifie->setAdresse($form->get('adresse')->getData());
            }

            if($form->get('ville')->getData() == $user->getVille()){
                $user_modifie->setVille($user->getVille());
            }else{
                $user_modifie->setVille($form->get('ville')->getData());
            }

            if($form->get('codepostal')->getData() == $user->getCodepostal()){
                $user_modifie->setCodepostal($user->getCodepostal());
            }else{
                $user_modifie->setCodepostal($form->get('codepostal')->getData());
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->merge($user_modifie);
            $entityManager->flush();

            /*
                if($form->get('motdepasse')->getData() != $user->getPassword()){
                    return $this->redirectToRoute('logout');
                }
            */

            return $this->redirectToRoute('accueil');
        }

        return $this->render('administrateur/modification_des_informations.html.twig', [
            'informations' => $informations,
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/administrateur/gestion/administrateurs/inscription", name="inscription_des_administrateurs")
     */
    public function inscriptionDesAdministrateurs(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
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
            $user->setRoles(array('ROLE_ADMINISTRATEUR'));
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

    /*
        SECTION: PARTENAIRES
    */

    /**
     * @Route("/administrateur/gestion/partenaires", name="gestion_des_partenaires")
     */
    public function gestionDesPartenaires()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);
        $partenaires = $repository->findByRole('ROLE_PARTENAIRE');

        $form = $this->createFormBuilder()
            ->add('modifier', SubmitType::class, ['label' => 'Modifier'])
            ->add('supprimer', SubmitType::class, ['label' => 'Supprimer'])
            ->getForm();

        if ($form->getClickedButton() && 'modifier' === $form->getClickedButton()->getName()) 
        {
            
        }elseif ($form->getClickedButton() && 'supprimer' === $form->getClickedButton()->getName()) {
            
        }

        return $this->render('administrateur/gestion_des_partenaires.html.twig', [
            'partenaires' => $partenaires,
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("administrateur/gestion/partenaires/inscription", name="inscription_des_partenaires")
     */
    public function inscriptionDesPartenaires(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('siret', NumberType::class, array('attr' => array('placeholder' => 'SIRET')))
            ->add('nom', TextType::class, array('attr' => array('placeholder' => 'Nom')))
            ->add('motdepasse', PasswordType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('telephone', TelType::class, array('attr' => array('placeholder' => 'Téléphone')), [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un numero de telephone.',
                    ]),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Veuiller entrer un numero de telephone aillant 10 chiffres.',
                        'max' => 10,
                    ]),
                ],
            ])
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Email')))
            ->add('adresse', TextType::class, array('attr' => array('placeholder' => 'Adresse')), [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre adresse.',
                    ]),
                    new Length([
                        'min' => 5,    
                        'minMessage' => 'Veuillez entrer une adresse valide qui face au maximum 38 characteres.',
                        'max' => 38,
                    ]),
                ],
            ])
            ->add('ville', TextType::class, array('attr' => array('placeholder' => 'Ville')), [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer le nom de la ville dans laquelle vous vivez.',
                    ]),
                    new Length([
                        'min' => 5,    
                        'minMessage' => 'Veuillez entrer le nom d\'une ville valide qui face au maximum 32 characteres.',
                        'max' => 32,
                    ]),
                ],
            ])
            ->add('codepostal', TextType::class, array('attr' => array('placeholder' => 'Code Postal')), [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre code postal.',
                    ]),
                    new Length([
                        'min' => 2,    
                        'minMessage' => 'Veuillez entrer un code postal valide qui face au maximum 5 characteres.',
                        'max' => 5,
                    ]),
                ],
            ])
            ->add('inscription', SubmitType::class, array('label' => 'Inscription'))
            ->getForm();;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {

            $user->setNom($form->get('nom')->getData());
            $user->setPrenom("");
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
     * @Route("/administrateur/gestion/partenaires/modification", name="modification_des_partenaires")
     */
    public function modificationDesPartenaires()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $partenaires = $repository->findByRole('ROLE_PARTENAIRE');

        return $this->render('administrateur/gestion_des_partenaires.html.twig', [
            'partenaires' => $partenaires,
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /*
        SECTION: JEUNES
    */

    /**
     * @Route("/administrateur/gestion/jeunes", name="gestion_des_jeunes")
     */
    public function gestionDesJeunes()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $nomDelUtilisateur = $user->getNom();
        $prenomDelUtilisateur = $user->getPrenom();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $jeunes = $repository->findByRole('ROLE_JEUNE');

        return $this->render('administrateur/gestion_des_jeunes.html.twig', [
            'jeunes' => $jeunes,
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("administrateur/gestion/jeunes/inscription", name="inscription_des_jeunes")
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

    /*
        SECTION: OFFRES
    */

    /**
     * @Route("/administrateur/gestion/offres", name="gestion_des_offres")
     */
    public function gestionDesOffres()
    {
      $entityManager = $this->getDoctrine()->getManager();

        $query = $entityManager->createQuery(
            'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
             FROM App\Entity\Offre o ,App\Entity\User u, App\Entity\Formation f where o.idpartenaire = u.id  and o.idformation = f.id'
        );

        // returns an array of Product objects
       $offres = $query->execute();
       dump($offres) ;

        return $this->render('administrateur/gestion_des_offres.html.twig', [
            'offres' => $offres,
            'controller_name' => 'AdministrateurController',
        ]);
    }
}