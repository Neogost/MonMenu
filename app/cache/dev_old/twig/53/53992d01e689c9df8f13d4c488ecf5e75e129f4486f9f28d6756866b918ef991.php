<?php

/* DesmaymonMenuBundle::nav.html.twig */
class __TwigTemplate_12af0fd77d0514a27a8df332d7f06e470c881e35a6960409118355de2b1d9737 extends Twig_Template
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
        $__internal_4881fbcf762ef381373108ec5ad63880a46214e5ccbc82b25d4fb23618d54fe9 = $this->env->getExtension("native_profiler");
        $__internal_4881fbcf762ef381373108ec5ad63880a46214e5ccbc82b25d4fb23618d54fe9->enter($__internal_4881fbcf762ef381373108ec5ad63880a46214e5ccbc82b25d4fb23618d54fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::nav.html.twig"));

        // line 1
        echo "
<ul id=\"my_recipe\" class=\"dropdown-content\">
    <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("add_recipe");
        echo "\">Ajouter</a></li>
    <li><a href=\"#!\">Modifier</a></li>
    <li><a href=\"\">Supprimer</a></li>
</ul>
<ul id=\"my_recipe_mobile\" class=\"dropdown-content\">
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("add_recipe");
        echo "\">Ajouter</a></li>
    <li><a href=\"#!\">Modifier</a></li>
    <li><a href=\"#!\">Supprimer</a></li>
</ul>
<nav>
    <ul class=\"right hide-on-med-and-down\">
        ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |</li>
            <li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></li>
            ";
        } else {
            // line 20
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 22
        echo "        <li><a href=\"#!\">Ma Semaine</a></li>
        <li><a href=\"#!\">Ma Liste de Course</a></li>
        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"my_recipe\">Mes Recettes<i class=\"material-icons right\">arrow_drop_down</i></a></li>
    </ul>
    <ul id=\"slide-out\" class=\"side-nav\">
        ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></li>
            ";
        } else {
            // line 33
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 35
        echo "        <li><a href=\"#!\">Ma Semaine</a></li>
        <li><a href=\"#!\">Ma Liste de Course</a></li>
        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"my_recipe_mobile\">Mes Recettes<i class=\"material-icons right\">arrow_drop_down</i></a></li>

    </ul>
    <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>
</nav>

";
        
        $__internal_4881fbcf762ef381373108ec5ad63880a46214e5ccbc82b25d4fb23618d54fe9->leave($__internal_4881fbcf762ef381373108ec5ad63880a46214e5ccbc82b25d4fb23618d54fe9_prof);

    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  92 => 33,  86 => 30,  82 => 29,  77 => 28,  75 => 27,  68 => 22,  60 => 20,  54 => 17,  50 => 16,  45 => 15,  43 => 14,  34 => 8,  26 => 3,  22 => 1,);
    }
}
/* */
/* <ul id="my_recipe" class="dropdown-content">*/
/*     <li><a href="{{ path('add_recipe') }}">Ajouter</a></li>*/
/*     <li><a href="#!">Modifier</a></li>*/
/*     <li><a href="">Supprimer</a></li>*/
/* </ul>*/
/* <ul id="my_recipe_mobile" class="dropdown-content">*/
/*     <li><a href="{{ path('add_recipe') }}">Ajouter</a></li>*/
/*     <li><a href="#!">Modifier</a></li>*/
/*     <li><a href="#!">Supprimer</a></li>*/
/* </ul>*/
/* <nav>*/
/*     <ul class="right hide-on-med-and-down">*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             <li>{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |</li>*/
/*             <li><a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*             {% endif %}*/
/*         <li><a href="#!">Ma Semaine</a></li>*/
/*         <li><a href="#!">Ma Liste de Course</a></li>*/
/*         <li><a class="dropdown-button" href="#!" data-activates="my_recipe">Mes Recettes<i class="material-icons right">arrow_drop_down</i></a></li>*/
/*     </ul>*/
/*     <ul id="slide-out" class="side-nav">*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*             <li><a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*             {% endif %}*/
/*         <li><a href="#!">Ma Semaine</a></li>*/
/*         <li><a href="#!">Ma Liste de Course</a></li>*/
/*         <li><a class="dropdown-button" href="#!" data-activates="my_recipe_mobile">Mes Recettes<i class="material-icons right">arrow_drop_down</i></a></li>*/
/* */
/*     </ul>*/
/*     <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>*/
/* </nav>*/
/* */
/* */
