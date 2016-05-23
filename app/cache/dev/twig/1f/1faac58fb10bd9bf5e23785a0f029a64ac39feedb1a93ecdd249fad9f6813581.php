<?php

/* ::base.html.twig */
class __TwigTemplate_391a13a7e17c807241ca030c41cf6934a67216ea6e82a51773b997809e326d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'accactive' => array($this, 'block_accactive'),
            'matcheactive' => array($this, 'block_matcheactive'),
            'jounractive' => array($this, 'block_jounractive'),
            'listejounractive' => array($this, 'block_listejounractive'),
            'equipeactive' => array($this, 'block_equipeactive'),
            'classementactive' => array($this, 'block_classementactive'),
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


    <body > 

        <!-- ENTETE --> 

        <div id=\"header\" > 
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/LOGO.png"), "html", null, true);
        echo "\">
            <!-- Single button -->

            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <ul class=\"nav navbar-nav \">
                            <li ";
        // line 39
        $this->displayBlock('accactive', $context, $blocks);
        echo "><a class=\"navbar-brand\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Acceuil</a></li>
                        </ul>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav \">
                            <!--li class=\"active\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("saison");
        echo "\">Saison<span class=\"sr-only\">(current)</span></a></li!-->
                            <li ";
        // line 47
        $this->displayBlock('matcheactive', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("matche");
        echo "\">Match</a></li>
                            <li class=\"dropdown ";
        // line 48
        $this->displayBlock('jounractive', $context, $blocks);
        echo " \">
                                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("journee");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Journées <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li ";
        // line 52
        $this->displayBlock('listejounractive', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("journee");
        echo "\">Lister</a></li>


                                </ul>
                            </li>
                            <li ";
        // line 57
        $this->displayBlock('equipeactive', $context, $blocks);
        echo " ><a href=\"";
        echo $this->env->getExtension('routing')->getPath("equipe");
        echo "\">Equipe</a></li>
                            <li ";
        // line 58
        $this->displayBlock('classementactive', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("classement");
        echo "\">Classement</a></li>
                        </ul>
                        <form class=\"navbar-form navbar-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">


                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- CONTENU --> 

            <div id=\"content_float\"> 
                <div id=\"content\"> 

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            ";
        // line 80
        $this->displayBlock('titre', $context, $blocks);
        // line 88
        echo "                        </div>
                    </div>

                    ";
        // line 91
        $this->displayBlock('panelbody', $context, $blocks);
        // line 93
        echo "
                    ";
        // line 94
        $this->displayBlock('tableau', $context, $blocks);
        // line 98
        echo "
                    ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "                </div>
            </div>

            <!-- COLONNE GAUCHE --> 


            ";
        // line 109
        $this->displayBlock('left', $context, $blocks);
        // line 112
        echo "
            <!-- COLONNE DROITE --> 

            ";
        // line 115
        $this->displayBlock('right', $context, $blocks);
        // line 118
        echo "

            <hr class=\"clear\" /> 



            <!-- PIED DE PAGE --> 





            <nav style=\"padding:0 0 120px 0;background-color:#CCC6AD;height: 360px;\"><hr>
                <div class=\"container\">

                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <h4 id='footer-header'> SITEMAP </h4>

                            <div class=\"col-sm-4\" style=\"padding: 0 0 0 0px\">
                                <ul>
                                    <li><a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Acceuil</a></li>
                                    <li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("matche");
        echo "\">Match</a></li>
                                    <li><a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("journee");
        echo "\">Journées</a></li>
                                    <li><a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("equipe");
        echo "\">Equipe</a></li>
                                    <li><a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("classement");
        echo "\">Classement</a></li>
                                </ul>
                            </div>
                            <div class=\"col-sm-4\" style=\"padding: 0 0 0 0px\">

                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h4 id='footer-header'> Sponsors </h4>
                            <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/footer/tel.png"), "html", null, true);
        echo "\"><br><br>
                            <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/footer/Gillette.png"), "html", null, true);
        echo "\">

                        </div>
                        <div class=\"col-sm-4\">
                            <h5 id='footer-header'> &nbsp </h3>
                                <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/footer/Nike.png"), "html", null, true);
        echo "\"><br><br>
                                <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/footer/coca.png"), "html", null, true);
        echo "\">
                                </div>
                                </div>
                                </div>
                                <br><br>
                                <center><h4> Copyright : FTF 2015</h4></center>
                                </nav>


                                </body> 


                                ";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 183
        echo "                                </body>

                                </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ftf";
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

    // line 39
    public function block_accactive($context, array $blocks = array())
    {
    }

    // line 47
    public function block_matcheactive($context, array $blocks = array())
    {
    }

    // line 48
    public function block_jounractive($context, array $blocks = array())
    {
    }

    // line 52
    public function block_listejounractive($context, array $blocks = array())
    {
    }

    // line 57
    public function block_equipeactive($context, array $blocks = array())
    {
    }

    // line 58
    public function block_classementactive($context, array $blocks = array())
    {
    }

    // line 80
    public function block_titre($context, array $blocks = array())
    {
        // line 81
        echo "                                <table>
                                    <tr>
                                        <td> <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/LOGO2.png"), "html", null, true);
        echo "\" ></td>
                                        <td><h4>  Féderation Tunisienne de Football</h4></td>
                                    </tr>
                                </table>
                            ";
    }

    // line 91
    public function block_panelbody($context, array $blocks = array())
    {
    }

    // line 94
    public function block_tableau($context, array $blocks = array())
    {
        // line 95
        echo "

                    ";
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        // line 100
        echo "

                    ";
    }

    // line 109
    public function block_left($context, array $blocks = array())
    {
        // line 110
        echo "            <!--img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/left.jpg"), "html", null, true);
        echo "\"-->
            ";
    }

    // line 115
    public function block_right($context, array $blocks = array())
    {
        // line 116
        echo "   <!--img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/fonts/logoEquipeMin/right.jpg"), "html", null, true);
        echo "\"-->   
            ";
    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/npm.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
                                    <!-- Latest compiled and minified JavaScript -->
                                    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery-latest.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>

                                    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/xx.js"), "html", null, true);
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
        return array (  439 => 181,  434 => 179,  430 => 178,  426 => 177,  421 => 175,  417 => 174,  413 => 173,  408 => 172,  405 => 171,  398 => 116,  395 => 115,  388 => 110,  385 => 109,  379 => 100,  376 => 99,  370 => 95,  367 => 94,  362 => 91,  353 => 83,  349 => 81,  346 => 80,  341 => 58,  336 => 57,  331 => 52,  326 => 48,  321 => 47,  316 => 39,  310 => 16,  306 => 15,  299 => 11,  295 => 10,  290 => 8,  285 => 7,  282 => 6,  276 => 5,  269 => 183,  267 => 171,  252 => 159,  248 => 158,  240 => 153,  236 => 152,  224 => 143,  220 => 142,  216 => 141,  212 => 140,  208 => 139,  185 => 118,  183 => 115,  178 => 112,  176 => 109,  168 => 103,  166 => 99,  163 => 98,  161 => 94,  158 => 93,  156 => 91,  151 => 88,  149 => 80,  122 => 58,  116 => 57,  106 => 52,  100 => 49,  96 => 48,  90 => 47,  86 => 46,  74 => 39,  63 => 31,  46 => 18,  44 => 6,  40 => 5,  34 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}ftf{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}" />*/
