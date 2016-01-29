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
        $__internal_d7b73376636d01f4e0ecbae2dc4cf19317c9f4f45c80fcc224d9714ba8aa968a = $this->env->getExtension("native_profiler");
        $__internal_d7b73376636d01f4e0ecbae2dc4cf19317c9f4f45c80fcc224d9714ba8aa968a->enter($__internal_d7b73376636d01f4e0ecbae2dc4cf19317c9f4f45c80fcc224d9714ba8aa968a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d7b73376636d01f4e0ecbae2dc4cf19317c9f4f45c80fcc224d9714ba8aa968a->leave($__internal_d7b73376636d01f4e0ecbae2dc4cf19317c9f4f45c80fcc224d9714ba8aa968a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_77526592d099f36f1854afc80ff88c60500f5d6d96986ef9a0b2ff5a2bf72c2f = $this->env->getExtension("native_profiler");
        $__internal_77526592d099f36f1854afc80ff88c60500f5d6d96986ef9a0b2ff5a2bf72c2f->enter($__internal_77526592d099f36f1854afc80ff88c60500f5d6d96986ef9a0b2ff5a2bf72c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_77526592d099f36f1854afc80ff88c60500f5d6d96986ef9a0b2ff5a2bf72c2f->leave($__internal_77526592d099f36f1854afc80ff88c60500f5d6d96986ef9a0b2ff5a2bf72c2f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8546c235a02c735638a79018178a787fa22eb07a1394680692c4cb8d7fb2be5b = $this->env->getExtension("native_profiler");
        $__internal_8546c235a02c735638a79018178a787fa22eb07a1394680692c4cb8d7fb2be5b->enter($__internal_8546c235a02c735638a79018178a787fa22eb07a1394680692c4cb8d7fb2be5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8546c235a02c735638a79018178a787fa22eb07a1394680692c4cb8d7fb2be5b->leave($__internal_8546c235a02c735638a79018178a787fa22eb07a1394680692c4cb8d7fb2be5b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fc42f2d61aad1211219670ce4640c556a95cea8176e220553f4c4b6f2a1a75cb = $this->env->getExtension("native_profiler");
        $__internal_fc42f2d61aad1211219670ce4640c556a95cea8176e220553f4c4b6f2a1a75cb->enter($__internal_fc42f2d61aad1211219670ce4640c556a95cea8176e220553f4c4b6f2a1a75cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fc42f2d61aad1211219670ce4640c556a95cea8176e220553f4c4b6f2a1a75cb->leave($__internal_fc42f2d61aad1211219670ce4640c556a95cea8176e220553f4c4b6f2a1a75cb_prof);

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
