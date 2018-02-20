<?php

/* index.html.twig */
class __TwigTemplate_86c8908914c3133b8d8ea75d9b4d671c91151ddaee8f5f20b5380e9dd9dafac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_644474f84dd28c71c8a2f7ddad0325bb8d95b6d1161589f020e5cd81a37e429e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644474f84dd28c71c8a2f7ddad0325bb8d95b6d1161589f020e5cd81a37e429e->enter($__internal_644474f84dd28c71c8a2f7ddad0325bb8d95b6d1161589f020e5cd81a37e429e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_462c4184bf3d3c463ad51c60f5879500b8fe9e67530385adf81979cef677f474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462c4184bf3d3c463ad51c60f5879500b8fe9e67530385adf81979cef677f474->enter($__internal_462c4184bf3d3c463ad51c60f5879500b8fe9e67530385adf81979cef677f474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644474f84dd28c71c8a2f7ddad0325bb8d95b6d1161589f020e5cd81a37e429e->leave($__internal_644474f84dd28c71c8a2f7ddad0325bb8d95b6d1161589f020e5cd81a37e429e_prof);

        
        $__internal_462c4184bf3d3c463ad51c60f5879500b8fe9e67530385adf81979cef677f474->leave($__internal_462c4184bf3d3c463ad51c60f5879500b8fe9e67530385adf81979cef677f474_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68c1c7f87acbf7c9b97a1118629c4b6e43f4ec61a7a09f95472621f96f5ee6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c1c7f87acbf7c9b97a1118629c4b6e43f4ec61a7a09f95472621f96f5ee6a5->enter($__internal_68c1c7f87acbf7c9b97a1118629c4b6e43f4ec61a7a09f95472621f96f5ee6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eef9c432e1c108d3930d4df451d9c07c0821d0081f45c3ba549b28f33e2c6e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef9c432e1c108d3930d4df451d9c07c0821d0081f45c3ba549b28f33e2c6e8c->enter($__internal_eef9c432e1c108d3930d4df451d9c07c0821d0081f45c3ba549b28f33e2c6e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1> Welcome to the crazy cocktail bar!!!!!!</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_eef9c432e1c108d3930d4df451d9c07c0821d0081f45c3ba549b28f33e2c6e8c->leave($__internal_eef9c432e1c108d3930d4df451d9c07c0821d0081f45c3ba549b28f33e2c6e8c_prof);

        
        $__internal_68c1c7f87acbf7c9b97a1118629c4b6e43f4ec61a7a09f95472621f96f5ee6a5->leave($__internal_68c1c7f87acbf7c9b97a1118629c4b6e43f4ec61a7a09f95472621f96f5ee6a5_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1> Welcome to the crazy cocktail bar!!!!!!</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}", "index.html.twig", "/Users/nam/Desktop/code/cocktailAPI/my-project/templates/index.html.twig");
    }
}
