<?php

namespace App\Controller;

use App\Entity\Images;
use App\Entity\Patient;
use App\Form\PatientType;
use App\Entity\PropertyAge;
use App\Entity\PropertyPathologie;
use App\Entity\PropertySexe;
use App\Form\PropertySearchAge;
use App\Repository\PatientRepository;
use App\Form\PropertySearchPathologie;
use App\Form\PropertySearchSexe;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/espace_personnel/patient")
 */
class PatientController extends AbstractController
{
    /**
     * @Route("/pathologie/", name="patient_index_pathologie")
     */
    public function index(Request $request)
    {   
        $propertySearch = new PropertyPathologie();
        $form = $this->createForm(PropertySearchPathologie::class,$propertySearch);
        $form->handleRequest($request);
        //initialement le tableau des articles est vide,
        //c.a.d on affiche les articles que lorsque l'utilisateur
        //clique sur le bouton rechercher
        $patients= [];

        if($form->isSubmitted() && $form->isValid()) {
        //on récupère le nom d'article tapé dans le formulaire
        $pathologie = $propertySearch->getNompathologie();
        if ($pathologie!="")
        //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
        $patients= $this->getDoctrine()->getRepository(Patient::class)->findBy(['pathologie' => $pathologie] );
        else
        //si si aucun nom n'est fourni on affiche tous les articles
        $patients= $this->getDoctrine()->getRepository(Patient::class)->findAll();
        }
        return $this->render('patient/index_pathologie.html.twig',[ 'form' =>$form->createView(), 'patients' => $patients]);

        
       /* return $this->render('patient/index.html.twig', [
            'patients' => $patientRepository->findAll(),
        ]);
    }*/
  }

    /**
     * @Route("/age/", name="patient_index_age")
     */
    public function indexAge(Request $request)
    {   
        $propertySearch = new PropertyAge();
        $form = $this->createForm(PropertySearchAge::class,$propertySearch);
        $form->handleRequest($request);
        //initialement le tableau des articles est vide,
        //c.a.d on affiche les articles que lorsque l'utilisateur
        //clique sur le bouton rechercher
        $patients= [];

        if($form->isSubmitted() && $form->isValid()) {
        //on récupère le nom d'article tapé dans le formulaire
        $age = $propertySearch->getAge();
        if ($age!="")
        //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
        $patients= $this->getDoctrine()->getRepository(Patient::class)->findBy(['age' => $age] );
        else
        //si si aucun nom n'est fourni on affiche tous les articles
        $patients= $this->getDoctrine()->getRepository(Patient::class)->findAll();
        }
        return $this->render('patient/index_age.html.twig',[ 'form' =>$form->createView(), 'patients' => $patients]);

        
       /* return $this->render('patient/index.html.twig', [
            'patients' => $patientRepository->findAll(),
        ]);
    }*/
    }

     /**
     * @Route("/genre/", name="patient_index_sexe")
     */
    public function indexSexe(Request $request)
    {   
        $propertySearch = new PropertySexe();
        $form = $this->createForm(PropertySearchSexe::class,$propertySearch);
        $form->handleRequest($request);
        //initialement le tableau des articles est vide,
        //c.a.d on affiche les articles que lorsque l'utilisateur
        //clique sur le bouton rechercher
        $patients= [];

        if($form->isSubmitted() && $form->isValid()) {
        //on récupère le nom d'article tapé dans le formulaire
        $genre = $propertySearch->getGenre();
        if ($genre!="")
        //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
        $patients= $this->getDoctrine()->getRepository(Patient::class)->findBy(['genre' => $genre] );
        else
        //si si aucun nom n'est fourni on affiche tous les articles
        $patients= $this->getDoctrine()->getRepository(Patient::class)->findAll();
        }
        return $this->render('patient/index_sexe.html.twig',[ 'form' =>$form->createView(), 'patients' => $patients]);

        
       /* return $this->render('patient/index.html.twig', [
            'patients' => $patientRepository->findAll(),
        ]);
    }*/
    }





    /**
     * @Route("/new", name="patient_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = $this->getUser();
        $patient = new Patient($user);
        $patient->setUser($user);
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Recupération des images transmises 
            $images  = $form->get('images')->getData();

            // On fait une boucle sur les images
            foreach($images as $image)
            {
                // génération d'un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                // Copie du fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );

                // Stockage de l'image dans la base de données
                $img = new Images();
                $img->setName($fichier);
                $patient->addImage($img);

            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($patient);
            $entityManager->flush();
            $this->addFlash('success', 'Inscription réussie');
            return $this->redirectToRoute('user_patients');
        }

        return $this->render('patient/new.html.twig', [
            'patient' => $patient,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="patient_show", methods={"GET"})
     */
    public function show(Patient $patient): Response
    {
        return $this->render('patient/show.html.twig', [
            'patient' => $patient,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="patient_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Patient $patient): Response
    {
        //$url_image = $patient->getFilename();
        /*$patient->setFilename(
            new File($this->getParameter('patient_images_directory').'/'.$patient->getFilename())
        );*/
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
             // Recupération des images transmises 
             $images  = $form->get('images')->getData();

             // On fait une boucle sur les images
             foreach($images as $image)
             {
                 // génération d'un nouveau nom de fichier
                 $fichier = md5(uniqid()) . '.' . $image->guessExtension();
 
                 // Copie du fichier dans le dossier uploads
                 $image->move(
                     $this->getParameter('images_directory'),
                     $fichier
                 );
 
                 // Stockage de l'image dans la base de données
                 $img = new Images();
                 $img->setName($fichier);
                 $patient->addImage($img);
 
             }
 
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success','Modifiction  réussie');
            return $this->redirectToRoute('user_patients');
        }

        return $this->render('patient/edit.html.twig', [
            'patient' => $patient,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="patient_delete", methods={"POST"})
     */
    public function delete(Request $request, Patient $patient): Response
    {
        if ($this->isCsrfTokenValid('delete'.$patient->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($patient);
            $entityManager->flush();
        }

        $this->addFlash('success','Patient supprimé de votre agenda');
        return $this->redirectToRoute('user_patients');
    }


     /**
     * @Route("/supprime/image/{id}", name="patient_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request)
    {
         $data = json_decode($request->getContent(), true);
         
         // Vérification de la validité du token
         if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token']))
         {
             // Recupération de l'image
             $nom = $image->getName();

             // Suppression de l'image
             unlink($this->getParameter('images_directory').'/'.$nom);

             // suppression dans la base
             $em = $this->getDoctrine()->getManager();
             $em->remove($image);
             $em->flush();

             // On répond en json

             return new JsonResponse(['success' => 1]);
         }

         else
         {
             return new JsonResponse(['error' => 'Token Invalide'], 400);
         }

    }
}
