<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b5f7a90f928084e87fa8521bd2146a4a955f93c86fc363618f40f032534b6fc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c55859bff3918c8b972fe9b74591c0e5c08a91f21feb8baa36bf1f522b41c148 = $this->env->getExtension("native_profiler");
        $__internal_c55859bff3918c8b972fe9b74591c0e5c08a91f21feb8baa36bf1f522b41c148->enter($__internal_c55859bff3918c8b972fe9b74591c0e5c08a91f21feb8baa36bf1f522b41c148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c55859bff3918c8b972fe9b74591c0e5c08a91f21feb8baa36bf1f522b41c148->leave($__internal_c55859bff3918c8b972fe9b74591c0e5c08a91f21feb8baa36bf1f522b41c148_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe79c95450e2aa8d1707164f5b918a7d31d22293fc306a80afeed71b2e6e8722 = $this->env->getExtension("native_profiler");
        $__internal_fe79c95450e2aa8d1707164f5b918a7d31d22293fc306a80afeed71b2e6e8722->enter($__internal_fe79c95450e2aa8d1707164f5b918a7d31d22293fc306a80afeed71b2e6e8722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_fe79c95450e2aa8d1707164f5b918a7d31d22293fc306a80afeed71b2e6e8722->leave($__internal_fe79c95450e2aa8d1707164f5b918a7d31d22293fc306a80afeed71b2e6e8722_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
