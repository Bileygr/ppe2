<?php

/* @Framework/Form/form_help.html.php */
class __TwigTemplate_3121248b17784d0d4cd44da8c31e9f47b0daf625d58c87f33fe9a4f02d915c92 extends Twig_Template
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
        echo "<?php if (!empty(\$help)): ?>
    <?php \$help_attr['class'] = isset(\$help_attr['class']) ? trim(\$help_attr['class'].' help-text') : 'help-text'; ?>
    <p id=\"<?php echo \$view->escape(\$id); ?>_help\" <?php echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$help_attr)); ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$help, array(), \$translation_domain) : \$help); ?></p>
<?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_help.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_help.html.php", "C:\\wamp64\\www\\ppe2\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_help.html.php");
    }
}
