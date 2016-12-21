<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use BcTic\CamIpalBundle\Validator\Constraints as BcTicCamIpalBundleAssert;

/**
 * Empleado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Empleado
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
     * @ORM\Column(name="rut", type="string", length=50)
     *
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
     * @ORM\ManyToMany(targetEntity="Empresa", inversedBy="empleados")
     * @ORM\JoinTable(name="EmpleadoDeEmpresa",
     *      joinColumns={@ORM\JoinColumn(name="empleado_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="empresa_id", referencedColumnName="id")}
     *      )
     **/
    protected $empresas;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    protected $pais;

    /**
     *
     *
     * @ORM\Column(name="cargo", type="string", length=100, options={"default" = "EMPLEADO"})
     */
    private $cargo = 'EMPLEADO';


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
     * @return Empleado
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
     * @return Empleado
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


    /**
     * Set pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     * @return Empleado
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
     * Set cargo
     *
     * @param string $cargo
     * @return Empleado
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context)
    {
      //Validación del DNI - Dependiendo del Pais - en el caso de Chile:
      switch($this->getPais()->getId()) {

        case 1: //Validar RUT Chile:
           if (strpos($this->getRut(),'-') == false) {
             $context->buildViolation('RUT Chile no válido')
                ->atPath('rut')
                ->addViolation();
            return;
           }

           $rut = preg_replace('/[^k0-9]/i', '', $this->getRut());
           $dv  = substr($rut, -1);
           $numero = substr($rut, 0, strlen($rut)-1);
           $i = 2;
           $suma = 0;
           foreach(array_reverse(str_split($numero)) as $v)
           {
             if($i==8)
                 $i = 2;
             $suma += $v * $i;
             ++$i;
           }

           $dvr = 11 - ($suma % 11);

           if($dvr == 11) $dvr = 0;
           if($dvr == 10) $dvr = 'K';

           if($dvr == strtoupper($dv)) {
             //DO NOTHING
           } else {
             $context->buildViolation('RUT incorrecto')
                  ->atPath('rut')
                  ->addViolation();
           }

          break;
        case 2:
          if (strlen($this->getRut()) != 10) {
           $context->buildViolation('DNI COLOMBIA debe tener 10 caracteres')
                ->atPath('rut')
                ->addViolation();
            return;
          }
          break;
        default:
          if (strlen($this->getRut()) == 0) {
           $context->buildViolation('DNI no puede estar vacío')
                ->atPath('rut')
                ->addViolation();
            return;
          }
          break;

        }

    }
}
