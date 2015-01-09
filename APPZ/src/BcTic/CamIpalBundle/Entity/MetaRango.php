<?php

namespace BcTic\CamIpalBundle\Entity;

class MetaRango
{
    private $annoDesde;

    private $mesDesde;

    private $annoHasta;

    private $mesHasta;

    private $subGerencia;

    /**
     * Set anno
     *
     * @param integer $anno
     * @return Meta
     */
    public function setAnnoDesde($anno)
    {
        $this->annoDesde = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnnoDesde()
    {
        return $this->annoDesde;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Meta
     */
    public function setMesDesde($mes)
    {
        $this->mesDesde = $mes;
    }


    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMesDesde()
    {
        return $this->mesDesde;
    }    

    /**
     * Set anno
     *
     * @param integer $anno
     * @return Meta
     */
    public function setAnnoHasta($anno)
    {
        $this->annoHasta = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnnoHasta()
    {
        return $this->annoHasta;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Meta
     */
    public function setMesHasta($mes)
    {
        $this->mesHasta = $mes;
    }


    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMesHasta()
    {
        return $this->mesHasta;
    } 

    /**
     * Set subGerencia
     *
     * @param \BcTic\CamIpalBundle\Entity\SubGerencia $subGerencia
     * @return Meta
     */
    public function setSubGerencia(\BcTic\CamIpalBundle\Entity\SubGerencia $subGerencia = null)
    {
        $this->subGerencia = $subGerencia;

        return $this;
    }

    /**
     * Get subGerencia
     *
     * @return \BcTic\CamIpalBundle\Entity\SubGerencia 
     */
    public function getSubGerencia()
    {
        return $this->subGerencia;
    }
}
