<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02208773b88ac7a1639647f25c4901818ffc62817ac64c7bd11d3181bc3e3bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02208773b88ac7a1639647f25c4901818ffc62817ac64c7bd11d3181bc3e3bc0->enter($__internal_02208773b88ac7a1639647f25c4901818ffc62817ac64c7bd11d3181bc3e3bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b337ba554da867740d2d55ee94196072383cd756f536a137c21eb255ade7061d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b337ba554da867740d2d55ee94196072383cd756f536a137c21eb255ade7061d->enter($__internal_b337ba554da867740d2d55ee94196072383cd756f536a137c21eb255ade7061d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02208773b88ac7a1639647f25c4901818ffc62817ac64c7bd11d3181bc3e3bc0->leave($__internal_02208773b88ac7a1639647f25c4901818ffc62817ac64c7bd11d3181bc3e3bc0_prof);

        
        $__internal_b337ba554da867740d2d55ee94196072383cd756f536a137c21eb255ade7061d->leave($__internal_b337ba554da867740d2d55ee94196072383cd756f536a137c21eb255ade7061d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2da75f88fc70c361bf53fdb7cef06399a5aa0b4a8e0fcebc612781a5447dab4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da75f88fc70c361bf53fdb7cef06399a5aa0b4a8e0fcebc612781a5447dab4d->enter($__internal_2da75f88fc70c361bf53fdb7cef06399a5aa0b4a8e0fcebc612781a5447dab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e86f6ad45266854ebfcf6ed9cee3f38b9a0480b9f9227554ad92734dbbcff950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86f6ad45266854ebfcf6ed9cee3f38b9a0480b9f9227554ad92734dbbcff950->enter($__internal_e86f6ad45266854ebfcf6ed9cee3f38b9a0480b9f9227554ad92734dbbcff950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e86f6ad45266854ebfcf6ed9cee3f38b9a0480b9f9227554ad92734dbbcff950->leave($__internal_e86f6ad45266854ebfcf6ed9cee3f38b9a0480b9f9227554ad92734dbbcff950_prof);

        
        $__internal_2da75f88fc70c361bf53fdb7cef06399a5aa0b4a8e0fcebc612781a5447dab4d->leave($__internal_2da75f88fc70c361bf53fdb7cef06399a5aa0b4a8e0fcebc612781a5447dab4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3dee591eaf9aab620a8dbf2ee59c04387a661ef699b2bf372a2c1baf38125996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dee591eaf9aab620a8dbf2ee59c04387a661ef699b2bf372a2c1baf38125996->enter($__internal_3dee591eaf9aab620a8dbf2ee59c04387a661ef699b2bf372a2c1baf38125996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_960a9561d801648ecfae42e81c81f8030314ef04a0634a70f92bfa0a0110ca83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960a9561d801648ecfae42e81c81f8030314ef04a0634a70f92bfa0a0110ca83->enter($__internal_960a9561d801648ecfae42e81c81f8030314ef04a0634a70f92bfa0a0110ca83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_960a9561d801648ecfae42e81c81f8030314ef04a0634a70f92bfa0a0110ca83->leave($__internal_960a9561d801648ecfae42e81c81f8030314ef04a0634a70f92bfa0a0110ca83_prof);

        
        $__internal_3dee591eaf9aab620a8dbf2ee59c04387a661ef699b2bf372a2c1baf38125996->leave($__internal_3dee591eaf9aab620a8dbf2ee59c04387a661ef699b2bf372a2c1baf38125996_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe69a8a7055120644298f7a33327fd263f5b8eb87b823afda5f59e5a779c1b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe69a8a7055120644298f7a33327fd263f5b8eb87b823afda5f59e5a779c1b6b->enter($__internal_fe69a8a7055120644298f7a33327fd263f5b8eb87b823afda5f59e5a779c1b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a588e0da8761c94a56931771abe0ed46f7aa92ff0ed92f1514d46702677c962e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a588e0da8761c94a56931771abe0ed46f7aa92ff0ed92f1514d46702677c962e->enter($__internal_a588e0da8761c94a56931771abe0ed46f7aa92ff0ed92f1514d46702677c962e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a588e0da8761c94a56931771abe0ed46f7aa92ff0ed92f1514d46702677c962e->leave($__internal_a588e0da8761c94a56931771abe0ed46f7aa92ff0ed92f1514d46702677c962e_prof);

        
        $__internal_fe69a8a7055120644298f7a33327fd263f5b8eb87b823afda5f59e5a779c1b6b->leave($__internal_fe69a8a7055120644298f7a33327fd263f5b8eb87b823afda5f59e5a779c1b6b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/gru/nik-symfony-projects/meetlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
