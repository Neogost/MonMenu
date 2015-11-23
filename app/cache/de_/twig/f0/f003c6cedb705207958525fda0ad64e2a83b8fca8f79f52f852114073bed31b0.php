<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_22e5b29629faafab7a3c430cfdc831eb3c88bccfb7705c653b66859aed113056 extends Twig_Template
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
        $__internal_cf09e05190a0d0d77c91e0d63d3f0ceb324f3f758a493d2370fa51fd83af14c4 = $this->env->getExtension("native_profiler");
        $__internal_cf09e05190a0d0d77c91e0d63d3f0ceb324f3f758a493d2370fa51fd83af14c4->enter($__internal_cf09e05190a0d0d77c91e0d63d3f0ceb324f3f758a493d2370fa51fd83af14c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cf09e05190a0d0d77c91e0d63d3f0ceb324f3f758a493d2370fa51fd83af14c4->leave($__internal_cf09e05190a0d0d77c91e0d63d3f0ceb324f3f758a493d2370fa51fd83af14c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
