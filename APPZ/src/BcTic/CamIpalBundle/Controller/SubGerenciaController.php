<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\SubGerencia;
use BcTic\CamIpalBundle\Form\SubGerenciaType;

use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * SubGerencia controller.
 *
 * @Route("/subgerencias")
 */
class SubGerenciaController extends Controller
{

    /**
     * Lists all SubGerencia entities.
     *
     * @Route("/index/{page}", name="subgerencias", defaults = { "page" = 1})
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

        $entities = $em->getRepository('BcTicCamIpalBundle:SubGerencia')
                    ->createQueryBuilder('sg')
                    ->innerJoin('sg.gerencia','g')
                    ->where('g.pais IN (:pais)')
                    ->setParameters(array('pais' => $paises))
                    ->setMaxResults(25)
                    ->setFirstResult(25 * ($page - 1))
                    ->getQuery()
                    ->getResult();

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
     * @Route("/data/index_all.json", name="subgerencias_index_json" )
     * @Method("GET")
     * @Template()
     */
    public function indexAllJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('BcTicCamIpalBundle:SubGerencia')
                           ->createQueryBuilder('sg')
                           ->join('sg.contratos','c')
                           ->join('c.empresas','e')
                           ->join('sg.gerencia','g')
                           ->join('g.pais','p')
                           ->where('c.visible = 1')
                           ->orderBy('sg.nombre', 'ASC');

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

        $response = new JsonResponse($data);
        $response->setSharedMaxAge(3600); //Cache 10 minutes
        return $response;

    }

    /**
     * Creates a new SubGerencia entity.
     *
     * @Route("/add", name="subgerencias_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:SubGerencia:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new SubGerencia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subgerencias', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a SubGerencia entity.
    *
    * @param SubGerencia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(SubGerencia $entity)
    {
        $form = $this->createForm(new SubGerenciaType(), $entity, array(
            'action' => $this->generateUrl('subgerencias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new SubGerencia entity.
     *
     * @Route("/new", name="subgerencias_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new SubGerencia();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing SubGerencia entity.
     *
     * @Route("/edit/{id}", name="subgerencias_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:SubGerencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubGerencia entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
    * Creates a form to edit a SubGerencia entity.
    *
    * @param SubGerencia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SubGerencia $entity)
    {
        $form = $this->createForm(new SubGerenciaType(), $entity, array(
            'action' => $this->generateUrl('subgerencias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing SubGerencia entity.
     *
     * @Route("/update/{id}", name="subgerencias_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:SubGerencia:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:SubGerencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubGerencia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('subgerencias', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }
    /**
     * Deletes a SubGerencia entity.
     *
     * @Route("/delete/{id}/{token}", name="subgerencias_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
      $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:SubGerencia')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find SubGerencia entity.');
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

        return $this->redirect($this->generateUrl('subgerencias'));
    }

}
