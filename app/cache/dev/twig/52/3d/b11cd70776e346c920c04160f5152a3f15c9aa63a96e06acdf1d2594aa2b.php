<?php

/* ::base.html.twig */
class __TwigTemplate_523db11cd70776e346c920c04160f5152a3f15c9aa63a96e06acdf1d2594aa2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />




    </head>
    <body> 
 
<!-- ENTETE --> 
<div id=\"header\"> 
\t<h2>header</h2> 
</div> 
 
<!-- CONTENEUR CENTRAL --> 
<div id=\"center\"> 
<div id=\"center_bis\"> 
\t 
\t<!-- CONTENU --> 
\t<div id=\"content_float\"> 
\t\t<div id=\"content\"> 
\t\t\t<h2>content</h2> 
\t\t\t<p> Integer turpis ipsum, pharetra eget malesuada vel, condimentum id velit. Sed condimentum, mi eu sollicitudin vehicula, libero mi lacinia sem, sit amet tincidunt sapien dui nec ipsum. Maecenas eget scelerisque turpis. Sed enim mi, suscipit eu gravida eget, viverra sed purus. Pellentesque ipsum lacus, ornare a convallis eu, tincidunt nec dolor. Curabitur eget nisi sed lacus malesuada consectetur nec quis quam. Nam eget tellus ante, in tincidunt felis. Phasellus eget tortor at libero laoreet ornare. Curabitur orci lectus, hendrerit id tincidunt ut, accumsan vehicula sem. Nulla tempus urna quis urna ultricies sodales.</p> 
\t\t</div> 
\t</div> 
\t 
\t<!-- COLONNE GAUCHE --> 
\t<div id=\"left\"> 
\t\t<h2>left</h2> 
\t</div> 
\t<!-- COLONNE DROITE --> 
\t<div id=\"right\"> 
\t\t<h2>right</h2> 
\t</div> 
\t 
\t<hr class=\"clear\" /> 
 
</div> 
</div> 
 
<!-- PIED DE PAGE --> 
<div id=\"footer\"> 
\t<h2>footer</h2> 
</div> 
 
</body> 
    ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "      

    
    ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <!--    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"  /> -->

            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.css"), "html", null, true);
        echo "\"  />
        <!--    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\"  /> -->

        ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "    
     
    
    ";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/npm.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 70,  147 => 69,  142 => 68,  139 => 67,  132 => 60,  129 => 59,  122 => 11,  118 => 10,  113 => 8,  108 => 7,  105 => 6,  99 => 5,  93 => 73,  91 => 67,  86 => 64,  84 => 59,  35 => 14,  33 => 6,  29 => 5,  23 => 1,);
    }
}
