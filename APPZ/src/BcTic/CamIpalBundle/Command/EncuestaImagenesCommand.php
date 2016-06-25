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
            ->setDescription('Sube las imágenes a Amazon S3 y elimina las imágenes que se han subido.')
            ->addArgument('file', InputArgument::REQUIRED)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("INICIO DE COMANDO");

        $file = $input->getArgument('file');
        $output->writeln("UPLOADING ".$file);

        $s3 = $this->getContainer()->get('aws_s3client');

        $result = $s3->putObject(array(
          'Bucket'       => "backup-4040-cam-la",
          'Key'          => "uploads-web-siop.cam-la.com/".$file,
          'SourceFile'   => $file,
          'ContentType'  => 'text/plain',
          'ACL'          => 'public-read',
          'StorageClass' => 'STANDARD',
          'Metadata'     => array()
        ));

        if (isset($result)) {
          if (isset($result['@metadata'])) {
            if (isset($result['@metadata']['statusCode'])) {
              if ($result['@metadata']['statusCode'] == 200) {
                unlink($file);
                $output->writeln("OK - Archivo ".$file." en S3, se borra.");
              }
            }
          }
        }

        $output->writeln("FIN DE COMANDO");
    }

}
