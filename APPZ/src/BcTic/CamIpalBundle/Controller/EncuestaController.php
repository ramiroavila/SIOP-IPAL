<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Encuesta;
use BcTic\CamIpalBundle\Entity\Empresa as Empresa;
use BcTic\CamIpalBundle\Entity\EncuestaElectrica as EncuestaElectrica;
use BcTic\CamIpalBundle\Entity\EncuestaChilectra as EncuestaChilectra;
use BcTic\CamIpalBundle\Entity\EncuestaLogistica;
use BcTic\CamIpalBundle\Entity\EncuestaObrasCiviles;
use BcTic\CamIpalBundle\Entity\EncuestaTelecomunicaciones;
use BcTic\CamIpalBundle\Entity\EncuestaLlvv;
use BcTic\CamIpalBundle\Entity\EncuestaColombiaGeneral;
use BcTic\CamIpalBundle\Entity\EncuestaBrazilGeneral;
use BcTic\CamIpalBundle\Entity\EncuestaBrazilInterno;
use BcTic\CamIpalBundle\Form\EncuestaType;
use BcTic\CamIpalBundle\Form\EncuestaElectricaType;
use BcTic\CamIpalBundle\Form\EncuestaChilectraType;
use BcTic\CamIpalBundle\Form\EncuestaLogisticaType;
use BcTic\CamIpalBundle\Form\EncuestaObrasCivilesType;
use BcTic\CamIpalBundle\Form\EncuestaTelecomunicacionesType;
use BcTic\CamIpalBundle\Form\EncuestaLlvvType;
use BcTic\CamIpalBundle\Form\EncuestaColombiaGeneralType;
use BcTic\CamIpalBundle\Form\EncuestaBrazilGeneralType;
use BcTic\CamIpalBundle\Form\EncuestaBrazilInternoType;


use BcTic\CamIpalBundle\Form\EncuestaElectricaEditType;
use BcTic\CamIpalBundle\Form\EncuestaChilectraEditType;
use BcTic\CamIpalBundle\Form\EncuestaLogisticaEditType;
use BcTic\CamIpalBundle\Form\EncuestaObrasCivilesEditType;
use BcTic\CamIpalBundle\Form\EncuestaTelecomunicacionesEditType;
use BcTic\CamIpalBundle\Form\EncuestallvvEditType;
use BcTic\CamIpalBundle\Form\EncuestaColombiaGeneralEditType;
use BcTic\CamIpalBundle\Form\EncuestaBrazilGeneralEditType;
use BcTic\CamIpalBundle\Form\EncuestaBrazilInternoEditType;

use BcTic\CamIpalBundle\Form\EncuestaElectricaEditAdminType;
use BcTic\CamIpalBundle\Form\EncuestaChilectraEditAdminType;
use BcTic\CamIpalBundle\Form\EncuestaLogisticaEditAdminType;
use BcTic\CamIpalBundle\Form\EncuestaObrasCivilesEditAdminType;
use BcTic\CamIpalBundle\Form\EncuestaTelecomunicacionesEditAdminType;
use BcTic\CamIpalBundle\Form\EncuestallvvEditAdminType;
use BcTic\CamIpalBundle\Form\EncuestaColombiaGeneralEditAdminType;
use BcTic\CamIpalBundle\Form\EncuestaBrazilGeneralEditAdminType;
use BcTic\CamIpalBundle\Form\EncuestaBrazilInternoEditAdminType;

use BcTic\CamIpalBundle\Form\EncuestaFilterType;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Encuesta controller.
 *
 * @Route("/encuestas")
 */
