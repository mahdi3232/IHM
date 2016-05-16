<?php

/* AcmeChampionatBundle:Saison:edit.html.twig */
class __TwigTemplate_9c874236edfef225a5ab26c6be133c616e96e5d06ddc167e12937da1ee815a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Saison edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("saison");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Saison:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 92,  225 => 91,  213 => 84,  175 => 67,  155 => 60,  81 => 23,  77 => 21,  97 => 42,  127 => 49,  118 => 46,  90 => 37,  110 => 43,  76 => 29,  84 => 39,  70 => 29,  53 => 20,  113 => 31,  100 => 36,  58 => 17,  306 => 137,  301 => 135,  297 => 134,  293 => 133,  288 => 132,  275 => 114,  265 => 108,  259 => 99,  256 => 98,  250 => 94,  242 => 90,  232 => 83,  223 => 16,  212 => 11,  198 => 7,  195 => 6,  181 => 131,  165 => 117,  148 => 102,  146 => 98,  129 => 82,  104 => 47,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 131,  283 => 88,  278 => 115,  268 => 109,  264 => 84,  258 => 81,  252 => 80,  247 => 93,  241 => 77,  229 => 82,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 48,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 96,  235 => 95,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 15,  217 => 86,  208 => 81,  204 => 72,  179 => 69,  159 => 72,  143 => 97,  135 => 53,  119 => 48,  102 => 32,  71 => 30,  67 => 15,  63 => 23,  59 => 17,  38 => 9,  94 => 35,  89 => 40,  85 => 38,  75 => 30,  68 => 25,  56 => 21,  87 => 24,  21 => 2,  26 => 6,  93 => 41,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 72,  171 => 66,  166 => 71,  163 => 74,  158 => 61,  156 => 71,  151 => 59,  142 => 56,  138 => 92,  136 => 62,  121 => 52,  117 => 44,  105 => 29,  91 => 37,  62 => 19,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 31,  72 => 28,  69 => 25,  47 => 9,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 87,  123 => 47,  120 => 45,  115 => 51,  111 => 37,  108 => 45,  101 => 32,  98 => 27,  96 => 35,  83 => 28,  74 => 14,  66 => 24,  55 => 24,  52 => 21,  50 => 14,  43 => 8,  41 => 9,  35 => 6,  32 => 3,  29 => 3,  209 => 82,  203 => 8,  199 => 77,  193 => 76,  189 => 5,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 67,  147 => 57,  144 => 49,  141 => 93,  133 => 55,  130 => 41,  125 => 42,  122 => 40,  116 => 46,  112 => 43,  109 => 34,  106 => 42,  103 => 32,  99 => 31,  95 => 26,  92 => 37,  86 => 40,  82 => 32,  80 => 31,  73 => 44,  64 => 26,  60 => 18,  57 => 21,  54 => 15,  51 => 14,  48 => 13,  45 => 10,  42 => 10,  39 => 10,  36 => 5,  33 => 3,  30 => 2,);
    }
}
