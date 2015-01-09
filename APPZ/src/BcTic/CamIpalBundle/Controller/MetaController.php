<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Meta;
use BcTic\CamIpalBundle\Entity\MetaRango;
use BcTic\CamIpalBundle\Form\MetaType;
use BcTic\CamIpalBundle\Form\MetaRangoFilterType;

/**
 * Meta controller.
 *
 * @Route("/metas")
 */
class MetaController extends Controller
{

    /**
     * Lists all Metas entities.
     *
     * @Route("/index/{page}", name="metas", defaults={ "page" = 1})
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Meta')->findBy(
              array(),
              array('anno' => 'ASC','mes' => 'ASC'),
              25,
              25 * ($page - 1)
            );

        $csrf = $this->get('form.csrf_provider');

        return array(
            'page' => $page,       
            'entities' => $entities,
            'csrf' => $csrf,
        );
    }


    /**
     * Creates a new Meta entity.
     *
     * @Route("/", name="metas_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Meta:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Meta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('metas', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Meta entity.
    *
    * @param Meta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Meta $entity)
    {
        $form = $this->createForm(new MetaType(), $entity, array(
            'action' => $this->generateUrl('metas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Agregar'));

        return $form;
    }

    /**
     * Displays a form to create a new Meta entity.
     *
     * @Route("/new", name="metas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Meta();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Meta entity.
     *
     * @Route("/{id}/edit", name="metas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Meta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Meta entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
    * Creates a form to edit a Meta entity.
    *
    * @param Meta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Meta $entity)
    {
        $form = $this->createForm(new MetaType(), $entity, array(
            'action' => $this->generateUrl('metas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Meta entity.
     *
     * @Route("/{id}", name="metas_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Meta:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Meta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Meta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('metas', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }
 
    /**
     * Deletes a Meta entity.
     *
     * @Route("/delete/{id}/{token}", name="metas_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
        $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Meta')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Meta entity.');
        }

        if ($csrf->isCsrfTokenValid('entity'.$entity->getId(), $token)) {
            $em->remove($entity);
            try {
              $em->flush();
              $this->get('session')->getFlashBag()->add(
                'notice',
                'Los datos se borraron correctamente.'
              );
            } catch (\Doctrine\DBAL\DBALException $e) {
              $this->get('session')->getFlashBag()->add(
                'error',
                'Los datos no se pudieron borrar por que tiene otros datos relacionados.'
              );
            }
        }

        return $this->redirect($this->generateUrl('metas'));
    }

    /**
    * Creates a form to create a Filter.
    *
    * @param Encuesta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createFilterForm(MetaRango $entity)
    {
        $form = $this->createForm(new MetaRangoFilterType(), $entity, array(
            'action' => $this->generateUrl('metas_create'),
            'method' => 'POST',
        ));

        $form->add('button', 'button', array('label' => 'Buscar'));

        return $form;
    }    

    /**
     * Metas Dashboard
     *
     * @Route("/dashboard", name="metas_dashboard")
     * @Method("GET")
     * @Template()     
     */
    public function dashboardAction()
    {
  
      //Muestra el form y carga con Ajax el resto.
      $meta = new MetaRango();
      $meta->setAnnoDesde(date('Y'));
      $meta->setMesDesde(date('m'));
      $meta->setAnnoHasta(date('Y'));
      $meta->setMesHasta(12);
      $form = $this->createFilterForm($meta);

      return array(
        'filter' => $form->createView(),
        );

    }

    /**
     * Metas Dashboard
     *
     * @Route("/dashboard/results.html", name="metas_show_dashboard")
     * @Method("GET")
     * @Template()     
     */
    public function dashboardResultsAction()
    {
  
      $em = $this->getDoctrine()->getManager();  

      $sql = "SELECT UCASE(subgerencia) as SUBGERENCIA, count(*) as CANTIDAD, ROUND(SUM(ipal)/count(*),1) as INDICE FROM EncuestaProxy WHERE DATE_FORMAT(fecha,'%Y-%m-%d') BETWEEN '2014-01-01' AND '2014-12-01' GROUP BY subgerencia ORDER BY SUBGERENCIA;";

      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();

      $data = array();
      foreach($stmt->fetchAll() as $entity) {
        $meta = 0;
        $abiertas = 0;
        $data[] = array(
              'subgerencia' => $entity['SUBGERENCIA'],
              'cantidad' => $entity['CANTIDAD'],
              'indice' => $entity['INDICE'],
              'meta' => $meta,
              'cumplimiento' => ($meta > 0) ? round(100*($cantidad/$meta),0) : '--',
              'cantidad_abiertas' => $abiertas,
            );
      }

      return array('data' => $data);

    }



}
