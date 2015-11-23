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
        $__internal_ee9911ba4b621bd63a8f91fe76d3b6df44b65765642344823803ab25818c1919 = $this->env->getExtension("native_profiler");
        $__internal_ee9911ba4b621bd63a8f91fe76d3b6df44b65765642344823803ab25818c1919->enter($__internal_ee9911ba4b621bd63a8f91fe76d3b6df44b65765642344823803ab25818c1919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee9911ba4b621bd63a8f91fe76d3b6df44b65765642344823803ab25818c1919->leave($__internal_ee9911ba4b621bd63a8f91fe76d3b6df44b65765642344823803ab25818c1919_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6486bcb5f307800e9282df0a1734b6ff7ec383c3d3b565ed1f0c78d4f59d998f = $this->env->getExtension("native_profiler");
        $__internal_6486bcb5f307800e9282df0a1734b6ff7ec383c3d3b565ed1f0c78d4f59d998f->enter($__internal_6486bcb5f307800e9282df0a1734b6ff7ec383c3d3b565ed1f0c78d4f59d998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6486bcb5f307800e9282df0a1734b6ff7ec383c3d3b565ed1f0c78d4f59d998f->leave($__internal_6486bcb5f307800e9282df0a1734b6ff7ec383c3d3b565ed1f0c78d4f59d998f_prof);

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
