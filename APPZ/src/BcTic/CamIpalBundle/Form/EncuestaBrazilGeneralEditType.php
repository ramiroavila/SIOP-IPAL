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

class EncuestaBrazilGeneralEditType extends AbstractType
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
            ->add('hora','time', array ('label' => 'Hora', 'disabled' => true))
            ->add('lugarDeTrabajo','text', array('label' => 'Lugar de trabajo', 'disabled' => true))
            ->add('numDeEmpleados', 'choice', array('label'  => 'Nº de empleados', 'choices' => $numTrabajadores, 'disabled' => true))
            ->add('cttaSubcont')
            ->add('observaciones','textarea', array('label' => 'Observaciones', 'disabled' => true))
            ->add('respuesta11', new SurveyType(),array('label' => 'respuesta1.1_brazil_general','disabled' => true))
            ->add('respuesta12', new SurveyType(), array('label' => 'respuesta1.2_brazil_general','disabled' => true))
            ->add('respuesta13', new SurveyType(), array('label' => 'respuesta1.3_brazil_general','disabled' => true))
            ->add('respuesta14', new SurveyType(), array('label' => 'respuesta1.4_brazil_general','disabled' => true))
            ->add('respuesta15', new SurveyType(), array('label' => 'respuesta1.5_brazil_general','disabled' => true))
            ->add('respuesta21', new SurveyType(), array('label' => 'respuesta2.1_brazil_general','disabled' => true))
            ->add('respuesta22', new SurveyType(), array('label' => 'respuesta2.2_brazil_general','disabled' => true))
            ->add('respuesta23', new SurveyType(), array('label' => 'respuesta2.3_brazil_general','disabled' => true))
            ->add('respuesta31', new SurveyType(), array('label' => 'respuesta3.1_brazil_general','disabled' => true))
            ->add('respuesta32', new SurveyType(), array('label' => 'respuesta3.2_brazil_general','disabled' => true))
            ->add('respuesta33', new SurveyType(), array('label' => 'respuesta3.3_brazil_general','disabled' => true))
            ->add('respuesta34', new SurveyType(), array('label' => 'respuesta3.4_brazil_general','disabled' => true))
            ->add('respuesta35', new SurveyType(), array('label' => 'respuesta3.5_brazil_general','disabled' => true))
            ->add('respuesta41', new SurveyType(), array('label' => 'respuesta4.1_brazil_general','disabled' => true))
            ->add('respuesta42', new SurveyType(), array('label' => 'respuesta4.2_brazil_general','disabled' => true))
            ->add('respuesta43', new SurveyType(), array('label' => 'respuesta4.3_brazil_general','disabled' => true))
            ->add('respuesta44', new SurveyType(), array('label' => 'respuesta4.4_brazil_general','disabled' => true))
            ->add('respuesta45', new SurveyType(), array('label' => 'respuesta4.5_brazil_general','disabled' => true))
            ->add('respuesta46', new SurveyType(), array('label' => 'respuesta4.6_brazil_general','disabled' => true))
            ->add('respuesta47', new SurveyType(), array('label' => 'respuesta4.7_brazil_general','disabled' => true))
            ->add('respuesta48', new SurveyType(), array('label' => 'respuesta4.8_brazil_general','disabled' => true))
            ->add('respuesta49', new SurveyType(), array('label' => 'respuesta4.9_brazil_general','disabled' => true))
            ->add('respuesta410', new SurveyType(), array('label' => 'respuesta4.10_brazil_general','disabled' => true))
            ->add('respuesta411', new SurveyType(), array('label' => 'respuesta4.11_brazil_general','disabled' => true))
            ->add('respuesta412', new SurveyType(), array('label' => 'respuesta4.12_brazil_general','disabled' => true))
            ->add('respuesta51', new SurveyType(), array('label' => 'respuesta5.1_brazil_general','disabled' => true))
            ->add('respuesta52', new SurveyType(), array('label' => 'respuesta5.2_brazil_general','disabled' => true))
            ->add('respuesta53', new SurveyType(), array('label' => 'respuesta5.3_brazil_general','disabled' => true))
            ->add('respuesta61', new SurveyType(), array('label' => 'respuesta6.1_brazil_general','disabled' => true))
            ->add('respuesta62', new SurveyType(), array('label' => 'respuesta6.2_brazil_general','disabled' => true))
            ->add('respuesta63', new SurveyType(), array('label' => 'respuesta6.3_brazil_general','disabled' => true))
            ->add('respuesta64', new SurveyType(), array('label' => 'respuesta6.4_brazil_general','disabled' => true))
            ->add('respuesta71', new SurveyType(), array('label' => 'respuesta7.1_brazil_general','disabled' => true))
            ->add('respuesta72', new SurveyType(), array('label' => 'respuesta7.2_brazil_general','disabled' => true))
            ->add('respuesta81', new SurveyType(), array('label' => 'respuesta8.1_brazil_general','disabled' => true))
            ->add('respuesta82', new SurveyType(), array('label' => 'respuesta8.2_brazil_general','disabled' => true))
            ->add('respuesta91', new SurveyType(), array('label' => 'respuesta9.1_brazil_general','disabled' => true))
            ->add('respuesta92', new SurveyType(), array('label' => 'respuesta9.2_brazil_general','disabled' => true))
            ->add('respuesta93', new SurveyType(), array('label' => 'respuesta9.3_brazil_general','disabled' => true))
            ->add('respuesta101', new SurveyType(), array('label' => 'respuesta10.1_brazil_general','disabled' => true))
            ->add('respuesta102', new SurveyType(), array('label' => 'respuesta10.2_brazil_general','disabled' => true))
            ->add('respuesta103', new SurveyType(), array('label' => 'respuesta10.3_brazil_general','disabled' => true))
            ->add('respuesta111', new SurveyType(), array('label' => 'respuesta11.1_brazil_general','disabled' => true))
            ->add('statusCierre','hidden')
            ->add('cierre','textarea', array('label' => 'Cierre', 'disabled' => true))
            ->add('uploadedFileCierre1','file', array('label' => 'Adjunto 1','required'  => false))
            ->add('uploadedFileCierre2','file', array('label' => 'Adjunto 2','required'  => false))
            ->add('uploadedFile1','file', array('label' => 'Adjunto 1','required'  => false,'disabled' => true))
            ->add('uploadedFile2','file', array('label' => 'Adjunto 2','required'  => false,'disabled' => true))
            ->add('uploadedFile3','file', array('label' => 'Adjunto 3','required'  => false,'disabled' => true))
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
                    },
                  'read_only' => true,
                  'disabled' => true,
                ))
              ->add('autoInspeccion','choice', array('label' => 'Auto Inspección', 'choices' => array('A1' => 'A1','A2' => 'A2','A3' => 'A3','A4' => 'A4')))
              ->add('charlaOperativa','choice', array('label' => 'Charla operativa', 'choices' => array('B1' => 'B1','B2' => 'B2','B3' => 'B3','B4' => 'B4')))
              ->add('charlaGrabada','hidden')
              ->add('charlaCorrecta','hidden')
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
