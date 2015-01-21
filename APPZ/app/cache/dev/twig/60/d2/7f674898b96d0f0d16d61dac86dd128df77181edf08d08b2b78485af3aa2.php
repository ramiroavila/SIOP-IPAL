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
                  ";
            // line 79
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 80
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("metas_dashboard");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Metas"), "html", null, true);
                echo "</a></li>
                  ";
            }
            // line 82
            echo "                </ul>
              </li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "&nbsp;<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("observaciones_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar Observación"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("observaciones");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Observaciones"), "html", null, true);
            echo "</a></li>
                  ";
            // line 89
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 90
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("metas_observaciones_dashboard");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Metas"), "html", null, true);
                echo "</a></li>
                  ";
            }
            // line 92
            echo "                </ul>
              </li>
              ";
        }
        // line 95
        echo "              ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 96
            echo "              <li class=\"dropdown hidden-xs\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mantenedor"), "html", null, true);
            echo "&nbsp;<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("empresas");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresas"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("contratos");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contratos"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("mandantes");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mandantes"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getPath("gerencias");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gerencias"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("subgerencias");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Subgerencias"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("areas");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Áreas"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("servicios");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Servicios"), "html", null, true);
            echo "</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("metas");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Metas"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
              ";
        }
        // line 117
        echo "
              ";
        // line 118
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 119
            echo "              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuarios IPAL"), "html", null, true);
            echo " &nbsp;<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 122
            echo $this->env->getExtension('routing')->getPath("usuarios_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar Usuario"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("usuarios");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Usuarios"), "html", null, true);
            echo "</a></li>
                </ul>
              </li>
              ";
        }
        // line 127
        echo "              
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 130
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 131
            echo "              <li class=\"dropdown hidden-xs\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usuario"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 134
            echo $this->env->getExtension('routing')->getPath("usuarios_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cambiar password"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_logout", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cerrar sesión"), "html", null, true);
            echo "</a></li>
                </ul>  
              </li>
              ";
        }
        // line 139
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
        // line 147
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 148
        echo "
    ";
        // line 149
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 150
            echo "      <div class=\"alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
    ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 157
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
    ";
        // line 163
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "    </div>
    <br/>
    <div class=\"footer text-center\">
     ";
        // line 167
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 168
            echo "
     ";
        } else {
            // line 170
            echo "       Cambiar idioma a: <a href=\"";
            echo $this->env->getExtension('routing')->getPath("welcome", array("_locale" => "es"));
            echo "\">Castellano</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("welcome", array("_locale" => "pt"));
            echo "\">Português</a> 
      <br/><br/> 
     ";
        }
        // line 173
        echo "      <img style=\"height:35px; \" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image2.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image3.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image4.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image5.png"), "html", null, true);
        echo "\"/>

      <h4>";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PROMOVIENDO CONDUCTAS SEGURAS"), "html", null, true);
        echo "</h4>
      <p>&copy; ";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("CAM - LA - Sistema de Seguridad IPAL y Observaciones siop.cam-la.com"), "html", null, true);
        echo " 
      <br/>
      ";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PREVENCIÓN DE RIESGOS CAM S.A."), "html", null, true);
        echo "
      ";
        // line 182
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 183
            echo "      <br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "html", null, true);
            echo "
      ";
        }
        // line 184
        echo "  
      <br/>Revisión #103 - 21/01/2015
    </p></div>
    ";
        // line 187
        $this->displayBlock('js', $context, $blocks);
        // line 188
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

    // line 147
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 163
    public function block_body($context, array $blocks = array())
    {
    }

    // line 187
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
        return array (  568 => 187,  563 => 163,  558 => 147,  550 => 17,  547 => 16,  538 => 10,  535 => 9,  529 => 8,  523 => 188,  521 => 187,  516 => 184,  510 => 183,  508 => 182,  504 => 181,  499 => 179,  495 => 178,  490 => 176,  486 => 175,  482 => 174,  477 => 173,  468 => 170,  464 => 168,  462 => 167,  457 => 164,  455 => 163,  452 => 162,  443 => 159,  439 => 157,  435 => 156,  432 => 155,  423 => 152,  419 => 150,  415 => 149,  412 => 148,  410 => 147,  398 => 139,  389 => 135,  383 => 134,  376 => 132,  373 => 131,  371 => 130,  366 => 127,  357 => 123,  351 => 122,  346 => 120,  343 => 119,  341 => 118,  338 => 117,  329 => 113,  322 => 111,  315 => 109,  308 => 107,  301 => 105,  294 => 103,  287 => 101,  280 => 99,  275 => 97,  272 => 96,  269 => 95,  264 => 92,  256 => 90,  254 => 89,  248 => 88,  242 => 87,  237 => 85,  232 => 82,  224 => 80,  222 => 79,  216 => 78,  212 => 76,  205 => 75,  199 => 74,  193 => 73,  186 => 72,  184 => 71,  180 => 69,  173 => 68,  166 => 67,  164 => 66,  160 => 64,  153 => 63,  147 => 62,  141 => 61,  134 => 60,  132 => 59,  129 => 58,  121 => 56,  119 => 55,  116 => 54,  109 => 52,  103 => 51,  97 => 50,  90 => 49,  88 => 48,  82 => 45,  79 => 44,  77 => 43,  65 => 37,  56 => 30,  54 => 29,  43 => 22,  40 => 16,  38 => 9,  34 => 8,  25 => 1,);
    }
}
