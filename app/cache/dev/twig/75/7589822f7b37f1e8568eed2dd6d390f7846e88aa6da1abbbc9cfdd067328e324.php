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
        $__internal_cb31dad7668a2c0e986e33fa0cc7341ed4b14c452d9c7a2a4e04de49f4cbb25c = $this->env->getExtension("native_profiler");
        $__internal_cb31dad7668a2c0e986e33fa0cc7341ed4b14c452d9c7a2a4e04de49f4cbb25c->enter($__internal_cb31dad7668a2c0e986e33fa0cc7341ed4b14c452d9c7a2a4e04de49f4cbb25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::header.html.twig"));

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
        
        $__internal_cb31dad7668a2c0e986e33fa0cc7341ed4b14c452d9c7a2a4e04de49f4cbb25c->leave($__internal_cb31dad7668a2c0e986e33fa0cc7341ed4b14c452d9c7a2a4e04de49f4cbb25c_prof);

    }

    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_226101c212e47dd6dde42867181c23401a278038488ab21c86ee820356dbabbd = $this->env->getExtension("native_profiler");
        $__internal_226101c212e47dd6dde42867181c23401a278038488ab21c86ee820356dbabbd->enter($__internal_226101c212e47dd6dde42867181c23401a278038488ab21c86ee820356dbabbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_226101c212e47dd6dde42867181c23401a278038488ab21c86ee820356dbabbd->leave($__internal_226101c212e47dd6dde42867181c23401a278038488ab21c86ee820356dbabbd_prof);

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
