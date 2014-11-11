<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Contrato;
use BcTic\CamIpalBundle\Form\ContratoType;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Contrato controller.
 *
 * @Route("/contratos")
 */
class ContratoController extends Controller
{

    /**
     * Lists all Contrato entities.
     *
     * @Route("/index/{page}", name="contratos", defaults={ "page" = 1})
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Contrato')
                           ->createQueryBuilder('c')
                           ->join('c.pais','p')
                           ->where('c.visible = 1')
                           ->setMaxResults(25)
                           ->setFirstResult(25 * ($page - 1))
                           ->orderBy('c.numero', 'ASC');

        $role = false;

        if ($role) {
          //Do Nothing
        } else {
          $entities->andWhere('p.id = '.$this->get('security.context')->getToken()->getUser()->getPais()->getId());
        }

        $csrf = $this->get('form.csrf_provider');

        return array(
            'page' => $page,       
            'entities' => $entities->getQuery()->getResult(),
            'csrf' => $csrf,
        );

    }

    /**
     * Lists all Contrato entities By Empresa
     *
     * @Route("/data/index.json", name="contratos_json", requirements={"empresa_id" = "\d+"} )
     * @Method("POST")
     * @Template()
     */
    public function indexJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('BcTicCamIpalBundle:Contrato')
                           ->createQueryBuilder('c')
                           ->join('c.pais','p')
                           ->join('c.empresas','e')
                           ->where('c.visible = 1')
                           ->orderBy('c.numero', 'ASC');

        $role = false;

        if ($role) {
          //Do Nothing
        } else {
          $entities->andWhere('p.id = '.$this->get('security.context')->getToken()->getUser()->getPais()->getId());
        }

        $entities->andWhere('e.id IN ('.$request->request->get('empresa_id',0).')');

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
     * Lists all Contrato entities By Empresa
     *
     * @Route("/data/index_all.json", name="contratos_index_json" )
     * @Method("POST")
     * @Template()
     */
    public function indexAllJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities = $em->getRepository('BcTicCamIpalBundle:Contrato')
                           ->createQueryBuilder('c')
                           ->join('c.pais','p')
                           ->where('c.visible = 1')
                           ->orderBy('c.numero', 'ASC');

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
     * List a Contrato 
     *
     * @Route("/data/show.json", name="contrato_json", requirements={"id" = "\d+"} )
     * @Method("POST")
     * @Template()
     */
    public function showJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Contrato')
                           ->find($request->request->get('id'));

        if (!$entity) return new JsonResponse(array());

        $data = array(
             'id' => $entity->getId(),
             'nombre' => $entity->__toString(), //ToSTring
             'empresas' => $entity->getEmpresas(),
             'area' => $entity->getArea()->getId(),
             'servicio' => $entity->getServicio()->getId(),
             'subgerencia' => $entity->getSubGerencia()->getId(),
             'gerencia' => $entity->getSubGerencia()->getGerencia()->getId(),
             'mandante' => $entity->getMandante()->getId(),
             'subcontrato' => $entity->getSubcontrato()
          );  
      
        return new JsonResponse($data);

    }

    /**
     * Creates a new Contrato entity.
     *
     * @Route("/add", name="contratos_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Contrato:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Contrato();
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

            return $this->redirect($this->generateUrl('contratos', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Contrato entity.
    *
    * @param Contrato $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Contrato $entity)
    {
        $form = $this->createForm(new ContratoType(), $entity, array(
            'action' => $this->generateUrl('contratos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Contrato entity.
     *
     * @Route("/new", name="contratos_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Contrato();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }


    /**
     * Displays a form to edit an existing Contrato entity.
     *
     * @Route("/edit/{id}", name="contratos_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Contrato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrato entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Contrato entity.
    *
    * @param Contrato $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contrato $entity)
    {
        $form = $this->createForm(new ContratoType(), $entity, array(
            'action' => $this->generateUrl('contratos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Contrato entity.
     *
     * @Route("/update/{id}", name="contratos_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Contrato:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Contrato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrato entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('contratos', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a Contrato entity.
     *
     * @Route("/delete/{id}/{token}", name="contratos_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {
       $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Contrato')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Contrato entity.');
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

        return $this->redirect($this->generateUrl('contratos'));
    }

    
}
