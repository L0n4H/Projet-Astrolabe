<?php

namespace App\Form;

use App\Entity\Ressource;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CustomRessourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                "label" => "Nom",
                "label_attr" => [
                    "class" => "form-label required",
                ] ,
                "attr" => [
                    "class" => "form-control",
                    'required' => 'required',
                ],
                'required' => true,
            ])
            ->add('lien', UrlType::class, [
                "label" => "Lien",
                "label_attr" => [
                    "class" => "form-label",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('file', VichImageType::class, [
                "label" => "Image",
                "label_attr" => [
                    "class" => "form-label",
                ] ,
                "attr" => [
                    "class" => "form-control dropify",
                    "data-allowed-file-extensions" => "png jpg svg gif bmp jpeg mp4 mov wav avi flv",
                    "accept" => ".png, .jpg, .svg, .gif, .bmp, .jpeg, .mp4, .mov, .wav, .avi, .flv"
                ] , 
                "required" => false 
            ])
            ->add('type', null , [
                "label" => "Type",
                "label_attr" => [
                    "class" => "form-label required",
                ] ,
                "attr" => [
                    "class" => "form-control select2",
                    'required' => 'required',
                ],
                "required" => true
            ])
            ->add('etiquettes', null, [
                "label" => "Liste d'étiquettes",
                "label_attr" => [
                    "class" => "form-label",
                ] ,
                "attr" => [
                    "class" => "form-control select2-multiple"
                ] , 
                "required" => false 
            ])
            ->add('credits', TextType::class, [
                "label" => "Crédits",
                "label_attr" => [
                    "class" => "form-label",
                ] ,
                "attr" => [
                    "class" => "form-control",
                ] , 
                "required" => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ressource::class,
        ]);
    }
}
