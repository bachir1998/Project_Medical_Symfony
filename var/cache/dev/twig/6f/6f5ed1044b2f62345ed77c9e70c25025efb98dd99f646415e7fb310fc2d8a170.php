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

/* homepage/home.html.twig */
class __TwigTemplate_4acc8ffb8283d7d5b3d4cc3a502f3abd7ee473772fd59dec2cac1396423fc703 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <main>
        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
           
                    <!-- LES Slides -->

                <div class=\"carousel-indicators\">
                    <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                    <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                    <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                </div>

                     
                <div class=\"carousel-inner\">
                    
                    <!-- Premier Slide -->
                    <div class=\"carousel-item active\">
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sante6.png"), "html", null, true);
        echo "\" alt=\"#\"/> 
                    </div>

                   

                </div>

               

            </div> <!-- fermeture mycarousel-->


            <div class=\"container marketing\">

                <!-- Three columns of text below the carousel -->
                <div class=\"row\">

                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <img class=\"bd-placeholder-img card-img-top\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sante9.png"), "html", null, true);
        echo "\" width=\"100%\" height=\"200\"/>

                            <div class=\"card-body\">
                            <h5 class=\"card-title\">Un conseil pour rester en bonne santé :</h5>
                            <p class=\"card-text\"> Il faut avoir des apports suffisants en vitamines, protéines, minéraux et autres nutriments essentiels au bon fonctionnement de l’organisme.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <img class=\"bd-placeholder-img card-img-top\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sante10.png"), "html", null, true);
        echo "\" width=\"100%\" height=\"200\"/>

                            <div class=\"card-body\">
                            <h5 class=\"card-title\">Card title that wraps to a new line</h5>
                            <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <img class=\"bd-placeholder-img card-img-top\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sante3.png"), "html", null, true);
        echo "\" width=\"100%\" height=\"200\"/> 

                            <div class=\"card-body\">
                            <h5 class=\"card-title\">Card title that wraps to a new line</h5>
                            <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div> <!-- fermeture marketing--> 

            <!--  <hr class=\"featurette-divider\">START THE FEATURETTES -->

           
    <main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 61,  122 => 50,  108 => 39,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base.html.twig' %}

{% block body %}
    <main>
        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
           
                    <!-- LES Slides -->

                <div class=\"carousel-indicators\">
                    <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                    <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                    <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                </div>

                     
                <div class=\"carousel-inner\">
                    
                    <!-- Premier Slide -->
                    <div class=\"carousel-item active\">
                        <img src=\"{{ asset('images/sante6.png') }}\" alt=\"#\"/> 
                    </div>

                   

                </div>

               

            </div> <!-- fermeture mycarousel-->


            <div class=\"container marketing\">

                <!-- Three columns of text below the carousel -->
                <div class=\"row\">

                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <img class=\"bd-placeholder-img card-img-top\" src=\"{{ asset('images/sante9.png') }}\" width=\"100%\" height=\"200\"/>

                            <div class=\"card-body\">
                            <h5 class=\"card-title\">Un conseil pour rester en bonne santé :</h5>
                            <p class=\"card-text\"> Il faut avoir des apports suffisants en vitamines, protéines, minéraux et autres nutriments essentiels au bon fonctionnement de l’organisme.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <img class=\"bd-placeholder-img card-img-top\" src=\"{{ asset('images/sante10.png') }}\" width=\"100%\" height=\"200\"/>

                            <div class=\"card-body\">
                            <h5 class=\"card-title\">Card title that wraps to a new line</h5>
                            <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <img class=\"bd-placeholder-img card-img-top\" src=\"{{ asset('images/sante3.png') }}\" width=\"100%\" height=\"200\"/> 

                            <div class=\"card-body\">
                            <h5 class=\"card-title\">Card title that wraps to a new line</h5>
                            <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div> <!-- fermeture marketing--> 

            <!--  <hr class=\"featurette-divider\">START THE FEATURETTES -->

           
    <main>
{% endblock %} ", "homepage/home.html.twig", "C:\\xampp\\Medical\\templates\\homepage\\home.html.twig");
    }
}
