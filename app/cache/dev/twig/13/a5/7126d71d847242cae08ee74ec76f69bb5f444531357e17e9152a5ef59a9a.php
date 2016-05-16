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
        // line 87
        echo "                            </div>
                        </div>

                ";
        // line 90
        $this->displayBlock('panelbody', $context, $blocks);
        // line 92
        echo "
                        ";
        // line 93
        $this->displayBlock('tableau', $context, $blocks);
        // line 97
        echo "
                     ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "                    </div>
                </div>

                <!-- COLONNE GAUCHE --> 
                <div id=\"left\"> 
                   
                    ";
        // line 108
        $this->displayBlock('left', $context, $blocks);
        // line 111
        echo "                </div> 
                <!-- COLONNE DROITE --> 
                <div id=\"right\"> 
                  ";
        // line 114
        $this->displayBlock('right', $context, $blocks);
        // line 117
        echo "                </div> 

                <hr class=\"clear\" /> 



                <!-- PIED DE PAGE --> 
                <div id=\"footer\"> 
                    <h2>footer</h2> 
                </div> 

        </body> 


    ";
        // line 131
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
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
        echo "
                              <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/LOGO2.png"), "html", null, true);
        echo "\">  <h4>  Federation Tunisienne de Football</h4>

                                ";
    }

    // line 90
    public function block_panelbody($context, array $blocks = array())
    {
    }

    // line 93
    public function block_tableau($context, array $blocks = array())
    {
        // line 94
        echo "

                        ";
    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        // line 99
        echo "

               ";
    }

    // line 108
    public function block_left($context, array $blocks = array())
    {
        // line 109
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/left.jpg"), "html", null, true);
        echo "\">
                     ";
    }

    // line 114
    public function block_right($context, array $blocks = array())
    {
        // line 115
        echo "                     <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/right.jpg"), "html", null, true);
        echo "\">   
                     ";
    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        // line 132
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/npm.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
 <!-- Latest compiled and minified JavaScript -->
 <script src=\"";
        // line 137
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
        return array (  306 => 137,  301 => 135,  297 => 134,  293 => 133,  288 => 132,  285 => 131,  278 => 115,  275 => 114,  268 => 109,  265 => 108,  259 => 99,  256 => 98,  250 => 94,  247 => 93,  242 => 90,  232 => 83,  229 => 82,  223 => 16,  219 => 15,  212 => 11,  203 => 8,  198 => 7,  195 => 6,  189 => 5,  181 => 131,  165 => 117,  163 => 114,  156 => 108,  148 => 102,  146 => 98,  143 => 97,  141 => 93,  138 => 92,  136 => 90,  131 => 87,  129 => 82,  104 => 60,  96 => 55,  91 => 53,  86 => 51,  82 => 50,  73 => 44,  57 => 31,  40 => 18,  38 => 6,  34 => 5,  28 => 1,  238 => 96,  235 => 84,  228 => 92,  225 => 91,  217 => 86,  213 => 84,  208 => 10,  199 => 77,  193 => 76,  183 => 139,  175 => 67,  171 => 66,  162 => 63,  158 => 111,  155 => 60,  151 => 59,  147 => 57,  142 => 56,  140 => 55,  125 => 42,  122 => 40,  113 => 31,  105 => 29,  98 => 27,  95 => 26,  87 => 24,  81 => 23,  77 => 21,  64 => 19,  60 => 18,  54 => 15,  50 => 14,  44 => 12,  41 => 9,  35 => 4,  32 => 3,);
    }
}
