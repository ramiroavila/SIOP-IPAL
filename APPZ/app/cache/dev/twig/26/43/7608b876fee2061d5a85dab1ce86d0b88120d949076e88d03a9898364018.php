<?php

/* BcTicCamIpalBundle:ObservacionDeComportamiento:new.html.twig */
class __TwigTemplate_26437608b876fee2061d5a85dab1ce86d0b88120d949076e88d03a9898364018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo $this->env->getExtension('routing')->getPath("observaciones");
        echo "\">Observaciones</a></li>
  <li class=\"active\">Agregar</li>
</ol>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<h3 class=\"hidden-xs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("OBSERVACIÓN DEL COMPORTAMIENTO"), "html", null, true);
        echo "</h3>

   ";
        // line 14
        $this->env->loadTemplate("BcTicCamIpalBundle::edit_observacion_de_comportamiento.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "format" => (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "new" => true, "entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
        // line 15
        echo "
    <p class=\"text-left\">
    <a class=\"hidden-xs\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("observaciones");
        echo "\">
      <button type=\"button\" class=\"btn btn-default btn-xs\">
        <span class=\"glyphicon glyphicon-th-list\"></span> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Volver"), "html", null, true);
        echo "  
      </button>
    </a>
    </p>
    
";
    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
        // line 28
        echo "      ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 31
    public function block_js($context, array $blocks = array())
    {
        echo "     

  ";
        // line 33
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\">

  \$(document).ready( function () { 
     
     //Autocomplete
     \$(\"#bctic_camipalbundle_observaciondecomportamiento_supervisor_facade\" ).autocomplete({
        delay: 500,
        minLength: 1,
        source: function(request, response) {

          \$.ajax({
            dataType: \"json\",
            type: \"POST\",
            url: \"";
        // line 47
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
            \$(\"#bctic_camipalbundle_observaciondecomportamiento_supervisor_facade\" ).val(ui.item.label)
            \$(\"#bctic_camipalbundle_observaciondecomportamiento_supervisor\" ).val(ui.item.id)
          } else {
            
          }
          event.preventDefault();
        }

     });

     //Autocomplete
     \$(\"#bctic_camipalbundle_observaciondecomportamiento_inspector\" ).autocomplete({
        delay: 500,
        minLength: 1,
        source: function(request, response) {

          \$.ajax({
            dataType: \"json\",
            type: \"POST\",
            url: \"";
        // line 87
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

     //Pongo el Inspector del Usuario actual.
     \$(\"#bctic_camipalbundle_observaciondecomportamiento_inspector\").val(\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
        echo "\");

           //Elimino todos los objetos:
           \$('select#bctic_camipalbundle_observaciondecomportamiento_pais').empty();
           \$('select#bctic_camipalbundle_observaciondecomportamiento_pais').append('<option value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "nombre"), "html", null, true);
        echo "</option>');

     \$(\"#bctic_camipalbundle_observaciondecomportamiento_pais\").val(\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pais"), "id"), "html", null, true);
        echo "\");

  });
     
    if (\$('form .has-error').length > 0) {
      \$('#errors').addClass('alert')
      \$('#errors').addClass('alert-danger');
      \$('#errors').html('";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("El formulario contiene errores, favor corríjalo."), "html", null, true);
        echo "');
    }

    \$('#bctic_camipalbundle_observaciondecomportamiento_empresa').bind('change', function (){
      //Actualizo el contrato
      if (\$(this).val() != \"\") {
      \$.ajax({
        dataType: \"json\",
        type: \"POST\",
        url: \"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("contratos_json");
        echo "\",
        data: { empresa_id: \$(this).val() } ,
        success: function (dataSuccess) {
          \$('select#bctic_camipalbundle_observaciondecomportamiento_contrato').empty().append('<option value=\"-1\">-- SELECCIONE CONTRATO --</option>');
          \$.each(dataSuccess, function() {
            //En base a esto cargo los contratos:
            \$('select#bctic_camipalbundle_observaciondecomportamiento_contrato').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
          });
        },
        error: function (a,b,c) {
          alert(\"ERROR: \" + b);
        }
      });
      }
    });

    \$('#bctic_camipalbundle_observaciondecomportamiento_contrato').bind('change', function (){
      //Actualizo los campos dependientes:
      if (\$(this).val() != -1) {
        \$.ajax({
          dataType: \"json\",
          type: \"POST\",
          url: \"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("contrato_json");
        echo "\",
          data: { id: \$(this).val() } ,
          success: function (dataSuccess) {
            \$('#bctic_camipalbundle_observaciondecomportamiento_area').val(dataSuccess.area);
            \$('#bctic_camipalbundle_observaciondecomportamiento_servicio').val(dataSuccess.servicio);
            \$('#bctic_camipalbundle_observaciondecomportamiento_gerencia').val(dataSuccess.gerencia);
            \$('#bctic_camipalbundle_observaciondecomportamiento_subGerencia').val(dataSuccess.subgerencia);
            \$('#bctic_camipalbundle_observaciondecomportamiento_mandante').val(dataSuccess.mandante);
            \$('#bctic_camipalbundle_observaciondecomportamiento_cttaSubcont').attr('disabled',true);
            if (dataSuccess.subcontrato == true) {
              \$('#bctic_camipalbundle_observaciondecomportamiento_cttaSubcont').attr('disabled',false);
            }
          },   
          error: function (a,b,c) {
            alert(\"ERROR: \" + b);
          }
        });       
      }
    });

    \$(document).ready(function (){
      \$('.cierre').hide();

      //Solo muestro los contratos según el pais y rol - si aplica - esto lo hace el controlador:
      \$.ajax({
        dataType: \"json\",
        type: \"POST\",
        url: \"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("contratos_index_json");
        echo "\",
        success: function (dataSuccess) {
          \$('select#bctic_camipalbundle_observaciondecomportamiento_contrato').empty().append('<option value=\"-1\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE CONTRATO --"), "html", null, true);
        echo "</option>');
          \$.each(dataSuccess, function() {
            //En base a esto cargo los contratos:
            \$('select#bctic_camipalbundle_observaciondecomportamiento_contrato').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
          });
        },
        error: function (a,b,c) {
          alert(\"ERROR: \" + b);
        }
      });

       //Elimino todos los objetos:
           //Solo muestro las empresas según el pais y rol - si aplica - esto lo hace el controlador:
           \$.ajax({
             dataType: \"json\",
             type: \"POST\",
             url: \"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("empresas_index_json");
        echo "\",
             success: function (dataSuccess) {
               \$('select#bctic_camipalbundle_observaciondecomportamiento_empresa').empty().append('<option value=\"-1\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("-- SELECCIONE EMPRESA --"), "html", null, true);
        echo "</option>');
               \$.each(dataSuccess, function() {
               //En base a esto cargo las empresas:
               \$('select#bctic_camipalbundle_observaciondecomportamiento_empresa').append('<option value=\"' + this.id + '\">' + this.nombre + '</option>');
             });
            },
            error: function (a,b,c) {
              alert(\"ERROR: \" + b);
            }
           });    


    });

  </script>
";
    }

    public function getTemplateName()
    {
        return "BcTicCamIpalBundle:ObservacionDeComportamiento:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 403,  567 => 401,  327 => 220,  350 => 150,  475 => 206,  361 => 153,  472 => 203,  289 => 123,  110 => 43,  735 => 315,  707 => 302,  690 => 295,  665 => 285,  656 => 281,  647 => 278,  522 => 224,  353 => 150,  491 => 206,  462 => 193,  411 => 174,  331 => 138,  509 => 217,  386 => 164,  377 => 158,  747 => 232,  666 => 204,  549 => 170,  432 => 183,  351 => 110,  313 => 93,  691 => 214,  674 => 207,  641 => 192,  621 => 187,  614 => 185,  587 => 178,  581 => 177,  521 => 158,  515 => 157,  467 => 145,  349 => 106,  742 => 232,  736 => 231,  1161 => 340,  1145 => 334,  1139 => 333,  1125 => 329,  1118 => 327,  1098 => 322,  1089 => 319,  1081 => 316,  1075 => 315,  1052 => 307,  1032 => 302,  1025 => 300,  1005 => 295,  984 => 289,  965 => 285,  957 => 282,  951 => 281,  946 => 279,  928 => 274,  912 => 268,  905 => 266,  891 => 262,  872 => 258,  862 => 254,  792 => 234,  771 => 228,  752 => 224,  746 => 221,  722 => 212,  716 => 306,  702 => 207,  675 => 198,  626 => 184,  600 => 181,  592 => 254,  565 => 168,  540 => 161,  495 => 347,  487 => 210,  460 => 135,  447 => 311,  373 => 113,  210 => 126,  711 => 206,  645 => 188,  604 => 175,  577 => 168,  520 => 162,  471 => 329,  375 => 162,  371 => 158,  228 => 93,  202 => 85,  148 => 59,  720 => 218,  706 => 214,  667 => 203,  657 => 198,  637 => 193,  630 => 191,  616 => 187,  597 => 183,  560 => 172,  547 => 234,  517 => 159,  496 => 211,  450 => 191,  391 => 120,  279 => 84,  207 => 63,  282 => 186,  1176 => 774,  1169 => 770,  1167 => 769,  1162 => 766,  1157 => 764,  1151 => 761,  1142 => 755,  1138 => 753,  1132 => 750,  1121 => 743,  1119 => 742,  1083 => 712,  1064 => 696,  1040 => 678,  1016 => 660,  1011 => 296,  992 => 292,  944 => 606,  927 => 597,  881 => 560,  859 => 544,  825 => 242,  821 => 516,  701 => 214,  681 => 207,  574 => 318,  557 => 307,  512 => 268,  506 => 265,  500 => 349,  466 => 197,  417 => 124,  397 => 169,  370 => 157,  364 => 248,  346 => 149,  165 => 66,  53 => 28,  297 => 126,  295 => 92,  137 => 69,  899 => 265,  892 => 474,  863 => 457,  854 => 454,  717 => 207,  699 => 299,  679 => 207,  672 => 193,  654 => 200,  634 => 336,  598 => 315,  589 => 180,  578 => 304,  569 => 301,  562 => 173,  533 => 165,  497 => 262,  885 => 261,  880 => 468,  876 => 467,  860 => 457,  855 => 252,  851 => 454,  835 => 526,  815 => 433,  810 => 431,  795 => 422,  790 => 339,  786 => 419,  779 => 333,  770 => 329,  765 => 227,  750 => 398,  745 => 396,  741 => 231,  730 => 210,  721 => 441,  705 => 220,  700 => 213,  696 => 371,  685 => 363,  676 => 207,  660 => 203,  655 => 348,  651 => 279,  640 => 196,  631 => 182,  615 => 326,  606 => 179,  595 => 315,  590 => 313,  586 => 174,  575 => 174,  570 => 176,  566 => 301,  555 => 293,  550 => 161,  546 => 164,  535 => 282,  530 => 227,  526 => 231,  501 => 153,  445 => 186,  436 => 184,  425 => 205,  420 => 178,  416 => 177,  405 => 172,  400 => 275,  396 => 209,  380 => 161,  336 => 143,  325 => 138,  316 => 135,  300 => 129,  175 => 101,  170 => 66,  155 => 63,  948 => 503,  939 => 604,  932 => 496,  1268 => 679,  1264 => 678,  1253 => 670,  1248 => 668,  1244 => 667,  1233 => 659,  1228 => 657,  1224 => 656,  1213 => 648,  1208 => 646,  1204 => 645,  1193 => 637,  1184 => 634,  1173 => 626,  1168 => 624,  1164 => 623,  1153 => 615,  1148 => 613,  1144 => 756,  1133 => 604,  1124 => 601,  1113 => 593,  1108 => 591,  1104 => 323,  1093 => 320,  1088 => 714,  1077 => 575,  1068 => 569,  1063 => 567,  1059 => 309,  1048 => 558,  1043 => 556,  1039 => 555,  1028 => 547,  1023 => 545,  1012 => 540,  994 => 531,  978 => 288,  973 => 519,  949 => 507,  933 => 497,  913 => 486,  908 => 481,  904 => 483,  888 => 473,  868 => 462,  857 => 457,  848 => 451,  843 => 449,  839 => 246,  823 => 438,  819 => 241,  812 => 239,  794 => 424,  783 => 416,  774 => 413,  767 => 409,  758 => 225,  749 => 460,  738 => 218,  729 => 446,  709 => 217,  689 => 204,  682 => 292,  644 => 343,  617 => 328,  415 => 176,  385 => 161,  369 => 156,  332 => 131,  330 => 142,  321 => 92,  287 => 90,  266 => 113,  259 => 160,  257 => 109,  253 => 104,  239 => 83,  226 => 96,  185 => 76,  178 => 75,  113 => 42,  968 => 624,  963 => 622,  959 => 514,  952 => 510,  943 => 501,  938 => 499,  934 => 275,  903 => 479,  894 => 479,  883 => 468,  874 => 556,  838 => 444,  829 => 441,  818 => 433,  809 => 430,  798 => 235,  789 => 419,  778 => 414,  773 => 409,  769 => 411,  762 => 326,  753 => 322,  733 => 226,  728 => 226,  724 => 309,  713 => 379,  708 => 208,  704 => 376,  693 => 211,  688 => 211,  684 => 365,  668 => 204,  663 => 350,  659 => 192,  643 => 194,  639 => 187,  628 => 333,  623 => 331,  619 => 265,  608 => 184,  603 => 184,  599 => 319,  583 => 179,  579 => 172,  563 => 298,  559 => 167,  552 => 165,  543 => 383,  538 => 285,  518 => 226,  514 => 149,  494 => 151,  478 => 206,  458 => 194,  454 => 134,  434 => 229,  418 => 290,  414 => 127,  394 => 167,  354 => 185,  334 => 95,  261 => 107,  192 => 118,  923 => 490,  918 => 269,  914 => 587,  907 => 483,  898 => 477,  889 => 474,  878 => 259,  873 => 464,  853 => 453,  842 => 448,  833 => 245,  828 => 440,  824 => 439,  813 => 431,  804 => 428,  793 => 420,  788 => 418,  784 => 417,  777 => 413,  768 => 407,  763 => 405,  759 => 404,  748 => 320,  743 => 394,  739 => 393,  714 => 217,  703 => 372,  698 => 370,  694 => 200,  687 => 210,  678 => 194,  673 => 288,  653 => 191,  649 => 345,  633 => 335,  613 => 181,  609 => 323,  602 => 258,  593 => 313,  588 => 329,  584 => 251,  564 => 241,  548 => 385,  544 => 288,  528 => 160,  523 => 160,  503 => 265,  499 => 209,  488 => 150,  483 => 211,  463 => 145,  448 => 234,  443 => 232,  439 => 231,  428 => 181,  399 => 123,  383 => 165,  348 => 145,  343 => 145,  339 => 229,  328 => 138,  319 => 215,  299 => 92,  274 => 80,  234 => 99,  223 => 93,  198 => 98,  172 => 74,  152 => 69,  281 => 119,  276 => 117,  272 => 116,  267 => 80,  249 => 106,  231 => 81,  218 => 117,  215 => 90,  213 => 86,  200 => 119,  197 => 80,  195 => 79,  188 => 117,  167 => 52,  366 => 113,  333 => 103,  324 => 139,  317 => 187,  302 => 127,  292 => 87,  286 => 86,  271 => 113,  244 => 101,  190 => 59,  70 => 26,  23 => 3,  20 => 1,  1659 => 503,  1653 => 501,  1647 => 499,  1645 => 498,  1643 => 497,  1639 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1612 => 487,  1606 => 485,  1600 => 483,  1598 => 482,  1596 => 481,  1592 => 480,  1586 => 479,  1584 => 478,  1581 => 477,  1568 => 471,  1562 => 469,  1556 => 467,  1554 => 466,  1552 => 465,  1548 => 464,  1542 => 463,  1536 => 462,  1532 => 461,  1528 => 460,  1522 => 459,  1520 => 458,  1517 => 457,  1505 => 452,  1500 => 451,  1498 => 450,  1495 => 449,  1486 => 443,  1480 => 441,  1477 => 440,  1472 => 439,  1470 => 438,  1467 => 437,  1461 => 433,  1452 => 431,  1447 => 430,  1444 => 429,  1442 => 428,  1439 => 427,  1433 => 423,  1424 => 421,  1419 => 420,  1416 => 419,  1414 => 418,  1411 => 417,  1403 => 413,  1401 => 412,  1398 => 411,  1392 => 407,  1386 => 405,  1383 => 404,  1381 => 403,  1378 => 402,  1369 => 397,  1367 => 396,  1342 => 395,  1339 => 394,  1336 => 393,  1333 => 392,  1330 => 391,  1327 => 390,  1324 => 389,  1322 => 388,  1319 => 387,  1312 => 383,  1308 => 382,  1303 => 381,  1301 => 380,  1298 => 379,  1291 => 374,  1288 => 373,  1279 => 367,  1275 => 365,  1273 => 681,  1270 => 363,  1260 => 357,  1256 => 356,  1252 => 355,  1247 => 353,  1240 => 352,  1238 => 351,  1235 => 350,  1225 => 344,  1221 => 343,  1217 => 342,  1212 => 340,  1205 => 339,  1203 => 338,  1200 => 337,  1192 => 333,  1190 => 329,  1188 => 635,  1185 => 327,  1180 => 323,  1158 => 318,  1155 => 339,  1152 => 316,  1149 => 315,  1146 => 314,  1143 => 313,  1140 => 312,  1137 => 311,  1134 => 751,  1131 => 330,  1128 => 748,  1126 => 307,  1123 => 306,  1115 => 300,  1112 => 326,  1110 => 298,  1107 => 297,  1099 => 293,  1096 => 292,  1094 => 291,  1091 => 290,  1084 => 579,  1076 => 284,  1073 => 283,  1070 => 282,  1067 => 281,  1065 => 310,  1062 => 279,  1054 => 275,  1051 => 274,  1049 => 273,  1046 => 306,  1038 => 303,  1035 => 676,  1033 => 266,  1030 => 265,  1022 => 261,  1019 => 299,  1017 => 259,  1014 => 258,  1006 => 254,  1003 => 534,  1001 => 252,  998 => 293,  990 => 247,  987 => 640,  985 => 245,  982 => 244,  974 => 240,  971 => 286,  969 => 518,  966 => 237,  958 => 510,  956 => 232,  953 => 508,  945 => 227,  942 => 278,  940 => 225,  937 => 224,  929 => 496,  926 => 219,  924 => 218,  922 => 492,  919 => 216,  910 => 209,  902 => 208,  896 => 206,  893 => 475,  887 => 203,  884 => 472,  882 => 201,  879 => 200,  869 => 463,  867 => 464,  866 => 255,  865 => 189,  864 => 461,  858 => 455,  852 => 184,  849 => 251,  847 => 450,  844 => 532,  834 => 174,  830 => 442,  826 => 441,  822 => 171,  817 => 170,  811 => 168,  808 => 429,  806 => 238,  803 => 427,  787 => 161,  785 => 232,  782 => 484,  766 => 155,  764 => 406,  761 => 469,  744 => 319,  732 => 217,  725 => 385,  723 => 383,  718 => 381,  715 => 218,  697 => 140,  695 => 213,  692 => 138,  683 => 201,  680 => 208,  677 => 361,  671 => 129,  669 => 197,  664 => 190,  661 => 399,  658 => 189,  648 => 194,  646 => 197,  638 => 274,  635 => 191,  632 => 185,  629 => 334,  627 => 268,  624 => 190,  618 => 179,  610 => 261,  605 => 109,  601 => 108,  596 => 421,  594 => 180,  591 => 419,  582 => 100,  576 => 177,  573 => 245,  571 => 173,  568 => 300,  558 => 170,  556 => 238,  553 => 170,  545 => 85,  542 => 164,  539 => 231,  536 => 160,  534 => 161,  531 => 163,  524 => 367,  513 => 269,  510 => 157,  508 => 228,  505 => 267,  489 => 66,  486 => 207,  484 => 141,  481 => 207,  476 => 331,  470 => 203,  465 => 245,  456 => 143,  452 => 313,  449 => 190,  441 => 187,  438 => 136,  422 => 130,  419 => 175,  410 => 176,  406 => 173,  403 => 171,  395 => 123,  389 => 114,  378 => 259,  376 => 160,  372 => 159,  363 => 188,  359 => 151,  356 => 187,  347 => 234,  344 => 146,  338 => 145,  329 => 139,  323 => 126,  318 => 136,  311 => 135,  308 => 132,  306 => 204,  303 => 93,  301 => 202,  296 => 154,  293 => 192,  290 => 123,  288 => 120,  280 => 119,  275 => 115,  265 => 108,  260 => 110,  250 => 76,  232 => 117,  222 => 135,  211 => 86,  206 => 83,  194 => 97,  181 => 56,  174 => 70,  161 => 76,  146 => 56,  126 => 45,  114 => 47,  104 => 39,  76 => 29,  262 => 109,  255 => 109,  242 => 98,  237 => 99,  233 => 94,  191 => 77,  150 => 68,  127 => 52,  124 => 47,  118 => 46,  100 => 46,  81 => 27,  58 => 14,  537 => 166,  532 => 155,  527 => 157,  519 => 365,  516 => 221,  507 => 217,  504 => 217,  498 => 145,  492 => 210,  490 => 152,  485 => 203,  479 => 204,  477 => 203,  473 => 201,  468 => 138,  464 => 200,  459 => 242,  455 => 196,  451 => 139,  446 => 165,  433 => 184,  431 => 135,  426 => 156,  424 => 180,  421 => 130,  412 => 126,  408 => 126,  404 => 173,  401 => 172,  392 => 169,  388 => 201,  367 => 157,  358 => 112,  352 => 149,  345 => 145,  342 => 104,  340 => 159,  335 => 142,  326 => 139,  320 => 138,  315 => 136,  310 => 110,  307 => 130,  291 => 103,  284 => 101,  277 => 184,  270 => 83,  263 => 112,  256 => 77,  251 => 106,  248 => 155,  245 => 85,  236 => 72,  225 => 91,  216 => 87,  212 => 90,  205 => 71,  186 => 113,  184 => 56,  180 => 86,  160 => 71,  153 => 59,  134 => 64,  129 => 37,  97 => 33,  90 => 33,  77 => 38,  34 => 4,  84 => 28,  65 => 23,  480 => 147,  474 => 146,  469 => 146,  461 => 197,  457 => 193,  453 => 191,  444 => 190,  440 => 186,  437 => 162,  435 => 304,  430 => 127,  427 => 183,  423 => 179,  413 => 202,  409 => 173,  407 => 131,  402 => 168,  398 => 170,  393 => 271,  387 => 166,  384 => 28,  381 => 163,  379 => 114,  374 => 196,  368 => 190,  365 => 190,  362 => 110,  360 => 152,  355 => 152,  341 => 144,  337 => 145,  322 => 134,  314 => 131,  312 => 133,  309 => 96,  305 => 127,  298 => 126,  294 => 124,  285 => 120,  283 => 118,  278 => 86,  268 => 113,  264 => 84,  258 => 131,  252 => 157,  247 => 157,  241 => 120,  229 => 96,  220 => 90,  214 => 108,  177 => 73,  169 => 101,  140 => 57,  132 => 40,  128 => 63,  107 => 40,  61 => 19,  273 => 113,  269 => 111,  254 => 106,  243 => 103,  240 => 151,  238 => 120,  235 => 97,  230 => 87,  227 => 135,  224 => 66,  221 => 109,  219 => 92,  217 => 92,  208 => 122,  204 => 121,  179 => 70,  159 => 64,  143 => 57,  135 => 52,  119 => 38,  102 => 40,  71 => 19,  67 => 20,  63 => 25,  59 => 32,  38 => 12,  94 => 27,  89 => 31,  85 => 8,  75 => 23,  68 => 23,  56 => 19,  87 => 30,  21 => 2,  26 => 4,  93 => 43,  88 => 26,  78 => 34,  46 => 7,  27 => 8,  44 => 7,  31 => 3,  28 => 5,  201 => 98,  196 => 119,  183 => 76,  171 => 67,  166 => 86,  163 => 98,  158 => 46,  156 => 44,  151 => 44,  142 => 40,  138 => 43,  136 => 56,  121 => 34,  117 => 58,  105 => 49,  91 => 31,  62 => 15,  49 => 10,  24 => 3,  25 => 7,  19 => 1,  79 => 27,  72 => 31,  69 => 19,  47 => 10,  40 => 11,  37 => 5,  22 => 2,  246 => 154,  157 => 87,  145 => 59,  139 => 68,  131 => 66,  123 => 61,  120 => 58,  115 => 47,  111 => 55,  108 => 43,  101 => 48,  98 => 35,  96 => 33,  83 => 27,  74 => 14,  66 => 17,  55 => 13,  52 => 12,  50 => 8,  43 => 6,  41 => 11,  35 => 4,  32 => 3,  29 => 9,  209 => 85,  203 => 83,  199 => 80,  193 => 117,  189 => 52,  187 => 73,  182 => 73,  176 => 72,  173 => 72,  168 => 67,  164 => 66,  162 => 63,  154 => 63,  149 => 58,  147 => 59,  144 => 56,  141 => 54,  133 => 51,  130 => 65,  125 => 20,  122 => 47,  116 => 46,  112 => 40,  109 => 33,  106 => 37,  103 => 16,  99 => 46,  95 => 44,  92 => 32,  86 => 29,  82 => 28,  80 => 19,  73 => 26,  64 => 17,  60 => 14,  57 => 14,  54 => 12,  51 => 11,  48 => 16,  45 => 12,  42 => 6,  39 => 16,  36 => 5,  33 => 4,  30 => 3,);
    }
}
