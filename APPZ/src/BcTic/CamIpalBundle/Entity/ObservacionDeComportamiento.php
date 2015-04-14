<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use BcTic\CamIpalBundle\Validator\Constraints as BcTicAssert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * ObservacionDeComportamiento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BcTic\CamIpalBundle\Entity\ObservacionDeComportamientoRepository")
 */
class ObservacionDeComportamiento
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
     * @ORM\Column(name="created_by", type="string", length=50, nullable=true)
     */
    private $createdBy;    

    /**
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     */
    protected $empresa;    

    /**
     * @ORM\ManyToOne(targetEntity="Contrato")
     * @ORM\JoinColumn(name="contrato_id", referencedColumnName="id")
     */
    protected $contrato;

    protected $servicio;

    protected $gerencia;

    protected $subGerencia;

    protected $mandante;

    /**
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="ctta_subcont_id", referencedColumnName="id")
     */
    private $cttaSubcont;   

    /**
     *
     * @var string
     *
     * @ORM\Column(name="inspector", type="string", length=255, nullable=true)
     * @BcTicAssert\ContainsInspector
     *
     */
    protected $inspector;  

     /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    protected $pais;     

    /**
     * @var string
     *
     * @ORM\Column(name="supervisor_facade", type="string", length=255, nullable=true)
     */
    protected $supervisorFacade;

    /**
     * @ORM\ManyToOne(targetEntity="Registro")
     * @ORM\JoinColumn(name="supervisor_id", referencedColumnName="id")
     */
    protected $supervisor;

    /**
     *
     * @var string
     *
     * @ORM\Column(name="prevencionista", type="string", length=255, nullable=true)
     *
     */
    protected $prevencionista;              
    
    protected $area;

    /**
     * @var string
     *
     * @ORM\Column(name="parte_de_la_planta", type="string", length=100)
     * @Assert\NotBlank(message = "Este valor no puede estar vacío.")     
     */
    private $parteDeLaPlanta;

    /**
     * @var string
     *
     * @ORM\Column(name="instalacion", type="string", length=100)
     */
    private $instalacion;    

     /**
     * @var string
     *
     * @ORM\Column(name="unidad_organizativa", type="string", length=100)
     */
    private $unidadOrganizativa;        

     /**
     * @var string
     *
     * @ORM\Column(name="parte_de_la_instalacion", type="string", length=100)
     */
    private $parteDeLaInstalacion;        

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", length=255)
     * @Assert\NotBlank(message = "Este valor no puede estar vacío.")
     * @Assert\Length(min = "5", minMessage = "Este valor debe ser al menos de 5 letras.")
     */
    private $actividad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="string",nullable=true)
     */
    private $comentarios;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_observados", type="integer")
     * @Assert\NotBlank(message = "Este valor no puede estar vacío.")     
     */
    private $numeroObservados = 1;

    /**
     *
     * @ORM\ManyToMany(targetEntity="CondicionClimatica")
     * @ORM\JoinTable(name="CondicionClimaticaDeObservacionDeComportamiento",
     *      joinColumns={@ORM\JoinColumn(name="observacion_de_comportamiento_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="condicion_climatica_id", referencedColumnName="id")}
     *      )
     **/

    protected $condicionesClimaticas;

    /** 
    * @ORM\OneToMany(targetEntity="RegistroDeObservacion", mappedBy="observacionDeComportamiento", cascade={"all"}) 
    */
    protected $registrosDeObservacion;

    /**
     * @var \Date
     *
     * 
     */
    private $fechaDesde;
    
    /**
     * @var \Date
     *
     * 
     */
    private $fechaHasta;

    /**
     * @var string
     *
     * @ORM\Column(name="file_1", type="string", length=255, nullable=true)
     */
    private $file1;

    /**
    *
    * @Assert\File(maxSize="20000000")
    */
    private $uploadedFile1;    

    /**
    * PARA USO DEL FILTRO
    * 
    */
    private $grupos;    

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
     * Set categoria
     *
     * @param string $categoria
     * @return ObservacionDeComportamiento
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ObservacionDeComportamiento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     * @return ObservacionDeComportamiento
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set numeroObservados
     *
     * @param integer $numeroObservados
     * @return ObservacionDeComportamiento
     */
    public function setNumeroObservados($numeroObservados)
    {
        $this->numeroObservados = $numeroObservados;

        return $this;
    }

    /**
     * Get numeroObservados
     *
     * @return integer 
     */
    public function getNumeroObservados()
    {
        return $this->numeroObservados;
    }

    /**
     * Set condicionClimatica
     *
     * @param \BcTic\CamIpalBundle\Entity\CondicionClimatica $condicionClimatica
     * @return ObservacionDeComportamiento
     */
    public function setCondicionClimatica(\BcTic\CamIpalBundle\Entity\CondicionClimatica $condicionClimatica = null)
    {
        $this->condicionClimatica = $condicionClimatica;

        return $this;
    }

    /**
     * Get condicionClimatica
     *
     * @return \BcTic\CamIpalBundle\Entity\CondicionClimatica 
     */
    public function getCondicionClimatica()
    {
        return $this->condicionClimatica;
    }
    

    /**
     * Add condicionesClimaticas
     *
     * @param \BcTic\CamIpalBundle\Entity\CondicionClimatica $condicionesClimaticas
     * @return ObservacionDeComportamiento
     */
    public function addCondicionesClimatica(\BcTic\CamIpalBundle\Entity\CondicionClimatica $condicionesClimaticas)
    {
        $this->condicionesClimaticas[] = $condicionesClimaticas;

        return $this;
    }

    /**
     * Remove condicionesClimaticas
     *
     * @param \BcTic\CamIpalBundle\Entity\CondicionClimatica $condicionesClimaticas
     */
    public function removeCondicionesClimatica(\BcTic\CamIpalBundle\Entity\CondicionClimatica $condicionesClimaticas)
    {
        $this->condicionesClimaticas->removeElement($condicionesClimaticas);
    }

    /**
     * Get condicionesClimaticas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCondicionesClimaticas()
    {
        return $this->condicionesClimaticas;
    }

    /**
     * Add registrosDeObservacion
     *
     * @param \BcTic\CamIpalBundle\Entity\RegistroDeObservacion $registrosDeObservacion
     * @return ObservacionDeComportamiento
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->condicionesClimaticas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->registrosDeObservacion = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set area
     *
     * @param \BcTic\CamIpalBundle\Entity\Area $area
     * @return ObservacionDeComportamiento
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
     * Set tecnologia
     *
     * @param string $tecnologia
     * @return ObservacionDeComportamiento
     */
    public function setTecnologia($tecnologia)
    {
        $this->tecnologia = $tecnologia;

        return $this;
    }

    /**
     * Get tecnologia
     *
     * @return string 
     */
    public function getTecnologia()
    {
        return $this->tecnologia;
    }

    /**
     * Set parteDeLaPlanta
     *
     * @param string $parteDeLaPlanta
     * @return ObservacionDeComportamiento
     */
    public function setParteDeLaPlanta($parteDeLaPlanta)
    {
        $this->parteDeLaPlanta = $parteDeLaPlanta;

        return $this;
    }

    /**
     * Get parteDeLaPlanta
     *
     * @return string 
     */
    public function getParteDeLaPlanta()
    {
        return $this->parteDeLaPlanta;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     * @return ObservacionDeComportamiento
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return ObservacionDeComportamiento
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;

        return $this;
    }

    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }

    /**
    * Return the # of Registro de Observacion con Valor = 2 (PELIGROSO)
    * 
    *
    */
    public function getIndice() {
      $indice = 0;
      foreach ($this->getRegistrosDeObservacion() as $registroDeObservacion) {
        if ($registroDeObservacion->getValor() == 2) $indice++;
      }   
      return $indice;
    }


    /**
     * Set empresa
     *
     * @param \BcTic\CamIpalBundle\Entity\Empresa $empresa
     * @return ObservacionDeComportamiento
     */
    public function setEmpresa(\BcTic\CamIpalBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \BcTic\CamIpalBundle\Entity\Empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set contrato
     *
     * @param \BcTic\CamIpalBundle\Entity\Contrato $contrato
     * @return ObservacionDeComportamiento
     */
    public function setContrato(\BcTic\CamIpalBundle\Entity\Contrato $contrato = null)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return \BcTic\CamIpalBundle\Entity\Contrato 
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set servicio
     *
     * @param \BcTic\CamIpalBundle\Entity\Servicio $servicio
     * @return Encuesta
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
     * Set gerencia
     *
     * @param \BcTic\CamIpalBundle\Entity\Gerencia $gerencia
     * @return Encuesta
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

    /**
     * Set subGerencia
     *
     * @param \BcTic\CamIpalBundle\Entity\SubGerencia $subGerencia
     * @return Encuesta
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
     * Set cttaSubcont
     *
     * @param \BcTic\CamIpalBundle\Entity\Empresa $cttaSubcont
     * @return ObservacionDeComportamiento
     */
    public function setCttaSubcont(\BcTic\CamIpalBundle\Entity\Empresa $cttaSubcont = null)
    {
        $this->cttaSubcont = $cttaSubcont;

        return $this;
    }

    /**
     * Get cttaSubcont
     *
     * @return \BcTic\CamIpalBundle\Entity\Empresa 
     */
    public function getCttaSubcont()
    {
        return $this->cttaSubcont;
    }

    /**
     * Set mandante
     *
     * @param \BcTic\CamIpalBundle\Entity\Mandante $mandante
     * @return Encuesta
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
     * Set inspector
     *
     *
     */
    public function setInspector($inspector)
    {
        $this->inspector = $inspector;

        return $this;
    }

    /**
     * Get inspector
     *
     */
    public function getInspector()
    {
        return $this->inspector;
    }

    /**
     * Set pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     * @return Encuesta
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
     * Set supervisor
     *
     */
    public function setSupervisorFacade($supervisorFacade)
    {
        $this->supervisorFacade = $supervisorFacade;

        return $this;
    }

    /**
     * Get supervisor
     *
     */
    public function getSupervisorFacade()
    {
        return $this->supervisorFacade;
    }


    /**
     * Set supervisor
     *
     * @param \BcTic\CamIpalBundle\Entity\Registro $supervisor
     * @return ObservacionDeComportamiento
     */
    public function setSupervisor(\BcTic\CamIpalBundle\Entity\Registro $supervisor = null)
    {
        $this->supervisor = $supervisor;

        return $this;
    }

    /**
     * Get supervisor
     *
     * @return \BcTic\CamIpalBundle\Entity\Registro 
     */
    public function getSupervisor()
    {
        return $this->supervisor;
    }

    /**
     * Set prevencionista
     *
     * @param string $prevencionista
     * @return ObservacionDeComportamiento
     */
    public function setPrevencionista($prevencionista)
    {
        $this->prevencionista = $prevencionista;

        return $this;
    }

    /**
     * Get prevencionista
     *
     * @return string 
     */
    public function getPrevencionista()
    {
        return $this->prevencionista;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/';
    }

    public function upload()
    {
      // the file property can be empty if the field is not required
      if (null === $this->getUploadedFile1()) {
        
      } else {
        $this->getUploadedFile1()->move(
          $this->getUploadRootDir(),
          $this->getUploadedFile1()->getClientOriginalName()
        );
        $this->file1 = $this->getUploadDir().$this->getUploadedFile1()->getClientOriginalName();
        $this->uploadedFile1 = null; 
      }

    }    

    /**
     * Set file1
     *
     * @param string $file1
     * @return ObservacionDeComportamiento
     */
    public function setFile1($file1)
    {
        $this->file1 = $file1;

        return $this;
    }

    /**
     * Get file1
     *
     * @return string 
     */
    public function getFile1()
    {
        return $this->file1;
    }

    public function setUploadedFile1(UploadedFile $file = null)
    {
        $this->uploadedFile1 = $file;
    }

    public function getUploadedFile1()
    {
        return $this->uploadedFile1;
    }     

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return ObservacionDeComportamiento
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    public function setGrupos($grupos)
    {
        $this->grupos = $grupos;

        return $this;
    }

    public function getGrupos()
    {
        return $this->grupos;
    }      

    /**
     * Set instalacion
     *
     * @param string $instalacion
     * @return ObservacionDeComportamiento
     */
    public function setInstalacion($instalacion)
    {
        $this->instalacion = $instalacion;

        return $this;
    }

    /**
     * Get instalacion
     *
     * @return string 
     */
    public function getInstalacion()
    {
        return $this->instalacion;
    }

    /**
     * Set unidadOrganizativa
     *
     * @param string $unidadOrganizativa
     * @return ObservacionDeComportamiento
     */
    public function setUnidadOrganizativa($unidadOrganizativa)
    {
        $this->unidadOrganizativa = $unidadOrganizativa;

        return $this;
    }

    /**
     * Get unidadOrganizativa
     *
     * @return string 
     */
    public function getUnidadOrganizativa()
    {
        return $this->unidadOrganizativa;
    }

    /**
     * Set parteDeLaInstalacion
     *
     * @param string $parteDeLaInstalacion
     * @return ObservacionDeComportamiento
     */
    public function setParteDeLaInstalacion($parteDeLaInstalacion)
    {
        $this->parteDeLaInstalacion = $parteDeLaInstalacion;

        return $this;
    }

    /**
     * Get parteDeLaInstalacion
     *
     * @return string 
     */
    public function getParteDeLaInstalacion()
    {
        return $this->parteDeLaInstalacion;
    }
}
