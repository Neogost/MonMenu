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
        $__internal_a39e12a6535cb927abae8f44a8bdadc2de3fb2bf403db2c48b26aa7676560368 = $this->env->getExtension("native_profiler");
        $__internal_a39e12a6535cb927abae8f44a8bdadc2de3fb2bf403db2c48b26aa7676560368->enter($__internal_a39e12a6535cb927abae8f44a8bdadc2de3fb2bf403db2c48b26aa7676560368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39e12a6535cb927abae8f44a8bdadc2de3fb2bf403db2c48b26aa7676560368->leave($__internal_a39e12a6535cb927abae8f44a8bdadc2de3fb2bf403db2c48b26aa7676560368_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c8d11cca0cb40b14b1c4bb1343ac0225ec41a6a9055573d6abb92cb79ac20eb = $this->env->getExtension("native_profiler");
        $__internal_9c8d11cca0cb40b14b1c4bb1343ac0225ec41a6a9055573d6abb92cb79ac20eb->enter($__internal_9c8d11cca0cb40b14b1c4bb1343ac0225ec41a6a9055573d6abb92cb79ac20eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9c8d11cca0cb40b14b1c4bb1343ac0225ec41a6a9055573d6abb92cb79ac20eb->leave($__internal_9c8d11cca0cb40b14b1c4bb1343ac0225ec41a6a9055573d6abb92cb79ac20eb_prof);

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
