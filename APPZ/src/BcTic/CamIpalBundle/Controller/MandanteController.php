<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Mandante;
use BcTic\CamIpalBundle\Form\MandanteType;

use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Mandante controller.
 *
 * @Route("/mandantes")
 */
class MandanteController extends Controller
{

    /**
     * Lists all Mandante entities.
     *
     * @Route("/index/{page}", name="mandantes", defaults={ "page" = 1})
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {

      $paises = array();
      foreach ($this->get('security.context')->getToken()->getUser()->getPais() as $pais) {
        $paises[$pais->getId()] = $pais->getId();
      }
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Mandante')->findBy(
              array('pais' => $paises),
              array('name' => 'ASC'),
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
     * @Route("/data/index_all.json", name="mandantes_index_json" )
     * @Method("POST")
     * @Template()
     */
    public function indexAllJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('BcTicCamIpalBundle:Mandante')
                           ->createQueryBuilder('m')
                           ->join('m.contratos','c')
                           ->join('c.empresas','e')
                           ->join('m.pais','p')
                           ->where('c.visible = 1')
                           ->orderBy('m.name', 'ASC');

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
        $response->setSharedMaxAge(3600); //Cache 1 hour
        return $response;

    }


    /**
     * Creates a new Mandante entity.
     *
     * @Route("/add", name="mandantes_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Mandante:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Mandante();
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

            return $this->redirect($this->generateUrl('mandantes', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Mandante entity.
    *
    * @param Mandante $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Mandante $entity)
    {
        $form = $this->createForm(new MandanteType(), $entity, array(
            'action' => $this->generateUrl('mandantes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Mandante entity.
     *
     * @Route("/new", name="mandantes_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Mandante();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Mandante entity.
     *
     * @Route("/edit/{id}", name="mandantes_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Mandante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mandante entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }

    /**
    * Creates a form to edit a Mandante entity.
    *
    * @param Mandante $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Mandante $entity)
    {
        $form = $this->createForm(new MandanteType(), $entity, array(
            'action' => $this->generateUrl('mandantes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Mandante entity.
     *
     * @Route("/update/{id}", name="mandantes_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Mandante:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Mandante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mandante entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('mandantes', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        );
    }
    /**
     * Deletes a Mandante entity.
     *
     * @Route("/delete/{id}/{token}", name="mandantes_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
        $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Mandante')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Mandante entity.');
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

        return $this->redirect($this->generateUrl('mandantes'));
    }

}
