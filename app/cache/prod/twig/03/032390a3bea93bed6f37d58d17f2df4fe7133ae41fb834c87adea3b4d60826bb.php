<?php

/* DesmaymonMenuBundle:Administration:index.html.twig */
class __TwigTemplate_24eade45eab77ffe6c677cd56c437e042f9c3b97eb73f73b081e1ac7aa0ac5d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DesmaymonMenuBundle::Layout.html.twig", "DesmaymonMenuBundle:Administration:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DesmaymonMenuBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Administration des Membres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class='container'>
        <table id=\"users\">
            <thead>
                <tr>
                    <th data-field=\"id\">ID</th>
                    <th data-field=\"id\">Pseudo</th>
                    <th data-field=\"id\">Email</th>
                    <th data-field=\"id\">BirthDay</th>
                    <th data-field=\"id\">Last Visit</th>
                    <th data-field=\"id\">Creation Date</th>
                    <th data-field=\"id\">Action</th>
                </tr>
            </thead> 
            <tfoot>
                <tr>
                    <th data-field=\"id\">ID</th>
                    <th data-field=\"id\">Pseudo</th>
                    <th data-field=\"id\">Email</th>
                    <th data-field=\"id\">BirthDay</th>
                    <th data-field=\"id\">Last Visit</th>
                    <th data-field=\"id\">Creation Date</th>
                    <th data-field=\"id\">Action</th>
                </tr>
            </tfoot> 
            <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "                    <tr role=\"row\">
                        <td id=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                        <td id=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td id=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                        <td id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "dateborn", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                        <td id=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                        <td id=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "datecreate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                        <td id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_menu_administration_roles", array("user" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
            echo "\"><i alt='test' class=\"small material-icons\">star</i></a>
                            <a href=\"\"><i class=\"small material-icons\">assignment_ind</i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>
    </div>


    ";
    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle:Administration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 47,  116 => 42,  112 => 41,  106 => 40,  100 => 39,  94 => 38,  88 => 37,  82 => 36,  76 => 35,  73 => 34,  69 => 33,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'DesmaymonMenuBundle::Layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Administration des Membres - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class='container'>*/
/*         <table id="users">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th data-field="id">ID</th>*/
/*                     <th data-field="id">Pseudo</th>*/
/*                     <th data-field="id">Email</th>*/
/*                     <th data-field="id">BirthDay</th>*/
/*                     <th data-field="id">Last Visit</th>*/
/*                     <th data-field="id">Creation Date</th>*/
/*                     <th data-field="id">Action</th>*/
/*                 </tr>*/
/*             </thead> */
/*             <tfoot>*/
/*                 <tr>*/
/*                     <th data-field="id">ID</th>*/
/*                     <th data-field="id">Pseudo</th>*/
/*                     <th data-field="id">Email</th>*/
/*                     <th data-field="id">BirthDay</th>*/
/*                     <th data-field="id">Last Visit</th>*/
/*                     <th data-field="id">Creation Date</th>*/
/*                     <th data-field="id">Action</th>*/
/*                 </tr>*/
/*             </tfoot> */
/*             <tbody>*/
/*                 {% for user in users %}*/
/*                     <tr role="row">*/
/*                         <td id="{{ user.id }}">{{ user.id }}</td>*/
/*                         <td id="{{ user.id }}">{{ user.username }}</td>*/
/*                         <td id="{{ user.id }}">{{ user.email }}</td>*/
/*                         <td id="{{ user.id }}">{{ user.dateborn|date("m/d/Y") }}</td>*/
/*                         <td id="{{ user.id }}">{{ user.lastLogin|date("m/d/Y") }}</td>*/
/*                         <td id="{{ user.id }}">{{ user.datecreate|date("m/d/Y") }}</td>*/
/*                         <td id="{{ user.id }}">*/
/*                             <a href="{{ path('mon_menu_administration_roles', {'user' : user.username } ) }}"><i alt='test' class="small material-icons">star</i></a>*/
/*                             <a href=""><i class="small material-icons">assignment_ind</i></a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* */
/*     {% endblock %}*/
