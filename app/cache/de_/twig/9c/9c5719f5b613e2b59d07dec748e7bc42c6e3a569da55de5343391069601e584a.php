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
        $__internal_441c7138f8e88a8699d5ecba2ce8827764300ac3d8be78ebe502dc40843f0734 = $this->env->getExtension("native_profiler");
        $__internal_441c7138f8e88a8699d5ecba2ce8827764300ac3d8be78ebe502dc40843f0734->enter($__internal_441c7138f8e88a8699d5ecba2ce8827764300ac3d8be78ebe502dc40843f0734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_441c7138f8e88a8699d5ecba2ce8827764300ac3d8be78ebe502dc40843f0734->leave($__internal_441c7138f8e88a8699d5ecba2ce8827764300ac3d8be78ebe502dc40843f0734_prof);

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
