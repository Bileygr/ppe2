<?php

/* registration/register.html.twig */
class __TwigTemplate_8545e6953f5a1de33268cb734d9c35fa07227f09155302eb158eed7329434aea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">
\t<head>
    \t<meta charset=\"utf-8\">
    \t<title>
    \t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "    \t</title>

    \t<!-- CSS -->
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    \t<link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
    \t<link rel=\"stylesheet\" href=\"moncss.css\"> <!-- mon CSS -->
    \t<link rel=\"shortcut icon\" href=\"images/favicon.ico\" /> <!-- Icone du site -->
    \t<style type=\"text/css\">
    \t\tinput { 
    \t\t\ttext-align: center; 
\t\t\t}
    \t</style>
  \t</head>

  \t<body>
    \t<div class=\"container\">
      \t\t<div class=\"header clearfix\">
        \t\t<h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
      \t\t</div>

      \t\t<div class=\"jumbotron\">
      \t\t\t";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "      \t\t</div>

      \t\t<hr>

      \t\t<footer>
        \t\t<p>&copy; Cheik-Siramakan Keita 2018-";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
      \t\t</footer>
    \t</div>

    \t<!-- Scripts -->
    \t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    \t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    \t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    \t<script rel=\"text/javaScript\" src=\"\"></script> <!-- mon script -->
  \t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    \t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_inscription")) {
            // line 9
            echo "    \t\t\tInscription Administrateur
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_inscription")) {
            // line 11
            echo "    \t\t\tInscription Jeune
\t\t\t";
        }
        // line 13
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "        \t\t<h1>
        \t\t\t";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_inscription")) {
            // line 38
            echo "    \t\t\t\t\tInscription Administrateur
\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_inscription")) {
            // line 40
            echo "    \t\t\t\t\tInscription Jeune
\t\t\t\t\t";
        }
        // line 42
        echo "        \t\t</h1><br/>
\t        \t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
\t          \t\t\t<div class=\"form-group\">
\t          \t\t\t\t<label>Nom</label>
\t          \t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 46, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t            \t\t</div>

\t          \t\t\t<div class=\"form-group\">
\t            \t\t\t<label>Prénom</label>
\t            \t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 51, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t          \t\t\t</div>

\t          \t\t\t<div class=\"form-group\">
\t            \t\t\t<label>Mot de passe</label>
\t            \t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 56, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t          \t\t\t</div>

\t          \t\t\t<div class=\"form-group\">
\t            \t\t\t<label>Téléphone</label>
\t            \t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 61, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t          \t\t\t</div>

\t\t\t          \t<div class=\"form-group\">
\t\t\t            \t<label>Email</label>
\t\t\t            \t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 66, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t          \t</div>

\t\t\t          \t<div class=\"form-group\">
\t\t\t            \t<label>Adresse</label>
\t\t\t            \t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 71, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t          \t</div>

\t\t\t          \t<div class=\"form-group\">
\t\t\t            \t<label>Ville</label>
\t\t\t            \t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 76, $this->source); })()), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t          \t</div>

\t\t\t          \t<div class=\"form-group\">
\t\t\t            \t<label>Code Postal</label>
\t\t\t            \t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 81, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t          \t</div>
\t\t\t          \t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 83, $this->source); })()), "inscription", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg btn-block")));
        echo "

\t\t\t          \t";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 85, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes")) {
            // line 86
            echo "\t\t\t          \t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_jeunes");
            echo "\" class=\"btn btn-warning btn-block\">Retour</a>
\t\t\t          \t";
        }
        // line 88
        echo "
\t\t\t          \t";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 89, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs")) {
            // line 90
            echo "\t\t\t          \t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_administrateurs");
            echo "\" class=\"btn btn-warning btn-block\">Retour</a>
\t\t\t          \t";
        }
        // line 92
        echo "\t        \t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 92, $this->source); })()), 'form_end');
        echo "
\t        \t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 92,  236 => 90,  234 => 89,  231 => 88,  225 => 86,  223 => 85,  218 => 83,  213 => 81,  205 => 76,  197 => 71,  189 => 66,  181 => 61,  173 => 56,  165 => 51,  157 => 46,  151 => 43,  148 => 42,  144 => 40,  142 => 39,  139 => 38,  137 => 37,  134 => 36,  125 => 35,  115 => 13,  111 => 11,  109 => 10,  106 => 9,  103 => 8,  94 => 7,  73 => 99,  66 => 94,  64 => 35,  41 => 14,  39 => 7,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"fr\">
\t<head>
    \t<meta charset=\"utf-8\">
    \t<title>
    \t\t{% block title %}
    \t\t{% if app.request.get('_route') == 'administrateur_inscription' %}
    \t\t\tInscription Administrateur
