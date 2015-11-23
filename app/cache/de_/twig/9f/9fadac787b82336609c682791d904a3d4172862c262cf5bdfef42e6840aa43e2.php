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
        $__internal_1bdf4b3e11946509eafe01e79b07d9b2aceefa2361aea9ef60582b552908772e = $this->env->getExtension("native_profiler");
        $__internal_1bdf4b3e11946509eafe01e79b07d9b2aceefa2361aea9ef60582b552908772e->enter($__internal_1bdf4b3e11946509eafe01e79b07d9b2aceefa2361aea9ef60582b552908772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1bdf4b3e11946509eafe01e79b07d9b2aceefa2361aea9ef60582b552908772e->leave($__internal_1bdf4b3e11946509eafe01e79b07d9b2aceefa2361aea9ef60582b552908772e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_579ea2e28f2121385b8eba9b3f10edd8a39e896ec11a7c40406dcef40a06a144 = $this->env->getExtension("native_profiler");
        $__internal_579ea2e28f2121385b8eba9b3f10edd8a39e896ec11a7c40406dcef40a06a144->enter($__internal_579ea2e28f2121385b8eba9b3f10edd8a39e896ec11a7c40406dcef40a06a144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_579ea2e28f2121385b8eba9b3f10edd8a39e896ec11a7c40406dcef40a06a144->leave($__internal_579ea2e28f2121385b8eba9b3f10edd8a39e896ec11a7c40406dcef40a06a144_prof);

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
