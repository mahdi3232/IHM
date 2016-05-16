<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_28b15688e21b5a3729f34a4fcbed6b46e6a6c872a5f253084fc8509002c57a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  124 => 59,  228 => 92,  225 => 91,  155 => 60,  81 => 23,  77 => 36,  97 => 42,  127 => 28,  118 => 46,  90 => 32,  126 => 50,  65 => 19,  84 => 29,  70 => 29,  53 => 11,  113 => 31,  100 => 36,  58 => 17,  304 => 145,  299 => 143,  295 => 142,  291 => 141,  286 => 140,  279 => 124,  276 => 123,  272 => 119,  263 => 109,  260 => 108,  251 => 103,  242 => 96,  239 => 95,  233 => 16,  222 => 11,  218 => 10,  213 => 84,  205 => 6,  191 => 139,  175 => 67,  153 => 107,  148 => 102,  146 => 100,  104 => 47,  76 => 17,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 139,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 15,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 48,  61 => 12,  273 => 96,  269 => 118,  254 => 104,  243 => 88,  240 => 86,  238 => 96,  235 => 95,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 86,  208 => 81,  204 => 72,  179 => 69,  159 => 72,  143 => 56,  135 => 53,  119 => 46,  102 => 17,  71 => 30,  67 => 15,  63 => 23,  59 => 13,  38 => 6,  94 => 34,  89 => 40,  85 => 38,  75 => 36,  68 => 25,  56 => 11,  87 => 24,  21 => 2,  26 => 9,  93 => 41,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 72,  171 => 66,  166 => 118,  163 => 74,  158 => 61,  156 => 71,  151 => 59,  142 => 56,  138 => 54,  136 => 62,  121 => 52,  117 => 19,  105 => 18,  91 => 41,  62 => 18,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 37,  72 => 28,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 100,  157 => 56,  145 => 46,  139 => 95,  131 => 64,  123 => 47,  120 => 20,  115 => 51,  111 => 49,  108 => 19,  101 => 44,  98 => 27,  96 => 35,  83 => 28,  74 => 35,  66 => 24,  55 => 24,  52 => 10,  50 => 14,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 77,  193 => 76,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 123,  168 => 120,  164 => 59,  162 => 63,  154 => 58,  149 => 67,  147 => 57,  144 => 49,  141 => 97,  133 => 55,  130 => 41,  125 => 42,  122 => 40,  116 => 41,  112 => 43,  109 => 68,  106 => 42,  103 => 32,  99 => 64,  95 => 43,  92 => 37,  86 => 40,  82 => 28,  80 => 31,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 3,);
    }
}
