<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\SurveyType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncuestaFilterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id','integer', array('label' => 'Nº de IPAL'))
            ->add('status_cierre','choice', array(
                'label' => 'Control cierre',
                'empty_data'  => null,
                'empty_value' => "- TODOS LOS ESTADOS -",
                'choices' => array(
                    'N/A' => 'N/A: No aplica',
                    'POR_VALIDAR' => 'POR VALIDAR: Las justificaciones de cierre no han sido verificadas aún por el administrador',
                    'ABIERTA' => 'ABIERTA: Tiene incumplimientos no correctamente justificados aún', 
                    'CERRADA' => 'CERRADA: Tiene incumplimientos cuyo cierre ha sido aceptado por el administrador')
                  )
              )
            ->add('empresa','entity', array(
                  'label' => 'Empresa',
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
                  'label' => 'Mandante',
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
                  'label' => 'Gerencia',
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
             ->add('subGerencia','entity', array(
                  'label' => 'Sub G.',
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
                  'label' => 'Área',
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
                  'label' => 'Contrato',
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
             ->add('supervisorFacade','choice',array(
                       'label' => 'Supervisor',
                       'empty_value' => '- TODOS LOS SUPERVISORES -',
                       'empty_data' => "",                       
                     )
                  ) 
             ->add('pais','entity', array(
                  'label' => 'País',
                  'class' => 'BcTicCamIpalBundle:Pais',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '- TODOS LOS PAISES -',
                   'empty_data' => "",
                ))  
             ->add('unidadDeNegocio','entity', array(
                  'label' => 'Unidad de negocio',
                  'class' => 'BcTicCamIpalBundle:unidadDeNegocio',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->orderBy('r.nombre', 'ASC');
                    },

                   'empty_value' => '- TODAS LAS UNIDADES DE NEGOCIO -',
                   'empty_data' => "",
                ))               
             ->add('fecha_desde','text', array('label' => 'Fecha desde'))
             ->add('fecha_hasta','text', array('label' => 'Fecha hasta'))   
             ->add('grupos','entity', array(
                  'label' => 'Creado por grupo',
                  'class' => 'BcTicCamIpalBundle:Grupo',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '- TODOS LOS GRUPOS -',
                   'empty_data' => "",
                ))              
             ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BcTic\CamIpalBundle\Entity\Encuesta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bctic_camipalbundle_encuesta';
    }
}
