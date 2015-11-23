<?php

/* DesmaymonMenuBundle::footer.html.twig */
class __TwigTemplate_ab44e1451fd78e7d358f75703f63184813bc8ef29cb5161de8c352900053a90b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_253d3c6136cc7e789e07bbef0a4dc58c24799c0a2d138a6d7c15890c2f7f6a28 = $this->env->getExtension("native_profiler");
        $__internal_253d3c6136cc7e789e07bbef0a4dc58c24799c0a2d138a6d7c15890c2f7f6a28->enter($__internal_253d3c6136cc7e789e07bbef0a4dc58c24799c0a2d138a6d7c15890c2f7f6a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle::footer.html.twig"));

        // line 1
        echo "<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\"><a href='";
        // line 5
        echo $this->env->getExtension('routing')->getPath("mon_menu_homepage");
        echo "'>Mon Menu</a></h5> 
                <p class=\"grey-text text-lighten-4\">Vous pouvez me contacter à l'adresse suivante kevin.desmay@gmail.com</p>
            </div>
        </div>
    </div>

    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2016 Copyright Kevin Desmay
            <a class=\"grey-text text-lighten-4 right\" href=\"#!\">D'autre Lien</a>
        </div>
    </div>
</footer>";
        
        $__internal_253d3c6136cc7e789e07bbef0a4dc58c24799c0a2d138a6d7c15890c2f7f6a28->leave($__internal_253d3c6136cc7e789e07bbef0a4dc58c24799c0a2d138a6d7c15890c2f7f6a28_prof);

    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <footer class="page-footer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col l6 s12">*/
/*                 <h5 class="white-text"><a href='{{ path('mon_menu_homepage') }}'>Mon Menu</a></h5> */
/*                 <p class="grey-text text-lighten-4">Vous pouvez me contacter à l'adresse suivante kevin.desmay@gmail.com</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="footer-copyright">*/
/*         <div class="container">*/
/*             © 2016 Copyright Kevin Desmay*/
/*             <a class="grey-text text-lighten-4 right" href="#!">D'autre Lien</a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
