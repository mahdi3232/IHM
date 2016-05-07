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
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />




    </head>

   
    <body> 

        <!-- ENTETE --> 
        <div id=\"header\"> 
            <h2>header</h2> 
        </div> 

        <!-- CONTENEUR CENTRAL --> 
      
                <!-- CONTENU --> 
               ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
                <!-- COLONNE GAUCHE --> 
                <div id=\"left\"> 
                    <h2>left</h2> 
                </div> 
                <!-- COLONNE DROITE --> 
                <div id=\"right\"> 
                    <h2>right</h2> 
                </div> 

                <hr class=\"clear\" /> 

       

        <!-- PIED DE PAGE --> 
        <div id=\"footer\"> 
            <h2>footer</h2> 
        </div> 

    </body> 


    ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
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
        echo "        <link rel=\"stylesheet\" href=\"";
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


        <!--Style que nous allons utiliser-->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/colorbox.css"), "html", null, true);
        echo "\"  />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/gabarits.css"), "html", null, true);
        echo "\"  />
        ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "

               ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
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
        return array (  152 => 65,  148 => 64,  143 => 63,  140 => 62,  134 => 37,  131 => 36,  125 => 16,  121 => 15,  114 => 11,  110 => 10,  105 => 8,  100 => 7,  97 => 6,  91 => 5,  85 => 68,  83 => 62,  59 => 40,  57 => 36,  35 => 18,  33 => 6,  29 => 5,  23 => 1,);
    }
}
