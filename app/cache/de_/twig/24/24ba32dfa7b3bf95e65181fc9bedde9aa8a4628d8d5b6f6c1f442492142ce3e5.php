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
        $__internal_2ef64f7711bde5eec55f288e2f6683d0bb908e5acdf3137a2f1c102ec6f911ea = $this->env->getExtension("native_profiler");
        $__internal_2ef64f7711bde5eec55f288e2f6683d0bb908e5acdf3137a2f1c102ec6f911ea->enter($__internal_2ef64f7711bde5eec55f288e2f6683d0bb908e5acdf3137a2f1c102ec6f911ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2ef64f7711bde5eec55f288e2f6683d0bb908e5acdf3137a2f1c102ec6f911ea->leave($__internal_2ef64f7711bde5eec55f288e2f6683d0bb908e5acdf3137a2f1c102ec6f911ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fbdfbdd177f34a884f612806f65023f29a520f8a116de3519f7c2b52e64a74bf = $this->env->getExtension("native_profiler");
        $__internal_fbdfbdd177f34a884f612806f65023f29a520f8a116de3519f7c2b52e64a74bf->enter($__internal_fbdfbdd177f34a884f612806f65023f29a520f8a116de3519f7c2b52e64a74bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fbdfbdd177f34a884f612806f65023f29a520f8a116de3519f7c2b52e64a74bf->leave($__internal_fbdfbdd177f34a884f612806f65023f29a520f8a116de3519f7c2b52e64a74bf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d4678fbaef3a752cfc7cf7337263e366ca978b92ae7acd5ee7d27dd4ef5f7f7b = $this->env->getExtension("native_profiler");
        $__internal_d4678fbaef3a752cfc7cf7337263e366ca978b92ae7acd5ee7d27dd4ef5f7f7b->enter($__internal_d4678fbaef3a752cfc7cf7337263e366ca978b92ae7acd5ee7d27dd4ef5f7f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d4678fbaef3a752cfc7cf7337263e366ca978b92ae7acd5ee7d27dd4ef5f7f7b->leave($__internal_d4678fbaef3a752cfc7cf7337263e366ca978b92ae7acd5ee7d27dd4ef5f7f7b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_84fee16c5bc0b18a2a90d08e95c11108784345e973e009006a54f3501da1b746 = $this->env->getExtension("native_profiler");
        $__internal_84fee16c5bc0b18a2a90d08e95c11108784345e973e009006a54f3501da1b746->enter($__internal_84fee16c5bc0b18a2a90d08e95c11108784345e973e009006a54f3501da1b746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_84fee16c5bc0b18a2a90d08e95c11108784345e973e009006a54f3501da1b746->leave($__internal_84fee16c5bc0b18a2a90d08e95c11108784345e973e009006a54f3501da1b746_prof);

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
