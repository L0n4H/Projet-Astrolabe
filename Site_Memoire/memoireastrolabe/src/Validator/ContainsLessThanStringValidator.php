<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class ContainsLessThanStringValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof ContainsLessThanString) {
            throw new UnexpectedTypeException($constraint, ContainsLessThanString::class);
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!preg_match('#^[a-zA-Z\d]{2,}#', $value, $matches)) {
            // the argument must be a string or an object implementing __toString()
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}
