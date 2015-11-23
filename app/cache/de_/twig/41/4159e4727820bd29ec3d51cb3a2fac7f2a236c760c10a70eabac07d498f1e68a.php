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
        $__internal_f87827b94bda0321e1b6177e0e3f43d68320b3dddf5dde54dc460c17e113cf23 = $this->env->getExtension("native_profiler");
        $__internal_f87827b94bda0321e1b6177e0e3f43d68320b3dddf5dde54dc460c17e113cf23->enter($__internal_f87827b94bda0321e1b6177e0e3f43d68320b3dddf5dde54dc460c17e113cf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87827b94bda0321e1b6177e0e3f43d68320b3dddf5dde54dc460c17e113cf23->leave($__internal_f87827b94bda0321e1b6177e0e3f43d68320b3dddf5dde54dc460c17e113cf23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92b9e1cd5bdd3a7c4c679743083aa6d4716f1dd95934bf4196f23d42dc0e767f = $this->env->getExtension("native_profiler");
        $__internal_92b9e1cd5bdd3a7c4c679743083aa6d4716f1dd95934bf4196f23d42dc0e767f->enter($__internal_92b9e1cd5bdd3a7c4c679743083aa6d4716f1dd95934bf4196f23d42dc0e767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_92b9e1cd5bdd3a7c4c679743083aa6d4716f1dd95934bf4196f23d42dc0e767f->leave($__internal_92b9e1cd5bdd3a7c4c679743083aa6d4716f1dd95934bf4196f23d42dc0e767f_prof);

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
