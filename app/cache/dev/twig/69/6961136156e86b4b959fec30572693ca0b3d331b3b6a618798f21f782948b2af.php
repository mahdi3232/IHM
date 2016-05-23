<?php

/* AcmeChampionatBundle:Equipe:index.html.twig */
class __TwigTemplate_f0e76ff0b4d9eafdea6eeedbf33dc6dcaf3458fb57287e2606fb2161e1783597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Equipe:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'panelbody' => array($this, 'block_panelbody'),
            'equipeactive' => array($this, 'block_equipeactive'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue", array()), "html", null, true);
        echo "</span><br><br>
            <span class=\"glyphicon glyphicon-record\" aria-hidden=\"true\">Saison :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "Libelle", array()), "html", null, true);
        echo "</span><br>
      
       </p>
       
</div>
";
    }

    // line 17
    public function block_equipeactive($context, array $blocks = array())
    {
        echo "class=\"active\"";
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                <tr style=\"height: 20px;width:50px;\" >
               
                
             
                <td style=\"height: 20%;width:50px; \"> <img src=";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo ".png> </td>

                 <td style=\"width:50px;\" ><br><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur", array("equipe" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomEquipe", array()), "html", null, true);
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
        return array (  118 => 46,  112 => 43,  98 => 37,  92 => 35,  86 => 31,  82 => 30,  69 => 19,  66 => 18,  60 => 17,  50 => 11,  46 => 10,  43 => 9,  40 => 8,  35 => 6,  32 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/*     */
/* {% block titre -%}*/
/* <h4>Liste des équipes </h4>*/
/*   {% endblock %}*/
/* {% block panelbody -%}*/
/* <div class="panel-body">*/
/*      <p class="bg-info"><span class="glyphicon glyphicon-tower" aria-hidden="true"> Ligue :  {{ entity2.nomLigue }}</span><br><br>*/
/*             <span class="glyphicon glyphicon-record" aria-hidden="true">Saison :  {{ entity3.Libelle }}</span><br>*/
/*       */
/*        </p>*/
/*        */
/* </div>*/
/* {% endblock %}*/
/* {%block equipeactive%}class="active"{%endblock%}*/
/* {% block tableau -%}*/
/*  <table class="table table-hover" >*/
/*         <thead>*/
/*             <tr>*/
/*                  <th>Nom équipe</th>*/
/*                 <th></th>*/
/*                */
/*                */
/*             </tr>*/
/*         </thead>*/
/*         <tbody*/
/*             */
/*         {% for entity in entities %}*/
/*                 <tr style="height: 20px;width:50px;" >*/
/*                */
/*                 */
/*              */
/*                 <td style="height: 20%;width:50px; "> <img src={{asset('bootstrap/fonts/logoEquipeMin/')}}{{ entity.id }}.png> </td>*/
/* */
/*                  <td style="width:50px;" ><br><a href="{{ path('joueur', { 'equipe': entity.id }) }}">{{ entity.nomEquipe }}</a></td>*/
/* */
/*                */
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* {% block body -%}*/
/* */
/*   */
/* {% endblock %}*/
/*   */
/* */
