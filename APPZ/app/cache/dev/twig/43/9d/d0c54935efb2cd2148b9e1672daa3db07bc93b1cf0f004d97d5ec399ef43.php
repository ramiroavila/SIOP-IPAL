<?php

/* BcTicCamIpalBundle::edit_encuesta.html.twig */
class __TwigTemplate_439dd0c54935efb2cd2148b9e1672daa3db07bc93b1cf0f004d97d5ec399ef43 extends Twig_Template
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
        echo "    
    ";
        // line 2
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Áreas/Actuaciones"), "html", null, true);
        echo "</a></li>
      <li class=\"hidden-xs\"><a class=\"hidden-xs\" href=\"#adjunto\" data-toggle=\"tab\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Observaciones/Adjuntos"), "html", null, true);
        echo "</a></li>
      <li class=\"active visible-xs\"><a class=\"visible-xs\" href=\"#antecedentes\" data-toggle=\"tab\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Antecedentes"), "html", null, true);
        echo "</a></li>
      <li class=\"visible-xs\"><a class=\"visible-xs\" href=\"#ingreso\" data-toggle=\"tab\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Áreas"), "html", null, true);
        echo "</a></li>
      <li class=\"visible-xs\"><a class=\"visible-xs\" href=\"#adjunto\" data-toggle=\"tab\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Obs."), "html", null, true);
        echo "</a></li>
    </ul>

  <div class=\"container\" style=\"width: 98%;\">
    <div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"antecedentes\">
          <br/>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresa"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrato"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area"), 'row');
        echo "
          </div>
        </div>
        
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividad"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "servicio"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugarDeTrabajo"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerencia"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numDeEmpleados"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subGerencia"), 'row');
        echo "
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cttaSubcont"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mandante"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "inspector"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "supervisor_facade"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
            <div>
              ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prevencionista"), 'row');
        echo "
            </div>
          </div>
        </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <div class=\"col-sm-offset-3 col-sm-9\">
                  <button class=\"btn btn-default btn-xs hidden-xs\" type=\"button\" id=\"bctic_camipalbundle_encuesta_next_1\" name=\"bctic_camipalbundle_encuesta_next_1\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                  <button class=\"btn btn-default btn-xs visible-xs\" type=\"button\" id=\"bctic_camipalbundle_encuesta_next_1_1\" name=\"bctic_camipalbundle_encuesta_next_1\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                </div>
              </div>
            </div>
            <div class=\"col-sm-6\">
            </div>
          </div>

         
      </div>

      <div class=\"tab-pane survey\" id=\"ingreso\">

          <br/>
          
          ";
        // line 130
        $template = $this->env->resolveTemplate((((("BcTicCamIpalBundle::edit_encuesta_" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) . "_format.") . (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format"))) . ".twig"));
        $template->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 131
        echo "          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <div class=\"col-sm-offset-3 col-sm-9\">
                  <button class=\"btn btn-default btn-xs hidden-xs\" type=\"button\" id=\"bctic_camipalbundle_encuesta_next_2\" name=\"bctic_camipalbundle_encuesta_next_2\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                  <button class=\"btn btn-default btn-xs visible-xs\" type=\"button\" id=\"bctic_camipalbundle_encuesta_next_2_2\" name=\"bctic_camipalbundle_encuesta_next_2\">
                    <span class=\"glyphicon glyphicon-hand-right\"></span>
                    ";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Siguiente"), "html", null, true);
        echo "
                  </button>

                </div>
              </div>
            </div>
            <div class=\"col-sm-6\">
            </div>
          </div>
          
      </div>
        
      <div class=\"tab-pane\" id=\"adjunto\">
        <br/>
        <div class=\"row\">
          <div class=\"col-sm-6\">
              ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones"), 'row');
        echo "
          </div>
          <div class=\"col-sm-6\">
              ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFile1"), 'row');
        echo "
          </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
              ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFile2"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
              ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFile3"), 'row');
        echo "
            </div>
        </div>

        <hr class=\"cierre\"/>
        <div class=\"row cierre\">
            <div class=\"col-sm-6\">
              ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cierre"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
              ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFileCierre1"), 'row');
        echo "
            </div>
        </div>

        <div class=\"row cierre\">
            <div class=\"col-sm-6\">
              <div class=\"form-group \"><label class=\"col-sm-3 control-label\" for=\"bctic_camipalbundle_encuesta_cierre\"></label><div class=\"col-sm-9\"><p><i>";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("* Solamente los usuarios administradores puede escribir en el cuadro \"Cierre\", pues al ser llenado pasa de ABIERTA a CERRADA cuando una encuesta tiene INCUMPLIMIENTO(S)."), "html", null, true);
        echo "</i></p></div></div>
              
            </div>
            <div class=\"col-sm-6\">
              ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "uploadedFileCierre2"), 'row');
        echo "
            </div>
        </div>

        <div class=\"row status_cierre\">
            <div class=\"col-sm-6\">
              ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status_cierre"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
              
            </div>
        </div>        

        <div class=\"row\">
            <div class=\"col-sm-6\">
              ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
              
            </div>
        </div>
      </div>
    </div>
  </div>  

    ";
        // line 216
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <hr/>


    ";
        // line 221
        $this->displayBlock('js', $context, $blocks);
    }

    public function block_js($context, array $blocks = array())
    {
        // line 222
        echo "      <script type=\"text/javascript\"> 
      
        \$('#bctic_camipalbundle_encuesta_next_1').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#ingreso\"]').tab('show') // Select tab by name
        });

        \$('#bctic_camipalbundle_encuesta_next_2').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#adjunto\"]').tab('show') // Select tab by name
        });

         \$('#bctic_camipalbundle_encuesta_next_1_1').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#ingreso\"]').tab('show') // Select tab by name
        });

        \$('#bctic_camipalbundle_encuesta_next_2_1').bind('click', function (e) {
          \$('.nav-tabs a.hidden-xs[href=\"#adjunto\"]').tab('show') // Select tab by name
        });

      </script>
    ";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle::edit_encuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 221,  333 => 197,  324 => 191,  317 => 187,  302 => 178,  292 => 171,  286 => 168,  271 => 159,  244 => 138,  190 => 97,  70 => 25,  23 => 2,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 364,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 328,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 317,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 310,  1131 => 309,  1128 => 308,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 299,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 286,  1076 => 284,  1073 => 283,  1070 => 282,  1067 => 281,  1065 => 280,  1062 => 279,  1054 => 275,  1051 => 274,  1049 => 273,  1046 => 272,  1038 => 268,  1035 => 267,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 260,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 253,  1001 => 252,  998 => 251,  990 => 247,  987 => 246,  985 => 245,  982 => 244,  974 => 240,  971 => 239,  969 => 238,  966 => 237,  958 => 233,  956 => 232,  953 => 231,  945 => 227,  942 => 226,  940 => 225,  937 => 224,  929 => 220,  926 => 219,  924 => 218,  922 => 217,  919 => 216,  910 => 209,  902 => 208,  896 => 206,  893 => 205,  887 => 203,  884 => 202,  882 => 201,  879 => 200,  869 => 192,  867 => 191,  866 => 190,  865 => 189,  864 => 188,  858 => 186,  852 => 184,  849 => 183,  847 => 182,  844 => 181,  834 => 174,  830 => 173,  826 => 172,  822 => 171,  817 => 170,  811 => 168,  808 => 167,  806 => 166,  803 => 165,  787 => 161,  785 => 160,  782 => 159,  766 => 155,  764 => 154,  761 => 153,  744 => 149,  732 => 147,  725 => 144,  723 => 143,  718 => 142,  715 => 141,  697 => 140,  695 => 139,  692 => 138,  683 => 133,  680 => 132,  677 => 131,  671 => 129,  669 => 128,  664 => 127,  661 => 126,  658 => 125,  648 => 123,  646 => 122,  638 => 121,  635 => 120,  632 => 119,  629 => 118,  627 => 117,  624 => 116,  618 => 112,  610 => 110,  605 => 109,  601 => 108,  596 => 107,  594 => 106,  591 => 105,  582 => 100,  576 => 98,  573 => 97,  571 => 96,  568 => 95,  558 => 91,  556 => 90,  553 => 89,  545 => 85,  542 => 84,  539 => 83,  536 => 82,  534 => 81,  531 => 80,  524 => 76,  513 => 73,  510 => 72,  508 => 71,  505 => 70,  489 => 66,  486 => 65,  484 => 64,  481 => 63,  476 => 60,  470 => 58,  465 => 56,  456 => 53,  452 => 52,  449 => 51,  441 => 49,  438 => 48,  422 => 41,  419 => 40,  410 => 37,  406 => 36,  403 => 35,  395 => 33,  389 => 31,  378 => 26,  376 => 25,  372 => 222,  363 => 20,  359 => 19,  356 => 18,  347 => 16,  344 => 15,  338 => 13,  329 => 8,  323 => 6,  318 => 4,  311 => 493,  308 => 181,  306 => 477,  303 => 476,  301 => 457,  296 => 449,  293 => 448,  290 => 446,  288 => 437,  280 => 426,  275 => 416,  265 => 401,  260 => 386,  250 => 373,  232 => 130,  222 => 323,  211 => 303,  206 => 296,  194 => 272,  181 => 257,  174 => 87,  161 => 230,  146 => 199,  126 => 152,  114 => 105,  104 => 89,  76 => 30,  262 => 88,  255 => 378,  242 => 362,  237 => 349,  233 => 73,  191 => 271,  150 => 42,  127 => 34,  124 => 58,  118 => 32,  100 => 43,  81 => 46,  58 => 11,  537 => 179,  532 => 155,  527 => 139,  519 => 75,  516 => 16,  507 => 10,  504 => 9,  498 => 8,  492 => 180,  490 => 179,  485 => 176,  479 => 175,  477 => 174,  473 => 173,  468 => 57,  464 => 170,  459 => 168,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 42,  421 => 154,  412 => 151,  408 => 149,  404 => 148,  401 => 147,  392 => 32,  388 => 142,  367 => 131,  358 => 216,  352 => 17,  345 => 206,  342 => 123,  340 => 122,  335 => 119,  326 => 115,  320 => 5,  315 => 3,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 162,  270 => 410,  263 => 387,  256 => 93,  251 => 91,  248 => 90,  245 => 363,  236 => 85,  225 => 82,  216 => 78,  212 => 113,  205 => 65,  186 => 264,  184 => 258,  180 => 69,  160 => 64,  153 => 75,  134 => 159,  129 => 153,  97 => 50,  90 => 49,  77 => 43,  34 => 8,  84 => 47,  65 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 50,  440 => 148,  437 => 162,  435 => 47,  430 => 44,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 34,  393 => 126,  387 => 122,  384 => 28,  381 => 140,  379 => 139,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 14,  337 => 103,  322 => 101,  314 => 99,  312 => 111,  309 => 97,  305 => 95,  298 => 456,  294 => 90,  285 => 436,  283 => 427,  278 => 417,  268 => 402,  264 => 84,  258 => 379,  252 => 143,  247 => 372,  241 => 77,  229 => 73,  220 => 70,  214 => 305,  177 => 65,  169 => 237,  140 => 39,  132 => 59,  128 => 49,  107 => 36,  61 => 13,  273 => 411,  269 => 94,  254 => 92,  243 => 88,  240 => 350,  238 => 85,  235 => 131,  230 => 327,  227 => 326,  224 => 324,  221 => 77,  219 => 322,  217 => 306,  208 => 68,  204 => 108,  179 => 251,  159 => 78,  143 => 40,  135 => 53,  119 => 116,  102 => 32,  71 => 12,  67 => 15,  63 => 14,  59 => 14,  38 => 9,  94 => 40,  89 => 63,  85 => 34,  75 => 17,  68 => 17,  56 => 30,  87 => 25,  21 => 2,  26 => 4,  93 => 25,  88 => 48,  78 => 21,  46 => 7,  27 => 8,  44 => 12,  31 => 7,  28 => 5,  201 => 289,  196 => 278,  183 => 93,  171 => 243,  166 => 236,  163 => 62,  158 => 67,  156 => 223,  151 => 215,  142 => 59,  138 => 54,  136 => 164,  121 => 137,  117 => 44,  105 => 40,  91 => 69,  62 => 12,  49 => 19,  24 => 3,  25 => 7,  19 => 1,  79 => 31,  72 => 18,  69 => 3,  47 => 11,  40 => 16,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 70,  139 => 67,  131 => 158,  123 => 47,  120 => 40,  115 => 52,  111 => 104,  108 => 36,  101 => 88,  98 => 31,  96 => 79,  83 => 25,  74 => 13,  66 => 2,  55 => 15,  52 => 21,  50 => 8,  43 => 10,  41 => 7,  35 => 8,  32 => 3,  29 => 3,  209 => 297,  203 => 78,  199 => 279,  193 => 73,  189 => 265,  187 => 84,  182 => 66,  176 => 250,  173 => 68,  168 => 84,  164 => 231,  162 => 57,  154 => 216,  149 => 200,  147 => 62,  144 => 181,  141 => 180,  133 => 55,  130 => 61,  125 => 44,  122 => 43,  116 => 115,  112 => 42,  109 => 49,  106 => 94,  103 => 28,  99 => 80,  95 => 28,  92 => 21,  86 => 62,  82 => 45,  80 => 19,  73 => 15,  64 => 22,  60 => 6,  57 => 7,  54 => 29,  51 => 12,  48 => 13,  45 => 17,  42 => 6,  39 => 9,  36 => 9,  33 => 4,  30 => 6,);
    }
}
