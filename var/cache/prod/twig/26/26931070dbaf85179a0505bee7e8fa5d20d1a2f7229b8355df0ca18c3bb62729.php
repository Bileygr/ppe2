<?php

/* partenaire/gestion_des_offres.html.twig */
class __TwigTemplate_ece57736219d7ed3812c8ed1409f615b9a1cca68a53983a85df912a3d0a498fa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "partenaire/gestion_des_offres.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion Offres";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_des_offres");
        echo "\">Ajouter une nouvelle offre</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_des_offres_partenaire");
        echo "\">Gérer les offres</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Retour</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Deconnexion</a>
";
    }

    public function getTemplateName()
    {
        return "partenaire/gestion_des_offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 8,  47 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partenaire/gestion_des_offres.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\partenaire\\gestion_des_offres.html.twig");
    }
}
