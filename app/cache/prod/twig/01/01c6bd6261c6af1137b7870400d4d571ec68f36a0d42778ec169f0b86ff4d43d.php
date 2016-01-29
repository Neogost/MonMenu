<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a24297017fbc863cfd77235e956116ed19fe0c1860fcbf1a3d3859aa2c8b8c21 extends Twig_Template
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
        // line 2
        echo "

<div class='row'>
    <div class='col s4 offset-s4'>
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "    
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'row');
        echo "

        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateborn", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'row');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>

";
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
        return array (  72 => 26,  62 => 19,  55 => 15,  51 => 14,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  30 => 8,  25 => 6,  19 => 2,);
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
