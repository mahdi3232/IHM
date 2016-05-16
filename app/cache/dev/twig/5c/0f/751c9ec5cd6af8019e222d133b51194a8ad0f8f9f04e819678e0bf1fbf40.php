<?php

/* AcmeChampionatBundle:Butmarque:index.html.twig */
class __TwigTemplate_5c0f751c9ec5cd6af8019e222d133b51194a8ad0f8f9f04e819678e0bf1fbf40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")), "nomLigue"), "html", null, true);
        echo "<br>
                Saison :  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities3"]) ? $context["entities3"] : $this->getContext($context, "entities3")), "Libelle"), "html", null, true);
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
                <th>Matche</th>
                <th>Minute</th>


            </tr>
        </thead>
        <tbody>
      
            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "             ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMatch") == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 38
                echo "                <tr style=\"height: 20px;\" >
                    <td style=\"width:25%;\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idJoueur"), "html", null, true);
                echo "</a></td>
                    <td style=\"width:50%;\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMatch"), "html", null, true);
                echo "</a></td>
                    <td style=\"width:20%;\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "minute"), "html", null, true);
                echo "</a></td>

                </tr>
                ";
            }
            // line 45
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

";
    }

    // line 51
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
        return array (  113 => 51,  106 => 46,  100 => 45,  93 => 41,  89 => 40,  85 => 39,  82 => 38,  79 => 37,  75 => 36,  61 => 24,  58 => 23,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  34 => 6,  31 => 5,);
    }
}
