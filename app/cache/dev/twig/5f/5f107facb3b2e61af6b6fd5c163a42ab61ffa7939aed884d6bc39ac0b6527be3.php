<?php

/* AcmeChampionatBundle:Joueur:index.html.twig */
class __TwigTemplate_e200e5e60cd94763b2cf2efd083894dc2d2210a65deeac2a0eb9d892e4ccd61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Joueur:index.html.twig", 1);
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
        echo "Joueur list
";
    }

    // line 7
    public function block_tableau($context, array $blocks = array())
    {
        // line 8
        echo "<table class=\"table table-hover\" >
    <thead>
        <tr>
            <th>Nomprenom</th>
            <th>Datenaissance</th>
            <th>Nationalite</th>

           

        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "             ";
            if (($this->getAttribute($context["entity"], "idEquipe", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 22
                echo "            <tr>
                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomPrenom", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 24
                if ($this->getAttribute($context["entity"], "datenaissance", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datenaissance", array()), "Y-m-d "), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationalite", array()), "html", null, true);
                echo "</td>


            </tr>
            ";
            }
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
        </table>
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Joueur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  89 => 31,  83 => 30,  75 => 25,  69 => 24,  65 => 23,  62 => 22,  59 => 21,  55 => 20,  41 => 8,  38 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block titre -%}*/
/* Joueur list*/
/* {% endblock %}*/
/* */
/* */
/* {% block tableau -%}*/
/*  <table class="table table-hover" >*/
/*     <thead>*/
/*         <tr>*/
/*             <th>Nomprenom</th>*/
/*             <th>Datenaissance</th>*/
/*             <th>Nationalite</th>*/
/* */
/*            */
/* */
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for entity in entities %}*/
/*              {% if (entity.idEquipe == id ) %}*/
/*             <tr>*/
/*                 <td>{{ entity.nomPrenom }}</td>*/
/*                 <td>{% if entity.datenaissance %}{{ entity.datenaissance|date('Y-m-d ') }}{% endif %}</td>*/
/*                 <td>{{ entity.nationalite }}</td>*/
/* */
/* */
/*             </tr>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </tbody>*/
/*         </table>*/
/* {% endblock %}*/
/* {% block body -%}*/
/* */
/* */
/* */
/* */
/* */
/*    */
/* */
/*     {% endblock %}*/
/* */
