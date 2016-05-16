<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_aa68f8cc1fcefbc7e19723b4e06a13e6b12b26218f6b61a38dad24d82047e345 extends Twig_Template
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
<<<<<<< HEAD:app/cache/dev/twig/aa/68/f8cc1fcefbc7e19723b4e06a13e6b12b26218f6b61a38dad24d82047e345.php
        return array (  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  276 => 132,  271 => 130,  267 => 129,  263 => 128,  258 => 127,  255 => 126,  251 => 111,  248 => 110,  244 => 106,  241 => 105,  235 => 96,  232 => 95,  226 => 91,  223 => 90,  218 => 87,  214 => 83,  211 => 82,  205 => 16,  201 => 15,  194 => 11,  190 => 10,  185 => 8,  180 => 7,  177 => 6,  171 => 5,  165 => 134,  163 => 126,  147 => 112,  145 => 110,  140 => 107,  138 => 105,  130 => 99,  128 => 95,  125 => 94,  123 => 90,  120 => 89,  118 => 87,  113 => 84,  111 => 82,  57 => 31,  40 => 18,  38 => 6,  34 => 5,  91 => 35,  83 => 30,  71 => 27,  65 => 24,  58 => 20,  52 => 19,  49 => 18,  45 => 17,  31 => 5,  28 => 1,);
=======
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  26 => 3,  24 => 2,  19 => 1,  98 => 40,  93 => 9,  46 => 14,  44 => 9,  40 => 8,  32 => 6,  27 => 4,  22 => 1,  120 => 20,  117 => 19,  110 => 22,  108 => 19,  105 => 18,  102 => 17,  94 => 34,  90 => 32,  88 => 6,  84 => 29,  82 => 28,  78 => 40,  73 => 16,  64 => 13,  61 => 12,  56 => 11,  53 => 10,  47 => 8,  41 => 5,  33 => 3,  158 => 79,  139 => 63,  135 => 62,  131 => 61,  127 => 28,  123 => 59,  106 => 45,  101 => 43,  97 => 41,  85 => 32,  80 => 41,  76 => 17,  74 => 27,  63 => 19,  58 => 17,  48 => 9,  45 => 8,  42 => 12,  36 => 7,  30 => 5,);
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6:app/cache/dev/twig/f1/6a/198059ace5cc629967c2ebe5a1c65ce38726b1fbeb15cc8417a326771e53.php
    }
}
