<?php

/* administrateur/gestion_des_administrateurs.html.twig */
class __TwigTemplate_e2dbe7896812cef5319f72ba9cc97f5465f660f38683169a82e45af7c5db35da extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "administrateur/gestion_des_administrateurs.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrateur/gestion_des_administrateurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrateur/gestion_des_administrateurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_des_administrateurs");
        echo "\" class=\"btn btn-primary\">Ajout</a>\t
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"btn btn-warning\">Retour</a>

    <table class=\"table\">
  \t\t<thead>
\t    \t<tr>
\t\t      \t<th scope=\"col\">ID</th>
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["administrateurs"]) || array_key_exists("administrateurs", $context) ? $context["administrateurs"] : (function () { throw new Twig_Error_Runtime('Variable "administrateurs" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["administrateur"]) {
            // line 26
            echo "\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "id", array()), "html", null, true);
            echo "</th>
\t      \t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "username", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "nom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "prenom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>0";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "telephone", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "email", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "adresse", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "ville", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "codepostal", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "dateajout", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t    \t\t\t</tr>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['administrateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t  \t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "administrateur/gestion_des_administrateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  102 => 26,  98 => 25,  77 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block title %}Gestion des administrateurs{% endblock %}

{% block body %}
\t<a href=\"{{ path('inscription_des_administrateurs') }}\" class=\"btn btn-primary\">Ajout</a>\t
    <a href=\"{{ path('accueil') }}\" class=\"btn btn-warning\">Retour</a>

    <table class=\"table\">
  \t\t<thead>
\t    \t<tr>
\t\t      \t<th scope=\"col\">ID</th>
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
\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">{{ administrateur.id }}</th>
\t      \t\t\t\t<td>{{ administrateur.username }}</td>
\t      \t\t\t\t<td>{{ administrateur.nom }}</td>
\t      \t\t\t\t<td>{{ administrateur.prenom }}</td>
\t      \t\t\t\t<td>0{{ administrateur.telephone }}</td>
\t      \t\t\t\t<td>{{ administrateur.email }}</td>
\t      \t\t\t\t<td>{{ administrateur.adresse }}</td>
\t      \t\t\t\t<td>{{ administrateur.ville }}</td>
\t      \t\t\t\t<td>{{ administrateur.codepostal }}</td>
\t      \t\t\t\t<td>{{ administrateur.dateajout|date('Y-m-d') }}</td>
\t    \t\t\t</tr>
\t\t    {% endfor %}
\t  \t</tbody>
\t</table>
{% endblock %}", "administrateur/gestion_des_administrateurs.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\gestion_des_administrateurs.html.twig");
    }
}
