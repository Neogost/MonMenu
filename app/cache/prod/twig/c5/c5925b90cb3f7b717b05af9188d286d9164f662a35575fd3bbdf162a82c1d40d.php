<?php

/* DesmaymonMenuBundle:Menu:index.html.twig */
class __TwigTemplate_ad14258a198129296daadc5751c01a7484d089aa673011450c86f67d21256c34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DesmaymonMenuBundle::Layout.html.twig", "DesmaymonMenuBundle:Menu:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DesmaymonMenuBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class='container'>
        <h5 class='card-stats-title'>Lundi</h5>
        <ul class=\"collapsible popout dropper\" data-collapsible=\"expandable\">
            <li  class='draggable' draggable='true'>
                <div class=\"collapsible-header\" ><i class=\"material-icons\">filter_drama</i>Dejeuner</div>
                <div class=\"collapsible-body\" >
                    <div class='row'>
                        <div class='col s10'>
                            <p>Hachi parmentier</p>
                        </div>
                        <div class='col s2'>
                            <i class=\"material-icons\" title='Changer' >replay</i>
                            <i class=\"material-icons\" title='Like'>thumb_up</i>
                            <i class=\"material-icons\" title='Dislike'>thumb_down</i>
                            <a href=''><i class=\"material-icons\" title='Liste de course'>shopping_cart</i></a>
                            <i class=\"material-icons\" title='Nombre de personne'>perm_contact_calendar</i> 5
                        </div>
                    </div>
                </div>
            </li>
            <li class='draggable' draggable='true'>
                <div class=\"collapsible-header\"><i class=\"material-icons\">place</i>Diner</div>
                <div class=\"collapsible-body\">
                    <div class='row'>
                        <div class='col s10'>
                            <p>Purée</p>
                        </div>
                        <div class='col s2'>
                            <i class=\"material-icons\">replay</i>
                            <a href=''><i class=\"material-icons\">shopping_cart</i></a>
                            <i class=\"material-icons\">perm_identity</i> 1
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class=\"collapsible popout\" data-collapsible=\"expandable\">
            <h5>Mardi</h5>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">filter_drama</i>Dejeuner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">place</i>Diner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>

        <ul class=\"collapsible popout\" data-collapsible=\"expandable\">
            <h5>Mercredi</h5>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">filter_drama</i>Dejeuner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">place</i>Diner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>

        <ul class=\"collapsible popout\" data-collapsible=\"expandable\">
            <h5>Jeudi</h5>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">filter_drama</i>Dejeuner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">place</i>Diner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>

        <ul class=\"collapsible popout\" data-collapsible=\"expandable\">
            <h5>Vendredi</h5>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">filter_drama</i>Dejeuner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">place</i>Diner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>

        <ul class=\"collapsible popout\" data-collapsible=\"expandable\">
            <h5>Samedi</h5>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">filter_drama</i>Dejeuner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">place</i>Diner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>

        <ul class=\"collapsible popout\" data-collapsible=\"expandable\">
            <h5>Dimanche</h5>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">filter_drama</i>Dejeuner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">place</i>Diner</div>
                <div class=\"collapsible-body\"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>
    </div>


";
    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle:Menu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'DesmaymonMenuBundle::Layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class='container'>*/
/*         <h5 class='card-stats-title'>Lundi</h5>*/
/*         <ul class="collapsible popout dropper" data-collapsible="expandable">*/
/*             <li  class='draggable' draggable='true'>*/
/*                 <div class="collapsible-header" ><i class="material-icons">filter_drama</i>Dejeuner</div>*/
/*                 <div class="collapsible-body" >*/
/*                     <div class='row'>*/
/*                         <div class='col s10'>*/
/*                             <p>Hachi parmentier</p>*/
/*                         </div>*/
/*                         <div class='col s2'>*/
/*                             <i class="material-icons" title='Changer' >replay</i>*/
/*                             <i class="material-icons" title='Like'>thumb_up</i>*/
/*                             <i class="material-icons" title='Dislike'>thumb_down</i>*/
/*                             <a href=''><i class="material-icons" title='Liste de course'>shopping_cart</i></a>*/
/*                             <i class="material-icons" title='Nombre de personne'>perm_contact_calendar</i> 5*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*             <li class='draggable' draggable='true'>*/
/*                 <div class="collapsible-header"><i class="material-icons">place</i>Diner</div>*/
/*                 <div class="collapsible-body">*/
/*                     <div class='row'>*/
/*                         <div class='col s10'>*/
/*                             <p>Purée</p>*/
/*                         </div>*/
/*                         <div class='col s2'>*/
/*                             <i class="material-icons">replay</i>*/
/*                             <a href=''><i class="material-icons">shopping_cart</i></a>*/
/*                             <i class="material-icons">perm_identity</i> 1*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*         </ul>*/
/*         <ul class="collapsible popout" data-collapsible="expandable">*/
/*             <h5>Mardi</h5>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dejeuner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">place</i>Diner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*         </ul>*/
/* */
/*         <ul class="collapsible popout" data-collapsible="expandable">*/
/*             <h5>Mercredi</h5>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dejeuner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">place</i>Diner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*         </ul>*/
/* */
/*         <ul class="collapsible popout" data-collapsible="expandable">*/
/*             <h5>Jeudi</h5>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dejeuner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">place</i>Diner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*         </ul>*/
/* */
/*         <ul class="collapsible popout" data-collapsible="expandable">*/
/*             <h5>Vendredi</h5>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dejeuner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">place</i>Diner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*         </ul>*/
/* */
/*         <ul class="collapsible popout" data-collapsible="expandable">*/
/*             <h5>Samedi</h5>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dejeuner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">place</i>Diner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*         </ul>*/
/* */
/*         <ul class="collapsible popout" data-collapsible="expandable">*/
/*             <h5>Dimanche</h5>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dejeuner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="collapsible-header"><i class="material-icons">place</i>Diner</div>*/
/*                 <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