class EncuestaController extends Controller
{
    /**
     *
     * @Route("/encuesta_reporte_taseg_csv/data.csv", name="encuesta_reporte_taseg_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestaTasegCsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      //Busco las encuestas que aplican:
      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT u.nombre as unidad_de_negocio_nombre, s.nombre as subgerencia_nombre, (SELECT SUM(m2.valor) FROM Meta m2 WHERE m2.id = m.id) as meta_inspecciones, COUNT(DISTINCT(e.id)) as encuesta_cantidad, SUM(e.ipal) as encuesta_ipal, (SELECT COUNT(cierre) FROM EncuestaProxy e2 WHERE e2.cierre = "ABIERTA" AND e2.id = e.id) as encuesta_abierta FROM UnidadDeNegocio u INNER JOIN Contrato c ON c.unidad_de_negocio_id = u.id INNER JOIN SubGerencia s ON s.id = c.subgerencia_id INNER JOIN Meta m ON m.unidad_de_negocio_id = u.id AND m.subgerencia_id = s.id INNER JOIN EncuestaProxy e ON YEAR(e.fecha) = m.anno AND MONTH(e.fecha) = m.mes WHERE e.id IN ('.implode(",",$ids).')  GROUP BY u.id, s.id, m.id';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        $data[] = $entity;
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaTasegCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'TOTAL-TASEG-MES-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
     *
     * @Route("/encuesta_reporte_total_no_50_20_csv/data.csv", name="encuesta_reporte_total_no_50_20_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestarTotalNo5020CsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      //Busco las encuestas que aplican:
      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      //Armo un array de datos
      $data = array(
                5 => array('hits' => 0),
                10 => array('hits' => 0),
                20 => array('hits' => 0),
                30 => array('hits' => 0),
                40 => array('hits' => 0),
                50 => array('hits' => 0),

              );

      $fetch = $stmt->fetchAll();

      foreach($fetch as $entity) {

        $data[5]['hits'] = $data[5]['hits'] + $entity['incumplimientos_5'];
        $data[10]['hits'] = $data[10]['hits'] + $entity['incumplimientos_10'];
        $data[20]['hits'] = $data[20]['hits'] + $entity['incumplimientos_20'];
        $data[30]['hits'] = $data[30]['hits'] + $entity['incumplimientos_30'];
        $data[40]['hits'] = $data[40]['hits'] + $entity['incumplimientos_40'];
        $data[50]['hits'] = $data[50]['hits'] + $entity['incumplimientos_50'];

      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaTotalValorCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file_no_5020 = 'NO-50-20-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file_no_5020.".csv", $content);

      $data = array();

      foreach($fetch as $entity) {
         if (strlen($entity['incumplimientos_json']) > 3) {
           $data[] = json_decode($entity['incumplimientos_json']);
         }
      }

      $dataKey = array();
      foreach($data as $index => $incumplimiento) {
        foreach ($incumplimiento as $itemKey) {
          (isset($dataKey[$itemKey])) ? $dataKey[$itemKey]++ : $dataKey[$itemKey] =  1;
        }
      }

      ksort($dataKey);

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaTotalIncumplimientoValorCsv.html.twig',
        array('data' => $dataKey)
      );


      //Guardo el contenido y devuelvo el ID para descargar el link
      $file_total = 'TOTAL-POR-VALOR-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file_total.".csv", $content);

      return new JsonResponse(array('file_total' => $file_total, 'file_no_5020' => $file_no_5020));
    }

    /**
     *
     * @Route("/encuesta_reporte_total_prevencionistas_csv/data.csv", name="encuesta_reporte_total_prevencionistas_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestaTotalPrevencionistasInspectoresCsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      //Busco las encuestas que aplican:
      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        $data[] = array(
                          'id' => $entity['id'],
                          'fecha' => $entity['fecha'],
                          'gerencia' => $entity['gerencia'],
                          'subgerencia' => $entity['subgerencia'],
                          'area' => $entity['area'],
                          'inspector' => $entity['inspector'],
                          'prevencionista' => $entity['prevencionista'],
                          'contratista' => $entity['contratista'],
                          'ipal' =>  $entity['ipal'],
                          'tiene_incumplimientos' => $entity['tiene_incumplimientos'],
                          'cantidad_incumplimientos' => $entity['cantidad_incumplimientos'],
                          'cierre' => $entity['cierre'],
                          'respuestas_0' => $entity['respuestas_0'],
                          'respuestas_1' => $entity['respuestas_1'],
                          'respuestas_2' => $entity['respuestas_2'],
                        );
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaTotalPrevencionistasInspectoresCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'TOTAL-PREVENCIONISTA-INSPECTOR-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
     *
     * @Route("/encuesta_reporte_ipal_por_prevencionista_csv/data.csv", name="encuesta_reporte_ipal_por_prevencionista_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestaIpalPorPrevencionistaCsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
          $mes = date_format(date_create($entity['fecha']),'Y-m-01');
          if (isset($data[$mes])) {

          } else {
            $data[$mes] = array();
          }

          $prevencionista = strtoupper($entity['prevencionista']);

          if (array_key_exists($prevencionista,$prevencionistas)) {

            if (isset($data[$mes][$prevencionista])) {

            } else {
              $data[$mes][$prevencionista] = array();
            }

            $data[$mes][$prevencionista][] = array(
                          'ipal' =>  $entity['ipal'],
                          'tiene_incumplimientos' => $entity['tiene_incumplimientos'],
                          'cantidad_incumplimientos' => $entity['cantidad_incumplimientos'],
                          'respuestas_0' => $entity['respuestas_0'],
                          'respuestas_1' => $entity['respuestas_1'],
                          'respuestas_2' => $entity['respuestas_2'],
                        );

          }
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaIpalPorPrevencionistaCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'IPAL-POR-PREVENCIONISTA-INSPECTOR-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
     *
     * @Route("/encuesta_reporte_no_conformidades_csv/data.csv", name="encuesta_reporte_no_conformidades_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestaNoConformidadesCsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      //Busco las encuestas que aplican:
      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        if ($entity['cantidad_incumplimientos'] > 0) {
          $mes = date_format(date_create($entity['fecha']),'Y-m-01');
          if (isset($data[$mes])) {

          } else {
            $data[$mes] = array();
          }

          $data[$mes][] = array(
                          'ipal' =>  $entity['ipal'],
                          'tiene_incumplimientos' => $entity['tiene_incumplimientos'],
                          'cantidad_incumplimientos' => $entity['cantidad_incumplimientos'],
                          'respuestas_0' => $entity['respuestas_0'],
                          'respuestas_1' => $entity['respuestas_1'],
                          'respuestas_2' => $entity['respuestas_2'],
                        );
        }
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaNoConformidadesCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'NO-CONFORMIDADES-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
     *
     * @Route("/encuesta_reporte_todos_los_datos_csv/data.csv", name="encuesta_reporte_todos_los_datos_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestaTodosLosDatosCsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        $data[] = array(
                          'fecha' => $entity['fecha'],
                          'gerencia' => $entity['gerencia'],
                          'subgerencia' => $entity['subgerencia'],
                          'area' => $entity['area'],
                          'contratista' => $entity['contratista'],
                          'ipal' =>  $entity['ipal'],
                          'tiene_incumplimientos' => $entity['tiene_incumplimientos'],
                          'cantidad_incumplimientos' => $entity['cantidad_incumplimientos'],
                          'respuestas_0' => $entity['respuestas_0'],
                          'respuestas_1' => $entity['respuestas_1'],
                          'respuestas_2' => $entity['respuestas_2'],
                        );
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaTodosLosDatosCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'TODOS-LOS-DATOS-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
     *
     * @Route("/encuesta_reporte_1_csv/data.csv", name="encuesta_reporte_1_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuesta1CsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        $data[] = array(
                          'id' => $entity['id'],
                          'fecha' => $entity['fecha'],
                          'inspector' => $entity['inspector'],
                          'prevencionista' => $entity['prevencionista'],
                          'gerencia' => $entity['gerencia'],
                          'subgerencia' => $entity['subgerencia'],
                          'contrato' => $entity['contrato'],
                          'area' => $entity['area'],
                          'contratista' => $entity['contratista'],
                          'ipal' =>  $entity['ipal'],
                          'tiene_incumplimientos' => $entity['tiene_incumplimientos'],
                          'cantidad_incumplimientos' => $entity['cantidad_incumplimientos'],
                          'respuestas_0' => $entity['respuestas_0'],
                          'respuestas_1' => $entity['respuestas_1'],
                          'respuestas_2' => $entity['respuestas_2'],
                          'auto_inspeccion' => $entity['auto_inspeccion'],
                          'charla_operativa' => $entity['charla_operativa'],
                          'supervisor' => $entity['supervisor'],
                          'tipo' => $entity['tipo'],
                          'incumplimientos_5' => $entity['incumplimientos_5'],
                          'incumplimientos_10' => $entity['incumplimientos_10'],
                          'incumplimientos_20' => $entity['incumplimientos_20'],
                          'incumplimientos_50' => $entity['incumplimientos_50'],
                          'incumplimientos_50_json' => json_decode($entity['incumplimientos_50_json'], true),
                          'cierre' => $entity['cierre'],
                          'cierre_texto' => $entity['cierre_texto'],
                        );


      }


      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuesta1Csv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'REPORTE-1-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
     *
     * @Route("/encuesta_reporte_2_csv/data.csv", name="encuesta_reporte_2_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuesta2CsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT * FROM Encuesta e WHERE e.id IN ('.implode(",",$ids).') AND (respuesta_1_3 = 1 OR  respuesta_1_4 = 1 OR  respuesta_1_5 = 1 OR  respuesta_2_1 = 1 OR  respuesta_2_2 = 1 OR  respuesta_2_3 = 1 OR  respuesta_3_1 = 1 OR  respuesta_3_2 = 1 OR  respuesta_3_3 = 1 OR  respuesta_3_4 = 1 OR  respuesta_3_5 = 1 OR  respuesta_4_1 = 1 OR  respuesta_4_2 = 1 OR  respuesta_4_3 = 1 OR  respuesta_4_4 = 1 OR  respuesta_4_5 = 1 OR  respuesta_4_6 = 1 OR  respuesta_4_7 = 1 OR  respuesta_4_8 = 1 OR  respuesta_4_9 = 1 OR  respuesta_5_1 = 1 OR  respuesta_5_2 = 1 OR  respuesta_5_3 = 1 OR  respuesta_6_1 = 1 OR  respuesta_6_2 = 1 OR  respuesta_6_3 = 1 OR  respuesta_6_4 = 1 OR  respuesta_7_1 = 1 OR  respuesta_7_2 = 1 OR  respuesta_8_1 = 1 OR  respuesta_8_2 = 1 OR  respuesta_9_1 = 1 OR  respuesta_9_2 = 1 OR  respuesta_9_3 = 1 OR  respuesta_10_1 = 1 OR  respuesta_10_2 = 1 OR  respuesta_10_3 = 1 OR  respuesta_11_1 = 1 OR  respuesta_6_5 = 1 OR respuesta_2_4 = 1 OR  respuesta_2_5 = 1 OR  respuesta_11_2 = 1 OR  respuesta_12_1 = 1 OR  respuesta_1_6 = 1 OR  respuesta_2_6 = 1 OR  respuesta_3_6 = 1 OR  respuesta_3_7 = 1 OR  respuesta_3_8 = 1 OR  respuesta_3_9 = 1 OR  respuesta_3_10 = 1 OR  respuesta_3_11 = 1 OR  respuesta_3_12 = 1 OR  respuesta_3_13 = 1 OR  respuesta_3_14 = 1 OR  respuesta_5_4 = 1 OR  respuesta_7_3 = 1 OR  respuesta_7_4 = 1 OR  respuesta_8_3 = 1 OR  respuesta_9_4 = 1 OR  respuesta_9_5 = 1 OR  respuesta_9_6 = 1 OR  respuesta_9_7 = 1 OR  respuesta_9_8 = 1 OR  respuesta_9_9 = 1 OR  respuesta_9_10 = 1 OR  respuesta_9_11 = 1 OR  respuesta_10_4 = 1 OR  respuesta_12_2 = 1 OR  respuesta_12_3 = 1 OR  respuesta_12_4 = 1 OR  respuesta_12_5 = 1 OR  respuesta_12_6 = 1 OR  respuesta_13_1 = 1 OR  respuesta_13_2 = 1 OR  respuesta_13_3 = 1 OR  respuesta_13_4 = 1 OR  respuesta_13_5 = 1 OR  respuesta_13_6 = 1 OR  respuesta_13_7 = 1 OR  respuesta_13_8 = 1 OR  respuesta_13_9 = 1 OR  respuesta_13_10 = 1 OR  respuesta_11_3 = 1 OR  respuesta_4_10 = 1 OR  respuesta_4_11 = 1 OR  respuesta_4_12 = 1 OR  respuesta_4_13 = 1 OR  respuesta_4_14 = 1 OR  respuesta_4_15 = 1 OR  respuesta_4_16 = 1) ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        $item = array('id' => $entity['id'],'tipo' => $entity['tipo']);
        $respuestas = array();
        foreach ($entity as $key => $value) {
          if (strpos($key,'respuesta_') === FALSE) {

          } else {
            if ($value == "1") {
              $str = preg_replace('/(respuesta_)(\d{1,2})_/','respuesta$2.',$key.'_'.strtolower($entity['tipo']));
              $str = str_replace(array('electrico'),array('electrica'), $str);
              $respuestas[] = $str;
            }
          }
        }
        $item['respuestas'] = $respuestas;
        $data[] = $item;
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuesta2Csv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'REPORTE-2-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }


    /**
     *
     * @Route("/encuesta_reporte_incumplimientos_50_csv/data.csv", name="encuesta_reporte_incumplimientos_50_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestaIncumplimientos50CsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      $em = $this->getDoctrine()->getManager();

      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') AND incumplimientos_50 > 0 ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        $incumplimientos = array(0 => '', 1 => '',2 => '',3 => '',4 => '');
        $i = 0;
        foreach(json_decode($entity['incumplimientos_50_json']) as $key) {
          $incumplimientos[$i] = $key;
          $i++;
        }
        $data[] = array(
                          'fecha' => $entity['fecha'],
                          'contratista' => $entity['contratista'],
                          'contrato' => $entity['contrato'],
                          'inspector' => $entity['inspector'],
                          'supervisor' => $entity['supervisor'],
                          'lugar' => $entity['lugar'],
                          'id' =>  $entity['id'],
                          'incumplimientos_50' => $incumplimientos,
                          'respuestas_0' => $entity['respuestas_0'],
                          'respuestas_1' => $entity['respuestas_1'],
                          'respuestas_2' => $entity['respuestas_2'],
                        );
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaIncumplimientos50CsvAction.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'INCUMPLIMIENTOS-50-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

   /**
     *
     * @Route("/encuesta_reporte_cierre_csv/data.csv", name="encuesta_reporte_cierre_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestaCierreCsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      //Busco las encuestas que aplican:
      $em = $this->getDoctrine()->getManager();
      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        $data[] = array(
                          'id' => $entity['id'],
                          'fecha' => $entity['fecha'],
                          'gerencia' => $entity['gerencia'],
                          'subgerencia' => $entity['subgerencia'],
                          'area' => $entity['area'],
                          'inspector' => $entity['inspector'],
                          'prevencionista' => $entity['prevencionista'],
                          'contratista' => $entity['contratista'],
                          'contrato' => $entity['contrato'],
                          'ipal' =>  $entity['ipal'],
                          'tiene_incumplimientos' => $entity['tiene_incumplimientos'],
                          'cantidad_incumplimientos' => $entity['cantidad_incumplimientos'],
                          'cierre' => $entity['cierre'],
                          'respuestas_0' => $entity['respuestas_0'],
                          'respuestas_1' => $entity['respuestas_1'],
                          'respuestas_2' => $entity['respuestas_2'],
                          'actividad' => $entity['actividad'],
                          'cierre_texto' => $entity['cierre_texto'],
                        );
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaCierreTodosLosDatosCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'STATUS-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
     *
     * @Route("/encuesta_reporte_por_mes_csv/data.csv", name="encuesta_reporte_por_mes_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteEncuestaMesCsvAction(Request $request)
    {

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      //Busco las encuestas que aplican:
      $em = $this->getDoctrine()->getManager();
      $sql = 'SELECT * FROM EncuestaProxy e WHERE e.id IN ('.implode(",",$ids).') ORDER BY e.fecha DESC';

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {

        $mes = date_format(date_create($entity['fecha']),'Y-m-01');
        if (isset($data[$mes])) {

        } else {
          $data[$mes] = array();
        }

        $data[$mes][] = array(
                          'ipal' =>  $entity['ipal'],
                          'tiene_incumplimientos' => $entity['tiene_incumplimientos'],
                          'cantidad_incumplimientos' => $entity['cantidad_incumplimientos'],
                          'respuestas_0' => $entity['respuestas_0'],
                          'respuestas_1' => $entity['respuestas_1'],
                          'respuestas_2' => $entity['respuestas_2'],
                        );
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:Encuesta:reporteEncuestaMesCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'POR-MES-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
      *
      * @Route("/encuesta_reporte_agrupado_csv/{type}/data.csv", name="reporte_agrupado")
      * @Method("POST")
      * @Template()
      */
     public function reporteEncuestaI13CsvAction(Request $request, $type)
     {

       $ids = json_decode(file_get_contents($request->get('ids')),true);

       //Busco las encuestas que aplican:
       $em = $this->getDoctrine()->getManager();

       //Creo el objeto con el factory:
       switch ($type) {
         case 'chilectra':
           $entity = new EncuestaChilectra();
           $tipo = "CHILECTRA";
           break;
         case 'electrica':
           $entity = new EncuestaElectrica();
           $tipo = "ELECTRICO";
           break;
         case 'logistica':
           $entity = new EncuestaLogistica();
           $tipo = "LOGISTICA";
           break;
         case 'obras_civiles':
           $entity = new EncuestaObrasCiviles();
           $tipo = "OBRAS_CIVILES";
           break;
         case 'telecomunicaciones':
           $entity = new EncuestaTelecomunicaciones();
           $tipo = "TELECOMUNICACIONES";
           break;
         case 'llvv':
             $entity = new EncuestaLlvv();
             $tipo = "LLVV";
             break;
         case 'colombia_general':
           $entity = new EncuestaColombiaGeneral();
           $tipo = "COLOMBIA_GENERAL";
           break;
         case 'brazil_general':
           $entity = new EncuestaBrazilGeneral();
           $tipo = "BRAZIL_GENERAL";
           break;
         case 'brazil_interno':
           $entity = new EncuestaBrazilInterno();
           $tipo = "BRAZIL_INTERNO";
           break;
       }

       $respuestas = $entity->getRespuestasAgrupadasNumeral();

       $valor = array(0 => "Sí",1 => "No",2 => "N/A");
       $data = array();
       foreach ($respuestas as $index => $value) {

         $sql = 'SELECT COUNT(*) as TOTAL, '.$value.' as VALOR FROM Encuesta e WHERE e.id IN ('.implode(",",$ids).') AND tipo = "'.$tipo.'" GROUP BY '.$value.' ORDER BY '.$value;

         $stmt = $em->getConnection()->prepare($sql);
         $stmt->execute();

         $indice = str_replace(array('respuesta_','_'),array('respuesta','.'),$value);
         $indice = $indice.'_'.$type;
         $data[$indice] = array(0 => 0, 1 => 0, 2 => 0);
         foreach($stmt->fetchAll() as $entity) {
           $data[$indice][$entity['VALOR']] = $entity['TOTAL'];
         }
      }

       $content = $this->renderView(
         'BcTicCamIpalBundle:Encuesta:reporteEncuestaI13Csv.html.twig',
         array('data' => $data, 'valor' => $valor, 'tipo' => strtoupper($type))
       );

       //Guardo el contenido y devuelvo el ID para descargar el link
       $fs = new Filesystem();
       $file = 'I-AGRUPADO-'.$tipo.'-'.date_format(date_create(),'Y-m-d');
       $fs->dumpFile("uploads/".$file.".csv", $content);

       return new JsonResponse(array('file' => $file));
     }


