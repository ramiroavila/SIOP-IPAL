<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaElectrica
 *
 * @ORM\Entity
 *
 */
class EncuestaObrasCiviles extends Encuesta
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
        $this->setRespuesta43(2);
        $this->setRespuesta44(2);
        $this->setRespuesta411(2);
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
      return "obras_civiles";	
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
                                (($this->getRespuesta43() == 1) ? 1 : 0) + 
                                (($this->getRespuesta44() == 1) ? 1 : 0) +
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
                                (($this->getRespuesta49() == 1) ? 1 : 0 ) + 
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
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_obras_civiles";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_obras_civiles";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_obras_civiles";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_obras_civiles";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_obras_civiles";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_obras_civiles";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_obras_civiles";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_obras_civiles";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_obras_civiles";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_obras_civiles";
      if ($this->getRespuesta33() == 1) $data[] = "respuesta3.3_obras_civiles";
      if ($this->getRespuesta34() == 1) $data[] = "respuesta3.4_obras_civiles";
      if ($this->getRespuesta35() == 1) $data[] = "respuesta3.5_obras_civiles";
      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_obras_civiles";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_obras_civiles";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_obras_civiles";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_obras_civiles";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_obras_civiles";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_obras_civiles";
      if ($this->getRespuesta47() == 1) $data[] = "respuesta4.7_obras_civiles";
      if ($this->getRespuesta48() == 1) $data[] = "respuesta4.8_obras_civiles";
      if ($this->getRespuesta49() == 1) $data[] = "respuesta4.9_obras_civiles";
      if ($this->getRespuesta410() == 1) $data[] = "respuesta4.10_obras_civiles";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_obras_civiles";
      if ($this->getRespuesta412() == 1) $data[] = "respuesta4.12_obras_civiles";
      if ($this->getRespuesta51() == 1) $data[] = "respuesta5.1_obras_civiles";
      if ($this->getRespuesta52() == 1) $data[] = "respuesta5.2_obras_civiles";
      if ($this->getRespuesta53() == 1) $data[] = "respuesta5.3_obras_civiles";
      if ($this->getRespuesta61() == 1) $data[] = "respuesta6.1_obras_civiles";
      if ($this->getRespuesta62() == 1) $data[] = "respuesta6.2_obras_civiles";
      if ($this->getRespuesta63() == 1) $data[] = "respuesta6.3_obras_civiles";
      if ($this->getRespuesta64() == 1) $data[] = "respuesta6.4_obras_civiles";
      if ($this->getRespuesta65() == 1) $data[] = "respuesta6.5_obras_civiles";
      if ($this->getRespuesta71() == 1) $data[] = "respuesta7.1_obras_civiles";
      if ($this->getRespuesta72() == 1) $data[] = "respuesta7.2_obras_civiles";
      if ($this->getRespuesta81() == 1) $data[] = "respuesta8.1_obras_civiles";
      if ($this->getRespuesta82() == 1) $data[] = "respuesta8.2_obras_civiles";
      if ($this->getRespuesta91() == 1) $data[] = "respuesta9.1_obras_civiles";
      if ($this->getRespuesta92() == 1) $data[] = "respuesta9.2_obras_civiles";
      if ($this->getRespuesta93() == 1) $data[] = "respuesta9.3_obras_civiles";
      if ($this->getRespuesta101() == 1) $data[] = "respuesta10.1_obras_civiles";
      if ($this->getRespuesta102() == 1) $data[] = "respuesta10.2_obras_civiles";
      if ($this->getRespuesta103() == 1) $data[] = "respuesta10.3_obras_civiles";
      if ($this->getRespuesta111() == 1) $data[] = "respuesta11.1_obras_civiles";
      if ($this->getRespuesta121() == 0) $data[] = "respuesta12.1_obras_civiles";
      if ($this->getRespuesta131() == 1) $data[] = "respuesta13.1_obras_civiles";
      if ($this->getRespuesta132() == 1) $data[] = "respuesta13.2_obras_civiles";
      if ($this->getRespuesta133() == 1) $data[] = "respuesta13.3_obras_civiles";
      if ($this->getRespuesta134() == 1) $data[] = "respuesta13.4_obras_civiles";
      if ($this->getRespuesta135() == 1) $data[] = "respuesta13.5_obras_civiles";
      if ($this->getRespuesta136() == 1) $data[] = "respuesta13.6_obras_civiles";
      if ($this->getRespuesta137() == 1) $data[] = "respuesta13.7_obras_civiles";
      if ($this->getRespuesta138() == 1) $data[] = "respuesta13.8_obras_civiles";
      if ($this->getRespuesta139() == 1) $data[] = "respuesta13.9_obras_civiles";
      if ($this->getRespuesta1310() == 1) $data[] = "respuesta13.10_obras_civiles";
      return $data; 
    }

    public function getIncumplimientos50() {
      $data = array();
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_obras_civiles";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_obras_civiles";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_obras_civiles";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_obras_civiles";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_obras_civiles";
      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_obras_civiles";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_obras_civiles";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_obras_civiles";
      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_obras_civiles";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.4_obras_civiles";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.5_obras_civiles";
      if ($this->getRespuesta411() == 1) $data[] = "respuesta4.11_obras_civiles";
      if ($this->getRespuesta121() == 0) $data[] = "respuesta12.1_obras_civiles";
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
                                (($this->getRespuesta43() == 1) ? 1 : 0) + 
                                (($this->getRespuesta44() == 1) ? 1 : 0) +
                                (($this->getRespuesta411() == 1) ? 1 : 0)
                    ),
                20 => array (
                    'items' => 23,
                    'indice' => (($this->getRespuesta33() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta41() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta45() == 1) ? 1 : 0 ) + 
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
                                (($this->getRespuesta49() == 1) ? 1 : 0 ) + 
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
}
