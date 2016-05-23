<?php

/* AcmeChampionatBundle:Ligue:index.html.twig */
class __TwigTemplate_6166f4b9e0ffa1281a744316bfd9319bd1597072413377d08797ee27ee1c4ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Ligue:index.html.twig", 1);
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
        echo "<h4>Ligue list </h4>
  ";
    }

    // line 9
    public function block_tableau($context, array $blocks = array())
    {
        // line 10
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                <th>Nomligue</th>
               
                
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr style=\"height: 20px;\" >

                <td style=\"width:100%;\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saison", array("ligue" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomLigue", array()), "html", null, true);
            echo "</a></td>

                <td style=\"width:100%;\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomLigue", array()), "html", null, true);
            echo "</a></td>

                
               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

 ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "<ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ligue_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Ligue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  90 => 37,  87 => 35,  80 => 31,  68 => 25,  61 => 23,  57 => 21,  53 => 20,  41 => 10,  38 => 9,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block titre -%}*/
/* <h4>Ligue list </h4>*/
/*   {% endblock %}*/
/*   */
/*   */
/* */
/*     */
/*     {% block tableau -%}*/
/*    <table class="table table-hover" >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nomligue</th>*/
/*                */
/*                 */
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr style="height: 20px;" >*/
/* */
/*                 <td style="width:100%;"><a href="{{ path('saison', { 'ligue': entity.id }) }}">{{ entity.nomLigue }}</a></td>*/
/* */
/*                 <td style="width:100%;">{{ entity.nomLigue }}</a></td>*/
/* */
/*                 */
/*                */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*  {% endblock %}      */
/* {% block body -%}*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('ligue_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
