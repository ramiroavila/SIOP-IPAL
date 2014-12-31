<?php

/* BcTicCamIpalBundle::edit_encuesta.html.twig */
class __TwigTemplate_439dd0c54935efb2cd2148b9e1672daa3db07bc93b1cf0f004d97d5ec399ef43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    
    ";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div id=\"errors\"></div>
  
    <ul class=\"nav nav-tabs\">
      <li class=\"active hidden-xs\"><a class=\"hidden-xs\" href=\"#antecedentes\" data-toggle=\"tab\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Antecedentes generales"), "html", null, true);
        echo "</a></li>
      <li class=\"hidden-xs\"><a class=\"hidden-xs\" href=\"#ingreso\" data-toggle=\"tab\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Áreas/Actuaciones"), "html", null, true);
        echo "</a></li>
      <li class=\"hidden-xs\"><a class=\"hidden-xs\" href=\"#adjunto\" data-toggle=\"tab\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones/Adjuntos"), "html", null, true);
        echo "</a></li>
      <li class=\"active visible-xs\"><a class=\"visible-xs\" href=\"#antecedentes\" data-toggle=\"tab\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Antecedentes"), "html", null, true);
        echo "</a></li>
      <li class=\"visible-xs\"><a class=\"visible-xs\" href=\"#ingreso\" data-toggle=\"tab\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Áreas"), "html", null, true);
        echo "</a></li>
      <li class=\"visible-xs\"><a class=\"visible-xs\" href=\"#adjunto\" data-toggle=\"tab\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Obs."), "html", null, true);
        echo "</a></li>
    </ul>

  <div class=\"container\" style=\"width: 98%;\">
    <div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"antecedentes\">
          <br/>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresa"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrato"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area"), 'row');
        echo "
          </div>
        </div>
        
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividad"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "servicio"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugarDeTrabajo"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerencia"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numDeEmpleados"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subGerencia"), 'row');
        echo "
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cttaSubcont"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mandante"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "inspector"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "supervisor_facade"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            <div>
              ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prevencionista"), 'row');
        echo "
            </div>
          </div>
        </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <div class=\"col-sm-offset-3 col-sm-9\">
                  <button class=\"btn btn-default btn-xs hidden-xs\" type=\"button\" id=\"bctic_camipalbundle_encuesta_next_1\" name=\"bctic_camipalbundle_encuesta_next_1\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                  <button class=\"btn btn-default btn-xs visible-xs\" type=\"button\" id=\"bctic_camipalbundle_encuesta_next_1_1\" name=\"bctic_camipalbundle_encuesta_next_1\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                </div>
              </div>
            </div>
            <div class=\"col-sm-6\">
            </div>
          </div>

         
      </div>

      <div class=\"tab-pane survey\" id=\"ingreso\">

          <br/>
          
          ";
        // line 130
        $template = $this->env->resolveTemplate((((("BcTicCamIpalBundle::edit_encuesta_" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) . "_format.") . (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format"))) . ".twig"));
        $template->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 131
        echo "          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <div class=\"col-sm-offset-3 col-sm-9\">
                  <button class=\"btn btn-default btn-xs hidden-xs\" type=\"button\" id=\"bctic_camipalbundle_encuesta_next_2\" name=\"bctic_camipalbundle_encuesta_next_2\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                  <button class=\"btn btn-default btn-xs visible-xs\" type=\"button\" id=\"bctic_camipalbundle_encuesta_next_2_2\" name=\"bctic_camipalbundle_encuesta_next_2\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                </div>
              </div>
            </div>
            <div class=\"col-sm-6\">
            </div>
          </div>
          
      </div>
        
      <div class=\"tab-pane\" id=\"adjunto\">
        <br/>
        <div class=\"row\">
          <div class=\"col-sm-6\">
              ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
              ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFile1"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
              ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFile2"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
              ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFile3"), 'row');
        echo "
            </div>
        </div>

        <hr class=\"cierre\"/>
        <div class=\"row cierre\">
            <div class=\"col-sm-6\">
              ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cierre"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
              ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFileCierre1"), 'row');
        echo "
            </div>
        </div>

        <div class=\"row cierre\">
            <div class=\"col-sm-6\">
              <div class=\"form-group \"><label class=\"col-sm-3 control-label\" for=\"bctic_camipalbundle_encuesta_cierre\"></label><div class=\"col-sm-9\"><p><i>";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("* EN CASO DE INCUMPLIMIENTOS: Solamente los usuarios administradores pueden cambiar el estado de \"Cierre\". Para que el usuario adminstrador valide una encuesta ABIERTA debe usted ingresar al menos el texto de cierre y una fotografía, con lo cual el estado será \"POR VALIDAR\" hasta que el administrador CIERRE la Encuesta."), "html", null, true);
        echo "</i></p></div></div>
              
            </div>
            <div class=\"col-sm-6\">
              ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFileCierre2"), 'row');
        echo "
            </div>
        </div>

        <div class=\"row status_cierre\">
            <div class=\"col-sm-6\">
              ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status_cierre"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
              
            </div>
        </div>        

        <div class=\"row\">
            <div class=\"col-sm-6\">
              ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
              
            </div>
        </div>
      </div>
    </div>
  </div>  

    ";
        // line 216
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <hr/>


    ";
        // line 221
        $this->displayBlock('js', $context, $blocks);
    }

    public function block_js($context, array $blocks = array())
    {
        // line 222
        echo "      <script type=\"text/javascript\"> 
      
        \$('#bctic_camipalbundle_encuesta_next_1').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#ingreso\"]').tab('show') // Select tab by name
        });

        \$('#bctic_camipalbundle_encuesta_next_2').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#adjunto\"]').tab('show') // Select tab by name
        });

         \$('#bctic_camipalbundle_encuesta_next_1_1').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#ingreso\"]').tab('show') // Select tab by name
        });

        \$('#bctic_camipalbundle_encuesta_next_2_1').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#adjunto\"]').tab('show') // Select tab by name
        });

      </script>
    ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::edit_encuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 222,  366 => 221,  358 => 216,  345 => 206,  333 => 197,  324 => 191,  317 => 187,  308 => 181,  302 => 178,  292 => 171,  286 => 168,  277 => 162,  271 => 159,  252 => 143,  244 => 138,  235 => 131,  232 => 130,  212 => 113,  204 => 108,  190 => 97,  183 => 93,  174 => 87,  168 => 84,  159 => 78,  153 => 75,  145 => 70,  139 => 67,  130 => 61,  124 => 58,  115 => 52,  109 => 49,  100 => 43,  94 => 40,  85 => 34,  79 => 31,  70 => 25,  64 => 22,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  23 => 2,  20 => 1,);
    }
}
