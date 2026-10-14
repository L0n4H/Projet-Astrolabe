<?php

namespace App\Form;

use App\Entity\Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MembreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('actif', null, [
                "label" => "Actif",
                "label_attr" => [
                    "class" => "form-check-label",
                ] ,
                "attr" => [
                    "class" => "form-check-control"
                ] , 
                "required" => false
            ])
            ->add('musicien', null, [
                "label" => "Musicien",
                "label_attr" => [
                    "class" => "form-label required",
                ] ,
                "attr" => [
                    "class" => "form-control select2",
                    'required' => 'required'
                ],
                "required" => true 
            ])
            ->add('instruments', null, [
                "label" => "Instruments",
                "label_attr" => [
                    "class" => "form-label",
                ] ,
                "attr" => [
                    "class" => "form-control select2-multiple",  
                ] , 
                "required" => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Membre::class,
        ]);
    }
}
