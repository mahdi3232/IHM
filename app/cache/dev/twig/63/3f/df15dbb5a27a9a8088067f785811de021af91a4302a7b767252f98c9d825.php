<?php

/* AcmeChampionatBundle:Contrat:index.html.twig */
class __TwigTemplate_633fdf15dbb5a27a9a8088067f785811de021af91a4302a7b767252f98c9d825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "            <tr style=\"height: 20px;\" >
                <td style=\"width:30%;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idJoueur"), "html", null, true);
            echo "</a></td>
                <td style=\"width:30%;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</a></td>
                <td style=\"width:25%;\" >";
            // line 28
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td style=\"width:25%;\" >";
            // line 29
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                
               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

 ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "<ul>
        <li>
            <a href=\"";
        // line 42
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
        return array (  103 => 42,  99 => 40,  96 => 38,  89 => 34,  76 => 29,  70 => 28,  66 => 27,  62 => 26,  59 => 25,  55 => 24,  41 => 12,  38 => 11,  33 => 3,  30 => 2,);
    }
}
