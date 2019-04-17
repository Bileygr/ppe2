<?php

/* default/accueil.html.twig */
class __TwigTemplate_a5c390a9404b7eef19253edd3a91fe789aa1607a1e85105d2d60240c792dadab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/accueil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

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

        echo "Lycée du Parc de Vilegénis";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "  <div class=\"container\">
    <div class=\"header clearfix\">
      <h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
    </div>

    <div class=\"jumbotron\">
      ";
        // line 13
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR"))) {
            // line 14
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
        <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_gestion_des_jeunes");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gestion: Jeune</a>
        <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_gestion_des_offres");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gestion: Offre</a>
        <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_gestion_des_partenaires");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gestion: Partenaire</a>
        <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_gestion_des_administrateurs");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gestion: Administrateur</a>
        <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistiques");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Statistiques</a>
        <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administrateur_modification");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
        <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
      ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
            // line 23
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
            echo "\"class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
        <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_gestion_des_offres");
            echo "\"class=\"btn btn-primary btn-lg btn-block\">Gérer les offres</a>
        <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_gestion_des_candidatures");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gérer les candidatures</a>
        <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_modification");
            echo "\"class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
        <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
      ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JEUNE")) {
            // line 29
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
        <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeune_gestion_de_ses_candidatures");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gérer ses candidatures</a>
        <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeune_modification");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
        <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
      ";
        } else {
            // line 34
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-info btn-lg btn-block\">Jeune</a>
        <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-warning btn-lg btn-block\">Partenaire</a>
        <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Administrateur</a>
      ";
        }
        // line 38
        echo "    </div>

    <hr>

    <footer>
      <p>Copyright &copy; Cheik-Siramakan Keita 2018-";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </footer>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 48,  215 => 47,  201 => 43,  194 => 38,  189 => 36,  185 => 35,  180 => 34,  175 => 32,  171 => 31,  167 => 30,  162 => 29,  157 => 27,  153 => 26,  149 => 25,  145 => 24,  140 => 23,  135 => 21,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  111 => 15,  106 => 14,  104 => 13,  96 => 7,  87 => 6,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Lycée du Parc de Vilegénis{% endblock %}
{% block stylesheets %}
  {{ parent() }}
{% endblock %}
{% block body %}
  <div class=\"container\">
    <div class=\"header clearfix\">
      <h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
    </div>

    <div class=\"jumbotron\">
      {% if is_granted('ROLE_ADMINISTRATEUR') or is_granted('ROLE_SUPER_ADMINISTRATEUR') %}
        <a href=\"{{ path('offres') }}\" class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
        <a href=\"{{ path('administration_gestion_des_jeunes') }}\" class=\"btn btn-primary btn-lg btn-block\">Gestion: Jeune</a>
        <a href=\"{{ path('administration_gestion_des_offres') }}\" class=\"btn btn-primary btn-lg btn-block\">Gestion: Offre</a>
        <a href=\"{{ path('administration_gestion_des_partenaires') }}\" class=\"btn btn-primary btn-lg btn-block\">Gestion: Partenaire</a>
        <a href=\"{{ path('administration_gestion_des_administrateurs') }}\" class=\"btn btn-primary btn-lg btn-block\">Gestion: Administrateur</a>
        <a href=\"{{ path('statistiques') }}\" class=\"btn btn-primary btn-lg btn-block\">Statistiques</a>
        <a href=\"{{ path('administrateur_modification') }}\" class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
      {% elseif  is_granted('ROLE_PARTENAIRE') %}
        <a href=\"{{ path('offres') }}\"class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
        <a href=\"{{ path('partenaire_gestion_des_offres') }}\"class=\"btn btn-primary btn-lg btn-block\">Gérer les offres</a>
        <a href=\"{{ path('partenaire_gestion_des_candidatures') }}\" class=\"btn btn-primary btn-lg btn-block\">Gérer les candidatures</a>
        <a href=\"{{ path('partenaire_modification') }}\"class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
        <a href=\"{{ path('app_logout') }}\"class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
      {% elseif  is_granted('ROLE_JEUNE') %}
        <a href=\"{{ path('offres') }}\" class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
        <a href=\"{{ path('jeune_gestion_de_ses_candidatures') }}\" class=\"btn btn-primary btn-lg btn-block\">Gérer ses candidatures</a>
        <a href=\"{{ path('jeune_modification') }}\" class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
      {% else %}
        <a href=\"{{ path('app_login') }}\" class=\"btn btn-info btn-lg btn-block\">Jeune</a>
        <a href=\"{{ path('app_login') }}\" class=\"btn btn-warning btn-lg btn-block\">Partenaire</a>
        <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary btn-lg btn-block\">Administrateur</a>
      {% endif %}
    </div>

    <hr>

    <footer>
      <p>Copyright &copy; Cheik-Siramakan Keita 2018-{{ \"now\"|date('Y') }}</p>
    </footer>
  </div>
{% endblock %}
{% block javascripts %}
  {{ parent() }}
{% endblock %}", "default/accueil.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\default\\accueil.html.twig");
    }
}
