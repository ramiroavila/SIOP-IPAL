<?php

namespace BcTic\CamIpalBundle\Entity;

class MetaRango
{
    private $fechaDesde;

    private $fechaHasta;


    /**
     * Set anno
     *
     * @param integer $anno
     * @return Meta
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Meta
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;
    }


    /**
     * Get mes
     *
     * @return integer 
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }    

}
