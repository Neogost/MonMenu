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
        $__internal_66aff24b0b509fe2f608e9c75e5cd746e9c9a2c739fef47cb0c14a2898b13f10 = $this->env->getExtension("native_profiler");
        $__internal_66aff24b0b509fe2f608e9c75e5cd746e9c9a2c739fef47cb0c14a2898b13f10->enter($__internal_66aff24b0b509fe2f608e9c75e5cd746e9c9a2c739fef47cb0c14a2898b13f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_66aff24b0b509fe2f608e9c75e5cd746e9c9a2c739fef47cb0c14a2898b13f10->leave($__internal_66aff24b0b509fe2f608e9c75e5cd746e9c9a2c739fef47cb0c14a2898b13f10_prof);

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
