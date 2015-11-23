<?php

/* DesmaymonMenuBundle::layout.html.twig */
class __TwigTemplate_d29380d56c78ad5ecaed0aff29554d25139292fdf0ec1ae2a8c68b4c43c485e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DesmaymonMenuBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'titlePage' => array($this, 'block_titlePage'),
            'wordingPage' => array($this, 'block_wordingPage'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd580296f24c64922b93df16cfa2cd712510c8f4cfc5a79300586600ec16661f = $this->env->getExtension("native_profiler");
        $__internal_fd580296f24c64922b93df16cfa2cd712510c8f4cfc5a79300586600ec16661f->enter($__internal_fd580296f24c64922b93df16cfa2cd712510c8f4cfc5a79300586600ec16661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd580296f24c64922b93df16cfa2cd712510c8f4cfc5a79300586600ec16661f->leave($__internal_fd580296f24c64922b93df16cfa2cd712510c8f4cfc5a79300586600ec16661f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae051ee8f2230b4896071b753a5f3644c5c0291ced4f8d8fffbe06b39f51bb07 = $this->env->getExtension("native_profiler");
        $__internal_ae051ee8f2230b4896071b753a5f3644c5c0291ced4f8d8fffbe06b39f51bb07->enter($__internal_ae051ee8f2230b4896071b753a5f3644c5c0291ced4f8d8fffbe06b39f51bb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7e1636_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7e1636_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e7e1636_style_1.css");
            // line 6
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "e7e1636"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7e1636") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e7e1636.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_ae051ee8f2230b4896071b753a5f3644c5c0291ced4f8d8fffbe06b39f51bb07->leave($__internal_ae051ee8f2230b4896071b753a5f3644c5c0291ced4f8d8fffbe06b39f51bb07_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_5b4183134f4a3a82f961af96876e5bb3f70499dd3b5ecddbdc8c35dfcd184cad = $this->env->getExtension("native_profiler");
        $__internal_5b4183134f4a3a82f961af96876e5bb3f70499dd3b5ecddbdc8c35dfcd184cad->enter($__internal_5b4183134f4a3a82f961af96876e5bb3f70499dd3b5ecddbdc8c35dfcd184cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    <header>
        <div id='index-banner' class='section'>
            <div class='container'>
                <div class='row'>
                    <div class='col s12 m9'>
                        <h1 class='header center-on-small-only'>
                            ";
        // line 17
        $this->displayBlock('titlePage', $context, $blocks);
        // line 18
        echo "                        </h1>
                        <h4 class='light red-text text-lighten-4 center-on-small-only'>
                            ";
        // line 20
        $this->displayBlock('wordingPage', $context, $blocks);
        // line 21
        echo "                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_5b4183134f4a3a82f961af96876e5bb3f70499dd3b5ecddbdc8c35dfcd184cad->leave($__internal_5b4183134f4a3a82f961af96876e5bb3f70499dd3b5ecddbdc8c35dfcd184cad_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_47db2b8e5a849248813bb28dda0cf1c7b18496a98b5425eeef5aa903e058a15f = $this->env->getExtension("native_profiler");
        $__internal_47db2b8e5a849248813bb28dda0cf1c7b18496a98b5425eeef5aa903e058a15f->enter($__internal_47db2b8e5a849248813bb28dda0cf1c7b18496a98b5425eeef5aa903e058a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_47db2b8e5a849248813bb28dda0cf1c7b18496a98b5425eeef5aa903e058a15f->leave($__internal_47db2b8e5a849248813bb28dda0cf1c7b18496a98b5425eeef5aa903e058a15f_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_cab2bceb56fc087b5685f2e83f2008e814b6601dc9d41bb29bd93f855f575fc2 = $this->env->getExtension("native_profiler");
        $__internal_cab2bceb56fc087b5685f2e83f2008e814b6601dc9d41bb29bd93f855f575fc2->enter($__internal_cab2bceb56fc087b5685f2e83f2008e814b6601dc9d41bb29bd93f855f575fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_cab2bceb56fc087b5685f2e83f2008e814b6601dc9d41bb29bd93f855f575fc2->leave($__internal_cab2bceb56fc087b5685f2e83f2008e814b6601dc9d41bb29bd93f855f575fc2_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e67afc0f83e4913be01b8797703165e2015dffb987efd730d589ce8f0073399f = $this->env->getExtension("native_profiler");
        $__internal_e67afc0f83e4913be01b8797703165e2015dffb987efd730d589ce8f0073399f->enter($__internal_e67afc0f83e4913be01b8797703165e2015dffb987efd730d589ce8f0073399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::layout.html.twig", 30)->display($context);
        
        $__internal_e67afc0f83e4913be01b8797703165e2015dffb987efd730d589ce8f0073399f->leave($__internal_e67afc0f83e4913be01b8797703165e2015dffb987efd730d589ce8f0073399f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0670adeab775b8fa2bd92f258fa2ed86ec7bdca76b214219554f2178876e15c = $this->env->getExtension("native_profiler");
        $__internal_f0670adeab775b8fa2bd92f258fa2ed86ec7bdca76b214219554f2178876e15c->enter($__internal_f0670adeab775b8fa2bd92f258fa2ed86ec7bdca76b214219554f2178876e15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0670adeab775b8fa2bd92f258fa2ed86ec7bdca76b214219554f2178876e15c->leave($__internal_f0670adeab775b8fa2bd92f258fa2ed86ec7bdca76b214219554f2178876e15c_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1775db9bcc37d450716942b078ca8423c435a6d16e5565fc0f4096cd16d556af = $this->env->getExtension("native_profiler");
        $__internal_1775db9bcc37d450716942b078ca8423c435a6d16e5565fc0f4096cd16d556af->enter($__internal_1775db9bcc37d450716942b078ca8423c435a6d16e5565fc0f4096cd16d556af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::layout.html.twig", 38)->display($context);
        
        $__internal_1775db9bcc37d450716942b078ca8423c435a6d16e5565fc0f4096cd16d556af->leave($__internal_1775db9bcc37d450716942b078ca8423c435a6d16e5565fc0f4096cd16d556af_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99c12ee12bb436e787cec3dbc97a1953fa0de97f6d89558468bb1369b33d0048 = $this->env->getExtension("native_profiler");
        $__internal_99c12ee12bb436e787cec3dbc97a1953fa0de97f6d89558468bb1369b33d0048->enter($__internal_99c12ee12bb436e787cec3dbc97a1953fa0de97f6d89558468bb1369b33d0048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2d4ee14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2d4ee14_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2d4ee14_javascript_1.js");
            // line 43
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "2d4ee14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2d4ee14") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2d4ee14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_99c12ee12bb436e787cec3dbc97a1953fa0de97f6d89558468bb1369b33d0048->leave($__internal_99c12ee12bb436e787cec3dbc97a1953fa0de97f6d89558468bb1369b33d0048_prof);

    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 43,  175 => 42,  169 => 41,  161 => 38,  155 => 37,  144 => 33,  136 => 30,  130 => 29,  118 => 20,  106 => 17,  93 => 21,  91 => 20,  87 => 18,  85 => 17,  77 => 11,  71 => 10,  52 => 6,  47 => 4,  41 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {% stylesheets filter='cssrewrite'*/
/* '@DesmaymonMenuBundle/Resources/public/css/style.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     <header>*/
/*         <div id='index-banner' class='section'>*/
/*             <div class='container'>*/
/*                 <div class='row'>*/
/*                     <div class='col s12 m9'>*/
/*                         <h1 class='header center-on-small-only'>*/
/*                             {% block titlePage %}Mon Menu{% endblock %}*/
/*                         </h1>*/
/*                         <h4 class='light red-text text-lighten-4 center-on-small-only'>*/
/*                             {% block wordingPage %}Générer vos repas de la semaine en un seul click.{% endblock %}*/
/*                         </h4>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* {% endblock %}*/
/* */
/* {% block nav %}*/
/*     {% include 'DesmaymonMenuBundle::nav.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block footer %}*/
/*     {% include 'DesmaymonMenuBundle::footer.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% javascripts '@DesmaymonMenuBundle/Resources/public/js/javascript.js' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
