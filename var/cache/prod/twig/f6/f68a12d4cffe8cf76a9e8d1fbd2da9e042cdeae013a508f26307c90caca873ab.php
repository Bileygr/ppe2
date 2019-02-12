<?php

/* security/login.html.twig */
class __TwigTemplate_563df6c3ae2a1b7214055c4a131a9e45509202ac51ab8c583492becced3e24ab extends Twig_Template
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
    <head>
        <meta charset=\"utf-8\">
        <title>Connexion</title>

        <!-- CSS -->
    </head>

    <body>
        <h1 class=\"text-muted\">Connexion</h1>
         ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        
        <footer><p>&copy; Cheik-Siramakan Keita 2018-";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p></footer>

        <!-- Scripts -->
    </body>
</html>";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "            <form method=\"POST\">
                ";
        // line 14
        if (($context["error"] ?? null)) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 17
        echo "                <input type=\"text\" value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" placeholder=\"Identifiant\" required autofocus>
          
                <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" required>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        
                <button type=\"submit\">Connexion</button>
            </form>
        ";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  65 => 17,  59 => 15,  57 => 14,  54 => 13,  51 => 12,  42 => 27,  39 => 26,  37 => 12,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\security\\login.html.twig");
    }
}
