<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gerencia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Gerencia
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
     * @Assert\Length(min = "3")     
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     *
     * @Assert\NotBlank()    
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    protected $pais;    

    /**
     *  @ORM\ManyToMany(targetEntity="SubGerencia", mappedBy="gerencia")
     */
    private $subGerencias; 


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
     * Set visible
     *
     * @param boolean $visible
     * @return Gerencia
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
  
    public function __toString()
    {
      return $this->nombre.' - '.$this->pais;
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Gerencia
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

    public function __construct() {
        $this->subGerencias = new \Doctrine\Common\Collections\ArrayCollection();
    }     

    /**
     * Set pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     * @return Gerencia
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
     * Add subGerencias
     *
     * @param \BcTic\CamIpalBundle\Entity\SubGerencia $subGerencias
     * @return Gerencia
     */
    public function addSubGerencia(\BcTic\CamIpalBundle\Entity\SubGerencia $subGerencias)
    {
        $this->subGerencias[] = $subGerencias;

        return $this;
    }

    /**
     * Remove subGerencias
     *
     * @param \BcTic\CamIpalBundle\Entity\SubGerencia $subGerencias
     */
    public function removeSubGerencia(\BcTic\CamIpalBundle\Entity\SubGerencia $subGerencias)
    {
        $this->subGerencias->removeElement($subGerencias);
    }

    /**
     * Get subGerencias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubGerencias()
    {
        return $this->subGerencias;
    }
}
