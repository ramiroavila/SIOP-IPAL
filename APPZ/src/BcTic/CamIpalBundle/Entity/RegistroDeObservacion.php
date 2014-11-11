<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RegistroDeObservacion
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * 
     * @ORM\ManyToOne(targetEntity="ObservacionDeComportamiento", inversedBy="registrosDeObservacion") 
     * @ORM\JoinColumn(name="observacion_de_comportamiento_id", referencedColumnName="id", nullable=false) 
     */
    protected $observacionDeComportamiento;

     /** 
     * 
     * @ORM\ManyToOne(targetEntity="Observacion", inversedBy="registrosDeObservacion") 
     * @ORM\JoinColumn(name="observacion_id", referencedColumnName="id", nullable=false) 
     */
    protected $observacion;

     /**
     * @var string
     *
     * @ORM\Column(name="notas", type="string", length=255, nullable=true)
     *
     */
    private $notas;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor", type="smallint")
     */
    private $valor = 1;


    /**
     * Set observacionDeComportamiento
     *
     * @param \BcTic\CamIpalBundle\Entity\ObservacionDeComportamiento $observacionDeComportamiento
     * @return RegistroDeObservacion
     */
    public function setObservacionDeComportamiento(\BcTic\CamIpalBundle\Entity\ObservacionDeComportamiento $observacionDeComportamiento)
    {
        $this->observacionDeComportamiento = $observacionDeComportamiento;

        return $this;
    }

    /**
     * Get observacionDeComportamiento
     *
     * @return \BcTic\CamIpalBundle\Entity\ObservacionDeComportamiento 
     */
    public function getObservacionDeComportamiento()
    {
        return $this->observacionDeComportamiento;
    }

    /**
     * Set observacion
     *
     * @param \BcTic\CamIpalBundle\Entity\Observacion $observacion
     * @return RegistroDeObservacion
     */
    public function setObservacion(\BcTic\CamIpalBundle\Entity\Observacion $observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return \BcTic\CamIpalBundle\Entity\Observacion 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return RegistroDeObservacion
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return RegistroDeObservacion
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
