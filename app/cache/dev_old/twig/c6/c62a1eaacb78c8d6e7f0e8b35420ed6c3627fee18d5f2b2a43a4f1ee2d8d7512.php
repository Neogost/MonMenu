<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_aa0ddaab632d6efeacd823d85caa30f5e2afc7e19c5e6280b4327ddf3fb3ccee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_05ef287123bf24120a6661abb10a00e627e76b63903b57493a769fcb080186e9 = $this->env->getExtension("native_profiler");
        $__internal_05ef287123bf24120a6661abb10a00e627e76b63903b57493a769fcb080186e9->enter($__internal_05ef287123bf24120a6661abb10a00e627e76b63903b57493a769fcb080186e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ef287123bf24120a6661abb10a00e627e76b63903b57493a769fcb080186e9->leave($__internal_05ef287123bf24120a6661abb10a00e627e76b63903b57493a769fcb080186e9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b856a531a0abfbf74be2c4061ef5ebae148c5eee3bb64a46eb242def19e0be6 = $this->env->getExtension("native_profiler");
        $__internal_0b856a531a0abfbf74be2c4061ef5ebae148c5eee3bb64a46eb242def19e0be6->enter($__internal_0b856a531a0abfbf74be2c4061ef5ebae148c5eee3bb64a46eb242def19e0be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0b856a531a0abfbf74be2c4061ef5ebae148c5eee3bb64a46eb242def19e0be6->leave($__internal_0b856a531a0abfbf74be2c4061ef5ebae148c5eee3bb64a46eb242def19e0be6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
