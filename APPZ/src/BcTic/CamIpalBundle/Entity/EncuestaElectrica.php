<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaElectrica
 *
 * @ORM\Entity
 *
 */
class EncuestaElectrica extends Encuesta
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
        $this->setRespuesta121(2);
    }


    public function getKey() {
      return "electrica";	
    }

    public function getHits($criticidad) {

        $data = array(
                50 => array (
                    'items' => 13,
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
                                (($this->getRespuesta411() == 1) ? 1 : 0)
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
                                (($this->getRespuesta412() == 1) ? 1 : 0 ) + 
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
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) + 
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

    public function getIncumplimientos() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_electrica";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_electrica";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_electrica";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_electrica";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_electrica";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_electrica";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_electrica";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_electrica";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_electrica";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_electrica";
      if ($this->getRespuesta33() == 1) $data[] = "respuesta3.3_electrica";
      if ($this->getRespuesta34() == 1) $data[] = "respuesta3.4_electrica";
      if ($this->getRespuesta35() == 1) $data[] = "respuesta3.5_electrica";
      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_electrica";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_electrica";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_electrica";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_electrica";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_electrica";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_electrica";
      if ($this->getRespuesta47() == 1) $data[] = "respuesta4.7_electrica";
      if ($this->getRespuesta48() == 1) $data[] = "respuesta4.8_electrica";
      if ($this->getRespuesta49() == 1) $data[] = "respuesta4.9_electrica";
      if ($this->getRespuesta410() == 1) $data[] = "respuesta4.10_electrica";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_electrica";
      if ($this->getRespuesta412() == 1) $data[] = "respuesta4.12_electrica";
      if ($this->getRespuesta51() == 1) $data[] = "respuesta5.1_electrica";
      if ($this->getRespuesta52() == 1) $data[] = "respuesta5.2_electrica";
      if ($this->getRespuesta53() == 1) $data[] = "respuesta5.3_electrica";
      if ($this->getRespuesta61() == 1) $data[] = "respuesta6.1_electrica";
      if ($this->getRespuesta62() == 1) $data[] = "respuesta6.2_electrica";
      if ($this->getRespuesta63() == 1) $data[] = "respuesta6.3_electrica";
      if ($this->getRespuesta64() == 1) $data[] = "respuesta6.4_electrica";
      if ($this->getRespuesta65() == 1) $data[] = "respuesta6.5_electrica";
      if ($this->getRespuesta71() == 1) $data[] = "respuesta7.1_electrica";
      if ($this->getRespuesta72() == 1) $data[] = "respuesta7.2_electrica";
      if ($this->getRespuesta81() == 1) $data[] = "respuesta8.1_electrica";
      if ($this->getRespuesta82() == 1) $data[] = "respuesta8.2_electrica";
      if ($this->getRespuesta91() == 1) $data[] = "respuesta9.1_electrica";
      if ($this->getRespuesta92() == 1) $data[] = "respuesta9.2_electrica";
      if ($this->getRespuesta93() == 1) $data[] = "respuesta9.3_electrica";
      if ($this->getRespuesta101() == 1) $data[] = "respuesta10.1_electrica";
      if ($this->getRespuesta102() == 1) $data[] = "respuesta10.2_electrica";
      if ($this->getRespuesta103() == 1) $data[] = "respuesta10.3_electrica";
      if ($this->getRespuesta111() == 1) $data[] = "respuesta11.1_electrica";
      if ($this->getRespuesta121() == 0) $data[] = "respuesta12.1_electrica";
      if ($this->getRespuesta131() == 1) $data[] = "respuesta13.1_electrica";
      if ($this->getRespuesta132() == 1) $data[] = "respuesta13.2_electrica";
      if ($this->getRespuesta133() == 1) $data[] = "respuesta13.3_electrica";
      if ($this->getRespuesta134() == 1) $data[] = "respuesta13.4_electrica";
      if ($this->getRespuesta135() == 1) $data[] = "respuesta13.5_electrica";
      if ($this->getRespuesta136() == 1) $data[] = "respuesta13.6_electrica";
      if ($this->getRespuesta137() == 1) $data[] = "respuesta13.7_electrica";
      if ($this->getRespuesta138() == 1) $data[] = "respuesta13.8_electrica";
      if ($this->getRespuesta139() == 1) $data[] = "respuesta13.9_electrica";
      if ($this->getRespuesta1310() == 1) $data[] = "respuesta13.10_electrica";
      return $data; 
    }

     public function getIncumplimientos50() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_electrica";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_electrica";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_electrica";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_electrica";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_electrica";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_electrica";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_electrica";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_electrica";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_electrica";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_electrica";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_electrica";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_electrica";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_electrica";
      if ($this->getRespuesta121() == 0) $data[] = "respuesta12.1_electrica";
      return $data;
    }

    public function getIndiceIPAL()
    {
        $ipal = 0;
        //Calcula el índice IPAL según Fórmula:
        $data = array(
                50 => array (
                    'items' => 13,
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
                                (($this->getRespuesta411() == 1) ? 1 : 0)
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
                                (($this->getRespuesta412() == 1) ? 1 : 0 ) + 
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
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) + 
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
                   $ipal = $ipal + ( $index * $value['valor'] );
                } 

        return $ipal;
    }
}