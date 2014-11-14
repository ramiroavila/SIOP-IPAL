<?php

/* BcTicCamIpalBundle::new.html.twig */
class __TwigTemplate_d514a182f03b1991c0418c12c5746a473a96fb2b9b5e4d3aed0ae4d823af82e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumb_list' => array($this, 'block_breadcrumb_list'),
            'body' => array($this, 'block_body'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mantenedor"), "html", null, true);
        echo "</li>
  <li>";
        // line 7
        $this->displayBlock('breadcrumb_list', $context, $blocks);
        echo "</li>
  <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 7
    public function block_breadcrumb_list($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " </h3>

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <p class=\"text-left\">
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["back_path"]) ? $context["back_path"] : $this->getContext($context, "back_path")), "html", null, true);
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

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 88,  255 => 85,  242 => 77,  237 => 75,  233 => 73,  191 => 64,  150 => 42,  127 => 34,  124 => 33,  118 => 32,  100 => 27,  81 => 20,  58 => 11,  537 => 179,  532 => 155,  527 => 139,  519 => 17,  516 => 16,  507 => 10,  504 => 9,  498 => 8,  492 => 180,  490 => 179,  485 => 176,  479 => 175,  477 => 174,  473 => 173,  468 => 171,  464 => 170,  459 => 168,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 155,  421 => 154,  412 => 151,  408 => 149,  404 => 148,  401 => 147,  392 => 144,  388 => 142,  367 => 131,  358 => 127,  352 => 126,  345 => 124,  342 => 123,  340 => 122,  335 => 119,  326 => 115,  320 => 114,  315 => 112,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 99,  270 => 97,  263 => 95,  256 => 93,  251 => 91,  248 => 90,  245 => 89,  236 => 85,  225 => 82,  216 => 78,  212 => 76,  205 => 65,  186 => 72,  184 => 59,  180 => 69,  160 => 64,  153 => 63,  134 => 37,  129 => 58,  97 => 50,  90 => 49,  77 => 43,  34 => 8,  84 => 20,  65 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 162,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 141,  381 => 140,  379 => 139,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 111,  309 => 97,  305 => 95,  298 => 105,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 84,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 39,  132 => 59,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 84,  227 => 71,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 46,  143 => 40,  135 => 53,  119 => 55,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  38 => 9,  94 => 28,  89 => 24,  85 => 25,  75 => 17,  68 => 17,  56 => 30,  87 => 25,  21 => 2,  26 => 4,  93 => 25,  88 => 48,  78 => 21,  46 => 7,  27 => 8,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 52,  166 => 50,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 40,  91 => 27,  62 => 12,  49 => 19,  24 => 3,  25 => 7,  19 => 1,  79 => 18,  72 => 18,  69 => 25,  47 => 9,  40 => 16,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 30,  108 => 36,  101 => 32,  98 => 31,  96 => 26,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 8,  43 => 22,  41 => 7,  35 => 4,  32 => 3,  29 => 3,  209 => 66,  203 => 78,  199 => 74,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 66,  162 => 57,  154 => 44,  149 => 51,  147 => 62,  144 => 49,  141 => 61,  133 => 55,  130 => 35,  125 => 44,  122 => 43,  116 => 31,  112 => 42,  109 => 52,  106 => 29,  103 => 28,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 45,  80 => 19,  73 => 15,  64 => 17,  60 => 6,  57 => 7,  54 => 29,  51 => 14,  48 => 13,  45 => 17,  42 => 6,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}