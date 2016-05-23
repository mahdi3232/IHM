<?php

/* AcmeChampionatBundle:Classement:index.html.twig */
class __TwigTemplate_bb1409a6a91f65d8818525dcad8547952d102fc9081116cf4ac95f45de8fc988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Classement:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'classementactive' => array($this, 'block_classementactive'),
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

    // line 7
    public function block_classementactive($context, array $blocks = array())
    {
        // line 8
        echo "    class=\"active\"
";
    }

    // line 11
    public function block_panelbody($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"panel-body\">
        <h5> <p class=\"bg-info\">Ligue :  ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue", array()), "html", null, true);
        echo "<br>
                Saison :  ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "Libelle", array()), "html", null, true);
        echo "<br></h5>

    </p>
</div>
";
    }

    // line 19
    public function block_tableau($context, array $blocks = array())
    {
        // line 20
        $context["i"] = 0;
        // line 21
        echo "    
    
    
    <table class=\"table table-hover\" id=\"myTable\"   >
        <thead>
            <tr>
                <th>Rang</th>
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
        // line 45
        $context["values"] = array(0 => 9, 1 => 16);
        // line 46
        echo "
            ";
        // line 47
        $context["values"] = twig_array_merge((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")), array(0 => "apple", 1 => "orange", 2 => "apple", 3 => "orange"), array(0 => "apple", 1 => "orange", 2 => "apple", 3 => "orange"));
        // line 48
        echo "            ";
        $context["tempArray"] = array();
        // line 49
        echo "            ";
        $context["i"] = 0;
        // line 50
        echo "
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
        foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
            // line 52
            echo "                ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 53
            echo "                <tr>

                    <td>";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                    <td >

                        ";
            // line 58
            if (($this->getAttribute($context["entityeq"], "id", array()) === (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 59
                echo "                            <img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "id", array()), "html", null, true);
                echo ".png>
                            ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "nomEquipe", array()), "html", null, true);
                echo "

                            ";
                // line 62
                $context["id"] = $this->getAttribute($context["entityeq"], "id", array());
                // line 63
                echo "                            ";
                $context["nom"] = $this->getAttribute($context["entityeq"], "nomEquipe", array());
                // line 64
                echo "
                        ";
            }
            // line 66
            echo "                    </td>

                    ";
            // line 68
            $context["mj"] = 0;
            $context["mg"] = 0;
            // line 69
            echo "                    ";
            $context["mp"] = 0;
            $context["mn"] = 0;
            $context["bm"] = 0;
            // line 70
            echo "                    ";
            $context["bc"] = 0;
            $context["df"] = 0;
            $context["p"] = 0;
            // line 71
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) ? $context["matche"] : $this->getContext($context, "matche")));
            foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
                // line 72
                echo "
 
                            ";
                // line 74
                $context["pieces"] = twig_split_filter($this->env, $this->getAttribute($context["mat"], "resultat", array()), "-");
                echo "                     
                        
                        
                        ";
                // line 77
                if (($this->getAttribute($context["entityeq"], "nomEquipe", array()) == $this->getAttribute($context["mat"], "idEquipe", array()))) {
                    // line 78
                    echo "                            ";
                    $context["mj"] = ((isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) + 1);
                    // line 79
                    echo "
                            ";
                    // line 80
                    $context["bm"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array"));
                    // line 81
                    echo "                            ";
                    $context["bc"] = ((isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"));
                    // line 82
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") > $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 83
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 3);
                        echo "  
                                ";
                        // line 84
                        $context["mg"] = ((isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")) + 1);
                        // line 85
                        echo "
                            ";
                    }
                    // line 87
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") == $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 88
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1);
                        echo "   
                                ";
                        // line 89
                        $context["mn"] = ((isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) + 1);
                        // line 90
                        echo "                            ";
                    }
                    // line 91
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") < $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 92
                        echo "                                ";
                        $context["mp"] = ((isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) + 1);
                        // line 93
                        echo "                            ";
                    }
                    // line 94
                    echo "
                        ";
                }
                // line 96
                echo "
                        ";
                // line 97
                if (($this->getAttribute($context["entityeq"], "nomEquipe", array()) == $this->getAttribute($context["mat"], "idEquipe2", array()))) {
                    // line 98
                    echo "                            ";
                    $context["mj"] = ((isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) + 1);
                    // line 99
                    echo "

                            ";
                    // line 101
                    $context["bm"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"));
                    // line 102
                    echo "                            ";
                    $context["bc"] = ((isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array"));
                    // line 103
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") < $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 104
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 3);
                        echo "  
                                ";
                        // line 105
                        $context["mg"] = ((isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")) + 1);
                        // line 106
                        echo "
                            ";
                    }
                    // line 108
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") == $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 109
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1);
                        echo "    
                                ";
                        // line 110
                        $context["mn"] = ((isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) + 1);
                        // line 111
                        echo "                            ";
                    }
                    // line 112
                    echo "
                            ";
                    // line 113
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") > $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 114
                        echo "                                ";
                        $context["mp"] = ((isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) + 1);
                        // line 115
                        echo "                            ";
                    }
                    // line 116
                    echo "
                        ";
                }
                // line 118
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                    ";
            // line 119
            $context["df"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) - (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")));
            // line 120
            echo "            ";
            $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")) => (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), (isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) => (isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")), (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) => (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")), (isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) => (isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")), (isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) => (isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")), (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) => (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")), (isset($context["df"]) ? $context["df"] : $this->getContext($context, "df")) => (isset($context["df"]) ? $context["df"] : $this->getContext($context, "df")), (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p"))));
            // line 121
            echo "


            <td>";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")), "html", null, true);
            echo "</td>
            <td>";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")), "html", null, true);
            echo "</td>
            <td>";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")), "html", null, true);
            echo "</td>
            <td>";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")), "html", null, true);
            echo "</td>
            <td>";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")), "html", null, true);
            echo "</td>
            <td>";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")), "html", null, true);
            echo "</td>

            <td>";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["df"]) ? $context["df"] : $this->getContext($context, "df")), "html", null, true);
            echo "</td>
            <td >";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo " 







