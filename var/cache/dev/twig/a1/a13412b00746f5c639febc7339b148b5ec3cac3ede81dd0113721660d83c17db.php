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

/* patient/index_pathologie.html.twig */
class __TwigTemplate_7c5b14533d0565ac0e2d0e57be0d435c65081e655637329346c6417373aed8cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index_pathologie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index_pathologie.html.twig"));

        $this->parent = $this->loadTemplate("espace_personnel/layout.html.twig", "patient/index_pathologie.html.twig", 1);
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

        echo "Liste des patients";
        
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
        echo "  <div class=\"container\" style=\"width: 90%;margin-top:50px\">
     <div class=\"alert alert-info my-3\">
       <p>Veuillez renseigner la pathologie à rechercher, par défaut en cliquant sur le bouton rechercher : vous avez la liste de tous les patients</a> </p>
    </div>
    <br/><br/>

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\"> 
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nompathologie", [], "any", false, false, false, 14), 'label', ["label" => "Pathologie"]);
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nompathologie", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div><br/>
        <button type=\"submit\" class=\"btn btn-lg btn-primary\">Rechercher</button>
   ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
  <br/><br/> 

  ";
        // line 21
        if ((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "    <h1>Liste des patients</h1>
    <table class=\"table\">
        <thead>
             <tr>
                <th>Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>BirthDate</th>
                <th>Age</th>
                <th>Centre D'inclusion</th>
                <th>Epaule étudiée</th>
                <th>Diabete</th>
                <th>Tabac</th>
                <th>Pathologie</th>
                <th>Genre</th>
                <th>Retraite : Type</th>
               
              
            </tr>
        </thead>
        <tbody>
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 44
                echo "            <tr>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "prenom", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "nom", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "birthday", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "age", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "centre", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "epaule", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "diabete", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "tabac", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pathologie", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "genre", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "retraite", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
               
              
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </tbody>
    </table> 
   ";
        } else {
            // line 64
            echo "                <p>no records found</p>
    ";
        }
        // line 65
        echo "     
   
   </div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "patient/index_pathologie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 65,  209 => 64,  204 => 61,  193 => 56,  189 => 55,  185 => 54,  181 => 53,  177 => 52,  173 => 51,  169 => 50,  165 => 49,  161 => 48,  157 => 47,  153 => 46,  149 => 45,  146 => 44,  142 => 43,  119 => 22,  117 => 21,  111 => 18,  105 => 15,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace_personnel/layout.html.twig' %}

{% block title %}Liste des patients{% endblock %}

{% block body %}
  <div class=\"container\" style=\"width: 90%;margin-top:50px\">
     <div class=\"alert alert-info my-3\">
       <p>Veuillez renseigner la pathologie à rechercher, par défaut en cliquant sur le bouton rechercher : vous avez la liste de tous les patients</a> </p>
    </div>
    <br/><br/>

    {{ form_start(form) }}
        <div class=\"form-group\"> 
                {{ form_label(form.nompathologie, 'Pathologie')}}
                {{ form_widget(form.nompathologie,{'attr': {'class' : 'form-control'}} )}}
        </div><br/>
        <button type=\"submit\" class=\"btn btn-lg btn-primary\">Rechercher</button>
   {{ form_end(form) }}
  <br/><br/> 

  {% if patients %}
    <h1>Liste des patients</h1>
    <table class=\"table\">
        <thead>
             <tr>
                <th>Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>BirthDate</th>
                <th>Age</th>
                <th>Centre D'inclusion</th>
                <th>Epaule étudiée</th>
                <th>Diabete</th>
                <th>Tabac</th>
                <th>Pathologie</th>
                <th>Genre</th>
                <th>Retraite : Type</th>
               
              
            </tr>
        </thead>
        <tbody>
        {% for patient in patients %}
            <tr>
                <td>{{ patient.id }}</td>
                <td>{{ patient.prenom }}</td>
                <td>{{ patient.nom }}</td>
                <td>{{ patient.birthday | date('d/m/Y')}}</td>
                <td>{{ patient.age }}</td>
                <td>{{ patient.centre }}</td>
                <td>{{ patient.epaule }}</td>
                <td>{{ patient.diabete }}</td>
                <td>{{ patient.tabac }}</td>
                <td>{{ patient.pathologie }}</td>
                <td>{{ patient.genre }}</td>
                <td>{{ patient.retraite }}</td>
               
              
            </tr>
        {% endfor %}
        </tbody>
    </table> 
   {% else %}
                <p>no records found</p>
    {% endif %}     
   
   </div> 
{% endblock %}


















", "patient/index_pathologie.html.twig", "C:\\xampp\\Medical\\templates\\patient\\index_pathologie.html.twig");
    }
}
