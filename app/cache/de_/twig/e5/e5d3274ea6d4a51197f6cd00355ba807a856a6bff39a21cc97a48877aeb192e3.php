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
        $__internal_eb3deb3d27d19c7fd9230a3ef1580bf9eea89f917ed085f25185847f6d54d4e9 = $this->env->getExtension("native_profiler");
        $__internal_eb3deb3d27d19c7fd9230a3ef1580bf9eea89f917ed085f25185847f6d54d4e9->enter($__internal_eb3deb3d27d19c7fd9230a3ef1580bf9eea89f917ed085f25185847f6d54d4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3deb3d27d19c7fd9230a3ef1580bf9eea89f917ed085f25185847f6d54d4e9->leave($__internal_eb3deb3d27d19c7fd9230a3ef1580bf9eea89f917ed085f25185847f6d54d4e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a99c29d3cbc5d26aa8515deb921a5beb8336a7664c358c30572c60acac19a6be = $this->env->getExtension("native_profiler");
        $__internal_a99c29d3cbc5d26aa8515deb921a5beb8336a7664c358c30572c60acac19a6be->enter($__internal_a99c29d3cbc5d26aa8515deb921a5beb8336a7664c358c30572c60acac19a6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a99c29d3cbc5d26aa8515deb921a5beb8336a7664c358c30572c60acac19a6be->leave($__internal_a99c29d3cbc5d26aa8515deb921a5beb8336a7664c358c30572c60acac19a6be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c21d6a5e6bbc4c86c1349453072d40a2774b3d9c0ddd29d85bba3003259a95c = $this->env->getExtension("native_profiler");
        $__internal_6c21d6a5e6bbc4c86c1349453072d40a2774b3d9c0ddd29d85bba3003259a95c->enter($__internal_6c21d6a5e6bbc4c86c1349453072d40a2774b3d9c0ddd29d85bba3003259a95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c21d6a5e6bbc4c86c1349453072d40a2774b3d9c0ddd29d85bba3003259a95c->leave($__internal_6c21d6a5e6bbc4c86c1349453072d40a2774b3d9c0ddd29d85bba3003259a95c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2cd25027da0a7882e1bbbe7c80a07ceeeb15ff91bab6be80390fcbd0163e740 = $this->env->getExtension("native_profiler");
        $__internal_e2cd25027da0a7882e1bbbe7c80a07ceeeb15ff91bab6be80390fcbd0163e740->enter($__internal_e2cd25027da0a7882e1bbbe7c80a07ceeeb15ff91bab6be80390fcbd0163e740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e2cd25027da0a7882e1bbbe7c80a07ceeeb15ff91bab6be80390fcbd0163e740->leave($__internal_e2cd25027da0a7882e1bbbe7c80a07ceeeb15ff91bab6be80390fcbd0163e740_prof);

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
