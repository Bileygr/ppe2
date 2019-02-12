<?php

/* default/index.html.twig */
class __TwigTemplate_5595a28ca033fffba83b139d76e3a0a0220ae83bf431e55b65997609f1547d89 extends Twig_Template
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
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        // line 9
        echo "  \t</head>

  \t<body>
  \t\t<h1 class=\"text-muted\">";
        // line 12
        $this->displayBlock('titre', $context, $blocks);
        echo "</h1>

  \t\t";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
      <footer><p>&copy; Cheik-Siramakan Keita 2018-";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p></footer>

    \t<!-- Scripts -->
    \t";
        // line 44
        $this->displayBlock('javascript', $context, $blocks);
        // line 45
        echo "  \t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
    }

    // line 12
    public function block_titre($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR")) {
            // line 16
            echo "          <a href=\"\">Voir les offres</a>
          <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_jeunes");
            echo "\">Gérer les jeunes</a>
          <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_offres");
            echo "\">Gérer les offres</a>
          <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_partenaires");
            echo "\">Gérer les partenaires</a>
          <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_administrateurs");
            echo "\">Gérer les administrateurs</a>
          <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification_des_informations_administrateur");
            echo "\">Vos informations</a>
          <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
            // line 24
            echo "          <a href=\"administrateurpartenaire.php\">Voir les offres</a>
          <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_gestion_offres");
            echo "\">Gérer les offres</a>
          <a href=\"administrateuradmin.php\">Gérer les candidatures</a>
          <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification_des_informations_administrateur");
            echo "\">Vos informations</a>
          <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JEUNE")) {
            // line 30
            echo "          <a href=\"administrateurpartenaire.php\">Voir les offres</a>
          <a href=\"administrateuradmin.php\">Gérer ses candidatures</a>
          <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Vos informations</a>
          <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 35
            echo "          <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Jeune</a>
          <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Partenaire</a>
          <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Administrateur</a>
        ";
        }
        // line 39
        echo "      ";
    }

    // line 44
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  169 => 44,  165 => 39,  160 => 37,  156 => 36,  151 => 35,  146 => 33,  142 => 32,  138 => 30,  133 => 28,  129 => 27,  124 => 25,  121 => 24,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  93 => 16,  90 => 15,  87 => 14,  81 => 12,  76 => 8,  70 => 5,  65 => 45,  63 => 44,  57 => 41,  54 => 40,  52 => 14,  47 => 12,  42 => 9,  40 => 8,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\default\\index.html.twig");
    }
}
