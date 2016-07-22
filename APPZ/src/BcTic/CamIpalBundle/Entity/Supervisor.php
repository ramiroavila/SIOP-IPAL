<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use BcTic\CamIpalBundle\Validator\Constraints as BcTicCamIpalBundleAssert;

/**
 * Supervisor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Supervisor
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
     * @Assert\NotBlank()
     * @ORM\Column(name="rut", type="string", length=10)
     * @BcTicCamIpalBundleAssert\Rut()
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min = "5")
     */
    private $nombre;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Empresa", inversedBy="supervisores")
     * @ORM\JoinTable(name="SupervisorDeEmpresa",
     *      joinColumns={@ORM\JoinColumn(name="supervisor_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="empresa_id", referencedColumnName="id")}
     *      )
     **/
    protected $empresas;


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
     * @return Supervisor
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
     * Add empresas
     *
     * @param \BcTic\CamIpalBundle\Entity\Empresa $empresas
     * @return Contrato
     */
    public function addEmpresa(\BcTic\CamIpalBundle\Entity\Empresa $empresas)
    {
        $this->empresas[] = $empresas;

        return $this;
    }

    /**
     * Remove empresas
     *
     * @param \BcTic\CamIpalBundle\Entity\Empresa $empresas
     */
    public function removeEmpresa(\BcTic\CamIpalBundle\Entity\Empresa $empresas)
    {
        $this->empresas->removeElement($empresas);
    }

    /**
     * Get empresas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpresas()
    {
        return $this->empresas;
    }

    public function __toString()
    {
        $str =  strlen($this->getRut()) > 0 ? $this->rut.' '.$this->nombre : $this->nombre;
        if (!is_null($this->getEmpresas())) {
          foreach ($this->getEmpresas() as $empresa) {
            $str .= " - ".$empresa;
          }
        }
        return $str;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empresas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return Supervisor
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string
     */
    public function getRut()
    {
        return $this->rut;
    }

}
