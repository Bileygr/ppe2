<?php

/* registration/register.html.twig */
class __TwigTemplate_8545e6953f5a1de33268cb734d9c35fa07227f09155302eb158eed7329434aea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/accueil.html.twig", "registration/register.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        // line 3
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_inscription")) {
            // line 4
            echo "    \tInscription des administrateurs
\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_inscription")) {
            // line 6
            echo "    \tInscription des jeunes
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "partenaire_inscription")) {
            // line 8
            echo "    \tInscription des partenaires
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "heading"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "heading"));

        // line 12
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_inscription")) {
            // line 13
            echo "    \tInscription des administrateurs
\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_inscription")) {
            // line 15
            echo "    \tInscription des jeunes
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "partenaire_inscription")) {
            // line 17
            echo "    \tInscription des partenaires
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_inscription") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeune_inscription"))) {
            // line 22
            echo "\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 22, $this->source); })()), 'form_start');
            echo "
\t\t    <div class=\"form-group\">
\t\t        <label>Nom</label>
\t\t        ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 25, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t        <label>Prénom</label>
\t\t        ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 30, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t        <label>Mot de passe</label>
\t\t        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 35, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
            echo "
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t       \t<label>Téléphone</label>
\t\t        ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 40, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("placeholder" => "Téléphone", "class" => "form-control")));
            echo "
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t        <label>Email</label>
\t\t\t\t";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 45, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
            echo "
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t        <label>Adresse</label>
\t\t\t\t";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 50, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("placeholder" => "Adresse", "class" => "form-control")));
            echo "
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t        <label>Ville</label>
\t\t\t\t";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 55, $this->source); })()), "ville", array()), 'widget', array("attr" => array("placeholder" => "Ville", "class" => "form-control")));
            echo "
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t        <label>Code postal</label>
\t\t\t\t";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 60, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("placeholder" => "Code postal", "class" => "form-control")));
            echo "
\t\t\t</div>

\t\t\t";
            // line 63
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 63, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "administrateur_inscription") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR"))) {
                // line 64
                echo "\t\t\t\t<div class=\"form-check\">
\t\t\t\t  <input class=\"form-check-input\" type=\"checkbox\" value=\"ROLE_SUPER_ADMINISTRATEUR\" name=\"super_admin\" id=\"super_admin\">
\t\t\t\t  <label class=\"form-check-label\" for=\"super_admin\">
\t\t\t\t    Super Administrateur
\t\t\t\t  </label>
\t\t\t\t</div>
\t\t\t";
            }
            // line 71
            echo "
\t\t\t";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 72, $this->source); })()), "inscription", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
\t\t";
            // line 73
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 73, $this->source); })()), 'form_end');
            echo "
\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "partenaire_inscription")) {
            // line 75
            echo "\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 75, $this->source); })()), 'form_start');
            echo "
\t\t\t <div class=\"form-group\">
                <label>SIRET</label>
                ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 78, $this->source); })()), "siret", array()), 'widget', array("attr" => array("placeholder" => "SIRET", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Nom</label>
                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 83, $this->source); })()), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom", "class" => "form-control")));
            echo "
            </div>                  

            <div class=\"form-group\">
                <label>Mot de passe</label>
                ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 88, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Téléphone</label>
                ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 93, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("placeholder" => "Telephone", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Email</label>
                ";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 98, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Adresseadresse</label>
                ";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 103, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("placeholder" => "Adresse", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Ville</label>
                ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 108, $this->source); })()), "ville", array()), 'widget', array("attr" => array("placeholder" => "Ville", "class" => "form-control")));
            echo "
            </div>

            <div class=\"form-group\">
                <label>Code postal</label>
                ";
            // line 113
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 113, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("placeholder" => "Code Postal", "class" => "form-control")));
            echo "
            </div>

            ";
            // line 116
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 116, $this->source); })()), "inscription", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
\t\t";
            // line 117
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 117, $this->source); })()), 'form_end');
            echo "
