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
        $__internal_f01d53828be59f4a239ccb9281cbd1237a6397c86b6bdb867fffc79e5777d679 = $this->env->getExtension("native_profiler");
        $__internal_f01d53828be59f4a239ccb9281cbd1237a6397c86b6bdb867fffc79e5777d679->enter($__internal_f01d53828be59f4a239ccb9281cbd1237a6397c86b6bdb867fffc79e5777d679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_f01d53828be59f4a239ccb9281cbd1237a6397c86b6bdb867fffc79e5777d679->leave($__internal_f01d53828be59f4a239ccb9281cbd1237a6397c86b6bdb867fffc79e5777d679_prof);

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
