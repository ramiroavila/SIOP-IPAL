<?php

/* ::base.html.twig */
class __TwigTemplate_60d27f674898b96d0f0d16d61dac86dd128df77181edf08d08b2b78485af3aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=9\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Leonardo Barrientos C. BC TIC Chile\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <div id=\"header\">
      <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            ";
        // line 29
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 30
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            </button>
            ";
        }
        // line 37
        echo "            <a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Seguridad CAM-LA"), "html", null, true);
        echo "</a>
        </div>

        
          <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
              ";
        // line 43
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 44
            echo "              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Encuestas IPAL"), "html", null, true);
            echo "&nbsp;<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">

                ";
            // line 48
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 1)) {
                // line 49
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 52
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 54
            echo "
                ";
            // line 55
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 2)) {
                // line 56
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "colombia_general"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Colombia"), "html", null, true);
                echo "</a></li>     
                ";
            }
            // line 58
            echo "
                ";
            // line 59
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 3)) {
                // line 60
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 61
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 62
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 63
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 64
            echo "    

                ";
            // line 66
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 4)) {
                // line 67
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "brazil_general"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 68
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "brazil_interno"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Interno"), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 69
            echo "   

                ";
            // line 71
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 5)) {
                // line 72
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 73
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 74
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
                echo "</a></li>
                  <li><a href=\"";
                // line 75
                echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 76
            echo "  

                  <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("encuestas");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Encuestas"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "&nbsp;<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("observaciones_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar Observación"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("observaciones");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Observaciones"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
              ";
        }
        // line 89
        echo "              ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 90
            echo "              <li class=\"dropdown hidden-xs\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mantenedor"), "html", null, true);
            echo "&nbsp;<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("empresas");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresas"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("contratos");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contratos"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("mandantes");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mandantes"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("gerencias");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gerencias"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("subgerencias");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Subgerencias"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("areas");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Áreas"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getPath("servicios");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Servicios"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
              ";
        }
        // line 109
        echo "
              ";
        // line 110
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 111
            echo "              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuarios IPAL"), "html", null, true);
            echo " &nbsp;<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("usuarios_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar Usuario"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("usuarios");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Usuarios"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
              ";
        }
        // line 119
        echo "              
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 122
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 123
            echo "              <li class=\"dropdown hidden-xs\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuario"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 126
            echo $this->env->getExtension('routing')->getPath("usuarios_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cambiar password"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_logout", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cerrar sesión"), "html", null, true);
            echo "</a></li>
                </ul>  
              </li>
              ";
        }
        // line 131
        echo "              <li class=\"hidden-xs\"><img alt=\"logo\" style=\"height:35px; margin-top:7px; margin-right: 13px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"/></li>
            </ul>
          </div>
        
        </div>
      </nav>
    </div>
    <div id=\"content\" class=\"container\">
    ";
        // line 139
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 140
        echo "
    ";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 142
            echo "      <div class=\"alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
    ";
        // line 148
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 149
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
    ";
        // line 155
        $this->displayBlock('body', $context, $blocks);
        // line 156
        echo "    </div>
    <br/>
    <div class=\"footer text-center\">
     ";
        // line 159
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 160
            echo "
     ";
        } else {
            // line 162
            echo "       Cambiar idioma a: <a href=\"";
            echo $this->env->getExtension('routing')->getPath("welcome", array("_locale" => "es"));
            echo "\">Castellano</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("welcome", array("_locale" => "pt"));
            echo "\">Português</a> 
      <br/><br/> 
     ";
        }
        // line 165
        echo "      <img style=\"height:35px; \" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image2.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image3.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image4.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image5.png"), "html", null, true);
        echo "\"/>

      <h4>";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PROMOVIENDO CONDUCTAS SEGURAS"), "html", null, true);
        echo "</h4>
      <p>&copy; ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("CAM - LA - Sistema de Seguridad IPAL y Observaciones siop.cam-la.com"), "html", null, true);
        echo " 
      <br/>
      ";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PREVENCIÓN DE RIESGOS CAM S.A."), "html", null, true);
        echo "
      ";
        // line 174
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 175
            echo "      <br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "html", null, true);
            echo "
      ";
        }
        // line 176
        echo "  
      <br/>Revisión #92 - 30/12/2014
    </p></div>
    ";
        // line 179
        $this->displayBlock('js', $context, $blocks);
        // line 180
        echo "  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sistema de cumplimiento de Seguridad IPAL & OBSERVACIONES - CAM LA"), "html", null, true);
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"//necolas.github.io/normalize.css/3.0.1/normalize.css\">
    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"/css/ui-lightness/jquery-ui-1.10.4.min.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    ";
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script src=\"/js/jquery-ui-1.10.4.min.js\"></script>
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    <script src=\"/js/respond.min.js\"></script>
    ";
    }

    // line 139
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 155
    public function block_body($context, array $blocks = array())
    {
    }

    // line 179
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 179,  532 => 155,  527 => 139,  519 => 17,  516 => 16,  507 => 10,  504 => 9,  498 => 8,  492 => 180,  490 => 179,  485 => 176,  479 => 175,  477 => 174,  473 => 173,  468 => 171,  464 => 170,  459 => 168,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 155,  421 => 154,  412 => 151,  408 => 149,  404 => 148,  401 => 147,  392 => 144,  388 => 142,  367 => 131,  358 => 127,  352 => 126,  345 => 124,  342 => 123,  340 => 122,  335 => 119,  326 => 115,  320 => 114,  315 => 112,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 99,  270 => 97,  263 => 95,  256 => 93,  251 => 91,  248 => 90,  245 => 89,  236 => 85,  225 => 82,  216 => 78,  212 => 76,  205 => 75,  186 => 72,  184 => 71,  180 => 69,  160 => 64,  153 => 63,  134 => 60,  129 => 58,  97 => 50,  90 => 49,  77 => 43,  34 => 8,  84 => 20,  65 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 162,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 141,  381 => 140,  379 => 139,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 111,  309 => 97,  305 => 95,  298 => 105,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 59,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 84,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 55,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 30,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 48,  78 => 21,  46 => 7,  27 => 8,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 67,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 40,  91 => 27,  62 => 12,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 44,  72 => 16,  69 => 25,  47 => 9,  40 => 16,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 8,  43 => 22,  41 => 7,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 74,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 66,  162 => 57,  154 => 58,  149 => 51,  147 => 62,  144 => 49,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 54,  112 => 42,  109 => 52,  106 => 36,  103 => 51,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 45,  80 => 19,  73 => 15,  64 => 17,  60 => 6,  57 => 7,  54 => 29,  51 => 14,  48 => 13,  45 => 17,  42 => 6,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
