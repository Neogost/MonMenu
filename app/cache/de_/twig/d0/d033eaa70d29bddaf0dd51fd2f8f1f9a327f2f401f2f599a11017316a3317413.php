<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e7c14f0702eea600a88f750ad610e3e6641624b836db0d3ec80316198b751b8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_88dcb1c9932185ee0d9ad8992bf17536d572cc8bf834db23e020eac23c5a6c77 = $this->env->getExtension("native_profiler");
        $__internal_88dcb1c9932185ee0d9ad8992bf17536d572cc8bf834db23e020eac23c5a6c77->enter($__internal_88dcb1c9932185ee0d9ad8992bf17536d572cc8bf834db23e020eac23c5a6c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88dcb1c9932185ee0d9ad8992bf17536d572cc8bf834db23e020eac23c5a6c77->leave($__internal_88dcb1c9932185ee0d9ad8992bf17536d572cc8bf834db23e020eac23c5a6c77_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb54a89e1fa464b90964827ad4567b44b223310e722d2f5a28907de2c80ecd4d = $this->env->getExtension("native_profiler");
        $__internal_bb54a89e1fa464b90964827ad4567b44b223310e722d2f5a28907de2c80ecd4d->enter($__internal_bb54a89e1fa464b90964827ad4567b44b223310e722d2f5a28907de2c80ecd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_bb54a89e1fa464b90964827ad4567b44b223310e722d2f5a28907de2c80ecd4d->leave($__internal_bb54a89e1fa464b90964827ad4567b44b223310e722d2f5a28907de2c80ecd4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
