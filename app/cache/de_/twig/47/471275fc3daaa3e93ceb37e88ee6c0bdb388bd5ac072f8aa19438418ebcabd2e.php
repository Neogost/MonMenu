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
        $__internal_7805a30cb8340f4da612de1edd20f06d3b90d69cceb084ea2807a548d677b4e0 = $this->env->getExtension("native_profiler");
        $__internal_7805a30cb8340f4da612de1edd20f06d3b90d69cceb084ea2807a548d677b4e0->enter($__internal_7805a30cb8340f4da612de1edd20f06d3b90d69cceb084ea2807a548d677b4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7805a30cb8340f4da612de1edd20f06d3b90d69cceb084ea2807a548d677b4e0->leave($__internal_7805a30cb8340f4da612de1edd20f06d3b90d69cceb084ea2807a548d677b4e0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78f11439e325f601cb0c19443eb4867dde1e8fec30672fa47f620fac13d731ca = $this->env->getExtension("native_profiler");
        $__internal_78f11439e325f601cb0c19443eb4867dde1e8fec30672fa47f620fac13d731ca->enter($__internal_78f11439e325f601cb0c19443eb4867dde1e8fec30672fa47f620fac13d731ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_78f11439e325f601cb0c19443eb4867dde1e8fec30672fa47f620fac13d731ca->leave($__internal_78f11439e325f601cb0c19443eb4867dde1e8fec30672fa47f620fac13d731ca_prof);

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
