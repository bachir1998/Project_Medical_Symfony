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

/* espace_personnel/layout.html.twig */
class __TwigTemplate_a3fc58f69f9fff8023dae4bd47741b1f7d39de6931e7d771781e9f43df67a8b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_personnel/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_personnel/layout.html.twig"));

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

            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
                    

            <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/carousel/\">
            <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap\" rel=\"stylesheet\">

            
 
            <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrapmin.css"), "html", null, true);
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
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\">
      
            
    </head>
       
     
    </head>
    <body>
       

                                      <!--  NAVBAR -->
      <header>
        
        <nav class=\"navbar navbar-expand-md fixed-top navbar-light bg-light\">
            <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\"><img style=\"width: 60px;height:40px;\"src=\"";
        // line 61
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
                            <a style=\"font-size:120%\" class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a style=\"font-size:120%;margin-right:15px;color:green\" class=\"nav-link\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_user");
        echo "\">Mon espace personnel</a>
                        </li> 
                         
                        
                         ";
        // line 79
        $this->displayBlock('header_links', $context, $blocks);
        // line 132
        echo "   
                        
                    </ul>
               
                </form>
            </div>
            </div>
        </nav>
        </header>
        ";
        // line 141
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "
        <main>


            
            <!-- FOOTER -->

            <footer style=\"margin-top:20%\" id=\"footer\" class=\"foot\">
                <div class=\"footer-top  footer-default\">
                    <div class=\"container\">
                        <div class=\"row\">
                            
                            <div class=\"col-lg-4 col-md-6 footer-info\"> 
                                <h3 style=\"animation: flash 1.4s linear infinite\"> Site Chambray les tours</h3>
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
        // line 223
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

    // line 79
    public function block_header_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_links"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_links"));

        // line 80
        echo "                              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 82
                echo "                                    <li class=\"nav-item\">
                                        <a style=\"font-size:120%\" class=\"nav-link \" aria-current=\"page\" href=\"";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo "\">Liste des Médecins</a>
                                    </li>
                                     <li class=\"nav-item\">
                                        <a style=\"font-size:120%;margin-right:15px\" class=\"nav-link\" href=\"";
                // line 86
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                echo "\">Ajouter un médecin</a>
                                     </li>
                                    <li class=\"nav-item dropdown\">
                                        <a style=\"margin-right:105px\" href=\"#\" class=\"nav-link dropdown-toggle\" id=\"dropdownUser1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <img src=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/admins.png"), "html", null, true);
                echo "\" alt=\"mdo\" width=\"50\" height=\"50\" class=\"rounded-circle\">
                                        </a>
                                         <div class=\"dropdown-menu\" aria-labelledby=\"dropdownUser1\">
                                             <a class=\"dropdown-item btn btn-danger\" style=\"color:red\" href=\"";
                // line 93
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Logout</a>
                                           
                                        </div>
                                    </li>
                                ";
            } else {
                // line 97
                echo "  
                                     
                                    <li class=\"nav-item\">
                                        <a style=\"font-size:120%;margin-right:15px\" class=\"nav-link\" href=\"";
                // line 100
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_patients");
                echo "\">Mes patients</a>
                                      
                                     </li>
                                     <li class=\"nav-item dropdown\">
                                        <a style=\"font-size:120%;margin-right:15px\" class=\"nav-link dropdown-toggle\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Search-Patients</a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                                            <a class=\"dropdown-item\" href=\"";
                // line 106
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_index_age");
                echo "\">Par Age</a>
                                            <a class=\"dropdown-item\" href=\"";
                // line 107
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_index_sexe");
                echo "\">Par Genre</a>
                                            <a class=\"dropdown-item\" href=\"";
                // line 108
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_index_pathologie");
                echo "\">Par Pathologie</a>
                
                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a style=\"margin-right:105px\" href=\"#\" class=\"nav-link dropdown-toggle\" id=\"dropdownUser1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <img src=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/med.png"), "html", null, true);
                echo "\" alt=\"mdo\" width=\"42\" height=\"42\" class=\"rounded-circle\">
                                        </a>
                                         <div class=\"dropdown-menu\" aria-labelledby=\"dropdownUser1\">
                                             <a class=\"dropdown-item btn btn-danger\" style=\"color:green\" href=\"#\">Dr ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "nom", [], "any", false, false, false, 117), "html", null, true);
                echo "</a>
                                            <hr class=\"dropdown-divider\" >
                                             <a class=\"dropdown-item btn btn-danger\" style=\"color:red\" href=\"";
                // line 119
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Logout</a>
                                           
                                        </div>
                                    </li>
                                    
                                     
                                ";
            }
            // line 126
            echo "                                     
                            ";
        } else {
            // line 128
            echo "                                <li><a class=\"btn btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Login</a></li>
                                    
                            ";
        }
        // line 131
        echo "                             
                         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 142
        echo "        
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace_personnel/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 142,  406 => 141,  395 => 131,  388 => 128,  384 => 126,  374 => 119,  369 => 117,  363 => 114,  354 => 108,  350 => 107,  346 => 106,  337 => 100,  332 => 97,  324 => 93,  318 => 90,  311 => 86,  305 => 83,  302 => 82,  299 => 81,  296 => 80,  286 => 79,  267 => 12,  245 => 223,  165 => 145,  163 => 141,  152 => 132,  150 => 79,  143 => 75,  137 => 72,  123 => 61,  105 => 46,  101 => 45,  97 => 44,  76 => 26,  59 => 12,  46 => 1,);
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

            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
                    

            <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/carousel/\">
            <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap\" rel=\"stylesheet\">

            
 
            <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrapmin.css')}}\">
     
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/blog.css')}}\">
      
            
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
                            <a style=\"font-size:120%\" class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('home') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a style=\"font-size:120%;margin-right:15px;color:green\" class=\"nav-link\" href=\"{{ path('home_user') }}\">Mon espace personnel</a>
                        </li> 
                         
                        
                         {% block header_links %}
                              {% if app.user %}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li class=\"nav-item\">
                                        <a style=\"font-size:120%\" class=\"nav-link \" aria-current=\"page\" href=\"{{ path('user_index') }}\">Liste des Médecins</a>
                                    </li>
                                     <li class=\"nav-item\">
                                        <a style=\"font-size:120%;margin-right:15px\" class=\"nav-link\" href=\"{{ path('app_register') }}\">Ajouter un médecin</a>
                                     </li>
                                    <li class=\"nav-item dropdown\">
                                        <a style=\"margin-right:105px\" href=\"#\" class=\"nav-link dropdown-toggle\" id=\"dropdownUser1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <img src=\"{{ asset('images/admins.png') }}\" alt=\"mdo\" width=\"50\" height=\"50\" class=\"rounded-circle\">
                                        </a>
                                         <div class=\"dropdown-menu\" aria-labelledby=\"dropdownUser1\">
                                             <a class=\"dropdown-item btn btn-danger\" style=\"color:red\" href=\"{{ path('app_logout') }}\">Logout</a>
                                           
                                        </div>
                                    </li>
                                {% else %}  
                                     
                                    <li class=\"nav-item\">
                                        <a style=\"font-size:120%;margin-right:15px\" class=\"nav-link\" href=\"{{ path('user_patients') }}\">Mes patients</a>
                                      
                                     </li>
                                     <li class=\"nav-item dropdown\">
                                        <a style=\"font-size:120%;margin-right:15px\" class=\"nav-link dropdown-toggle\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Search-Patients</a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                                            <a class=\"dropdown-item\" href=\"{{path('patient_index_age')}}\">Par Age</a>
                                            <a class=\"dropdown-item\" href=\"{{path('patient_index_sexe')}}\">Par Genre</a>
                                            <a class=\"dropdown-item\" href=\"{{path('patient_index_pathologie')}}\">Par Pathologie</a>
                
                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a style=\"margin-right:105px\" href=\"#\" class=\"nav-link dropdown-toggle\" id=\"dropdownUser1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <img src=\"{{ asset('images/med.png') }}\" alt=\"mdo\" width=\"42\" height=\"42\" class=\"rounded-circle\">
                                        </a>
                                         <div class=\"dropdown-menu\" aria-labelledby=\"dropdownUser1\">
                                             <a class=\"dropdown-item btn btn-danger\" style=\"color:green\" href=\"#\">Dr {{app.user.nom}}</a>
                                            <hr class=\"dropdown-divider\" >
                                             <a class=\"dropdown-item btn btn-danger\" style=\"color:red\" href=\"{{ path('app_logout') }}\">Logout</a>
                                           
                                        </div>
                                    </li>
                                    
                                     
                                {% endif %}
                                     
                            {% else %}
                                <li><a class=\"btn btn-success\" href=\"{{ path('app_register') }}\">Login</a></li>
                                    
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

            <footer style=\"margin-top:20%\" id=\"footer\" class=\"foot\">
                <div class=\"footer-top  footer-default\">
                    <div class=\"container\">
                        <div class=\"row\">
                            
                            <div class=\"col-lg-4 col-md-6 footer-info\"> 
                                <h3 style=\"animation: flash 1.4s linear infinite\"> Site Chambray les tours</h3>
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
", "espace_personnel/layout.html.twig", "C:\\xampp\\Medical\\templates\\espace_personnel\\layout.html.twig");
    }
}
