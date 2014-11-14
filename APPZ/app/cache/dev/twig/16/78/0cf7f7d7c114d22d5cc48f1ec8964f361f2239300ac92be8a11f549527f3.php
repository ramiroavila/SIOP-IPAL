<?php

/* BcTicCamIpalBundle::index.html.twig */
class __TwigTemplate_16780cf7f7d7c114d22d5cc48f1ec8964f361f2239300ac92be8a11f549527f3 extends Twig_Template
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
  ";
        // line 6
        if (array_key_exists("empty_path", $context)) {
            echo " ";
        } else {
            echo " <li class=\"active\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mantenedor"), "html", null, true);
            echo "</li> ";
        }
        // line 7
        echo "  <li class=\"active\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 13
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) > 0)) {
            // line 14
            echo "    <table class=\"records_list table table-striped\">
        <thead>
            <tr>
              ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 18
                echo "                <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                echo " </th>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                <th class=\"actions\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Opciones"), "html", null, true);
            echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 25
                echo "            <tr>
               ";
                // line 26
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 27
                    echo "                <td>";
                    $context["obj"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")));
                    // line 28
                    echo "                  ";
                    $context["collection"] = false;
                    // line 29
                    echo "                  ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 30
                        echo "                    ";
                        echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
                        echo "
                    ";
                        // line 31
                        $context["collection"] = true;
                        // line 32
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                  ";
                    if (((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")) == false)) {
                        // line 34
                        echo "                    ";
                        if (twig_test_iterable((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")))) {
                            // line 35
                            echo "                      <!-- DO NOTHING - EMPTY COLLECTION -->
                     ";
                        } else {
                            // line 37
                            echo "                       ";
                            echo twig_escape_filter($this->env, (isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")), "html", null, true);
                            echo "
                     ";
                        }
                        // line 39
                        echo "                  ";
                    }
                    // line 40
                    echo "                </td>
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                <td>

                  <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path_key_edit"]) ? $context["path_key_edit"] : $this->getContext($context, "path_key_edit")), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">
                    <button type=\"button\" class=\"btn btn-default btn-xs\">
                      <span class=\"glyphicon glyphicon-pencil\"></span> ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Editar"), "html", null, true);
                echo "
                    </button>
                  </a>
                  
                  <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path_key_delete"]) ? $context["path_key_delete"] : $this->getContext($context, "path_key_delete")), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "token" => $this->getAttribute((isset($context["csrf"]) ? $context["csrf"] : $this->getContext($context, "csrf")), "generateCsrfToken", array(0 => ("entity" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "method"))), "html", null, true);
                echo "\" class=\"confirm\">
                    <button type=\"button\" class=\"btn btn-default btn-xs\">
                      <span class=\"glyphicon glyphicon-trash\"></span> ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Borrar"), "html", null, true);
                echo "
                    </button>
                  </a>

                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </tbody>
    </table>

    <div class=\"container\" style=\"text-align: center; width:50%;\">
    <ul class=\"pagination\">
      <li ";
            // line 64
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                echo "class=\"disabled\"";
            }
            echo "><a href=\"";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                echo "javascript:void();";
            } else {
                echo twig_escape_filter($this->env, (isset($context["path_previous"]) ? $context["path_previous"] : $this->getContext($context, "path_previous")), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anterior"), "html", null, true);
            echo "</a></li>
      <li class=\"active\"><a href=\"javascript:void()\">";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</a><li>
      <li ";
            // line 66
            if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) < 25)) {
                echo "class=\"disabled\"";
            }
            echo "><a href=\"";
            if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) < 25)) {
                echo "javascript:void();";
            } else {
                echo twig_escape_filter($this->env, (isset($context["path_next"]) ? $context["path_next"] : $this->getContext($context, "path_next")), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
            echo "</a></li>
    </ul>
    </div>

    ";
        } else {
            // line 71
            echo "      <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No se encontraron registros"), "html", null, true);
            echo ".</h4>
    ";
        }
        // line 73
        echo "
    <p class=\"text-left\">
    <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["path_new"]) ? $context["path_new"] : $this->getContext($context, "path_new")), "html", null, true);
        echo "\">
                    <button type=\"button\" class=\"btn btn-default btn-xs\">
                      <span class=\"glyphicon glyphicon-plus\"></span> ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar"), "html", null, true);
        echo "
                    </button>
    </a>
    </p>   

    ";
    }

    // line 84
    public function block_js($context, array $blocks = array())
    {
        // line 85
        echo "      ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
      <script type=\"text/javascript\">
        \$('a.confirm').bind('click', function () {
          return confirm(\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("¿Está seguro quiere borrar?"), "html", null, true);
        echo "\");
        });
      </script>
    ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 88,  255 => 85,  242 => 77,  237 => 75,  233 => 73,  191 => 64,  150 => 42,  127 => 34,  124 => 33,  118 => 32,  100 => 27,  81 => 20,  58 => 11,  537 => 179,  532 => 155,  527 => 139,  519 => 17,  516 => 16,  507 => 10,  504 => 9,  498 => 8,  492 => 180,  490 => 179,  485 => 176,  479 => 175,  477 => 174,  473 => 173,  468 => 171,  464 => 170,  459 => 168,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 155,  421 => 154,  412 => 151,  408 => 149,  404 => 148,  401 => 147,  392 => 144,  388 => 142,  367 => 131,  358 => 127,  352 => 126,  345 => 124,  342 => 123,  340 => 122,  335 => 119,  326 => 115,  320 => 114,  315 => 112,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 99,  270 => 97,  263 => 95,  256 => 93,  251 => 91,  248 => 90,  245 => 89,  236 => 85,  225 => 82,  216 => 78,  212 => 76,  205 => 65,  186 => 72,  184 => 59,  180 => 69,  160 => 64,  153 => 63,  134 => 37,  129 => 58,  97 => 50,  90 => 49,  77 => 43,  34 => 8,  84 => 20,  65 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 162,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 141,  381 => 140,  379 => 139,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 111,  309 => 97,  305 => 95,  298 => 105,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 84,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 39,  132 => 59,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 84,  227 => 71,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 46,  143 => 40,  135 => 53,  119 => 55,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  38 => 9,  94 => 28,  89 => 24,  85 => 25,  75 => 17,  68 => 17,  56 => 30,  87 => 25,  21 => 2,  26 => 4,  93 => 25,  88 => 48,  78 => 21,  46 => 7,  27 => 8,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 52,  166 => 50,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 40,  91 => 27,  62 => 12,  49 => 19,  24 => 3,  25 => 1,  19 => 1,  79 => 44,  72 => 18,  69 => 25,  47 => 9,  40 => 16,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 30,  108 => 36,  101 => 32,  98 => 31,  96 => 26,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 7,  43 => 22,  41 => 7,  35 => 4,  32 => 7,  29 => 3,  209 => 66,  203 => 78,  199 => 74,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 66,  162 => 57,  154 => 44,  149 => 51,  147 => 62,  144 => 49,  141 => 61,  133 => 55,  130 => 35,  125 => 44,  122 => 43,  116 => 31,  112 => 42,  109 => 52,  106 => 29,  103 => 28,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 45,  80 => 19,  73 => 15,  64 => 17,  60 => 6,  57 => 7,  54 => 29,  51 => 14,  48 => 13,  45 => 17,  42 => 6,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
