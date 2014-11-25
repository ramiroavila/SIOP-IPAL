<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_29fdaaf1e58eefb14b9af107d63b193736c97404e8ece9568e87cbd963ea969c extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  66 => 25,  50 => 15,  46 => 14,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  537 => 179,  532 => 155,  527 => 139,  519 => 17,  516 => 16,  507 => 10,  504 => 9,  498 => 8,  492 => 180,  490 => 179,  485 => 176,  479 => 175,  477 => 174,  473 => 173,  468 => 171,  464 => 170,  459 => 168,  455 => 167,  451 => 166,  446 => 165,  437 => 162,  433 => 160,  431 => 159,  426 => 156,  424 => 155,  421 => 154,  412 => 151,  408 => 149,  404 => 148,  401 => 147,  392 => 144,  388 => 142,  384 => 141,  381 => 140,  379 => 139,  367 => 131,  358 => 127,  352 => 126,  345 => 124,  342 => 123,  340 => 122,  326 => 115,  315 => 112,  312 => 111,  307 => 109,  298 => 105,  291 => 103,  284 => 101,  277 => 99,  270 => 97,  263 => 95,  256 => 93,  251 => 91,  248 => 90,  245 => 89,  236 => 85,  230 => 84,  225 => 82,  212 => 76,  205 => 75,  199 => 74,  193 => 73,  186 => 72,  180 => 69,  173 => 68,  166 => 67,  164 => 66,  160 => 64,  153 => 63,  147 => 62,  141 => 61,  134 => 60,  129 => 58,  121 => 56,  116 => 54,  109 => 52,  103 => 51,  97 => 50,  90 => 49,  82 => 45,  79 => 29,  77 => 43,  65 => 37,  56 => 30,  54 => 29,  43 => 22,  40 => 16,  38 => 9,  34 => 8,  25 => 1,  365 => 97,  361 => 96,  354 => 91,  347 => 90,  341 => 89,  335 => 119,  329 => 87,  322 => 86,  320 => 114,  317 => 84,  310 => 110,  304 => 82,  297 => 81,  295 => 80,  292 => 79,  285 => 78,  279 => 77,  273 => 76,  267 => 75,  260 => 74,  257 => 73,  250 => 71,  238 => 65,  235 => 64,  228 => 62,  222 => 61,  216 => 78,  210 => 59,  203 => 58,  201 => 57,  195 => 54,  184 => 71,  177 => 44,  171 => 43,  165 => 42,  158 => 41,  156 => 40,  152 => 38,  145 => 37,  138 => 36,  136 => 35,  132 => 59,  125 => 32,  119 => 55,  113 => 30,  106 => 29,  104 => 28,  101 => 27,  93 => 25,  91 => 35,  88 => 48,  81 => 21,  75 => 28,  69 => 19,  62 => 24,  60 => 17,  53 => 13,  42 => 12,  31 => 4,  28 => 3,);
    }
}
