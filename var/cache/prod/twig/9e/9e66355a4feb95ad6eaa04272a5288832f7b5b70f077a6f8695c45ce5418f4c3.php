<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_199ed4c9f1e29927a336ee6daa76b7a93a37963cf9059bb56adb302ba1a67c73 extends Twig_Template
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
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\ppe2\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
