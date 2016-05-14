<?php

/* AcmeChampionatBundle:Equipe:index.html.twig */
class __TwigTemplate_cba46d0a56ec70eb1804c8e2613a9aded02833f8839643570006ba90db1c06e9 extends Twig_Template
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
        echo "<h4>Liste des équipes </h4>
  ";
    }

    // line 8
    public function block_panelbody($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel-body\">
   <h5> <p class=\"bg-info\">Ligue :  ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue"), "html", null, true);
        echo "<br>
   Saison :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "Libelle"), "html", null, true);
        echo "<br></h5>
       
       </p>
</div>
";
    }

    // line 17
    public function block_tableau($context, array $blocks = array())
    {
        // line 18
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                 <th>Logo</th>
                <th>Nom équipe</th>
               
               
            </tr>
        </thead>
        <tbody
            
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                <tr style=\"height: 20px;\" >
               
                
             
                <td style=\"height: 20px; \"> <img src=";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipe/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ".png> </td>
                 <td style=\"width:85%;\" ><br><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomEquipe"), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "<ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("equipe_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
";
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
        return array (  113 => 45,  109 => 43,  106 => 41,  100 => 38,  89 => 35,  84 => 34,  78 => 30,  74 => 29,  61 => 18,  58 => 17,  49 => 11,  45 => 10,  42 => 9,  39 => 8,  34 => 6,  31 => 5,);
    }
}
