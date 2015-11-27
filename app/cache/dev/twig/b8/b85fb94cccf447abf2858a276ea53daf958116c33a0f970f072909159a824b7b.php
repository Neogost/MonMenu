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
        $__internal_450bf30bec5994bab4ed79836f62c38bfb7457e314765907d0eafec27bbfec66 = $this->env->getExtension("native_profiler");
        $__internal_450bf30bec5994bab4ed79836f62c38bfb7457e314765907d0eafec27bbfec66->enter($__internal_450bf30bec5994bab4ed79836f62c38bfb7457e314765907d0eafec27bbfec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle:Recipe:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_450bf30bec5994bab4ed79836f62c38bfb7457e314765907d0eafec27bbfec66->leave($__internal_450bf30bec5994bab4ed79836f62c38bfb7457e314765907d0eafec27bbfec66_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_2100dd2e3ba1a4376132ab65cd7265c2009e92c9f69c15ff77fa686bc09b52eb = $this->env->getExtension("native_profiler");
        $__internal_2100dd2e3ba1a4376132ab65cd7265c2009e92c9f69c15ff77fa686bc09b52eb->enter($__internal_2100dd2e3ba1a4376132ab65cd7265c2009e92c9f69c15ff77fa686bc09b52eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    Ajouter une Recette  
";
        
        $__internal_2100dd2e3ba1a4376132ab65cd7265c2009e92c9f69c15ff77fa686bc09b52eb->leave($__internal_2100dd2e3ba1a4376132ab65cd7265c2009e92c9f69c15ff77fa686bc09b52eb_prof);

    }

    // line 7
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_c4c1f0a1ae5eed4cdaf3ba678c5d4772dec4b5aa09a8d490e572c23cfc1140a5 = $this->env->getExtension("native_profiler");
        $__internal_c4c1f0a1ae5eed4cdaf3ba678c5d4772dec4b5aa09a8d490e572c23cfc1140a5->enter($__internal_c4c1f0a1ae5eed4cdaf3ba678c5d4772dec4b5aa09a8d490e572c23cfc1140a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        // line 8
        echo "    Ajouter vos nouvelles recettes !
";
        
        $__internal_c4c1f0a1ae5eed4cdaf3ba678c5d4772dec4b5aa09a8d490e572c23cfc1140a5->leave($__internal_c4c1f0a1ae5eed4cdaf3ba678c5d4772dec4b5aa09a8d490e572c23cfc1140a5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e3867a4e48e8a9653e250b61208ca166f7c437f9842165acefb235907335285 = $this->env->getExtension("native_profiler");
        $__internal_2e3867a4e48e8a9653e250b61208ca166f7c437f9842165acefb235907335285->enter($__internal_2e3867a4e48e8a9653e250b61208ca166f7c437f9842165acefb235907335285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e3867a4e48e8a9653e250b61208ca166f7c437f9842165acefb235907335285->leave($__internal_2e3867a4e48e8a9653e250b61208ca166f7c437f9842165acefb235907335285_prof);

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
