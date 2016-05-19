<?php

/* AcmeChampionatBundle:Saison:index.html.twig */
class __TwigTemplate_6de528e0c264328a1cf595a09e713e27d0edd6bf9c377a7143d5b0d921c76550 extends Twig_Template
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
             
            <tr style=\"height: 20px;\" >
                <td style=\"width:25%;\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journee", array("saison" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
            echo "</a></td>


                <td style=\"width:35%;\" >";
            // line 41
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td style=\"width:35%;\" >";
            // line 42
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                
               
            </tr>
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

 ";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
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
        return array (  244 => 99,  234 => 95,  231 => 94,  205 => 80,  192 => 75,  148 => 58,  81 => 23,  90 => 37,  97 => 34,  77 => 21,  65 => 23,  118 => 45,  114 => 57,  76 => 29,  70 => 34,  53 => 20,  113 => 31,  100 => 45,  58 => 17,  313 => 141,  308 => 139,  304 => 138,  300 => 137,  295 => 136,  292 => 135,  282 => 118,  275 => 113,  272 => 112,  266 => 103,  263 => 102,  257 => 98,  249 => 94,  236 => 84,  233 => 83,  223 => 89,  216 => 11,  212 => 10,  207 => 8,  202 => 7,  185 => 74,  167 => 118,  160 => 112,  152 => 60,  150 => 102,  104 => 60,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 119,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 73,  220 => 70,  214 => 84,  177 => 69,  169 => 121,  140 => 94,  132 => 51,  128 => 49,  107 => 48,  61 => 23,  273 => 96,  269 => 94,  254 => 97,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 16,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 62,  143 => 57,  135 => 91,  119 => 42,  102 => 48,  71 => 30,  67 => 15,  63 => 25,  59 => 17,  38 => 9,  94 => 39,  89 => 35,  85 => 38,  75 => 30,  68 => 25,  56 => 21,  87 => 41,  21 => 2,  26 => 6,  93 => 42,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 73,  156 => 61,  151 => 69,  142 => 96,  138 => 64,  136 => 56,  121 => 47,  117 => 53,  105 => 29,  91 => 31,  62 => 22,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 38,  72 => 28,  69 => 25,  47 => 9,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 97,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 45,  101 => 37,  98 => 27,  96 => 55,  83 => 25,  74 => 35,  66 => 15,  55 => 20,  52 => 21,  50 => 14,  43 => 8,  41 => 9,  35 => 6,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 79,  193 => 5,  189 => 71,  187 => 143,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 65,  162 => 115,  154 => 58,  149 => 51,  147 => 101,  144 => 49,  141 => 56,  133 => 83,  130 => 41,  125 => 42,  122 => 40,  116 => 41,  112 => 47,  109 => 50,  106 => 49,  103 => 32,  99 => 31,  95 => 26,  92 => 37,  86 => 51,  82 => 32,  80 => 31,  73 => 44,  64 => 26,  60 => 18,  57 => 23,  54 => 22,  51 => 14,  48 => 13,  45 => 11,  42 => 10,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
