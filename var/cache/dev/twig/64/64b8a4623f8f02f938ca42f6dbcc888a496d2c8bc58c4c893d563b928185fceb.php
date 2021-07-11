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

/* patient/show.html.twig */
class __TwigTemplate_ed1dae01446c6d7592168fc8a0d2b23453546e33ec9c46ba50c365c8dcbf8d94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $this->parent = $this->loadTemplate("espace_personnel/layout.html.twig", "patient/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Patient";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
  <div class=\"container\" style=\"width: 90%;margin-top:50px\">
    <h1>Patient : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 8, $this->source); })()), "prenom", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

    <table class=\"table\">
       <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>BirthDate</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 26, $this->source); })()), "birthday", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 30, $this->source); })()), "age", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Epaule étudiée</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 34, $this->source); })()), "epaule", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Centre d'inclusion</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 38, $this->source); })()), "centre", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Diabete</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 42, $this->source); })()), "diabete", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Tabac</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 46, $this->source); })()), "tabac", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pathologie</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 50, $this->source); })()), "pathologie", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 54, $this->source); })()), "genre", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IMC</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 58, $this->source); })()), "imc", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AT / MP</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 62, $this->source); })()), "atmp", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Retraite : Type</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 66, $this->source); })()), "retraite", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
            </tr>
           

                
               
            
        </tbody>
      
      
      
    </table> 
    <br/><br/>
    <h4 style=\"text-align:center;color: blue;text-decoration:underline\"> Images descriptives de la maladie du patient</h4>
    <br/>
    
    <div class=\"container marketing\">
        <div class=\"row\">
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 84, $this->source); })()), "images", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 85
            echo "
                            <div class=\"col-lg-4 \" >
                                <div class=\"card\">
                                    <img class=\"bd-placeholder-img card-img-top\" src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 88))), "html", null, true);
            echo "\" width=\"100%\" height=\"200\"/>

                                </div>
                            </div>
                    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            
        </div>             
                   
    </div>
                            
                            
                            

            

     <a class=\"btn btn-dark\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_patients");
        echo "\">back to list</a>
     <br/><br/>
     ";
        // line 106
        echo twig_include($this->env, $context, "patient/_delete_form.html.twig");
        echo "

    
   </div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "patient/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 106,  248 => 104,  236 => 94,  224 => 88,  219 => 85,  215 => 84,  194 => 66,  187 => 62,  180 => 58,  173 => 54,  166 => 50,  159 => 46,  152 => 42,  145 => 38,  138 => 34,  131 => 30,  124 => 26,  117 => 22,  110 => 18,  103 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace_personnel/layout.html.twig' %}

{% block title %}Patient{% endblock %}

{% block body %}
    
  <div class=\"container\" style=\"width: 90%;margin-top:50px\">
    <h1>Patient : {{ patient.prenom}} {{patient.nom}}</h1>

    <table class=\"table\">
       <tbody>
            <tr>
                <th>Id</th>
                <td>{{ patient.id }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ patient.prenom }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ patient.nom }}</td>
            </tr>
             <tr>
                <th>BirthDate</th>
                <td>{{ patient.birthday | date('d/m/Y') }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ patient.age }}</td>
            </tr>
             <tr>
                <th>Epaule étudiée</th>
                <td>{{ patient.epaule }}</td>
            </tr>
             <tr>
                <th>Centre d'inclusion</th>
                <td>{{ patient.centre }}</td>
            </tr>
             <tr>
                <th>Diabete</th>
                <td>{{ patient.diabete }}</td>
            </tr>
             <tr>
                <th>Tabac</th>
                <td>{{ patient.tabac }}</td>
            </tr>
            <tr>
                <th>Pathologie</th>
                <td>{{ patient.pathologie }}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{ patient.genre }}</td>
            </tr>
            <tr>
                <th>IMC</th>
                <td>{{ patient.imc }}</td>
            </tr>
            <tr>
                <th>AT / MP</th>
                <td>{{ patient.atmp }}</td>
            </tr>
             <tr>
                <th>Retraite : Type</th>
                <td>{{ patient.retraite }}</td>
            </tr>
           

                
               
            
        </tbody>
      
      
      
    </table> 
    <br/><br/>
    <h4 style=\"text-align:center;color: blue;text-decoration:underline\"> Images descriptives de la maladie du patient</h4>
    <br/>
    
    <div class=\"container marketing\">
        <div class=\"row\">
            {% for image in patient.images %}

                            <div class=\"col-lg-4 \" >
                                <div class=\"card\">
                                    <img class=\"bd-placeholder-img card-img-top\" src=\"{{ asset('/uploads/' ~ image.name) }}\" width=\"100%\" height=\"200\"/>

                                </div>
                            </div>
                    
            {% endfor %}
            
        </div>             
                   
    </div>
                            
                            
                            

            

     <a class=\"btn btn-dark\" href=\"{{ path('user_patients') }}\">back to list</a>
     <br/><br/>
     {{ include('patient/_delete_form.html.twig') }}

    
   </div> 
{% endblock %}
















", "patient/show.html.twig", "C:\\xampp\\Medical\\templates\\patient\\show.html.twig");
    }
}
