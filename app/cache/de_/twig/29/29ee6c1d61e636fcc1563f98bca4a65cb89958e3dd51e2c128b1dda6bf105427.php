<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_abc09bb0a0ac3df2da8844d7aff8ecd10307e094fa9318b27654be16283647c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0fba89e5189e1d2ecd51d6843134fbf4192abe928049a2472adf1ff4d8457a10 = $this->env->getExtension("native_profiler");
        $__internal_0fba89e5189e1d2ecd51d6843134fbf4192abe928049a2472adf1ff4d8457a10->enter($__internal_0fba89e5189e1d2ecd51d6843134fbf4192abe928049a2472adf1ff4d8457a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fba89e5189e1d2ecd51d6843134fbf4192abe928049a2472adf1ff4d8457a10->leave($__internal_0fba89e5189e1d2ecd51d6843134fbf4192abe928049a2472adf1ff4d8457a10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60467e832a1b8f289364db9b037ad5361e569d1768eff4af1bf1f73c4120977d = $this->env->getExtension("native_profiler");
        $__internal_60467e832a1b8f289364db9b037ad5361e569d1768eff4af1bf1f73c4120977d->enter($__internal_60467e832a1b8f289364db9b037ad5361e569d1768eff4af1bf1f73c4120977d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_60467e832a1b8f289364db9b037ad5361e569d1768eff4af1bf1f73c4120977d->leave($__internal_60467e832a1b8f289364db9b037ad5361e569d1768eff4af1bf1f73c4120977d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
