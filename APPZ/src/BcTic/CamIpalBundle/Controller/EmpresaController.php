<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Empresa;
use BcTic\CamIpalBundle\Form\EmpresaType;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Empresa controller.
 *
 * @Route("/empresas")
 */
class EmpresaController extends Controller
{

    /**
     * Lists all Empresa entities.
     *
     * @Route("/index/{page}", name="empresas", defaults={ "page" = 1 })
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

        $entities = $em->getRepository('BcTicCamIpalBundle:Empresa')->findBy(
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
     * Lists all Empresa entities By Contrato
     *
     * @Route("/data/index_empresas_all.json", name="empresas_index_json" )
     * @Method("GET")
     * @Template()
     */
    public function indexEmpresasAllJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('BcTicCamIpalBundle:Empresa')
                           ->createQueryBuilder('e')
                           ->join('e.contratos','c')
                           ->join('e.pais','p')
                           ->where('e.visible = 1')
                           ->orderBy('p.nombre', 'ASC')
                           ->addOrderBy('e.nombre', 'ASC');

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
             'nombre' => strtoupper($entity->__toString())
          );
        }

        $response = new JsonResponse($data);
        $response->setSharedMaxAge(600); //Cache 10 minutes
        return $response;

    }

    /**
     * Creates a new Empresa entity.
     *
     * @Route("/add", name="empresas_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Empresa:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Empresa();
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

            return $this->redirect($this->generateUrl('empresas', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Empresa entity.
    *
    * @param Empresa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Empresa $entity)
    {
        $form = $this->createForm(new EmpresaType(), $entity, array(
            'action' => $this->generateUrl('empresas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Empresa entity.
     *
     * @Route("/new", name="empresas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Empresa();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Empresa entity.
     *
     * @Route("/edit/{id}", name="empresas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Empresa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empresa entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Empresa entity.
    *
    * @param Empresa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Empresa $entity)
    {
        $form = $this->createForm(new EmpresaType(), $entity, array(
            'action' => $this->generateUrl('empresas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Empresa entity.
     *
     * @Route("/update/{id}", name="empresas_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Empresa:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Empresa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empresa entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('empresas', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

     /**
     * Deletes a Area entity.
     *
     * @Route("/delete/{id}/{token}", name="empresas_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {

        $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Empresa')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Empresa entity.');
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

        return $this->redirect($this->generateUrl('empresas'));
    }

}
