<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_aa0ddaab632d6efeacd823d85caa30f5e2afc7e19c5e6280b4327ddf3fb3ccee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ce0df978da730b138df2098e03731efa3d2a243cd1b58708d681c6fd9a6df86 = $this->env->getExtension("native_profiler");
        $__internal_7ce0df978da730b138df2098e03731efa3d2a243cd1b58708d681c6fd9a6df86->enter($__internal_7ce0df978da730b138df2098e03731efa3d2a243cd1b58708d681c6fd9a6df86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ce0df978da730b138df2098e03731efa3d2a243cd1b58708d681c6fd9a6df86->leave($__internal_7ce0df978da730b138df2098e03731efa3d2a243cd1b58708d681c6fd9a6df86_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_770d9c3ea7b78d16cb5b052f0731bfef6a6f5453d51f8b1b0f0e0835690517e0 = $this->env->getExtension("native_profiler");
        $__internal_770d9c3ea7b78d16cb5b052f0731bfef6a6f5453d51f8b1b0f0e0835690517e0->enter($__internal_770d9c3ea7b78d16cb5b052f0731bfef6a6f5453d51f8b1b0f0e0835690517e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_770d9c3ea7b78d16cb5b052f0731bfef6a6f5453d51f8b1b0f0e0835690517e0->leave($__internal_770d9c3ea7b78d16cb5b052f0731bfef6a6f5453d51f8b1b0f0e0835690517e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
