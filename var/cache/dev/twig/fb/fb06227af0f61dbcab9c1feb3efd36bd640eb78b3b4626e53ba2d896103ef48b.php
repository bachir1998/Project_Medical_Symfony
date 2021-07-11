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

/* emails/email.html.twig */
class __TwigTemplate_c639bef7e4ca4656a187d7960867aca1d05f345519f16725b67c0315821e48bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/email.html.twig"));

        // line 1
        echo "<h1> Création de votre compte médecin </h1>
<span>Bonjour </span><span> Docteur ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medecin"]) || array_key_exists("medecin", $context) ? $context["medecin"] : (function () { throw new RuntimeError('Variable "medecin" does not exist.', 2, $this->source); })()), "prenom", [], "any", false, false, false, 2), "html", null, true);
        echo " </span><span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medecin"]) || array_key_exists("medecin", $context) ? $context["medecin"] : (function () { throw new RuntimeError('Variable "medecin" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        echo ", </span>
<h4>Votre compte sur le site hospitalier de Chambray Les Tours  a été créé. Voici vos identifiants de connexion : </h4>
<span style=\"color:blue\">Email : </span><span style=\"font-weight:bold\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medecin"]) || array_key_exists("medecin", $context) ? $context["medecin"] : (function () { throw new RuntimeError('Variable "medecin" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), "html", null, true);
        echo " </span><br/><br/>
<span style=\"color:green\"> Mot de passe : </span><span style=\"color:green;font-weight:bold\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " </span> <br/><br/>
<span>Veuillez cliquer sur ce lien pour vous connecter à  votre compte :</span><a href=\"http://127.0.0.1:8000/login\">se connecter</a>
</body>
</html>      ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  53 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1> Création de votre compte médecin </h1>
<span>Bonjour </span><span> Docteur {{ medecin.prenom}} </span><span>{{ medecin.nom}}, </span>
<h4>Votre compte sur le site hospitalier de Chambray Les Tours  a été créé. Voici vos identifiants de connexion : </h4>
<span style=\"color:blue\">Email : </span><span style=\"font-weight:bold\">{{ medecin.email}} </span><br/><br/>
<span style=\"color:green\"> Mot de passe : </span><span style=\"color:green;font-weight:bold\">{{password}} </span> <br/><br/>
<span>Veuillez cliquer sur ce lien pour vous connecter à  votre compte :</span><a href=\"http://127.0.0.1:8000/login\">se connecter</a>
</body>
</html>      ", "emails/email.html.twig", "C:\\xampp\\htdocs\\Medical\\templates\\emails\\email.html.twig");
    }
}