/*         <!--    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"  /> -->*/
/* */
/*             <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}"  />*/
/*         <!--    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}"  /> -->*/
/* */
/* */
/*             <!--Style que nous allons utiliser-->*/
/*             <link rel="stylesheet" href="{{asset('bootstrap/css/colorbox.css')}}"  />*/
/*             <link rel="stylesheet" href="{{asset('bootstrap/css/gabarits.css')}}"  />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/* */
/* */
/* */
/*     </head>*/
/* */
/* */
/*     <body > */
/* */
/*         <!-- ENTETE --> */
/* */
/*         <div id="header" > */
/*             <img src="{{asset('bootstrap/fonts/LOGO.png')}}">*/
/*             <!-- Single button -->*/
/* */
/*             <nav class="navbar navbar-default">*/
/*                 <div class="container-fluid">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <ul class="nav navbar-nav ">*/
/*                             <li {%block accactive%}{%endblock%}><a class="navbar-brand"  href="{{ path('home') }}">Acceuil</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                         <ul class="nav navbar-nav ">*/
/*                             <!--li class="active"><a href="{{ path('saison') }}">Saison<span class="sr-only">(current)</span></a></li!-->*/
/*                             <li {%block matcheactive%}{%endblock%}><a href="{{ path('matche') }}">Match</a></li>*/
/*                             <li class="dropdown {%block jounractive%}{%endblock%} ">*/
/*                                 <a href="{{ path('journee') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                     Journées <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li {%block listejounractive%}{%endblock%}><a href="{{ path('journee') }}">Lister</a></li>*/
/* */
/* */
/*                                 </ul>*/
/*                             </li>*/
/*                             <li {%block equipeactive%}{%endblock%} ><a href="{{ path('equipe') }}">Equipe</a></li>*/
/*                             <li {%block classementactive%}{%endblock%}><a href="{{ path('classement') }}">Classement</a></li>*/
/*                         </ul>*/
/*                         <form class="navbar-form navbar-left" role="search">*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" placeholder="Search">*/
/*                             </div>*/
/*                             <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>*/
/*                         </form>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/* */
/* */
/*                         </ul>*/
/*                     </div><!-- /.navbar-collapse -->*/
/*                 </div><!-- /.container-fluid -->*/
/*             </nav>*/
/*             <!-- CONTENU --> */
/* */
/*             <div id="content_float"> */
/*                 <div id="content"> */
/* */
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             {% block titre %}*/
/*                                 <table>*/
/*                                     <tr>*/
/*                                         <td> <img src="{{asset('bootstrap/fonts/LOGO2.png')}}" ></td>*/
/*                                         <td><h4>  Féderation Tunisienne de Football</h4></td>*/
/*                                     </tr>*/
/*                                 </table>*/
/*                             {% endblock %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {% block panelbody -%}*/
/*                     {% endblock %}*/
/* */
/*                     {% block tableau %}*/
/* */
/* */
/*                     {% endblock %}*/
/* */
/*                     {% block body %}*/
/* */
/* */
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- COLONNE GAUCHE --> */
/* */
/* */
/*             {% block left %}*/
/*             <!--img src="{{asset('bootstrap/fonts/logoEquipeMin/left.jpg')}}"-->*/
/*             {% endblock %}*/
/* */
/*             <!-- COLONNE DROITE --> */
/* */
/*             {% block right %}*/
/*    <!--img src="{{asset('bootstrap/fonts/logoEquipeMin/right.jpg')}}"-->   */
/*             {% endblock %}*/
/* */
/* */
/*             <hr class="clear" /> */
/* */
/* */
/* */
/*             <!-- PIED DE PAGE --> */
/* */
/* */
/* */
/* */
/* */
/*             <nav style="padding:0 0 120px 0;background-color:#CCC6AD;height: 360px;"><hr>*/
/*                 <div class="container">*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             <h4 id='footer-header'> SITEMAP </h4>*/
/* */
/*                             <div class="col-sm-4" style="padding: 0 0 0 0px">*/
/*                                 <ul>*/
/*                                     <li><a href="{{ path('home') }}">Acceuil</a></li>*/
/*                                     <li><a href="{{ path('matche') }}">Match</a></li>*/
/*                                     <li><a href="{{ path('journee') }}">Journées</a></li>*/
/*                                     <li><a href="{{ path('equipe') }}">Equipe</a></li>*/
/*                                     <li><a href="{{ path('classement') }}">Classement</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="col-sm-4" style="padding: 0 0 0 0px">*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <h4 id='footer-header'> Sponsors </h4>*/
/*                             <img src="{{asset('bootstrap/fonts/footer/tel.png')}}"><br><br>*/
/*                             <img src="{{asset('bootstrap/fonts/footer/Gillette.png')}}">*/
/* */
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <h5 id='footer-header'> &nbsp </h3>*/
/*                                 <img src="{{asset('bootstrap/fonts/footer/Nike.png')}}"><br><br>*/
/*                                 <img src="{{asset('bootstrap/fonts/footer/coca.png')}}">*/
/*                                 </div>*/
/*                                 </div>*/
/*                                 </div>*/
/*                                 <br><br>*/
/*                                 <center><h4> Copyright : FTF 2015</h4></center>*/
/*                                 </nav>*/
/* */
/* */
/*                                 </body> */
/* */
/* */
/*                                 {% block javascripts %}*/
/*                                     <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>*/
/*                                     <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>*/
/*                                     <script src="{{asset('bootstrap/js/npm.js')}}"></script>*/
/*                                     <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script>*/
/*                                     <!-- Latest compiled and minified JavaScript -->*/
/*                                     <script src="{{asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>*/
/*                                     <script src="{{asset('bootstrap/js/jquery-latest.js')}}"></script>*/
/*                                     <script src="{{asset('bootstrap/js/jquery.tablesorter.js')}}"></script>*/
/* */
/*                                     <script src="{{asset('bootstrap/js/xx.js')}}"></script>*/
/*                                 {% endblock %}*/
/*                                 </body>*/
/* */
/*                                 </html>*/
/* */
