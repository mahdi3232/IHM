<?php

/* AcmeChampionatBundle:Contrat:index.html.twig */
class __TwigTemplate_f036fd7d5e9a5303c6c6e2087215e9e9889a5b8a40857fb7de73ed90ad5f6c19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Contrat:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
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

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo "<h4>Contrat list </h4>
  ";
    }

    // line 11
    public function block_tableau($context, array $blocks = array())
    {
        // line 12
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                <th>Joueur</th>
                <th>Equipe</th>
                 <th>dateDebut</th>
                <th>Datefin</th>
                
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "
             ";
            // line 26
            if (($this->getAttribute($context["entity"], "idEquipe", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 27
                echo "
            <tr style=\"height: 20px;\" >
                <td style=\"width:30%;\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idJoueur", array()), "html", null, true);
                echo "</a></td>
                <td style=\"width:30%;\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe", array()), "html", null, true);
                echo "</a></td>
                <td style=\"width:25%;\" >";
                // line 31
                if ($this->getAttribute($context["entity"], "dateDebut", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                <td style=\"width:25%;\" >";
                // line 32
                if ($this->getAttribute($context["entity"], "dateFin", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFin", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                
               
            </tr>
            ";
            }
            // line 37
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

 ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "<ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("contrat_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Contrat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  108 => 45,  105 => 42,  98 => 38,  92 => 37,  82 => 32,  76 => 31,  72 => 30,  68 => 29,  64 => 27,  62 => 26,  59 => 25,  55 => 24,  41 => 12,  38 => 11,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block titre -%}*/
/* <h4>Contrat list </h4>*/
/*   {% endblock %}*/
/* */
/* */
/* */
/*         */
/*         */
/*         */
/*        {% block tableau -%}*/
/*    <table class="table table-hover" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Joueur</th>*/
/*                 <th>Equipe</th>*/
/*                  <th>dateDebut</th>*/
/*                 <th>Datefin</th>*/
/*                 */
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/* */
/*              {% if (entity.idEquipe == id ) %}*/
/* */
/*             <tr style="height: 20px;" >*/
/*                 <td style="width:30%;">{{ entity.idJoueur }}</a></td>*/
/*                 <td style="width:30%;">{{ entity.idEquipe }}</a></td>*/
/*                 <td style="width:25%;" >{% if entity.dateDebut %}{{ entity.dateDebut|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td style="width:25%;" >{% if entity.dateFin %}{{ entity.dateFin|date('Y-m-d') }}{% endif %}</td>*/
/*                 */
/*                */
/*             </tr>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*  {% endblock %} */
/* {% block body -%}*/
/* */
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('contrat_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
