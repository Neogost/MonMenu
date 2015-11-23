<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b4308b20ba650ac78ef00a3368b2cdb08120ca2db96dd4ca1e14d71c39936bab extends Twig_Template
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
        $__internal_1e2083927a7969a7bf62a6a2cdaea890926f89cee78dec5287aa596fe35f4a8e = $this->env->getExtension("native_profiler");
        $__internal_1e2083927a7969a7bf62a6a2cdaea890926f89cee78dec5287aa596fe35f4a8e->enter($__internal_1e2083927a7969a7bf62a6a2cdaea890926f89cee78dec5287aa596fe35f4a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1e2083927a7969a7bf62a6a2cdaea890926f89cee78dec5287aa596fe35f4a8e->leave($__internal_1e2083927a7969a7bf62a6a2cdaea890926f89cee78dec5287aa596fe35f4a8e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
