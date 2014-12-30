<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_53417e7f7dc79dedfbfe13eccdc0d44f2883104da3e50dd5b9d4afb4cb687596 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "file"), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "line"));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "class"));
            echo "</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"";
            // line 8
            if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                echo "window.location='";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "js"), "html", null, true);
                echo "';window.event.stopPropagation();return false;";
            }
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "method"), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        $context["request_status_code_color"] = (((400 > $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"))) ? ((((200 == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        $context["request_route"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route")) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route")) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statustext"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statustext"), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata"))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==\" alt=\"Request\"></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery"), "all"))) {
            // line 57
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery")));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest"), "all"))) {
            // line 67
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest")));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes"), "all"))) {
            // line 77
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes")));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies"), "all"))) {
            // line 87
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies")));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestheaders")));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content") == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content")) {
            // line 103
            echo "        <pre>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content"), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestserver")));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "responseheaders")));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata"))) {
            // line 119
            echo "    ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata")));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes"))) {
            // line 129
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes")));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes"))) {
            // line 139
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes")));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) {
            // line 147
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"))), "html", null, true);
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "getcollector", array(0 => "request"), "method"), "requestattributes")));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "request"), "method"), "requestattributes")));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1069 => 654,  1055 => 648,  1044 => 645,  1026 => 633,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  955 => 600,  947 => 597,  941 => 595,  935 => 592,  930 => 590,  911 => 581,  909 => 580,  870 => 560,  836 => 543,  807 => 528,  800 => 523,  796 => 521,  780 => 513,  754 => 499,  740 => 491,  737 => 490,  686 => 472,  642 => 449,  636 => 446,  622 => 442,  551 => 424,  429 => 188,  304 => 82,  442 => 180,  382 => 131,  572 => 239,  567 => 401,  327 => 220,  350 => 120,  475 => 206,  361 => 152,  472 => 203,  289 => 196,  110 => 41,  735 => 315,  707 => 302,  690 => 295,  665 => 285,  656 => 281,  647 => 278,  522 => 224,  353 => 149,  491 => 195,  462 => 202,  411 => 140,  331 => 140,  509 => 217,  386 => 159,  377 => 129,  747 => 232,  666 => 204,  549 => 170,  432 => 178,  351 => 141,  313 => 110,  691 => 214,  674 => 207,  641 => 192,  621 => 187,  614 => 185,  587 => 434,  581 => 177,  521 => 158,  515 => 157,  467 => 145,  349 => 106,  742 => 492,  736 => 231,  1161 => 340,  1145 => 334,  1139 => 333,  1125 => 329,  1118 => 327,  1098 => 322,  1089 => 319,  1081 => 316,  1075 => 315,  1052 => 307,  1032 => 302,  1025 => 300,  1005 => 295,  984 => 615,  965 => 285,  957 => 282,  951 => 281,  946 => 279,  928 => 274,  912 => 268,  905 => 579,  891 => 571,  872 => 258,  862 => 557,  792 => 234,  771 => 228,  752 => 224,  746 => 221,  722 => 212,  716 => 306,  702 => 479,  675 => 198,  626 => 443,  600 => 181,  592 => 254,  565 => 430,  540 => 218,  495 => 347,  487 => 210,  460 => 135,  447 => 181,  373 => 156,  210 => 77,  711 => 206,  645 => 188,  604 => 175,  577 => 168,  520 => 162,  471 => 329,  375 => 162,  371 => 156,  228 => 62,  202 => 85,  148 => 59,  720 => 218,  706 => 214,  667 => 203,  657 => 198,  637 => 193,  630 => 191,  616 => 440,  597 => 183,  560 => 172,  547 => 234,  517 => 159,  496 => 211,  450 => 191,  391 => 120,  279 => 77,  207 => 76,  282 => 186,  1176 => 774,  1169 => 770,  1167 => 769,  1162 => 766,  1157 => 764,  1151 => 761,  1142 => 755,  1138 => 753,  1132 => 750,  1121 => 743,  1119 => 742,  1083 => 712,  1064 => 651,  1040 => 678,  1016 => 660,  1011 => 296,  992 => 292,  944 => 606,  927 => 597,  881 => 560,  859 => 544,  825 => 242,  821 => 516,  701 => 214,  681 => 207,  574 => 431,  557 => 307,  512 => 210,  506 => 265,  500 => 349,  466 => 197,  417 => 143,  397 => 169,  370 => 157,  364 => 248,  346 => 149,  165 => 60,  53 => 12,  297 => 200,  295 => 80,  137 => 50,  899 => 265,  892 => 474,  863 => 457,  854 => 552,  717 => 207,  699 => 299,  679 => 207,  672 => 193,  654 => 200,  634 => 336,  598 => 315,  589 => 180,  578 => 432,  569 => 301,  562 => 173,  533 => 165,  497 => 262,  885 => 261,  880 => 566,  876 => 467,  860 => 457,  855 => 252,  851 => 454,  835 => 526,  815 => 531,  810 => 529,  795 => 422,  790 => 519,  786 => 419,  779 => 333,  770 => 507,  765 => 227,  750 => 398,  745 => 493,  741 => 231,  730 => 210,  721 => 441,  705 => 480,  700 => 213,  696 => 476,  685 => 363,  676 => 467,  660 => 203,  655 => 457,  651 => 279,  640 => 448,  631 => 182,  615 => 326,  606 => 179,  595 => 315,  590 => 313,  586 => 174,  575 => 174,  570 => 238,  566 => 301,  555 => 293,  550 => 161,  546 => 423,  535 => 282,  530 => 417,  526 => 231,  501 => 153,  445 => 186,  436 => 179,  425 => 251,  420 => 246,  416 => 177,  405 => 137,  400 => 161,  396 => 209,  380 => 158,  336 => 143,  325 => 129,  316 => 135,  300 => 121,  175 => 58,  170 => 56,  155 => 47,  948 => 503,  939 => 604,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 756,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 323,  1093 => 320,  1088 => 714,  1077 => 657,  1068 => 569,  1063 => 567,  1059 => 309,  1048 => 646,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 632,  1012 => 540,  994 => 531,  978 => 288,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 570,  868 => 462,  857 => 457,  848 => 548,  843 => 449,  839 => 246,  823 => 438,  819 => 241,  812 => 530,  794 => 424,  783 => 416,  774 => 509,  767 => 409,  758 => 225,  749 => 460,  738 => 218,  729 => 446,  709 => 217,  689 => 204,  682 => 470,  644 => 343,  617 => 328,  415 => 180,  385 => 161,  369 => 210,  332 => 131,  330 => 142,  321 => 135,  287 => 90,  266 => 113,  259 => 103,  257 => 73,  253 => 100,  239 => 83,  226 => 84,  185 => 75,  178 => 59,  113 => 48,  968 => 624,  963 => 604,  959 => 602,  952 => 510,  943 => 501,  938 => 499,  934 => 275,  903 => 479,  894 => 479,  883 => 468,  874 => 562,  838 => 544,  829 => 441,  818 => 433,  809 => 430,  798 => 235,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 504,  753 => 322,  733 => 226,  728 => 226,  724 => 484,  713 => 379,  708 => 208,  704 => 376,  693 => 211,  688 => 211,  684 => 365,  668 => 464,  663 => 350,  659 => 192,  643 => 194,  639 => 187,  628 => 444,  623 => 331,  619 => 265,  608 => 259,  603 => 439,  599 => 319,  583 => 179,  579 => 172,  563 => 429,  559 => 427,  552 => 165,  543 => 383,  538 => 285,  518 => 211,  514 => 415,  494 => 151,  478 => 206,  458 => 186,  454 => 185,  434 => 229,  418 => 290,  414 => 127,  394 => 168,  354 => 91,  334 => 141,  261 => 107,  192 => 61,  923 => 588,  918 => 269,  914 => 587,  907 => 483,  898 => 477,  889 => 474,  878 => 259,  873 => 464,  853 => 453,  842 => 448,  833 => 245,  828 => 538,  824 => 537,  813 => 431,  804 => 428,  793 => 420,  788 => 518,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 320,  743 => 394,  739 => 393,  714 => 217,  703 => 372,  698 => 477,  694 => 200,  687 => 210,  678 => 468,  673 => 288,  653 => 191,  649 => 345,  633 => 335,  613 => 181,  609 => 323,  602 => 258,  593 => 252,  588 => 329,  584 => 251,  564 => 241,  548 => 385,  544 => 288,  528 => 160,  523 => 212,  503 => 265,  499 => 209,  488 => 150,  483 => 211,  463 => 145,  448 => 234,  443 => 232,  439 => 195,  428 => 252,  399 => 123,  383 => 165,  348 => 140,  343 => 146,  339 => 133,  328 => 139,  319 => 215,  299 => 92,  274 => 110,  234 => 90,  223 => 93,  198 => 98,  172 => 57,  152 => 46,  281 => 114,  276 => 111,  272 => 116,  267 => 101,  249 => 92,  231 => 81,  218 => 117,  215 => 123,  213 => 78,  200 => 72,  197 => 69,  195 => 54,  188 => 76,  167 => 71,  366 => 149,  333 => 115,  324 => 112,  317 => 84,  302 => 125,  292 => 79,  286 => 112,  271 => 190,  244 => 101,  190 => 59,  70 => 15,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 339,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 751,  1131 => 330,  1128 => 748,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 326,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 656,  1070 => 282,  1067 => 281,  1065 => 310,  1062 => 279,  1054 => 275,  1051 => 647,  1049 => 273,  1046 => 306,  1038 => 303,  1035 => 639,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 299,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 293,  990 => 247,  987 => 640,  985 => 245,  982 => 244,  974 => 240,  971 => 286,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 278,  940 => 225,  937 => 593,  929 => 496,  926 => 589,  924 => 218,  922 => 492,  919 => 587,  910 => 209,  902 => 208,  896 => 573,  893 => 572,  887 => 203,  884 => 568,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 255,  865 => 189,  864 => 558,  858 => 455,  852 => 184,  849 => 251,  847 => 450,  844 => 546,  834 => 174,  830 => 539,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 238,  803 => 427,  787 => 161,  785 => 232,  782 => 484,  766 => 155,  764 => 505,  761 => 469,  744 => 319,  732 => 487,  725 => 385,  723 => 383,  718 => 482,  715 => 218,  697 => 140,  695 => 213,  692 => 474,  683 => 201,  680 => 208,  677 => 361,  671 => 465,  669 => 197,  664 => 463,  661 => 399,  658 => 189,  648 => 194,  646 => 451,  638 => 274,  635 => 191,  632 => 185,  629 => 334,  627 => 268,  624 => 190,  618 => 179,  610 => 261,  605 => 258,  601 => 108,  596 => 253,  594 => 180,  591 => 436,  582 => 243,  576 => 177,  573 => 245,  571 => 173,  568 => 300,  558 => 170,  556 => 238,  553 => 425,  545 => 219,  542 => 421,  539 => 231,  536 => 419,  534 => 418,  531 => 163,  524 => 367,  513 => 269,  510 => 157,  508 => 209,  505 => 267,  489 => 66,  486 => 194,  484 => 141,  481 => 207,  476 => 192,  470 => 203,  465 => 245,  456 => 143,  452 => 313,  449 => 198,  441 => 196,  438 => 136,  422 => 184,  419 => 175,  410 => 163,  406 => 173,  403 => 171,  395 => 135,  389 => 160,  378 => 157,  376 => 160,  372 => 159,  363 => 153,  359 => 123,  356 => 122,  347 => 119,  344 => 193,  338 => 116,  329 => 131,  323 => 128,  318 => 136,  311 => 135,  308 => 109,  306 => 124,  303 => 122,  301 => 202,  296 => 121,  293 => 120,  290 => 119,  288 => 118,  280 => 194,  275 => 105,  265 => 105,  260 => 74,  250 => 71,  232 => 88,  222 => 83,  211 => 72,  206 => 83,  194 => 68,  181 => 65,  174 => 74,  161 => 58,  146 => 56,  126 => 45,  114 => 36,  104 => 31,  76 => 17,  262 => 93,  255 => 101,  242 => 98,  237 => 91,  233 => 87,  191 => 67,  150 => 55,  127 => 35,  124 => 47,  118 => 49,  100 => 46,  81 => 23,  58 => 14,  537 => 166,  532 => 155,  527 => 416,  519 => 365,  516 => 221,  507 => 217,  504 => 217,  498 => 145,  492 => 210,  490 => 152,  485 => 203,  479 => 204,  477 => 203,  473 => 201,  468 => 138,  464 => 187,  459 => 242,  455 => 196,  451 => 139,  446 => 197,  433 => 184,  431 => 189,  426 => 156,  424 => 180,  421 => 130,  412 => 126,  408 => 176,  404 => 162,  401 => 172,  392 => 169,  388 => 134,  367 => 155,  358 => 151,  352 => 149,  345 => 147,  342 => 137,  340 => 145,  335 => 134,  326 => 138,  320 => 127,  315 => 131,  310 => 83,  307 => 128,  291 => 103,  284 => 117,  277 => 184,  270 => 102,  263 => 112,  256 => 96,  251 => 182,  248 => 97,  245 => 85,  236 => 102,  225 => 91,  216 => 79,  212 => 90,  205 => 71,  186 => 72,  184 => 63,  180 => 70,  160 => 71,  153 => 69,  134 => 39,  129 => 37,  97 => 33,  90 => 20,  77 => 20,  34 => 5,  84 => 24,  65 => 17,  480 => 193,  474 => 146,  469 => 188,  461 => 197,  457 => 193,  453 => 199,  444 => 190,  440 => 186,  437 => 162,  435 => 304,  430 => 127,  427 => 183,  423 => 179,  413 => 202,  409 => 173,  407 => 138,  402 => 168,  398 => 136,  393 => 157,  387 => 164,  384 => 132,  381 => 163,  379 => 114,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 148,  355 => 150,  341 => 117,  337 => 145,  322 => 86,  314 => 179,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 124,  285 => 100,  283 => 115,  278 => 106,  268 => 111,  264 => 84,  258 => 187,  252 => 157,  247 => 157,  241 => 93,  229 => 87,  220 => 81,  214 => 87,  177 => 69,  169 => 101,  140 => 57,  132 => 33,  128 => 42,  107 => 45,  61 => 12,  273 => 76,  269 => 107,  254 => 106,  243 => 103,  240 => 103,  238 => 65,  235 => 89,  230 => 130,  227 => 86,  224 => 66,  221 => 80,  219 => 124,  217 => 92,  208 => 76,  204 => 75,  179 => 70,  159 => 57,  143 => 47,  135 => 46,  119 => 40,  102 => 24,  71 => 19,  67 => 14,  63 => 18,  59 => 16,  38 => 7,  94 => 21,  89 => 33,  85 => 23,  75 => 18,  68 => 23,  56 => 17,  87 => 34,  21 => 2,  26 => 4,  93 => 27,  88 => 24,  78 => 19,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 74,  196 => 119,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 41,  156 => 58,  151 => 44,  142 => 40,  138 => 47,  136 => 35,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 12,  49 => 11,  24 => 3,  25 => 7,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 8,  40 => 11,  37 => 6,  22 => 2,  246 => 96,  157 => 87,  145 => 37,  139 => 68,  131 => 66,  123 => 42,  120 => 31,  115 => 71,  111 => 47,  108 => 33,  101 => 30,  98 => 40,  96 => 37,  83 => 33,  74 => 28,  66 => 17,  55 => 9,  52 => 12,  50 => 14,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 85,  203 => 73,  199 => 80,  193 => 117,  189 => 66,  187 => 73,  182 => 78,  176 => 63,  173 => 72,  168 => 61,  164 => 70,  162 => 59,  154 => 63,  149 => 86,  147 => 43,  144 => 42,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 47,  116 => 39,  112 => 40,  109 => 27,  106 => 29,  103 => 16,  99 => 23,  95 => 27,  92 => 50,  86 => 22,  82 => 19,  80 => 27,  73 => 16,  64 => 13,  60 => 17,  57 => 14,  54 => 20,  51 => 13,  48 => 12,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
