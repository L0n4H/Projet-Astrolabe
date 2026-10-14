<?php

namespace App\Form;

use App\Entity\Lieu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType ;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LieuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ville',TextType::class, [
                "label" => "Ville",
                "label_attr" => [
                    "class" => "form-label required mt-3",
                ],
                "attr" => [
                    "class" => "form-control"
                ], 
                "required" => true 
            ])
            ->add('CP', TextType::class, [
                "label" => "Code postal",
                "label_attr" => [
                    "class" => "form-label required mt-3"
                ],
                "attr" => [
                    'maxlength' => 5,
                    "class" => "form-control",
                ],
                "required" => true
            ])
            ->add('adresse',TextType::class, [
                "label" => "Adresse",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ],
                "attr" => [
                    "class" => "form-control"
                ], 
                "required" => false 
            ])
            ->add('nomBatiment', TextType::class, [
                "label" => "Nom batiment",
                "label_attr" => [
                    "class" => "form-label required mt-3",
                ],
                "attr" => [
                    "class" => "form-control",
                ], 
                "required" => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lieu::class,
        ]);
    }
}
