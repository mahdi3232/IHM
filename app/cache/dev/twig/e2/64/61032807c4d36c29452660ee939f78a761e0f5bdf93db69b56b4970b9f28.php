<?php

/* AcmeChampionatBundle:Contrat:index.html.twig */
class __TwigTemplate_e26461032807c4d36c29452660ee939f78a761e0f5bdf93db69b56b4970b9f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'tableau' => array($this, 'block_tableau'),
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

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo "<h4>Contrat list </h4>
  ";
    }

    // line 11
    public function block_tableau($context, array $blocks = array())
    {
        // line 12
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                <th>Joueur</th>
                <th>Equipe</th>
                 <th>dateDebut</th>
                <th>Datefin</th>
                
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "
             ";
            // line 26
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe") == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 27
                echo "
            <tr style=\"height: 20px;\" >
                <td style=\"width:30%;\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idJoueur"), "html", null, true);
                echo "</a></td>
                <td style=\"width:30%;\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                echo "</a></td>
                <td style=\"width:25%;\" >";
                // line 31
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                <td style=\"width:25%;\" >";
                // line 32
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                
               
            </tr>
            ";
            }
            // line 37
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

 ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "<ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("contrat_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Contrat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  84 => 39,  70 => 29,  53 => 18,  113 => 51,  100 => 46,  58 => 17,  306 => 137,  301 => 135,  297 => 134,  293 => 133,  288 => 132,  275 => 114,  265 => 108,  259 => 99,  256 => 98,  250 => 94,  242 => 90,  232 => 83,  223 => 16,  212 => 11,  198 => 7,  195 => 6,  181 => 131,  165 => 117,  148 => 102,  146 => 98,  129 => 82,  104 => 47,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 131,  283 => 88,  278 => 115,  268 => 109,  264 => 84,  258 => 81,  252 => 80,  247 => 93,  241 => 77,  229 => 82,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 48,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 84,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 15,  217 => 75,  208 => 10,  204 => 72,  179 => 69,  159 => 72,  143 => 97,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 15,  63 => 15,  59 => 25,  38 => 11,  94 => 42,  89 => 40,  85 => 38,  75 => 36,  68 => 29,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 41,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 139,  171 => 61,  166 => 71,  163 => 74,  158 => 111,  156 => 71,  151 => 63,  142 => 59,  138 => 92,  136 => 62,  121 => 46,  117 => 44,  105 => 42,  91 => 41,  62 => 26,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 37,  72 => 30,  69 => 25,  47 => 9,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 87,  123 => 53,  120 => 40,  115 => 51,  111 => 37,  108 => 45,  101 => 32,  98 => 38,  96 => 55,  83 => 25,  74 => 14,  66 => 15,  55 => 24,  52 => 21,  50 => 10,  43 => 8,  41 => 12,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 8,  199 => 67,  193 => 73,  189 => 5,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 67,  147 => 58,  144 => 49,  141 => 93,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 47,  109 => 34,  106 => 46,  103 => 32,  99 => 31,  95 => 28,  92 => 37,  86 => 40,  82 => 32,  80 => 19,  73 => 44,  64 => 27,  60 => 22,  57 => 31,  54 => 10,  51 => 14,  48 => 13,  45 => 11,  42 => 10,  39 => 10,  36 => 5,  33 => 3,  30 => 2,);
    }
}
