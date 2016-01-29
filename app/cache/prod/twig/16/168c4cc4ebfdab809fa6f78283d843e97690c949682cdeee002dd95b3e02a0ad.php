<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_51b7e4dc1eb7c6aebfba872b8c0a3bfed1e86123c70c293a006e6a13a53e8075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DesmayUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'wordingPage' => array($this, 'block_wordingPage'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DesmayUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_wordingPage($context, array $blocks = array())
    {
        echo "Rejoigner nous, connectez-vous !";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    <div class='row'>
        <div class='col s4 offset-s4'>
            <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                <div class='input-field' >
                    <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
                </div>

                <div class='input-field' >
                    <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                </div>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class='row'>
                    <div class='col s6 offset-s6'>
                        <button type=\"submit\" class=\"btn waves-effect waves-light\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" >
                            Envoyer
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </div>
                <div>
                    Vous n'avez pas de compte ? Cliquer <a href='";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "'>ici</a>
                </div>
            </form>
        </div>

    </div>

";
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
        return array (  97 => 37,  87 => 30,  81 => 27,  73 => 22,  66 => 18,  62 => 17,  56 => 14,  52 => 13,  47 => 10,  41 => 8,  38 => 7,  35 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends 'DesmayUserBundle::layout.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block wordingPage %}Rejoigner nous, connectez-vous !{% endblock %}*/
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
