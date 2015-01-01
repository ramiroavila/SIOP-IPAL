<?php

/* BcTicCamIpalBundle:Encuesta:new.html.twig */
class __TwigTemplate_5f70ee0f73af168d9c72e598c5b4ac85467fb4a829633eb6f47ed015909bf735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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
  <li class=\"active\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<h3 class=\"hidden-xs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PLANILLA DE INSPECCIÓN Y OBSERVACIÓN DE SEGURIDAD"), "html", null, true);
        echo "</h3>

   ";
        // line 14
        $this->env->loadTemplate("BcTicCamIpalBundle::edit_encuesta.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format" => (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "new" => true, "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))));
        // line 15
        echo "
   <div id=\"mini-hidden-canvas\"></div>

    <p class=\"text-left\">
    <a class=\"hidden-xs\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("encuestas");
        echo "\">
      <button type=\"button\" class=\"btn btn-default btn-xs\">
        <span class=\"glyphicon glyphicon-th-list\"></span> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Volver"), "html", null, true);
        echo "  
      </button>
    </a>
    </p>
    
";
    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        // line 30
        echo "      ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB7GU1J8Lp0N2rLVEA7hzbDFrxbC6f4S5Y&sensor=true\">
        </script>
        <script type=\"text/javascript\" src=\"/js/google_maps.js\">
        </script>
";
    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        echo "     

  ";
        // line 39
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\">

  \$(document).ready( function () { 
     initialize(\"mini-hidden-canvas\", false, \"Lugar de trabajo\",14, 'bctic_camipalbundle_encuesta_localizacion');

     //Autocomplete
     \$(\"#bctic_camipalbundle_encuesta_supervisor_facade\" ).autocomplete({
        delay: 500,
        minLength: 1,
        source: function(request, response) {

          \$.ajax({
            dataType: \"json\",
            type: \"POST\",
            url: \"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("registros_supervisores_json");
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
          if (ui.item) {
            \$(\"#bctic_camipalbundle_encuesta_supervisor_facade\" ).val(ui.item.label)
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
        // line 93
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

     //Pongo el Inspector del Usuario actual.
     \$(\"#bctic_camipalbundle_encuesta_inspector\").val(\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
        echo "\");

      
           //Elimino todos los objetos:
           \$('select#bctic_camipalbundle_encuesta_pais').empty();
           \$('select#bctic_camipalbundle_encuesta_pais').append('<option value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "nombre"), "html", null, true);
        echo "</option>');

    \$(\"#bctic_camipalbundle_encuesta_pais\").val(\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id"), "html", null, true);
        echo "\");     

           //Elimino todos los objetos:
           //Solo muestro las empresas según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("empresas_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_encuesta_empresa').empty().append('<option value=\"-1\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE EMPRESA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las empresas:
               \$('select#bctic_camipalbundle_encuesta_empresa').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           });    

  });
     
    if (\$('form .has-error').length > 0) {
      \$('#errors').addClass('alert')
      \$('#errors').addClass('alert-danger');
      \$('#errors').html('";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("El formulario contiene errores, favor corríjalo."), "html", null, true);
        echo "');
    }
      
    \$('form .survey .alert-warning select').unbind('change').change( function () {
      event.preventDefault();
    });


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
      if (\$(this).val() != \"\") {
      \$.ajax({
        dataType: \"json\",
        type: \"POST\",
        url: \"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("contratos_json");
        echo "\",
        data: { empresa_id: \$(this).val() } ,
        success: function (dataSuccess) {
          \$('select#bctic_camipalbundle_encuesta_contrato').empty().append('<option value=\"-1\">";
        // line 186
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
      }
    });

    \$('#bctic_camipalbundle_encuesta_contrato').bind('change', function (){
      //Actualizo los campos dependientes:
      if (\$(this).val() != -1) {
        \$.ajax({
          dataType: \"json\",
          type: \"POST\",
          url: \"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("contrato_json");
        echo "\",
          data: { id: \$(this).val() } ,
          success: function (dataSuccess) {
            \$('#bctic_camipalbundle_encuesta_area').val(dataSuccess.area);
            \$('#bctic_camipalbundle_encuesta_servicio').val(dataSuccess.servicio);
            \$('#bctic_camipalbundle_encuesta_gerencia').val(dataSuccess.gerencia);
            \$('#bctic_camipalbundle_encuesta_subGerencia').val(dataSuccess.subgerencia);
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
      \$('.cierre').hide();

      //Solo muestro los contratos según el pais y rol - si aplica - esto lo hace el controlador:
      \$.ajax({
        dataType: \"json\",
        type: \"POST\",
        url: \"";
        // line 232
        echo $this->env->getExtension('routing')->getPath("contratos_index_json");
        echo "\",
        success: function (dataSuccess) {
          \$('select#bctic_camipalbundle_encuesta_contrato').empty().append('<option value=\"-1\">";
        // line 234
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


       //Elimino todos los objetos:
           //Solo muestro las empresas según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 251
        echo $this->env->getExtension('routing')->getPath("empresas_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_encuesta_empresa').empty().append('<option value=\"-1\">";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE EMPRESA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las empresas:
               \$('select#bctic_camipalbundle_encuesta_empresa').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           });    

      //COMO ES UN OBJETO NUEVO EL ESTADO DE CIERRE NO APLICA:
      \$('.status_cierre').hide();     


    });

  </script>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 253,  364 => 251,  344 => 234,  339 => 232,  309 => 205,  287 => 186,  281 => 183,  246 => 151,  227 => 135,  222 => 133,  212 => 126,  205 => 124,  197 => 119,  168 => 93,  126 => 54,  108 => 39,  102 => 37,  91 => 30,  88 => 29,  78 => 21,  73 => 19,  67 => 15,  65 => 14,  59 => 12,  56 => 11,  49 => 7,  43 => 6,  37 => 5,  34 => 4,  31 => 3,);
    }
}
