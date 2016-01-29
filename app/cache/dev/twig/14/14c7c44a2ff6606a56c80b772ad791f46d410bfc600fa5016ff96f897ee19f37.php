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
        $__internal_91358c98a4a451386487de6149fa2730dc5ee3488d96f34fdc288b5d71c40692 = $this->env->getExtension("native_profiler");
        $__internal_91358c98a4a451386487de6149fa2730dc5ee3488d96f34fdc288b5d71c40692->enter($__internal_91358c98a4a451386487de6149fa2730dc5ee3488d96f34fdc288b5d71c40692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91358c98a4a451386487de6149fa2730dc5ee3488d96f34fdc288b5d71c40692->leave($__internal_91358c98a4a451386487de6149fa2730dc5ee3488d96f34fdc288b5d71c40692_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1b868e76e08d9158a591b9355437d5803032fbdf1b365880053c1577cacf7d5 = $this->env->getExtension("native_profiler");
        $__internal_c1b868e76e08d9158a591b9355437d5803032fbdf1b365880053c1577cacf7d5->enter($__internal_c1b868e76e08d9158a591b9355437d5803032fbdf1b365880053c1577cacf7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c1b868e76e08d9158a591b9355437d5803032fbdf1b365880053c1577cacf7d5->leave($__internal_c1b868e76e08d9158a591b9355437d5803032fbdf1b365880053c1577cacf7d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77bea0a6219f737be517807518b46c1c13d202d8a5d25e4260e4481fb6d9d0dd = $this->env->getExtension("native_profiler");
        $__internal_77bea0a6219f737be517807518b46c1c13d202d8a5d25e4260e4481fb6d9d0dd->enter($__internal_77bea0a6219f737be517807518b46c1c13d202d8a5d25e4260e4481fb6d9d0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_77bea0a6219f737be517807518b46c1c13d202d8a5d25e4260e4481fb6d9d0dd->leave($__internal_77bea0a6219f737be517807518b46c1c13d202d8a5d25e4260e4481fb6d9d0dd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_29d74fc0c8b92824b8e4eed1100255e7bca2627efea57a28f22d4d9dabe712aa = $this->env->getExtension("native_profiler");
        $__internal_29d74fc0c8b92824b8e4eed1100255e7bca2627efea57a28f22d4d9dabe712aa->enter($__internal_29d74fc0c8b92824b8e4eed1100255e7bca2627efea57a28f22d4d9dabe712aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29d74fc0c8b92824b8e4eed1100255e7bca2627efea57a28f22d4d9dabe712aa->leave($__internal_29d74fc0c8b92824b8e4eed1100255e7bca2627efea57a28f22d4d9dabe712aa_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e66aba7023790e9610cc5476c6a118a28530f9f960157469fc96e64fbafda69 = $this->env->getExtension("native_profiler");
        $__internal_0e66aba7023790e9610cc5476c6a118a28530f9f960157469fc96e64fbafda69->enter($__internal_0e66aba7023790e9610cc5476c6a118a28530f9f960157469fc96e64fbafda69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0e66aba7023790e9610cc5476c6a118a28530f9f960157469fc96e64fbafda69->leave($__internal_0e66aba7023790e9610cc5476c6a118a28530f9f960157469fc96e64fbafda69_prof);

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
