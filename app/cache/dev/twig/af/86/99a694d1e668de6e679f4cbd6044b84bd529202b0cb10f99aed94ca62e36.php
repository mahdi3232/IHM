<?php

/* AcmeChampionatBundle:Default:index.html.twig */
class __TwigTemplate_af8699a694d1e668de6e679f4cbd6044b84bd529202b0cb10f99aed94ca62e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur", array("equipe" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
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
    <table class=\"table table-hover\" style=\"height: 200px; alignment-adjust:left\">
        <thead>
            <tr>
                <th >Rang</th>
                <th colspan=\"1\">Equipe</th>

                <th >MJ</th>
                <th>MG</th>
                <th>MP</th>
                <th >MN</th>

                <th >DIFF</th>
                <th >Points</th>


            </tr>
        </thead>
        <tbody>

 ";
        // line 79
        $context["i"] = 0;
        // line 80
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 81
            echo "
                      ";
            // line 82
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 83
            echo "                    ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 5)) {
                // line 84
                echo "            <tr>
                <td>-</td>
                <td >


            ";
                // line 89
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
                foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
                    // line 90
                    echo "                  ";
                    if (($this->getAttribute((isset($context["entityeq"]) ? $context["entityeq"] : $this->getContext($context, "entityeq")), "id") === (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                        // line 91
                        echo "                    <img src=";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityeq"]) ? $context["entityeq"] : $this->getContext($context, "entityeq")), "id"), "html", null, true);
                        echo ".png>

                  ";
                    }
                    // line 94
                    echo "

            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                echo "</td>
                <td >0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>

                <td>0</td>
                <td>
                   ";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPoints"), "html", null, true);
                echo "</td>


                </tr>
                    ";
            }
            // line 109
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
            </tbody>
        </table>
        <div class=\"suite\">
            <a href=\"";
        // line 114
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
        // line 140
        $context["i"] = 0;
        echo "  
  ";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) ? $context["matche"] : $this->getContext($context, "matche")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 142
            echo "
 ";
            // line 143
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 144
            echo "                    ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 4)) {
                // line 145
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeMatcheJournee"]) ? $context["listeMatcheJournee"] : $this->getContext($context, "listeMatcheJournee")));
                foreach ($context['_seq'] as $context["_key"] => $context["listeMj"]) {
                    // line 146
                    echo "                  ";
                    if (($this->getAttribute((isset($context["listeMj"]) ? $context["listeMj"] : $this->getContext($context, "listeMj")), "id") === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                        // line 147
                        echo "
                    <tr >
                        <td width=\"40%\">         
                            <img src=\"";
                        // line 150
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMinMatche/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                        echo ".png\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                        echo "
                        </td>

                        <td width=\"20%\"> <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\">       ";
                        // line 153
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
                        echo "</span><br><br>
                            <span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\">     ";
                        // line 154
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "H:i"), "html", null, true);
                        echo "</span> 
                        </td>



                        <td width=\"40%\"><img src=\"";
                        // line 159
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMinMatche/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
                        echo ".png\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
                        echo "</td>
                       
                    </tr>

                  ";
                    }
                    // line 164
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeMj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 166
            echo "

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                </tbody>
            </table>
         <div class=\"suite\">
             
            <a href=\"";
        // line 173
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
        return array (  327 => 173,  321 => 169,  313 => 166,  306 => 164,  295 => 159,  287 => 154,  283 => 153,  274 => 150,  269 => 147,  266 => 146,  261 => 145,  258 => 144,  256 => 143,  253 => 142,  249 => 141,  245 => 140,  216 => 114,  210 => 110,  204 => 109,  196 => 104,  184 => 96,  176 => 94,  168 => 91,  165 => 90,  161 => 89,  154 => 84,  151 => 83,  149 => 82,  146 => 81,  141 => 80,  139 => 79,  93 => 36,  84 => 30,  74 => 23,  59 => 10,  46 => 7,  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
