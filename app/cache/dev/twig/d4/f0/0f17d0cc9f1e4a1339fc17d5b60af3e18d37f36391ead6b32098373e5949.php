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
        return array (  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  46 => 14,  42 => 12,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  306 => 137,  301 => 135,  297 => 134,  293 => 133,  288 => 132,  285 => 131,  278 => 115,  275 => 114,  268 => 109,  265 => 108,  259 => 99,  256 => 98,  250 => 94,  247 => 93,  242 => 90,  232 => 83,  229 => 82,  223 => 16,  219 => 15,  212 => 11,  203 => 8,  198 => 7,  195 => 6,  189 => 5,  181 => 131,  165 => 117,  163 => 114,  156 => 108,  148 => 102,  146 => 98,  143 => 97,  141 => 93,  138 => 92,  136 => 90,  131 => 87,  129 => 82,  104 => 60,  96 => 55,  91 => 35,  86 => 51,  82 => 50,  73 => 44,  57 => 31,  40 => 18,  38 => 6,  34 => 5,  28 => 1,  238 => 96,  235 => 84,  228 => 92,  225 => 91,  217 => 86,  213 => 84,  208 => 10,  199 => 77,  193 => 76,  183 => 139,  175 => 67,  171 => 66,  162 => 63,  158 => 111,  155 => 60,  151 => 59,  147 => 57,  142 => 56,  140 => 55,  125 => 42,  122 => 40,  113 => 31,  105 => 29,  98 => 27,  95 => 26,  87 => 24,  81 => 23,  77 => 21,  64 => 19,  60 => 18,  54 => 15,  50 => 15,  44 => 12,  41 => 9,  35 => 4,  32 => 6,);
    }
}
