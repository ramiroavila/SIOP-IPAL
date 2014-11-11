<?php

namespace BcTic\CamIpalBundle\Form;

use Symfony\Component\Form\AbstractType;
use BcTic\CamIpalBundle\Form\Type\RadioExpandedChoiceType;
use BcTic\CamIpalBundle\Form\Type\EntityHiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistroDeObservacionType extends AbstractType
{

   /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('valor', new RadioExpandedChoiceType(), array(
            'choices'   => array(1 => 'Seguro', 2 => 'Peligroso', 3 => 'No aplica'),
            'expanded'  => true,
           ))
          ->add('notas','textarea', array('required' => ''))
          ->add('observacion', 'entity_hidden', array(
              'class' => 'BcTic\CamIpalBundle\Entity\Observacion',
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BcTic\CamIpalBundle\Entity\RegistroDeObservacion',
        ));
    }

    public function getName()
    {
        return 'registro_de_observacion';
    }
}
