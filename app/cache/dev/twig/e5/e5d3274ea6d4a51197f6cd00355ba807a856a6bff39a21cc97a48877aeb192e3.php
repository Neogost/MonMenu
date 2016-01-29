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
        $__internal_acbe6871658fc9f7ff5bd6a51576a85195e696bb403ee6ffa677214efa844ea9 = $this->env->getExtension("native_profiler");
        $__internal_acbe6871658fc9f7ff5bd6a51576a85195e696bb403ee6ffa677214efa844ea9->enter($__internal_acbe6871658fc9f7ff5bd6a51576a85195e696bb403ee6ffa677214efa844ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acbe6871658fc9f7ff5bd6a51576a85195e696bb403ee6ffa677214efa844ea9->leave($__internal_acbe6871658fc9f7ff5bd6a51576a85195e696bb403ee6ffa677214efa844ea9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0bd1292703be8fc08cb5d1f7189166d85fa09b15f6145c20be1c53bfa365239 = $this->env->getExtension("native_profiler");
        $__internal_c0bd1292703be8fc08cb5d1f7189166d85fa09b15f6145c20be1c53bfa365239->enter($__internal_c0bd1292703be8fc08cb5d1f7189166d85fa09b15f6145c20be1c53bfa365239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c0bd1292703be8fc08cb5d1f7189166d85fa09b15f6145c20be1c53bfa365239->leave($__internal_c0bd1292703be8fc08cb5d1f7189166d85fa09b15f6145c20be1c53bfa365239_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c2686dd9950f2848b149d5cbe1b6329ebfb7a49c6913278bcdaf8f2cf0c27c7 = $this->env->getExtension("native_profiler");
        $__internal_5c2686dd9950f2848b149d5cbe1b6329ebfb7a49c6913278bcdaf8f2cf0c27c7->enter($__internal_5c2686dd9950f2848b149d5cbe1b6329ebfb7a49c6913278bcdaf8f2cf0c27c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c2686dd9950f2848b149d5cbe1b6329ebfb7a49c6913278bcdaf8f2cf0c27c7->leave($__internal_5c2686dd9950f2848b149d5cbe1b6329ebfb7a49c6913278bcdaf8f2cf0c27c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b0b523fd111b1b2a61a28539b5bd84507364f4a93296a1baa1dd1fc20c542c8 = $this->env->getExtension("native_profiler");
        $__internal_4b0b523fd111b1b2a61a28539b5bd84507364f4a93296a1baa1dd1fc20c542c8->enter($__internal_4b0b523fd111b1b2a61a28539b5bd84507364f4a93296a1baa1dd1fc20c542c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4b0b523fd111b1b2a61a28539b5bd84507364f4a93296a1baa1dd1fc20c542c8->leave($__internal_4b0b523fd111b1b2a61a28539b5bd84507364f4a93296a1baa1dd1fc20c542c8_prof);

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
