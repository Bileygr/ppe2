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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "    \t</title>

    \t<!-- CSS -->
    \t<style type=\"text/css\">
    \t\tinput { 
    \t\t\ttext-align: center; 
\t\t\t}
    \t</style>
  \t</head>

  \t<body>
    \t";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
      \t<footer>
        \t<p>&copy; Cheik-Siramakan Keita 2018-";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
      \t</footer>

    \t<!-- Scripts -->
  \t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    \t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs")) {
            // line 8
            echo "    \t\t\t\tInscription des administrateurs
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes")) {
            // line 10
            echo "    \t\t\t\tInscription des jeunes
    \t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_partenaires")) {
            // line 12
            echo "    \t\t\t\tInscription des partenaires
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "        \t<h1>
        \t\t";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs")) {
            // line 29
            echo "    \t\t\t\tInscription des administrateurs
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes")) {
            // line 31
            echo "    \t\t\t\tInscription des jeunes
    \t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_partenaires")) {
            // line 33
            echo "    \t\t\t\tInscription des partenaires
\t\t\t\t";
        }
        // line 35
        echo "        \t</h1>
        \t";
        // line 36
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes"))) {
            // line 37
            echo "\t\t        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 37, $this->source); })()), 'form_start');
            echo "
\t\t          \t";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 38, $this->source); })()), "nom", array()), 'widget');
            echo "
\t\t            ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 39, $this->source); })()), "prenom", array()), 'widget');
            echo "
\t\t            ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 40, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe")));
            echo "
\t\t            ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 41, $this->source); })()), "telephone", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 43, $this->source); })()), "adresse", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 44, $this->source); })()), "ville", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 45, $this->source); })()), "codepostal", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 46, $this->source); })()), "inscription", array()), 'widget');
            echo "

\t\t\t\t    ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes")) {
                // line 49
                echo "\t\t\t\t         <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_jeunes");
                echo "\">Retour</a>
\t\t\t\t    ";
            }
            // line 51
            echo "
\t\t\t\t\t";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs")) {
                // line 53
                echo "\t\t\t\t        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_administrateurs");
                echo "\">Retour</a>
\t\t\t\t    ";
            }
            // line 55
            echo "\t\t       \t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 55, $this->source); })()), 'form_end');
            echo "
\t\t    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_partenaires")) {
            // line 57
            echo "\t\t    \t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 57, $this->source); })()), 'form_start');
            echo "
\t\t    \t\t";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 58, $this->source); })()), "siret", array()), 'widget');
            echo "
\t\t        \t";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 59, $this->source); })()), "nom", array()), 'widget');
            echo "
\t\t        \t";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 60, $this->source); })()), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe")));
            echo "
\t\t        \t";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 61, $this->source); })()), "telephone", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 62, $this->source); })()), "email", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 63, $this->source); })()), "adresse", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 64, $this->source); })()), "ville", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 65, $this->source); })()), "codepostal", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 66, $this->source); })()), "inscription", array()), 'widget');
            echo "
\t\t\t\t\t<a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_partenaires");
            echo "\">Retour</a>
\t\t\t\t";
            // line 68
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 68, $this->source); })()), 'form_end');
            echo "
