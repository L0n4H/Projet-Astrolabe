<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Validator\Password;

class ChangePasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'attr' => ['autocomplete' => 'new-password','class'=>'form-control'],
                    'constraints' => array( new Password()),
                    'label' => 'Nouveau Mot de passe',
                    'label_attr'=>['class'=>'form-label']
                ],
                'second_options' => [
                    'attr' => ['autocomplete' => 'new-password','class'=>'form-control'],
                    'label' => 'Repeter le Mot de passe',
                    'label_attr'=>['class'=>'form-label']

                ],
                'invalid_message' => 'Les mots de passes doivent êtres identiques',
                // Instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
