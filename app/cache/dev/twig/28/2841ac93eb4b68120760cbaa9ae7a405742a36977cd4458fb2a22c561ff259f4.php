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
        $__internal_4f409b17e4aa5f8556ccb7cb555b7fbc9410368a3beae3da034d82a1e03cdb8d = $this->env->getExtension("native_profiler");
        $__internal_4f409b17e4aa5f8556ccb7cb555b7fbc9410368a3beae3da034d82a1e03cdb8d->enter($__internal_4f409b17e4aa5f8556ccb7cb555b7fbc9410368a3beae3da034d82a1e03cdb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4f409b17e4aa5f8556ccb7cb555b7fbc9410368a3beae3da034d82a1e03cdb8d->leave($__internal_4f409b17e4aa5f8556ccb7cb555b7fbc9410368a3beae3da034d82a1e03cdb8d_prof);

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