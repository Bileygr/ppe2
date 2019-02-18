<?php

/* default/modification.html.twig */
class __TwigTemplate_69442dbb7aa7398a1e720d6df4b9d15094945258a9d3892cd542577382f79e5b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/accueil.html.twig", "default/modification.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/modification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/modification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier vos informations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_heading($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "heading"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "heading"));

        echo "Vos informations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_modification") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_modification"))) {
            // line 6
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 6, $this->source); })()), 'form_start');
            echo "
    \t\t<div class=\"form-group\">
                <label>Nom</label>
                ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 9, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Prénom</label>
                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 14, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Mot de passe</label>
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 19, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Téléphone</label>
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 24, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("placeholder" => "Téléphone", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Email</label>
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 29, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Adresse</label>
                ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 34, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("placeholder" => "Adresse", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Ville</label>
                ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 39, $this->source); })()), "ville", array()), 'widget', array("attr" => array("placeholder" => "Ville", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Code postal</label>
                ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 44, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("placeholder" => "Code postal", "class" => "form-control")));
            echo "
            </div>

    \t\t";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 47, $this->source); })()), "inscription", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "placeholder" => "Modifier")));
            echo "
  \t\t";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 48, $this->source); })()), 'form_end');
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "partenaire_modification")) {
            // line 50
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'form_start');
            echo "
            <div class=\"form-group\">
                <label>SIRET</label>
                ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "siret", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 53, $this->source); })()), "siret", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Nom</label>
                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "nom", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 58, $this->source); })()), "nom", array()), "class" => "form-control")));
            echo "
            </div>                  

            ";
            // line 61
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
                // line 62
                echo "                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
                echo "
                </div>
            ";
            }
            // line 67
            echo "
            <div class=\"form-group\">
                <label>Téléphone</label>
                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 70, $this->source); })()), "telephone", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Email</label>
                ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 75, $this->source); })()), "email", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Adresseadresse</label>
                ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 80, $this->source); })()), "adresse", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Ville</label>
                ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "ville", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 85, $this->source); })()), "ville", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Code postal</label>
                ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 90, $this->source); })()), "codepostal", array()), "class" => "form-control")));
            echo "
            </div>

            ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), "inscription", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "placeholder" => "Modifier")));
            echo "
        ";
            // line 94
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 94,  249 => 93,  243 => 90,  235 => 85,  227 => 80,  219 => 75,  211 => 70,  206 => 67,  200 => 64,  196 => 62,  194 => 61,  188 => 58,  180 => 53,  173 => 50,  171 => 49,  167 => 48,  163 => 47,  157 => 44,  149 => 39,  141 => 34,  133 => 29,  125 => 24,  117 => 19,  109 => 14,  101 => 9,  94 => 6,  91 => 5,  82 => 4,  64 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/accueil.html.twig' %}
{% block title %}Modifier vos informations{% endblock %}
{% block heading %}Vos informations{% endblock %}
{% block body %}
    {% if app.request.get('_route') == 'administrateur_modification' or app.request.get('_route') == 'jeune_modification' %}
        {{ form_start(registrationForm) }}
    \t\t<div class=\"form-group\">
                <label>Nom</label>
                {{ form_widget(registrationForm.nom, {'attr' : {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Prénom</label>
                {{ form_widget(registrationForm.prenom, {'attr' : {'class' : 'form-control' }}) }}
            </div>

            <div class=\"form-group\">
                <label>Mot de passe</label>
                {{ form_widget(registrationForm.motdepasse, {'attr': {'placeholder': 'Mot de passe', 'class': 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Téléphone</label>
                {{ form_widget(registrationForm.telephone, {'attr': {'placeholder': 'Téléphone', 'class': 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Email</label>
                {{ form_widget(registrationForm.email, {'attr': {'placeholder': 'Email', 'class': 'form-control' }}) }}
            </div>

            <div class=\"form-group\">
                <label>Adresse</label>
                {{ form_widget(registrationForm.adresse, {'attr': {'placeholder': 'Adresse', 'class': 'form-control' }}) }}
            </div>

            <div class=\"form-group\">
                <label>Ville</label>
                {{ form_widget(registrationForm.ville, {'attr': {'placeholder': 'Ville', 'class': 'form-control' }}) }}
            </div>

            <div class=\"form-group\">
                <label>Code postal</label>
                {{ form_widget(registrationForm.codepostal, {'attr': {'placeholder': 'Code postal', 'class': 'form-control' }}) }}
            </div>

    \t\t{{ form_widget(registrationForm.inscription, {'attr': {'class': 'btn btn-primary', 'placeholder': 'Modifier'}}) }}
  \t\t{{ form_end(registrationForm) }}
    {% elseif app.request.get('_route') == 'partenaire_modification' %}
        {{ form_start(form) }}
            <div class=\"form-group\">
                <label>SIRET</label>
                {{ form_widget(form.siret, {'attr': {'placeholder': partenaire.siret, 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Nom</label>
                {{ form_widget(form.nom, {'attr': {'placeholder': partenaire.nom, 'class' : 'form-control'}}) }}
            </div>                  

            {% if is_granted('ROLE_PARTENAIRE') %}
                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    {{ form_widget(form.motdepasse, {'attr': {'placeholder': 'Mot de passe', 'class' : 'form-control'}}) }}
                </div>
            {% endif %}

            <div class=\"form-group\">
                <label>Téléphone</label>
                {{ form_widget(form.telephone, {'attr': {'placeholder': partenaire.telephone, 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Email</label>
                {{ form_widget(form.email, {'attr': {'placeholder': partenaire.email, 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Adresseadresse</label>
                {{ form_widget(form.adresse, {'attr': {'placeholder': partenaire.adresse, 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Ville</label>
                {{ form_widget(form.ville, {'attr': {'placeholder': partenaire.ville, 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Code postal</label>
                {{ form_widget(form.codepostal, {'attr': {'placeholder': partenaire.codepostal, 'class' : 'form-control'}}) }}
            </div>

            {{ form_widget(form.inscription, {'attr': {'class': 'btn btn-primary', 'placeholder': 'Modifier'}}) }}
        {{ form_end(form) }}
    {% endif %}
{% endblock %}", "default/modification.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\default\\modification.html.twig");
    }
}
