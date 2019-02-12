<?php

/* registration/register.html.twig */
class __TwigTemplate_4067ce38d1171b40f1297137c165021e37f5702244a1e0028b833e080ad54a0e extends Twig_Template
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    \t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs")) {
            // line 8
            echo "    \t\t\t\tInscription des administrateurs
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes")) {
            // line 10
            echo "    \t\t\t\tInscription des jeunes
    \t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_partenaires")) {
            // line 12
            echo "    \t\t\t\tInscription des partenaires
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "        \t<h1>
        \t\t";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs")) {
            // line 29
            echo "    \t\t\t\tInscription des administrateurs
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes")) {
            // line 31
            echo "    \t\t\t\tInscription des jeunes
    \t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_partenaires")) {
            // line 33
            echo "    \t\t\t\tInscription des partenaires
\t\t\t\t";
        }
        // line 35
        echo "        \t</h1>
        \t";
        // line 36
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes"))) {
            // line 37
            echo "\t\t        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
            echo "
\t\t          \t";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", array()), 'widget');
            echo "
\t\t            ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "prenom", array()), 'widget');
            echo "
\t\t            ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe")));
            echo "
\t\t            ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "telephone", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "adresse", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "ville", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "codepostal", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "inscription", array()), 'widget');
            echo "

\t\t\t\t    ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_jeunes")) {
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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_administrateurs")) {
                // line 53
                echo "\t\t\t\t        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_administrateurs");
                echo "\">Retour</a>
\t\t\t\t    ";
            }
            // line 55
            echo "\t\t       \t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
            echo "
\t\t    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "inscription_des_partenaires")) {
            // line 57
            echo "\t\t    \t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
            echo "
\t\t    \t\t";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "siret", array()), 'widget');
            echo "
\t\t        \t";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", array()), 'widget');
            echo "
\t\t        \t";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "motdepasse", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe")));
            echo "
\t\t        \t";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "telephone", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "adresse", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "ville", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "codepostal", array()), 'widget');
            echo "
\t\t\t\t\t";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "inscription", array()), 'widget');
            echo "
\t\t\t\t\t<a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_partenaires");
            echo "\">Retour</a>
\t\t\t\t";
            // line 68
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
            echo "
\t\t    ";
        }
        // line 70
        echo "\t    ";
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
        return array (  232 => 70,  227 => 68,  223 => 67,  219 => 66,  215 => 65,  211 => 64,  207 => 63,  203 => 62,  199 => 61,  195 => 60,  191 => 59,  187 => 58,  182 => 57,  180 => 56,  175 => 55,  169 => 53,  167 => 52,  164 => 51,  158 => 49,  156 => 48,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  127 => 40,  123 => 39,  119 => 38,  114 => 37,  112 => 36,  109 => 35,  105 => 33,  103 => 32,  100 => 31,  98 => 30,  95 => 29,  93 => 28,  90 => 27,  87 => 26,  83 => 14,  79 => 12,  77 => 11,  74 => 10,  72 => 9,  69 => 8,  66 => 7,  63 => 6,  53 => 73,  49 => 71,  47 => 26,  34 => 15,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registration/register.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\registration\\register.html.twig");
    }
}
