<?php

/* :pricequantityprintsize:edit.html.twig */
class __TwigTemplate_f6b67584780d622d2893f4dfc0881945925b2f398632a7fcd552e1712c18278f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pricequantityprintsize:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2cd6cc9926debf4b8c9e6b97f1c7ef4009d2b4a0dc13a1ee9def926f3c2b60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cd6cc9926debf4b8c9e6b97f1c7ef4009d2b4a0dc13a1ee9def926f3c2b60f->enter($__internal_d2cd6cc9926debf4b8c9e6b97f1c7ef4009d2b4a0dc13a1ee9def926f3c2b60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pricequantityprintsize:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2cd6cc9926debf4b8c9e6b97f1c7ef4009d2b4a0dc13a1ee9def926f3c2b60f->leave($__internal_d2cd6cc9926debf4b8c9e6b97f1c7ef4009d2b4a0dc13a1ee9def926f3c2b60f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a088ddbb92942818adb263061411d8f3c7b5518e5d0d4243d8f83cc5bdfbffcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a088ddbb92942818adb263061411d8f3c7b5518e5d0d4243d8f83cc5bdfbffcb->enter($__internal_a088ddbb92942818adb263061411d8f3c7b5518e5d0d4243d8f83cc5bdfbffcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pricequantityprintsize edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("price_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a088ddbb92942818adb263061411d8f3c7b5518e5d0d4243d8f83cc5bdfbffcb->leave($__internal_a088ddbb92942818adb263061411d8f3c7b5518e5d0d4243d8f83cc5bdfbffcb_prof);

    }

    public function getTemplateName()
    {
        return ":pricequantityprintsize:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Pricequantityprintsize edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('price_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pricequantityprintsize:edit.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/pricequantityprintsize/edit.html.twig");
    }
}
