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
        return array (  742 => 232,  736 => 231,  728 => 226,  715 => 218,  709 => 217,  701 => 214,  695 => 213,  688 => 211,  682 => 210,  676 => 207,  667 => 203,  657 => 198,  651 => 197,  643 => 194,  637 => 193,  630 => 191,  624 => 190,  616 => 187,  610 => 186,  603 => 184,  597 => 183,  589 => 180,  583 => 179,  576 => 177,  570 => 176,  564 => 173,  560 => 172,  553 => 170,  547 => 169,  537 => 164,  531 => 163,  523 => 160,  517 => 159,  510 => 157,  504 => 156,  496 => 153,  490 => 152,  483 => 150,  477 => 149,  469 => 146,  463 => 145,  456 => 143,  450 => 142,  444 => 139,  440 => 138,  435 => 136,  431 => 135,  418 => 127,  412 => 126,  405 => 124,  399 => 123,  391 => 120,  385 => 119,  378 => 117,  372 => 116,  366 => 113,  358 => 110,  352 => 109,  342 => 104,  336 => 103,  328 => 100,  322 => 99,  315 => 97,  309 => 96,  301 => 93,  295 => 92,  290 => 90,  283 => 86,  279 => 85,  267 => 78,  261 => 77,  253 => 74,  247 => 73,  240 => 71,  234 => 70,  226 => 67,  220 => 66,  213 => 64,  207 => 63,  193 => 59,  188 => 57,  184 => 56,  170 => 52,  162 => 47,  158 => 46,  151 => 44,  145 => 43,  135 => 38,  129 => 37,  121 => 34,  115 => 33,  108 => 31,  102 => 30,  88 => 26,  81 => 24,  61 => 19,  54 => 17,  48 => 16,  38 => 12,  29 => 9,  19 => 1,  119 => 38,  114 => 27,  106 => 17,  94 => 27,  91 => 9,  85 => 8,  79 => 39,  77 => 38,  71 => 35,  67 => 20,  53 => 28,  51 => 27,  42 => 13,  39 => 16,  24 => 1,  335 => 132,  332 => 131,  323 => 126,  320 => 125,  308 => 115,  302 => 113,  294 => 111,  292 => 110,  288 => 108,  282 => 107,  274 => 105,  272 => 104,  265 => 100,  259 => 97,  245 => 85,  239 => 83,  231 => 81,  229 => 80,  225 => 78,  219 => 76,  211 => 74,  209 => 73,  205 => 71,  199 => 60,  191 => 67,  189 => 66,  182 => 62,  176 => 53,  168 => 53,  165 => 52,  153 => 45,  147 => 44,  139 => 41,  133 => 40,  123 => 37,  117 => 36,  109 => 33,  103 => 16,  95 => 29,  89 => 28,  83 => 27,  75 => 23,  69 => 23,  63 => 33,  59 => 32,  47 => 10,  43 => 9,  37 => 9,  33 => 10,  30 => 3,);
    }
}
