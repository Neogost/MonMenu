<?php

/* DesmaymonMenuBundle::header.html.twig */
class __TwigTemplate_e69ef2b4b531b33e269a9c2bd60b6df871ecab2439513552a4adc17b38fe5225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8204c0a8164d2b202ed9a51c485dc3e83b903ada010688a55e7117f111dd6005 = $this->env->getExtension("native_profiler");
        $__internal_8204c0a8164d2b202ed9a51c485dc3e83b903ada010688a55e7117f111dd6005->enter($__internal_8204c0a8164d2b202ed9a51c485dc3e83b903ada010688a55e7117f111dd6005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::header.html.twig"));

        // line 1
        echo "<header>
    <div id='index-banner' class='section'>
        <div class='container'>
            <div class='row'>
                <div class='col s12 m9'>
                    <h1 class='header center-on-small-only'>
                        ";
        // line 7
        $this->displayBlock('titlePage', $context, $blocks);
        echo "</h1>
                    <h4 class='light red-text text-lighten-4 center-on-small-only'>Générer vos repas de la semaine en un seul click.</h4>
                </div>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_8204c0a8164d2b202ed9a51c485dc3e83b903ada010688a55e7117f111dd6005->leave($__internal_8204c0a8164d2b202ed9a51c485dc3e83b903ada010688a55e7117f111dd6005_prof);

    }

    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_1d54e1bd76095d31f31d5fa9bc5c4c2934c19823f6dd671216b58c69a34a36b4 = $this->env->getExtension("native_profiler");
        $__internal_1d54e1bd76095d31f31d5fa9bc5c4c2934c19823f6dd671216b58c69a34a36b4->enter($__internal_1d54e1bd76095d31f31d5fa9bc5c4c2934c19823f6dd671216b58c69a34a36b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_1d54e1bd76095d31f31d5fa9bc5c4c2934c19823f6dd671216b58c69a34a36b4->leave($__internal_1d54e1bd76095d31f31d5fa9bc5c4c2934c19823f6dd671216b58c69a34a36b4_prof);

    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  23 => 1,);
    }
}
/* <header>*/
/*     <div id='index-banner' class='section'>*/
/*         <div class='container'>*/
/*             <div class='row'>*/
/*                 <div class='col s12 m9'>*/
/*                     <h1 class='header center-on-small-only'>*/
/*                         {% block titlePage %}Mon Menu{% endblock %}</h1>*/
/*                     <h4 class='light red-text text-lighten-4 center-on-small-only'>Générer vos repas de la semaine en un seul click.</h4>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
