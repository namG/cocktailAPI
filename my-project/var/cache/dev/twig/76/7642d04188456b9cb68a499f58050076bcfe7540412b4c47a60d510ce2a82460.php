<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e0f02a76a09bfe4bf2cf92c20cf699909424920e26d9a9d6d430c521b504bdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f1ce5c4e688996b9ca45e6ce24db415153b29b3a17b8edada1e5fabc213a28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1ce5c4e688996b9ca45e6ce24db415153b29b3a17b8edada1e5fabc213a28e->enter($__internal_6f1ce5c4e688996b9ca45e6ce24db415153b29b3a17b8edada1e5fabc213a28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_775d8efbb9bd29e1dac40526eb73737186bd5d48cdb43fb878354fea7f8123ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775d8efbb9bd29e1dac40526eb73737186bd5d48cdb43fb878354fea7f8123ff->enter($__internal_775d8efbb9bd29e1dac40526eb73737186bd5d48cdb43fb878354fea7f8123ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6f1ce5c4e688996b9ca45e6ce24db415153b29b3a17b8edada1e5fabc213a28e->leave($__internal_6f1ce5c4e688996b9ca45e6ce24db415153b29b3a17b8edada1e5fabc213a28e_prof);

        
        $__internal_775d8efbb9bd29e1dac40526eb73737186bd5d48cdb43fb878354fea7f8123ff->leave($__internal_775d8efbb9bd29e1dac40526eb73737186bd5d48cdb43fb878354fea7f8123ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad6e9321e81c6baee2b49d08a9051549519595a02c68682e5d21cac4750cc724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6e9321e81c6baee2b49d08a9051549519595a02c68682e5d21cac4750cc724->enter($__internal_ad6e9321e81c6baee2b49d08a9051549519595a02c68682e5d21cac4750cc724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb4f7a1781570aa0515a688ba4bcc3a5598ba2fa43034e072c9b38cbc03046de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4f7a1781570aa0515a688ba4bcc3a5598ba2fa43034e072c9b38cbc03046de->enter($__internal_fb4f7a1781570aa0515a688ba4bcc3a5598ba2fa43034e072c9b38cbc03046de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fb4f7a1781570aa0515a688ba4bcc3a5598ba2fa43034e072c9b38cbc03046de->leave($__internal_fb4f7a1781570aa0515a688ba4bcc3a5598ba2fa43034e072c9b38cbc03046de_prof);

        
        $__internal_ad6e9321e81c6baee2b49d08a9051549519595a02c68682e5d21cac4750cc724->leave($__internal_ad6e9321e81c6baee2b49d08a9051549519595a02c68682e5d21cac4750cc724_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_dbc937f22c2b10c1f5d09305c18001f91130fc4f323273e01ad338d843fde788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc937f22c2b10c1f5d09305c18001f91130fc4f323273e01ad338d843fde788->enter($__internal_dbc937f22c2b10c1f5d09305c18001f91130fc4f323273e01ad338d843fde788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a4b9759c555be9d225dbe2a2d6357b01895862c0fb77aaa021173e3672406f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4b9759c555be9d225dbe2a2d6357b01895862c0fb77aaa021173e3672406f1->enter($__internal_1a4b9759c555be9d225dbe2a2d6357b01895862c0fb77aaa021173e3672406f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1a4b9759c555be9d225dbe2a2d6357b01895862c0fb77aaa021173e3672406f1->leave($__internal_1a4b9759c555be9d225dbe2a2d6357b01895862c0fb77aaa021173e3672406f1_prof);

        
        $__internal_dbc937f22c2b10c1f5d09305c18001f91130fc4f323273e01ad338d843fde788->leave($__internal_dbc937f22c2b10c1f5d09305c18001f91130fc4f323273e01ad338d843fde788_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_71fbf2d797e3cb49cc0b455ed7c0b9c8da9b2c332f141f503c0a4e7bf5cf69e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fbf2d797e3cb49cc0b455ed7c0b9c8da9b2c332f141f503c0a4e7bf5cf69e6->enter($__internal_71fbf2d797e3cb49cc0b455ed7c0b9c8da9b2c332f141f503c0a4e7bf5cf69e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73ce2b6b038bf33435cf9dff7d30e57eb5ecfa3842d64730b3c9ccfb2f7f77eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ce2b6b038bf33435cf9dff7d30e57eb5ecfa3842d64730b3c9ccfb2f7f77eb->enter($__internal_73ce2b6b038bf33435cf9dff7d30e57eb5ecfa3842d64730b3c9ccfb2f7f77eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73ce2b6b038bf33435cf9dff7d30e57eb5ecfa3842d64730b3c9ccfb2f7f77eb->leave($__internal_73ce2b6b038bf33435cf9dff7d30e57eb5ecfa3842d64730b3c9ccfb2f7f77eb_prof);

        
        $__internal_71fbf2d797e3cb49cc0b455ed7c0b9c8da9b2c332f141f503c0a4e7bf5cf69e6->leave($__internal_71fbf2d797e3cb49cc0b455ed7c0b9c8da9b2c332f141f503c0a4e7bf5cf69e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/nam/Desktop/code/cocktailAPI/my-project/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
