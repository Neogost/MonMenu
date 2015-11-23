<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bde9823be2739a5cb9cd356070cb52df96d66eafbbfc6b66eeb75bc201815a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b5879ecf9fe1f45ea1b100a5978efdb8bbf69ec90817d359df3f85ca829ade6b = $this->env->getExtension("native_profiler");
        $__internal_b5879ecf9fe1f45ea1b100a5978efdb8bbf69ec90817d359df3f85ca829ade6b->enter($__internal_b5879ecf9fe1f45ea1b100a5978efdb8bbf69ec90817d359df3f85ca829ade6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5879ecf9fe1f45ea1b100a5978efdb8bbf69ec90817d359df3f85ca829ade6b->leave($__internal_b5879ecf9fe1f45ea1b100a5978efdb8bbf69ec90817d359df3f85ca829ade6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0023ba295aadb2b27416f976d4cbf40adcdd8efda5038d531f09ca94ce83685 = $this->env->getExtension("native_profiler");
        $__internal_b0023ba295aadb2b27416f976d4cbf40adcdd8efda5038d531f09ca94ce83685->enter($__internal_b0023ba295aadb2b27416f976d4cbf40adcdd8efda5038d531f09ca94ce83685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b0023ba295aadb2b27416f976d4cbf40adcdd8efda5038d531f09ca94ce83685->leave($__internal_b0023ba295aadb2b27416f976d4cbf40adcdd8efda5038d531f09ca94ce83685_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
