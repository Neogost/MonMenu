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
        $__internal_f43a5cd2b2febcf0cde9ad8c137941263a8d8af8ee3a901244e29075816a8f06 = $this->env->getExtension("native_profiler");
        $__internal_f43a5cd2b2febcf0cde9ad8c137941263a8d8af8ee3a901244e29075816a8f06->enter($__internal_f43a5cd2b2febcf0cde9ad8c137941263a8d8af8ee3a901244e29075816a8f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle:Recipe:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f43a5cd2b2febcf0cde9ad8c137941263a8d8af8ee3a901244e29075816a8f06->leave($__internal_f43a5cd2b2febcf0cde9ad8c137941263a8d8af8ee3a901244e29075816a8f06_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_4f4a95a3973b00f079bac6376abf7fbb8d3e4b7ec5dc6cebe5651c3bff9eff08 = $this->env->getExtension("native_profiler");
        $__internal_4f4a95a3973b00f079bac6376abf7fbb8d3e4b7ec5dc6cebe5651c3bff9eff08->enter($__internal_4f4a95a3973b00f079bac6376abf7fbb8d3e4b7ec5dc6cebe5651c3bff9eff08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    Ajouter une Recette  
";
        
        $__internal_4f4a95a3973b00f079bac6376abf7fbb8d3e4b7ec5dc6cebe5651c3bff9eff08->leave($__internal_4f4a95a3973b00f079bac6376abf7fbb8d3e4b7ec5dc6cebe5651c3bff9eff08_prof);

    }

    // line 7
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_18d9f106697a139d442387ee81c48a446dfe27e2f999bd4b3c9a1ec186d45b7d = $this->env->getExtension("native_profiler");
        $__internal_18d9f106697a139d442387ee81c48a446dfe27e2f999bd4b3c9a1ec186d45b7d->enter($__internal_18d9f106697a139d442387ee81c48a446dfe27e2f999bd4b3c9a1ec186d45b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        // line 8
        echo "    Ajouter vos nouvelles recettes !
";
        
        $__internal_18d9f106697a139d442387ee81c48a446dfe27e2f999bd4b3c9a1ec186d45b7d->leave($__internal_18d9f106697a139d442387ee81c48a446dfe27e2f999bd4b3c9a1ec186d45b7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2fc3e404cde4032b82816ed847b06a597b4653cf8a5faa99f62b172168a5bee = $this->env->getExtension("native_profiler");
        $__internal_f2fc3e404cde4032b82816ed847b06a597b4653cf8a5faa99f62b172168a5bee->enter($__internal_f2fc3e404cde4032b82816ed847b06a597b4653cf8a5faa99f62b172168a5bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class='container' >
        <div class='row' >

            <form>
                <div class=\"input-field col s6\">
                    <input placeholder=\"Description courte\" id=\"first_name\" type=\"text\" class=\"validate\" length=\"100\"/>
                </div>
                <div class=\"input-field col s12\">
                    <textarea id=\"description\" class=\"materialize-textarea\"></textarea>
                    <label for=\"description\">Description</label>
                </div>
            </form>
        </div>
        <div class='row' >
            <div class='col s6 offset-s3' >
                <a class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>
            </div>
        </div>
    </div>

";
        
        $__internal_f2fc3e404cde4032b82816ed847b06a597b4653cf8a5faa99f62b172168a5bee->leave($__internal_f2fc3e404cde4032b82816ed847b06a597b4653cf8a5faa99f62b172168a5bee_prof);

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
/*         <div class='row' >*/
/* */
/*             <form>*/
/*                 <div class="input-field col s6">*/
/*                     <input placeholder="Description courte" id="first_name" type="text" class="validate" length="100"/>*/
/*                 </div>*/
/*                 <div class="input-field col s12">*/
/*                     <textarea id="description" class="materialize-textarea"></textarea>*/
/*                     <label for="description">Description</label>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <div class='row' >*/
/*             <div class='col s6 offset-s3' >*/
/*                 <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
