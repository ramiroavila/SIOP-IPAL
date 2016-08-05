<?php

namespace BcTic\CamIpalBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;

class RutType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return "Symfony\Component\Form\Extension\Core\Type\TextType";
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'rut';
    }
}
