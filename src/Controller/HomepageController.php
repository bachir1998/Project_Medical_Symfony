<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index(): Response
    {
        return $this->render('homepage/home.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     *  @Route("/", name="home")
     */

    public function home()
    {
        return $this->render('homepage/home.html.twig');
    }

    /**
     * @Route("/espace_personnel", name="home_user")
     */
    public function espacepersonnel(): Response
    {
        $user = $this->getUser();
        $username="user";
        $patient="patient";
        
        return $this->render('espace_personnel/homeuser.html.twig', [
            'controller_name' => 'HomepageController',
            'patients' => $user->getPatient(),
            $this->get('twig')->addGlobal('mypatient' ,$user->getPatient()),
        ]);
    }
}
