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

/* espace_personnel/patient.html.twig */
class __TwigTemplate_3e1b1c08e9928461cbe80c316aa1e8e3bd0bd82af14e6332926c6a6e8f27f6d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_personnel/patient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_personnel/patient.html.twig"));

        $this->parent = $this->loadTemplate("espace_personnel/layout.html.twig", "espace_personnel/patient.html.twig", 1);
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
  
                    

 <div class=\"container\" style=\"width: 90%;margin-top:50px\">

  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                        <div class=\"alert alert-danger\">
                            ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "         <div class=\"alert alert-success\">
             ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <br/><br/>
   <span style=\"font-weight:bold\"> Médecin : </span> 
   <span style=\"color:green;font-weight:bold\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "prenom", [], "any", false, false, false, 24), "html", null, true);
        echo " </span> <span style=\"color:green;font-weight:bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
      

    <br/><br/>    
    <h1>Liste de vos patients</h1>


    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Prenom</th>
                <th>Nom</th>
                <th>BirthDate</th>
                <th>Age</th>
                <th>Epaule étudiée</th>
                <th>Centre D'inclusion</th>
                <th>Diabete</th>
                <th>Tabac</th>
                <th>Pathologie</th>
                <th>Genre</th>
                <th>Retraite : Type</th>
                <th>Actions<th/>
               
               
            </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 53
            echo "            <tr>
            
                
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "prenom", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "nom", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>  
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "birthday", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "age", [], "any", false, false, false, 59), "html", null, true);
            echo "</td> 
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "epaule", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>  
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "centre", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "diabete", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "tabac", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>  
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pathologie", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "genre", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "retraite", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>
                    <a style=\"margin-right:2%\" class=\"btn btn-warning\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_show", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">Plus de détails</a>
                     <a class=\"btn btn-primary\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">edit</a>
                </td>
           
                
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "                <tr>
                    <td colspan=\"5\">no records found</td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </tbody>
    </table>

   <a class=\"btn btn-success\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_new");
        echo "\">Ajouter un nouveau patient</a>




 </div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace_personnel/patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 82,  227 => 79,  218 => 75,  207 => 69,  203 => 68,  198 => 66,  194 => 65,  190 => 64,  186 => 63,  182 => 62,  178 => 61,  174 => 60,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  153 => 53,  148 => 52,  115 => 24,  111 => 22,  102 => 19,  99 => 18,  95 => 17,  92 => 16,  83 => 13,  80 => 12,  76 => 11,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace_personnel/layout.html.twig' %}


{% block body %}
  
  
                    

 <div class=\"container\" style=\"width: 90%;margin-top:50px\">

  {% for message in app.flashes('danger') %}
                        <div class=\"alert alert-danger\">
                            {{ message }}
                        </div>
   {% endfor %}

    {% for message in app.flashes('success') %}
         <div class=\"alert alert-success\">
             {{ message }}
        </div>
    {% endfor %}
    <br/><br/>
   <span style=\"font-weight:bold\"> Médecin : </span> 
   <span style=\"color:green;font-weight:bold\">{{ app.user.prenom}} </span> <span style=\"color:green;font-weight:bold\">{{ app.user.nom}}</span>
      

    <br/><br/>    
    <h1>Liste de vos patients</h1>


    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Prenom</th>
                <th>Nom</th>
                <th>BirthDate</th>
                <th>Age</th>
                <th>Epaule étudiée</th>
                <th>Centre D'inclusion</th>
                <th>Diabete</th>
                <th>Tabac</th>
                <th>Pathologie</th>
                <th>Genre</th>
                <th>Retraite : Type</th>
                <th>Actions<th/>
               
               
            </tr>
        </thead>
        <tbody>
        {% for patient in patients %}
            <tr>
            
                
                <td>{{ patient.prenom }}</td>
                <td>{{ patient.nom }}</td>  
                <td>{{ patient.birthday | date('d/m/Y') }}</td>
                <td>{{ patient.age }}</td> 
                <td>{{ patient.epaule }}</td>  
                <td>{{ patient.centre }}</td>
                <td>{{ patient.diabete }}</td>
                <td>{{ patient.tabac }}</td>  
                <td>{{ patient.pathologie }}</td>
                <td>{{ patient.genre }}</td>
                <td>{{ patient.retraite }}</td>
                <td>
                    <a style=\"margin-right:2%\" class=\"btn btn-warning\" href=\"{{ path('patient_show', {'id': patient.id}) }}\">Plus de détails</a>
                     <a class=\"btn btn-primary\" href=\"{{ path('patient_edit', {'id': patient.id}) }}\">edit</a>
                </td>
           
                
            </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">no records found</td>
                </tr>
        {% endfor %}
        </tbody>
    </table>

   <a class=\"btn btn-success\" href=\"{{ path('patient_new') }}\">Ajouter un nouveau patient</a>




 </div>
   
{% endblock %}
", "espace_personnel/patient.html.twig", "C:\\xampp\\Medical\\templates\\espace_personnel\\patient.html.twig");
    }
}
