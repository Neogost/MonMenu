<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7edf1edf5a644ac42d19750e1510e59c5b5f1b7ab324c8cdfaf3b3394f55b27d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7700a22db2fce959fbbfdca981653347c1fda61088e160a1b0bf2df4f50eea7e = $this->env->getExtension("native_profiler");
        $__internal_7700a22db2fce959fbbfdca981653347c1fda61088e160a1b0bf2df4f50eea7e->enter($__internal_7700a22db2fce959fbbfdca981653347c1fda61088e160a1b0bf2df4f50eea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7700a22db2fce959fbbfdca981653347c1fda61088e160a1b0bf2df4f50eea7e->leave($__internal_7700a22db2fce959fbbfdca981653347c1fda61088e160a1b0bf2df4f50eea7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd745f3d1d6b3c55123d92f1fd2874adc810be7ca982fdcbc2a9782edee9b088 = $this->env->getExtension("native_profiler");
        $__internal_cd745f3d1d6b3c55123d92f1fd2874adc810be7ca982fdcbc2a9782edee9b088->enter($__internal_cd745f3d1d6b3c55123d92f1fd2874adc810be7ca982fdcbc2a9782edee9b088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_cd745f3d1d6b3c55123d92f1fd2874adc810be7ca982fdcbc2a9782edee9b088->leave($__internal_cd745f3d1d6b3c55123d92f1fd2874adc810be7ca982fdcbc2a9782edee9b088_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
