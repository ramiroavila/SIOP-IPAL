<?php

namespace BcTic\CamIpalBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class EncuestaImagenesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('siop:encuesta_imagenes')
            ->setDescription('Mejora el tamaño de las imágenes de las encuestas.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("INICIO DE COMANDO");
        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        
        $entities = $em->getRepository('BcTicCamIpalBundle:Encuesta')
                           ->createQueryBuilder('e')->getQuery()->getResult();

        //Recorro todas las encuestas:
        foreach ($entities as $entity) {
          //Son 3 archivos:
          $file = $entity->getFile1();  
          if (strlen($file) > 0) {
            $this->checkAndCopy($file);
          }   
        }                   

        $output->writeln("FIN DE COMANDO");
    }

    private function checkAndCopy($file) {
      //La nueva ruta es /images/uploads
        
    }
}