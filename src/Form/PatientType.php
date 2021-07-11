<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom',null, [
                'required' => true 
            ])
            ->add('nom',null, [
                'required' => true 
            ])
            ->add('age',null, [
                'required' => true 
            ])
            ->add('birthday', DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text',
            ],null, [
                'required' => true 
            ])
            ->add('epaule',null, [
                'required' => true 
            ])
            ->add('pathologie',null, [
                'required' => true 
            ])
            ->add('centre',null, [
                'required' => true 
            ])
            ->add('tabac',null, [
                'required' => true 
            ])
            ->add('diabete',null, [
                'required' => true 
            ])
            ->add('retraite',null, [
                'required' => true 
            ])
            ->add('genre',null, [
                'required' => true 
            ])
            ->add('atmp',null, [
                'required' => true 
            ])
            ->add('imc',null, [
                'required' => true 
            ])
            // Ajout du champ images dans le formulair du patient
            // ce n'est pas lié à la BD
            ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false 
            ])
           
        ;
            
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}