\t\t\t{% elseif app.request.get('_route') == 'jeune_inscription' %}
    \t\t\tInscription Jeune
\t\t\t{% endif %}
\t\t\t{% endblock %}
    \t</title>

    \t<!-- CSS -->
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    \t<link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
    \t<link rel=\"stylesheet\" href=\"moncss.css\"> <!-- mon CSS -->
    \t<link rel=\"shortcut icon\" href=\"images/favicon.ico\" /> <!-- Icone du site -->
    \t<style type=\"text/css\">
    \t\tinput { 
    \t\t\ttext-align: center; 
\t\t\t}
    \t</style>
  \t</head>

  \t<body>
    \t<div class=\"container\">
      \t\t<div class=\"header clearfix\">
        \t\t<h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
      \t\t</div>

      \t\t<div class=\"jumbotron\">
      \t\t\t{% block body %}
        \t\t<h1>
        \t\t\t{% if app.request.get('_route') == 'administrateur_inscription' %}
    \t\t\t\t\tInscription Administrateur
\t\t\t\t\t{% elseif app.request.get('_route') == 'jeune_inscription' %}
    \t\t\t\t\tInscription Jeune
\t\t\t\t\t{% endif %}
        \t\t</h1><br/>
\t        \t\t{{ form_start(registrationForm) }}
\t          \t\t\t<div class=\"form-group\">
\t          \t\t\t\t<label>Nom</label>
\t          \t\t\t\t{{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control'}} ) }}
\t            \t\t</div>

\t          \t\t\t<div class=\"form-group\">
\t            \t\t\t<label>Prénom</label>
\t            \t\t\t{{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control'}}  ) }}
\t          \t\t\t</div>

\t          \t\t\t<div class=\"form-group\">
\t            \t\t\t<label>Mot de passe</label>
\t            \t\t\t{{ form_widget(registrationForm.motdepasse, {'attr': {'class': 'form-control'}}, {'attr': {'placeholder': 'Mot de passe'}} ) }}
\t          \t\t\t</div>

\t          \t\t\t<div class=\"form-group\">
\t            \t\t\t<label>Téléphone</label>
\t            \t\t\t{{ form_widget(registrationForm.telephone, {'attr': {'class': 'form-control'}}  ) }}
\t          \t\t\t</div>

\t\t\t          \t<div class=\"form-group\">
\t\t\t            \t<label>Email</label>
\t\t\t            \t{{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}  ) }}
\t\t\t          \t</div>

\t\t\t          \t<div class=\"form-group\">
\t\t\t            \t<label>Adresse</label>
\t\t\t            \t{{ form_widget(registrationForm.adresse, {'attr': {'class': 'form-control'}}  ) }}
\t\t\t          \t</div>

\t\t\t          \t<div class=\"form-group\">
\t\t\t            \t<label>Ville</label>
\t\t\t            \t{{ form_widget(registrationForm.ville, {'attr': {'class': 'form-control'}}  ) }}
\t\t\t          \t</div>

\t\t\t          \t<div class=\"form-group\">
\t\t\t            \t<label>Code Postal</label>
\t\t\t            \t{{ form_widget(registrationForm.codepostal, {'attr': {'class': 'form-control'}}  ) }}
\t\t\t          \t</div>
\t\t\t          \t{{ form_widget(registrationForm.inscription, {'attr': {'class': 'btn btn-primary btn-lg btn-block'}} ) }}

\t\t\t          \t{% if app.request.get('_route') == 'inscription_des_jeunes' %}
\t\t\t          \t\t<a href=\"{{ path('gestion_des_jeunes') }}\" class=\"btn btn-warning btn-block\">Retour</a>
\t\t\t          \t{% endif %}

\t\t\t          \t{% if app.request.get('_route') == 'inscription_des_administrateurs' %}
\t\t\t          \t\t<a href=\"{{ path('gestion_des_administrateurs') }}\" class=\"btn btn-warning btn-block\">Retour</a>
\t\t\t          \t{% endif %}
\t        \t\t{{ form_end(registrationForm) }}
\t        \t{% endblock %}
      \t\t</div>

      \t\t<hr>

      \t\t<footer>
        \t\t<p>&copy; Cheik-Siramakan Keita 2018-{{ \"now\"|date('Y') }}</p>
      \t\t</footer>
    \t</div>

    \t<!-- Scripts -->
    \t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    \t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    \t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    \t<script rel=\"text/javaScript\" src=\"\"></script> <!-- mon script -->
  \t</body>
</html>", "registration/register.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\registration\\register.html.twig");
    }
}
