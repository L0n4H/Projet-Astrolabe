<?php

namespace App\Form;

use App\Entity\Evenement;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut', DateTimeType::class, [
                "label" => "Date de début",
                "widget" => "single_text",
                "label_attr" => [
                    "class" => "form-label required mt-3",
                ] ,
                "attr" => [
                    "class" =>  "form-control",
                    "max"   =>  "9999-01-01T00:00",
                ],
                "required" => true
            ])
            ->add('dateFin', DateTimeType::class, [
                "label" => "Date de fin",
                "widget" => "single_text",
                "label_attr" => [
                    "class" => "form-label required mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control",
                    "max"   =>  "9999-01-01T00:00"
                ],
                "required" => true
            ])
            ->add('description', CKEditorType::class, [
                "label" => "Description",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ],
                "attr" => [
                    "class" => "form-control"
                ],
                "required" => false 
            ])
            ->add('titre', TextType::class, [
                "label" => "Titre",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control",
                ],
                "required" => true
            ])
            ->add('typeEvenement', null, [
                "label" => "Type d'événement",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control select2"
                ] , 
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
            ->add('ressources', CollectionType::class, [
                "label" => "Ressources",
                'entry_type'=>CustomRessourceType::class,
                'entry_options' => ['label' => false],
                'allow_add'=> true,
                'allow_delete' => true,
                'by_reference' => false,
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('passages', CollectionType::class, [
                "label" => "Passages",
                'entry_type'=>PassageType::class,
                'entry_options' => ['label' => false],
                'allow_add'=> true,
                'allow_delete' => true,
                'by_reference' => false,
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('lieu', null, [
                "label" => "Lieu",
                "label_attr" => [
                    "class" => "form-label required mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control select2",
                ],
                "required" => true 
            ])
            ->add('genresMusicaux', null, [
                "label" => "Genres Musicaux",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ],
                "attr" => [
                    "class" => "form-control select2-multiple", 
                ], 
                "required" => false
            ])
            ->add('imageFile', VichImageType::class, [
                "label" => "Image d'affiche",
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
            ->add('lien', UrlType::class, [
                "label" => "Lien",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] , 
                "attr" => [
                    "class" => "form-control",
                ],
                "required" => false 

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
