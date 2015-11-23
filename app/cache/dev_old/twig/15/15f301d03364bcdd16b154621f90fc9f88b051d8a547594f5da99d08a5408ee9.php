<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1e10806e1393b7bdddee2608473d1d1e3e481856ebb662f28f73906ac12010f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ef951ee8d3b8bd2d0505a960b10ea05d8e4ff4b34c4020c6a61785b4d5d81ef0 = $this->env->getExtension("native_profiler");
        $__internal_ef951ee8d3b8bd2d0505a960b10ea05d8e4ff4b34c4020c6a61785b4d5d81ef0->enter($__internal_ef951ee8d3b8bd2d0505a960b10ea05d8e4ff4b34c4020c6a61785b4d5d81ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef951ee8d3b8bd2d0505a960b10ea05d8e4ff4b34c4020c6a61785b4d5d81ef0->leave($__internal_ef951ee8d3b8bd2d0505a960b10ea05d8e4ff4b34c4020c6a61785b4d5d81ef0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45571b9cbe0f6358eb0944f29226222e15faa7a2bfa531bc732f62637a69381c = $this->env->getExtension("native_profiler");
        $__internal_45571b9cbe0f6358eb0944f29226222e15faa7a2bfa531bc732f62637a69381c->enter($__internal_45571b9cbe0f6358eb0944f29226222e15faa7a2bfa531bc732f62637a69381c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_45571b9cbe0f6358eb0944f29226222e15faa7a2bfa531bc732f62637a69381c->leave($__internal_45571b9cbe0f6358eb0944f29226222e15faa7a2bfa531bc732f62637a69381c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
