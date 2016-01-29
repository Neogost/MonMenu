<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2d3087d24c825290c79cb824643e2de74dcf0de2f72910ca0bc8add3f9090a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_de428187108c5b7558a0e5aa5a2da68b6fc356c653be3742bd74895126ab2557 = $this->env->getExtension("native_profiler");
        $__internal_de428187108c5b7558a0e5aa5a2da68b6fc356c653be3742bd74895126ab2557->enter($__internal_de428187108c5b7558a0e5aa5a2da68b6fc356c653be3742bd74895126ab2557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de428187108c5b7558a0e5aa5a2da68b6fc356c653be3742bd74895126ab2557->leave($__internal_de428187108c5b7558a0e5aa5a2da68b6fc356c653be3742bd74895126ab2557_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_048478d8a27bed788caf9d67ea7141f90d640a82067ba1965f507f9fe0c7c839 = $this->env->getExtension("native_profiler");
        $__internal_048478d8a27bed788caf9d67ea7141f90d640a82067ba1965f507f9fe0c7c839->enter($__internal_048478d8a27bed788caf9d67ea7141f90d640a82067ba1965f507f9fe0c7c839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_048478d8a27bed788caf9d67ea7141f90d640a82067ba1965f507f9fe0c7c839->leave($__internal_048478d8a27bed788caf9d67ea7141f90d640a82067ba1965f507f9fe0c7c839_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
