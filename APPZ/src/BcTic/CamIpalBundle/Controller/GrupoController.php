<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Grupo;
use BcTic\CamIpalBundle\Form\GrupoType;

/**
 * Grupo controller.
 *
 * @Route("/grupos")
 */
class GrupoController extends Controller
{

    /**
     * Lists all Grupo entities.
     *
     * @Route("/index/{page}", name="grupos", defaults = { "page" = 1})     
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Grupo')->findBy(
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
     * Creates a new Grupo entity.
     *
     * @Route("/", name="grupos_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Grupo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Grupo();
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

            return $this->redirect($this->generateUrl('grupos', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Grupo entity.
    *
    * @param Grupo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Grupo $entity)
    {
        $form = $this->createForm(new GrupoType(), $entity, array(
            'action' => $this->generateUrl('grupos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;

    }

    /**
     * Displays a form to create a new Grupo entity.
     *
     * @Route("/new", name="grupos_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Grupo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }


    /**
     * Displays a form to edit an existing Grupo entity.
     *
     * @Route("/edit/{id}", name="grupos_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Grupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gerencia entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
    * Creates a form to edit a Grupo entity.
    *
    * @param Grupo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Grupo $entity)
    {
        $form = $this->createForm(new GrupoType(), $entity, array(
            'action' => $this->generateUrl('grupos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Grupo entity.
     *
     * @Route("/{id}", name="grupos_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Grupo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Grupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Grupo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('grupos', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
     * Deletes a Gerencia entity.
     *
     * @Route("/delete/{id}/{token}", name="grupos_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
      $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Grupo')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Grupo entity.');
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

        return $this->redirect($this->generateUrl('grupos'));
    }

}
