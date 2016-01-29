<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_19684d5a71281d42429cc8ac75b5c4db8ddf093f51926135e0c450ad5d53eb95 extends Twig_Template
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
        $__internal_5dc0a2e7af03d368a20866a4a282492cbcfcfe71e3bd6e1c84d8d4638a50a47f = $this->env->getExtension("native_profiler");
        $__internal_5dc0a2e7af03d368a20866a4a282492cbcfcfe71e3bd6e1c84d8d4638a50a47f->enter($__internal_5dc0a2e7af03d368a20866a4a282492cbcfcfe71e3bd6e1c84d8d4638a50a47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5dc0a2e7af03d368a20866a4a282492cbcfcfe71e3bd6e1c84d8d4638a50a47f->leave($__internal_5dc0a2e7af03d368a20866a4a282492cbcfcfe71e3bd6e1c84d8d4638a50a47f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
