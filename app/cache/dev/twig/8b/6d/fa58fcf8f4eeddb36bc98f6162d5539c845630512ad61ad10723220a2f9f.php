<?php

/* AcmeChampionatBundle:Matche:index.html.twig */
class __TwigTemplate_8b6dfa58fcf8f4eeddb36bc98f6162d5539c845630512ad61ad10723220a2f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'panelbody' => array($this, 'block_panelbody'),
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
        echo "Joueur list

";
    }

    // line 9
    public function block_panelbody($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel-body\">
    <p class=\"bg-success\">Ligue: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityLigue"]) ? $context["entityLigue"] : $this->getContext($context, "entityLigue")), "nomLigue"), "html", null, true);
        echo "<br>
        Saison: <br>
        Journeé:<br></p>
</div>
";
    }

    // line 20
    public function block_tableau($context, array $blocks = array())
    {
        // line 21
        echo "<table class=\"table table-hover\" >
<thead>
    <tr>
        <th>Equipe 1</th>
        <th>Date</th>
        <th>Heure</th>

        <th>Equipe 2</th>

    </tr>
</thead>
<tbody>
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "        <tr class=\"info\" >
            <td width=\"40%\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</td>

            <td width=\"10%\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
            echo "</a></td>
            <td width=\"10%\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "H:i"), "html", null, true);
            echo "</a></td>


            <td width=\"40%\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
            echo "</td>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </tbody>
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
        return array (  107 => 45,  97 => 41,  89 => 38,  83 => 37,  78 => 35,  75 => 34,  71 => 33,  57 => 21,  54 => 20,  45 => 11,  42 => 10,  39 => 9,  33 => 4,  30 => 3,);
    }
}
