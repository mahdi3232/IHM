<?php

/* AcmeChampionatBundle:Saison:index.html.twig */
class __TwigTemplate_9f57f21bd757440cad8ac6a0d03d0c3012a82ce44a6a05b097e6b14fbe9b0349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Saison:index.html.twig", 1);
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

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        // line 5
        echo "<h4>Saison list </h4>
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
        echo "</h5>
       
       </p>
</div>
";
    }

    // line 22
    public function block_tableau($context, array $blocks = array())
    {
        // line 23
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                <th>Libelle</th>
                <th>Datedebut</th>
                <th>Datefin</th>
                
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "
             
            <tr style=\"height: 20px;\" >
                <td style=\"width:25%;\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journee", array("saison" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</a></td>


                <td style=\"width:35%;\" >";
            // line 41
            if ($this->getAttribute($context["entity"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td style=\"width:35%;\" >";
            // line 42
            if ($this->getAttribute($context["entity"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                
               
            </tr>
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

 ";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Saison:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 57,  107 => 48,  93 => 42,  87 => 41,  79 => 38,  74 => 35,  70 => 34,  57 => 23,  54 => 22,  45 => 11,  42 => 10,  39 => 9,  34 => 5,  31 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block titre -%}*/
/* <h4>Saison list </h4>*/
/*   {% endblock %}*/
/* */
/* */
/* {% block panelbody -%}*/
/* <div class="panel-body">*/
/*     <h5> <p class="bg-info">Ligue :  {{ entities2.nomLigue }}</h5>*/
/*        */
/*        </p>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/*     */
/* */
/* */
/*         */
/*   {% block tableau -%}*/
/*    <table class="table table-hover" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Libelle</th>*/
/*                 <th>Datedebut</th>*/
/*                 <th>Datefin</th>*/
/*                 */
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/* */
/*              */
/*             <tr style="height: 20px;" >*/
/*                 <td style="width:25%;"><a href="{{ path('journee', { 'saison': entity.id }) }}">{{ entity.libelle }}</a></td>*/
/* */
/* */
/*                 <td style="width:35%;" >{% if entity.dateDebut %}{{ entity.dateDebut|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td style="width:35%;" >{% if entity.dateFin %}{{ entity.dateFin|date('Y-m-d') }}{% endif %}</td>*/
/*                 */
/*                */
/*             </tr>*/
/*            */
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*  {% endblock %}       */
/*         */
/*         */
/*         */
/*         */
/*         */
/* {% block body -%}*/
/* */
/* */
/*       */
/* {% endblock %}*/
