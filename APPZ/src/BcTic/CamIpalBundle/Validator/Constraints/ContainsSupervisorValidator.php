<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager as EntityManager;

class ContainsSupervisorValidator extends ConstraintValidator
{

	private $em;

	public function __construct(EntityManager $entityManager)
    {
      $this->em = $entityManager;
    }

    public function validate($value, Constraint $constraint)
    {

      //Veo si está en el registro:
      $supervisores = array();

      //Busco todos los usuarios que tengan un cargo - no importa cual.
      $supervisoresResult = $this->em->getRepository('BcTicCamIpalBundle:Empleado')
                         ->createQueryBuilder('s')
												 ->orderBy('s.nombre', 'ASC')
                         ->join('s.pais','p')
                         ->getQuery()->getResult();


      foreach($supervisoresResult as $entity) {
        $supervisores[md5(strtoupper($entity->__toString()))] = $entity->__toString();
      }


      if (!array_key_exists(md5(strtoupper($value)),$supervisores))   {
            $this->context->addViolation(
                $constraint->message,
                array('%string%' => $value)
            );
      }

    }
}
