<?php

/* AcmeChampionatBundle:Joueur:index.html.twig */
class __TwigTemplate_94da3f73a01012e9ee2662f20f755df559128b017a2cac1dd3569c5fff4b452c extends Twig_Template
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

            <th>Id</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "             ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe") == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 23
                echo "            <tr>
                <td><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomPrenom"), "html", null, true);
                echo "</a></td>
                <td>";
                // line 25
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datenaissance")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datenaissance"), "Y-m-d "), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationalite"), "html", null, true);
                echo "</td>

                <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">edit</a>
                        </li>
                    </ul>
                </td>

            </tr>
            ";
            }
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
        </table>
";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "<ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("joueur_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>

    ";
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
        return array (  125 => 54,  121 => 52,  118 => 46,  112 => 43,  106 => 42,  96 => 35,  90 => 32,  83 => 28,  78 => 26,  72 => 25,  66 => 24,  63 => 23,  60 => 22,  56 => 21,  41 => 8,  38 => 7,  33 => 3,  30 => 2,);
    }
}
