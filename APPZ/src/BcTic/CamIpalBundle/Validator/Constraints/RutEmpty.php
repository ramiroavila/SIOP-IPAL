<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class RutEmpty extends Constraint
{
    public $message = 'El valor indicado "%string%" no es válido. Puede ingresar el RUT (en caso de Chile con formato XXXXXXXX-Z) o el nombre de la persona en caso de otros paises.';

    public function validatedBy()
    {
      return get_class($this).'Validator';
    }
}
