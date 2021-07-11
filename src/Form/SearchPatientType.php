<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormTypeInterface;

class SearchPatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

           ->add('age', EntityType::class ,[
            'class' => Patient::class,
            'choice_label' => 'age'

            
            ])
            ->add('pathologie', EntityType::class ,[
                'class' => Patient::class,
                'choice_label' => 'pathologie'

                
                ])
            
            ->add('genre', EntityType::class ,[
                    'class' => Patient::class,
                    'choice_label' => 'genre'
    
                    
                    ])
    
             

                ->add('Rechercher', SubmitType::class)    
                ;
    }
}