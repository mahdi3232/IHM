<?php

/* AcmeChampionatBundle:Saison:index.html.twig */
class __TwigTemplate_4b03e17ab00c7e836adff92d9f9012ec4a9c64451b200ddf58e6a0fa5fe04462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'panelbody' => array($this, 'block_panelbody'),
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

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        // line 5
        echo "<h4>Saison list </h4>
  ";
    }

    // line 9
    public function block_panelbody($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel-body\">
    <h5> <p class=\"bg-info\">Ligue :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")), "nomLigue"), "html", null, true);
        echo "</h5>
       
       </p>
</div>
";
    }

    // line 22
    public function block_tableau($context, array $blocks = array())
    {
        // line 23
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                <th>Libelle</th>
                <th>Datedebut</th>
                <th>Datefin</th>
                
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "
             ";
            // line 36
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idLigue") == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 37
                echo "            <tr style=\"height: 20px;\" >
                <td style=\"width:25%;\"><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journee", array("saison" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
                echo "</a></td>

            <tr style=\"height: 20px;\" >
                <td style=\"width:25%;\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
                echo "</a></td>

                <td style=\"width:35%;\" >";
                // line 43
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                <td style=\"width:35%;\" >";
                // line 44
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                
               
            </tr>
            ";
            }
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

 ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "<ul>
        <li>
            <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("saison_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Saison:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  228 => 92,  225 => 91,  155 => 60,  81 => 23,  77 => 36,  97 => 42,  127 => 62,  118 => 46,  90 => 41,  126 => 50,  65 => 19,  84 => 39,  70 => 34,  53 => 20,  113 => 31,  100 => 36,  58 => 17,  304 => 145,  299 => 143,  295 => 142,  291 => 141,  286 => 140,  279 => 124,  276 => 123,  272 => 119,  263 => 109,  260 => 108,  251 => 103,  242 => 96,  239 => 95,  233 => 16,  222 => 11,  218 => 10,  213 => 84,  205 => 6,  191 => 139,  175 => 67,  153 => 107,  148 => 102,  146 => 100,  104 => 47,  76 => 29,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 139,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 15,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 48,  61 => 23,  273 => 96,  269 => 118,  254 => 104,  243 => 88,  240 => 86,  238 => 96,  235 => 95,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 86,  208 => 81,  204 => 72,  179 => 69,  159 => 72,  143 => 56,  135 => 53,  119 => 46,  102 => 32,  71 => 30,  67 => 15,  63 => 23,  59 => 17,  38 => 9,  94 => 35,  89 => 40,  85 => 38,  75 => 36,  68 => 25,  56 => 21,  87 => 24,  21 => 2,  26 => 6,  93 => 41,  88 => 35,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 72,  171 => 66,  166 => 118,  163 => 74,  158 => 61,  156 => 71,  151 => 59,  142 => 56,  138 => 54,  136 => 62,  121 => 52,  117 => 50,  105 => 29,  91 => 41,  62 => 18,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 37,  72 => 28,  69 => 25,  47 => 9,  40 => 18,  37 => 10,  22 => 2,  246 => 100,  157 => 56,  145 => 46,  139 => 95,  131 => 64,  123 => 47,  120 => 45,  115 => 51,  111 => 49,  108 => 45,  101 => 44,  98 => 27,  96 => 35,  83 => 28,  74 => 35,  66 => 24,  55 => 24,  52 => 21,  50 => 14,  43 => 8,  41 => 9,  35 => 6,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 77,  193 => 76,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 123,  168 => 120,  164 => 59,  162 => 63,  154 => 58,  149 => 67,  147 => 57,  144 => 49,  141 => 97,  133 => 55,  130 => 41,  125 => 42,  122 => 40,  116 => 41,  112 => 43,  109 => 68,  106 => 42,  103 => 32,  99 => 64,  95 => 43,  92 => 37,  86 => 40,  82 => 38,  80 => 31,  73 => 19,  64 => 26,  60 => 18,  57 => 23,  54 => 22,  51 => 14,  48 => 13,  45 => 11,  42 => 10,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
