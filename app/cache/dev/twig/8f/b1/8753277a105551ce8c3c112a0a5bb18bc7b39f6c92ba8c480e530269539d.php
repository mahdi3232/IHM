<?php

/* AcmeChampionatBundle:Classement:index.html.twig */
class __TwigTemplate_8fb18753277a105551ce8c3c112a0a5bb18bc7b39f6c92ba8c480e530269539d extends Twig_Template
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

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        // line 4
        echo "<h4>Classement list</h4>
  ";
    }

    // line 9
    public function block_panelbody($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel-body\">
    <h5> <p class=\"bg-info\">Ligue :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue"), "html", null, true);
        echo "<br>
            Saison :  ";
        // line 12
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
        echo "<table class=\"table table-hover\">
    <thead>
        <tr>
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
        // line 39
        $context["i"] = 0;
        // line 40
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "                      ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 42
            echo "        <tr>
            <td >


            ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
            foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
                // line 47
                echo "                  ";
                if (($this->getAttribute((isset($context["entityeq"]) ? $context["entityeq"] : $this->getContext($context, "entityeq")), "id") === (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                    // line 48
                    echo "                <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityeq"]) ? $context["entityeq"] : $this->getContext($context, "entityeq")), "id"), "html", null, true);
                    echo ".png>

                  ";
                }
                // line 51
                echo "

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
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
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classement_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPoints"), "html", null, true);
            echo "</a></td>


        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
    </tbody>
</table>
 ";
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "<ul>
    <li>
        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("classement_new");
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
    ";
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
        return array (  163 => 74,  159 => 72,  156 => 71,  149 => 67,  136 => 62,  123 => 53,  115 => 51,  107 => 48,  104 => 47,  100 => 46,  94 => 42,  91 => 41,  86 => 40,  84 => 39,  61 => 18,  58 => 17,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  34 => 4,  31 => 3,);
    }
}
