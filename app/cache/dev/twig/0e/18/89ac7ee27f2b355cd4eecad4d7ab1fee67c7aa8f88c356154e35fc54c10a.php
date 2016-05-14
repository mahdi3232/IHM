<?php

/* AcmeChampionatBundle:Butmarque:index.html.twig */
class __TwigTemplate_0e1889ac7ee27f2b355cd4eecad4d7ab1fee67c7aa8f88c356154e35fc54c10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content_float\"> 
            <div id=\"content\"> 
                <h1>Butmarque list</h1>
                <table class=\"records_list\">
                    <thead>
                        <tr>
                            <th>Minute</th>
                            <th>Id</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                            <tr>
                                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "minute"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </tbody>
                    </table>


                    <ul>
                        <li>
                            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("butmarque_new");
        echo "\">
                                Create a new entry
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
 
    ";
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
        return array (  91 => 39,  83 => 33,  71 => 27,  65 => 24,  58 => 20,  52 => 19,  49 => 18,  45 => 17,  31 => 5,  28 => 3,);
    }
}
