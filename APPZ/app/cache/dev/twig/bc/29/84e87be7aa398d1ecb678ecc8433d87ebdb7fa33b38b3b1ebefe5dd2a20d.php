<?php

/* BcTicCamIpalBundle:Encuesta:show_telecomunicaciones.html.twig */
class __TwigTemplate_bc2984e87be7aa398d1ecb678ecc8433d87ebdb7fa33b38b3b1ebefe5dd2a20d extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered\">
        <tbody>
          <tr>
            <th colspan=\"5\" class=\"text-center\">ÁREAS / ACTUACIONES</th>
          </tr>
          <tr>
            <td style=\"width: 41%;\"><b>I-1 ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cinco Reglas de Oro Trabajo Aereo"), "html", null, true);
        echo "</b></td>
            <td style=\"width: 8%;\"><b>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
            <td style=\"width: 2%;\"></td>
            <td style=\"width: 41%;\"><b>I-5 ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Materiales, Equipos y Herramientas"), "html", null, true);
        echo "</b></td>
            <td style=\"width: 8%;\"><b>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 16
        $context["name"] = ("respuesta1.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 17
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta11"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 19
        $context["name"] = ("respuesta5.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 20
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta51"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 23
        $context["name"] = ("respuesta1.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 24
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta12"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 26
        $context["name"] = ("respuesta5.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 27
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta52"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 30
        $context["name"] = ("respuesta1.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 31
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta13"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 33
        $context["name"] = ("respuesta5.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 34
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta53"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 37
        $context["name"] = ("respuesta1.4_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 38
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta14"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr> 
          <tr>
            <td class=\"alert alert-warning\">";
        // line 43
        $context["name"] = ("respuesta1.5_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 44
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta15"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td><b>I-6 ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Condiciones de trabajo"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 52
        $context["name"] = ("respuesta6.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 53
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta61"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td><b>I-2 ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cinco Reglas De Oro Trabajo Riesgo Eléctrico"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
            <td></td>
            <td>";
        // line 59
        $context["name"] = ("respuesta6.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 60
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta62"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 63
        $context["name"] = ("respuesta2.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 64
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta21"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 66
        $context["name"] = ("respuesta6.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 67
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta63"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td class=\"alert alert-warning\">";
        // line 70
        $context["name"] = ("respuesta2.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 71
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta22"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>
          <tr>
            <td class=\"alert alert-warning\">";
        // line 76
        $context["name"] = ("respuesta2.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 77
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta23"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td><b>I-7 ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Señalización y Protección Pública"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 83
        $context["name"] = ("respuesta2.4_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 84
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta24"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td class=\"alert alert-warning\">";
        // line 86
        $context["name"] = ("respuesta7.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 87
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta71"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 90
        $context["name"] = ("respuesta2.5_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 91
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta25"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td class=\"alert alert-warning\">";
        // line 93
        $context["name"] = ("respuesta7.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 94
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta72"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>          
          <tr>
            <td colspan=\"2\">&nbsp;</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>            
          <tr>
            <td><b>I-3 Procedimientos de Trabajos</b></td>
            <td><b>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
            <td></td>
            <td><b>I-8 Identificación de Riesgos / Charla de 5 minutos</b></td>
            <td><b>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 109
        $context["name"] = ("respuesta3.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 110
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta31"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 112
        $context["name"] = ("respuesta8.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 113
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta81"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>";
        // line 116
        $context["name"] = ("respuesta3.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 117
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta32"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 119
        $context["name"] = ("respuesta8.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 120
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta82"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>";
        // line 123
        $context["name"] = ("respuesta3.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 124
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta33"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>                                                                                                  
          <tr>
            <td>";
        // line 129
        $context["name"] = ("respuesta3.4_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 130
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta34"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td><b>I-9 ";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Identificación y competencia del personal"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>
          <tr>
            <td>";
        // line 136
        $context["name"] = ("respuesta3.5_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 137
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta35"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 139
        $context["name"] = ("respuesta9.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 140
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta91"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr> 
          <tr>
            <td colspan=\"2\">&nbsp;</td>
            <td></td>
            <td>";
        // line 145
        $context["name"] = ("respuesta9.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 146
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta92"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>            
          <tr>
            <td><b>I-4 ";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Elementos de protección personal"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
            <td></td>
            <td>";
        // line 152
        $context["name"] = ("respuesta9.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 153
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta93"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td>";
        // line 156
        $context["name"] = ("respuesta4.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 157
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta41"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>
          <tr>
            <td>";
        // line 162
        $context["name"] = ("respuesta4.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 163
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta42"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td><b>I-10 ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vehículo (Pesado, Liviano y Motocicletas)"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>
          <tr>
            <td>";
        // line 169
        $context["name"] = ("respuesta4.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 170
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta43"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 172
        $context["name"] = ("respuesta10.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 173
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta101"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>                                                                                                  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 176
        $context["name"] = ("respuesta4.4_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 177
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta44"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 179
        $context["name"] = ("respuesta10.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 180
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta102"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>";
        // line 183
        $context["name"] = ("respuesta4.5_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 184
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta45"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 186
        $context["name"] = ("respuesta10.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 187
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta103"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 190
        $context["name"] = ("respuesta4.6_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 191
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta46"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>           
          <tr>
            <td>";
        // line 196
        $context["name"] = ("respuesta4.7_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 197
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta47"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td><b>I-11 Primeros Auxilios y Emergencias</b></td>
            <td><b>";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>           
          <tr>
            <td>";
        // line 203
        $context["name"] = ("respuesta4.8_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 204
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta48"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 206
        $context["name"] = ("respuesta11.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 207
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta111"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>           
          <tr>
            <td>";
        // line 210
        $context["name"] = ("respuesta4.9_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 211
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta49"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 213
        $context["name"] = ("respuesta11.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 214
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta112"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>           
          <tr>
            <td>";
        // line 217
        $context["name"] = ("respuesta4.10_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 218
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta410"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>           
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td><b>I-12 Amonestación</b></td>
            <td><b>";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("¿Amonestación?"), "html", null, true);
        echo "</b></td>
          </tr>  
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 231
        $context["name"] = ("respuesta12.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 232
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta121"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr>   
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td colspan=\"2\">&nbsp;</td>
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td><b>I-13 Cultura ambiental</b></td>
            <td><b>";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 248
        $context["name"] = ("respuesta13.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 249
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta131"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 254
        $context["name"] = ("respuesta13.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 255
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta132"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 260
        $context["name"] = ("respuesta13.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 261
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta133"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 266
        $context["name"] = ("respuesta13.4_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 267
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta134"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 272
        $context["name"] = ("respuesta13.5_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 273
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta135"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 278
        $context["name"] = ("respuesta13.6_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 279
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta136"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 284
        $context["name"] = ("respuesta13.7_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 285
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta137"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 290
        $context["name"] = ("respuesta13.8_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 291
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta138"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 296
        $context["name"] = ("respuesta13.9_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 297
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta139"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr> 
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td>";
        // line 302
        $context["name"] = ("respuesta13.10_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 303
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta1310"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>            
          </tr>            
        </tbody>
      </table>
    </div>
  </div>  ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:show_telecomunicaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  921 => 303,  915 => 302,  905 => 297,  899 => 296,  889 => 291,  883 => 290,  873 => 285,  867 => 284,  857 => 279,  851 => 278,  841 => 273,  835 => 272,  825 => 267,  819 => 266,  809 => 261,  803 => 260,  793 => 255,  787 => 254,  777 => 249,  771 => 248,  763 => 243,  747 => 232,  741 => 231,  733 => 226,  720 => 218,  714 => 217,  706 => 214,  700 => 213,  693 => 211,  687 => 210,  679 => 207,  673 => 206,  666 => 204,  660 => 203,  654 => 200,  646 => 197,  640 => 196,  630 => 191,  624 => 190,  616 => 187,  610 => 186,  603 => 184,  597 => 183,  589 => 180,  583 => 179,  576 => 177,  570 => 176,  562 => 173,  556 => 172,  549 => 170,  543 => 169,  537 => 166,  533 => 165,  526 => 163,  520 => 162,  510 => 157,  504 => 156,  496 => 153,  490 => 152,  485 => 150,  481 => 149,  473 => 146,  467 => 145,  457 => 140,  451 => 139,  444 => 137,  438 => 136,  432 => 133,  428 => 132,  421 => 130,  415 => 129,  405 => 124,  399 => 123,  391 => 120,  385 => 119,  378 => 117,  372 => 116,  364 => 113,  358 => 112,  351 => 110,  345 => 109,  339 => 106,  333 => 103,  319 => 94,  313 => 93,  306 => 91,  300 => 90,  292 => 87,  286 => 86,  279 => 84,  273 => 83,  267 => 80,  263 => 79,  256 => 77,  250 => 76,  240 => 71,  234 => 70,  226 => 67,  220 => 66,  213 => 64,  207 => 63,  199 => 60,  193 => 59,  188 => 57,  184 => 56,  176 => 53,  170 => 52,  162 => 47,  158 => 46,  151 => 44,  145 => 43,  135 => 38,  129 => 37,  121 => 34,  115 => 33,  108 => 31,  102 => 30,  94 => 27,  88 => 26,  81 => 24,  75 => 23,  67 => 20,  61 => 19,  54 => 17,  48 => 16,  42 => 13,  38 => 12,  33 => 10,  29 => 9,  19 => 1,);
    }
}
