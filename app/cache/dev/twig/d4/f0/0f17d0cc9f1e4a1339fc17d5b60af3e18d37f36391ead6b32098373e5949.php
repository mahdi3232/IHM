<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_d4f00f17d0cc9f1e4a1339fc17d5b60af3e18d37f36391ead6b32098373e5949 extends Twig_Template
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
        return array (  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  46 => 14,  42 => 12,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  313 => 141,  308 => 139,  304 => 138,  300 => 137,  295 => 136,  292 => 135,  285 => 119,  282 => 118,  275 => 113,  272 => 112,  266 => 103,  263 => 102,  257 => 98,  254 => 97,  249 => 94,  240 => 86,  236 => 84,  233 => 83,  227 => 16,  216 => 11,  212 => 10,  207 => 8,  202 => 7,  193 => 5,  187 => 143,  169 => 121,  167 => 118,  162 => 115,  160 => 112,  150 => 102,  147 => 101,  145 => 97,  142 => 96,  140 => 94,  135 => 91,  133 => 83,  108 => 61,  104 => 60,  96 => 55,  91 => 35,  86 => 51,  82 => 50,  73 => 44,  57 => 31,  40 => 18,  38 => 6,  34 => 5,  28 => 1,  244 => 99,  241 => 98,  234 => 95,  231 => 94,  223 => 15,  219 => 87,  214 => 84,  205 => 80,  199 => 6,  192 => 75,  185 => 135,  177 => 69,  173 => 68,  164 => 65,  159 => 62,  156 => 61,  152 => 106,  148 => 58,  143 => 57,  141 => 56,  125 => 42,  122 => 40,  113 => 31,  105 => 29,  98 => 27,  95 => 26,  87 => 24,  81 => 23,  77 => 21,  64 => 19,  60 => 18,  54 => 15,  50 => 15,  44 => 12,  41 => 9,  35 => 4,  32 => 6,);
    }
}
