<?php

/* BcTicCamIpalBundle:Encuesta:notificacion.html.twig */
class __TwigTemplate_3b44534afae58dffac65208929291cd80b9f07faa85f5885b285f4ab2de0ddba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <head></head>
  <body>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("El sistema SIOP le notifica que se acaba de ingresar la encuesta IPAL"), "html", null, true);
        echo " # ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de tipo"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("de la empresa"), "html", null, true);
        echo " ";
        if (array_key_exists("empresa", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "html", null, true);
            echo " ";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("que contiene incumplimientos 50 de los siguientes items"), "html", null, true);
        echo ": </p>
    <p>
    <ul>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["incumplimientos"]) ? $context["incumplimientos"] : $this->getContext($context, "incumplimientos")));
        foreach ($context['_seq'] as $context["key"] => $context["incumplimiento"]) {
            // line 8
            echo "        <li> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["incumplimiento"]) ? $context["incumplimiento"] : $this->getContext($context, "incumplimiento"))), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['incumplimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
    </p>

    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresa"), "html", null, true);
        echo ": ";
        if (array_key_exists("empresa", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "html", null, true);
            echo " ";
        }
        echo " </p>
    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contrato"), "html", null, true);
        echo ": ";
        if (array_key_exists("contrato", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["contrato"]) ? $context["contrato"] : $this->getContext($context, "contrato")), "html", null, true);
            echo " ";
        }
        echo " </p>
    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inspector"), "html", null, true);
        echo ": ";
        if (array_key_exists("inspector", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["inspector"]) ? $context["inspector"] : $this->getContext($context, "inspector")), "html", null, true);
            echo " ";
        }
        echo " </p>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supervisor"), "html", null, true);
        echo ": ";
        if (array_key_exists("supervisor", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["supervisor"]) ? $context["supervisor"] : $this->getContext($context, "supervisor")), "html", null, true);
            echo " ";
        }
        echo " </p>
    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lugar"), "html", null, true);
        echo ": ";
        if (array_key_exists("lugar", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["lugar"]) ? $context["lugar"] : $this->getContext($context, "lugar")), "html", null, true);
            echo " ";
        }
        echo " </p>
    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
        echo ": ";
        if (array_key_exists("observaciones", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["observaciones"]) ? $context["observaciones"] : $this->getContext($context, "observaciones")), "html", null, true);
            echo " ";
        }
        echo " </p>
              
<p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Atte"), "html", null, true);
        echo ".<br/>
Sistema IPAL<br/>
http://siop.cam-la.com<br/>
</p>

<p>* ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ESTE ES UN EMAIL GENERADO AUTOMÁTICAMENTE, NO LO RESPONDA"), "html", null, true);
        echo ".</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:notificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 25,  125 => 20,  114 => 18,  104 => 17,  94 => 16,  84 => 15,  74 => 14,  64 => 13,  59 => 10,  50 => 8,  46 => 7,  24 => 4,  19 => 1,);
    }
}
