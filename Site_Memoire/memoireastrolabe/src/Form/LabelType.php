<?php

namespace App\Form;

use App\Entity\Label;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class LabelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                "label" => "Nom",
                "label_attr" => [
                    "class" => "form-label required mt-3"
                ] ,
                "attr" => [
                    "class" => "form-control",
                ],
                "required" => true
            ])
            ->add('dateCreation', TextType::class, [
                "label" => "Date création",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('description', TextareaType::class, [
                "label" => "Description",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('logoFile', VichImageType::class, [
                "label" => "Logo",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control dropify",
                    "data-allowed-file-extensions" => "png jpg svg gif bmp jpeg mp4",
                    "accept" => ".png, .jpg, .svg, .gif, .bmp, .jpeg, .mp4"
                ] , 
                "required" => false 
            ])
            ->add('lienLogo', UrlType::class, [
                "label" => "Lien",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] , 
                "attr" => [
                    "class" => "form-control",
                ],
                "required" => false 

            ])
            ->add('etiquettes', null, [
                "label" => "Etiquettes",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control select2-multiple"
                ] , 
                "required" => false 
            ])
            ->add('groupes', null, [
                "label" => "Groupes",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control select2-multiple"
                ] , 
                "required" => false 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Label::class,
        ]);
    }
}
