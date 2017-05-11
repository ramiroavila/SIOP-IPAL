<?php

namespace BcTic\CamIpalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use BcTic\CamIpalBundle\Validator\Constraints as BcTicAssert;
use Symfony\Component\Validator\ExecutionContextInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use BcTic\CamIpalBundle\Validator\Constraints as BcTicCamIpalBundleAssert;

/**
 * Encuesta
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="tipo", type="string")
 * @ORM\DiscriminatorMap({"CHILECTRA" = "EncuestaChilectra" ,"ELECTRICO" = "EncuestaElectrica", "COLOMBIA_GENERAL" = "EncuestaColombiaGeneral", "BRAZIL_GENERAL" = "EncuestaBrazilGeneral", "BRAZIL_INTERNO" = "EncuestaBrazilInterno", "LOGISTICA" = "EncuestaLogistica", "OBRAS_CIVILES" = "EncuestaObrasCiviles", "TELECOMUNICACIONES" = "EncuestaTelecomunicaciones", "LLVV" = "EncuestaLlvv", "PERU_ELECTRICO" = "EncuestaPeruElectrica", "PERU_LOGISTICA" = "EncuestaPeruLogistica", "PERU_OBRAS_CIVILES" = "EncuestaPeruObrasCiviles", "PERU_TELECOMUNICACIONES" = "EncuestaPeruTelecomunicaciones","FAM" = "EncuestaFAM" })
 * @BcTicAssert\ContainsUploadedFile
 */
