<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_68ed798e04597668fe2af49a6b6f0b0ebd2bcbe4b147b63c05a4052411204c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6c3df7f33b4beb07e8d26449b473ae6eaa1b9c3d0019091d8057e36300aa273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c3df7f33b4beb07e8d26449b473ae6eaa1b9c3d0019091d8057e36300aa273->enter($__internal_a6c3df7f33b4beb07e8d26449b473ae6eaa1b9c3d0019091d8057e36300aa273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a6c3df7f33b4beb07e8d26449b473ae6eaa1b9c3d0019091d8057e36300aa273->leave($__internal_a6c3df7f33b4beb07e8d26449b473ae6eaa1b9c3d0019091d8057e36300aa273_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
