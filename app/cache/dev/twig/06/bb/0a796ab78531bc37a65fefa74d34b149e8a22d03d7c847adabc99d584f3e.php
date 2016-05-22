<?php

/* AcmeChampionatBundle:Classement:index.html.twig */
class __TwigTemplate_06bb0a796ab78531bc37a65fefa74d34b149e8a22d03d7c847adabc99d584f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'classementactive' => array($this, 'block_classementactive'),
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

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        // line 4
        echo "<h4>Classement list</h4>
  ";
    }

    // line 7
    public function block_classementactive($context, array $blocks = array())
    {
        // line 8
        echo "class=\"active\"
";
    }

    // line 11
    public function block_panelbody($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"panel-body\">
    <h5> <p class=\"bg-info\">Ligue :  ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue"), "html", null, true);
        echo "<br>
            Saison :  ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "Libelle"), "html", null, true);
        echo "<br></h5>

</p>
</div>
";
    }

    // line 19
    public function block_tableau($context, array $blocks = array())
    {
        // line 20
        echo "<table class=\"table table-hover\">
    <thead>
        <tr>
            <th >Rang</th>
            <th style=\"width: 850px; \">Equipe</th>

            <th >MJ</th>
            <th>MG</th>
            <th>MP</th>
            <th style=\"width:70px; \">MN</th>
            <th>BM</th>
            <th>BC</th>
            <th style=\"width:80px ;\">DIFF</th>
            <th >Points</th>


        </tr>
    </thead>
    <tbody>



    ";
        // line 42
        $context["i"] = 0;
        // line 43
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 44
            echo "                      ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 45
            echo "        <tr>
            <td>-</td>
            <td >


            ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
            foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
                // line 51
                echo "                  ";
                if (($this->getAttribute((isset($context["entityeq"]) ? $context["entityeq"] : $this->getContext($context, "entityeq")), "id") === (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                    // line 52
                    echo "                <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityeq"]) ? $context["entityeq"] : $this->getContext($context, "entityeq")), "id"), "html", null, true);
                    echo ".png>

                  ";
                }
                // line 55
                echo "

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</td>
            <td >0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>
               ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPoints"), "html", null, true);
            echo "</td>


        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
    </tbody>
</table>
 ";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Classement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 75,  158 => 71,  147 => 66,  134 => 57,  126 => 55,  118 => 52,  115 => 51,  111 => 50,  104 => 45,  101 => 44,  96 => 43,  94 => 42,  70 => 20,  67 => 19,  58 => 14,  54 => 13,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
