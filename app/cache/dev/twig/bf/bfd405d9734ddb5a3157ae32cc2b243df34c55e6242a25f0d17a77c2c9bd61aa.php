<?php

/* AcmeChampionatBundle:Butmarque:index.html.twig */
class __TwigTemplate_feac0d1155a7b33c2ddcb7c441cf6ae7b40b10ec9098640e6734676edf06ecc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Butmarque:index.html.twig", 1);
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
        echo "<h4>Butmarque list</h4>
";
    }

    // line 9
    public function block_panelbody($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel-body\">
        <h5> <p class=\"bg-info\">Ligue :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")), "nomLigue", array()), "html", null, true);
        echo "<br>
                Saison :  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities3"]) ? $context["entities3"] : $this->getContext($context, "entities3")), "Libelle", array()), "html", null, true);
        echo "<br></h5>

    </p>
</div>
";
    }

    // line 23
    public function block_tableau($context, array $blocks = array())
    {
        // line 24
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                <th>Joueur</th>
                <th>Equipe</th>
                <th>Matche</th>
                <th>Minute</th>


            </tr>
        </thead>
        <tbody>
      
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "             ";
            if (($this->getAttribute($context["entity"], "idMatch", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 39
                echo "                 ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")));
                foreach ($context['_seq'] as $context["_key"] => $context["jou"]) {
                    // line 40
                    echo "                    ";
                    if (($this->getAttribute($context["jou"], "nomPrenom", array()) == $this->getAttribute($context["entity"], "idJoueur", array()))) {
                        // line 41
                        echo "                <tr style=\"height: 20px;\" >
                    <td style=\"width:25%;\">";
                        // line 42
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idJoueur", array()), "html", null, true);
                        echo "</a></td>
                    
                     <td style=\"width:50%;\">";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($context["jou"], "idEquipe", array()), "html", null, true);
                        echo "</a></td>
                    
                    <td style=\"width:50%;\">";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idMatch", array()), "html", null, true);
                        echo "</a></td>
                    <td style=\"width:20%;\">";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "minute", array()), "html", null, true);
                        echo "</a></td>

                </tr>
                 ";
                    }
                    // line 51
                    echo "                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jou'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                ";
            }
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>

";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Butmarque:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 59,  130 => 54,  124 => 53,  121 => 52,  115 => 51,  108 => 47,  104 => 46,  99 => 44,  94 => 42,  91 => 41,  88 => 40,  83 => 39,  80 => 38,  76 => 37,  61 => 24,  58 => 23,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  34 => 6,  31 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* */
/* {% block titre -%}*/
/*     <h4>Butmarque list</h4>*/
/* {% endblock %}*/
/* */
/* {% block panelbody -%}*/
/*     <div class="panel-body">*/
/*         <h5> <p class="bg-info">Ligue :  {{ entities2.nomLigue }}<br>*/
/*                 Saison :  {{ entities3.Libelle }}<br></h5>*/
/* */
/*     </p>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {% block tableau -%}*/
/*     <table class="table table-hover" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Joueur</th>*/
/*                 <th>Equipe</th>*/
/*                 <th>Matche</th>*/
/*                 <th>Minute</th>*/
/* */
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*       */
/*             {% for entity in entities %}*/
/*              {% if (entity.idMatch == id ) %}*/
/*                  {% for jou in joueur %}*/
/*                     {% if jou.nomPrenom == entity.idJoueur %}*/
/*                 <tr style="height: 20px;" >*/
/*                     <td style="width:25%;">{{ entity.idJoueur }}</a></td>*/
/*                     */
/*                      <td style="width:50%;">{{ jou.idEquipe }}</a></td>*/
/*                     */
/*                     <td style="width:50%;">{{ entity.idMatch }}</a></td>*/
/*                     <td style="width:20%;">{{ entity.minute }}</a></td>*/
/* */
/*                 </tr>*/
/*                  {% endif %}*/
/*                      {% endfor %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}    */
/* */
/* {% block body -%}*/
/* */
/* */
/*  */
/*     {% endblock %}*/
/* */
/* */
