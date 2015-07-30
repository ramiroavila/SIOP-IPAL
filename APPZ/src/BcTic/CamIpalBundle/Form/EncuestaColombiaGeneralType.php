<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\SurveyType;
use BcTic\CamIpalBundle\Form\Type\SurveyNoType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncuestaColombiaGeneralType extends AbstractType
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
                    'format' => 'ddMMyyyy'
            ))
            ->add('hora','time', array ('label' => 'Hora'))
            ->add('actividad','text', array('label' => 'Actividad'))
            ->add('lugarDeTrabajo','text', array('label' => 'Lugar de trabajo'))
            ->add('numDeEmpleados', 'integer', array('label'  => 'Nº de empleados'))
            ->add('cttaSubcont')
            ->add('observaciones','textarea', array('label' => 'Observaciones'))
            ->add('respuesta11', new SurveyType(),array('label' => 'respuesta1.1_colombia_general'))
            ->add('respuesta12', new SurveyType(), array('label' => 'respuesta1.2_colombia_general'))
            ->add('respuesta13', new SurveyType(), array('label' => 'respuesta1.3_colombia_general'))
            ->add('respuesta14', new SurveyType(), array('label' => 'respuesta1.4_colombia_general'))
            ->add('respuesta15', new SurveyType(), array('label' => 'respuesta1.5_colombia_general'))

            ->add('respuesta21', new SurveyType(), array('label' => 'respuesta2.1_colombia_general'))
            ->add('respuesta22', new SurveyType(), array('label' => 'respuesta2.2_colombia_general'))
            ->add('respuesta23', new SurveyType(), array('label' => 'respuesta2.3_colombia_general'))

            ->add('respuesta31', new SurveyType(), array('label' => 'respuesta3.1_colombia_general'))
            ->add('respuesta32', new SurveyType(), array('label' => 'respuesta3.2_colombia_general'))
            ->add('respuesta33', new SurveyType(), array('label' => 'respuesta3.3_colombia_general'))
            ->add('respuesta34', new SurveyType(), array('label' => 'respuesta3.4_colombia_general'))
            ->add('respuesta35', new SurveyType(), array('label' => 'respuesta3.5_colombia_general'))
            ->add('respuesta36', new SurveyType(), array('label' => 'respuesta3.6_colombia_general'))
            ->add('respuesta37', new SurveyType(), array('label' => 'respuesta3.7_colombia_general'))
            ->add('respuesta38', new SurveyType(), array('label' => 'respuesta3.8_colombia_general'))

            ->add('respuesta41', new SurveyType(), array('label' => 'respuesta4.1_colombia_general'))
            ->add('respuesta42', new SurveyType(), array('label' => 'respuesta4.2_colombia_general'))
            ->add('respuesta43', new SurveyType(), array('label' => 'respuesta4.3_colombia_general'))
            ->add('respuesta44', new SurveyType(), array('label' => 'respuesta4.4_colombia_general'))
            ->add('respuesta45', new SurveyType(), array('label' => 'respuesta4.5_colombia_general'))
            ->add('respuesta46', new SurveyType(), array('label' => 'respuesta4.6_colombia_general'))
            ->add('respuesta47', new SurveyType(), array('label' => 'respuesta4.7_colombia_general'))
            ->add('respuesta48', new SurveyType(), array('label' => 'respuesta4.8_colombia_general'))
            ->add('respuesta49', new SurveyType(), array('label' => 'respuesta4.9_colombia_general'))
            ->add('respuesta410', new SurveyType(), array('label' => 'respuesta4.10_colombia_general'))
            ->add('respuesta411', new SurveyType(), array('label' => 'respuesta4.11_colombia_general'))
            ->add('respuesta412', new SurveyType(), array('label' => 'respuesta4.12_colombia_general'))
            ->add('respuesta413', new SurveyType(), array('label' => 'respuesta4.13_colombia_general'))
            ->add('respuesta414', new SurveyType(), array('label' => 'respuesta4.14_colombia_general'))
            ->add('respuesta415', new SurveyType(), array('label' => 'respuesta4.15_colombia_general'))
            ->add('respuesta416', new SurveyType(), array('label' => 'respuesta4.16_colombia_general'))

            ->add('respuesta51', new SurveyType(), array('label' => 'respuesta5.1_colombia_general'))
            ->add('respuesta52', new SurveyType(), array('label' => 'respuesta5.2_colombia_general'))
            ->add('respuesta53', new SurveyType(), array('label' => 'respuesta5.3_colombia_general'))
            ->add('respuesta54', new SurveyType(), array('label' => 'respuesta5.4_colombia_general'))

            ->add('respuesta61', new SurveyType(), array('label' => 'respuesta6.1_colombia_general'))
            ->add('respuesta62', new SurveyType(), array('label' => 'respuesta6.2_colombia_general'))
            ->add('respuesta63', new SurveyType(), array('label' => 'respuesta6.3_colombia_general'))

            ->add('respuesta71', new SurveyType(), array('label' => 'respuesta7.1_colombia_general'))
            ->add('respuesta72', new SurveyType(), array('label' => 'respuesta7.2_colombia_general'))

            ->add('respuesta81', new SurveyType(), array('label' => 'respuesta8.1_colombia_general'))
            ->add('respuesta82', new SurveyType(), array('label' => 'respuesta8.2_colombia_general'))
            ->add('respuesta83', new SurveyType(), array('label' => 'respuesta8.3_colombia_general'))

            ->add('respuesta91', new SurveyType(), array('label' => 'respuesta9.1_colombia_general'))
            ->add('respuesta92', new SurveyType(), array('label' => 'respuesta9.2_colombia_general'))
            ->add('respuesta93', new SurveyType(), array('label' => 'respuesta9.3_colombia_general'))
            ->add('respuesta94', new SurveyType(), array('label' => 'respuesta9.4_colombia_general'))
            ->add('respuesta95', new SurveyType(), array('label' => 'respuesta9.5_colombia_general'))
            ->add('respuesta96', new SurveyType(), array('label' => 'respuesta9.6_colombia_general'))
            ->add('respuesta97', new SurveyType(), array('label' => 'respuesta9.7_colombia_general'))
            ->add('respuesta98', new SurveyType(), array('label' => 'respuesta9.8_colombia_general'))
            ->add('respuesta99', new SurveyType(), array('label' => 'respuesta9.9_colombia_general'))
            ->add('respuesta910', new SurveyType(), array('label' => 'respuesta9.10_colombia_general'))
            ->add('respuesta911', new SurveyType(), array('label' => 'respuesta9.11_colombia_general'))

            ->add('respuesta101', new SurveyType(), array('label' => 'respuesta10.1_colombia_general'))
            ->add('respuesta102', new SurveyType(), array('label' => 'respuesta10.2_colombia_general'))
            ->add('respuesta103', new SurveyType(), array('label' => 'respuesta10.3_colombia_general'))
            ->add('respuesta104', new SurveyType(), array('label' => 'respuesta10.4_colombia_general'))

            ->add('respuesta111', new SurveyType(), array('label' => 'respuesta11.1_colombia_general'))

            ->add('respuesta121', new SurveyNoType(), array('label' => 'respuesta12.1_colombia_general'))
            ->add('respuesta122', new SurveyNoType(), array('label' => 'respuesta12.2_colombia_general'))
            ->add('respuesta123', new SurveyNoType(), array('label' => 'respuesta12.3_colombia_general'))

            ->add('respuesta131', new SurveyNoType(), array('label' => 'respuesta13.1_colombia_general'))
            ->add('respuesta132', new SurveyNoType(), array('label' => 'respuesta13.2_colombia_general'))
            ->add('respuesta133', new SurveyNoType(), array('label' => 'respuesta13.3_colombia_general'))
            ->add('respuesta134', new SurveyNoType(), array('label' => 'respuesta13.4_colombia_general'))
            ->add('respuesta135', new SurveyNoType(), array('label' => 'respuesta13.5_colombia_general'))
            ->add('respuesta136', new SurveyNoType(), array('label' => 'respuesta13.6_colombia_general'))
            ->add('respuesta137', new SurveyNoType(), array('label' => 'respuesta13.7_colombia_general'))
            ->add('respuesta138', new SurveyNoType(), array('label' => 'respuesta13.8_colombia_general'))
            ->add('respuesta139', new SurveyNoType(), array('label' => 'respuesta13.9_colombia_general'))
            ->add('respuesta1310', new SurveyNoType(), array('label' => 'respuesta13.10_colombia_general'))

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
            ->add('supervisor_facade','text',array('label' => 'Supervisor'))
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
