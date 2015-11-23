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
        $__internal_85555c5c6febd9c1ab5e322dcbd6dd18abb6b073c805a32d648fdeb76473dbb4 = $this->env->getExtension("native_profiler");
        $__internal_85555c5c6febd9c1ab5e322dcbd6dd18abb6b073c805a32d648fdeb76473dbb4->enter($__internal_85555c5c6febd9c1ab5e322dcbd6dd18abb6b073c805a32d648fdeb76473dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85555c5c6febd9c1ab5e322dcbd6dd18abb6b073c805a32d648fdeb76473dbb4->leave($__internal_85555c5c6febd9c1ab5e322dcbd6dd18abb6b073c805a32d648fdeb76473dbb4_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31a4d04089b304b729913fb1d0c3779d937dade0ef5b9303c4fefbb2af3c0731 = $this->env->getExtension("native_profiler");
        $__internal_31a4d04089b304b729913fb1d0c3779d937dade0ef5b9303c4fefbb2af3c0731->enter($__internal_31a4d04089b304b729913fb1d0c3779d937dade0ef5b9303c4fefbb2af3c0731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_31a4d04089b304b729913fb1d0c3779d937dade0ef5b9303c4fefbb2af3c0731->leave($__internal_31a4d04089b304b729913fb1d0c3779d937dade0ef5b9303c4fefbb2af3c0731_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_e98615e1fddec03cb52ddf74faa8ad451be1c45c5c6fc2f5fa932f7f60117a74 = $this->env->getExtension("native_profiler");
        $__internal_e98615e1fddec03cb52ddf74faa8ad451be1c45c5c6fc2f5fa932f7f60117a74->enter($__internal_e98615e1fddec03cb52ddf74faa8ad451be1c45c5c6fc2f5fa932f7f60117a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_e98615e1fddec03cb52ddf74faa8ad451be1c45c5c6fc2f5fa932f7f60117a74->leave($__internal_e98615e1fddec03cb52ddf74faa8ad451be1c45c5c6fc2f5fa932f7f60117a74_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_1745b21396aecd1c14db90dcc082146bfaa18429a33e447262d070088da5ce2b = $this->env->getExtension("native_profiler");
        $__internal_1745b21396aecd1c14db90dcc082146bfaa18429a33e447262d070088da5ce2b->enter($__internal_1745b21396aecd1c14db90dcc082146bfaa18429a33e447262d070088da5ce2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_1745b21396aecd1c14db90dcc082146bfaa18429a33e447262d070088da5ce2b->leave($__internal_1745b21396aecd1c14db90dcc082146bfaa18429a33e447262d070088da5ce2b_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_aff2a608f93d95efbe4453ba323dc084ce81442f07ec6bda35fbe6b741801e27 = $this->env->getExtension("native_profiler");
        $__internal_aff2a608f93d95efbe4453ba323dc084ce81442f07ec6bda35fbe6b741801e27->enter($__internal_aff2a608f93d95efbe4453ba323dc084ce81442f07ec6bda35fbe6b741801e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_aff2a608f93d95efbe4453ba323dc084ce81442f07ec6bda35fbe6b741801e27->leave($__internal_aff2a608f93d95efbe4453ba323dc084ce81442f07ec6bda35fbe6b741801e27_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b119588a5c18c92cf1552c959e83ac70292ee7cdee2ae1673ee7cae34289c5e8 = $this->env->getExtension("native_profiler");
        $__internal_b119588a5c18c92cf1552c959e83ac70292ee7cdee2ae1673ee7cae34289c5e8->enter($__internal_b119588a5c18c92cf1552c959e83ac70292ee7cdee2ae1673ee7cae34289c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::layout.html.twig", 30)->display($context);
        
        $__internal_b119588a5c18c92cf1552c959e83ac70292ee7cdee2ae1673ee7cae34289c5e8->leave($__internal_b119588a5c18c92cf1552c959e83ac70292ee7cdee2ae1673ee7cae34289c5e8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fe812716393f886a0f6d6efa58ad1b9cbe8afaf690292b78c373e6c4c2729fe = $this->env->getExtension("native_profiler");
        $__internal_3fe812716393f886a0f6d6efa58ad1b9cbe8afaf690292b78c373e6c4c2729fe->enter($__internal_3fe812716393f886a0f6d6efa58ad1b9cbe8afaf690292b78c373e6c4c2729fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3fe812716393f886a0f6d6efa58ad1b9cbe8afaf690292b78c373e6c4c2729fe->leave($__internal_3fe812716393f886a0f6d6efa58ad1b9cbe8afaf690292b78c373e6c4c2729fe_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f4666661f06b59537dc94f8d9fb1dcc90875e0bcf94e1e8a69554e3806ac7e7f = $this->env->getExtension("native_profiler");
        $__internal_f4666661f06b59537dc94f8d9fb1dcc90875e0bcf94e1e8a69554e3806ac7e7f->enter($__internal_f4666661f06b59537dc94f8d9fb1dcc90875e0bcf94e1e8a69554e3806ac7e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::layout.html.twig", 38)->display($context);
        
        $__internal_f4666661f06b59537dc94f8d9fb1dcc90875e0bcf94e1e8a69554e3806ac7e7f->leave($__internal_f4666661f06b59537dc94f8d9fb1dcc90875e0bcf94e1e8a69554e3806ac7e7f_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9233ae4ed4db930c476fa47d9228c0d09ecb525aa7cdf1891b5ea35c9a0b5195 = $this->env->getExtension("native_profiler");
        $__internal_9233ae4ed4db930c476fa47d9228c0d09ecb525aa7cdf1891b5ea35c9a0b5195->enter($__internal_9233ae4ed4db930c476fa47d9228c0d09ecb525aa7cdf1891b5ea35c9a0b5195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "182910f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_182910f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/182910f_javascript_1.js");
            // line 44
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "182910f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_182910f_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/182910f_materialize_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "182910f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_182910f") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/182910f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_9233ae4ed4db930c476fa47d9228c0d09ecb525aa7cdf1891b5ea35c9a0b5195->leave($__internal_9233ae4ed4db930c476fa47d9228c0d09ecb525aa7cdf1891b5ea35c9a0b5195_prof);

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
        return array (  180 => 44,  175 => 42,  169 => 41,  161 => 38,  155 => 37,  144 => 33,  136 => 30,  130 => 29,  118 => 20,  106 => 17,  93 => 21,  91 => 20,  87 => 18,  85 => 17,  77 => 11,  71 => 10,  52 => 6,  47 => 4,  41 => 3,  11 => 1,);
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
/*     {% javascripts '@DesmaymonMenuBundle/Resources/public/js/javascript.js'*/
/*     '@DesmaymonMenuBundle/Resources/public/js/materialize.js'%}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
