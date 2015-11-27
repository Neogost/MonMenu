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
        $__internal_dfc3c3cc6f21d1b16bd04394e87a2699c2eab0ea3e3b51d9426da8630b05c70d = $this->env->getExtension("native_profiler");
        $__internal_dfc3c3cc6f21d1b16bd04394e87a2699c2eab0ea3e3b51d9426da8630b05c70d->enter($__internal_dfc3c3cc6f21d1b16bd04394e87a2699c2eab0ea3e3b51d9426da8630b05c70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfc3c3cc6f21d1b16bd04394e87a2699c2eab0ea3e3b51d9426da8630b05c70d->leave($__internal_dfc3c3cc6f21d1b16bd04394e87a2699c2eab0ea3e3b51d9426da8630b05c70d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ced87cdd14e562d1b0a29abf04954207e8fb1f9da5aedec753591d70f65ae84c = $this->env->getExtension("native_profiler");
        $__internal_ced87cdd14e562d1b0a29abf04954207e8fb1f9da5aedec753591d70f65ae84c->enter($__internal_ced87cdd14e562d1b0a29abf04954207e8fb1f9da5aedec753591d70f65ae84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ced87cdd14e562d1b0a29abf04954207e8fb1f9da5aedec753591d70f65ae84c->leave($__internal_ced87cdd14e562d1b0a29abf04954207e8fb1f9da5aedec753591d70f65ae84c_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_ebdfcc5c831447102b7485260c7b5547e27a57c0b8af1153282aaa5bfb4a33e3 = $this->env->getExtension("native_profiler");
        $__internal_ebdfcc5c831447102b7485260c7b5547e27a57c0b8af1153282aaa5bfb4a33e3->enter($__internal_ebdfcc5c831447102b7485260c7b5547e27a57c0b8af1153282aaa5bfb4a33e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ebdfcc5c831447102b7485260c7b5547e27a57c0b8af1153282aaa5bfb4a33e3->leave($__internal_ebdfcc5c831447102b7485260c7b5547e27a57c0b8af1153282aaa5bfb4a33e3_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_4424285321dc105bfb46756af0b2c0791cf17e3e91c8ab083d81f7ac0333b44f = $this->env->getExtension("native_profiler");
        $__internal_4424285321dc105bfb46756af0b2c0791cf17e3e91c8ab083d81f7ac0333b44f->enter($__internal_4424285321dc105bfb46756af0b2c0791cf17e3e91c8ab083d81f7ac0333b44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_4424285321dc105bfb46756af0b2c0791cf17e3e91c8ab083d81f7ac0333b44f->leave($__internal_4424285321dc105bfb46756af0b2c0791cf17e3e91c8ab083d81f7ac0333b44f_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_1879e311ce2f42cd99767f7f747258d37cf52727dd05ec8675beba93baae63aa = $this->env->getExtension("native_profiler");
        $__internal_1879e311ce2f42cd99767f7f747258d37cf52727dd05ec8675beba93baae63aa->enter($__internal_1879e311ce2f42cd99767f7f747258d37cf52727dd05ec8675beba93baae63aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_1879e311ce2f42cd99767f7f747258d37cf52727dd05ec8675beba93baae63aa->leave($__internal_1879e311ce2f42cd99767f7f747258d37cf52727dd05ec8675beba93baae63aa_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_776f99a744411e8b4bf8a5078d8e2c8efb303b2b26e24632b7f93214b53d1597 = $this->env->getExtension("native_profiler");
        $__internal_776f99a744411e8b4bf8a5078d8e2c8efb303b2b26e24632b7f93214b53d1597->enter($__internal_776f99a744411e8b4bf8a5078d8e2c8efb303b2b26e24632b7f93214b53d1597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 30)->display($context);
        
        $__internal_776f99a744411e8b4bf8a5078d8e2c8efb303b2b26e24632b7f93214b53d1597->leave($__internal_776f99a744411e8b4bf8a5078d8e2c8efb303b2b26e24632b7f93214b53d1597_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ea6d07e147c02bc1d15ed9dd69b256e15f617094d1ea2b88c13034f4ab518c3 = $this->env->getExtension("native_profiler");
        $__internal_6ea6d07e147c02bc1d15ed9dd69b256e15f617094d1ea2b88c13034f4ab518c3->enter($__internal_6ea6d07e147c02bc1d15ed9dd69b256e15f617094d1ea2b88c13034f4ab518c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ea6d07e147c02bc1d15ed9dd69b256e15f617094d1ea2b88c13034f4ab518c3->leave($__internal_6ea6d07e147c02bc1d15ed9dd69b256e15f617094d1ea2b88c13034f4ab518c3_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6486c3c980ec9feb6f46eafb1aae498ccba1209bc5c953429069183c16e36b03 = $this->env->getExtension("native_profiler");
        $__internal_6486c3c980ec9feb6f46eafb1aae498ccba1209bc5c953429069183c16e36b03->enter($__internal_6486c3c980ec9feb6f46eafb1aae498ccba1209bc5c953429069183c16e36b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 38)->display($context);
        
        $__internal_6486c3c980ec9feb6f46eafb1aae498ccba1209bc5c953429069183c16e36b03->leave($__internal_6486c3c980ec9feb6f46eafb1aae498ccba1209bc5c953429069183c16e36b03_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_885003dfe1b4bba111ea1e9d71a6ec0c2590a7ee7a1818dfb34f56778873a61b = $this->env->getExtension("native_profiler");
        $__internal_885003dfe1b4bba111ea1e9d71a6ec0c2590a7ee7a1818dfb34f56778873a61b->enter($__internal_885003dfe1b4bba111ea1e9d71a6ec0c2590a7ee7a1818dfb34f56778873a61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_885003dfe1b4bba111ea1e9d71a6ec0c2590a7ee7a1818dfb34f56778873a61b->leave($__internal_885003dfe1b4bba111ea1e9d71a6ec0c2590a7ee7a1818dfb34f56778873a61b_prof);

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
