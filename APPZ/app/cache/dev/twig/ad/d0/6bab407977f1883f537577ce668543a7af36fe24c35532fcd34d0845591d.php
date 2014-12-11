<?php

/* BcTicCamIpalBundle::results.html.twig */
class __TwigTemplate_add06bab407977f1883f537577ce668543a7af36fe24c35532fcd34d0845591d extends Twig_Template
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
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) > 0)) {
            // line 2
            echo "    <table class=\"records_list table table-striped\">
        <thead>
            <tr>
              ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 6
                echo "                <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                echo " </th>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "                <th class=\"actions\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Opciones"), "html", null, true);
            echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 13
                echo "            <tr>
               ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 15
                    echo "                <td>";
                    $context["obj"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")));
                    // line 16
                    echo "                  ";
                    $context["collection"] = false;
                    // line 17
                    echo "                  ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 18
                        echo "                    ";
                        echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
                        echo "
                    ";
                        // line 19
                        $context["collection"] = true;
                        // line 20
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "                  ";
                    if (((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")) == false)) {
                        // line 22
                        echo "                    ";
                        if (twig_test_iterable((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")))) {
                            // line 23
                            echo "                      <!-- DO NOTHING - EMPTY COLLECTION -->
                     ";
                        } else {
                            // line 25
                            echo "                       ";
                            echo twig_escape_filter($this->env, (isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")), "html", null, true);
                            echo "
                     ";
                        }
                        // line 27
                        echo "                  ";
                    }
                    // line 28
                    echo "                </td>
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                <td>

                  <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path_key_edit"]) ? $context["path_key_edit"] : $this->getContext($context, "path_key_edit")), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">
                    <button type=\"button\" class=\"btn btn-default btn-xs\">
                      <span class=\"glyphicon glyphicon-pencil\"></span> ";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Editar"), "html", null, true);
                echo "
                    </button>
                  </a>
                  
                  <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path_key_delete"]) ? $context["path_key_delete"] : $this->getContext($context, "path_key_delete")), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "token" => $this->getAttribute((isset($context["csrf"]) ? $context["csrf"] : $this->getContext($context, "csrf")), "generateCsrfToken", array(0 => ("entity" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "method"))), "html", null, true);
                echo "\" class=\"confirm\">
                    <button type=\"button\" class=\"btn btn-default btn-xs\">
                      <span class=\"glyphicon glyphicon-trash\"></span> ";
                // line 40
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
            // line 47
            echo "        </tbody>
    </table>

    <div class=\"container\" style=\"text-align: center; width:50%;\">
    <ul class=\"pagination\">
      <li ";
            // line 52
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                echo "class=\"disabled\"";
            }
            echo "><a id=\"previous\" href=\"";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                echo "javascript:void();";
            } else {
                echo "javascript:void();";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anterior"), "html", null, true);
            echo "</a></li>
      <li class=\"active\"><a href=\"javascript:void()\">";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</a><li>
      <li ";
            // line 54
            if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) < 25)) {
                echo "class=\"disabled\"";
            }
            echo "><a id=\"next\" href=\"";
            if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) < 25)) {
                echo "javascript:void();";
            } else {
                echo "javascript:void();";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
            echo "</a></li>
    </ul>
    </div>

    ";
        } else {
            // line 59
            echo "      <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No se encontraron registros"), "html", null, true);
            echo ".</h4>
    ";
        }
        // line 61
        echo "
      <script type=\"text/javascript\">
        \$('a.confirm').bind('click', function () {
          return confirm(\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("¿Está seguro quiere borrar?"), "html", null, true);
        echo "\");
        });

        \$('#previous').bind('click', function (e) {
          \$('#results').load('";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["path_action_previous"]) ? $context["path_action_previous"] : $this->getContext($context, "path_action_previous")), "html", null, true);
        echo "');
        });

        \$('#next').bind('click', function (e) {
          \$('#results').load('";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["path_action_next"]) ? $context["path_action_next"] : $this->getContext($context, "path_action_next")), "html", null, true);
        echo "');
        });

      </script>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 72,  204 => 68,  197 => 64,  192 => 61,  186 => 59,  168 => 54,  164 => 53,  150 => 52,  143 => 47,  130 => 40,  125 => 38,  118 => 34,  113 => 32,  109 => 30,  102 => 28,  99 => 27,  93 => 25,  89 => 23,  86 => 22,  83 => 21,  77 => 20,  75 => 19,  70 => 18,  65 => 17,  62 => 16,  59 => 15,  55 => 14,  52 => 13,  48 => 12,  31 => 6,  27 => 5,  22 => 2,  19 => 1,  40 => 8,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,);
    }
}
