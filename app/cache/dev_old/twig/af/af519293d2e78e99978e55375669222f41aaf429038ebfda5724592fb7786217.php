<?php

/* ::base.html.twig */
class __TwigTemplate_8971c79cc0e4d9fd2f876b540dbe26aaa8257580dc541fcbe2ca287ca274639f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c747e399217917516452a3675bd6982f70dfa07f5dbfbdfa041e2a0a765a955 = $this->env->getExtension("native_profiler");
        $__internal_8c747e399217917516452a3675bd6982f70dfa07f5dbfbdfa041e2a0a765a955->enter($__internal_8c747e399217917516452a3675bd6982f70dfa07f5dbfbdfa041e2a0a765a955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 

    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css\">

    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <!-- Compiled and minified JavaScript -->
    <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js\"></script> -->
</head>
<body>

";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        $this->displayBlock('nav', $context, $blocks);
        echo "  

";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "</body>
</html>
";
        
        $__internal_8c747e399217917516452a3675bd6982f70dfa07f5dbfbdfa041e2a0a765a955->leave($__internal_8c747e399217917516452a3675bd6982f70dfa07f5dbfbdfa041e2a0a765a955_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e736142cacce98cb775a7ae5be30522da19c4efdddd2d577549ef9c5f45b11e = $this->env->getExtension("native_profiler");
        $__internal_3e736142cacce98cb775a7ae5be30522da19c4efdddd2d577549ef9c5f45b11e->enter($__internal_3e736142cacce98cb775a7ae5be30522da19c4efdddd2d577549ef9c5f45b11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Menu";
        
        $__internal_3e736142cacce98cb775a7ae5be30522da19c4efdddd2d577549ef9c5f45b11e->leave($__internal_3e736142cacce98cb775a7ae5be30522da19c4efdddd2d577549ef9c5f45b11e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5849d074d6674b020eed7e771055b64eb3f396f3b25e29db4427eec8df7d52f5 = $this->env->getExtension("native_profiler");
        $__internal_5849d074d6674b020eed7e771055b64eb3f396f3b25e29db4427eec8df7d52f5->enter($__internal_5849d074d6674b020eed7e771055b64eb3f396f3b25e29db4427eec8df7d52f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5849d074d6674b020eed7e771055b64eb3f396f3b25e29db4427eec8df7d52f5->leave($__internal_5849d074d6674b020eed7e771055b64eb3f396f3b25e29db4427eec8df7d52f5_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_52dbe7b3172a133d52543d2ae52bb786538f6ae5e4abe5d591b20d4ac31a5bea = $this->env->getExtension("native_profiler");
        $__internal_52dbe7b3172a133d52543d2ae52bb786538f6ae5e4abe5d591b20d4ac31a5bea->enter($__internal_52dbe7b3172a133d52543d2ae52bb786538f6ae5e4abe5d591b20d4ac31a5bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_52dbe7b3172a133d52543d2ae52bb786538f6ae5e4abe5d591b20d4ac31a5bea->leave($__internal_52dbe7b3172a133d52543d2ae52bb786538f6ae5e4abe5d591b20d4ac31a5bea_prof);

    }

    // line 24
    public function block_nav($context, array $blocks = array())
    {
        $__internal_504ea1674f9e907da1287688d9841397832bba2e02dbaaf8448796ebf59a2a71 = $this->env->getExtension("native_profiler");
        $__internal_504ea1674f9e907da1287688d9841397832bba2e02dbaaf8448796ebf59a2a71->enter($__internal_504ea1674f9e907da1287688d9841397832bba2e02dbaaf8448796ebf59a2a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_504ea1674f9e907da1287688d9841397832bba2e02dbaaf8448796ebf59a2a71->leave($__internal_504ea1674f9e907da1287688d9841397832bba2e02dbaaf8448796ebf59a2a71_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ff747712737dbb0437ba90833d5b8c85e69a472e177118d39ac0774df5dc6e = $this->env->getExtension("native_profiler");
        $__internal_a8ff747712737dbb0437ba90833d5b8c85e69a472e177118d39ac0774df5dc6e->enter($__internal_a8ff747712737dbb0437ba90833d5b8c85e69a472e177118d39ac0774df5dc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8ff747712737dbb0437ba90833d5b8c85e69a472e177118d39ac0774df5dc6e->leave($__internal_a8ff747712737dbb0437ba90833d5b8c85e69a472e177118d39ac0774df5dc6e_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_04dde004db9939d0d670dd0d133297f206952e6ca6ba1a35b978a49bf19626a8 = $this->env->getExtension("native_profiler");
        $__internal_04dde004db9939d0d670dd0d133297f206952e6ca6ba1a35b978a49bf19626a8->enter($__internal_04dde004db9939d0d670dd0d133297f206952e6ca6ba1a35b978a49bf19626a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_04dde004db9939d0d670dd0d133297f206952e6ca6ba1a35b978a49bf19626a8->leave($__internal_04dde004db9939d0d670dd0d133297f206952e6ca6ba1a35b978a49bf19626a8_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a8848b1e0d6c1796d7357f706c614991700b764e8011067e7504f4815f57cd8 = $this->env->getExtension("native_profiler");
        $__internal_8a8848b1e0d6c1796d7357f706c614991700b764e8011067e7504f4815f57cd8->enter($__internal_8a8848b1e0d6c1796d7357f706c614991700b764e8011067e7504f4815f57cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8a8848b1e0d6c1796d7357f706c614991700b764e8011067e7504f4815f57cd8->leave($__internal_8a8848b1e0d6c1796d7357f706c614991700b764e8011067e7504f4815f57cd8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 30,  146 => 28,  135 => 26,  124 => 24,  112 => 23,  101 => 6,  89 => 5,  80 => 31,  78 => 30,  75 => 29,  73 => 28,  70 => 27,  68 => 26,  63 => 24,  61 => 23,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Mon Menu{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" /> */
/* */
/*     <!--Let browser know website is optimized for mobile-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     <!--Import Google Icon Font-->*/
/*     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*     <!-- Compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">*/
/* */
/*     <!--Import jQuery before materialize.js-->*/
/*     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*     <!-- Compiled and minified JavaScript -->*/
/*     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script> -->*/
/* </head>*/
/* <body>*/
/* */
/* {% block header %} {% endblock %}*/
/* {% block nav %}{% endblock %}  */
/* */
/* {% block body %}{% endblock %}*/
/* */
/* {% block footer %} {%endblock %}*/
/* */
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
