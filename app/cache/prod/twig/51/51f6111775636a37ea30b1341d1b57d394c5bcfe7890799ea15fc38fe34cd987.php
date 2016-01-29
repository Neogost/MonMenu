<?php

/* DesmaymonMenuBundle::nav.html.twig */
class __TwigTemplate_7e473bc8dc4b353b0be0ddecb3875610600b340b3f7265336f6da8c8028de8eb extends Twig_Template
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
        // line 1
        echo "
<ul id=\"my_recipe\" class=\"dropdown-content\">
    <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("add_recipe");
        echo "\">Add</a></li>
    <li><a href=\"#!\">Edit</a></li>
        ";
        // line 5
        if (($this->env->getExtension('security')->isGranted("ROLE_MODERATOR") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 6
            echo "        <li><a href=\"#!\">Delete</a></li>
        ";
        }
        // line 8
        echo "</ul>
<ul id=\"my_recipe_mobile\" class=\"dropdown-content\">
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("add_recipe");
        echo "\">Add</a></li>
    <li><a href=\"#!\">Edit</a></li>
        ";
        // line 12
        if (($this->env->getExtension('security')->isGranted("ROLE_MODERATOR") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 13
            echo "        <li><a href=\"#!\">Delete</a></li>
        ";
        }
        // line 15
        echo "</ul>
<ul id=\"my_category\" class=\"dropdown-content\">
    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("add_category");
        echo "\">Add</a></li>
    <li><a href=\"#!\">Edit</a></li>
    <li><a href=\"#!\">Delete</a></li>
</ul>
<ul id=\"my_categoty_mobile\" class=\"dropdown-content\">
    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("add_category");
        echo "\">Add</a></li>
    <li><a href=\"#!\">Edit</a></li>
    <li><a href=\"#!\">Delete</a></li>
</ul>
<nav>
    <ul class=\"right hide-on-med-and-down\">
        ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |</li>
            <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></li>
            ";
        } else {
            // line 34
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 36
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("mon_menu_administration");
            echo "\">Directors Members</a></li>
            ";
        }
        // line 39
        echo "        <li><a href=\"#!\">My Week</a></li>
        <li><a href=\"#!\">My shopping list</a></li>
            ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
            // line 42
            echo "            <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"my_category\">Category<i class=\"material-icons right\">arrow_drop_down</i></a></li>
            ";
        }
        // line 44
        echo "        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"my_recipe\">My Repices<i class=\"material-icons right\">arrow_drop_down</i></a></li>
    </ul>
    <ul id=\"slide-out\" class=\"side-nav\">
        ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></li>
            ";
        } else {
            // line 53
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 55
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("mon_menu_administration");
            echo "\">Directors Members</a></li>
            ";
        }
        // line 58
        echo "        <li><a href=\"#!\">My Week</a></li>
        <li><a href=\"#!\">My shopping list</a></li>
        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"my_recipe_mobile\">My Repices<i class=\"material-icons right\">arrow_drop_down</i></a></li>

    </ul>
    <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>
</nav>

";
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
        return array (  153 => 58,  147 => 56,  144 => 55,  136 => 53,  130 => 50,  126 => 49,  121 => 48,  119 => 47,  114 => 44,  110 => 42,  108 => 41,  104 => 39,  98 => 37,  95 => 36,  87 => 34,  81 => 31,  77 => 30,  72 => 29,  70 => 28,  61 => 22,  53 => 17,  49 => 15,  45 => 13,  43 => 12,  38 => 10,  34 => 8,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* */
/* <ul id="my_recipe" class="dropdown-content">*/
/*     <li><a href="{{ path('add_recipe') }}">Add</a></li>*/
/*     <li><a href="#!">Edit</a></li>*/
/*         {% if is_granted("ROLE_MODERATOR") or is_granted("ROLE_ADMIN") %}*/
/*         <li><a href="#!">Delete</a></li>*/
/*         {% endif %}*/
/* </ul>*/
/* <ul id="my_recipe_mobile" class="dropdown-content">*/
/*     <li><a href="{{ path('add_recipe') }}">Add</a></li>*/
/*     <li><a href="#!">Edit</a></li>*/
/*         {% if is_granted("ROLE_MODERATOR") or is_granted("ROLE_ADMIN") %}*/
/*         <li><a href="#!">Delete</a></li>*/
/*         {% endif %}*/
/* </ul>*/
/* <ul id="my_category" class="dropdown-content">*/
/*     <li><a href="{{ path('add_category') }}">Add</a></li>*/
/*     <li><a href="#!">Edit</a></li>*/
/*     <li><a href="#!">Delete</a></li>*/
/* </ul>*/
/* <ul id="my_categoty_mobile" class="dropdown-content">*/
/*     <li><a href="{{ path('add_category') }}">Add</a></li>*/
/*     <li><a href="#!">Edit</a></li>*/
/*     <li><a href="#!">Delete</a></li>*/
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
/*             <li><a href="{{ path('mon_menu_administration') }}">Directors Members</a></li>*/
/*             {% endif %}*/
/*         <li><a href="#!">My Week</a></li>*/
/*         <li><a href="#!">My shopping list</a></li>*/
/*             {% if is_granted("ROLE_MODERATOR") %}*/
/*             <li><a class="dropdown-button" href="#!" data-activates="my_category">Category<i class="material-icons right">arrow_drop_down</i></a></li>*/
/*             {% endif %}*/
/*         <li><a class="dropdown-button" href="#!" data-activates="my_recipe">My Repices<i class="material-icons right">arrow_drop_down</i></a></li>*/
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
/*             <li><a href="{{ path('mon_menu_administration') }}">Directors Members</a></li>*/
/*             {% endif %}*/
/*         <li><a href="#!">My Week</a></li>*/
/*         <li><a href="#!">My shopping list</a></li>*/
/*         <li><a class="dropdown-button" href="#!" data-activates="my_recipe_mobile">My Repices<i class="material-icons right">arrow_drop_down</i></a></li>*/
/* */
/*     </ul>*/
/*     <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>*/
/* </nav>*/
/* */
/* */
