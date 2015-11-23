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
        $__internal_90e496bfc1907f3f2cc26d46d033d0e6339ca52cf2728bd5c3add7633c3f28c5 = $this->env->getExtension("native_profiler");
        $__internal_90e496bfc1907f3f2cc26d46d033d0e6339ca52cf2728bd5c3add7633c3f28c5->enter($__internal_90e496bfc1907f3f2cc26d46d033d0e6339ca52cf2728bd5c3add7633c3f28c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle:Recipe:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e496bfc1907f3f2cc26d46d033d0e6339ca52cf2728bd5c3add7633c3f28c5->leave($__internal_90e496bfc1907f3f2cc26d46d033d0e6339ca52cf2728bd5c3add7633c3f28c5_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_c77f18b7470ec3cc7c69a77b17b1951cdbaaa988ab57fd28d172eee069207e68 = $this->env->getExtension("native_profiler");
        $__internal_c77f18b7470ec3cc7c69a77b17b1951cdbaaa988ab57fd28d172eee069207e68->enter($__internal_c77f18b7470ec3cc7c69a77b17b1951cdbaaa988ab57fd28d172eee069207e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    Ajouter une Recette  
";
        
        $__internal_c77f18b7470ec3cc7c69a77b17b1951cdbaaa988ab57fd28d172eee069207e68->leave($__internal_c77f18b7470ec3cc7c69a77b17b1951cdbaaa988ab57fd28d172eee069207e68_prof);

    }

    // line 7
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_9012a508fef9ef1cd7995c07f401cbe504d0ea4c016d14005d61697c44d36ce5 = $this->env->getExtension("native_profiler");
        $__internal_9012a508fef9ef1cd7995c07f401cbe504d0ea4c016d14005d61697c44d36ce5->enter($__internal_9012a508fef9ef1cd7995c07f401cbe504d0ea4c016d14005d61697c44d36ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        // line 8
        echo "    Ajouter vos nouvelles recettes !
";
        
        $__internal_9012a508fef9ef1cd7995c07f401cbe504d0ea4c016d14005d61697c44d36ce5->leave($__internal_9012a508fef9ef1cd7995c07f401cbe504d0ea4c016d14005d61697c44d36ce5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb189f8533aa99a0dbc270d97badae095b94b4a29f363dc60b755dbad4bdbe19 = $this->env->getExtension("native_profiler");
        $__internal_fb189f8533aa99a0dbc270d97badae095b94b4a29f363dc60b755dbad4bdbe19->enter($__internal_fb189f8533aa99a0dbc270d97badae095b94b4a29f363dc60b755dbad4bdbe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb189f8533aa99a0dbc270d97badae095b94b4a29f363dc60b755dbad4bdbe19->leave($__internal_fb189f8533aa99a0dbc270d97badae095b94b4a29f363dc60b755dbad4bdbe19_prof);

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
/* */
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
