<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RutValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {

      if (strpos($value,'-') == false) {
        $this->context->buildViolation($constraint->message)
              ->setParameter('%string%', $value)
            ->addViolation();
        return;
      }

      $rut = preg_replace('/[^k0-9]/i', '', $value);
      $dv  = substr($rut, -1);
      $numero = substr($rut, 0, strlen($rut)-1);
      $i = 2;
      $suma = 0;
      foreach(array_reverse(str_split($numero)) as $v)
      {
        if($i==8)
            $i = 2;
        $suma += $v * $i;
        ++$i;
      }

      $dvr = 11 - ($suma % 11);

      if($dvr == 11) $dvr = 0;
      if($dvr == 10) $dvr = 'K';

      if($dvr == strtoupper($dv)) {
        //DO NOTHING
      } else {
        $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value)
              ->addViolation();
      }

    }
}
