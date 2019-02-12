<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bfdd359cd219e0ca7b3f32c45f15b56307134da9d18424dcfc81b6fff29a520f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\ppe2\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