\t";
        }
        
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
        return array (  292 => 117,  288 => 116,  282 => 113,  274 => 108,  266 => 103,  258 => 98,  250 => 93,  242 => 88,  234 => 83,  226 => 78,  219 => 75,  217 => 74,  213 => 73,  209 => 72,  206 => 71,  197 => 64,  195 => 63,  189 => 60,  181 => 55,  173 => 50,  165 => 45,  157 => 40,  149 => 35,  141 => 30,  133 => 25,  126 => 22,  123 => 21,  114 => 20,  102 => 17,  100 => 16,  97 => 15,  95 => 14,  92 => 13,  89 => 12,  80 => 11,  68 => 8,  66 => 7,  63 => 6,  61 => 5,  58 => 4,  55 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/accueil.html.twig' %}
{% block title %}
    {% if app.request.get('_route') == 'administrateur_inscription' %}
    \tInscription des administrateurs
\t{% elseif app.request.get('_route') == 'jeune_inscription' %}
    \tInscription des jeunes
    {% elseif app.request.get('_route') == 'partenaire_inscription' %}
    \tInscription des partenaires
\t{% endif %}
{% endblock %}
{% block heading %}
\t{% if app.request.get('_route') == 'administrateur_inscription' %}
    \tInscription des administrateurs
\t{% elseif app.request.get('_route') == 'jeune_inscription' %}
    \tInscription des jeunes
    {% elseif app.request.get('_route') == 'partenaire_inscription'%}
    \tInscription des partenaires
\t{% endif %}
{% endblock %}
{% block body %}
    {% if (app.request.get('_route') == 'administrateur_inscription') or (app.request.get('_route') == 'jeune_inscription') %}
\t\t{{ form_start(registrationForm) }}
\t\t    <div class=\"form-group\">
\t\t        <label>Nom</label>
\t\t        {{ form_widget(registrationForm.nom, {'attr' : {'class' : 'form-control'}}) }}
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t        <label>Prénom</label>
\t\t        {{ form_widget(registrationForm.prenom, {'attr' : {'class' : 'form-control' }}) }}
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t        <label>Mot de passe</label>
\t\t        {{ form_widget(registrationForm.motdepasse, {'attr': {'placeholder': 'Mot de passe', 'class': 'form-control'}}) }}
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t       \t<label>Téléphone</label>
\t\t        {{ form_widget(registrationForm.telephone, {'attr': {'placeholder': 'Téléphone', 'class': 'form-control'}}) }}
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t        <label>Email</label>
\t\t\t\t{{ form_widget(registrationForm.email, {'attr': {'placeholder': 'Email', 'class': 'form-control' }}) }}
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t        <label>Adresse</label>
\t\t\t\t{{ form_widget(registrationForm.adresse, {'attr': {'placeholder': 'Adresse', 'class': 'form-control' }}) }}
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t        <label>Ville</label>
\t\t\t\t{{ form_widget(registrationForm.ville, {'attr': {'placeholder': 'Ville', 'class': 'form-control' }}) }}
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t        <label>Code postal</label>
\t\t\t\t{{ form_widget(registrationForm.codepostal, {'attr': {'placeholder': 'Code postal', 'class': 'form-control' }}) }}
\t\t\t</div>

\t\t\t{% if (app.request.get('_route') == 'administrateur_inscription') and (is_granted('ROLE_SUPER_ADMINISTRATEUR')) %}
\t\t\t\t<div class=\"form-check\">
\t\t\t\t  <input class=\"form-check-input\" type=\"checkbox\" value=\"ROLE_SUPER_ADMINISTRATEUR\" name=\"super_admin\" id=\"super_admin\">
\t\t\t\t  <label class=\"form-check-label\" for=\"super_admin\">
\t\t\t\t    Super Administrateur
\t\t\t\t  </label>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{{ form_widget(registrationForm.inscription, {'attr': {'class': 'btn btn-primary' }}) }}
\t\t{{ form_end(registrationForm) }}
\t{% elseif app.request.get('_route') == 'partenaire_inscription'%}
\t\t{{ form_start(registrationForm) }}
\t\t\t <div class=\"form-group\">
                <label>SIRET</label>
                {{ form_widget(registrationForm.siret, {'attr': {'placeholder': 'SIRET', 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Nom</label>
                {{ form_widget(registrationForm.nom, {'attr': {'placeholder': 'Nom', 'class' : 'form-control'}}) }}
            </div>                  

            <div class=\"form-group\">
                <label>Mot de passe</label>
                {{ form_widget(registrationForm.motdepasse, {'attr': {'placeholder': 'Mot de passe', 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Téléphone</label>
                {{ form_widget(registrationForm.telephone, {'attr': {'placeholder': 'Telephone', 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Email</label>
                {{ form_widget(registrationForm.email, {'attr': {'placeholder': 'Email', 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Adresseadresse</label>
                {{ form_widget(registrationForm.adresse, {'attr': {'placeholder': 'Adresse', 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Ville</label>
                {{ form_widget(registrationForm.ville, {'attr': {'placeholder': 'Ville', 'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label>Code postal</label>
                {{ form_widget(registrationForm.codepostal, {'attr': {'placeholder': 'Code Postal', 'class' : 'form-control'}}) }}
            </div>

            {{ form_widget(registrationForm.inscription, {'attr': {'class': 'btn btn-primary'}}) }}
\t\t{{ form_end(registrationForm) }}
\t{% endif %}
{% endblock %}", "registration/register.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\registration\\register.html.twig");
    }
}
