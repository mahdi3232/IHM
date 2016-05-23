<?php

/* AcmeChampionatBundle:Default:index.html.twig */
class __TwigTemplate_95ae08bcc423cff7d3cec8d821d82c8899f032fa758fdad30b08169df3a582d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'accactive' => array($this, 'block_accactive'),
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
    public function block_accactive($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <ul class=\"exemple ex1\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur", array("equipe" => $context["i"])), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ".png  ></a></li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>

    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/Slide/acceuil1.png"), "html", null, true);
        echo "\" >
                <div class=\"carousel-caption\">

                </div>
            </div>

            <div class=\"item\">
                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/Slide/acceuil2.png"), "html", null, true);
        echo "\" >
                <div class=\"carousel-caption\">

                </div>
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/Slide/acceuil3.png"), "html", null, true);
        echo "\" >
                <div class=\"carousel-caption\">

                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>


    <br><br><br>

    <!--div class=\"scroll\"-->
    <p class=\"bg-info\">Classement</p>   
    <table class=\"table table-hover\" style=\"height: 200px; alignment-adjust:left\" id=\"myTable\">
        <thead>
            <tr>
                <th >Rang</th>
                <th colspan=\"1\">Equipe</th>

                <th >MJ</th>
                <th>MG</th>
                <th>MP</th>
                <th >MN</th>
                <th>BM</th>
                <th>BC</th>
                <th >DIFF</th>
                <th >Points</th>


            </tr>

        </thead>
        <tbody>

            ";
        // line 81
        $context["i"] = 0;
        // line 82
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
        foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
            // line 83
            echo "
                ";
            // line 84
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 85
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 5)) {
                // line 86
                echo "                    <tr>

                        <td>";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                        <td >

                            ";
                // line 91
                if (($this->getAttribute($context["entityeq"], "id", array()) === (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                    // line 92
                    echo "                                <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "id", array()), "html", null, true);
                    echo ".png>
                                ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "nomEquipe", array()), "html", null, true);
                    echo "

                                ";
                    // line 95
                    $context["id"] = $this->getAttribute($context["entityeq"], "id", array());
                    // line 96
                    echo "                                ";
                    $context["nom"] = $this->getAttribute($context["entityeq"], "nomEquipe", array());
                    // line 97
                    echo "
                            ";
                }
                // line 99
                echo "                        </td>

                        ";
                // line 101
                $context["mj"] = 0;
                $context["mg"] = 0;
                // line 102
                echo "                        ";
                $context["mp"] = 0;
                $context["mn"] = 0;
                $context["bm"] = 0;
                // line 103
                echo "                        ";
                $context["bc"] = 0;
                $context["df"] = 0;
                $context["p"] = 0;
                // line 104
                echo "                        
                        ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) ? $context["matche"] : $this->getContext($context, "matche")));
                foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
                    // line 106
                    echo "
                            ";
                    // line 107
                    if (($this->getAttribute($context["entityeq"], "nomEquipe", array()) == $this->getAttribute($context["mat"], "idEquipe", array()))) {
                        // line 108
                        echo "                                ";
                        $context["mj"] = ((isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) + 1);
                        // line 109
                        echo "
                                ";
                        // line 110
                        $context["pieces"] = twig_split_filter($this->env, $this->getAttribute($context["mat"], "resultat", array()), "-");
                        // line 111
                        echo "                                ";
                        $context["bm"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array"));
                        $context["bc"] = ((isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"));
                        // line 112
                        echo "                                ";
                        if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") > $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                            // line 113
                            echo "                                    ";
                            $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 3);
                            echo "  
                                    ";
                            // line 114
                            $context["mg"] = ((isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")) + 1);
                            // line 115
                            echo "
                                ";
                        }
                        // line 117
                        echo "                                ";
                        if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") == $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                            // line 118
                            echo "                                    ";
                            $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1);
                            echo "   
                                    ";
                            // line 119
                            $context["mn"] = ((isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) + 1);
                            // line 120
                            echo "                                ";
                        }
                        // line 121
                        echo "                                ";
                        if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") < $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                            // line 122
                            echo "                                    ";
                            $context["mp"] = ((isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) + 1);
                            // line 123
                            echo "                                ";
                        }
                        // line 124
                        echo "
                            ";
                    }
                    // line 126
                    echo "
                            ";
                    // line 127
                    if (($this->getAttribute($context["entityeq"], "nomEquipe", array()) == $this->getAttribute($context["mat"], "idEquipe2", array()))) {
                        // line 128
                        echo "                                ";
                        $context["mj"] = ((isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) + 1);
                        // line 129
                        echo "
                                ";
                        // line 130
                        $context["pieces"] = twig_split_filter($this->env, $this->getAttribute($context["mat"], "resultat", array()), "-");
                        // line 131
                        echo "                                ";
                        $context["bm"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"));
                        // line 132
                        echo "                                ";
                        $context["bc"] = ((isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array"));
                        // line 133
                        echo "                                ";
                        if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") < $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                            // line 134
                            echo "                                    ";
                            $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 3);
                            echo "  
                                    ";
                            // line 135
                            $context["mg"] = ((isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")) + 1);
                            // line 136
                            echo "
                                ";
                        }
                        // line 138
                        echo "                                ";
                        if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") == $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                            // line 139
                            echo "                                    ";
                            $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1);
                            echo "    
                                    ";
                            // line 140
                            $context["mn"] = ((isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) + 1);
                            // line 141
                            echo "                                ";
                        }
                        // line 142
                        echo "
                                ";
                        // line 143
                        if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") > $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                            // line 144
                            echo "                                    ";
                            $context["mp"] = ((isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) + 1);
                            // line 145
                            echo "                                ";
                        }
                        // line 146
                        echo "
                            ";
                    }
                    // line 148
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                        ";
                // line 149
                $context["df"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) - (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")));
                // line 150
                echo "               


                <td>";
                // line 153
                echo twig_escape_filter($this->env, (isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")), "html", null, true);
                echo "</td>
                <td>";
                // line 154
                echo twig_escape_filter($this->env, (isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")), "html", null, true);
                echo "</td>
                <td>";
                // line 155
                echo twig_escape_filter($this->env, (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")), "html", null, true);
                echo "</td>
                <td>";
                // line 156
                echo twig_escape_filter($this->env, (isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")), "html", null, true);
                echo "</td>
                <td>";
                // line 157
                echo twig_escape_filter($this->env, (isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")), "html", null, true);
                echo "</td>
                <td>";
                // line 158
                echo twig_escape_filter($this->env, (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")), "html", null, true);
                echo "</td>

                <td>";
                // line 160
                echo twig_escape_filter($this->env, (isset($context["df"]) ? $context["df"] : $this->getContext($context, "df")), "html", null, true);
                echo "</td>
                <td >";
                // line 161
                echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
                echo "</td>

            </tr>
        ";
            }
            // line 165
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "
</tbody>
</table>
<div class=\"suite\">
    <a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("classement");
        echo "\" ><button type=\"button\" class=\"btn btn-info\">La suite...</button></a>
</div>
<p class=\"bg-info\">Liste des derniers matches</p>   










<table class=\"table table-hover\" >
    <thead>
        <tr>
            <th>Equipe 1</th>
            <th>Date et Heure</th>


            <th>Equipe 2</th>


        </tr>
    </thead>
    <tbody>
        ";
        // line 196
        $context["i"] = 0;
        echo "  
        ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) ? $context["matche"] : $this->getContext($context, "matche")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 198
            echo "
            ";
            // line 199
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 200
            echo "            ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 4)) {
                // line 201
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeMatcheJournee"]) ? $context["listeMatcheJournee"] : $this->getContext($context, "listeMatcheJournee")));
                foreach ($context['_seq'] as $context["_key"] => $context["listeMj"]) {
                    // line 202
                    echo "                    ";
                    if (($this->getAttribute($context["listeMj"], "id", array()) === $this->getAttribute($context["entity"], "id", array()))) {
                        // line 203
                        echo "
                        <tr >
                            <td width=\"40%\">         
                                <img src=\"";
                        // line 206
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMinMatche/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe", array()), "html", null, true);
                        echo ".png\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe", array()), "html", null, true);
                        echo "
                            </td>

                            <td width=\"20%\"> <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\">       ";
                        // line 209
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
                        echo "</span><br><br>
                                <span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\">     ";
                        // line 210
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "H:i"), "html", null, true);
                        echo "</span> 
                            </td>



                            <td width=\"40%\"><img src=\"";
                        // line 215
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMinMatche/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe2", array()), "html", null, true);
                        echo ".png\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe2", array()), "html", null, true);
                        echo "</td>

                        </tr>

                    ";
                    }
                    // line 220
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeMj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                echo "            ";
            }
            // line 222
            echo "

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "    </tbody>
</table>
<div class=\"suite\">

    <a href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("matche", array("journee" => 2));
        echo "\" ><button type=\"button\" class=\"btn btn-info\">La suite...</button></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 229,  500 => 225,  492 => 222,  489 => 221,  483 => 220,  472 => 215,  464 => 210,  460 => 209,  451 => 206,  446 => 203,  443 => 202,  438 => 201,  435 => 200,  433 => 199,  430 => 198,  426 => 197,  422 => 196,  393 => 170,  387 => 166,  381 => 165,  374 => 161,  370 => 160,  365 => 158,  361 => 157,  357 => 156,  353 => 155,  349 => 154,  345 => 153,  340 => 150,  338 => 149,  330 => 148,  326 => 146,  323 => 145,  320 => 144,  318 => 143,  315 => 142,  312 => 141,  310 => 140,  305 => 139,  302 => 138,  298 => 136,  296 => 135,  291 => 134,  288 => 133,  285 => 132,  282 => 131,  280 => 130,  277 => 129,  274 => 128,  272 => 127,  269 => 126,  265 => 124,  262 => 123,  259 => 122,  256 => 121,  253 => 120,  251 => 119,  246 => 118,  243 => 117,  239 => 115,  237 => 114,  232 => 113,  229 => 112,  225 => 111,  223 => 110,  220 => 109,  217 => 108,  215 => 107,  212 => 106,  208 => 105,  205 => 104,  200 => 103,  195 => 102,  192 => 101,  188 => 99,  184 => 97,  181 => 96,  179 => 95,  174 => 93,  168 => 92,  166 => 91,  160 => 88,  156 => 86,  153 => 85,  151 => 84,  148 => 83,  143 => 82,  141 => 81,  93 => 36,  84 => 30,  74 => 23,  59 => 10,  46 => 7,  42 => 6,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {%block accactive%}class="active"{%endblock%}*/
/* {%block body%}*/
/* */
/*     <ul class="exemple ex1">*/
/*         {% for   i in 1..16  %}*/
/*             <li><a href="{{ path('joueur', { 'equipe': i }) }}"><img src={{asset('bootstrap/fonts/logoEquipeMin/')}}{{ i }}.png  ></a></li>*/
/* */
/*         {%endfor %}*/
/*     </ul>*/
/* */
/*     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*         <!-- Indicators -->*/
/*         <ol class="carousel-indicators">*/
/*             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*             <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*             <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*         </ol>*/
/* */
/*         <!-- Wrapper for slides -->*/
/*         <div class="carousel-inner" role="listbox">*/
/*             <div class="item active">*/
/*                 <img src="{{asset('bootstrap/fonts/Slide/acceuil1.png')}}" >*/
/*                 <div class="carousel-caption">*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="item">*/
/*                 <img src="{{asset('bootstrap/fonts/Slide/acceuil2.png')}}" >*/
/*                 <div class="carousel-caption">*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <img src="{{asset('bootstrap/fonts/Slide/acceuil3.png')}}" >*/
/*                 <div class="carousel-caption">*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <!-- Controls -->*/
/*         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*             <span class="sr-only">Previous</span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*             <span class="sr-only">Next</span>*/
/*         </a>*/
/*     </div>*/
/* */
/* */
/*     <br><br><br>*/
/* */
/*     <!--div class="scroll"-->*/
/*     <p class="bg-info">Classement</p>   */
/*     <table class="table table-hover" style="height: 200px; alignment-adjust:left" id="myTable">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th >Rang</th>*/
/*                 <th colspan="1">Equipe</th>*/
/* */
/*                 <th >MJ</th>*/
/*                 <th>MG</th>*/
/*                 <th>MP</th>*/
/*                 <th >MN</th>*/
/*                 <th>BM</th>*/
/*                 <th>BC</th>*/
/*                 <th >DIFF</th>*/
/*                 <th >Points</th>*/
/* */
/* */
/*             </tr>*/
/* */
/*         </thead>*/
/*         <tbody>*/
/* */
/*             {% set i = 0 %}*/
/*             {% for entityeq in entity4 %}*/
/* */
/*                 {% set i = i+1 %}*/
/*                 {% if i <5 %}*/
/*                     <tr>*/
/* */
/*                         <td>{{i}}</td>*/
/*                         <td >*/
/* */
/*                             {% if entityeq.id is sameas(i) %}*/
/*                                 <img src={{asset('bootstrap/fonts/logoEquipeMin/')}}{{ entityeq.id }}.png>*/
/*                                 {{ entityeq.nomEquipe }}*/
/* */
/*                                 {% set id = entityeq.id %}*/
/*                                 {% set nom= entityeq.nomEquipe %}*/
/* */
/*                             {% endif %}*/
/*                         </td>*/
/* */
/*                         {% set mj = 0 %}{% set mg = 0 %}*/
/*                         {% set mp = 0 %}{% set mn = 0 %}{% set bm = 0 %}*/
/*                         {% set bc = 0 %}{% set df = 0 %}{% set p = 0 %}*/
/*                         */
/*                         {% for mat in matche %}*/
/* */
/*                             {% if entityeq.nomEquipe  ==mat.idEquipe %}*/
/*                                 {% set mj = mj + 1 %}*/
/* */
/*                                 {% set pieces =  mat.resultat|split("-") %}*/
/*                                 {% set bm = bm + pieces[0] %}{% set bc = bc + pieces[1] %}*/
/*                                 {% if pieces[0] > pieces[1] %}*/
/*                                     {% set p =p+ 3 %}  */
/*                                     {% set mg = mg + 1 %}*/
/* */
/*                                 {% endif%}*/
/*                                 {% if pieces[0] == pieces[1] %}*/
/*                                     {% set p =p+ 1 %}   */
/*                                     {% set mn = mn + 1 %}*/
/*                                 {% endif%}*/
/*                                 {% if pieces[0] < pieces[1] %}*/
/*                                     {% set mp = mp + 1 %}*/
/*                                 {% endif%}*/
/* */
/*                             {% endif%}*/
/* */
/*                             {% if entityeq.nomEquipe  ==mat.idEquipe2 %}*/
/*                                 {% set mj = mj + 1 %}*/
/* */
/*                                 {% set pieces =  mat.resultat|split("-") %}*/
/*                                 {% set bm = bm + pieces[1] %}*/
/*                                 {% set bc = bc + pieces[0] %}*/
/*                                 {% if pieces[0] < pieces[1] %}*/
/*                                     {% set p =p+ 3 %}  */
/*                                     {% set mg = mg + 1 %}*/
/* */
/*                                 {% endif%}*/
/*                                 {% if pieces[0] == pieces[1] %}*/
/*                                     {% set p =p+ 1 %}    */
/*                                     {% set mn = mn + 1 %}*/
/*                                 {% endif%}*/
/* */
/*                                 {% if pieces[0] > pieces[1] %}*/
/*                                     {% set mp = mp + 1 %}*/
/*                                 {% endif%}*/
/* */
/*                             {% endif%}*/
/*                         {% endfor%} */
/*                         {% set df = bm - bc %}*/
/*                */
/* */
/* */
/*                 <td>{{mj}}</td>*/
/*                 <td>{{mg}}</td>*/
/*                 <td>{{mp}}</td>*/
/*                 <td>{{mn}}</td>*/
/*                 <td>{{bm}}</td>*/
/*                 <td>{{bc}}</td>*/
/* */
/*                 <td>{{df}}</td>*/
/*                 <td >{{p}}</td>*/
/* */
/*             </tr>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/* </tbody>*/
/* </table>*/
/* <div class="suite">*/
/*     <a href="{{ path('classement')}}" ><button type="button" class="btn btn-info">La suite...</button></a>*/
/* </div>*/
/* <p class="bg-info">Liste des derniers matches</p>   */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* <table class="table table-hover" >*/
/*     <thead>*/
/*         <tr>*/
/*             <th>Equipe 1</th>*/
/*             <th>Date et Heure</th>*/
/* */
/* */
/*             <th>Equipe 2</th>*/
/* */
/* */
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% set i = 0 %}  */
/*         {% for entity in matche %}*/
/* */
/*             {% set i = i+1 %}*/
/*             {% if i <4 %}*/
/*                 {% for listeMj in listeMatcheJournee %}*/
/*                     {% if listeMj.id is sameas(entity.id) %}*/
/* */
/*                         <tr >*/
/*                             <td width="40%">         */
/*                                 <img src="{{asset('bootstrap/fonts/logoEquipeMinMatche/')}}{{ entity.idEquipe }}.png">{{ entity.idEquipe }}*/
/*                             </td>*/
/* */
/*                             <td width="20%"> <span class="glyphicon glyphicon-calendar" aria-hidden="true">       {{ entity.date|date('Y-m-d') }}</span><br><br>*/
/*                                 <span class="glyphicon glyphicon-time" aria-hidden="true">     {{ entity.date|date('H:i') }}</span> */
/*                             </td>*/
/* */
/* */
/* */
/*                             <td width="40%"><img src="{{asset('bootstrap/fonts/logoEquipeMinMatche/')}}{{ entity.idEquipe2 }}.png">{{entity.idEquipe2}}</td>*/
/* */
/*                         </tr>*/
/* */
/*                     {% endif %}*/
/*                 {% endfor%}*/
/*             {% endif %}*/
/* */
/* */
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* <div class="suite">*/
/* */
/*     <a href="{{ path('matche', { 'journee': 2 })}}" ><button type="button" class="btn btn-info">La suite...</button></a>*/
/* </div>*/
/* {%endblock%}*/
/* */
/* */
