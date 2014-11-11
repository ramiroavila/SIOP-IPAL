<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\SurveyType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ObservacionDeComportamientoFilterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('empresa','entity', array(
                  'class' => 'BcTicCamIpalBundle:Empresa',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '- TODAS LAS EMPRESAS -',
                   'empty_data' => "",
                ))
            ->add('mandante','entity', array(
                  'class' => 'BcTicCamIpalBundle:Mandante',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.name', 'ASC');
                    },
                   'empty_value' => '- TODOS LOS MANDANTES -',
                   'empty_data' => "",
                ))
            ->add('gerencia','entity', array(
                  'class' => 'BcTicCamIpalBundle:Gerencia',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '- TODAS LAS GERENCIAS -',
                   'empty_data' => "",
                ))
             ->add('subGerencia','entity', array('label' => 'Sub G.',
                  'class' => 'BcTicCamIpalBundle:SubGerencia',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '- TODAS LAS SUB GERENCIAS -',
                   'empty_data' => "",
                ))           
             ->add('area','entity', array(
                  'class' => 'BcTicCamIpalBundle:Area',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '- TODAS LAS AREAS -',
                   'empty_data' => "",
                )) 
             ->add('contrato','entity', array(
                  'class' => 'BcTicCamIpalBundle:Contrato',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.numero', 'ASC');
                    },
                   'empty_value' => '- TODOS LOS CONTRATOS -',
                   'empty_data' => "",
                )) 
             ->add('servicio','entity', array(
                  'class' => 'BcTicCamIpalBundle:Servicio',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '- TODOS LOS SERVICIOS -',
                   'empty_data' => "",
                ))              
             ->add('inspector','choice', array(
                       'label' => 'Inspector',
                       'empty_value' => '- TODOS LOS INSPECTORES -',
                       'empty_data' => "",
                     )
                   )   
             ->add('prevencionista','choice', array(
                       'label' => 'Prevenc.',
                       'empty_value' => '- TODOS LOS PREVENCIONISTAS -',
                       'empty_data' => "",                       
                     )
                   )
             ->add('supervisor','choice',array(
                       'label' => 'Supervisor',
                       'empty_value' => '- TODOS LOS SUPERVISORES -',
                       'empty_data' => "",                       
                     )
                  ) 
             ->add('pais','entity', array(
                  'class' => 'BcTicCamIpalBundle:Pais',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '- TODAS LOS PAISES -',
                   'empty_data' => "",
                ))  
             ->add('fecha_desde','text', array())
             ->add('fecha_hasta','text', array())   
             ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BcTic\CamIpalBundle\Entity\ObservacionDeComportamiento'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bctic_camipalbundle_observacion_de_comportamiento';
    }
}
