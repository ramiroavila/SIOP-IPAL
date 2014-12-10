<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestaColombiaInterno
 *
 * @ORM\Entity
 *
 */
class EncuestaBrazilInterno extends Encuesta
{

    public function __construct() {
      
        $this->setCreatedAt(date('U'));      
        //Respuestas NA por defecto
        $this->setRespuesta21(2);
        $this->setRespuesta22(2);        
        $this->setRespuesta23(2);
        $this->setRespuesta24(2);
        $this->setRespuesta25(2);
        $this->setRespuesta26(2);

    }
  
    public function getKey() {
      return "brazil_interno";	
    }

        public function getHits($criticidad) {

        $data = array(
                50 => array (
                    'items' => 6,
                    'indice' => (($this->getRespuesta21() == 1) ? 1 : 0) + 
                                (($this->getRespuesta22() == 1) ? 1 : 0)+ 
                                (($this->getRespuesta23() == 1) ? 1 : 0) + 
                                (($this->getRespuesta24() == 1) ? 1 : 0) + 
                                (($this->getRespuesta25() == 1) ? 1 : 0) +
                                (($this->getRespuesta26() == 1) ? 1 : 0) 
                    ),

                40 => array (
                    'items' => 0,
                    'indice' => 0
                    ),

                30 => array (
                    'items' => 4,
                    'indice' => (($this->getRespuesta51() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta52() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta53() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta54() == 1) ? 1 : 0 ) 
                    ),


                20 => array (
                    'items' => 24,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta12() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta13() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta14() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta15() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta16() == 1) ? 1 : 0 ) +  
                                (($this->getRespuesta31() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta32() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta33() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta34() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta36() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta37() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta38() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta39() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta310() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta311() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta312() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta313() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta314() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta61() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta62() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta63() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta64() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta65() == 1) ? 1 : 0 ) 
                    ),
                10 => array (
                    'items' => 10,
                    'indice' => (($this->getRespuesta41() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta44() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta45() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta46() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta71() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta72() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta73() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta74() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta81() == 1) ? 1 : 0 )
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
      if ($this->getRespuesta11() == 1) $data[] = "respuesta1.1_brazil_interno";
      if ($this->getRespuesta12() == 1) $data[] = "respuesta1.2_brazil_interno";
      if ($this->getRespuesta13() == 1) $data[] = "respuesta1.3_brazil_interno";
      if ($this->getRespuesta14() == 1) $data[] = "respuesta1.4_brazil_interno";
      if ($this->getRespuesta15() == 1) $data[] = "respuesta1.5_brazil_interno";
      if ($this->getRespuesta16() == 1) $data[] = "respuesta1.6_brazil_interno";

      if ($this->getRespuesta21() == 1) $data[] = "respuesta2.1_brazil_interno";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta2.2_brazil_interno";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta2.3_brazil_interno";
      if ($this->getRespuesta24() == 1) $data[] = "respuesta2.4_brazil_interno";
      if ($this->getRespuesta25() == 1) $data[] = "respuesta2.5_brazil_interno";
      if ($this->getRespuesta26() == 1) $data[] = "respuesta2.6_brazil_interno";

      if ($this->getRespuesta31() == 1) $data[] = "respuesta3.1_brazil_interno";
      if ($this->getRespuesta32() == 1) $data[] = "respuesta3.2_brazil_interno";
      if ($this->getRespuesta33() == 1) $data[] = "respuesta3.3_brazil_interno";
      if ($this->getRespuesta34() == 1) $data[] = "respuesta3.4_brazil_interno";
      if ($this->getRespuesta35() == 1) $data[] = "respuesta3.5_brazil_interno";
      if ($this->getRespuesta36() == 1) $data[] = "respuesta3.6_brazil_interno";
      if ($this->getRespuesta37() == 1) $data[] = "respuesta3.7_brazil_interno";
      if ($this->getRespuesta38() == 1) $data[] = "respuesta3.8_brazil_interno";
      if ($this->getRespuesta39() == 1) $data[] = "respuesta3.9_brazil_interno";
      if ($this->getRespuesta310() == 1) $data[] = "respuesta3.10_brazil_interno";
      if ($this->getRespuesta311() == 1) $data[] = "respuesta3.11_brazil_interno";
      if ($this->getRespuesta312() == 1) $data[] = "respuesta3.12_brazil_interno";
      if ($this->getRespuesta313() == 1) $data[] = "respuesta3.13_brazil_interno";
      if ($this->getRespuesta314() == 1) $data[] = "respuesta3.14_brazil_interno";

      if ($this->getRespuesta41() == 1) $data[] = "respuesta4.1_brazil_interno";
      if ($this->getRespuesta42() == 1) $data[] = "respuesta4.2_brazil_interno";
      if ($this->getRespuesta43() == 1) $data[] = "respuesta4.3_brazil_interno";
      if ($this->getRespuesta44() == 1) $data[] = "respuesta4.4_brazil_interno";
      if ($this->getRespuesta45() == 1) $data[] = "respuesta4.5_brazil_interno";
      if ($this->getRespuesta46() == 1) $data[] = "respuesta4.6_brazil_interno";
      
      if ($this->getRespuesta51() == 1) $data[] = "respuesta5.1_brazil_interno";
      if ($this->getRespuesta52() == 1) $data[] = "respuesta5.2_brazil_interno";
      if ($this->getRespuesta53() == 1) $data[] = "respuesta5.3_brazil_interno";
      if ($this->getRespuesta54() == 1) $data[] = "respuesta5.4_brazil_interno";

      if ($this->getRespuesta61() == 1) $data[] = "respuesta6.1_brazil_interno";
      if ($this->getRespuesta62() == 1) $data[] = "respuesta6.2_brazil_interno";
      if ($this->getRespuesta63() == 1) $data[] = "respuesta6.3_brazil_interno";
      if ($this->getRespuesta64() == 1) $data[] = "respuesta6.4_brazil_interno";
      if ($this->getRespuesta65() == 1) $data[] = "respuesta6.5_brazil_interno";

      if ($this->getRespuesta71() == 1) $data[] = "respuesta7.1_brazil_interno";
      if ($this->getRespuesta72() == 1) $data[] = "respuesta7.2_brazil_interno";
      if ($this->getRespuesta73() == 1) $data[] = "respuesta7.3_brazil_interno";
      if ($this->getRespuesta74() == 1) $data[] = "respuesta7.4_brazil_interno";
      
      if ($this->getRespuesta81() == 1) $data[] = "respuesta8.1_brazil_interno";

      return $data; 
    }

