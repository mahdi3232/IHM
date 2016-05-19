<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_43c2e17e6dfd91f96257648a6e68560219c148e3f8801c737b0867a3a1aba74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  84 => 29,  244 => 99,  234 => 95,  231 => 94,  205 => 80,  192 => 75,  148 => 58,  81 => 23,  90 => 32,  97 => 34,  77 => 21,  65 => 23,  118 => 45,  114 => 57,  76 => 17,  70 => 29,  53 => 10,  113 => 31,  100 => 45,  58 => 17,  313 => 141,  308 => 139,  304 => 138,  300 => 137,  295 => 136,  292 => 135,  282 => 118,  275 => 113,  272 => 112,  266 => 103,  263 => 102,  257 => 98,  249 => 94,  236 => 84,  233 => 83,  223 => 89,  216 => 11,  212 => 10,  207 => 8,  202 => 7,  185 => 74,  167 => 118,  160 => 112,  152 => 60,  150 => 102,  104 => 60,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 119,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 73,  220 => 70,  214 => 84,  177 => 69,  169 => 121,  140 => 94,  132 => 51,  128 => 49,  107 => 48,  61 => 12,  273 => 96,  269 => 94,  254 => 97,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 16,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 62,  143 => 57,  135 => 91,  119 => 42,  102 => 17,  71 => 30,  67 => 15,  63 => 25,  59 => 17,  38 => 6,  94 => 34,  89 => 35,  85 => 38,  75 => 30,  68 => 25,  56 => 11,  87 => 41,  21 => 2,  26 => 6,  93 => 42,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 73,  156 => 61,  151 => 69,  142 => 96,  138 => 64,  136 => 56,  121 => 47,  117 => 19,  105 => 18,  91 => 31,  62 => 22,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 38,  72 => 28,  69 => 25,  47 => 8,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 97,  139 => 45,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 41,  108 => 19,  101 => 37,  98 => 27,  96 => 55,  83 => 25,  74 => 35,  66 => 15,  55 => 20,  52 => 10,  50 => 14,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 79,  193 => 5,  189 => 71,  187 => 143,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 65,  162 => 115,  154 => 58,  149 => 51,  147 => 101,  144 => 49,  141 => 56,  133 => 83,  130 => 41,  125 => 42,  122 => 40,  116 => 41,  112 => 47,  109 => 50,  106 => 49,  103 => 32,  99 => 31,  95 => 26,  92 => 37,  86 => 51,  82 => 28,  80 => 31,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 11,  42 => 10,  39 => 10,  36 => 4,  33 => 3,  30 => 2,);
    }
}
