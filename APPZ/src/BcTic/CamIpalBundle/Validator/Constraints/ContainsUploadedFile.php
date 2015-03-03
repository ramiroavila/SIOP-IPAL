<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsUploadedFile extends Constraint
{
    public $message = '"Debe cargar al menos una fotografía de terreno.';

    public function validatedBy()
    {
      return 'uploaded_file_validator';
    }

    public function getTargets()
    {
     return self::CLASS_CONSTRAINT;
    }    
}