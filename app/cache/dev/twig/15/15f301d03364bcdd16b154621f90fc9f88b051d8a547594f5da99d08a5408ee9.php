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
        $__internal_1bb77a2d978f12b9bacfce952a6c52b310611474fe44edd844b5dc87882a61d8 = $this->env->getExtension("native_profiler");
        $__internal_1bb77a2d978f12b9bacfce952a6c52b310611474fe44edd844b5dc87882a61d8->enter($__internal_1bb77a2d978f12b9bacfce952a6c52b310611474fe44edd844b5dc87882a61d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb77a2d978f12b9bacfce952a6c52b310611474fe44edd844b5dc87882a61d8->leave($__internal_1bb77a2d978f12b9bacfce952a6c52b310611474fe44edd844b5dc87882a61d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c5a23c113cade4acc4bee873f89709a904e93603137199fa740aff9e72ad75a = $this->env->getExtension("native_profiler");
        $__internal_6c5a23c113cade4acc4bee873f89709a904e93603137199fa740aff9e72ad75a->enter($__internal_6c5a23c113cade4acc4bee873f89709a904e93603137199fa740aff9e72ad75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6c5a23c113cade4acc4bee873f89709a904e93603137199fa740aff9e72ad75a->leave($__internal_6c5a23c113cade4acc4bee873f89709a904e93603137199fa740aff9e72ad75a_prof);

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
