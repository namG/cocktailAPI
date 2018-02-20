<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_96d2e6e52be9e163f80a3694840aeea9d7b50a8dbb848b35db9887a911267a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d263d178a58941c2d83b0f0e517e60f8dec18004b073d1a3b0904d06a4b3312a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d263d178a58941c2d83b0f0e517e60f8dec18004b073d1a3b0904d06a4b3312a->enter($__internal_d263d178a58941c2d83b0f0e517e60f8dec18004b073d1a3b0904d06a4b3312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4f17782ba7c285dbaf763a76746e8ad1719bc79c0280d93f47d76b6926f1587e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f17782ba7c285dbaf763a76746e8ad1719bc79c0280d93f47d76b6926f1587e->enter($__internal_4f17782ba7c285dbaf763a76746e8ad1719bc79c0280d93f47d76b6926f1587e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d263d178a58941c2d83b0f0e517e60f8dec18004b073d1a3b0904d06a4b3312a->leave($__internal_d263d178a58941c2d83b0f0e517e60f8dec18004b073d1a3b0904d06a4b3312a_prof);

        
        $__internal_4f17782ba7c285dbaf763a76746e8ad1719bc79c0280d93f47d76b6926f1587e->leave($__internal_4f17782ba7c285dbaf763a76746e8ad1719bc79c0280d93f47d76b6926f1587e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3270dc6cf94fa5322f1b7e42a00c624395806df2b3eb17fc4663fb1e44f8bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3270dc6cf94fa5322f1b7e42a00c624395806df2b3eb17fc4663fb1e44f8bd9->enter($__internal_e3270dc6cf94fa5322f1b7e42a00c624395806df2b3eb17fc4663fb1e44f8bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_518e8b3bc94cac731c5c11d049d962b784d3410c8dcbc7039fe55079de487795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518e8b3bc94cac731c5c11d049d962b784d3410c8dcbc7039fe55079de487795->enter($__internal_518e8b3bc94cac731c5c11d049d962b784d3410c8dcbc7039fe55079de487795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_518e8b3bc94cac731c5c11d049d962b784d3410c8dcbc7039fe55079de487795->leave($__internal_518e8b3bc94cac731c5c11d049d962b784d3410c8dcbc7039fe55079de487795_prof);

        
        $__internal_e3270dc6cf94fa5322f1b7e42a00c624395806df2b3eb17fc4663fb1e44f8bd9->leave($__internal_e3270dc6cf94fa5322f1b7e42a00c624395806df2b3eb17fc4663fb1e44f8bd9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fb6f230f3443590303af2d0744ffb9b122ce6b7d8bb93c2727089f590cd2f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb6f230f3443590303af2d0744ffb9b122ce6b7d8bb93c2727089f590cd2f8a->enter($__internal_9fb6f230f3443590303af2d0744ffb9b122ce6b7d8bb93c2727089f590cd2f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcaacb001ac7dcc6421239bb40489bf960853dd791bad0c9194978f464aa9692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcaacb001ac7dcc6421239bb40489bf960853dd791bad0c9194978f464aa9692->enter($__internal_dcaacb001ac7dcc6421239bb40489bf960853dd791bad0c9194978f464aa9692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_dcaacb001ac7dcc6421239bb40489bf960853dd791bad0c9194978f464aa9692->leave($__internal_dcaacb001ac7dcc6421239bb40489bf960853dd791bad0c9194978f464aa9692_prof);

        
        $__internal_9fb6f230f3443590303af2d0744ffb9b122ce6b7d8bb93c2727089f590cd2f8a->leave($__internal_9fb6f230f3443590303af2d0744ffb9b122ce6b7d8bb93c2727089f590cd2f8a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e31a64828a53c861bb89e68af05f0fab813dee60933c9bd5ecc5a5bc3a39579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e31a64828a53c861bb89e68af05f0fab813dee60933c9bd5ecc5a5bc3a39579->enter($__internal_6e31a64828a53c861bb89e68af05f0fab813dee60933c9bd5ecc5a5bc3a39579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48e352f0b80b7ed53892103f23e1dbaf322b0676abc36c78e64d883126dbb55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e352f0b80b7ed53892103f23e1dbaf322b0676abc36c78e64d883126dbb55e->enter($__internal_48e352f0b80b7ed53892103f23e1dbaf322b0676abc36c78e64d883126dbb55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_48e352f0b80b7ed53892103f23e1dbaf322b0676abc36c78e64d883126dbb55e->leave($__internal_48e352f0b80b7ed53892103f23e1dbaf322b0676abc36c78e64d883126dbb55e_prof);

        
        $__internal_6e31a64828a53c861bb89e68af05f0fab813dee60933c9bd5ecc5a5bc3a39579->leave($__internal_6e31a64828a53c861bb89e68af05f0fab813dee60933c9bd5ecc5a5bc3a39579_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/nam/Desktop/code/cocktailAPI/my-project/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
