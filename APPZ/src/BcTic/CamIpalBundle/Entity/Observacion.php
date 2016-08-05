<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Observacion
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
     * @ORM\Column(name="nemo", type="string", length=5)
     */
    private $nemo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /** @ORM\OneToMany(targetEntity="RegistroDeObservacion", mappedBy="observacion") */
    protected $registrosDeObservacion;


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
     * Set nemo
     *
     * @param string $nemo
     * @return Observacion
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
     * Set nombre
     *
     * @param string $nombre
     * @return Observacion
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
     * Constructor
     */
    public function __construct()
    {
        $this->registrosDeObservacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add registrosDeObservacion
     *
     * @param \BcTic\CamIpalBundle\Entity\RegistroDeObservacion $registrosDeObservacion
     * @return Observacion
     */
    public function addRegistrosDeObservacion(\BcTic\CamIpalBundle\Entity\RegistroDeObservacion $registrosDeObservacion)
    {
        $this->registrosDeObservacion[] = $registrosDeObservacion;

        return $this;
    }

    /**
     * Remove registrosDeObservacion
     *
     * @param \BcTic\CamIpalBundle\Entity\RegistroDeObservacion $registrosDeObservacion
     */
    public function removeRegistrosDeObservacion(\BcTic\CamIpalBundle\Entity\RegistroDeObservacion $registrosDeObservacion)
    {
        $this->registrosDeObservacion->removeElement($registrosDeObservacion);
    }

    /**
     * Get registrosDeObservacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegistrosDeObservacion()
    {
        return $this->registrosDeObservacion;
    }

    public function __toString() {
      return $this->nombre;
    }
}
