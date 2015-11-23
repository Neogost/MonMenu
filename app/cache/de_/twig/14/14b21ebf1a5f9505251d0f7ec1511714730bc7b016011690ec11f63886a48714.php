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
        $__internal_46bd23bba5ce73413446643b1baf42a8693873ccd0062ac2f9830c4b8b4b2399 = $this->env->getExtension("native_profiler");
        $__internal_46bd23bba5ce73413446643b1baf42a8693873ccd0062ac2f9830c4b8b4b2399->enter($__internal_46bd23bba5ce73413446643b1baf42a8693873ccd0062ac2f9830c4b8b4b2399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46bd23bba5ce73413446643b1baf42a8693873ccd0062ac2f9830c4b8b4b2399->leave($__internal_46bd23bba5ce73413446643b1baf42a8693873ccd0062ac2f9830c4b8b4b2399_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b00e3c54e678f855667792714e8594ce5f950868c6cc31b2030b84efae49115e = $this->env->getExtension("native_profiler");
        $__internal_b00e3c54e678f855667792714e8594ce5f950868c6cc31b2030b84efae49115e->enter($__internal_b00e3c54e678f855667792714e8594ce5f950868c6cc31b2030b84efae49115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b00e3c54e678f855667792714e8594ce5f950868c6cc31b2030b84efae49115e->leave($__internal_b00e3c54e678f855667792714e8594ce5f950868c6cc31b2030b84efae49115e_prof);

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
