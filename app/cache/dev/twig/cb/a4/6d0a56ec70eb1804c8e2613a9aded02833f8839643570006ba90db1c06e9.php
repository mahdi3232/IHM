<?php

/* AcmeChampionatBundle:Equipe:index.html.twig */
class __TwigTemplate_cba46d0a56ec70eb1804c8e2613a9aded02833f8839643570006ba90db1c06e9 extends Twig_Template
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
   <h5> <p class=\"bg-info\">Ligue :  ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue"), "html", null, true);
        echo "<br>
   Saison :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "Libelle"), "html", null, true);
        echo "<br></h5>
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idligue"]) ? $context["idligue"] : $this->getContext($context, "idligue")), "id"), "html", null, true);
        echo "
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

                 <td style=\"width:50px;\" ><br><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        return array (  126 => 50,  65 => 19,  84 => 39,  70 => 29,  53 => 12,  113 => 43,  100 => 46,  58 => 17,  304 => 145,  299 => 143,  295 => 142,  291 => 141,  286 => 140,  279 => 124,  276 => 123,  272 => 119,  263 => 109,  260 => 108,  251 => 103,  242 => 96,  239 => 95,  233 => 16,  222 => 11,  218 => 10,  213 => 8,  205 => 6,  191 => 139,  175 => 125,  153 => 107,  148 => 102,  146 => 100,  104 => 47,  76 => 31,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 139,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 15,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 48,  61 => 18,  273 => 96,  269 => 118,  254 => 104,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 7,  204 => 72,  179 => 69,  159 => 72,  143 => 56,  135 => 53,  119 => 46,  102 => 32,  71 => 30,  67 => 15,  63 => 25,  59 => 25,  38 => 11,  94 => 37,  89 => 40,  85 => 38,  75 => 36,  68 => 29,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 41,  88 => 35,  78 => 30,  46 => 14,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 118,  163 => 74,  158 => 112,  156 => 71,  151 => 103,  142 => 59,  138 => 54,  136 => 62,  121 => 46,  117 => 44,  105 => 42,  91 => 41,  62 => 18,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 37,  72 => 30,  69 => 25,  47 => 9,  40 => 18,  37 => 10,  22 => 2,  246 => 100,  157 => 56,  145 => 46,  139 => 95,  131 => 52,  123 => 53,  120 => 40,  115 => 51,  111 => 37,  108 => 45,  101 => 39,  98 => 38,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 24,  52 => 21,  50 => 10,  43 => 8,  41 => 12,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 5,  193 => 147,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 123,  168 => 120,  164 => 59,  162 => 57,  154 => 58,  149 => 67,  147 => 58,  144 => 49,  141 => 97,  133 => 55,  130 => 41,  125 => 44,  122 => 48,  116 => 41,  112 => 47,  109 => 68,  106 => 46,  103 => 32,  99 => 64,  95 => 63,  92 => 37,  86 => 40,  82 => 31,  80 => 19,  73 => 19,  64 => 27,  60 => 22,  57 => 31,  54 => 10,  51 => 14,  48 => 13,  45 => 10,  42 => 9,  39 => 8,  36 => 5,  33 => 3,  30 => 2,);
    }
}
