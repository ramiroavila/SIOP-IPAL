<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsSupervisor extends Constraint
{
    public $message = '"%string%" no está registrado como SUPERVISOR.';

    public function validatedBy()
    {
      return 'supervisor_validator';
    }
}
