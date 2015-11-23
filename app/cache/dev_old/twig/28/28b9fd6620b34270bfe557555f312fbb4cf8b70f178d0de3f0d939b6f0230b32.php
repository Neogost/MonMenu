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
        $__internal_bce18f92950fda445c4d0a01ab2e1cb985ea9ff2c9507684723a87a495c6031b = $this->env->getExtension("native_profiler");
        $__internal_bce18f92950fda445c4d0a01ab2e1cb985ea9ff2c9507684723a87a495c6031b->enter($__internal_bce18f92950fda445c4d0a01ab2e1cb985ea9ff2c9507684723a87a495c6031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce18f92950fda445c4d0a01ab2e1cb985ea9ff2c9507684723a87a495c6031b->leave($__internal_bce18f92950fda445c4d0a01ab2e1cb985ea9ff2c9507684723a87a495c6031b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c6c4c48e600d8761d834d9ecdb168747c4bb8733c8dc772095c129decced87e = $this->env->getExtension("native_profiler");
        $__internal_9c6c4c48e600d8761d834d9ecdb168747c4bb8733c8dc772095c129decced87e->enter($__internal_9c6c4c48e600d8761d834d9ecdb168747c4bb8733c8dc772095c129decced87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9c6c4c48e600d8761d834d9ecdb168747c4bb8733c8dc772095c129decced87e->leave($__internal_9c6c4c48e600d8761d834d9ecdb168747c4bb8733c8dc772095c129decced87e_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_80758fe8df373ad38b58b166094a70cd0ab1ccfb896fc8ac6a74852cf8fe1fc6 = $this->env->getExtension("native_profiler");
        $__internal_80758fe8df373ad38b58b166094a70cd0ab1ccfb896fc8ac6a74852cf8fe1fc6->enter($__internal_80758fe8df373ad38b58b166094a70cd0ab1ccfb896fc8ac6a74852cf8fe1fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_80758fe8df373ad38b58b166094a70cd0ab1ccfb896fc8ac6a74852cf8fe1fc6->leave($__internal_80758fe8df373ad38b58b166094a70cd0ab1ccfb896fc8ac6a74852cf8fe1fc6_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_7ff0c8ebd037f388fb2d4134efb3205681ba2983f20d201a2b5f0c1ae5f6b829 = $this->env->getExtension("native_profiler");
        $__internal_7ff0c8ebd037f388fb2d4134efb3205681ba2983f20d201a2b5f0c1ae5f6b829->enter($__internal_7ff0c8ebd037f388fb2d4134efb3205681ba2983f20d201a2b5f0c1ae5f6b829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_7ff0c8ebd037f388fb2d4134efb3205681ba2983f20d201a2b5f0c1ae5f6b829->leave($__internal_7ff0c8ebd037f388fb2d4134efb3205681ba2983f20d201a2b5f0c1ae5f6b829_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_cd8ec3b1185157fe2b79d742174039c370348d2386102fbc99b35bcad13a8294 = $this->env->getExtension("native_profiler");
        $__internal_cd8ec3b1185157fe2b79d742174039c370348d2386102fbc99b35bcad13a8294->enter($__internal_cd8ec3b1185157fe2b79d742174039c370348d2386102fbc99b35bcad13a8294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_cd8ec3b1185157fe2b79d742174039c370348d2386102fbc99b35bcad13a8294->leave($__internal_cd8ec3b1185157fe2b79d742174039c370348d2386102fbc99b35bcad13a8294_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b6b55888a67250e91c78cef0bd4e6171529931dbccd5e972bff02daa628884b3 = $this->env->getExtension("native_profiler");
        $__internal_b6b55888a67250e91c78cef0bd4e6171529931dbccd5e972bff02daa628884b3->enter($__internal_b6b55888a67250e91c78cef0bd4e6171529931dbccd5e972bff02daa628884b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 30)->display($context);
        
        $__internal_b6b55888a67250e91c78cef0bd4e6171529931dbccd5e972bff02daa628884b3->leave($__internal_b6b55888a67250e91c78cef0bd4e6171529931dbccd5e972bff02daa628884b3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_804c9cccb6ab96fb2083cc911f0412251a7a2bf9ff18963e02da6fe91262f1e8 = $this->env->getExtension("native_profiler");
        $__internal_804c9cccb6ab96fb2083cc911f0412251a7a2bf9ff18963e02da6fe91262f1e8->enter($__internal_804c9cccb6ab96fb2083cc911f0412251a7a2bf9ff18963e02da6fe91262f1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_804c9cccb6ab96fb2083cc911f0412251a7a2bf9ff18963e02da6fe91262f1e8->leave($__internal_804c9cccb6ab96fb2083cc911f0412251a7a2bf9ff18963e02da6fe91262f1e8_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a9888d3e913a1a67a2d7781c89d05ecea4093bc71a33424cd42c02df248d5ad1 = $this->env->getExtension("native_profiler");
        $__internal_a9888d3e913a1a67a2d7781c89d05ecea4093bc71a33424cd42c02df248d5ad1->enter($__internal_a9888d3e913a1a67a2d7781c89d05ecea4093bc71a33424cd42c02df248d5ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 38)->display($context);
        
        $__internal_a9888d3e913a1a67a2d7781c89d05ecea4093bc71a33424cd42c02df248d5ad1->leave($__internal_a9888d3e913a1a67a2d7781c89d05ecea4093bc71a33424cd42c02df248d5ad1_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b231b2d33d5c7445c0c3b13c3a41cfa52975fb231a431e3e922dc37b2eed6485 = $this->env->getExtension("native_profiler");
        $__internal_b231b2d33d5c7445c0c3b13c3a41cfa52975fb231a431e3e922dc37b2eed6485->enter($__internal_b231b2d33d5c7445c0c3b13c3a41cfa52975fb231a431e3e922dc37b2eed6485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b231b2d33d5c7445c0c3b13c3a41cfa52975fb231a431e3e922dc37b2eed6485->leave($__internal_b231b2d33d5c7445c0c3b13c3a41cfa52975fb231a431e3e922dc37b2eed6485_prof);

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
