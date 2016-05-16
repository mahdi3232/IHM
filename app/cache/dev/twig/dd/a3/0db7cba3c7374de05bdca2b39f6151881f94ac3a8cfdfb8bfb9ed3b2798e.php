<?php

/* AcmeChampionatBundle:Ligue:index.html.twig */
class __TwigTemplate_dda30db7cba3c7374de05bdca2b39f6151881f94ac3a8cfdfb8bfb9ed3b2798e extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr style=\"height: 20px;\" >
<<<<<<< HEAD
                <td style=\"width:100%;\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saison", array("ligue" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
=======
                <td style=\"width:100%;\">";
            // line 22
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomLigue"), "html", null, true);
            echo "</a></td>
                
               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>

 ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
=======
        // line 33
        echo "<ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ligue_new");
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
        return "AcmeChampionatBundle:Ligue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  80 => 31,  73 => 27,  60 => 22,  57 => 21,  53 => 20,  41 => 10,  38 => 9,  33 => 3,  30 => 2,);
=======
        return array (  85 => 35,  81 => 33,  78 => 31,  71 => 27,  60 => 22,  57 => 21,  53 => 20,  41 => 10,  38 => 9,  33 => 3,  30 => 2,);
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6
    }
}
