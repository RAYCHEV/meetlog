<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1763431342fb7960e0e895df617b63e2ba89ac4bb6f88925401374dc9275d07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1763431342fb7960e0e895df617b63e2ba89ac4bb6f88925401374dc9275d07b->enter($__internal_1763431342fb7960e0e895df617b63e2ba89ac4bb6f88925401374dc9275d07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cfc7e188dd5abede5fe691671f453635ce7baa91c386df2b51cc7d7a15051a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc7e188dd5abede5fe691671f453635ce7baa91c386df2b51cc7d7a15051a96->enter($__internal_cfc7e188dd5abede5fe691671f453635ce7baa91c386df2b51cc7d7a15051a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1763431342fb7960e0e895df617b63e2ba89ac4bb6f88925401374dc9275d07b->leave($__internal_1763431342fb7960e0e895df617b63e2ba89ac4bb6f88925401374dc9275d07b_prof);

        
        $__internal_cfc7e188dd5abede5fe691671f453635ce7baa91c386df2b51cc7d7a15051a96->leave($__internal_cfc7e188dd5abede5fe691671f453635ce7baa91c386df2b51cc7d7a15051a96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_772e6e243377862bdd5518629c2a61ad9db80eac0a538942e15f3346ec9f0736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772e6e243377862bdd5518629c2a61ad9db80eac0a538942e15f3346ec9f0736->enter($__internal_772e6e243377862bdd5518629c2a61ad9db80eac0a538942e15f3346ec9f0736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30acc99c7da55d7085d97f562dfe97b1fbd955d41f08de7674f083ec1c5bdd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30acc99c7da55d7085d97f562dfe97b1fbd955d41f08de7674f083ec1c5bdd3e->enter($__internal_30acc99c7da55d7085d97f562dfe97b1fbd955d41f08de7674f083ec1c5bdd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_30acc99c7da55d7085d97f562dfe97b1fbd955d41f08de7674f083ec1c5bdd3e->leave($__internal_30acc99c7da55d7085d97f562dfe97b1fbd955d41f08de7674f083ec1c5bdd3e_prof);

        
        $__internal_772e6e243377862bdd5518629c2a61ad9db80eac0a538942e15f3346ec9f0736->leave($__internal_772e6e243377862bdd5518629c2a61ad9db80eac0a538942e15f3346ec9f0736_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3f40604b1e4d6eafbd5cae5b24ec462c0aedccbc39b5b9d6297bf7bd3fbf841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f40604b1e4d6eafbd5cae5b24ec462c0aedccbc39b5b9d6297bf7bd3fbf841->enter($__internal_e3f40604b1e4d6eafbd5cae5b24ec462c0aedccbc39b5b9d6297bf7bd3fbf841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63a352d6a487167673521b3e5ea5dfc4531ce3099ed21e08492eb673ca03c4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a352d6a487167673521b3e5ea5dfc4531ce3099ed21e08492eb673ca03c4c1->enter($__internal_63a352d6a487167673521b3e5ea5dfc4531ce3099ed21e08492eb673ca03c4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_63a352d6a487167673521b3e5ea5dfc4531ce3099ed21e08492eb673ca03c4c1->leave($__internal_63a352d6a487167673521b3e5ea5dfc4531ce3099ed21e08492eb673ca03c4c1_prof);

        
        $__internal_e3f40604b1e4d6eafbd5cae5b24ec462c0aedccbc39b5b9d6297bf7bd3fbf841->leave($__internal_e3f40604b1e4d6eafbd5cae5b24ec462c0aedccbc39b5b9d6297bf7bd3fbf841_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04aac27b8dd54b7231488ce217698b545b178391fc18cb02d5f86e91d24fe440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04aac27b8dd54b7231488ce217698b545b178391fc18cb02d5f86e91d24fe440->enter($__internal_04aac27b8dd54b7231488ce217698b545b178391fc18cb02d5f86e91d24fe440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1787bdfba9a7b3ac64c317131a270e377a62fdf79ccd1f0c176added03535551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1787bdfba9a7b3ac64c317131a270e377a62fdf79ccd1f0c176added03535551->enter($__internal_1787bdfba9a7b3ac64c317131a270e377a62fdf79ccd1f0c176added03535551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1787bdfba9a7b3ac64c317131a270e377a62fdf79ccd1f0c176added03535551->leave($__internal_1787bdfba9a7b3ac64c317131a270e377a62fdf79ccd1f0c176added03535551_prof);

        
        $__internal_04aac27b8dd54b7231488ce217698b545b178391fc18cb02d5f86e91d24fe440->leave($__internal_04aac27b8dd54b7231488ce217698b545b178391fc18cb02d5f86e91d24fe440_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/gru/nik-symfony-projects/meetlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
