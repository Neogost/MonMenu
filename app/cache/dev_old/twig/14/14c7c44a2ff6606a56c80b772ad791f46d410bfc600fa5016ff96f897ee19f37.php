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
        $__internal_34f10e32ffada6d49ececb97a413649dedb035abcd84585535e764303cfb8198 = $this->env->getExtension("native_profiler");
        $__internal_34f10e32ffada6d49ececb97a413649dedb035abcd84585535e764303cfb8198->enter($__internal_34f10e32ffada6d49ececb97a413649dedb035abcd84585535e764303cfb8198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34f10e32ffada6d49ececb97a413649dedb035abcd84585535e764303cfb8198->leave($__internal_34f10e32ffada6d49ececb97a413649dedb035abcd84585535e764303cfb8198_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_decb04b6627750743c24256d2aa6ad148295702c99cf5732f229cfe898956339 = $this->env->getExtension("native_profiler");
        $__internal_decb04b6627750743c24256d2aa6ad148295702c99cf5732f229cfe898956339->enter($__internal_decb04b6627750743c24256d2aa6ad148295702c99cf5732f229cfe898956339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_decb04b6627750743c24256d2aa6ad148295702c99cf5732f229cfe898956339->leave($__internal_decb04b6627750743c24256d2aa6ad148295702c99cf5732f229cfe898956339_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf454f7056665285f1934edb0123a56632f0c545937dde230dc1bbcebe49865c = $this->env->getExtension("native_profiler");
        $__internal_bf454f7056665285f1934edb0123a56632f0c545937dde230dc1bbcebe49865c->enter($__internal_bf454f7056665285f1934edb0123a56632f0c545937dde230dc1bbcebe49865c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_bf454f7056665285f1934edb0123a56632f0c545937dde230dc1bbcebe49865c->leave($__internal_bf454f7056665285f1934edb0123a56632f0c545937dde230dc1bbcebe49865c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cc82cce96cc1aae3d5e57bea2d771a2ea92d100d27038a4d47a197446fdf0bf = $this->env->getExtension("native_profiler");
        $__internal_6cc82cce96cc1aae3d5e57bea2d771a2ea92d100d27038a4d47a197446fdf0bf->enter($__internal_6cc82cce96cc1aae3d5e57bea2d771a2ea92d100d27038a4d47a197446fdf0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6cc82cce96cc1aae3d5e57bea2d771a2ea92d100d27038a4d47a197446fdf0bf->leave($__internal_6cc82cce96cc1aae3d5e57bea2d771a2ea92d100d27038a4d47a197446fdf0bf_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_46de8d46ad86989a304f006789c199f6a6e3b4bc0f972bd650f6842263535d1b = $this->env->getExtension("native_profiler");
        $__internal_46de8d46ad86989a304f006789c199f6a6e3b4bc0f972bd650f6842263535d1b->enter($__internal_46de8d46ad86989a304f006789c199f6a6e3b4bc0f972bd650f6842263535d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_46de8d46ad86989a304f006789c199f6a6e3b4bc0f972bd650f6842263535d1b->leave($__internal_46de8d46ad86989a304f006789c199f6a6e3b4bc0f972bd650f6842263535d1b_prof);

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
