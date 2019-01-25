<?php

/* partenaire/register.html.twig */
class __TwigTemplate_9aa766e67b3d2c8dbdde8a1fffd30e24c65157bf29f64e4af1d9c70a651147ee extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("registration/register.html.twig", "partenaire/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "registration/register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partenaire/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partenaire/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription Partenaire";
        
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
        echo "\t<h1>Inscription Parteniare</h1><br/>
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
\t    <div class=\"form-group\">
\t        <label>SIRET</label>
\t    \t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 9, $this->source); })()), "siret", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t    </div>

\t    <div class=\"form-group\">
\t    \t<label>Nom</label>
\t        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 14, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t    </div>

\t    <div class=\"form-group\">
\t        <label>Mot de passe</label>
\t        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 19, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t    </div>

\t    <div class=\"form-group\">
\t        <label>Téléphone</label>
\t        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 24, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t    </div>

\t\t<div class=\"form-group\">
\t\t\t<label>Email</label>
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 29, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label>Adresse</label>
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 34, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label>Ville</label>
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 39, $this->source); })()), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label>Code Postal</label>
\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 44, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 46, $this->source); })()), "inscription", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  142 => 46,  137 => 44,  129 => 39,  121 => 34,  113 => 29,  105 => 24,  97 => 19,  89 => 14,  81 => 9,  75 => 6,  72 => 5,  63 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'registration/register.html.twig' %}

{% block title %}Inscription Partenaire{% endblock %}
{% block body %}
\t<h1>Inscription Parteniare</h1><br/>
\t{{ form_start(registrationForm) }}
\t    <div class=\"form-group\">
\t        <label>SIRET</label>
\t    \t{{ form_widget(registrationForm.siret, {'attr': {'class': 'form-control'}} ) }}
\t    </div>

\t    <div class=\"form-group\">
\t    \t<label>Nom</label>
\t        {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control'}}  ) }}
\t    </div>

\t    <div class=\"form-group\">
\t        <label>Mot de passe</label>
\t        {{ form_widget(registrationForm.motdepasse, {'attr': {'class': 'form-control'}}, {'attr': {'placeholder': 'Mot de passe'}} ) }}
\t    </div>

\t    <div class=\"form-group\">
\t        <label>Téléphone</label>
\t        {{ form_widget(registrationForm.telephone, {'attr': {'class': 'form-control'}}  ) }}
\t    </div>

\t\t<div class=\"form-group\">
\t\t\t<label>Email</label>
\t\t\t{{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}  ) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label>Adresse</label>
\t\t\t{{ form_widget(registrationForm.adresse, {'attr': {'class': 'form-control'}}  ) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label>Ville</label>
\t\t\t{{ form_widget(registrationForm.ville, {'attr': {'class': 'form-control'}}  ) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label>Code Postal</label>
\t\t\t{{ form_widget(registrationForm.codepostal, {'attr': {'class': 'form-control'}}  ) }}
\t\t</div>
\t\t{{ form_widget(registrationForm.inscription, {'attr': {'class': 'btn btn-primary'}} ) }}
\t{{ form_end(registrationForm) }}
{% endblock %}", "partenaire/register.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\partenaire\\register.html.twig");
    }
}
