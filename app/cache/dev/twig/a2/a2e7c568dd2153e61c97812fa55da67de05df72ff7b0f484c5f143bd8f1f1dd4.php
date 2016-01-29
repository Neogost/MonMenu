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
        $__internal_acf152d454634a55607c326333e93d8f8a5e8ed4b484cf5a5c4e538c23c779e7 = $this->env->getExtension("native_profiler");
        $__internal_acf152d454634a55607c326333e93d8f8a5e8ed4b484cf5a5c4e538c23c779e7->enter($__internal_acf152d454634a55607c326333e93d8f8a5e8ed4b484cf5a5c4e538c23c779e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acf152d454634a55607c326333e93d8f8a5e8ed4b484cf5a5c4e538c23c779e7->leave($__internal_acf152d454634a55607c326333e93d8f8a5e8ed4b484cf5a5c4e538c23c779e7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6c9690510d19044c9671d7cb741ea664c0fa67f574f922272b77b669d78cd31 = $this->env->getExtension("native_profiler");
        $__internal_e6c9690510d19044c9671d7cb741ea664c0fa67f574f922272b77b669d78cd31->enter($__internal_e6c9690510d19044c9671d7cb741ea664c0fa67f574f922272b77b669d78cd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e6c9690510d19044c9671d7cb741ea664c0fa67f574f922272b77b669d78cd31->leave($__internal_e6c9690510d19044c9671d7cb741ea664c0fa67f574f922272b77b669d78cd31_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_6ead7391836efcf77aaad3f62fb220b3b3252b02ecf1a3612af45ba824ff2fc3 = $this->env->getExtension("native_profiler");
        $__internal_6ead7391836efcf77aaad3f62fb220b3b3252b02ecf1a3612af45ba824ff2fc3->enter($__internal_6ead7391836efcf77aaad3f62fb220b3b3252b02ecf1a3612af45ba824ff2fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_6ead7391836efcf77aaad3f62fb220b3b3252b02ecf1a3612af45ba824ff2fc3->leave($__internal_6ead7391836efcf77aaad3f62fb220b3b3252b02ecf1a3612af45ba824ff2fc3_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_f6327cc44153524718505bcf96250b265266aca4bc355dc5555c94b274a101b0 = $this->env->getExtension("native_profiler");
        $__internal_f6327cc44153524718505bcf96250b265266aca4bc355dc5555c94b274a101b0->enter($__internal_f6327cc44153524718505bcf96250b265266aca4bc355dc5555c94b274a101b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_f6327cc44153524718505bcf96250b265266aca4bc355dc5555c94b274a101b0->leave($__internal_f6327cc44153524718505bcf96250b265266aca4bc355dc5555c94b274a101b0_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_dae8a6bce42a01708b0ef7c9398340dfd4254d1f5807dcad28b5b124d8511078 = $this->env->getExtension("native_profiler");
        $__internal_dae8a6bce42a01708b0ef7c9398340dfd4254d1f5807dcad28b5b124d8511078->enter($__internal_dae8a6bce42a01708b0ef7c9398340dfd4254d1f5807dcad28b5b124d8511078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_dae8a6bce42a01708b0ef7c9398340dfd4254d1f5807dcad28b5b124d8511078->leave($__internal_dae8a6bce42a01708b0ef7c9398340dfd4254d1f5807dcad28b5b124d8511078_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b21527228a80a601770ba06854c67cc1062efaf5550e86f23c949a2d783d48fe = $this->env->getExtension("native_profiler");
        $__internal_b21527228a80a601770ba06854c67cc1062efaf5550e86f23c949a2d783d48fe->enter($__internal_b21527228a80a601770ba06854c67cc1062efaf5550e86f23c949a2d783d48fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::layout.html.twig", 30)->display($context);
        
        $__internal_b21527228a80a601770ba06854c67cc1062efaf5550e86f23c949a2d783d48fe->leave($__internal_b21527228a80a601770ba06854c67cc1062efaf5550e86f23c949a2d783d48fe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab6ac07e4be036b2e6f800e30598844488da47757934ceaa0d0b5e805b3782f4 = $this->env->getExtension("native_profiler");
        $__internal_ab6ac07e4be036b2e6f800e30598844488da47757934ceaa0d0b5e805b3782f4->enter($__internal_ab6ac07e4be036b2e6f800e30598844488da47757934ceaa0d0b5e805b3782f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab6ac07e4be036b2e6f800e30598844488da47757934ceaa0d0b5e805b3782f4->leave($__internal_ab6ac07e4be036b2e6f800e30598844488da47757934ceaa0d0b5e805b3782f4_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e43fa5ffc9afd4ea91afe40902ffa4e9481f4fd99d4398e1178216f30dbfbed1 = $this->env->getExtension("native_profiler");
        $__internal_e43fa5ffc9afd4ea91afe40902ffa4e9481f4fd99d4398e1178216f30dbfbed1->enter($__internal_e43fa5ffc9afd4ea91afe40902ffa4e9481f4fd99d4398e1178216f30dbfbed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::layout.html.twig", 38)->display($context);
        
        $__internal_e43fa5ffc9afd4ea91afe40902ffa4e9481f4fd99d4398e1178216f30dbfbed1->leave($__internal_e43fa5ffc9afd4ea91afe40902ffa4e9481f4fd99d4398e1178216f30dbfbed1_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a639aefbc57ee67d8ba46526bf79d9291adefb0d118236e374289aeae1f2f5ac = $this->env->getExtension("native_profiler");
        $__internal_a639aefbc57ee67d8ba46526bf79d9291adefb0d118236e374289aeae1f2f5ac->enter($__internal_a639aefbc57ee67d8ba46526bf79d9291adefb0d118236e374289aeae1f2f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a639aefbc57ee67d8ba46526bf79d9291adefb0d118236e374289aeae1f2f5ac->leave($__internal_a639aefbc57ee67d8ba46526bf79d9291adefb0d118236e374289aeae1f2f5ac_prof);

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
