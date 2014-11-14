<?php

/* BcTicCamIpalBundle:Encuesta:show_electrica.html.twig */
class __TwigTemplate_093fe214248310f6f83a823a2ea0a4eef8ca72b5b8d2d09c4016aa3c72ff29c5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cinco Reglas de Oro"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Autorización para ingreso a circuito"), "html", null, true);
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
            <td>";
        // line 73
        $context["name"] = ("respuesta6.4_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 74
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta64"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td class=\"alert alert-warning\">";
        // line 77
        $context["name"] = ("respuesta2.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 78
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta23"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>  
          <tr>
            <td colspan=\"2\"></td>
            <td></td>
            <td><b>I-7 ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Señalización y Protección Pública"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>            
          <tr>
            <td><b>I-3 Procedimientos de Trabajos</b></td>
            <td><b>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
            <td></td>
            <td>";
        // line 92
        $context["name"] = ("respuesta7.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 93
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta71"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 96
        $context["name"] = ("respuesta3.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 97
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta31"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 99
        $context["name"] = ("respuesta7.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 100
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta72"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>";
        // line 103
        $context["name"] = ("respuesta3.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 104
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta32"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>
          <tr>
            <td>";
        // line 109
        $context["name"] = ("respuesta3.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 110
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta33"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td><b>I-8 Identificación de Riesgos / Charla de 5 minutos</b></td>
            <td><b>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>                                                                                                  
          <tr>
            <td>";
        // line 116
        $context["name"] = ("respuesta3.4_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 117
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta34"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 119
        $context["name"] = ("respuesta8.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 120
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta81"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>";
        // line 123
        $context["name"] = ("respuesta3.5_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 124
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta35"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 126
        $context["name"] = ("respuesta8.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 127
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta82"));
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
            <td><b>I-4 ";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Elementos de protección personal"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
            <td></td>
            <td><b>I-9 ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Identificación y competencia del personal"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>  
          <tr>
            <td>";
        // line 142
        $context["name"] = ("respuesta4.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 143
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta41"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 145
        $context["name"] = ("respuesta9.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 146
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta91"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>";
        // line 149
        $context["name"] = ("respuesta4.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 150
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta42"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 152
        $context["name"] = ("respuesta9.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 153
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta92"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>";
        // line 156
        $context["name"] = ("respuesta4.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 157
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta43"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 159
        $context["name"] = ("respuesta9.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 160
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta93"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>                                                                                                  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 163
        $context["name"] = ("respuesta4.4_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 164
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta44"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>
          <tr>
            <td>";
        // line 169
        $context["name"] = ("respuesta4.5_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 170
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta45"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td><b>I-10 ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vehículo (Pesado, Liviano y Motocicletas)"), "html", null, true);
        echo "</b></td>
            <td><b>";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>  
          <tr>
            <td class=\"alert alert-warning\">";
        // line 176
        $context["name"] = ("respuesta4.6_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 177
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta46"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 179
        $context["name"] = ("respuesta10.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 180
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta101"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>           
          <tr>
            <td>";
        // line 183
        $context["name"] = ("respuesta4.7_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 184
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta47"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 186
        $context["name"] = ("respuesta10.2_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 187
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta102"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>           
          <tr>
            <td>";
        // line 190
        $context["name"] = ("respuesta4.8_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 191
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta48"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 193
        $context["name"] = ("respuesta10.3_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 194
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta103"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>           
          <tr>
            <td>";
        // line 197
        $context["name"] = ("respuesta4.9_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 198
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta49"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td colspan=\"2\"></td>
          </tr>           
          <tr>
            <td>";
        // line 203
        $context["name"] = ("respuesta4.10_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td></td>
            <td><b>I-11 Primeros Auxilios y Emergencias</b></td>
            <td><b>";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cumple"), "html", null, true);
        echo "</b></td>
          </tr>           
          <tr>
            <td class=\"alert alert-warning\">";
        // line 210
        $context["name"] = ("respuesta4.11_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td class=\"alert alert-warning\">";
        // line 211
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta411"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 213
        $context["name"] = ("respuesta11.1_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 214
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta111"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
          </tr>           
          <tr>
            <td>";
        // line 217
        $context["name"] = ("respuesta4.12_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key"));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</td>
            <td>";
        // line 218
        $context["name"] = ("respuesta_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "respuesta412"));
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
        </tbody>
      </table>
    </div>
  </div>  ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:show_electrica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 232,  736 => 231,  1161 => 340,  1145 => 334,  1139 => 333,  1125 => 329,  1118 => 327,  1098 => 322,  1089 => 319,  1081 => 316,  1075 => 315,  1052 => 307,  1032 => 302,  1025 => 300,  1005 => 295,  984 => 289,  965 => 285,  957 => 282,  951 => 281,  946 => 279,  928 => 274,  912 => 268,  905 => 266,  891 => 262,  872 => 258,  862 => 254,  792 => 234,  771 => 228,  752 => 224,  746 => 221,  722 => 212,  716 => 211,  702 => 207,  675 => 198,  626 => 184,  600 => 178,  592 => 175,  565 => 168,  540 => 161,  495 => 145,  487 => 142,  460 => 135,  447 => 132,  373 => 113,  210 => 64,  711 => 206,  645 => 188,  604 => 175,  577 => 168,  520 => 152,  471 => 138,  375 => 108,  371 => 107,  228 => 67,  202 => 55,  148 => 41,  720 => 218,  706 => 214,  667 => 203,  657 => 198,  637 => 193,  630 => 191,  616 => 187,  597 => 183,  560 => 172,  547 => 169,  517 => 159,  496 => 153,  450 => 142,  391 => 120,  366 => 113,  279 => 85,  207 => 63,  282 => 107,  1176 => 774,  1169 => 770,  1167 => 769,  1162 => 766,  1157 => 764,  1151 => 761,  1142 => 755,  1138 => 753,  1132 => 750,  1121 => 743,  1119 => 742,  1083 => 712,  1064 => 696,  1040 => 678,  1016 => 660,  1011 => 296,  992 => 292,  944 => 606,  927 => 597,  881 => 560,  859 => 544,  825 => 242,  821 => 516,  701 => 214,  681 => 207,  512 => 268,  506 => 265,  500 => 262,  466 => 234,  417 => 124,  397 => 198,  370 => 174,  364 => 105,  165 => 52,  53 => 28,  297 => 205,  295 => 92,  137 => 69,  899 => 265,  892 => 474,  863 => 457,  854 => 454,  717 => 207,  699 => 371,  679 => 360,  672 => 193,  654 => 347,  634 => 336,  598 => 315,  589 => 180,  578 => 304,  569 => 301,  562 => 297,  533 => 280,  497 => 262,  885 => 261,  880 => 468,  876 => 467,  860 => 457,  855 => 252,  851 => 454,  835 => 526,  815 => 433,  810 => 431,  795 => 422,  790 => 489,  786 => 419,  779 => 231,  770 => 475,  765 => 227,  750 => 398,  745 => 396,  741 => 455,  730 => 210,  721 => 441,  705 => 203,  700 => 213,  696 => 371,  685 => 363,  676 => 207,  660 => 350,  655 => 348,  651 => 197,  640 => 339,  631 => 182,  615 => 326,  606 => 179,  595 => 315,  590 => 313,  586 => 174,  575 => 319,  570 => 176,  566 => 301,  555 => 293,  550 => 161,  546 => 164,  535 => 282,  530 => 280,  526 => 279,  501 => 146,  445 => 234,  436 => 128,  425 => 205,  420 => 125,  416 => 220,  405 => 124,  400 => 120,  396 => 209,  380 => 199,  336 => 103,  325 => 100,  316 => 165,  300 => 155,  175 => 48,  170 => 52,  155 => 76,  948 => 503,  939 => 604,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 756,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 323,  1093 => 320,  1088 => 714,  1077 => 575,  1068 => 569,  1063 => 567,  1059 => 309,  1048 => 558,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 545,  1012 => 540,  994 => 531,  978 => 288,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 473,  868 => 462,  857 => 457,  848 => 451,  843 => 449,  839 => 246,  823 => 438,  819 => 241,  812 => 239,  794 => 424,  783 => 416,  774 => 413,  767 => 409,  758 => 225,  749 => 460,  738 => 218,  729 => 446,  709 => 217,  689 => 204,  682 => 210,  644 => 343,  617 => 328,  415 => 176,  385 => 119,  369 => 253,  332 => 131,  330 => 139,  321 => 92,  287 => 90,  266 => 111,  259 => 97,  257 => 107,  253 => 74,  239 => 83,  226 => 67,  185 => 57,  178 => 75,  113 => 42,  968 => 624,  963 => 622,  959 => 514,  952 => 510,  943 => 501,  938 => 499,  934 => 275,  903 => 479,  894 => 479,  883 => 468,  874 => 556,  838 => 444,  829 => 441,  818 => 433,  809 => 430,  798 => 235,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 407,  753 => 398,  733 => 387,  728 => 226,  724 => 209,  713 => 379,  708 => 208,  704 => 376,  693 => 211,  688 => 211,  684 => 365,  668 => 355,  663 => 350,  659 => 192,  643 => 194,  639 => 187,  628 => 333,  623 => 331,  619 => 182,  608 => 322,  603 => 184,  599 => 319,  583 => 179,  579 => 172,  563 => 298,  559 => 167,  552 => 165,  543 => 159,  538 => 285,  518 => 274,  514 => 149,  494 => 262,  478 => 252,  458 => 241,  454 => 134,  434 => 229,  418 => 127,  414 => 124,  394 => 167,  334 => 95,  261 => 77,  192 => 95,  923 => 490,  918 => 269,  914 => 587,  907 => 483,  898 => 477,  889 => 474,  878 => 259,  873 => 464,  853 => 453,  842 => 448,  833 => 245,  828 => 440,  824 => 439,  813 => 431,  804 => 428,  793 => 420,  788 => 418,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 396,  743 => 394,  739 => 393,  714 => 217,  703 => 372,  698 => 370,  694 => 200,  687 => 210,  678 => 194,  673 => 204,  653 => 191,  649 => 345,  633 => 335,  613 => 181,  609 => 323,  602 => 319,  593 => 313,  588 => 311,  584 => 310,  564 => 173,  548 => 289,  544 => 288,  528 => 278,  523 => 160,  503 => 265,  499 => 264,  488 => 256,  483 => 150,  463 => 145,  448 => 234,  443 => 232,  439 => 231,  428 => 223,  399 => 123,  383 => 113,  348 => 99,  343 => 177,  339 => 104,  328 => 100,  319 => 99,  299 => 154,  274 => 80,  234 => 70,  223 => 111,  198 => 98,  172 => 74,  152 => 69,  281 => 183,  276 => 114,  272 => 85,  267 => 78,  249 => 77,  231 => 81,  218 => 117,  215 => 63,  213 => 64,  200 => 105,  197 => 119,  195 => 79,  188 => 57,  167 => 52,  354 => 185,  346 => 106,  333 => 103,  324 => 191,  317 => 187,  302 => 113,  292 => 92,  286 => 168,  271 => 113,  244 => 101,  190 => 59,  70 => 26,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 339,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 751,  1131 => 330,  1128 => 748,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 326,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 283,  1070 => 282,  1067 => 281,  1065 => 310,  1062 => 279,  1054 => 275,  1051 => 274,  1049 => 273,  1046 => 306,  1038 => 303,  1035 => 676,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 299,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 293,  990 => 247,  987 => 640,  985 => 245,  982 => 244,  974 => 240,  971 => 286,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 278,  940 => 225,  937 => 224,  929 => 496,  926 => 219,  924 => 218,  922 => 492,  919 => 216,  910 => 209,  902 => 208,  896 => 206,  893 => 475,  887 => 203,  884 => 472,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 255,  865 => 189,  864 => 461,  858 => 455,  852 => 184,  849 => 251,  847 => 450,  844 => 532,  834 => 174,  830 => 442,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 238,  803 => 427,  787 => 161,  785 => 232,  782 => 484,  766 => 155,  764 => 406,  761 => 469,  744 => 214,  732 => 217,  725 => 385,  723 => 383,  718 => 381,  715 => 218,  697 => 140,  695 => 213,  692 => 138,  683 => 201,  680 => 361,  677 => 361,  671 => 129,  669 => 197,  664 => 190,  661 => 399,  658 => 189,  648 => 344,  646 => 122,  638 => 337,  635 => 337,  632 => 185,  629 => 334,  627 => 332,  624 => 190,  618 => 179,  610 => 186,  605 => 109,  601 => 108,  596 => 107,  594 => 106,  591 => 172,  582 => 100,  576 => 177,  573 => 171,  571 => 318,  568 => 300,  558 => 308,  556 => 162,  553 => 170,  545 => 85,  542 => 84,  539 => 286,  536 => 160,  534 => 284,  531 => 163,  524 => 277,  513 => 269,  510 => 157,  508 => 148,  505 => 267,  489 => 66,  486 => 65,  484 => 141,  481 => 141,  476 => 60,  470 => 247,  465 => 245,  456 => 143,  452 => 52,  449 => 51,  441 => 131,  438 => 230,  422 => 179,  419 => 220,  410 => 37,  406 => 121,  403 => 120,  395 => 33,  389 => 114,  378 => 117,  376 => 198,  372 => 116,  363 => 188,  359 => 187,  356 => 187,  347 => 16,  344 => 234,  338 => 175,  329 => 8,  323 => 126,  318 => 164,  311 => 493,  308 => 115,  306 => 96,  303 => 155,  301 => 93,  296 => 154,  293 => 448,  290 => 90,  288 => 84,  280 => 81,  275 => 115,  265 => 100,  260 => 107,  250 => 104,  232 => 117,  222 => 133,  211 => 74,  206 => 83,  194 => 97,  181 => 56,  174 => 87,  161 => 76,  146 => 56,  126 => 54,  114 => 27,  104 => 17,  76 => 29,  262 => 80,  255 => 97,  242 => 99,  237 => 73,  233 => 72,  191 => 67,  150 => 68,  127 => 48,  124 => 37,  118 => 36,  100 => 41,  81 => 24,  58 => 14,  537 => 164,  532 => 155,  527 => 157,  519 => 271,  516 => 16,  507 => 10,  504 => 156,  498 => 145,  492 => 257,  490 => 152,  485 => 256,  479 => 253,  477 => 149,  473 => 173,  468 => 138,  464 => 170,  459 => 242,  455 => 167,  451 => 166,  446 => 165,  433 => 128,  431 => 135,  426 => 156,  424 => 180,  421 => 204,  412 => 126,  408 => 212,  404 => 171,  401 => 199,  392 => 32,  388 => 201,  367 => 155,  358 => 110,  352 => 109,  345 => 179,  342 => 104,  340 => 159,  335 => 132,  326 => 115,  320 => 125,  315 => 97,  310 => 110,  307 => 88,  291 => 103,  284 => 101,  277 => 116,  270 => 106,  263 => 133,  256 => 79,  251 => 103,  248 => 103,  245 => 85,  236 => 88,  225 => 78,  216 => 107,  212 => 126,  205 => 71,  186 => 97,  184 => 56,  180 => 89,  160 => 71,  153 => 45,  134 => 64,  129 => 37,  97 => 36,  90 => 36,  77 => 38,  34 => 4,  84 => 15,  65 => 14,  480 => 162,  474 => 139,  469 => 146,  461 => 244,  457 => 134,  453 => 151,  444 => 139,  440 => 138,  437 => 162,  435 => 136,  430 => 127,  427 => 127,  423 => 125,  413 => 202,  409 => 121,  407 => 131,  402 => 130,  398 => 118,  393 => 118,  387 => 117,  384 => 28,  381 => 140,  379 => 114,  374 => 196,  368 => 190,  365 => 190,  362 => 110,  360 => 110,  355 => 106,  341 => 144,  337 => 103,  322 => 99,  314 => 132,  312 => 97,  309 => 96,  305 => 173,  298 => 93,  294 => 85,  285 => 146,  283 => 86,  278 => 86,  268 => 153,  264 => 84,  258 => 131,  252 => 96,  247 => 73,  241 => 120,  229 => 80,  220 => 66,  214 => 108,  177 => 70,  169 => 47,  140 => 65,  132 => 40,  128 => 63,  107 => 51,  61 => 19,  273 => 411,  269 => 111,  254 => 130,  243 => 76,  240 => 71,  238 => 120,  235 => 97,  230 => 87,  227 => 135,  224 => 66,  221 => 109,  219 => 64,  217 => 85,  208 => 85,  204 => 63,  179 => 93,  159 => 83,  143 => 40,  135 => 38,  119 => 38,  102 => 30,  71 => 35,  67 => 20,  63 => 33,  59 => 32,  38 => 12,  94 => 27,  89 => 28,  85 => 8,  75 => 23,  68 => 16,  56 => 11,  87 => 27,  21 => 2,  26 => 3,  93 => 43,  88 => 26,  78 => 21,  46 => 7,  27 => 8,  44 => 7,  31 => 3,  28 => 4,  201 => 98,  196 => 60,  183 => 51,  171 => 67,  166 => 86,  163 => 72,  158 => 46,  156 => 44,  151 => 44,  142 => 40,  138 => 43,  136 => 59,  121 => 34,  117 => 36,  105 => 49,  91 => 9,  62 => 24,  49 => 7,  24 => 1,  25 => 7,  19 => 1,  79 => 39,  72 => 31,  69 => 23,  47 => 10,  40 => 11,  37 => 9,  22 => 2,  246 => 151,  157 => 47,  145 => 43,  139 => 41,  131 => 66,  123 => 37,  120 => 58,  115 => 33,  111 => 50,  108 => 31,  101 => 48,  98 => 35,  96 => 39,  83 => 27,  74 => 14,  66 => 15,  55 => 11,  52 => 17,  50 => 8,  43 => 9,  41 => 11,  35 => 4,  32 => 6,  29 => 9,  209 => 73,  203 => 100,  199 => 60,  193 => 59,  189 => 52,  187 => 75,  182 => 62,  176 => 53,  173 => 53,  168 => 53,  164 => 64,  162 => 47,  154 => 60,  149 => 58,  147 => 44,  144 => 44,  141 => 65,  133 => 40,  130 => 56,  125 => 20,  122 => 60,  116 => 57,  112 => 57,  109 => 33,  106 => 17,  103 => 16,  99 => 46,  95 => 29,  92 => 42,  86 => 39,  82 => 32,  80 => 19,  73 => 19,  64 => 13,  60 => 21,  57 => 22,  54 => 17,  51 => 27,  48 => 16,  45 => 12,  42 => 13,  39 => 16,  36 => 10,  33 => 10,  30 => 3,);
    }
}
