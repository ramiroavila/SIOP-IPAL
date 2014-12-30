<?php

/* BcTicCamIpalBundle:Area:index.html.twig */
class __TwigTemplate_a18a52d7890aa1ebf1d64181d027ddaef83577a489996bd2c3a0493ad76bd06c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BcTicCamIpalBundle::index.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "BcTicCamIpalBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = "Áreas";
        // line 4
        $context["data"] = array("nombre" => "Nombre", "pais" => "País", "visible" => "Visible");
        // line 5
        $context["path_previous"] = $this->env->getExtension('routing')->getPath("areas", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
        // line 6
        $context["path_next"] = $this->env->getExtension('routing')->getPath("areas", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1)));
        // line 7
        $context["path_new"] = $this->env->getExtension('routing')->getPath("areas_new");
        // line 8
        $context["path_key_edit"] = "areas_edit";
        // line 9
        $context["path_key_delete"] = "areas_delete";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Area:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 179,  532 => 155,  527 => 139,  519 => 17,  516 => 16,  507 => 10,  504 => 9,  498 => 8,  492 => 180,  490 => 179,  485 => 176,  479 => 175,  477 => 174,  473 => 173,  468 => 171,  464 => 170,  459 => 168,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 155,  421 => 154,  412 => 151,  408 => 149,  404 => 148,  401 => 147,  392 => 144,  388 => 142,  367 => 131,  358 => 127,  352 => 126,  345 => 124,  342 => 123,  340 => 122,  335 => 119,  326 => 115,  320 => 114,  315 => 112,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 99,  270 => 97,  263 => 95,  256 => 93,  251 => 91,  248 => 90,  245 => 89,  236 => 85,  225 => 82,  216 => 78,  212 => 76,  205 => 75,  186 => 72,  184 => 71,  180 => 69,  160 => 64,  153 => 63,  134 => 60,  129 => 58,  97 => 50,  90 => 49,  77 => 43,  34 => 8,  84 => 20,  65 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 162,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 141,  381 => 140,  379 => 139,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 111,  309 => 97,  305 => 95,  298 => 105,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 59,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 84,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 55,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 30,  87 => 25,  21 => 2,  26 => 4,  93 => 28,  88 => 48,  78 => 21,  46 => 7,  27 => 8,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 67,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 40,  91 => 27,  62 => 12,  49 => 19,  24 => 3,  25 => 1,  19 => 1,  79 => 44,  72 => 16,  69 => 25,  47 => 9,  40 => 16,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 8,  43 => 22,  41 => 7,  35 => 4,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 74,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 66,  162 => 57,  154 => 58,  149 => 51,  147 => 62,  144 => 49,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 54,  112 => 42,  109 => 52,  106 => 36,  103 => 51,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 45,  80 => 19,  73 => 15,  64 => 17,  60 => 6,  57 => 7,  54 => 29,  51 => 14,  48 => 13,  45 => 17,  42 => 6,  39 => 9,  36 => 9,  33 => 4,  30 => 6,);
    }
}
