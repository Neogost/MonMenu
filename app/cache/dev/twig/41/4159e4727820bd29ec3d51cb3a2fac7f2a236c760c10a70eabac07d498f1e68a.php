<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_326eb7cb836924bedb1a5f56af500f6c14404a846738b648e9e9e12ed612fa94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5a684f4848299cf3c84a8c76d748c0f6374da1ba49028a45d35a743856901ab7 = $this->env->getExtension("native_profiler");
        $__internal_5a684f4848299cf3c84a8c76d748c0f6374da1ba49028a45d35a743856901ab7->enter($__internal_5a684f4848299cf3c84a8c76d748c0f6374da1ba49028a45d35a743856901ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a684f4848299cf3c84a8c76d748c0f6374da1ba49028a45d35a743856901ab7->leave($__internal_5a684f4848299cf3c84a8c76d748c0f6374da1ba49028a45d35a743856901ab7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20a47c6c8f6800d48c09edd8a53e6fdc61e5c012fbe9fbdfc59831f57ecbf6c0 = $this->env->getExtension("native_profiler");
        $__internal_20a47c6c8f6800d48c09edd8a53e6fdc61e5c012fbe9fbdfc59831f57ecbf6c0->enter($__internal_20a47c6c8f6800d48c09edd8a53e6fdc61e5c012fbe9fbdfc59831f57ecbf6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_20a47c6c8f6800d48c09edd8a53e6fdc61e5c012fbe9fbdfc59831f57ecbf6c0->leave($__internal_20a47c6c8f6800d48c09edd8a53e6fdc61e5c012fbe9fbdfc59831f57ecbf6c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
