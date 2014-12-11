<?php

/* BcTicCamIpalBundle:Usuario:index.html.twig */
class __TwigTemplate_84e920d48aecb4f15723c72847cee580390084c04f3ce9bd2fec762e89588719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BcTicCamIpalBundle::search.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "BcTicCamIpalBundle::search.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = "Usuarios";
        // line 4
        $context["path_new"] = $this->env->getExtension('routing')->getPath("usuarios_new");
        // line 5
        $context["path_action"] = $this->env->getExtension('routing')->getPath("usuarios_search");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  26 => 4,  24 => 3,);
    }
}