abstract class Encuesta
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
     * @var integer
     *
     * @ORM\Column(name="created_at", type="integer", options={"default" = 0})
     */
    private $createdAt = 0;

    private $tipoFacade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     *
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
     * @ORM\Column(name="actividad", type="string", length=255)
     *
     *
     */
    private $actividad = "";

    /**
     * @ORM\ManyToOne(targetEntity="Actividad")
     * @ORM\JoinColumn(name="actividad_id", referencedColumnName="id")
     */
    private $actividadDeEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_de_trabajo", type="string", length=255)
     * @Assert\NotBlank(message = "Este valor no puede estar vacío.")
     * @Assert\Length(min = "5")
     */
    private $lugarDeTrabajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_de_empleados", type="integer")
     * @Assert\NotBlank(message = "Este valor no puede estar vacío.")
     * @Assert\Range(min = "1", minMessage = "Este valor debe ser al menos 1.")
     */
    private $numDeEmpleados = 3;

    /**
     * @var
     *
     * @ORM\Column(name="empleados", type="array")
     * @Assert\Collection(
     *     fields = {
     *         "empleado_1" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_2" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_3" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_4" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_5" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_6" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_7" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_8" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_9" = @BcTicCamIpalBundleAssert\RutEmpty(),
     *         "empleado_10" = @BcTicCamIpalBundleAssert\RutEmpty()
     *     },
     *     allowMissingFields = true
     * )
     *
     */
    private $empleados = array();

    /**
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="ctta_subcont_id", referencedColumnName="id")
     */
    private $cttaSubcont;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="indice", type="integer")
     */
    private $indice = 0;

    /**
     *
     *
     * @ORM\Column(name="auto_inspeccion", type="string", length=20)
     */
    private $autoInspeccion = 'N/A';

    /**
     *
     *
     * @ORM\Column(name="charla_operativa", type="string", length=20)
     */
    private $charlaOperativa = 'SI';

    /**
     *
     *
     * @ORM\Column(name="charla_correcta", type="string", length=20)
     */
    private $charlaCorrecta = 'SI';

    /**
     *
     *
     * @ORM\Column(name="tipo_de_hallazgo", type="string", length=20)
     */
    private $tipoDeHallazgo = 'CONDUCTUALES';

    /**
     *
     *
     * @ORM\Column(name="charla_grabada", type="string", length=5, options={"default" = "N/A"})
     */
    private $charlaGrabada = 'N/A';

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_1_1", type="smallint")
     */
    private $respuesta11 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_1_2", type="smallint")
     */
    private $respuesta12 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_1_3", type="smallint")
     */
    private $respuesta13 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_1_4", type="smallint")
     */
    private $respuesta14 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_1_5", type="smallint")
     */
    private $respuesta15 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_1_6", type="smallint")
     */
    private $respuesta16 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_2_1", type="smallint")
     */
    private $respuesta21 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_2_2", type="smallint")
     */
    private $respuesta22 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_2_3", type="smallint")
     */
    private $respuesta23 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_2_4", type="smallint")
     */
    private $respuesta24 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_2_5", type="smallint")
     */
    private $respuesta25 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_2_6", type="smallint")
     */
    private $respuesta26 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_1", type="smallint")
     */
    private $respuesta31 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_2", type="smallint")
     */
    private $respuesta32 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_3", type="smallint")
     */
    private $respuesta33 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_4", type="smallint")
     */
    private $respuesta34 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_5", type="smallint")
     */
    private $respuesta35 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_6", type="smallint")
     */
    private $respuesta36 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_7", type="smallint")
     */
    private $respuesta37 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_8", type="smallint")
     */
    private $respuesta38 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_9", type="smallint")
     */
    private $respuesta39 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_10", type="smallint")
     */
    private $respuesta310 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_11", type="smallint")
     */
    private $respuesta311 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_12", type="smallint")
     */
    private $respuesta312 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_13", type="smallint")
     */
    private $respuesta313 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_3_14", type="smallint")
     */
    private $respuesta314 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_1", type="smallint")
     */
    private $respuesta41 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_2", type="smallint")
     */
    private $respuesta42 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_3", type="smallint")
     */
    private $respuesta43 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_4", type="smallint")
     */
    private $respuesta44 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_5", type="smallint")
     */
    private $respuesta45 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_6", type="smallint")
     */
    private $respuesta46 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_7", type="smallint")
     */
    private $respuesta47 = 0;


    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_8", type="smallint")
     */
    private $respuesta48 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_9", type="smallint")
     */
    private $respuesta49 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_10", type="smallint")
     */
    private $respuesta410 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_11", type="smallint")
     */
    private $respuesta411 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_12", type="smallint")
     */
    private $respuesta412 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_13", type="smallint")
     */
    private $respuesta413 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_14", type="smallint")
     */
    private $respuesta414 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_15", type="smallint")
     */
    private $respuesta415 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_16", type="smallint")
     */
    private $respuesta416 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_17", type="smallint")
     */
    private $respuesta417 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_4_18", type="smallint")
     */
    private $respuesta418 = 0;


    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_5_1", type="smallint")
     */
    private $respuesta51 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_5_2", type="smallint")
     */
    private $respuesta52 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_5_3", type="smallint")
     */
    private $respuesta53 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_5_4", type="smallint")
     */
    private $respuesta54 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_6_1", type="smallint")
     */
    private $respuesta61 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_6_2", type="smallint")
     */
    private $respuesta62 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_6_3", type="smallint")
     */
    private $respuesta63 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_6_4", type="smallint")
     */
    private $respuesta64 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_6_5", type="smallint")
     */
    private $respuesta65 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_6_6", type="smallint")
     */
    private $respuesta66 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_7_1", type="smallint")
     */
    private $respuesta71 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_7_2", type="smallint")
     */
    private $respuesta72 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_7_3", type="smallint")
     */
    private $respuesta73 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_7_4", type="smallint")
     */
    private $respuesta74 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_8_1", type="smallint")
     */
    private $respuesta81 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_8_2", type="smallint")
     */
    private $respuesta82 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_8_3", type="smallint")
     */
    private $respuesta83 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_8_4", type="smallint")
     */
    private $respuesta84 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_8_5", type="smallint")
     */
    private $respuesta85 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_1", type="smallint")
     */
    private $respuesta91 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_2", type="smallint")
     */
    private $respuesta92 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_3", type="smallint")
     */
    private $respuesta93 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_4", type="smallint")
     */
    private $respuesta94 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_5", type="smallint")
     */
    private $respuesta95 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_6", type="smallint")
     */
    private $respuesta96 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_7", type="smallint")
     */
    private $respuesta97 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_8", type="smallint")
     */
    private $respuesta98 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_9", type="smallint")
     */
    private $respuesta99 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_10", type="smallint")
     */
    private $respuesta910 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_9_11", type="smallint")
     */
    private $respuesta911 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_1", type="smallint")
     */
    private $respuesta101 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_2", type="smallint")
     */
    private $respuesta102 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_3", type="smallint")
     */
    private $respuesta103 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_4", type="smallint")
     */
    private $respuesta104 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_5", type="smallint")
     */
    private $respuesta105 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_6", type="smallint")
     */
    private $respuesta106 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_7", type="smallint")
     */
    private $respuesta107 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_8", type="smallint")
     */
    private $respuesta108 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_9", type="smallint")
     */
    private $respuesta109 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_10_10", type="smallint")
     */
    private $respuesta1010 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_1", type="smallint")
     */
    private $respuesta111 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_2", type="smallint")
     */
    private $respuesta112 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_3", type="smallint")
     */
    private $respuesta113 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_4", type="smallint")
     */
    private $respuesta114 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_5", type="smallint")
     */
    private $respuesta115 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_6", type="smallint")
     */
    private $respuesta116 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_7", type="smallint")
     */
    private $respuesta117 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_8", type="smallint")
     */
    private $respuesta118 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_9", type="smallint")
     */
    private $respuesta119 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_11_10", type="smallint")
     */
    private $respuesta1110 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_12_1", type="smallint")
     */
    private $respuesta121 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_12_2", type="smallint")
     */
    private $respuesta122 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_12_3", type="smallint")
     */
    private $respuesta123 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_12_4", type="smallint")
     */
    private $respuesta124 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_12_5", type="smallint")
     */
    private $respuesta125 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_12_6", type="smallint")
     */
    private $respuesta126 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_1", type="smallint")
     */
    private $respuesta131 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_2", type="smallint")
     */
    private $respuesta132 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_3", type="smallint")
     */
    private $respuesta133 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_4", type="smallint")
     */
    private $respuesta134 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_5", type="smallint")
     */
    private $respuesta135 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_6", type="smallint")
     */
    private $respuesta136 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_7", type="smallint")
     */
    private $respuesta137 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_8", type="smallint")
     */
    private $respuesta138 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_9", type="smallint")
     */
    private $respuesta139 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_13_10", type="smallint")
     */
    private $respuesta1310 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_14_1", type="smallint")
     */
    private $respuesta141 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_14_2", type="smallint")
     */
    private $respuesta142 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_14_3", type="smallint")
     */
    private $respuesta143 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_14_4", type="smallint")
     */
    private $respuesta144 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_14_5", type="smallint")
     */
    private $respuesta145 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_14_6", type="smallint")
     */
    private $respuesta146 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_14_7", type="smallint")
     */
    private $respuesta147 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_15_1", type="smallint")
     */
    private $respuesta151 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_15_2", type="smallint")
     */
    private $respuesta152 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_15_3", type="smallint")
     */
    private $respuesta153 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_15_4", type="smallint")
     */
    private $respuesta154 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_15_5", type="smallint")
     */
    private $respuesta155 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_16_1", type="smallint")
     */
    private $respuesta161 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_16_2", type="smallint")
     */
    private $respuesta162 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_16_3", type="smallint")
     */
    private $respuesta163 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_16_4", type="smallint")
     */
    private $respuesta164 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_16_5", type="smallint")
     */
    private $respuesta165 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_17_1", type="smallint")
     */
    private $respuesta171 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_17_2", type="smallint")
     */
    private $respuesta172 = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="respuesta_17_3", type="smallint")
     */
    private $respuesta173 = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="file_1", type="string", length=255, nullable=true)
     */
    private $file1;

    /**
    *
    * @Assert\File(maxSize="20000000")
    *
    */
    private $uploadedFile1;

    /**
     * @var string
     *
     * @ORM\Column(name="file_2", type="string", length=255, nullable=true)
     */
    private $file2;

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
    *
    * @Assert\File(maxSize="10000000")
    */
    private $uploadedFile2;

    /**
     * @var string
     *
     * @ORM\Column(name="file_3", type="string", length=255, nullable=true)
     */
    private $file3;

    /**
    *
    * @Assert\File(maxSize="10000000")
    */
    private $uploadedFile3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @ORM\ManyToOne(targetEntity="Empresa", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     */
    protected $empresa;

    /**
     * @ORM\ManyToOne(targetEntity="Contrato", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="contrato_id", referencedColumnName="id")
     */
    protected $contrato;

    protected $mandante;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumn(name="supervisor_id", referencedColumnName="id")
     */
    protected $supervisor;

   /**
    * @BcTicAssert\ContainsSupervisor
    * @Assert\NotBlank()
    * @Assert\Length(min = "5")
    */
    protected $supervisorFacade;

    /**
     *
     * @var string
     *
     * @ORM\Column(name="prevencionista", type="string", length=255, nullable=true)
     *
     */
    protected $prevencionista;

    /**
     * @var string
     *
     * @ORM\Column(name="file_cierre_1", type="string", length=255, nullable=true)
     */
    private $fileCierre1;

    /**
    *
    * @Assert\File(maxSize="20000000")
    */
    private $uploadedFileCierre1;

    /**
     * @var string
     *
     * @ORM\Column(name="file_cierre_2", type="string", length=255, nullable=true)
     */
    private $fileCierre2;

    /**
    *
    * @Assert\File(maxSize="20000000")
    */
    private $uploadedFileCierre2;

    /**
     * @var string
     *
     * @ORM\Column(name="status_cierre", type="string", length=50, options={"default" = "N/A"})
     */
    private $statusCierre = "N/A";

    protected $servicio;

    protected $area;

    protected $gerencia;

    protected $subGerencia;

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
    * PARA USO DEL FILTRO
    *
    */
    private $grupos;

    /**
    * PARA USO DEL FILTRO
    *
    */
    private $unidadDeNegocio;


     /**
     * @var string
     *
     * @ORM\Column(name="localizacion", type="string", length=255, nullable=true)
     */
    private $localizacion;

     /**
     * @var string
     *
     * @ORM\Column(name="cierre", type="text", nullable=true)
     */
    protected $cierre;

     /**
     * @ORM\ManyToOne(targetEntity="Pais", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    protected $pais;

     /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=50, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="cierre_log", type="text", nullable=true)
     */
    private $cierreLog;

    abstract function getKey();
    abstract function getIncumplimientos();
    abstract function getIncumplimientos50();
    abstract function getHits($criticidad);
    abstract function getRespuestasAgrupadas();
    abstract function getRespuestasAgrupadasNumeral();
    abstract function getValor($item);

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Encuesta
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
     * @return Encuesta
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
     * Set actividad
     *
     * @param string $actividad
     * @return Encuesta
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
     * Set actividad
     *
     * @param string $actividad
     * @return Encuesta
     */
    public function setActividadDeEmpresa($actividadDeEmpresa)
    {
        $this->actividadDeEmpresa = $actividadDeEmpresa;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string
     */
    public function getActividadDeEmpresa()
    {
        return $this->actividadDeEmpresa;
    }

    /**
     * Set lugarDeTrabajo
     *
     * @param string $lugarDeTrabajo
     * @return Encuesta
     */
    public function setLugarDeTrabajo($lugarDeTrabajo)
    {
        $this->lugarDeTrabajo = $lugarDeTrabajo;

        return $this;
    }

    /**
     * Get lugarDeTrabajo
     *
     * @return string
     */
    public function getLugarDeTrabajo()
    {
        return $this->lugarDeTrabajo;
    }

    /**
     * Set numDeEmpleados
     *
     * @param integer $numDeEmpleados
     * @return Encuesta
     */
    public function setNumDeEmpleados($numDeEmpleados)
    {
        $this->numDeEmpleados = $numDeEmpleados;

        return $this;
    }

    /**
     * Get numDeEmpleados
     *
     * @return integer
     */
    public function getNumDeEmpleados()
    {
        return $this->numDeEmpleados;
    }

    /**
     * Set cttaSubcont
     *
     * @param string $cttaSubcont
     * @return Encuesta
     */
    public function setCttaSubcont($cttaSubcont)
    {
        $this->cttaSubcont = $cttaSubcont;

        return $this;
    }

    /**
     * Get cttaSubcont
     *
     * @return string
     */
    public function getCttaSubcont()
    {
        return $this->cttaSubcont;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Encuesta
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set file1
     *
     * @param string $file1
     * @return Encuesta
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
     * Set file2
     *
     * @param string $file2
     * @return Encuesta
     */
    public function setFile2($file2)
    {
        $this->file2 = $file2;

        return $this;
    }

    /**
     * Get file2
     *
     * @return string
     */
    public function getFile2()
    {
        return $this->file2;
    }

    public function setUploadedFile2(UploadedFile $file = null)
    {
        $this->uploadedFile2 = $file;
    }

    public function getUploadedFile2()
    {
        return $this->uploadedFile2;
    }

    /**
     * Set file3
     *
     * @param string $file3
     * @return Encuesta
     */
    public function setFile3($file3)
    {
        $this->file3 = $file3;

        return $this;
    }

    /**
     * Get file3
     *
     * @return string
     */
    public function getFile3()
    {
        return $this->file3;
    }

    public function setUploadedFile3(UploadedFile $file = null)
    {
        $this->uploadedFile3 = $file;
    }

    public function getUploadedFile3()
    {
        return $this->uploadedFile3;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Encuesta
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
     * Set autoInspeccion
     *
     * @param boolean $autoInspeccion
     * @return Encuesta
     */
    public function setAutoInspeccion($autoInspeccion)
    {
        $this->autoInspeccion = $autoInspeccion;

        return $this;
    }

    /**
     * Get autoInspeccion
     *
     * @return boolean
     */
    public function getAutoInspeccion()
    {
        return $this->autoInspeccion;
    }

    /**
     * Set charlaOperativa
     *
     * @param boolean $charlaOperativa
     * @return Encuesta
     */
    public function setCharlaOperativa($charlaOperativa)
    {
        $this->charlaOperativa = $charlaOperativa;

        return $this;
    }

    /**
     * Get charlaOperativa
     *
     * @return boolean
     */
    public function getCharlaOperativa()
    {
        return $this->charlaOperativa;
    }

    /**
     * Set empresa
     *
     * @param \BcTic\CamIpalBundle\Entity\Empresa $empresa
     * @return Encuesta
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
     * @return Encuesta
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
     * Set supervisor
     *
     */
    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;

        return $this;
    }

    /**
     * Get supervisor
     *
     */
    public function getSupervisor()
    {
        return $this->supervisor;
    }

    /**
    * Set supervisor Facade
    *
    */
   public function setSupervisorFacade($supervisor)
   {
       $this->supervisorFacade = $supervisor;

       return $this;
   }

   /**
    * Get supervisor facade
    *
    */
   public function getSupervisorFacade()
   {
       return $this->supervisorFacade;
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
     * Set area
     *
     * @param \BcTic\CamIpalBundle\Entity\Area $area
     * @return Encuesta
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
     * Set respuesta11
     *
     * @param integer $respuesta11
     * @return Encuesta
     */
    public function setRespuesta11($respuesta11)
    {
        $this->respuesta11 = $respuesta11;

        return $this;
    }

    /**
     * Get respuesta11
     *
     * @return integer
     */
    public function getRespuesta11()
    {
        return $this->respuesta11;
    }

    /**
     * Set respuesta12
     *
     * @param integer $respuesta12
     * @return Encuesta
     */
    public function setRespuesta12($respuesta12)
    {
        $this->respuesta12 = $respuesta12;

        return $this;
    }

    /**
     * Get respuesta12
     *
     * @return integer
     */
    public function getRespuesta12()
    {
        return $this->respuesta12;
    }

    /**
     * Set respuesta13
     *
     * @param integer $respuesta13
     * @return Encuesta
     */
    public function setRespuesta13($respuesta13)
    {
        $this->respuesta13 = $respuesta13;

        return $this;
    }

    /**
     * Get respuesta13
     *
     * @return integer
     */
    public function getRespuesta13()
    {
        return $this->respuesta13;
    }

    /**
     * Set respuesta21
     *
     * @param integer $respuesta21
     * @return Encuesta
     */
    public function setRespuesta21($respuesta21)
    {
        $this->respuesta21 = $respuesta21;

        return $this;
    }

    /**
     * Get respuesta21
     *
     * @return integer
     */
    public function getRespuesta21()
    {
        return $this->respuesta21;
    }

    /**
     * Set respuesta22
     *
     * @param integer $respuesta22
     * @return Encuesta
     */
    public function setRespuesta22($respuesta22)
    {
        $this->respuesta22 = $respuesta22;

        return $this;
    }

    /**
     * Get respuesta22
     *
     * @return integer
     */
    public function getRespuesta22()
    {
        return $this->respuesta22;
    }

    /**
     * Set respuesta23
     *
     * @param integer $respuesta23
     * @return Encuesta
     */
    public function setRespuesta23($respuesta23)
    {
        $this->respuesta23 = $respuesta23;

        return $this;
    }

    /**
     * Get respuesta23
     *
     * @return integer
     */
    public function getRespuesta23()
    {
        return $this->respuesta23;
    }

    /**
     * Set respuesta31
     *
     * @param integer $respuesta31
     * @return Encuesta
     */
    public function setRespuesta31($respuesta31)
    {
        $this->respuesta31 = $respuesta31;

        return $this;
    }

    /**
     * Get respuesta31
     *
     * @return integer
     */
    public function getRespuesta31()
    {
        return $this->respuesta31;
    }

    /**
     * Set respuesta32
     *
     * @param integer $respuesta32
     * @return Encuesta
     */
    public function setRespuesta32($respuesta32)
    {
        $this->respuesta32 = $respuesta32;

        return $this;
    }

    /**
     * Get respuesta32
     *
     * @return integer
     */
    public function getRespuesta32()
    {
        return $this->respuesta32;
    }

    /**
     * Set respuesta33
     *
     * @param integer $respuesta33
     * @return Encuesta
     */
    public function setRespuesta33($respuesta33)
    {
        $this->respuesta33 = $respuesta33;

        return $this;
    }

    /**
     * Get respuesta33
     *
     * @return integer
     */
    public function getRespuesta33()
    {
        return $this->respuesta33;
    }

    /**
     * Set respuesta34
     *
     * @param integer $respuesta34
     * @return Encuesta
     */
    public function setRespuesta34($respuesta34)
    {
        $this->respuesta34 = $respuesta34;

        return $this;
    }

    /**
     * Get respuesta34
     *
     * @return integer
     */
    public function getRespuesta34()
    {
        return $this->respuesta34;
    }

    /**
     * Set respuesta35
     *
     * @param integer $respuesta35
     * @return Encuesta
     */
    public function setRespuesta35($respuesta35)
    {
        $this->respuesta35 = $respuesta35;

        return $this;
    }

    /**
     * Get respuesta35
     *
     * @return integer
     */
    public function getRespuesta35()
    {
        return $this->respuesta35;
    }

    /**
     * Set respuesta41
     *
     * @param integer $respuesta41
     * @return Encuesta
     */
    public function setRespuesta41($respuesta41)
    {
        $this->respuesta41 = $respuesta41;

        return $this;
    }

    /**
     * Get respuesta41
     *
     * @return integer
     */
    public function getRespuesta41()
    {
        return $this->respuesta41;
    }

    /**
     * Set respuesta42
     *
     * @param integer $respuesta42
     * @return Encuesta
     */
    public function setRespuesta42($respuesta42)
    {
        $this->respuesta42 = $respuesta42;

        return $this;
    }

    /**
     * Get respuesta42
     *
     * @return integer
     */
    public function getRespuesta42()
    {
        return $this->respuesta42;
    }

    /**
     * Set respuesta43
     *
     * @param integer $respuesta43
     * @return Encuesta
     */
    public function setRespuesta43($respuesta43)
    {
        $this->respuesta43 = $respuesta43;

        return $this;
    }

    /**
     * Get respuesta43
     *
     * @return integer
     */
    public function getRespuesta43()
    {
        return $this->respuesta43;
    }

    /**
     * Set respuesta44
     *
     * @param integer $respuesta44
     * @return Encuesta
     */
    public function setRespuesta44($respuesta44)
    {
        $this->respuesta44 = $respuesta44;

        return $this;
    }

    /**
     * Get respuesta44
     *
     * @return integer
     */
    public function getRespuesta44()
    {
        return $this->respuesta44;
    }

    /**
     * Set respuesta45
     *
     * @param integer $respuesta45
     * @return Encuesta
     */
    public function setRespuesta45($respuesta45)
    {
        $this->respuesta45 = $respuesta45;

        return $this;
    }

    /**
     * Get respuesta45
     *
     * @return integer
     */
    public function getRespuesta45()
    {
        return $this->respuesta45;
    }

    /**
     * Set respuesta46
     *
     * @param integer $respuesta46
     * @return Encuesta
     */
    public function setRespuesta46($respuesta46)
    {
        $this->respuesta46 = $respuesta46;

        return $this;
    }

    /**
     * Get respuesta46
     *
     * @return integer
     */
    public function getRespuesta46()
    {
        return $this->respuesta46;
    }

    /**
     * Set respuesta47
     *
     * @param integer $respuesta47
     * @return Encuesta
     */
    public function setRespuesta47($respuesta47)
    {
        $this->respuesta47 = $respuesta47;

        return $this;
    }

    /**
     * Get respuesta47
     *
     * @return integer
     */
    public function getRespuesta47()
    {
        return $this->respuesta47;
    }

    /**
     * Set respuesta48
     *
     * @param integer $respuesta48
     * @return Encuesta
     */
    public function setRespuesta48($respuesta48)
    {
        $this->respuesta48 = $respuesta48;

        return $this;
    }

    /**
     * Get respuesta48
     *
     * @return integer
     */
    public function getRespuesta48()
    {
        return $this->respuesta48;
    }

    /**
     * Set respuesta49
     *
     * @param integer $respuesta49
     * @return Encuesta
     */
    public function setRespuesta49($respuesta49)
    {
        $this->respuesta49 = $respuesta49;

        return $this;
    }

    /**
     * Get respuesta49
     *
     * @return integer
     */
    public function getRespuesta49()
    {
        return $this->respuesta49;
    }

    /**
     * Set respuesta410
     *
     * @param integer $respuesta410
     * @return Encuesta
     */
    public function setRespuesta410($respuesta410)
    {
        $this->respuesta410 = $respuesta410;

        return $this;
    }

    /**
     * Get respuesta410
     *
     * @return integer
     */
    public function getRespuesta410()
    {
        return $this->respuesta410;
    }

    /**
     * Set respuesta411
     *
     * @param integer $respuesta411
     * @return Encuesta
     */
    public function setRespuesta411($respuesta411)
    {
        $this->respuesta411 = $respuesta411;

        return $this;
    }

    /**
     * Get respuesta411
     *
     * @return integer
     */
    public function getRespuesta411()
    {
        return $this->respuesta411;
    }

    /**
     * Set respuesta412
     *
     * @param integer $respuesta412
     * @return Encuesta
     */
    public function setRespuesta412($respuesta412)
    {
        $this->respuesta412 = $respuesta412;

        return $this;
    }

    /**
     * Get respuesta412
     *
     * @return integer
     */
    public function getRespuesta412()
    {
        return $this->respuesta412;
    }

    /**
     * Set respuesta51
     *
     * @param integer $respuesta51
     * @return Encuesta
     */
    public function setRespuesta51($respuesta51)
    {
        $this->respuesta51 = $respuesta51;

        return $this;
    }

    /**
     * Get respuesta51
     *
     * @return integer
     */
    public function getRespuesta51()
    {
        return $this->respuesta51;
    }

    /**
     * Set respuesta52
     *
     * @param integer $respuesta52
     * @return Encuesta
     */
    public function setRespuesta52($respuesta52)
    {
        $this->respuesta52 = $respuesta52;

        return $this;
    }

    /**
     * Get respuesta52
     *
     * @return integer
     */
    public function getRespuesta52()
    {
        return $this->respuesta52;
    }

    /**
     * Set respuesta53
     *
     * @param integer $respuesta53
     * @return Encuesta
     */
    public function setRespuesta53($respuesta53)
    {
        $this->respuesta53 = $respuesta53;

        return $this;
    }

    /**
     * Get respuesta53
     *
     * @return integer
     */
    public function getRespuesta53()
    {
        return $this->respuesta53;
    }

    /**
     * Set respuesta61
     *
     * @param integer $respuesta61
     * @return Encuesta
     */
    public function setRespuesta61($respuesta61)
    {
        $this->respuesta61 = $respuesta61;

        return $this;
    }

    /**
     * Get respuesta61
     *
     * @return integer
     */
    public function getRespuesta61()
    {
        return $this->respuesta61;
    }

    /**
     * Set respuesta62
     *
     * @param integer $respuesta62
     * @return Encuesta
     */
    public function setRespuesta62($respuesta62)
    {
        $this->respuesta62 = $respuesta62;

        return $this;
    }

    /**
     * Get respuesta62
     *
     * @return integer
     */
    public function getRespuesta62()
    {
        return $this->respuesta62;
    }

    /**
     * Set respuesta71
     *
     * @param integer $respuesta71
     * @return Encuesta
     */
    public function setRespuesta71($respuesta71)
    {
        $this->respuesta71 = $respuesta71;

        return $this;
    }

    /**
     * Get respuesta71
     *
     * @return integer
     */
    public function getRespuesta71()
    {
        return $this->respuesta71;
    }

    /**
     * Set respuesta72
     *
     * @param integer $respuesta72
     * @return Encuesta
     */
    public function setRespuesta72($respuesta72)
    {
        $this->respuesta72 = $respuesta72;

        return $this;
    }

    /**
     * Get respuesta72
     *
     * @return integer
     */
    public function getRespuesta72()
    {
        return $this->respuesta72;
    }

    /**
     * Set respuesta81
     *
     * @param integer $respuesta81
     * @return Encuesta
     */
    public function setRespuesta81($respuesta81)
    {
        $this->respuesta81 = $respuesta81;

        return $this;
    }

    /**
     * Get respuesta81
     *
     * @return integer
     */
    public function getRespuesta81()
    {
        return $this->respuesta81;
    }

    /**
     * Set respuesta82
     *
     * @param integer $respuesta82
     * @return Encuesta
     */
    public function setRespuesta82($respuesta82)
    {
        $this->respuesta82 = $respuesta82;

        return $this;
    }

    /**
     * Get respuesta82
     *
     * @return integer
     */
    public function getRespuesta82()
    {
        return $this->respuesta82;
    }

    /**
     * Set respuesta91
     *
     * @param integer $respuesta91
     * @return Encuesta
     */
    public function setRespuesta91($respuesta91)
    {
        $this->respuesta91 = $respuesta91;

        return $this;
    }

    /**
     * Get respuesta91
     *
     * @return integer
     */
    public function getRespuesta91()
    {
        return $this->respuesta91;
    }

    /**
     * Set respuesta92
     *
     * @param integer $respuesta92
     * @return Encuesta
     */
    public function setRespuesta92($respuesta92)
    {
        $this->respuesta92 = $respuesta92;

        return $this;
    }

    /**
     * Get respuesta92
     *
     * @return integer
     */
    public function getRespuesta92()
    {
        return $this->respuesta92;
    }

    /**
     * Set respuesta93
     *
     * @param integer $respuesta93
     * @return Encuesta
     */
    public function setRespuesta93($respuesta93)
    {
        $this->respuesta93 = $respuesta93;

        return $this;
    }

    /**
     * Get respuesta93
     *
     * @return integer
     */
    public function getRespuesta93()
    {
        return $this->respuesta93;
    }

    /**
     * Set respuesta101
     *
     * @param integer $respuesta101
     * @return Encuesta
     */
    public function setRespuesta101($respuesta101)
    {
        $this->respuesta101 = $respuesta101;

        return $this;
    }

    /**
     * Get respuesta101
     *
     * @return integer
     */
    public function getRespuesta101()
    {
        return $this->respuesta101;
    }

    /**
     * Set respuesta102
     *
     * @param integer $respuesta102
     * @return Encuesta
     */
    public function setRespuesta102($respuesta102)
    {
        $this->respuesta102 = $respuesta102;

        return $this;
    }

    /**
     * Get respuesta102
     *
     * @return integer
     */
    public function getRespuesta102()
    {
        return $this->respuesta102;
    }

    /**
     * Set respuesta103
     *
     * @param integer $respuesta103
     * @return Encuesta
     */
    public function setRespuesta103($respuesta103)
    {
        $this->respuesta103 = $respuesta103;

        return $this;
    }

    /**
     * Get respuesta103
     *
     * @return integer
     */
    public function getRespuesta103()
    {
        return $this->respuesta103;
    }

    /**
     * Set respuesta111
     *
     * @param integer $respuesta111
     * @return Encuesta
     */
    public function setRespuesta111($respuesta111)
    {
        $this->respuesta111 = $respuesta111;

        return $this;
    }

    /**
     * Get respuesta111
     *
     * @return integer
     */
    public function getRespuesta111()
    {
        return $this->respuesta111;
    }

    /**
     * Set respuesta14
     *
     * @param integer $respuesta14
     * @return Encuesta
     */
    public function setRespuesta14($respuesta14)
    {
        $this->respuesta14 = $respuesta14;

        return $this;
    }

    /**
     * Get respuesta14
     *
     * @return integer
     */
    public function getRespuesta14()
    {
        return $this->respuesta14;
    }

    /**
     * Set respuesta15
     *
     * @param integer $respuesta15
     * @return Encuesta
     */
    public function setRespuesta15($respuesta15)
    {
        $this->respuesta15 = $respuesta15;

        return $this;
    }

    /**
     * Get respuesta15
     *
     * @return integer
     */
    public function getRespuesta15()
    {
        return $this->respuesta15;
    }

    /**
     * Set respuesta63
     *
     * @param integer $respuesta63
     * @return Encuesta
     */
    public function setRespuesta63($respuesta63)
    {
        $this->respuesta63 = $respuesta63;

        return $this;
    }

    /**
     * Get respuesta63
     *
     * @return integer
     */
    public function getRespuesta63()
    {
        return $this->respuesta63;
    }

    /**
     * Set respuesta64
     *
     * @param integer $respuesta64
     * @return Encuesta
     */
    public function setRespuesta64($respuesta64)
    {
        $this->respuesta64 = $respuesta64;

        return $this;
    }

    /**
     * Get respuesta64
     *
     * @return integer
     */
    public function getRespuesta64()
    {
        return $this->respuesta64;
    }

    /**
     * Set localizacion
     *
     * @param string $localizacion
     * @return Encuesta
     */
    public function setLocalizacion($localizacion)
    {
        $this->localizacion = $localizacion;

        return $this;
    }

    /**
     * Get localizacion
     *
     * @return string
     */
    public function getLocalizacion()
    {
        return $this->localizacion;
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

    public abstract function getIndiceIpal();
    public abstract function getIndiceIpalMedioAmbiente();


    /**
     * Set prevencionista
     *
     * @return Encuesta
     */
    public function setPrevencionista($prevencionista)
    {
        $this->prevencionista = $prevencionista;

        return $this;
    }

    /**
     * Get prevencionista
     *
     */
    public function getPrevencionista()
    {
        return $this->prevencionista;
    }

    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
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

    public function getTipoFacade()
    {
        return $this->tipoFacade;
    }


    /**
     * Set respuesta65
     *
     * @param integer $respuesta65
     * @return Encuesta
     */
    public function setRespuesta65($respuesta65)
    {
        $this->respuesta65 = $respuesta65;

        return $this;
    }

    /**
     * Get respuesta65
     *
     * @return integer
     */
    public function getRespuesta65()
    {
        return $this->respuesta65;
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
          date('U').'-'.$this->getUploadedFile1()->getClientOriginalName()
        );
        $this->file1 = $this->getUploadDir().date('U').'-'.$this->getUploadedFile1()->getClientOriginalName();
        $this->uploadedFile1 = null;
      }

      if (null === $this->getUploadedFile2()) {

      } else {
        $this->getUploadedFile2()->move(
          $this->getUploadRootDir(),
          date('U').'-'.$this->getUploadedFile2()->getClientOriginalName()
        );
        $this->file2 =$this->getUploadDir().date('U').'-'.$this->getUploadedFile2()->getClientOriginalName();
        $this->uploadedFile2 = null;
      }

      if (null === $this->getUploadedFile3()) {

      } else {
        $this->getUploadedFile3()->move(
          $this->getUploadRootDir(),
          date('U').'-'.$this->getUploadedFile3()->getClientOriginalName()
        );
        $this->file3 = $this->getUploadDir().date('U').'-'.$this->getUploadedFile3()->getClientOriginalName();
        $this->uploadedFile3 = null;
      }

      if (null === $this->getUploadedFileCierre1()) {

      } else {
        $this->getUploadedFileCierre1()->move(
          $this->getUploadRootDir(),
          date('U').'-'.$this->getUploadedFileCierre1()->getClientOriginalName()
        );
        $this->fileCierre1 = $this->getUploadDir().date('U').'-'.$this->getUploadedFileCierre1()->getClientOriginalName();
        $this->uploadedFileCierre1 = null;
      }

      if (null === $this->getUploadedFileCierre2()) {

      } else {
        $this->getUploadedFileCierre2()->move(
          $this->getUploadRootDir(),
          date('U').'-'.$this->getUploadedFileCierre2()->getClientOriginalName()
        );
        $this->fileCierre2 = $this->getUploadDir().date('U').'-'.$this->getUploadedFileCierre2()->getClientOriginalName();
        $this->uploadedFileCierre2 = null;
      }

    }

    /**
     * Set fileCierre1
     *
     * @param string $fileCierre1
     * @return Encuesta
     */
    public function setFileCierre1($fileCierre1)
    {
        $this->fileCierre1 = $fileCierre1;

        return $this;
    }

    /**
     * Get fileCierre1
     *
     * @return string
     */
    public function getFileCierre1()
    {
        return $this->fileCierre1;
    }

    public function setUploadedFileCierre1(UploadedFile $file = null)
    {
        $this->uploadedFileCierre1 = $file;
    }

    public function getUploadedFileCierre1()
    {
        return $this->uploadedFileCierre1;
    }

    public function setUploadedFileCierre2(UploadedFile $file = null)
    {
        $this->uploadedFileCierre2 = $file;
    }

    public function getUploadedFileCierre2()
    {
        return $this->uploadedFileCierre2;
    }

    /**
     * Set fileCierre2
     *
     * @param string $fileCierre2
     * @return Encuesta
     */
    public function setFileCierre2($fileCierre2)
    {
        $this->fileCierre2 = $fileCierre2;

        return $this;
    }

    /**
     * Get fileCierre2
     *
     * @return string
     */
    public function getFileCierre2()
    {
        return $this->fileCierre2;
    }

    /**
     * Set cierre
     *
     * @param string $cierre
     * @return Encuesta
     */
    public function setCierre($cierre)
    {
        $this->cierre = $cierre;

        return $this;
    }

    /**
     * Get cierre
     *
     * @return string
     */
    public function getCierre()
    {
        return $this->cierre;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Encuesta
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

    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context)
    {
        //Si estoy editando no tiene sentido validar, solo es valido para nuevas IPAL.
        if ( strlen($this->getId()) <> 0) return;

        //3 dias atrás:
        $diferencia = $this->fecha->diff(date_create());

        if ($diferencia->format('%r%a') > 3) {
        $context->addViolationAt(
                'fecha',
                'La fecha '.$this->fecha->format('d-m-Y').' es anterior a los 3 días permitidos. ',
                array(),
                null
            );
        }

    }


    /**
     * Set respuesta24
     *
     * @param integer $respuesta24
     * @return Encuesta
     */
    public function setRespuesta24($respuesta24)
    {
        $this->respuesta24 = $respuesta24;

        return $this;
    }

    /**
     * Get respuesta24
     *
     * @return integer
     */
    public function getRespuesta24()
    {
        return $this->respuesta24;
    }

    /**
     * Set respuesta25
     *
     * @param integer $respuesta25
     * @return Encuesta
     */
    public function setRespuesta25($respuesta25)
    {
        $this->respuesta25 = $respuesta25;

        return $this;
    }

    /**
     * Get respuesta25
     *
     * @return integer
     */
    public function getRespuesta25()
    {
        return $this->respuesta25;
    }

    /**
     * Set respuesta112
     *
     * @param integer $respuesta112
     * @return Encuesta
     */
    public function setRespuesta112($respuesta112)
    {
        $this->respuesta112 = $respuesta112;

        return $this;
    }

    /**
     * Get respuesta112
     *
     * @return integer
     */
    public function getRespuesta112()
    {
        return $this->respuesta112;
    }

    /**
     * Set respuesta113
     *
     * @param integer $respuesta113
     * @return Encuesta
     */
    public function setRespuesta113($respuesta113)
    {
        $this->respuesta113 = $respuesta113;

        return $this;
    }

    /**
     * Get respuesta113
     *
     * @return integer
     */
    public function getRespuesta113()
    {
        return $this->respuesta113;
    }


    /**
     * Set respuesta121
     *
     * @param integer $respuesta121
     * @return Encuesta
     */
    public function setRespuesta121($respuesta121)
    {
        $this->respuesta121 = $respuesta121;

        return $this;
    }

    /**
     * Get respuesta121
     *
     * @return integer
     */
    public function getRespuesta121()
    {
        return $this->respuesta121;
    }

    /**
     * Set respuesta36
     *
     * @param integer $respuesta36
     * @return Encuesta
     */
    public function setRespuesta36($respuesta36)
    {
        $this->respuesta36 = $respuesta36;

        return $this;
    }

    /**
     * Get respuesta36
     *
     * @return integer
     */
    public function getRespuesta36()
    {
        return $this->respuesta36;
    }

    /**
     * Set respuesta37
     *
     * @param integer $respuesta37
     * @return Encuesta
     */
    public function setRespuesta37($respuesta37)
    {
        $this->respuesta37 = $respuesta37;

        return $this;
    }

    /**
     * Get respuesta37
     *
     * @return integer
     */
    public function getRespuesta37()
    {
        return $this->respuesta37;
    }

    /**
     * Set respuesta38
     *
     * @param integer $respuesta38
     * @return Encuesta
     */
    public function setRespuesta38($respuesta38)
    {
        $this->respuesta38 = $respuesta38;

        return $this;
    }

    /**
     * Get respuesta38
     *
     * @return integer
     */
    public function getRespuesta38()
    {
        return $this->respuesta38;
    }

    /**
     * Set respuesta413
     *
     * @param integer $respuesta413
     * @return Encuesta
     */
    public function setRespuesta413($respuesta413)
    {
        $this->respuesta413 = $respuesta413;

        return $this;
    }

    /**
     * Get respuesta413
     *
     * @return integer
     */
    public function getRespuesta413()
    {
        return $this->respuesta413;
    }

    /**
     * Set respuesta414
     *
     * @param integer $respuesta414
     * @return Encuesta
     */
    public function setRespuesta414($respuesta414)
    {
        $this->respuesta414 = $respuesta414;

        return $this;
    }

    /**
     * Get respuesta414
     *
     * @return integer
     */
    public function getRespuesta414()
    {
        return $this->respuesta414;
    }

    /**
     * Set respuesta415
     *
     * @param integer $respuesta415
     * @return Encuesta
     */
    public function setRespuesta415($respuesta415)
    {
        $this->respuesta415 = $respuesta415;

        return $this;
    }

    /**
     * Get respuesta415
     *
     * @return integer
     */
    public function getRespuesta415()
    {
        return $this->respuesta415;
    }

    /**
     * Set respuesta54
     *
     * @param integer $respuesta54
     * @return Encuesta
     */
    public function setRespuesta54($respuesta54)
    {
        $this->respuesta54 = $respuesta54;

        return $this;
    }

    /**
     * Get respuesta54
     *
     * @return integer
     */
    public function getRespuesta54()
    {
        return $this->respuesta54;
    }

    /**
     * Set respuesta83
     *
     * @param integer $respuesta83
     * @return Encuesta
     */
    public function setRespuesta83($respuesta83)
    {
        $this->respuesta83 = $respuesta83;

        return $this;
    }

    /**
     * Get respuesta83
     *
     * @return integer
     */
    public function getRespuesta83()
    {
        return $this->respuesta83;
    }

    /**
     * Set respuesta94
     *
     * @param integer $respuesta94
     * @return Encuesta
     */
    public function setRespuesta94($respuesta94)
    {
        $this->respuesta94 = $respuesta94;

        return $this;
    }

    /**
     * Get respuesta94
     *
     * @return integer
     */
    public function getRespuesta94()
    {
        return $this->respuesta94;
    }

    /**
     * Set respuesta95
     *
     * @param integer $respuesta95
     * @return Encuesta
     */
    public function setRespuesta95($respuesta95)
    {
        $this->respuesta95 = $respuesta95;

        return $this;
    }

    /**
     * Get respuesta95
     *
     * @return integer
     */
    public function getRespuesta95()
    {
        return $this->respuesta95;
    }

    /**
     * Set respuesta96
     *
     * @param integer $respuesta96
     * @return Encuesta
     */
    public function setRespuesta96($respuesta96)
    {
        $this->respuesta96 = $respuesta96;

        return $this;
    }

    /**
     * Get respuesta96
     *
     * @return integer
     */
    public function getRespuesta96()
    {
        return $this->respuesta96;
    }

    /**
     * Set respuesta97
     *
     * @param integer $respuesta97
     * @return Encuesta
     */
    public function setRespuesta97($respuesta97)
    {
        $this->respuesta97 = $respuesta97;

        return $this;
    }

    /**
     * Get respuesta97
     *
     * @return integer
     */
    public function getRespuesta97()
    {
        return $this->respuesta97;
    }

    /**
     * Set respuesta98
     *
     * @param integer $respuesta98
     * @return Encuesta
     */
    public function setRespuesta98($respuesta98)
    {
        $this->respuesta98 = $respuesta98;

        return $this;
    }

    /**
     * Get respuesta98
     *
     * @return integer
     */
    public function getRespuesta98()
    {
        return $this->respuesta98;
    }

    /**
     * Set respuesta99
     *
     * @param integer $respuesta99
     * @return Encuesta
     */
    public function setRespuesta99($respuesta99)
    {
        $this->respuesta99 = $respuesta99;

        return $this;
    }

    /**
     * Get respuesta99
     *
     * @return integer
     */
    public function getRespuesta99()
    {
        return $this->respuesta99;
    }

    /**
     * Set respuesta910
     *
     * @param integer $respuesta910
     * @return Encuesta
     */
    public function setRespuesta910($respuesta910)
    {
        $this->respuesta910 = $respuesta910;

        return $this;
    }

    /**
     * Get respuesta910
     *
     * @return integer
     */
    public function getRespuesta910()
    {
        return $this->respuesta910;
    }

    /**
     * Set respuesta104
     *
     * @param integer $respuesta104
     * @return Encuesta
     */
    public function setRespuesta104($respuesta104)
    {
        $this->respuesta104 = $respuesta104;

        return $this;
    }

    /**
     * Get respuesta104
     *
     * @return integer
     */
    public function getRespuesta104()
    {
        return $this->respuesta104;
    }

    /**
     * Set respuesta122
     *
     * @param integer $respuesta122
     * @return Encuesta
     */
    public function setRespuesta122($respuesta122)
    {
        $this->respuesta122 = $respuesta122;

        return $this;
    }

    /**
     * Get respuesta122
     *
     * @return integer
     */
    public function getRespuesta122()
    {
        return $this->respuesta122;
    }

    /**
     * Set respuesta123
     *
     * @param integer $respuesta123
     * @return Encuesta
     */
    public function setRespuesta123($respuesta123)
    {
        $this->respuesta123 = $respuesta123;

        return $this;
    }

    /**
     * Get respuesta123
     *
     * @return integer
     */
    public function getRespuesta123()
    {
        return $this->respuesta123;
    }

    /**
     * Set respuesta124
     *
     * @param integer $respuesta124
     * @return Encuesta
     */
    public function setRespuesta124($respuesta124)
    {
        $this->respuesta124 = $respuesta124;

        return $this;
    }

    /**
     * Get respuesta124
     *
     * @return integer
     */
    public function getRespuesta124()
    {
        return $this->respuesta124;
    }

    /**
     * Set respuesta125
     *
     * @param integer $respuesta125
     * @return Encuesta
     */
    public function setRespuesta125($respuesta125)
    {
        $this->respuesta125 = $respuesta125;

        return $this;
    }

    /**
     * Get respuesta125
     *
     * @return integer
     */
    public function getRespuesta125()
    {
        return $this->respuesta125;
    }

    /**
     * Set respuesta131
     *
     * @param integer $respuesta131
     * @return Encuesta
     */
    public function setRespuesta131($respuesta131)
    {
        $this->respuesta131 = $respuesta131;

        return $this;
    }

    /**
     * Get respuesta131
     *
     * @return integer
     */
    public function getRespuesta131()
    {
        return $this->respuesta131;
    }

    /**
     * Set respuesta132
     *
     * @param integer $respuesta132
     * @return Encuesta
     */
    public function setRespuesta132($respuesta132)
    {
        $this->respuesta132 = $respuesta132;

        return $this;
    }

    /**
     * Get respuesta132
     *
     * @return integer
     */
    public function getRespuesta132()
    {
        return $this->respuesta132;
    }

    /**
     * Set respuesta133
     *
     * @param integer $respuesta133
     * @return Encuesta
     */
    public function setRespuesta133($respuesta133)
    {
        $this->respuesta133 = $respuesta133;

        return $this;
    }

    /**
     * Get respuesta133
     *
     * @return integer
     */
    public function getRespuesta133()
    {
        return $this->respuesta133;
    }

    /**
     * Set respuesta134
     *
     * @param integer $respuesta134
     * @return Encuesta
     */
    public function setRespuesta134($respuesta134)
    {
        $this->respuesta134 = $respuesta134;

        return $this;
    }

    /**
     * Get respuesta134
     *
     * @return integer
     */
    public function getRespuesta134()
    {
        return $this->respuesta134;
    }

    /**
     * Set respuesta135
     *
     * @param integer $respuesta135
     * @return Encuesta
     */
    public function setRespuesta135($respuesta135)
    {
        $this->respuesta135 = $respuesta135;

        return $this;
    }

    /**
     * Get respuesta135
     *
     * @return integer
     */
    public function getRespuesta135()
    {
        return $this->respuesta135;
    }

    /**
     * Set respuesta136
     *
     * @param integer $respuesta136
     * @return Encuesta
     */
    public function setRespuesta136($respuesta136)
    {
        $this->respuesta136 = $respuesta136;

        return $this;
    }

    /**
     * Get respuesta136
     *
     * @return integer
     */
    public function getRespuesta136()
    {
        return $this->respuesta136;
    }

    /**
     * Set respuesta137
     *
     * @param integer $respuesta137
     * @return Encuesta
     */
    public function setRespuesta137($respuesta137)
    {
        $this->respuesta137 = $respuesta137;

        return $this;
    }

    /**
     * Get respuesta137
     *
     * @return integer
     */
    public function getRespuesta137()
    {
        return $this->respuesta137;
    }

    /**
     * Set respuesta138
     *
     * @param integer $respuesta138
     * @return Encuesta
     */
    public function setRespuesta138($respuesta138)
    {
        $this->respuesta138 = $respuesta138;

        return $this;
    }

    /**
     * Get respuesta138
     *
     * @return integer
     */
    public function getRespuesta138()
    {
        return $this->respuesta138;
    }

    /**
     * Set respuesta139
     *
     * @param integer $respuesta139
     * @return Encuesta
     */
    public function setRespuesta139($respuesta139)
    {
        $this->respuesta139 = $respuesta139;

        return $this;
    }

    /**
     * Get respuesta139
     *
     * @return integer
     */
    public function getRespuesta139()
    {
        return $this->respuesta139;
    }

    /**
     * Set respuesta1310
     *
     * @param integer $respuesta1310
     * @return Encuesta
     */
    public function setRespuesta1310($respuesta1310)
    {
        $this->respuesta1310 = $respuesta1310;

        return $this;
    }

    /**
     * Get respuesta1310
     *
     * @return integer
     */
    public function getRespuesta1310()
    {
        return $this->respuesta1310;
    }

    /**
     * Set respuesta911
     *
     * @param integer $respuesta911
     * @return Encuesta
     */
    public function setRespuesta911($respuesta911)
    {
        $this->respuesta911 = $respuesta911;

        return $this;
    }

    /**
     * Get respuesta911
     *
     * @return integer
     */
    public function getRespuesta911()
    {
        return $this->respuesta911;
    }

    /**
     * Set respuesta126
     *
     * @param integer $respuesta126
     * @return Encuesta
     */
    public function setRespuesta126($respuesta126)
    {
        $this->respuesta126 = $respuesta126;

        return $this;
    }

    /**
     * Get respuesta126
     *
     * @return integer
     */
    public function getRespuesta126()
    {
        return $this->respuesta126;
    }

    /**
     * Set respuesta26
     *
     * @param integer $respuesta26
     * @return Encuesta
     */
    public function setRespuesta26($respuesta26)
    {
        $this->respuesta26 = $respuesta26;

        return $this;
    }

    /**
     * Get respuesta26
     *
     * @return integer
     */
    public function getRespuesta26()
    {
        return $this->respuesta26;
    }

    /**
     * Set respuesta16
     *
     * @param integer $respuesta16
     * @return Encuesta
     */
    public function setRespuesta16($respuesta16)
    {
        $this->respuesta16 = $respuesta16;

        return $this;
    }

    /**
     * Get respuesta16
     *
     * @return integer
     */
    public function getRespuesta16()
    {
        return $this->respuesta16;
    }

    /**
     * Set respuesta39
     *
     * @param integer $respuesta39
     * @return Encuesta
     */
    public function setRespuesta39($respuesta39)
    {
        $this->respuesta39 = $respuesta39;

        return $this;
    }

    /**
     * Get respuesta39
     *
     * @return integer
     */
    public function getRespuesta39()
    {
        return $this->respuesta39;
    }

    /**
     * Set respuesta310
     *
     * @param integer $respuesta310
     * @return Encuesta
     */
    public function setRespuesta310($respuesta310)
    {
        $this->respuesta310 = $respuesta310;

        return $this;
    }

    /**
     * Get respuesta310
     *
     * @return integer
     */
    public function getRespuesta310()
    {
        return $this->respuesta310;
    }

    /**
     * Set respuesta311
     *
     * @param integer $respuesta311
     * @return Encuesta
     */
    public function setRespuesta311($respuesta311)
    {
        $this->respuesta311 = $respuesta311;

        return $this;
    }

    /**
     * Get respuesta311
     *
     * @return integer
     */
    public function getRespuesta311()
    {
        return $this->respuesta311;
    }

    /**
     * Set respuesta312
     *
     * @param integer $respuesta312
     * @return Encuesta
     */
    public function setRespuesta312($respuesta312)
    {
        $this->respuesta312 = $respuesta312;

        return $this;
    }

    /**
     * Get respuesta312
     *
     * @return integer
     */
    public function getRespuesta312()
    {
        return $this->respuesta312;
    }

    /**
     * Set respuesta313
     *
     * @param integer $respuesta313
     * @return Encuesta
     */
    public function setRespuesta313($respuesta313)
    {
        $this->respuesta313 = $respuesta313;

        return $this;
    }

    /**
     * Get respuesta313
     *
     * @return integer
     */
    public function getRespuesta313()
    {
        return $this->respuesta313;
    }

    /**
     * Set respuesta314
     *
     * @param integer $respuesta314
     * @return Encuesta
     */
    public function setRespuesta314($respuesta314)
    {
        $this->respuesta314 = $respuesta314;

        return $this;
    }

    /**
     * Get respuesta314
     *
     * @return integer
     */
    public function getRespuesta314()
    {
        return $this->respuesta314;
    }

    /**
     * Set respuesta73
     *
     * @param integer $respuesta73
     * @return Encuesta
     */
    public function setRespuesta73($respuesta73)
    {
        $this->respuesta73 = $respuesta73;

        return $this;
    }

    /**
     * Get respuesta73
     *
     * @return integer
     */
    public function getRespuesta73()
    {
        return $this->respuesta73;
    }

    /**
     * Set respuesta74
     *
     * @param integer $respuesta74
     * @return Encuesta
     */
    public function setRespuesta74($respuesta74)
    {
        $this->respuesta74 = $respuesta74;

        return $this;
    }

    /**
     * Get respuesta74
     *
     * @return integer
     */
    public function getRespuesta74()
    {
        return $this->respuesta74;
    }

    /**
     * Set respuesta416
     *
     * @param integer $respuesta416
     * @return Encuesta
     */
    public function setRespuesta416($respuesta416)
    {
        $this->respuesta416 = $respuesta416;

        return $this;
    }

    /**
     * Get respuesta416
     *
     * @return integer
     */
    public function getRespuesta416()
    {
        return $this->respuesta416;
    }

    /**
     * Set indice
     *
     * @param integer $indice
     * @return Encuesta
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get indice
     *
     * @return integer
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set createdAt
     *
     * @param integer $createdAt
     * @return Encuesta
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return integer
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set statusCierre
     *
     * @param string $statusCierre
     * @return Encuesta
     */
    public function setStatusCierre($statusCierre)
    {
        $this->statusCierre = $statusCierre;

        return $this;
    }

    /**
     * Get statusCierre
     *
     * @return string
     */
    public function getStatusCierre()
    {
        return $this->statusCierre;
    }

    /**
     * Set cierreLog
     *
     * @param string $cierreLog
     * @return Encuesta
     */
    public function setCierreLog($cierreLog)
    {
        $this->cierreLog = $cierreLog;

        return $this;
    }

    /**
     * Get cierreLog
     *
     * @return string
     */
    public function getCierreLog()
    {
        return $this->cierreLog;
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

    public function setUnidadDeNegocio($unidadeDeNegocio)
    {
        $this->unidadeDeNegocio = $unidadDeNegocio;

        return $this;
    }

    public function getUnidadDeNegocio()
    {
        return $this->unidadDeNegocio;
    }

    /**
     * Set empleados
     *
     * @param array $empleados
     * @return Encuesta
     */
    public function setEmpleados($empleados)
    {
        $this->empleados = $empleados;

        return $this;
    }

    /**
     * Get empleados
     *
     * @return array
     */
    public function getEmpleados()
    {
        return $this->empleados;
    }

    /**
     * Set tipoDeHallazgo
     *
     * @param string $tipoDeHallazgo
     * @return Encuesta
     */
    public function setTipoDeHallazgo($tipoDeHallazgo)
    {
        $this->tipoDeHallazgo = $tipoDeHallazgo;

        return $this;
    }

    /**
     * Get tipoDeHallazgo
     *
     * @return string
     */
    public function getTipoDeHallazgo()
    {
        return $this->tipoDeHallazgo;
    }

    /**
     * Set charlaGrabada
     *
     * @param string $charlaGrabada
     * @return Encuesta
     */
    public function setCharlaGrabada($charlaGrabada)
    {
        $this->charlaGrabada = $charlaGrabada;

        return $this;
    }

    /**
     * Get charlaGrabada
     *
     * @return string
     */
    public function getCharlaGrabada()
    {
        return $this->charlaGrabada;
    }

    /**
     * Set respuesta417
     *
     * @param integer $respuesta417
     * @return Encuesta
     */
    public function setRespuesta417($respuesta417)
    {
        $this->respuesta417 = $respuesta417;

        return $this;
    }

    /**
     * Get respuesta417
     *
     * @return integer
     */
    public function getRespuesta417()
    {
        return $this->respuesta417;
    }

    /**
     * Set respuesta418
     *
     * @param integer $respuesta418
     * @return Encuesta
     */
    public function setRespuesta418($respuesta418)
    {
        $this->respuesta418 = $respuesta418;

        return $this;
    }

    /**
     * Get respuesta418
     *
     * @return integer
     */
    public function getRespuesta418()
    {
        return $this->respuesta418;
    }

    /**
     * Set respuesta66
     *
     * @param integer $respuesta66
     * @return Encuesta
     */
    public function setRespuesta66($respuesta66)
    {
        $this->respuesta66 = $respuesta66;

        return $this;
    }

    /**
     * Get respuesta66
     *
     * @return integer
     */
    public function getRespuesta66()
    {
        return $this->respuesta66;
    }

    /**
     * Set respuesta84
     *
     * @param integer $respuesta84
     * @return Encuesta
     */
    public function setRespuesta84($respuesta84)
    {
        $this->respuesta84 = $respuesta84;

        return $this;
    }

    /**
     * Get respuesta84
     *
     * @return integer
     */
    public function getRespuesta84()
    {
        return $this->respuesta84;
    }

    /**
     * Set respuesta85
     *
     * @param integer $respuesta85
     * @return Encuesta
     */
    public function setRespuesta85($respuesta85)
    {
        $this->respuesta85 = $respuesta85;

        return $this;
    }

    /**
     * Get respuesta85
     *
     * @return integer
     */
    public function getRespuesta85()
    {
        return $this->respuesta85;
    }

    /**
     * Set respuesta105
     *
     * @param integer $respuesta105
     * @return Encuesta
     */
    public function setRespuesta105($respuesta105)
    {
        $this->respuesta105 = $respuesta105;

        return $this;
    }

    /**
     * Get respuesta105
     *
     * @return integer
     */
    public function getRespuesta105()
    {
        return $this->respuesta105;
    }

    /**
     * Set respuesta106
     *
     * @param integer $respuesta106
     * @return Encuesta
     */
    public function setRespuesta106($respuesta106)
    {
        $this->respuesta106 = $respuesta106;

        return $this;
    }

    /**
     * Get respuesta106
     *
     * @return integer
     */
    public function getRespuesta106()
    {
        return $this->respuesta106;
    }

    /**
     * Set respuesta107
     *
     * @param integer $respuesta107
     * @return Encuesta
     */
    public function setRespuesta107($respuesta107)
    {
        $this->respuesta107 = $respuesta107;

        return $this;
    }

    /**
     * Get respuesta107
     *
     * @return integer
     */
    public function getRespuesta107()
    {
        return $this->respuesta107;
    }

    /**
     * Set respuesta108
     *
     * @param integer $respuesta108
     * @return Encuesta
     */
    public function setRespuesta108($respuesta108)
    {
        $this->respuesta108 = $respuesta108;

        return $this;
    }

    /**
     * Get respuesta108
     *
     * @return integer
     */
    public function getRespuesta108()
    {
        return $this->respuesta108;
    }

    /**
     * Set respuesta109
     *
     * @param integer $respuesta109
     * @return Encuesta
     */
    public function setRespuesta109($respuesta109)
    {
        $this->respuesta109 = $respuesta109;

        return $this;
    }

    /**
     * Get respuesta109
     *
     * @return integer
     */
    public function getRespuesta109()
    {
        return $this->respuesta109;
    }

    /**
     * Set respuesta1010
     *
     * @param integer $respuesta1010
     * @return Encuesta
     */
    public function setRespuesta1010($respuesta1010)
    {
        $this->respuesta1010 = $respuesta1010;

        return $this;
    }

    /**
     * Get respuesta1010
     *
     * @return integer
     */
    public function getRespuesta1010()
    {
        return $this->respuesta1010;
    }

    /**
     * Set respuesta141
     *
     * @param integer $respuesta141
     * @return Encuesta
     */
    public function setRespuesta141($respuesta141)
    {
        $this->respuesta141 = $respuesta141;

        return $this;
    }

    /**
     * Get respuesta141
     *
     * @return integer
     */
    public function getRespuesta141()
    {
        return $this->respuesta141;
    }

    /**
     * Set respuesta142
     *
     * @param integer $respuesta142
     * @return Encuesta
     */
    public function setRespuesta142($respuesta142)
    {
        $this->respuesta142 = $respuesta142;

        return $this;
    }

    /**
     * Get respuesta142
     *
     * @return integer
     */
    public function getRespuesta142()
    {
        return $this->respuesta142;
    }

    /**
     * Set respuesta143
     *
     * @param integer $respuesta143
     * @return Encuesta
     */
    public function setRespuesta143($respuesta143)
    {
        $this->respuesta143 = $respuesta143;

        return $this;
    }

    /**
     * Get respuesta143
     *
     * @return integer
     */
    public function getRespuesta143()
    {
        return $this->respuesta143;
    }

    /**
     * Set respuesta144
     *
     * @param integer $respuesta144
     * @return Encuesta
     */
    public function setRespuesta144($respuesta144)
    {
        $this->respuesta144 = $respuesta144;

        return $this;
    }

    /**
     * Get respuesta144
     *
     * @return integer
     */
    public function getRespuesta144()
    {
        return $this->respuesta144;
    }

    /**
     * Set respuesta145
     *
     * @param integer $respuesta145
     * @return Encuesta
     */
    public function setRespuesta145($respuesta145)
    {
        $this->respuesta145 = $respuesta145;

        return $this;
    }

    /**
     * Get respuesta145
     *
     * @return integer
     */
    public function getRespuesta145()
    {
        return $this->respuesta145;
    }

    /**
     * Set respuesta146
     *
     * @param integer $respuesta146
     * @return Encuesta
     */
    public function setRespuesta146($respuesta146)
    {
        $this->respuesta146 = $respuesta146;

        return $this;
    }

    /**
     * Get respuesta146
     *
     * @return integer
     */
    public function getRespuesta146()
    {
        return $this->respuesta146;
    }

    /**
     * Set respuesta147
     *
     * @param integer $respuesta147
     * @return Encuesta
     */
    public function setRespuesta147($respuesta147)
    {
        $this->respuesta147 = $respuesta147;

        return $this;
    }

    /**
     * Get respuesta147
     *
     * @return integer
     */
    public function getRespuesta147()
    {
        return $this->respuesta147;
    }

    /**
     * Set respuesta151
     *
     * @param integer $respuesta151
     * @return Encuesta
     */
    public function setRespuesta151($respuesta151)
    {
        $this->respuesta151 = $respuesta151;

        return $this;
    }

    /**
     * Get respuesta151
     *
     * @return integer
     */
    public function getRespuesta151()
    {
        return $this->respuesta151;
    }

    /**
     * Set respuesta152
     *
     * @param integer $respuesta152
     * @return Encuesta
     */
    public function setRespuesta152($respuesta152)
    {
        $this->respuesta152 = $respuesta152;

        return $this;
    }

    /**
     * Get respuesta152
     *
     * @return integer
     */
    public function getRespuesta152()
    {
        return $this->respuesta152;
    }

    /**
     * Set respuesta153
     *
     * @param integer $respuesta153
     * @return Encuesta
     */
    public function setRespuesta153($respuesta153)
    {
        $this->respuesta153 = $respuesta153;

        return $this;
    }

    /**
     * Get respuesta153
     *
     * @return integer
     */
    public function getRespuesta153()
    {
        return $this->respuesta153;
    }

    /**
     * Set respuesta154
     *
     * @param integer $respuesta154
     * @return Encuesta
     */
    public function setRespuesta154($respuesta154)
    {
        $this->respuesta154 = $respuesta154;

        return $this;
    }

    /**
     * Get respuesta154
     *
     * @return integer
     */
    public function getRespuesta154()
    {
        return $this->respuesta154;
    }

    /**
     * Set respuesta155
     *
     * @param integer $respuesta155
     * @return Encuesta
     */
    public function setRespuesta155($respuesta155)
    {
        $this->respuesta155 = $respuesta155;

        return $this;
    }

    /**
     * Get respuesta155
     *
     * @return integer
     */
    public function getRespuesta155()
    {
        return $this->respuesta155;
    }

    /**
     * Set respuesta161
     *
     * @param integer $respuesta161
     * @return Encuesta
     */
    public function setRespuesta161($respuesta161)
    {
        $this->respuesta161 = $respuesta161;

        return $this;
    }

    /**
     * Get respuesta161
     *
     * @return integer
     */
    public function getRespuesta161()
    {
        return $this->respuesta161;
    }

    /**
     * Set respuesta162
     *
     * @param integer $respuesta162
     * @return Encuesta
     */
    public function setRespuesta162($respuesta162)
    {
        $this->respuesta162 = $respuesta162;

        return $this;
    }

    /**
     * Get respuesta162
     *
     * @return integer
     */
    public function getRespuesta162()
    {
        return $this->respuesta162;
    }

    /**
     * Set respuesta163
     *
     * @param integer $respuesta163
     * @return Encuesta
     */
    public function setRespuesta163($respuesta163)
    {
        $this->respuesta163 = $respuesta163;

        return $this;
    }

    /**
     * Get respuesta163
     *
     * @return integer
     */
    public function getRespuesta163()
    {
        return $this->respuesta163;
    }

    /**
     * Set respuesta164
     *
     * @param integer $respuesta164
     * @return Encuesta
     */
    public function setRespuesta164($respuesta164)
    {
        $this->respuesta164 = $respuesta164;

        return $this;
    }

    /**
     * Get respuesta164
     *
     * @return integer
     */
    public function getRespuesta164()
    {
        return $this->respuesta164;
    }

    /**
     * Set respuesta165
     *
     * @param integer $respuesta165
     * @return Encuesta
     */
    public function setRespuesta165($respuesta165)
    {
        $this->respuesta165 = $respuesta165;

        return $this;
    }

    /**
     * Get respuesta165
     *
     * @return integer
     */
    public function getRespuesta165()
    {
        return $this->respuesta165;
    }

    /**
     * Set respuesta171
     *
     * @param integer $respuesta171
     * @return Encuesta
     */
    public function setRespuesta171($respuesta171)
    {
        $this->respuesta171 = $respuesta171;

        return $this;
    }

    /**
     * Get respuesta171
     *
     * @return integer
     */
    public function getRespuesta171()
    {
        return $this->respuesta171;
    }

    /**
     * Set respuesta172
     *
     * @param integer $respuesta172
     * @return Encuesta
     */
    public function setRespuesta172($respuesta172)
    {
        $this->respuesta172 = $respuesta172;

        return $this;
    }

    /**
     * Get respuesta172
     *
     * @return integer
     */
    public function getRespuesta172()
    {
        return $this->respuesta172;
    }

    /**
     * Set respuesta173
     *
     * @param integer $respuesta173
     * @return Encuesta
     */
    public function setRespuesta173($respuesta173)
    {
        $this->respuesta173 = $respuesta173;

        return $this;
    }

    /**
     * Get respuesta173
     *
     * @return integer
     */
    public function getRespuesta173()
    {
        return $this->respuesta173;
    }

    /**
     * Set respuesta114
     *
     * @param integer $respuesta114
     * @return Encuesta
     */
    public function setRespuesta114($respuesta114)
    {
        $this->respuesta114 = $respuesta114;

        return $this;
    }

    /**
     * Get respuesta114
     *
     * @return integer
     */
    public function getRespuesta114()
    {
        return $this->respuesta114;
    }

    /**
     * Set respuesta115
     *
     * @param integer $respuesta115
     * @return Encuesta
     */
    public function setRespuesta115($respuesta115)
    {
        $this->respuesta115 = $respuesta115;

        return $this;
    }

    /**
     * Get respuesta115
     *
     * @return integer
     */
    public function getRespuesta115()
    {
        return $this->respuesta115;
    }

    /**
     * Set respuesta116
     *
     * @param integer $respuesta116
     * @return Encuesta
     */
    public function setRespuesta116($respuesta116)
    {
        $this->respuesta116 = $respuesta116;

        return $this;
    }

    /**
     * Get respuesta116
     *
     * @return integer
     */
    public function getRespuesta116()
    {
        return $this->respuesta116;
    }

    /**
     * Set respuesta117
     *
     * @param integer $respuesta117
     * @return Encuesta
     */
    public function setRespuesta117($respuesta117)
    {
        $this->respuesta117 = $respuesta117;

        return $this;
    }

    /**
     * Get respuesta117
     *
     * @return integer
     */
    public function getRespuesta117()
    {
        return $this->respuesta117;
    }

    /**
     * Set respuesta118
     *
     * @param integer $respuesta118
     * @return Encuesta
     */
    public function setRespuesta118($respuesta118)
    {
        $this->respuesta118 = $respuesta118;

        return $this;
    }

    /**
     * Get respuesta118
     *
     * @return integer
     */
    public function getRespuesta118()
    {
        return $this->respuesta118;
    }

    /**
     * Set respuesta119
     *
     * @param integer $respuesta119
     * @return Encuesta
     */
    public function setRespuesta119($respuesta119)
    {
        $this->respuesta119 = $respuesta119;

        return $this;
    }

    /**
     * Get respuesta119
     *
     * @return integer
     */
    public function getRespuesta119()
    {
        return $this->respuesta119;
    }

    /**
     * Set respuesta1110
     *
     * @param integer $respuesta1110
     * @return Encuesta
     */
    public function setRespuesta1110($respuesta1110)
    {
        $this->respuesta1110 = $respuesta1110;

        return $this;
    }

    /**
     * Get respuesta1110
     *
     * @return integer
     */
    public function getRespuesta1110()
    {
        return $this->respuesta1110;
    }

    /**
     * Set charlaCorrecta
     *
     * @param string $charlaCorrecta
     * @return Encuesta
     */
    public function setCharlaCorrecta($charlaCorrecta)
    {
        $this->charlaCorrecta = $charlaCorrecta;

        return $this;
    }

    /**
     * Get charlaCorrecta
     *
     * @return string
     */
    public function getCharlaCorrecta()
    {
        return $this->charlaCorrecta;
    }
}
