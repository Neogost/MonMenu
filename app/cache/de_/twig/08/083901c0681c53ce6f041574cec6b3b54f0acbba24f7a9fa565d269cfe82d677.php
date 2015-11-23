<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6611dcb87873d56f51a3c2d328876b3ed43c77f971c6668d07a62d37b1086461 extends Twig_Template
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
        $__internal_88b5f0518962a7b80629dda11236028a1013479daddc99338676efbadd703538 = $this->env->getExtension("native_profiler");
        $__internal_88b5f0518962a7b80629dda11236028a1013479daddc99338676efbadd703538->enter($__internal_88b5f0518962a7b80629dda11236028a1013479daddc99338676efbadd703538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_88b5f0518962a7b80629dda11236028a1013479daddc99338676efbadd703538->leave($__internal_88b5f0518962a7b80629dda11236028a1013479daddc99338676efbadd703538_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
