<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\ObservacionDeComportamiento;
use BcTic\CamIpalBundle\Entity\RegistroDeObservacion;
use BcTic\CamIpalBundle\Form\ObservacionDeComportamientoType;
use BcTic\CamIpalBundle\Form\ObservacionDeComportamientoFilterType;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

use Symfony\Component\HttpFoundation\Response as Response;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * ObservacionDeComportamiento controller.
 *
 * @Route("/observaciones")
 */
class ObservacionDeComportamientoController extends Controller
{

    /**
     *
     * @Route("/observacion_reporte_por_mes_csv/data.csv", name="observacion_reporte_por_mes_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteObservacionesMesCsvAction(Request $request)
    {

      $key = $request->request->get('entities');

      $ids = implode(",", array_values($key));

      //Busco las encuestas que aplican:
      $em = $this->getDoctrine()->getManager();
      $entities = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')
                           ->createQueryBuilder('o')
                           ->join('o.contrato','c')
                           ->join('o.pais','p')
                           ->join('c.servicio','srv')
                           ->join('o.empresa','em')
                           ->join('c.subGerencia','sgr')
                           ->join('sgr.gerencia','gr')
                           ->join('c.area','a')
                           ->join('c.mandante','ma')
                           ->where('o.id IN ('.$ids.')')
                           ->orderBy('o.id', 'DESC')
                           ->getQuery();

      //Armo un array de fechas
      $data = array();
      foreach($entities->getResult() as $entity) {
        $mes = date_format($entity->getFecha(),'Y-m-01');
        if (isset($data[$mes])) {

        } else {
          $data[$mes] = array();
        }

        $data[$mes][] = array(
                          'indice' =>  $entity->getIndice(),
                          'tiene_incumplimientos' => (count($entity->getIndice()) > 0) ? 1 : 0,
                          'cantidad_incumplimientos' => $entity->getIndice(),
                        );
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:ObservacionDeComportamiento:reporteObservacionMesCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'OBSERVACIONES-POR-MES-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }

    /**
     *
     * @Route("/observacion_reporte_todos_los_datos_csv/data.csv", name="observacion_reporte_todos_los_datos_csv")
     * @Method("POST")
     * @Template()
     */
    public function reporteObservacionTodosLosDatosCsvAction(Request $request)
    {

      $key = $request->request->get('entities');

      $ids = implode(",", array_values($key));

      //Busco las encuestas que aplican:
      $em = $this->getDoctrine()->getManager();
      $entities = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')
                           ->createQueryBuilder('o')
                           ->join('o.contrato','c')
                           ->join('o.pais','p')
                           ->join('c.servicio','srv')
                           ->join('o.empresa','em')
                           ->join('c.subGerencia','sgr')
                           ->join('sgr.gerencia','gr')
                           ->join('c.area','a')
                           ->join('c.mandante','ma')
                           ->where('o.id IN ('.$ids.')')
                           ->orderBy('o.id', 'DESC')
                           ->getQuery();

      //Armo un array de fechas
      $data = array();
      foreach($entities->getResult() as $entity) {
        $data[] = array(
             'id' => $entity->getId(),
             'fecha' => date_format($entity->getFecha(),'d-m-Y'),
             'empresa' => (is_object($entity->getEmpresa())) ? $entity->getEmpresa()->__toString() : "-- NO DEFINIDO --",
             'contrato' => (is_object($entity->getContrato())) ? $entity->getContrato()->__toString() : "-- NO DEFINIDO --",
             'pais' => (is_object($entity->getPais())) ? $entity->getPais()->getNombre() : "-- NO DEFINIDO --",
             'inspector' => ($entity->getInspector() == null) ? "-- No especificado --" : $entity->getInspector(),
             'indice' => $entity->getIndice(),
             );
      }

      $content = $this->renderView(
        'BcTicCamIpalBundle:ObservacionDeComportamiento:reporteObservacionTodosLosDatosCsv.html.twig',
        array('data' => $data)
      );

      //Guardo el contenido y devuelvo el ID para descargar el link
      $fs = new Filesystem();
      $file = 'OBSERVACIONES-TODOS-LOS-DATOS-'.date_format(date_create(),'Y-m-d-his');
      $fs->dumpFile("uploads/".$file.".csv", $content);

      return new JsonResponse(array('file' => $file));
    }


