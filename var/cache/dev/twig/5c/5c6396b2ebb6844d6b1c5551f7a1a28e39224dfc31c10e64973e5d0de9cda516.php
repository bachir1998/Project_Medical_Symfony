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

/* patient/_form.html.twig */
class __TwigTemplate_c9f8e3b0e6abdf6df7632ab4ec4f775b75c485c976ca86f4398471fa025acb95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/_form.html.twig"));

        $this->parent = $this->loadTemplate("espace_personnel/layout.html.twig", "patient/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 8
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    

   <div class=\"container\" style=\"width: 50%\">
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
             
             <div class=\"form-group\"> 
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'label', ["label" => "Prenom"]);
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                
            </div><br/>
             <div class=\"form-group\"> 
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'label', ["label" => "Nom"]);
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
               
            </div><br/>
             <div class=\"form-group\"> 
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "birthday", [], "any", false, false, false, 27), 'label', ["label" => "BirthDate"]);
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "birthday", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        echo "
                
            </div><br/> 
             <div class=\"form-group\"> 
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "age", [], "any", false, false, false, 32), 'label', ["label" => "Age"]);
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "age", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "min" => "10", "max" => "100"]]);
        echo "
                
            </div><br/>    
            <div class=\"form-group\"> 
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "genre", [], "any", false, false, false, 37), 'label', ["label" => "Genre"]);
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "genre", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
               
            </div><br/>
            <div class=\"form-group\"> 
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "atmp", [], "any", false, false, false, 42), 'label', ["label" => "AT / MP"]);
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "atmp", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
               
            </div><br/>

            <div class=\"form-group\"> 
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "epaule", [], "any", false, false, false, 48), 'label', ["label" => "Epaule étudié"]);
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "epaule", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Gauche ou Droite ?"]]);
        echo "
               
            </div><br/>
            <div class=\"form-group\"> 
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "centre", [], "any", false, false, false, 53), 'label', ["label" => "Centre d'inclusion"]);
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "centre", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                
            </div><br/> 
            <div class=\"form-group\"> 
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "diabete", [], "any", false, false, false, 58), 'label', ["label" => "Diabete"]);
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "diabete", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                
            </div><br/> 
            <div class=\"form-group\"> 
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "tabac", [], "any", false, false, false, 63), 'label', ["label" => "Tabac"]);
        echo "
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "tabac", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                
            </div><br/> 

            <div class=\"form-group\"> 
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "pathologie", [], "any", false, false, false, 69), 'label', ["label" => "Pathologie"]);
        echo "
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "pathologie", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
               
            </div><br/>
            <div class=\"form-group\"> 
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "retraite", [], "any", false, false, false, 74), 'label', ["label" => "Retraite : Type"]);
        echo "
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "retraite", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                
            </div><br/> 

             <div class=\"form-group\"> 
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "imc", [], "any", false, false, false, 80), 'label', ["label" => "IMC"]);
        echo "
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "imc", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "step" => ".01"]]);
        echo "
               
            </div><br/>

            <div class=\"form-group\"> 
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "images", [], "any", false, false, false, 86), 'label', ["label" => "Images"]);
        echo "
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "images", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
               
            </div><br/>

            ";
        // line 92
        echo "            ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "attributes", [], "any", false, false, false, 92), "get", [0 => "_route"], "method", false, false, false, 92), "patient_edit"))) {
            // line 93
            echo "
              <div class=\"container marketing\">
                  <div class=\"row\">
                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 96, $this->source); })()), "images", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 97
                echo "
                        <div class=\"col-lg-6\">  
                        
                                <img src=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 100))), "html", null, true);
                echo "\"   alt=\"Image\"  width=\"100%\" height=\"200\">
                                <a style=\"margin: 2%;margin-bottom:8%\" class=\"btn btn-danger\" href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\" data-delete data-token=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 101))), "html", null, true);
                echo "\">Supprimer</a>
                            

                        </div>

                
                        
                        
                        

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                        <br/><br/>
                   
                  </div>
                </div>  
                 <button type=\"submit\" class=\"btn btn-lg btn-primary\">Modifier</button>
            ";
        } else {
            // line 118
            echo "                 <br/><br/>
                   <button type=\"submit\" class=\"btn btn-lg btn-primary\">Ajouter</button>       
            ";
        }
        // line 121
        echo "
            ";
        // line 123
        echo "           
           
           
        
           
        ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        echo "
    </div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "patient/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 128,  328 => 123,  325 => 121,  320 => 118,  312 => 112,  293 => 101,  289 => 100,  284 => 97,  280 => 96,  275 => 93,  272 => 92,  265 => 87,  261 => 86,  253 => 81,  249 => 80,  241 => 75,  237 => 74,  230 => 70,  226 => 69,  218 => 64,  214 => 63,  207 => 59,  203 => 58,  196 => 54,  192 => 53,  185 => 49,  181 => 48,  173 => 43,  169 => 42,  162 => 38,  158 => 37,  151 => 33,  147 => 32,  140 => 28,  136 => 27,  129 => 23,  125 => 22,  118 => 18,  114 => 17,  108 => 14,  102 => 10,  93 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace_personnel/layout.html.twig' %}
  

