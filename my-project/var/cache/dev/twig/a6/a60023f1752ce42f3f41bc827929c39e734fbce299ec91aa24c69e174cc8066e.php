<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2b0ca155660c7f9727796fc68e4c6951a8af132f635ca1b874cae5eeefcee5a9 extends Twig_Template
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
        $__internal_6c87abb2c8450d3f0e9653a77d2139b4960f71866f7a239ddd739b4594665547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c87abb2c8450d3f0e9653a77d2139b4960f71866f7a239ddd739b4594665547->enter($__internal_6c87abb2c8450d3f0e9653a77d2139b4960f71866f7a239ddd739b4594665547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ca05889fee5b7310f038e66c131b1a92e7d023f1eb35ebc69b7bfd9a909e7e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca05889fee5b7310f038e66c131b1a92e7d023f1eb35ebc69b7bfd9a909e7e0e->enter($__internal_ca05889fee5b7310f038e66c131b1a92e7d023f1eb35ebc69b7bfd9a909e7e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c87abb2c8450d3f0e9653a77d2139b4960f71866f7a239ddd739b4594665547->leave($__internal_6c87abb2c8450d3f0e9653a77d2139b4960f71866f7a239ddd739b4594665547_prof);

        
        $__internal_ca05889fee5b7310f038e66c131b1a92e7d023f1eb35ebc69b7bfd9a909e7e0e->leave($__internal_ca05889fee5b7310f038e66c131b1a92e7d023f1eb35ebc69b7bfd9a909e7e0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d7ae4f4289f7c329fc51708a86c850552f52402c7d85caf6eff691aaea07f846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ae4f4289f7c329fc51708a86c850552f52402c7d85caf6eff691aaea07f846->enter($__internal_d7ae4f4289f7c329fc51708a86c850552f52402c7d85caf6eff691aaea07f846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_841572b7004f8dbce457e155e88ff678116442dcd8f4992b760f3b7f35e21ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841572b7004f8dbce457e155e88ff678116442dcd8f4992b760f3b7f35e21ce0->enter($__internal_841572b7004f8dbce457e155e88ff678116442dcd8f4992b760f3b7f35e21ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_841572b7004f8dbce457e155e88ff678116442dcd8f4992b760f3b7f35e21ce0->leave($__internal_841572b7004f8dbce457e155e88ff678116442dcd8f4992b760f3b7f35e21ce0_prof);

        
        $__internal_d7ae4f4289f7c329fc51708a86c850552f52402c7d85caf6eff691aaea07f846->leave($__internal_d7ae4f4289f7c329fc51708a86c850552f52402c7d85caf6eff691aaea07f846_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e312ecfdc3ab19cf219f51814fc02c7a3f3b0e640375eec02513d9e18b52dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e312ecfdc3ab19cf219f51814fc02c7a3f3b0e640375eec02513d9e18b52dff->enter($__internal_8e312ecfdc3ab19cf219f51814fc02c7a3f3b0e640375eec02513d9e18b52dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f7b4b1d081e8a562ca0aef676005f0563fcb593252b7c21c7f8328fd0cfd320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7b4b1d081e8a562ca0aef676005f0563fcb593252b7c21c7f8328fd0cfd320->enter($__internal_0f7b4b1d081e8a562ca0aef676005f0563fcb593252b7c21c7f8328fd0cfd320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f7b4b1d081e8a562ca0aef676005f0563fcb593252b7c21c7f8328fd0cfd320->leave($__internal_0f7b4b1d081e8a562ca0aef676005f0563fcb593252b7c21c7f8328fd0cfd320_prof);

        
        $__internal_8e312ecfdc3ab19cf219f51814fc02c7a3f3b0e640375eec02513d9e18b52dff->leave($__internal_8e312ecfdc3ab19cf219f51814fc02c7a3f3b0e640375eec02513d9e18b52dff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3263a68f15c55ed935ae2b39e11140d52dce072ace723768efba0ed5b0a07b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3263a68f15c55ed935ae2b39e11140d52dce072ace723768efba0ed5b0a07b84->enter($__internal_3263a68f15c55ed935ae2b39e11140d52dce072ace723768efba0ed5b0a07b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_22ac3b9deaac7d68ff714d346672567461148d00f660f8cbaa1f4f819a5b2a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ac3b9deaac7d68ff714d346672567461148d00f660f8cbaa1f4f819a5b2a08->enter($__internal_22ac3b9deaac7d68ff714d346672567461148d00f660f8cbaa1f4f819a5b2a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_22ac3b9deaac7d68ff714d346672567461148d00f660f8cbaa1f4f819a5b2a08->leave($__internal_22ac3b9deaac7d68ff714d346672567461148d00f660f8cbaa1f4f819a5b2a08_prof);

        
        $__internal_3263a68f15c55ed935ae2b39e11140d52dce072ace723768efba0ed5b0a07b84->leave($__internal_3263a68f15c55ed935ae2b39e11140d52dce072ace723768efba0ed5b0a07b84_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/nam/Desktop/code/cocktailAPI/my-project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
