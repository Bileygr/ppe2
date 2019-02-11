<?php

/* administrateur/modification_des_informations.html.twig */
class __TwigTemplate_18e78f791dc21688f9a90a3140b4d47e532bac8ef387e9ed6f338af4d32ce8e8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrateur/modification_des_informations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrateur/modification_des_informations.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
    \t<meta charset=\"utf-8\">
    \t<title>Modifier vos informations</title>

    \t<!-- CSS -->
    \t<style type=\"text/css\">
    \t\tinput { 
    \t\t\ttext-align: center; 
\t\t\t}
    \t</style>
  \t</head>

  \t<body>
        <h1>Vos informations</h1>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
      \t<footer>
        \t<p>&copy; Cheik-Siramakan Keita 2018-";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
      \t</footer>

    \t<!-- Scripts -->
  \t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "          ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
    \t\t  \t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 19, $this->source); })()), "nom", array()), 'widget');
        echo "
    \t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 20, $this->source); })()), "prenom", array()), 'widget');
        echo "
    \t\t      ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 21, $this->source); })()), "telephone", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 22, $this->source); })()), "email", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 23, $this->source); })()), "adresse", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 24, $this->source); })()), "ville", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 25, $this->source); })()), "codepostal", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 26, $this->source); })()), "modification", array()), 'widget');
        echo "
    \t\t\t   <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Retour</a>
  \t\t    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new Twig_Error_Runtime('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "administrateur/modification_des_informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  79 => 18,  70 => 17,  54 => 32,  50 => 30,  48 => 17,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
    \t<meta charset=\"utf-8\">
    \t<title>Modifier vos informations</title>

    \t<!-- CSS -->
    \t<style type=\"text/css\">
    \t\tinput { 
    \t\t\ttext-align: center; 
\t\t\t}
    \t</style>
  \t</head>

  \t<body>
        <h1>Vos informations</h1>
        {% block body %}
          {{ form_start(registrationForm) }}
    \t\t  \t{{ form_widget(registrationForm.nom) }}
    \t\t    {{ form_widget(registrationForm.prenom) }}
    \t\t      {{ form_widget(registrationForm.telephone) }}
    \t\t\t   {{ form_widget(registrationForm.email) }}
    \t\t\t   {{ form_widget(registrationForm.adresse) }}
    \t\t\t   {{ form_widget(registrationForm.ville) }}
    \t\t\t   {{ form_widget(registrationForm.codepostal) }}
    \t\t\t   {{ form_widget(registrationForm.modification) }}
    \t\t\t   <a href=\"{{ path('accueil') }}\">Retour</a>
  \t\t    {{ form_end(registrationForm) }}
        {% endblock %}

      \t<footer>
        \t<p>&copy; Cheik-Siramakan Keita 2018-{{ \"now\"|date('Y') }}</p>
      \t</footer>

    \t<!-- Scripts -->
  \t</body>
</html>", "administrateur/modification_des_informations.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\modification_des_informations.html.twig");
    }
}
