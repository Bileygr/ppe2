<?php

namespace App\Controller;

use App\Entity\User;
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

class PartenaireController extends AbstractController
{
    /**
     * @Route("/partenaire/profil", name="partenaire/profil")
     */
    public function profil()
    {
        return $this->render('partenaire/profil.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/partenaire/connexion", name="partenaire_connexion")
     */
    public function connexion()
    {
        return $this->render('partenaire/connexion.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/partenaire/inscription", name="partenaire_inscription")
     */
    public function inscription(Request $request, UserPasswordEncoderInterface $passwordEncoder)
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

            return $this->redirectToRoute('connexion');
        }

        return $this->render('partenaire/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}