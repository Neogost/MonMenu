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
        $__internal_8c227bfe6db7ca86d5e06674d81733cc2cd30354ec694d8ce459db169befa048 = $this->env->getExtension("native_profiler");
        $__internal_8c227bfe6db7ca86d5e06674d81733cc2cd30354ec694d8ce459db169befa048->enter($__internal_8c227bfe6db7ca86d5e06674d81733cc2cd30354ec694d8ce459db169befa048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c227bfe6db7ca86d5e06674d81733cc2cd30354ec694d8ce459db169befa048->leave($__internal_8c227bfe6db7ca86d5e06674d81733cc2cd30354ec694d8ce459db169befa048_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d335690b948363401969447b6ac4b97b4c1b45937017b31dd1ab809f4749f5f1 = $this->env->getExtension("native_profiler");
        $__internal_d335690b948363401969447b6ac4b97b4c1b45937017b31dd1ab809f4749f5f1->enter($__internal_d335690b948363401969447b6ac4b97b4c1b45937017b31dd1ab809f4749f5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d335690b948363401969447b6ac4b97b4c1b45937017b31dd1ab809f4749f5f1->leave($__internal_d335690b948363401969447b6ac4b97b4c1b45937017b31dd1ab809f4749f5f1_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_ebf5ce745dbf767e259e13cd0a7abc9d8f23596f3ab93fbc8bc2fb45d47df4b3 = $this->env->getExtension("native_profiler");
        $__internal_ebf5ce745dbf767e259e13cd0a7abc9d8f23596f3ab93fbc8bc2fb45d47df4b3->enter($__internal_ebf5ce745dbf767e259e13cd0a7abc9d8f23596f3ab93fbc8bc2fb45d47df4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ebf5ce745dbf767e259e13cd0a7abc9d8f23596f3ab93fbc8bc2fb45d47df4b3->leave($__internal_ebf5ce745dbf767e259e13cd0a7abc9d8f23596f3ab93fbc8bc2fb45d47df4b3_prof);

    }

    // line 17
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_8eba21195b255f18c80af85ea6debba91eed19dff81c507d8eadf4de04b334eb = $this->env->getExtension("native_profiler");
        $__internal_8eba21195b255f18c80af85ea6debba91eed19dff81c507d8eadf4de04b334eb->enter($__internal_8eba21195b255f18c80af85ea6debba91eed19dff81c507d8eadf4de04b334eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_8eba21195b255f18c80af85ea6debba91eed19dff81c507d8eadf4de04b334eb->leave($__internal_8eba21195b255f18c80af85ea6debba91eed19dff81c507d8eadf4de04b334eb_prof);

    }

    // line 20
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_fa69f5ac31d2473eb183f9aec11b4093e486c615018f9161dc237e814e6f5412 = $this->env->getExtension("native_profiler");
        $__internal_fa69f5ac31d2473eb183f9aec11b4093e486c615018f9161dc237e814e6f5412->enter($__internal_fa69f5ac31d2473eb183f9aec11b4093e486c615018f9161dc237e814e6f5412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Générer vos repas de la semaine en un seul click.";
        
        $__internal_fa69f5ac31d2473eb183f9aec11b4093e486c615018f9161dc237e814e6f5412->leave($__internal_fa69f5ac31d2473eb183f9aec11b4093e486c615018f9161dc237e814e6f5412_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7aca8b05cff182cda3f7bd4c2dc829b82caf089b4d79da9b90e2fce5ee10cd1b = $this->env->getExtension("native_profiler");
        $__internal_7aca8b05cff182cda3f7bd4c2dc829b82caf089b4d79da9b90e2fce5ee10cd1b->enter($__internal_7aca8b05cff182cda3f7bd4c2dc829b82caf089b4d79da9b90e2fce5ee10cd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::nav.html.twig", "DesmaymonMenuBundle::layout.html.twig", 30)->display($context);
        
        $__internal_7aca8b05cff182cda3f7bd4c2dc829b82caf089b4d79da9b90e2fce5ee10cd1b->leave($__internal_7aca8b05cff182cda3f7bd4c2dc829b82caf089b4d79da9b90e2fce5ee10cd1b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_017fcab29897974b8b2f34f8345249132df9fb793f02e02b66812d397d14beb0 = $this->env->getExtension("native_profiler");
        $__internal_017fcab29897974b8b2f34f8345249132df9fb793f02e02b66812d397d14beb0->enter($__internal_017fcab29897974b8b2f34f8345249132df9fb793f02e02b66812d397d14beb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_017fcab29897974b8b2f34f8345249132df9fb793f02e02b66812d397d14beb0->leave($__internal_017fcab29897974b8b2f34f8345249132df9fb793f02e02b66812d397d14beb0_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_152b1e0c446a38885b247c5bbece34a63488ff775f3e02033b8fd427f126ea44 = $this->env->getExtension("native_profiler");
        $__internal_152b1e0c446a38885b247c5bbece34a63488ff775f3e02033b8fd427f126ea44->enter($__internal_152b1e0c446a38885b247c5bbece34a63488ff775f3e02033b8fd427f126ea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    ";
        $this->loadTemplate("DesmaymonMenuBundle::footer.html.twig", "DesmaymonMenuBundle::layout.html.twig", 38)->display($context);
        
        $__internal_152b1e0c446a38885b247c5bbece34a63488ff775f3e02033b8fd427f126ea44->leave($__internal_152b1e0c446a38885b247c5bbece34a63488ff775f3e02033b8fd427f126ea44_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_164373ff98d0ec2dc738bd9bf07694b6df2f6b560ba48a16b05ee8f0f33cf336 = $this->env->getExtension("native_profiler");
        $__internal_164373ff98d0ec2dc738bd9bf07694b6df2f6b560ba48a16b05ee8f0f33cf336->enter($__internal_164373ff98d0ec2dc738bd9bf07694b6df2f6b560ba48a16b05ee8f0f33cf336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_164373ff98d0ec2dc738bd9bf07694b6df2f6b560ba48a16b05ee8f0f33cf336->leave($__internal_164373ff98d0ec2dc738bd9bf07694b6df2f6b560ba48a16b05ee8f0f33cf336_prof);

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