    /**
     * Lists all Encuesta entities.
     *
     * @Route("/reportes/{file}/download.html", name="download_encuesta_file", defaults={ "file" = "data"})
     * @Method("GET")
     * @Template()
     */
    public function downloadAction($file)
    {
      $response = new Response(file_get_contents('uploads/'.$file.'.csv'));
      $response->headers->set('Content-Type', 'text/csv');
      $response->headers->set('Charset','iso-8859-1');
      $response->headers->set('Content-Disposition', 'attachment; filename="'.$file.'.csv"');

      return $response;
    }

    /**
     * Lists all Encuesta entities.
     *
     * @Route("/index/{page}", name="encuestas", defaults={ "page" = 1 })
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
      //Muestra el form y carga con Ajax el resto.
      $encuesta = new EncuestaLogistica();
      $encuesta->setStatusCierre(null);
      $form = $this->createFilterForm($encuesta);

      return array(
        'filter' => $form->createView(),
        );
    }

     /**
     *
     *
     * @Route("/data/dashboard.json", name="encuesta_data_dashboard")
     * @Method("POST")
     * @Template()
     */
    public function dashboardAction(Request $request)
    {

      //LOS SUPERVISORES UNICOS DEL PAIS

      $data = array(
        'categories' => array(),
        'yAxisTitle' => 'Cantidad',
        'xAxisTitle' => 'Mes',
        'series' => array(
            array(
              'name' => 'Cantidad de encuestas',
              'color' => '#6095c9',
              'data' => array(),
              'yAxis' => 0,
              'type' => 'column',
              'valueSuffix' => '',
             ),
            array(
              'name' => 'Índice IPAL',
              'color' => '#FF0000',
              'data' => array(),
              'yAxis' => 1,
              'type' => 'line',
              'valueSuffix' => '',
             ),
            ),
        );


      $em = $this->getDoctrine()->getManager();

      $ids = json_decode(file_get_contents($request->get('ids')),true);

      if (count($ids) > 0) {

        $implode = "id IN (".implode(",",array_values($ids)).")";

      } else {
        $implode = 1;
      }

      $sql = "SELECT COUNT(*) as hits, ROUND(SUM(indice) / count(*),2) as ipal,DATE_FORMAT(fecha,'%m-%Y') as fecha_por_mes FROM Encuesta WHERE ".$implode." GROUP BY fecha_por_mes ORDER BY fecha_por_mes ASC;";

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();
      foreach ($stmt->fetchAll() as $info) {
        $data['categories'][] = $info['fecha_por_mes'];
        $data['series'][0]['data'][] = (integer) $info['hits'];
        $data['series'][1]['data'][] = (float) $info['ipal'];
      }

      return new JsonResponse($data);

    }

