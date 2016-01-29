<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_fe19069ce3550bcedcb663f79a77828942f266f53f9acaa2e0a497f3b0b62a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_2f66a857a765441dc1cb41b7e0904c2cdb5c4ff68b5ed30ae3344d0231f70475 = $this->env->getExtension("native_profiler");
        $__internal_2f66a857a765441dc1cb41b7e0904c2cdb5c4ff68b5ed30ae3344d0231f70475->enter($__internal_2f66a857a765441dc1cb41b7e0904c2cdb5c4ff68b5ed30ae3344d0231f70475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f66a857a765441dc1cb41b7e0904c2cdb5c4ff68b5ed30ae3344d0231f70475->leave($__internal_2f66a857a765441dc1cb41b7e0904c2cdb5c4ff68b5ed30ae3344d0231f70475_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73dc427b5e81d55c3bed04cc58db0cd1725a983c16f13f9689dc2c8c21207d64 = $this->env->getExtension("native_profiler");
        $__internal_73dc427b5e81d55c3bed04cc58db0cd1725a983c16f13f9689dc2c8c21207d64->enter($__internal_73dc427b5e81d55c3bed04cc58db0cd1725a983c16f13f9689dc2c8c21207d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_73dc427b5e81d55c3bed04cc58db0cd1725a983c16f13f9689dc2c8c21207d64->leave($__internal_73dc427b5e81d55c3bed04cc58db0cd1725a983c16f13f9689dc2c8c21207d64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