{% block title %}Register{% endblock %}

{% block body %}
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

    

   <div class=\"container\" style=\"width: 50%\">
        {{ form_start(form) }}
             
             <div class=\"form-group\"> 
                {{ form_label(form.prenom, 'Prenom')}}
                {{ form_widget(form.prenom,{'attr': {'class' : 'form-control'}} )}}
                
            </div><br/>
             <div class=\"form-group\"> 
                {{ form_label(form.nom, 'Nom')}}
                {{ form_widget(form.nom,{'attr': {'class' : 'form-control'}} )}}
               
            </div><br/>
             <div class=\"form-group\"> 
                {{ form_label(form.birthday, 'BirthDate')}}
                {{ form_widget(form.birthday,{'attr': {'class' : 'form-control', 'type' : 'date'}} )}}
                
            </div><br/> 
             <div class=\"form-group\"> 
                {{ form_label(form.age, 'Age')}}
                {{ form_widget(form.age,{'attr': {'class' : 'form-control', 'min' : '10', 'max' : '100'}} )}}
                
            </div><br/>    
            <div class=\"form-group\"> 
                {{ form_label(form.genre, 'Genre')}}
                {{ form_widget(form.genre,{'attr': {'class' : 'form-control'}} )}}
               
            </div><br/>
            <div class=\"form-group\"> 
                {{ form_label(form.atmp, 'AT / MP')}}
                {{ form_widget(form.atmp,{'attr': {'class' : 'form-control'}} )}}
               
            </div><br/>

            <div class=\"form-group\"> 
                {{ form_label(form.epaule, 'Epaule étudié')}}
                {{ form_widget(form.epaule,{'attr': {'class' : 'form-control', 'placeholder' : 'Gauche ou Droite ?'}} )}}
               
            </div><br/>
            <div class=\"form-group\"> 
                {{ form_label(form.centre, 'Centre d\\'inclusion')}}
                {{ form_widget(form.centre,{'attr': {'class' : 'form-control'}} )}}
                
            </div><br/> 
            <div class=\"form-group\"> 
                {{ form_label(form.diabete, 'Diabete')}}
                {{ form_widget(form.diabete,{'attr': {'class' : 'form-control'}} )}}
                
            </div><br/> 
            <div class=\"form-group\"> 
                {{ form_label(form.tabac, 'Tabac')}}
                {{ form_widget(form.tabac,{'attr': {'class' : 'form-control'}} )}}
                
            </div><br/> 

            <div class=\"form-group\"> 
                {{ form_label(form.pathologie, 'Pathologie')}}
                {{ form_widget(form.pathologie,{'attr': {'class' : 'form-control'}} )}}
               
            </div><br/>
            <div class=\"form-group\"> 
                {{ form_label(form.retraite, 'Retraite : Type')}}
                {{ form_widget(form.retraite,{'attr': {'class' : 'form-control'}} )}}
                
            </div><br/> 

             <div class=\"form-group\"> 
                {{ form_label(form.imc, 'IMC')}}
                {{ form_widget(form.imc,{'attr': {'class' : 'form-control','step':'.01'}} )}}
               
            </div><br/>

            <div class=\"form-group\"> 
                {{ form_label(form.images, 'Images')}}
                {{ form_widget(form.images,{'attr': {'class' : 'form-control'}} )}}
               
            </div><br/>

            {# Vérifier si la route est edit on affiche les images#}
            {% if app.request.attributes.get('_route') == 'patient_edit' %}

              <div class=\"container marketing\">
                  <div class=\"row\">
                    {% for image in patient.images %}

                        <div class=\"col-lg-6\">  
                        
                                <img src=\"{{ asset('/uploads/' ~ image.name) }}\"   alt=\"Image\"  width=\"100%\" height=\"200\">
                                <a style=\"margin: 2%;margin-bottom:8%\" class=\"btn btn-danger\" href=\"{{ path('patient_delete_image', {id: image.id}) }}\" data-delete data-token=\"{{ csrf_token('delete' ~ image.id) }}\">Supprimer</a>
                            

                        </div>

                
                        
                        
                        

                    {% endfor %}
                        <br/><br/>
                   
                  </div>
                </div>  
                 <button type=\"submit\" class=\"btn btn-lg btn-primary\">Modifier</button>
            {% else %}
                 <br/><br/>
                   <button type=\"submit\" class=\"btn btn-lg btn-primary\">Ajouter</button>       
            {% endif %}

            {# Vérifier si la route est show on affiche les images#}
           
           
           
        
           
        {{ form_end(form) }}
    </div>    
{% endblock %}









", "patient/_form.html.twig", "C:\\xampp\\Medical\\templates\\patient\\_form.html.twig");
    }
}
