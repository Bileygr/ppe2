<?php

/* administrateur/modification_des_informations_partenaires.html.twig */
class __TwigTemplate_11fe14c4e5b369b4f021dc70b0f565ac00487eeb891500bcd77bca3cc2654fcb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("administrateur/modification_des_informations.html.twig", "administrateur/modification_des_informations_partenaires.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "administrateur/modification_des_informations.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t<a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_partenaires");
        echo "\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "administrateur/modification_des_informations_partenaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administrateur/modification_des_informations_partenaires.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\modification_des_informations_partenaires.html.twig");
    }
}
