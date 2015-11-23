<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9144d357a8b4b15ad0612d31ba0978918c6ee8fb914c39bcc7a51dd90944f918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ce5a434e13e7963a8043063fa0d332c1945c37ab84b21c7607f59d396efd0cf = $this->env->getExtension("native_profiler");
        $__internal_7ce5a434e13e7963a8043063fa0d332c1945c37ab84b21c7607f59d396efd0cf->enter($__internal_7ce5a434e13e7963a8043063fa0d332c1945c37ab84b21c7607f59d396efd0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7ce5a434e13e7963a8043063fa0d332c1945c37ab84b21c7607f59d396efd0cf->leave($__internal_7ce5a434e13e7963a8043063fa0d332c1945c37ab84b21c7607f59d396efd0cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
