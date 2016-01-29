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
        $__internal_0ff47ab119a85074aa5fe13154b2480ffbf8c455f4bf344300ed055b20448e52 = $this->env->getExtension("native_profiler");
        $__internal_0ff47ab119a85074aa5fe13154b2480ffbf8c455f4bf344300ed055b20448e52->enter($__internal_0ff47ab119a85074aa5fe13154b2480ffbf8c455f4bf344300ed055b20448e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0ff47ab119a85074aa5fe13154b2480ffbf8c455f4bf344300ed055b20448e52->leave($__internal_0ff47ab119a85074aa5fe13154b2480ffbf8c455f4bf344300ed055b20448e52_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_05ad0e1dc877c4a4ba97fe441d62ef68285156ca83f1fef591393d12cd840374 = $this->env->getExtension("native_profiler");
        $__internal_05ad0e1dc877c4a4ba97fe441d62ef68285156ca83f1fef591393d12cd840374->enter($__internal_05ad0e1dc877c4a4ba97fe441d62ef68285156ca83f1fef591393d12cd840374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "    ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_05ad0e1dc877c4a4ba97fe441d62ef68285156ca83f1fef591393d12cd840374->leave($__internal_05ad0e1dc877c4a4ba97fe441d62ef68285156ca83f1fef591393d12cd840374_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_906f966f161e3441754ad05b18cd439fda33c1379cec465169aa291fb2c29c98 = $this->env->getExtension("native_profiler");
        $__internal_906f966f161e3441754ad05b18cd439fda33c1379cec465169aa291fb2c29c98->enter($__internal_906f966f161e3441754ad05b18cd439fda33c1379cec465169aa291fb2c29c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_906f966f161e3441754ad05b18cd439fda33c1379cec465169aa291fb2c29c98->leave($__internal_906f966f161e3441754ad05b18cd439fda33c1379cec465169aa291fb2c29c98_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ac28477d06672a7dd4ab19ed22235ca6f635bb4da064b60912d2cce7a0bcc86e = $this->env->getExtension("native_profiler");
        $__internal_ac28477d06672a7dd4ab19ed22235ca6f635bb4da064b60912d2cce7a0bcc86e->enter($__internal_ac28477d06672a7dd4ab19ed22235ca6f635bb4da064b60912d2cce7a0bcc86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ac28477d06672a7dd4ab19ed22235ca6f635bb4da064b60912d2cce7a0bcc86e->leave($__internal_ac28477d06672a7dd4ab19ed22235ca6f635bb4da064b60912d2cce7a0bcc86e_prof);

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
