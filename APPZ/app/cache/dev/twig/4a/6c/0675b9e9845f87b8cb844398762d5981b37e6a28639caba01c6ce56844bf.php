<?php

/* BcTicCamIpalBundle:Encuesta:showForm.html.twig */
class __TwigTemplate_4a6c0675b9e9845f87b8cb844398762d5981b37e6a28639caba01c6ce56844bf extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("INSPECCION DE SEGURIDAD"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key")), "html", null, true);
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
            <th style=\"width: 25%;\">Nº </th>
          </tr> 
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresa"), "html", null, true);
        echo ": </td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Área de Cam"), "html", null, true);
        echo ": </td>
          </tr>
          <tr>
            <td style=\"width: 25%;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fecha"), "html", null, true);
        echo ": </td>
            <td style=\"width: 25%;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hora"), "html", null, true);
        echo ": </td>
            <td colspan=\"2\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actividad"), "html", null, true);
        echo ": </td>
          </tr>
          <tr>
            <td colspan=\"3\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lugar de Trabajo"), "html", null, true);
        echo ": </th>
            <td style=\"width: 25%;\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nº de empleados"), "html", null, true);
        echo ": </th>
          </tr>
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nombre Inspector"), "html", null, true);
        echo ": </td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contrato"), "html", null, true);
        echo ": #</td>
          </tr>
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supervisor de Trabajo"), "html", null, true);
        echo ": </td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Subgerencia Cam"), "html", null, true);
        echo ": </td>
          </tr> 
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gerencia Cam"), "html", null, true);
        echo ": </td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mandante"), "html", null, true);
        echo ": </td>
          </tr>                                  
        </tbody>
      </table>
    </div>
  </div>

  ";
        // line 52
        $template = $this->env->resolveTemplate((("BcTicCamIpalBundle:Encuesta:showForm_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key")) . ".html.twig"));
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
            <td colspan=\"3\"><br/><br/><br/></td>
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
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cierre"), "html", null, true);
        echo ":</th>
          </tr> 
          <tr>
            <td colspan=\"3\"><br/><br/><br/></td>
          </tr>           
        </tbody>
      </table>
    </div>
  </div>
  
";
    }

    // line 86
    public function block_title($context, array $blocks = array())
    {
        // line 87
        echo "IPAL
";
    }

    // line 92
    public function block_js($context, array $blocks = array())
    {
        // line 93
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
        return "BcTicCamIpalBundle:Encuesta:showForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 93,  188 => 92,  183 => 87,  180 => 86,  165 => 74,  147 => 59,  139 => 53,  136 => 52,  126 => 45,  122 => 44,  116 => 41,  112 => 40,  106 => 37,  102 => 36,  96 => 33,  92 => 32,  86 => 29,  82 => 28,  78 => 27,  72 => 24,  68 => 23,  61 => 19,  49 => 10,  43 => 9,  37 => 6,  33 => 4,  30 => 3,);
    }
}