\t\t    ";
        }
        // line 70
        echo "\t    ";
        
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
        return array (  262 => 70,  257 => 68,  253 => 67,  249 => 66,  245 => 65,  241 => 64,  237 => 63,  233 => 62,  229 => 61,  225 => 60,  221 => 59,  217 => 58,  212 => 57,  210 => 56,  205 => 55,  199 => 53,  197 => 52,  194 => 51,  188 => 49,  186 => 48,  181 => 46,  177 => 45,  173 => 44,  169 => 43,  165 => 42,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  144 => 37,  142 => 36,  139 => 35,  135 => 33,  133 => 32,  130 => 31,  128 => 30,  125 => 29,  123 => 28,  120 => 27,  111 => 26,  101 => 14,  97 => 12,  95 => 11,  92 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  59 => 73,  55 => 71,  53 => 26,  40 => 15,  38 => 6,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
    \t<meta charset=\"utf-8\">
    \t<title>
    \t\t{% block title %}
    \t\t\t{% if app.request.get('_route') == 'inscription_des_administrateurs' %}
    \t\t\t\tInscription des administrateurs
\t\t\t\t{% elseif app.request.get('_route') == 'inscription_des_jeunes' %}
    \t\t\t\tInscription des jeunes
    \t\t\t{% elseif app.request.get('_route') == 'inscription_des_partenaires' %}
    \t\t\t\tInscription des partenaires
\t\t\t\t{% endif %}
\t\t\t{% endblock %}
    \t</title>

    \t<!-- CSS -->
    \t<style type=\"text/css\">
    \t\tinput { 
    \t\t\ttext-align: center; 
\t\t\t}
    \t</style>
  \t</head>

  \t<body>
    \t{% block body %}
        \t<h1>
        \t\t{% if app.request.get('_route') == 'inscription_des_administrateurs' %}
    \t\t\t\tInscription des administrateurs
\t\t\t\t{% elseif app.request.get('_route') == 'inscription_des_jeunes' %}
    \t\t\t\tInscription des jeunes
    \t\t\t{% elseif app.request.get('_route') == 'inscription_des_partenaires'%}
    \t\t\t\tInscription des partenaires
\t\t\t\t{% endif %}
        \t</h1>
        \t{% if (app.request.get('_route') == 'inscription_des_administrateurs') or (app.request.get('_route') == 'inscription_des_jeunes') %}
\t\t        {{ form_start(registrationForm) }}
\t\t          \t{{ form_widget(registrationForm.nom) }}
\t\t            {{ form_widget(registrationForm.prenom ) }}
\t\t            {{ form_widget(registrationForm.motdepasse, {'attr': {'placeholder': 'Mot de passe'}} ) }}
\t\t            {{ form_widget(registrationForm.telephone ) }}
\t\t\t\t    {{ form_widget(registrationForm.email ) }}
\t\t\t\t    {{ form_widget(registrationForm.adresse ) }}
\t\t\t\t    {{ form_widget(registrationForm.ville ) }}
\t\t\t\t    {{ form_widget(registrationForm.codepostal ) }}
\t\t\t\t    {{ form_widget(registrationForm.inscription) }}

\t\t\t\t    {% if app.request.get('_route') == 'inscription_des_jeunes' %}
\t\t\t\t         <a href=\"{{ path('gestion_des_jeunes') }}\">Retour</a>
\t\t\t\t    {% endif %}

\t\t\t\t\t{% if app.request.get('_route') == 'inscription_des_administrateurs' %}
\t\t\t\t        <a href=\"{{ path('gestion_des_administrateurs') }}\">Retour</a>
\t\t\t\t    {% endif %}
\t\t       \t{{ form_end(registrationForm) }}
\t\t    {% elseif app.request.get('_route') == 'inscription_des_partenaires'%}
\t\t    \t{{ form_start(registrationForm) }}
\t\t    \t\t{{ form_widget(registrationForm.siret) }}
\t\t        \t{{ form_widget(registrationForm.nom) }}
\t\t        \t{{ form_widget(registrationForm.motdepasse, {'attr': {'placeholder': 'Mot de passe'}} ) }}
\t\t        \t{{ form_widget(registrationForm.telephone) }}
\t\t\t\t\t{{ form_widget(registrationForm.email) }}
\t\t\t\t\t{{ form_widget(registrationForm.adresse) }}
\t\t\t\t\t{{ form_widget(registrationForm.ville) }}
\t\t\t\t\t{{ form_widget(registrationForm.codepostal) }}
\t\t\t\t\t{{ form_widget(registrationForm.inscription) }}
\t\t\t\t\t<a href=\"{{ path('gestion_des_partenaires') }}\">Retour</a>
\t\t\t\t{{ form_end(registrationForm) }}
\t\t    {% endif %}
\t    {% endblock %}

      \t<footer>
        \t<p>&copy; Cheik-Siramakan Keita 2018-{{ \"now\"|date('Y') }}</p>
      \t</footer>

    \t<!-- Scripts -->
  \t</body>
</html>", "registration/register.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\registration\\register.html.twig");
    }
}
