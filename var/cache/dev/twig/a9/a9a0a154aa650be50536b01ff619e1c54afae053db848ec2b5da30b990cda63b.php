<?php

/* offre/index.html.twig */
class __TwigTemplate_4e2175b326611bbdc560f0f8bbbd8dc0168f5684f0f9cb41874551dbb6c9000d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "offre/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

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

        echo "Gestion Jeunes";
        
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

        echo "\t
    <a href=\"";
        // line 6
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeunes"]) || array_key_exists("jeunes", $context) ? $context["jeunes"] : (function () { throw new Twig_Error_Runtime('Variable "jeunes" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jeune"]) {
            // line 25
            echo "\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "id", array()), "html", null, true);
            echo "</th>
\t      \t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "username", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "nom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "prenom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>0";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "telephone", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "email", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "adresse", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "ville", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "codepostal", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeune"], "dateajout", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t    \t\t\t</tr>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeune'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t  \t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "offre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  99 => 25,  95 => 24,  74 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block title %}Gestion Jeunes{% endblock %}

{% block body %}\t
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
\t  \t\t{% for jeune in jeunes %}
\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">{{ jeune.id }}</th>
\t      \t\t\t\t<td>{{ jeune.username }}</td>
\t      \t\t\t\t<td>{{ jeune.nom }}</td>
\t      \t\t\t\t<td>{{ jeune.prenom }}</td>
\t      \t\t\t\t<td>0{{ jeune.telephone }}</td>
\t      \t\t\t\t<td>{{ jeune.email }}</td>
\t      \t\t\t\t<td>{{ jeune.adresse }}</td>
\t      \t\t\t\t<td>{{ jeune.ville }}</td>
\t      \t\t\t\t<td>{{ jeune.codepostal }}</td>
\t      \t\t\t\t<td>{{ jeune.dateajout|date('Y-m-d') }}</td>
\t    \t\t\t</tr>
\t\t    {% endfor %}
\t  \t</tbody>
\t</table>
{% endblock %}", "offre/index.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\offre\\index.html.twig");
    }
}
