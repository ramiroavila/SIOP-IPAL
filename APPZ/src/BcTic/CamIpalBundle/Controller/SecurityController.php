<?php

namespace BcTic\CamIpalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{

    /**
     * @Route("/{_locale}", defaults={"_locale"="es"}, requirements={"_locale" = "pt|es"},  name="welcome")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        return array();
    }

    /**
     *
     * @Route("/login/{_locale}", name="_login", defaults={"_locale"="es"}, requirements={"_locale" = "pt|es"})
     * @Template()
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

         // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'BcTicCamIpalBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }
    /**
     *
     * @Route("/logout/{_locale}", name="_logout", defaults={"_locale"="es"}, requirements={"_locale" = "pt|es"})
     * @Template()
     */
    public function logoutAction() {
        //do whatever you want here

        $locale = $request->getLocale();
        //clear the token, cancel session and redirect
        $this->get('security.context')->setToken(null);
        $this->get('request')->getSession()->invalidate();
        return $this->redirect($this->generateUrl('_login', array('_locale' => $locale)));
    }
}
