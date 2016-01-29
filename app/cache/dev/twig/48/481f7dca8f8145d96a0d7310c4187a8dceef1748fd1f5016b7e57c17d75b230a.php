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
        $__internal_15214059aaa854092b45340a026463b6890e4be2694198be0a709cbe141daffc = $this->env->getExtension("native_profiler");
        $__internal_15214059aaa854092b45340a026463b6890e4be2694198be0a709cbe141daffc->enter($__internal_15214059aaa854092b45340a026463b6890e4be2694198be0a709cbe141daffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15214059aaa854092b45340a026463b6890e4be2694198be0a709cbe141daffc->leave($__internal_15214059aaa854092b45340a026463b6890e4be2694198be0a709cbe141daffc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f79fdf908bb48ecc4495680a5c6e1c89530b26ac49a903116d30098be3618851 = $this->env->getExtension("native_profiler");
        $__internal_f79fdf908bb48ecc4495680a5c6e1c89530b26ac49a903116d30098be3618851->enter($__internal_f79fdf908bb48ecc4495680a5c6e1c89530b26ac49a903116d30098be3618851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f79fdf908bb48ecc4495680a5c6e1c89530b26ac49a903116d30098be3618851->leave($__internal_f79fdf908bb48ecc4495680a5c6e1c89530b26ac49a903116d30098be3618851_prof);

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
