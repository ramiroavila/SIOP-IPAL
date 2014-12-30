<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\SurveyType;
use BcTic\CamIpalBundle\Form\Type\SurveyNoType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncuestaBrazilInternoEditType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha','date', array(
                    'label' => 'Fecha',
                    'input'  => 'datetime',
                    'widget' => 'choice',
                    'format' => 'ddMMyyyy',
                    'disabled' => true
            ))
            ->add('hora','time', array ('label' => 'Hora', 'disabled' => true))
            ->add('actividad','text', array('label' => 'Actividad', 'disabled' => true))
            ->add('lugarDeTrabajo','text', array('label' => 'Lugar de trabajo', 'disabled' => true))
            ->add('numDeEmpleados', 'integer', array('label'  => 'Nº de empleados', 'disabled' => true))
            ->add('cttaSubcont','choice', array('disabled' => true))
            ->add('observaciones','textarea', array('label' => 'Observaciones', 'disabled' => true))
            ->add('respuesta11', new SurveyType(), array('label' => 'respuesta1.1_brazil_interno'))
            ->add('respuesta12', new SurveyType(), array('label' => 'respuesta1.2_brazil_interno'))
            ->add('respuesta13', new SurveyType(), array('label' => 'respuesta1.3_brazil_interno'))
            ->add('respuesta14', new SurveyType(), array('label' => 'respuesta1.4_brazil_interno'))
            ->add('respuesta15', new SurveyType(), array('label' => 'respuesta1.5_brazil_interno'))
            ->add('respuesta16', new SurveyType(), array('label' => 'respuesta1.6_brazil_interno'))
            ->add('respuesta21', new SurveyType(), array('label' => 'respuesta2.1_brazil_interno'))
            ->add('respuesta22', new SurveyType(), array('label' => 'respuesta2.2_brazil_interno'))
            ->add('respuesta23', new SurveyType(), array('label' => 'respuesta2.3_brazil_interno'))
            ->add('respuesta24', new SurveyType(), array('label' => 'respuesta2.4_brazil_interno'))
            ->add('respuesta25', new SurveyType(), array('label' => 'respuesta2.5_brazil_interno'))
            ->add('respuesta26', new SurveyType(), array('label' => 'respuesta2.6_brazil_interno'))
            ->add('respuesta31', new SurveyType(), array('label' => 'respuesta3.1_brazil_interno'))
            ->add('respuesta32', new SurveyType(), array('label' => 'respuesta3.2_brazil_interno'))
            ->add('respuesta33', new SurveyType(), array('label' => 'respuesta3.3_brazil_interno'))
            ->add('respuesta34', new SurveyType(), array('label' => 'respuesta3.4_brazil_interno'))
            ->add('respuesta35', new SurveyType(), array('label' => 'respuesta3.5_brazil_interno'))
            ->add('respuesta36', new SurveyType(), array('label' => 'respuesta3.6_brazil_interno'))
            ->add('respuesta37', new SurveyType(), array('label' => 'respuesta3.7_brazil_interno'))
            ->add('respuesta38', new SurveyType(), array('label' => 'respuesta3.8_brazil_interno'))
            ->add('respuesta39', new SurveyType(), array('label' => 'respuesta3.9_brazil_interno'))
            ->add('respuesta310', new SurveyType(), array('label' => 'respuesta3.10_brazil_interno'))
            ->add('respuesta311', new SurveyType(), array('label' => 'respuesta3.11_brazil_interno'))
            ->add('respuesta312', new SurveyType(), array('label' => 'respuesta3.12_brazil_interno'))
            ->add('respuesta313', new SurveyType(), array('label' => 'respuesta3.13_brazil_interno'))
            ->add('respuesta314', new SurveyType(), array('label' => 'respuesta3.14_brazil_interno'))
            ->add('respuesta41', new SurveyType(), array('label' => 'respuesta4.1_brazil_interno'))
            ->add('respuesta42', new SurveyType(), array('label' => 'respuesta4.2_brazil_interno'))
            ->add('respuesta43', new SurveyType(), array('label' => 'respuesta4.3_brazil_interno'))
            ->add('respuesta44', new SurveyType(), array('label' => 'respuesta4.4_brazil_interno'))
            ->add('respuesta45', new SurveyType(), array('label' => 'respuesta4.5_brazil_interno'))
            ->add('respuesta46', new SurveyType(), array('label' => 'respuesta4.6_brazil_interno'))
            ->add('respuesta51', new SurveyType(), array('label' => 'respuesta5.1_brazil_interno'))
            ->add('respuesta52', new SurveyType(), array('label' => 'respuesta5.2_brazil_interno'))
            ->add('respuesta53', new SurveyType(), array('label' => 'respuesta5.3_brazil_interno'))
            ->add('respuesta54', new SurveyType(), array('label' => 'respuesta5.4_brazil_interno'))
            ->add('respuesta61', new SurveyType(), array('label' => 'respuesta6.1_brazil_interno'))
            ->add('respuesta62', new SurveyType(), array('label' => 'respuesta6.2_brazil_interno'))
            ->add('respuesta63', new SurveyType(), array('label' => 'respuesta6.3_brazil_interno'))
            ->add('respuesta64', new SurveyType(), array('label' => 'respuesta6.4_brazil_interno'))
            ->add('respuesta65', new SurveyType(), array('label' => 'respuesta6.5_brazil_interno'))
            ->add('respuesta71', new SurveyType(), array('label' => 'respuesta7.1_brazil_interno'))
            ->add('respuesta72', new SurveyType(), array('label' => 'respuesta7.2_brazil_interno'))
            ->add('respuesta73', new SurveyType(), array('label' => 'respuesta7.3_brazil_interno'))
            ->add('respuesta74', new SurveyType(), array('label' => 'respuesta7.4_brazil_interno'))
            ->add('respuesta81', new SurveyType(), array('label' => 'respuesta8.1_brazil_interno'))
