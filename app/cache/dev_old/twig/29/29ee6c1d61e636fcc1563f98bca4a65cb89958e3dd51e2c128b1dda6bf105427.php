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
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1434dd0777291338e607778f4436baead83c48e6702e1e08d9dd82a24af6d43 = $this->env->getExtension("native_profiler");
        $__internal_d1434dd0777291338e607778f4436baead83c48e6702e1e08d9dd82a24af6d43->enter($__internal_d1434dd0777291338e607778f4436baead83c48e6702e1e08d9dd82a24af6d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1434dd0777291338e607778f4436baead83c48e6702e1e08d9dd82a24af6d43->leave($__internal_d1434dd0777291338e607778f4436baead83c48e6702e1e08d9dd82a24af6d43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dac8daf23d90f249f481b60887805fcac24c7a457d06ab5704eeb6a654bb7511 = $this->env->getExtension("native_profiler");
        $__internal_dac8daf23d90f249f481b60887805fcac24c7a457d06ab5704eeb6a654bb7511->enter($__internal_dac8daf23d90f249f481b60887805fcac24c7a457d06ab5704eeb6a654bb7511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_dac8daf23d90f249f481b60887805fcac24c7a457d06ab5704eeb6a654bb7511->leave($__internal_dac8daf23d90f249f481b60887805fcac24c7a457d06ab5704eeb6a654bb7511_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
