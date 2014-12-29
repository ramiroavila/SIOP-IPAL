<?php

/* BcTicCamIpalBundle:Encuesta:reporteEncuestaNoConformidadesCsv.html.twig */
class __TwigTemplate_c6725da2c2325b73033c58165f4080941716d9d12c0ca42dc40783e8a8251bc2 extends Twig_Template
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
        echo "FECHA;Nº ENC;Nº de NC
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["fecha"] => $context["item"]) {
            // line 3
            $context["ipal"] = 0;
            // line 4
            $context["tiene_incumplimientos"] = 0;
            // line 5
            $context["cantidad_incumplimientos"] = 0;
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
            foreach ($context['_seq'] as $context["encuesta_index"] => $context["encuesta"]) {
                $context["ipal"] = ((isset($context["ipal"]) ? $context["ipal"] : $this->getContext($context, "ipal")) + $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "ipal"));
                $context["tiene_incumplimientos"] = ((isset($context["tiene_incumplimientos"]) ? $context["tiene_incumplimientos"] : $this->getContext($context, "tiene_incumplimientos")) + $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "tiene_incumplimientos"));
                $context["cantidad_incumplimientos"] = ((isset($context["cantidad_incumplimientos"]) ? $context["cantidad_incumplimientos"] : $this->getContext($context, "cantidad_incumplimientos")) + $this->getAttribute((isset($context["encuesta"]) ? $context["encuesta"] : $this->getContext($context, "encuesta")), "cantidad_incumplimientos"));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['encuesta_index'], $context['encuesta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "m-Y"), "html", null, true);
            echo ";";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "html", null, true);
            echo ";";
            echo twig_escape_filter($this->env, (isset($context["cantidad_incumplimientos"]) ? $context["cantidad_incumplimientos"] : $this->getContext($context, "cantidad_incumplimientos")), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fecha'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:reporteEncuestaNoConformidadesCsv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
