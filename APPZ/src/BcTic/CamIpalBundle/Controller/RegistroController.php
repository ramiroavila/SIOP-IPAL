<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Registro;
use BcTic\CamIpalBundle\Form\RegistroType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Registro controller.
 *
 * @Route("/registros")
 */
class RegistroController extends Controller
{

    /**
     * Lists all Registro entities.
     *
     * @Route("/index/{page}", name="registros", defaults={ "page" = 1})
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Registro')->findBy(
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
     * Lists all Inspectores by Query
     *
     * @Route("/data/inspectores.json", name="registros_inspectores_json")
     * @Method("POST")
     * @Template()
     */
    public function indexInspectorJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Registro')
                           ->createQueryBuilder('r')
                           ->where('r.visible = 1')
                           ->join('r.roles','rol')
                           ->where('rol.nombre = :rol')
                           ->andWhere('r.nombre LIKE :query')
                           ->setParameters(array('rol' => 'INSPECTOR','query' => '%'.$request->request->get('query','').'%'))
                           ->orderBy('r.nombre', 'ASC')
                           ->getQuery();

        $data = array();

        foreach ($entities->getResult() as $entity) {
          $data[] = array(
             'id' => $entity->getId(),
             'nombre' => ucwords(strtolower($entity->__toString())), //ToString
          );
        }

        //AHora todos los usuarios que sean Inspectores

        $entities = $em->getRepository('BcTicCamIpalBundle:Usuario')
                           ->createQueryBuilder('u')
                           ->join('u.roles','rol')
                           ->join('u.pais','p')
                           ->where('rol.nombre = :rol AND u.visible = 1')
                           ->andWhere('u.nombre LIKE :query')
                           ->setParameters(array('rol' => 'INSPECTOR','query' => '%'.$request->request->get('query','').'%'))
                           ->orderBy('u.nombre', 'ASC');

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

        foreach ($entities->getQuery()->getResult() as $entity) {
          $data[] = array(
             'id' => $entity->getId(),
             'nombre' => ucwords(strtolower($entity->__toString())), //ToString
          );
        }


        return new JsonResponse($data);

    }

    /**
     * Lists all Prevencionistas by Query
     *
     * @Route("/data/prevencionistas.json", name="registros_prevencionistas_json")
     * @Method("POST")
     * @Template()
     */
    public function indexPrevencionistaJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Registro')
                           ->createQueryBuilder('r')
                           ->where('r.visible = 1')
                           ->join('r.roles','rol')
                           ->where('rol.nombre = :rol')
                           ->andWhere('r.nombre LIKE :query')
                           ->setParameters(array('rol' => 'PREVENCIONISTA','query' => '%'.$request->request->get('query','').'%'))
                           ->orderBy('r.nombre', 'ASC')
                           ->getQuery();

        $data = array();

        foreach ($entities->getResult() as $entity) {
          $data[] = array(
             'id' => $entity->getId(),
             'nombre' => ucwords(strtolower($entity->__toString())), //ToString
          );
        }

        //AHora todos los usuarios que sean Inspectores

        $entities = $em->getRepository('BcTicCamIpalBundle:Usuario')
                           ->createQueryBuilder('u')
                           ->join('u.roles','rol')
                           ->join('u.pais','p')
                           ->where('rol.nombre = :rol AND u.visible = 1')
                           ->andWhere('u.nombre LIKE :query')
                           ->setParameters(array('rol' => 'PREVENCIONISTA','query' => '%'.$request->request->get('query','').'%'))
                           ->orderBy('u.nombre', 'ASC');

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


        foreach ($entities->getQuery()->getResult() as $entity) {
          $data[] = array(
             'id' => $entity->getId(),
             'nombre' => ucwords(strtolower($entity->__toString())), //ToString
          );
        }


        return new JsonResponse($data);

    }

    /**
     * Creates a new Registro entity.
     *
     * @Route("/add", name="registros_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Registro:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Registro();
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

            return $this->redirect($this->generateUrl('registros', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Registro entity.
    *
    * @param Registro $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Registro $entity)
    {
        $form = $this->createForm(new RegistroType(), $entity, array(
            'action' => $this->generateUrl('registros_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Registro entity.
     *
     * @Route("/new", name="registros_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Registro();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Registro entity.
     *
     * @Route("/edit/{id}", name="registros_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Registro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Registro entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Registro entity.
    *
    * @param Registro $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Registro $entity)
    {
        $form = $this->createForm(new RegistroType(), $entity, array(
            'action' => $this->generateUrl('registros_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Registro entity.
     *
     * @Route("/update/{id}", name="registros_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Registro:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Registro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Registro entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('registros', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a Registro entity.
     *
     * @Route("/delete/{id}/{token}", name="registros_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
         $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Registro')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Registro entity.');
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

        return $this->redirect($this->generateUrl('registros'));
    }

}
