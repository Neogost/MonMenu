<?php

/* DesmaymonMenuBundle:Category:add.html.twig */
class __TwigTemplate_162d66970960e697cea278558fd9f5f5bbe488110f7258b43cbd624368e3ecfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DesmaymonMenuBundle::Layout.html.twig", "DesmaymonMenuBundle:Category:add.html.twig", 1);
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
        $__internal_ae33fcfbd737a5425fe988544c4933c0b360b5164c0a9e41d23a3d36fcd5ce97 = $this->env->getExtension("native_profiler");
        $__internal_ae33fcfbd737a5425fe988544c4933c0b360b5164c0a9e41d23a3d36fcd5ce97->enter($__internal_ae33fcfbd737a5425fe988544c4933c0b360b5164c0a9e41d23a3d36fcd5ce97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DesmaymonMenuBundle:Category:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae33fcfbd737a5425fe988544c4933c0b360b5164c0a9e41d23a3d36fcd5ce97->leave($__internal_ae33fcfbd737a5425fe988544c4933c0b360b5164c0a9e41d23a3d36fcd5ce97_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_a6dd67dc43f73241e4aa416294d739932053b659bcdef3a5f7beb68e4f771251 = $this->env->getExtension("native_profiler");
        $__internal_a6dd67dc43f73241e4aa416294d739932053b659bcdef3a5f7beb68e4f771251->enter($__internal_a6dd67dc43f73241e4aa416294d739932053b659bcdef3a5f7beb68e4f771251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    Add a Category  
";
        
        $__internal_a6dd67dc43f73241e4aa416294d739932053b659bcdef3a5f7beb68e4f771251->leave($__internal_a6dd67dc43f73241e4aa416294d739932053b659bcdef3a5f7beb68e4f771251_prof);

    }

    // line 7
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_02ac78e7214165d925d0e5dc648b761075aebaf07081b6699220aca314d34848 = $this->env->getExtension("native_profiler");
        $__internal_02ac78e7214165d925d0e5dc648b761075aebaf07081b6699220aca314d34848->enter($__internal_02ac78e7214165d925d0e5dc648b761075aebaf07081b6699220aca314d34848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        // line 8
        echo "    Add a new Category!
";
        
        $__internal_02ac78e7214165d925d0e5dc648b761075aebaf07081b6699220aca314d34848->leave($__internal_02ac78e7214165d925d0e5dc648b761075aebaf07081b6699220aca314d34848_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_05b6f122928db3c0f028c10752e0dacb5d0176f9091f93902a3ecc6f0c2a25bb = $this->env->getExtension("native_profiler");
        $__internal_05b6f122928db3c0f028c10752e0dacb5d0176f9091f93902a3ecc6f0c2a25bb->enter($__internal_05b6f122928db3c0f028c10752e0dacb5d0176f9091f93902a3ecc6f0c2a25bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class='container' >
        <div class='row' >
            <div class='col s3'>
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class='row'>
                    <div class='input-field'>
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wording", array()), 'row', array("attr" => array("length" => "30")));
        echo "
                    </div>
                </div>
                <div class='row'>
                    <div class='col s6 offset-s6'>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn waves-effect waves-light")));
        echo "
                        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <div class='col s6 offset-s3'>
                <h4>
                    Category List :
                </h4>

                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 35
            echo "                <div class=\"chip\">
                    ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "wording", array()), "html", null, true);
            echo "
                    <i class=\"material-icons\">close</i>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "

            </div>
        </div>
    </div>
</div>
";
        
        $__internal_05b6f122928db3c0f028c10752e0dacb5d0176f9091f93902a3ecc6f0c2a25bb->leave($__internal_05b6f122928db3c0f028c10752e0dacb5d0176f9091f93902a3ecc6f0c2a25bb_prof);

    }

    public function getTemplateName()
    {
        return "DesmaymonMenuBundle:Category:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  116 => 36,  113 => 35,  109 => 34,  97 => 25,  93 => 24,  85 => 19,  79 => 16,  75 => 15,  70 => 12,  64 => 11,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'DesmaymonMenuBundle::Layout.html.twig' %}*/
/* */
/* {% block titlePage %}*/
/*     Add a Category  */
/* {% endblock %}*/
/* */
/* {% block wordingPage %}*/
/*     Add a new Category!*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class='container' >*/
/*         <div class='row' >*/
/*             <div class='col s3'>*/
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 <div class='row'>*/
/*                     <div class='input-field'>*/
/*                         {{ form_row(form.wording, {'attr': {'length': '30'}}) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class='row'>*/
/*                     <div class='col s6 offset-s6'>*/
/*                         {{ form_row(form.submit, {'attr': {'class': 'btn waves-effect waves-light'}}) }}*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class='col s6 offset-s3'>*/
/*                 <h4>*/
/*                     Category List :*/
/*                 </h4>*/
/* */
/*                 {% for category in categories %}*/
/*                 <div class="chip">*/
/*                     {{ category.wording }}*/
/*                     <i class="material-icons">close</i>*/
/*                 </div>*/
/*                 {% endfor %}*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
