<?php

/* partenaire/liste_des_offres.html.twig */
class __TwigTemplate_088c65a68e7c71abb5067653a57fba9f80789c51004b30c965e1267074e3bbb5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "partenaire/liste_des_offres.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
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
        echo "Gestion des offres";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo "Gestion des offres";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"btn btn-warning\">Retour</a>

    <table class=\"table\">
  \t\t<thead>
\t    \t<tr>
\t\t      \t<th scope=\"col\">ID</th>
\t\t      \t<th scope=\"col\">Entreprise</th>
\t\t      \t<th scope=\"col\">Formation</th>
\t\t      \t<th scope=\"col\">Nom</th>
\t\t      \t<th scope=\"col\">Debut</th>
\t\t      \t<th scope=\"col\">Fin</th>
\t\t      \t<th scope=\"col\">Date d'ajout</th>
\t    \t</tr>
  \t\t</thead>
\t  \t<tbody>
\t  \t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 24
            echo "\t\t    \t\t<tr>
\t      \t\t\t\t<th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", array()), "html", null, true);
            echo "</th>
\t      \t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nomU", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nomF", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nomO", array()), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "debut", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "fin", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t      \t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "dateajout", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t    \t\t\t</tr>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t  \t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "partenaire/liste_des_offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  72 => 24,  68 => 23,  49 => 8,  46 => 7,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partenaire/liste_des_offres.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\partenaire\\liste_des_offres.html.twig");
    }
}
