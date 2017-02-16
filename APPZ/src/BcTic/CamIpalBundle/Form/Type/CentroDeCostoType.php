<?php

namespace BcTic\CamIpalBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CentroDeCostoType extends AbstractType
{
  private $centroDeCostoChoices;

  public function __construct(array $centroDeCostoChoices)
  {
      $this->centroDeCostoChoices = $centroDeCostoChoices;
  }

  public function configureOptions(OptionsResolver $resolver)
  {
      $resolver->setDefaults(array(
          'choices' => $this->centroDeCostoChoices,
      ));
  }


  public function getParent()
  {
      return ChoiceType::class;
  }
}
