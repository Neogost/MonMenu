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
        $__internal_1ffdf629e817e96a4abb787e7b4b37e68cc4dd33cde41a8429706e0ae4fb15a2 = $this->env->getExtension("native_profiler");
        $__internal_1ffdf629e817e96a4abb787e7b4b37e68cc4dd33cde41a8429706e0ae4fb15a2->enter($__internal_1ffdf629e817e96a4abb787e7b4b37e68cc4dd33cde41a8429706e0ae4fb15a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::header.html.twig"));

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
        
        $__internal_1ffdf629e817e96a4abb787e7b4b37e68cc4dd33cde41a8429706e0ae4fb15a2->leave($__internal_1ffdf629e817e96a4abb787e7b4b37e68cc4dd33cde41a8429706e0ae4fb15a2_prof);

    }

    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_a4ba60d4a067918a1ce2ba5f5c1b21d5b984fd95928a943ca2cb1989a1d97683 = $this->env->getExtension("native_profiler");
        $__internal_a4ba60d4a067918a1ce2ba5f5c1b21d5b984fd95928a943ca2cb1989a1d97683->enter($__internal_a4ba60d4a067918a1ce2ba5f5c1b21d5b984fd95928a943ca2cb1989a1d97683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        echo "Mon Menu";
        
        $__internal_a4ba60d4a067918a1ce2ba5f5c1b21d5b984fd95928a943ca2cb1989a1d97683->leave($__internal_a4ba60d4a067918a1ce2ba5f5c1b21d5b984fd95928a943ca2cb1989a1d97683_prof);

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
