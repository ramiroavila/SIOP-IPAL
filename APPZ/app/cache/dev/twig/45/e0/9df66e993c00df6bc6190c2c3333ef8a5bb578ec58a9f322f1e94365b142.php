<?php

/* BcTicCamIpalBundle::search.html.twig */
class __TwigTemplate_45e09df66e993c00df6bc6190c2c3333ef8a5bb578ec58a9f322f1e94365b142 extends Twig_Template
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
        echo "<div class=\"container text-center\" style=\"width: 50%;\" >
    
      <form id=\"search\" class=\"form-inline\" role=\"form\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"key\"></label>
          <input type=\"text\" class=\"form-control\" id=\"key\" placeholder=\"\">
        </div>
        <button type=\"button\" id=\"submit\" class=\"btn btn-default\">Buscar</button>
      </form>

    </div>
    <br/>
    <br/>
    
    <div id=\"results\"></div>

    <p class=\"text-left\">
    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["path_new"]) ? $context["path_new"] : $this->getContext($context, "path_new")), "html", null, true);
        echo "\">
                    <button type=\"button\" class=\"btn btn-default btn-xs\">
                      <span class=\"glyphicon glyphicon-plus\"></span> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar"), "html", null, true);
        echo "
                    </button>
    </a>
    </p>   

    ";
    }

    // line 39
    public function block_js($context, array $blocks = array())
    {
        // line 40
        echo "      ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
      <script type=\"text/javascript\">
        \$('#submit').bind('click', function () {
          \$.ajax({
            type: 'POST',
            url: '";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["path_action"]) ? $context["path_action"] : $this->getContext($context, "path_action")), "html", null, true);
        echo "',
            data: { 'key': \$('#key').val(), 'page': 1 },
            success: function (content) {
              \$('#results').html(content);
            },
            error: function (a,b,c) {

            }
          });
        });

        \$('#submit').click();

        \$(\"#key\").keydown(function(event) {
          if (event.keyCode == 13) {
           \$('#submit').click();
           event.preventDefault();
         }
        });
      </script>
    ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  98 => 40,  95 => 39,  85 => 32,  80 => 30,  61 => 13,  58 => 11,  50 => 7,  42 => 6,  36 => 5,  33 => 4,  30 => 3,  28 => 5,  26 => 4,  24 => 3,);
    }
}
