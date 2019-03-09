<?php

/* administrateur/gestion.html.twig */
class __TwigTemplate_72a1306e597508f590cee9ec823081c1238b896ec74a5f1fd34507f5c5826a2d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/accueil.html.twig", "administrateur/gestion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrateur/gestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrateur/gestion.html.twig"));

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

        echo "Gestion des administrateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Gestion des administrateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administrateur_inscription");
        echo "\" class=\"btn btn-primary\">Ajout</a>

    <table class=\"table table-hover\">
  \t\t<thead class=\"thead-inverse\">
\t    \t<tr>
\t\t      \t<th scope=\"col\">ID</th>
\t\t      \t<th scope=\"col\">Rôle</th>
\t\t      \t<th scope=\"col\">Identifiant</th>
\t\t      \t<th scope=\"col\">Nom</th>
\t\t      \t<th scope=\"col\">Prénom</th>
\t\t      \t<th scope=\"col\">Tél</th>
\t\t      \t<th scope=\"col\">Email</th>
\t\t      \t<th scope=\"col\">Adresse</th>
\t\t      \t<th scope=\"col\">Ville</th>
\t\t      \t<th scope=\"col\">Code Postal</th>
\t\t      \t<th scope=\"col\">Date d'ajout</th>
\t    \t</tr>
  \t\t</thead>
\t  \t<tbody>
\t  \t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["administrateurs"]) || array_key_exists("administrateurs", $context) ? $context["administrateurs"] : (function () { throw new Twig_Error_Runtime('Variable "administrateurs" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["administrateur"]) {
            // line 25
            echo "\t  \t\t\t<form method=\"POST\">
\t  \t\t\t\t<input type=\"text\" hidden=\"hidden\" name=\"id\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "id", array()), "html", null, true);
            echo "\">
\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "id", array()), "html", null, true);
            echo "</th>
\t      \t\t\t\t";
            // line 29
            if ((twig_join_filter(twig_get_attribute($this->env, $this->source, $context["administrateur"], "roles", array()), ", ") == "ROLE_SUPER_ADMINISTRATEUR")) {
                // line 30
                echo "\t      \t\t\t\t\t<td>Super administrateur</td>
\t      \t\t\t\t";
            } elseif ((twig_join_filter(twig_get_attribute($this->env, $this->source,             // line 31
$context["administrateur"], "roles", array()), ", ") == "ROLE_ADMINISTRATEUR")) {
                // line 32
                echo "\t      \t\t\t\t\t<td>Administrateur</td>
\t      \t\t\t\t";
            }
            // line 34
            echo "\t      \t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "username", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "nom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "prenom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "telephone", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "email", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "adresse", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "ville", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "codepostal", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "dateajout", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t      \t\t\t\t";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR")) {
                // line 44
                echo "\t      \t\t\t\t\t<td><input type=\"submit\" name=\"modifier\" class=\"btn btn-secondary btn-sm\" value=\"Modifier\"></td>
\t\t      \t\t\t\t<td><input type=\"submit\" name=\"supprimer\" class=\"btn btn-danger btn-sm\" value=\"Supprimer\"></td>
\t      \t\t\t\t";
            }
            // line 47
            echo "\t    \t\t\t</tr>
\t    \t\t</form>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['administrateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t  \t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "administrateur/gestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 50,  185 => 47,  180 => 44,  178 => 43,  174 => 42,  170 => 41,  166 => 40,  162 => 39,  158 => 38,  154 => 37,  150 => 36,  146 => 35,  141 => 34,  137 => 32,  135 => 31,  132 => 30,  130 => 29,  126 => 28,  121 => 26,  118 => 25,  114 => 24,  91 => 5,  82 => 4,  64 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/accueil.html.twig' %}
{% block title %}Gestion des administrateurs{% endblock %}
{% block titre %}Gestion des administrateurs{% endblock %}
{% block body %}
\t<a href=\"{{ path('administrateur_inscription') }}\" class=\"btn btn-primary\">Ajout</a>

    <table class=\"table table-hover\">
  \t\t<thead class=\"thead-inverse\">
\t    \t<tr>
\t\t      \t<th scope=\"col\">ID</th>
\t\t      \t<th scope=\"col\">Rôle</th>
\t\t      \t<th scope=\"col\">Identifiant</th>
\t\t      \t<th scope=\"col\">Nom</th>
\t\t      \t<th scope=\"col\">Prénom</th>
\t\t      \t<th scope=\"col\">Tél</th>
\t\t      \t<th scope=\"col\">Email</th>
\t\t      \t<th scope=\"col\">Adresse</th>
\t\t      \t<th scope=\"col\">Ville</th>
\t\t      \t<th scope=\"col\">Code Postal</th>
\t\t      \t<th scope=\"col\">Date d'ajout</th>
\t    \t</tr>
  \t\t</thead>
\t  \t<tbody>
\t  \t\t{% for administrateur in administrateurs %}
\t  \t\t\t<form method=\"POST\">
\t  \t\t\t\t<input type=\"text\" hidden=\"hidden\" name=\"id\" value=\"{{ administrateur.id }}\">
\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">{{ administrateur.id }}</th>
\t      \t\t\t\t{% if administrateur.roles|join(', ') == 'ROLE_SUPER_ADMINISTRATEUR' %}
\t      \t\t\t\t\t<td>Super administrateur</td>
\t      \t\t\t\t{% elseif administrateur.roles|join(', ') == 'ROLE_ADMINISTRATEUR' %}
\t      \t\t\t\t\t<td>Administrateur</td>
\t      \t\t\t\t{% endif %}
\t      \t\t\t\t<td>{{ administrateur.username }}</td>
\t      \t\t\t\t<td>{{ administrateur.nom }}</td>
\t      \t\t\t\t<td>{{ administrateur.prenom }}</td>
\t      \t\t\t\t<td>{{ administrateur.telephone }}</td>
\t      \t\t\t\t<td>{{ administrateur.email }}</td>
\t      \t\t\t\t<td>{{ administrateur.adresse }}</td>
\t      \t\t\t\t<td>{{ administrateur.ville }}</td>
\t      \t\t\t\t<td>{{ administrateur.codepostal }}</td>
\t      \t\t\t\t<td>{{ administrateur.dateajout|date('d-m-Y') }}</td>
\t      \t\t\t\t{% if is_granted('ROLE_SUPER_ADMINISTRATEUR') %}
\t      \t\t\t\t\t<td><input type=\"submit\" name=\"modifier\" class=\"btn btn-secondary btn-sm\" value=\"Modifier\"></td>
\t\t      \t\t\t\t<td><input type=\"submit\" name=\"supprimer\" class=\"btn btn-danger btn-sm\" value=\"Supprimer\"></td>
\t      \t\t\t\t{% endif %}
\t    \t\t\t</tr>
\t    \t\t</form>
\t\t    {% endfor %}
\t  \t</tbody>
\t</table>
{% endblock %}", "administrateur/gestion.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\gestion.html.twig");
    }
}
