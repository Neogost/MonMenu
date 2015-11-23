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
        $__internal_3f699c033853fa57256b7a7954e1c1a83dcd7aafdff4b31a9f81fc6647a06688 = $this->env->getExtension("native_profiler");
        $__internal_3f699c033853fa57256b7a7954e1c1a83dcd7aafdff4b31a9f81fc6647a06688->enter($__internal_3f699c033853fa57256b7a7954e1c1a83dcd7aafdff4b31a9f81fc6647a06688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f699c033853fa57256b7a7954e1c1a83dcd7aafdff4b31a9f81fc6647a06688->leave($__internal_3f699c033853fa57256b7a7954e1c1a83dcd7aafdff4b31a9f81fc6647a06688_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed1a5ca56c80881daa987e18481a2d1d8958decf9e70a6be6f42dfefa0de983f = $this->env->getExtension("native_profiler");
        $__internal_ed1a5ca56c80881daa987e18481a2d1d8958decf9e70a6be6f42dfefa0de983f->enter($__internal_ed1a5ca56c80881daa987e18481a2d1d8958decf9e70a6be6f42dfefa0de983f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ed1a5ca56c80881daa987e18481a2d1d8958decf9e70a6be6f42dfefa0de983f->leave($__internal_ed1a5ca56c80881daa987e18481a2d1d8958decf9e70a6be6f42dfefa0de983f_prof);

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
