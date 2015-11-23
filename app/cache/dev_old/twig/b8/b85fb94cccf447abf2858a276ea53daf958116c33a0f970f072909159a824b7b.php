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
        $__internal_25876d9824215d8fc87f62b7d31381fa8b4e3a14d12a7138566d2b94f8890ec5 = $this->env->getExtension("native_profiler");
        $__internal_25876d9824215d8fc87f62b7d31381fa8b4e3a14d12a7138566d2b94f8890ec5->enter($__internal_25876d9824215d8fc87f62b7d31381fa8b4e3a14d12a7138566d2b94f8890ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle:Recipe:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25876d9824215d8fc87f62b7d31381fa8b4e3a14d12a7138566d2b94f8890ec5->leave($__internal_25876d9824215d8fc87f62b7d31381fa8b4e3a14d12a7138566d2b94f8890ec5_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_68e7f2a1f3e7ee3d4cb575999e0835ded837e5a052efc733fc269aaf661db560 = $this->env->getExtension("native_profiler");
        $__internal_68e7f2a1f3e7ee3d4cb575999e0835ded837e5a052efc733fc269aaf661db560->enter($__internal_68e7f2a1f3e7ee3d4cb575999e0835ded837e5a052efc733fc269aaf661db560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    Ajouter une Recette  
";
        
        $__internal_68e7f2a1f3e7ee3d4cb575999e0835ded837e5a052efc733fc269aaf661db560->leave($__internal_68e7f2a1f3e7ee3d4cb575999e0835ded837e5a052efc733fc269aaf661db560_prof);

    }

    // line 7
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_4b979291e8e52eb68c8b40271d201af3c832f2c54f7e81a4cbce01bfa8bba24b = $this->env->getExtension("native_profiler");
        $__internal_4b979291e8e52eb68c8b40271d201af3c832f2c54f7e81a4cbce01bfa8bba24b->enter($__internal_4b979291e8e52eb68c8b40271d201af3c832f2c54f7e81a4cbce01bfa8bba24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        // line 8
        echo "    Ajouter vos nouvelles recettes !
";
        
        $__internal_4b979291e8e52eb68c8b40271d201af3c832f2c54f7e81a4cbce01bfa8bba24b->leave($__internal_4b979291e8e52eb68c8b40271d201af3c832f2c54f7e81a4cbce01bfa8bba24b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ef8ea177a1efd0ab6945d37013edbbd75b8a8de14c29090f67b4255682c74fd = $this->env->getExtension("native_profiler");
        $__internal_5ef8ea177a1efd0ab6945d37013edbbd75b8a8de14c29090f67b4255682c74fd->enter($__internal_5ef8ea177a1efd0ab6945d37013edbbd75b8a8de14c29090f67b4255682c74fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ef8ea177a1efd0ab6945d37013edbbd75b8a8de14c29090f67b4255682c74fd->leave($__internal_5ef8ea177a1efd0ab6945d37013edbbd75b8a8de14c29090f67b4255682c74fd_prof);

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
