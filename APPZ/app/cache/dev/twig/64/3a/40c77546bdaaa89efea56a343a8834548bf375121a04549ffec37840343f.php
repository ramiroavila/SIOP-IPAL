<?php

/* BcTicCamIpalBundle:Encuesta:reporteEncuestaMesCsv.html.twig */
class __TwigTemplate_643a40c77546bdaaa89efea56a343a8834548bf375121a04549ffec37840343f extends Twig_Template
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
        echo "FECHA;IPAL;Q TOTAL ENC;Q ENC CON NC;Q NC
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
            echo " ";
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
            if ((twig_length_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == 0)) {
                echo " 0 ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_round(((isset($context["ipal"]) ? $context["ipal"] : $this->getContext($context, "ipal")) / twig_length_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))))), "html", null, true);
                echo " ";
            }
            echo ";";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "html", null, true);
            echo ";";
            echo twig_escape_filter($this->env, (isset($context["tiene_incumplimientos"]) ? $context["tiene_incumplimientos"] : $this->getContext($context, "tiene_incumplimientos")), "html", null, true);
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
        return "BcTicCamIpalBundle:Encuesta:reporteEncuestaMesCsv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
