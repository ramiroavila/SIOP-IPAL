<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaFAM
 *
 * @ORM\Entity
 *
 */
class EncuestaFAM extends Encuesta
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

        $this->setRespuesta34(2);
        $this->setRespuesta36(2);

        $this->setRespuesta114(2);
        $this->setRespuesta1110(2);

        $this->setRespuesta121(2);
        $this->setRespuesta122(2);
        $this->setRespuesta123(2);

        $this->setRespuesta131(2);
        $this->setRespuesta132(2);

        $this->setRespuesta141(2);
        $this->setRespuesta142(2);
        $this->setRespuesta146(2);

        $this->setRespuesta151(2);
        $this->setRespuesta152(2);
        $this->setRespuesta153(2);

    }


    public function getKey() {
      return "fam";
    }

    public function getValor($item) {

      switch($item) {

        case "1.1":
        case "1.2":
        case "1.3":
        case "1.4":
        case "1.5":

        case "2.1":

        case "3.4":
        case "3.6":

        case "11.4":
        case "11.10":

        case "12.1":
        case "12.2":
        case "12.3":

        case "12.1":
        case "12.2":

        case "13.1":
        case "13.2":

        case "14.1":
        case "14.2":
        case "14.6":

        case "15.1":
        case "15.2":
        case "15.3":

          return 50;

        case "3.1":
        case "3.2":
        case "3.3":
        case "3.5":
        case "3.7":
        case "3.8":
        case "3.9":
        case "3.10":
        case "3.11":
        case "3.12":
        case "3.13":
        case "4.1":
        case "4.2":
        case "4.3":
        case "4.4":
        case "4.5":
        case "5.1":
        case "5.2":
        case "5.3":
        case "5.4":
        case "6.1":
        case "6.2":
        case "7.1":
        case "7.2":
        case "7.3":
        case "8.2":
        case "8.3":
        case "9.1":
        case "9.2":
        case "9.3":
        case "14.3":
        case "14.4":
        case "14.5":
          return 20;

        case "2.2":
        case "2.3":
        case "2.4":
        case "2.5":
        case "8.1":
        case "10.1":
        case "11.1":
        case "11.2":
        case "11.3":
        case "11.5":
        case "11.6":
        case "11.7":
        case "11.8":
        case "11.9":
          return 10;

      }
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

                                (($this->getRespuesta34() == 1) ? 1 : 0) +
                                (($this->getRespuesta36() == 1) ? 1 : 0) +

                                (($this->getRespuesta114() == 1) ? 1 : 0)+
                                (($this->getRespuesta1110() == 1) ? 1 : 0)+

                                (($this->getRespuesta121() == 1) ? 1 : 0) +
                                (($this->getRespuesta122() == 1) ? 1 : 0) +
                                (($this->getRespuesta123() == 1) ? 1 : 0) +

                                (($this->getRespuesta131() == 1) ? 1 : 0) +
                                (($this->getRespuesta132() == 1) ? 1 : 0) +

                                (($this->getRespuesta141() == 1) ? 1 : 0) +
                                (($this->getRespuesta142() == 1) ? 1 : 0) +
                                (($this->getRespuesta146() == 1) ? 1 : 0) +

                                (($this->getRespuesta151() == 1) ? 1 : 0) +
                                (($this->getRespuesta152() == 1) ? 1 : 0) +
                                (($this->getRespuesta153() == 1) ? 1 : 0)
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
                    'items' => 33,
                    'indice' => (($this->getRespuesta31() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta32() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta37() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta38() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta39() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta310() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta311() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta312() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta313() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta41() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta44() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta45() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta51() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta52() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta53() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta54() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta61() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta62() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta71() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta72() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta73() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta82() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta83() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta91() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta92() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta93() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta143() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta144() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta145() == 1) ? 1 : 0 )
                    ),
                10 => array (
                    'items' => 14,
                    'indice' => (($this->getRespuesta22() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta23() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta24() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta25() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta81() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta101() == 1) ? 1 : 0 ) +

                                (($this->getRespuesta111() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta112() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta113() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta115() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta116() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta117() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta118() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta119() == 1) ? 1 : 0 )

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
      $enum = $this->getRespuesta14(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta15(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta21(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta22(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta23(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta24(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta25(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta31(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta32(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta33(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta34(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta35(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta36(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta37(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta38(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta39(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta310(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta311(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta312(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta313(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta41(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta42(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta43(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta44(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta45(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta51(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta52(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta53(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta54(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta61(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta62(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta71(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta72(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta73(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta81(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta82(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta83(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta91(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta92(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta93(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta101(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta111(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta112(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta113(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta114(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta115(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta116(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta117(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta118(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta119(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta1110(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta121(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta122(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta123(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta131(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta132(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta141(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta142(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta143(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta144(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta145(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta146(); $data[$enum] = $data[$enum] + 1;

      $enum = $this->getRespuesta151(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta152(); $data[$enum] = $data[$enum] + 1;
      $enum = $this->getRespuesta153(); $data[$enum] = $data[$enum] + 1;


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
          $data[] = "respuesta_2_4";
          $data[] = "respuesta_2_5";

          $data[] = "respuesta_3_1";
          $data[] = "respuesta_3_2";
          $data[] = "respuesta_3_3";
          $data[] = "respuesta_3_4";
          $data[] = "respuesta_3_5";
          $data[] = "respuesta_3_6";
          $data[] = "respuesta_3_7";
          $data[] = "respuesta_3_8";
          $data[] = "respuesta_3_9";
          $data[] = "respuesta_3_10";
          $data[] = "respuesta_3_11";
          $data[] = "respuesta_3_12";
          $data[] = "respuesta_3_13";

          $data[] = "respuesta_4_1";
          $data[] = "respuesta_4_2";
          $data[] = "respuesta_4_3";
          $data[] = "respuesta_4_4";
          $data[] = "respuesta_4_5";

          $data[] = "respuesta_5_1";
          $data[] = "respuesta_5_2";
          $data[] = "respuesta_5_3";
          $data[] = "respuesta_5_4";

          $data[] = "respuesta_6_1";
          $data[] = "respuesta_6_2";

          $data[] = "respuesta_7_1";
          $data[] = "respuesta_7_2";
          $data[] = "respuesta_7_3";

          $data[] = "respuesta_8_1";
          $data[] = "respuesta_8_2";
          $data[] = "respuesta_8_3";

          $data[] = "respuesta_9_1";
          $data[] = "respuesta_9_2";
          $data[] = "respuesta_9_3";

          $data[] = "respuesta_10_1";

          $data[] = "respuesta_11_1";
          $data[] = "respuesta_11_2";
          $data[] = "respuesta_11_3";
          $data[] = "respuesta_11_4";
          $data[] = "respuesta_11_5";
          $data[] = "respuesta_11_6";
          $data[] = "respuesta_11_7";
          $data[] = "respuesta_11_8";
          $data[] = "respuesta_11_9";
          $data[] = "respuesta_11_10";

          $data[] = "respuesta_12_1";
          $data[] = "respuesta_12_2";
          $data[] = "respuesta_12_3";

          $data[] = "respuesta_13_1";
          $data[] = "respuesta_13_2";

          $data[] = "respuesta_14_1";
          $data[] = "respuesta_14_2";
          $data[] = "respuesta_14_3";
          $data[] = "respuesta_14_4";
          $data[] = "respuesta_14_5";
          $data[] = "respuesta_14_6";

          $data[] = "respuesta_15_1";
          $data[] = "respuesta_15_2";
          $data[] = "respuesta_15_3";

          return $data;

        }


    public function getIncumplimientos() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_fam";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_fam";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_fam";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_fam";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_fam";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_fam";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_fam";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_fam";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_fam";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_fam";
      if ($this->getRespuesta33() == 1) $data[] = "respuesta3.3_fam";
      if ($this->getRespuesta34() == 1) $data[] = "respuesta3.4_fam";
      if ($this->getRespuesta35() == 1) $data[] = "respuesta3.5_fam";
      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_fam";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_fam";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_fam";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_fam";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_fam";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_fam";
      if ($this->getRespuesta47() == 1) $data[] = "respuesta4.7_fam";
      if ($this->getRespuesta48() == 1) $data[] = "respuesta4.8_fam";
      if ($this->getRespuesta49() == 1) $data[] = "respuesta4.9_fam";
      if ($this->getRespuesta410() == 1) $data[] = "respuesta4.10_fam";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_fam";
      if ($this->getRespuesta412() == 1) $data[] = "respuesta4.12_fam";
      if ($this->getRespuesta51() == 1) $data[] = "respuesta5.1_fam";
      if ($this->getRespuesta52() == 1) $data[] = "respuesta5.2_fam";
      if ($this->getRespuesta53() == 1) $data[] = "respuesta5.3_fam";
      if ($this->getRespuesta61() == 1) $data[] = "respuesta6.1_fam";
      if ($this->getRespuesta62() == 1) $data[] = "respuesta6.2_fam";
      if ($this->getRespuesta63() == 1) $data[] = "respuesta6.3_fam";
      if ($this->getRespuesta64() == 1) $data[] = "respuesta6.4_fam";
      if ($this->getRespuesta71() == 1) $data[] = "respuesta7.1_fam";
      if ($this->getRespuesta72() == 1) $data[] = "respuesta7.2_fam";
      if ($this->getRespuesta81() == 1) $data[] = "respuesta8.1_fam";
      if ($this->getRespuesta82() == 1) $data[] = "respuesta8.2_fam";
      if ($this->getRespuesta91() == 1) $data[] = "respuesta9.1_fam";
      if ($this->getRespuesta92() == 1) $data[] = "respuesta9.2_fam";
      if ($this->getRespuesta93() == 1) $data[] = "respuesta9.3_fam";
      if ($this->getRespuesta101() == 1) $data[] = "respuesta10.1_fam";
      if ($this->getRespuesta102() == 1) $data[] = "respuesta10.2_fam";
      if ($this->getRespuesta103() == 1) $data[] = "respuesta10.3_fam";
      if ($this->getRespuesta111() == 1) $data[] = "respuesta11.1_fam";
      if ($this->getRespuesta121() == 0) $data[] = "respuesta12.1_fam";

      /*
      LOS INCUMPLIMIENTOS DE 13 NO APLICA PARA DEJAR COMO ABIERTO
      if ($this->getRespuesta131() == 1) $data[] = "respuesta13.1_fam";
      if ($this->getRespuesta132() == 1) $data[] = "respuesta13.2_fam";
      if ($this->getRespuesta133() == 1) $data[] = "respuesta13.3_fam";
      if ($this->getRespuesta134() == 1) $data[] = "respuesta13.4_fam";
      if ($this->getRespuesta135() == 1) $data[] = "respuesta13.5_fam";
      if ($this->getRespuesta136() == 1) $data[] = "respuesta13.6_fam";
      if ($this->getRespuesta137() == 1) $data[] = "respuesta13.7_fam";
      if ($this->getRespuesta138() == 1) $data[] = "respuesta13.8_fam";
      if ($this->getRespuesta139() == 1) $data[] = "respuesta13.9_fam";
      if ($this->getRespuesta1310() == 1) $data[] = "respuesta13.10_fam";
      */

      return $data;
    }

     public function getIncumplimientos50() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_fam";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_fam";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_fam";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_fam";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_fam";

      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_fam";

      if ($this->getRespuesta34() == 1) $data[] = "respuesta3.4_fam";
      if ($this->getRespuesta36() == 1) $data[] = "respuesta3.6_fam";

      if ($this->getRespuesta114() == 1) $data[] = "respuesta11.4_fam";

      if ($this->getRespuesta1110() == 1) $data[] = "respuesta11.10_fam";

      if ($this->getRespuesta121() == 1) $data[] = "respuesta12.1_fam";
      if ($this->getRespuesta122() == 1) $data[] = "respuesta12.2_fam";
      if ($this->getRespuesta123() == 1) $data[] = "respuesta12.3_fam";

      if ($this->getRespuesta131() == 0) $data[] = "respuesta13.1_fam";
      if ($this->getRespuesta132() == 0) $data[] = "respuesta13.2_fam";

      if ($this->getRespuesta141() == 0) $data[] = "respuesta14.1_fam";
      if ($this->getRespuesta142() == 0) $data[] = "respuesta14.2_fam";
      if ($this->getRespuesta146() == 0) $data[] = "respuesta14.6_fam";

      if ($this->getRespuesta151() == 0) $data[] = "respuesta15.1_fam";
      if ($this->getRespuesta152() == 0) $data[] = "respuesta15.2_fam";
      if ($this->getRespuesta153() == 0) $data[] = "respuesta15.3_fam";


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

                              (($this->getRespuesta34() == 1) ? 1 : 0) +
                              (($this->getRespuesta36() == 1) ? 1 : 0) +

                              (($this->getRespuesta114() == 1) ? 1 : 0)+
                              (($this->getRespuesta1110() == 1) ? 1 : 0)+

                              (($this->getRespuesta121() == 1) ? 1 : 0) +
                              (($this->getRespuesta122() == 1) ? 1 : 0) +
                              (($this->getRespuesta123() == 1) ? 1 : 0) +

                              (($this->getRespuesta131() == 1) ? 1 : 0) +
                              (($this->getRespuesta132() == 1) ? 1 : 0) +

                              (($this->getRespuesta141() == 1) ? 1 : 0) +
                              (($this->getRespuesta142() == 1) ? 1 : 0) +
                              (($this->getRespuesta146() == 1) ? 1 : 0) +

                              (($this->getRespuesta151() == 1) ? 1 : 0) +
                              (($this->getRespuesta152() == 1) ? 1 : 0) +
                              (($this->getRespuesta153() == 1) ? 1 : 0)
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
                  'items' => 33,
                  'indice' => (($this->getRespuesta31() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta32() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta33() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta35() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta37() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta38() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta39() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta310() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta311() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta312() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta313() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta41() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta42() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta43() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta44() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta45() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta51() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta52() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta53() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta54() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta61() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta62() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta71() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta72() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta73() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta82() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta83() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta91() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta92() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta93() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta143() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta144() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta145() == 1) ? 1 : 0 )
                  ),
              10 => array (
                  'items' => 14,
                  'indice' => (($this->getRespuesta22() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta23() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta24() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta25() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta81() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta101() == 1) ? 1 : 0 ) +

                              (($this->getRespuesta111() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta112() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta113() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta115() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta116() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta117() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta118() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta119() == 1) ? 1 : 0 )

                  ),
              5 => array (
                  'items' => 0,
                  'indice' => 0
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
      $ipal = 0;
      //Calcula el índice IPAL según Fórmula:
      $data = array(
              50 => array (
                  'items' => 4,
                  'indice' => (($this->getRespuesta134() == 1) ? 1 : 0) +
                              (($this->getRespuesta135() == 1) ? 1 : 0) +
                              (($this->getRespuesta137() == 1) ? 1 : 0) +
                              (($this->getRespuesta138() == 1) ? 1 : 0)
                  ),
              20 => array (
                  'items' => 1,
                  'indice' => (($this->getRespuesta139() == 1) ? 1 : 0 )
                  ),
              10 => array (
                  'items' => 2,
                  'indice' => (($this->getRespuesta136() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta1310() == 1) ? 1 : 0 )
                  ),
              5 => array (
                  'items' => 3,
                  'indice' => (($this->getRespuesta131() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta132() == 1) ? 1 : 0 ) +
                              (($this->getRespuesta133() == 1) ? 1 : 0 )
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
