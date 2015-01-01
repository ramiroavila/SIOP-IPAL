<?php

/* BcTicCamIpalBundle:Encuesta:index.html.twig */
class __TwigTemplate_3b7cc0b891628149924aab3bac4721ea0d8378541e6a6dd8c6de000d77fb317f extends Twig_Template
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
  <li class=\"active\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Encuestas IPAL"), "html", null, true);
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
        $this->env->loadTemplate("BcTicCamIpalBundle:Encuesta:filter_encuesta.html.twig")->display(array_merge($context, array("form" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))));
        // line 14
        echo "    <!-- FORM END -->

    <div id=\"tab-content\">
    
    <ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"#resultado\" data-toggle=\"tab\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Índice IPAL"), "html", null, true);
        echo " </a></li>
      <li><a href=\"#listado\" data-toggle=\"tab\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Listado"), "html", null, true);
        echo "</a></li>
      <li><a href=\"#map\" id=\"map-tab\" data-toggle=\"tab\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mapa"), "html", null, true);
        echo "</a></li>
    </ul>

    <div class=\"container\" style=\"width: 100%;\">
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
          <div id=\"encuestas\">
            <div class=\"alert alert-info\">
              <p class=\"text-center\">Seleccione los criterios en el formulario superior y presione \"Buscar\" para desplegar los resultados.</p>
            </div>
          </div>
        </div>
        <div class=\"tab-pane active\" id=\"map\">
          <br/>
          <div id=\"map-canvas\"></div>
        </div>
      </div>
    </div>

    </div>

    <hr/>



