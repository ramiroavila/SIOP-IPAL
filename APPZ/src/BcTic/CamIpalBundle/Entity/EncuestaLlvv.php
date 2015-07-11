<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaLlvv
 *
 * @ORM\Entity
 *
 */
class EncuestaLlvv extends Encuesta
{


    public function __construct() {

        $this->setCreatedAt(date('U'));
        //Respuestas NA por defecto
        $this->setRespuesta11(2);
        $this->setRespuesta12(2);
        $this->setRespuesta13(2);
        $this->setRespuesta14(2);
        $this->setRespuesta15(2);

        $this->setRespuesta21(2);
        $this->setRespuesta23(2);

        $this->setRespuesta31(2);

        $this->setRespuesta44(2);
        $this->setRespuesta45(2);
        $this->setRespuesta46(2);

        $this->setRespuesta411(2);

        $this->setRespuesta61(2);
        $this->setRespuesta62(2);
    }


    public function getKey() {
      return "llvv";
    }

    public function getHits($criticidad) {

        $data = array(
                50 => array (
                    'items' => 15,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0) +
                                (($this->getRespuesta12() == 1) ? 1 : 0)+
                                (($this->getRespuesta13() == 1) ? 1 : 0) +
                                (($this->getRespuesta14() == 1) ? 1 : 0) +
                                (($this->getRespuesta15() == 1) ? 1 : 0) +
                                (($this->getRespuesta21() == 1) ? 1 : 0) +
                                (($this->getRespuesta23() == 1) ? 1 : 0) +
                                (($this->getRespuesta31() == 1) ? 1 : 0) +
                                (($this->getRespuesta44() == 1) ? 1 : 0) +
                                (($this->getRespuesta45() == 1) ? 1 : 0) +
                                (($this->getRespuesta46() == 1) ? 1 : 0) +
                                (($this->getRespuesta411() == 1) ? 1 : 0) +
                                (($this->getRespuesta61() == 1) ? 1 : 0) +
                                (($this->getRespuesta62() == 1) ? 1 : 0) +
                                (($this->getRespuesta63() == 1) ? 1 : 0)
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
                    'items' => 22,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta41() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta47() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta48() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta410() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta51() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta52() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta64() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta71() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta72() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta81() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta82() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta91() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta92() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta93() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta101() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta103() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta111() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta112() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta113() == 1) ? 1 : 0 )
                    ),
                10 => array (
                    'items' => 5,
                    'indice' => (($this->getRespuesta32() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta34() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta49() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta102() == 1) ? 1 : 0 )
                    ),
                5 => array (
                    'items' => 0,
                    'indice' => 0
                    ),
                );

       return $data[$criticidad]['indice'];

    }

    public function getIncumplimientos() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_llvv";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_llvv";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_llvv";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_llvv";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_llvv";

      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_llvv";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_llvv";

      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_llvv";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_llvv";
      if ($this->getRespuesta33() == 1) $data[] = "respuesta3.3_llvv";
      if ($this->getRespuesta34() == 1) $data[] = "respuesta3.4_llvv";
      if ($this->getRespuesta35() == 1) $data[] = "respuesta3.5_llvv";

      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_llvv";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_llvv";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_llvv";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_llvv";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_llvv";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_llvv";
      if ($this->getRespuesta47() == 1) $data[] = "respuesta4.7_llvv";
      if ($this->getRespuesta48() == 1) $data[] = "respuesta4.8_llvv";
      if ($this->getRespuesta49() == 1) $data[] = "respuesta4.9_llvv";
      if ($this->getRespuesta410() == 1) $data[] = "respuesta4.10_llvv";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_llvv";

      if ($this->getRespuesta51() == 1) $data[] = "respuesta5.1_llvv";
      if ($this->getRespuesta52() == 1) $data[] = "respuesta5.2_llvv";

      if ($this->getRespuesta61() == 1) $data[] = "respuesta6.1_llvv";
      if ($this->getRespuesta62() == 1) $data[] = "respuesta6.2_llvv";
      if ($this->getRespuesta63() == 1) $data[] = "respuesta6.3_llvv";
      if ($this->getRespuesta64() == 1) $data[] = "respuesta6.4_llvv";

      if ($this->getRespuesta71() == 1) $data[] = "respuesta7.1_llvv";
      if ($this->getRespuesta72() == 1) $data[] = "respuesta7.2_llvv";

      if ($this->getRespuesta81() == 1) $data[] = "respuesta8.1_llvv";
      if ($this->getRespuesta82() == 1) $data[] = "respuesta8.2_llvv";

      if ($this->getRespuesta91() == 1) $data[] = "respuesta9.1_llvv";
      if ($this->getRespuesta92() == 1) $data[] = "respuesta9.2_llvv";
      if ($this->getRespuesta93() == 1) $data[] = "respuesta9.3_llvv";

      if ($this->getRespuesta101() == 1) $data[] = "respuesta10.1_llvv";
      if ($this->getRespuesta102() == 1) $data[] = "respuesta10.2_llvv";
      if ($this->getRespuesta103() == 1) $data[] = "respuesta10.3_llvv";

      if ($this->getRespuesta111() == 1) $data[] = "respuesta11.1_llvv";
      if ($this->getRespuesta112() == 1) $data[] = "respuesta11.2_llvv";
      if ($this->getRespuesta113() == 1) $data[] = "respuesta11.3_llvv";


      return $data;
    }

     public function getIncumplimientos50() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_llvv";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_llvv";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_llvv";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_llvv";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_llvv";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_llvv";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_llvv";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_llvv";
      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.4_llvv";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_llvv";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_llvv";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_llvv";
      if ($this->getRespuesta61() == 1) $data[] = "respuesta6.1_llvv";
      if ($this->getRespuesta62() == 1) $data[] = "respuesta6.2_llvv";
      if ($this->getRespuesta63() == 1) $data[] = "respuesta6.3_llvv";
      return $data;
    }

    public function getIndiceIPAL()
    {
        $ipal = 0;

        $data = array(
                50 => array (
                    'items' => 15,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0) +
                                (($this->getRespuesta12() == 1) ? 1 : 0)+
                                (($this->getRespuesta13() == 1) ? 1 : 0) +
                                (($this->getRespuesta14() == 1) ? 1 : 0) +
                                (($this->getRespuesta15() == 1) ? 1 : 0) +
                                (($this->getRespuesta21() == 1) ? 1 : 0) +
                                (($this->getRespuesta23() == 1) ? 1 : 0) +
                                (($this->getRespuesta31() == 1) ? 1 : 0) +
                                (($this->getRespuesta44() == 1) ? 1 : 0) +
                                (($this->getRespuesta45() == 1) ? 1 : 0) +
                                (($this->getRespuesta46() == 1) ? 1 : 0) +
                                (($this->getRespuesta411() == 1) ? 1 : 0) +
                                (($this->getRespuesta61() == 1) ? 1 : 0) +
                                (($this->getRespuesta62() == 1) ? 1 : 0) +
                                (($this->getRespuesta63() == 1) ? 1 : 0)
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
                    'items' => 22,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta41() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta47() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta48() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta410() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta51() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta52() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta64() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta71() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta72() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta81() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta82() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta91() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta92() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta93() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta101() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta103() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta111() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta112() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta113() == 1) ? 1 : 0 )
                    ),
                10 => array (
                    'items' => 5,
                    'indice' => (($this->getRespuesta32() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta34() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta49() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta102() == 1) ? 1 : 0 )
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
