<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1f61400ceb440748e5c17dd34186cba65b0978f40ec276aa2504a77a5a370f0d extends Twig_Template
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
        $__internal_2ab4d4d461cf9b5f9f4d8d0866e3f6767b440af583d35bf6d3b39a6cf990b85d = $this->env->getExtension("native_profiler");
        $__internal_2ab4d4d461cf9b5f9f4d8d0866e3f6767b440af583d35bf6d3b39a6cf990b85d->enter($__internal_2ab4d4d461cf9b5f9f4d8d0866e3f6767b440af583d35bf6d3b39a6cf990b85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2ab4d4d461cf9b5f9f4d8d0866e3f6767b440af583d35bf6d3b39a6cf990b85d->leave($__internal_2ab4d4d461cf9b5f9f4d8d0866e3f6767b440af583d35bf6d3b39a6cf990b85d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
