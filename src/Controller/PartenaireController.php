<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Offre;
use App\Entity\User;
use App\Form\PartenaireRegistrationFormType;
use App\Repository\UserRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PartenaireController extends AbstractController
{
    /**
     * @Route("administrateur/gestion/partenaires/inscription", name="partenaire_inscription")
     */
    public function inscription(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();

        $form = $this->createForm(PartenaireRegistrationFormType::class, $user);
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
     * @Route("/administrateur/gestion/partenaires/modification-des-informations", name="partenaire_modification")
     */
    public function modification(Request $request)
    {
        $id = $this->container->get('session')->get('partenaire_id');
        $entityManager = $this->getDoctrine()->getManager();
        $partenaire = $entityManager->getRepository(User::class)->find($id);

        $form = $this->createForm(PartenaireRegistrationFormType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->flush();
            return $this->redirectToRoute('partenaire_gestion');
        }

        return $this->render('partenaire/modification.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/partenaire/gestion/offres", name="partenaire_gestion_des_offres")
     */
    public function gestionDesOffres()
    {
        return $this->render('partenaire/gestion_des_offres.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/administrateur/gestion/partenaires", name="partenaire_gestion")
     */
    public function gestionDesPartenaires(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);
        $partenaires = $repository->findByRole('ROLE_PARTENAIRE');

        if(isset($_POST['modifier'])){
            $id = $request->request->get('id');
            $partenaire = $entityManager->getRepository(User::class)->find($id);

            $this->container->get('session')->set('partenaire_id', $partenaire->getId());
            return $this->redirectToRoute('partenaire_modification');
        }

        if(isset($_POST['supprimer'])){
            $id = $request->request->get('id');
            $partenaire = $entityManager->getRepository(User::class)->find($id);

            $entityManager->remove($partenaire);
            $entityManager->flush();

            return $this->redirectToRoute('gestion_des_partenaires');
        }

        return $this->render('partenaire/gestion.html.twig', [
            'partenaires' => $partenaires
        ]);
    }
}