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
        $__internal_0a8a77396b4ec2dfb93f4c9c7d940deb9aff570203f85ffa4448e2346c641280 = $this->env->getExtension("native_profiler");
        $__internal_0a8a77396b4ec2dfb93f4c9c7d940deb9aff570203f85ffa4448e2346c641280->enter($__internal_0a8a77396b4ec2dfb93f4c9c7d940deb9aff570203f85ffa4448e2346c641280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_0a8a77396b4ec2dfb93f4c9c7d940deb9aff570203f85ffa4448e2346c641280->leave($__internal_0a8a77396b4ec2dfb93f4c9c7d940deb9aff570203f85ffa4448e2346c641280_prof);

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
