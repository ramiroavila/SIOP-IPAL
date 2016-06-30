<?php

namespace BcTic\CamIpalBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class EncuestaCalculaIndiceCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('siop:encuesta_indice')
            ->setDescription('Calcula el índice IPAL de las últimas 50 encuestas cuyo valor es -1')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("INICIO DE COMANDO");
        $em = $this->getContainer()->get('doctrine')->getEntityManager();

        $entities = $em->getRepository('BcTicCamIpalBundle:Encuesta')
                           ->createQueryBuilder('e')
                           ->where('e.indice = -1')
                           ->setMaxResults(1000)
                           ->orderBy('e.id','DESC')
                           ->getQuery()->getResult();

        //Recorro todas las encuestas:
        $i = 0;
        foreach ($entities as $entity) {
            $entity->setIndice($entity->getIndiceIpal());

            //BORRO EL ID CORRESPONDIENTE:
            $sql = "DELETE FROM EncuestaProxy WHERE id = ".$entity->getId();
            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute();

            //HAGO EL INSERT DE MYSQL RAW:
            $cierre = $entity->getStatusCierre();
            $agrupacion = $entity->getRespuestasAgrupadas();
            $sql = "INSERT INTO EncuestaProxy (id,fecha,gerencia,subgerencia,area,inspector,prevencionista,contratista,contrato,supervisor, lugar,ipal,tiene_incumplimientos,cantidad_incumplimientos,cierre, cierre_texto,incumplimientos_5,incumplimientos_10,incumplimientos_20,incumplimientos_30,incumplimientos_40,incumplimientos_50, respuestas_0, respuestas_1, respuestas_2, auto_inspeccion, charla_operativa, tipo) VALUES (".$entity->getId().",'".$entity->getFecha()->format('Y-m-d h:i:s')."','".addslashes($entity->getContrato()->getSubGerencia()->getGerencia()->getNombre())."','".addslashes($entity->getContrato()->getSubGerencia()->getNombre())."','".addslashes($entity->getContrato()->getArea()->getNombre())."','".addslashes($entity->getInspector())."','".addslashes($entity->getPrevencionista())."','".(($entity->getCttaSubcont() === null) ? " -- SIN CONTRATISTA -- " : addslashes($entity->getCttaSubcont()->getNombre()))."','".addslashes($entity->getContrato()->getNombre())."','".addslashes($entity->getSupervisor())."','".addslashes($entity->getLugarDeTrabajo())."','".addslashes($entity->getIndiceIpal())."',".((count($entity->getIncumplimientos()) > 0) ? 1 : 0 ).",".(count($entity->getIncumplimientos())).",'".addslashes($cierre)."','".addslashes($entity->getCierre())."',".$entity->getHits(5).",".$entity->getHits(10).",".$entity->getHits(20).",".$entity->getHits(30).",".$entity->getHits(40).",".$entity->getHits(50).",".$agrupacion[0].",".$agrupacion[1].",".$agrupacion[2].", '".$entity->getAutoInspeccion()."', '".$entity->getCharlaOperativa()."', '".strtoupper($entity->getKey())."')";

            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute();

            //UPDATE:
            $sql = "UPDATE EncuestaProxy SET incumplimientos_json = '".json_encode($entity->getIncumplimientos())."', incumplimientos_50_json = '".json_encode($entity->getIncumplimientos50())."' WHERE id = ".$entity->getId();
            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute();

            $em->persist($entity);
            $em->flush();
            $i++;
        }

        $em->flush();
        $output->writeln("ENCUESTAS CALCULADAS: ".$i);
        $output->writeln("FIN DE COMANDO");
    }


}