    /**
     * Lists all Encuesta entities
     *
     * @Route("/data/index.json", name="encuestas_json")
     * @Method("POST")
     * @Template()
     */
    public function indexJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->getConfiguration()->setSQLLogger(null);

        $pagina = $request->get('pagina',1);
        $pageSize = $request->get('items_por_pagina',15);

        $whereAnd = "";

        $id = ($request->request->get('id') != "") ? " AND e.id = '".$request->request->get('id')."'" : "";
        $whereAnd .= $id;

        $status_cierre = ($request->request->get('status_cierre') != "") ? " AND e.statusCierre = '".$request->request->get('status_cierre')."'" : "";
        $whereAnd .= $status_cierre;

        $empresa = ($request->request->get('empresa_id') != "") ? " AND em.id = ".$request->request->get('empresa_id') : "";
        $whereAnd .= $empresa;

        $contrato = ($request->request->get('contrato_id') != "") ? " AND c.id = ".$request->request->get('contrato_id') : "";
        $whereAnd .= $contrato;

        $mandante = ($request->request->get('mandante_id') != "") ? " AND ma.id = ".$request->request->get('mandante_id') : "";
        $whereAnd .= $mandante;

        $gerencia = ($request->request->get('gerencia_id') != "") ? " AND gr.id = ".$request->request->get('gerencia_id') : "";
        $whereAnd .= $gerencia;

        $subGerencia = ($request->request->get('subgerencia_id') != "") ? " AND sgr.id = ".$request->request->get('subgerencia_id') : "";
        $whereAnd .= $subGerencia;

        $area = ($request->request->get('area_id') != "") ? " AND a.id = ".$request->request->get('area_id') : "";
        $whereAnd .= $area;

        $servicio = ($request->request->get('servicio_id') != "") ? " AND srv.id = ".$request->request->get('servicio_id') : "";
        $whereAnd .= $servicio;

        $pais = ($request->request->get('pais_id') != "") ? " AND p.id = ".$request->request->get('pais_id') : "";
        $whereAnd .= $pais;

        $unidadDeNegocio = ($request->request->get('unidad_de_negocio_id') != "") ? " AND u.id = ".$request->request->get('unidad_de_negocio_id') : "";
        $whereAnd .= $unidadDeNegocio;

        $fecha_desde = ($request->request->get('fecha_desde') != "") ? " AND e.fecha >= '".date_format(date_create_from_format('d/m/Y',$request->request->get('fecha_desde')),'Y-m-d')."'": "";
        $whereAnd .= $fecha_desde;

        $fecha_hasta = ($request->request->get('fecha_hasta') != "") ? " AND e.fecha <= '".date_format(date_create_from_format('d/m/Y',$request->request->get('fecha_hasta')),'Y-m-d')."'": "";
        $whereAnd .= $fecha_hasta;

        $supervisor = ($request->request->get('supervisor') != "") ? " AND s.id = ".$request->request->get('supervisor') : "";
        $whereAnd .= $supervisor;

        $tipo = ($request->request->get('tipo') != "") ? $request->request->get('tipo') : "Encuesta";

        $inspector = "";
        $eliminateInspector = false;
        if ($request->request->get('inspector') != "") {
          if ($request->request->get('inspector') == "0") {
            $eliminateInspector = true;
          } else {
            $inspector = " AND e.inspector LIKE '%".$request->request->get('inspector')."%'" ;
          }
        }

        //Busco todos los usuarios que tengan ROL PREVENCIONISTA:
        $inspectoresResult = $em->getRepository('BcTicCamIpalBundle:Usuario')
                           ->createQueryBuilder('u')
                           ->join('u.roles','rol')
                           ->where('rol.nombre LIKE :rol')
                           ->setParameters(array('rol' => 'INSPECTOR'))
                           ->getQuery()->getResult();

        $inspectores = array();
        foreach($inspectoresResult as $entity) {
          $inspectores[md5(strtoupper(trim($entity->getNombre())))] = md5(strtoupper(trim($entity->getNombre())));
        }

        $inspectoresResult = $em->getRepository('BcTicCamIpalBundle:Registro')
                           ->createQueryBuilder('r')
                           ->where('r.visible = 1')
                           ->join('r.roles','rol')
                           ->where('rol.nombre = :rol')
                           ->setParameters(array('rol' => 'INSPECTOR'))
                           ->orderBy('r.nombre', 'ASC')
                           ->getQuery()->getResult();

        foreach($inspectoresResult as $entity) {
          $inspectores[md5(strtoupper(trim($entity->getNombre())))] = md5(strtoupper(trim($entity->getNombre())));
        }

        unset($inspectoresResult);

        $whereAnd .= $inspector;

        $prevencionista = "";
        $eliminatePrevencionista = false;
        if ($request->request->get('prevencionista') != "") {
          if ($request->request->get('prevencionista') == "0") {
            $eliminatePrevencionista = true;
          } else {
            $prevencionista = " AND e.prevencionista LIKE '%".$request->request->get('prevencionista')."%'" ;
          }
        }

        //Busco todos los usuarios que tengan ROL PREVENCIONISTA:
        $prevencionistasResult = $em->getRepository('BcTicCamIpalBundle:Usuario')
                           ->createQueryBuilder('u')
                           ->join('u.roles','rol')
                           ->where('rol.nombre LIKE :rol')
                           ->setParameters(array('rol' => 'PREVENCIONISTA'))
                           ->getQuery()->getResult();

        $prevencionistas = array();
        foreach($prevencionistasResult as $entity) {
          $prevencionistas[md5(strtoupper(trim($entity->getNombre())))] = md5(strtoupper(trim($entity->getNombre())));
        }

