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
        $__internal_2faf5c2e9db01613add6490e9711bc5ade29e07cc97eeca2e158f1b97957e289 = $this->env->getExtension("native_profiler");
        $__internal_2faf5c2e9db01613add6490e9711bc5ade29e07cc97eeca2e158f1b97957e289->enter($__internal_2faf5c2e9db01613add6490e9711bc5ade29e07cc97eeca2e158f1b97957e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2faf5c2e9db01613add6490e9711bc5ade29e07cc97eeca2e158f1b97957e289->leave($__internal_2faf5c2e9db01613add6490e9711bc5ade29e07cc97eeca2e158f1b97957e289_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4ac9e8cb7ea8c23b27a77ef4edcac72d6389507a77e0c2095782ae6c4327175 = $this->env->getExtension("native_profiler");
        $__internal_a4ac9e8cb7ea8c23b27a77ef4edcac72d6389507a77e0c2095782ae6c4327175->enter($__internal_a4ac9e8cb7ea8c23b27a77ef4edcac72d6389507a77e0c2095782ae6c4327175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a4ac9e8cb7ea8c23b27a77ef4edcac72d6389507a77e0c2095782ae6c4327175->leave($__internal_a4ac9e8cb7ea8c23b27a77ef4edcac72d6389507a77e0c2095782ae6c4327175_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8039df1e5a682adaf1067affff8561520603d74f8d1ed7e5142e94be9f764afb = $this->env->getExtension("native_profiler");
        $__internal_8039df1e5a682adaf1067affff8561520603d74f8d1ed7e5142e94be9f764afb->enter($__internal_8039df1e5a682adaf1067affff8561520603d74f8d1ed7e5142e94be9f764afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8039df1e5a682adaf1067affff8561520603d74f8d1ed7e5142e94be9f764afb->leave($__internal_8039df1e5a682adaf1067affff8561520603d74f8d1ed7e5142e94be9f764afb_prof);

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
