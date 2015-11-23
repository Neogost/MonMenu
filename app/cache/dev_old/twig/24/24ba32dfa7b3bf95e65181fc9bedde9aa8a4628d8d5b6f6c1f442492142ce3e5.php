<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_40f06e18cbce8f8ab0190870063ad8be802ea2e426dee755ab4d3eaca0db45b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca1d8fc5ce4d56698195d5d3f3ad568da45f54fdae708801862f6e390482fdc6 = $this->env->getExtension("native_profiler");
        $__internal_ca1d8fc5ce4d56698195d5d3f3ad568da45f54fdae708801862f6e390482fdc6->enter($__internal_ca1d8fc5ce4d56698195d5d3f3ad568da45f54fdae708801862f6e390482fdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ca1d8fc5ce4d56698195d5d3f3ad568da45f54fdae708801862f6e390482fdc6->leave($__internal_ca1d8fc5ce4d56698195d5d3f3ad568da45f54fdae708801862f6e390482fdc6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0763bb6237c4d4769ad1394489b4eb5984477efe9b0dc3b023fc26cf42011356 = $this->env->getExtension("native_profiler");
        $__internal_0763bb6237c4d4769ad1394489b4eb5984477efe9b0dc3b023fc26cf42011356->enter($__internal_0763bb6237c4d4769ad1394489b4eb5984477efe9b0dc3b023fc26cf42011356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0763bb6237c4d4769ad1394489b4eb5984477efe9b0dc3b023fc26cf42011356->leave($__internal_0763bb6237c4d4769ad1394489b4eb5984477efe9b0dc3b023fc26cf42011356_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f56ac05c09e8e942c2cce7cfa5eabf3c0c3d8ea961a4a3f33f190c6fd4a3aff5 = $this->env->getExtension("native_profiler");
        $__internal_f56ac05c09e8e942c2cce7cfa5eabf3c0c3d8ea961a4a3f33f190c6fd4a3aff5->enter($__internal_f56ac05c09e8e942c2cce7cfa5eabf3c0c3d8ea961a4a3f33f190c6fd4a3aff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f56ac05c09e8e942c2cce7cfa5eabf3c0c3d8ea961a4a3f33f190c6fd4a3aff5->leave($__internal_f56ac05c09e8e942c2cce7cfa5eabf3c0c3d8ea961a4a3f33f190c6fd4a3aff5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_230ddde334e5685d59137d6a14240481ba63b1a3c52eeeeb9bc9b0f0c5be25ef = $this->env->getExtension("native_profiler");
        $__internal_230ddde334e5685d59137d6a14240481ba63b1a3c52eeeeb9bc9b0f0c5be25ef->enter($__internal_230ddde334e5685d59137d6a14240481ba63b1a3c52eeeeb9bc9b0f0c5be25ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_230ddde334e5685d59137d6a14240481ba63b1a3c52eeeeb9bc9b0f0c5be25ef->leave($__internal_230ddde334e5685d59137d6a14240481ba63b1a3c52eeeeb9bc9b0f0c5be25ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
