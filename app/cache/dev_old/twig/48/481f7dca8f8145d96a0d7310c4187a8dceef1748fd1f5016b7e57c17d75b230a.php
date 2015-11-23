<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c50230b873db6fdb87af195017ad53703d44fb5babf118b99fd0503e087c939f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1444ccb3e1bdcd1df51bb408cba7041d5159302ab0f46956c5cc1c56847dd4ee = $this->env->getExtension("native_profiler");
        $__internal_1444ccb3e1bdcd1df51bb408cba7041d5159302ab0f46956c5cc1c56847dd4ee->enter($__internal_1444ccb3e1bdcd1df51bb408cba7041d5159302ab0f46956c5cc1c56847dd4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1444ccb3e1bdcd1df51bb408cba7041d5159302ab0f46956c5cc1c56847dd4ee->leave($__internal_1444ccb3e1bdcd1df51bb408cba7041d5159302ab0f46956c5cc1c56847dd4ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae199a25c92100060fe4eb2195272e76f1eb61b5b77cde9309e2a29e95bdac87 = $this->env->getExtension("native_profiler");
        $__internal_ae199a25c92100060fe4eb2195272e76f1eb61b5b77cde9309e2a29e95bdac87->enter($__internal_ae199a25c92100060fe4eb2195272e76f1eb61b5b77cde9309e2a29e95bdac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ae199a25c92100060fe4eb2195272e76f1eb61b5b77cde9309e2a29e95bdac87->leave($__internal_ae199a25c92100060fe4eb2195272e76f1eb61b5b77cde9309e2a29e95bdac87_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
