<?php

/* administrateur/gestion_des_partenaires.html.twig */
class __TwigTemplate_e6fe975acc326109ac0301df7b030ddeabb2cb245e2274cdcc6d8b143927f182 extends Twig_Template
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
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion des partenaires";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "Gestion des partenaires";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_des_partenaires");
        echo "\" class=\"btn btn-primary\">Ajout</a>\t
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"btn btn-warning\">Retour</a>

    <table class=\"table\">
  \t\t<thead>
\t    \t<tr>
\t\t      \t<th scope=\"col\">ID</th>
\t\t      \t<th scope=\"col\">SIRET</th>
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partenaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 27
            echo "\t\t    \t\t<form method=\"POST\">
\t\t\t    \t\t<input type=\"text\" hidden=\"hidden\" name=\"id\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()), "html", null, true);
            echo "\">
\t\t\t    \t\t<tr>
\t\t      \t\t\t\t<th scope=\"row\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()), "html", null, true);
            echo "</th>
\t\t      \t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "siret", array()), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "nom", array()), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>0";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "telephone", array()), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "email", array()), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "adresse", array()), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "ville", array()), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "codepostal", array()), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "dateajout", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td><input type=\"submit\" name=\"modifier\" value=\"Modifier\"></td>
\t\t      \t\t\t\t<td><input type=\"submit\" name=\"supprimer\" value=\"Supprimer\"></td>
\t\t    \t\t\t</tr>
\t\t    \t\t</form>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t  \t</tbody>
\t</table>
";
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
        return array (  130 => 44,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  81 => 28,  78 => 27,  74 => 26,  54 => 9,  49 => 8,  46 => 7,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administrateur/gestion_des_partenaires.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\gestion_des_partenaires.html.twig");
    }
}
