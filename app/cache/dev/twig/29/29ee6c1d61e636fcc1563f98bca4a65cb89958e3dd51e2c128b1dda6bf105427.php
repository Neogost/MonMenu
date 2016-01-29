<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_abc09bb0a0ac3df2da8844d7aff8ecd10307e094fa9318b27654be16283647c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'wordingPage' => array($this, 'block_wordingPage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_985395880254539341cb4be81905c90cca94dcfdd1def8707d283f99941698a9 = $this->env->getExtension("native_profiler");
        $__internal_985395880254539341cb4be81905c90cca94dcfdd1def8707d283f99941698a9->enter($__internal_985395880254539341cb4be81905c90cca94dcfdd1def8707d283f99941698a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985395880254539341cb4be81905c90cca94dcfdd1def8707d283f99941698a9->leave($__internal_985395880254539341cb4be81905c90cca94dcfdd1def8707d283f99941698a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43ed5a90b2de0245e35f183e5f7649838de07dbbf5895fca0dc8603473460a67 = $this->env->getExtension("native_profiler");
        $__internal_43ed5a90b2de0245e35f183e5f7649838de07dbbf5895fca0dc8603473460a67->enter($__internal_43ed5a90b2de0245e35f183e5f7649838de07dbbf5895fca0dc8603473460a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_43ed5a90b2de0245e35f183e5f7649838de07dbbf5895fca0dc8603473460a67->leave($__internal_43ed5a90b2de0245e35f183e5f7649838de07dbbf5895fca0dc8603473460a67_prof);

    }

    // line 8
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_d5def1328d17940c9f1435697f246378d510b7e7561682b8aee2082ccf8734f3 = $this->env->getExtension("native_profiler");
        $__internal_d5def1328d17940c9f1435697f246378d510b7e7561682b8aee2082ccf8734f3->enter($__internal_d5def1328d17940c9f1435697f246378d510b7e7561682b8aee2082ccf8734f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Créer un compte rapidement et facillement !";
        
        $__internal_d5def1328d17940c9f1435697f246378d510b7e7561682b8aee2082ccf8734f3->leave($__internal_d5def1328d17940c9f1435697f246378d510b7e7561682b8aee2082ccf8734f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
/* */
/* {% block wordingPage %}Créer un compte rapidement et facillement !{% endblock %}*/
