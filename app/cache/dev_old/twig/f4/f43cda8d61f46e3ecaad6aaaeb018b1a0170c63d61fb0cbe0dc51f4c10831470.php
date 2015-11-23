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
        $__internal_1059732a7b1a28c4564ffb3e29a550220baede3d941fcd02098159e2483f477d = $this->env->getExtension("native_profiler");
        $__internal_1059732a7b1a28c4564ffb3e29a550220baede3d941fcd02098159e2483f477d->enter($__internal_1059732a7b1a28c4564ffb3e29a550220baede3d941fcd02098159e2483f477d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1059732a7b1a28c4564ffb3e29a550220baede3d941fcd02098159e2483f477d->leave($__internal_1059732a7b1a28c4564ffb3e29a550220baede3d941fcd02098159e2483f477d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a13ca6f648a720f29f7e9d6b3c5703e4187b26490ff0f5025d43938b885c5f11 = $this->env->getExtension("native_profiler");
        $__internal_a13ca6f648a720f29f7e9d6b3c5703e4187b26490ff0f5025d43938b885c5f11->enter($__internal_a13ca6f648a720f29f7e9d6b3c5703e4187b26490ff0f5025d43938b885c5f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a13ca6f648a720f29f7e9d6b3c5703e4187b26490ff0f5025d43938b885c5f11->leave($__internal_a13ca6f648a720f29f7e9d6b3c5703e4187b26490ff0f5025d43938b885c5f11_prof);

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