<div class=\"btn-group\">
  <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar"), "html", null, true);
        echo "&nbsp;<span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\">

    ";
        // line 61
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 1)) {
            // line 62
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 2)) {
            // line 69
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "colombia_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Colombia"), "html", null, true);
            echo "</a></li>     
    ";
        }
        // line 71
        echo "
    ";
        // line 72
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 3)) {
            // line 73
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 77
        echo "    

    ";
        // line 79
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 4)) {
            // line 80
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "brazil_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "brazil_interno"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Interno"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 82
        echo "   

    ";
        // line 84
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 5)) {
            // line 85
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 89
        echo "  

    </ul>
</div>

    ";
    }

    // line 96
    public function block_javascript($context, array $blocks = array())
    {
        // line 97
        echo "      ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB7GU1J8Lp0N2rLVEA7hzbDFrxbC6f4S5Y&sensor=true\">
        </script>
        <script type=\"text/javascript\" src=\"/js/google_maps.js\">
        </script>
        <script src=\"http://code.highcharts.com/highcharts.js\"></script>
    ";
    }

    // line 105
    public function block_js($context, array $blocks = array())
    {
        // line 106
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

      \$(\"div.datepicker input\").datepicker();

      var map;

      function createResultado(indice,cantidad) {
      
        var data = \"<div class='alert alert-\";

        if (indice >= 80) data = data + 'info';
        if (indice < 80) data = data + 'warning'; 

        return data + \"'><h4 class='text-center'>IPAL: \" + indice + \", ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nº de inspecciones"), "html", null, true);
        echo ": \" + cantidad + \"</h4>\" + \"<p class='text-center'>* IPAL = ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Riesgo Detectado"), "html", null, true);
        echo " (RD) / ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nº Inspecciones"), "html", null, true);
        echo "</p></div>\";

      }

      function createReportes(indice,cantidad, collection) {

          var data = \"<div class='alert alert-\";

          if (indice >= 80) data = data + 'info';
          if (indice < 80) data = data + 'warning'; 

          data = data + \"'>\\
            <div class='text-center'><h4 class='text-center'>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Informes"), "html", null, true);
        echo " IPAL</h4>\\
              <div class='btn-group btn-group-justified'>\\
                <div class='btn-group btn-group-sm'>\\
                  <button id='reporte_por_mes' type='button' class='btn btn-default'>";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Por mes"), "html", null, true);
        echo "</button>\\
                </div>\\
                <div class='btn-group btn-group-sm'>\\
                  <button id='reporte_todos_los_datos' type='button' class='btn btn-default'>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Todos los datos"), "html", null, true);
        echo "</button>\\
                </div>\\
                <div class='btn-group btn-group-sm'>\\
                  <button id='reportes_no_conformidades' type='button' class='btn btn-default'>";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No conformidades"), "html", null, true);
        echo "</button>\\
                </div>\\
                <div class='btn-group btn-group-sm'>\\
                  <button id='reporte_ipal_por_prevencionista' type='button' class='btn btn-default'>";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Prevenc/Inspector"), "html", null, true);
        echo "</button>\\
                </div>\\
                <div style='display:none;' class='btn-group btn-group-sm'>\\
                  <button id='reporte_total_prevencionistas' type='button' class='btn btn-default'>";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL tot. Prevenc/Inspec."), "html", null, true);
        echo "</button>\\
                </div>\\
                <div class='btn-group btn-group-sm'>\\
                  <button id='reporte_total_no_50_20' type='button' class='btn btn-default'>";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total no 50-20"), "html", null, true);
        echo "</button>\\
                </div>\\
                <div class='btn-group btn-group-sm'>\\
                  <button id='reporte_cierre' type='button' class='btn btn-default'>";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Por status"), "html", null, true);
        echo "</button>\\
                </div>\\
              </div>\\
            </div>\\
            <br/>\\
          </div>\";

          return data;
        }

        function createDashboard(ids) {

          var data = '<br/><div id=\"dashboard\"></div><br/>';

          return data;
        }

        function createListado(collection, page) {

          var data = '<table class=\"records_list table table-striped\">\\
          <thead>\\
            <tr>\\
                <th>Nº & Fecha</th>\\
                <th>Ingreso</th>\\
                <th class=\"hidden-xs\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresa"), "html", null, true);
        echo "</th>\\
                <th class=\"hidden-xs\">";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contrato"), "html", null, true);
        echo "</th>\\
                <th class=\"hidden-xs\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inspector/País"), "html", null, true);
        echo "</th>\\
                <th class=\"hidden-xs\">";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Archivos Obs."), "html", null, true);
        echo "</th>\\
                <th class=\"hidden-xs\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Control de cierre"), "html", null, true);
        echo "</th>\\
                <th class=\"visible-xs\">";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Encuesta"), "html", null, true);
        echo "</th>\\
                <th>";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Índice IPAL"), "html", null, true);
        echo "</th>\\
                <th class=\"actions\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Opciones"), "html", null, true);
        echo "</th>\\
            </tr>\\
          </thead>\\
          <tfoot>\\
            <tr>\\
              <td colspan=\"10\" style=\"text-align: center;\">\\
                <ul class=\"pagination\">\\
                  <li><a id=\"previous\" href=\"javascript:void(0);\">";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anterior"), "html", null, true);
        echo "</a></li>\\
                  <li class=\"active\"><a href=\"#\">' + page + '</a><li>\\
                  <li><a id=\"next\" href=\"javascript:void(0);\">";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "</a></li>\\
                </ul>\\
              </td>\\
            </tr>\\
          </tfoot>\\
          <tbody>';

          //Iteración
          var items = \"\";

          \$.each(collection, function() {

            var files = '';
            \$.each(this.files, function(i, item) { 
              files = files + '<a target=\"blank\" href=\"/'+ item + '\">";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Archivo"), "html", null, true);
        echo " #'  + ( i + 1 )+ '</a><br/>' ;
            });
            files = files + '';

            var filesCierre = '';
            \$.each(this.filesCierre, function(i, item) { 
              filesCierre = filesCierre + '<a target=\"blank\" href=\"/'+ item + '\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Archivo"), "html", null, true);
        echo " #'  + ( i + 1 )+ '</a><br/>' ;
            });

            filesCierre = filesCierre + '';

            items = items + '\\
            <tr id=\"row_' + this.id + '\">\\
                <td>' + this.id +  ' - ' + this.fecha + '</td>\\
                <td>' + this.createdAt + '</td>\\
                <td class=\"hidden-xs\">' + this.empresa + '</td>\\
                <td class=\"hidden-xs\">' + this.contrato + '</td>\\
                <td class=\"hidden-xs\">' + this.inspector + '/' + this.pais + '</td>\\
                <td class=\"hidden-xs\">' + files  + '</td>\\
                <td class=\"hidden-xs\">' + this.cierre  + '<br/>' + filesCierre  + '</td>\\
                <td class=\"visible-xs\">\\
                  ' + this.empresa + '\\
                  ' + this.contrato + '\\
                  ' + this.pais + '\\
                </td>\\
                <td>' + this.indiceIPAL + '</td>\\
                <td>\\
                  <a target=\"blank\" id=\"show_encuesta_' + this.id + '\" href=\"/encuestas/' + this.id + '.html\">\\
                    <button type=\"button\" class=\"btn btn-default btn-xs\">\\
                      <span class=\"glyphicon glyphicon-print\"></span> ";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver"), "html", null, true);
        echo " \\
                    </button>\\
                  </a>\\
                  <a id=\"edit_encuesta_' + this.id + '\" target=\"_blank\" href=\"/encuestas/edit/' + this.id + '\">\\
                    <button type=\"button\" class=\"btn btn-default btn-xs\">\\
                      <span class=\"glyphicon glyphicon-pencil\"></span> ";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Editar"), "html", null, true);
        echo "\\
                    </button>\\
                  </a>\\
                  ";
        // line 265
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 266
            echo "                  <a href=\"javascript:delete_encuesta(' + this.id + ',\\' ' +  this.token + ' \\')\" class=\"confirm\">\\
                    <button type=\"button\" class=\"btn btn-default btn-xs\">\\
                      <span class=\"glyphicon glyphicon-trash\"></span> ";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Borrar"), "html", null, true);
            echo "\\
                    </button>\\
                  </a>\\
                  ";
        }
        // line 271
        echo "\\
                </td>\\
            </tr>';

          });

          data = data + items + '</tbody></table>';

          return data;

        }

        function delete_encuesta(id,token) {

          \$.ajax({
             dataType: \"json\",
             type: \"GET\",
             url: \"/encuestas/delete/\" + id + \"/\" +  token + \"\",
             success: function (dataSuccess) { 
                 if (dataSuccess.status == \"1\") {
                   \$('tr#row_' + id ).fadeOut();
                 }
               },
            });

        }
    
        function updateDataEncuestas(pagina, items_por_pagina) {
          
          pagina = typeof pagina !== 'undefined' ? pagina : 1;
          items_por_pagina = typeof items_por_pagina !== 'undefined' ? items_por_pagina : 15;

          //Obtengo un listado de Encuestas en formato json con los datos del Form
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 307
        echo $this->env->getExtension('routing')->getPath("encuestas_json");
        echo "\",
             data: { items_por_pagina: items_por_pagina, pagina: pagina, empresa_id : \$('#bctic_camipalbundle_encuesta_empresa').val(), contrato_id : \$('#bctic_camipalbundle_encuesta_contrato').val(), mandante_id : \$('#bctic_camipalbundle_encuesta_mandante').val(), gerencia_id : \$('#bctic_camipalbundle_encuesta_gerencia').val(), subgerencia_id : \$('#bctic_camipalbundle_encuesta_subGerencia').val(), area_id : \$('#bctic_camipalbundle_encuesta_area').val(), inspector : \$('#bctic_camipalbundle_encuesta_inspector').val(), prevencionista : \$('#bctic_camipalbundle_encuesta_prevencionista').val(), supervisor : \$('#bctic_camipalbundle_encuesta_supervisorFacade').val(), servicio_id : \"\",pais_id : \$('#bctic_camipalbundle_encuesta_pais').val(), fecha_desde : \$('#bctic_camipalbundle_encuesta_fecha_desde').val(), fecha_hasta : \$('#bctic_camipalbundle_encuesta_fecha_hasta').val(), tipo : \"\", status_cierre: \$('#bctic_camipalbundle_encuesta_status_cierre').val() } ,
             beforeSend: function () {
               \$('#resultados').html(\"<div class='spinner'></div>\");
               \$('#encuestas').html(\"<div class='spinner'></div>\");
             },
             success: function (dataSuccess) { 
               //Ahora que tengo los objetos debo parsear  
               //Primero la lista:
               if (dataSuccess.hits < 1) {
                 \$('#resultados').html('<div class=\"alert alert-info\">";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No hay encuestas IPAL que mostrar."), "html", null, true);
        echo "</div>'); 
                 \$('#encuestas').html('<div class=\"alert alert-info\">";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No hay encuestas IPAL que mostrar."), "html", null, true);
        echo "</div>'); 
               } else { 
                 \$('#resultados').html(createResultado(dataSuccess.indiceIPAL,dataSuccess.hits));
                 \$('#resultados').append(createDashboard(dataSuccess.ids));

                 \$(\"#dashboard\").html(\" CARGANDO ... \");

                 //Jquery de HIGHLIGHTS CHARTS:

                 //PANEL 1 3:
                 \$.ajax({
                   url: \"";
        // line 329
        echo $this->env->getExtension('routing')->getPath("encuesta_data_dashboard");
        echo "\",
                   data: { ids: dataSuccess.ids } ,
                   type: \"POST\",
                   dataType: \"json\",
                   success: function(data){
                     var options = {
                      chart: {
                        renderTo: 'dashboard',
                        height: 400,
                        type: 'xy'
                      },
                      tooltip: {
                        shared: true,
                      },
                      title: {
                        text: ''
                      },
                      xAxis: {
                        title: {
                        text: ''
                      },
                      categories: []
                      },
                      yAxis: [{
                          title: {
                            text: 'Número de encuestas'
                          },
                          labels: {
                            format: ''
                          },
                          min: 0
                        },{
                          title: {
                            text: 'Índice IPAL'
                          },
                          opposite: true,
                          min:0
                      }],
                      series: [],
                      credits: { enabled: false }
                    };

                    options.xAxis.categories = data.categories;
                    options.xAxis.title.text = data.xAxisTitle;

                    \$.each(data.series, function(i,serie) {
                      var data_serie = {
                      name: serie.name,
                      color: serie.color,
                      data: serie.data,
                      type: serie.type,
                      yAxis: serie.yAxis,
                      tooltip: {
                          valueSuffix: serie.valueSuffix
                        }                      
                      }
                      options.series.push(data_serie);
                    });

                    var chart = new Highcharts.Chart(options);

                   }
                 });

                 \$('#resultados').append(createReportes(dataSuccess.indiceIPAL,dataSuccess.hits,dataSuccess.entities));

                 \$('#reporte_por_mes').bind('click', function (e) { 
                   \$.ajax({
                     type: \"POST\",
                     dataType: \"json\",
                     url: \"";
        // line 399
        echo $this->env->getExtension('routing')->getPath("encuesta_reporte_por_mes_csv");
        echo "\",
                     data: { ids: dataSuccess.ids },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file + '/download.html');
                        alert(\"";
        // line 404
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
        // line 413
        echo $this->env->getExtension('routing')->getPath("encuesta_reporte_todos_los_datos_csv");
        echo "\",
                     data: { ids: dataSuccess.ids },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file + '/download.html');
                        alert(\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se ha descargado el archivo"), "html", null, true);
        echo " \" + data.file + \".csv\");
                     }
                   });
                 });   

                 \$('#reportes_no_conformidades').bind('click', function (e) { 
                   \$.ajax({
                     type: \"POST\",
                     dataType: \"json\",
                     url: \"";
        // line 427
        echo $this->env->getExtension('routing')->getPath("encuesta_reporte_no_conformidades_csv");
        echo "\",
                     data: { ids: dataSuccess.ids },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file + '/download.html');
                        alert(\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se ha descargado el archivo"), "html", null, true);
        echo " \" + data.file + \".csv\");
                     }
                   });
                 });           

                 \$('#reporte_ipal_por_prevencionista').bind('click', function (e) { 
                   \$.ajax({
                     type: \"POST\",
                     dataType: \"json\",
                     url: \"";
        // line 441
        echo $this->env->getExtension('routing')->getPath("encuesta_reporte_total_prevencionistas_csv");
        echo "\",
                     data: { ids: dataSuccess.ids },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file + '/download.html');
                        alert(\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se ha descargado el archivo"), "html", null, true);
        echo " \" + data.file + \".csv\");
                     }
                   });
                 });    

                 \$('#reporte_total_prevencionistas').bind('click', function (e) { 
                   \$.ajax({
                     type: \"POST\",
                     dataType: \"json\",
                     url: \"";
        // line 455
        echo $this->env->getExtension('routing')->getPath("encuesta_reporte_total_prevencionistas_csv");
        echo "\",
                     data: { ids: dataSuccess.ids },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file + '/download.html');
                        alert(\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se ha descargado el archivo"), "html", null, true);
        echo " \" + data.file + \".csv\");
                     }
                   });
                 });   

                 \$('#reporte_total_no_50_20').bind('click', function (e) { 
                   \$.ajax({
                     type: \"POST\",
                     dataType: \"json\",
                     url: \"";
        // line 469
        echo $this->env->getExtension('routing')->getPath("encuesta_reporte_total_no_50_20_csv");
        echo "\",
                     data: { ids: dataSuccess.ids },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file_total + '/download.html');
                        window.open('reportes/' + data.file_no_5020 + '/download.html');
                        alert(\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se ha descargado el archivo"), "html", null, true);
        echo " \" + data.file_total + \".csv y \" + data.file_no_5020 + \".csv\");
                     }
                   });
                 });                                                     

                 \$('#reporte_cierre').bind('click', function (e) { 
                   \$.ajax({
                     type: \"POST\",
                     dataType: \"json\",
                     url: \"";
        // line 484
        echo $this->env->getExtension('routing')->getPath("encuesta_reporte_cierre_csv");
        echo "\",
                     data: { ids: dataSuccess.ids },
                     success: function (data) {
                        //Descargar el archivo:
                        window.open('reportes/' + data.file + '/download.html');
                        alert(\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se ha descargado el archivo"), "html", null, true);
        echo " \" + data.file + \".csv\");
                     }
                   });
                 });  

                 \$('#encuestas').html(createListado(dataSuccess.entities, dataSuccess.pagina));

                 if (Number(dataSuccess.pagina) == 1) { 
                   \$(\"a#previous\").parent().addClass(\"disabled\"); 
                 } else {
                   \$('#previous').bind('click', function (e) {
                     updateDataEncuestas(dataSuccess.pagina - 1);
                   });
                 }

                 if (Number(dataSuccess.ultima_pagina) == Number(dataSuccess.pagina)) { 
                   \$(\"a#next\").parent().addClass(\"disabled\"); 
                 } else {
                   \$('#next').bind('click', function (e) {
                     updateDataEncuestas(dataSuccess.pagina + 1);
                   });
                 }


                 \$.each(dataSuccess.entities, function() {
                   \$('#edit_encuesta_' + this.id ).hide(); 
                   ";
        // line 515
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 516
            echo "                     \$('#edit_encuesta_' + this.id ).show();  
                   ";
        }
        // line 518
        echo "                   if (this.createdBy == this.actualUser) {
                     \$('#edit_encuesta_' + this.id ).show();  
                   }

                 }); 
                 updateMarkers(map, dataSuccess.entities);

                 \$('a.confirm').bind('click', function () {
                   return confirm(\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("¿Está seguro quiere borrar?"), "html", null, true);
        echo "\");
                 });

               }
             },
             error: function (a,b,c) {
               alert(\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SE HA PRODUCIDO UN ERROR, CORRIJA EL BUSCADOR E INTÉNTELO NUEVAMENTE."), "html", null, true);
        echo "\");
             }
          });
        }

        function listarInspectores() {

          \$('select#bctic_camipalbundle_encuesta_inspector').append('<option value=\"0\">- NINGUN INSPECTOR -</option>');

          \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 544
        echo $this->env->getExtension('routing')->getPath("registros_inspectores_json");
        echo "\",
             success: function (dataSuccess) { 
                 \$.each(dataSuccess, function(i, item) {
                   \$('select#bctic_camipalbundle_encuesta_inspector').append('<option value=\"' + item.nombre + '\">' + item.nombre + '</option>');
                 });
               },
            });

        }

        function listarPrevencionistas() {
                 
          \$('select#bctic_camipalbundle_encuesta_prevencionista').append('<option value=\"0\">";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("- NINGUN PREVENCIONISTA -"), "html", null, true);
        echo "</option>');                 
          \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 560
        echo $this->env->getExtension('routing')->getPath("registros_prevencionistas_json");
        echo "\",
             success: function (dataSuccess) { 
                 \$.each(dataSuccess, function(i, item) {
                   \$('select#bctic_camipalbundle_encuesta_prevencionista').append('<option value=\"' + item.nombre + '\">' + item.nombre + '</option>');
                 });
               },
            });

        }

        function listarSupervisores() {
                 
          \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 575
        echo $this->env->getExtension('routing')->getPath("registros_supervisores_json");
        echo "\",
             success: function (dataSuccess) { 
                 \$.each(dataSuccess, function(i, item) {
                   \$('select#bctic_camipalbundle_encuesta_supervisorFacade').append('<option value=\"' + item.nombre + '\">' + item.nombre + '</option>');
                 });
               },
            });

        }

      \$(document).ready( function () { 

        map = initialize(\"map-canvas\", false, \"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Usted está aquí"), "html", null, true);
        echo "\",13, 'bctic_camipalbundle_dummy');
         
        \$('#map-canvas').hide();
        \$(\"#map-tab\").on('shown.bs.tab', function() {
          \$('#map-canvas').show();
          google.maps.event.trigger(map, \"resize\");
        });

        //Elimino todos los objetos:
        \$('select#bctic_camipalbundle_encuesta_pais').empty();
        \$('select#bctic_camipalbundle_encuesta_pais').append('<option value=\"";
        // line 597
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
        // line 604
        echo $this->env->getExtension('routing')->getPath("contratos_index_json");
        echo "\",
          success: function (dataSuccess) {
            \$('select#bctic_camipalbundle_encuesta_contrato').empty().append('<option value=\"\">";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE CONTRATO --"), "html", null, true);
        echo "</option>');
            \$.each(dataSuccess, function() {
              //En base a esto cargo los contratos:
              \$('select#bctic_camipalbundle_encuesta_contrato').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
            });
          },
          error: function (a,b,c) {
            alert(\"ERROR: \" + b + \" - \" + a + \" - \" + c );
          }
        });

        //Elimino todos los objetos:
        //Solo muestro las empresas según el pais y rol - si aplica - esto lo hace el controlador:
        \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 622
        echo $this->env->getExtension('routing')->getPath("empresas_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_encuesta_empresa').empty().append('<option value=\"\">";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE EMPRESA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las empresas:
               \$('select#bctic_camipalbundle_encuesta_empresa').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b + \" - \" + a + \" - \" + c );
            }
           });

        //Elimino todos los objetos:
        //Solo muestro los mandantes según el pais y rol - si aplica - esto lo hace el controlador:
        \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 640
        echo $this->env->getExtension('routing')->getPath("mandantes_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_encuesta_mandante').empty().append('<option value=\"\">";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE MANDANTE --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo los mandantes:
               \$('select#bctic_camipalbundle_encuesta_mandante').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b + \" - \" + a + \" - \" + c );
            }
        });           

        //Elimino todos los objetos:
        //Solo muestro las areas según el pais y rol - si aplica - esto lo hace el controlador:
        \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 658
        echo $this->env->getExtension('routing')->getPath("areas_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_encuesta_area').empty().append('<option value=\"\">";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE ÁREA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las áreas:
               \$('select#bctic_camipalbundle_encuesta_area').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b + \" - \" + a + \" - \" + c );
            }
        });           

        //Elimino todos los objetos:
        //Solo muestro las gerencias según el pais y rol - si aplica - esto lo hace el controlador:
        \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 676
        echo $this->env->getExtension('routing')->getPath("gerencias_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_encuesta_gerencia').empty().append('<option value=\"\">";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE GERENCIA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las áreas:
               \$('select#bctic_camipalbundle_encuesta_gerencia').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b + \" - \" + a + \" - \" + c );
            }
        }); 

        //Elimino todos los objetos:
        //Solo muestro las subgerencias según el pais y rol - si aplica - esto lo hace el controlador:
        \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 694
        echo $this->env->getExtension('routing')->getPath("subgerencias_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_encuesta_subGerencia').empty().append('<option value=\"\">";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE SUB GERENCIA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las áreas:
               \$('select#bctic_camipalbundle_encuesta_subGerencia').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {

            }
        }); 


        //Actualizo la lista de inspectores
        listarInspectores();
        //Actualizo la lista de prevencionista - OJO incluye a los Usuarios
        listarPrevencionistas();
        //Actualizo la lista de supervisores - OJO incluye a los Usuarios
        listarSupervisores();

        \$('#bctic_camipalbundle_encuesta_button').bind('click', function () { 
           updateDataEncuestas(1);
        });


      });

      </script>
    ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1064 => 696,  1059 => 694,  1040 => 678,  1035 => 676,  1016 => 660,  1011 => 658,  992 => 642,  987 => 640,  968 => 624,  963 => 622,  944 => 606,  939 => 604,  927 => 597,  914 => 587,  899 => 575,  881 => 560,  874 => 556,  859 => 544,  844 => 532,  835 => 526,  825 => 518,  821 => 516,  819 => 515,  790 => 489,  782 => 484,  770 => 475,  761 => 469,  749 => 460,  741 => 455,  729 => 446,  721 => 441,  709 => 432,  701 => 427,  689 => 418,  681 => 413,  669 => 404,  661 => 399,  588 => 329,  574 => 318,  570 => 317,  557 => 307,  519 => 271,  512 => 268,  508 => 266,  506 => 265,  500 => 262,  492 => 257,  466 => 234,  457 => 228,  440 => 214,  435 => 212,  425 => 205,  421 => 204,  417 => 203,  413 => 202,  409 => 201,  405 => 200,  401 => 199,  397 => 198,  370 => 174,  364 => 171,  358 => 168,  352 => 165,  346 => 162,  340 => 159,  334 => 156,  328 => 153,  309 => 141,  270 => 106,  267 => 105,  255 => 97,  252 => 96,  243 => 89,  236 => 88,  230 => 87,  224 => 86,  217 => 85,  215 => 84,  211 => 82,  204 => 81,  197 => 80,  195 => 79,  191 => 77,  184 => 76,  178 => 75,  172 => 74,  165 => 73,  163 => 72,  160 => 71,  152 => 69,  150 => 68,  147 => 67,  140 => 65,  134 => 64,  128 => 63,  121 => 62,  119 => 61,  112 => 57,  73 => 21,  69 => 20,  65 => 19,  58 => 14,  56 => 13,  53 => 12,  50 => 10,  43 => 6,  37 => 5,  34 => 4,  31 => 3,);
    }
}
