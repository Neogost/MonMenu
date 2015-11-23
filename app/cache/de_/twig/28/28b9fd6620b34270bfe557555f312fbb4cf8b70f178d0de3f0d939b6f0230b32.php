<?php

/* DesmaymonMenuBundle::Layout.html.twig */
class __TwigTemplate_672396cc13020992eb3a8b12ead74c8f294167b0afb8b0da926355cbcdb4585d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 1);
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
        $__internal_7a0b2a67515ff8d87a29829f9c96c1d1a011ccfabae38728ef5f7fcf0b4436d3 = $this->env->getExtension("native_profiler");
        $__internal_7a0b2a67515ff8d87a29829f9c96c1d1a011ccfabae38728ef5f7fcf0b4436d3->enter($__internal_7a0b2a67515ff8d87a29829f9c96c1d1a011ccfabae38728ef5f7fcf0b4436d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a0b2a67515ff8d87a29829f9c96c1d1a011ccfabae38728ef5f7fcf0b4436d3->leave($__internal_7a0b2a67515ff8d87a29829f9c96c1d1a011ccfabae38728ef5f7fcf0b4436d3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24cc220542656762713c2fb97f2469d105ff4d68fa7d14beb3a3010f15046581 = $this->env->getExtension("native_profiler");
        $__internal_24cc220542656762713c2fb97f2469d105ff4d68fa7d14beb3a3010f15046581->enter($__internal_24cc220542656762713c2fb97f2469d105ff4d68fa7d14beb3a3010f15046581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_24cc220542656762713c2fb97f2469d105ff4d68fa7d14beb3a3010f15046581->leave($__internal_24cc220542656762713c2fb97f2469d105ff4d68fa7d14beb3a3010f15046581_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_d1c2b21a47f8f8d4e9fecab9a4c2c058d53671cfbff240b6e44f2af83f90c498 = $this->env->getExtension("native_profiler");
        $__internal_d1c2b21a47f8f8d4e9fecab9a4c2c058d53671cfbff240b6e44f2af83f90c498->enter($__internal_d1c2b21a47f8f8d4e9fecab9a4c2c058d53671cfbff240b6e44f2af83f90c498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_d1c2b21a47f8f8d4e9fecab9a4c2c058d53671cfbff240b6e44f2af83f90c498->leave($__internal_d1c2b21a47f8f8d4e9fecab9a4c2c058d53671cfbff240b6e44f2af83f90c498_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_d29711c27c7487a65efb2583ccd19183868e43bf1d6c59451f3a873b05345f9f = $this->env->getExtension("native_profiler");
        $__internal_d29711c27c7487a65efb2583ccd19183868e43bf1d6c59451f3a873b05345f9f->enter($__internal_d29711c27c7487a65efb2583ccd19183868e43bf1d6c59451f3a873b05345f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_d29711c27c7487a65efb2583ccd19183868e43bf1d6c59451f3a873b05345f9f->leave($__internal_d29711c27c7487a65efb2583ccd19183868e43bf1d6c59451f3a873b05345f9f_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_be08e5b1d1abe4bf1710f7c8f5b1a39dcd271b6df82fd400b0547aea5a9b6389 = $this->env->getExtension("native_profiler");
        $__internal_be08e5b1d1abe4bf1710f7c8f5b1a39dcd271b6df82fd400b0547aea5a9b6389->enter($__internal_be08e5b1d1abe4bf1710f7c8f5b1a39dcd271b6df82fd400b0547aea5a9b6389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_be08e5b1d1abe4bf1710f7c8f5b1a39dcd271b6df82fd400b0547aea5a9b6389->leave($__internal_be08e5b1d1abe4bf1710f7c8f5b1a39dcd271b6df82fd400b0547aea5a9b6389_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_66f6a8817158c05c7fff4b3301289b97250373123b0a679cfec47bfaa239d2f5 = $this->env->getExtension("native_profiler");
        $__internal_66f6a8817158c05c7fff4b3301289b97250373123b0a679cfec47bfaa239d2f5->enter($__internal_66f6a8817158c05c7fff4b3301289b97250373123b0a679cfec47bfaa239d2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 30)->display($context);
        
        $__internal_66f6a8817158c05c7fff4b3301289b97250373123b0a679cfec47bfaa239d2f5->leave($__internal_66f6a8817158c05c7fff4b3301289b97250373123b0a679cfec47bfaa239d2f5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac416c3d6e09f1681b9de417d6f40aec85f5f7e2730e5dfaaf278b021d9537f7 = $this->env->getExtension("native_profiler");
        $__internal_ac416c3d6e09f1681b9de417d6f40aec85f5f7e2730e5dfaaf278b021d9537f7->enter($__internal_ac416c3d6e09f1681b9de417d6f40aec85f5f7e2730e5dfaaf278b021d9537f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac416c3d6e09f1681b9de417d6f40aec85f5f7e2730e5dfaaf278b021d9537f7->leave($__internal_ac416c3d6e09f1681b9de417d6f40aec85f5f7e2730e5dfaaf278b021d9537f7_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2984c20773217dcda79e06b90c42887c4cc2ddb72bafaba6713155b8723af941 = $this->env->getExtension("native_profiler");
        $__internal_2984c20773217dcda79e06b90c42887c4cc2ddb72bafaba6713155b8723af941->enter($__internal_2984c20773217dcda79e06b90c42887c4cc2ddb72bafaba6713155b8723af941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 38)->display($context);
        
        $__internal_2984c20773217dcda79e06b90c42887c4cc2ddb72bafaba6713155b8723af941->leave($__internal_2984c20773217dcda79e06b90c42887c4cc2ddb72bafaba6713155b8723af941_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c38c3c96542fae6c4710a2a808a931e60a69fdb43fb4ebc8835701633ad7f87b = $this->env->getExtension("native_profiler");
        $__internal_c38c3c96542fae6c4710a2a808a931e60a69fdb43fb4ebc8835701633ad7f87b->enter($__internal_c38c3c96542fae6c4710a2a808a931e60a69fdb43fb4ebc8835701633ad7f87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c38c3c96542fae6c4710a2a808a931e60a69fdb43fb4ebc8835701633ad7f87b->leave($__internal_c38c3c96542fae6c4710a2a808a931e60a69fdb43fb4ebc8835701633ad7f87b_prof);

    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle::Layout.html.twig";
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