        $prevencionistasResult = $em->getRepository('BcTicCamIpalBundle:Registro')
                           ->createQueryBuilder('r')
                           ->where('r.visible = 1')
                           ->join('r.roles','rol')
                           ->where('rol.nombre = :rol')
                           ->setParameters(array('rol' => 'PREVENCIONISTA'))
                           ->orderBy('r.nombre', 'ASC')
                           ->getQuery()->getResult();

        foreach($prevencionistasResult as $entity) {
          $prevencionistas[md5(strtoupper(trim($entity->getNombre())))] = md5(strtoupper(trim($entity->getNombre())));
        }

        unset($prevencionistasResult);

        $whereAnd .= $prevencionista;

        if ($request->request->get('grupo_id') != "") {
          $gruposResult = $em->getRepository('BcTicCamIpalBundle:Usuario')
                           ->createQueryBuilder('r')
                           ->join('r.grupos','grupo')
                           ->where('r.visible = 1 AND grupo.id = :grupo')
                           ->setParameters(array('grupo' => $request->request->get('grupo_id')))
                           ->orderBy('r.nombre', 'ASC')
                           ->getQuery()->getResult();

          $grupos = array();

          foreach($gruposResult as $entity) {
              $grupos[] = $entity->getUsername();
          }

          unset($gruposResult);
        }

        if ($request->request->get('unidad_de_negocio_id') != "") {


          if ($request->request->get('supervisor') != "") {

          $entities = $em->getRepository('BcTicCamIpalBundle:'.$tipo)
                           ->createQueryBuilder('e')
                           ->select('e.id,e.indice, e.inspector, e.prevencionista, e.createdBy')
                           ->join('e.contrato','c')
                           ->join('c.unidadDeNegocio','u')
                           ->join('e.pais','p')
                           ->join('c.servicio','srv')
                           ->join('e.empresa','em')
                           ->join('c.subGerencia','sgr')
                           ->join('sgr.gerencia','gr')
                           ->join('c.area','a')
                           ->join('c.mandante','ma')
                           ->where('e.visible = 1 '.$whereAnd)
                           ->orderBy('e.id', 'DESC');

          } else {

            $entities = $em->getRepository('BcTicCamIpalBundle:'.$tipo)
                             ->createQueryBuilder('e')
                             ->select('e.id,e.indice, e.inspector, e.prevencionista, e.createdBy')
                             ->join('e.contrato','c')
                             ->join('e.supervisor', 's')
                             ->join('c.unidadDeNegocio','u')
                             ->join('e.pais','p')
                             ->join('c.servicio','srv')
                             ->join('e.empresa','em')
                             ->join('c.subGerencia','sgr')
                             ->join('sgr.gerencia','gr')
                             ->join('c.area','a')
                             ->join('c.mandante','ma')
                             ->where('e.visible = 1 '.$whereAnd)
                             ->orderBy('e.id', 'DESC');

          }

        } else {

          if ($request->request->get('supervisor') != "") {

            $entities = $em->getRepository('BcTicCamIpalBundle:'.$tipo)
                           ->createQueryBuilder('e')
                           ->select('e.id,e.indice, e.inspector, e.prevencionista, e.createdBy')
                           ->join('e.contrato','c')
                           ->join('e.supervisor', 's')
                           ->join('e.pais','p')
                           ->join('c.servicio','srv')
                           ->join('e.empresa','em')
                           ->join('c.subGerencia','sgr')
                           ->join('sgr.gerencia','gr')
                           ->join('c.area','a')
                           ->join('c.mandante','ma')
                           ->where('e.visible = 1 '.$whereAnd)
                           ->orderBy('e.id', 'DESC');
           } else {
             $entities = $em->getRepository('BcTicCamIpalBundle:'.$tipo)
                            ->createQueryBuilder('e')
                            ->select('e.id,e.indice, e.inspector, e.prevencionista, e.createdBy')
                            ->join('e.contrato','c')
                            ->join('e.pais','p')
                            ->join('c.servicio','srv')
                            ->join('e.empresa','em')
                            ->join('c.subGerencia','sgr')
                            ->join('sgr.gerencia','gr')
                            ->join('c.area','a')
                            ->join('c.mandante','ma')
                            ->where('e.visible = 1 '.$whereAnd)
                            ->orderBy('e.id', 'DESC');
           }
        }

        $sql = $entities->getQuery()->getSql();

        //TODOS, SOLO NECESITO LOS ID e IPAL y BORRO:
        $ids = array();
        $riesgoDetectado = array();

        //Raw SQL:
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $fetch = $stmt->fetchAll();

        $ids = $this->array_column($fetch,'id0');
        $riesgoDetectado = $this->array_column($fetch,'indice1');

        $inspectoresMatrix = $this->array_column($fetch,'inspector2');
        $prevencionistasMatrix = $this->array_column($fetch,'prevencionista3');
        $createdByMatrix = $this->array_column($fetch,'created_by4');

        if ($eliminateInspector) {

            array_walk($inspectoresMatrix, function(&$i) {
              $i = md5(strtoupper(trim($i)));
            });

           foreach($inspectores as $inspector) {
              $delete = array_keys(array_values($inspectoresMatrix),$inspector);
              foreach($delete as $key) {
                unset($ids[$key]);
                unset($riesgoDetectado[$key]);
              }
           }

        }

        if ($eliminatePrevencionista) {
            array_walk($prevencionistasMatrix, function(&$i) {
              $i = md5(strtoupper(trim($i)));
            });

           foreach($prevencionistas as $prevencionista) {
              $delete = array_keys(array_values($prevencionistasMatrix),$prevencionista);
              foreach($delete as $key) {
                unset($ids[$key]);
                unset($riesgoDetectado[$key]);
              }
           }
        }

        if (strlen($request->request->get('grupo_id')) > 0) {
          //Array diff: Elimino los que no están:
          $diff = array_diff($createdByMatrix,$grupos);
          foreach ($diff as $i => $diffItem) {
                unset($ids[$i]);
                unset($riesgoDetectado[$i]);
          }
        }

        $riesgoDetectado = array_sum(array_values($riesgoDetectado));

        //Ahora le pongo limite y subset, a los ids:
        $whereAnd = (count($ids) > 0) ? "AND e.id IN (".implode(",",$ids).")" : "";
        $entities = $em->getRepository('BcTicCamIpalBundle:'.$tipo)
                           ->createQueryBuilder('e')
                           ->join('e.contrato','c')
                           ->join('e.pais','p')
                           ->join('c.servicio','srv')
                           ->join('e.empresa','em')
                           ->join('c.subGerencia','sgr')
                           ->join('sgr.gerencia','gr')
                           ->join('c.area','a')
                           ->join('c.mandante','ma')
                           ->where('e.visible = 1 '.$whereAnd)
                           ->setFirstResult( ($pagina - 1) * $pageSize)
                           ->setMaxResults($pageSize)
                           ->orderBy('e.id', 'DESC');



        $data = array();

        $csrf = $this->get('form.csrf_provider');

        foreach ($entities->getQuery()->getResult() as $entity) {

          $files = array();
          if ($entity->getFile1() != null) $files[] = $entity->getFile1();
          if ($entity->getFile2() != null) $files[] = $entity->getFile2();
          if ($entity->getFile3() != null) $files[] = $entity->getFile3();

          $filesCierre = array();
          if ($entity->getFileCierre1() != null) $filesCierre[] = $entity->getFileCierre1();
          if ($entity->getFileCierre2() != null) $filesCierre[] = $entity->getFileCierre2();

          //Parse la latitud y longitud:
          $latitud = '';
          $longitud = '';

          $localizacion = explode(',',str_replace(array('(',')'),array('',''),$entity->getLocalizacion()));

          if (count($localizacion) > 1) {
            $latitud = $localizacion[0];
            $longitud = $localizacion[1];
          }

            $fechaDeCreacion = '';
            if ($entity->getCreatedAt() > 0) {
              $createdAt = new \DateTime('@'.$entity->getCreatedAt());
              $fechaDeCreacion = $createdAt->format('d/m/Y');
            }

            $cierre = $entity->getStatusCierre();

            $data[] = array(
             'id' => $entity->getId(),
             'fecha' => $entity->getFecha()->format('d/m/Y'),
             'empresa' => ($entity->getEmpresa() instanceof Empresa) ? $entity->getEmpresa()->__toString() : "-- NO DEFINIDO --",
             'contrato' => $entity->getContrato()->__toString(),
             'indiceIPAL' => $entity->getIndiceIpal(),
             'pais' => $entity->getPais()->getNombre(),
             'latitud' => $latitud,
             'longitud' => $longitud,
             'tipo' => $this->get('translator')->trans(strtoupper($entity->getKey())),
             'files' => $files,
             'filesCierre' => $filesCierre,
             'tieneIncumplimientos' => (count($entity->getIncumplimientos()) > 0) ? true : false ,
             'cierre' => $cierre,
             'cierre_log' => (strlen($entity->getCierreLog()) > 0) ? $entity->getCierreLog() : '',
             'inspector' => ($entity->getInspector() == null) ? "-- No especificado --" : $entity->getInspector(),
             'token' => $csrf->generateCsrfToken('entity'.$entity->getId()),
             'createdBy' => $entity->getCreatedBy(),
             'createdAt' => $fechaDeCreacion,
             'actualUser' => $this->get('security.context')->getToken()->getUser()->getUsername(),
            );
        }

