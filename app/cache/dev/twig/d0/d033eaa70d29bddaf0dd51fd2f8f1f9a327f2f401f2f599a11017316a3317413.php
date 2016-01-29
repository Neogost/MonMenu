<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e7c14f0702eea600a88f750ad610e3e6641624b836db0d3ec80316198b751b8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_7e15d5e3b82756f100b2b1883c50a14b7b9cff0ce086036370960235c5c0916b = $this->env->getExtension("native_profiler");
        $__internal_7e15d5e3b82756f100b2b1883c50a14b7b9cff0ce086036370960235c5c0916b->enter($__internal_7e15d5e3b82756f100b2b1883c50a14b7b9cff0ce086036370960235c5c0916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e15d5e3b82756f100b2b1883c50a14b7b9cff0ce086036370960235c5c0916b->leave($__internal_7e15d5e3b82756f100b2b1883c50a14b7b9cff0ce086036370960235c5c0916b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf5fc82811566fd02070c281e0079035894aebe54650770dddb6cc15a61df4fd = $this->env->getExtension("native_profiler");
        $__internal_bf5fc82811566fd02070c281e0079035894aebe54650770dddb6cc15a61df4fd->enter($__internal_bf5fc82811566fd02070c281e0079035894aebe54650770dddb6cc15a61df4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_bf5fc82811566fd02070c281e0079035894aebe54650770dddb6cc15a61df4fd->leave($__internal_bf5fc82811566fd02070c281e0079035894aebe54650770dddb6cc15a61df4fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
