<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_75a856c48806da0148649ab1c3b11695c4120cde56a85a6f1df423768c9e52a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_812b5caf56a6dd9ac161d0ea66c1cf105bc9bd0dfd2cb47f1c5c1f6db99d78e7 = $this->env->getExtension("native_profiler");
        $__internal_812b5caf56a6dd9ac161d0ea66c1cf105bc9bd0dfd2cb47f1c5c1f6db99d78e7->enter($__internal_812b5caf56a6dd9ac161d0ea66c1cf105bc9bd0dfd2cb47f1c5c1f6db99d78e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_812b5caf56a6dd9ac161d0ea66c1cf105bc9bd0dfd2cb47f1c5c1f6db99d78e7->leave($__internal_812b5caf56a6dd9ac161d0ea66c1cf105bc9bd0dfd2cb47f1c5c1f6db99d78e7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7439eb8c77bd2245a74a4f140745c05fa65cdf7f315cfb3787b225d995a4db32 = $this->env->getExtension("native_profiler");
        $__internal_7439eb8c77bd2245a74a4f140745c05fa65cdf7f315cfb3787b225d995a4db32->enter($__internal_7439eb8c77bd2245a74a4f140745c05fa65cdf7f315cfb3787b225d995a4db32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7439eb8c77bd2245a74a4f140745c05fa65cdf7f315cfb3787b225d995a4db32->leave($__internal_7439eb8c77bd2245a74a4f140745c05fa65cdf7f315cfb3787b225d995a4db32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
