<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_94f7d9c0885063127424f57627f254075f5d67931b08dae0ac4b83be46bde92a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DesmayUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DesmayUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_832abd9e31a0f1eaa4ac1264a5abf18df3ba10e61139fb22d98c9fc869a6c94f = $this->env->getExtension("native_profiler");
        $__internal_832abd9e31a0f1eaa4ac1264a5abf18df3ba10e61139fb22d98c9fc869a6c94f->enter($__internal_832abd9e31a0f1eaa4ac1264a5abf18df3ba10e61139fb22d98c9fc869a6c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_832abd9e31a0f1eaa4ac1264a5abf18df3ba10e61139fb22d98c9fc869a6c94f->leave($__internal_832abd9e31a0f1eaa4ac1264a5abf18df3ba10e61139fb22d98c9fc869a6c94f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_186050901e98b35f62613172b0f0c5c2ae9e6ff0ea56243030633ac4e23c5031 = $this->env->getExtension("native_profiler");
        $__internal_186050901e98b35f62613172b0f0c5c2ae9e6ff0ea56243030633ac4e23c5031->enter($__internal_186050901e98b35f62613172b0f0c5c2ae9e6ff0ea56243030633ac4e23c5031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <div class='row'>
        <div class='col s4 offset-s4'>
            <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class='input-field' >
                    <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>

                <div class='input-field' >
                    <label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                </div>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class='row'>
                    <div class='col s6 offset-s6'>
                        <button type=\"submit\" class=\"btn waves-effect waves-light\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" >
                            Envoyer
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </div>
                <div>
                    Vous n'avez pas de compte ? Cliquer <a href='";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "'>ici</a>
                </div>
            </form>
        </div>

    </div>

";
        
        $__internal_186050901e98b35f62613172b0f0c5c2ae9e6ff0ea56243030633ac4e23c5031->leave($__internal_186050901e98b35f62613172b0f0c5c2ae9e6ff0ea56243030633ac4e23c5031_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  89 => 29,  83 => 26,  75 => 21,  68 => 17,  64 => 16,  58 => 13,  54 => 12,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'DesmayUserBundle::layout.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div class='row'>*/
/*         <div class='col s4 offset-s4'>*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <div class='input-field' >*/
/*                     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                 </div>*/
/* */
/*                 <div class='input-field' >*/
/*                     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*                 </div>*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                 <div class='row'>*/
/*                     <div class='col s6 offset-s6'>*/
/*                         <button type="submit" class="btn waves-effect waves-light" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" >*/
/*                             Envoyer*/
/*                             <i class="material-icons right">send</i>*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div>*/
/*                     Vous n'avez pas de compte ? Cliquer <a href='{{ path('fos_user_registration_register') }}'>ici</a>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
