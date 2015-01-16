<?php

/* BcTicCamIpalBundle:ObservacionDeComportamiento:index.html.twig */
class __TwigTemplate_91a5f4878f08320fcb2df6568a2edacb4429053a2313dfb2573d63b81d6479b7 extends Twig_Template
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
  <li class=\"active\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<!-- FORM BEGIN -->
    ";
        // line 13
        $this->env->loadTemplate("BcTicCamIpalBundle:ObservacionDeComportamiento:filter_observacion.html.twig")->display(array_merge($context, array("form" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))));
        // line 14
        echo "    <!-- FORM END -->
    
    <ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"#resultado\" data-toggle=\"tab\">Índice ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
        echo "</a></li>
      <li><a href=\"#listado\" data-toggle=\"tab\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Listado"), "html", null, true);
        echo "</a></li>      
    </ul>

    <div class=\"container\" style=\"width: 98%;\">
      <div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"resultado\">
          <br/>
          <div id=\"resultados\">
            <div class=\"alert alert-info\">
              <p class=\"text-center\">Seleccione los criterios en el formulario superior y presione \"Buscar\" para desplegar los resultados.</p>
            </div>
          </div>
        </div>
        <div class=\"tab-pane\" id=\"listado\">
          <br/>
          <div id=\"observaciones\">
            <div class=\"alert alert-info\">
              <p class=\"text-center\">Seleccione los criterios en el formulario superior y presione \"Buscar\" para desplegar los resultados.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr/>

    <p class=\"text-left\">
    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("observaciones_new");
        echo "\">
                    <button type=\"button\" class=\"btn btn-default btn-xs\">
                      <span class=\"glyphicon glyphicon-plus\"></span>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar"), "html", null, true);
        echo "
                    </button>
    </a>
    </p> 


    ";
    }

    // line 55
    public function block_js($context, array $blocks = array())
    {
        // line 56
        echo "      ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
      <script type=\"text/javascript\">

      \$(function(\$){
    \$.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    \$.datepicker.setDefaults(\$.datepicker.regional['es']);
});

       \$( \"div.datepicker input\" ).datepicker();

        function createResultado(indice,cantidad,items) {

          var data = \"<div class='alert alert-info\";

          return data + \"'><h4 class='text-center'># DE MEDICIONES: \" + cantidad + \"</h4><h4 class='text-center'># DE OBSERV. PELIGROSAS: \" + indice + \" de \" + items + \"</h4><h4 class='text-center'># DE OBSERV. SEGURAS: \" + (items - indice) + \" de \" + items + \" </h4></div>\";

        }

        function createReportes(indice,cantidad, collection) {

          var data = \"<div class='alert alert-info\";

          data = data + \"'>\\
            <div class='text-center'><h4 class='text-center'>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Informes Observaciones"), "html", null, true);
        echo "</h4>\\
              <div class='btn-group btn-group-justified'>\\
                <div class='btn-group btn-group-sm'>\\
                  <button id='reporte_por_mes' type='button' class='btn btn-default'>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Por mes"), "html", null, true);
        echo "</button>\\
                </div>\\
                <div class='btn-group btn-group-sm'>\\
                  <button id='reporte_todos_los_datos' type='button' class='btn btn-default'>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Todos los datos"), "html", null, true);
        echo "</button>\\
                </div>\\
              </div>\\
            </div>\\
            <br/>\\
          </div>\";

          return data;
        }

        function createListado(collection) {

          var data = '<table class=\"records_list table table-striped\">\\
          <thead>\\
            <tr>\\
                <th>Nº & Fecha</th>\\
                <th class=\"hidden-xs\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresa"), "html", null, true);
        echo "</th>\\
                <th class=\"hidden-xs\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contrato"), "html", null, true);
        echo "</th>\\
                <th class=\"hidden-xs\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inspector/País"), "html", null, true);
        echo "</th>\\
                <th class=\"visible-xs\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observación"), "html", null, true);
        echo "</th>\\
                <th># de observ. ";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("peligrosas"), "html", null, true);
        echo "</th>\\
                <th class=\"actions\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Opciones"), "html", null, true);
        echo "</th>\\
            </tr>\\
          </thead>\\
          <tbody>';

          //Iteración
          var items = \"\";

          \$.each(collection, function() {
            items = items + '\\
            <tr id=\"row_' + this.id + '\">\\
                <td class=\"hidden-xs\">#' + this.id + ' ' + this.fecha + '</td>\\
                <td class=\"hidden-xs\">' + this.empresa + '</td>\\
                <td class=\"hidden-xs\">' + this.contrato + '</td>\\
                <td class=\"hidden-xs\">' + this.inspector + '<br/>' + this.pais + '</td>\\
                <td class=\"visible-xs\">\\
                  ' + this.empresa + '\\
                  ' + this.contrato + '\\
                  ' + this.pais + '\\
                </td>\\
                <td>' + this.indice + '</td>\\
                <td>\\
                <a target=\"blank\" id=\"show_observacion_' + this.id + '\" href=\"/observaciones/' + this.id + '.html\">\\
                    <button type=\"button\" class=\"btn btn-default btn-xs\">\\
                      <span class=\"glyphicon glyphicon-print\"></span> Ver \\
                    </button>\\
                  </a>\\
                 <a id=\"edit_observacion_' + this.id + '\" href=\"/observaciones/edit/' + this.id + '\">\\
                    <button type=\"button\" class=\"btn btn-default btn-xs\">\\
                      <span class=\"glyphicon glyphicon-pencil\"></span> ";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Editar"), "html", null, true);
        echo "\\
                    </button>\\
                  </a>\\
                  ";
        // line 154
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 155
            echo "                  <a href=\"javascript:delete_observacion(' + this.id + ',\\' ' +  this.token + ' \\')\" class=\"confirm\">\\
                    <button type=\"button\" class=\"btn btn-default btn-xs\">\\
                      <span class=\"glyphicon glyphicon-trash\"></span> ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Borrar"), "html", null, true);
            echo "\\
                    </button>\\
                  </a>\\
                  ";
        }
        // line 160
        echo "\\
                </td>\\
            </tr>';
          });


          data = data + items + '</tbody>\\
          </table>';

          return data;
        }

        function delete_observacion(id,token) {

          \$.ajax({
             dataType: \"json\",
             type: \"GET\",
             url: \"/observaciones/delete/\" + id + \"/\" +  token + \"\",
             success: function (dataSuccess) { 
                 if (dataSuccess.status == \"1\") {
                   \$('tr#row_' + id ).fadeOut();
                 }
               },
            });

        }
    
        function updateDataResultados() {
          //Obtengo un listado de Observaciones en formato json con los datos del Form
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("observaciones_json");
        echo "\",
             data: { empresa_id : \$('#bctic_camipalbundle_observacion_de_comportamiento_empresa').val(), contrato_id : \$('#bctic_camipalbundle_observacion_de_comportamiento_contrato').val(), mandante_id : \$('#bctic_camipalbundle_observacion_de_comportamiento_mandante').val(), gerencia_id : \$('#bctic_camipalbundle_observacion_de_comportamiento_gerencia').val(), subgerencia_id : \$('#bctic_camipalbundle_observacion_de_comportamiento_subGerencia').val(), area_id : \$('#bctic_camipalbundle_observacion_de_comportamiento_area').val(), inspector : \$('#bctic_camipalbundle_observacion_de_comportamiento_inspector').val(), prevencionista : \$('#bctic_camipalbundle_observacion_de_comportamiento_prevencionista').val(), supervisor : \$('#bctic_camipalbundle_observacion_de_comportamiento_supervisor').val(), servicio_id : \$('#bctic_camipalbundle_observacion_de_comportamiento_servicio').val(),pais_id : \$('#bctic_camipalbundle_observacion_de_comportamiento_pais').val(), fecha_desde : \$('#bctic_camipalbundle_observacion_de_comportamiento_fecha_desde').val(), fecha_hasta : \$('#bctic_camipalbundle_observacion_de_comportamiento_fecha_hasta').val()
             } ,
             beforeSend: function () {
               \$('#resultados').html(\"<div class='spinner'></div>\");
               \$('#observaciones').html(\"<div class='spinner'></div>\");
             },
             success: function (dataSuccess) { 
               //Ahora que tengo los objetos debo parsear  
               //Primero la lista:
               if (dataSuccess.hits < 1) {
                 \$('#resultados').html('<div class=\"alert alert-info\">No hay observaciones que mostrar.</div>'); 
                 \$('#observaciones').html('<div class=\"alert alert-info\">No hay observaciones que mostrar.</div>'); 
               } else { 
                 \$('#resultados').html(createResultado(dataSuccess.indice,dataSuccess.hits,dataSuccess.items));
                 \$('#resultados').append(createReportes(dataSuccess.indice,dataSuccess.hits,dataSuccess.items));

                 var entities = dataSuccess.ids;

                 \$('#reporte_por_mes').bind('click', function (e) { 
                   \$.ajax({
                     type: \"POST\",
                     dataType: \"json\",
                     url: \"";
        // line 215
        echo $this->env->getExtension('routing')->getPath("observacion_reporte_por_mes_csv");
        echo "\",
                     data: { entities: entities },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file + '/download.html');
                        alert(\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se ha descargado el archivo"), "html", null, true);
        echo " \" + data.file + \".csv\");
                     }
                   });
                 });

                 \$('#reporte_todos_los_datos').bind('click', function (e) { 
                   \$.ajax({
                     type: \"POST\",
                     dataType: \"json\",
                     url: \"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("observacion_reporte_todos_los_datos_csv");
        echo "\",
                     data: { entities: entities },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file + '/download.html');
                        alert(\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se ha descargado el archivo"), "html", null, true);
        echo " \" + data.file + \".csv\");
                     }, 
                     error: function (a,b,c) {
                       alert(a);
                       alert(b);
                       alert(c);
                     }
                   });
                 });   

                 \$('#observaciones').html(createListado(dataSuccess.entities));
               }
             },
             error: function (a,b,c) {
               alert(\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SE HA PRODUCIDO UN ERROR, CORRIJA EL BUSCADOR E INTÉNTELO NUEVAMENTE"), "html", null, true);
        echo ".\");
             }
          });
        }

        function listarInspectores() {

          \$('select#bctic_camipalbundle_observacion_de_comportamiento_inspector').append('<option value=\"0\">- NINGUN INSPECTOR -</option>');
          \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 259
        echo $this->env->getExtension('routing')->getPath("registros_inspectores_json");
        echo "\",
             success: function (dataSuccess) { 
                 \$.each(dataSuccess, function(i, item) {
                   \$('select#bctic_camipalbundle_observacion_de_comportamiento_inspector').append('<option value=\"' + item.nombre + '\">' + item.nombre + '</option>');
                 });
               },
            });

        }

        function listarPrevencionistas() {

          \$('select#bctic_camipalbundle_observacion_de_comportamiento_prevencionista').append('<option value=\"0\">";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("- NINGUN PREVENCIONISTA -"), "html", null, true);
        echo "</option>');                  
          \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 275
        echo $this->env->getExtension('routing')->getPath("registros_prevencionistas_json");
        echo "\",
             success: function (dataSuccess) { 
                 \$.each(dataSuccess, function(i, item) {
                   \$('select#bctic_camipalbundle_observacion_de_comportamiento_prevencionista').append('<option value=\"' + item.nombre + '\">' + item.nombre + '</option>');
                 });
               },
            });

        }

        function listarSupervisores() {
                 
          \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 290
        echo $this->env->getExtension('routing')->getPath("registros_supervisores_json");
        echo "\",
             success: function (dataSuccess) { 
                 \$.each(dataSuccess, function(i, item) {
                   \$('select#bctic_camipalbundle_observacion_de_comportamiento_supervisor').append('<option value=\"' + item.nombre + '\">' + item.nombre + '</option>');
                 });
               },
            });

        }        

      \$(document).ready( function () {

           //Elimino todos los objetos:
           \$('select#bctic_camipalbundle_observacion_de_comportamiento_pais').empty();
           \$('select#bctic_camipalbundle_observacion_de_comportamiento_pais').append('<option value=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "nombre"), "html", null, true);
        echo "</option>');

           //Elimino todos los objetos:
           //Solo muestro los contratos según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 311
        echo $this->env->getExtension('routing')->getPath("contratos_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_contrato').empty().append('<option value=\"\">";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE CONTRATO --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo los contratos:
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_contrato').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
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
        // line 329
        echo $this->env->getExtension('routing')->getPath("empresas_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_empresa').empty().append('<option value=\"\">";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE EMPRESA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las empresas:
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_empresa').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           });

                      //Elimino todos los objetos:
           //Solo muestro los mandantes según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 347
        echo $this->env->getExtension('routing')->getPath("mandantes_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_mandante').empty().append('<option value=\"\">";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE MANDANTE --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo los mandantes:
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_mandante').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           });           

           //Elimino todos los objetos:
           //Solo muestro las areas según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 365
        echo $this->env->getExtension('routing')->getPath("areas_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_area').empty().append('<option value=\"\">";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE ÁREA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las áreas:
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_area').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           });           

           //Elimino todos los objetos:
           //Solo muestro las gerencias según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 383
        echo $this->env->getExtension('routing')->getPath("gerencias_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_gerencia').empty().append('<option value=\"\">";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE GERENCIA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las áreas:
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_gerencia').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           }); 

           //Elimino todos los objetos:
           //Solo muestro las subgerencias según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 401
        echo $this->env->getExtension('routing')->getPath("subgerencias_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_subGerencia').empty().append('<option value=\"\">";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE SUB GERENCIA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las áreas:
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_subGerencia').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           }); 

           //Elimino todos los objetos:
           //Solo muestro las servicio según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 419
        echo $this->env->getExtension('routing')->getPath("servicios_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_servicio').empty().append('<option value=\"\">";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE SERVICIO --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las áreas:
               \$('select#bctic_camipalbundle_observacion_de_comportamiento_servicio').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           }); 

         //Actualizo la lista de inspectores
         listarInspectores();
         //Actualizo la lista de prevencionista - OJO incluye a los Usuarios
         listarPrevencionistas();
         //Actualizo la lista de supervisores - OJO incluye a los Usuarios
         listarSupervisores();

         \$('#bctic_camipalbundle_observacion_de_comportamiento_button').bind('click', function () { 
           updateDataResultados();
         }); 

       });

      </script>
    ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:ObservacionDeComportamiento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 421,  591 => 419,  572 => 403,  567 => 401,  548 => 385,  543 => 383,  524 => 367,  519 => 365,  500 => 349,  495 => 347,  476 => 331,  471 => 329,  452 => 313,  447 => 311,  435 => 304,  418 => 290,  400 => 275,  393 => 271,  378 => 259,  364 => 248,  347 => 234,  339 => 229,  327 => 220,  319 => 215,  293 => 192,  259 => 160,  252 => 157,  248 => 155,  246 => 154,  240 => 151,  208 => 122,  204 => 121,  200 => 120,  196 => 119,  192 => 118,  188 => 117,  169 => 101,  163 => 98,  157 => 95,  114 => 56,  111 => 55,  100 => 46,  95 => 44,  66 => 18,  62 => 17,  57 => 14,  55 => 13,  52 => 12,  49 => 10,  42 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
