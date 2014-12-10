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
      <br/>Revisión #85 - 10/12/2014
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
        return array (  537 => 179,  532 => 155,  527 => 139,  516 => 16,  507 => 10,  504 => 9,  498 => 8,  490 => 179,  485 => 176,  479 => 175,  477 => 174,  473 => 173,  468 => 171,  464 => 170,  459 => 168,  455 => 167,  451 => 166,  446 => 165,  437 => 162,  433 => 160,  431 => 159,  426 => 156,  424 => 155,  412 => 151,  408 => 149,  404 => 148,  392 => 144,  388 => 142,  384 => 141,  381 => 140,  379 => 139,  367 => 131,  345 => 124,  342 => 123,  335 => 119,  326 => 115,  320 => 114,  315 => 112,  312 => 111,  310 => 110,  307 => 109,  298 => 105,  291 => 103,  284 => 101,  277 => 99,  263 => 95,  256 => 93,  251 => 91,  248 => 90,  245 => 89,  225 => 82,  216 => 78,  212 => 76,  205 => 75,  199 => 74,  193 => 73,  186 => 72,  180 => 69,  173 => 68,  166 => 67,  164 => 66,  153 => 63,  141 => 61,  132 => 59,  129 => 58,  116 => 54,  109 => 52,  103 => 51,  97 => 50,  90 => 49,  88 => 48,  82 => 45,  79 => 44,  77 => 43,  54 => 29,  40 => 16,  38 => 9,  25 => 1,  1176 => 774,  1169 => 770,  1167 => 769,  1162 => 766,  1157 => 764,  1155 => 763,  1151 => 761,  1144 => 756,  1142 => 755,  1138 => 753,  1134 => 751,  1132 => 750,  1128 => 748,  1121 => 743,  1119 => 742,  1088 => 714,  1083 => 712,  1064 => 696,  1059 => 694,  1040 => 678,  1035 => 676,  1016 => 660,  1011 => 658,  992 => 642,  987 => 640,  968 => 624,  963 => 622,  944 => 606,  939 => 604,  927 => 597,  914 => 587,  899 => 575,  881 => 560,  874 => 556,  859 => 544,  844 => 532,  835 => 526,  825 => 518,  821 => 516,  819 => 515,  790 => 489,  782 => 484,  770 => 475,  761 => 469,  749 => 460,  741 => 455,  729 => 446,  721 => 441,  709 => 432,  701 => 427,  689 => 418,  681 => 413,  669 => 404,  661 => 399,  588 => 329,  574 => 318,  570 => 317,  557 => 307,  519 => 17,  512 => 268,  508 => 266,  506 => 265,  500 => 262,  492 => 180,  466 => 234,  457 => 228,  440 => 214,  435 => 212,  425 => 205,  421 => 154,  417 => 203,  413 => 202,  409 => 201,  405 => 200,  401 => 147,  397 => 198,  370 => 174,  364 => 171,  358 => 127,  352 => 126,  346 => 162,  340 => 122,  334 => 156,  328 => 153,  309 => 141,  270 => 97,  267 => 105,  255 => 97,  252 => 96,  243 => 89,  236 => 85,  230 => 84,  224 => 86,  217 => 85,  215 => 84,  211 => 82,  204 => 81,  197 => 80,  195 => 79,  191 => 77,  184 => 71,  178 => 75,  172 => 74,  165 => 73,  163 => 72,  160 => 64,  152 => 69,  150 => 68,  147 => 62,  140 => 65,  134 => 60,  128 => 63,  121 => 56,  119 => 55,  112 => 57,  73 => 21,  69 => 20,  65 => 37,  58 => 14,  56 => 30,  53 => 12,  50 => 10,  43 => 22,  37 => 5,  34 => 8,  31 => 3,);
    }
}
