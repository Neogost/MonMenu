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
        $__internal_2f75509ab819b1239b90333883b0a54046ecc6eb87724be72d35dc40dabb52d2 = $this->env->getExtension("native_profiler");
        $__internal_2f75509ab819b1239b90333883b0a54046ecc6eb87724be72d35dc40dabb52d2->enter($__internal_2f75509ab819b1239b90333883b0a54046ecc6eb87724be72d35dc40dabb52d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2f75509ab819b1239b90333883b0a54046ecc6eb87724be72d35dc40dabb52d2->leave($__internal_2f75509ab819b1239b90333883b0a54046ecc6eb87724be72d35dc40dabb52d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_797c9b3597709ec47df52dda3eaf1870ae8ffb4d70ebee4bf2ed3335f806b978 = $this->env->getExtension("native_profiler");
        $__internal_797c9b3597709ec47df52dda3eaf1870ae8ffb4d70ebee4bf2ed3335f806b978->enter($__internal_797c9b3597709ec47df52dda3eaf1870ae8ffb4d70ebee4bf2ed3335f806b978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Menu";
        
        $__internal_797c9b3597709ec47df52dda3eaf1870ae8ffb4d70ebee4bf2ed3335f806b978->leave($__internal_797c9b3597709ec47df52dda3eaf1870ae8ffb4d70ebee4bf2ed3335f806b978_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_629c0616d8a7da894780a18deb4133a88bb48e28ac81f9e80e1941d9745dc08b = $this->env->getExtension("native_profiler");
        $__internal_629c0616d8a7da894780a18deb4133a88bb48e28ac81f9e80e1941d9745dc08b->enter($__internal_629c0616d8a7da894780a18deb4133a88bb48e28ac81f9e80e1941d9745dc08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_629c0616d8a7da894780a18deb4133a88bb48e28ac81f9e80e1941d9745dc08b->leave($__internal_629c0616d8a7da894780a18deb4133a88bb48e28ac81f9e80e1941d9745dc08b_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_add3b761c5fa5f86ce2918300d4700a29783f8577c88afa2da37bc5de44225bb = $this->env->getExtension("native_profiler");
        $__internal_add3b761c5fa5f86ce2918300d4700a29783f8577c88afa2da37bc5de44225bb->enter($__internal_add3b761c5fa5f86ce2918300d4700a29783f8577c88afa2da37bc5de44225bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_add3b761c5fa5f86ce2918300d4700a29783f8577c88afa2da37bc5de44225bb->leave($__internal_add3b761c5fa5f86ce2918300d4700a29783f8577c88afa2da37bc5de44225bb_prof);

    }

    // line 24
    public function block_nav($context, array $blocks = array())
    {
        $__internal_31eed332746ce3693d0a1159fda51029b574e100d18983f180cf144f22b90c8f = $this->env->getExtension("native_profiler");
        $__internal_31eed332746ce3693d0a1159fda51029b574e100d18983f180cf144f22b90c8f->enter($__internal_31eed332746ce3693d0a1159fda51029b574e100d18983f180cf144f22b90c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_31eed332746ce3693d0a1159fda51029b574e100d18983f180cf144f22b90c8f->leave($__internal_31eed332746ce3693d0a1159fda51029b574e100d18983f180cf144f22b90c8f_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9f1ca3abe2e0003725c86c69fdc0fd2612ede521d9b2cf29b446e13eb59efd6 = $this->env->getExtension("native_profiler");
        $__internal_c9f1ca3abe2e0003725c86c69fdc0fd2612ede521d9b2cf29b446e13eb59efd6->enter($__internal_c9f1ca3abe2e0003725c86c69fdc0fd2612ede521d9b2cf29b446e13eb59efd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9f1ca3abe2e0003725c86c69fdc0fd2612ede521d9b2cf29b446e13eb59efd6->leave($__internal_c9f1ca3abe2e0003725c86c69fdc0fd2612ede521d9b2cf29b446e13eb59efd6_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f168215ac6c1fce6297586c875efc51acd426cb75373c28517b71aab231de313 = $this->env->getExtension("native_profiler");
        $__internal_f168215ac6c1fce6297586c875efc51acd426cb75373c28517b71aab231de313->enter($__internal_f168215ac6c1fce6297586c875efc51acd426cb75373c28517b71aab231de313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_f168215ac6c1fce6297586c875efc51acd426cb75373c28517b71aab231de313->leave($__internal_f168215ac6c1fce6297586c875efc51acd426cb75373c28517b71aab231de313_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c904b677d4dc8938b8d520d08dbda173b49d54e2b34559d3eb6140209cacfa9 = $this->env->getExtension("native_profiler");
        $__internal_8c904b677d4dc8938b8d520d08dbda173b49d54e2b34559d3eb6140209cacfa9->enter($__internal_8c904b677d4dc8938b8d520d08dbda173b49d54e2b34559d3eb6140209cacfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c904b677d4dc8938b8d520d08dbda173b49d54e2b34559d3eb6140209cacfa9->leave($__internal_8c904b677d4dc8938b8d520d08dbda173b49d54e2b34559d3eb6140209cacfa9_prof);

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
