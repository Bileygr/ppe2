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
     * @Route("/administrateur/gestion/administrateurs", name="gestion_des_administrateurs")
     */
    public function insriptionDesAdministrateurs(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
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

    /**
     * @Route("/administrateur/inscription", name="inscription_des_administrateurs")
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
        $repository = $this->getDoctrine()->getRepository(User::class);
        $partenaires = $repository->findByRole('ROLE_PARTENAIRE');

        return $this->render('administrateur/gestionDesPartenaires.html.twig', [
            'jeunes' => $jeunes,
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

        return $this->render('partenaire/register.html.twig', [
            'registrationForm' => $form->createView(),
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
        $repository = $this->getDoctrine()->getRepository(User::class);
        $jeunes = $repository->findByRole('ROLE_JEUNE');

        return $this->render('administrateur/gestion_des_jeunes.html.twig', [
            'jeunes' => $jeunes,
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("administrateur/jeune/inscription", name="inscription_des_jeunes")
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
        $repository = $this->getDoctrine()->getRepository(User::class);
        $offres = $repository->findByRole('');

        return $this->render('administrateur/gestion_des_offres.html.twig', [
            'offres' => $offres,
            'controller_name' => 'AdministrateurController',
        ]);
    }
}