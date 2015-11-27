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
        $__internal_1f0127e10f34b8d992c949bafa644b989522298fb8fb1aad5ab89d474983cc6e = $this->env->getExtension("native_profiler");
        $__internal_1f0127e10f34b8d992c949bafa644b989522298fb8fb1aad5ab89d474983cc6e->enter($__internal_1f0127e10f34b8d992c949bafa644b989522298fb8fb1aad5ab89d474983cc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1f0127e10f34b8d992c949bafa644b989522298fb8fb1aad5ab89d474983cc6e->leave($__internal_1f0127e10f34b8d992c949bafa644b989522298fb8fb1aad5ab89d474983cc6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0e1725918764fa2dddaa6c626edabe4ffb19eed2b4e10e4868cf3a0eb16e7ff = $this->env->getExtension("native_profiler");
        $__internal_b0e1725918764fa2dddaa6c626edabe4ffb19eed2b4e10e4868cf3a0eb16e7ff->enter($__internal_b0e1725918764fa2dddaa6c626edabe4ffb19eed2b4e10e4868cf3a0eb16e7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Menu";
        
        $__internal_b0e1725918764fa2dddaa6c626edabe4ffb19eed2b4e10e4868cf3a0eb16e7ff->leave($__internal_b0e1725918764fa2dddaa6c626edabe4ffb19eed2b4e10e4868cf3a0eb16e7ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1054b16648afc19e906fe01c2ea0fec8266f2142890faaa09178206fdc8b4a19 = $this->env->getExtension("native_profiler");
        $__internal_1054b16648afc19e906fe01c2ea0fec8266f2142890faaa09178206fdc8b4a19->enter($__internal_1054b16648afc19e906fe01c2ea0fec8266f2142890faaa09178206fdc8b4a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1054b16648afc19e906fe01c2ea0fec8266f2142890faaa09178206fdc8b4a19->leave($__internal_1054b16648afc19e906fe01c2ea0fec8266f2142890faaa09178206fdc8b4a19_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_1e3648c8f0d3544423b956021f83d015e0b9f526e41bdc7a6d288e19f573eb17 = $this->env->getExtension("native_profiler");
        $__internal_1e3648c8f0d3544423b956021f83d015e0b9f526e41bdc7a6d288e19f573eb17->enter($__internal_1e3648c8f0d3544423b956021f83d015e0b9f526e41bdc7a6d288e19f573eb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_1e3648c8f0d3544423b956021f83d015e0b9f526e41bdc7a6d288e19f573eb17->leave($__internal_1e3648c8f0d3544423b956021f83d015e0b9f526e41bdc7a6d288e19f573eb17_prof);

    }

    // line 27
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c2986c199f4daaf2936851df0f545d2ffba6197f16aeb2047507d596b486fa35 = $this->env->getExtension("native_profiler");
        $__internal_c2986c199f4daaf2936851df0f545d2ffba6197f16aeb2047507d596b486fa35->enter($__internal_c2986c199f4daaf2936851df0f545d2ffba6197f16aeb2047507d596b486fa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_c2986c199f4daaf2936851df0f545d2ffba6197f16aeb2047507d596b486fa35->leave($__internal_c2986c199f4daaf2936851df0f545d2ffba6197f16aeb2047507d596b486fa35_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_545a33f8bcb241b30b88f45a4d99ca72bc1dc29367e751e567006df72ca476be = $this->env->getExtension("native_profiler");
        $__internal_545a33f8bcb241b30b88f45a4d99ca72bc1dc29367e751e567006df72ca476be->enter($__internal_545a33f8bcb241b30b88f45a4d99ca72bc1dc29367e751e567006df72ca476be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_545a33f8bcb241b30b88f45a4d99ca72bc1dc29367e751e567006df72ca476be->leave($__internal_545a33f8bcb241b30b88f45a4d99ca72bc1dc29367e751e567006df72ca476be_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4f0ceb7ba244402e98ce8e53696b16cbbfaaf872ece47bc9f240de7a89430f64 = $this->env->getExtension("native_profiler");
        $__internal_4f0ceb7ba244402e98ce8e53696b16cbbfaaf872ece47bc9f240de7a89430f64->enter($__internal_4f0ceb7ba244402e98ce8e53696b16cbbfaaf872ece47bc9f240de7a89430f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_4f0ceb7ba244402e98ce8e53696b16cbbfaaf872ece47bc9f240de7a89430f64->leave($__internal_4f0ceb7ba244402e98ce8e53696b16cbbfaaf872ece47bc9f240de7a89430f64_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95ea8e2eabf28fab2ab47d79b7e8b6035be89bd6859a3a39e31d31be2f60cf35 = $this->env->getExtension("native_profiler");
        $__internal_95ea8e2eabf28fab2ab47d79b7e8b6035be89bd6859a3a39e31d31be2f60cf35->enter($__internal_95ea8e2eabf28fab2ab47d79b7e8b6035be89bd6859a3a39e31d31be2f60cf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_95ea8e2eabf28fab2ab47d79b7e8b6035be89bd6859a3a39e31d31be2f60cf35->leave($__internal_95ea8e2eabf28fab2ab47d79b7e8b6035be89bd6859a3a39e31d31be2f60cf35_prof);

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
        return array (  161 => 33,  149 => 31,  138 => 29,  127 => 27,  115 => 26,  104 => 6,  92 => 5,  83 => 34,  81 => 33,  78 => 32,  76 => 31,  73 => 30,  71 => 29,  66 => 27,  64 => 26,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
