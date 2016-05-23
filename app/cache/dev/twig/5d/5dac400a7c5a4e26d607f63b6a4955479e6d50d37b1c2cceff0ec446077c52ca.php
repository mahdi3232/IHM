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
        echo "<div style=\"display:inline-block;
  vertical-align:top;\">
    <table class=\"table table-hover\"  border=0    >
        <thead>  <tr>
            <th>Rang</th>
        </tr>
        </thead>
        <tbody>
 ";
        // line 28
        $context["i"] = 0;
        // line 29
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
        foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
            echo "  
      
        <tr style=\"height:48px\">
            
            <td style=\"height:48px\">
               
                ";
            // line 35
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 36
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " <br>
            </td>
  </tr>
  
   
     
 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
    </div>
        <div style=\"display:inline-block;
  vertical-align:top;\">
 <table class=\"table table-hover\" id=\"myTable\" style= \" max-width: 90%;margin-left: 48px;margin-top: -825px;\" >
        <thead>
            <tr>
                
                <th style=\"width: 650px; \">Equipe</th>

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
        // line 70
        $context["values"] = array(0 => 9, 1 => 16);
        // line 71
        echo "
            ";
        // line 72
        $context["values"] = twig_array_merge((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")), array(0 => "apple", 1 => "orange", 2 => "apple", 3 => "orange"), array(0 => "apple", 1 => "orange", 2 => "apple", 3 => "orange"));
        // line 73
        echo "            ";
        $context["tempArray"] = array();
        // line 74
        echo "            ";
        $context["i"] = 0;
        // line 75
        echo "
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
        foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
            // line 77
            echo "                ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 78
            echo "                <tr style=\"height:48px\">

                   
                    <td style=\"height:48px\">

                        ";
            // line 83
            if (($this->getAttribute($context["entityeq"], "id", array()) === (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 84
                echo "                            <img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "id", array()), "html", null, true);
                echo ".png>
                            ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "nomEquipe", array()), "html", null, true);
                echo "

                            ";
                // line 87
                $context["id"] = $this->getAttribute($context["entityeq"], "id", array());
                // line 88
                echo "                            ";
                $context["nom"] = $this->getAttribute($context["entityeq"], "nomEquipe", array());
                // line 89
                echo "
                        ";
            }
            // line 91
            echo "                    </td>

                    ";
            // line 93
            $context["mj"] = 0;
            $context["mg"] = 0;
            // line 94
            echo "                    ";
            $context["mp"] = 0;
            $context["mn"] = 0;
            $context["bm"] = 0;
            // line 95
            echo "                    ";
            $context["bc"] = 0;
            $context["df"] = 0;
            $context["p"] = 0;
            // line 96
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) ? $context["matche"] : $this->getContext($context, "matche")));
            foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
                // line 97
                echo "
 
                            ";
                // line 99
                $context["pieces"] = twig_split_filter($this->env, $this->getAttribute($context["mat"], "resultat", array()), "-");
                echo "                     
                        
                        
                        ";
                // line 102
                if (($this->getAttribute($context["entityeq"], "nomEquipe", array()) == $this->getAttribute($context["mat"], "idEquipe", array()))) {
                    // line 103
                    echo "                            ";
                    $context["mj"] = ((isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) + 1);
                    // line 104
                    echo "
                            ";
                    // line 105
                    $context["bm"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array"));
                    // line 106
                    echo "                            ";
                    $context["bc"] = ((isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"));
                    // line 107
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") > $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 108
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 3);
                        echo "  
                                ";
                        // line 109
                        $context["mg"] = ((isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")) + 1);
                        // line 110
                        echo "
                            ";
                    }
                    // line 112
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") == $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 113
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1);
                        echo "   
                                ";
                        // line 114
                        $context["mn"] = ((isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) + 1);
                        // line 115
                        echo "                            ";
                    }
                    // line 116
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") < $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 117
                        echo "                                ";
                        $context["mp"] = ((isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) + 1);
                        // line 118
                        echo "                            ";
                    }
                    // line 119
                    echo "
                        ";
                }
                // line 121
                echo "
                        ";
                // line 122
                if (($this->getAttribute($context["entityeq"], "nomEquipe", array()) == $this->getAttribute($context["mat"], "idEquipe2", array()))) {
                    // line 123
                    echo "                            ";
                    $context["mj"] = ((isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) + 1);
                    // line 124
                    echo "

                            ";
                    // line 126
                    $context["bm"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"));
                    // line 127
                    echo "                            ";
                    $context["bc"] = ((isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array"));
                    // line 128
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") < $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 129
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 3);
                        echo "  
                                ";
                        // line 130
                        $context["mg"] = ((isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")) + 1);
                        // line 131
                        echo "
                            ";
                    }
                    // line 133
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") == $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 134
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1);
                        echo "    
                                ";
                        // line 135
                        $context["mn"] = ((isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) + 1);
                        // line 136
                        echo "                            ";
                    }
                    // line 137
                    echo "
                            ";
                    // line 138
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") > $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 139
                        echo "                                ";
                        $context["mp"] = ((isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) + 1);
                        // line 140
                        echo "                            ";
                    }
                    // line 141
                    echo "
                        ";
                }
                // line 143
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                    ";
            // line 144
            $context["df"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) - (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")));
            // line 145
            echo "            ";
            $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")) => (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), (isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) => (isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")), (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) => (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")), (isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) => (isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")), (isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) => (isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")), (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) => (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")), (isset($context["df"]) ? $context["df"] : $this->getContext($context, "df")) => (isset($context["df"]) ? $context["df"] : $this->getContext($context, "df")), (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p"))));
            // line 146
            echo "


            <td style=\"height:48px\"> ";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")), "html", null, true);
            echo "</td>
            <td style=\"height:48px\">";
            // line 150
            echo twig_escape_filter($this->env, (isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")), "html", null, true);
            echo "</td>
            <td style=\"height:48px\">";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")), "html", null, true);
            echo "</td>
            <td style=\"height:48px\">";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")), "html", null, true);
            echo "</td>
            <td style=\"height:48px\">";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")), "html", null, true);
            echo "</td>
            <td style=\"height:48px\">";
            // line 154
            echo twig_escape_filter($this->env, (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")), "html", null, true);
            echo "</td>

            <td style=\"height:48px\">";
            // line 156
            echo twig_escape_filter($this->env, (isset($context["df"]) ? $context["df"] : $this->getContext($context, "df")), "html", null, true);
            echo "</td>
            <td style=\"height:48px\">";
            // line 157
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo " 







</tbody>
</table>
              
        </div>

";
    }

    // line 174
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
        return array (  409 => 174,  392 => 160,  382 => 157,  378 => 156,  373 => 154,  369 => 153,  365 => 152,  361 => 151,  357 => 150,  353 => 149,  348 => 146,  345 => 145,  343 => 144,  335 => 143,  331 => 141,  328 => 140,  325 => 139,  323 => 138,  320 => 137,  317 => 136,  315 => 135,  310 => 134,  307 => 133,  303 => 131,  301 => 130,  296 => 129,  293 => 128,  290 => 127,  288 => 126,  284 => 124,  281 => 123,  279 => 122,  276 => 121,  272 => 119,  269 => 118,  266 => 117,  263 => 116,  260 => 115,  258 => 114,  253 => 113,  250 => 112,  246 => 110,  244 => 109,  239 => 108,  236 => 107,  233 => 106,  231 => 105,  228 => 104,  225 => 103,  223 => 102,  217 => 99,  213 => 97,  208 => 96,  203 => 95,  198 => 94,  195 => 93,  191 => 91,  187 => 89,  184 => 88,  182 => 87,  177 => 85,  171 => 84,  169 => 83,  162 => 78,  159 => 77,  155 => 76,  152 => 75,  149 => 74,  146 => 73,  144 => 72,  141 => 71,  139 => 70,  111 => 44,  96 => 36,  94 => 35,  82 => 29,  80 => 28,  70 => 20,  67 => 19,  58 => 14,  54 => 13,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*     <div style="display:inline-block;*/
/*   vertical-align:top;">*/
/*     <table class="table table-hover"  border=0    >*/
/*         <thead>  <tr>*/
/*             <th>Rang</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*  {% set i = 0 %}*/
/*    {% for entityeq in entity4 %}  */
/*       */
/*         <tr style="height:48px">*/
/*             */
/*             <td style="height:48px">*/
/*                */
/*                 {% set i = i+1 %}*/
/*                 {{i}} <br>*/
/*             </td>*/
/*   </tr>*/
/*   */
/*    */
/*      */
/*  */
/*  {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*         <div style="display:inline-block;*/
/*   vertical-align:top;">*/
/*  <table class="table table-hover" id="myTable" style= " max-width: 90%;margin-left: 48px;margin-top: -825px;" >*/
/*         <thead>*/
/*             <tr>*/
/*                 */
/*                 <th style="width: 650px; ">Equipe</th>*/
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
/*                 <tr style="height:48px">*/
/* */
/*                    */
/*                     <td style="height:48px">*/
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
/*             <td style="height:48px"> {{mj}}</td>*/
/*             <td style="height:48px">{{mg}}</td>*/
/*             <td style="height:48px">{{mp}}</td>*/
/*             <td style="height:48px">{{mn}}</td>*/
/*             <td style="height:48px">{{bm}}</td>*/
/*             <td style="height:48px">{{bc}}</td>*/
/* */
/*             <td style="height:48px">{{df}}</td>*/
/*             <td style="height:48px">{{p}}</td>*/
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
/*         </div>*/
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
