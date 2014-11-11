<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text',array('label' => 'Nombre'))
            ->add('username', 'text',array('label' => 'Usuario'))
            ->add('password', 'repeated', array(
                    'first_name'  => 'password',
                    'second_name' => 'repetir_password',
                    'type'        => 'password'))
            ->add('pais' ,'entity', array(
                  'required' =>true,
                  'multiple' => false,
                  'class' => 'BcTicCamIpalBundle:Pais',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                           ->orderBy('p.nombre', 'ASC');
                    })
            )            
            ->add('roles' ,'entity', array(
                  'required' =>true,
                  'multiple' => true,
                  'class' => 'BcTicCamIpalBundle:Rol',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.nombre LIKE :role OR r.nombre LIKE :role_inspector OR r.nombre LIKE :role_prevencionista')
                           ->setParameters(array('role' => 'ROLE_%', 'role_inspector' => 'INSPECTOR', 'role_prevencionista' => 'PREVENCIONISTA'))
                           ->orderBy('r.nombre', 'DESC');
                    })
            )
            ->add('salt','hidden')
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BcTic\CamIpalBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bctic_camipalbundle_usuario';
    }
}
