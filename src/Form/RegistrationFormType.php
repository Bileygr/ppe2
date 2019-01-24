<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('attr' => array('placeholder' => 'Nom')))
            ->add('prenom', TextType::class, array('attr' => array('placeholder' => 'Prénom')))
            /*
            ->add('motdepasse', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
                ), [
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
            */

            // Trouver une facon de cacher le champ en dessous si il ne s'agit pas d'un partenaire
            //->add('siret', NumberType::class, array('attr' => array('placeholder' => 'SIRET')))
            
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
