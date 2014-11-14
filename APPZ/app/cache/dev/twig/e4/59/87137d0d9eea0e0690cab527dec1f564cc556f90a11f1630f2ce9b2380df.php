<?php

/* BcTicCamIpalBundle:Encuesta:show.html.twig */
class __TwigTemplate_e45987137d0d9eea0e0690cab527dec1f564cc556f90a11f1630f2ce9b2380df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_pdf.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
     <div class=\"col-md-3 text-center\">
       <img alt=\"logo\" style=\"height:65px; margin-top:7px;\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"/>
     </div>  
     <div class=\"col-md-9\">
       <h3 class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("INSPECCIÓN DE SEGURIDAD"), "html", null, true);
        echo "</h3>
       <h5 class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PREVENCIÓN DE RIESGOS CAM"), "html", null, true);
        echo "</h5>
     </div>  
  </div>
  <br/>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered \">
        <tbody>
          <tr>
            <th colspan=\"3\" class=\"text-center\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ANTECEDENTES GENERALES"), "html", null, true);
        echo "</th>
            <th style=\"width: 25%;\">Nº ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</th>
          </tr> 
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Empresa"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "empresa"), "nombre"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Área de Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "area"), "nombre"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td style=\"width: 25%;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fecha"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "d/m/Y"), "html", null, true);
        echo "</td>
            <td style=\"width: 25%;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hora"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hora"), "h:i"), "html", null, true);
        echo "</td>
            <td colspan=\"2\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actividad"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actividad")), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td colspan=\"3\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lugar de Trabajo"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lugarDeTrabajo")), "html", null, true);
        echo "</th>
            <td style=\"width: 25%;\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nº de empleados"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numDeEmpleados"), "html", null, true);
        echo "</th>
          </tr>
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nombre Inspector"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "inspector"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contrato"), "html", null, true);
        echo ": #";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "numero"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "nombre"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supervisor de Trabajo"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "supervisorFacade"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Subgerencia Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "subGerencia"), "nombre"), "html", null, true);
        echo "</td>
          </tr> 
          <tr>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gerencia Cam"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "subGerencia"), "gerencia"), "nombre"), "html", null, true);
        echo "</td>
            <td colspan=\"2\" style=\"width: 50%;\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mandante"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrato"), "mandante"), "name"), "html", null, true);
        echo "</td>
          </tr>                                  
        </tbody>
      </table>
    </div>
  </div>

  ";
        // line 52
        $template = $this->env->resolveTemplate((("BcTicCamIpalBundle:Encuesta:show_" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "key")) . ".html.twig"));
        $template->display($context);
        // line 53
        echo "
   <div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered \">
        <tbody>
          <tr>
            <th colspan=\"3\">I-12 ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones"), "html", null, true);
        echo ":</th>
          </tr> 
          <tr>
            <td colspan=\"3\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observaciones"), "html", null, true);
        echo "<br/></td>
          </tr> 
          <tr>
            <td style=\"width: 33%\">
              ";
        // line 66
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file1")) > 5)) {
            // line 67
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file1")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 69
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "</i>
               ";
        }
        // line 71
        echo "            </td>
            <td style=\"width: 33%\">
              ";
        // line 73
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file2")) > 5)) {
            // line 74
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file2")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 76
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2"), "html", null, true);
            echo "</i>
               ";
        }
        // line 78
        echo "            </td>
            <td style=\"width: 34%\">
              ";
        // line 80
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file3")) > 5)) {
            // line 81
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "file3")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 3"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 83
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 3"), "html", null, true);
            echo "</i>
               ";
        }
        // line 85
        echo "            </td>
          </tr>                                             
        </tbody>
      </table>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered \">
        <tbody>
          <tr>
            <th colspan=\"3\">I-13 ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cierre"), "html", null, true);
        echo ":</th>
          </tr> 
          <tr>
            <td colspan=\"3\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cierre"), "html", null, true);
        echo "<br/></td>
          </tr>           
          <tr>
            <td style=\"width: 33%\">
               ";
        // line 104
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre1")) > 5)) {
            // line 105
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre1")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1 DE CIERRE"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 107
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 1"), "html", null, true);
            echo "</i>
               ";
        }
        // line 108
        echo "</td>
            <td style=\"width: 33%\">
              ";
        // line 110
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre2")) > 5)) {
            // line 111
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fileCierre2")), "resize", array(0 => 320), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2 DE CIERRE"), "html", null, true);
            echo "\"/>
               ";
        } else {
            // line 113
            echo "                 <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("NO EXISTE ARCHIVO 2"), "html", null, true);
            echo "</i>
               ";
        }
        // line 115
        echo "            </td>
            <td style=\"width: 34%\">&nbsp;</td> 
          </tr>                                                       
        </tbody>
      </table>
    </div>
  </div>
  
