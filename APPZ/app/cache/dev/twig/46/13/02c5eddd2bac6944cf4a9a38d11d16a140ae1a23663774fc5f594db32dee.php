<?php

/* ::base_pdf.html.twig */
class __TwigTemplate_461302c5eddd2bac6944cf4a9a38d11d16a140ae1a23663774fc5f594db32dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=9\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Leonardo Barrientos C. BC TIC Chile\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <div id=\"header\"></div>
    <div id=\"content\" class=\"container pdf\" style=\"width: 99%;\">
    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "    </div>
    <br/>
    <div class=\"footer text-center\" style=\"display: none;\">

      <img style=\"height:35px; \" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image2.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image3.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image4.png"), "html", null, true);
        echo "\"/>
      <img style=\"height:35px; \" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image5.png"), "html", null, true);
        echo "\"/>

      <h4>PROMOVIENDO CONDUCTAS SEGURAS</h4><p>&copy; CAM - LA - Sistema de Seguridad IPAL & Observaciones siop.cam-la.com<br/>PREVENCI&Oacute;N DE RIESGOS CAM CHILE S.A.</p></div>
      ";
        // line 38
        $this->displayBlock('js', $context, $blocks);
        // line 39
        echo "  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de cumplimiento de Seguridad IPAL & OBSERVACIONES - CAM LA";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"//necolas.github.io/normalize.css/3.0.1/normalize.css\">
    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" media=\"screen,print\">
    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css\"  media=\"screen,print\">
    <link rel=\"stylesheet\" href=\"/css/ui-lightness/jquery-ui-1.10.4.min.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    ";
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script src=\"/js/jquery-ui-1.10.4.min.js\"></script>
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    <script src=\"/js/respond.min.js\"></script>
    ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    // line 38
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  114 => 27,  106 => 17,  94 => 10,  91 => 9,  85 => 8,  79 => 39,  77 => 38,  71 => 35,  67 => 34,  53 => 28,  51 => 27,  42 => 22,  39 => 16,  24 => 1,  335 => 132,  332 => 131,  323 => 126,  320 => 125,  308 => 115,  302 => 113,  294 => 111,  292 => 110,  288 => 108,  282 => 107,  274 => 105,  272 => 104,  265 => 100,  259 => 97,  245 => 85,  239 => 83,  231 => 81,  229 => 80,  225 => 78,  219 => 76,  211 => 74,  209 => 73,  205 => 71,  199 => 69,  191 => 67,  189 => 66,  182 => 62,  176 => 59,  168 => 53,  165 => 52,  153 => 45,  147 => 44,  139 => 41,  133 => 40,  123 => 37,  117 => 36,  109 => 33,  103 => 16,  95 => 29,  89 => 28,  83 => 27,  75 => 24,  69 => 23,  63 => 33,  59 => 32,  47 => 10,  43 => 9,  37 => 9,  33 => 8,  30 => 3,);
    }
}
