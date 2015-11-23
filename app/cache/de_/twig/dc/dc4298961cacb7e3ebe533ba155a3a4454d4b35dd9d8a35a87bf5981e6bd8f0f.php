<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_65cce11f187a2fae078532a9e68b0a654c6ff03448cee9692e160a9622c5e081 extends Twig_Template
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
        $__internal_f7bfdf6fed16e744cff8d048cdd8966c740df3cee82a91520531044f77588be5 = $this->env->getExtension("native_profiler");
        $__internal_f7bfdf6fed16e744cff8d048cdd8966c740df3cee82a91520531044f77588be5->enter($__internal_f7bfdf6fed16e744cff8d048cdd8966c740df3cee82a91520531044f77588be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f7bfdf6fed16e744cff8d048cdd8966c740df3cee82a91520531044f77588be5->leave($__internal_f7bfdf6fed16e744cff8d048cdd8966c740df3cee82a91520531044f77588be5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
