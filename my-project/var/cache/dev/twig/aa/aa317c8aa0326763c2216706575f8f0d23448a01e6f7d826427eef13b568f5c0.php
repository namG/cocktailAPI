<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58efa056d0f066525a1d6a946adc7ad1f80036e5a0539a8d991b0f915682d6dd extends Twig_Template
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
        $__internal_9aec91524022afdb381d447df9d6c032fb3bfa465dc19764777a247ed00ffa1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aec91524022afdb381d447df9d6c032fb3bfa465dc19764777a247ed00ffa1c->enter($__internal_9aec91524022afdb381d447df9d6c032fb3bfa465dc19764777a247ed00ffa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b817fec6f8ada8c41c30ef65564feadfffd1334f40e9b96fdd6a1211aa7378a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b817fec6f8ada8c41c30ef65564feadfffd1334f40e9b96fdd6a1211aa7378a2->enter($__internal_b817fec6f8ada8c41c30ef65564feadfffd1334f40e9b96fdd6a1211aa7378a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aec91524022afdb381d447df9d6c032fb3bfa465dc19764777a247ed00ffa1c->leave($__internal_9aec91524022afdb381d447df9d6c032fb3bfa465dc19764777a247ed00ffa1c_prof);

        
        $__internal_b817fec6f8ada8c41c30ef65564feadfffd1334f40e9b96fdd6a1211aa7378a2->leave($__internal_b817fec6f8ada8c41c30ef65564feadfffd1334f40e9b96fdd6a1211aa7378a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7792c96fff5199797e34fb6ffc2c0510d16bf1ae95565ec3fd1e90d6a470ae52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7792c96fff5199797e34fb6ffc2c0510d16bf1ae95565ec3fd1e90d6a470ae52->enter($__internal_7792c96fff5199797e34fb6ffc2c0510d16bf1ae95565ec3fd1e90d6a470ae52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1ba7e023d15a52818cda0c8aabd22e6e585a9c4e1324b8695e77423f63932568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba7e023d15a52818cda0c8aabd22e6e585a9c4e1324b8695e77423f63932568->enter($__internal_1ba7e023d15a52818cda0c8aabd22e6e585a9c4e1324b8695e77423f63932568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1ba7e023d15a52818cda0c8aabd22e6e585a9c4e1324b8695e77423f63932568->leave($__internal_1ba7e023d15a52818cda0c8aabd22e6e585a9c4e1324b8695e77423f63932568_prof);

        
        $__internal_7792c96fff5199797e34fb6ffc2c0510d16bf1ae95565ec3fd1e90d6a470ae52->leave($__internal_7792c96fff5199797e34fb6ffc2c0510d16bf1ae95565ec3fd1e90d6a470ae52_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23ef7317be94697479cbb3b0949fe23472a0bcef771f0978de89a74aad9cea87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ef7317be94697479cbb3b0949fe23472a0bcef771f0978de89a74aad9cea87->enter($__internal_23ef7317be94697479cbb3b0949fe23472a0bcef771f0978de89a74aad9cea87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e431d6c976a99f357f82a0746228f387a3f4a99445419c9aa045fd10945d4753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e431d6c976a99f357f82a0746228f387a3f4a99445419c9aa045fd10945d4753->enter($__internal_e431d6c976a99f357f82a0746228f387a3f4a99445419c9aa045fd10945d4753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e431d6c976a99f357f82a0746228f387a3f4a99445419c9aa045fd10945d4753->leave($__internal_e431d6c976a99f357f82a0746228f387a3f4a99445419c9aa045fd10945d4753_prof);

        
        $__internal_23ef7317be94697479cbb3b0949fe23472a0bcef771f0978de89a74aad9cea87->leave($__internal_23ef7317be94697479cbb3b0949fe23472a0bcef771f0978de89a74aad9cea87_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca50234facc2ff7d872f3ede63be3839ac9e6e0456936d947fa6e5bc1eb71623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca50234facc2ff7d872f3ede63be3839ac9e6e0456936d947fa6e5bc1eb71623->enter($__internal_ca50234facc2ff7d872f3ede63be3839ac9e6e0456936d947fa6e5bc1eb71623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9aa5ae08c5013801cc75b427f69cf3990acc11e03a95cf21f30d2cce90a050ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa5ae08c5013801cc75b427f69cf3990acc11e03a95cf21f30d2cce90a050ce->enter($__internal_9aa5ae08c5013801cc75b427f69cf3990acc11e03a95cf21f30d2cce90a050ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_9aa5ae08c5013801cc75b427f69cf3990acc11e03a95cf21f30d2cce90a050ce->leave($__internal_9aa5ae08c5013801cc75b427f69cf3990acc11e03a95cf21f30d2cce90a050ce_prof);

        
        $__internal_ca50234facc2ff7d872f3ede63be3839ac9e6e0456936d947fa6e5bc1eb71623->leave($__internal_ca50234facc2ff7d872f3ede63be3839ac9e6e0456936d947fa6e5bc1eb71623_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/nam/Desktop/code/cocktailAPI/my-project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
