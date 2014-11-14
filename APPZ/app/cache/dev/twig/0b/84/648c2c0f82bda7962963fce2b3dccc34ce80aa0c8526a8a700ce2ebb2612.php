<?php

/* BcTicCamIpalBundle:Encuesta:edit.html.twig */
class __TwigTemplate_0b84648c2c0f82bda7962963fce2b3dccc34ce80aa0c8526a8a700ce2ebb2612 extends Twig_Template
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
  <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("encuestas");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Encuestas IPAL"), "html", null, true);
        echo "</a></li>
  <li class=\"active\">Encuesta #";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h3 class=\"hidden-xs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PLANILLA DE INSPECCIÓN Y OBSERVACIÓN DE SEGURIDAD"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</h3>

   ";
        // line 15
        $this->env->loadTemplate("BcTicCamIpalBundle::edit_encuesta.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format" => (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))));
        // line 16
        echo "
    <p class=\"text-left\">
    <a class=\"hidden-xs\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("encuestas");
        echo "\">
      <button type=\"button\" class=\"btn btn-default btn-xs\">
        <span class=\"glyphicon glyphicon-th-list\"></span> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Volver"), "html", null, true);
        echo "  
      </button>
    </a>
    </p>

";
    }

    // line 27
    public function block_js($context, array $blocks = array())
    {
        echo "     

  ";
        // line 29
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
     
     if (\$('form .has-error').length > 0) {
       \$('#errors').addClass('alert')
       \$('#errors').addClass('alert-danger');
       \$('#errors').html('";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("El formulario contiene errores, favor corríjalo."), "html", null, true);
        echo "');
     }
      
     \$('form .survey .alert-warning select').unbind('change').change( function () {
       event.preventDefault();
     });
     
     var prev_val;

     \$('form .survey .alert-warning select').focus(function (event) {
        prev_val = \$(this).val();
     }).change( function () {
        if (\$(this).val() == 1) {
          if (confirm(\"Se dispone a reportar una falta grave a la seguridad, ¿Deséa continuar?\")) {

          } else {
            \$(this).val(prev_val);
          }
        }

     });

    \$('#bctic_camipalbundle_encuesta_empresa').bind('change', function (){
      //Actualizo el contrato
      \$.ajax({
        dataType: \"json\",
        type: \"POST\",
        url: \"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("contratos_json");
        echo "\",
        data: { empresa_id: \$(this).val() } ,
        success: function (dataSuccess) {
          \$('select#bctic_camipalbundle_encuesta_contrato').empty().append('<option value=\"-1\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE CONTRATO --"), "html", null, true);
        echo "</option>');
          \$.each(dataSuccess, function() {
            //En base a esto cargo los contratos:
            \$('select#bctic_camipalbundle_encuesta_contrato').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
          });
        },
        error: function (a,b,c) {
          alert(\"ERROR: \" + b);
        }
      });
    });

    \$('#bctic_camipalbundle_encuesta_contrato').bind('change', function (){
      //Actualizo los campos dependientes:
      if (\$(this).val() != -1) {
        \$.ajax({
          dataType: \"json\",
          type: \"POST\",
          url: \"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("contrato_json");
        echo "\",
          data: { id: \$(this).val() } ,
          success: function (dataSuccess) {
            \$('#bctic_camipalbundle_encuesta_area').val(dataSuccess.area);
            \$('#bctic_camipalbundle_encuesta_servicio').val(dataSuccess.servicio);
            \$('#bctic_camipalbundle_encuesta_gerencia').val(dataSuccess.gerencia);
            \$('#bctic_camipalbundle_encuesta_subGerencia').val(dataSuccess.subgerencia);
            //\$('#bctic_camipalbundle_encuesta_empresa').val(dataSuccess.empresa);
            \$('#bctic_camipalbundle_encuesta_mandante').val(dataSuccess.mandante);
            \$('#bctic_camipalbundle_encuesta_cttaSubcont').attr('disabled',true);
            if (dataSuccess.subcontrato == true) {
              \$('#bctic_camipalbundle_encuesta_cttaSubcont').attr('disabled',false);
            }
          },   
          error: function (a,b,c) {
            alert(\"ERROR: \" + b);
          }
        });       
      }
    });


    \$(document).ready(function (){
     \$('#bctic_camipalbundle_encuesta_contrato').change();
     //Autocomplete
     \$(\"#bctic_camipalbundle_encuesta_supervisor_facade\" ).autocomplete({
        delay: 500,
        minLength: 3,
        source: function(request, response) {

          \$.ajax({
            dataType: \"json\",
            type: \"POST\",
            url: \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("registros_supervisores_json");
        echo "\",
            data: { query: request.term } ,
            success: function (dataSuccess) {
                response( \$.map( dataSuccess , function( item ) {
                  return {
                    label: item.nombre,
                    value: item.id
                  }
                }));
              },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
              }
          });

        },
        focus: function(event, ui) {
          
        },
        select: function(event, ui) {
          if (ui.item) {
            \$(\"#bctic_camipalbundle_encuesta_supervisor_facade\" ).val(ui.item.label);
            \$(\"#bctic_camipalbundle_encuesta_supervisor\" ).val(ui.item.value);
          } else {
            
          }
          event.preventDefault();
        }

     });

     
     //Autocomplete
     \$(\"#bctic_camipalbundle_encuesta_inspector\" ).autocomplete({
        delay: 500,
        minLength: 1,
        source: function(request, response) {

          \$.ajax({
            dataType: \"json\",
            type: \"POST\",
            url: \"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("registros_inspectores_json");
        echo "\",
            data: { query: request.term } ,
            success: function (dataSuccess) {
                response( \$.map( dataSuccess , function( item ) {
                  return {
                    label: item.nombre,
                    value: item.nombre
                  }
                }));
              },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
              }
          });

        },
        focus: function(event, ui) {
          
        },
        select: function(event, ui) {

        }

     });

    });


  </script>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:Encuesta:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 205,  295 => 172,  137 => 69,  899 => 478,  892 => 474,  863 => 457,  854 => 454,  717 => 380,  699 => 371,  679 => 360,  672 => 356,  654 => 347,  634 => 336,  598 => 315,  589 => 312,  578 => 304,  569 => 301,  562 => 297,  533 => 280,  497 => 262,  885 => 470,  880 => 468,  876 => 467,  860 => 457,  855 => 455,  851 => 454,  835 => 444,  815 => 433,  810 => 431,  795 => 422,  790 => 420,  786 => 419,  779 => 415,  770 => 409,  765 => 407,  750 => 398,  745 => 396,  741 => 395,  730 => 387,  721 => 384,  705 => 374,  700 => 372,  696 => 371,  685 => 363,  676 => 360,  660 => 350,  655 => 348,  651 => 347,  640 => 339,  631 => 336,  615 => 326,  606 => 323,  595 => 315,  590 => 313,  586 => 312,  575 => 304,  570 => 302,  566 => 301,  555 => 293,  550 => 291,  546 => 290,  535 => 282,  530 => 280,  526 => 279,  501 => 266,  445 => 234,  436 => 231,  425 => 223,  420 => 221,  416 => 220,  405 => 212,  400 => 210,  396 => 209,  380 => 199,  336 => 176,  325 => 168,  316 => 165,  300 => 155,  175 => 92,  170 => 67,  155 => 76,  948 => 503,  939 => 500,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 612,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 590,  1093 => 582,  1088 => 580,  1077 => 575,  1068 => 569,  1063 => 567,  1059 => 566,  1048 => 558,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 545,  1012 => 540,  994 => 531,  978 => 521,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 473,  868 => 462,  857 => 457,  848 => 451,  843 => 449,  839 => 448,  823 => 438,  819 => 437,  812 => 433,  794 => 424,  783 => 416,  774 => 413,  767 => 409,  758 => 403,  749 => 400,  738 => 392,  729 => 389,  709 => 378,  689 => 367,  682 => 363,  644 => 343,  617 => 328,  415 => 176,  385 => 201,  369 => 156,  332 => 140,  330 => 139,  321 => 135,  287 => 120,  266 => 111,  259 => 108,  257 => 107,  253 => 105,  239 => 157,  226 => 93,  185 => 74,  178 => 71,  113 => 42,  968 => 517,  963 => 515,  959 => 514,  952 => 510,  943 => 501,  938 => 499,  934 => 501,  903 => 479,  894 => 479,  883 => 468,  874 => 465,  838 => 444,  829 => 441,  818 => 433,  809 => 430,  798 => 422,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 407,  753 => 398,  733 => 387,  728 => 385,  724 => 384,  713 => 379,  708 => 374,  704 => 376,  693 => 368,  688 => 363,  684 => 365,  668 => 355,  663 => 350,  659 => 352,  643 => 339,  639 => 341,  628 => 333,  623 => 331,  619 => 330,  608 => 322,  603 => 320,  599 => 319,  583 => 309,  579 => 308,  563 => 298,  559 => 297,  552 => 293,  543 => 287,  538 => 285,  518 => 274,  514 => 273,  494 => 262,  478 => 252,  458 => 241,  454 => 240,  434 => 229,  418 => 219,  414 => 218,  394 => 167,  334 => 174,  261 => 131,  192 => 95,  923 => 490,  918 => 488,  914 => 487,  907 => 483,  898 => 477,  889 => 474,  878 => 466,  873 => 464,  853 => 453,  842 => 448,  833 => 442,  828 => 440,  824 => 439,  813 => 431,  804 => 428,  793 => 420,  788 => 418,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 396,  743 => 394,  739 => 393,  714 => 380,  703 => 372,  698 => 370,  694 => 369,  687 => 365,  678 => 359,  673 => 357,  653 => 346,  649 => 345,  633 => 335,  613 => 324,  609 => 323,  602 => 319,  593 => 313,  588 => 311,  584 => 310,  564 => 299,  548 => 289,  544 => 288,  528 => 278,  523 => 276,  503 => 265,  499 => 264,  488 => 256,  483 => 254,  463 => 243,  448 => 234,  443 => 232,  439 => 231,  428 => 223,  399 => 209,  383 => 199,  348 => 179,  343 => 177,  339 => 176,  328 => 168,  319 => 165,  299 => 154,  274 => 157,  234 => 119,  223 => 111,  198 => 98,  172 => 84,  152 => 73,  281 => 116,  276 => 114,  272 => 112,  267 => 110,  249 => 102,  231 => 94,  218 => 117,  215 => 87,  213 => 115,  200 => 105,  197 => 79,  195 => 116,  188 => 75,  167 => 66,  354 => 185,  346 => 207,  333 => 197,  324 => 191,  317 => 187,  302 => 172,  292 => 150,  286 => 168,  271 => 113,  244 => 101,  190 => 98,  70 => 26,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 317,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 310,  1131 => 309,  1128 => 602,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 299,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 283,  1070 => 282,  1067 => 281,  1065 => 280,  1062 => 279,  1054 => 275,  1051 => 274,  1049 => 273,  1046 => 272,  1038 => 268,  1035 => 267,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 544,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 532,  990 => 247,  987 => 527,  985 => 245,  982 => 244,  974 => 240,  971 => 239,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 226,  940 => 225,  937 => 224,  929 => 496,  926 => 219,  924 => 218,  922 => 492,  919 => 216,  910 => 209,  902 => 208,  896 => 206,  893 => 475,  887 => 203,  884 => 472,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 190,  865 => 189,  864 => 461,  858 => 455,  852 => 184,  849 => 452,  847 => 450,  844 => 450,  834 => 174,  830 => 442,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 430,  803 => 427,  787 => 161,  785 => 160,  782 => 415,  766 => 155,  764 => 406,  761 => 406,  744 => 395,  732 => 389,  725 => 385,  723 => 383,  718 => 381,  715 => 141,  697 => 140,  695 => 139,  692 => 138,  683 => 361,  680 => 361,  677 => 361,  671 => 129,  669 => 356,  664 => 354,  661 => 126,  658 => 348,  648 => 344,  646 => 122,  638 => 337,  635 => 337,  632 => 119,  629 => 334,  627 => 332,  624 => 332,  618 => 326,  610 => 324,  605 => 109,  601 => 108,  596 => 107,  594 => 106,  591 => 105,  582 => 100,  576 => 98,  573 => 302,  571 => 96,  568 => 300,  558 => 91,  556 => 90,  553 => 291,  545 => 85,  542 => 84,  539 => 286,  536 => 82,  534 => 284,  531 => 80,  524 => 277,  513 => 269,  510 => 269,  508 => 267,  505 => 267,  489 => 66,  486 => 65,  484 => 64,  481 => 255,  476 => 60,  470 => 247,  465 => 245,  456 => 53,  452 => 52,  449 => 51,  441 => 49,  438 => 230,  422 => 179,  419 => 220,  410 => 37,  406 => 172,  403 => 210,  395 => 33,  389 => 31,  378 => 160,  376 => 198,  372 => 23,  363 => 188,  359 => 187,  356 => 187,  347 => 16,  344 => 15,  338 => 175,  329 => 8,  323 => 166,  318 => 164,  311 => 493,  308 => 157,  306 => 477,  303 => 155,  301 => 457,  296 => 154,  293 => 448,  290 => 446,  288 => 168,  280 => 144,  275 => 115,  265 => 152,  260 => 107,  250 => 104,  232 => 117,  222 => 118,  211 => 108,  206 => 83,  194 => 97,  181 => 87,  174 => 87,  161 => 76,  146 => 56,  126 => 54,  114 => 48,  104 => 38,  76 => 29,  262 => 109,  255 => 378,  242 => 99,  237 => 130,  233 => 95,  191 => 76,  150 => 58,  127 => 48,  124 => 53,  118 => 50,  100 => 41,  81 => 46,  58 => 13,  537 => 284,  532 => 155,  527 => 139,  519 => 275,  516 => 16,  507 => 10,  504 => 266,  498 => 263,  492 => 180,  490 => 258,  485 => 256,  479 => 253,  477 => 174,  473 => 173,  468 => 245,  464 => 170,  459 => 242,  455 => 167,  451 => 166,  446 => 165,  433 => 160,  431 => 159,  426 => 156,  424 => 180,  421 => 154,  412 => 151,  408 => 212,  404 => 171,  401 => 147,  392 => 32,  388 => 201,  367 => 155,  358 => 151,  352 => 148,  345 => 179,  342 => 123,  340 => 177,  335 => 119,  326 => 115,  320 => 166,  315 => 3,  310 => 110,  307 => 109,  291 => 103,  284 => 101,  277 => 116,  270 => 410,  263 => 133,  256 => 132,  251 => 103,  248 => 103,  245 => 135,  236 => 96,  225 => 82,  216 => 107,  212 => 106,  205 => 84,  186 => 97,  184 => 258,  180 => 89,  160 => 83,  153 => 75,  134 => 159,  129 => 62,  97 => 36,  90 => 36,  77 => 20,  34 => 8,  84 => 33,  65 => 13,  480 => 162,  474 => 251,  469 => 158,  461 => 244,  457 => 153,  453 => 151,  444 => 50,  440 => 232,  437 => 162,  435 => 47,  430 => 44,  427 => 143,  423 => 221,  413 => 175,  409 => 132,  407 => 131,  402 => 130,  398 => 168,  393 => 126,  387 => 164,  384 => 28,  381 => 140,  379 => 198,  374 => 196,  368 => 190,  365 => 190,  362 => 110,  360 => 188,  355 => 106,  341 => 144,  337 => 103,  322 => 101,  314 => 132,  312 => 131,  309 => 97,  305 => 173,  298 => 153,  294 => 123,  285 => 146,  283 => 144,  278 => 142,  268 => 153,  264 => 84,  258 => 131,  252 => 128,  247 => 372,  241 => 120,  229 => 117,  220 => 111,  214 => 108,  177 => 70,  169 => 67,  140 => 54,  132 => 62,  128 => 49,  107 => 51,  61 => 20,  273 => 411,  269 => 111,  254 => 130,  243 => 122,  240 => 98,  238 => 120,  235 => 97,  230 => 95,  227 => 92,  224 => 91,  221 => 109,  219 => 322,  217 => 89,  208 => 85,  204 => 82,  179 => 93,  159 => 83,  143 => 40,  135 => 53,  119 => 116,  102 => 35,  71 => 30,  67 => 27,  63 => 20,  59 => 19,  38 => 9,  94 => 38,  89 => 63,  85 => 30,  75 => 17,  68 => 16,  56 => 21,  87 => 27,  21 => 2,  26 => 4,  93 => 29,  88 => 35,  78 => 30,  46 => 14,  27 => 8,  44 => 9,  31 => 5,  28 => 5,  201 => 98,  196 => 96,  183 => 93,  171 => 67,  166 => 86,  163 => 64,  158 => 62,  156 => 74,  151 => 77,  142 => 62,  138 => 65,  136 => 59,  121 => 137,  117 => 44,  105 => 39,  91 => 39,  62 => 24,  49 => 14,  24 => 3,  25 => 7,  19 => 1,  79 => 28,  72 => 18,  69 => 23,  47 => 16,  40 => 11,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 74,  139 => 67,  131 => 66,  123 => 47,  120 => 51,  115 => 43,  111 => 50,  108 => 45,  101 => 48,  98 => 35,  96 => 39,  83 => 25,  74 => 13,  66 => 15,  55 => 11,  52 => 17,  50 => 12,  43 => 11,  41 => 11,  35 => 4,  32 => 3,  29 => 4,  209 => 84,  203 => 100,  199 => 81,  193 => 73,  189 => 265,  187 => 75,  182 => 72,  176 => 85,  173 => 68,  168 => 66,  164 => 64,  162 => 57,  154 => 60,  149 => 58,  147 => 62,  144 => 63,  141 => 65,  133 => 51,  130 => 56,  125 => 58,  122 => 60,  116 => 57,  112 => 47,  109 => 40,  106 => 44,  103 => 38,  99 => 36,  95 => 35,  92 => 42,  86 => 39,  82 => 32,  80 => 19,  73 => 25,  64 => 23,  60 => 21,  57 => 7,  54 => 13,  51 => 17,  48 => 7,  45 => 12,  42 => 6,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
