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
        $__internal_bad2d03a81a581648d25a5808d75d5e427eb88b525e2fb4493b7eab2f3a66409 = $this->env->getExtension("native_profiler");
        $__internal_bad2d03a81a581648d25a5808d75d5e427eb88b525e2fb4493b7eab2f3a66409->enter($__internal_bad2d03a81a581648d25a5808d75d5e427eb88b525e2fb4493b7eab2f3a66409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad2d03a81a581648d25a5808d75d5e427eb88b525e2fb4493b7eab2f3a66409->leave($__internal_bad2d03a81a581648d25a5808d75d5e427eb88b525e2fb4493b7eab2f3a66409_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b4fdb7be2f36c8c0afc004ceaa75b10165f1e405be1feea801d390a21966778 = $this->env->getExtension("native_profiler");
        $__internal_5b4fdb7be2f36c8c0afc004ceaa75b10165f1e405be1feea801d390a21966778->enter($__internal_5b4fdb7be2f36c8c0afc004ceaa75b10165f1e405be1feea801d390a21966778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5b4fdb7be2f36c8c0afc004ceaa75b10165f1e405be1feea801d390a21966778->leave($__internal_5b4fdb7be2f36c8c0afc004ceaa75b10165f1e405be1feea801d390a21966778_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_51a87c0de44caa30b8ca8d0022f4e563cfbb552e9bad6c2af725667616984c58 = $this->env->getExtension("native_profiler");
        $__internal_51a87c0de44caa30b8ca8d0022f4e563cfbb552e9bad6c2af725667616984c58->enter($__internal_51a87c0de44caa30b8ca8d0022f4e563cfbb552e9bad6c2af725667616984c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_51a87c0de44caa30b8ca8d0022f4e563cfbb552e9bad6c2af725667616984c58->leave($__internal_51a87c0de44caa30b8ca8d0022f4e563cfbb552e9bad6c2af725667616984c58_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_cd0cc9c44e09245535c5dc56a859d85da9dc6fda79733f5501d9f98bdb1251bb = $this->env->getExtension("native_profiler");
        $__internal_cd0cc9c44e09245535c5dc56a859d85da9dc6fda79733f5501d9f98bdb1251bb->enter($__internal_cd0cc9c44e09245535c5dc56a859d85da9dc6fda79733f5501d9f98bdb1251bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_cd0cc9c44e09245535c5dc56a859d85da9dc6fda79733f5501d9f98bdb1251bb->leave($__internal_cd0cc9c44e09245535c5dc56a859d85da9dc6fda79733f5501d9f98bdb1251bb_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_df2ba7422cf98838316e2c968a18932a82235cf46fc31da4bf959078c202cb27 = $this->env->getExtension("native_profiler");
        $__internal_df2ba7422cf98838316e2c968a18932a82235cf46fc31da4bf959078c202cb27->enter($__internal_df2ba7422cf98838316e2c968a18932a82235cf46fc31da4bf959078c202cb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_df2ba7422cf98838316e2c968a18932a82235cf46fc31da4bf959078c202cb27->leave($__internal_df2ba7422cf98838316e2c968a18932a82235cf46fc31da4bf959078c202cb27_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b1432bf825f16b0417761aca15689666a46cd6d702a5370b4d9bb54e57413d0c = $this->env->getExtension("native_profiler");
        $__internal_b1432bf825f16b0417761aca15689666a46cd6d702a5370b4d9bb54e57413d0c->enter($__internal_b1432bf825f16b0417761aca15689666a46cd6d702a5370b4d9bb54e57413d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::layout.html.twig", 30)->display($context);
        
        $__internal_b1432bf825f16b0417761aca15689666a46cd6d702a5370b4d9bb54e57413d0c->leave($__internal_b1432bf825f16b0417761aca15689666a46cd6d702a5370b4d9bb54e57413d0c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c489c200bb2db5972f3dbcce7936c47019a94411f5f15f9f748fc95361e019b1 = $this->env->getExtension("native_profiler");
        $__internal_c489c200bb2db5972f3dbcce7936c47019a94411f5f15f9f748fc95361e019b1->enter($__internal_c489c200bb2db5972f3dbcce7936c47019a94411f5f15f9f748fc95361e019b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c489c200bb2db5972f3dbcce7936c47019a94411f5f15f9f748fc95361e019b1->leave($__internal_c489c200bb2db5972f3dbcce7936c47019a94411f5f15f9f748fc95361e019b1_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_305875f23e2afd4067bd85afd1e25d68bd8ba85d9e796b5ce024751f5f085128 = $this->env->getExtension("native_profiler");
        $__internal_305875f23e2afd4067bd85afd1e25d68bd8ba85d9e796b5ce024751f5f085128->enter($__internal_305875f23e2afd4067bd85afd1e25d68bd8ba85d9e796b5ce024751f5f085128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::layout.html.twig", 38)->display($context);
        
        $__internal_305875f23e2afd4067bd85afd1e25d68bd8ba85d9e796b5ce024751f5f085128->leave($__internal_305875f23e2afd4067bd85afd1e25d68bd8ba85d9e796b5ce024751f5f085128_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_103b2015d43680449c4b8b1aa374d9a880f759e38f6430cdb032151591a6ae32 = $this->env->getExtension("native_profiler");
        $__internal_103b2015d43680449c4b8b1aa374d9a880f759e38f6430cdb032151591a6ae32->enter($__internal_103b2015d43680449c4b8b1aa374d9a880f759e38f6430cdb032151591a6ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_103b2015d43680449c4b8b1aa374d9a880f759e38f6430cdb032151591a6ae32->leave($__internal_103b2015d43680449c4b8b1aa374d9a880f759e38f6430cdb032151591a6ae32_prof);

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
