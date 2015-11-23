<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a2241802c973416f83826b894603ffa9490c884a2deaf57e95d64d6770611c2e extends Twig_Template
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
        $__internal_2180f7cf7fe3b2cf75015a2684d6fb6eb5acbe7164c91e82d745039255a873b1 = $this->env->getExtension("native_profiler");
        $__internal_2180f7cf7fe3b2cf75015a2684d6fb6eb5acbe7164c91e82d745039255a873b1->enter($__internal_2180f7cf7fe3b2cf75015a2684d6fb6eb5acbe7164c91e82d745039255a873b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2180f7cf7fe3b2cf75015a2684d6fb6eb5acbe7164c91e82d745039255a873b1->leave($__internal_2180f7cf7fe3b2cf75015a2684d6fb6eb5acbe7164c91e82d745039255a873b1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9cba38991b68d11138fa1d571a2d24fa8ebd206cd8fd149def225ba555f15498 = $this->env->getExtension("native_profiler");
        $__internal_9cba38991b68d11138fa1d571a2d24fa8ebd206cd8fd149def225ba555f15498->enter($__internal_9cba38991b68d11138fa1d571a2d24fa8ebd206cd8fd149def225ba555f15498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "    ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_9cba38991b68d11138fa1d571a2d24fa8ebd206cd8fd149def225ba555f15498->leave($__internal_9cba38991b68d11138fa1d571a2d24fa8ebd206cd8fd149def225ba555f15498_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_44a4754285c84449718ffa28cbbb165d628ae82b789176bc899edf9e519d225c = $this->env->getExtension("native_profiler");
        $__internal_44a4754285c84449718ffa28cbbb165d628ae82b789176bc899edf9e519d225c->enter($__internal_44a4754285c84449718ffa28cbbb165d628ae82b789176bc899edf9e519d225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_44a4754285c84449718ffa28cbbb165d628ae82b789176bc899edf9e519d225c->leave($__internal_44a4754285c84449718ffa28cbbb165d628ae82b789176bc899edf9e519d225c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_46a3fef3a7d431fc6e07a14eeee3eeb27f76e8c424931b87942c2ba44e7498f3 = $this->env->getExtension("native_profiler");
        $__internal_46a3fef3a7d431fc6e07a14eeee3eeb27f76e8c424931b87942c2ba44e7498f3->enter($__internal_46a3fef3a7d431fc6e07a14eeee3eeb27f76e8c424931b87942c2ba44e7498f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_46a3fef3a7d431fc6e07a14eeee3eeb27f76e8c424931b87942c2ba44e7498f3->leave($__internal_46a3fef3a7d431fc6e07a14eeee3eeb27f76e8c424931b87942c2ba44e7498f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  62 => 9,  60 => 8,  54 => 7,  44 => 4,  42 => 3,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/*     {% autoescape false %}*/
/*         {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*     {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/*     {% autoescape false %}*/
/*         {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*     {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
