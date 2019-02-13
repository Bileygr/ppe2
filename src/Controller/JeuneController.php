<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class JeuneController extends AbstractController
{
	/**
     * @Route("/administrateur/gestion/jeunes/inscription", name="jeune_inscription")
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

    /**
     * @Route("/administrateur/gestion/jeunes/modification-des-informations", name="modification_des_jeunes")
     */
    public function modification(Request $request)
    {
        $id = $this->container->get('session')->get('userId');
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);

        $form = $this->createFormBuilder($user)
            ->add('nom', TextType::class, array('attr' => array('placeholder' => $user->getNom())))
            ->add('prenom', TextType::class, array('attr' => array('placeholder' => $user->getPrenom())))
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
            $entityManager->flush();
            return $this->redirectToRoute('gestion_des_jeunes');

        }

        return $this->render('administrateur/modification_des_informations_jeunes.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/administrateur/gestion/jeunes", name="jeune_gestion")
     */
    public function gestionDesJeunes(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $nomDelUtilisateur = $user->getNom();
        $prenomDelUtilisateur = $user->getPrenom();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $jeunes = $repository->findByRole('ROLE_JEUNE');

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $user = $entityManager->getRepository(User::class)->find($id);

            $this->container->get('session')->set('userId', $user->getId());
            return $this->redirectToRoute('modification_des_jeunes');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $user = $entityManager->getRepository(User::class)->find($id);

            $entityManager->remove($user);
            $entityManager->flush();

            return $this->redirectToRoute('gestion_des_jeunes');
        }

        return $this->render('administrateur/gestion_des_jeunes.html.twig', [
            'jeunes' => $jeunes,
            'controller_name' => 'AdministrateurController',
        ]);
    }
}
