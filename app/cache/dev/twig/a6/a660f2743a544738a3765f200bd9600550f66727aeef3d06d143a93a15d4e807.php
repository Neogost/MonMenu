<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_38ee1e517cb4d87dd1fd97df3bcdc3c497553875d6fe0acc500599a72a4f9f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_930b7e470fae5e428c643c29b8f87c295c07c1d402b5f54eb792ed267a02bb52 = $this->env->getExtension("native_profiler");
        $__internal_930b7e470fae5e428c643c29b8f87c295c07c1d402b5f54eb792ed267a02bb52->enter($__internal_930b7e470fae5e428c643c29b8f87c295c07c1d402b5f54eb792ed267a02bb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_930b7e470fae5e428c643c29b8f87c295c07c1d402b5f54eb792ed267a02bb52->leave($__internal_930b7e470fae5e428c643c29b8f87c295c07c1d402b5f54eb792ed267a02bb52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3535f5fa08e2714bb29580f60c6013a39480434650ee821ba1f2fb1e549ba5b1 = $this->env->getExtension("native_profiler");
        $__internal_3535f5fa08e2714bb29580f60c6013a39480434650ee821ba1f2fb1e549ba5b1->enter($__internal_3535f5fa08e2714bb29580f60c6013a39480434650ee821ba1f2fb1e549ba5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <svg width=\"13\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 13 28\" enable-background=\"new 0 0 13 28\" xml:space=\"preserve\"><g><rect x=\"3\" y=\"11\" fill=\"#BCBCBB\" width=\"7\" height=\"9\"/></g><g><path fill=\"#3F3F3F\" d=\"M11 6V21H2V6H0V22c0 0.6 0.4 1 1 1h11c0.6 0 1-0.4 1-1V6H11z\"/></g></svg>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "WebProfilerBundle:Collector:memory.html.twig", 16)->display(array_merge($context, array("link" => false)));
        
        $__internal_3535f5fa08e2714bb29580f60c6013a39480434650ee821ba1f2fb1e549ba5b1->leave($__internal_3535f5fa08e2714bb29580f60c6013a39480434650ee821ba1f2fb1e549ba5b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  60 => 13,  56 => 11,  53 => 10,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <span>*/
/*             <svg width="13" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 13 28" enable-background="new 0 0 13 28" xml:space="preserve"><g><rect x="3" y="11" fill="#BCBCBB" width="7" height="9"/></g><g><path fill="#3F3F3F" d="M11 6V21H2V6H0V22c0 0.6 0.4 1 1 1h11c0.6 0 1-0.4 1-1V6H11z"/></g></svg>*/
/*             <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>*/
/*         </span>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Memory usage</b>*/
/*             <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} / {{ collector.memoryLimit == -1 ? '&infin;' : '%.1f'|format(collector.memoryLimit / 1024 / 1024)|escape }} MB</span>*/
/*         </div>*/
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}*/
/* {% endblock %}*/
/* */
