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
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("metas");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Metas"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
              ";
        }
        // line 111
        echo "
              ";
        // line 112
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 113
            echo "              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuarios IPAL"), "html", null, true);
            echo " &nbsp;<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("usuarios_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar Usuario"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 117
            echo $this->env->getExtension('routing')->getPath("usuarios");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Usuarios"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
              ";
        }
        // line 121
        echo "              
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 124
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 125
            echo "              <li class=\"dropdown hidden-xs\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuario"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 128
            echo $this->env->getExtension('routing')->getPath("usuarios_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cambiar password"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_logout", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cerrar sesión"), "html", null, true);
            echo "</a></li>
                </ul>  
              </li>
              ";
        }
        // line 133
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
        // line 141
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 142
        echo "
    ";
        // line 143
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 144
            echo "      <div class=\"alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
    ";
        // line 150
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 151
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
    ";
        // line 157
        $this->displayBlock('body', $context, $blocks);
        // line 158
        echo "    </div>
    <br/>
    <div class=\"footer text-center\">
     ";
        // line 161
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 162
            echo "
     ";
        } else {
            // line 164
            echo "       Cambiar idioma a: <a href=\"";
            echo $this->env->getExtension('routing')->getPath("welcome", array("_locale" => "es"));
            echo "\">Castellano</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("welcome", array("_locale" => "pt"));
            echo "\">Português</a> 
      <br/><br/> 
     ";
        }
        // line 167
        echo "      <img style=\"height:35px; \" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image2.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image3.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image4.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image5.png"), "html", null, true);
        echo "\"/>

      <h4>";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PROMOVIENDO CONDUCTAS SEGURAS"), "html", null, true);
        echo "</h4>
      <p>&copy; ";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("CAM - LA - Sistema de Seguridad IPAL y Observaciones siop.cam-la.com"), "html", null, true);
        echo " 
      <br/>
      ";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PREVENCIÓN DE RIESGOS CAM S.A."), "html", null, true);
        echo "
      ";
        // line 176
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 177
            echo "      <br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "html", null, true);
            echo "
      ";
        }
        // line 178
        echo "  
      <br/>Revisión #98 - 08/01/2015
    </p></div>
    ";
        // line 181
        $this->displayBlock('js', $context, $blocks);
        // line 182
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

    // line 141
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 157
    public function block_body($context, array $blocks = array())
    {
    }

    // line 181
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
        return array (  544 => 181,  539 => 157,  534 => 141,  526 => 17,  523 => 16,  514 => 10,  511 => 9,  505 => 8,  499 => 182,  497 => 181,  492 => 178,  486 => 177,  484 => 176,  480 => 175,  475 => 173,  471 => 172,  466 => 170,  462 => 169,  458 => 168,  453 => 167,  444 => 164,  440 => 162,  438 => 161,  433 => 158,  431 => 157,  428 => 156,  419 => 153,  415 => 151,  411 => 150,  408 => 149,  399 => 146,  395 => 144,  391 => 143,  388 => 142,  386 => 141,  374 => 133,  365 => 129,  359 => 128,  352 => 126,  349 => 125,  347 => 124,  342 => 121,  333 => 117,  327 => 116,  322 => 114,  319 => 113,  317 => 112,  314 => 111,  305 => 107,  298 => 105,  291 => 103,  284 => 101,  277 => 99,  270 => 97,  263 => 95,  256 => 93,  251 => 91,  248 => 90,  245 => 89,  236 => 85,  230 => 84,  225 => 82,  216 => 78,  212 => 76,  205 => 75,  199 => 74,  193 => 73,  186 => 72,  184 => 71,  180 => 69,  173 => 68,  166 => 67,  164 => 66,  160 => 64,  153 => 63,  147 => 62,  141 => 61,  134 => 60,  132 => 59,  129 => 58,  121 => 56,  119 => 55,  116 => 54,  109 => 52,  103 => 51,  97 => 50,  90 => 49,  88 => 48,  82 => 45,  79 => 44,  77 => 43,  65 => 37,  56 => 30,  54 => 29,  43 => 22,  40 => 16,  38 => 9,  34 => 8,  25 => 1,);
    }
}
