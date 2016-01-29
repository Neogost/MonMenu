<?php

/* DesmaymonMenuBundle::footer.html.twig */
class __TwigTemplate_e11b6ca472ad5dbcb5e568b989abe73faa464578c1db9c38c1b336f38236cdb3 extends Twig_Template
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
        return array (  25 => 5,  19 => 1,);
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
