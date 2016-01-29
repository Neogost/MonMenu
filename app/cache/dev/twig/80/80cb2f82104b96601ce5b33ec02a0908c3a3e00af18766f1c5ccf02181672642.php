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
        $__internal_70341bdd46122a7c3174d21f11e210a3c12e1a77c7facdd979b9eb94c0586b4a = $this->env->getExtension("native_profiler");
        $__internal_70341bdd46122a7c3174d21f11e210a3c12e1a77c7facdd979b9eb94c0586b4a->enter($__internal_70341bdd46122a7c3174d21f11e210a3c12e1a77c7facdd979b9eb94c0586b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70341bdd46122a7c3174d21f11e210a3c12e1a77c7facdd979b9eb94c0586b4a->leave($__internal_70341bdd46122a7c3174d21f11e210a3c12e1a77c7facdd979b9eb94c0586b4a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c536d1402c5e9a2e8db62e5d09416534c97a3b57d3beed4a20009e5ad716f2a8 = $this->env->getExtension("native_profiler");
        $__internal_c536d1402c5e9a2e8db62e5d09416534c97a3b57d3beed4a20009e5ad716f2a8->enter($__internal_c536d1402c5e9a2e8db62e5d09416534c97a3b57d3beed4a20009e5ad716f2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c536d1402c5e9a2e8db62e5d09416534c97a3b57d3beed4a20009e5ad716f2a8->leave($__internal_c536d1402c5e9a2e8db62e5d09416534c97a3b57d3beed4a20009e5ad716f2a8_prof);

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
