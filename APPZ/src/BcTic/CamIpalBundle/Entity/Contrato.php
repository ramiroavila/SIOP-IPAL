<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use BcTic\CamIpalBundle\Entity\Empresa as Empresa;

/**
 * Contrato
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BcTic\CamIpalBundle\Entity\ContratoRepository")
 */
class Contrato
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
     * @ORM\Column(name="numero", type="integer")
     * @Assert\NotBlank()
     *
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\Length(min = "5")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

     /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

     /**
     * @var boolean
     *
     * @ORM\Column(name="subcontrato", type="boolean")
     */
    private $subcontrato;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Empresa", inversedBy="contratos")
     * @ORM\JoinTable(name="EmpresaDeContrato",
     *      joinColumns={@ORM\JoinColumn(name="contrato_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="empresa_id", referencedColumnName="id")}
     *      )
     **/
    protected $empresas;

    /**
     * @ORM\ManyToOne(targetEntity="Area")
     * @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     */
    protected $area;

    /**
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumn(name="servicio_id", referencedColumnName="id")
     */
    protected $servicio;

    /**
     * @ORM\ManyToOne(targetEntity="SubGerencia")
     * @ORM\JoinColumn(name="subgerencia_id", referencedColumnName="id")
     */
    protected $subGerencia;

    /**
     * @ORM\ManyToOne(targetEntity="Mandante")
     * @ORM\JoinColumn(name="mandante_id", referencedColumnName="id")
     */
    protected $mandante;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    protected $pais;

    /**
     * @ORM\ManyToOne(targetEntity="UnidadDeNegocio")
     * @ORM\JoinColumn(name="unidad_de_negocio_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    protected $unidadDeNegocio;

    /**
     * @var string
     *
     * @ORM\Column(name="centro_de_costo", type="string", length=100)
     * @Assert\NotBlank()
     *
     */
    protected $centroDeCosto = "NINGUNO";

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
     * Set numero
     *
     * @param string $numero
     * @return Contrato
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Contrato
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Contrato
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Contrato
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
        return '#'.$this->numero.' '.$this->nombre.' - '.$this->centroDeCosto.' '.$this->getPais();
    }

    /**
     * Set area
     *
     * @param \BcTic\CamIpalBundle\Entity\Area $area
     * @return Contrato
     */
    public function setArea(\BcTic\CamIpalBundle\Entity\Area $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \BcTic\CamIpalBundle\Entity\Area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set servicio
     *
     * @param \BcTic\CamIpalBundle\Entity\Servicio $servicio
     * @return Contrato
     */
    public function setServicio(\BcTic\CamIpalBundle\Entity\Servicio $servicio = null)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return \BcTic\CamIpalBundle\Entity\Servicio
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set subGerencia
     *
     * @param \BcTic\CamIpalBundle\Entity\SubGerencia $subGerencia
     * @return Contrato
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
     * Set mandante
     *
     * @param \BcTic\CamIpalBundle\Entity\Mandante $mandante
     * @return Contrato
     */
    public function setMandante(\BcTic\CamIpalBundle\Entity\Mandante $mandante = null)
    {
        $this->mandante = $mandante;

        return $this;
    }

    /**
     * Get mandante
     *
     * @return \BcTic\CamIpalBundle\Entity\Mandante
     */
    public function getMandante()
    {
        return $this->mandante;
    }

    /**
     * Set subcontrato
     *
     * @param boolean $subcontrato
     * @return Contrato
     */
    public function setSubcontrato($subcontrato)
    {
        $this->subcontrato = $subcontrato;

        return $this;
    }

    /**
     * Get subcontrato
     *
     * @return boolean
     */
    public function getSubcontrato()
    {
        return $this->subcontrato;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empresas = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     * @return Contrato
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
     * Set unidadDeNegocio
     *
     * @param \BcTic\CamIpalBundle\Entity\UnidadDeNegocio $unidadDeNegocio
     * @return Contrato
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

    /**
     * Set centroDeCosto
     *
     * @param string $centroDeCosto
     * @return Contrato
     */
    public function setCentroDeCosto($centroDeCosto)
    {
        $this->centroDeCosto = $centroDeCosto;

        return $this;
    }

    /**
     * Get centroDeCosto
     *
     * @return string
     */
    public function getCentroDeCosto()
    {
        return $this->centroDeCosto;
    }
}
