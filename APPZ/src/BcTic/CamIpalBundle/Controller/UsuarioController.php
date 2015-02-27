<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BcTic\CamIpalBundle\Entity\Usuario;
use BcTic\CamIpalBundle\Form\UsuarioType;
use BcTic\CamIpalBundle\Form\UsuarioPasswordType;

/**
 * Usuario controller.
 *
 * @Route("/usuario")
 */
class UsuarioController extends Controller
{

     /**
     * Lists all Usuario entities.
     *
     * @Route("/index/{page}", name="usuarios", defaults={ "page" = 1 })
     * @Method("GET")
     * @Template()
     */
    public function indexAction($page)
    {
        return array('page' => $page);
    }

     /**
     * Search Usuario entities.
     *
     * @Route("/search/{page}/key/{key}/index.html", name="usuarios_search", defaults={"page" = 1, "key" = "-1"})
     * @Method("GET")
     * @Template("BcTicCamIpalBundle:Usuario:results.html.twig")
     */
    public function searchAction($page,$key)
    {

        $em = $this->getDoctrine()->getManager();

        $key = ($key == -1) ? " " : $key;

        $entities = $em->getRepository('BcTicCamIpalBundle:Usuario')
                    ->createQueryBuilder('u')
                    ->innerJoin('u.pais','p')
                    ->where('u.nombre LIKE :key0 OR u.username LIKE :key1 OR p.nombre LIKE :key2')
                    ->andWhere('p.id = :pais')
                    ->setParameters(array('key0' => '%'.$key.'%'
                                         ,'key1' => '%'.$key.'%'
                                         ,'key2' => '%'.$key.'%'
                                         ,'pais' => $this->get('security.context')->getToken()->getUser()->getPais()->getId()
                                         ))
                    ->orderBy('u.nombre','ASC')
                    ->setMaxResults(25)
                    ->setFirstResult(25 * ($page - 1))
                    ->getQuery();               

        $csrf = $this->get('form.csrf_provider');

        return array(
            'page' => $page,
            'key' => $key,
            'entities' => $entities->getResult(),
            'csrf' => $csrf,
        ); 
        
    }

    /**
     * Creates a new Usuario entity.
     *
     * @Route("/", name="usuario_create")
     * @Method("POST")
     * @Template("BcTicCamIpalBundle:Usuario:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Usuario();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($entity);
            $pass = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setPassword($pass);

            $em->persist($entity);
            $em->flush();

           $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            return $this->redirect($this->generateUrl('usuarios', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Usuario entity.
    *
    * @param Usuario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Usuario $entity)
    {
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action' => $this->generateUrl('usuario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new Usuario entity.
     *
     * @Route("/new", name="usuarios_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Usuario();
        $entity->setSalt(md5(rand().rand().rand()));
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     * @Route("/edit/{id}", name="usuarios_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }


    /**
     * Displays a form to edit an existing Usuario entity.
     *
     * @Route("/password", name="usuarios_password")
     * @Method("GET")
     * @Template()
     */
    public function passwordAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Usuario')->find($this->get('security.context')->getToken()->getUser()->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $this->createForm(new UsuarioPasswordType(), $entity, array(
            'action' => $this->generateUrl('usuario_update_password'),
            'method' => 'PUT',
        ));

       $editForm->add('submit', 'submit', array('label' => 'Guardar'));

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

        /**
     * Edits an existing Usuario entity.
     *
     * @Route("/update_password", name="usuario_update_password")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Usuario:password.html.twig")
     */
    public function updatePasswordAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Usuario')->find($this->get('security.context')->getToken()->getUser()->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $editForm = $this->createForm(new UsuarioPasswordType(), $entity, array(
            'action' => $this->generateUrl('usuario_update_password'),
            'method' => 'PUT',
        ));

        $editForm->add('submit', 'submit', array('label' => 'Guardar')); 

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($entity);
            $pass = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setPassword($pass);

            $em->persist($entity);

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            $em->flush();

            return $this->redirect($this->generateUrl('welcome'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Usuario entity.
    *
    * @param Usuario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Usuario $entity)
    {
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action' => $this->generateUrl('usuario_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Usuario entity.
     *
     * @Route("/{id}", name="usuario_update")
     * @Method("PUT")
     * @Template("BcTicCamIpalBundle:Usuario:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BcTicCamIpalBundle:Usuario')->find($id);

        $password = $entity->getPassword();
        $salt = $entity->getSalt();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            if (strlen($entity->getPassword()) > 0) {
              //Cambio el password
              $factory = $this->get('security.encoder_factory');
              $encoder = $factory->getEncoder($entity);
              $pass = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
              $entity->setPassword($pass);

            } else {

              $entity->setPassword($password);
              $entity->setSalt($salt);

            }

            $em->persist($entity);

            $this->get('session')->getFlashBag()->add(
              'notice',
              'Los datos se grabaron correctamente.'
            );

            $em->flush();

            return $this->redirect($this->generateUrl('usuarios', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
     /**
     * Deletes a Usuario entity.
     *
     * @Route("/delete/{id}/{token}", name="usuarios_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id, $token)
    {

        $csrf = $this->get('form.csrf_provider');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BcTicCamIpalBundle:Usuario')->find($id);

        if (!$entity) {
              throw $this->createNotFoundException('Unable to find Usuario entity.');
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


        return $this->redirect($this->generateUrl('usuarios'));
    }

}
