<?php

namespace BcTic\CamIpalBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use BcTic\CamIpalBundle\Entity\Encuesta as Encuesta;

class EncuestaAvisaCierrePendienteCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('siop:encuesta_avise_cierre_pendiente')
            ->setDescription('Envía aviso de Encuestas de tipo ABIERTA')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("INICIO DE COMANDO");
        $em = $this->getContainer()->get('doctrine')->getEntityManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Encuesta')
                           ->createQueryBuilder('e')
                           ->where('e.statusCierre = :status')
                           ->setParameters(array('status' => 'ABIERTA'))
                           ->orderBy('e.id','DESC')
                           ->getQuery()->getResult();

        //Recorro todas las encuestas:
        $i = 0;
        foreach ($entities as $entity) {
          $notificar = false;
          //Tiene incumplimiento 50:
          if (count($entity->getIncumplimientos50()) > 0) {
            //Ha pasado más de 1 día desde la creación:
            if ( ($entity->getCreatedAt() + (24 * 3600)) < date('U')) {
                $notificar = true;
            }
          } else {
            //Ha pasado más de 7 días desde la creación:
            if ( ($entity->getCreatedAt() + (7 * 24 * 3600)) < date('U')) {
                $notificar = true;
            }
          }

          if ($notificar) {
            //Han pasado más de 30 días?
            if (   (date('U') - (60 * 24 * 3600)) > $entity->getCreatedAt()  ) {
              //Do Nothing - Han pasado más de 30 días
              $output->writeln("NO SE NOTIFICARÁ LA ENCUESTA #".$entity->getId().' POR SER MAYOR A 60 DIAS.');
            } else {
              $this->notificar($entity,$output, $em);
            }
          }

        }

    }

    protected function notificar(Encuesta $entity, OutputInterface $output, $em) {

      //Avisar al usuario que creó la Encuesta
      $usuarios = $em->getRepository('BcTicCamIpalBundle:Usuario')->findBy(array('username' => $entity->getCreatedBy()));
      if (count($usuarios) == 0) return;
      $usuario = $usuarios[0];

      //REDACTO EL EMAIL:
      $rendered = $this->getContainer()->get('templating')->render('BcTicCamIpalBundle:Encuesta:aviso-cierre-email.html.twig', array(
                    'entity' => $entity,
                    'usuario' => $usuario,
                ));

      //SI NO TIENE EMAIL NO SE AVISA

      if (filter_var($usuario->getEmail(), FILTER_VALIDATE_EMAIL) === false) {
        $output->writeln("NO SE NOTIFICARÁ LA ENCUESTA #".$entity->getId().' POR QUE NO TIENE EMAIL.');
        return;
      }

      $destinatario = (filter_var($usuario->getEmail(), FILTER_VALIDATE_EMAIL) === false) ? 'ipal@cam-la.com' : $usuario->getEmail() ;

      $output->writeln("SE NOTIFICARÁ LA ENCUESTA #".$entity->getId().' AL EMAIL '.$destinatario);

      $message = \Swift_Message::newInstance()
                ->setSubject('IPAL #'.$entity->getId().' EN ESTADO ABIERTA')
                ->setFrom(array('siop@siop.cam-la.com' => 'SIOP CAM LA'))
                ->setTo($destinatario)
                ->setCharset('UTF-8')
                ->setContentType('text/html')
                ->setBody($rendered);

      $this->getContainer()->get('mailer')->send($message);

    }

}
