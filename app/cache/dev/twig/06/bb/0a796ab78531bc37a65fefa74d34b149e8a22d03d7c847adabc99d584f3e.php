<?php

/* AcmeChampionatBundle:Classement:index.html.twig */
class __TwigTemplate_06bb0a796ab78531bc37a65fefa74d34b149e8a22d03d7c847adabc99d584f3e extends Twig_Template
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

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        // line 4
        echo "<h4>Classement list</h4>
  ";
    }

    // line 9
    public function block_panelbody($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel-body\">
    <h5> <p class=\"bg-info\">Ligue :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue"), "html", null, true);
        echo "<br>
            Saison :  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "Libelle"), "html", null, true);
        echo "<br></h5>

</p>
</div>
";
    }

    // line 17
    public function block_tableau($context, array $blocks = array())
    {
        // line 18
        echo "<table class=\"table table-hover\">
    <thead>
        <tr>
            <th style=\"width: 850px; \">Equipe</th>

            <th >MJ</th>
            <th>MG</th>
            <th>MP</th>
            <th style=\"width:70px; \">MN</th>
            <th>BM</th>
            <th>BC</th>
            <th style=\"width:80px ;\">DIFF</th>
            <th >Points</th>


        </tr>
    </thead>
    <tbody>



    ";
        // line 39
        $context["i"] = 0;
        // line 40
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "                      ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 42
            echo "        <tr>
            <td >


            ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
            foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
                // line 47
                echo "                  ";
                if (($this->getAttribute((isset($context["entityeq"]) ? $context["entityeq"] : $this->getContext($context, "entityeq")), "id") === (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                    // line 48
                    echo "                <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityeq"]) ? $context["entityeq"] : $this->getContext($context, "entityeq")), "id"), "html", null, true);
                    echo ".png>

                  ";
                }
                // line 51
                echo "

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</td>
            <td >0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classement_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPoints"), "html", null, true);
            echo "</a></td>


        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
    </tbody>
</table>
 ";
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "<ul>
    <li>
        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("classement_new");
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Classement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 39,  70 => 29,  53 => 18,  113 => 51,  100 => 46,  58 => 17,  306 => 137,  301 => 135,  297 => 134,  293 => 133,  288 => 132,  275 => 114,  265 => 108,  259 => 99,  256 => 98,  250 => 94,  242 => 90,  232 => 83,  223 => 16,  212 => 11,  198 => 7,  195 => 6,  181 => 131,  165 => 117,  148 => 102,  146 => 98,  129 => 82,  104 => 47,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 131,  283 => 88,  278 => 115,  268 => 109,  264 => 84,  258 => 81,  252 => 80,  247 => 93,  241 => 77,  229 => 82,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 48,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 84,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 15,  217 => 75,  208 => 10,  204 => 72,  179 => 69,  159 => 72,  143 => 97,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 42,  89 => 40,  85 => 38,  75 => 36,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 41,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 139,  171 => 61,  166 => 71,  163 => 74,  158 => 111,  156 => 71,  151 => 63,  142 => 59,  138 => 92,  136 => 62,  121 => 46,  117 => 44,  105 => 40,  91 => 41,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 37,  72 => 16,  69 => 25,  47 => 9,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 87,  123 => 53,  120 => 40,  115 => 51,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 55,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 8,  199 => 67,  193 => 73,  189 => 5,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 67,  147 => 58,  144 => 49,  141 => 93,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 46,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 40,  82 => 38,  80 => 19,  73 => 44,  64 => 17,  60 => 22,  57 => 31,  54 => 10,  51 => 14,  48 => 13,  45 => 11,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
