<?php

namespace App\Form;

use App\Entity\Nationalite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class NationaliteType extends AbstractType
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
            ->add('codeISO', TextType::class, [
                "label" => "Code ISO de taille 2",
                "label_attr" => [
                    "class" => "form-label mt-3",
                ] ,
                "constraints" => [
                    new Length(['max'=> 2,'min'=>2])
                ],
                "attr" => [
                    "class" => "form-control"
                ] , 
                "required" => true 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Nationalite::class,
        ]);
    }
}
