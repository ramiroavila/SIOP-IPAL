<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Rut extends Constraint
{
    public $message = 'El rut indicado "%string%" no es válido.';

    public function validatedBy()
    {
      return get_class($this).'Validator';
    }
}
