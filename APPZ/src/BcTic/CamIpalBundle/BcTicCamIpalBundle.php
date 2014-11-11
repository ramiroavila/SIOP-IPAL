<?php

namespace BcTic\CamIpalBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Response;

class BcTicCamIpalBundle extends Bundle
{
       /*
  public function onKernelRequest(GetResponseEvent $event)
  {
  
       $request = $event->getRequest();
    
       $request->setRequestFormat('mobile');
  

        if 
        {
            //ONLY AFFECT HTML REQUESTS
            //THIS ENSURES THAT YOUR JSON REQUESTS TO E.G. REST API, DO NOT GET SERVED TEXT/HTML CONTENT-TYPE
            if ($request->getRequestFormat() == "html")
            {
                $request->setRequestFormat('mobile');
            }
        }
  } */
}
