<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\SurveyMultipleType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncuestaElectricaEditType extends AbstractType
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
            ->add('lugarDeTrabajo','text', array('label' => 'Lugar de trabajo', 'disabled' => true))
            ->add('numDeEmpleados', 'choice', array('label'  => 'Nº de empleados', 'choices' => $numTrabajadores, 'disabled' => true))
            ->add('cttaSubcont')
            ->add('observaciones','textarea', array('label' => 'Observaciones', 'disabled' => true))
            ->add('respuesta11', new SurveyMultipleType(),array('label' => 'respuesta1.1_electrica','disabled' => true))
            ->add('respuesta12', new SurveyMultipleType(), array('label' => 'respuesta1.2_electrica','disabled' => true))
            ->add('respuesta13', new SurveyMultipleType(), array('label' => 'respuesta1.3_electrica','disabled' => true))
            ->add('respuesta14', 'hidden')
            ->add('respuesta15', 'hidden')
            ->add('respuesta21', new SurveyMultipleType(), array('label' => 'respuesta2.1_electrica','disabled' => true))
            ->add('respuesta22', new SurveyMultipleType(), array('label' => 'respuesta2.2_electrica','disabled' => true))
            ->add('respuesta23', new SurveyMultipleType(), array('label' => 'respuesta2.3_electrica','disabled' => true))
            ->add('respuesta31', new SurveyMultipleType(), array('label' => 'respuesta3.1_electrica','disabled' => true))
            ->add('respuesta32', new SurveyMultipleType(), array('label' => 'respuesta3.2_electrica','disabled' => true))
            ->add('respuesta33', new SurveyMultipleType(), array('label' => 'respuesta3.3_electrica','disabled' => true))
            ->add('respuesta34', 'hidden')
            ->add('respuesta35', 'hidden')
            ->add('respuesta41', new SurveyMultipleType(), array('label' => 'respuesta4.1_electrica','disabled' => true))
            ->add('respuesta42', new SurveyMultipleType(), array('label' => 'respuesta4.2_electrica','disabled' => true))
            ->add('respuesta43', new SurveyMultipleType(), array('label' => 'respuesta4.3_electrica','disabled' => true))
            ->add('respuesta44', 'hidden')
            ->add('respuesta45', 'hidden')
            ->add('respuesta46', 'hidden')
            ->add('respuesta47', 'hidden')
            ->add('respuesta48', 'hidden')
            ->add('respuesta49', 'hidden')
            ->add('respuesta410', 'hidden')
            ->add('respuesta411', 'hidden')
            ->add('respuesta412', 'hidden')
            ->add('respuesta51', new SurveyMultipleType(), array('label' => 'respuesta5.1_electrica','disabled' => true))
            ->add('respuesta52', new SurveyMultipleType(), array('label' => 'respuesta5.2_electrica','disabled' => true))
            ->add('respuesta53', 'hidden')
            ->add('respuesta61', 'hidden')
            ->add('respuesta62', 'hidden')
            ->add('respuesta63', 'hidden')
            ->add('respuesta64', 'hidden')
            ->add('respuesta71', 'hidden')
            ->add('respuesta72', 'hidden')
            ->add('respuesta81', 'hidden')
            ->add('respuesta82', 'hidden')
            ->add('respuesta91', 'hidden')
            ->add('respuesta92', 'hidden')
            ->add('respuesta93', 'hidden')
            ->add('respuesta101', 'hidden')
            ->add('respuesta102', 'hidden')
            ->add('respuesta103', 'hidden')
            ->add('respuesta111', 'hidden')
            ->add('respuesta121', 'hidden')
            ->add('respuesta131', 'hidden')
            ->add('respuesta132', 'hidden')
            ->add('respuesta133', 'hidden')
            ->add('respuesta134', 'hidden')
            ->add('respuesta135', 'hidden')
            ->add('respuesta136', 'hidden')
            ->add('respuesta137', 'hidden')
            ->add('respuesta138', 'hidden')
            ->add('respuesta139', 'hidden')
            ->add('respuesta1310', 'hidden')
            ->add('cierre','textarea', array('label' => 'Cierre'))
            ->add('statusCierre','hidden')
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
