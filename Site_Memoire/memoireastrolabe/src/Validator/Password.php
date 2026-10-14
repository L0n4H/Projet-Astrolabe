<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Password extends Constraint
{
    public $message = 'Le mot de passe doit contenir au moins une majuscule, un chiffre et avoir une longueur de 8 caractères au minimum';

    public function validatedBy() {
        return static::class.'Validator';
    }
}
