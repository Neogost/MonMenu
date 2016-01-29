<?php

/* DesmaymonMenuBundle:Category:add.html.twig */
class __TwigTemplate_4386e1315047cc66b960c5f2a586bfd42ac7d0c8b472ba1f80f0f440fe30d59c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        // line 4
        echo "    Add a Category  
";
    }

    // line 7
    public function block_wordingPage($context, array $blocks = array())
    {
        // line 8
        echo "    Add a new Category!
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <div class='container' >
        <div class='row' >
            <div class='col s3'>
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                <div class='row'>
                    <div class='input-field'>
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "wording", array()), 'row', array("attr" => array("length" => "30")));
        echo "
                    </div>
                </div>
                <div class='row'>
                    <div class='col s6 offset-s6'>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'row', array("attr" => array("class" => "btn waves-effect waves-light")));
        echo "
                        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
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
        return array (  105 => 40,  95 => 36,  92 => 35,  88 => 34,  76 => 25,  72 => 24,  64 => 19,  58 => 16,  54 => 15,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
