<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Actividad;
use BcTic\CamIpalBundle\Form\ActividadType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Actividad controller.
 *
 * @Route("/actividades")
 */
class ActividadController extends Controller
{

    /**
     * Lists all Actividad entities.
     *
     * @Route("/index/{page}", name="actividades", defaults={ "page" = 1 })
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Actividad')
                           ->createQueryBuilder('a')
                           ->join('a.empresa','e')
                           ->join('e.pais','p')
                           ->where('a.visible = 1 AND e.visible =  1')
                           ->setMaxResults(25)
                           ->setFirstResult(25 * ($page - 1))
                           ->orderBy('e.nombre', 'ASC')
                           ->addOrderBy('a.nombre', 'ASC');

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


        $csrf = $this->get('form.csrf_provider');

        return array(
            'page' => $page,
            'entities' => $entities->getQuery()->getResult(),
            'csrf' => $csrf,
        );
    }


        /**
         * Lists all Actividad entities
         *
         * @Route("/data/index_actividades_all.json", name="actividades_index_json") )
         * @Method("POST")
         * @Template()
         */
        public function indexActividadesAllJsonAction(Request $request)
        {
            $em = $this->getDoctrine()->getManager();


            $entities = $em->getRepository('BcTicCamIpalBundle:Actividad')
                               ->createQueryBuilder('a')
                               ->join('a.empresa','e')
                               ->join('e.pais','p')
                               ->where('e.visible = 1')
                               ->orderBy('a.nombre', 'ASC');

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
     * Lists all Actividad entities By Empresa
     *
     * @Route("/data/index.json", name="actividades_json", requirements={"empresa_id" = "\d+"} ) )
     * @Method("POST")
     * @Template()
     */
    public function indexActividadesJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('BcTicCamIpalBundle:Actividad')
                           ->createQueryBuilder('a')
                           ->join('a.empresa','e')
                           ->join('e.pais','p')
                           ->where('e.visible = 1')
                           ->orderBy('a.nombre', 'ASC');

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

        $entities->andWhere('e.id IN ('.$request->request->get('empresa_id',0).')');

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
     * Creates a new Actividad entity.
     *
     * @Route("/add", name="actividades_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Actividad:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Actividad();
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

            return $this->redirect($this->generateUrl('actividades', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Actividad entity.
    *
    * @param Actividad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Actividad $entity)
    {
        $form = $this->createForm(new ActividadType(), $entity, array(
            'action' => $this->generateUrl('actividades_create'),
            'method' => 'POST',
        ));

        $role = false;

        if ($role) {
          //Do Nothing
        } else {
          $entities;
          $paises = array();
          foreach ($this->get('security.context')->getToken()->getUser()->getPais() as $pais) {
            $paises[$pais->getId()] = $pais->getId();
          }
        }

        $form->add('empresa','entity', array(
              'class' => 'BcTicCamIpalBundle:Empresa',
              'query_builder' => function(EntityRepository $er) use ($paises) {
                return $er->createQueryBuilder('e')
                       ->join('e.pais','p')
                       ->where('e.visible = :visible')
                       ->andWhere('p.id IN (:paises)')
                       ->setParameters(array('visible' => 1,'paises' => $paises))
                       ->orderBy('e.nombre', 'ASC');
                }
            ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Actividad entity.
     *
     * @Route("/new", name="actividades_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Actividad();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Actividad entity.
     *
     * @Route("/edit/{id}", name="actividades_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Actividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actividad entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Actividad entity.
    *
    * @param Actividad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Actividad $entity)
    {
        $form = $this->createForm(new ActividadType(), $entity, array(
            'action' => $this->generateUrl('actividades_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $role = false;

        if ($role) {
          //Do Nothing
        } else {
          $entities;
          $paises = array();
          foreach ($this->get('security.context')->getToken()->getUser()->getPais() as $pais) {
            $paises[$pais->getId()] = $pais->getId();
          }
        }

        $form->add('empresa','entity', array(
              'class' => 'BcTicCamIpalBundle:Empresa',
              'query_builder' => function(EntityRepository $er) use ($paises) {
                return $er->createQueryBuilder('e')
                       ->join('e.pais','p')
                       ->where('e.visible = :visible')
                       ->andWhere('p.id IN (:paises)')
                       ->setParameters(array('visible' => 1,'paises' => $paises))
                       ->orderBy('e.nombre', 'ASC');
                }
            ));


        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Actividad entity.
     *
     * @Route("/update/{id}", name="actividades_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Actividad:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Actividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actividad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('actividades', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

     /**
     * Deletes a Area entity.
     *
     * @Route("/delete/{id}/{token}", name="actividades_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {

        $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Actividad')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Actividad entity.');
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

        return $this->redirect($this->generateUrl('actividades'));
    }

}