<<<<<<< HEAD
            ->add('cierre','textarea', array('label' => 'Cierre'))
            ->add('status_cierre','choice', array('label' => 'Estado de cierre','disabled' => true, 'choices' => array('N/A' => 'N/A: No aplica','ABIERTA' => 'ABIERTA: Tiene incumplimientos no correctamente justificados aún', 'CERRADA' => 'CERRADA: Tiene incumplimientos cuyo cierre ha sido aceptado por el administrador.')))            
=======



            ->add('cierre','textarea', array('label' => 'Cierre', 'disabled' => true))
>>>>>>> 063881ec1a921e20501a4e0a7948e5a838a591b4
            ->add('uploadedFileCierre1','file', array('label' => 'Adjunto 1','required'  => false))
            ->add('uploadedFileCierre2','file', array('label' => 'Adjunto 2','required'  => false))
            ->add('uploadedFile1','file', array('label' => 'Adjunto 1','required'  => false,'disabled' => true))
            ->add('uploadedFile2','file', array('label' => 'Adjunto 2','required'  => false,'disabled' => true))
            ->add('uploadedFile3','file', array('label' => 'Adjunto 3','required'  => false,'disabled' => true))
            ->add('visible', 'hidden', array())
            ->add('localizacion', 'hidden', array())
            ->add('empresa','entity', array(
                  'class' => 'BcTicCamIpalBundle:Empresa',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '-- SELECCIONE EMPRESA --',
                   'empty_data' => "-1",
                   'disabled' => true
                ))
            ->add('contrato','entity', array(
                  'class' => 'BcTicCamIpalBundle:Contrato',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.numero', 'ASC');
                    },
                   'empty_value' => '-- SELECCIONE CONTRATO --',
                   'empty_data' => "-1",
                   'disabled' => true
                ) )
            ->add('mandante','entity', array(
                  'label' => 'Mandante',
                  'class' => 'BcTicCamIpalBundle:Mandante',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.name', 'ASC');
                    },
                  'read_only' => true,
                  'disabled' => true,
                  'empty_value' => '-- SERVICIO --',
                  'empty_data' => -1,
                ))
            ->add('inspector','text',array('label' => 'Inspector', 'disabled' => true))
            ->add('prevencionista', 'hidden', array('disabled' => true))
            ->add('supervisor_facade','text',array('label' => 'Supervisor', 'disabled' => true))
            ->add('servicio','entity', array(
                  'label' => 'Servicio',
                  'class' => 'BcTicCamIpalBundle:Servicio',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.nombre', 'ASC');
                    },
                  'read_only' => true,
                  'disabled' => true,
                  'empty_value' => '-- SERVICIO --',
                  'empty_data' => -1,
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
                  'read_only' => true,
                  'disabled' => true,
                  'empty_value' => '-- AREA --',
                  'empty_data' => -1,
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
                  'read_only' => true,
                  'disabled' => true,
                  'empty_value' => '-- GERENCIA --',
                  'empty_data' => -1,
                ))
            ->add('subGerencia','entity', array(
                  'label' => 'Sub Gerencia',
                  'class' => 'BcTicCamIpalBundle:SubGerencia',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->where('r.visible = :visible')
                           ->setParameter('visible',1)
                           ->orderBy('r.nombre', 'ASC');
                    },
                  'read_only' => true,
                  'disabled' => true,
                   'empty_value' => '-- SUB GERENCIA --',
                   'empty_data' => -1,
                ))
            ->add('pais','entity', array(
                  'label' => 'País',
                  'class' => 'BcTicCamIpalBundle:Pais',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->orderBy('r.nombre', 'ASC');
                    },
                  'read_only' => true,
                  'disabled' => true,
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
