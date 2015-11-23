<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_111403c0357372c01fb02ad707495511a9c7edf51c083eb1d54a17cd63366b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dff1fa6ab58a4feb9b8cbc27a990f68bf5081eab527f4d8099c547618c3edc3a = $this->env->getExtension("native_profiler");
        $__internal_dff1fa6ab58a4feb9b8cbc27a990f68bf5081eab527f4d8099c547618c3edc3a->enter($__internal_dff1fa6ab58a4feb9b8cbc27a990f68bf5081eab527f4d8099c547618c3edc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff1fa6ab58a4feb9b8cbc27a990f68bf5081eab527f4d8099c547618c3edc3a->leave($__internal_dff1fa6ab58a4feb9b8cbc27a990f68bf5081eab527f4d8099c547618c3edc3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_323d8b1679f79ee5e147b4be8f811395905f8edd7d1d39686f5cf1f9952b6a60 = $this->env->getExtension("native_profiler");
        $__internal_323d8b1679f79ee5e147b4be8f811395905f8edd7d1d39686f5cf1f9952b6a60->enter($__internal_323d8b1679f79ee5e147b4be8f811395905f8edd7d1d39686f5cf1f9952b6a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_323d8b1679f79ee5e147b4be8f811395905f8edd7d1d39686f5cf1f9952b6a60->leave($__internal_323d8b1679f79ee5e147b4be8f811395905f8edd7d1d39686f5cf1f9952b6a60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b697d8bcfaa952b392a12be0e341fda9cc9a2e57aa4b2147acf1cf5cd0b97d0 = $this->env->getExtension("native_profiler");
        $__internal_2b697d8bcfaa952b392a12be0e341fda9cc9a2e57aa4b2147acf1cf5cd0b97d0->enter($__internal_2b697d8bcfaa952b392a12be0e341fda9cc9a2e57aa4b2147acf1cf5cd0b97d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2b697d8bcfaa952b392a12be0e341fda9cc9a2e57aa4b2147acf1cf5cd0b97d0->leave($__internal_2b697d8bcfaa952b392a12be0e341fda9cc9a2e57aa4b2147acf1cf5cd0b97d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
