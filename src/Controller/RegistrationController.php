<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/espace_personnel/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
           $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $this->get('twig')->addGlobal('password', $form->get('plainPassword')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

           

            $medecin = $form->getData();
            $email='email';

            //envoi du mail
            $message = (new \Swift_Message('Nouveau utilisateur '))
               //Attribution de l'expéditeur
               ->setFrom("noreply@gmail.com")
           
               //Attribution du destinataire
               ->setTo($medecin->$email)

               //On crée le message   ,['maGlobal', $form->get('plainPassword')->getData()]
               ->setBody(
                   $this->renderView(
                       'emails/email.html.twig',compact('medecin')
                   ),
                   'text/html'
                );

                //envoi du message
                $mailer->send($message);
                $this->addFlash('success','Inscription réussie, un mail a été envoyé au nouveau utilisateur');
            // do anything else you need here, like send an email
               return $this->redirectToRoute('user_index');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