";
    }

    // line 125
    public function block_title($context, array $blocks = array())
    {
        // line 126
        echo "IPAL-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Ymd"), "html", null, true);
        echo "
";
    }

    // line 131
    public function block_js($context, array $blocks = array())
    {
        // line 132
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
      \$(document).ready( function () { 
        window.print();
      });
    </script>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 107,  1176 => 774,  1169 => 770,  1167 => 769,  1162 => 766,  1157 => 764,  1151 => 761,  1142 => 755,  1138 => 753,  1132 => 750,  1121 => 743,  1119 => 742,  1083 => 712,  1064 => 696,  1040 => 678,  1016 => 660,  1011 => 658,  992 => 642,  944 => 606,  927 => 597,  881 => 560,  859 => 544,  825 => 518,  821 => 516,  701 => 427,  681 => 413,  512 => 268,  506 => 265,  500 => 262,  466 => 234,  417 => 203,  397 => 198,  370 => 174,  364 => 251,  165 => 52,  53 => 12,  297 => 205,  295 => 172,  137 => 69,  899 => 575,  892 => 474,  863 => 457,  854 => 454,  717 => 380,  699 => 371,  679 => 360,  672 => 356,  654 => 347,  634 => 336,  598 => 315,  589 => 312,  578 => 304,  569 => 301,  562 => 297,  533 => 280,  497 => 262,  885 => 470,  880 => 468,  876 => 467,  860 => 457,  855 => 455,  851 => 454,  835 => 526,  815 => 433,  810 => 431,  795 => 422,  790 => 489,  786 => 419,  779 => 415,  770 => 475,  765 => 407,  750 => 398,  745 => 396,  741 => 455,  730 => 387,  721 => 441,  705 => 374,  700 => 372,  696 => 371,  685 => 363,  676 => 360,  660 => 350,  655 => 348,  651 => 347,  640 => 339,  631 => 336,  615 => 326,  606 => 323,  595 => 315,  590 => 313,  586 => 327,  575 => 319,  570 => 302,  566 => 301,  555 => 293,  550 => 291,  546 => 290,  535 => 282,  530 => 280,  526 => 279,  501 => 266,  445 => 234,  436 => 231,  425 => 205,  420 => 221,  416 => 220,  405 => 200,  400 => 210,  396 => 209,  380 => 199,  336 => 176,  325 => 168,  316 => 165,  300 => 155,  175 => 92,  170 => 67,  155 => 76,  948 => 503,  939 => 604,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 756,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 590,  1093 => 582,  1088 => 714,  1077 => 575,  1068 => 569,  1063 => 567,  1059 => 694,  1048 => 558,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 545,  1012 => 540,  994 => 531,  978 => 521,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 473,  868 => 462,  857 => 457,  848 => 451,  843 => 449,  839 => 448,  823 => 438,  819 => 515,  812 => 433,  794 => 424,  783 => 416,  774 => 413,  767 => 409,  758 => 403,  749 => 460,  738 => 392,  729 => 446,  709 => 432,  689 => 418,  682 => 363,  644 => 343,  617 => 328,  415 => 176,  385 => 201,  369 => 253,  332 => 131,  330 => 139,  321 => 135,  287 => 186,  266 => 111,  259 => 97,  257 => 107,  253 => 105,  239 => 83,  226 => 93,  185 => 74,  178 => 75,  113 => 42,  968 => 624,  963 => 622,  959 => 514,  952 => 510,  943 => 501,  938 => 499,  934 => 501,  903 => 479,  894 => 479,  883 => 468,  874 => 556,  838 => 444,  829 => 441,  818 => 433,  809 => 430,  798 => 422,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 407,  753 => 398,  733 => 387,  728 => 385,  724 => 384,  713 => 379,  708 => 374,  704 => 376,  693 => 368,  688 => 363,  684 => 365,  668 => 355,  663 => 350,  659 => 352,  643 => 339,  639 => 341,  628 => 333,  623 => 331,  619 => 330,  608 => 322,  603 => 320,  599 => 319,  583 => 309,  579 => 308,  563 => 298,  559 => 297,  552 => 293,  543 => 287,  538 => 285,  518 => 274,  514 => 273,  494 => 262,  478 => 252,  458 => 241,  454 => 240,  434 => 229,  418 => 219,  414 => 218,  394 => 167,  334 => 156,  261 => 131,  192 => 95,  923 => 490,  918 => 488,  914 => 587,  907 => 483,  898 => 477,  889 => 474,  878 => 466,  873 => 464,  853 => 453,  842 => 448,  833 => 442,  828 => 440,  824 => 439,  813 => 431,  804 => 428,  793 => 420,  788 => 418,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 396,  743 => 394,  739 => 393,  714 => 380,  703 => 372,  698 => 370,  694 => 369,  687 => 365,  678 => 359,  673 => 357,  653 => 346,  649 => 345,  633 => 335,  613 => 324,  609 => 323,  602 => 319,  593 => 313,  588 => 311,  584 => 310,  564 => 299,  548 => 289,  544 => 288,  528 => 278,  523 => 276,  503 => 265,  499 => 264,  488 => 256,  483 => 254,  463 => 243,  448 => 234,  443 => 232,  439 => 231,  428 => 223,  399 => 209,  383 => 199,  348 => 179,  343 => 177,  339 => 232,  328 => 153,  319 => 165,  299 => 154,  274 => 105,  234 => 119,  223 => 111,  198 => 98,  172 => 74,  152 => 69,  281 => 183,  276 => 114,  272 => 104,  267 => 105,  249 => 102,  231 => 81,  218 => 117,  215 => 84,  213 => 115,  200 => 105,  197 => 119,  195 => 79,  188 => 75,  167 => 66,  354 => 185,  346 => 162,  333 => 197,  324 => 191,  317 => 187,  302 => 113,  292 => 110,  286 => 168,  271 => 113,  244 => 101,  190 => 98,  70 => 26,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 763,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 751,  1131 => 309,  1128 => 748,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 299,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 283,  1070 => 282,  1067 => 281,  1065 => 280,  1062 => 279,  1054 => 275,  1051 => 274,  1049 => 273,  1046 => 272,  1038 => 268,  1035 => 676,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 544,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 532,  990 => 247,  987 => 640,  985 => 245,  982 => 244,  974 => 240,  971 => 239,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 226,  940 => 225,  937 => 224,  929 => 496,  926 => 219,  924 => 218,  922 => 492,  919 => 216,  910 => 209,  902 => 208,  896 => 206,  893 => 475,  887 => 203,  884 => 472,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 190,  865 => 189,  864 => 461,  858 => 455,  852 => 184,  849 => 452,  847 => 450,  844 => 532,  834 => 174,  830 => 442,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 430,  803 => 427,  787 => 161,  785 => 160,  782 => 484,  766 => 155,  764 => 406,  761 => 469,  744 => 395,  732 => 389,  725 => 385,  723 => 383,  718 => 381,  715 => 141,  697 => 140,  695 => 139,  692 => 138,  683 => 361,  680 => 361,  677 => 361,  671 => 129,  669 => 404,  664 => 354,  661 => 399,  658 => 348,  648 => 344,  646 => 122,  638 => 337,  635 => 337,  632 => 119,  629 => 334,  627 => 332,  624 => 332,  618 => 326,  610 => 324,  605 => 109,  601 => 108,  596 => 107,  594 => 106,  591 => 105,  582 => 100,  576 => 98,  573 => 302,  571 => 318,  568 => 300,  558 => 308,  556 => 90,  553 => 291,  545 => 85,  542 => 84,  539 => 286,  536 => 82,  534 => 284,  531 => 80,  524 => 277,  513 => 269,  510 => 269,  508 => 266,  505 => 267,  489 => 66,  486 => 65,  484 => 64,  481 => 255,  476 => 60,  470 => 247,  465 => 245,  456 => 53,  452 => 52,  449 => 51,  441 => 49,  438 => 230,  422 => 179,  419 => 220,  410 => 37,  406 => 172,  403 => 210,  395 => 33,  389 => 31,  378 => 160,  376 => 198,  372 => 23,  363 => 188,  359 => 187,  356 => 187,  347 => 16,  344 => 234,  338 => 175,  329 => 8,  323 => 126,  318 => 164,  311 => 493,  308 => 115,  306 => 477,  303 => 155,  301 => 457,  296 => 154,  293 => 448,  290 => 446,  288 => 108,  280 => 144,  275 => 115,  265 => 100,  260 => 107,  250 => 104,  232 => 117,  222 => 133,  211 => 74,  206 => 83,  194 => 97,  181 => 87,  174 => 87,  161 => 76,  146 => 56,  126 => 54,  114 => 18,  104 => 17,  76 => 29,  262 => 109,  255 => 97,  242 => 99,  237 => 130,  233 => 95,  191 => 67,  150 => 68,  127 => 48,  124 => 53,  118 => 50,  100 => 41,  81 => 46,  58 => 14,  537 => 284,  532 => 155,  527 => 139,  519 => 271,  516 => 16,  507 => 10,  504 => 266,  498 => 263,  492 => 257,  490 => 258,  485 => 256,  479 => 253,  477 => 174,  473 => 173,  468 => 245,  464 => 170,  459 => 242,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 180,  421 => 204,  412 => 151,  408 => 212,  404 => 171,  401 => 199,  392 => 32,  388 => 201,  367 => 155,  358 => 168,  352 => 165,  345 => 179,  342 => 123,  340 => 159,  335 => 132,  326 => 115,  320 => 125,  315 => 3,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 116,  270 => 106,  263 => 133,  256 => 132,  251 => 103,  248 => 103,  245 => 85,  236 => 88,  225 => 78,  216 => 107,  212 => 126,  205 => 71,  186 => 97,  184 => 76,  180 => 89,  160 => 71,  153 => 45,  134 => 64,  129 => 62,  97 => 36,  90 => 36,  77 => 20,  34 => 4,  84 => 15,  65 => 14,  480 => 162,  474 => 251,  469 => 158,  461 => 244,  457 => 228,  453 => 151,  444 => 50,  440 => 214,  437 => 162,  435 => 212,  430 => 44,  427 => 143,  423 => 221,  413 => 202,  409 => 201,  407 => 131,  402 => 130,  398 => 168,  393 => 126,  387 => 164,  384 => 28,  381 => 140,  379 => 198,  374 => 196,  368 => 190,  365 => 190,  362 => 110,  360 => 188,  355 => 106,  341 => 144,  337 => 103,  322 => 101,  314 => 132,  312 => 131,  309 => 205,  305 => 173,  298 => 153,  294 => 111,  285 => 146,  283 => 144,  278 => 142,  268 => 153,  264 => 84,  258 => 131,  252 => 96,  247 => 372,  241 => 120,  229 => 80,  220 => 111,  214 => 108,  177 => 70,  169 => 67,  140 => 65,  132 => 62,  128 => 63,  107 => 51,  61 => 20,  273 => 411,  269 => 111,  254 => 130,  243 => 89,  240 => 98,  238 => 120,  235 => 97,  230 => 87,  227 => 135,  224 => 86,  221 => 109,  219 => 76,  217 => 85,  208 => 85,  204 => 81,  179 => 93,  159 => 83,  143 => 40,  135 => 53,  119 => 61,  102 => 37,  71 => 30,  67 => 15,  63 => 20,  59 => 19,  38 => 9,  94 => 16,  89 => 28,  85 => 30,  75 => 24,  68 => 16,  56 => 11,  87 => 27,  21 => 2,  26 => 3,  93 => 43,  88 => 29,  78 => 21,  46 => 7,  27 => 8,  44 => 7,  31 => 3,  28 => 4,  201 => 98,  196 => 96,  183 => 93,  171 => 67,  166 => 86,  163 => 72,  158 => 62,  156 => 74,  151 => 77,  142 => 62,  138 => 65,  136 => 59,  121 => 62,  117 => 36,  105 => 49,  91 => 30,  62 => 24,  49 => 7,  24 => 4,  25 => 7,  19 => 1,  79 => 28,  72 => 31,  69 => 23,  47 => 10,  40 => 11,  37 => 6,  22 => 2,  246 => 151,  157 => 56,  145 => 74,  139 => 41,  131 => 66,  123 => 37,  120 => 58,  115 => 43,  111 => 50,  108 => 39,  101 => 48,  98 => 35,  96 => 39,  83 => 27,  74 => 14,  66 => 15,  55 => 11,  52 => 17,  50 => 8,  43 => 9,  41 => 11,  35 => 4,  32 => 6,  29 => 4,  209 => 73,  203 => 100,  199 => 69,  193 => 73,  189 => 66,  187 => 75,  182 => 62,  176 => 59,  173 => 68,  168 => 53,  164 => 64,  162 => 57,  154 => 60,  149 => 58,  147 => 44,  144 => 63,  141 => 65,  133 => 40,  130 => 56,  125 => 20,  122 => 60,  116 => 57,  112 => 57,  109 => 33,  106 => 44,  103 => 32,  99 => 46,  95 => 29,  92 => 42,  86 => 39,  82 => 32,  80 => 19,  73 => 19,  64 => 13,  60 => 21,  57 => 22,  54 => 13,  51 => 19,  48 => 7,  45 => 12,  42 => 13,  39 => 7,  36 => 10,  33 => 4,  30 => 3,);
    }
}