<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_d55a2f0f55eef82d24dcfd8fedb7143ab5b0009367d69202a8640d7d3c7500ed extends Twig_Template
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
        echo "Symfony - Welcome";
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
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  124 => 59,  228 => 92,  225 => 91,  155 => 60,  81 => 23,  77 => 36,  97 => 41,  127 => 60,  118 => 46,  90 => 32,  126 => 50,  65 => 19,  84 => 29,  70 => 29,  53 => 11,  113 => 31,  100 => 36,  58 => 17,  304 => 145,  299 => 143,  295 => 142,  291 => 141,  286 => 140,  279 => 124,  276 => 123,  272 => 119,  263 => 109,  260 => 108,  251 => 103,  242 => 96,  239 => 95,  233 => 16,  222 => 11,  218 => 10,  213 => 84,  205 => 6,  191 => 139,  175 => 67,  153 => 107,  148 => 102,  146 => 100,  104 => 47,  76 => 28,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 139,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 15,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 48,  61 => 12,  273 => 96,  269 => 118,  254 => 104,  243 => 88,  240 => 86,  238 => 96,  235 => 95,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 86,  208 => 81,  204 => 72,  179 => 69,  159 => 72,  143 => 56,  135 => 62,  119 => 46,  102 => 17,  71 => 30,  67 => 15,  63 => 19,  59 => 13,  38 => 6,  94 => 34,  89 => 40,  85 => 32,  75 => 36,  68 => 25,  56 => 11,  87 => 24,  21 => 2,  26 => 9,  93 => 41,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 72,  171 => 66,  166 => 118,  163 => 74,  158 => 79,  156 => 71,  151 => 59,  142 => 56,  138 => 54,  136 => 62,  121 => 52,  117 => 19,  105 => 18,  91 => 41,  62 => 18,  49 => 13,  24 => 4,  25 => 35,  19 => 1,  79 => 37,  72 => 28,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 100,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 51,  111 => 49,  108 => 19,  101 => 43,  98 => 27,  96 => 35,  83 => 28,  74 => 27,  66 => 24,  55 => 24,  52 => 14,  50 => 14,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 77,  193 => 76,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 123,  168 => 120,  164 => 59,  162 => 63,  154 => 58,  149 => 67,  147 => 57,  144 => 49,  141 => 97,  133 => 55,  130 => 41,  125 => 42,  122 => 40,  116 => 41,  112 => 43,  109 => 68,  106 => 45,  103 => 32,  99 => 64,  95 => 43,  92 => 37,  86 => 40,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
