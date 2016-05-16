<?php

/* AcmeChampionatBundle:Journee:show.html.twig */
class __TwigTemplate_4db8742ae42915288daf1f817eaa4672e3b32f8c8bcd10569c42b217068b53bd extends Twig_Template
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
        // line 4
        echo "<h1>Journee</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
<<<<<<< HEAD:app/cache/dev/twig/4d/b8/742ae42915288daf1f817eaa4672e3b32f8c8bcd10569c42b217068b53bd.php
            <tr>
                <th>Datefin</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
=======
             <tr>
                <th>Joueur</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idJoueur"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Match</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMatch"), "html", null, true);
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6:app/cache/dev/twig/b9/2f/e8e7af22be0c3a50b7b161442dc9f3dd1fd141e4a6eddd3291a84b7b1fd5.php
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
<<<<<<< HEAD:app/cache/dev/twig/4d/b8/742ae42915288daf1f817eaa4672e3b32f8c8bcd10569c42b217068b53bd.php
        echo $this->env->getExtension('routing')->getPath("journee");
=======
        echo $this->env->getExtension('routing')->getPath("butmarque");
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6:app/cache/dev/twig/b9/2f/e8e7af22be0c3a50b7b161442dc9f3dd1fd141e4a6eddd3291a84b7b1fd5.php
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
<<<<<<< HEAD:app/cache/dev/twig/4d/b8/742ae42915288daf1f817eaa4672e3b32f8c8bcd10569c42b217068b53bd.php
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journee_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
=======
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
>>>>>>> 6b27b8aa53ac30b91722819b2a3b59a209fb9eb6:app/cache/dev/twig/b9/2f/e8e7af22be0c3a50b7b161442dc9f3dd1fd141e4a6eddd3291a84b7b1fd5.php
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Journee:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  78 => 34,  70 => 29,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