    /**
     *
     *
     * @Route("/reportes/{file}/download.html", name="download_observacion_file", defaults={ "file" = "data"})
     * @Method("GET")
     * @Template()
     */
    public function downloadAction($file)
    {
      $response = new Response(file_get_contents('uploads/'.$file.'.csv'));
      $response->headers->set('Content-Type', 'text/csv');
      $response->headers->set('Content-Disposition', 'attachment; filename="'.$file.'.csv"');

      return $response;
    }


    /**
     * Lists all ObservacionDeComportamiento entities.
     *
     * @Route("/index/{page}", name="observaciones", defaults={ "page" = 1 })
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
      //Muestra el form y carga con Ajax el resto.
      $form = $this->createFilterForm(new ObservacionDeComportamiento());
      return array(
        'filter' => $form->createView()
        );
    }

    /**
     * Lists all ObservacionDeComportamiento entities
     *
     * @Route("/data/index.json", name="observaciones_json")
     * @Method("GET")
     * @Template()
     */
    public function indexJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $whereAnd = "";

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

        $fecha_desde = ($request->request->get('fecha_desde') != "") ? " AND o.fecha >= '".date_format(date_create_from_format('d/m/Y',$request->request->get('fecha_desde')),'Y-m-d')."'": "";
        $whereAnd .= $fecha_desde;

        $fecha_hasta = ($request->request->get('fecha_hasta') != "") ? " AND o.fecha <= '".date_format(date_create_from_format('d/m/Y',$request->request->get('fecha_hasta')),'Y-m-d')."'": "";
        $whereAnd .= $fecha_hasta;

        $unidadDeNegocio = ($request->request->get('unidad_de_negocio_id') != "") ? " AND u.id = ".$request->request->get('unidad_de_negocio_id') : "";
        $whereAnd .= $unidadDeNegocio;

        $supervisor = ($request->request->get('supervisor') != "") ? " AND s.id = ".$request->request->get('supervisor') : "";
        $whereAnd .= $supervisor;

        $inspector = "";
        $eliminateInspector = false;
        if ($request->request->get('inspector') != "") {
          if ($request->request->get('inspector') == "0") {
            $eliminateInspector = true;
          } else {
            $inspector = " AND o.inspector LIKE '%".$request->request->get('inspector')."%'" ;
          }
        }

        //Busco todos los usuarios que tengan ROL INSPECTOR:
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

        $whereAnd .= $inspector;

        $prevencionista = "";
        $eliminatePrevencionista = false;
        if ($request->request->get('prevencionista') != "") {
          if ($request->request->get('prevencionista') == "0") {
            $eliminatePrevencionista = true;
          } else {
            $prevencionista = " AND o.prevencionista LIKE '%".$request->request->get('prevencionista')."%'" ;
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

            $entities = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')
                               ->createQueryBuilder('o')
                               ->join('o.contrato','c')
                               ->join('o.supervisor','s')
                               ->join('c.unidadDeNegocio','u')
                               ->join('o.pais','p')
                               ->join('c.servicio','srv')
                               ->join('o.empresa','em')
                               ->join('c.subGerencia','sgr')
                               ->join('sgr.gerencia','gr')
                               ->join('c.area','a')
                               ->join('c.mandante','ma')
                               ->where('o.id > 0 '.$whereAnd)
                               ->orderBy('o.id', 'DESC');
          } else {
            $entities = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')
                               ->createQueryBuilder('o')
                               ->join('o.contrato','c')
                               ->join('c.unidadDeNegocio','u')
                               ->join('o.pais','p')
                               ->join('c.servicio','srv')
                               ->join('o.empresa','em')
                               ->join('c.subGerencia','sgr')
                               ->join('sgr.gerencia','gr')
                               ->join('c.area','a')
                               ->join('c.mandante','ma')
                               ->where('o.id > 0 '.$whereAnd)
                               ->orderBy('o.id', 'DESC');
          }

        } else {

          if ($request->request->get('supervisor') != "") {
            $entities = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')
                           ->createQueryBuilder('o')
                           ->join('o.contrato','c')
                           ->join('o.supervisor','s')
                           ->join('o.pais','p')
                           ->join('c.servicio','srv')
                           ->join('o.empresa','em')
                           ->join('c.subGerencia','sgr')
                           ->join('sgr.gerencia','gr')
                           ->join('c.area','a')
                           ->join('c.mandante','ma')
                           ->where('o.id > 0 '.$whereAnd)
                           ->orderBy('o.id', 'DESC');
          } else {
            $entities = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')
                           ->createQueryBuilder('o')
                           ->join('o.contrato','c')
                           ->join('o.pais','p')
                           ->join('c.servicio','srv')
                           ->join('o.empresa','em')
                           ->join('c.subGerencia','sgr')
                           ->join('sgr.gerencia','gr')
                           ->join('c.area','a')
                           ->join('c.mandante','ma')
                           ->where('o.id > 0 '.$whereAnd)
                           ->orderBy('o.id', 'DESC');
          }
        }

