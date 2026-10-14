<?php

namespace App\Form;

use App\Entity\Passage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PassageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut', DateTimeType::class, [
                "label" => "Date de début",
                "widget" => "single_text",
                "with_seconds" => false,
                'help' => 'Pour qu\'une date soit valide il faut renseigner le jour, le mois, l\'année ainsi que l\'heure',
                'help_attr'=> [
                    'class'=>"text-secondary small",
                ],
                "label_attr" => [
                    "class" => "form-label",
                ] ,
                "attr" => [
                    "max"   =>  "9999-01-01T00:00",
                    "class" => "form-control",
                ] , 
                "required" => false 
            ])
            ->add('dateFin', DateTimeType::class, [
                "label" => "Date de fin",
                "widget" => "single_text",
                "with_seconds" => false,
                'help' => 'Pour qu\'une date soit valide il faut renseigner le jour, le mois, l\'année ainsi que l\'heure',
                'help_attr'=> [
                    'class'=>"text-secondary small",
                ],
                "label_attr" => [
                    "class" => "form-label",
                ] ,
                "attr" => [
                    "max"   =>  "9999-01-01T00:00",
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('groupe', null, [
                "label" => "Groupe",
                "label_attr" => [
                    "class" => "form-label required",
                ] ,
                "attr" => [
                    "class" => "form-control select2",
                ],
                "required" => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Passage::class,
        ]);
    }
}
