<?php

namespace App\Form;

use App\Entity\Musicien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class MusicienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomScene', TextType::class, [
                "label" => "Nom de scène",
                "label_attr" => [
                    "class" => "form-label mt-3"
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('nom', TextType::class, [
                "label" => "Nom",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('prenom', TextType::class, [
                "label" => "Prénom",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('dateNaissance', TextType::class, [
                "label" => "Date de naissance",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false
            ])
            ->add('imageFile',VichImageType::class, [
                "label" => "Image (PNG,JPG)",
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
            ->add('lienImage', UrlType::class, [
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
            ->add('nationalite', null, [
                "label" => "Nationalité",
                "label_attr" => [
                    "class" => "form-label required mt-3",
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
            'data_class' => Musicien::class,
        ]);
    }
}
