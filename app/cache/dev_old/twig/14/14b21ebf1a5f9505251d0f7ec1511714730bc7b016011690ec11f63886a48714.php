<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e0ab6fd2b319f5c0516e12a4c10a376334b45270be4b53196bb19fd18d8e479b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7aa33e6caa47b54d2e9ee53b54c7f3c23dd9811a4666ce49477f0dae142cd6cd = $this->env->getExtension("native_profiler");
        $__internal_7aa33e6caa47b54d2e9ee53b54c7f3c23dd9811a4666ce49477f0dae142cd6cd->enter($__internal_7aa33e6caa47b54d2e9ee53b54c7f3c23dd9811a4666ce49477f0dae142cd6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa33e6caa47b54d2e9ee53b54c7f3c23dd9811a4666ce49477f0dae142cd6cd->leave($__internal_7aa33e6caa47b54d2e9ee53b54c7f3c23dd9811a4666ce49477f0dae142cd6cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db56dcfdb39f92a0c2474bb57023837549ebbaf90d38022df79893cb456f236b = $this->env->getExtension("native_profiler");
        $__internal_db56dcfdb39f92a0c2474bb57023837549ebbaf90d38022df79893cb456f236b->enter($__internal_db56dcfdb39f92a0c2474bb57023837549ebbaf90d38022df79893cb456f236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_db56dcfdb39f92a0c2474bb57023837549ebbaf90d38022df79893cb456f236b->leave($__internal_db56dcfdb39f92a0c2474bb57023837549ebbaf90d38022df79893cb456f236b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
