<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Candidature;
use App\Form\RegistrationFormType;
use App\Repository\CandidatureRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class JeuneController extends AbstractController
{
	/**
     * @Route("/jeune/modifier-ses-informations", name="jeune_modification")
     */
    public function modificationDeSesInformations(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $user->getId();
        $userpassword = $user->getPassword();
        
        $user_modifie = new User();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $jeune = $repository->find($user_id);

        $form = $this->createForm(RegistrationFormType::class, $jeune, ['allow_file_upload' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $file = $form->get('cv')->getData();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            try {
                $file->move($this->getParameter('cv_directory'), $fileName);
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
                return $this->redirectToRoute('jeune_modification');
            }

            $jeune->setCV($fileName);
            
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('accueil');
        }

        return $this->render('jeune/modification_de_ses_informations.html.twig', [
            'jeune' => $jeune,
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/jeune/mes-candidatures", name="jeune_gestion_de_ses_candidatures")
     */
    public function gestionDesCandidatures(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Candidature::class);
        $candidatures = $repository->findByJeuneId($this->get('security.token_storage')->getToken()->getUser()->getId());

        if(isset($_POST['annuler'])){
            $candidature = $repository->find($request->request->get('id'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($candidature);
            $entityManager->flush();

            return $this->redirectToRoute('jeune_gestion_de_ses_candidatures');
        }

        return $this->render('jeune/gestion_des_candidatures.html.twig', [
            'candidatures' => $candidatures
        ]);
    }

    /**
     * @Route("/download/", name="download")
     */
    public function download()
    {
        // send the file contents and force the browser to download it
        return $this->file($this->getParameter('public/upload/cv/') . 'hello_world.xls');
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}