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
        $__internal_b27e48daffb9a84fd5eef34976ea9f5cc6af1a348acebb8dc648bab3da6bb1ff = $this->env->getExtension("native_profiler");
        $__internal_b27e48daffb9a84fd5eef34976ea9f5cc6af1a348acebb8dc648bab3da6bb1ff->enter($__internal_b27e48daffb9a84fd5eef34976ea9f5cc6af1a348acebb8dc648bab3da6bb1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27e48daffb9a84fd5eef34976ea9f5cc6af1a348acebb8dc648bab3da6bb1ff->leave($__internal_b27e48daffb9a84fd5eef34976ea9f5cc6af1a348acebb8dc648bab3da6bb1ff_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d261551aec1b4c9d5fe1c6f300d4f10a3908baa08376844bc1bded1491945a7 = $this->env->getExtension("native_profiler");
        $__internal_1d261551aec1b4c9d5fe1c6f300d4f10a3908baa08376844bc1bded1491945a7->enter($__internal_1d261551aec1b4c9d5fe1c6f300d4f10a3908baa08376844bc1bded1491945a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1d261551aec1b4c9d5fe1c6f300d4f10a3908baa08376844bc1bded1491945a7->leave($__internal_1d261551aec1b4c9d5fe1c6f300d4f10a3908baa08376844bc1bded1491945a7_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_bdfc0c4b6153b41d586e9a4fd813b6481df78bbfa21b88fe16f704c24aa9ff45 = $this->env->getExtension("native_profiler");
        $__internal_bdfc0c4b6153b41d586e9a4fd813b6481df78bbfa21b88fe16f704c24aa9ff45->enter($__internal_bdfc0c4b6153b41d586e9a4fd813b6481df78bbfa21b88fe16f704c24aa9ff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_bdfc0c4b6153b41d586e9a4fd813b6481df78bbfa21b88fe16f704c24aa9ff45->leave($__internal_bdfc0c4b6153b41d586e9a4fd813b6481df78bbfa21b88fe16f704c24aa9ff45_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_20aff6c9cd890f23bfe4e590e79b185bd68f8234942b357667d90591733d542a = $this->env->getExtension("native_profiler");
        $__internal_20aff6c9cd890f23bfe4e590e79b185bd68f8234942b357667d90591733d542a->enter($__internal_20aff6c9cd890f23bfe4e590e79b185bd68f8234942b357667d90591733d542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_20aff6c9cd890f23bfe4e590e79b185bd68f8234942b357667d90591733d542a->leave($__internal_20aff6c9cd890f23bfe4e590e79b185bd68f8234942b357667d90591733d542a_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_59c14fe7db73f635b2e5466b6c66b6e495213008fe69a5667c7f386c1d66e972 = $this->env->getExtension("native_profiler");
        $__internal_59c14fe7db73f635b2e5466b6c66b6e495213008fe69a5667c7f386c1d66e972->enter($__internal_59c14fe7db73f635b2e5466b6c66b6e495213008fe69a5667c7f386c1d66e972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_59c14fe7db73f635b2e5466b6c66b6e495213008fe69a5667c7f386c1d66e972->leave($__internal_59c14fe7db73f635b2e5466b6c66b6e495213008fe69a5667c7f386c1d66e972_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4702cc9207c8a2d08be04b9d4d2beeaf5906921832d42dad54c5fd6b30ba4a9f = $this->env->getExtension("native_profiler");
        $__internal_4702cc9207c8a2d08be04b9d4d2beeaf5906921832d42dad54c5fd6b30ba4a9f->enter($__internal_4702cc9207c8a2d08be04b9d4d2beeaf5906921832d42dad54c5fd6b30ba4a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 30)->display($context);
        
        $__internal_4702cc9207c8a2d08be04b9d4d2beeaf5906921832d42dad54c5fd6b30ba4a9f->leave($__internal_4702cc9207c8a2d08be04b9d4d2beeaf5906921832d42dad54c5fd6b30ba4a9f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8dc7c413425347fe497a8b5a033c27227507e3aa562544954c3eeed32fd147b = $this->env->getExtension("native_profiler");
        $__internal_b8dc7c413425347fe497a8b5a033c27227507e3aa562544954c3eeed32fd147b->enter($__internal_b8dc7c413425347fe497a8b5a033c27227507e3aa562544954c3eeed32fd147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8dc7c413425347fe497a8b5a033c27227507e3aa562544954c3eeed32fd147b->leave($__internal_b8dc7c413425347fe497a8b5a033c27227507e3aa562544954c3eeed32fd147b_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_71d28fc27ffc12db88be1ebaa0a7b8f83a1c2b4a2f7f00b26a3251aedd2e343c = $this->env->getExtension("native_profiler");
        $__internal_71d28fc27ffc12db88be1ebaa0a7b8f83a1c2b4a2f7f00b26a3251aedd2e343c->enter($__internal_71d28fc27ffc12db88be1ebaa0a7b8f83a1c2b4a2f7f00b26a3251aedd2e343c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 38)->display($context);
        
        $__internal_71d28fc27ffc12db88be1ebaa0a7b8f83a1c2b4a2f7f00b26a3251aedd2e343c->leave($__internal_71d28fc27ffc12db88be1ebaa0a7b8f83a1c2b4a2f7f00b26a3251aedd2e343c_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14ecc1918105c42b7f25f1c65c47a45300739c7bf443896f26a9915108a5f502 = $this->env->getExtension("native_profiler");
        $__internal_14ecc1918105c42b7f25f1c65c47a45300739c7bf443896f26a9915108a5f502->enter($__internal_14ecc1918105c42b7f25f1c65c47a45300739c7bf443896f26a9915108a5f502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_14ecc1918105c42b7f25f1c65c47a45300739c7bf443896f26a9915108a5f502->leave($__internal_14ecc1918105c42b7f25f1c65c47a45300739c7bf443896f26a9915108a5f502_prof);

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
