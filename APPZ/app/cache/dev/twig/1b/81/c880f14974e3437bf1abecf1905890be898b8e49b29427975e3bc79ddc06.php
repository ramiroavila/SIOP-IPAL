<?php

/* BcTicCamIpalBundle:Security:index.html.twig */
class __TwigTemplate_1b81c880f14974e3437bf1abecf1905890be898b8e49b29427975e3bc79ddc06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bienvenido"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("utiliza las opciones del menú superior para navegar en la aplicación o los botones siguientes"), "html", null, true);
        echo ":</h4>

<div class=\"container\" style=\"width:300px; margin-top:33px;\">
  <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("encuestas");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reportes IPAL"), "html", null, true);
        echo "</button></a>
  <br/>


  <div class=\"btn-group btn-block\">
  <button type=\"button\" class=\"btn btn-warning btn-lg btn-block dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL"), "html", null, true);
        echo "&nbsp;<span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu btn-block\" role=\"menu\">

      ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 1)) {
            // line 18
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 2)) {
            // line 25
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "colombia_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Colombia"), "html", null, true);
            echo "</a></li>     
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 3)) {
            // line 29
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 33
        echo "    

    ";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 4)) {
            // line 36
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "brazil_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "brazil_interno"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Interno"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 38
        echo "   

    ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 5)) {
            // line 41
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("encuestas_new", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Agregar IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 45
        echo "  


  </ul>
  </div>
  <br/>
  <br/>
  <div class=\"btn-group btn-block\">
  <button type=\"button\" class=\"btn btn-success btn-lg btn-block dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Formularios PDF"), "html", null, true);
        echo "&nbsp;<span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu btn-block\" role=\"menu\">
    ";
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 1)) {
            // line 58
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 64
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 2)) {
            // line 65
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "colombia_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Colombia"), "html", null, true);
            echo "</a></li>





    <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li> 
    ";
        }
        // line 73
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 3)) {
            // line 74
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 79
        echo "    
    ";
        // line 80
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 4)) {
            // line 81
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "brazil_general"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "brazil_interno"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Interno"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 84
        echo "   
    ";
        // line 85
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id") == 5)) {
            // line 86
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "electrica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Eléctrica"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "logistica"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Logística"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "obras_civiles"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Obras Civiles"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("encuestas_show_form", array("type" => "telecomunicaciones"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IPAL Telecomunicaciones"), "html", null, true);
            echo "</a></li>
    <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("observaciones_show_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 91
        echo "  
  </ul>
  </div>
  <br/>
  <br/>
  <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("observaciones");
        echo "\">
  <button type=\"button\" class=\"btn btn-info btn-lg btn-block\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
        echo "</button></a>
</div>

";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Security:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 82,  442 => 180,  382 => 155,  572 => 239,  567 => 401,  327 => 220,  350 => 150,  475 => 206,  361 => 96,  472 => 203,  289 => 162,  110 => 41,  735 => 315,  707 => 302,  690 => 295,  665 => 285,  656 => 281,  647 => 278,  522 => 224,  353 => 150,  491 => 195,  462 => 193,  411 => 174,  331 => 138,  509 => 217,  386 => 164,  377 => 158,  747 => 232,  666 => 204,  549 => 170,  432 => 178,  351 => 110,  313 => 93,  691 => 214,  674 => 207,  641 => 192,  621 => 187,  614 => 185,  587 => 178,  581 => 177,  521 => 158,  515 => 157,  467 => 145,  349 => 106,  742 => 232,  736 => 231,  1161 => 340,  1145 => 334,  1139 => 333,  1125 => 329,  1118 => 327,  1098 => 322,  1089 => 319,  1081 => 316,  1075 => 315,  1052 => 307,  1032 => 302,  1025 => 300,  1005 => 295,  984 => 289,  965 => 285,  957 => 282,  951 => 281,  946 => 279,  928 => 274,  912 => 268,  905 => 266,  891 => 262,  872 => 258,  862 => 254,  792 => 234,  771 => 228,  752 => 224,  746 => 221,  722 => 212,  716 => 306,  702 => 207,  675 => 198,  626 => 184,  600 => 181,  592 => 254,  565 => 236,  540 => 218,  495 => 347,  487 => 210,  460 => 135,  447 => 181,  373 => 113,  210 => 59,  711 => 206,  645 => 188,  604 => 175,  577 => 168,  520 => 162,  471 => 329,  375 => 162,  371 => 150,  228 => 62,  202 => 85,  148 => 59,  720 => 218,  706 => 214,  667 => 203,  657 => 198,  637 => 193,  630 => 191,  616 => 187,  597 => 183,  560 => 172,  547 => 234,  517 => 159,  496 => 211,  450 => 191,  391 => 120,  279 => 77,  207 => 63,  282 => 186,  1176 => 774,  1169 => 770,  1167 => 769,  1162 => 766,  1157 => 764,  1151 => 761,  1142 => 755,  1138 => 753,  1132 => 750,  1121 => 743,  1119 => 742,  1083 => 712,  1064 => 696,  1040 => 678,  1016 => 660,  1011 => 296,  992 => 292,  944 => 606,  927 => 597,  881 => 560,  859 => 544,  825 => 242,  821 => 516,  701 => 214,  681 => 207,  574 => 318,  557 => 307,  512 => 210,  506 => 265,  500 => 349,  466 => 197,  417 => 245,  397 => 169,  370 => 157,  364 => 248,  346 => 149,  165 => 42,  53 => 13,  297 => 81,  295 => 80,  137 => 50,  899 => 265,  892 => 474,  863 => 457,  854 => 454,  717 => 207,  699 => 299,  679 => 207,  672 => 193,  654 => 200,  634 => 336,  598 => 315,  589 => 180,  578 => 241,  569 => 301,  562 => 173,  533 => 165,  497 => 262,  885 => 261,  880 => 468,  876 => 467,  860 => 457,  855 => 252,  851 => 454,  835 => 526,  815 => 433,  810 => 431,  795 => 422,  790 => 339,  786 => 419,  779 => 333,  770 => 329,  765 => 227,  750 => 398,  745 => 396,  741 => 231,  730 => 210,  721 => 441,  705 => 220,  700 => 213,  696 => 371,  685 => 363,  676 => 207,  660 => 203,  655 => 348,  651 => 279,  640 => 196,  631 => 182,  615 => 326,  606 => 179,  595 => 315,  590 => 313,  586 => 174,  575 => 174,  570 => 238,  566 => 301,  555 => 293,  550 => 161,  546 => 164,  535 => 282,  530 => 216,  526 => 231,  501 => 153,  445 => 186,  436 => 179,  425 => 251,  420 => 246,  416 => 177,  405 => 172,  400 => 161,  396 => 209,  380 => 216,  336 => 143,  325 => 185,  316 => 135,  300 => 129,  175 => 74,  170 => 102,  155 => 63,  948 => 503,  939 => 604,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 756,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 323,  1093 => 320,  1088 => 714,  1077 => 575,  1068 => 569,  1063 => 567,  1059 => 309,  1048 => 558,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 545,  1012 => 540,  994 => 531,  978 => 288,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 473,  868 => 462,  857 => 457,  848 => 451,  843 => 449,  839 => 246,  823 => 438,  819 => 241,  812 => 239,  794 => 424,  783 => 416,  774 => 413,  767 => 409,  758 => 225,  749 => 460,  738 => 218,  729 => 446,  709 => 217,  689 => 204,  682 => 292,  644 => 343,  617 => 328,  415 => 164,  385 => 161,  369 => 210,  332 => 131,  330 => 142,  321 => 92,  287 => 90,  266 => 113,  259 => 148,  257 => 73,  253 => 104,  239 => 83,  226 => 96,  185 => 109,  178 => 75,  113 => 30,  968 => 624,  963 => 622,  959 => 514,  952 => 510,  943 => 501,  938 => 499,  934 => 275,  903 => 479,  894 => 479,  883 => 468,  874 => 556,  838 => 444,  829 => 441,  818 => 433,  809 => 430,  798 => 235,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 326,  753 => 322,  733 => 226,  728 => 226,  724 => 309,  713 => 379,  708 => 208,  704 => 376,  693 => 211,  688 => 211,  684 => 365,  668 => 204,  663 => 350,  659 => 192,  643 => 194,  639 => 187,  628 => 333,  623 => 331,  619 => 265,  608 => 259,  603 => 184,  599 => 319,  583 => 179,  579 => 172,  563 => 298,  559 => 167,  552 => 165,  543 => 383,  538 => 285,  518 => 211,  514 => 149,  494 => 151,  478 => 206,  458 => 186,  454 => 185,  434 => 229,  418 => 290,  414 => 127,  394 => 167,  354 => 91,  334 => 132,  261 => 107,  192 => 61,  923 => 490,  918 => 269,  914 => 587,  907 => 483,  898 => 477,  889 => 474,  878 => 259,  873 => 464,  853 => 453,  842 => 448,  833 => 245,  828 => 440,  824 => 439,  813 => 431,  804 => 428,  793 => 420,  788 => 418,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 320,  743 => 394,  739 => 393,  714 => 217,  703 => 372,  698 => 370,  694 => 200,  687 => 210,  678 => 194,  673 => 288,  653 => 191,  649 => 345,  633 => 335,  613 => 181,  609 => 323,  602 => 258,  593 => 252,  588 => 329,  584 => 251,  564 => 241,  548 => 385,  544 => 288,  528 => 160,  523 => 212,  503 => 265,  499 => 209,  488 => 150,  483 => 211,  463 => 145,  448 => 234,  443 => 232,  439 => 231,  428 => 252,  399 => 123,  383 => 165,  348 => 145,  343 => 145,  339 => 133,  328 => 131,  319 => 215,  299 => 92,  274 => 155,  234 => 131,  223 => 93,  198 => 98,  172 => 74,  152 => 38,  281 => 119,  276 => 117,  272 => 116,  267 => 75,  249 => 106,  231 => 81,  218 => 117,  215 => 123,  213 => 86,  200 => 116,  197 => 64,  195 => 54,  188 => 117,  167 => 52,  366 => 149,  333 => 103,  324 => 130,  317 => 84,  302 => 123,  292 => 79,  286 => 86,  271 => 113,  244 => 101,  190 => 59,  70 => 18,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 339,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 751,  1131 => 330,  1128 => 748,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 326,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 283,  1070 => 282,  1067 => 281,  1065 => 310,  1062 => 279,  1054 => 275,  1051 => 274,  1049 => 273,  1046 => 306,  1038 => 303,  1035 => 676,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 299,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 293,  990 => 247,  987 => 640,  985 => 245,  982 => 244,  974 => 240,  971 => 286,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 278,  940 => 225,  937 => 224,  929 => 496,  926 => 219,  924 => 218,  922 => 492,  919 => 216,  910 => 209,  902 => 208,  896 => 206,  893 => 475,  887 => 203,  884 => 472,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 255,  865 => 189,  864 => 461,  858 => 455,  852 => 184,  849 => 251,  847 => 450,  844 => 532,  834 => 174,  830 => 442,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 238,  803 => 427,  787 => 161,  785 => 232,  782 => 484,  766 => 155,  764 => 406,  761 => 469,  744 => 319,  732 => 217,  725 => 385,  723 => 383,  718 => 381,  715 => 218,  697 => 140,  695 => 213,  692 => 138,  683 => 201,  680 => 208,  677 => 361,  671 => 129,  669 => 197,  664 => 190,  661 => 399,  658 => 189,  648 => 194,  646 => 197,  638 => 274,  635 => 191,  632 => 185,  629 => 334,  627 => 268,  624 => 190,  618 => 179,  610 => 261,  605 => 258,  601 => 108,  596 => 253,  594 => 180,  591 => 419,  582 => 243,  576 => 177,  573 => 245,  571 => 173,  568 => 300,  558 => 170,  556 => 238,  553 => 170,  545 => 219,  542 => 164,  539 => 231,  536 => 160,  534 => 217,  531 => 163,  524 => 367,  513 => 269,  510 => 157,  508 => 209,  505 => 267,  489 => 66,  486 => 194,  484 => 141,  481 => 207,  476 => 192,  470 => 203,  465 => 245,  456 => 143,  452 => 313,  449 => 190,  441 => 187,  438 => 136,  422 => 130,  419 => 175,  410 => 163,  406 => 173,  403 => 171,  395 => 123,  389 => 114,  378 => 154,  376 => 160,  372 => 159,  363 => 188,  359 => 151,  356 => 147,  347 => 90,  344 => 193,  338 => 145,  329 => 87,  323 => 126,  318 => 136,  311 => 135,  308 => 132,  306 => 124,  303 => 93,  301 => 202,  296 => 154,  293 => 192,  290 => 118,  288 => 120,  280 => 116,  275 => 115,  265 => 108,  260 => 74,  250 => 71,  232 => 117,  222 => 61,  211 => 72,  206 => 83,  194 => 97,  181 => 56,  174 => 103,  161 => 76,  146 => 56,  126 => 45,  114 => 47,  104 => 28,  76 => 29,  262 => 110,  255 => 147,  242 => 98,  237 => 99,  233 => 94,  191 => 77,  150 => 52,  127 => 49,  124 => 47,  118 => 34,  100 => 46,  81 => 21,  58 => 11,  537 => 166,  532 => 155,  527 => 157,  519 => 365,  516 => 221,  507 => 217,  504 => 217,  498 => 145,  492 => 210,  490 => 152,  485 => 203,  479 => 204,  477 => 203,  473 => 201,  468 => 138,  464 => 187,  459 => 242,  455 => 196,  451 => 139,  446 => 165,  433 => 184,  431 => 135,  426 => 156,  424 => 180,  421 => 130,  412 => 126,  408 => 126,  404 => 162,  401 => 172,  392 => 169,  388 => 156,  367 => 157,  358 => 112,  352 => 149,  345 => 145,  342 => 104,  340 => 192,  335 => 88,  326 => 139,  320 => 85,  315 => 136,  310 => 83,  307 => 130,  291 => 103,  284 => 117,  277 => 184,  270 => 154,  263 => 112,  256 => 77,  251 => 105,  248 => 155,  245 => 85,  236 => 102,  225 => 91,  216 => 60,  212 => 90,  205 => 71,  186 => 59,  184 => 45,  180 => 86,  160 => 71,  153 => 59,  134 => 79,  129 => 37,  97 => 33,  90 => 33,  77 => 20,  34 => 8,  84 => 32,  65 => 17,  480 => 193,  474 => 146,  469 => 188,  461 => 197,  457 => 193,  453 => 191,  444 => 190,  440 => 186,  437 => 162,  435 => 304,  430 => 127,  427 => 183,  423 => 179,  413 => 202,  409 => 173,  407 => 131,  402 => 168,  398 => 170,  393 => 157,  387 => 166,  384 => 217,  381 => 163,  379 => 114,  374 => 196,  368 => 190,  365 => 97,  362 => 110,  360 => 148,  355 => 152,  341 => 89,  337 => 145,  322 => 86,  314 => 179,  312 => 125,  309 => 96,  305 => 127,  298 => 126,  294 => 124,  285 => 78,  283 => 118,  278 => 86,  268 => 111,  264 => 84,  258 => 109,  252 => 157,  247 => 157,  241 => 120,  229 => 96,  220 => 90,  214 => 87,  177 => 44,  169 => 101,  140 => 57,  132 => 33,  128 => 63,  107 => 45,  61 => 13,  273 => 76,  269 => 111,  254 => 106,  243 => 103,  240 => 103,  238 => 65,  235 => 64,  230 => 130,  227 => 135,  224 => 66,  221 => 109,  219 => 124,  217 => 92,  208 => 86,  204 => 68,  179 => 70,  159 => 64,  143 => 47,  135 => 52,  119 => 31,  102 => 28,  71 => 19,  67 => 20,  63 => 25,  59 => 15,  38 => 5,  94 => 36,  89 => 23,  85 => 32,  75 => 20,  68 => 23,  56 => 19,  87 => 30,  21 => 2,  26 => 4,  93 => 25,  88 => 23,  78 => 29,  46 => 7,  27 => 5,  44 => 7,  31 => 4,  28 => 3,  201 => 57,  196 => 119,  183 => 76,  171 => 43,  166 => 86,  163 => 98,  158 => 41,  156 => 40,  151 => 44,  142 => 40,  138 => 36,  136 => 35,  121 => 34,  117 => 58,  105 => 49,  91 => 24,  62 => 18,  49 => 10,  24 => 3,  25 => 7,  19 => 1,  79 => 27,  72 => 31,  69 => 19,  47 => 10,  40 => 8,  37 => 6,  22 => 2,  246 => 104,  157 => 87,  145 => 37,  139 => 68,  131 => 66,  123 => 61,  120 => 45,  115 => 71,  111 => 55,  108 => 43,  101 => 27,  98 => 40,  96 => 33,  83 => 21,  74 => 28,  66 => 17,  55 => 14,  52 => 13,  50 => 7,  43 => 6,  41 => 11,  35 => 4,  32 => 3,  29 => 9,  209 => 85,  203 => 58,  199 => 80,  193 => 117,  189 => 110,  187 => 73,  182 => 78,  176 => 72,  173 => 72,  168 => 54,  164 => 53,  162 => 63,  154 => 63,  149 => 86,  147 => 59,  144 => 56,  141 => 54,  133 => 51,  130 => 40,  125 => 32,  122 => 47,  116 => 44,  112 => 40,  109 => 30,  106 => 29,  103 => 16,  99 => 27,  95 => 39,  92 => 50,  86 => 22,  82 => 28,  80 => 30,  73 => 26,  64 => 24,  60 => 17,  57 => 14,  54 => 20,  51 => 11,  48 => 12,  45 => 12,  42 => 7,  39 => 16,  36 => 5,  33 => 4,  30 => 3,);
    }
}
