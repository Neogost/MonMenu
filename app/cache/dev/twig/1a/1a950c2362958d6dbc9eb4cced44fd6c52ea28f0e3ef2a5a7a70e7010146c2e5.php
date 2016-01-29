<?php

/* DesmaymonMenuBundle:Administration:index.html.twig */
class __TwigTemplate_edf83d76abf4a9e3e32733c5e09f4db40d9d380292e735aa9d585bcbec4b998c extends Twig_Template
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
        $__internal_3274f702a8af8e3b97d027d268be1aa2491762870d0dce7c0ef85015efaa1e43 = $this->env->getExtension("native_profiler");
        $__internal_3274f702a8af8e3b97d027d268be1aa2491762870d0dce7c0ef85015efaa1e43->enter($__internal_3274f702a8af8e3b97d027d268be1aa2491762870d0dce7c0ef85015efaa1e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle:Administration:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3274f702a8af8e3b97d027d268be1aa2491762870d0dce7c0ef85015efaa1e43->leave($__internal_3274f702a8af8e3b97d027d268be1aa2491762870d0dce7c0ef85015efaa1e43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f990cd1d3e243dbf8346e7e8977a4fecd8f8debf5567154bef7c6f616ad59b8d = $this->env->getExtension("native_profiler");
        $__internal_f990cd1d3e243dbf8346e7e8977a4fecd8f8debf5567154bef7c6f616ad59b8d->enter($__internal_f990cd1d3e243dbf8346e7e8977a4fecd8f8debf5567154bef7c6f616ad59b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Administration des Membres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f990cd1d3e243dbf8346e7e8977a4fecd8f8debf5567154bef7c6f616ad59b8d->leave($__internal_f990cd1d3e243dbf8346e7e8977a4fecd8f8debf5567154bef7c6f616ad59b8d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc484dec920bd19f5aa8f333f4590b6b8fbf381eec07aa8b189baa4a1c370921 = $this->env->getExtension("native_profiler");
        $__internal_fc484dec920bd19f5aa8f333f4590b6b8fbf381eec07aa8b189baa4a1c370921->enter($__internal_fc484dec920bd19f5aa8f333f4590b6b8fbf381eec07aa8b189baa4a1c370921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
        
        $__internal_fc484dec920bd19f5aa8f333f4590b6b8fbf381eec07aa8b189baa4a1c370921->leave($__internal_fc484dec920bd19f5aa8f333f4590b6b8fbf381eec07aa8b189baa4a1c370921_prof);

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
        return array (  142 => 47,  131 => 42,  127 => 41,  121 => 40,  115 => 39,  109 => 38,  103 => 37,  97 => 36,  91 => 35,  88 => 34,  84 => 33,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
