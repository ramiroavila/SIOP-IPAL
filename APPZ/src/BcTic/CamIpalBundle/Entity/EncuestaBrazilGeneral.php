<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaColombiaGeneral
 *
 * @ORM\Entity
 *
 */
class EncuestaBrazilGeneral extends Encuesta
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
        $this->setRespuesta22(2);
        $this->setRespuesta23(2);

        $this->setRespuesta31(2);
        $this->setRespuesta32(2);

        $this->setRespuesta41(2);
        $this->setRespuesta42(2);
        $this->setRespuesta43(2);
        $this->setRespuesta44(2);
        $this->setRespuesta45(2);
        $this->setRespuesta46(2);
        $this->setRespuesta47(2);
        $this->setRespuesta48(2);
        $this->setRespuesta49(2);
        $this->setRespuesta410(2);
        $this->setRespuesta411(2);
        $this->setRespuesta412(2);

    }

    public function getKey() {
      return "brazil_general";
    }

    public function getValor($item) {
      return -1;
    }

        public function getHits($criticidad) {

        $data = array(
                50 => array (
                    'items' => 21,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0) +
                                (($this->getRespuesta12() == 1) ? 1 : 0)+
                                (($this->getRespuesta13() == 1) ? 1 : 0) +
                                (($this->getRespuesta14() == 1) ? 1 : 0) +
                                (($this->getRespuesta15() == 1) ? 1 : 0) +

                                (($this->getRespuesta21() == 1) ? 1 : 0) +
                                (($this->getRespuesta22() == 1) ? 1 : 0) +
                                (($this->getRespuesta23() == 1) ? 1 : 0) +

                                (($this->getRespuesta31() == 1) ? 1 : 0) +
                                (($this->getRespuesta35() == 1) ? 1 : 0) +

                                (($this->getRespuesta41() == 1) ? 1 : 0) +
                                (($this->getRespuesta42() == 1) ? 1 : 0) +
                                (($this->getRespuesta43() == 1) ? 1 : 0) +
                                (($this->getRespuesta44() == 1) ? 1 : 0) +
                                (($this->getRespuesta45() == 1) ? 1 : 0) +
                                (($this->getRespuesta46() == 1) ? 1 : 0) +
                                (($this->getRespuesta47() == 1) ? 1 : 0) +
                                (($this->getRespuesta48() == 1) ? 1 : 0) +
                                (($this->getRespuesta49() == 1) ? 1 : 0) +
                                (($this->getRespuesta410() == 1) ? 1 : 0) +
                                (($this->getRespuesta411() == 1) ? 1 : 0) +
                                (($this->getRespuesta412() == 1) ? 1 : 0)

                    ),

                40 => array (
                    'items' => 0,
                    'indice' => 0
                    ),


                30 => array (
                    'items' => 0,
                    'indice' => 0
                    ),


                20 => array (
                    'items' => 16,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta51() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta52() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta53() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta62() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta63() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta64() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta71() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta72() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta81() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta82() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta91() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta92() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta93() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta101() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta103() == 1) ? 1 : 0 )
                    ),
                10 => array (
                    'items' => 3,
                    'indice' => (($this->getRespuesta34() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta102() == 1) ? 1 : 0 )
                    ),
                5 => array (
                    'items' => 0,
                    'indice' => (($this->getRespuesta61() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta111() == 1) ? 1 : 0 )
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
      $enum = $this->getRespuesta14(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta15(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta21(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta22(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta23(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta31(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta32(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta33(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta34(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta35(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta41(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta42(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta43(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta44(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta45(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta46(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta47(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta48(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta49(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta410(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta411(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta412(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta51(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta52(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta53(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta61(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta62(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta63(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta64(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta71(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta72(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta81(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta82(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta91(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta92(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta93(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta101(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta102(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta103(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta111(); $data[$enum] = $data[$enum] + 1;

      return $data;
    }

    public function getRespuestasAgrupadasNumeral() {

      $data = array();
      $data[] = "respuesta_1_1";
      $data[] = "respuesta_1_2";
      $data[] = "respuesta_1_3";
      $data[] = "respuesta_1_4";
      $data[] = "respuesta_1_5";

      $data[] = "respuesta_2_1";
      $data[] = "respuesta_2_2";
      $data[] = "respuesta_2_3";

      $data[] = "respuesta_3_1";
      $data[] = "respuesta_3_2";
      $data[] = "respuesta_3_3";
      $data[] = "respuesta_3_4";
      $data[] = "respuesta_3_5";

      $data[] = "respuesta_4_1";
      $data[] = "respuesta_4_2";
      $data[] = "respuesta_4_3";
      $data[] = "respuesta_4_4";
      $data[] = "respuesta_4_5";
      $data[] = "respuesta_4_6";
      $data[] = "respuesta_4_7";
      $data[] = "respuesta_4_8";
      $data[] = "respuesta_4_9";
      $data[] = "respuesta_4_10";
      $data[] = "respuesta_4_11";
      $data[] = "respuesta_4_12";

      $data[] = "respuesta_5_1";
      $data[] = "respuesta_5_2";
      $data[] = "respuesta_5_3";

      $data[] = "respuesta_6_1";
      $data[] = "respuesta_6_2";
      $data[] = "respuesta_6_3";
      $data[] = "respuesta_6_4";

      $data[] = "respuesta_7_1";
      $data[] = "respuesta_7_2";

      $data[] = "respuesta_8_1";
      $data[] = "respuesta_8_2";

      $data[] = "respuesta_9_1";
      $data[] = "respuesta_9_2";
      $data[] = "respuesta_9_3";

      $data[] = "respuesta_10_1";
      $data[] = "respuesta_10_2";
      $data[] = "respuesta_10_3";

      $data[] = "respuesta_11_1";

      $data[] = "respuesta_13_1";
      $data[] = "respuesta_13_2";
      $data[] = "respuesta_13_3";
      $data[] = "respuesta_13_4";
      $data[] = "respuesta_13_5";
      $data[] = "respuesta_13_6";
      $data[] = "respuesta_13_7";
      $data[] = "respuesta_13_8";
      $data[] = "respuesta_13_9";
      $data[] = "respuesta_13_10";

      return $data;

    }

    public function getIncumplimientos() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_brazil_general";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_brazil_general";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_brazil_general";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_brazil_general";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_brazil_general";

      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_brazil_general";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_brazil_general";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_brazil_general";

      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_brazil_general";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_brazil_general";
      if ($this->getRespuesta33() == 1) $data[] = "respuesta3.3_brazil_general";
      if ($this->getRespuesta34() == 1) $data[] = "respuesta3.4_brazil_general";
      if ($this->getRespuesta35() == 1) $data[] = "respuesta3.5_brazil_general";

      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_brazil_general";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_brazil_general";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_brazil_general";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_brazil_general";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_brazil_general";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_brazil_general";
      if ($this->getRespuesta47() == 1) $data[] = "respuesta4.7_brazil_general";
      if ($this->getRespuesta48() == 1) $data[] = "respuesta4.8_brazil_general";
      if ($this->getRespuesta49() == 1) $data[] = "respuesta4.9_brazil_general";
      if ($this->getRespuesta410() == 1) $data[] = "respuesta4.10_brazil_general";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_brazil_general";
      if ($this->getRespuesta412() == 1) $data[] = "respuesta4.12_brazil_general";

      if ($this->getRespuesta51() == 1) $data[] = "respuesta5.1_brazil_general";
      if ($this->getRespuesta52() == 1) $data[] = "respuesta5.2_brazil_general";
      if ($this->getRespuesta53() == 1) $data[] = "respuesta5.3_brazil_general";

      if ($this->getRespuesta61() == 1) $data[] = "respuesta6.1_brazil_general";
      if ($this->getRespuesta62() == 1) $data[] = "respuesta6.2_brazil_general";
      if ($this->getRespuesta63() == 1) $data[] = "respuesta6.3_brazil_general";
      if ($this->getRespuesta64() == 1) $data[] = "respuesta6.4_brazil_general";

      if ($this->getRespuesta71() == 1) $data[] = "respuesta7.1_brazil_general";
      if ($this->getRespuesta72() == 1) $data[] = "respuesta7.2_brazil_general";

      if ($this->getRespuesta81() == 1) $data[] = "respuesta8.1_brazil_general";
      if ($this->getRespuesta82() == 1) $data[] = "respuesta8.2_brazil_general";

      if ($this->getRespuesta91() == 1) $data[] = "respuesta9.1_brazil_general";
      if ($this->getRespuesta92() == 1) $data[] = "respuesta9.2_brazil_general";
      if ($this->getRespuesta93() == 1) $data[] = "respuesta9.3_brazil_general";

      if ($this->getRespuesta101() == 1) $data[] = "respuesta10.1_brazil_general";
      if ($this->getRespuesta102() == 1) $data[] = "respuesta10.2_brazil_general";
      if ($this->getRespuesta103() == 1) $data[] = "respuesta10.3_brazil_general";

      if ($this->getRespuesta111() == 1) $data[] = "respuesta11.1_brazil_general";

      return $data;
    }

    public function getIncumplimientos50() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_brazil_general";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_brazil_general";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_brazil_general";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_brazil_general";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_brazil_general";

      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_brazil_general";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_brazil_general";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_brazil_general";

      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_brazil_general";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_brazil_general";

      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_brazil_general";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_brazil_general";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_brazil_general";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_brazil_general";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_brazil_general";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_brazil_general";
      if ($this->getRespuesta47() == 1) $data[] = "respuesta4.7_brazil_general";
      if ($this->getRespuesta48() == 1) $data[] = "respuesta4.8_brazil_general";
      if ($this->getRespuesta49() == 1) $data[] = "respuesta4.9_brazil_general";
      if ($this->getRespuesta410() == 1) $data[] = "respuesta4.10_brazil_general";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_brazil_general";
      if ($this->getRespuesta412() == 1) $data[] = "respuesta4.12_brazil_general";

      return $data;
    }

    public function getIndiceIpal()
    {
        $ipal = 0;
        //Calcula el índice IPAL según Fórmula:
        $data = array(
                50 => array (
                    'items' => 21,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0) +
                                (($this->getRespuesta12() == 1) ? 1 : 0)+
                                (($this->getRespuesta13() == 1) ? 1 : 0) +
                                (($this->getRespuesta14() == 1) ? 1 : 0) +
                                (($this->getRespuesta15() == 1) ? 1 : 0) +

                                (($this->getRespuesta21() == 1) ? 1 : 0) +
                                (($this->getRespuesta22() == 1) ? 1 : 0) +
                                (($this->getRespuesta23() == 1) ? 1 : 0) +

                                (($this->getRespuesta31() == 1) ? 1 : 0) +
                                (($this->getRespuesta35() == 1) ? 1 : 0) +

                                (($this->getRespuesta41() == 1) ? 1 : 0) +
                                (($this->getRespuesta42() == 1) ? 1 : 0) +
                                (($this->getRespuesta43() == 1) ? 1 : 0) +
                                (($this->getRespuesta44() == 1) ? 1 : 0) +
                                (($this->getRespuesta45() == 1) ? 1 : 0) +
                                (($this->getRespuesta46() == 1) ? 1 : 0) +
                                (($this->getRespuesta47() == 1) ? 1 : 0) +
                                (($this->getRespuesta48() == 1) ? 1 : 0) +
                                (($this->getRespuesta49() == 1) ? 1 : 0) +
                                (($this->getRespuesta410() == 1) ? 1 : 0) +
                                (($this->getRespuesta411() == 1) ? 1 : 0) +
                                (($this->getRespuesta412() == 1) ? 1 : 0)

                    ),

                40 => array (
                    'items' => 0,
                    'indice' => 0
                    ),


                30 => array (
                    'items' => 0,
                    'indice' => 0
                    ),


                20 => array (
                    'items' => 16,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta51() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta52() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta53() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta62() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta63() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta64() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta71() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta72() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta81() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta82() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta91() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta92() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta93() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta101() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta103() == 1) ? 1 : 0 )
                    ),
                10 => array (
                    'items' => 3,
                    'indice' => (($this->getRespuesta34() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta102() == 1) ? 1 : 0 )
                    ),
                5 => array (
                    'items' => 0,
                    'indice' => (($this->getRespuesta61() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta111() == 1) ? 1 : 0 )
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
                   $ipal = $ipal + ($index * $value['valor']);
                }

        return $ipal;
    }

    public function getIndiceIpalMedioAmbiente(){
      return 0;
    }

}
