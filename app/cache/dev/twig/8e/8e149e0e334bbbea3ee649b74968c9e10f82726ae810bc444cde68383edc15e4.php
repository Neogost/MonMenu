<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f9ac3f2ecd3ac2116cefa43f5c984f60d57cce9a640208021667da097b01b29d extends Twig_Template
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
        $__internal_7b945955cb88022a2280ff87d0a18704489c67445a9ef05e0cbceb092972bcd5 = $this->env->getExtension("native_profiler");
        $__internal_7b945955cb88022a2280ff87d0a18704489c67445a9ef05e0cbceb092972bcd5->enter($__internal_7b945955cb88022a2280ff87d0a18704489c67445a9ef05e0cbceb092972bcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "

<div class='row'>
    <div class='col s4 offset-s4'>
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "    
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'row');
        echo "

        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateborn", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'row');
        echo "

        <div class='row'>
            <div class='col s6 offset-s6'>
                <button type=\"submit\" class=\"btn waves-effect waves-light\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" >
                    Envoyer
                    <i class=\"material-icons right\">send</i>
                </button>
            </div>
        </div>
    </div>
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_7b945955cb88022a2280ff87d0a18704489c67445a9ef05e0cbceb092972bcd5->leave($__internal_7b945955cb88022a2280ff87d0a18704489c67445a9ef05e0cbceb092972bcd5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  65 => 19,  58 => 15,  54 => 14,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <div class='row'>*/
/*     <div class='col s4 offset-s4'>*/
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*         {{ form_row(form.email) }}    */
/*         {{ form_row(form.username) }}*/
/*         {{ form_row(form.plainPassword) }}*/
/*         {{ form_row(form.firstname) }}*/
/*         {{ form_row(form.lastname) }}*/
/* */
/*         {{ form_row(form.dateborn) }}*/
/*         {{ form_row(form.sexe) }}*/
/* */
/*         <div class='row'>*/
/*             <div class='col s6 offset-s6'>*/
/*                 <button type="submit" class="btn waves-effect waves-light" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" >*/
/*                     Envoyer*/
/*                     <i class="material-icons right">send</i>*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* </div>*/
/* */
/* */
