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
     * @Route("/administration/modification-des-informations-d-un-partenaire", name="partenaire_modification")
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

        return $this->render('default/modification.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/administration/gérer-les-partenaires", name="partenaire_gestion")
     */
    public function gestionDesPartenaires(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);
        $partenaires = $repository->findByRole('ROLE_PARTENAIRE');

        if(isset($_POST['modifier'])){
            $partenaire_id = $request->request->get('id');
            $this->container->get('session')->set('partenaire_id', $partenaire_id);

            return $this->redirectToRoute('partenaire_modification');
        }

        if(isset($_POST['supprimer'])){
            $partenaire_id = $request->request->get('id');
            $partenaire = $entityManager->getRepository(User::class)->find($partenaire_id);

            $entityManager->remove($partenaire);
            $entityManager->flush();

            return $this->redirectToRoute('partenaire_gestion');
        }

        return $this->render('partenaire/gestion.html.twig', [
            'partenaires' => $partenaires
        ]);
    }
}