<?php

namespace App\Form;

use App\Entity\Groupe;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class GroupeType extends AbstractType
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
            ->add('dateCreation', TextType::class, [
                "label" => "Date de création",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('biographie', CKEditorType::class, [
                "label" => "Biographie",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => false 
            ])
            ->add('imageFile', VichImageType::class, [
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
            ->add('genresMusicaux', null, [
                "label" => "Genres Musicaux",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control select2-multiple"
                ] , 
                "required" => false 
            ])
            ->add('labels', null, [
                "label" => "Label",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control select2-multiple"
                ] , 
                "required" => false 
            ])
            ->add('membres', CollectionType::class, [
                "label" => "Membres",
                'entry_type'=>MembreType::class,
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
            ->add('nationalite', null, [
                "label" => "Nationalité",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "attr" => [
                    "class" => "form-control select2"
                ] , 
                "required" => true 
            ])
            ->add('passages',CollectionType::class, [
                "label" => "Passages",
                'entry_type'=>PassageType::class,
                'entry_options' => ['label' => false],
                'allow_add'=> true,
                'allow_delete' => true,
                'by_reference' => false,
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
            'data_class' => Groupe::class,
        ]);
    }
}
