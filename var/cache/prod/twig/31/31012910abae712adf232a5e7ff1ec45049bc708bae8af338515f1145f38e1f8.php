<?php

/* administrateur/index.html.twig */
class __TwigTemplate_895aaaeb9456fc19a4afd21712c278ed17a3bad6be3c22c2f1683c9d7504a4eb extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">
  <head>
  \t<meta charset=\"utf-8\">
    <title>Administrateur</title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
    <link rel=\"stylesheet\" href=\"moncss.css\"> <!-- mon CSS -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" /> <!-- Icone du site -->

  </head>

  <body>
  \t<div class=\"container\">
  \t\t<div class=\"header clearfix\">
  \t\t\t<h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
  \t\t</div>

  \t\t<div class=\"jumbotron\">
  \t\t\t<a href=\"administrateurjeune.php\" class=\"btn btn-primary btn-lg btn-block\">Gérer les Jeunes</a>
  \t\t\t<a href=\"administrateuroffre.php\" class=\"btn btn-primary btn-lg btn-block\">Gérer les Offres</a>
  \t\t\t<a href=\"administrateurpartenaire.php\" class=\"btn btn-primary btn-lg btn-block\">Gérer les Partenaire</a>
  \t\t\t<a href=\"administrateuradmin.php\" class=\"btn btn-primary btn-lg btn-block\">Gérer les Administrateur</a>
    \t</div>

    \t<hr>

    \t<footer>
        <p>&copy; Cheik-Siramakan Keita 2018-";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
      </footer>
    </div>

    <!-- Scripts -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script rel=\"text/javaScript\" src=\"\"></script> <!-- mon script -->
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "administrateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 32,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administrateur/index.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\index.html.twig");
    }
}
