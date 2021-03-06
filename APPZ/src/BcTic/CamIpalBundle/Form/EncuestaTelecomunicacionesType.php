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

class EncuestaTelecomunicacionesType extends AbstractType
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
            ->add('respuesta11', new SurveyType(),array('label' => 'respuesta1.1_telecomunicaciones'))
            ->add('respuesta12', new SurveyType(), array('label' => 'respuesta1.2_telecomunicaciones'))
            ->add('respuesta13', new SurveyType(), array('label' => 'respuesta1.3_telecomunicaciones'))
            ->add('respuesta14', new SurveyType(), array('label' => 'respuesta1.4_telecomunicaciones'))
            ->add('respuesta15', new SurveyType(), array('label' => 'respuesta1.5_telecomunicaciones'))
            ->add('respuesta21', new SurveyType(), array('label' => 'respuesta2.1_telecomunicaciones'))
            ->add('respuesta22', new SurveyType(), array('label' => 'respuesta2.2_telecomunicaciones'))
            ->add('respuesta23', new SurveyType(), array('label' => 'respuesta2.3_telecomunicaciones'))
            ->add('respuesta31', new SurveyType(), array('label' => 'respuesta3.1_telecomunicaciones'))
            ->add('respuesta32', new SurveyType(), array('label' => 'respuesta3.2_telecomunicaciones'))
            ->add('respuesta33', new SurveyType(), array('label' => 'respuesta3.3_telecomunicaciones'))
            ->add('respuesta34', new SurveyType(), array('label' => 'respuesta3.4_telecomunicaciones'))
            ->add('respuesta35', new SurveyType(), array('label' => 'respuesta3.5_telecomunicaciones'))
            ->add('respuesta41', new SurveyType(), array('label' => 'respuesta4.1_telecomunicaciones'))
            ->add('respuesta42', new SurveyType(), array('label' => 'respuesta4.2_telecomunicaciones'))
            ->add('respuesta43', new SurveyType(), array('label' => 'respuesta4.3_telecomunicaciones'))
            ->add('respuesta44', new SurveyType(), array('label' => 'respuesta4.4_telecomunicaciones'))
            ->add('respuesta45', new SurveyType(), array('label' => 'respuesta4.5_telecomunicaciones'))
            ->add('respuesta46', new SurveyType(), array('label' => 'respuesta4.6_telecomunicaciones'))
            ->add('respuesta47', new SurveyType(), array('label' => 'respuesta4.7_telecomunicaciones'))
            ->add('respuesta48', new SurveyType(), array('label' => 'respuesta4.8_telecomunicaciones'))
            ->add('respuesta49', new SurveyType(), array('label' => 'respuesta4.9_telecomunicaciones'))
            ->add('respuesta410', new SurveyType(), array('label' => 'respuesta4.10_telecomunicaciones'))
            ->add('respuesta51', new SurveyType(), array('label' => 'respuesta5.1_telecomunicaciones'))
            ->add('respuesta52', new SurveyType(), array('label' => 'respuesta5.2_telecomunicaciones'))
            ->add('respuesta53', new SurveyType(), array('label' => 'respuesta5.3_telecomunicaciones'))
            ->add('respuesta61', new SurveyType(), array('label' => 'respuesta6.1_telecomunicaciones'))
            ->add('respuesta62', new SurveyType(), array('label' => 'respuesta6.2_telecomunicaciones'))
            ->add('respuesta63', new SurveyType(), array('label' => 'respuesta6.3_telecomunicaciones'))
            ->add('respuesta71', new SurveyType(), array('label' => 'respuesta7.1_telecomunicaciones'))
            ->add('respuesta72', new SurveyType(), array('label' => 'respuesta7.2_telecomunicaciones'))
            ->add('respuesta81', new SurveyType(), array('label' => 'respuesta8.1_telecomunicaciones'))
            ->add('respuesta82', new SurveyType(), array('label' => 'respuesta8.2_telecomunicaciones'))
            ->add('respuesta91', new SurveyType(), array('label' => 'respuesta9.1_telecomunicaciones'))
            ->add('respuesta92', new SurveyType(), array('label' => 'respuesta9.2_telecomunicaciones'))
            ->add('respuesta93', new SurveyType(), array('label' => 'respuesta9.3_telecomunicaciones'))
            ->add('respuesta101', new SurveyType(), array('label' => 'respuesta10.1_telecomunicaciones'))
            ->add('respuesta102', new SurveyType(), array('label' => 'respuesta10.2_telecomunicaciones'))
            ->add('respuesta103', new SurveyType(), array('label' => 'respuesta10.3_telecomunicaciones'))
            ->add('respuesta104', new SurveyType(), array('label' => 'respuesta10.4_telecomunicaciones'))
            ->add('respuesta111', new SurveyType(), array('label' => 'respuesta11.1_telecomunicaciones'))
            ->add('respuesta112', new SurveyType(), array('label' => 'respuesta11.2_telecomunicaciones'))
            ->add('respuesta121', new SurveyType(), array('label' => 'respuesta12.1_telecomunicaciones'))
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
            ->add('autoInspeccion','choice', array('label' => 'Auto Inspección', 'choices' => array('A1' => 'A1 - Revisado Base / Revisado Inspector / Coincide','A2' => 'A2 - Revisado Base / Revisado Inspector / NO Coincide','A3' => 'A3 - No revisado en base / Revisado Inspector / Aceptable','A4' => 'A3 - No revisado en base / Revisado Inspector / No Aceptable')))
            ->add('charlaOperativa','hidden')
            ->add('charlaGrabada','choice', array('label' => 'ART Grabada', 'choices' => array('SI' => 'Sí', 'NO' => 'No' )))
            ->add('charlaCorrecta','choice', array('label' => 'ART Correcta', 'choices' => array('SI' => 'Sí', 'NO' => 'No' )))
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
