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

/* espace_personnel/homeuser.html.twig */
class __TwigTemplate_a18760088b2e52af33f289a72dd6e52608d802a05dded78689776ca76ea66b55 extends Template
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
        return "espace_personnel/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_personnel/homeuser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_personnel/homeuser.html.twig"));

        $this->parent = $this->loadTemplate("espace_personnel/layout.html.twig", "espace_personnel/homeuser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <br/><br/><br/>
  <main class=\"container\">
  <div class=\"p-4 p-md-5 mb-4 text-white rounded bg-dark\">
    <div class=\"col-md-8 px-0\">
      ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 12
                echo "           <h1 class=\"display-4 fst-italic\">Bonjour administrateur ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "prenom", [], "any", false, false, false, 12), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "nom", [], "any", false, false, false, 12), "html", null, true);
                echo " </h1>
          <p style=\"text-align:justify\" class=\"lead my-3\">Bienvenue dans votre espace personnel, comme vous le savez ce site a pour but  de vous aider à la prise de décision dans le domaine
                                de l'arthroscopie (plus précisément, chirurgie de l'épaule. Sur le menu
                               de navigation vous trouverez les différents liens vous permettant d'ajouter, de modifier des médecins afin qu'ils puissent se connecter et gérer leurs patients</p>                       
         ";
            } else {
                // line 17
                echo "          <h1 class=\"display-4 fst-italic\">Bonjour Docteur ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
                echo " </h1>
          <p style=\"text-align:justify\" class=\"lead my-3\">Bienvenue dans votre espace personnel, comme vous le savez ce site a pour but  de vous aider à la prise de décision dans le domaine
                                de l'arthroscopie (plus précisément, chirurgie de l'épaule. Sur le menu
                               de navigation vous trouverez les différents liens vous permettant d'ajouter, de modifier ou de rechercher des informations
                               sur un (des) patient (s) donné (s)</p>
         
          ";
            }
            // line 24
            echo "       ";
        }
        // line 25
        echo "      
    </div>
  </div>

  ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 31
                echo "       <!--  Rien-->
    ";
            } else {
                // line 33
                echo "      <div class=\"row mb-2\">
        <div class=\"col-md-6\">
          <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
            <div class=\"col p-4 d-flex flex-column position-static\">
              
              <h3 class=\"mb-0\">Informations personnelles : </h3>
              <br/>
              <div class=\"mb-1 text-muted\">Prenom : <span style=\"font-weight:bold;color:green\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "prenom", [], "any", false, false, false, 40), "html", null, true);
                echo "</span></div>
              <div class=\"mb-1 text-muted\">Nom : <span style=\"font-weight:bold;color:green\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
                echo "</span></div>
              <div class=\"mb-1 text-muted\">Age : <span style=\"font-weight:bold;color:green\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "age", [], "any", false, false, false, 42), "html", null, true);
                echo "</span></div>
              <div class=\"mb-1 text-muted\">Email : <span style=\"font-weight:bold;color:green\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "email", [], "any", false, false, false, 43), "html", null, true);
                echo "</span></div>
              
            </div>
            <div class=\"col-auto d-none d-lg-block\">
              

              <img class=\"bd-placeholder-img\" width=\"200\" height=\"250\" src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/med.png"), "html", null, true);
                echo "\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/></img>

            </div>
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
            <div class=\"col p-4 d-flex flex-column position-static\">
              <h3 class=\"mb-0\">Informations sur vos patients</h3>
              <br/>
              
              <div class=\"mb-1 text-muted\">Nombre de patients : <span style=\"color:blue\">";
                // line 60
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["mypatient"]) || array_key_exists("mypatient", $context) ? $context["mypatient"] : (function () { throw new RuntimeError('Variable "mypatient" does not exist.', 60, $this->source); })())), "html", null, true);
                echo "</span></div>
               
              <br/>
              <p class=\"mb-auto\">Le nombre de patients peut augmenter ou diminuer en fonction des ajouts ou suppression</p>
              
            </div>
            <div class=\"col-auto d-none d-lg-block\">
              <img class=\"bd-placeholder-img\" width=\"200\" height=\"250\" src=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sante3.png"), "html", null, true);
                echo "\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/></img>
            </div>
          </div>
        </div>
      </div>
     ";
            }
            // line 73
            echo "    ";
        }
        echo " 
 </main> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace_personnel/homeuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 73,  176 => 67,  166 => 60,  152 => 49,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  122 => 33,  118 => 31,  115 => 30,  113 => 29,  107 => 25,  104 => 24,  91 => 17,  80 => 12,  77 => 11,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace_personnel/layout.html.twig' %}


