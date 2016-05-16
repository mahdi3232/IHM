<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_78250640767865132cc50e164bf58c0f775cbe84aea5ba6e8f79c3f759b76f02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  174 => 72,  124 => 54,  81 => 37,  114 => 56,  90 => 32,  77 => 36,  110 => 22,  76 => 17,  104 => 37,  100 => 43,  84 => 29,  70 => 29,  53 => 11,  65 => 19,  58 => 20,  276 => 132,  271 => 130,  267 => 129,  263 => 128,  255 => 126,  251 => 111,  248 => 110,  244 => 106,  232 => 95,  226 => 91,  223 => 90,  218 => 87,  211 => 82,  205 => 16,  194 => 11,  190 => 10,  185 => 78,  180 => 7,  165 => 68,  118 => 45,  113 => 50,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 127,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 83,  177 => 6,  169 => 60,  140 => 107,  132 => 51,  128 => 95,  107 => 52,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 96,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 30,  67 => 22,  63 => 19,  59 => 13,  38 => 6,  94 => 34,  89 => 34,  85 => 38,  75 => 17,  68 => 14,  56 => 11,  87 => 38,  21 => 2,  26 => 11,  93 => 36,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 15,  196 => 90,  183 => 82,  171 => 5,  166 => 71,  163 => 74,  158 => 67,  156 => 71,  151 => 63,  142 => 59,  138 => 105,  136 => 62,  121 => 46,  117 => 19,  105 => 18,  91 => 32,  62 => 18,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 30,  72 => 28,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 110,  139 => 58,  131 => 52,  123 => 53,  120 => 20,  115 => 49,  111 => 41,  108 => 19,  101 => 32,  98 => 31,  96 => 38,  83 => 33,  74 => 35,  66 => 27,  55 => 24,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 77,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 63,  147 => 112,  144 => 49,  141 => 48,  133 => 57,  130 => 99,  125 => 94,  122 => 43,  116 => 41,  112 => 42,  109 => 48,  106 => 36,  103 => 42,  99 => 40,  95 => 28,  92 => 21,  86 => 40,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 3,);
    }
}
