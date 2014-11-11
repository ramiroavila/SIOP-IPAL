<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsInspector extends Constraint
{
    public $message = '"%string%" no está registrado como inspector en Personas o en Usuarios con el perfil INSPECTOR o PREVENCIONISTA.';

    public function validatedBy()
    {
      return 'inspector_validator';
    }
}