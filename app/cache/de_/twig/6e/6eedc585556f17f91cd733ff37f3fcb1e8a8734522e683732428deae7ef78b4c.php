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
        $__internal_368065128bfaf8b9c4978e97dacdcbbec0c10fef66ba42f190e05c432221c46b = $this->env->getExtension("native_profiler");
        $__internal_368065128bfaf8b9c4978e97dacdcbbec0c10fef66ba42f190e05c432221c46b->enter($__internal_368065128bfaf8b9c4978e97dacdcbbec0c10fef66ba42f190e05c432221c46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368065128bfaf8b9c4978e97dacdcbbec0c10fef66ba42f190e05c432221c46b->leave($__internal_368065128bfaf8b9c4978e97dacdcbbec0c10fef66ba42f190e05c432221c46b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_968b70867c2ffdcca088002079ba837e4563850d6684b7b0a14828975bc29d61 = $this->env->getExtension("native_profiler");
        $__internal_968b70867c2ffdcca088002079ba837e4563850d6684b7b0a14828975bc29d61->enter($__internal_968b70867c2ffdcca088002079ba837e4563850d6684b7b0a14828975bc29d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_968b70867c2ffdcca088002079ba837e4563850d6684b7b0a14828975bc29d61->leave($__internal_968b70867c2ffdcca088002079ba837e4563850d6684b7b0a14828975bc29d61_prof);

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
