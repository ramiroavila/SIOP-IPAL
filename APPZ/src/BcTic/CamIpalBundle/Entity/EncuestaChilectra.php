<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaChilectra
 *
 * @ORM\Entity
 *
 */
class EncuestaChilectra extends Encuesta
{


    public function __construct() {

        $this->setCreatedAt(date('U'));
        //Respuestas NA por defecto
        $this->setRespuesta11(2);
        $this->setRespuesta12(2);
        $this->setRespuesta13(2);
        $this->setRespuesta21(2);
        $this->setRespuesta22(2);
        $this->setRespuesta23(2);
        $this->setRespuesta31(2);
    }


    public function getKey() {
      return "chilectra";
    }

    public function getHits($criticidad) {

        $data = array(
                50 => array (
                    'items' => 7,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0) +
                                (($this->getRespuesta12() == 1) ? 1 : 0)+
                                (($this->getRespuesta13() == 1) ? 1 : 0) +
                                (($this->getRespuesta21() == 1) ? 1 : 0) +
                                (($this->getRespuesta22() == 1) ? 1 : 0) +
                                (($this->getRespuesta23() == 1) ? 1 : 0) +
                                (($this->getRespuesta31() == 1) ? 1 : 0)
                    ),
                40 => array(
                    'items' => 0,
                    'indice' => 0,
                    ),
                30 => array(
                    'items' => 0,
                    'indice' => 0,
                    ),
                20 => array (
                    'items' => 6,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta41() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta51() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta52() == 1) ? 1 : 0 )
                    ),
                10 => array (
                    'items' => 1,
                    'indice' => (($this->getRespuesta32() == 1) ? 1 : 0 )
                    ),
                5 => array (
                    'items' => 0,
                    'indice' => 0
                    ),
                );

       return $data[$criticidad]['indice'];

    }

    public function getRespuestasAgrupadas() {
      $data = array(0 => 0,1 => 0,2 => 0);
      //Debo iterar en todas las respuestas y agrupar las respuestas:
      $enum = $this->getRespuesta11(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta12(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta13(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta21(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta22(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta23(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta31(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta32(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta33(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta41(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta42(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta43(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta51(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta52(); $data[$enum] = $data[$enum] + 1;
      return $data;
    }



        public function getRespuestasAgrupadasNumeral() {

          $data = array();
          $data[] = "respuesta_1_1";
          $data[] = "respuesta_1_2";
          $data[] = "respuesta_1_3";
          $data[] = "respuesta_2_1";
          $data[] = "respuesta_2_2";
          $data[] = "respuesta_2_3";
          $data[] = "respuesta_3_1";
          $data[] = "respuesta_3_2";
          $data[] = "respuesta_3_3";
          $data[] = "respuesta_4_1";
          $data[] = "respuesta_4_2";
          $data[] = "respuesta_4_3";
          $data[] = "respuesta_5_1";
          $data[] = "respuesta_5_2";

          return $data;

        }


    public function getIncumplimientos() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_chilectra";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_chilectra";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_chilectra";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_chilectra";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_chilectra";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_chilectra";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_chilectra";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_chilectra";
      if ($this->getRespuesta33() == 1) $data[] = "respuesta3.3_chilectra";
      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_chilectra";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_chilectra";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_chilectra";
      if ($this->getRespuesta51() == 1) $data[] = "respuesta5.1_chilectra";
      if ($this->getRespuesta52() == 1) $data[] = "respuesta5.2_chilectra";

      return $data;
    }

     public function getIncumplimientos50() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_chilectra";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_chilectra";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_chilectra";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_chilectra";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_chilectra";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_chilectra";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_chilectra";
      return $data;
    }

    public function getIndiceIPAL()
    {
        $ipal = 0;
        //Calcula el índice IPAL según Fórmula:
        $data = array(
                50 => array (
                    'items' => 7,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0) +
                                (($this->getRespuesta12() == 1) ? 1 : 0)+
                                (($this->getRespuesta13() == 1) ? 1 : 0) +
                                (($this->getRespuesta21() == 1) ? 1 : 0) +
                                (($this->getRespuesta22() == 1) ? 1 : 0) +
                                (($this->getRespuesta23() == 1) ? 1 : 0) +
                                (($this->getRespuesta31() == 1) ? 1 : 0)
                    ),
                20 => array (
                    'items' => 6,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta41() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta51() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta52() == 1) ? 1 : 0 )
                    ),
                10 => array (
                    'items' => 1,
                    'indice' => (($this->getRespuesta32() == 1) ? 1 : 0 )
                    ),
                5 => array (
                    'items' => 0,
                    'indice' => 0
                    ),
                );

                //Ahora los valores
                foreach ($data as $index => $value) {
                  //Value = items & indice
                  $valor = 0;
                  if ($value["items"] > 0) {
                    $rango = round(100 * ( $value['indice']/$value['items'] ),0);
                    if ($rango >= 90) $valor = 8;
                    if ( ($rango >= 77 ) and ($rango < 90) )  $valor = 7;
                    if ( ($rango >= 64 ) and ($rango < 77) )  $valor = 6;
                    if ( ($rango >= 51 ) and ($rango < 64) )  $valor = 5;
                    if ( ($rango >= 38 ) and ($rango < 51) )  $valor = 4;
                    if ( ($rango >= 25 ) and ($rango < 38) )  $valor = 3;
                    if ( ($rango >= 13 ) and ($rango < 25) )  $valor = 2;
                    if ( ($rango > 0 ) and ($rango < 13) )  $valor = 1;
                    if ( $rango == 0 )  $valor = 0;
                  }

                  $data[$index]['valor'] = $valor;
                }

                foreach ($data as $index => $value) {
                   $ipal = $ipal + ( $index * $value['valor'] );
                }

        return $ipal;
    }
}
