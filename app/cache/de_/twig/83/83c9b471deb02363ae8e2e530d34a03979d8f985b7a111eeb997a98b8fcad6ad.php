<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_111403c0357372c01fb02ad707495511a9c7edf51c083eb1d54a17cd63366b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_fd7ea80064f349421edf28c10f6295839ab306e2bb9ff8697f3a864fc5216a72 = $this->env->getExtension("native_profiler");
        $__internal_fd7ea80064f349421edf28c10f6295839ab306e2bb9ff8697f3a864fc5216a72->enter($__internal_fd7ea80064f349421edf28c10f6295839ab306e2bb9ff8697f3a864fc5216a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7ea80064f349421edf28c10f6295839ab306e2bb9ff8697f3a864fc5216a72->leave($__internal_fd7ea80064f349421edf28c10f6295839ab306e2bb9ff8697f3a864fc5216a72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78da44a81aa3292a16539b4845d1d53f8eeea65e85184f520b24766008d7e83b = $this->env->getExtension("native_profiler");
        $__internal_78da44a81aa3292a16539b4845d1d53f8eeea65e85184f520b24766008d7e83b->enter($__internal_78da44a81aa3292a16539b4845d1d53f8eeea65e85184f520b24766008d7e83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_78da44a81aa3292a16539b4845d1d53f8eeea65e85184f520b24766008d7e83b->leave($__internal_78da44a81aa3292a16539b4845d1d53f8eeea65e85184f520b24766008d7e83b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_573076952dd33b41e1fe74f2aefb276d6213665890b6ae14a5e301507d95a22f = $this->env->getExtension("native_profiler");
        $__internal_573076952dd33b41e1fe74f2aefb276d6213665890b6ae14a5e301507d95a22f->enter($__internal_573076952dd33b41e1fe74f2aefb276d6213665890b6ae14a5e301507d95a22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_573076952dd33b41e1fe74f2aefb276d6213665890b6ae14a5e301507d95a22f->leave($__internal_573076952dd33b41e1fe74f2aefb276d6213665890b6ae14a5e301507d95a22f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
