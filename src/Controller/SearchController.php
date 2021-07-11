<?php

namespace App\Controller;

use App\Form\SearchPatientType;
use App\Repository\PatientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/espace_personnel/search", name="search_patient")
     */
    public function searchPatient(Request $request,PatientRepository $patientRepository)
    {

        $searchpatientForm = $this->createForm(SearchPatientType::class);
        if($searchpatientForm->handleRequest($request)->isSubmitted() && $searchpatientForm->isValid())
        {
            $critere = $searchpatientForm->getData();
            
            $patient = $patientRepository->searchPatient($critere);
            dd($patient);
        }
        return $this->render('search/patient.html.twig',
          [
              'search_form' => $searchpatientForm->createView(),
          ]);
    }
}