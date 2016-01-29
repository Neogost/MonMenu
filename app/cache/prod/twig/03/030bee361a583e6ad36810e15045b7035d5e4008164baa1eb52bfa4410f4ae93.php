<?php

/* DesmaymonMenuBundle:Recipe:add.html.twig */
class __TwigTemplate_ed6715ea4d70cfe2c22ab994de9dbaba88f44f723493b15b9962f8de8486bac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DesmaymonMenuBundle::Layout.html.twig", "DesmaymonMenuBundle:Recipe:add.html.twig", 1);
        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'wordingPage' => array($this, 'block_wordingPage'),
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
    public function block_titlePage($context, array $blocks = array())
    {
        // line 4
        echo "    Ajouter une Recette  
";
    }

    // line 7
    public function block_wordingPage($context, array $blocks = array())
    {
        // line 8
        echo "    Ajouter vos nouvelles recettes !
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class='container' >
        <form>
            <div class='row' >
                <div class=\"input-field col s6\">
                    <input id=\"first_name\" type=\"text\" class=\"validate\" length=\"60\"/>
                    <label for=\"description\">Short Description</label>
                </div>
                <div class=\"input-field col s2\">
                    <label>Number of people :</label>
                    <p class=\"range-field\">
                        <input type=\"range\" id=\"number_people\" min=\"0\" max=\"10\" />
                    </p>
                </div>
                <div class=\"input-field col s2\">
                    <label>Difficulty :</label>
                    <p class=\"range-field\">
                        <input type=\"range\" id=\"difficulty\" min=\"0\" max=\"5\" />
                    </p>
                </div>
            </div>
            <div class='row' >
                <div class=\"input-field col s12\">
                    <textarea id=\"description\" class=\"materialize-textarea\"></textarea>
                    <label for=\"description\">Description</label>
                </div>
            </div>
            <div class='row' >
                <div class='col s6 offset-s3' >  
                    <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Submit
                        <i class=\"material-icons right\">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle:Recipe:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'DesmaymonMenuBundle::Layout.html.twig' %}*/
/* */
/* {% block titlePage %}*/
/*     Ajouter une Recette  */
/* {% endblock %}*/
/* */
/* {% block wordingPage %}*/
/*     Ajouter vos nouvelles recettes !*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class='container' >*/
/*         <form>*/
/*             <div class='row' >*/
/*                 <div class="input-field col s6">*/
/*                     <input id="first_name" type="text" class="validate" length="60"/>*/
/*                     <label for="description">Short Description</label>*/
/*                 </div>*/
/*                 <div class="input-field col s2">*/
/*                     <label>Number of people :</label>*/
/*                     <p class="range-field">*/
/*                         <input type="range" id="number_people" min="0" max="10" />*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="input-field col s2">*/
/*                     <label>Difficulty :</label>*/
/*                     <p class="range-field">*/
/*                         <input type="range" id="difficulty" min="0" max="5" />*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class='row' >*/
/*                 <div class="input-field col s12">*/
/*                     <textarea id="description" class="materialize-textarea"></textarea>*/
/*                     <label for="description">Description</label>*/
/*                 </div>*/
/*             </div>*/
/*             <div class='row' >*/
/*                 <div class='col s6 offset-s3' >  */
/*                     <button class="btn waves-effect waves-light" type="submit" name="action">Submit*/
/*                         <i class="material-icons right">send</i>*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
