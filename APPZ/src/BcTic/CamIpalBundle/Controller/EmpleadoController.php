<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Empleado;
use BcTic\CamIpalBundle\Form\EmpleadoType;
use Symfony\Component\HttpFoundation\JsonResponse;



/**
 * Empleado controller.
 *
 * @Route("/empleados")
 */
class EmpleadoController extends Controller
{

    /**
     * Lists all Empleado entities.
     *
     * @Route("/index/{page}", name="empleados", defaults = { "page" = 1})
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Empleado')->findBy(
              array(),
              array('nombre' => 'ASC'),
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
     * Creates a new Empleado entity.
     *
     * @Route("/", name="empleados_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Empleado:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Empleado();
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

            return $this->redirect($this->generateUrl('empleados', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Empleado entity.
    *
    * @param Empleado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Empleado $entity)
    {
        $form = $this->createForm(new EmpleadoType(), $entity, array(
            'action' => $this->generateUrl('empleados_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;

    }

    /**
     * Displays a form to create a new Empleado entity.
     *
     * @Route("/new", name="empleados_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Empleado();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }


    /**
     * Displays a form to edit an existing Empleado entity.
     *
     * @Route("/edit/{id}", name="empleados_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Empleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empleado entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
    * Creates a form to edit a Empleado entity.
    *
    * @param Empleado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Empleado $entity)
    {
        $form = $this->createForm(new EmpleadoType(), $entity, array(
            'action' => $this->generateUrl('empleados_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Empleado entity.
     *
     * @Route("/{id}", name="empleados_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Empleado:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Empleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empleado entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('empleados', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
     * Deletes a Gerencia entity.
     *
     * @Route("/delete/{id}/{token}", name="empleados_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
      $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Empleado')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Empleado entity.');
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

        return $this->redirect($this->generateUrl('empleados'));
    }

    /**
     * Lists all Empleados by Query
     *
     * @Route("/data/empleados.json", name="registros_empleados_json")
     * @Method("POST")
     * @Template()
     */
    public function indexEmpleadosJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Empleado')
                           ->createQueryBuilder('r')
                           ->where('p.id = :pais AND (  (r.rut LIKE :query) OR (r.nombre LIKE :query) ) ')
                           ->orderBy('r.nombre', 'ASC')
                           ->join('r.pais','p')
                           ->setParameters(
                             array(
                              'pais' => $request->get('pais'),
                              'query' => '%'.$request->get('query').'%'
                             )
                          )
                           ->getQuery();

        $data = array();

        foreach ($entities->getResult() as $entity) {
          $data[] = array(
             'id' => $entity->getId(),
             'nombre' => ucwords(strtolower($entity->__toString())), //ToString
          );
        }

        return new JsonResponse($data);

    }

    /**
     * Lists all Empleados by Query
     *
     * @Route("/data/supervisores.json", name="registros_supervisores_json")
     * @Method("POST")
     * @Template()
     */
    public function indexSupervisoresJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Empleado')
                           ->createQueryBuilder('r')
                           ->where(' (p.id = :pais) AND (  (r.rut LIKE :query) OR (r.nombre LIKE :query) ) ')
                           ->orderBy('r.nombre', 'ASC')
                           ->join('r.pais','p')
                           ->setParameters(array('pais' => $request->get('pais'), 'query' => '%'.$request->get('query').'%'))
                           ->getQuery();

        $data = array();

        foreach ($entities->getResult() as $entity) {
          $data[] = array(
             'id' => $entity->getId(),
             'nombre' => ucwords(strtolower($entity->__toString())), //ToString
          );
        }

        return new JsonResponse($data);

    }

}
