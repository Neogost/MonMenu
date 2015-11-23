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
        $__internal_2c4c4b15212be87d698f9d26a4f164ec9330cf9742ed00f4ad2d5b15b5a7aa99 = $this->env->getExtension("native_profiler");
        $__internal_2c4c4b15212be87d698f9d26a4f164ec9330cf9742ed00f4ad2d5b15b5a7aa99->enter($__internal_2c4c4b15212be87d698f9d26a4f164ec9330cf9742ed00f4ad2d5b15b5a7aa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::nav.html.twig"));

        // line 1
        echo "
<ul id=\"my_recipe\" class=\"dropdown-content\">
    <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("add_recipe");
        echo "\">Ajouter</a></li>
    <li><a href=\"#!\">Modifier</a></li>
        ";
        // line 5
        if (($this->env->getExtension('security')->isGranted("ROLE_MODERATOR") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 6
            echo "        <li><a href=\"#!\">Supprimer</a></li>
        ";
        }
        // line 8
        echo "</ul>
<ul id=\"my_recipe_mobile\" class=\"dropdown-content\">
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("add_recipe");
        echo "\">Ajouter</a></li>
    <li><a href=\"#!\">Modifier</a></li>
        ";
        // line 12
        if (($this->env->getExtension('security')->isGranted("ROLE_MODERATOR") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 13
            echo "        <li><a href=\"#!\">Supprimer</a></li>
        ";
        }
        // line 15
        echo "</ul>
<nav>
    <ul class=\"right hide-on-med-and-down\">
        ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |</li>
            <li><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></li>
            ";
        } else {
            // line 24
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 26
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("mon_menu_administration");
            echo "\">Administration des Membres</a></li>
            ";
        }
        // line 29
        echo "        <li><a href=\"#!\">Ma Semaine</a></li>
        <li><a href=\"#!\">Ma Liste de Course</a></li>
        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"my_recipe\">Mes Recettes<i class=\"material-icons right\">arrow_drop_down</i></a></li>
    </ul>
    <ul id=\"slide-out\" class=\"side-nav\">
        ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></li>
            ";
        } else {
            // line 40
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 42
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("mon_menu_administration");
            echo "\">Administration des Membres</a></li>
            ";
        }
        // line 45
        echo "        <li><a href=\"#!\">Ma Semaine</a></li>
        <li><a href=\"#!\">Ma Liste de Course</a></li>
        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"my_recipe_mobile\">Mes Recettes<i class=\"material-icons right\">arrow_drop_down</i></a></li>

    </ul>
    <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>
</nav>

";
        
        $__internal_2c4c4b15212be87d698f9d26a4f164ec9330cf9742ed00f4ad2d5b15b5a7aa99->leave($__internal_2c4c4b15212be87d698f9d26a4f164ec9330cf9742ed00f4ad2d5b15b5a7aa99_prof);

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
        return array (  132 => 45,  126 => 43,  123 => 42,  115 => 40,  109 => 37,  105 => 36,  100 => 35,  98 => 34,  91 => 29,  85 => 27,  82 => 26,  74 => 24,  68 => 21,  64 => 20,  59 => 19,  57 => 18,  52 => 15,  48 => 13,  46 => 12,  41 => 10,  37 => 8,  33 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* */
/* <ul id="my_recipe" class="dropdown-content">*/
/*     <li><a href="{{ path('add_recipe') }}">Ajouter</a></li>*/
/*     <li><a href="#!">Modifier</a></li>*/
/*         {% if is_granted("ROLE_MODERATOR") or is_granted("ROLE_ADMIN") %}*/
/*         <li><a href="#!">Supprimer</a></li>*/
/*         {% endif %}*/
/* </ul>*/
/* <ul id="my_recipe_mobile" class="dropdown-content">*/
/*     <li><a href="{{ path('add_recipe') }}">Ajouter</a></li>*/
/*     <li><a href="#!">Modifier</a></li>*/
/*         {% if is_granted("ROLE_MODERATOR") or is_granted("ROLE_ADMIN") %}*/
/*         <li><a href="#!">Supprimer</a></li>*/
/*         {% endif %}*/
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
/*             {% if is_granted("ROLE_ADMIN") %}*/
/*             <li><a href="{{ path('mon_menu_administration') }}">Administration des Membres</a></li>*/
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
/*             {% if is_granted("ROLE_ADMIN") %}*/
/*             <li><a href="{{ path('mon_menu_administration') }}">Administration des Membres</a></li>*/
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
