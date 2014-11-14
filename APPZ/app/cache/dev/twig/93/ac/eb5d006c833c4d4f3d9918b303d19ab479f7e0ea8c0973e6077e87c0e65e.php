<?php

/* BcTicCamIpalBundle:Security:login.html.twig */
class __TwigTemplate_93aceb5d006c833c4d4f3d9918b303d19ab479f7e0ea8c0973e6077e87c0e65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container login\" style=\"width: 70%;\"> 

<h4 class=\"text-center text-primary hidden-xs\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("INSPECCIONES Y OBSERVACIONES DE SEGURIDAD"), "html", null, true);
        echo "</h4>
<h5 class=\"text-center text-primary hidden-lg\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("INSPECC. Y OBSERVACIONES DE SEGURIDAD"), "html", null, true);
        echo "</h5>
<br/>

";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "   <div class=\"alert alert-danger alert-dismissable\">
     ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "
   </div>
";
        }
        // line 17
        echo "
<form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
  <div class=\"form-group\">
    <label for=\"username\" class=\"col-sm-3 control-label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuario"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-9\">
      <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\"  value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"  placeholder=\"CL00000000\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"password\" class=\"col-sm-3 control-label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-9\">
      <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contraseña"), "html", null, true);
        echo "\" />
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
      <button type=\"submit\" class=\"btn btn-default\" name=\"login\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ingresar"), "html", null, true);
        echo "</button>
    </div>
  </div>
</form>
</div>


";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  81 => 28,  76 => 26,  69 => 22,  64 => 20,  59 => 18,  56 => 17,  50 => 14,  47 => 13,  45 => 12,  39 => 9,  35 => 8,  31 => 6,  28 => 4,);
    }
}
