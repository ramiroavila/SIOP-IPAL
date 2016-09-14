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
        //DO NOTHING - Es un Rut Chileno
        return;
      }


      //Valido que es DNI PERÚ
      $i = 0;
      $suma = 0;
			$multiplos = array(3,2,7,6,5,4,3,2);

			$array_number = array(6, 7, 8, 9, 0, 1, 1, 2, 3, 4, 5);
			$array_letters = array('K', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');


			$numdni = str_split($numero);
			$dcontrol = $dv;

			foreach($numdni as $digito) {
				$suma+=$digito*$multiplos[$i];
				$i++;
			}

			$key = 11 - ($suma%11);
			$key = $key==11?0:$key;

			if(is_numeric($dcontrol)) {
				if($array_number[$key] == $dcontrol) {
					//Valido
          return;
				}
			} else {
				$dcontrol = strtoupper($dcontrol);
				if($array_letters[$key] == $dcontrol) {
          //Valido
					return;
				}
			}

      //No es un rut válido, ni Chile ni Perú.
      $this->context->buildViolation($constraint->message)
              ->setParameter('%string%', $value)
            ->addViolation();

    }
}
