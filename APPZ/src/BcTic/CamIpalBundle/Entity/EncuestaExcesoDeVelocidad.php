<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaChilectra
 *
 * @ORM\Entity
 *
 */
class EncuestaExcesoDeVelocidad extends Encuesta
{


    public function __construct() {

        $this->setCreatedAt(date('U'));
        //Respuestas NA por defecto
        $this->setRespuesta104(2);
    }


    public function getKey() {
      return "exceso_de_velocidad";
    }

    public function getHits($criticidad) {

        $data = array(
                50 => array (
                    'items' => 1,
                    'indice' => (($this->getRespuesta104() == 1) ? 1 : 0)
                  )
                );

       return $data[$criticidad]['indice'];

    }

    public function getRespuestasAgrupadas() {
      $data = array(0 => 0,1 => 0,2 => 0);
      //Debo iterar en todas las respuestas y agrupar las respuestas:
      $enum = $this->getRespuesta104(); $data[$enum] = $data[$enum] + 1;
      return $data;
    }



        public function getRespuestasAgrupadasNumeral() {

          $data = array();

          return $data;

        }


    public function getIncumplimientos() {
      $data = array();
      if ($this->getRespuesta104() == 1) $data[] = "respuesta10.4_exceso_de_velocidad";
      return $data;
    }

     public function getIncumplimientos50() {
      $data = array();
      if ($this->getRespuesta104() == 1) $data[] = "respuesta10.4_exceso_de_velocidad";
      return $data;
    }

    public function getIndiceIpal()
    {
        $ipal = 0;
        //Calcula el índice IPAL según Fórmula:
        $data = array(
                50 => array (
                    'items' => 1,
                    'indice' => (($this->getRespuesta104() == 1) ? 1 : 0)
                    )
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

    public function getIndiceIpalMedioAmbiente(){
      return 0;
    }

}
