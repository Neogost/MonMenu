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
        $__internal_6ce026c18728970a79763131fdfbf2200d2fac02ecb83ad7ad653da29199d799 = $this->env->getExtension("native_profiler");
        $__internal_6ce026c18728970a79763131fdfbf2200d2fac02ecb83ad7ad653da29199d799->enter($__internal_6ce026c18728970a79763131fdfbf2200d2fac02ecb83ad7ad653da29199d799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce026c18728970a79763131fdfbf2200d2fac02ecb83ad7ad653da29199d799->leave($__internal_6ce026c18728970a79763131fdfbf2200d2fac02ecb83ad7ad653da29199d799_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65e1bd43aac2aa6db35b0846a31b83bb78bbbe862850b884a7a40b833806180e = $this->env->getExtension("native_profiler");
        $__internal_65e1bd43aac2aa6db35b0846a31b83bb78bbbe862850b884a7a40b833806180e->enter($__internal_65e1bd43aac2aa6db35b0846a31b83bb78bbbe862850b884a7a40b833806180e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_65e1bd43aac2aa6db35b0846a31b83bb78bbbe862850b884a7a40b833806180e->leave($__internal_65e1bd43aac2aa6db35b0846a31b83bb78bbbe862850b884a7a40b833806180e_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_34ec885b58d9a1baff9afbcc9aad86fc726b0a526fe2bbeab60f1abf3a8e0dbc = $this->env->getExtension("native_profiler");
        $__internal_34ec885b58d9a1baff9afbcc9aad86fc726b0a526fe2bbeab60f1abf3a8e0dbc->enter($__internal_34ec885b58d9a1baff9afbcc9aad86fc726b0a526fe2bbeab60f1abf3a8e0dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_34ec885b58d9a1baff9afbcc9aad86fc726b0a526fe2bbeab60f1abf3a8e0dbc->leave($__internal_34ec885b58d9a1baff9afbcc9aad86fc726b0a526fe2bbeab60f1abf3a8e0dbc_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_684f1887c3c18acb1bc3d1c00d27233b17202584ff4d727b454a106d505b396d = $this->env->getExtension("native_profiler");
        $__internal_684f1887c3c18acb1bc3d1c00d27233b17202584ff4d727b454a106d505b396d->enter($__internal_684f1887c3c18acb1bc3d1c00d27233b17202584ff4d727b454a106d505b396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_684f1887c3c18acb1bc3d1c00d27233b17202584ff4d727b454a106d505b396d->leave($__internal_684f1887c3c18acb1bc3d1c00d27233b17202584ff4d727b454a106d505b396d_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_3fa1e18e49b36ecf9a64e36cc906dc6b3d745095fc853a2524393721e477e76f = $this->env->getExtension("native_profiler");
        $__internal_3fa1e18e49b36ecf9a64e36cc906dc6b3d745095fc853a2524393721e477e76f->enter($__internal_3fa1e18e49b36ecf9a64e36cc906dc6b3d745095fc853a2524393721e477e76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_3fa1e18e49b36ecf9a64e36cc906dc6b3d745095fc853a2524393721e477e76f->leave($__internal_3fa1e18e49b36ecf9a64e36cc906dc6b3d745095fc853a2524393721e477e76f_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c2bdfd2db0636f3fd09a458f08d163226f180b468fbb98d7c131ec40fe3c99b1 = $this->env->getExtension("native_profiler");
        $__internal_c2bdfd2db0636f3fd09a458f08d163226f180b468fbb98d7c131ec40fe3c99b1->enter($__internal_c2bdfd2db0636f3fd09a458f08d163226f180b468fbb98d7c131ec40fe3c99b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 30)->display($context);
        
        $__internal_c2bdfd2db0636f3fd09a458f08d163226f180b468fbb98d7c131ec40fe3c99b1->leave($__internal_c2bdfd2db0636f3fd09a458f08d163226f180b468fbb98d7c131ec40fe3c99b1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3de59b234fd093827cb1427a85be1f58ee4153346380f9a1e47eee22e201718 = $this->env->getExtension("native_profiler");
        $__internal_c3de59b234fd093827cb1427a85be1f58ee4153346380f9a1e47eee22e201718->enter($__internal_c3de59b234fd093827cb1427a85be1f58ee4153346380f9a1e47eee22e201718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3de59b234fd093827cb1427a85be1f58ee4153346380f9a1e47eee22e201718->leave($__internal_c3de59b234fd093827cb1427a85be1f58ee4153346380f9a1e47eee22e201718_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_917162b572af72735724a9effb6593a80b4dfb1431c38dbcf6595452e3360e71 = $this->env->getExtension("native_profiler");
        $__internal_917162b572af72735724a9effb6593a80b4dfb1431c38dbcf6595452e3360e71->enter($__internal_917162b572af72735724a9effb6593a80b4dfb1431c38dbcf6595452e3360e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::Layout.html.twig", 38)->display($context);
        
        $__internal_917162b572af72735724a9effb6593a80b4dfb1431c38dbcf6595452e3360e71->leave($__internal_917162b572af72735724a9effb6593a80b4dfb1431c38dbcf6595452e3360e71_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1aae67d0b0a17a0acdbda4069e1e955d41fcdcbf9b7221f6536ac44d735627aa = $this->env->getExtension("native_profiler");
        $__internal_1aae67d0b0a17a0acdbda4069e1e955d41fcdcbf9b7221f6536ac44d735627aa->enter($__internal_1aae67d0b0a17a0acdbda4069e1e955d41fcdcbf9b7221f6536ac44d735627aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1aae67d0b0a17a0acdbda4069e1e955d41fcdcbf9b7221f6536ac44d735627aa->leave($__internal_1aae67d0b0a17a0acdbda4069e1e955d41fcdcbf9b7221f6536ac44d735627aa_prof);

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
