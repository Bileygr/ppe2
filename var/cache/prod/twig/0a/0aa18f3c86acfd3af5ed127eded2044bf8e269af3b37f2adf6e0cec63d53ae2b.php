<?php

/* offre/ajout_des_offres.html.twig */
class __TwigTemplate_f62ada7add7fdcc3325714c5cb5fb82420200c520c020c8685b3a816113143f6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "offre/ajout_des_offres.html.twig", 1);
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
        echo "Ajout d'offre";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
\t\t<div class=\"form-row\">
\t\t\t<div class=\"form-group col-md-6\">
\t\t    \t<label>Nom</label>
\t\t    \t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>

\t\t\t<div class=\"form-group col-md-6\">
\t\t    \t<label>Adresse</label>
\t\t    \t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>

\t\t    <div class=\"form-group col-md-6\">
\t\t        <label>Ville</label>
\t\t        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>

\t\t    <div class=\"form-group col-md-6\">
\t\t        <label>Code Postal</label>
\t\t        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "codepostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<label for=\"form_debut_month\" class=\"sr-only\">Début</label>
\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "debut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t\t\t<label for=\"offre_fin\" class=\"sr-only\">Fin</label>
\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "fin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t\t<div class='form-group'>
\t\t    <label for='inputState'>Sélectionner une formation</label>
\t\t    <select class=\"form-control\" id=\"exampleSelect1\" name='formation' value=''>
\t\t        <option selected=\"select\" disabled>Sélectionnez la formation</option>
\t\t        <hr />
\t\t        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 41
            echo "\t\t    \t\t<option id=\"formation\" name=\"formation\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nom", array()), "html", null, true);
            echo "</option>
\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t    </select>
\t\t</div>

\t\t<div class=\"form-group basic-textarea rounded-corners\">
\t\t    <label>Descriptif du poste :</label>
\t\t    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "ajout", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg btn-block")));
        echo "
\t\t<br><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_gestion_offres");
        echo "\" class=\"btn btn-warning btn-block\">Retour</a>
\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "offre/ajout_des_offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  130 => 52,  126 => 51,  120 => 48,  113 => 43,  102 => 41,  98 => 40,  88 => 33,  82 => 30,  74 => 25,  66 => 20,  58 => 15,  50 => 10,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "offre/ajout_des_offres.html.twig", "C:\\wamp64\\www\\ppe2\\templates\\offre\\ajout_des_offres.html.twig");
    }
}
