<?php

/* AcmeChampionatBundle:Journee:index.html.twig */
class __TwigTemplate_8db6ee96a977e6ae10a6de2ce3c18fa55ce834fe7a33953964c77033d71ad110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Journee:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'panelbody' => array($this, 'block_panelbody'),
            'jounractive' => array($this, 'block_jounractive'),
            'listejounractive' => array($this, 'block_listejounractive'),
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

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        // line 5
        echo "<h4>Journee list </h4>
  ";
    }

    // line 8
    public function block_panelbody($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel-body\">
    <h5> <p class=\"bg-info\">Ligue :  ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")), "nomLigue", array()), "html", null, true);
        echo "<br> Saison :  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities3"]) ? $context["entities3"] : $this->getContext($context, "entities3")), "libelle", array()), "html", null, true);
        echo " <br></h5>
       
       </p>
</div>
";
    }

    // line 15
    public function block_jounractive($context, array $blocks = array())
    {
        echo "active";
    }

    // line 16
    public function block_listejounractive($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 17
    public function block_tableau($context, array $blocks = array())
    {
        // line 18
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                <th>Libelle</th>
                <th>Datedebut</th>
                <th>Datefin</th>
                 <th>Détail</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "            <tr style=\"height: 20px;\" >

                <td style=\"width:25%;\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche", array("journee" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</a></td>

               

                <td style=\"width:35%;\" >";
            // line 36
            if ($this->getAttribute($context["entity"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td style=\"width:35%;\" >";
            // line 37
            if ($this->getAttribute($context["entity"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                 <td ><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche", array("journee" => $this->getAttribute($context["entity"], "id", array()), "saison" => 1)), "html", null, true);
            echo "\">  <button type=\"button\" class=\"btn btn-info\">Détail</button>                </a></td>
               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "AcmeChampionatBundle:Journee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  125 => 42,  115 => 38,  109 => 37,  103 => 36,  94 => 32,  90 => 30,  86 => 29,  73 => 18,  70 => 17,  64 => 16,  58 => 15,  47 => 10,  44 => 9,  41 => 8,  36 => 5,  33 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block titre -%}*/
/* <h4>Journee list </h4>*/
/*   {% endblock %}*/
/* */
/*   {% block panelbody -%}*/
/* <div class="panel-body">*/
/*     <h5> <p class="bg-info">Ligue :  {{ entities2.nomLigue }}<br> Saison :  {{ entities3.libelle }} <br></h5>*/
/*        */
/*        </p>*/
/* </div>*/
/* {% endblock %}*/
/* {%block jounractive%}active{%endblock%}*/
/* {%block listejounractive%}class="active"{%endblock%}*/
/* {% block tableau -%}*/
/*    <table class="table table-hover" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Libelle</th>*/
/*                 <th>Datedebut</th>*/
/*                 <th>Datefin</th>*/
/*                  <th>Détail</th>*/
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr style="height: 20px;" >*/
/* */
/*                 <td style="width:25%;"><a href="{{ path('matche', { 'journee': entity.id }) }}">{{ entity.libelle }}</a></td>*/
/* */
/*                */
/* */
/*                 <td style="width:35%;" >{% if entity.dateDebut %}{{ entity.dateDebut|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td style="width:35%;" >{% if entity.dateFin %}{{ entity.dateFin|date('Y-m-d') }}{% endif %}</td>*/
/*                  <td ><a href="{{ path('matche', { 'journee': entity.id ,'saison':1}) }}">  <button type="button" class="btn btn-info">Détail</button>                </a></td>*/
/*                */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*  {% endblock %}      */
/* {% block body -%}*/
/* */
/* {% endblock %}*/