{% block body %}

  <br/><br/><br/>
  <main class=\"container\">
  <div class=\"p-4 p-md-5 mb-4 text-white rounded bg-dark\">
    <div class=\"col-md-8 px-0\">
      {% if app.user %}
        {% if is_granted('ROLE_ADMIN') %}
           <h1 class=\"display-4 fst-italic\">Bonjour administrateur {{ app.user.prenom}} {{ app.user.nom}} </h1>
          <p style=\"text-align:justify\" class=\"lead my-3\">Bienvenue dans votre espace personnel, comme vous le savez ce site a pour but  de vous aider à la prise de décision dans le domaine
                                de l'arthroscopie (plus précisément, chirurgie de l'épaule. Sur le menu
                               de navigation vous trouverez les différents liens vous permettant d'ajouter, de modifier des médecins afin qu'ils puissent se connecter et gérer leurs patients</p>                       
         {% else %}
          <h1 class=\"display-4 fst-italic\">Bonjour Docteur {{ app.user.prenom}} {{ app.user.nom}} </h1>
          <p style=\"text-align:justify\" class=\"lead my-3\">Bienvenue dans votre espace personnel, comme vous le savez ce site a pour but  de vous aider à la prise de décision dans le domaine
                                de l'arthroscopie (plus précisément, chirurgie de l'épaule. Sur le menu
                               de navigation vous trouverez les différents liens vous permettant d'ajouter, de modifier ou de rechercher des informations
                               sur un (des) patient (s) donné (s)</p>
         
          {% endif %}
       {% endif %}
      
    </div>
  </div>

  {% if app.user %}
    {% if is_granted('ROLE_ADMIN') %}
       <!--  Rien-->
    {% else %}
      <div class=\"row mb-2\">
        <div class=\"col-md-6\">
          <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
            <div class=\"col p-4 d-flex flex-column position-static\">
              
              <h3 class=\"mb-0\">Informations personnelles : </h3>
              <br/>
              <div class=\"mb-1 text-muted\">Prenom : <span style=\"font-weight:bold;color:green\">{{app.user.prenom}}</span></div>
              <div class=\"mb-1 text-muted\">Nom : <span style=\"font-weight:bold;color:green\">{{app.user.nom}}</span></div>
              <div class=\"mb-1 text-muted\">Age : <span style=\"font-weight:bold;color:green\">{{app.user.age}}</span></div>
              <div class=\"mb-1 text-muted\">Email : <span style=\"font-weight:bold;color:green\">{{app.user.email}}</span></div>
              
            </div>
            <div class=\"col-auto d-none d-lg-block\">
              

              <img class=\"bd-placeholder-img\" width=\"200\" height=\"250\" src=\"{{ asset('images/med.png') }}\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/></img>

            </div>
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
            <div class=\"col p-4 d-flex flex-column position-static\">
              <h3 class=\"mb-0\">Informations sur vos patients</h3>
              <br/>
              
              <div class=\"mb-1 text-muted\">Nombre de patients : <span style=\"color:blue\">{{ mypatient|length }}</span></div>
               
              <br/>
              <p class=\"mb-auto\">Le nombre de patients peut augmenter ou diminuer en fonction des ajouts ou suppression</p>
              
            </div>
            <div class=\"col-auto d-none d-lg-block\">
              <img class=\"bd-placeholder-img\" width=\"200\" height=\"250\" src=\"{{ asset('images/sante3.png') }}\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/></img>
            </div>
          </div>
        </div>
      </div>
     {% endif %}
    {% endif %} 
 </main> 
{% endblock %}
", "espace_personnel/homeuser.html.twig", "C:\\xampp\\Medical\\templates\\espace_personnel\\homeuser.html.twig");
    }
}
