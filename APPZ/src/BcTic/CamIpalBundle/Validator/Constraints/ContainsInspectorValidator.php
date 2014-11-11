<?php

namespace BcTic\CamIpalBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager as EntityManager;

class ContainsInspectorValidator extends ConstraintValidator
{

	private $em;

	public function __construct(EntityManager $entityManager)
    {
      $this->em = $entityManager;
    }

    public function validate($value, Constraint $constraint)
    {

      //Veo si está en el registro:
      $inspectores = array();

      //Busco todos los usuarios que tengan ROL PREVENCIONISTA:
      $inspectoresResult = $this->em->getRepository('BcTicCamIpalBundle:Usuario')
                         ->createQueryBuilder('u')
                         ->join('u.roles','rol')
                         ->where('rol.nombre LIKE :rol')
                         ->setParameters(array('rol' => 'INSPECTOR'))
                         ->getQuery()->getResult();  


      foreach($inspectoresResult as $entity) {                           
        $inspectores[md5(strtoupper(trim($entity->getNombre())))] = md5(strtoupper(trim($entity->getNombre())));
      }

      $inspectoresResult = $this->em->getRepository('BcTicCamIpalBundle:Registro')
                         ->createQueryBuilder('r')
                         ->where('r.visible = 1')
                         ->join('r.roles','rol')
                         ->where('rol.nombre = :rol')
                         ->setParameters(array('rol' => 'INSPECTOR'))
                         ->orderBy('r.nombre', 'ASC')
                         ->getQuery()->getResult();

      foreach($inspectoresResult as $entity) {                           
        $inspectores[md5(strtoupper(trim($entity->getNombre())))] = md5(strtoupper(trim($entity->getNombre())));
      }  


      //Busco todos los usuarios que tengan ROL PREVENCIONISTA:
      $inspectoresResult = $this->em->getRepository('BcTicCamIpalBundle:Usuario')
                         ->createQueryBuilder('u')
                         ->join('u.roles','rol')
                         ->where('rol.nombre LIKE :rol')
                         ->setParameters(array('rol' => 'PREVENCIONISTA'))
                         ->getQuery()->getResult();  


      foreach($inspectoresResult as $entity) {                           
        $inspectores[md5(strtoupper(trim($entity->getNombre())))] = md5(strtoupper(trim($entity->getNombre())));
      }

      $inspectoresResult = $this->em->getRepository('BcTicCamIpalBundle:Registro')
                         ->createQueryBuilder('r')
                         ->where('r.visible = 1')
                         ->join('r.roles','rol')
                         ->where('rol.nombre = :rol')
                         ->setParameters(array('rol' => 'PREVENCIONISTA'))
                         ->orderBy('r.nombre', 'ASC')
                         ->getQuery()->getResult();

      foreach($inspectoresResult as $entity) {                           
        $inspectores[md5(strtoupper(trim($entity->getNombre())))] = md5(strtoupper(trim($entity->getNombre())));
      }  


      if (!array_key_exists(md5(strtoupper(trim($value))),$inspectores))   {
            $this->context->addViolation(
                $constraint->message,
                array('%string%' => $value)
            );
      }      
            
    }
}