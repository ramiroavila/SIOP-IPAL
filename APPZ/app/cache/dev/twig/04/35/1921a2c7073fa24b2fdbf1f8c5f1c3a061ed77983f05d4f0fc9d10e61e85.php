<?php

/* BcTicCamIpalBundle:Usuario:edit.html.twig */
class __TwigTemplate_04351921a2c7073fa24b2fdbf1f8c5f1c3a061ed77983f05d4f0fc9d10e61e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BcTicCamIpalBundle::edit.html.twig");

        $this->blocks = array(
            'breadcrumb_list' => array($this, 'block_breadcrumb_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BcTicCamIpalBundle::edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["title"] = ("Usuario " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"));
        // line 8
        $context["back_path"] = $this->env->getExtension('routing')->getPath("usuarios");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb_list($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("usuarios");
        echo "\">Usuarios</a>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  27 => 8,  25 => 7,);
    }
}