        $num_de_inspecciones = count($ids);

        $indiceIPAL = ( $num_de_inspecciones == 0) ? 0 : round($riesgoDetectado / $num_de_inspecciones,1);

        $ultima_pagina = round(count($ids)/$pageSize,0);

        $ids_json = $this->get('kernel')->getRootDir().'/Resources/json/'.md5(uniqid(rand(), true)).'-data.json';

        file_put_contents($ids_json, json_encode($ids));

        return new JsonResponse(array('ultima_pagina' => $ultima_pagina + 1,'pagina' => (int) $pagina,'entities' => $data,'ids' => $ids_json ,'indiceIPAL' => $indiceIPAL,'hits' => $num_de_inspecciones));

    }

  /**
     * Creates a new Encuesta entity.
     *
     * @Route("/add/electrica", name="encuestas_create_electrica")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
     */
    public function createElectricaAction(Request $request)
    {
        $entity = new EncuestaElectrica();
        $form = $this->createCreateForm($entity, new EncuestaElectricaType());
        $form->handleRequest($request);

        $response = $this->createAction($request, $form, $entity);
        if (is_object($response)) return $response;

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }


  /**
     * Creates a new Encuesta entity.
     *
     * @Route("/add/chilectra", name="encuestas_create_chilectra")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
     */
    public function createChilectraAction(Request $request)
    {
        $entity = new EncuestaChilectra();
        $form = $this->createCreateForm($entity, new EncuestaChilectraType());
        $form->handleRequest($request);

        $response = $this->createAction($request, $form, $entity);
        if (is_object($response)) return $response;

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }

  /**
     * Creates a new Encuesta entity.
     *
     * @Route("/add/telecomunicaciones", name="encuestas_create_telecomunicaciones")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
     */
    public function createTelecomunicacionesAction(Request $request)
    {
        $entity = new EncuestaTelecomunicaciones();
        $form = $this->createCreateForm($entity, new EncuestaTelecomunicacionesType());
        $form->handleRequest($request);

        $response = $this->createAction($request, $form, $entity);
        if (is_object($response)) return $response;

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }

    /**
       * Creates a new Encuesta entity.
       *
       * @Route("/add/llvv", name="encuestas_create_llvv")
       * @Method("POST")
       * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
       */
      public function createLlvvAction(Request $request)
      {
          $entity = new EncuestaLlvv();
          $form = $this->createCreateForm($entity, new EncuestaLlvvType());
          $form->handleRequest($request);

          $response = $this->createAction($request, $form, $entity);
          if (is_object($response)) return $response;

          $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

          return array(
              'format' => $format,
              'entity' => $entity,
              'form'   => $form->createView(),
              'type'  => $entity->getKey(),
          );
      }

  /**
     * Creates a new Encuesta entity.
     *
     * @Route("/add/logistica", name="encuestas_create_logistica")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
     */
    public function createLogisticaAction(Request $request)
    {
        $entity = new EncuestaLogistica();
        $form = $this->createCreateForm($entity, new EncuestaLogisticaType());
        $form->handleRequest($request);

        $response = $this->createAction($request, $form, $entity);
        if (is_object($response)) return $response;

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }

  /**
     * Creates a new Encuesta entity.
     *
     * @Route("/add/obras_civiles", name="encuestas_create_obras_civiles")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
     */
    public function createObrasCivilesAction(Request $request)
    {
        $entity = new EncuestaObrasCiviles();
        $form = $this->createCreateForm($entity, new EncuestaObrasCivilesType());
        $form->handleRequest($request);

        $response = $this->createAction($request, $form, $entity);
        if (is_object($response)) return $response;

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }

    /**
     * Creates a new Encuesta entity.
     *
     * @Route("/add/colombia_general", name="encuestas_create_colombia_general")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
     */
    public function createColombiaGeneralAction(Request $request)
    {
        $entity = new EncuestaColombiaGeneral();
        $form = $this->createCreateForm($entity, new EncuestaColombiaGeneralType());
        $form->handleRequest($request);

        $response = $this->createAction($request, $form, $entity);
        if (is_object($response)) return $response;

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }

    /**
     * Creates a new Encuesta entity.
     *
     * @Route("/add/brazil_general", name="encuestas_create_brazil_general")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
     */
    public function createBrazilGeneralAction(Request $request)
    {
        $entity = new EncuestaBrazilGeneral();
        $form = $this->createCreateForm($entity, new EncuestaBrazilGeneralType());
        $form->handleRequest($request);

        $response = $this->createAction($request, $form, $entity);
        if (is_object($response)) return $response;

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }

    /**
     * Creates a new Encuesta entity.
     *
     * @Route("/add/brazil_interno", name="encuestas_create_brazil_interno")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Encuesta:new.html.twig")
     */
    public function createBrazilInternoAction(Request $request)
    {
        $entity = new EncuestaBrazilInterno();
        $form = $this->createCreateForm($entity, new EncuestaBrazilInternoType());
        $form->handleRequest($request);

        $response = $this->createAction($request, $form, $entity);
        if (is_object($response)) return $response;

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }



    public function createAction(Request $request, $form, $entity)
    {

        if ($form->isValid()) {

            //Guardo el nombre del usuario en "Prevencionista"
            $entity->setPrevencionista($this->get('security.context')->getToken()->getUser()->getNombre());
            $entity->setCreatedBy($this->get('security.context')->getToken()->getUser()->getUsername());

            $em = $this->getDoctrine()->getManager();
            $entity->upload();
            $entity->setIndice(-1); //Lo obligo a actualizarse
            //El estado de cierre depende si tiene incumplimientos:
            if (count($entity->getIncumplimientos()) > 0) $entity->setStatusCierre("ABIERTA");
            $em->persist($entity);
            $em->flush();

            //Notifico por email si tiene inclumplimientos:
            if (count($entity->getIncumplimientos50()) > 0) {

              $body = $this->renderView(
                'BcTicCamIpalBundle:Encuesta:notificacion.html.twig',
                 array('incumplimientos' => $entity->getIncumplimientos50(),
                       'empresa' => $entity->getEmpresa(),
                       'contrato' => $entity->getContrato()->getNombre(),
                       'inspector' => $entity->getInspector(),
                       'supervisor' => $entity->getSupervisor(),
                       'lugar' => $entity->getLugarDeTrabajo(),
                       'observaciones' => $entity->getObservaciones(),
                       'entity' => $entity,
                       )
              );

              //EN CASO DE PAIS = COASIN SE ENVIA A corsin@crm.cam-la.com
              $destinatario = "no-reply@bctic.net";
              switch ($entity->getPais()->getId()) {

                case 2: //COLOMBIA
                  $destinatario = 'siop-colombia@cam-la.com';
                  break;

                case 3: //PERU
                  $destinatario = 'siop-peru@cam-la.com';
                  break;

                case 4: //BRAZIL
                  $destinatario = 'siop-brazil@cam-la.com';
                  break;

                case 5: //COASIN
                  $destinatario = 'siop-coasin-cam-la@bctic.net';
                  break;

                case 6: //CONTRATISTAS
                  $destinatario = 'siop-contratistas@cam-la.com';
                  break;

                default: //CHILE - DEFECTO
                  $destinatario = 'siop@cam-la.com';
                  break;

              }

              $message = \Swift_Message::newInstance()
                ->setSubject('IPAL #'.$entity->getId().' CON INCUMPLIMIENTOS 50')
                ->setFrom(array('siop@siop.cam-la.com' => 'SIOP CAM LA'))
                ->setTo($destinatario)
                ->setCharset('UTF-8')
                ->setContentType('text/html')
                ->setBody($body);

              $this->get('mailer')->send($message);

            }
            $this->get('session')->getFlashBag()->add(
              'notice',
              'La IPAL Nº '.$entity->getId().' ha sido ingresada satisfactoriamente'
            );

            return $this->redirect($this->generateUrl('encuestas', array('id' => $entity->getId())));
        }

    }


    /**
    * Creates a form to create a Filter.
    *
    * @param Encuesta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createFilterForm(Encuesta $entity)
    {
        $form = $this->createForm(new EncuestaFilterType(), $entity, array(
            'action' => $this->generateUrl('encuestas_create_'.$entity->getKey()),
            'method' => 'POST',
        ));

        $form->add('button', 'button', array('label' => 'Buscar'));

        return $form;
    }

    /**
    * Creates a form to create a Encuesta entity.
    *
    * @param Encuesta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Encuesta $entity, $formType)
    {

        //Al entity le pongo la fecha actual - ojo con la fecha del servidor y la zona horaria de PHP:
        $entity->setFecha(new \DateTime());
        $entity->setHora(new \DateTime());

        $form = $this->createForm($formType, $entity, array(
            'action' => $this->generateUrl('encuestas_create_'.$entity->getKey()),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Encuesta entity.
     *
     * @Route("/new/{type}", name="encuestas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction(Request $request,$type)
    {
        switch ($type) {
          case 'chilectra':
            $entity = new EncuestaChilectra();
            $formType = new EncuestaChilectraType();
            break;
          case 'electrica':
            $entity = new EncuestaElectrica();
            $formType = new EncuestaElectricaType();
            break;
          case 'logistica':
            $entity = new EncuestaLogistica();
            $formType = new EncuestaLogisticaType();
            break;
          case 'obras_civiles':
            $entity = new EncuestaObrasCiviles();
            $formType = new EncuestaObrasCivilesType();
            break;
          case 'telecomunicaciones':
            $entity = new EncuestaTelecomunicaciones();
            $formType = new EncuestaTelecomunicacionesType();
            break;
          case 'llvv':
              $entity = new EncuestaLlvv();
              $formType = new EncuestaLlvvType();
              break;
          case 'colombia_general':
            $entity = new EncuestaColombiaGeneral();
            $formType = new EncuestaColombiaGeneralType();
            break;
          case 'brazil_general':
            $entity = new EncuestaBrazilGeneral();
            $formType = new EncuestaBrazilGeneralType();
            break;
          case 'brazil_interno':
            $entity = new EncuestaBrazilInterno();
            $formType = new EncuestaBrazilInternoType();
            break;
        }
        $entity->setNumDeEmpleados(3);
        $entity->setVisible(true);

        $form   = $this->createCreateForm($entity, $formType);


        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html";

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
            'type'  => $entity->getKey(),
        );
    }


    /**
     * Displays a view existing Encuesta entity.
     *
     * @Route("/{id}.html", name="encuestas_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encuesta entity.');
        }

        return array(
            'entity'      => $entity
        );
    }

    /**
     * Displays a view existing Encuesta entity.
     *
     * @Route("/coasin/{id}.html", name="encuestas_coasin_show")
     * @Method("GET")
     * @Template()
     */
    public function showCoasinAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encuesta entity.');
        }

        return array(
            'entity'      => $entity
        );
    }


    /**
     * Displays a view empty
     *
     * @Route("/encuestas_ipal/{type}.html", name="encuestas_show_form")
     * @Method("GET")
     * @Template()
     */
    public function showFormAction($type)
    {
         switch ($type) {
          case 'chilectra':
            $entity = new EncuestaChilectra();
            break;
          case 'electrica':
            $entity = new EncuestaElectrica();
            break;
          case 'logistica':
            $entity = new EncuestaLogistica();
            break;
          case 'obras_civiles':
            $entity = new EncuestaObrasCiviles();
            break;
          case 'telecomunicaciones':
            $entity = new EncuestaTelecomunicaciones();
            break;
            case 'llvv':
              $entity = new EncuestaLlvv();
              break;
          case 'colombia_general':
            $entity = new EncuestaColombiaGeneral();
            break;
          case 'brazil_general':
            $entity = new EncuestaBrazilGeneral();
            break;
          case 'brazil_interno':
            $entity = new EncuestaBrazilInterno();
            break;
        }

        return array(
            'entity'      => $entity
        );
    }

    /**
     * Displays a form to edit an existing Encuesta entity.
     *
     * @Route("/edit/{id}", name="encuestas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Request $request,$id)
    {

        //TODO: SOLO PUEDE EDITAR UN ADMIN.
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encuesta entity.');
        }

        $role = in_array('ROLE_ADMIN',$this->get('security.context')->getToken()->getUser()->getRoles());

       switch ($entity->getKey()) {
          case 'chilectra':
            $formType = $role ? new EncuestaChilectraEditAdminType() : new EncuestaChilectaEditType();
            break;
          case 'electrica':
            $formType = $role ? new EncuestaElectricaEditAdminType() : new EncuestaElectricaEditType();
            break;
          case 'logistica':
            $formType = $role ? new EncuestaLogisticaEditAdminType() : new EncuestaLogisticaEditType();
            break;
          case 'obras_civiles':
            $formType = $role ? new EncuestaObrasCivilesEditAdminType() : new EncuestaObrasCivilesEditType();
            break;
          case 'telecomunicaciones':
            $formType = $role ? new EncuestaTelecomunicacionesEditAdminType() : new EncuestaTelecomunicacionesEditType();
            break;
          case 'llvv':
              $formType = $role ? new EncuestaLlvvEditAdminType() : new EncuestaLlvvEditType();
              break;
          case 'colombia_general':
            $formType = $role ? new EncuestaColombiaGeneralEditAdminType : new EncuestaColombiaGeneralEditType();
            break;
          case 'brazil_general':
            $formType = $role ? new EncuestaBrazilGeneralEditAdminType : new EncuestaBrazilGeneralEditType();
            break;
          case 'brazil_interno':
            $formType = $role ? new EncuestaBrazilInternoEditAdminEditAdminType : new EncuestaBrazilInternoEditType();
            break;
        }


        $editForm = $this->createEditForm($entity, $formType);

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'type'  => $entity->getKey(),
            'isAdmin' => $role
        );
    }

    /**
    * Creates a form to edit a Encuesta entity.
    *
    * @param Encuesta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Encuesta $entity, $formType)
    {

        $form = $this->createForm($formType, $entity, array(
            'action' => $this->generateUrl('encuestas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Encuesta entity.
     *
     * @Route("/update/{id}", name="encuestas_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Encuesta:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encuesta entity.');
        }

        $role = in_array('ROLE_ADMIN',$this->get('security.context')->getToken()->getUser()->getRoles());

       switch ($entity->getKey()) {
          case 'electrica':
            $formType = $role ? new EncuestaElectricaEditAdminType() : new EncuestaElectricaEditType();
            break;
          case 'logistica':
            $formType = $role ? new EncuestaLogisticaEditAdminType() : new EncuestaLogisticaEditType();
            break;
          case 'obras_civiles':
            $formType = $role ? new EncuestaObrasCivilesEditAdminType() : new EncuestaObrasCivilesEditType();
            break;
          case 'telecomunicaciones':
            $formType = $role ? new EncuestaTelecomunicacionesEditAdminType() : new EncuestaTelecomunicacionesEditType();
            break;
          case 'llvv':
              $formType = $role ? new EncuestaLlvvEditAdminType() : new EncuestaLlvvEditType();
              break;
          case 'colombia_general':
            $formType = $role ? new EncuestaColombiaGeneralEditAdminType() : new EncuestaColombiaGeneralEditType();
            break;
          case 'brazil_general':
            $formType = $role ? new EncuestaBrazilGeneralEditAdminType() : new EncuestaBrazilGeneralEditType();
            break;
          case 'brazil_interno':
            $formType = $role ? new EncuestaBrazilInternoEditAdminType() : new EncuestaBrazilInternoEditType();
            break;
        }

        $estadoGuardado = $entity->getStatusCierre();

        $editForm = $this->createEditForm($entity, $formType);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $entity->upload();
            $entity->setIndice(-1); //Lo obligo a actualizarse via COMMAND

            if ($role == false) {
              //Si el editor no es el admin.
              //Si el estado == 'ABIERTA' pero tiene el Texto y almenos una foto, entonces el status_cierre = 'POR_VALIDAR'
              switch ($entity->getStatusCierre()) {
                case 'ABIERTA':
                  $cierre = (count($entity->getIncumplimientos()) > 0) ? ( ( (  strlen($entity->getCierre()) > 0 ) and ( (strlen($entity->getFileCierre1()) > 0) or (strlen($entity->getFileCierre2()) > 0) )  ) ? "POR_VALIDAR" : "ABIERTA" ) : "N/A";
                  $entity->setStatusCierre($cierre);
                  break;
              }
            }

            //CIERRE DEBE DEJAR LOG DE QUIEN LO CERRÓ:
            if ($entity->getStatusCierre() == 'CERRADA') {
               switch ($estadoGuardado) {
                  case 'POR_VALIDAR':
                    $entity->setCierreLog($entity->getCierreLog().'CERRADA POR '.$this->get('security.context')->getToken()->getUser()->getUsername().' EL '.date('d-m-Y H:i').chr(10));
                    break;
               }
            }



            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'La IPAL Nº '.$entity->getId().' ha sido editada satisfactoriamente.'
            );


        } else {

            $this->get('session')->getFlashBag()->add(
              'error',
              'La IPAL Nº '.$entity->getId().' no ha sido editada satisfactoriamente.'
            );
        }

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format'      => $format,
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'type'  => $entity->getKey(),
            'isAdmin' => $role
        );
    }

     /**
     * Deletes a  entity.
     *
     * @Route("/delete/{id}/{token}", name="encuesta_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {

        $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:EncuestaElectrica')->find($id);

        if (!$entity) {
          $entity = $em->getRepository('BcTicCamIpalBundle:EncuestaLogistica')->find($id);
        }

        if (!$entity) {
          $entity = $em->getRepository('BcTicCamIpalBundle:EncuestaObrasCiviles')->find($id);
        }

        if (!$entity) {
          $entity = $em->getRepository('BcTicCamIpalBundle:EncuestaTelecomunicaciones')->find($id);
        }

        if (!$entity) {
          $entity = $em->getRepository('BcTicCamIpalBundle:EncuestaLlvv')->find($id);
        }

        if (!$entity) {
          $entity = $em->getRepository('BcTicCamIpalBundle:EncuestaColombiaGeneral')->find($id);
        }

        if (!$entity) {
          $entity = $em->getRepository('BcTicCamIpalBundle:EncuestaBrazilGeneral')->find($id);
        }

        if (!$entity) {
          $entity = $em->getRepository('BcTicCamIpalBundle:EncuestaBrazilInterno')->find($id);
        }

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Encuesta entity.');
        }

        if (true) {
            $em->remove($entity);
            try {
              $em->flush();
              return new JsonResponse(array('status' => '1', 'message' => 'OK'));
            } catch (\Doctrine\DBAL\DBALException $e) {
              return new JsonResponse(array('status' => '0', 'message' => 'Los datos no se pudieron borrar por que tiene otros datos relacionados.'));
            }
        } else {
          return new JsonResponse(array('status' => '0', 'message' => 'no valid token!'));
        }

        return new JsonResponse(array('status' => '0', 'message' => 'no idea!'));

    }

    /**
     *
     *
     * @Route("/audit/{id}", name="encuestas_audit")
     * @Method("GET")
     * @Template()
     */
    public function auditAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encuesta entity.');
        }

        $revisions = $this->container->get('simplethings_entityaudit.reader')->findRevisions(
          get_class($entity),
          $id);

        return array(
          'entity' => $entity,
          'className' => urlencode(get_class($entity)),
          'revisions' => $revisions
        );
    }

    /**
     *
     *
     * @Route("/auditoria/detalles/{className}/{id}/{rev}/{fecha}/{user}", name="encuestas_audit_detail")
     * @Method("GET")
     * @Template("BcTicCamIpalBundle:Encuesta:show.html.twig")
     */
    public function auditDetailAction(Request $request,$id, $className, $rev, $fecha, $user)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encuesta entity.');
        }

        $revision = $this->container->get('simplethings_entityaudit.reader')->find(
          urldecode($className),
          $id,
          $rev);

          $fecha = new \DateTime("@$fecha");

        return array(
          'entity' => $revision,
          'revision' => 'Revisión: #'.$rev.' '.$fecha->format('d-m-Y').' por '.$user
        );
    }

    /**
     * Returns the values from a single column of the input array, identified by
     * the $columnKey.
     *
     * Optionally, you may provide an $indexKey to index the values in the returned
     * array by the values from the $indexKey column in the input array.
     *
     * @param array $input A multi-dimensional array (record set) from which to pull
     *                     a column of values.
     * @param mixed $columnKey The column of values to return. This value may be the
     *                         integer key of the column you wish to retrieve, or it
     *                         may be the string key name for an associative array.
     * @param mixed $indexKey (Optional.) The column to use as the index/keys for
     *                        the returned array. This value may be the integer key
     *                        of the column, or it may be the string key name.
     * @return array
     */
