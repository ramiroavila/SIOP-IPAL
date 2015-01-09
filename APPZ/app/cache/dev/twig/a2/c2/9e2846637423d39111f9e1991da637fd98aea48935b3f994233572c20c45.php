<?php

/* BcTicCamIpalBundle:Usuario:results.html.twig */
class __TwigTemplate_a2c29e2846637423d39111f9e1991da637fd98aea48935b3f994233572c20c45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BcTicCamIpalBundle::results.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "BcTicCamIpalBundle::results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = "Usuarios";
        // line 4
        $context["data"] = array("username" => "Usuario", "nombre" => "Nombre", "visible" => "Visible", "pais" => "País", "roles" => "Roles");
        // line 5
        $context["path_previous"] = $this->env->getExtension('routing')->getPath("usuarios", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
        // line 6
        $context["path_next"] = $this->env->getExtension('routing')->getPath("usuarios", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1)));
        // line 7
        $context["path_new"] = $this->env->getExtension('routing')->getPath("usuarios_new");
        // line 8
        $context["path_key_edit"] = "usuarios_edit";
        // line 9
        $context["path_key_delete"] = "usuarios_delete";
        // line 10
        $context["path_action_previous"] = $this->env->getExtension('routing')->getPath("usuarios_search", array("key" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
        // line 11
        $context["path_action_next"] = $this->env->getExtension('routing')->getPath("usuarios_search", array("key" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1)));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Usuario:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,);
    }
}
