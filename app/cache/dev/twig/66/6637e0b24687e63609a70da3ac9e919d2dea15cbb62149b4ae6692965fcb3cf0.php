<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_481de147346e3655cc74db79110fd2f38f42675f149374d0fe10ce8fa41286da extends Twig_Template
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
        $__internal_ae71f8f584866119323acd07bd13a8c6502db810fb59987a9f3c86f773cc4dfe = $this->env->getExtension("native_profiler");
        $__internal_ae71f8f584866119323acd07bd13a8c6502db810fb59987a9f3c86f773cc4dfe->enter($__internal_ae71f8f584866119323acd07bd13a8c6502db810fb59987a9f3c86f773cc4dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ae71f8f584866119323acd07bd13a8c6502db810fb59987a9f3c86f773cc4dfe->leave($__internal_ae71f8f584866119323acd07bd13a8c6502db810fb59987a9f3c86f773cc4dfe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
