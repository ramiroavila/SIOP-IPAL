<?php

/* BcTicCamIpalBundle:Encuesta:reporteEncuestaTotalIncumplimientoValorCsv.html.twig */
class __TwigTemplate_ea7be8ca675a4e05319a16bc49759a23099cdd71e55dc35a40ae3a689d298762 extends Twig_Template
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
        echo "ITEM;TOTAL
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 3
            echo "\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
            echo "\";";
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:reporteEncuestaTotalIncumplimientoValorCsv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
