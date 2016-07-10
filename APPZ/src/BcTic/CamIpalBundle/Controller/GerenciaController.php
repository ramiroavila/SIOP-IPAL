<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Gerencia;
use BcTic\CamIpalBundle\Form\GerenciaType;

use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Gerencia controller.
 *
 * @Route("/gerencias")
 */
class GerenciaController extends Controller
{

    /**
     * Lists all Gerencia entities.
     *
     * @Route("/index/{page}", name="gerencias", defaults = { "page" = 1})
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        $paises = array();
        foreach ($this->get('security.context')->getToken()->getUser()->getPais() as $pais) {
          $paises[$pais->getId()] = $pais->getId();
        }

        $entities = $em->getRepository('BcTicCamIpalBundle:Gerencia')->findBy(
              array('pais' => $paises),
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
     * @Route("/data/index_all.json", name="gerencias_index_json" )
     * @Method("POST")
     * @Template()
     */
    public function indexAllJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('BcTicCamIpalBundle:Gerencia')
                           ->createQueryBuilder('g')
                           ->join('g.subGerencias','sg')
                           ->join('sg.contratos','c')
                           ->join('c.empresas','e')
                           ->join('g.pais','p')
                           ->where('c.visible = 1')
                           ->orderBy('g.nombre', 'ASC');

        $role = false;

        if ($role) {
          //Do Nothing
        } else {
          $entities->andWhere('p.id IN (:paises)');
          $paises = array();
          foreach ($this->get('security.context')->getToken()->getUser()->getPais() as $pais) {
            $paises[$pais->getId()] = $pais->getId();
          }
          $entities->setParameter(':paises', $paises);
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
     * Creates a new Gerencia entity.
     *
     * @Route("/add", name="gerencias_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Gerencia:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Gerencia();
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

            return $this->redirect($this->generateUrl('gerencias', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Gerencia entity.
    *
    * @param Gerencia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Gerencia $entity)
    {
        $form = $this->createForm(new GerenciaType(), $entity, array(
            'action' => $this->generateUrl('gerencias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Gerencia entity.
     *
     * @Route("/new", name="gerencias_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Gerencia();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Gerencia entity.
     *
     * @Route("/edit/{id}", name="gerencias_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Gerencia')->find($id);

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
    * Creates a form to edit a Gerencia entity.
    *
    * @param Gerencia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Gerencia $entity)
    {
        $form = $this->createForm(new GerenciaType(), $entity, array(
            'action' => $this->generateUrl('gerencias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Gerencia entity.
     *
     * @Route("/update/{id}", name="gerencias_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Gerencia:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Gerencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gerencia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('gerencias', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
     * Deletes a Gerencia entity.
     *
     * @Route("/delete/{id}/{token}", name="gerencias_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
      $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Gerencia')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Gerencia entity.');
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

        return $this->redirect($this->generateUrl('gerencias'));
    }

}
