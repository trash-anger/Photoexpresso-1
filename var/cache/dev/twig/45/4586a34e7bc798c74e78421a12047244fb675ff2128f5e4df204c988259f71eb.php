<?php

/* @WebProfiler/Icon/forward.svg */
class __TwigTemplate_07d78efa247f6048c7e0c79151e895be21f08eeb848ccaa010cd98f27b95a9bb extends Twig_Template
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
        $__internal_2ac7fd0bd046cc6a085c9500520a254a9cd9e7d25ff0be49d81f26fd2568e979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac7fd0bd046cc6a085c9500520a254a9cd9e7d25ff0be49d81f26fd2568e979->enter($__internal_2ac7fd0bd046cc6a085c9500520a254a9cd9e7d25ff0be49d81f26fd2568e979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/forward.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
    <path style=\"fill:#aaa\" d=\"M23.61,11.07L17.07,4.35A1.2,1.2,0,0,0,15,5.28V9H1.4A1.82,1.82,0,0,0,0,10.82v2.61A1.55,
        1.55,0,0,0,1.4,15H15v3.72a1.2,1.2,0,0,0,2.07.93l6.63-6.72A1.32,1.32,0,0,0,23.61,11.07Z\"/>
</svg>
";
        
        $__internal_2ac7fd0bd046cc6a085c9500520a254a9cd9e7d25ff0be49d81f26fd2568e979->leave($__internal_2ac7fd0bd046cc6a085c9500520a254a9cd9e7d25ff0be49d81f26fd2568e979_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/forward.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
    <path style=\"fill:#aaa\" d=\"M23.61,11.07L17.07,4.35A1.2,1.2,0,0,0,15,5.28V9H1.4A1.82,1.82,0,0,0,0,10.82v2.61A1.55,
        1.55,0,0,0,1.4,15H15v3.72a1.2,1.2,0,0,0,2.07.93l6.63-6.72A1.32,1.32,0,0,0,23.61,11.07Z\"/>
</svg>
", "@WebProfiler/Icon/forward.svg", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Icon/forward.svg");
    }
}
