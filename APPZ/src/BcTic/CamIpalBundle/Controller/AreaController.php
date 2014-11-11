<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Area;
use BcTic\CamIpalBundle\Form\AreaType;

use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Area controller.
 *
 * @Route("/areas")
 */
class AreaController extends Controller
{

    /**
     * Lists all Area entities.
     *
     * @Route("/index/{page}", name="areas", defaults={ "page" = 1 })
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('BcTicCamIpalBundle:Area')->findBy(
              array('pais' => $this->get('security.context')->getToken()->getUser()->getPais()->getId()),
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
     * Lists all Entities
     *
     * @Route("/data/index_all.json", name="areas_index_json" )
     * @Method("POST")
     * @Template()
     */
    public function indexAllJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('BcTicCamIpalBundle:Area')
                           ->createQueryBuilder('a')
                           ->join('a.contratos','c')
                           ->join('c.empresas','e')
                           ->join('a.pais','p')
                           ->where('c.visible = 1')
                           ->orderBy('a.nombre', 'ASC');

        $role = false;

        if ($role) {
          //Do Nothing
        } else {
          $entities->andWhere('p.id = '.$this->get('security.context')->getToken()->getUser()->getPais()->getId());
        }

        $data = array();

        foreach ($entities->getQuery()->getResult() as $entity) {
          $data[] = array(
             'id' => $entity->getId(),
             'nombre' => $entity->__toString()
          );
        }
      
        return new JsonResponse($data);

    }   

    /**
     * Creates a new Area entity.
     *
     * @Route("/add", name="areas_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Area:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Area();
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

            return $this->redirect($this->generateUrl('areas', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Area entity.
    *
    * @param Area $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Area $entity)
    {
        $form = $this->createForm(new AreaType(), $entity, array(
            'action' => $this->generateUrl('areas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Area entity.
     *
     * @Route("/new", name="areas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Area();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Area entity.
     *
     * @Route("/edit/{id}", name="areas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Area')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Area entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
    * Creates a form to edit a Area entity.
    *
    * @param Area $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Area $entity)
    {
        $form = $this->createForm(new AreaType(), $entity, array(
            'action' => $this->generateUrl('areas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Area entity.
     *
     * @Route("/update/{id}", name="areas_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Area:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Area')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Area entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('areas', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a Area entity.
     *
     * @Route("/delete/{id}/{token}", name="areas_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
       $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Area')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Area entity.');
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

        return $this->redirect($this->generateUrl('areas'));
    }

}
 