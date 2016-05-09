<?php

/* AcmeChampionatBundle:Equipe:index.html.twig */
class __TwigTemplate_b26fabf5eb6629d581bd3b762eec832568731c2783f42f9bfd2995d836b986e9 extends Twig_Template
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
        echo "<br></h5>
       
       </p>
</div>
";
    }

    // line 16
    public function block_tableau($context, array $blocks = array())
    {
        // line 17
        echo "<table class=\"table table-hover\" >
        <thead>
            <tr>
                 <th>Logo</th>
                <th>Nom équipe</th>
               
               
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                <tr style=\"height: 20px;\" >
               
                
             
                <td style=\"width:45%;\"> <img src=";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipe/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ".png> </td>
                 <td style=\"width:55%;\" ><a href=\"";
            // line 33
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
        // line 36
        echo "        </tbody>
    </table>
";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "<ul>
        <li>
            <a href=\"";
        // line 43
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
        return array (  108 => 43,  104 => 41,  101 => 39,  95 => 36,  84 => 33,  79 => 32,  73 => 28,  69 => 27,  57 => 17,  54 => 16,  45 => 10,  42 => 9,  39 => 8,  34 => 6,  31 => 5,);
    }
}
