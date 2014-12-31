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
                           ->setMaxResults(50)
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
            switch ($cierre) {
              case 'N/A':
                //Puede ser que nunca se editó, en cuyo caso si no tiene incumplimientos es correcto N/A
                $cierre = (count($entity->getIncumplimientos()) > 0) ? "POR VALIDAR" : "N/A";
                break;
              case 'CERRADA':
                break;                
              case 'ABIERTA':
                //puede ser que estè en por validar
                $cierre = (count($entity->getIncumplimientos()) > 0) ? ( ( (  strlen($entity->getCierre()) > 0 ) and ( (strlen($entity->getFileCierre1()) > 0) or (strlen($entity->getFileCierre2()) > 0) )  ) ? "POR VALIDAR" : "ABIERTA" ) : "N/A";                
                break;                
            }

            $sql = "INSERT INTO EncuestaProxy (id,fecha,gerencia,subgerencia,area,inspector,prevencionista,contratista,ipal,tiene_incumplimientos,cantidad_incumplimientos,cierre,incumplimientos_5,incumplimientos_10,incumplimientos_20,incumplimientos_30,incumplimientos_40,incumplimientos_50) VALUES (".$entity->getId().",'".$entity->getFecha()->format('Y-m-d h:i:s')."','".$entity->getContrato()->getSubGerencia()->getGerencia()->getNombre()."','".$entity->getContrato()->getSubGerencia()->getNombre()."','".$entity->getContrato()->getArea()->getNombre()."','".$entity->getInspector()."','".$entity->getPrevencionista()."','".(($entity->getCttaSubcont() === null) ? " -- SIN CONTRATISTA -- " : $entity->getCttaSubcont()->getNombre())."','".$entity->getIndiceIpal()."',".((count($entity->getIncumplimientos()) > 0) ? 1 : 0 ).",".(count($entity->getIncumplimientos())).",'".$cierre."',".$entity->getHits(5).",".$entity->getHits(10).",".$entity->getHits(20).",".$entity->getHits(30).",".$entity->getHits(40).",".$entity->getHits(50).")";

            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute();

            //UPDATE:
            $sql = "UPDATE EncuestaProxy SET incumplimientos_json = '".json_encode($entity->getIncumplimientos())."' WHERE id = ".$entity->getId();
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