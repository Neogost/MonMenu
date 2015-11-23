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
        $__internal_e14a378158127f27f687af2c7a6862bd9f986e4ff7271dd8c57aeff6f1c7cd41 = $this->env->getExtension("native_profiler");
        $__internal_e14a378158127f27f687af2c7a6862bd9f986e4ff7271dd8c57aeff6f1c7cd41->enter($__internal_e14a378158127f27f687af2c7a6862bd9f986e4ff7271dd8c57aeff6f1c7cd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e14a378158127f27f687af2c7a6862bd9f986e4ff7271dd8c57aeff6f1c7cd41->leave($__internal_e14a378158127f27f687af2c7a6862bd9f986e4ff7271dd8c57aeff6f1c7cd41_prof);

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
