<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4c7642dea7f58accdd4366e04c8ecf5d2c20169e51417ffe97903f2ff1818b75 extends Twig_Template
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
        $__internal_dd86b534d8e4cac8bb81b7e0ea4eec420964ebd17d2a06810d5a85a0fa59d594 = $this->env->getExtension("native_profiler");
        $__internal_dd86b534d8e4cac8bb81b7e0ea4eec420964ebd17d2a06810d5a85a0fa59d594->enter($__internal_dd86b534d8e4cac8bb81b7e0ea4eec420964ebd17d2a06810d5a85a0fa59d594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dd86b534d8e4cac8bb81b7e0ea4eec420964ebd17d2a06810d5a85a0fa59d594->leave($__internal_dd86b534d8e4cac8bb81b7e0ea4eec420964ebd17d2a06810d5a85a0fa59d594_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
