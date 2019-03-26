<?php

/* default/accueil.html.twig */
class __TwigTemplate_a5c390a9404b7eef19253edd3a91fe789aa1607a1e85105d2d60240c792dadab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'style' => array($this, 'block_style'),
            'scripts' => array($this, 'block_scripts'),
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
  \t\t<meta charset=\"utf-8\">
    \t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    \t<!-- CSS -->
      ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "      ";
        $this->displayBlock('style', $context, $blocks);
        // line 14
        echo "      ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 16
        echo "  \t</head>

  \t<body>
        <div class=\"container\">
          <div class=\"header clearfix\">
            <h1 class=\"text-muted\">";
        // line 21
        $this->displayBlock('heading', $context, $blocks);
        echo "</h1>
          </div>

          <div class=\"jumbotron\">
            ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "          </div>

          <hr>

          <footer>
            <p>&copy; Cheik-Siramakan Keita 2018-";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
          </footer>
        </div>

    \t<!-- Scripts -->
    \t";
        // line 62
        $this->displayBlock('javascript', $context, $blocks);
        // line 68
        echo "  \t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 13
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 15
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_heading($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "heading"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "heading"));

        echo "Lycée du Parc de Vilegénis";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "              ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR"))) {
            // line 27
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
                <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_gestion_des_jeunes");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gérer les jeunes</a>
                <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_gestion_des_offres");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gérer les offres</a>
                <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_gestion_des_partenaires");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gérer les partenaires</a>
                <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_gestion_des_administrateurs");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gérer les administrateurs</a>
                <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistiques");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Statistiques</a>
                <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administrateur_modification");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
                <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
              ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
            // line 36
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
            echo "\"class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
                <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_gestion_des_offres");
            echo "\"class=\"btn btn-primary btn-lg btn-block\">Gérer les offres</a>
                <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_gestion_des_candidatures");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gérer les candidatures</a>
                <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_modification");
            echo "\"class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
              ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JEUNE")) {
            // line 42
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
                <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeune_gestion_de_ses_candidatures");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Gérer ses candidatures</a>
                <a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeune_modification");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Vos informations</a>
                <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-danger btn-lg btn-block\">Déconnexion</a>
              ";
        } else {
            // line 47
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-info btn-lg btn-block\">Jeune</a>
                <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-warning btn-lg btn-block\">Partenaire</a>
                <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary btn-lg btn-block\">Administrateur</a>
              ";
        }
        // line 51
        echo "              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 63
        echo "        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAji-cL_4RBFG-hZRTmwvg7BcU58X0U_6o&callback=initMap\"async defer></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
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
        return array (  314 => 63,  305 => 62,  295 => 51,  290 => 49,  286 => 48,  281 => 47,  276 => 45,  272 => 44,  268 => 43,  263 => 42,  258 => 40,  254 => 39,  250 => 38,  246 => 37,  241 => 36,  236 => 34,  232 => 33,  228 => 32,  224 => 31,  220 => 30,  216 => 29,  212 => 28,  207 => 27,  204 => 26,  195 => 25,  177 => 21,  167 => 15,  158 => 14,  148 => 13,  139 => 12,  127 => 9,  118 => 8,  100 => 5,  89 => 68,  87 => 62,  79 => 57,  72 => 52,  70 => 25,  63 => 21,  56 => 16,  53 => 14,  50 => 12,  48 => 8,  42 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
  \t\t<meta charset=\"utf-8\">
    \t<title>{% block title %}Accueil{% endblock %}</title>

    \t<!-- CSS -->
      {% block css %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
      {% endblock %}
      {% block style %}
      {% endblock %}
      {% block scripts %}
      {% endblock %}
  \t</head>

  \t<body>
        <div class=\"container\">
          <div class=\"header clearfix\">
            <h1 class=\"text-muted\">{% block heading %}Lycée du Parc de Vilegénis{% endblock %}</h1>
          </div>

          <div class=\"jumbotron\">
            {% block body %}
              {% if is_granted('ROLE_ADMINISTRATEUR') or is_granted('ROLE_SUPER_ADMINISTRATEUR') %}
                <a href=\"{{ path('offres') }}\" class=\"btn btn-primary btn-lg btn-block\">Voir les offres</a>
                <a href=\"{{ path('administration_gestion_des_jeunes') }}\" class=\"btn btn-primary btn-lg btn-block\">Gérer les jeunes</a>
                <a href=\"{{ path('administration_gestion_des_offres') }}\" class=\"btn btn-primary btn-lg btn-block\">Gérer les offres</a>
                <a href=\"{{ path('administration_gestion_des_partenaires') }}\" class=\"btn btn-primary btn-lg btn-block\">Gérer les partenaires</a>
                <a href=\"{{ path('administration_gestion_des_administrateurs') }}\" class=\"btn btn-primary btn-lg btn-block\">Gérer les administrateurs</a>
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
              {% endblock %}
          </div>

          <hr>

          <footer>
            <p>&copy; Cheik-Siramakan Keita 2018-{{ \"now\"|date('Y') }}</p>
          </footer>
        </div>

    \t<!-- Scripts -->
    \t{% block javascript %}
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAji-cL_4RBFG-hZRTmwvg7BcU58X0U_6o&callback=initMap\"async defer></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
      {% endblock %}
  \t</body>
</html>", "default/accueil.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\default\\accueil.html.twig");
    }
}
