<?php

/* base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae456437b65c134f95a5e426f0f27a3a7d3123d87be4233c493ecc1ff2fdb8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae456437b65c134f95a5e426f0f27a3a7d3123d87be4233c493ecc1ff2fdb8a9->enter($__internal_ae456437b65c134f95a5e426f0f27a3a7d3123d87be4233c493ecc1ff2fdb8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_da3db2199947584aa0d3278b807c862ed3ec6bbd334c7dbe021b1486270e3b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3db2199947584aa0d3278b807c862ed3ec6bbd334c7dbe021b1486270e3b43->enter($__internal_da3db2199947584aa0d3278b807c862ed3ec6bbd334c7dbe021b1486270e3b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ae456437b65c134f95a5e426f0f27a3a7d3123d87be4233c493ecc1ff2fdb8a9->leave($__internal_ae456437b65c134f95a5e426f0f27a3a7d3123d87be4233c493ecc1ff2fdb8a9_prof);

        
        $__internal_da3db2199947584aa0d3278b807c862ed3ec6bbd334c7dbe021b1486270e3b43->leave($__internal_da3db2199947584aa0d3278b807c862ed3ec6bbd334c7dbe021b1486270e3b43_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_130d4b4fa5e925e5c1ea72c430dde7044713af8632f4004c3c1aad7997a54337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130d4b4fa5e925e5c1ea72c430dde7044713af8632f4004c3c1aad7997a54337->enter($__internal_130d4b4fa5e925e5c1ea72c430dde7044713af8632f4004c3c1aad7997a54337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c0617feb0b8ea36106de21390527795cce17f78d017e2bac9f3c83fbbe5d337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0617feb0b8ea36106de21390527795cce17f78d017e2bac9f3c83fbbe5d337->enter($__internal_2c0617feb0b8ea36106de21390527795cce17f78d017e2bac9f3c83fbbe5d337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c0617feb0b8ea36106de21390527795cce17f78d017e2bac9f3c83fbbe5d337->leave($__internal_2c0617feb0b8ea36106de21390527795cce17f78d017e2bac9f3c83fbbe5d337_prof);

        
        $__internal_130d4b4fa5e925e5c1ea72c430dde7044713af8632f4004c3c1aad7997a54337->leave($__internal_130d4b4fa5e925e5c1ea72c430dde7044713af8632f4004c3c1aad7997a54337_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2daab21b8e999f4c18e07f55d79fbc1062f259248310c31a5b5c8cd581e5298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2daab21b8e999f4c18e07f55d79fbc1062f259248310c31a5b5c8cd581e5298->enter($__internal_b2daab21b8e999f4c18e07f55d79fbc1062f259248310c31a5b5c8cd581e5298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6331a006f647a147c02d997db51f6f707852f5fde9e3fc5885b418e24b6ce313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6331a006f647a147c02d997db51f6f707852f5fde9e3fc5885b418e24b6ce313->enter($__internal_6331a006f647a147c02d997db51f6f707852f5fde9e3fc5885b418e24b6ce313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6331a006f647a147c02d997db51f6f707852f5fde9e3fc5885b418e24b6ce313->leave($__internal_6331a006f647a147c02d997db51f6f707852f5fde9e3fc5885b418e24b6ce313_prof);

        
        $__internal_b2daab21b8e999f4c18e07f55d79fbc1062f259248310c31a5b5c8cd581e5298->leave($__internal_b2daab21b8e999f4c18e07f55d79fbc1062f259248310c31a5b5c8cd581e5298_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54de88bdc6f8150be421ddced1d77193a906590ff1a21ba2f833c4aa8a9333b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54de88bdc6f8150be421ddced1d77193a906590ff1a21ba2f833c4aa8a9333b->enter($__internal_d54de88bdc6f8150be421ddced1d77193a906590ff1a21ba2f833c4aa8a9333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32b37b905c93a524da169c95bb954deaa814fffdc46d61a6abccfa4ee2cae1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b37b905c93a524da169c95bb954deaa814fffdc46d61a6abccfa4ee2cae1fa->enter($__internal_32b37b905c93a524da169c95bb954deaa814fffdc46d61a6abccfa4ee2cae1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32b37b905c93a524da169c95bb954deaa814fffdc46d61a6abccfa4ee2cae1fa->leave($__internal_32b37b905c93a524da169c95bb954deaa814fffdc46d61a6abccfa4ee2cae1fa_prof);

        
        $__internal_d54de88bdc6f8150be421ddced1d77193a906590ff1a21ba2f833c4aa8a9333b->leave($__internal_d54de88bdc6f8150be421ddced1d77193a906590ff1a21ba2f833c4aa8a9333b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fb1d53bb9a611b8783e6b4fa7c4ffc1dcb7eddfdb702fbd4f9f528cec54e61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb1d53bb9a611b8783e6b4fa7c4ffc1dcb7eddfdb702fbd4f9f528cec54e61b->enter($__internal_9fb1d53bb9a611b8783e6b4fa7c4ffc1dcb7eddfdb702fbd4f9f528cec54e61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d0f51be87b46f0232ac9dbf2de55bcca76aab1e593255d9e404d10358586c102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f51be87b46f0232ac9dbf2de55bcca76aab1e593255d9e404d10358586c102->enter($__internal_d0f51be87b46f0232ac9dbf2de55bcca76aab1e593255d9e404d10358586c102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d0f51be87b46f0232ac9dbf2de55bcca76aab1e593255d9e404d10358586c102->leave($__internal_d0f51be87b46f0232ac9dbf2de55bcca76aab1e593255d9e404d10358586c102_prof);

        
        $__internal_9fb1d53bb9a611b8783e6b4fa7c4ffc1dcb7eddfdb702fbd4f9f528cec54e61b->leave($__internal_9fb1d53bb9a611b8783e6b4fa7c4ffc1dcb7eddfdb702fbd4f9f528cec54e61b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/gru/nik-symfony-projects/meetlog/app/Resources/views/base.html.twig");
    }
}
