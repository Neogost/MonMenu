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
        $__internal_e6c528464e8347e940b7dffdea9c525d41eca5cff3e0b63a9ec5a51b6acbf818 = $this->env->getExtension("native_profiler");
        $__internal_e6c528464e8347e940b7dffdea9c525d41eca5cff3e0b63a9ec5a51b6acbf818->enter($__internal_e6c528464e8347e940b7dffdea9c525d41eca5cff3e0b63a9ec5a51b6acbf818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e6c528464e8347e940b7dffdea9c525d41eca5cff3e0b63a9ec5a51b6acbf818->leave($__internal_e6c528464e8347e940b7dffdea9c525d41eca5cff3e0b63a9ec5a51b6acbf818_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7b55919cbcbc965bdc48534a6b53b0a4a67514fd26ad19f5b7a4a6cb7e6d095b = $this->env->getExtension("native_profiler");
        $__internal_7b55919cbcbc965bdc48534a6b53b0a4a67514fd26ad19f5b7a4a6cb7e6d095b->enter($__internal_7b55919cbcbc965bdc48534a6b53b0a4a67514fd26ad19f5b7a4a6cb7e6d095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "    ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_7b55919cbcbc965bdc48534a6b53b0a4a67514fd26ad19f5b7a4a6cb7e6d095b->leave($__internal_7b55919cbcbc965bdc48534a6b53b0a4a67514fd26ad19f5b7a4a6cb7e6d095b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5c6e40a62cb49aedcfc4c0db22e1fdc86872a555e3686a99ef0c371873ac4204 = $this->env->getExtension("native_profiler");
        $__internal_5c6e40a62cb49aedcfc4c0db22e1fdc86872a555e3686a99ef0c371873ac4204->enter($__internal_5c6e40a62cb49aedcfc4c0db22e1fdc86872a555e3686a99ef0c371873ac4204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_5c6e40a62cb49aedcfc4c0db22e1fdc86872a555e3686a99ef0c371873ac4204->leave($__internal_5c6e40a62cb49aedcfc4c0db22e1fdc86872a555e3686a99ef0c371873ac4204_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_99573c80cfe63d5d47b65645381492bb3e486980cd38a424371f3810bcfd1bd8 = $this->env->getExtension("native_profiler");
        $__internal_99573c80cfe63d5d47b65645381492bb3e486980cd38a424371f3810bcfd1bd8->enter($__internal_99573c80cfe63d5d47b65645381492bb3e486980cd38a424371f3810bcfd1bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_99573c80cfe63d5d47b65645381492bb3e486980cd38a424371f3810bcfd1bd8->leave($__internal_99573c80cfe63d5d47b65645381492bb3e486980cd38a424371f3810bcfd1bd8_prof);

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
