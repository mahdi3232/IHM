<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_84ab6a6870cf5feebc935a67dbec556ab644ea012b4c57713208c1905b4ebf71 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD:app/cache/dev/twig/84/ab/6a6870cf5feebc935a67dbec556ab644ea012b4c57713208c1905b4ebf71.php
        return array (  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  276 => 132,  271 => 130,  267 => 129,  263 => 128,  258 => 127,  255 => 126,  251 => 111,  248 => 110,  244 => 106,  241 => 105,  235 => 96,  232 => 95,  226 => 91,  223 => 90,  218 => 87,  214 => 83,  211 => 82,  205 => 16,  201 => 15,  194 => 11,  190 => 10,  185 => 8,  180 => 7,  177 => 6,  171 => 5,  165 => 134,  163 => 126,  147 => 112,  145 => 110,  140 => 107,  138 => 105,  130 => 99,  128 => 95,  125 => 94,  123 => 90,  120 => 89,  118 => 87,  113 => 84,  111 => 82,  57 => 31,  40 => 18,  38 => 6,  34 => 5,  91 => 35,  83 => 30,  71 => 27,  65 => 24,  58 => 20,  52 => 19,  49 => 18,  45 => 17,  31 => 5,  28 => 1,);
=======
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  26 => 3,  24 => 2,  19 => 1,  98 => 40,  93 => 9,  46 => 14,  44 => 9,  40 => 8,  32 => 6,  27 => 4,  22 => 1,  120 => 20,  117 => 19,  110 => 22,  108 => 19,  105 => 18,  102 => 17,  94 => 34,  90 => 32,  88 => 6,  84 => 29,  82 => 28,  78 => 40,  73 => 16,  64 => 13,  61 => 12,  56 => 11,  53 => 10,  47 => 8,  41 => 5,  33 => 3,  158 => 79,  139 => 63,  135 => 62,  131 => 61,  127 => 28,  123 => 59,  106 => 45,  101 => 43,  97 => 41,  85 => 32,  80 => 41,  76 => 17,  74 => 27,  63 => 19,  58 => 17,  48 => 9,  45 => 8,  42 => 12,  36 => 7,  30 => 5,);
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6:app/cache/dev/twig/50/54/7b1a4fc9d9ce024340946e89ef6046768784e835aaa209f6bb105a339ac1.php
    }
}
