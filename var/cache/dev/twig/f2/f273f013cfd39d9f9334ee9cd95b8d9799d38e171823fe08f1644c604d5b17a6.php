<?php

/* default/index.html.twig */
class __TwigTemplate_c25ca9b0f370560156e49e37cdc6d4b497ae80882e7d7a43fd0183cbe34eb681 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">
  <head>
  \t<meta charset=\"utf-8\">
    <title>Accueil</title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/moncss.css"), "html", null, true);
        echo "\"> <!-- mon CSS -->
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" /> <!-- Icone du site -->

  </head>

  <body>
  \t<div class=\"container\">
  \t\t<div class=\"header clearfix\">
  \t\t\t<h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
  \t\t</div>

  \t\t<div class=\"jumbotron\">
  \t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-info btn-lg btn-block\">Jeune</a>
  \t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-warning btn-lg btn-block\">Partenaire</a>
  \t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary btn-lg btn-block\">Administrateur</a>
    \t</div>

    \t<hr>

    \t<footer>
        <p>&copy; Cheik-Siramakan Keita 2018-";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
      </footer>
    </div>

    <!-- Scripts -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script rel=\"text/javaScript\" src=\"\"></script> <!-- mon script -->
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  67 => 25,  63 => 24,  59 => 23,  45 => 12,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"fr\">
  <head>
  \t<meta charset=\"utf-8\">
    <title>Accueil</title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
    <link rel=\"stylesheet\" href=\"{{ asset('css/moncss.css') }}\"> <!-- mon CSS -->
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.ico') }}\" /> <!-- Icone du site -->

  </head>

  <body>
  \t<div class=\"container\">
  \t\t<div class=\"header clearfix\">
  \t\t\t<h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
  \t\t</div>

  \t\t<div class=\"jumbotron\">
  \t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn btn-info btn-lg btn-block\">Jeune</a>
  \t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn btn-warning btn-lg btn-block\">Partenaire</a>
  \t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn btn-primary btn-lg btn-block\">Administrateur</a>
    \t</div>

    \t<hr>

    \t<footer>
        <p>&copy; Cheik-Siramakan Keita 2018-{{ \"now\"|date('Y') }}</p>
      </footer>
    </div>

    <!-- Scripts -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script rel=\"text/javaScript\" src=\"\"></script> <!-- mon script -->
  </body>
</html>", "default/index.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\default\\index.html.twig");
    }
}
