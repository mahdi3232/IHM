<?php

/* AcmeChampionatBundle:Matche:index.html.twig */
class __TwigTemplate_a7d13bd80a49cfa95e475eb22b95b6bfa82f3b5cea711ccb1b14e0080a9119c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'panelbody' => array($this, 'block_panelbody'),
            'matcheactive' => array($this, 'block_matcheactive'),
            'tableau' => array($this, 'block_tableau'),
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
        echo "<h4>Matche list
</h4>
";
    }

    // line 9
    public function block_panelbody($context, array $blocks = array())
    {
        // line 12
        echo "<form method=\"GET\" action=\"";
        echo $this->env->getExtension('routing')->getPath("matche");
        echo "\">
    <div class=\"panel-body\">
        <p class=\"bg-info\"><span class=\"glyphicon glyphicon-tower\" aria-hidden=\"true\">  Ligue: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityLigue"]) ? $context["entityLigue"] : $this->getContext($context, "entityLigue")), "nomLigue"), "html", null, true);
        echo "</span><br><br>
            <span class=\"glyphicon glyphicon-record\" aria-hidden=\"true\">   Saison: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "libelle"), "html", null, true);
        echo "</span><br><br>
            <span class=\"glyphicon glyphicon-sort-by-order-alt\" aria-hidden=\"true\">   <label for=\"jour\">  Journeé:</label>
                <select style=\"width: 150px;\" name=\"journee\" id=\"jour\">
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libellejournne"]) ? $context["libellejournne"] : $this->getContext($context, "libellejournne")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                        <option id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo " value =";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo " style=\"width:  50px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
            echo "</option>     
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </select>
                    <button class=\"btn btn-info\"  type=\"submit\"  >Changer</button></span><br>
                <span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\">     Date début Journée:";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dateDebJournee"]) ? $context["dateDebJournee"] : $this->getContext($context, "dateDebJournee")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "</span>
                ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d"), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                <br><br>
                <span class=\"glyphicon glyphicon-dashboard\" aria-hidden=\"true\">  Date Fin Journée:";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dateFinJournee"]) ? $context["dateFinJournee"] : $this->getContext($context, "dateFinJournee")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "</span>

                ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </p>
    </form>


</div>
";
    }

    // line 38
    public function block_matcheactive($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 40
    public function block_tableau($context, array $blocks = array())
    {
        // line 42
        echo "<table class=\"table table-hover\" >
    <thead>
        <tr>
            <th>Equipe 1</th>
            <th>Date et Heure</th>


            <th>Equipe 2</th>
            <th>Détail</th>

        </tr>
    </thead>
    <tbody>

";
        // line 56
        if (((isset($context["urlidjournee"]) ? $context["urlidjournee"] : $this->getContext($context, "urlidjournee")) > 0)) {
            // line 57
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 58
                echo "

        ";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeMatcheJournee"]) ? $context["listeMatcheJournee"] : $this->getContext($context, "listeMatcheJournee")));
                foreach ($context['_seq'] as $context["_key"] => $context["listeMj"]) {
                    // line 61
                    echo "                  ";
                    if (($this->getAttribute((isset($context["listeMj"]) ? $context["listeMj"] : $this->getContext($context, "listeMj")), "id") === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                        // line 62
                        echo "
        <tr >
            <td width=\"40%\">         
                <img src=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMinMatche/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                        echo ".png\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                        echo "
            </td>

            <td width=\"20%\"> <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\">       ";
                        // line 68
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
                        echo "</span><br><br>
                <span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\">     ";
                        // line 69
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "H:i"), "html", null, true);
                        echo "</span> 
            </td>



            <td width=\"40%\"><img src=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMinMatche/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
                        echo ".png\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
                        echo "</td>
            <td ><a href=\"";
                        // line 75
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque", array("matche" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\">  <button type=\"button\" class=\"btn btn-info\">Détail</button>                </a></td>
        </tr>

                  ";
                    }
                    // line 79
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeMj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "


        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "

            ";
        } else {
            // line 87
            echo "    <p class=\"bg-danger\" style=\"width: 350px; \">  Choissisez la journée</p>
            ";
        }
        // line 89
        echo "</tbody>
</table>


    ";
    }

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
        return array (  228 => 89,  224 => 87,  219 => 84,  210 => 80,  204 => 79,  197 => 75,  190 => 74,  182 => 69,  178 => 68,  169 => 65,  164 => 62,  161 => 61,  157 => 60,  153 => 58,  148 => 57,  146 => 56,  130 => 42,  127 => 40,  121 => 38,  112 => 31,  104 => 29,  97 => 27,  94 => 26,  86 => 24,  80 => 23,  76 => 21,  63 => 19,  59 => 18,  53 => 15,  49 => 14,  43 => 12,  40 => 9,  34 => 4,  31 => 3,);
    }
}
