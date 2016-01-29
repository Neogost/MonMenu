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
        $__internal_b6360bcb735537f3a2cdf21f66ec1399450114af03d592bba3dfa90f1d26fd28 = $this->env->getExtension("native_profiler");
        $__internal_b6360bcb735537f3a2cdf21f66ec1399450114af03d592bba3dfa90f1d26fd28->enter($__internal_b6360bcb735537f3a2cdf21f66ec1399450114af03d592bba3dfa90f1d26fd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b6360bcb735537f3a2cdf21f66ec1399450114af03d592bba3dfa90f1d26fd28->leave($__internal_b6360bcb735537f3a2cdf21f66ec1399450114af03d592bba3dfa90f1d26fd28_prof);

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
