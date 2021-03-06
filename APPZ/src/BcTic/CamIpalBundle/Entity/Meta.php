<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Meta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Meta
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
     * @var integer
     *
     * @ORM\Column(name="anno", type="integer")
     */
    private $anno;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer")
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor", type="integer")
     * @Assert\NotBlank()         
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor_observaciones", type="integer")
     * @Assert\NotBlank()         
     */
    private $valorObservaciones;    

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="SubGerencia")
     * @ORM\JoinColumn(name="subgerencia_id", referencedColumnName="id")
     */
    private $subGerencia;

    /**
     * @ORM\ManyToOne(targetEntity="UnidadDeNegocio")
     * @ORM\JoinColumn(name="unidad_de_negocio_id", referencedColumnName="id")
     * @Assert\NotBlank()     
     */
    protected $unidadDeNegocio;      

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     * @return Meta
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Meta
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return Meta
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

    /**
     * Set valorObservaciones
     *
     * @param integer $valorObservaciones
     * @return Meta
     */
    public function setValorObservaciones($valorObservaciones)
    {
        $this->valorObservaciones = $valorObservaciones;

        return $this;
    }

    /**
     * Get valorObservaciones
     *
     * @return integer 
     */
    public function getValorObservaciones()
    {
        return $this->valorObservaciones;
    }

    /**
     * Set unidadDeNegocio
     *
     * @param \BcTic\CamIpalBundle\Entity\UnidadDeNegocio $unidadDeNegocio
     * @return Meta
     */
    public function setUnidadDeNegocio(\BcTic\CamIpalBundle\Entity\UnidadDeNegocio $unidadDeNegocio = null)
    {
        $this->unidadDeNegocio = $unidadDeNegocio;

        return $this;
    }

    /**
     * Get unidadDeNegocio
     *
     * @return \BcTic\CamIpalBundle\Entity\UnidadDeNegocio 
     */
    public function getUnidadDeNegocio()
    {
        return $this->unidadDeNegocio;
    }
}
