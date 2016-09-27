<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\SurveyMultipleType;
use BcTic\CamIpalBundle\Form\Type\SurveyType;
use BcTic\CamIpalBundle\Form\Type\SurveyNoType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use BcTic\CamIpalBundle\Form\Type\EntityHiddenType;

class EncuestaPeruLogisticaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $numTrabajadores = array();
        $i = 1;
        while ($i <= 10) {
          $numTrabajadores[$i] = $i;
          $i++;
        }

        $builder
            ->add('fecha','date', array(
                    'label' => 'Fecha',
                    'input'  => 'datetime',
                    'widget' => 'choice',
                    'format' => 'ddMMyyyy',
                    'disabled' => true
            ))
            ->add('tipoDeHallazgo', 'choice', array('choices' => array('CONDUCTUALES','ADMINISTRATIVOS','N/A')))
            ->add('hora','time', array ('label' => 'Hora'))
            ->add('lugarDeTrabajo','text', array('label' => 'Lugar de trabajo'))
            ->add('numDeEmpleados', 'choice', array('label'  => 'Nº de empleados', 'choices' => $numTrabajadores))
            ->add('cttaSubcont')
            ->add('observaciones','textarea', array('label' => 'Observaciones'))
            ->add('respuesta11', new SurveyType(), array('label' => 'respuesta1.1_peru_logistica'))
            ->add('respuesta12', new SurveyType(), array('label' => 'respuesta1.2_peru_logistica'))
            ->add('respuesta13', new SurveyType(), array('label' => 'respuesta1.3_peru_logistica'))
            ->add('respuesta14', new SurveyType(), array('label' => 'respuesta1.4_peru_logistica'))
            ->add('respuesta15', new SurveyType(), array('label' => 'respuesta1.5_peru_logistica'))
            ->add('respuesta21', new SurveyType(), array('label' => 'respuesta2.1_peru_logistica'))
            ->add('respuesta31', new SurveyType(), array('label' => 'respuesta3.1_peru_logistica'))
            ->add('respuesta32', new SurveyType(), array('label' => 'respuesta3.2_peru_logistica'))
            ->add('respuesta33', new SurveyType(), array('label' => 'respuesta3.3_peru_logistica'))
            ->add('respuesta34', new SurveyType(), array('label' => 'respuesta3.4_peru_logistica'))
            ->add('respuesta41', new SurveyType(), array('label' => 'respuesta4.1_peru_logistica'))
            ->add('respuesta42', new SurveyType(), array('label' => 'respuesta4.2_peru_logistica'))
            ->add('respuesta43', new SurveyType(), array('label' => 'respuesta4.3_peru_logistica'))
            ->add('respuesta44', new SurveyType(), array('label' => 'respuesta4.4_peru_logistica'))
            ->add('respuesta45', new SurveyType(), array('label' => 'respuesta4.5_peru_logistica'))
            ->add('respuesta46', new SurveyType(), array('label' => 'respuesta4.6_peru_logistica'))
            ->add('respuesta47', new SurveyType(), array('label' => 'respuesta4.7_peru_logistica'))
            ->add('respuesta48', new SurveyType(), array('label' => 'respuesta4.8_peru_logistica'))
            ->add('respuesta49', new SurveyType(), array('label' => 'respuesta4.9_peru_logistica'))
            ->add('respuesta410', new SurveyType(), array('label' => 'respuesta4.10_peru_logistica'))
            ->add('respuesta411', new SurveyType(), array('label' => 'respuesta4.11_peru_logistica'))
            ->add('respuesta51', new SurveyType(), array('label' => 'respuesta5.1_peru_logistica'))
            ->add('respuesta52', new SurveyType(), array('label' => 'respuesta5.2_peru_logistica'))
            ->add('respuesta53', new SurveyType(), array('label' => 'respuesta5.3_peru_logistica'))
            ->add('respuesta61', new SurveyType(), array('label' => 'respuesta6.1_peru_logistica'))
            ->add('respuesta62', new SurveyType(), array('label' => 'respuesta6.2_peru_logistica'))
            ->add('respuesta63', new SurveyType(), array('label' => 'respuesta6.3_peru_logistica'))
            ->add('respuesta64', new SurveyType(), array('label' => 'respuesta6.4_peru_logistica'))
            ->add('respuesta65', new SurveyType(), array('label' => 'respuesta6.5_peru_logistica'))
            ->add('respuesta71', new SurveyType(), array('label' => 'respuesta7.1_peru_logistica'))
            ->add('respuesta72', new SurveyType(), array('label' => 'respuesta7.2_peru_logistica'))
            ->add('respuesta81', new SurveyType(), array('label' => 'respuesta8.1_peru_logistica'))
            ->add('respuesta82', new SurveyType(), array('label' => 'respuesta8.2_peru_logistica'))
            ->add('respuesta91', new SurveyType(), array('label' => 'respuesta9.1_peru_logistica'))
            ->add('respuesta92', new SurveyType(), array('label' => 'respuesta9.2_peru_logistica'))
            ->add('respuesta93', new SurveyType(), array('label' => 'respuesta9.3_peru_logistica'))
            ->add('respuesta101', new SurveyType(), array('label' => 'respuesta10.1_peru_logistica'))
            ->add('respuesta102', new SurveyType(), array('label' => 'respuesta10.2_peru_logistica'))
            ->add('respuesta103', new SurveyType(), array('label' => 'respuesta10.3_peru_logistica'))
            ->add('respuesta111', new SurveyType(), array('label' => 'respuesta11.1_peru_logistica'))
            ->add('respuesta121', new SurveyType(), array('label' => 'respuesta12.1_peru_logistica'))
            ->add('cierre','textarea', array('label' => 'Cierre'))
            ->add('statusCierre','choice', array('label' => 'Estado de cierre', 'choices' => array('N/A' => 'N/A: No aplica','POR_VALIDAR' => 'POR VALIDAR: Las justificaciones de cierre no han sido verificadas aún por el administrador','ABIERTA' => 'ABIERTA: Tiene incumplimientos no correctamente justificados aún')))
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
            ->add('supervisor','entity_hidden', array(
                'class' => 'BcTic\CamIpalBundle\Entity\Empleado',
              ))
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
                    }
                ))
            ->add('autoInspeccion','choice', array('label' => 'Auto Inspección', 'choices' => array('N/A' => 'N/A: No aplica','A1' => 'A1','A2' => 'A2','A3' => 'A3','A4' => 'A4')))
            ->add('charlaOperativa','choice', array('label' => 'Charla operativa', 'choices' => array('N/A' => 'N/A: No aplica','B1' => 'B1','B2' => 'B2','B3' => 'B3','B4' => 'B4')))
            ->add('charlaGrabada','choice', array('label' => 'Charla grabada', 'choices' => array('N/A' => 'N/A: No aplica','SI' => 'Sí', 'NO' => 'No' )))

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
