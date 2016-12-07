<?php

/* :promotionnal:edit.html.twig */
class __TwigTemplate_7eb10b86643c1b9302718b1eb09b89bcff673a03660cfe0a71c07a311d4bb162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":promotionnal:edit.html.twig", 1);
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
        $__internal_44388b8657b9b5236e0029bea3a241035a03210f6c7b4615cf5df75b41918c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44388b8657b9b5236e0029bea3a241035a03210f6c7b4615cf5df75b41918c8d->enter($__internal_44388b8657b9b5236e0029bea3a241035a03210f6c7b4615cf5df75b41918c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":promotionnal:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44388b8657b9b5236e0029bea3a241035a03210f6c7b4615cf5df75b41918c8d->leave($__internal_44388b8657b9b5236e0029bea3a241035a03210f6c7b4615cf5df75b41918c8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef385e23d7a5ccd6e682f3c835357c1f36c4f9d0dd5dee72bad5dc6c33353818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef385e23d7a5ccd6e682f3c835357c1f36c4f9d0dd5dee72bad5dc6c33353818->enter($__internal_ef385e23d7a5ccd6e682f3c835357c1f36c4f9d0dd5dee72bad5dc6c33353818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Promotionnal edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_index");
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
        
        $__internal_ef385e23d7a5ccd6e682f3c835357c1f36c4f9d0dd5dee72bad5dc6c33353818->leave($__internal_ef385e23d7a5ccd6e682f3c835357c1f36c4f9d0dd5dee72bad5dc6c33353818_prof);

    }

    public function getTemplateName()
    {
        return ":promotionnal:edit.html.twig";
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
    <h1>Promotionnal edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('promo_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":promotionnal:edit.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/promotionnal/edit.html.twig");
    }
}
