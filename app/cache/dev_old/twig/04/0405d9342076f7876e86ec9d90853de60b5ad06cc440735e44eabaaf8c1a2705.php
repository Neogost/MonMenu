<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_4e8d3e33a635cd47beb91f994c5b13f5de45dc152bf19cb7024de6259b24fd1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f02584a45db7c3e6e0001f9d8227d4dc53757dcb524022d9c4044b628fcbdd8e = $this->env->getExtension("native_profiler");
        $__internal_f02584a45db7c3e6e0001f9d8227d4dc53757dcb524022d9c4044b628fcbdd8e->enter($__internal_f02584a45db7c3e6e0001f9d8227d4dc53757dcb524022d9c4044b628fcbdd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f02584a45db7c3e6e0001f9d8227d4dc53757dcb524022d9c4044b628fcbdd8e->leave($__internal_f02584a45db7c3e6e0001f9d8227d4dc53757dcb524022d9c4044b628fcbdd8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */