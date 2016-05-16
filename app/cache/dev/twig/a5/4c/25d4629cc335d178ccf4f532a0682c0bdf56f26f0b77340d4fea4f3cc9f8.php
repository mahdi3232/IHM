<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_a54c25d4629cc335d178ccf4f532a0682c0bdf56f26f0b77340d4fea4f3cc9f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_demo_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  228 => 92,  225 => 91,  213 => 84,  175 => 67,  155 => 60,  81 => 23,  77 => 36,  97 => 42,  127 => 28,  118 => 46,  90 => 32,  110 => 22,  76 => 17,  84 => 29,  70 => 29,  53 => 11,  113 => 31,  100 => 36,  58 => 17,  306 => 137,  301 => 135,  297 => 134,  293 => 133,  288 => 132,  275 => 114,  265 => 108,  259 => 99,  256 => 98,  250 => 94,  242 => 90,  232 => 83,  223 => 16,  212 => 11,  198 => 7,  195 => 6,  181 => 131,  165 => 117,  148 => 102,  146 => 98,  129 => 82,  104 => 47,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 131,  283 => 88,  278 => 115,  268 => 109,  264 => 84,  258 => 81,  252 => 80,  247 => 93,  241 => 77,  229 => 82,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 48,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 96,  235 => 95,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 15,  217 => 86,  208 => 81,  204 => 72,  179 => 69,  159 => 72,  143 => 97,  135 => 53,  119 => 48,  102 => 17,  71 => 30,  67 => 15,  63 => 23,  59 => 13,  38 => 6,  94 => 34,  89 => 40,  85 => 38,  75 => 30,  68 => 25,  56 => 11,  87 => 24,  21 => 2,  26 => 9,  93 => 41,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 72,  171 => 66,  166 => 71,  163 => 74,  158 => 61,  156 => 71,  151 => 59,  142 => 56,  138 => 92,  136 => 62,  121 => 52,  117 => 19,  105 => 18,  91 => 37,  62 => 19,  49 => 13,  24 => 4,  25 => 35,  19 => 1,  79 => 37,  72 => 28,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 64,  123 => 47,  120 => 20,  115 => 51,  111 => 49,  108 => 19,  101 => 44,  98 => 27,  96 => 35,  83 => 28,  74 => 35,  66 => 24,  55 => 24,  52 => 14,  50 => 14,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 8,  199 => 77,  193 => 76,  189 => 5,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 67,  147 => 57,  144 => 49,  141 => 93,  133 => 55,  130 => 41,  125 => 42,  122 => 40,  116 => 46,  112 => 43,  109 => 34,  106 => 42,  103 => 32,  99 => 31,  95 => 43,  92 => 37,  86 => 40,  82 => 28,  80 => 31,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
