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
        $__internal_e2de05d259969e4d2f7e66a5f26a3a4f4a24939df44b214dcfbf6fcecd123b6e = $this->env->getExtension("native_profiler");
        $__internal_e2de05d259969e4d2f7e66a5f26a3a4f4a24939df44b214dcfbf6fcecd123b6e->enter($__internal_e2de05d259969e4d2f7e66a5f26a3a4f4a24939df44b214dcfbf6fcecd123b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2de05d259969e4d2f7e66a5f26a3a4f4a24939df44b214dcfbf6fcecd123b6e->leave($__internal_e2de05d259969e4d2f7e66a5f26a3a4f4a24939df44b214dcfbf6fcecd123b6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65549075fa7cdd5fdd51879f36c04caca8e83518a79c47e949a2b52279d206ef = $this->env->getExtension("native_profiler");
        $__internal_65549075fa7cdd5fdd51879f36c04caca8e83518a79c47e949a2b52279d206ef->enter($__internal_65549075fa7cdd5fdd51879f36c04caca8e83518a79c47e949a2b52279d206ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_65549075fa7cdd5fdd51879f36c04caca8e83518a79c47e949a2b52279d206ef->leave($__internal_65549075fa7cdd5fdd51879f36c04caca8e83518a79c47e949a2b52279d206ef_prof);

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
