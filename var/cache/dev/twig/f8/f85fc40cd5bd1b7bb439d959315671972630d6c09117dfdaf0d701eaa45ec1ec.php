<?php

/* administrateur/gestion_des_partenaires.html.twig */
class __TwigTemplate_8647d8469d8fdfbc44674c5d269e6be72e54db52d1ef005a88e57151c03c8e1f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "administrateur/gestion_des_partenaires.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrateur/gestion_des_partenaires.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrateur/gestion_des_partenaires.html.twig"));

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

        echo "Gestion des partenaires";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_des_partenaires");
        echo "\" class=\"btn btn-primary\">Ajout</a>\t
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"btn btn-warning\">Retour</a>

    <table class=\"table\">
  \t\t<thead>
\t    \t<tr>
\t\t      \t<th scope=\"col\">ID</th>
\t\t      \t<th scope=\"col\">SIET</th>
\t\t      \t<th scope=\"col\">Nom</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) || array_key_exists("partenaires", $context) ? $context["partenaires"] : (function () { throw new Twig_Error_Runtime('Variable "partenaires" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 25
            echo "\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()), "html", null, true);
            echo "</th>
\t      \t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "siret", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "nom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>0";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "telephone", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "email", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "adresse", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "ville", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "codepostal", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "dateajout", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>
\t      \t\t\t\t\t<form method=\"POST\">
\t      \t\t\t\t\t\t<button name=\"modifier\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()), "html", null, true);
            echo "\">Modifier</button>
\t      \t\t\t\t\t</form>
\t      \t\t\t\t</td>
\t      \t\t\t\t<td>
\t      \t\t\t\t\t<form method=\"POST\">
\t      \t\t\t\t\t\t<button name=\"supprimer\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()), "html", null, true);
            echo "\">Supprimer</button>
\t      \t\t\t\t\t</form>
\t      \t\t\t\t</td>
\t    \t\t\t</tr>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t  \t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "administrateur/gestion_des_partenaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  150 => 42,  142 => 37,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  101 => 25,  97 => 24,  77 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block title %}Gestion des partenaires{% endblock %}

{% block body %}
\t<a href=\"{{ path('inscription_des_partenaires') }}\" class=\"btn btn-primary\">Ajout</a>\t
    <a href=\"{{ path('accueil') }}\" class=\"btn btn-warning\">Retour</a>

    <table class=\"table\">
  \t\t<thead>
\t    \t<tr>
\t\t      \t<th scope=\"col\">ID</th>
\t\t      \t<th scope=\"col\">SIET</th>
\t\t      \t<th scope=\"col\">Nom</th>
\t\t      \t<th scope=\"col\">Tél</th>
\t\t      \t<th scope=\"col\">Email</th>
\t\t      \t<th scope=\"col\">Adresse</th>
\t\t      \t<th scope=\"col\">Ville</th>
\t\t      \t<th scope=\"col\">Code Postal</th>
\t\t      \t<th scope=\"col\">Date d'ajout</th>
\t    \t</tr>
  \t\t</thead>
\t  \t<tbody>
\t  \t\t{% for partenaire in partenaires %}
\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">{{ partenaire.id }}</th>
\t      \t\t\t\t<td>{{ partenaire.siret }}</td>
\t      \t\t\t\t<td>{{ partenaire.nom }}</td>
\t      \t\t\t\t<td>0{{ partenaire.telephone }}</td>
\t      \t\t\t\t<td>{{ partenaire.email }}</td>
\t      \t\t\t\t<td>{{ partenaire.adresse }}</td>
\t      \t\t\t\t<td>{{ partenaire.ville }}</td>
\t      \t\t\t\t<td>{{ partenaire.codepostal }}</td>
\t      \t\t\t\t<td>{{ partenaire.dateajout|date('Y-m-d') }}</td>
\t      \t\t\t\t<td>
\t      \t\t\t\t\t<form method=\"POST\">
\t      \t\t\t\t\t\t<button name=\"modifier\" value=\"{{ partenaire.id }}\">Modifier</button>
\t      \t\t\t\t\t</form>
\t      \t\t\t\t</td>
\t      \t\t\t\t<td>
\t      \t\t\t\t\t<form method=\"POST\">
\t      \t\t\t\t\t\t<button name=\"supprimer\" value=\"{{ partenaire.id }}\">Supprimer</button>
\t      \t\t\t\t\t</form>
\t      \t\t\t\t</td>
\t    \t\t\t</tr>
\t\t    {% endfor %}
\t  \t</tbody>
\t</table>
{% endblock %}", "administrateur/gestion_des_partenaires.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\gestion_des_partenaires.html.twig");
    }
}
