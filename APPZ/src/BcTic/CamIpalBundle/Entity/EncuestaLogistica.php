<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaLogistica
 *
 * @ORM\Entity
 *
 */
class EncuestaLogistica extends Encuesta
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
        $this->setRespuesta44(2);
        $this->setRespuesta45(2);
        $this->setRespuesta46(2);
        $this->setRespuesta411(2);
        $this->setRespuesta104(2);
        $this->setRespuesta121(2);
        $this->setRespuesta131(2);
        $this->setRespuesta132(2);
        $this->setRespuesta133(2);
        $this->setRespuesta134(2);
        $this->setRespuesta135(2);
        $this->setRespuesta136(2);
        $this->setRespuesta137(2);
        $this->setRespuesta138(2);
        $this->setRespuesta139(2);
        $this->setRespuesta1310(2);

    }

    public function getKey() {
      return "logistica";
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

      $enum = $this->getRespuesta31(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta32(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta33(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta34(); $data[$enum] = $data[$enum] + 1;

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

      $enum = $this->getRespuesta51(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta52(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta53(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta61(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta62(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta63(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta64(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta65(); $data[$enum] = $data[$enum] + 1;

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
      $enum = $this->getRespuesta104(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta111(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta121(); $data[$enum] = $data[$enum] + 1;

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
      $data[] = "respuesta_3_1";
      $data[] = "respuesta_3_2";
      $data[] = "respuesta_3_3";
      $data[] = "respuesta_3_4";
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
      $data[] = "respuesta_5_1";
      $data[] = "respuesta_5_2";
      $data[] = "respuesta_5_3";
      $data[] = "respuesta_6_1";
      $data[] = "respuesta_6_2";
      $data[] = "respuesta_6_3";
      $data[] = "respuesta_6_4";
      $data[] = "respuesta_6_5";
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
      $data[] = "respuesta_10_4";
      $data[] = "respuesta_11_1";
      $data[] = "respuesta_12_1";
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
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_logistica";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_logistica";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_logistica";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_logistica";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_logistica";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_logistica";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_logistica";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_logistica";
      if ($this->getRespuesta33() == 1) $data[] = "respuesta3.3_logistica";
      if ($this->getRespuesta34() == 1) $data[] = "respuesta3.4_logistica";
      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_logistica";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_logistica";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_logistica";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_logistica";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_logistica";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_logistica";
      if ($this->getRespuesta47() == 1) $data[] = "respuesta4.7_logistica";
      if ($this->getRespuesta48() == 1) $data[] = "respuesta4.8_logistica";
      if ($this->getRespuesta49() == 1) $data[] = "respuesta4.9_logistica";
      if ($this->getRespuesta410() == 1) $data[] = "respuesta4.10_logistica";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_logistica";
      if ($this->getRespuesta51() == 1) $data[] = "respuesta5.1_logistica";
      if ($this->getRespuesta52() == 1) $data[] = "respuesta5.2_logistica";
      if ($this->getRespuesta53() == 1) $data[] = "respuesta5.3_logistica";
      if ($this->getRespuesta61() == 1) $data[] = "respuesta6.1_logistica";
      if ($this->getRespuesta62() == 1) $data[] = "respuesta6.2_logistica";
      if ($this->getRespuesta63() == 1) $data[] = "respuesta6.3_logistica";
      if ($this->getRespuesta64() == 1) $data[] = "respuesta6.4_logistica";
      if ($this->getRespuesta65() == 1) $data[] = "respuesta6.5_logistica";
      if ($this->getRespuesta71() == 1) $data[] = "respuesta7.1_logistica";
      if ($this->getRespuesta72() == 1) $data[] = "respuesta7.2_logistica";
      if ($this->getRespuesta81() == 1) $data[] = "respuesta8.1_logistica";
      if ($this->getRespuesta82() == 1) $data[] = "respuesta8.2_logistica";
      if ($this->getRespuesta91() == 1) $data[] = "respuesta9.1_logistica";
      if ($this->getRespuesta92() == 1) $data[] = "respuesta9.2_logistica";
      if ($this->getRespuesta93() == 1) $data[] = "respuesta9.3_logistica";
      if ($this->getRespuesta101() == 1) $data[] = "respuesta10.1_logistica";
      if ($this->getRespuesta102() == 1) $data[] = "respuesta10.2_logistica";
      if ($this->getRespuesta103() == 1) $data[] = "respuesta10.3_logistica";
      if ($this->getRespuesta104() == 1) $data[] = "respuesta10.4_logistica";
      if ($this->getRespuesta111() == 1) $data[] = "respuesta11.1_logistica";
      if ($this->getRespuesta121() == 0) $data[] = "respuesta12.1_logistica";
      /*
      LOS INCUMPLIMIENTOS DE 13 NO APLICA PARA DEJAR COMO ABIERTO
      if ($this->getRespuesta131() == 1) $data[] = "respuesta13.1_logistica";
      if ($this->getRespuesta132() == 1) $data[] = "respuesta13.2_logistica";
      if ($this->getRespuesta133() == 1) $data[] = "respuesta13.3_logistica";
      if ($this->getRespuesta134() == 1) $data[] = "respuesta13.4_logistica";
      if ($this->getRespuesta135() == 1) $data[] = "respuesta13.5_logistica";
      if ($this->getRespuesta136() == 1) $data[] = "respuesta13.6_logistica";
      if ($this->getRespuesta137() == 1) $data[] = "respuesta13.7_logistica";
      if ($this->getRespuesta138() == 1) $data[] = "respuesta13.8_logistica";
      if ($this->getRespuesta139() == 1) $data[] = "respuesta13.9_logistica";
      if ($this->getRespuesta1310() == 1) $data[] = "respuesta13.10_logistica";
      */
      return $data;
    }

    public function getIncumplimientos50() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_logistica";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_logistica";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_logistica";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_logistica";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_logistica";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_logistica";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_logistica";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_logistica";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_logistica";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_logistica";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_logistica";
      if ($this->getRespuesta104() == 1) $data[] = "respuesta10.4_logistica";
      if ($this->getRespuesta121() == 0) $data[] = "respuesta12.1_logistica";
      return $data;
    }

    public function getValor($item) {
      switch ($item) {
        case "1.1":
        case "1.2":
        case "1.3":
        case "1.4":
        case "1.5":
        case "2.1":
        case "3.1":
        case "4.4":
        case "4.5":
        case "4.6":
        case "4.11":
        case "10.4":
          return 50;

        case "3.3":
        case "4.1":
        case "4.2":
        case "4.3":
        case "4.7":
        case "4.8":
        case "4.10":
        case "5.1":
        case "5.2":
        case "5.3":
        case "6.2":
        case "6.3":
        case "6.4":
        case "7.1":
        case "7.2":
        case "8.1":
        case "8.2":
        case "9.1":
        case "9.2":
        case "9.3":
        case "10.1":
        case "10.3":
          return 20;

        case "3.2":
        case "3.4":
        case "4.9 ":
        case "10.2":
        case "11.1":
          return 10;

        case "6.1":
          return 5;

      }
      return -1;
    }

    public function getHits($criticidad) {

        $data = array(
                50 => array (
                    'items' => 14,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0) +
                                (($this->getRespuesta12() == 1) ? 1 : 0)+
                                (($this->getRespuesta13() == 1) ? 1 : 0) +
                                (($this->getRespuesta14() == 1) ? 1 : 0) +
                                (($this->getRespuesta15() == 1) ? 1 : 0) +
                                (($this->getRespuesta21() == 1) ? 1 : 0) +
                                (($this->getRespuesta31() == 1) ? 1 : 0)+
                                (($this->getRespuesta44() == 1) ? 1 : 0) +
                                (($this->getRespuesta45() == 1) ? 1 : 0) +
                                (($this->getRespuesta46() == 1) ? 1 : 0) +
                                (($this->getRespuesta411() == 1) ? 1 : 0) +
                                (($this->getRespuesta104() == 1) ? 1 : 0)
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
                    'items' => 23,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta41() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta47() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta48() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta410() == 1) ? 1 : 0 ) +
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
                    'items' => 6,
                    'indice' => (($this->getRespuesta32() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta34() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta49 () == 1) ? 1 : 0 ) +
                                (($this->getRespuesta102() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta111() == 1) ? 1 : 0 )
                    ),
                5 => array (
                    'items' => 1,
                    'indice' => (($this->getRespuesta61() == 1) ? 1 : 0 )
                    ),
                );

       return $data[$criticidad]['indice'];

    }

    public function getIndiceIpal()
    {
        $ipal = 0;
        //Calcula el índice IPAL según Fórmula:
        $data = array(
                 50 => array (
                    'items' => 14,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0) +
                                (($this->getRespuesta12() == 1) ? 1 : 0)+
                                (($this->getRespuesta13() == 1) ? 1 : 0) +
                                (($this->getRespuesta14() == 1) ? 1 : 0) +
                                (($this->getRespuesta15() == 1) ? 1 : 0) +
                                (($this->getRespuesta21() == 1) ? 1 : 0) +
                                (($this->getRespuesta22() == 1) ? 1 : 0) +
                                (($this->getRespuesta23() == 1) ? 1 : 0) +
                                (($this->getRespuesta31() == 1) ? 1 : 0)+
                                (($this->getRespuesta44() == 1) ? 1 : 0) +
                                (($this->getRespuesta45() == 1) ? 1 : 0) +
                                (($this->getRespuesta46() == 1) ? 1 : 0) +
                                (($this->getRespuesta411() == 1) ? 1 : 0) +
                                (($this->getRespuesta104() == 1) ? 1 : 0)
                    ),
                20 => array (
                    'items' => 23,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta41() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta47() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta48() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta410() == 1) ? 1 : 0 ) +
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
                    'items' => 6,
                    'indice' => (($this->getRespuesta32() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta34() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta49 () == 1) ? 1 : 0 ) +
                                (($this->getRespuesta102() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta111() == 1) ? 1 : 0 )
                    ),
                5 => array (
                    'items' => 1,
                    'indice' => (($this->getRespuesta61() == 1) ? 1 : 0 )
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
      $ipal = 0;
      //Calcula el índice IPAL según Fórmula:
      $data = array(
              50 => array (
                  'items' => 3,
                  'indice' => (($this->getRespuesta133() == 1) ? 1 : 0) +
                              (($this->getRespuesta135() == 1) ? 1 : 0) +
                              (($this->getRespuesta139() == 1) ? 1 : 0)
                  ),
              20 => array (
                  'items' => 1,
                  'indice' => (($this->getRespuesta1310() == 1) ? 1 : 0 )
                  ),
              10 => array (
                  'items' => 2,
                  'indice' => (($this->getRespuesta138() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta134() == 1) ? 1 : 0 )
                  ),
              5 => array (
                  'items' => 4,
                  'indice' => (($this->getRespuesta131() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta132() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta136() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta137() == 1) ? 1 : 0 )
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

}
