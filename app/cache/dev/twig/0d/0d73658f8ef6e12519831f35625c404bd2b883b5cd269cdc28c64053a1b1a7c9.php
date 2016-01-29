<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_51ab876dfe6d08ad082b1cf8d3b2e2024039b6d5efee5163a48b73d7d14b9e00 extends Twig_Template
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
        $__internal_09e0e19277afa4d82e10de50bbbaaac80ec4c6e6067908af3853db62b7f4a1f8 = $this->env->getExtension("native_profiler");
        $__internal_09e0e19277afa4d82e10de50bbbaaac80ec4c6e6067908af3853db62b7f4a1f8->enter($__internal_09e0e19277afa4d82e10de50bbbaaac80ec4c6e6067908af3853db62b7f4a1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_09e0e19277afa4d82e10de50bbbaaac80ec4c6e6067908af3853db62b7f4a1f8->leave($__internal_09e0e19277afa4d82e10de50bbbaaac80ec4c6e6067908af3853db62b7f4a1f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
