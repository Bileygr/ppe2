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
     * @Route("/administration/gérer-les-administrateurs", name="administrateur_gestion")
     */
    public function gestion()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $administrateurs = $repository->findByRole('ADMINISTRATEUR');

        return $this->render('administrateur/gestion.html.twig', [
            'administrateurs' => $administrateurs,
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/administration/inscription-des-administrateurs", name="administrateur_inscription")
     */
    public function inscription(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {

            $user->setNom($form->get('nom')->getData());
            $user->setPrenom($form->get('prenom')->getData());
            $user->setUsername();
            if($request->request->get('super_admin') != null){
                $user->setRoles(array($request->request->get('super_admin')));
            }else{
                $user->setRoles(array('ROLE_ADMINISTRATEUR'));
            }
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

            //dump($request->request->get('super_admin'));

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/administration/modifier-ses-informations", name="administrateur_modification")
     */
    public function modification(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $user->getId();
        $userpassword = $user->getPassword();
        
        $user_modifie = new User();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $administrateur = $repository->find($user_id);

        $form = $this->createForm(RegistrationFormType::class, $administrateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('accueil');
        }

        return $this->render('default/modification.html.twig', [
            'administrateur' => $administrateur,
            'registrationForm' => $form->createView(),
        ]);
    }
}