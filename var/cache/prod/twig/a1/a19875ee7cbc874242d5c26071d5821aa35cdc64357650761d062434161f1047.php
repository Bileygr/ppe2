<?php

/* administrateur/modification_des_informations_offres.html.twig */
class __TwigTemplate_43084edfeea38e63bdf75badeb2b008b7006f7888cb40b9848c8e5efbef0bb38 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("administrateur/modification_des_informations.html.twig", "administrateur/modification_des_informations_offres.html.twig", 1);
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
\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", array()), 'widget');
        echo "
\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", array()), 'widget');
        echo "
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", array()), 'widget');
        echo "
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "codepostal", array()), 'widget');
        echo "
\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "debut", array()), 'widget');
        echo "
\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fin", array()), 'widget');
        echo "
\t\t<select class=\"form-control\" id=\"exampleSelect1\" name='formation' value=''>
\t\t\t<option selected=\"select\" disabled>Sélectionnez la formation</option>
\t\t    <hr />
\t\t    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 15
            echo "\t\t    \t<option id=\"formation\" name=\"formation\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nom", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t</select>
\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'widget');
        echo "
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_des_partenaires");
        echo "\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "administrateur/modification_des_informations_offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  89 => 19,  85 => 18,  82 => 17,  71 => 15,  67 => 14,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administrateur/modification_des_informations_offres.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\administrateur\\modification_des_informations_offres.html.twig");
    }
}
