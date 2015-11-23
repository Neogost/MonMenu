<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f7f465c3a415bfff961c0ac009a50816747c1e5dcfb74ead7df7d2e83ec6252c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1fa06d82aeca9c1537f2b4814248edb2630bc5e943ab349aa536d592f895591b = $this->env->getExtension("native_profiler");
        $__internal_1fa06d82aeca9c1537f2b4814248edb2630bc5e943ab349aa536d592f895591b->enter($__internal_1fa06d82aeca9c1537f2b4814248edb2630bc5e943ab349aa536d592f895591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa06d82aeca9c1537f2b4814248edb2630bc5e943ab349aa536d592f895591b->leave($__internal_1fa06d82aeca9c1537f2b4814248edb2630bc5e943ab349aa536d592f895591b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8760bd2adca10b74c3fe5d6b43ca3ce175e3bb4cc6da5561ee4a2a2e882a2ecc = $this->env->getExtension("native_profiler");
        $__internal_8760bd2adca10b74c3fe5d6b43ca3ce175e3bb4cc6da5561ee4a2a2e882a2ecc->enter($__internal_8760bd2adca10b74c3fe5d6b43ca3ce175e3bb4cc6da5561ee4a2a2e882a2ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8760bd2adca10b74c3fe5d6b43ca3ce175e3bb4cc6da5561ee4a2a2e882a2ecc->leave($__internal_8760bd2adca10b74c3fe5d6b43ca3ce175e3bb4cc6da5561ee4a2a2e882a2ecc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
