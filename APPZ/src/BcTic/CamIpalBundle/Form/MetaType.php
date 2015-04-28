<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\SecurityContext as SecurityContext;

class MetaType extends AbstractType
{

    private $securityContext;

    public function __construct(SecurityContext $securityContext)
    {
        $this->securityContext = $securityContext;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $context = $this->securityContext;
        $builder
            ->add('anno','choice', array('label' => 'Año','choices' => array(2014 => 2014, 2015 => 2015,2016 => 2016)))
            ->add('mes','choice', array('label' => 'Mes','choices' => array( 
                1 => 'Enero',
                2 => 'Febrero',
                3 => 'Marzo',
                4 => 'Abril',
                5 => 'Mayo',
                6 => 'Junio',
                7 => 'Julio',
                8 => 'Agosto',
                9 => 'Septiembre',
                10 => 'Octubre',
                11 => 'Noviembre',
                12 => 'Diciembre',
                )))
            ->add('valor','integer', array('label' => 'Cantidad de encuestas'))
            ->add('valor_observaciones','integer', array('label' => 'Cantidad de observaciones'))
            ->add('subGerencia','entity', array(
                  'label' => 'Sub Gerencia',
                  'class' => 'BcTicCamIpalBundle:SubGerencia',
                  'query_builder' => function(EntityRepository $er) use ($context) {
                    return $er->createQueryBuilder('s')
                           ->join('s.gerencia','gerencia')
                           ->join('gerencia.pais','pais')
                           ->where('s.visible = :visible AND pais.id = :pais')
                           ->setParameters(array('visible' => 1, 'pais' => $context->getToken()->getUser()->getPais()->getId()))
                           ->orderBy('s.nombre', 'ASC');
                    },
                  'read_only' => false,
                  'disabled' => false,
                ))
            ->add('unidadDeNegocio','entity', array(
                  'label' => 'Unidad de negocio',
                  'class' => 'BcTicCamIpalBundle:UnidadDeNegocio',
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
            'data_class' => 'BcTic\CamIpalBundle\Entity\Meta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bctic_camipalbundle_meta';
    }
}
