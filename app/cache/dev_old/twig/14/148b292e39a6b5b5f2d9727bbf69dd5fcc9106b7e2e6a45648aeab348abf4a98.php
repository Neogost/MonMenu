<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_469ff8eeb58fa19f777097e2ac9791ce4860d1a0fd6fe8103cda9987a33143bb extends Twig_Template
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
        $__internal_14b3d423bfdade6011a07281fdd37d87a491df052962ccae639940b9d16507be = $this->env->getExtension("native_profiler");
        $__internal_14b3d423bfdade6011a07281fdd37d87a491df052962ccae639940b9d16507be->enter($__internal_14b3d423bfdade6011a07281fdd37d87a491df052962ccae639940b9d16507be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_14b3d423bfdade6011a07281fdd37d87a491df052962ccae639940b9d16507be->leave($__internal_14b3d423bfdade6011a07281fdd37d87a491df052962ccae639940b9d16507be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
