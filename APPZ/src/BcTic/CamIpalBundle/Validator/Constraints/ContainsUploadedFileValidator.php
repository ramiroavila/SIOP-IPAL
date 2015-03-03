<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager as EntityManager;

class ContainsUploadedFileValidator extends ConstraintValidator
{

	private $em;

	public function __construct(EntityManager $entityManager)
    {
      $this->em = $entityManager;
    }

    public function validate($obj, Constraint $constraint)
    {
     
      //El objeto debe tener al menos una fotografía:
      //En el caso de edición 
      if (strlen($obj->getFile1()) == 0 ) {
        //Puede ser que sea cero, pero debo resguardar que venga en el nuevo form
        if (strlen($obj->getUploadedFile1()) == 0 ) {
          $this->context->buildViolation($constraint->message)
                ->atPath('uploadedFile1')
                ->addViolation();
        }
      }

    }
}