    public function getIncumplimientos50() {

      $data = array();
      
      if ($this->getRespuesta21() == 1) $data[] = "respuesta1.1_brazil_interno";
      if ($this->getRespuesta22() == 1) $data[] = "respuesta1.2_brazil_interno";
      if ($this->getRespuesta23() == 1) $data[] = "respuesta1.3_brazil_interno";
      if ($this->getRespuesta24() == 1) $data[] = "respuesta1.4_brazil_interno";
      if ($this->getRespuesta25() == 1) $data[] = "respuesta1.5_brazil_interno";
      if ($this->getRespuesta26() == 1) $data[] = "respuesta2.1_brazil_interno";
      
      return $data;
    }

    public function getIndiceIPAL()
    {
        $ipal = 0;
        //Calcula el índice IPAL según Fórmula:
        $data = array(
                50 => array (
                    'items' => 6,
                    'indice' => (($this->getRespuesta21() == 1) ? 1 : 0) + 
                                (($this->getRespuesta22() == 1) ? 1 : 0)+ 
                                (($this->getRespuesta23() == 1) ? 1 : 0) + 
                                (($this->getRespuesta24() == 1) ? 1 : 0) + 
                                (($this->getRespuesta25() == 1) ? 1 : 0) +
                                (($this->getRespuesta26() == 1) ? 1 : 0) 
                    ),

                40 => array (
                    'items' => 0,
                    'indice' => 0
                    ),

                30 => array (
                    'items' => 4,
                    'indice' => (($this->getRespuesta51() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta52() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta53() == 1) ? 1 : 0 ) +
                                (($this->getRespuesta54() == 1) ? 1 : 0 ) 
                    ),


                20 => array (
                    'items' => 24,
                    'indice' => (($this->getRespuesta11() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta12() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta13() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta14() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta15() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta16() == 1) ? 1 : 0 ) +  
                                (($this->getRespuesta31() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta32() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta33() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta34() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta35() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta36() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta37() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta38() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta39() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta310() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta311() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta312() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta313() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta314() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta61() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta62() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta63() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta64() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta65() == 1) ? 1 : 0 ) 
                    ),
                10 => array (
                    'items' => 10,
                    'indice' => (($this->getRespuesta41() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta42() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta43() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta44() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta45() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta46() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta71() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta72() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta73() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta74() == 1) ? 1 : 0 ) + 
                                (($this->getRespuesta81() == 1) ? 1 : 0 )
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
                   $ipal = $ipal + ($index * $value['valor']);
                }

        return $ipal;
    }

}
