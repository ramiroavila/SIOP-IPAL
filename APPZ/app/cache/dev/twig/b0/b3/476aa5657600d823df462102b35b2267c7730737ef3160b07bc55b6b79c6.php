<?php

/* BcTicCamIpalBundle::edit_encuesta_row_data_format.html.twig */
class __TwigTemplate_b0b3476aa5657600d823df462102b35b2267c7730737ef3160b07bc55b6b79c6 extends Twig_Template
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
        echo "          <div class=\"col-sm-6 alert ";
        echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
        echo " \">
            <div class=\"form-group\">
              ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), 'label', array("label_attr" => array("class" => "col-sm-9 control-label text-left")));
        echo "
              ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), 'errors');
        echo "
              <div class=\"col-sm-3\">
               ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), 'widget');
        echo "
              </div>
            </div>
          </div>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::edit_encuesta_row_data_format.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  278 => 115,  276 => 114,  272 => 112,  269 => 111,  267 => 110,  263 => 108,  260 => 107,  258 => 106,  254 => 104,  251 => 103,  249 => 102,  245 => 100,  242 => 99,  240 => 98,  236 => 96,  233 => 95,  231 => 94,  224 => 91,  218 => 88,  215 => 87,  213 => 86,  209 => 84,  206 => 83,  200 => 80,  195 => 78,  191 => 76,  188 => 75,  186 => 74,  182 => 72,  179 => 71,  177 => 70,  173 => 68,  171 => 67,  167 => 66,  163 => 64,  160 => 63,  158 => 62,  154 => 60,  151 => 59,  149 => 58,  142 => 55,  140 => 54,  136 => 52,  133 => 51,  131 => 50,  127 => 48,  122 => 46,  118 => 44,  116 => 43,  112 => 42,  105 => 39,  103 => 38,  99 => 36,  96 => 35,  90 => 32,  87 => 31,  76 => 26,  72 => 24,  69 => 23,  60 => 19,  58 => 18,  54 => 16,  45 => 12,  42 => 11,  40 => 10,  36 => 8,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  360 => 213,  354 => 212,  346 => 207,  333 => 197,  324 => 191,  317 => 187,  308 => 181,  302 => 178,  292 => 171,  286 => 168,  277 => 162,  271 => 159,  252 => 143,  244 => 138,  235 => 131,  232 => 130,  204 => 82,  190 => 97,  183 => 93,  174 => 87,  159 => 78,  153 => 75,  145 => 56,  139 => 67,  130 => 61,  124 => 47,  115 => 52,  109 => 49,  100 => 43,  94 => 34,  85 => 30,  79 => 31,  70 => 25,  64 => 22,  51 => 15,  47 => 11,  39 => 9,  35 => 8,  23 => 2,  20 => 1,  369 => 253,  364 => 251,  344 => 234,  339 => 232,  309 => 205,  287 => 186,  281 => 116,  246 => 151,  227 => 92,  222 => 90,  212 => 113,  205 => 124,  197 => 79,  168 => 84,  126 => 54,  108 => 39,  102 => 37,  91 => 30,  88 => 29,  78 => 27,  73 => 19,  67 => 22,  65 => 14,  59 => 12,  56 => 11,  49 => 14,  43 => 10,  37 => 5,  34 => 6,  31 => 6,);
    }
}
