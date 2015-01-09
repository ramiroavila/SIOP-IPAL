<?php

/* BcTicCamIpalBundle:Security:index.html.twig */
class __TwigTemplate_1b81c880f14974e3437bf1abecf1905890be898b8e49b29427975e3bc79ddc06 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bienvenido"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("utiliza las opciones del menú superior para navegar en la aplicación o los botones siguientes"), "html", null, true);
        echo ":</h4>

<div class=\"container\" style=\"width:300px; margin-top:33px;\">
  <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("encuestas");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reportes IPAL"), "html", null, true);
        echo "</button></a>
  <br/>


  <div class=\"btn-group btn-block\">
  <button type=\"button\" class=\"btn btn-warning btn-lg btn-block dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL"), "html", null, true);
        echo "&nbsp;<span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu btn-block\" role=\"menu\">

      ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 1)) {
            // line 18
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 2)) {
            // line 25
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "colombia_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Colombia"), "html", null, true);
            echo "</a></li>     
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 3)) {
            // line 29
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 33
        echo "    

    ";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 4)) {
            // line 36
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "brazil_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "brazil_interno"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Interno"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 38
        echo "   

    ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 5)) {
            // line 41
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 45
        echo "  


  </ul>
  </div>
  <br/>
  <br/>
  <div class=\"btn-group btn-block\">
  <button type=\"button\" class=\"btn btn-success btn-lg btn-block dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Formularios PDF"), "html", null, true);
        echo "&nbsp;<span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu btn-block\" role=\"menu\">
    ";
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 1)) {
            // line 58
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 64
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 2)) {
            // line 65
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "colombia_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Colombia"), "html", null, true);
            echo "</a></li>





    <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li> 
    ";
        }
        // line 73
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 3)) {
            // line 74
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 79
        echo "    
    ";
        // line 80
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 4)) {
            // line 81
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "brazil_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "brazil_interno"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Interno"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 84
        echo "   
    ";
        // line 85
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 5)) {
            // line 86
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 91
        echo "  
  </ul>
  </div>
  <br/>
  <br/>
  <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("observaciones");
        echo "\">
  <button type=\"button\" class=\"btn btn-info btn-lg btn-block\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
        echo "</button></a>
  <br/>
  <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("metas_dashboard");
        echo "\"><button type=\"button\" class=\"btn btn-danger btn-lg btn-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Metas"), "html", null, true);
        echo "</button></a>
  

</div>

";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Security:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 99,  365 => 97,  361 => 96,  354 => 91,  347 => 90,  341 => 89,  335 => 88,  329 => 87,  322 => 86,  320 => 85,  317 => 84,  310 => 83,  304 => 82,  297 => 81,  295 => 80,  292 => 79,  285 => 78,  279 => 77,  273 => 76,  267 => 75,  260 => 74,  257 => 73,  250 => 71,  238 => 65,  235 => 64,  228 => 62,  222 => 61,  216 => 60,  210 => 59,  203 => 58,  201 => 57,  195 => 54,  184 => 45,  177 => 44,  171 => 43,  165 => 42,  158 => 41,  156 => 40,  152 => 38,  145 => 37,  138 => 36,  136 => 35,  132 => 33,  125 => 32,  119 => 31,  113 => 30,  106 => 29,  104 => 28,  101 => 27,  93 => 25,  91 => 24,  88 => 23,  81 => 21,  75 => 20,  69 => 19,  62 => 18,  60 => 17,  53 => 13,  42 => 7,  31 => 4,  28 => 3,);
    }
}
