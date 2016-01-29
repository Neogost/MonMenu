<?php

/* DesmaymonMenuBundle::header.html.twig */
class __TwigTemplate_045b36332051151ac96405686451207f16aca440157bd393d893d8ccc7275829 extends Twig_Template
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
    }

    public function block_titlePage($context, array $blocks = array())
    {
        echo "Mon Menu";
    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  20 => 1,);
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
