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
        $__internal_0f0adab951ea27c4c2a146cbd58e568d6fe6e820f92914b072103de6a654a377 = $this->env->getExtension("native_profiler");
        $__internal_0f0adab951ea27c4c2a146cbd58e568d6fe6e820f92914b072103de6a654a377->enter($__internal_0f0adab951ea27c4c2a146cbd58e568d6fe6e820f92914b072103de6a654a377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f0adab951ea27c4c2a146cbd58e568d6fe6e820f92914b072103de6a654a377->leave($__internal_0f0adab951ea27c4c2a146cbd58e568d6fe6e820f92914b072103de6a654a377_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b611329b92d38b6617f336dfe39c30329681689ccb0b98c1aff9eae117e3cf33 = $this->env->getExtension("native_profiler");
        $__internal_b611329b92d38b6617f336dfe39c30329681689ccb0b98c1aff9eae117e3cf33->enter($__internal_b611329b92d38b6617f336dfe39c30329681689ccb0b98c1aff9eae117e3cf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b611329b92d38b6617f336dfe39c30329681689ccb0b98c1aff9eae117e3cf33->leave($__internal_b611329b92d38b6617f336dfe39c30329681689ccb0b98c1aff9eae117e3cf33_prof);

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