        $ids = array();
        $data = array();
        $indice = 0;
        $observaciones = 0;

        $role = false;

        if ($role) {
          //Do Nothing
        } else {
          $paises = array();
          foreach ($this->get('security.context')->getToken()->getUser()->getPais() as $pais) {
            $paises[$pais->getId()] = $pais->getId();
          }
          $entities->andWhere('p.id IN (:paises)');
          $entities->setParameter('paises',$paises);
        }

        foreach ($entities->getQuery()->getResult() as $entity) {

          $flagInspector = false;
          if ($eliminateInspector) {
            foreach($inspectores as $inspector) {
              if (md5(strtoupper(trim($entity->getInspector()))) == $inspector) $flagInspector = true;
            }
          }

          $flagPrevencionista = false;
          if ($eliminatePrevencionista) {
            foreach($prevencionistas as $prevencionista) {
              if (md5(strtoupper(trim($entity->getPrevencionista()))) == $prevencionista) $flagPrevencionista = true;
            }
          }

          if (strlen($request->request->get('grupo_id')) > 0) {
            if (array_search($entity->getCreatedBy(),$grupos) === false) continue;
          }

          if ($flagInspector == true) continue;
          if ($flagPrevencionista == true) continue;

          $ids[] = $entity->getId();
          $data[] = array(
             'id' => $entity->getId(),
             'fecha' => date_format($entity->getFecha(),'d-m-Y'),
             'empresa' => (is_object($entity->getEmpresa())) ? $entity->getEmpresa()->__toString() : "-- NO DEFINIDO -- ".get_class($entity->getEmpresa()),
             'contrato' => (is_object($entity->getContrato())) ? $entity->getContrato()->__toString() : "-- NO DEFINIDO --",
             'pais' => (is_object($entity->getPais())) ? $entity->getPais()->getNombre() : "-- NO DEFINIDO --",
             'inspector' => ($entity->getInspector() == null) ? "-- No especificado --" : $entity->getInspector(),
             'indice' => $entity->getIndice(),
          );

          $indice = $indice + $entity->getIndice();
          $observaciones = $observaciones + count($entity->getRegistrosDeObservacion());

        }

