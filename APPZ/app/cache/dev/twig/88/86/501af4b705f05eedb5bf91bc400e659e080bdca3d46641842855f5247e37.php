<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_8886501af4b705f05eedb5bf91bc400e659e080bdca3d46641842855f5247e37 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  537 => 179,  532 => 155,  527 => 139,  519 => 17,  516 => 16,  507 => 10,  504 => 9,  498 => 8,  492 => 180,  490 => 179,  485 => 176,  479 => 175,  477 => 174,  473 => 173,  468 => 171,  464 => 170,  459 => 168,  455 => 167,  451 => 166,  446 => 165,  437 => 162,  433 => 160,  431 => 159,  426 => 156,  424 => 155,  421 => 154,  412 => 151,  408 => 149,  404 => 148,  401 => 147,  392 => 144,  388 => 142,  384 => 141,  381 => 140,  379 => 139,  367 => 131,  358 => 127,  352 => 126,  345 => 124,  342 => 123,  340 => 122,  335 => 119,  326 => 115,  320 => 114,  315 => 112,  312 => 111,  310 => 110,  307 => 109,  298 => 105,  291 => 103,  284 => 101,  277 => 99,  270 => 97,  263 => 95,  256 => 93,  251 => 91,  248 => 90,  245 => 89,  236 => 85,  230 => 84,  225 => 82,  216 => 78,  212 => 76,  205 => 75,  199 => 74,  193 => 73,  186 => 72,  184 => 71,  180 => 69,  173 => 68,  166 => 67,  164 => 66,  160 => 64,  153 => 63,  147 => 62,  141 => 61,  134 => 60,  132 => 59,  129 => 58,  121 => 56,  119 => 55,  116 => 54,  109 => 52,  103 => 51,  97 => 50,  90 => 49,  88 => 48,  82 => 45,  79 => 29,  77 => 43,  65 => 37,  54 => 29,  43 => 22,  40 => 16,  38 => 9,  34 => 8,  25 => 1,  89 => 33,  81 => 28,  76 => 26,  69 => 22,  64 => 20,  59 => 18,  56 => 30,  50 => 15,  47 => 13,  45 => 12,  39 => 9,  35 => 8,  31 => 6,  28 => 4,);
    }
}
