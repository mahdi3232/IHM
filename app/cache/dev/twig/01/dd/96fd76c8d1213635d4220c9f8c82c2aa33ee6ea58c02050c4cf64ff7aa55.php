<?php

/* AcmeChampionatBundle:Matche:index.html.twig */
class __TwigTemplate_01dd96fd76c8d1213635d4220c9f8c82c2aa33ee6ea58c02050c4cf64ff7aa55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'panelbody' => array($this, 'block_panelbody'),
            'tableau' => array($this, 'block_tableau'),
<<<<<<< HEAD
            'left' => array($this, 'block_left'),
=======
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
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
<<<<<<< HEAD
        echo "<h4>Matche list
</h4>
=======
        echo "Joueur list

>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
";
    }

    // line 9
    public function block_panelbody($context, array $blocks = array())
    {
<<<<<<< HEAD
        // line 12
        echo "<form method=\"GET\" action=\"";
        echo $this->env->getExtension('routing')->getPath("matche");
        echo "\">
    <div class=\"panel-body\">
        <p class=\"bg-info\">Ligue: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityLigue"]) ? $context["entityLigue"] : $this->getContext($context, "entityLigue")), "nomLigue"), "html", null, true);
        echo "<br><br>
            Saison: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "libelle"), "html", null, true);
        echo "<br><br>
            Journeé:
            <select class=\"form-control\" style=\"width: 150px;\" name=\"journee\">
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libellejournne"]) ? $context["libellejournne"] : $this->getContext($context, "libellejournne")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                    <option id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo " value=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
            echo "</option>     
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </select>
                <input class=\"btn btn-default\" type=\"submit\" value=\"Changer\">
            </p>
    </form>


=======
        // line 10
        echo "<div class=\"panel-body\">
    <p class=\"bg-success\">Ligue: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityLigue"]) ? $context["entityLigue"] : $this->getContext($context, "entityLigue")), "nomLigue"), "html", null, true);
        echo "<br>
        Saison: <br>
        Journeé:<br></p>
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
</div>
";
    }

<<<<<<< HEAD
    // line 32
    public function block_tableau($context, array $blocks = array())
    {
        // line 34
        echo "<table class=\"table table-hover\" >
    <thead>
        <tr>
            <th>Equipe 1</th>
            <th>Date et Heure</th>
            

            <th>Equipe 2</th>

        </tr>
    </thead>
    <tbody>
    
        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "

        ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeMatcheJournee"]) ? $context["listeMatcheJournee"] : $this->getContext($context, "listeMatcheJournee")));
            foreach ($context['_seq'] as $context["_key"] => $context["listeMj"]) {
                // line 51
                echo "                  ";
                if (($this->getAttribute((isset($context["listeMj"]) ? $context["listeMj"] : $this->getContext($context, "listeMj")), "id") === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                    // line 52
                    echo "            <tr  >
                <td width=\"40%\">         
                    <img src=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMinMatche/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                    echo ".png\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                    echo "
                </td>

                <td width=\"20%\"><a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
                    echo "</a>            
                <a href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "H:i"), "html", null, true);
                    echo "</a>
                </td>
                


                <td width=\"40%\"><img src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMinMatche/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
                    echo ".png\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
                    echo "</td>

            </tr>
                  ";
                }
                // line 67
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeMj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "


=======
    // line 20
    public function block_tableau($context, array $blocks = array())
    {
        // line 21
        echo "<table class=\"table table-hover\" >
<thead>
    <tr>
        <th>Equipe 1</th>
        <th>Date</th>
        <th>Heure</th>

        <th>Equipe 2</th>

    </tr>
</thead>
<tbody>
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "        <tr class=\"info\" >
            <td width=\"40%\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</td>

            <td width=\"10%\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
            echo "</a></td>
            <td width=\"10%\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "H:i"), "html", null, true);
            echo "</a></td>


            <td width=\"40%\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
            echo "</td>

        </tr>
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 72
        echo "        </tbody>
    </table>
        
       
    ";
    }

    // line 77
    public function block_left($context, array $blocks = array())
    {
        // line 78
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
        echo 53;
        echo ".jpg\">
                     ";
    }

=======
        // line 45
        echo "    </tbody>
</table>
    ";
    }

>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Matche:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  174 => 72,  124 => 54,  81 => 33,  114 => 43,  90 => 34,  77 => 24,  110 => 42,  76 => 21,  104 => 37,  100 => 46,  84 => 28,  70 => 29,  53 => 15,  65 => 19,  58 => 20,  276 => 132,  271 => 130,  267 => 129,  263 => 128,  255 => 126,  251 => 111,  248 => 110,  244 => 106,  232 => 95,  226 => 91,  223 => 90,  218 => 87,  211 => 82,  205 => 16,  194 => 11,  190 => 10,  185 => 78,  180 => 7,  165 => 68,  118 => 45,  113 => 50,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 127,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 83,  177 => 6,  169 => 60,  140 => 107,  132 => 51,  128 => 95,  107 => 48,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 96,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 37,  71 => 30,  67 => 22,  63 => 19,  59 => 18,  38 => 9,  94 => 42,  89 => 34,  85 => 35,  75 => 17,  68 => 14,  56 => 21,  87 => 32,  21 => 2,  26 => 6,  93 => 36,  88 => 35,  78 => 31,  46 => 14,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 15,  196 => 90,  183 => 82,  171 => 5,  166 => 71,  163 => 74,  158 => 67,  156 => 71,  151 => 63,  142 => 59,  138 => 105,  136 => 62,  121 => 46,  117 => 51,  105 => 47,  91 => 32,  62 => 18,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 30,  72 => 28,  69 => 25,  47 => 9,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 110,  139 => 58,  131 => 52,  123 => 53,  120 => 52,  115 => 49,  111 => 41,  108 => 40,  101 => 32,  98 => 31,  96 => 38,  83 => 33,  74 => 14,  66 => 27,  55 => 24,  52 => 19,  50 => 10,  43 => 12,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 77,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 63,  147 => 112,  144 => 49,  141 => 48,  133 => 57,  130 => 99,  125 => 94,  122 => 43,  116 => 41,  112 => 42,  109 => 48,  106 => 36,  103 => 42,  99 => 40,  95 => 28,  92 => 21,  86 => 40,  82 => 31,  80 => 19,  73 => 23,  64 => 26,  60 => 22,  57 => 21,  54 => 19,  51 => 14,  48 => 13,  45 => 10,  42 => 10,  39 => 10,  36 => 5,  33 => 3,  30 => 2,);
=======
        return array (  107 => 45,  97 => 41,  89 => 38,  83 => 37,  78 => 35,  75 => 34,  71 => 33,  57 => 21,  54 => 20,  45 => 11,  42 => 10,  39 => 9,  33 => 4,  30 => 3,);
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
    }
}
