<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_629542dcec0343796fe5e409f70d555e51ef2db75e067804887eaf9c952baf9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header_links' => [$this, 'block_header_links'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
            <meta name=\"generator\" content=\"Hugo 0.83.1\">
            <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">

            <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/carousel/\">

            <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/sign-in/\">

            
 
            <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrapmin.css"), "html", null, true);
        echo "\">
       <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.scss"), "html", null, true);
        echo "\">
     
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>

        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\">

            
    </head>
       
     
    </head>
    <body>
                                      <!--  NAVBAR -->
      <header>
        
        <nav class=\"navbar navbar-expand-md fixed-top navbar-light bg-light\">
            <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\"><img style=\"width: 60px;height:40px;\"src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" alt=\"#\"/></a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
              
                </ul>
                <form class=\"d-flex\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                        <li class=\"nav-item\">
                            <a style=\"font-size:120%;margin-right:25px\" class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                        </li>
                        
                         ";
        // line 70
        $this->displayBlock('header_links', $context, $blocks);
        // line 81
        echo "   
                        
                    </ul>
               
                </form>
            </div>
            </div>
        </nav>
        </header>
        ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "
        <main>


            
            <!-- FOOTER -->

            <footer id=\"footer\" class=\"foot\">
                <div class=\"footer-top  footer-default\">
                    <div class=\"container\">
                        <div class=\"row\">
                            
                            <div class=\"col-lg-4 col-md-6 footer-info\"> 
                                <h3 style=\"animation: flash 1.4s linear infinite\">Site Chambray les tours</h3>
                                <p> ________ ________ ________ ________ _________
                                    ________  _______ _________  _______  _______
                                    ________ _________ ___________</p>
                            </div>
                           
                            <div style= \"margin-top:10px\" class=\"col-lg-2 col-md-6 footer-links\">
                                <h4> Liens utiles <h4>
                                    <ul>
                                        <li><a href=\"#\">Link</a></li>
                                        <li><a href=\"#\">Link</a></li>
                                        <li><a href=\"#\">Link</a></li>
                                        <li><a href=\"#\">Link</a></li>
                                        <li><a href=\"#\">Link</a></li>
                                    </ul>
                            </div>
                       
                            <div style= \"margin-top:10px\" class=\"col-lg-3 col-md-6 footer-contact\"> 
                                <h4> Contactez-nous</h4>
                                <p>
                                    Hann Bel Air   Rue:6 <br/>
                                    Hann,  Dakar<br/>
                                    Sénégal<br/>
                                    <strong>Téléphone:</strong>+221 78 130 45 98<br/> 
                                    <strong>Em@il:</strong>BAM@gmail.com<br/>
                                </p>
                    
                                <div class=\"social-links\">
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-instagram\"></i></a> 
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-google-plus\"></i></a>
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-linkedin\"></i></a>      
                                </div> 
                            </div>  

                            <div style= \"margin-top:10px\" class=\"col-lg-3 col-md-6 footer-newsletter\">
                                <h4>Our Nemsletter</h4>
                                <p> ________ ________ ________ ________ _________
                                ________  _______ _________  _______  _______
                                ________ _________ ___________</p>
                                <form accept=\"\" mthod=\"post\">
                                    <input type=\"email\"  name=\"email\"/><input type=\"submit\" value=\"s'abonner\"/>
                                </form>
                            </div>
                
                        </div>
                    </div>
                </div>
               
                <div class=\"container\">
                    <div class=\"copyright\">
                        &copy; Copyright<strong>WebsiteName</strong>. Tout Droits Reservés
                    </div>
                    <div class=\"credits\">
                        Designed by <a href=\"#\">WebsiteName</a>
                    </div>
                </div>
            </footer>
            <!-- <footer class=\"container\">
                    <p class=\"float-end\"><a href=\"#\">Back to top</a></p>
                    <p>&copy; 2017–2021 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
                </footer>-->
        </main>

        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrapjs.js"), "html", null, true);
        echo "\"></script>




       
            
           
          
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_header_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_links"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_links"));

        // line 71
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71)) {
            // line 72
            echo "                               <li class=\"nav-item\">
                                 <a style=\"font-size:120%;margin-right:15px;color:green\" class=\"nav-link\" href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_user");
            echo "\">Mon espace personnel</a>
                                </li>
                               <li><a class=\"btn btn-danger\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
                            ";
        } else {
            // line 77
            echo "                                <li><a class=\"btn btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li>
                                    
                            ";
        }
        // line 80
        echo "                             
                         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "        
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 91,  318 => 90,  307 => 80,  300 => 77,  295 => 75,  290 => 73,  287 => 72,  284 => 71,  274 => 70,  255 => 12,  233 => 172,  153 => 94,  151 => 90,  140 => 81,  138 => 70,  132 => 67,  118 => 56,  102 => 43,  98 => 42,  77 => 24,  73 => 23,  59 => 12,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
            <meta name=\"generator\" content=\"Hugo 0.83.1\">
            <title>{% block title %}Welcome!{% endblock %}</title>
            <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">

            <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/carousel/\">

            <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/sign-in/\">

            
 
            <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrapmin.css')}}\">
       <link rel=\"stylesheet\" href=\"{{ asset('css/app.scss')}}\">
     
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>

        <link rel=\"stylesheet\" href=\"{{ asset('css/carousel.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css')}}\">

            
    </head>
       
     
    </head>
    <body>
                                      <!--  NAVBAR -->
      <header>
        
        <nav class=\"navbar navbar-expand-md fixed-top navbar-light bg-light\">
            <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\"><img style=\"width: 60px;height:40px;\"src=\"{{ asset('images/logo1.png') }}\" alt=\"#\"/></a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
              
                </ul>
                <form class=\"d-flex\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                        <li class=\"nav-item\">
                            <a style=\"font-size:120%;margin-right:25px\" class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('home') }}\">Accueil</a>
                        </li>
                        
                         {% block header_links %}
                            {% if app.user %}
                               <li class=\"nav-item\">
                                 <a style=\"font-size:120%;margin-right:15px;color:green\" class=\"nav-link\" href=\"{{ path('home_user') }}\">Mon espace personnel</a>
                                </li>
                               <li><a class=\"btn btn-danger\" href=\"{{ path('app_logout') }}\">Logout</a></li>
                            {% else %}
                                <li><a class=\"btn btn-success\" href=\"{{ path('app_login') }}\">Login</a></li>
                                    
                            {% endif %}
                             
                         {% endblock %}   
                        
                    </ul>
               
                </form>
            </div>
            </div>
        </nav>
        </header>
        {% block body %}
        
        
        {% endblock %}

        <main>


            
            <!-- FOOTER -->

            <footer id=\"footer\" class=\"foot\">
                <div class=\"footer-top  footer-default\">
                    <div class=\"container\">
                        <div class=\"row\">
                            
                            <div class=\"col-lg-4 col-md-6 footer-info\"> 
                                <h3 style=\"animation: flash 1.4s linear infinite\">Site Chambray les tours</h3>
                                <p> ________ ________ ________ ________ _________
                                    ________  _______ _________  _______  _______
                                    ________ _________ ___________</p>
                            </div>
                           
                            <div style= \"margin-top:10px\" class=\"col-lg-2 col-md-6 footer-links\">
                                <h4> Liens utiles <h4>
                                    <ul>
                                        <li><a href=\"#\">Link</a></li>
                                        <li><a href=\"#\">Link</a></li>
                                        <li><a href=\"#\">Link</a></li>
                                        <li><a href=\"#\">Link</a></li>
                                        <li><a href=\"#\">Link</a></li>
                                    </ul>
                            </div>
                       
                            <div style= \"margin-top:10px\" class=\"col-lg-3 col-md-6 footer-contact\"> 
                                <h4> Contactez-nous</h4>
                                <p>
                                    Hann Bel Air   Rue:6 <br/>
                                    Hann,  Dakar<br/>
                                    Sénégal<br/>
                                    <strong>Téléphone:</strong>+221 78 130 45 98<br/> 
                                    <strong>Em@il:</strong>BAM@gmail.com<br/>
                                </p>
                    
                                <div class=\"social-links\">
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-instagram\"></i></a> 
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-google-plus\"></i></a>
                                    <a href=\"#\" class=\"twitter\"><i class=\"fa fa-linkedin\"></i></a>      
                                </div> 
                            </div>  

                            <div style= \"margin-top:10px\" class=\"col-lg-3 col-md-6 footer-newsletter\">
                                <h4>Our Nemsletter</h4>
                                <p> ________ ________ ________ ________ _________
                                ________  _______ _________  _______  _______
                                ________ _________ ___________</p>
                                <form accept=\"\" mthod=\"post\">
                                    <input type=\"email\"  name=\"email\"/><input type=\"submit\" value=\"s'abonner\"/>
                                </form>
                            </div>
                
                        </div>
                    </div>
                </div>
               
                <div class=\"container\">
                    <div class=\"copyright\">
                        &copy; Copyright<strong>WebsiteName</strong>. Tout Droits Reservés
                    </div>
                    <div class=\"credits\">
                        Designed by <a href=\"#\">WebsiteName</a>
                    </div>
                </div>
            </footer>
            <!-- <footer class=\"container\">
                    <p class=\"float-end\"><a href=\"#\">Back to top</a></p>
                    <p>&copy; 2017–2021 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
                </footer>-->
        </main>

        <script src=\"{{ asset('css/bootstrapjs.js')}}\"></script>




       
            
           
          
    </body>
</html>
", "base.html.twig", "C:\\xampp\\Medical\\templates\\base.html.twig");
    }
}
