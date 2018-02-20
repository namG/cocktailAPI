<?php

/* base.html.twig */
class __TwigTemplate_7131e8cc1616b114a4c8b1ca94d59192c38d0ddc533142ef9506fadcd143ba7a extends Twig_Template
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
        $__internal_5511bcb16abeed8c9272e5d2fdd01f426df38c09e207a1bfbfec809a29523586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5511bcb16abeed8c9272e5d2fdd01f426df38c09e207a1bfbfec809a29523586->enter($__internal_5511bcb16abeed8c9272e5d2fdd01f426df38c09e207a1bfbfec809a29523586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f1c79f87d56835dfe6725c3775e96830ad7327d7bbf827d2af8f9a6c24fc37f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c79f87d56835dfe6725c3775e96830ad7327d7bbf827d2af8f9a6c24fc37f3->enter($__internal_f1c79f87d56835dfe6725c3775e96830ad7327d7bbf827d2af8f9a6c24fc37f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_5511bcb16abeed8c9272e5d2fdd01f426df38c09e207a1bfbfec809a29523586->leave($__internal_5511bcb16abeed8c9272e5d2fdd01f426df38c09e207a1bfbfec809a29523586_prof);

        
        $__internal_f1c79f87d56835dfe6725c3775e96830ad7327d7bbf827d2af8f9a6c24fc37f3->leave($__internal_f1c79f87d56835dfe6725c3775e96830ad7327d7bbf827d2af8f9a6c24fc37f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f023a5d9dd6040d729d88f88208a7f1d1dd0e9a92358d07ad9a90853e14ae851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f023a5d9dd6040d729d88f88208a7f1d1dd0e9a92358d07ad9a90853e14ae851->enter($__internal_f023a5d9dd6040d729d88f88208a7f1d1dd0e9a92358d07ad9a90853e14ae851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01dd9691afee554aaadfc4eeb6e16db8eb825b0c95770ed1e92426e1ffc044fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01dd9691afee554aaadfc4eeb6e16db8eb825b0c95770ed1e92426e1ffc044fc->enter($__internal_01dd9691afee554aaadfc4eeb6e16db8eb825b0c95770ed1e92426e1ffc044fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_01dd9691afee554aaadfc4eeb6e16db8eb825b0c95770ed1e92426e1ffc044fc->leave($__internal_01dd9691afee554aaadfc4eeb6e16db8eb825b0c95770ed1e92426e1ffc044fc_prof);

        
        $__internal_f023a5d9dd6040d729d88f88208a7f1d1dd0e9a92358d07ad9a90853e14ae851->leave($__internal_f023a5d9dd6040d729d88f88208a7f1d1dd0e9a92358d07ad9a90853e14ae851_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f1f7345c4e145f47cb7e6ca3b5d4c7114c2e78299851e89c96b974f192ce134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1f7345c4e145f47cb7e6ca3b5d4c7114c2e78299851e89c96b974f192ce134->enter($__internal_5f1f7345c4e145f47cb7e6ca3b5d4c7114c2e78299851e89c96b974f192ce134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4b502aa13d1bf45d2a84abbabb97b928f54d7929ac4ec4dfb782648950beac70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b502aa13d1bf45d2a84abbabb97b928f54d7929ac4ec4dfb782648950beac70->enter($__internal_4b502aa13d1bf45d2a84abbabb97b928f54d7929ac4ec4dfb782648950beac70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4b502aa13d1bf45d2a84abbabb97b928f54d7929ac4ec4dfb782648950beac70->leave($__internal_4b502aa13d1bf45d2a84abbabb97b928f54d7929ac4ec4dfb782648950beac70_prof);

        
        $__internal_5f1f7345c4e145f47cb7e6ca3b5d4c7114c2e78299851e89c96b974f192ce134->leave($__internal_5f1f7345c4e145f47cb7e6ca3b5d4c7114c2e78299851e89c96b974f192ce134_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f232e7254878c4be2013ba9166a5f782fe1c6c19365c741575aae2bcac0d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f232e7254878c4be2013ba9166a5f782fe1c6c19365c741575aae2bcac0d00->enter($__internal_40f232e7254878c4be2013ba9166a5f782fe1c6c19365c741575aae2bcac0d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d8748c60db369012140ee74ee8cadfd093ef93f4d8f14be7a18ff87f9513543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8748c60db369012140ee74ee8cadfd093ef93f4d8f14be7a18ff87f9513543->enter($__internal_9d8748c60db369012140ee74ee8cadfd093ef93f4d8f14be7a18ff87f9513543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d8748c60db369012140ee74ee8cadfd093ef93f4d8f14be7a18ff87f9513543->leave($__internal_9d8748c60db369012140ee74ee8cadfd093ef93f4d8f14be7a18ff87f9513543_prof);

        
        $__internal_40f232e7254878c4be2013ba9166a5f782fe1c6c19365c741575aae2bcac0d00->leave($__internal_40f232e7254878c4be2013ba9166a5f782fe1c6c19365c741575aae2bcac0d00_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4aa8652a05435a5b61b9ed7f26541f9e68ae97226037e4d448378f7d4a278fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4aa8652a05435a5b61b9ed7f26541f9e68ae97226037e4d448378f7d4a278fa->enter($__internal_b4aa8652a05435a5b61b9ed7f26541f9e68ae97226037e4d448378f7d4a278fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38b418a5567c579adec5b968e380b6e59b2d6556182bb4242e2a6dc25cfbc467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b418a5567c579adec5b968e380b6e59b2d6556182bb4242e2a6dc25cfbc467->enter($__internal_38b418a5567c579adec5b968e380b6e59b2d6556182bb4242e2a6dc25cfbc467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38b418a5567c579adec5b968e380b6e59b2d6556182bb4242e2a6dc25cfbc467->leave($__internal_38b418a5567c579adec5b968e380b6e59b2d6556182bb4242e2a6dc25cfbc467_prof);

        
        $__internal_b4aa8652a05435a5b61b9ed7f26541f9e68ae97226037e4d448378f7d4a278fa->leave($__internal_b4aa8652a05435a5b61b9ed7f26541f9e68ae97226037e4d448378f7d4a278fa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/nam/Desktop/code/cocktailAPI/my-project/templates/base.html.twig");
    }
}
