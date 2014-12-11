<?php

/* BcTicCamIpalBundle::edit.html.twig */
class __TwigTemplate_bd23ef3e617e6806061a47c602d2b88e5add433176ba74b048884903caede5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumb_list' => array($this, 'block_breadcrumb_list'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "<ol class=\"breadcrumb\">
  <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inicio"), "html", null, true);
        echo "</a></li>
  <li class=\"active\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mantenedor"), "html", null, true);
        echo "</li>
  <li>";
        // line 7
        $this->displayBlock('breadcrumb_list', $context, $blocks);
        echo "</li>
  <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 7
    public function block_breadcrumb_list($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Editar"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " </h3>

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <p class=\"text-left\">
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["back_path"]) ? $context["back_path"] : $this->getContext($context, "back_path")), "html", null, true);
        echo "\">
      <button type=\"button\" class=\"btn btn-default btn-xs\">
        <span class=\"glyphicon glyphicon-th-list\"></span> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Volver"), "html", null, true);
        echo "  
      </button>
    </a>
    </p>      


";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  79 => 18,  73 => 15,  65 => 13,  62 => 12,  57 => 7,  50 => 8,  46 => 7,  42 => 6,  36 => 5,  33 => 4,  30 => 3,  35 => 4,  32 => 3,  27 => 8,  25 => 7,);
    }
}
