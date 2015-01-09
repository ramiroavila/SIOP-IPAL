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
        return array (  262 => 88,  255 => 85,  252 => 84,  242 => 77,  237 => 75,  233 => 73,  227 => 71,  209 => 66,  205 => 65,  191 => 64,  184 => 59,  171 => 52,  166 => 50,  159 => 46,  154 => 44,  150 => 42,  143 => 40,  140 => 39,  134 => 37,  130 => 35,  127 => 34,  124 => 33,  118 => 32,  116 => 31,  111 => 30,  106 => 29,  103 => 28,  100 => 27,  96 => 26,  93 => 25,  89 => 24,  81 => 20,  72 => 18,  68 => 17,  63 => 14,  61 => 13,  58 => 11,  50 => 7,  42 => 6,  33 => 4,  36 => 5,  34 => 8,  32 => 7,  30 => 3,  28 => 5,  26 => 4,  24 => 3,);
    }
}
