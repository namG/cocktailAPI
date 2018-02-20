<?php

/* form.html.twig */
class __TwigTemplate_a706241f62d57278f01a6e2862fa464dea91aade46c4552831a29569d9dbc823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form.html.twig", 1);
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
        $__internal_f3f2e9b1be552a62162ce0a08458ff7456f6f740afed5624e72fa23bf36f6962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f2e9b1be552a62162ce0a08458ff7456f6f740afed5624e72fa23bf36f6962->enter($__internal_f3f2e9b1be552a62162ce0a08458ff7456f6f740afed5624e72fa23bf36f6962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form.html.twig"));

        $__internal_21cfcdec2911a241448117c3d9aa0b863ecdf3bc9cc5b44ae16218a30996da1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21cfcdec2911a241448117c3d9aa0b863ecdf3bc9cc5b44ae16218a30996da1b->enter($__internal_21cfcdec2911a241448117c3d9aa0b863ecdf3bc9cc5b44ae16218a30996da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3f2e9b1be552a62162ce0a08458ff7456f6f740afed5624e72fa23bf36f6962->leave($__internal_f3f2e9b1be552a62162ce0a08458ff7456f6f740afed5624e72fa23bf36f6962_prof);

        
        $__internal_21cfcdec2911a241448117c3d9aa0b863ecdf3bc9cc5b44ae16218a30996da1b->leave($__internal_21cfcdec2911a241448117c3d9aa0b863ecdf3bc9cc5b44ae16218a30996da1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b91e0fb7757e985881a31fe580b5653d5e41cf28c3b1ec458ec1ef165e6ef83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b91e0fb7757e985881a31fe580b5653d5e41cf28c3b1ec458ec1ef165e6ef83->enter($__internal_6b91e0fb7757e985881a31fe580b5653d5e41cf28c3b1ec458ec1ef165e6ef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93e29f1f780b4d49643f2d9641c0f2260f726e5bb6ac6780bba5a7fffb9ab0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e29f1f780b4d49643f2d9641c0f2260f726e5bb6ac6780bba5a7fffb9ab0b8->enter($__internal_93e29f1f780b4d49643f2d9641c0f2260f726e5bb6ac6780bba5a7fffb9ab0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1> Here's the list of cocktails!!!!!!</h1>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new Twig_Error_Runtime('Variable "response" does not exist.', 7, $this->getSourceContext()); })()), "drinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["drink"]) {
            // line 8
            echo "    <ul>
        <li>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["drink"], "strDrink", array()), "html", null, true);
            echo "

        </li>
        <li>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["drink"], "strDrinkThumb", array()), "html", null, true);
            echo "

        </li>
        <li>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["drink"], "idDrink", array()), "html", null, true);
            echo "
        </li>
    </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "




";
        
        $__internal_93e29f1f780b4d49643f2d9641c0f2260f726e5bb6ac6780bba5a7fffb9ab0b8->leave($__internal_93e29f1f780b4d49643f2d9641c0f2260f726e5bb6ac6780bba5a7fffb9ab0b8_prof);

        
        $__internal_6b91e0fb7757e985881a31fe580b5653d5e41cf28c3b1ec458ec1ef165e6ef83->leave($__internal_6b91e0fb7757e985881a31fe580b5653d5e41cf28c3b1ec458ec1ef165e6ef83_prof);

    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  73 => 15,  67 => 12,  61 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1> Here's the list of cocktails!!!!!!</h1>

{% for drink in response.drinks %}
    <ul>
        <li>{{ drink.strDrink }}

        </li>
        <li>{{ drink.strDrinkThumb }}

        </li>
        <li>{{ drink.idDrink }}
        </li>
    </ul>
    {% endfor %}





{% endblock %}", "form.html.twig", "/Users/nam/Desktop/code/cocktailAPI/my-project/templates/form.html.twig");
    }
}
