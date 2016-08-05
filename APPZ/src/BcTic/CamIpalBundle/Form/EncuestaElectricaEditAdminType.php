<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\SurveyType;
use BcTic\CamIpalBundle\Form\Type\SurveyNoType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncuestaElectricaEditAdminType extends AbstractType
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
                    'format' => 'ddMMyyyy'
            ))
            ->add('tipoDeHallazgo', 'choice', array('choices' => array('CONDUCTUALES','ADMINISTRATIVOS')))
            ->add('hora','time', array ('label' => 'Hora'))
            ->add('lugarDeTrabajo','text', array('label' => 'Lugar de trabajo'))
            ->add('numDeEmpleados', 'choice', array('label'  => 'Nº de empleados', 'choices' => $numTrabajadores))
            ->add('cttaSubcont')
            ->add('observaciones','textarea', array('label' => 'Observaciones'))
            ->add('respuesta11', new SurveyType(),array('label' => 'respuesta1.1_electrica'))
            ->add('respuesta12', new SurveyType(), array('label' => 'respuesta1.2_electrica'))
            ->add('respuesta13', new SurveyType(), array('label' => 'respuesta1.3_electrica'))
            ->add('respuesta14', new SurveyType(), array('label' => 'respuesta1.4_electrica'))
            ->add('respuesta15', new SurveyType(), array('label' => 'respuesta1.5_electrica'))
            ->add('respuesta21', new SurveyType(), array('label' => 'respuesta2.1_electrica'))
            ->add('respuesta22', new SurveyType(), array('label' => 'respuesta2.2_electrica'))
            ->add('respuesta23', new SurveyType(), array('label' => 'respuesta2.3_electrica'))
            ->add('respuesta31', new SurveyType(), array('label' => 'respuesta3.1_electrica'))
            ->add('respuesta32', new SurveyType(), array('label' => 'respuesta3.2_electrica'))
            ->add('respuesta33', new SurveyType(), array('label' => 'respuesta3.3_electrica'))
            ->add('respuesta34', new SurveyType(), array('label' => 'respuesta3.4_electrica'))
            ->add('respuesta35', new SurveyType(), array('label' => 'respuesta3.5_electrica'))
            ->add('respuesta41', new SurveyType(), array('label' => 'respuesta4.1_electrica'))
            ->add('respuesta42', new SurveyType(), array('label' => 'respuesta4.2_electrica'))
            ->add('respuesta43', new SurveyType(), array('label' => 'respuesta4.3_electrica'))
            ->add('respuesta44', new SurveyType(), array('label' => 'respuesta4.4_electrica'))
            ->add('respuesta45', new SurveyType(), array('label' => 'respuesta4.5_electrica'))
            ->add('respuesta46', new SurveyType(), array('label' => 'respuesta4.6_electrica'))
            ->add('respuesta47', new SurveyType(), array('label' => 'respuesta4.7_electrica'))
            ->add('respuesta48', new SurveyType(), array('label' => 'respuesta4.8_electrica'))
            ->add('respuesta49', new SurveyType(), array('label' => 'respuesta4.9_electrica'))
            ->add('respuesta410', new SurveyType(), array('label' => 'respuesta4.10_electrica'))
            ->add('respuesta411', new SurveyType(), array('label' => 'respuesta4.11_electrica'))
            ->add('respuesta412', new SurveyType(), array('label' => 'respuesta4.12_electrica'))
            ->add('respuesta51', new SurveyType(), array('label' => 'respuesta5.1_electrica'))
            ->add('respuesta52', new SurveyType(), array('label' => 'respuesta5.2_electrica'))
            ->add('respuesta53', new SurveyType(), array('label' => 'respuesta5.3_electrica'))
            ->add('respuesta61', new SurveyType(), array('label' => 'respuesta6.1_electrica'))
            ->add('respuesta62', new SurveyType(), array('label' => 'respuesta6.2_electrica'))
            ->add('respuesta63', new SurveyType(), array('label' => 'respuesta6.3_electrica'))
            ->add('respuesta64', new SurveyType(), array('label' => 'respuesta6.4_electrica'))
            ->add('respuesta71', new SurveyType(), array('label' => 'respuesta7.1_electrica'))
            ->add('respuesta72', new SurveyType(), array('label' => 'respuesta7.2_electrica'))
            ->add('respuesta81', new SurveyType(), array('label' => 'respuesta8.1_electrica'))
            ->add('respuesta82', new SurveyType(), array('label' => 'respuesta8.2_electrica'))
            ->add('respuesta91', new SurveyType(), array('label' => 'respuesta9.1_electrica'))
            ->add('respuesta92', new SurveyType(), array('label' => 'respuesta9.2_electrica'))
            ->add('respuesta93', new SurveyType(), array('label' => 'respuesta9.3_electrica'))
            ->add('respuesta101', new SurveyType(), array('label' => 'respuesta10.1_electrica'))
            ->add('respuesta102', new SurveyType(), array('label' => 'respuesta10.2_electrica'))
            ->add('respuesta103', new SurveyType(), array('label' => 'respuesta10.3_electrica'))
            ->add('respuesta111', new SurveyType(), array('label' => 'respuesta11.1_electrica'))
            ->add('respuesta121', new SurveyNoType(), array('label' => 'respuesta12.1_electrica'))
            ->add('respuesta131', new SurveyType(), array('label' => 'respuesta13.1_electrica'))
            ->add('respuesta132', new SurveyType(), array('label' => 'respuesta13.2_electrica'))
            ->add('respuesta133', new SurveyType(), array('label' => 'respuesta13.3_electrica'))
            ->add('respuesta134', new SurveyType(), array('label' => 'respuesta13.4_electrica'))
            ->add('respuesta135', new SurveyType(), array('label' => 'respuesta13.5_electrica'))
            ->add('respuesta136', new SurveyType(), array('label' => 'respuesta13.6_electrica'))
            ->add('respuesta137', new SurveyType(), array('label' => 'respuesta13.7_electrica'))
            ->add('respuesta138', new SurveyType(), array('label' => 'respuesta13.8_electrica'))
            ->add('respuesta139', new SurveyType(), array('label' => 'respuesta13.9_electrica'))
            ->add('respuesta1310', new SurveyType(), array('label' => 'respuesta13.10_electrica'))
            ->add('cierre','textarea', array('label' => 'Cierre'))
            ->add('statusCierre','choice', array('label' => 'Estado de cierre', 'choices' => array('N/A' => 'N/A: No aplica','POR_VALIDAR' => 'POR VALIDAR: Las justificaciones de cierre no han sido verificadas aún por el administrador','ABIERTA' => 'ABIERTA: Tiene incumplimientos no correctamente justificados aún', 'CERRADA' => 'CERRADA: Tiene incumplimientos cuyo cierre ha sido aceptado por el administrador.')))
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
                  'empty_value' => '-- SERVICIO --',
                  'empty_data' => -1,
                ))
            ->add('inspector','text',array('label' => 'Inspector'))
            ->add('prevencionista', 'hidden', array())
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
