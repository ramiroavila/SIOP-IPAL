<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\SurveyType;
use BcTic\CamIpalBundle\Form\Type\SurveyNoType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncuestaBrazilInternoType extends AbstractType
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
            ->add('hora','time', array ('label' => 'Hora'))
            ->add('actividad','text', array('label' => 'Actividad'))
            ->add('lugarDeTrabajo','text', array('label' => 'Lugar de trabajo'))
            ->add('numDeEmpleados', 'integer', array('label'  => 'Nº de empleados'))
            ->add('cttaSubcont')
            ->add('observaciones','textarea', array('label' => 'Observaciones'))
            ->add('respuesta11', new SurveyType(), array('label' => 'respuesta1.1_brazil_interno','disabled' => true))
            ->add('respuesta12', new SurveyType(), array('label' => 'respuesta1.2_brazil_interno','disabled' => true))
            ->add('respuesta13', new SurveyType(), array('label' => 'respuesta1.3_brazil_interno','disabled' => true))
            ->add('respuesta14', new SurveyType(), array('label' => 'respuesta1.4_brazil_interno','disabled' => true))
            ->add('respuesta15', new SurveyType(), array('label' => 'respuesta1.5_brazil_interno','disabled' => true))
            ->add('respuesta16', new SurveyType(), array('label' => 'respuesta1.6_brazil_interno','disabled' => true))

            ->add('respuesta21', new SurveyType(), array('label' => 'respuesta2.1_brazil_interno','disabled' => true))
            ->add('respuesta22', new SurveyType(), array('label' => 'respuesta2.2_brazil_interno','disabled' => true))
            ->add('respuesta23', new SurveyType(), array('label' => 'respuesta2.3_brazil_interno','disabled' => true))
            ->add('respuesta24', new SurveyType(), array('label' => 'respuesta2.4_brazil_interno','disabled' => true))
            ->add('respuesta25', new SurveyType(), array('label' => 'respuesta2.5_brazil_interno','disabled' => true))
            ->add('respuesta26', new SurveyType(), array('label' => 'respuesta2.6_brazil_interno','disabled' => true))

            ->add('respuesta31', new SurveyType(), array('label' => 'respuesta3.1_brazil_interno','disabled' => true))
            ->add('respuesta32', new SurveyType(), array('label' => 'respuesta3.2_brazil_interno','disabled' => true))
            ->add('respuesta33', new SurveyType(), array('label' => 'respuesta3.3_brazil_interno','disabled' => true))
            ->add('respuesta34', new SurveyType(), array('label' => 'respuesta3.4_brazil_interno','disabled' => true))
            ->add('respuesta35', new SurveyType(), array('label' => 'respuesta3.5_brazil_interno','disabled' => true))
            ->add('respuesta36', new SurveyType(), array('label' => 'respuesta3.6_brazil_interno','disabled' => true))
            ->add('respuesta37', new SurveyType(), array('label' => 'respuesta3.7_brazil_interno','disabled' => true))
            ->add('respuesta38', new SurveyType(), array('label' => 'respuesta3.8_brazil_interno','disabled' => true))
            ->add('respuesta39', new SurveyType(), array('label' => 'respuesta3.9_brazil_interno','disabled' => true))
            ->add('respuesta310', new SurveyType(), array('label' => 'respuesta3.10_brazil_interno','disabled' => true))
            ->add('respuesta311', new SurveyType(), array('label' => 'respuesta3.11_brazil_interno','disabled' => true))
            ->add('respuesta312', new SurveyType(), array('label' => 'respuesta3.12_brazil_interno','disabled' => true))
            ->add('respuesta313', new SurveyType(), array('label' => 'respuesta3.13_brazil_interno','disabled' => true))
            ->add('respuesta314', new SurveyType(), array('label' => 'respuesta3.14_brazil_interno','disabled' => true))

            ->add('respuesta41', new SurveyType(), array('label' => 'respuesta4.1_brazil_interno','disabled' => true))
            ->add('respuesta42', new SurveyType(), array('label' => 'respuesta4.2_brazil_interno','disabled' => true))
            ->add('respuesta43', new SurveyType(), array('label' => 'respuesta4.3_brazil_interno','disabled' => true))
            ->add('respuesta44', new SurveyType(), array('label' => 'respuesta4.4_brazil_interno','disabled' => true))
            ->add('respuesta45', new SurveyType(), array('label' => 'respuesta4.5_brazil_interno','disabled' => true))
            ->add('respuesta46', new SurveyType(), array('label' => 'respuesta4.6_brazil_interno','disabled' => true))

            ->add('respuesta51', new SurveyType(), array('label' => 'respuesta5.1_brazil_interno','disabled' => true))
            ->add('respuesta52', new SurveyType(), array('label' => 'respuesta5.2_brazil_interno','disabled' => true))
            ->add('respuesta53', new SurveyType(), array('label' => 'respuesta5.3_brazil_interno','disabled' => true))
            ->add('respuesta54', new SurveyType(), array('label' => 'respuesta5.4_brazil_interno','disabled' => true))

            ->add('respuesta61', new SurveyType(), array('label' => 'respuesta6.1_brazil_interno','disabled' => true))
            ->add('respuesta62', new SurveyType(), array('label' => 'respuesta6.2_brazil_interno','disabled' => true))
            ->add('respuesta63', new SurveyType(), array('label' => 'respuesta6.3_brazil_interno','disabled' => true))
            ->add('respuesta64', new SurveyType(), array('label' => 'respuesta6.4_brazil_interno','disabled' => true))
            ->add('respuesta65', new SurveyType(), array('label' => 'respuesta6.5_brazil_interno','disabled' => true))

            ->add('respuesta71', new SurveyType(), array('label' => 'respuesta7.1_brazil_interno','disabled' => true))
            ->add('respuesta72', new SurveyType(), array('label' => 'respuesta7.2_brazil_interno','disabled' => true))
            ->add('respuesta73', new SurveyType(), array('label' => 'respuesta7.3_brazil_interno','disabled' => true))
            ->add('respuesta74', new SurveyType(), array('label' => 'respuesta7.4_brazil_interno','disabled' => true))

            ->add('respuesta81', new SurveyType(), array('label' => 'respuesta8.1_brazil_interno','disabled' => true))

            ->add('cierre','textarea', array('label' => 'Cierre'))
            ->add('status_cierre','choice', array('label' => 'Estado de cierre', 'choices' => array('N/A' => 'N/A: No aplica','POR_VALIDAR' => 'POR VALIDAR: Las justificaciones de cierre no han sido verificadas aún por el administrador','ABIERTA' => 'ABIERTA: Tiene incumplimientos no correctamente justificados aún', 'CERRADA' => 'CERRADA: Tiene incumplimientos cuyo cierre ha sido aceptado por el administrador.')))
            ->add('uploadedFileCierre1','file', array('label' => 'Adjunto 1','required'  => false))
            ->add('uploadedFileCierre2','file', array('label' => 'Adjunto 2','required'  => false))
            ->add('uploadedFile1','file', array('label' => 'Adjunto 1','required'  => false))
            ->add('uploadedFile2','file', array('label' => 'Adjunto 2','required'  => false))
            ->add('uploadedFile3','file', array('label' => 'Adjunto 3','required'  => false))
            ->add('visible', 'hidden', array())
            ->add('cierreLog', 'hidden', array())
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
            ->add('inspector','text',array('label' => 'Inspector'))
            ->add('prevencionista', 'hidden')
            ->add('supervisor','entity', array(
                  'class' => 'BcTicCamIpalBundle:Supervisor',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                           ->orderBy('r.nombre', 'ASC');
                    },
                   'empty_value' => '-- SELECCIONE SUPERVISOR --',
                   'empty_data' => "-1",
                ))
            ->add('servicio','entity', array(
                  'label' => 'Servicio',
                  'class' => 'BcTicCamIpalBundle:Servicio',
                  'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
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
                    }
                ))
              ->add('autoInspeccion','choice', array('label' => 'Auto Inspección', 'choices' => array('N/A' => 'N/A: No aplica','A1' => 'A1','A2' => 'A2','A3' => 'A3','A4' => 'A4')))
              ->add('charlaOperativa','choice', array('label' => 'Charla operativa', 'choices' => array('N/A' => 'N/A: No aplica','B1' => 'B1','B2' => 'B2','B3' => 'B3','B4' => 'B4')))

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
