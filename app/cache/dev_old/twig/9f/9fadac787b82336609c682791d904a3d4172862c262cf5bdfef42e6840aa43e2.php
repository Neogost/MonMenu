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
        $__internal_0c30c097bfbce28139675527e9cc159222cf5531ba690ce639159ad1d2b00e85 = $this->env->getExtension("native_profiler");
        $__internal_0c30c097bfbce28139675527e9cc159222cf5531ba690ce639159ad1d2b00e85->enter($__internal_0c30c097bfbce28139675527e9cc159222cf5531ba690ce639159ad1d2b00e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0c30c097bfbce28139675527e9cc159222cf5531ba690ce639159ad1d2b00e85->leave($__internal_0c30c097bfbce28139675527e9cc159222cf5531ba690ce639159ad1d2b00e85_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0daec747ede6c56b4d35d75f24afc7fdba772b2680c6084ebde9ca864c72212 = $this->env->getExtension("native_profiler");
        $__internal_a0daec747ede6c56b4d35d75f24afc7fdba772b2680c6084ebde9ca864c72212->enter($__internal_a0daec747ede6c56b4d35d75f24afc7fdba772b2680c6084ebde9ca864c72212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a0daec747ede6c56b4d35d75f24afc7fdba772b2680c6084ebde9ca864c72212->leave($__internal_a0daec747ede6c56b4d35d75f24afc7fdba772b2680c6084ebde9ca864c72212_prof);

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