</tbody>
</table>
              


";
    }

    // line 149
    public function block_body($context, array $blocks = array())
    {
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
        return array (  371 => 149,  354 => 135,  344 => 132,  340 => 131,  335 => 129,  331 => 128,  327 => 127,  323 => 126,  319 => 125,  315 => 124,  310 => 121,  307 => 120,  305 => 119,  297 => 118,  293 => 116,  290 => 115,  287 => 114,  285 => 113,  282 => 112,  279 => 111,  277 => 110,  272 => 109,  269 => 108,  265 => 106,  263 => 105,  258 => 104,  255 => 103,  252 => 102,  250 => 101,  246 => 99,  243 => 98,  241 => 97,  238 => 96,  234 => 94,  231 => 93,  228 => 92,  225 => 91,  222 => 90,  220 => 89,  215 => 88,  212 => 87,  208 => 85,  206 => 84,  201 => 83,  198 => 82,  195 => 81,  193 => 80,  190 => 79,  187 => 78,  185 => 77,  179 => 74,  175 => 72,  170 => 71,  165 => 70,  160 => 69,  157 => 68,  153 => 66,  149 => 64,  146 => 63,  144 => 62,  139 => 60,  133 => 59,  131 => 58,  125 => 55,  121 => 53,  118 => 52,  114 => 51,  111 => 50,  108 => 49,  105 => 48,  103 => 47,  100 => 46,  98 => 45,  72 => 21,  70 => 20,  67 => 19,  58 => 14,  54 => 13,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block titre -%}*/
/*     <h4>Classement list</h4>*/
/* {% endblock %}*/
/* */
/* {%block classementactive %}*/
/*     class="active"*/
/* {% endblock %}*/
/* */
/* {% block panelbody -%}*/
/*     <div class="panel-body">*/
/*         <h5> <p class="bg-info">Ligue :  {{ entity2.nomLigue }}<br>*/
/*                 Saison :  {{ entity3.Libelle }}<br></h5>*/
/* */
/*     </p>*/
/* </div>*/
/* {% endblock %}*/
/* {% block tableau -%}*/
/*  {% set i = 0 %}*/
/*     */
/*     */
/*     */
/*     <table class="table table-hover" id="myTable"   >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Rang</th>*/
/*                 <th style="width: 850px; ">Equipe</th>*/
/* */
/*                 <th >MJ</th>*/
/*                 <th>MG</th>*/
/*                 <th>MP</th>*/
/*                 <th style="width:70px; ">MN</th>*/
/*                 <th>BM</th>*/
/*                 <th>BC</th>*/
/*                 <th style="width:80px ;">DIFF</th>*/
/*                 <th >Points</th>*/
/* */
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* */
/* */
/*             {% set values = [9, 16] %}*/
/* */
/*             {% set values = values|merge(['apple', 'orange','apple', 'orange'],['apple', 'orange','apple', 'orange']) %}*/
/*             {% set tempArray = {} %}*/
/*             {% set i = 0 %}*/
/* */
/*             {% for entityeq in entity4 %}*/
/*                 {% set i = i+1 %}*/
/*                 <tr>*/
/* */
/*                     <td>{{i}}</td>*/
/*                     <td >*/
/* */
/*                         {% if entityeq.id is sameas(i) %}*/
/*                             <img src={{asset('bootstrap/fonts/logoEquipeMin/')}}{{ entityeq.id }}.png>*/
/*                             {{ entityeq.nomEquipe }}*/
/* */
/*                             {% set id = entityeq.id %}*/
/*                             {% set nom= entityeq.nomEquipe %}*/
/* */
/*                         {% endif %}*/
/*                     </td>*/
/* */
/*                     {% set mj = 0 %}{% set mg = 0 %}*/
/*                     {% set mp = 0 %}{% set mn = 0 %}{% set bm = 0 %}*/
/*                     {% set bc = 0 %}{% set df = 0 %}{% set p = 0 %}*/
/*                     {% for mat in matche %}*/
/* */
/*  */
/*                             {% set pieces =  mat.resultat |split("-") %}                     */
/*                         */
/*                         */
/*                         {% if entityeq.nomEquipe  == mat.idEquipe %}*/
/*                             {% set mj = mj + 1 %}*/
/* */
/*                             {% set bm = bm + pieces[0] %}*/
/*                             {% set bc = bc + pieces[1] %}*/
/*                             {% if pieces[0] > pieces[1] %}*/
/*                                 {% set p =p+ 3 %}  */
/*                                 {% set mg = mg + 1 %}*/
/* */
/*                             {% endif%}*/
/*                             {% if pieces[0] == pieces[1] %}*/
/*                                 {% set p =p+ 1 %}   */
/*                                 {% set mn = mn + 1 %}*/
/*                             {% endif%}*/
/*                             {% if pieces[0] < pieces[1] %}*/
/*                                 {% set mp = mp + 1 %}*/
/*                             {% endif%}*/
/* */
/*                         {% endif%}*/
/* */
/*                         {% if entityeq.nomEquipe  ==mat.idEquipe2 %}*/
/*                             {% set mj = mj + 1 %}*/
/* */
/* */
/*                             {% set bm = bm + pieces[1] %}*/
/*                             {% set bc = bc + pieces[0] %}*/
/*                             {% if pieces[0] < pieces[1] %}*/
/*                                 {% set p =p+ 3 %}  */
/*                                 {% set mg = mg + 1 %}*/
/* */
/*                             {% endif%}*/
/*                             {% if pieces[0] == pieces[1] %}*/
/*                                 {% set p =p+ 1 %}    */
/*                                 {% set mn = mn + 1 %}*/
/*                             {% endif%}*/
/* */
/*                             {% if pieces[0] > pieces[1] %}*/
/*                                 {% set mp = mp + 1 %}*/
/*                             {% endif%}*/
/* */
/*                         {% endif%}*/
/*                     {% endfor%} */
/*                     {% set df = bm - bc %}*/
/*             {% set tempArray = tempArray|merge({(id):(id),(nom):(nom), (mj):(mj),(mp):(mp),(mn):(mn),(bm):(bm),(bc):(bc),(df):(df),(p):(p)})  %}*/
/* */
/* */
/* */
/*             <td>{{mj}}</td>*/
/*             <td>{{mg}}</td>*/
/*             <td>{{mp}}</td>*/
/*             <td>{{mn}}</td>*/
/*             <td>{{bm}}</td>*/
/*             <td>{{bc}}</td>*/
/* */
/*             <td>{{df}}</td>*/
/*             <td >{{p}}</td>*/
/* */
/*         </tr>*/
/*     {% endfor%} */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* </tbody>*/
/* </table>*/
/*               */
/* */
/* */
/* {% endblock %}*/
/* {% block body -%}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
