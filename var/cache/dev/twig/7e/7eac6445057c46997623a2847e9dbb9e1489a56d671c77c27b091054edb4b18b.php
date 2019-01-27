<?php

/* offre/ajout.html.twig */
class __TwigTemplate_622db1508ba0b9a70dc2555f568506da389fb0eb2ed41608cf808f73c0592fcf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "offre/ajout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offre/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offre/ajout.html.twig"));

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

        echo "Ajout d'offre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"form-row\">
\t\t\t<div class=\"form-group col-md-6\">
\t\t    \t<label>Nom</label>
\t\t    \t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 10, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>

\t\t\t<div class=\"form-group col-md-6\">
\t\t    \t<label>Adresse</label>
\t\t    \t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 15, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>

\t\t    <div class=\"form-group col-md-6\">
\t\t        <label>Ville</label>
\t\t        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 20, $this->source); })()), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>

\t\t    <div class=\"form-group col-md-6\">
\t\t        <label>Code Postal</label>
\t\t        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 25, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<label for=\"form_debut_month\" class=\"sr-only\">Début</label>
\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 30, $this->source); })()), "debut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t\t\t<label for=\"offre_fin\" class=\"sr-only\">Fin</label>
\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 33, $this->source); })()), "fin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t\t<div class='form-group'>
\t\t    <label for='inputState'>Sélectionner une formation</label>
\t\t    <select class=\"form-control\" id=\"exampleSelect1\" name='formation' value=''>
\t\t        <option selected=\"select\" disabled>Sélectionnez la formation</option>
\t\t        <hr />
\t\t        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new Twig_Error_Runtime('Variable "formations" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 41
            echo "\t\t    \t\t<option id=\"formation\" name=\"formation\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nom", array()), "html", null, true);
            echo "</option>
\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t    </select>
\t\t</div>

\t\t<div class=\"form-group basic-textarea rounded-corners\">
\t\t    <label>Descriptif du poste :</label>
\t\t    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 48, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 51, $this->source); })()), "ajout", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg btn-block")));
        echo "
\t\t<br><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_gestion_offres");
        echo "\" class=\"btn btn-warning btn-block\">Retour</a>
\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "offre/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 53,  160 => 52,  156 => 51,  150 => 48,  143 => 43,  132 => 41,  128 => 40,  118 => 33,  112 => 30,  104 => 25,  96 => 20,  88 => 15,  80 => 10,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block title %}Ajout d'offre{% endblock %}

{% block body %}
\t{{ form_start(registrationForm) }}
\t\t<div class=\"form-row\">
\t\t\t<div class=\"form-group col-md-6\">
\t\t    \t<label>Nom</label>
\t\t    \t{{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control'}} ) }}
\t\t    </div>

\t\t\t<div class=\"form-group col-md-6\">
\t\t    \t<label>Adresse</label>
\t\t    \t{{ form_widget(registrationForm.adresse, {'attr': {'class': 'form-control'}} ) }}
\t\t    </div>

\t\t    <div class=\"form-group col-md-6\">
\t\t        <label>Ville</label>
\t\t        {{ form_widget(registrationForm.ville, {'attr': {'class': 'form-control'}} ) }}
\t\t    </div>

\t\t    <div class=\"form-group col-md-6\">
\t\t        <label>Code Postal</label>
\t\t        {{ form_widget(registrationForm.codepostal, {'attr': {'class': 'form-control'}} ) }}
\t\t    </div>
\t\t</div>

\t\t<label for=\"form_debut_month\" class=\"sr-only\">Début</label>
\t\t\t{{ form_widget(registrationForm.debut, {'attr': {'class': 'form-control'}} ) }}

\t\t\t<label for=\"offre_fin\" class=\"sr-only\">Fin</label>
\t\t\t{{ form_widget(registrationForm.fin, {'attr': {'class': 'form-control'}} ) }}

\t\t<div class='form-group'>
\t\t    <label for='inputState'>Sélectionner une formation</label>
\t\t    <select class=\"form-control\" id=\"exampleSelect1\" name='formation' value=''>
\t\t        <option selected=\"select\" disabled>Sélectionnez la formation</option>
\t\t        <hr />
\t\t        {% for formation in formations %}
\t\t    \t\t<option id=\"formation\" name=\"formation\" value=\"{{ formation.id }}\">{{ formation.nom }}</option>
\t\t    \t{% endfor %}
\t\t    </select>
\t\t</div>

\t\t<div class=\"form-group basic-textarea rounded-corners\">
\t\t    <label>Descriptif du poste :</label>
\t\t    {{ form_widget(registrationForm.description, {'attr': {'class': 'form-control'}}, {'attr': {'rows': '7'}} ) }}
\t\t</div>

\t\t{{ form_widget(registrationForm.ajout, {'attr': {'class': 'btn btn-primary btn-lg btn-block'}} ) }}
\t\t<br><a href=\"{{ path('partenaire_gestion_offres') }}\" class=\"btn btn-warning btn-block\">Retour</a>
\t{{ form_end(registrationForm) }}
{% endblock %}
", "offre/ajout.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\offre\\ajout.html.twig");
    }
}
