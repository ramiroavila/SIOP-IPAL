<?php

namespace BcTic\CamIpalBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SurveyMultipleType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                1 => '1 - De fácil solución y urgente',
                2 => '2 - De fácil solución no urgente',
                3 => '3 - Mediana dificultad de solución y urgente',
                4 => '4 - Mediana dificultad de solución y no urgente',
                5 => '5 - Dificil solución, urgente o no',
            )
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'survey';
    }
}