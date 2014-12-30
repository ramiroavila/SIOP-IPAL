<?php

/* BcTicCamIpalBundle::edit_observacion_de_comportamiento.html.twig */
class __TwigTemplate_8a0de77fedefc5cfd4cc1ebedf1bb9ccae3fcdf967ac97d3101577bfb3df38f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div id=\"errors\"></div>

  
    <ul class=\"nav nav-tabs\">
      <li class=\"active hidden-xs\"><a class=\"hidden-xs\" href=\"#antecedentes\" data-toggle=\"tab\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Antecedentes generales"), "html", null, true);
        echo "</a></li>
      <li class=\"hidden-xs\"><a class=\"hidden-xs\" href=\"#ingreso\" data-toggle=\"tab\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Áreas/Observaciones"), "html", null, true);
        echo "</a></li>

      <li class=\"active visible-xs\"><a class=\"visible-xs\" href=\"#antecedentes\" data-toggle=\"tab\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Antecedentes"), "html", null, true);
        echo "</a></li>
      <li class=\"visible-xs\"><a class=\"visible-xs\" href=\"#ingreso\" data-toggle=\"tab\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Áreas"), "html", null, true);
        echo "</a></li>
    </ul>

    <div class=\"container\" style=\"width: 98%;\">
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"antecedentes\">
        <br/>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresa"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrato"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area"), 'row');
        echo "
          </div>
        </div>
        
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividad"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "servicio"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parteDeLaPlanta"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerencia"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroObservados"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subGerencia"), 'row');
        echo "
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cttaSubcont"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mandante"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "inspector"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "supervisor_facade"), 'row');
        echo "
            <div class=\"hidden-xs hidden-md hidden-lg\">";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "supervisor"), 'row');
        echo "</div>
          </div>
          <div class=\"col-sm-6\">
            <div>
              ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comentarios"), 'row');
        echo "
              ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prevencionista"), 'row');
        echo "
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFile1"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-11\">
            <div class=\"form-group\">
              ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionesClimaticas"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
              <div class=\"col-sm-10\">
                ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionesClimaticas"), 'errors');
        echo "
                ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionesClimaticas"), 'widget');
        echo "
              </div>
            </div>
          </div>
        </div>        

        <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <div class=\"col-sm-offset-3 col-sm-9\">
                  <button class=\"btn btn-default btn-xs hidden-xs\" type=\"button\" id=\"bctic_camipalbundle_observacion_de_comportamiento_next_1\" name=\"bctic_camipalbundle_observacion_de_comportamiento_next_1\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                  <button class=\"btn btn-default btn-xs visible-xs\" type=\"button\" id=\"bctic_camipalbundle_observacion_de_comportamiento_next_1_1\" name=\"bctic_camipalbundle_observacion_de_comportamiento_next_1\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                </div>
              </div>
            </div>
            <div class=\"col-sm-6\">
            </div>
          </div>

   
        </div> <!-- END TAB ANTECEDENTES -->

        <div class=\"tab-pane survey\" id=\"ingreso\">

          <br/>
          
          ";
        // line 152
        $template = $this->env->resolveTemplate((("BcTicCamIpalBundle::edit_observacion_de_comportamiento_format." . (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format"))) . ".twig"));
        $template->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 153
        echo "          
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\"></div>
          </div>

        </div> <!-- EN TAB SURVEY -->
        
        
      </div> <!-- END TAB CONTENT -->
    </div> <!-- END CONTAINER -->

    ";
        // line 168
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <hr/>

    ";
        // line 172
        $this->displayBlock('js', $context, $blocks);
        // line 205
        echo "    
";
    }

    // line 172
    public function block_js($context, array $blocks = array())
    {
        // line 173
        echo "      <script type=\"text/javascript\"> 
      
        \$('#bctic_camipalbundle_observacion_de_comportamiento_next_1').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#ingreso\"]').tab('show'); // Select tab by name
        });

         \$('#bctic_camipalbundle_observacion_de_comportamiento_next_1_1').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#ingreso\"]').tab('show'); // Select tab by name
        });

        \$(\"div.registro_de_observacion input[type='radio']\").each(function( index ) {
          //Hago el bind:
          \$(this).bind('change', function (event) {
            
            if (\$(this).is(':checked')) {
              if (\$(this).val() == 1) {
                \$(this).parent().parent().parent().find(\"textarea\").removeAttr(\"required\");
              }
              if (\$(this).val() == 2) {
                \$(this).parent().parent().parent().find(\"textarea\").attr(\"required\", \"required\");
              }
              if (\$(this).val() == 3) {
                \$(this).parent().parent().parent().find(\"textarea\").removeAttr(\"required\")
              }
            }

          });
          \$(this).change();
        });


      </script>
    ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::edit_observacion_de_comportamiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 205,  295 => 172,  137 => 69,  899 => 478,  892 => 474,  863 => 457,  854 => 454,  717 => 380,  699 => 371,  679 => 360,  672 => 356,  654 => 347,  634 => 336,  598 => 315,  589 => 312,  578 => 304,  569 => 301,  562 => 297,  533 => 280,  497 => 262,  885 => 470,  880 => 468,  876 => 467,  860 => 457,  855 => 455,  851 => 454,  835 => 444,  815 => 433,  810 => 431,  795 => 422,  790 => 420,  786 => 419,  779 => 415,  770 => 409,  765 => 407,  750 => 398,  745 => 396,  741 => 395,  730 => 387,  721 => 384,  705 => 374,  700 => 372,  696 => 371,  685 => 363,  676 => 360,  660 => 350,  655 => 348,  651 => 347,  640 => 339,  631 => 336,  615 => 326,  606 => 323,  595 => 315,  590 => 313,  586 => 312,  575 => 304,  570 => 302,  566 => 301,  555 => 293,  550 => 291,  546 => 290,  535 => 282,  530 => 280,  526 => 279,  501 => 266,  445 => 234,  436 => 231,  425 => 223,  420 => 221,  416 => 220,  405 => 212,  400 => 210,  396 => 209,  380 => 199,  336 => 176,  325 => 168,  316 => 165,  300 => 155,  175 => 92,  170 => 67,  155 => 76,  948 => 503,  939 => 500,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 612,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 590,  1093 => 582,  1088 => 580,  1077 => 575,  1068 => 569,  1063 => 567,  1059 => 566,  1048 => 558,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 545,  1012 => 540,  994 => 531,  978 => 521,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 473,  868 => 462,  857 => 457,  848 => 451,  843 => 449,  839 => 448,  823 => 438,  819 => 437,  812 => 433,  794 => 424,  783 => 416,  774 => 413,  767 => 409,  758 => 403,  749 => 400,  738 => 392,  729 => 389,  709 => 378,  689 => 367,  682 => 363,  644 => 343,  617 => 328,  415 => 176,  385 => 201,  369 => 156,  332 => 140,  330 => 139,  321 => 135,  287 => 120,  266 => 111,  259 => 108,  257 => 107,  253 => 105,  239 => 99,  226 => 93,  185 => 74,  178 => 71,  113 => 42,  968 => 517,  963 => 515,  959 => 514,  952 => 510,  943 => 501,  938 => 499,  934 => 501,  903 => 479,  894 => 479,  883 => 468,  874 => 465,  838 => 444,  829 => 441,  818 => 433,  809 => 430,  798 => 422,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 407,  753 => 398,  733 => 387,  728 => 385,  724 => 384,  713 => 379,  708 => 374,  704 => 376,  693 => 368,  688 => 363,  684 => 365,  668 => 355,  663 => 350,  659 => 352,  643 => 339,  639 => 341,  628 => 333,  623 => 331,  619 => 330,  608 => 322,  603 => 320,  599 => 319,  583 => 309,  579 => 308,  563 => 298,  559 => 297,  552 => 293,  543 => 287,  538 => 285,  518 => 274,  514 => 273,  494 => 262,  478 => 252,  458 => 241,  454 => 240,  434 => 229,  418 => 219,  414 => 218,  394 => 167,  334 => 174,  261 => 131,  192 => 95,  923 => 490,  918 => 488,  914 => 487,  907 => 483,  898 => 477,  889 => 474,  878 => 466,  873 => 464,  853 => 453,  842 => 448,  833 => 442,  828 => 440,  824 => 439,  813 => 431,  804 => 428,  793 => 420,  788 => 418,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 396,  743 => 394,  739 => 393,  714 => 380,  703 => 372,  698 => 370,  694 => 369,  687 => 365,  678 => 359,  673 => 357,  653 => 346,  649 => 345,  633 => 335,  613 => 324,  609 => 323,  602 => 319,  593 => 313,  588 => 311,  584 => 310,  564 => 299,  548 => 289,  544 => 288,  528 => 278,  523 => 276,  503 => 265,  499 => 264,  488 => 256,  483 => 254,  463 => 243,  448 => 234,  443 => 232,  439 => 231,  428 => 223,  399 => 209,  383 => 199,  348 => 179,  343 => 177,  339 => 176,  328 => 168,  319 => 165,  299 => 154,  274 => 157,  234 => 119,  223 => 111,  198 => 98,  172 => 84,  152 => 73,  281 => 116,  276 => 114,  272 => 112,  267 => 110,  249 => 102,  231 => 94,  218 => 117,  215 => 87,  213 => 115,  200 => 105,  197 => 79,  195 => 78,  188 => 75,  167 => 66,  354 => 185,  346 => 207,  333 => 197,  324 => 191,  317 => 187,  302 => 172,  292 => 150,  286 => 168,  271 => 113,  244 => 101,  190 => 98,  70 => 24,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 317,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 310,  1131 => 309,  1128 => 602,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 299,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 283,  1070 => 282,  1067 => 281,  1065 => 280,  1062 => 279,  1054 => 275,  1051 => 274,  1049 => 273,  1046 => 272,  1038 => 268,  1035 => 267,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 544,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 532,  990 => 247,  987 => 527,  985 => 245,  982 => 244,  974 => 240,  971 => 239,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 226,  940 => 225,  937 => 224,  929 => 496,  926 => 219,  924 => 218,  922 => 492,  919 => 216,  910 => 209,  902 => 208,  896 => 206,  893 => 475,  887 => 203,  884 => 472,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 190,  865 => 189,  864 => 461,  858 => 455,  852 => 184,  849 => 452,  847 => 450,  844 => 450,  834 => 174,  830 => 442,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 430,  803 => 427,  787 => 161,  785 => 160,  782 => 415,  766 => 155,  764 => 406,  761 => 406,  744 => 395,  732 => 389,  725 => 385,  723 => 383,  718 => 381,  715 => 141,  697 => 140,  695 => 139,  692 => 138,  683 => 361,  680 => 361,  677 => 361,  671 => 129,  669 => 356,  664 => 354,  661 => 126,  658 => 348,  648 => 344,  646 => 122,  638 => 337,  635 => 337,  632 => 119,  629 => 334,  627 => 332,  624 => 332,  618 => 326,  610 => 324,  605 => 109,  601 => 108,  596 => 107,  594 => 106,  591 => 105,  582 => 100,  576 => 98,  573 => 302,  571 => 96,  568 => 300,  558 => 91,  556 => 90,  553 => 291,  545 => 85,  542 => 84,  539 => 286,  536 => 82,  534 => 284,  531 => 80,  524 => 277,  513 => 269,  510 => 269,  508 => 267,  505 => 267,  489 => 66,  486 => 65,  484 => 64,  481 => 255,  476 => 60,  470 => 247,  465 => 245,  456 => 53,  452 => 52,  449 => 51,  441 => 49,  438 => 230,  422 => 179,  419 => 220,  410 => 37,  406 => 172,  403 => 210,  395 => 33,  389 => 31,  378 => 160,  376 => 198,  372 => 23,  363 => 188,  359 => 187,  356 => 187,  347 => 16,  344 => 15,  338 => 175,  329 => 8,  323 => 166,  318 => 164,  311 => 493,  308 => 157,  306 => 477,  303 => 155,  301 => 457,  296 => 154,  293 => 448,  290 => 446,  288 => 168,  280 => 144,  275 => 115,  265 => 152,  260 => 107,  250 => 104,  232 => 117,  222 => 118,  211 => 108,  206 => 83,  194 => 97,  181 => 87,  174 => 87,  161 => 76,  146 => 56,  126 => 152,  114 => 105,  104 => 38,  76 => 30,  262 => 109,  255 => 378,  242 => 99,  237 => 130,  233 => 95,  191 => 76,  150 => 58,  127 => 48,  124 => 47,  118 => 44,  100 => 36,  81 => 46,  58 => 18,  537 => 284,  532 => 155,  527 => 139,  519 => 275,  516 => 16,  507 => 10,  504 => 266,  498 => 263,  492 => 180,  490 => 258,  485 => 256,  479 => 253,  477 => 174,  473 => 173,  468 => 245,  464 => 170,  459 => 242,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 180,  421 => 154,  412 => 151,  408 => 212,  404 => 171,  401 => 147,  392 => 32,  388 => 201,  367 => 155,  358 => 151,  352 => 148,  345 => 179,  342 => 123,  340 => 177,  335 => 119,  326 => 115,  320 => 166,  315 => 3,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 116,  270 => 410,  263 => 133,  256 => 132,  251 => 103,  248 => 103,  245 => 135,  236 => 96,  225 => 82,  216 => 107,  212 => 106,  205 => 84,  186 => 97,  184 => 258,  180 => 89,  160 => 83,  153 => 75,  134 => 159,  129 => 62,  97 => 36,  90 => 32,  77 => 33,  34 => 8,  84 => 47,  65 => 13,  480 => 162,  474 => 251,  469 => 158,  461 => 244,  457 => 153,  453 => 151,  444 => 50,  440 => 232,  437 => 162,  435 => 47,  430 => 44,  427 => 143,  423 => 221,  413 => 175,  409 => 132,  407 => 131,  402 => 130,  398 => 168,  393 => 126,  387 => 164,  384 => 28,  381 => 140,  379 => 198,  374 => 196,  368 => 190,  365 => 190,  362 => 110,  360 => 188,  355 => 106,  341 => 144,  337 => 103,  322 => 101,  314 => 132,  312 => 131,  309 => 97,  305 => 173,  298 => 153,  294 => 123,  285 => 146,  283 => 144,  278 => 142,  268 => 153,  264 => 84,  258 => 131,  252 => 128,  247 => 372,  241 => 120,  229 => 117,  220 => 111,  214 => 108,  177 => 70,  169 => 67,  140 => 54,  132 => 62,  128 => 49,  107 => 51,  61 => 20,  273 => 411,  269 => 111,  254 => 130,  243 => 122,  240 => 98,  238 => 120,  235 => 97,  230 => 95,  227 => 92,  224 => 91,  221 => 109,  219 => 322,  217 => 89,  208 => 85,  204 => 82,  179 => 93,  159 => 62,  143 => 40,  135 => 53,  119 => 116,  102 => 32,  71 => 30,  67 => 27,  63 => 20,  59 => 19,  38 => 9,  94 => 34,  89 => 63,  85 => 30,  75 => 17,  68 => 23,  56 => 21,  87 => 38,  21 => 2,  26 => 4,  93 => 25,  88 => 32,  78 => 27,  46 => 13,  27 => 5,  44 => 12,  31 => 6,  28 => 5,  201 => 98,  196 => 96,  183 => 93,  171 => 67,  166 => 86,  163 => 64,  158 => 62,  156 => 74,  151 => 77,  142 => 55,  138 => 65,  136 => 63,  121 => 137,  117 => 44,  105 => 39,  91 => 39,  62 => 24,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 23,  47 => 16,  40 => 10,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 74,  139 => 67,  131 => 66,  123 => 47,  120 => 40,  115 => 43,  111 => 50,  108 => 40,  101 => 48,  98 => 35,  96 => 41,  83 => 25,  74 => 13,  66 => 2,  55 => 15,  52 => 16,  50 => 15,  43 => 11,  41 => 11,  35 => 8,  32 => 7,  29 => 4,  209 => 84,  203 => 100,  199 => 81,  193 => 73,  189 => 265,  187 => 75,  182 => 72,  176 => 85,  173 => 68,  168 => 66,  164 => 64,  162 => 57,  154 => 60,  149 => 58,  147 => 62,  144 => 55,  141 => 65,  133 => 51,  130 => 61,  125 => 58,  122 => 60,  116 => 57,  112 => 42,  109 => 40,  106 => 39,  103 => 38,  99 => 36,  95 => 35,  92 => 42,  86 => 39,  82 => 45,  80 => 19,  73 => 25,  64 => 21,  60 => 19,  57 => 7,  54 => 16,  51 => 17,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 8,  33 => 7,  30 => 7,);
    }
}
