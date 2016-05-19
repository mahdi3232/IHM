<?php

/* ::base.html.twig */
class __TwigTemplate_13a57126d71d847242cae08ee74ec76f69bb5f444531357e17e9152a5ef59a9a extends Twig_Template
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
                            <!--li class=\"active\"><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("saison");
        echo "\">Saison<span class=\"sr-only\">(current)</span></a></li!-->
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
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("classement");
        echo "\">Classement</a></li>
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
        // line 83
        $this->displayBlock('titre', $context, $blocks);
        // line 91
        echo "                            </div>
                        </div>

                ";
        // line 94
        $this->displayBlock('panelbody', $context, $blocks);
        // line 96
        echo "
                        ";
        // line 97
        $this->displayBlock('tableau', $context, $blocks);
        // line 101
        echo "
                     ";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "                    </div>
                </div>

                <!-- COLONNE GAUCHE --> 
                <div id=\"left\"> 

                    ";
        // line 112
        $this->displayBlock('left', $context, $blocks);
        // line 115
        echo "                </div> 
                <!-- COLONNE DROITE --> 
                <div id=\"right\"> 
                  ";
        // line 118
        $this->displayBlock('right', $context, $blocks);
        // line 121
        echo "                    </div> 

                    <hr class=\"clear\" /> 



                    <!-- PIED DE PAGE --> 
                    <div id=\"footer\"> 
                        <h2>footer</h2> 
                    </div> 

            </body> 


    ";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "        </body>
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

    // line 83
    public function block_titre($context, array $blocks = array())
    {
        // line 84
        echo "                                <table>
                                    <tr>
                                        <td> <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/LOGO2.png"), "html", null, true);
        echo "\" ></td>
                                        <td><h4>  Féderation Tunisienne de Football</h4></td>
                                    </tr>
                                </table>
                                ";
    }

    // line 94
    public function block_panelbody($context, array $blocks = array())
    {
    }

    // line 97
    public function block_tableau($context, array $blocks = array())
    {
        // line 98
        echo "

                        ";
    }

    // line 102
    public function block_body($context, array $blocks = array())
    {
        // line 103
        echo "

               ";
    }

    // line 112
    public function block_left($context, array $blocks = array())
    {
        // line 113
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/left.jpg"), "html", null, true);
        echo "\">
                     ";
    }

    // line 118
    public function block_right($context, array $blocks = array())
    {
        // line 119
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/right.jpg"), "html", null, true);
        echo "\">   
                     ";
    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        // line 136
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/npm.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"";
        // line 141
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
        return array (  313 => 141,  308 => 139,  304 => 138,  300 => 137,  295 => 136,  292 => 135,  285 => 119,  282 => 118,  275 => 113,  272 => 112,  266 => 103,  263 => 102,  257 => 98,  254 => 97,  249 => 94,  240 => 86,  236 => 84,  233 => 83,  227 => 16,  216 => 11,  212 => 10,  207 => 8,  202 => 7,  193 => 5,  187 => 143,  169 => 121,  167 => 118,  162 => 115,  160 => 112,  150 => 102,  147 => 101,  145 => 97,  142 => 96,  140 => 94,  135 => 91,  133 => 83,  108 => 61,  104 => 60,  96 => 55,  91 => 53,  86 => 51,  82 => 50,  73 => 44,  57 => 31,  40 => 18,  38 => 6,  34 => 5,  28 => 1,  244 => 99,  241 => 98,  234 => 95,  231 => 94,  223 => 15,  219 => 87,  214 => 84,  205 => 80,  199 => 6,  192 => 75,  185 => 135,  177 => 69,  173 => 68,  164 => 65,  159 => 62,  156 => 61,  152 => 106,  148 => 58,  143 => 57,  141 => 56,  125 => 42,  122 => 40,  113 => 31,  105 => 29,  98 => 27,  95 => 26,  87 => 24,  81 => 23,  77 => 21,  64 => 19,  60 => 18,  54 => 15,  50 => 14,  44 => 12,  41 => 9,  35 => 4,  32 => 3,);
    }
}
