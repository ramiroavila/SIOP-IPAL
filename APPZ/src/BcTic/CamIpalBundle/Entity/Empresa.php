<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use BcTic\CamIpalBundle\Entity\Contrato as Contrato;

/**
 * Empresa
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BcTic\CamIpalBundle\Entity\EmpresaRepository")
 */
class Empresa
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
     * @ORM\Column(name="nombre", type="string", length=150)
     * @Assert\NotBlank()
     * @Assert\Length(min = "5")     
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="nemo", type="string", length=20)
     * @Assert\NotBlank()
     * @Assert\Length(min = "3")     
     */
    private $nemo;

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
     *  @ORM\ManyToMany(targetEntity="Contrato", mappedBy="empresas")
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
     * @return Empresa
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
     * Set nemo
     *
     * @param string $nemo
     * @return Empresa
     */
    public function setNemo($nemo)
    {
        $this->nemo = $nemo;

        return $this;
    }

    /**
     * Get nemo
     *
     * @return string 
     */
    public function getNemo()
    {
        return $this->nemo;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Empresa
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

    public function getNumDeContratos(){
        return count($this->contratos);
    }

    /**
     * Set pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     * @return Empresa
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
     * @return Empresa
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
