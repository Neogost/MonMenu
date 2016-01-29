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
        $__internal_3ec929a6c3a792f766450f04144e56f9c1b9f76b170008a9e56e0226ca5d9a48 = $this->env->getExtension("native_profiler");
        $__internal_3ec929a6c3a792f766450f04144e56f9c1b9f76b170008a9e56e0226ca5d9a48->enter($__internal_3ec929a6c3a792f766450f04144e56f9c1b9f76b170008a9e56e0226ca5d9a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_3ec929a6c3a792f766450f04144e56f9c1b9f76b170008a9e56e0226ca5d9a48->leave($__internal_3ec929a6c3a792f766450f04144e56f9c1b9f76b170008a9e56e0226ca5d9a48_prof);

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
