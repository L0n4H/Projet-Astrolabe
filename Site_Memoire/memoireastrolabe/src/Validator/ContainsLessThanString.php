<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsLessThanString extends Constraint
{
    public $message = 'Le champ doit contenir au minimum deux caractères.';

    public function validatedBy() {
        return static::class.'Validator';
    }
}
