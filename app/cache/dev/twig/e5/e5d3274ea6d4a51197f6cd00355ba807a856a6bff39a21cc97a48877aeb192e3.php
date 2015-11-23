<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_944f541670601e4083fd424d9c09ad088c144998a4d52aecdbc7f333e7af8017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9bcffe5de39206e92b80f7870f71e5757cdf191be59033c8763e108c7f2c9fa = $this->env->getExtension("native_profiler");
        $__internal_b9bcffe5de39206e92b80f7870f71e5757cdf191be59033c8763e108c7f2c9fa->enter($__internal_b9bcffe5de39206e92b80f7870f71e5757cdf191be59033c8763e108c7f2c9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9bcffe5de39206e92b80f7870f71e5757cdf191be59033c8763e108c7f2c9fa->leave($__internal_b9bcffe5de39206e92b80f7870f71e5757cdf191be59033c8763e108c7f2c9fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_684bfd6614df242c2ad9c29253809a2151fffa18075ef200c5a554d1d6b14665 = $this->env->getExtension("native_profiler");
        $__internal_684bfd6614df242c2ad9c29253809a2151fffa18075ef200c5a554d1d6b14665->enter($__internal_684bfd6614df242c2ad9c29253809a2151fffa18075ef200c5a554d1d6b14665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_684bfd6614df242c2ad9c29253809a2151fffa18075ef200c5a554d1d6b14665->leave($__internal_684bfd6614df242c2ad9c29253809a2151fffa18075ef200c5a554d1d6b14665_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aee0b28f40d2d703292c4661563e26ff4800e6466a442be5a9222046a2d2ea40 = $this->env->getExtension("native_profiler");
        $__internal_aee0b28f40d2d703292c4661563e26ff4800e6466a442be5a9222046a2d2ea40->enter($__internal_aee0b28f40d2d703292c4661563e26ff4800e6466a442be5a9222046a2d2ea40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aee0b28f40d2d703292c4661563e26ff4800e6466a442be5a9222046a2d2ea40->leave($__internal_aee0b28f40d2d703292c4661563e26ff4800e6466a442be5a9222046a2d2ea40_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7973d13025b657cbfd716e8bc75348e928d252b17adf537464db03272ea13e86 = $this->env->getExtension("native_profiler");
        $__internal_7973d13025b657cbfd716e8bc75348e928d252b17adf537464db03272ea13e86->enter($__internal_7973d13025b657cbfd716e8bc75348e928d252b17adf537464db03272ea13e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7973d13025b657cbfd716e8bc75348e928d252b17adf537464db03272ea13e86->leave($__internal_7973d13025b657cbfd716e8bc75348e928d252b17adf537464db03272ea13e86_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
