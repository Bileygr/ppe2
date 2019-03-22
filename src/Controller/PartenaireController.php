<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Formation;
use App\Entity\Offre;
use App\Entity\User;
use App\Form\PartenaireRegistrationFormType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository; 
use App\Repository\CandidatureRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PartenaireController extends AbstractController
{
    /**
     * @Route("/partenaire/modifier-ses-informations", name="partenaire_modification")
     */
    public function modificationDeSesInformations(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userId = $user->getId();
        $userPassword = $user->getPassword();
        
        $userModifie = new User();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $partenaire = $repository->find($userId);

        $form = $this->createForm(PartenaireRegistrationFormType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('accueil');
        }

        return $this->render('partenaire/modification_de_ses_informations.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/partenaire/gérer-les-candidatures", name="partenaire_gestion_des_candidatures")
     */
    public function gestionDesCandidatures(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Candidature::class);
        $candidatures = $repository->findPartenaireId($user->getId());

        if(isset($_POST['accepter'])){
            $candidatureId = $request->request->get('id');
            $candidature = $repository->find($candidatureId);
            $candidature->setStatus(1);

            $entityManager->flush();
            return $this->redirectToRoute('partenaire_gestion_des_candidatures');
        }

        if(isset($_POST['refuser'])){
            $candidatureId = $request->request->get('id');
            $candidature = $repository->find($candidatureId);
            $candidature->setStatus(0);

            $entityManager->flush();
            return $this->redirectToRoute('partenaire_gestion_des_candidatures');
        }

        return $this->render('partenaire/gestion_des_candidatures.html.twig', [
            'candidatures' => $candidatures
        ]);
    }
}