        return new JsonResponse(array('entities' => $data,'ids' => $ids, 'indice' => $indice, 'items' => $observaciones,'hits' => count($data)));

    }




    /**
     * Creates a new ObservacionDeComportamiento entity.
     *
     * @Route("/", name="observacion_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:ObservacionDeComportamiento:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ObservacionDeComportamiento();
        foreach ($this->getDoctrine()->getManager()->getRepository('BcTicCamIpalBundle:Observacion')->findAll() as $observacion) {
          //Creo un objeto RegistroDeObservacion y lo agrego a la Colleción de Entity
          $obj = new RegistroDeObservacion();
          $obj->setObservacion($observacion);
          $entity->addRegistrosDeObservacion($obj);
        }

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //Guardo el nombre del usuario en "Prevencionista"
            $entity->setPrevencionista($this->get('security.context')->getToken()->getUser()->getNombre());
            $entity->setCreatedBy($this->get('security.context')->getToken()->getUser()->getUsername());

            $entity->upload();
            $em->persist($entity);
            foreach ($entity->getRegistrosDeObservacion() as $registroDeObservacion) {
                $registroDeObservacion->setObservacionDeComportamiento($entity);
                $em->persist($registroDeObservacion);
            }

            //Itero los registros
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'La observación Nº '.$entity->getId().' ha sido ingresada satisfactoriamente.'
            );

            return $this->redirect($this->generateUrl('observaciones', array('id' => $entity->getId())));
        }

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Filter.
    *
    * @param ObservacionDeComportamiento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createFilterForm(ObservacionDeComportamiento $entity)
    {
        $form = $this->createForm(new ObservacionDeComportamientoFilterType(), $entity, array(
            'action' => $this->generateUrl('observacion_create'),
            'method' => 'POST',
        ));

        $form->add('button', 'button', array('label' => 'Buscar'));

        return $form;
    }

    /**
    * Creates a form to create a ObservacionDeComportamiento entity.
    *
    * @param ObservacionDeComportamiento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ObservacionDeComportamiento $entity)
    {

        //Al entity le pongo la fecha actual - ojo con la fecha del servidor y la zona horaria de PHP:
        $entity->setFecha(new \DateTime());
        $entity->setHora(new \DateTime());

        $form = $this->createForm(new ObservacionDeComportamientoType(), $entity, array(
            'action' => $this->generateUrl('observacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new ObservacionDeComportamiento entity.
     *
     * @Route("/new", name="observaciones_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction(Request $request)
    {
        $entity = new ObservacionDeComportamiento();
        foreach ($this->getDoctrine()->getManager()->getRepository('BcTicCamIpalBundle:Observacion')->findAll() as $observacion) {
          //Creo un objeto RegistroDeObservacion y lo agrego a la Colleción de Entity
          $obj = new RegistroDeObservacion();
          $obj->setObservacion($observacion);
          $entity->addRegistrosDeObservacion($obj);
        }

        $form   = $this->createCreateForm($entity);

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a view existing Observacion entity.
     *
     * @Route("/{id}.html", name="observaciones_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Observacion entity.');
        }

        return array(
            'entity'      => $entity
        );
    }


    /**
     * Displays a view existing Observacion entity.
     *
     * @Route("/chilectra/{id}.html", name="observaciones_show_chilectra")
     * @Method("GET")
     * @Template()
     */
    public function showChilectraAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Observacion entity.');
        }

        return array(
            'entity'      => $entity
        );
    }

    /**
     * Displays a view empty
     *
     * @Route("/observaciones/form.html", name="observaciones_show_form")
     * @Method("GET")
     * @Template()
     */
    public function showFormAction()
    {

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')
                           ->createQueryBuilder('o')
                           ->join('o.contrato','c')
                           ->join('o.pais','p')
                           ->join('c.servicio','srv')
                           ->join('o.empresa','em')
                           ->join('c.subGerencia','sgr')
                           ->join('sgr.gerencia','gr')
                           ->join('c.area','a')
                           ->join('c.mandante','ma')
                           ->where('o.id > 0')
                           ->orderBy('o.id', 'DESC')
                           ->setMaxResults(1)
                           ->getQuery()->getResult();


        return array(
            'entity' => $entities[0]
        );
    }


    /**
     * Displays a form to edit an existing ObservacionDeComportamiento entity.
     *
     * @Route("/edit/{id}", name="observaciones_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ObservacionDeComportamiento entity.');
        }

        $editForm = $this->createEditForm($entity);

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a ObservacionDeComportamiento entity.
    *
    * @param ObservacionDeComportamiento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ObservacionDeComportamiento $entity)
    {
        $form = $this->createForm(new ObservacionDeComportamientoType(), $entity, array(
            'action' => $this->generateUrl('observacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing ObservacionDeComportamiento entity.
     *
     * @Route("/{id}", name="observacion_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:ObservacionDeComportamiento:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ObservacionDeComportamiento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $entity->upload();
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'La observación Nº '.$entity->getId().' ha sido ingresada satisfactoriamente.'
            );

            return $this->redirect($this->generateUrl('observaciones', array('id' => $id)));
        }

        $format = (preg_match('/(android|blackberry|iphone|phone|playbook|mobile)/i', $request->headers->get('user-agent'))) ? "mobile" : "html"; //AL REVES

        return array(
            'format' => $format,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

      /**
     * Deletes a  entity.
     *
     * @Route("/delete/{id}/{token}", name="observacion_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {

        $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:ObservacionDeComportamiento')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Observacion entity.');
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

}
