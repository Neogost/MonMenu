<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_8b48b854ea4e16396e498acee1de8e72f759d71aeaf48156b59a3ac107a7cd8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_94fbcda476cf3db77b46d7c18624282f5b1c3d7566ad39562142f4ea6982b29f = $this->env->getExtension("native_profiler");
        $__internal_94fbcda476cf3db77b46d7c18624282f5b1c3d7566ad39562142f4ea6982b29f->enter($__internal_94fbcda476cf3db77b46d7c18624282f5b1c3d7566ad39562142f4ea6982b29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94fbcda476cf3db77b46d7c18624282f5b1c3d7566ad39562142f4ea6982b29f->leave($__internal_94fbcda476cf3db77b46d7c18624282f5b1c3d7566ad39562142f4ea6982b29f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a97d7ac47cfc3ba932a4072ad01a4b3d89d57f32c9e86c6aa850d61643f4c58d = $this->env->getExtension("native_profiler");
        $__internal_a97d7ac47cfc3ba932a4072ad01a4b3d89d57f32c9e86c6aa850d61643f4c58d->enter($__internal_a97d7ac47cfc3ba932a4072ad01a4b3d89d57f32c9e86c6aa850d61643f4c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a97d7ac47cfc3ba932a4072ad01a4b3d89d57f32c9e86c6aa850d61643f4c58d->leave($__internal_a97d7ac47cfc3ba932a4072ad01a4b3d89d57f32c9e86c6aa850d61643f4c58d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
