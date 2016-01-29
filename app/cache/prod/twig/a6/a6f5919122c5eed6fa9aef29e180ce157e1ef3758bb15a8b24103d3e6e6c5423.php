<?php

/* ::base.html.twig */
class __TwigTemplate_94f61d99e7f13e7ba0ef6af0efbfcdabfb79ee43804de392811d83eca7f65292 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css\">

    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>
</head>
<body>

";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 27
        $this->displayBlock('nav', $context, $blocks);
        echo "  

";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Mon Menu";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 27
    public function block_nav($context, array $blocks = array())
    {
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  119 => 33,  113 => 31,  108 => 29,  103 => 27,  97 => 26,  92 => 6,  86 => 5,  80 => 34,  78 => 33,  75 => 32,  73 => 31,  70 => 30,  68 => 29,  63 => 27,  61 => 26,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">*/
/* */
/*     <!--Import jQuery before materialize.js-->*/
/*     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*     */
/*     <!-- Compiled and minified JavaScript -->*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>*/
/*     <script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>*/
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
