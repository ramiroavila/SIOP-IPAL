<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Actividad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Actividad
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
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     */
    protected $empresa;

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
     * @return Actividad
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
     * @return Actividad
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
     * @param \BcTic\CamIpalBundle\Entity\Empresa $empresa
     * @return Actividad
     */
    public function setEmpresa(\BcTic\CamIpalBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get Empresa
     *
     * @return \BcTic\CamIpalBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function __toString()
    {
        return $this->nombre.', EMPRESA: '.$this->getEmpresa();
    }

}
