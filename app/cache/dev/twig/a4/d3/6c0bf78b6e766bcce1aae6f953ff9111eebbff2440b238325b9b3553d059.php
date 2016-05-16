<?php

/* AcmeChampionatBundle:Contrat:index.html.twig */
class __TwigTemplate_a4d36c0bf78b6e766bcce1aae6f953ff9111eebbff2440b238325b9b3553d059 extends Twig_Template
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
<<<<<<< HEAD
            echo "             ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe") == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 26
                echo "            <tr style=\"height: 20px;\" >
                <td style=\"width:30%;\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idJoueur"), "html", null, true);
                echo "</a></td>
                <td style=\"width:30%;\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
                echo "</a></td>
                <td style=\"width:25%;\" >";
                // line 29
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                <td style=\"width:25%;\" >";
                // line 30
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                
               
            </tr>
            ";
            }
            // line 35
            echo "        ";
=======
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
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 36
=======
        // line 34
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
        echo "        </tbody>
    </table>

 ";
    }

<<<<<<< HEAD
    // line 40
    public function block_body($context, array $blocks = array())
    {
=======
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
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
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
<<<<<<< HEAD
        return array (  102 => 40,  95 => 36,  89 => 35,  79 => 30,  73 => 29,  69 => 28,  65 => 27,  62 => 26,  59 => 25,  55 => 24,  41 => 12,  38 => 11,  33 => 3,  30 => 2,);
=======
        return array (  103 => 42,  99 => 40,  96 => 38,  89 => 34,  76 => 29,  70 => 28,  66 => 27,  62 => 26,  59 => 25,  55 => 24,  41 => 12,  38 => 11,  33 => 3,  30 => 2,);
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
    }
}
