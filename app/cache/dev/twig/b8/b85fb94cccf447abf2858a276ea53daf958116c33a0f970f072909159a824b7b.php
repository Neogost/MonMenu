<?php

/* DesmaymonMenuBundle:Recipe:add.html.twig */
class __TwigTemplate_21f5b5341455cc97c262bfc590eb6c5985e2e2da90986b8ef11920217318899d extends Twig_Template
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
        $__internal_2f533927400e98ea59fb2944682cd36e59ceae19346ff1dea59b896760b1921d = $this->env->getExtension("native_profiler");
        $__internal_2f533927400e98ea59fb2944682cd36e59ceae19346ff1dea59b896760b1921d->enter($__internal_2f533927400e98ea59fb2944682cd36e59ceae19346ff1dea59b896760b1921d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle:Recipe:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f533927400e98ea59fb2944682cd36e59ceae19346ff1dea59b896760b1921d->leave($__internal_2f533927400e98ea59fb2944682cd36e59ceae19346ff1dea59b896760b1921d_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_e0b7de73d54a0f92358b96f6677c15abc16b03317cdbd7a60f243cd48622f729 = $this->env->getExtension("native_profiler");
        $__internal_e0b7de73d54a0f92358b96f6677c15abc16b03317cdbd7a60f243cd48622f729->enter($__internal_e0b7de73d54a0f92358b96f6677c15abc16b03317cdbd7a60f243cd48622f729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    Ajouter une Recette  
";
        
        $__internal_e0b7de73d54a0f92358b96f6677c15abc16b03317cdbd7a60f243cd48622f729->leave($__internal_e0b7de73d54a0f92358b96f6677c15abc16b03317cdbd7a60f243cd48622f729_prof);

    }

    // line 7
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_4215d62b355e734b80bec21c2fd178a8043025c457d26c49e1c5a673457e9ff0 = $this->env->getExtension("native_profiler");
        $__internal_4215d62b355e734b80bec21c2fd178a8043025c457d26c49e1c5a673457e9ff0->enter($__internal_4215d62b355e734b80bec21c2fd178a8043025c457d26c49e1c5a673457e9ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        // line 8
        echo "    Ajouter vos nouvelles recettes !
";
        
        $__internal_4215d62b355e734b80bec21c2fd178a8043025c457d26c49e1c5a673457e9ff0->leave($__internal_4215d62b355e734b80bec21c2fd178a8043025c457d26c49e1c5a673457e9ff0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6635b9946d326a71e7623d1d1e9b033a46697d233751df4a07eb915300ac12f5 = $this->env->getExtension("native_profiler");
        $__internal_6635b9946d326a71e7623d1d1e9b033a46697d233751df4a07eb915300ac12f5->enter($__internal_6635b9946d326a71e7623d1d1e9b033a46697d233751df4a07eb915300ac12f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6635b9946d326a71e7623d1d1e9b033a46697d233751df4a07eb915300ac12f5->leave($__internal_6635b9946d326a71e7623d1d1e9b033a46697d233751df4a07eb915300ac12f5_prof);

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
        return array (  70 => 12,  64 => 11,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
