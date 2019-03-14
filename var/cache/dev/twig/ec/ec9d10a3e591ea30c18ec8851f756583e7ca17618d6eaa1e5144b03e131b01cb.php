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

        // line 4
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_modification") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_modification"))) {
            // line 5
            echo "        Vos informations
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_modification_d_un_administrateur")) {
            // line 7
            echo "        Modifier les informations de cet utilisateur
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_modification") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_modification")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_modification_d_un_administrateur")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_modification_d_un_jeune"))) {
            // line 12
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 12, $this->source); })()), 'form_start');
            echo "
    \t\t<div class=\"form-group\">
                <label>Nom</label>
                ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 15, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Prénom</label>
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 20, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            </div>

            ";
            // line 23
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JEUNE") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR") == false)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR") == false))) {
                // line 24
                echo "                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    ";
                // line 26
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 26, $this->source); })()), "motdepasse", array()), 'widget', array("disabled" => "disabled", "attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
                echo "
                </div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_modification")) {
                // line 29
                echo "                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    ";
                // line 31
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 31, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
                echo "
                </div>
            ";
            } elseif ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR") == true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_modification_d_un_administrateur"))) {
                // line 34
                echo "                <div class=\"form-group\">
                    ";
                // line 35
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 35, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("value" => twig_get_attribute($this->env, $this->source, (isset($context["administrateur"]) || array_key_exists("administrateur", $context) ? $context["administrateur"] : (function () { throw new Twig_Error_Runtime('Variable "administrateur" does not exist.', 35, $this->source); })()), "password", array()), "placeholder" => "Mot de passe", "hidden" => "hidden", "class" => "form-control")));
                echo "
                </div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_modification_d_un_jeune")) {
                // line 38
                echo "                <div class=\"form-group\">
                    ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 39, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("value" => twig_get_attribute($this->env, $this->source, (isset($context["jeune"]) || array_key_exists("jeune", $context) ? $context["jeune"] : (function () { throw new Twig_Error_Runtime('Variable "jeune" does not exist.', 39, $this->source); })()), "password", array()), "placeholder" => "Mot de passe", "hidden" => "hidden", "class" => "form-control")));
                echo "
                </div>
            ";
            }
            // line 42
            echo "
            <div class=\"form-group\">
                <label>Téléphone</label>
                ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 45, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("placeholder" => "Téléphone", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Email</label>
                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 50, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Adresse</label>
                ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 55, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("placeholder" => "Adresse", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Ville</label>
                ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 60, $this->source); })()), "ville", array()), 'widget', array("attr" => array("placeholder" => "Ville", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Code postal</label>
                ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 65, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("placeholder" => "Code postal", "class" => "form-control")));
            echo "
            </div>

            ";
            // line 68
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR")) {
                // line 69
                echo "                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"ROLE_SUPER_ADMINISTRATEUR\" name=\"super_admin\" id=\"super_admin\"
                    ";
                // line 71
                if ((twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["administrateur"]) || array_key_exists("administrateur", $context) ? $context["administrateur"] : (function () { throw new Twig_Error_Runtime('Variable "administrateur" does not exist.', 71, $this->source); })()), "roles", array()), ", ") == "ROLE_SUPER_ADMINISTRATEUR")) {
                    // line 72
                    echo "                        checked
                    ";
                }
                // line 74
                echo "                  >
                  <label class=\"form-check-label\" for=\"super_admin\">
                    Super Administrateur
                  </label>
                </div>
            ";
            }
            // line 80
            echo "
    \t\t";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 81, $this->source); })()), "inscription", array()), 'widget', array("label" => "Modifier", "attr" => array("class" => "btn btn-primary", "placeholder" => "Modifier")));
            echo "
  \t\t";
            // line 82
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 82, $this->source); })()), 'form_end');
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 83, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "partenaire_modification")) {
            // line 84
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), 'form_start');
            echo "
            <div class=\"form-group\">
                <label>SIRET</label>
                ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "siret", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 87, $this->source); })()), "siret", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Nom</label>
                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->source); })()), "nom", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 92, $this->source); })()), "nom", array()), "class" => "form-control")));
            echo "
            </div>                  

            ";
            // line 95
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR") == false)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR") == false))) {
                // line 96
                echo "                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    ";
                // line 98
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "motdepasse", array()), 'widget', array("disabled" => "disabled", "attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
                echo "
                </div>
            ";
            } else {
                // line 101
                echo "                <div class=\"form-group\">
                    ";
                // line 102
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("value" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 102, $this->source); })()), "password", array()), "placeholder" => "Mot de passe", "hidden" => "hidden", "class" => "form-control")));
                echo "
                </div>
            ";
            }
            // line 105
            echo "
            <div class=\"form-group\">
                <label>Téléphone</label>
                ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 108, $this->source); })()), "telephone", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Email</label>
                ";
            // line 113
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 113, $this->source); })()), "email", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Adresseadresse</label>
                ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 118, $this->source); })()), "adresse", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Ville</label>
                ";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), "ville", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 123, $this->source); })()), "ville", array()), "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Code postal</label>
                ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 128, $this->source); })()), "codepostal", array()), "class" => "form-control")));
            echo "
            </div>

            ";
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->source); })()), "inscription", array()), 'widget', array("label" => "Modifier", "attr" => array("class" => "btn btn-primary")));
            echo "
        ";
            // line 132
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
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
        return array (  334 => 132,  330 => 131,  324 => 128,  316 => 123,  308 => 118,  300 => 113,  292 => 108,  287 => 105,  281 => 102,  278 => 101,  272 => 98,  268 => 96,  266 => 95,  260 => 92,  252 => 87,  245 => 84,  243 => 83,  239 => 82,  235 => 81,  232 => 80,  224 => 74,  220 => 72,  218 => 71,  214 => 69,  212 => 68,  206 => 65,  198 => 60,  190 => 55,  182 => 50,  174 => 45,  169 => 42,  163 => 39,  160 => 38,  158 => 37,  153 => 35,  150 => 34,  148 => 33,  143 => 31,  139 => 29,  137 => 28,  132 => 26,  128 => 24,  126 => 23,  120 => 20,  112 => 15,  105 => 12,  102 => 11,  93 => 10,  81 => 7,  79 => 6,  76 => 5,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/accueil.html.twig' %}
{% block title %}Modifier vos informations{% endblock %}
{% block heading %}
    {% if app.request.get('_route') == 'administrateur_modification' or app.request.get('_route') == 'jeune_modification'%}
        Vos informations
    {% elseif app.request.get('_route') == 'administrateur_modification_d_un_administrateur' %}
        Modifier les informations de cet utilisateur
    {% endif %}
{% endblock %}
{% block body %}
    {% if app.request.get('_route') == 'administrateur_modification' or app.request.get('_route') == 'jeune_modification' or app.request.get('_route') == 'administrateur_modification_d_un_administrateur' or app.request.get('_route') == 'jeune_modification_d_un_jeune' %}
        {{ form_start(registrationForm) }}
    \t\t<div class=\"form-group\">
                <label>Nom</label>
                {{ form_widget(registrationForm.nom, {'attr' : {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Prénom</label>
                {{ form_widget(registrationForm.prenom, {'attr' : {'class' : 'form-control' }}) }}
            </div>

            {% if is_granted('ROLE_JEUNE') and is_granted(\"ROLE_ADMINISTRATEUR\") == false and is_granted(\"ROLE_SUPER_ADMINISTRATEUR\") == false %}
                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    {{ form_widget(registrationForm.motdepasse, {'disabled': 'disabled', 'attr': {'placeholder': 'Mot de passe', 'class' : 'form-control'}}) }}
                </div>
            {% elseif app.request.get('_route') == 'administrateur_modification'%}
                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    {{ form_widget(registrationForm.motdepasse, {'attr': {'placeholder': 'Mot de passe', 'class' : 'form-control'}}) }}
                </div>
            {% elseif is_granted(\"ROLE_SUPER_ADMINISTRATEUR\") == true and app.request.get('_route') == 'administrateur_modification_d_un_administrateur'%}
                <div class=\"form-group\">
                    {{ form_widget(registrationForm.motdepasse, {'attr': {'value': administrateur.password,'placeholder': 'Mot de passe', 'hidden': 'hidden', 'class' : 'form-control'}}) }}
                </div>
            {% elseif app.request.get('_route') == 'jeune_modification_d_un_jeune'%}
                <div class=\"form-group\">
                    {{ form_widget(registrationForm.motdepasse, {'attr': {'value': jeune.password, 'placeholder': 'Mot de passe', 'hidden': 'hidden', 'class' : 'form-control'}}) }}
                </div>
            {% endif %}

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

            {% if is_granted('ROLE_SUPER_ADMINISTRATEUR')%}
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"ROLE_SUPER_ADMINISTRATEUR\" name=\"super_admin\" id=\"super_admin\"
                    {% if administrateur.roles|join(', ') == 'ROLE_SUPER_ADMINISTRATEUR' %}
                        checked
                    {% endif %}
                  >
                  <label class=\"form-check-label\" for=\"super_admin\">
                    Super Administrateur
                  </label>
                </div>
            {% endif %}

    \t\t{{ form_widget(registrationForm.inscription, {'label': 'Modifier', 'attr': {'class': 'btn btn-primary', 'placeholder': 'Modifier'}}) }}
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

            {% if is_granted('ROLE_PARTENAIRE') and is_granted(\"ROLE_ADMINISTRATEUR\") == false and is_granted(\"ROLE_SUPER_ADMINISTRATEUR\") == false %}
                <div class=\"form-group\">
                    <label>Mot de passe</label>
                    {{ form_widget(form.motdepasse, {'disabled': 'disabled', 'attr': {'placeholder': 'Mot de passe', 'class' : 'form-control'}}) }}
                </div>
            {% else %}
                <div class=\"form-group\">
                    {{ form_widget(form.motdepasse, {'attr': {'value': partenaire.password, 'placeholder': 'Mot de passe', 'hidden': 'hidden', 'class' : 'form-control'}}) }}
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

            {{ form_widget(form.inscription, {'label': 'Modifier', 'attr': {'class': 'btn btn-primary'}}) }}
        {{ form_end(form) }}
    {% endif %}
{% endblock %}", "default/modification.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\default\\modification.html.twig");
    }
}
