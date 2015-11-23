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
        $__internal_57048f39d7fbf84fdb90c42ecab41480e03eec51a3a6a3d97699edde86e08e52 = $this->env->getExtension("native_profiler");
        $__internal_57048f39d7fbf84fdb90c42ecab41480e03eec51a3a6a3d97699edde86e08e52->enter($__internal_57048f39d7fbf84fdb90c42ecab41480e03eec51a3a6a3d97699edde86e08e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57048f39d7fbf84fdb90c42ecab41480e03eec51a3a6a3d97699edde86e08e52->leave($__internal_57048f39d7fbf84fdb90c42ecab41480e03eec51a3a6a3d97699edde86e08e52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b5bc2ddb0f35128117129e697994b43483aa436b93a4e3ed5cbf73027e99196 = $this->env->getExtension("native_profiler");
        $__internal_9b5bc2ddb0f35128117129e697994b43483aa436b93a4e3ed5cbf73027e99196->enter($__internal_9b5bc2ddb0f35128117129e697994b43483aa436b93a4e3ed5cbf73027e99196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9b5bc2ddb0f35128117129e697994b43483aa436b93a4e3ed5cbf73027e99196->leave($__internal_9b5bc2ddb0f35128117129e697994b43483aa436b93a4e3ed5cbf73027e99196_prof);

    }

    // line 8
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_62771452f3478b605c1d56e58fd90b528985b3a5df2076c510d1af4766e8e1f6 = $this->env->getExtension("native_profiler");
        $__internal_62771452f3478b605c1d56e58fd90b528985b3a5df2076c510d1af4766e8e1f6->enter($__internal_62771452f3478b605c1d56e58fd90b528985b3a5df2076c510d1af4766e8e1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Créer un compte rapidement et facillement !";
        
        $__internal_62771452f3478b605c1d56e58fd90b528985b3a5df2076c510d1af4766e8e1f6->leave($__internal_62771452f3478b605c1d56e58fd90b528985b3a5df2076c510d1af4766e8e1f6_prof);

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
