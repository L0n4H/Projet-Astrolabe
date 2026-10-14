<?php

namespace App\Form;

use App\Entity\CategorieMusicale;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieMusicaleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                "label" => "Nom",
                "label_attr" => [
                    "class" => "form-label required mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control",
                ], 
                "required" => true 
            ])
            ->add('genresMusicaux', null, [
                "label" => "Genres Musicaux",
                "label_attr" => [
                    "class" => "form-label required mt-3",
                ] ,
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
            'data_class' => CategorieMusicale::class,
        ]);
    }
}
