<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fa58845436a6a3a8a576e3593e1d8425270245965b5bb4a032e0066b17d45616 extends Twig_Template
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
        $__internal_5875f35835e630ad9aa6c28c39a8f040dc4bfedd778e7156f12fde1892556b27 = $this->env->getExtension("native_profiler");
        $__internal_5875f35835e630ad9aa6c28c39a8f040dc4bfedd778e7156f12fde1892556b27->enter($__internal_5875f35835e630ad9aa6c28c39a8f040dc4bfedd778e7156f12fde1892556b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5875f35835e630ad9aa6c28c39a8f040dc4bfedd778e7156f12fde1892556b27->leave($__internal_5875f35835e630ad9aa6c28c39a8f040dc4bfedd778e7156f12fde1892556b27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */