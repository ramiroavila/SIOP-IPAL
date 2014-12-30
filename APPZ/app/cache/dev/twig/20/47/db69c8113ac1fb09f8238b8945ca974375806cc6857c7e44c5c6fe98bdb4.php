<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_2047db69c8113ac1fb09f8238b8945ca974375806cc6857c7e44c5c6fe98bdb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams")) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 45
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"))) {
            // line 46
            echo "        ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "priorities"));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (((!(isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority"))) && ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) > 100))) {
                // line 70
                echo "                                ";
                $context["priority"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "name"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "count"), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
            // line 75
            echo "                            ";
            if ((!(isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            echo ((("-100" == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs")) {
            // line 90
            echo "        <ul class=\"alt\">
            ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) >= 0) && ($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) || (((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) < 0) && ((($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))))) {
                    // line 92
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                        echo " warning";
                    }
                    if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "scream", array(), "any", true, true)) {
                        echo " scream";
                    }
                    echo "\">
                    ";
                    // line 93
                    echo $context["logger"]->getdisplay_message($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), (isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 96
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </ul>
    ";
        } else {
            // line 100
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 107
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 109
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 110
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : $this->getContext($context, "log_index")));
                // line 111
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 113
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) > 1)) {
                        // line 116
                        echo "            ";
                        if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == 2)) {
                            // line 117
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 119
                        echo "            ";
                        if ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class", array(), "any", true, true)) {
                            // line 120
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function")));
                            // line 121
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function", array(), "any", true, true)) {
                            // line 122
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function"));
                            // line 123
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true)) {
                            // line 124
                            echo "                ";
                            $context["from"] = $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file");
                            // line 125
                            echo "            ";
                        } else {
                            // line 126
                            echo "                ";
                            $context["from"] = "-";
                            // line 127
                            echo "            ";
                        }
                        // line 128
                        echo "
            <li>Called from ";
                        // line 129
                        echo ((($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file"), $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "line"), (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) : ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 131
                        if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack")) - 1))) {
                            // line 132
                            echo "                </ul>
            ";
                        }
                        // line 134
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "    ";
            } else {
                // line 136
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 137
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"))))) {
                    // line 138
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 140
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 143
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1069 => 654,  1055 => 648,  1044 => 645,  1026 => 633,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  955 => 600,  947 => 597,  941 => 595,  935 => 592,  930 => 590,  911 => 581,  909 => 580,  870 => 560,  836 => 543,  807 => 528,  800 => 523,  796 => 521,  780 => 513,  754 => 499,  740 => 491,  737 => 490,  686 => 472,  642 => 449,  636 => 446,  622 => 442,  551 => 424,  429 => 188,  304 => 82,  442 => 180,  382 => 131,  572 => 239,  567 => 401,  327 => 220,  350 => 120,  475 => 206,  361 => 146,  472 => 203,  289 => 196,  110 => 41,  735 => 315,  707 => 302,  690 => 295,  665 => 285,  656 => 281,  647 => 278,  522 => 224,  353 => 121,  491 => 195,  462 => 202,  411 => 140,  331 => 138,  509 => 217,  386 => 164,  377 => 129,  747 => 232,  666 => 204,  549 => 170,  432 => 178,  351 => 141,  313 => 110,  691 => 214,  674 => 207,  641 => 192,  621 => 187,  614 => 185,  587 => 434,  581 => 177,  521 => 158,  515 => 157,  467 => 145,  349 => 106,  742 => 492,  736 => 231,  1161 => 340,  1145 => 334,  1139 => 333,  1125 => 329,  1118 => 327,  1098 => 322,  1089 => 319,  1081 => 316,  1075 => 315,  1052 => 307,  1032 => 302,  1025 => 300,  1005 => 295,  984 => 615,  965 => 285,  957 => 282,  951 => 281,  946 => 279,  928 => 274,  912 => 268,  905 => 579,  891 => 571,  872 => 258,  862 => 557,  792 => 234,  771 => 228,  752 => 224,  746 => 221,  722 => 212,  716 => 306,  702 => 479,  675 => 198,  626 => 443,  600 => 181,  592 => 254,  565 => 430,  540 => 218,  495 => 347,  487 => 210,  460 => 135,  447 => 181,  373 => 156,  210 => 77,  711 => 206,  645 => 188,  604 => 175,  577 => 168,  520 => 162,  471 => 329,  375 => 162,  371 => 127,  228 => 62,  202 => 85,  148 => 59,  720 => 218,  706 => 214,  667 => 203,  657 => 198,  637 => 193,  630 => 191,  616 => 440,  597 => 183,  560 => 172,  547 => 234,  517 => 159,  496 => 211,  450 => 191,  391 => 120,  279 => 77,  207 => 76,  282 => 186,  1176 => 774,  1169 => 770,  1167 => 769,  1162 => 766,  1157 => 764,  1151 => 761,  1142 => 755,  1138 => 753,  1132 => 750,  1121 => 743,  1119 => 742,  1083 => 712,  1064 => 651,  1040 => 678,  1016 => 660,  1011 => 296,  992 => 292,  944 => 606,  927 => 597,  881 => 560,  859 => 544,  825 => 242,  821 => 516,  701 => 214,  681 => 207,  574 => 431,  557 => 307,  512 => 210,  506 => 265,  500 => 349,  466 => 197,  417 => 143,  397 => 169,  370 => 157,  364 => 248,  346 => 149,  165 => 60,  53 => 12,  297 => 200,  295 => 80,  137 => 50,  899 => 265,  892 => 474,  863 => 457,  854 => 552,  717 => 207,  699 => 299,  679 => 207,  672 => 193,  654 => 200,  634 => 336,  598 => 315,  589 => 180,  578 => 432,  569 => 301,  562 => 173,  533 => 165,  497 => 262,  885 => 261,  880 => 566,  876 => 467,  860 => 457,  855 => 252,  851 => 454,  835 => 526,  815 => 531,  810 => 529,  795 => 422,  790 => 519,  786 => 419,  779 => 333,  770 => 507,  765 => 227,  750 => 398,  745 => 493,  741 => 231,  730 => 210,  721 => 441,  705 => 480,  700 => 213,  696 => 476,  685 => 363,  676 => 467,  660 => 203,  655 => 457,  651 => 279,  640 => 448,  631 => 182,  615 => 326,  606 => 179,  595 => 315,  590 => 313,  586 => 174,  575 => 174,  570 => 238,  566 => 301,  555 => 293,  550 => 161,  546 => 423,  535 => 282,  530 => 417,  526 => 231,  501 => 153,  445 => 186,  436 => 179,  425 => 251,  420 => 246,  416 => 177,  405 => 137,  400 => 161,  396 => 209,  380 => 160,  336 => 143,  325 => 129,  316 => 135,  300 => 121,  175 => 74,  170 => 102,  155 => 55,  948 => 503,  939 => 604,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 756,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 323,  1093 => 320,  1088 => 714,  1077 => 657,  1068 => 569,  1063 => 567,  1059 => 309,  1048 => 646,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 632,  1012 => 540,  994 => 531,  978 => 288,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 570,  868 => 462,  857 => 457,  848 => 548,  843 => 449,  839 => 246,  823 => 438,  819 => 241,  812 => 530,  794 => 424,  783 => 416,  774 => 509,  767 => 409,  758 => 225,  749 => 460,  738 => 218,  729 => 446,  709 => 217,  689 => 204,  682 => 470,  644 => 343,  617 => 328,  415 => 180,  385 => 161,  369 => 210,  332 => 131,  330 => 142,  321 => 92,  287 => 90,  266 => 113,  259 => 148,  257 => 73,  253 => 104,  239 => 83,  226 => 84,  185 => 75,  178 => 64,  113 => 48,  968 => 624,  963 => 604,  959 => 602,  952 => 510,  943 => 501,  938 => 499,  934 => 275,  903 => 479,  894 => 479,  883 => 468,  874 => 562,  838 => 544,  829 => 441,  818 => 433,  809 => 430,  798 => 235,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 504,  753 => 322,  733 => 226,  728 => 226,  724 => 484,  713 => 379,  708 => 208,  704 => 376,  693 => 211,  688 => 211,  684 => 365,  668 => 464,  663 => 350,  659 => 192,  643 => 194,  639 => 187,  628 => 444,  623 => 331,  619 => 265,  608 => 259,  603 => 439,  599 => 319,  583 => 179,  579 => 172,  563 => 429,  559 => 427,  552 => 165,  543 => 383,  538 => 285,  518 => 211,  514 => 415,  494 => 151,  478 => 206,  458 => 186,  454 => 185,  434 => 229,  418 => 290,  414 => 127,  394 => 168,  354 => 91,  334 => 132,  261 => 107,  192 => 61,  923 => 588,  918 => 269,  914 => 587,  907 => 483,  898 => 477,  889 => 474,  878 => 259,  873 => 464,  853 => 453,  842 => 448,  833 => 245,  828 => 538,  824 => 537,  813 => 431,  804 => 428,  793 => 420,  788 => 518,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 320,  743 => 394,  739 => 393,  714 => 217,  703 => 372,  698 => 477,  694 => 200,  687 => 210,  678 => 468,  673 => 288,  653 => 191,  649 => 345,  633 => 335,  613 => 181,  609 => 323,  602 => 258,  593 => 252,  588 => 329,  584 => 251,  564 => 241,  548 => 385,  544 => 288,  528 => 160,  523 => 212,  503 => 265,  499 => 209,  488 => 150,  483 => 211,  463 => 145,  448 => 234,  443 => 232,  439 => 195,  428 => 252,  399 => 123,  383 => 165,  348 => 140,  343 => 145,  339 => 133,  328 => 113,  319 => 215,  299 => 92,  274 => 96,  234 => 90,  223 => 93,  198 => 98,  172 => 68,  152 => 54,  281 => 98,  276 => 193,  272 => 116,  267 => 101,  249 => 92,  231 => 81,  218 => 117,  215 => 123,  213 => 78,  200 => 72,  197 => 71,  195 => 54,  188 => 76,  167 => 71,  366 => 149,  333 => 115,  324 => 112,  317 => 84,  302 => 123,  292 => 79,  286 => 112,  271 => 190,  244 => 101,  190 => 59,  70 => 19,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 339,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 751,  1131 => 330,  1128 => 748,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 326,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 656,  1070 => 282,  1067 => 281,  1065 => 310,  1062 => 279,  1054 => 275,  1051 => 647,  1049 => 273,  1046 => 306,  1038 => 303,  1035 => 639,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 299,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 293,  990 => 247,  987 => 640,  985 => 245,  982 => 244,  974 => 240,  971 => 286,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 278,  940 => 225,  937 => 593,  929 => 496,  926 => 589,  924 => 218,  922 => 492,  919 => 587,  910 => 209,  902 => 208,  896 => 573,  893 => 572,  887 => 203,  884 => 568,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 255,  865 => 189,  864 => 558,  858 => 455,  852 => 184,  849 => 251,  847 => 450,  844 => 546,  834 => 174,  830 => 539,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 238,  803 => 427,  787 => 161,  785 => 232,  782 => 484,  766 => 155,  764 => 505,  761 => 469,  744 => 319,  732 => 487,  725 => 385,  723 => 383,  718 => 482,  715 => 218,  697 => 140,  695 => 213,  692 => 474,  683 => 201,  680 => 208,  677 => 361,  671 => 465,  669 => 197,  664 => 463,  661 => 399,  658 => 189,  648 => 194,  646 => 451,  638 => 274,  635 => 191,  632 => 185,  629 => 334,  627 => 268,  624 => 190,  618 => 179,  610 => 261,  605 => 258,  601 => 108,  596 => 253,  594 => 180,  591 => 436,  582 => 243,  576 => 177,  573 => 245,  571 => 173,  568 => 300,  558 => 170,  556 => 238,  553 => 425,  545 => 219,  542 => 421,  539 => 231,  536 => 419,  534 => 418,  531 => 163,  524 => 367,  513 => 269,  510 => 157,  508 => 209,  505 => 267,  489 => 66,  486 => 194,  484 => 141,  481 => 207,  476 => 192,  470 => 203,  465 => 245,  456 => 143,  452 => 313,  449 => 198,  441 => 196,  438 => 136,  422 => 184,  419 => 175,  410 => 163,  406 => 173,  403 => 171,  395 => 135,  389 => 114,  378 => 154,  376 => 160,  372 => 159,  363 => 188,  359 => 123,  356 => 122,  347 => 119,  344 => 193,  338 => 116,  329 => 131,  323 => 128,  318 => 136,  311 => 135,  308 => 109,  306 => 124,  303 => 122,  301 => 202,  296 => 154,  293 => 107,  290 => 118,  288 => 120,  280 => 194,  275 => 105,  265 => 108,  260 => 74,  250 => 71,  232 => 89,  222 => 61,  211 => 72,  206 => 83,  194 => 70,  181 => 65,  174 => 74,  161 => 58,  146 => 56,  126 => 45,  114 => 36,  104 => 31,  76 => 25,  262 => 93,  255 => 147,  242 => 98,  237 => 91,  233 => 87,  191 => 77,  150 => 55,  127 => 49,  124 => 47,  118 => 49,  100 => 46,  81 => 23,  58 => 14,  537 => 166,  532 => 155,  527 => 416,  519 => 365,  516 => 221,  507 => 217,  504 => 217,  498 => 145,  492 => 210,  490 => 152,  485 => 203,  479 => 204,  477 => 203,  473 => 201,  468 => 138,  464 => 187,  459 => 242,  455 => 196,  451 => 139,  446 => 197,  433 => 184,  431 => 189,  426 => 156,  424 => 180,  421 => 130,  412 => 126,  408 => 176,  404 => 162,  401 => 172,  392 => 169,  388 => 134,  367 => 157,  358 => 112,  352 => 149,  345 => 145,  342 => 137,  340 => 192,  335 => 134,  326 => 139,  320 => 127,  315 => 111,  310 => 83,  307 => 130,  291 => 103,  284 => 117,  277 => 184,  270 => 102,  263 => 112,  256 => 96,  251 => 182,  248 => 94,  245 => 85,  236 => 102,  225 => 91,  216 => 79,  212 => 90,  205 => 71,  186 => 72,  184 => 45,  180 => 70,  160 => 71,  153 => 69,  134 => 54,  129 => 37,  97 => 33,  90 => 26,  77 => 20,  34 => 8,  84 => 24,  65 => 17,  480 => 193,  474 => 146,  469 => 188,  461 => 197,  457 => 193,  453 => 199,  444 => 190,  440 => 186,  437 => 162,  435 => 304,  430 => 127,  427 => 183,  423 => 179,  413 => 202,  409 => 173,  407 => 138,  402 => 168,  398 => 136,  393 => 157,  387 => 164,  384 => 132,  381 => 163,  379 => 114,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 148,  355 => 143,  341 => 117,  337 => 145,  322 => 86,  314 => 179,  312 => 124,  309 => 96,  305 => 108,  298 => 120,  294 => 124,  285 => 100,  283 => 118,  278 => 106,  268 => 111,  264 => 84,  258 => 187,  252 => 157,  247 => 157,  241 => 90,  229 => 85,  220 => 81,  214 => 87,  177 => 69,  169 => 101,  140 => 57,  132 => 33,  128 => 42,  107 => 45,  61 => 15,  273 => 76,  269 => 111,  254 => 106,  243 => 103,  240 => 103,  238 => 65,  235 => 64,  230 => 130,  227 => 135,  224 => 66,  221 => 80,  219 => 124,  217 => 92,  208 => 86,  204 => 75,  179 => 70,  159 => 57,  143 => 47,  135 => 46,  119 => 40,  102 => 41,  71 => 19,  67 => 20,  63 => 18,  59 => 11,  38 => 7,  94 => 36,  89 => 33,  85 => 23,  75 => 18,  68 => 23,  56 => 17,  87 => 34,  21 => 2,  26 => 4,  93 => 27,  88 => 24,  78 => 19,  46 => 10,  27 => 3,  44 => 9,  31 => 6,  28 => 5,  201 => 74,  196 => 119,  183 => 71,  171 => 73,  166 => 86,  163 => 98,  158 => 41,  156 => 58,  151 => 44,  142 => 40,  138 => 47,  136 => 35,  121 => 50,  117 => 37,  105 => 34,  91 => 25,  62 => 12,  49 => 11,  24 => 3,  25 => 7,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 13,  40 => 11,  37 => 6,  22 => 2,  246 => 93,  157 => 87,  145 => 37,  139 => 68,  131 => 66,  123 => 42,  120 => 38,  115 => 71,  111 => 47,  108 => 33,  101 => 30,  98 => 40,  96 => 37,  83 => 33,  74 => 28,  66 => 17,  55 => 13,  52 => 12,  50 => 14,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 85,  203 => 73,  199 => 80,  193 => 117,  189 => 110,  187 => 73,  182 => 78,  176 => 63,  173 => 72,  168 => 61,  164 => 70,  162 => 59,  154 => 63,  149 => 86,  147 => 51,  144 => 56,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 47,  116 => 39,  112 => 40,  109 => 30,  106 => 29,  103 => 16,  99 => 31,  95 => 27,  92 => 50,  86 => 22,  82 => 21,  80 => 27,  73 => 24,  64 => 13,  60 => 17,  57 => 14,  54 => 20,  51 => 11,  48 => 12,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
