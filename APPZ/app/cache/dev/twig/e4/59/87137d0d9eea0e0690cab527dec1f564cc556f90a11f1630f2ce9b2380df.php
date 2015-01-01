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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
     <div class=\"col-md-3 text-center\">
       <img alt=\"logo\" style=\"height:65px; margin-top:7px;\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"/>
     </div>  
     <div class=\"col-md-9\">
       <h3 class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("INSPECCIÓN DE SEGURIDAD"), "html", null, true);
        echo "</h3>
       <h5 class=\"text-center\">";
        // line 10
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
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ANTECEDENTES GENERALES"), "html", null, true);
        echo "</th>
            <th style=\"width: 25%;\">Nº ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</th>
          </tr> 
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresa"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "empresa"), "nombre"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Área de Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "area"), "nombre"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td style=\"width: 25%;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fecha"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "d/m/Y"), "html", null, true);
        echo "</td>
            <td style=\"width: 25%;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hora"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hora"), "h:i"), "html", null, true);
        echo "</td>
            <td colspan=\"2\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actividad"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actividad")), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td colspan=\"3\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lugar de Trabajo"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lugarDeTrabajo")), "html", null, true);
        echo "</th>
            <td style=\"width: 25%;\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nº de empleados"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numDeEmpleados"), "html", null, true);
        echo "</th>
          </tr>
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nombre Inspector"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "inspector"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contrato"), "html", null, true);
        echo ": #";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "numero"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "nombre"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supervisor de Trabajo"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "supervisorFacade"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Subgerencia Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "subGerencia"), "nombre"), "html", null, true);
        echo "</td>
          </tr> 
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gerencia Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "subGerencia"), "gerencia"), "nombre"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 45
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
        // line 52
        $template = $this->env->resolveTemplate((("BcTicCamIpalBundle:Encuesta:show_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key")) . ".html.twig"));
        $template->display($context);
        // line 53
        echo "
   <div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered \">
        <tbody>
          <tr>
            <th colspan=\"3\">I-12 ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
        echo ":</th>
          </tr> 
          <tr>
            <td colspan=\"3\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observaciones"), "html", null, true);
        echo "<br/></td>
          </tr> 
          <tr>
            <td style=\"width: 33%\">
              ";
        // line 66
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file1")) > 5)) {
            // line 67
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file1")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 69
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "</i>
               ";
        }
        // line 71
        echo "            </td>
            <td style=\"width: 33%\">
              ";
        // line 73
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file2")) > 5)) {
            // line 74
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file2")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 76
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2"), "html", null, true);
            echo "</i>
               ";
        }
        // line 78
        echo "            </td>
            <td style=\"width: 34%\">
              ";
        // line 80
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file3")) > 5)) {
            // line 81
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file3")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 3"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 83
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 3"), "html", null, true);
            echo "</i>
               ";
        }
        // line 85
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
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cierre"), "html", null, true);
        echo ":</th>
          </tr> 
          <tr>
            <td colspan=\"3\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cierre"), "html", null, true);
        echo "<br/></td>
          </tr>           
          <tr>
            <td style=\"width: 33%\">
               ";
        // line 104
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre1")) > 5)) {
            // line 105
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre1")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1 DE CIERRE"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 107
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "</i>
               ";
        }
        // line 108
        echo "</td>
            <td style=\"width: 33%\">
              ";
        // line 110
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre2")) > 5)) {
            // line 111
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre2")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2 DE CIERRE"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 113
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2"), "html", null, true);
            echo "</i>
               ";
        }
        // line 115
        echo "            </td>
            <td style=\"width: 34%\">&nbsp;</td> 
          </tr>                                                       
        </tbody>
      </table>
    </div>
  </div>
  
";
    }

    // line 125
    public function block_title($context, array $blocks = array())
    {
        // line 126
        echo "IPAL-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Ymd"), "html", null, true);
        echo "
";
    }

    // line 131
    public function block_js($context, array $blocks = array())
    {
        // line 132
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
        return array (  335 => 132,  332 => 131,  323 => 126,  320 => 125,  308 => 115,  302 => 113,  294 => 111,  292 => 110,  288 => 108,  282 => 107,  274 => 105,  272 => 104,  265 => 100,  259 => 97,  245 => 85,  239 => 83,  231 => 81,  229 => 80,  225 => 78,  219 => 76,  211 => 74,  209 => 73,  205 => 71,  199 => 69,  191 => 67,  189 => 66,  182 => 62,  176 => 59,  168 => 53,  165 => 52,  153 => 45,  147 => 44,  139 => 41,  133 => 40,  123 => 37,  117 => 36,  109 => 33,  103 => 32,  95 => 29,  89 => 28,  83 => 27,  75 => 24,  69 => 23,  63 => 20,  59 => 19,  47 => 10,  43 => 9,  37 => 6,  33 => 4,  30 => 3,);
    }
}
