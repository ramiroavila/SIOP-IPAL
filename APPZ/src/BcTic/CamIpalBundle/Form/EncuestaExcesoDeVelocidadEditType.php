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

class EncuestaExcesoDeVelocidadEditType extends AbstractType
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
        ->add('patente','text', array('label' => 'Patente del vehículo (Si aplica)', 'disabled' => true))
        ->add('observaciones','textarea', array('label' => 'Observaciones', 'disabled' => true))
        ->add('respuesta104', new SurveyType(), array('label' => 'respuesta10.4_llvv','disabled' => true))
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
        ->add('charlaGrabada','choice', array('label' => 'Charla grabada', 'choices' => array('SI' => 'Sí', 'NO' => 'No' )))

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
