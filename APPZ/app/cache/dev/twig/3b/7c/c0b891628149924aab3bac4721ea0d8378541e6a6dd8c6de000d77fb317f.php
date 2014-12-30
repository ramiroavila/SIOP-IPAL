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
                  <a id=\"edit_encuesta_' + this.id + '\" href=\"/encuestas/edit/' + this.id + '\">\\
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
             data: { items_por_pagina: items_por_pagina, pagina: pagina, empresa_id : \$('#bctic_camipalbundle_encuesta_empresa').val(), contrato_id : \$('#bctic_camipalbundle_encuesta_contrato').val(), mandante_id : \$('#bctic_camipalbundle_encuesta_mandante').val(), gerencia_id : \$('#bctic_camipalbundle_encuesta_gerencia').val(), subgerencia_id : \$('#bctic_camipalbundle_encuesta_subGerencia').val(), area_id : \$('#bctic_camipalbundle_encuesta_area').val(), inspector : \$('#bctic_camipalbundle_encuesta_inspector').val(), prevencionista : \$('#bctic_camipalbundle_encuesta_prevencionista').val(), supervisor : \$('#bctic_camipalbundle_encuesta_supervisorFacade').val(), servicio_id : \$('#bctic_camipalbundle_encuesta_servicio').val(),pais_id : \$('#bctic_camipalbundle_encuesta_pais').val(), fecha_desde : \$('#bctic_camipalbundle_encuesta_fecha_desde').val(), fecha_hasta : \$('#bctic_camipalbundle_encuesta_fecha_hasta').val(), tipo : \$('#bctic_camipalbundle_encuesta_tipo_facade').val() } ,
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

        //Elimino todos los objetos:
        //Solo muestro las servicio según el pais y rol - si aplica - esto lo hace el controlador:
        \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 712
        echo $this->env->getExtension('routing')->getPath("servicios_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_encuesta_servicio').empty().append('<option value=\"\">";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE SERVICIO --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las áreas:
               \$('select#bctic_camipalbundle_encuesta_servicio').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b + \" - \" + a + \" - \" + c );
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

         

        //El select de la lista de filtro:
        //Borro todos los valores de bctic_camipalbundle_encuesta_tipo_facade

        \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').remove();
        ";
        // line 742
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 1)) {
            // line 743
            echo "           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaElectrica\">Eléctrico</option>').val('EncuestaElectrica');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaLogistica\">Logística</option>').val('EncuestaLogistica');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaObrasCiviles\">Obras civiles</option>').val('EncuestaObrasCiviles');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaTelecomunicaciones\">Telecomunicaciones</option>').val('EncuestaTelecomunicaciones');
        ";
        }
        // line 748
        echo "
        //COLOMBIA
        ";
        // line 750
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 2)) {
            // line 751
            echo "           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaColombiaGeneral\">IPAL Colombia</option>').val('EncuestaColombiaGeneral');
        ";
        }
        // line 753
        echo "
        //PERU
        ";
        // line 755
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 3)) {
            // line 756
            echo "           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaElectrica\">Eléctrico</option>').val('EncuestaElectrica');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaLogistica\">Logística</option>').val('EncuestaLogistica');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaObrasCiviles\">Obras civiles</option>').val('EncuestaObrasCiviles');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaTelecomunicaciones\">Telecomunicaciones</option>').val('EncuestaTelecomunicaciones');
        ";
        }
        // line 761
        echo "
        //BRAZIL
        ";
        // line 763
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 4)) {
            // line 764
            echo "           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaBrazilGeneral\">IPAL General</option>').val('EncuestaBrazilGeneral');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaBrazilInterno\">IPAL Interno</option>').val('EncuestaBrazilInterno');
        ";
        }
        // line 766
        echo "    

        //COASIN
        ";
        // line 769
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 5)) {
            // line 770
            echo "           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaElectrica\">Eléctrico</option>').val('EncuestaElectrica');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaLogistica\">Logística</option>').val('EncuestaLogistica');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaObrasCiviles\">Obras civiles</option>').val('EncuestaObrasCiviles');
           \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"EncuestaTelecomunicaciones\">Telecomunicaciones</option>').val('EncuestaTelecomunicaciones');
        ";
        }
        // line 774
        echo "     


        \$('#bctic_camipalbundle_encuesta_tipo_facade').find('option').end().append('<option value=\"\">- TODOS LOS TIPOS -</option>').val('');

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
        return array (  1176 => 774,  1169 => 770,  1167 => 769,  1162 => 766,  1157 => 764,  1151 => 761,  1142 => 755,  1138 => 753,  1132 => 750,  1121 => 743,  1119 => 742,  1083 => 712,  1064 => 696,  1040 => 678,  1016 => 660,  1011 => 658,  992 => 642,  944 => 606,  927 => 597,  881 => 560,  859 => 544,  825 => 518,  821 => 516,  701 => 427,  681 => 413,  574 => 318,  557 => 307,  512 => 268,  506 => 265,  500 => 262,  466 => 234,  417 => 203,  397 => 198,  370 => 174,  364 => 171,  346 => 162,  165 => 73,  53 => 12,  297 => 205,  295 => 172,  137 => 69,  899 => 575,  892 => 474,  863 => 457,  854 => 454,  717 => 380,  699 => 371,  679 => 360,  672 => 356,  654 => 347,  634 => 336,  598 => 315,  589 => 312,  578 => 304,  569 => 301,  562 => 297,  533 => 280,  497 => 262,  885 => 470,  880 => 468,  876 => 467,  860 => 457,  855 => 455,  851 => 454,  835 => 526,  815 => 433,  810 => 431,  795 => 422,  790 => 489,  786 => 419,  779 => 415,  770 => 475,  765 => 407,  750 => 398,  745 => 396,  741 => 455,  730 => 387,  721 => 441,  705 => 374,  700 => 372,  696 => 371,  685 => 363,  676 => 360,  660 => 350,  655 => 348,  651 => 347,  640 => 339,  631 => 336,  615 => 326,  606 => 323,  595 => 315,  590 => 313,  586 => 312,  575 => 304,  570 => 317,  566 => 301,  555 => 293,  550 => 291,  546 => 290,  535 => 282,  530 => 280,  526 => 279,  501 => 266,  445 => 234,  436 => 231,  425 => 205,  420 => 221,  416 => 220,  405 => 200,  400 => 210,  396 => 209,  380 => 199,  336 => 176,  325 => 168,  316 => 165,  300 => 155,  175 => 92,  170 => 67,  155 => 76,  948 => 503,  939 => 604,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 756,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 590,  1093 => 582,  1088 => 714,  1077 => 575,  1068 => 569,  1063 => 567,  1059 => 694,  1048 => 558,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 545,  1012 => 540,  994 => 531,  978 => 521,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 473,  868 => 462,  857 => 457,  848 => 451,  843 => 449,  839 => 448,  823 => 438,  819 => 515,  812 => 433,  794 => 424,  783 => 416,  774 => 413,  767 => 409,  758 => 403,  749 => 460,  738 => 392,  729 => 446,  709 => 432,  689 => 418,  682 => 363,  644 => 343,  617 => 328,  415 => 176,  385 => 201,  369 => 156,  332 => 140,  330 => 139,  321 => 135,  287 => 120,  266 => 111,  259 => 108,  257 => 107,  253 => 105,  239 => 157,  226 => 93,  185 => 74,  178 => 75,  113 => 42,  968 => 624,  963 => 622,  959 => 514,  952 => 510,  943 => 501,  938 => 499,  934 => 501,  903 => 479,  894 => 479,  883 => 468,  874 => 556,  838 => 444,  829 => 441,  818 => 433,  809 => 430,  798 => 422,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 407,  753 => 398,  733 => 387,  728 => 385,  724 => 384,  713 => 379,  708 => 374,  704 => 376,  693 => 368,  688 => 363,  684 => 365,  668 => 355,  663 => 350,  659 => 352,  643 => 339,  639 => 341,  628 => 333,  623 => 331,  619 => 330,  608 => 322,  603 => 320,  599 => 319,  583 => 309,  579 => 308,  563 => 298,  559 => 297,  552 => 293,  543 => 287,  538 => 285,  518 => 274,  514 => 273,  494 => 262,  478 => 252,  458 => 241,  454 => 240,  434 => 229,  418 => 219,  414 => 218,  394 => 167,  354 => 185,  334 => 156,  261 => 131,  192 => 95,  923 => 490,  918 => 488,  914 => 587,  907 => 483,  898 => 477,  889 => 474,  878 => 466,  873 => 464,  853 => 453,  842 => 448,  833 => 442,  828 => 440,  824 => 439,  813 => 431,  804 => 428,  793 => 420,  788 => 418,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 396,  743 => 394,  739 => 393,  714 => 380,  703 => 372,  698 => 370,  694 => 369,  687 => 365,  678 => 359,  673 => 357,  653 => 346,  649 => 345,  633 => 335,  613 => 324,  609 => 323,  602 => 319,  593 => 313,  588 => 329,  584 => 310,  564 => 299,  548 => 289,  544 => 288,  528 => 278,  523 => 276,  503 => 265,  499 => 264,  488 => 256,  483 => 254,  463 => 243,  448 => 234,  443 => 232,  439 => 231,  428 => 223,  399 => 209,  383 => 199,  348 => 179,  343 => 177,  339 => 176,  328 => 153,  319 => 165,  299 => 154,  274 => 157,  234 => 119,  223 => 111,  198 => 98,  172 => 74,  152 => 69,  281 => 116,  276 => 114,  272 => 112,  267 => 105,  249 => 102,  231 => 94,  218 => 117,  215 => 84,  213 => 115,  200 => 105,  197 => 80,  195 => 79,  188 => 75,  167 => 66,  366 => 221,  333 => 197,  324 => 191,  317 => 187,  302 => 172,  292 => 150,  286 => 168,  271 => 113,  244 => 101,  190 => 98,  70 => 26,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 763,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 751,  1131 => 309,  1128 => 748,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 299,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 283,  1070 => 282,  1067 => 281,  1065 => 280,  1062 => 279,  1054 => 275,  1051 => 274,  1049 => 273,  1046 => 272,  1038 => 268,  1035 => 676,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 544,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 532,  990 => 247,  987 => 640,  985 => 245,  982 => 244,  974 => 240,  971 => 239,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 226,  940 => 225,  937 => 224,  929 => 496,  926 => 219,  924 => 218,  922 => 492,  919 => 216,  910 => 209,  902 => 208,  896 => 206,  893 => 475,  887 => 203,  884 => 472,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 190,  865 => 189,  864 => 461,  858 => 455,  852 => 184,  849 => 452,  847 => 450,  844 => 532,  834 => 174,  830 => 442,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 430,  803 => 427,  787 => 161,  785 => 160,  782 => 484,  766 => 155,  764 => 406,  761 => 469,  744 => 395,  732 => 389,  725 => 385,  723 => 383,  718 => 381,  715 => 141,  697 => 140,  695 => 139,  692 => 138,  683 => 361,  680 => 361,  677 => 361,  671 => 129,  669 => 404,  664 => 354,  661 => 399,  658 => 348,  648 => 344,  646 => 122,  638 => 337,  635 => 337,  632 => 119,  629 => 334,  627 => 332,  624 => 332,  618 => 326,  610 => 324,  605 => 109,  601 => 108,  596 => 107,  594 => 106,  591 => 105,  582 => 100,  576 => 98,  573 => 302,  571 => 96,  568 => 300,  558 => 91,  556 => 90,  553 => 291,  545 => 85,  542 => 84,  539 => 286,  536 => 82,  534 => 284,  531 => 80,  524 => 277,  513 => 269,  510 => 269,  508 => 266,  505 => 267,  489 => 66,  486 => 65,  484 => 64,  481 => 255,  476 => 60,  470 => 247,  465 => 245,  456 => 53,  452 => 52,  449 => 51,  441 => 49,  438 => 230,  422 => 179,  419 => 220,  410 => 37,  406 => 172,  403 => 210,  395 => 33,  389 => 31,  378 => 160,  376 => 198,  372 => 222,  363 => 188,  359 => 187,  356 => 187,  347 => 16,  344 => 15,  338 => 175,  329 => 8,  323 => 166,  318 => 164,  311 => 493,  308 => 157,  306 => 477,  303 => 155,  301 => 457,  296 => 154,  293 => 448,  290 => 446,  288 => 168,  280 => 144,  275 => 115,  265 => 152,  260 => 107,  250 => 104,  232 => 117,  222 => 118,  211 => 82,  206 => 83,  194 => 97,  181 => 87,  174 => 87,  161 => 76,  146 => 56,  126 => 61,  114 => 55,  104 => 38,  76 => 29,  262 => 109,  255 => 97,  242 => 99,  237 => 130,  233 => 95,  191 => 77,  150 => 68,  127 => 48,  124 => 53,  118 => 50,  100 => 41,  81 => 46,  58 => 14,  537 => 284,  532 => 155,  527 => 139,  519 => 271,  516 => 16,  507 => 10,  504 => 266,  498 => 263,  492 => 257,  490 => 258,  485 => 256,  479 => 253,  477 => 174,  473 => 173,  468 => 245,  464 => 170,  459 => 242,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 180,  421 => 204,  412 => 151,  408 => 212,  404 => 171,  401 => 199,  392 => 32,  388 => 201,  367 => 155,  358 => 168,  352 => 165,  345 => 179,  342 => 123,  340 => 159,  335 => 119,  326 => 115,  320 => 166,  315 => 3,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 116,  270 => 106,  263 => 133,  256 => 132,  251 => 103,  248 => 103,  245 => 135,  236 => 88,  225 => 82,  216 => 107,  212 => 106,  205 => 84,  186 => 97,  184 => 76,  180 => 89,  160 => 71,  153 => 75,  134 => 64,  129 => 62,  97 => 36,  90 => 36,  77 => 20,  34 => 4,  84 => 37,  65 => 19,  480 => 162,  474 => 251,  469 => 158,  461 => 244,  457 => 228,  453 => 151,  444 => 50,  440 => 214,  437 => 162,  435 => 212,  430 => 44,  427 => 143,  423 => 221,  413 => 202,  409 => 201,  407 => 131,  402 => 130,  398 => 168,  393 => 126,  387 => 164,  384 => 28,  381 => 140,  379 => 198,  374 => 196,  368 => 190,  365 => 190,  362 => 110,  360 => 188,  355 => 106,  341 => 144,  337 => 103,  322 => 101,  314 => 132,  312 => 131,  309 => 141,  305 => 173,  298 => 153,  294 => 123,  285 => 146,  283 => 144,  278 => 142,  268 => 153,  264 => 84,  258 => 131,  252 => 96,  247 => 372,  241 => 120,  229 => 117,  220 => 111,  214 => 108,  177 => 70,  169 => 67,  140 => 65,  132 => 62,  128 => 63,  107 => 51,  61 => 20,  273 => 411,  269 => 111,  254 => 130,  243 => 89,  240 => 98,  238 => 120,  235 => 97,  230 => 87,  227 => 92,  224 => 86,  221 => 109,  219 => 322,  217 => 85,  208 => 85,  204 => 81,  179 => 93,  159 => 83,  143 => 40,  135 => 53,  119 => 61,  102 => 35,  71 => 30,  67 => 27,  63 => 25,  59 => 19,  38 => 9,  94 => 38,  89 => 63,  85 => 30,  75 => 17,  68 => 16,  56 => 13,  87 => 27,  21 => 2,  26 => 4,  93 => 43,  88 => 35,  78 => 34,  46 => 14,  27 => 8,  44 => 9,  31 => 3,  28 => 5,  201 => 98,  196 => 96,  183 => 93,  171 => 67,  166 => 86,  163 => 72,  158 => 62,  156 => 74,  151 => 77,  142 => 62,  138 => 65,  136 => 59,  121 => 62,  117 => 44,  105 => 49,  91 => 39,  62 => 24,  49 => 14,  24 => 3,  25 => 7,  19 => 1,  79 => 28,  72 => 31,  69 => 20,  47 => 16,  40 => 11,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 74,  139 => 67,  131 => 66,  123 => 47,  120 => 58,  115 => 43,  111 => 50,  108 => 45,  101 => 48,  98 => 35,  96 => 39,  83 => 25,  74 => 13,  66 => 15,  55 => 11,  52 => 17,  50 => 10,  43 => 6,  41 => 11,  35 => 4,  32 => 3,  29 => 4,  209 => 84,  203 => 100,  199 => 81,  193 => 73,  189 => 265,  187 => 75,  182 => 72,  176 => 85,  173 => 68,  168 => 66,  164 => 64,  162 => 57,  154 => 60,  149 => 58,  147 => 67,  144 => 63,  141 => 65,  133 => 65,  130 => 56,  125 => 58,  122 => 60,  116 => 57,  112 => 57,  109 => 40,  106 => 44,  103 => 38,  99 => 46,  95 => 35,  92 => 42,  86 => 39,  82 => 32,  80 => 19,  73 => 21,  64 => 23,  60 => 21,  57 => 22,  54 => 13,  51 => 19,  48 => 7,  45 => 12,  42 => 13,  39 => 7,  36 => 10,  33 => 4,  30 => 7,);
    }
}
