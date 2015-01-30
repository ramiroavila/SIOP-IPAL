<?php

/* BcTicCamIpalBundle:Encuesta:show.html.twig */
class __TwigTemplate_e45987137d0d9eea0e0690cab527dec1f564cc556f90a11f1630f2ce9b2380df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_pdf.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["logo"] = "images/logo.jpg";
        // line 3
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key") == "telecomunicaciones")) {
            // line 4
            $context["logo"] = "images/logo-coasin.png";
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
     <div class=\"col-md-3 text-center\">
       <img alt=\"logo\" style=\"height:65px; margin-top:7px;\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo"))), "html", null, true);
        echo "\"/>
     </div>  
     <div class=\"col-md-9\">
       <h3 class=\"text-center\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("INSPECCIÓN DE SEGURIDAD"), "html", null, true);
        echo "</h3>
       <h5 class=\"text-center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PREVENCIÓN DE RIESGOS CAM"), "html", null, true);
        echo "</h5>
     </div>  
  </div>
  <br/>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered \">
        <tbody>
          <tr>
            <th colspan=\"3\" class=\"text-center\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ANTECEDENTES GENERALES"), "html", null, true);
        echo "</th>
            <th style=\"width: 25%;\">Nº ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</th>
          </tr> 
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresa"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "empresa"), "nombre"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Área de Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "area"), "nombre"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td style=\"width: 25%;\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fecha"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "d/m/Y"), "html", null, true);
        echo "</td>
            <td style=\"width: 25%;\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hora"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hora"), "h:i"), "html", null, true);
        echo "</td>
            <td colspan=\"2\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actividad"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actividad")), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td colspan=\"3\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lugar de Trabajo"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lugarDeTrabajo")), "html", null, true);
        echo "</th>
            <td style=\"width: 25%;\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nº de empleados"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numDeEmpleados"), "html", null, true);
        echo "</th>
          </tr>
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nombre Inspector"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "inspector"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contrato"), "html", null, true);
        echo ": #";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "numero"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "nombre"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supervisor de Trabajo"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "supervisorFacade"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Subgerencia Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "subGerencia"), "nombre"), "html", null, true);
        echo "</td>
          </tr> 
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gerencia Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "subGerencia"), "gerencia"), "nombre"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mandante"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "mandante"), "name"), "html", null, true);
        echo "</td>
          </tr>                                  
        </tbody>
      </table>
    </div>
  </div>

  ";
        // line 56
        $template = $this->env->resolveTemplate((("BcTicCamIpalBundle:Encuesta:show_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key")) . ".html.twig"));
        $template->display($context);
        // line 57
        echo "
   <div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered \">
        <tbody>
          <tr>
            <th colspan=\"3\">I-12 ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
        echo ":</th>
          </tr> 
          <tr>
            <td colspan=\"3\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observaciones"), "html", null, true);
        echo "<br/></td>
          </tr> 
          <tr>
            <td style=\"width: 33%\">
              ";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file1")) > 5)) {
            // line 71
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file1")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 73
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "</i>
               ";
        }
        // line 75
        echo "            </td>
            <td style=\"width: 33%\">
              ";
        // line 77
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file2")) > 5)) {
            // line 78
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file2")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 80
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2"), "html", null, true);
            echo "</i>
               ";
        }
        // line 82
        echo "            </td>
            <td style=\"width: 34%\">
              ";
        // line 84
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file3")) > 5)) {
            // line 85
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file3")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 3"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 87
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 3"), "html", null, true);
            echo "</i>
               ";
        }
        // line 89
        echo "            </td>
          </tr>                                             
        </tbody>
      </table>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered \">
        <tbody>
          <tr>
            <th colspan=\"3\">I-13 ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cierre"), "html", null, true);
        echo ":</th>
          </tr> 
          <tr>
            <td colspan=\"3\">";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cierre"), "html", null, true);
        echo "<br/></td>
          </tr>           
          <tr>
            <td style=\"width: 33%\">
               ";
        // line 108
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre1")) > 5)) {
            // line 109
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre1")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1 DE CIERRE"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 111
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "</i>
               ";
        }
        // line 112
        echo "</td>
            <td style=\"width: 33%\">
              ";
        // line 114
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre2")) > 5)) {
            // line 115
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre2")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2 DE CIERRE"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 117
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2"), "html", null, true);
            echo "</i>
               ";
        }
        // line 119
        echo "            </td>
            <td style=\"width: 34%\">&nbsp;</td> 
          </tr>                                                       
        </tbody>
      </table>
    </div>
  </div>
  
";
    }

    // line 129
    public function block_title($context, array $blocks = array())
    {
        // line 130
        echo "IPAL-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Ymd"), "html", null, true);
        echo "
";
    }

    // line 135
    public function block_js($context, array $blocks = array())
    {
        // line 136
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
      \$(document).ready( function () { 
        window.print();
      });
    </script>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 136,  339 => 135,  330 => 130,  327 => 129,  315 => 119,  309 => 117,  301 => 115,  299 => 114,  295 => 112,  289 => 111,  281 => 109,  279 => 108,  272 => 104,  266 => 101,  252 => 89,  246 => 87,  238 => 85,  236 => 84,  232 => 82,  226 => 80,  218 => 78,  216 => 77,  212 => 75,  206 => 73,  198 => 71,  196 => 70,  189 => 66,  183 => 63,  175 => 57,  172 => 56,  160 => 49,  154 => 48,  146 => 45,  140 => 44,  130 => 41,  124 => 40,  116 => 37,  110 => 36,  102 => 33,  96 => 32,  90 => 31,  82 => 28,  76 => 27,  70 => 24,  66 => 23,  54 => 14,  50 => 13,  44 => 10,  40 => 8,  37 => 7,  31 => 4,  29 => 3,  27 => 2,);
    }
}
