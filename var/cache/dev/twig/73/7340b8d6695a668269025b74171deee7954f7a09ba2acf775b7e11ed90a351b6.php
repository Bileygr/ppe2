<?php

/* security/login.html.twig */
class __TwigTemplate_6c9769738ecf10f11530b82852f466ead1e959ae36a3d5f2fbc843ea459025ae extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <title>Connexion</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
        <link rel=\"shortcut icon\" href=\"images/favicon.ico\" /> <!-- Icone du site -->
    </head>

    <body>
        <div class=\"container\">
            <div class=\"header clearfix\">
                <h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
            </div>

            <div class=\"jumbotron\">
                ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "            </div>

            <hr>
                <footer>
                    <p>&copy; Cheik-Siramakan Keita 2018-";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
                </footer>
        </div>

        <!-- Scripts -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        <script rel=\"text/javaScript\" src=\"\"></script> <!-- mon script -->
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "                <form method=\"POST\">
                    ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 24, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 26
        echo "                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6\">
                            <label>Identifiant</label>
                            <input type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" name=\"username\" id=\"inputUsername\" placeholder=\"Identifiant\" required autofocus>
                        </div>
          
                        <div class=\"form-group col-md-6\">
                            <label for=\"exampleInputPassword1\">Mot de passe</label>
                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Mot de passe\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\"
                            value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                        >
                    </div>
                    <button class=\"btn btn-primary\" type=\"submit\">
                        Connexion
                    </button>
                </form>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  118 => 38,  106 => 29,  101 => 26,  95 => 24,  93 => 23,  90 => 22,  81 => 21,  60 => 50,  54 => 46,  52 => 21,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <title>Connexion</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css\" >
        <link rel=\"shortcut icon\" href=\"images/favicon.ico\" /> <!-- Icone du site -->
    </head>

    <body>
        <div class=\"container\">
            <div class=\"header clearfix\">
                <h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
            </div>

            <div class=\"jumbotron\">
                {% block body %}
                <form method=\"POST\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6\">
                            <label>Identifiant</label>
                            <input type=\"text\" value=\"{{ last_username }}\" class=\"form-control\" name=\"username\" id=\"inputUsername\" placeholder=\"Identifiant\" required autofocus>
                        </div>
          
                        <div class=\"form-group col-md-6\">
                            <label for=\"exampleInputPassword1\">Mot de passe</label>
                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Mot de passe\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\"
                            value=\"{{ csrf_token('authenticate') }}\"
                        >
                    </div>
                    <button class=\"btn btn-primary\" type=\"submit\">
                        Connexion
                    </button>
                </form>
                {% endblock %}
            </div>

            <hr>
                <footer>
                    <p>&copy; Cheik-Siramakan Keita 2018-{{ \"now\"|date('Y') }}</p>
                </footer>
        </div>

        <!-- Scripts -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
        <script rel=\"text/javaScript\" src=\"\"></script> <!-- mon script -->
    </body>
</html>", "security/login.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\security\\login.html.twig");
    }
}
