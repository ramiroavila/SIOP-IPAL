<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SubGerencia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SubGerencia
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\Length(min = "5")     
     */
    private $nombre;
  
    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Gerencia")
     * @ORM\JoinColumn(name="gerencia_id", referencedColumnName="id")
     */
    protected $gerencia;

    /**
     *  @ORM\ManyToMany(targetEntity="Contrato", mappedBy="subGerencia")
     */
    private $contratos;      

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;


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
     * Set nombre
     *
     * @param string $nombre
     * @return SubGerencia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return SubGerencia
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set gerencia
     *
     * @param \BcTic\CamIpalBundle\Entity\Gerencia $gerencia
     * @return SubGerencia
     */
    public function setGerencia(\BcTic\CamIpalBundle\Entity\Gerencia $gerencia = null)
    {
        $this->gerencia = $gerencia;

        return $this;
    }

    /**
     * Get gerencia
     *
     * @return \BcTic\CamIpalBundle\Entity\Gerencia 
     */
    public function getGerencia()
    {
        return $this->gerencia;
    }
  
    public function __toString()
    {
        return 'GERENCIA: '.$this->gerencia.' SUB GERENCIA: '.$this->nombre;
    }

    public function __construct() {
        $this->contratos = new \Doctrine\Common\Collections\ArrayCollection();
    } 

    /**
     * Add contratos
     *
     * @param \BcTic\CamIpalBundle\Entity\Contrato $contratos
     * @return SubGerencia
     */
    public function addContrato(\BcTic\CamIpalBundle\Entity\Contrato $contratos)
    {
        $this->contratos[] = $contratos;

        return $this;
    }

    /**
     * Remove contratos
     *
     * @param \BcTic\CamIpalBundle\Entity\Contrato $contratos
     */
    public function removeContrato(\BcTic\CamIpalBundle\Entity\Contrato $contratos)
    {
        $this->contratos->removeElement($contratos);
    }

    /**
     * Get contratos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContratos()
    {
        return $this->contratos;
    }
}
