<?php

/* ::base.html.twig */
class __TwigTemplate_0aadeb8c8fe0bdc14c85b83136dcb0652f2452a0b5bc73746b5493afc56e4cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titre' => array($this, 'block_titre'),
            'panelbody' => array($this, 'block_panelbody'),
            'tableau' => array($this, 'block_tableau'),
            'body' => array($this, 'block_body'),
            'left' => array($this, 'block_left'),
            'right' => array($this, 'block_right'),
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
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/LOGO.png"), "html", null, true);
        echo "\">
            <!-- Single button -->

            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Home</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                       <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"../saison\">Saison<span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"../matche\">Match</a></li>
                            <li class=\"dropdown\">
                                <a href=\"../journee\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Journées <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Action</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                    <li><a href=\"#\">Something else here</a></li>
                                  
                                </ul>
                            </li>
                        </ul>
                        <form class=\"navbar-form navbar-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">


                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- CONTENU --> 

            <div id=\"content_float\"> 
                <div id=\"content\"> 

                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            ";
        // line 82
        $this->displayBlock('titre', $context, $blocks);
        // line 84
        echo "                            </div>
                        </div>

                ";
        // line 87
        $this->displayBlock('panelbody', $context, $blocks);
        // line 89
        echo "
                        ";
        // line 90
        $this->displayBlock('tableau', $context, $blocks);
        // line 94
        echo "
                     ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "                    </div>
                </div>

                <!-- COLONNE GAUCHE --> 
                <div id=\"left\"> 
                   
                    ";
        // line 105
        $this->displayBlock('left', $context, $blocks);
        // line 107
        echo "                </div> 
                <!-- COLONNE DROITE --> 
                <div id=\"right\"> 
                  ";
        // line 110
        $this->displayBlock('right', $context, $blocks);
        // line 112
        echo "                </div> 

                <hr class=\"clear\" /> 



                <!-- PIED DE PAGE --> 
                <div id=\"footer\"> 
                    <h2>footer</h2> 
                </div> 

        </body> 


    ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 134
        echo "    </body>
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

    // line 82
    public function block_titre($context, array $blocks = array())
    {
        // line 83
        echo "                                ";
    }

    // line 87
    public function block_panelbody($context, array $blocks = array())
    {
    }

    // line 90
    public function block_tableau($context, array $blocks = array())
    {
        // line 91
        echo "

                        ";
    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        // line 96
        echo "

               ";
    }

    // line 105
    public function block_left($context, array $blocks = array())
    {
        // line 106
        echo "                     ";
    }

    // line 110
    public function block_right($context, array $blocks = array())
    {
        // line 111
        echo "                     ";
    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        // line 127
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/npm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
 <!-- Latest compiled and minified JavaScript -->
 <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
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
        return array (  276 => 132,  271 => 130,  267 => 129,  263 => 128,  258 => 127,  255 => 126,  251 => 111,  248 => 110,  244 => 106,  241 => 105,  235 => 96,  232 => 95,  226 => 91,  223 => 90,  218 => 87,  214 => 83,  211 => 82,  205 => 16,  201 => 15,  194 => 11,  190 => 10,  185 => 8,  180 => 7,  177 => 6,  171 => 5,  165 => 134,  163 => 126,  147 => 112,  145 => 110,  140 => 107,  138 => 105,  130 => 99,  128 => 95,  125 => 94,  123 => 90,  120 => 89,  118 => 87,  113 => 84,  111 => 82,  57 => 31,  40 => 18,  38 => 6,  34 => 5,  91 => 39,  83 => 33,  71 => 27,  65 => 24,  58 => 20,  52 => 19,  49 => 18,  45 => 17,  31 => 5,  28 => 1,);
    }
}
