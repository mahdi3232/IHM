<?php

/* AcmeChampionatBundle:Equipe:index.html.twig */
class __TwigTemplate_6dabe7cc11038a9201e58b1465a330ef418ea860560ddab8d83759997d65f0f7 extends Twig_Template
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

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        // line 6
        echo "<h4>Liste des équipes </h4>
  ";
    }

    // line 8
    public function block_panelbody($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel-body\">
     <p class=\"bg-info\"><span class=\"glyphicon glyphicon-tower\" aria-hidden=\"true\"> Ligue :  ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue"), "html", null, true);
        echo "</span><br><br>
            <span class=\"glyphicon glyphicon-record\" aria-hidden=\"true\">Saison :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "Libelle"), "html", null, true);
        echo "</span><br>
      
       </p>
       
</div>
";
    }

    // line 18
    public function block_tableau($context, array $blocks = array())
    {
        // line 19
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                 <th>Nom équipe</th>
                <th></th>
               
               
            </tr>
        </thead>
        <tbody
            
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                <tr style=\"height: 20px;width:50px;\" >
               
                
             
                <td style=\"height: 20%;width:50px; \"> <img src=";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ".png> </td>

                 <td style=\"width:50px;\" ><br><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur", array("equipe" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomEquipe"), "html", null, true);
            echo "</a></td>

               

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "<ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("equipe_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Equipe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  114 => 48,  76 => 31,  70 => 29,  53 => 18,  113 => 51,  100 => 45,  58 => 17,  313 => 141,  308 => 139,  304 => 138,  300 => 137,  295 => 136,  292 => 135,  282 => 118,  275 => 113,  272 => 112,  266 => 103,  263 => 102,  257 => 98,  249 => 94,  236 => 84,  233 => 83,  223 => 15,  216 => 11,  212 => 10,  207 => 8,  202 => 7,  185 => 135,  167 => 118,  160 => 112,  152 => 106,  150 => 102,  104 => 60,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 119,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 121,  140 => 94,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 97,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 16,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 91,  119 => 42,  102 => 48,  71 => 30,  67 => 15,  63 => 25,  59 => 18,  38 => 11,  94 => 28,  89 => 40,  85 => 35,  75 => 30,  68 => 29,  56 => 21,  87 => 41,  21 => 2,  26 => 6,  93 => 41,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 73,  156 => 66,  151 => 69,  142 => 96,  138 => 64,  136 => 56,  121 => 46,  117 => 53,  105 => 43,  91 => 37,  62 => 19,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 31,  72 => 30,  69 => 25,  47 => 9,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 97,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 46,  108 => 45,  101 => 32,  98 => 38,  96 => 55,  83 => 25,  74 => 14,  66 => 15,  55 => 24,  52 => 21,  50 => 10,  43 => 8,  41 => 12,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 6,  193 => 5,  189 => 71,  187 => 143,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 115,  154 => 58,  149 => 51,  147 => 101,  144 => 49,  141 => 48,  133 => 83,  130 => 41,  125 => 55,  122 => 43,  116 => 41,  112 => 47,  109 => 50,  106 => 49,  103 => 32,  99 => 31,  95 => 43,  92 => 37,  86 => 51,  82 => 32,  80 => 19,  73 => 44,  64 => 27,  60 => 22,  57 => 31,  54 => 10,  51 => 14,  48 => 13,  45 => 10,  42 => 9,  39 => 8,  36 => 5,  33 => 3,  30 => 2,);
    }
}
