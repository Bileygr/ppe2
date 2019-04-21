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
        $this->parent = $this->loadTemplate("default/accueil.html.twig", "administrateur/gestion_des_administrateurs.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/accueil.html.twig";
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container\">
        <div class=\"header clearfix\">
            <h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
        </div>
    
        <!--<div class=\"jumbotron\">-->
            <div class=\"header clearfix\">
                <h1 class=\"text-muted\">Gestion des administrateurs</h1>
            </div>

\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_inscription_d_un_administrateur");
        echo "\" class=\"btn btn-primary\">Ajout</a>
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"btn btn-warning\">Retour</a>

\t\t\t<hr>

\t\t\t<table id=\"table_id\" class=\"display\">
        \t\t<thead>
            \t\t<tr>
              \t\t\t<th>ID</th>
\t\t      \t\t\t<th>Rôle</th>
\t\t      \t\t\t<th>Identifiant</th>
\t\t      \t\t\t<th>Nom</th>
\t\t      \t\t\t<th>Prénom</th>
\t\t      \t\t\t<th>Tél</th>
\t\t      \t\t\t<th>Email</th>
\t\t      \t\t\t<th>Adresse</th>
\t\t      \t\t\t<th>Ville</th>
\t\t      \t\t\t<th>Code Postal</th>
\t\t      \t\t\t<th>Date d'ajout</th>
\t\t      \t\t\t";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR")) {
            // line 38
            echo "\t      \t\t\t\t\t<th>Modifier</th>
\t      \t\t\t\t\t<th>Suprimmer</th>
\t      \t\t\t\t";
        }
        // line 41
        echo "            \t\t</tr>
        \t\t</thead>
        \t\t<tbody>
          \t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["administrateurs"]) || array_key_exists("administrateurs", $context) ? $context["administrateurs"] : (function () { throw new Twig_Error_Runtime('Variable "administrateurs" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["administrateur"]) {
            // line 45
            echo "\t\t    \t\t\t<tr>
\t      \t\t\t\t\t<th scope=\"row\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "id", array()), "html", null, true);
            echo "</th>
\t      \t\t\t\t\t";
            // line 47
            if ((twig_join_filter(twig_get_attribute($this->env, $this->source, $context["administrateur"], "roles", array()), ", ") == "ROLE_SUPER_ADMINISTRATEUR")) {
                // line 48
                echo "\t      \t\t\t\t\t\t<td>Super administrateur</td>
\t      \t\t\t\t\t";
            } elseif ((twig_join_filter(twig_get_attribute($this->env, $this->source,             // line 49
$context["administrateur"], "roles", array()), ", ") == "ROLE_ADMINISTRATEUR")) {
                // line 50
                echo "\t      \t\t\t\t\t\t<td>Administrateur</td>
\t      \t\t\t\t\t";
            }
            // line 52
            echo "\t      \t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "username", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "nom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "prenom", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "telephone", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "email", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "adresse", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "ville", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "codepostal", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "dateajout", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t      \t\t\t\t\t";
            // line 61
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMINISTRATEUR")) {
                // line 62
                echo "\t      \t\t\t\t\t\t<td>
\t      \t\t\t\t\t\t\t<form method=\"POST\">
\t  \t\t\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" name=\"id\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "id", array()), "html", null, true);
                echo "\">
\t      \t\t\t\t\t\t\t\t<input type=\"submit\" name=\"modifier\" class=\"btn btn-secondary btn-sm\" value=\"Modifier\">
\t      \t\t\t\t\t\t\t</form>
\t      \t\t\t\t\t\t</td>
\t\t      \t\t\t\t\t<td>
\t\t      \t\t\t\t\t\t<form method=\"POST\">
\t  \t\t\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" name=\"id\" value=\"";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrateur"], "id", array()), "html", null, true);
                echo "\">
\t\t      \t\t\t\t\t\t\t<input type=\"submit\" name=\"supprimer\" class=\"btn btn-danger btn-sm\" value=\"Supprimer\">
\t\t      \t\t\t\t\t\t</form>
\t\t      \t\t\t\t\t</td>
\t      \t\t\t\t\t";
            }
            // line 75
            echo "\t    \t\t\t\t</tr>
\t\t    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['administrateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        \t\t</tbody>
      \t\t</table>
\t\t<!--</div>-->

\t\t<footer>
            <p>Copyright &copy; Cheik-Siramakan Keita 2018-";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
        </footer>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
    \t\$(document).ready( function () {
      \t\t\$('#table_id').DataTable();
    \t});
  \t</script>
  \t<script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js\"></script>
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
        return array (  265 => 87,  256 => 86,  242 => 82,  235 => 77,  228 => 75,  220 => 70,  211 => 64,  207 => 62,  205 => 61,  201 => 60,  197 => 59,  193 => 58,  189 => 57,  185 => 56,  181 => 55,  177 => 54,  173 => 53,  168 => 52,  164 => 50,  162 => 49,  159 => 48,  157 => 47,  153 => 46,  150 => 45,  146 => 44,  141 => 41,  136 => 38,  134 => 37,  113 => 19,  109 => 18,  97 => 8,  88 => 7,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/accueil.html.twig' %}
{% block title %}{{ parent() }}{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css\">
{% endblock %}
{% block body %}
\t<div class=\"container\">
        <div class=\"header clearfix\">
            <h1 class=\"text-muted\">Lycée du Parc de Vilegénis</h1>
        </div>
    
        <!--<div class=\"jumbotron\">-->
            <div class=\"header clearfix\">
                <h1 class=\"text-muted\">Gestion des administrateurs</h1>
            </div>

\t\t\t<a href=\"{{ path('administration_inscription_d_un_administrateur') }}\" class=\"btn btn-primary\">Ajout</a>
\t\t\t<a href=\"{{ path('accueil') }}\" class=\"btn btn-warning\">Retour</a>

\t\t\t<hr>

\t\t\t<table id=\"table_id\" class=\"display\">
        \t\t<thead>
            \t\t<tr>
              \t\t\t<th>ID</th>
\t\t      \t\t\t<th>Rôle</th>
\t\t      \t\t\t<th>Identifiant</th>
\t\t      \t\t\t<th>Nom</th>
\t\t      \t\t\t<th>Prénom</th>
\t\t      \t\t\t<th>Tél</th>
\t\t      \t\t\t<th>Email</th>
\t\t      \t\t\t<th>Adresse</th>
\t\t      \t\t\t<th>Ville</th>
\t\t      \t\t\t<th>Code Postal</th>
\t\t      \t\t\t<th>Date d'ajout</th>
\t\t      \t\t\t{% if is_granted('ROLE_SUPER_ADMINISTRATEUR') %}
\t      \t\t\t\t\t<th>Modifier</th>
\t      \t\t\t\t\t<th>Suprimmer</th>
\t      \t\t\t\t{% endif %}
            \t\t</tr>
        \t\t</thead>
        \t\t<tbody>
          \t\t\t{% for administrateur in administrateurs %}
\t\t    \t\t\t<tr>
\t      \t\t\t\t\t<th scope=\"row\">{{ administrateur.id }}</th>
\t      \t\t\t\t\t{% if administrateur.roles|join(', ') == 'ROLE_SUPER_ADMINISTRATEUR' %}
\t      \t\t\t\t\t\t<td>Super administrateur</td>
\t      \t\t\t\t\t{% elseif administrateur.roles|join(', ') == 'ROLE_ADMINISTRATEUR' %}
\t      \t\t\t\t\t\t<td>Administrateur</td>
\t      \t\t\t\t\t{% endif %}
\t      \t\t\t\t\t<td>{{ administrateur.username }}</td>
\t      \t\t\t\t\t<td>{{ administrateur.nom }}</td>
\t      \t\t\t\t\t<td>{{ administrateur.prenom }}</td>
\t      \t\t\t\t\t<td>{{ administrateur.telephone }}</td>
\t      \t\t\t\t\t<td>{{ administrateur.email }}</td>
\t      \t\t\t\t\t<td>{{ administrateur.adresse }}</td>
\t      \t\t\t\t\t<td>{{ administrateur.ville }}</td>
\t      \t\t\t\t\t<td>{{ administrateur.codepostal }}</td>
\t      \t\t\t\t\t<td>{{ administrateur.dateajout|date('d-m-Y') }}</td>
\t      \t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMINISTRATEUR') %}
\t      \t\t\t\t\t\t<td>
\t      \t\t\t\t\t\t\t<form method=\"POST\">
\t  \t\t\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" name=\"id\" value=\"{{ administrateur.id }}\">
\t      \t\t\t\t\t\t\t\t<input type=\"submit\" name=\"modifier\" class=\"btn btn-secondary btn-sm\" value=\"Modifier\">
\t      \t\t\t\t\t\t\t</form>
\t      \t\t\t\t\t\t</td>
\t\t      \t\t\t\t\t<td>
\t\t      \t\t\t\t\t\t<form method=\"POST\">
\t  \t\t\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" name=\"id\" value=\"{{ administrateur.id }}\">
\t\t      \t\t\t\t\t\t\t<input type=\"submit\" name=\"supprimer\" class=\"btn btn-danger btn-sm\" value=\"Supprimer\">
\t\t      \t\t\t\t\t\t</form>
\t\t      \t\t\t\t\t</td>
\t      \t\t\t\t\t{% endif %}
\t    \t\t\t\t</tr>
\t\t    \t\t{% endfor %}
        \t\t</tbody>
      \t\t</table>
\t\t<!--</div>-->

\t\t<footer>
            <p>Copyright &copy; Cheik-Siramakan Keita 2018-{{ \"now\"|date('Y') }}</p>
        </footer>
\t</div>
{% endblock %}
{% block javascripts %}
\t{{ parent() }}
\t<script>
    \t\$(document).ready( function () {
      \t\t\$('#table_id').DataTable();
    \t});
  \t</script>
  \t<script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js\"></script>
{% endblock %}", "administrateur/gestion_des_administrateurs.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\gestion_des_administrateurs.html.twig");
    }
}
