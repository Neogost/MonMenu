<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_d9a0dc36a6a48c2eaa08ce8d089b4126d080ca82468e942e44b14f619310915c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22394691f8fd358bc89f4643e6412de23e759b430dbbadaa28951e9a10395aef = $this->env->getExtension("native_profiler");
        $__internal_22394691f8fd358bc89f4643e6412de23e759b430dbbadaa28951e9a10395aef->enter($__internal_22394691f8fd358bc89f4643e6412de23e759b430dbbadaa28951e9a10395aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22394691f8fd358bc89f4643e6412de23e759b430dbbadaa28951e9a10395aef->leave($__internal_22394691f8fd358bc89f4643e6412de23e759b430dbbadaa28951e9a10395aef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13373ee1771ea3fdf5e2b7b9d7b19969780c2c9c7897fff6f0f74bc99df6fcc5 = $this->env->getExtension("native_profiler");
        $__internal_13373ee1771ea3fdf5e2b7b9d7b19969780c2c9c7897fff6f0f74bc99df6fcc5->enter($__internal_13373ee1771ea3fdf5e2b7b9d7b19969780c2c9c7897fff6f0f74bc99df6fcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_13373ee1771ea3fdf5e2b7b9d7b19969780c2c9c7897fff6f0f74bc99df6fcc5->leave($__internal_13373ee1771ea3fdf5e2b7b9d7b19969780c2c9c7897fff6f0f74bc99df6fcc5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1612080f4aa31a9cd8fd112ef448af192a19ea588ab6d70e7467bd086da500ea = $this->env->getExtension("native_profiler");
        $__internal_1612080f4aa31a9cd8fd112ef448af192a19ea588ab6d70e7467bd086da500ea->enter($__internal_1612080f4aa31a9cd8fd112ef448af192a19ea588ab6d70e7467bd086da500ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1612080f4aa31a9cd8fd112ef448af192a19ea588ab6d70e7467bd086da500ea->leave($__internal_1612080f4aa31a9cd8fd112ef448af192a19ea588ab6d70e7467bd086da500ea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e786cbd003f53eb64bd2bf8533077ee9c23d8f702daf66c841e649bae8c46cab = $this->env->getExtension("native_profiler");
        $__internal_e786cbd003f53eb64bd2bf8533077ee9c23d8f702daf66c841e649bae8c46cab->enter($__internal_e786cbd003f53eb64bd2bf8533077ee9c23d8f702daf66c841e649bae8c46cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_e786cbd003f53eb64bd2bf8533077ee9c23d8f702daf66c841e649bae8c46cab->leave($__internal_e786cbd003f53eb64bd2bf8533077ee9c23d8f702daf66c841e649bae8c46cab_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_80fca6e616d9393de8d2d0eb98c20cfc845461a48c7247ae8be11252879e5ded = $this->env->getExtension("native_profiler");
        $__internal_80fca6e616d9393de8d2d0eb98c20cfc845461a48c7247ae8be11252879e5ded->enter($__internal_80fca6e616d9393de8d2d0eb98c20cfc845461a48c7247ae8be11252879e5ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_80fca6e616d9393de8d2d0eb98c20cfc845461a48c7247ae8be11252879e5ded->leave($__internal_80fca6e616d9393de8d2d0eb98c20cfc845461a48c7247ae8be11252879e5ded_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
