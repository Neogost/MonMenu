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
        $__internal_20a61dabffc061db203f347d9a011c8a428e5299f25c7c2f9a9467b862bdc3ed = $this->env->getExtension("native_profiler");
        $__internal_20a61dabffc061db203f347d9a011c8a428e5299f25c7c2f9a9467b862bdc3ed->enter($__internal_20a61dabffc061db203f347d9a011c8a428e5299f25c7c2f9a9467b862bdc3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_20a61dabffc061db203f347d9a011c8a428e5299f25c7c2f9a9467b862bdc3ed->leave($__internal_20a61dabffc061db203f347d9a011c8a428e5299f25c7c2f9a9467b862bdc3ed_prof);

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
