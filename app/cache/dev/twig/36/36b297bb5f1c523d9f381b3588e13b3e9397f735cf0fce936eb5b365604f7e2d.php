<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bde9823be2739a5cb9cd356070cb52df96d66eafbbfc6b66eeb75bc201815a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8f02ec89f0bed0f30116430841883f5cf0bef3a09f4f20368915d91d37d09793 = $this->env->getExtension("native_profiler");
        $__internal_8f02ec89f0bed0f30116430841883f5cf0bef3a09f4f20368915d91d37d09793->enter($__internal_8f02ec89f0bed0f30116430841883f5cf0bef3a09f4f20368915d91d37d09793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f02ec89f0bed0f30116430841883f5cf0bef3a09f4f20368915d91d37d09793->leave($__internal_8f02ec89f0bed0f30116430841883f5cf0bef3a09f4f20368915d91d37d09793_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8257d04bfaa0b2f89e5675f5d84ae16569e344e8f3a6bc107870424c6610a778 = $this->env->getExtension("native_profiler");
        $__internal_8257d04bfaa0b2f89e5675f5d84ae16569e344e8f3a6bc107870424c6610a778->enter($__internal_8257d04bfaa0b2f89e5675f5d84ae16569e344e8f3a6bc107870424c6610a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8257d04bfaa0b2f89e5675f5d84ae16569e344e8f3a6bc107870424c6610a778->leave($__internal_8257d04bfaa0b2f89e5675f5d84ae16569e344e8f3a6bc107870424c6610a778_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
