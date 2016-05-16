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
                        <a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                       <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("saison");
        echo "\">Saison<span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("matche");
        echo "\">Match</a></li>
                            <li class=\"dropdown\">
                                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("journee");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Journées <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("journee");
        echo "\">Lister</a></li>
                                   
                                  
                                </ul>
                            </li>
                             <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("equipe");
        echo "\">Equipe</a></li>
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
        // line 85
        echo "                            </div>
                        </div>

                ";
        // line 88
        $this->displayBlock('panelbody', $context, $blocks);
        // line 90
        echo "
                        ";
        // line 91
        $this->displayBlock('tableau', $context, $blocks);
        // line 95
        echo "
                     ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "                    </div>
                </div>

                <!-- COLONNE GAUCHE --> 
                <div id=\"left\"> 
                   
                    ";
        // line 106
        $this->displayBlock('left', $context, $blocks);
        // line 109
        echo "                </div> 
                <!-- COLONNE DROITE --> 
                <div id=\"right\"> 
                  ";
        // line 112
        $this->displayBlock('right', $context, $blocks);
        // line 115
        echo "                </div> 

                <hr class=\"clear\" /> 



                <!-- PIED DE PAGE --> 
                <div id=\"footer\"> 
                    <h2>footer</h2> 
                </div> 

        </body> 


    ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ftf!";
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
        echo "                                federation tunisienne de football
                                ";
    }

    // line 88
    public function block_panelbody($context, array $blocks = array())
    {
    }

    // line 91
    public function block_tableau($context, array $blocks = array())
    {
        // line 92
        echo "

                        ";
    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        // line 97
        echo "

               ";
    }

    // line 106
    public function block_left($context, array $blocks = array())
    {
        // line 107
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/left.jpg"), "html", null, true);
        echo "\">
                     ";
    }

    // line 112
    public function block_right($context, array $blocks = array())
    {
        // line 113
        echo "                     <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/right.jpg"), "html", null, true);
        echo "\">   
                     ";
    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        // line 130
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/npm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
 <!-- Latest compiled and minified JavaScript -->
 <script src=\"";
        // line 135
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
        return array (  301 => 135,  296 => 133,  292 => 132,  288 => 131,  283 => 130,  280 => 129,  273 => 113,  270 => 112,  263 => 107,  260 => 106,  254 => 97,  251 => 96,  245 => 92,  242 => 91,  237 => 88,  232 => 83,  229 => 82,  223 => 16,  219 => 15,  212 => 11,  208 => 10,  203 => 8,  198 => 7,  195 => 6,  189 => 5,  183 => 137,  181 => 129,  165 => 115,  163 => 112,  158 => 109,  156 => 106,  148 => 100,  146 => 96,  143 => 95,  141 => 91,  138 => 90,  136 => 88,  131 => 85,  129 => 82,  104 => 60,  96 => 55,  91 => 53,  86 => 51,  82 => 50,  73 => 44,  57 => 31,  40 => 18,  38 => 6,  34 => 5,  28 => 1,);
    }
}
