<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8c4522326ccca99d74112ce7d1e69da4e06fe81a47f51d8e608e4cb9709faf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb4b22b36bc3e3b9e1b21bb220772759abb8d54900ef1fd59d48742b679f8a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4b22b36bc3e3b9e1b21bb220772759abb8d54900ef1fd59d48742b679f8a6e->enter($__internal_bb4b22b36bc3e3b9e1b21bb220772759abb8d54900ef1fd59d48742b679f8a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ecf828b515807ea5b83085c98c617711d3e2b1bf3e5ce766e787c0819f563cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf828b515807ea5b83085c98c617711d3e2b1bf3e5ce766e787c0819f563cd9->enter($__internal_ecf828b515807ea5b83085c98c617711d3e2b1bf3e5ce766e787c0819f563cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4b22b36bc3e3b9e1b21bb220772759abb8d54900ef1fd59d48742b679f8a6e->leave($__internal_bb4b22b36bc3e3b9e1b21bb220772759abb8d54900ef1fd59d48742b679f8a6e_prof);

        
        $__internal_ecf828b515807ea5b83085c98c617711d3e2b1bf3e5ce766e787c0819f563cd9->leave($__internal_ecf828b515807ea5b83085c98c617711d3e2b1bf3e5ce766e787c0819f563cd9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c48afb46109b3386805a580e341afcbba693349646808399c9c163cf2cd01ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c48afb46109b3386805a580e341afcbba693349646808399c9c163cf2cd01ba->enter($__internal_1c48afb46109b3386805a580e341afcbba693349646808399c9c163cf2cd01ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4be8c60a014dd400d12c493849adcf76ab331be4080b4614b78d156a619a17fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be8c60a014dd400d12c493849adcf76ab331be4080b4614b78d156a619a17fb->enter($__internal_4be8c60a014dd400d12c493849adcf76ab331be4080b4614b78d156a619a17fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4be8c60a014dd400d12c493849adcf76ab331be4080b4614b78d156a619a17fb->leave($__internal_4be8c60a014dd400d12c493849adcf76ab331be4080b4614b78d156a619a17fb_prof);

        
        $__internal_1c48afb46109b3386805a580e341afcbba693349646808399c9c163cf2cd01ba->leave($__internal_1c48afb46109b3386805a580e341afcbba693349646808399c9c163cf2cd01ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/nam/Desktop/code/cocktailAPI/my-project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
