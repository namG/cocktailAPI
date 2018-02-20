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
        $__internal_8ea22cd00130b8634a362bfd41a12a47b900b0305836398ee2d36f40cbbc047d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea22cd00130b8634a362bfd41a12a47b900b0305836398ee2d36f40cbbc047d->enter($__internal_8ea22cd00130b8634a362bfd41a12a47b900b0305836398ee2d36f40cbbc047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_f4a960b860b93f2cbde7f3ad5249af4a1f52604d370306f6cd49c6db400630bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a960b860b93f2cbde7f3ad5249af4a1f52604d370306f6cd49c6db400630bf->enter($__internal_f4a960b860b93f2cbde7f3ad5249af4a1f52604d370306f6cd49c6db400630bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ea22cd00130b8634a362bfd41a12a47b900b0305836398ee2d36f40cbbc047d->leave($__internal_8ea22cd00130b8634a362bfd41a12a47b900b0305836398ee2d36f40cbbc047d_prof);

        
        $__internal_f4a960b860b93f2cbde7f3ad5249af4a1f52604d370306f6cd49c6db400630bf->leave($__internal_f4a960b860b93f2cbde7f3ad5249af4a1f52604d370306f6cd49c6db400630bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20becc9393bd1e5a5ab079300863964ea2343d4ac2cd3ed23a10383823a52ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20becc9393bd1e5a5ab079300863964ea2343d4ac2cd3ed23a10383823a52ff3->enter($__internal_20becc9393bd1e5a5ab079300863964ea2343d4ac2cd3ed23a10383823a52ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b6035337e9b61c8cd2bbcee3d5d8113f352a27de69b0e19138d896e0ddc6961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6035337e9b61c8cd2bbcee3d5d8113f352a27de69b0e19138d896e0ddc6961->enter($__internal_7b6035337e9b61c8cd2bbcee3d5d8113f352a27de69b0e19138d896e0ddc6961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b6035337e9b61c8cd2bbcee3d5d8113f352a27de69b0e19138d896e0ddc6961->leave($__internal_7b6035337e9b61c8cd2bbcee3d5d8113f352a27de69b0e19138d896e0ddc6961_prof);

        
        $__internal_20becc9393bd1e5a5ab079300863964ea2343d4ac2cd3ed23a10383823a52ff3->leave($__internal_20becc9393bd1e5a5ab079300863964ea2343d4ac2cd3ed23a10383823a52ff3_prof);

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
