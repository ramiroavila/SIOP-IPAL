<?php

/* BcTicCamIpalBundle:Encuesta:edit.html.twig */
class __TwigTemplate_0b84648c2c0f82bda7962963fce2b3dccc34ce80aa0c8526a8a700ce2ebb2612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "<ol class=\"breadcrumb\">
  <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inicio"), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("encuestas");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Encuestas IPAL"), "html", null, true);
        echo "</a></li>
  <li class=\"active\">Encuesta #";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h3 class=\"hidden-xs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PLANILLA DE INSPECCIÓN Y OBSERVACIÓN DE SEGURIDAD"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</h3>

   ";
        // line 15
        $this->env->loadTemplate("BcTicCamIpalBundle::edit_encuesta.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format" => (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))));
        // line 16
        echo "
    <p class=\"text-left\">
    <a class=\"hidden-xs\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("encuestas");
        echo "\">
      <button type=\"button\" class=\"btn btn-default btn-xs\">
        <span class=\"glyphicon glyphicon-th-list\"></span> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Volver"), "html", null, true);
        echo "  
      </button>
    </a>
    </p>

";
    }

    // line 27
    public function block_js($context, array $blocks = array())
    {
        echo "     

  ";
        // line 29
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
     
     if (\$('form .has-error').length > 0) {
       \$('#errors').addClass('alert')
       \$('#errors').addClass('alert-danger');
       \$('#errors').html('";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("El formulario contiene errores, favor corríjalo."), "html", null, true);
        echo "');
     }
      
     \$('form .survey .alert-warning select').unbind('change').change( function () {
       event.preventDefault();
     });
     
     var prev_val;

     \$('form .survey .alert-warning select').focus(function (event) {
        prev_val = \$(this).val();
     }).change( function () {
        if (\$(this).val() == 1) {
          if (confirm(\"Se dispone a reportar una falta grave a la seguridad, ¿Deséa continuar?\")) {

          } else {
            \$(this).val(prev_val);
          }
        }

     });

    \$('#bctic_camipalbundle_encuesta_empresa').bind('change', function (){
      //Actualizo el contrato
      \$.ajax({
        dataType: \"json\",
        type: \"POST\",
        url: \"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("contratos_json");
        echo "\",
        data: { empresa_id: \$(this).val() } ,
        success: function (dataSuccess) {
          \$('select#bctic_camipalbundle_encuesta_contrato').empty().append('<option value=\"-1\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE CONTRATO --"), "html", null, true);
        echo "</option>');
          \$.each(dataSuccess, function() {
            //En base a esto cargo los contratos:
            \$('select#bctic_camipalbundle_encuesta_contrato').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
          });
        },
        error: function (a,b,c) {
          alert(\"ERROR: \" + b);
        }
      });
    });

    \$('#bctic_camipalbundle_encuesta_contrato').bind('change', function (){
      //Actualizo los campos dependientes:
      if (\$(this).val() != -1) {
        \$.ajax({
          dataType: \"json\",
          type: \"POST\",
          url: \"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("contrato_json");
        echo "\",
          data: { id: \$(this).val() } ,
          success: function (dataSuccess) {
            \$('#bctic_camipalbundle_encuesta_area').val(dataSuccess.area);
            \$('#bctic_camipalbundle_encuesta_servicio').val(dataSuccess.servicio);
            \$('#bctic_camipalbundle_encuesta_gerencia').val(dataSuccess.gerencia);
            \$('#bctic_camipalbundle_encuesta_subGerencia').val(dataSuccess.subgerencia);
            //\$('#bctic_camipalbundle_encuesta_empresa').val(dataSuccess.empresa);
            \$('#bctic_camipalbundle_encuesta_mandante').val(dataSuccess.mandante);
            \$('#bctic_camipalbundle_encuesta_cttaSubcont').attr('disabled',true);
            if (dataSuccess.subcontrato == true) {
              \$('#bctic_camipalbundle_encuesta_cttaSubcont').attr('disabled',false);
            }
          },   
          error: function (a,b,c) {
            alert(\"ERROR: \" + b);
          }
        });       
      }
    });


    \$(document).ready(function (){
     \$('#bctic_camipalbundle_encuesta_contrato').change();
     //Autocomplete
     \$(\"#bctic_camipalbundle_encuesta_supervisor_facade\" ).autocomplete({
        delay: 500,
        minLength: 3,
        source: function(request, response) {

          \$.ajax({
            dataType: \"json\",
            type: \"POST\",
            url: \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("registros_supervisores_json");
        echo "\",
            data: { query: request.term } ,
            success: function (dataSuccess) {
                response( \$.map( dataSuccess , function( item ) {
                  return {
                    label: item.nombre,
                    value: item.id
                  }
                }));
              },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
              }
          });

        },
        focus: function(event, ui) {
          
        },
        select: function(event, ui) {
          if (ui.item) {
            \$(\"#bctic_camipalbundle_encuesta_supervisor_facade\" ).val(ui.item.label);
            \$(\"#bctic_camipalbundle_encuesta_supervisor\" ).val(ui.item.value);
          } else {
            
          }
          event.preventDefault();
        }

     });

     
     //Autocomplete
     \$(\"#bctic_camipalbundle_encuesta_inspector\" ).autocomplete({
        delay: 500,
        minLength: 1,
        source: function(request, response) {

          \$.ajax({
            dataType: \"json\",
            type: \"POST\",
            url: \"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("registros_inspectores_json");
        echo "\",
            data: { query: request.term } ,
            success: function (dataSuccess) {
                response( \$.map( dataSuccess , function( item ) {
                  return {
                    label: item.nombre,
                    value: item.nombre
                  }
                }));
              },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
              }
          });

        },
        focus: function(event, ui) {
          
        },
        select: function(event, ui) {

        }

     });

    });


  </script>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 157,  195 => 116,  159 => 83,  138 => 65,  132 => 62,  102 => 35,  93 => 29,  87 => 27,  77 => 20,  72 => 18,  68 => 16,  66 => 15,  58 => 13,  55 => 11,  48 => 7,  42 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