function array_column($input = null, $columnKey = null, $indexKey = null)
{
// Using func_get_args() in order to check for proper number of
// parameters and trigger errors exactly as the built-in array_column()
// does in PHP 5.5.
$argc = func_num_args();
$params = func_get_args();
if ($argc < 2) {
trigger_error("array_column() expects at least 2 parameters, {$argc} given", E_USER_WARNING);
return null;
}
if (!is_array($params[0])) {
trigger_error('array_column() expects parameter 1 to be array, ' . gettype($params[0]) . ' given', E_USER_WARNING);
return null;
}
if (!is_int($params[1])
&& !is_float($params[1])
&& !is_string($params[1])
&& $params[1] !== null
&& !(is_object($params[1]) && method_exists($params[1], '__toString'))
) {
trigger_error('array_column(): The column key should be either a string or an integer', E_USER_WARNING);
return false;
}
if (isset($params[2])
&& !is_int($params[2])
&& !is_float($params[2])
&& !is_string($params[2])
&& !(is_object($params[2]) && method_exists($params[2], '__toString'))
) {
trigger_error('array_column(): The index key should be either a string or an integer', E_USER_WARNING);
return false;
}
$paramsInput = $params[0];
$paramsColumnKey = ($params[1] !== null) ? (string) $params[1] : null;
$paramsIndexKey = null;
if (isset($params[2])) {
if (is_float($params[2]) || is_int($params[2])) {
$paramsIndexKey = (int) $params[2];
} else {
$paramsIndexKey = (string) $params[2];
}
}
$resultArray = array();
foreach ($paramsInput as $row) {
$key = $value = null;
$keySet = $valueSet = false;
if ($paramsIndexKey !== null && array_key_exists($paramsIndexKey, $row)) {
$keySet = true;
$key = (string) $row[$paramsIndexKey];
}
if ($paramsColumnKey === null) {
$valueSet = true;
$value = $row;
} elseif (is_array($row) && array_key_exists($paramsColumnKey, $row)) {
$valueSet = true;
$value = $row[$paramsColumnKey];
}
if ($valueSet) {
if ($keySet) {
$resultArray[$key] = $value;
} else {
$resultArray[] = $value;
}
}
}
return $resultArray;
}

}
