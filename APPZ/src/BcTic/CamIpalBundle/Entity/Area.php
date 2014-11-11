<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Area
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Area
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
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    protected $pais;    

    /**
     *  @ORM\ManyToMany(targetEntity="Contrato", mappedBy="area")
     */
    private $contratos;    

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
     * @return Area
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
     * @return Area
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
  
    public function __toString() {
      return $this->nombre.' - '.$this->pais;
    }

    public function __construct() {
        $this->contratos = new \Doctrine\Common\Collections\ArrayCollection();
    } 
        

    /**
     * Set pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     * @return Area
     */
    public function setPais(\BcTic\CamIpalBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \BcTic\CamIpalBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Add contratos
     *
     * @param \BcTic\CamIpalBundle\Entity\Contrato $contratos
     * @return Area
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
