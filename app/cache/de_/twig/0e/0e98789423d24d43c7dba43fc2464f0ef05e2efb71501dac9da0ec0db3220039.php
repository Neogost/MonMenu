<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f1298a681312ea5de14aa4d6ce66846bb50fb05a28fd37f472cead408d9e9e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DesmaymonMenuBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DesmaymonMenuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_307e41e7728aa25b37d3cde7a6e47ec453fbde52917579930144648fc8f58c02 = $this->env->getExtension("native_profiler");
        $__internal_307e41e7728aa25b37d3cde7a6e47ec453fbde52917579930144648fc8f58c02->enter($__internal_307e41e7728aa25b37d3cde7a6e47ec453fbde52917579930144648fc8f58c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_307e41e7728aa25b37d3cde7a6e47ec453fbde52917579930144648fc8f58c02->leave($__internal_307e41e7728aa25b37d3cde7a6e47ec453fbde52917579930144648fc8f58c02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceefd877493ace8208604fcba97b6860351c3d3f4c2a9e00de640f672cae6ad2 = $this->env->getExtension("native_profiler");
        $__internal_ceefd877493ace8208604fcba97b6860351c3d3f4c2a9e00de640f672cae6ad2->enter($__internal_ceefd877493ace8208604fcba97b6860351c3d3f4c2a9e00de640f672cae6ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"container\" >
        

        ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 11
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 12
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 13
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "        ";
        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 21
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "    
    </div>
";
        
        $__internal_ceefd877493ace8208604fcba97b6860351c3d3f4c2a9e00de640f672cae6ad2->leave($__internal_ceefd877493ace8208604fcba97b6860351c3d3f4c2a9e00de640f672cae6ad2_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3546d01ce965bde4abd043286f9655a76d504b3e91b68d5fb1f711f85350aded = $this->env->getExtension("native_profiler");
        $__internal_3546d01ce965bde4abd043286f9655a76d504b3e91b68d5fb1f711f85350aded->enter($__internal_3546d01ce965bde4abd043286f9655a76d504b3e91b68d5fb1f711f85350aded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "
    ";
        
        $__internal_3546d01ce965bde4abd043286f9655a76d504b3e91b68d5fb1f711f85350aded->leave($__internal_3546d01ce965bde4abd043286f9655a76d504b3e91b68d5fb1f711f85350aded_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 27,  119 => 26,  110 => 29,  108 => 26,  105 => 25,  96 => 22,  91 => 21,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  73 => 16,  64 => 13,  59 => 12,  54 => 11,  49 => 10,  47 => 9,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "DesmaymonMenuBundle::layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*     <div class="container" >*/
/*         */
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/* */
/*         {% for key, message in app.session.flashbag.all() %}*/
/*             <div class="alert alert-{{ key }}">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*     {% block fos_user_content %}*/
/* */
/*     {% endblock %}*/
/*     */
/*     </div>*/
/* {% endblock %}*/