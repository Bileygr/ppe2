<?php

/* administrateur/modification_des_informations.html.twig */
class __TwigTemplate_041dd47cb494e2ecafc049e04b68f48271bb3657d95e5ec87d96de6d0f6b451c extends Twig_Template
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
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "          ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
    \t\t  \t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", array()), 'widget');
        echo "
    \t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "prenom", array()), 'widget');
        echo "
    \t\t      ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "telephone", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "adresse", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "ville", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "codepostal", array()), 'widget');
        echo "
    \t\t\t   ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "modification", array()), 'widget');
        echo "
    \t\t\t   <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Retour</a>
  \t\t    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
        ";
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
        return array (  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  61 => 18,  58 => 17,  48 => 32,  44 => 30,  42 => 17,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administrateur/modification_des_informations.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\modification_des_informations.html.twig");
    }
}
