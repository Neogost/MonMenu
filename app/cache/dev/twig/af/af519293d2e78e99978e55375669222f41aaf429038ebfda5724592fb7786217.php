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
        $__internal_908b4101174fa4ab13d11e7b641c51b61ee8ce12eff89c2d7bf067007e0e2b5d = $this->env->getExtension("native_profiler");
        $__internal_908b4101174fa4ab13d11e7b641c51b61ee8ce12eff89c2d7bf067007e0e2b5d->enter($__internal_908b4101174fa4ab13d11e7b641c51b61ee8ce12eff89c2d7bf067007e0e2b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_908b4101174fa4ab13d11e7b641c51b61ee8ce12eff89c2d7bf067007e0e2b5d->leave($__internal_908b4101174fa4ab13d11e7b641c51b61ee8ce12eff89c2d7bf067007e0e2b5d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30a9ccde1e4e6663ef1e00d42f36fb978665c5319874f7b7a1d8f3702c6248a6 = $this->env->getExtension("native_profiler");
        $__internal_30a9ccde1e4e6663ef1e00d42f36fb978665c5319874f7b7a1d8f3702c6248a6->enter($__internal_30a9ccde1e4e6663ef1e00d42f36fb978665c5319874f7b7a1d8f3702c6248a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Menu";
        
        $__internal_30a9ccde1e4e6663ef1e00d42f36fb978665c5319874f7b7a1d8f3702c6248a6->leave($__internal_30a9ccde1e4e6663ef1e00d42f36fb978665c5319874f7b7a1d8f3702c6248a6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f93901e266a4efe9126600a0f9616ee259945b17b2791dfffa468e6e370fc7c5 = $this->env->getExtension("native_profiler");
        $__internal_f93901e266a4efe9126600a0f9616ee259945b17b2791dfffa468e6e370fc7c5->enter($__internal_f93901e266a4efe9126600a0f9616ee259945b17b2791dfffa468e6e370fc7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f93901e266a4efe9126600a0f9616ee259945b17b2791dfffa468e6e370fc7c5->leave($__internal_f93901e266a4efe9126600a0f9616ee259945b17b2791dfffa468e6e370fc7c5_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_64fb7b2630bd5eaab39a165b462a3bc5b098f176a1614e099910e40e6a3d12f0 = $this->env->getExtension("native_profiler");
        $__internal_64fb7b2630bd5eaab39a165b462a3bc5b098f176a1614e099910e40e6a3d12f0->enter($__internal_64fb7b2630bd5eaab39a165b462a3bc5b098f176a1614e099910e40e6a3d12f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_64fb7b2630bd5eaab39a165b462a3bc5b098f176a1614e099910e40e6a3d12f0->leave($__internal_64fb7b2630bd5eaab39a165b462a3bc5b098f176a1614e099910e40e6a3d12f0_prof);

    }

    // line 27
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6109e3f4bb15b319285ef029b30d3f5770d9021c9b6d036d804bf333f80f8239 = $this->env->getExtension("native_profiler");
        $__internal_6109e3f4bb15b319285ef029b30d3f5770d9021c9b6d036d804bf333f80f8239->enter($__internal_6109e3f4bb15b319285ef029b30d3f5770d9021c9b6d036d804bf333f80f8239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_6109e3f4bb15b319285ef029b30d3f5770d9021c9b6d036d804bf333f80f8239->leave($__internal_6109e3f4bb15b319285ef029b30d3f5770d9021c9b6d036d804bf333f80f8239_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_0542641ca343dd4eebd09c9eec81085f4607a085633ea10af78e97bc9668a315 = $this->env->getExtension("native_profiler");
        $__internal_0542641ca343dd4eebd09c9eec81085f4607a085633ea10af78e97bc9668a315->enter($__internal_0542641ca343dd4eebd09c9eec81085f4607a085633ea10af78e97bc9668a315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0542641ca343dd4eebd09c9eec81085f4607a085633ea10af78e97bc9668a315->leave($__internal_0542641ca343dd4eebd09c9eec81085f4607a085633ea10af78e97bc9668a315_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_13dccca407c5512c71977c8ccca55dd19143742aff7d9298740fafb3bb7ed488 = $this->env->getExtension("native_profiler");
        $__internal_13dccca407c5512c71977c8ccca55dd19143742aff7d9298740fafb3bb7ed488->enter($__internal_13dccca407c5512c71977c8ccca55dd19143742aff7d9298740fafb3bb7ed488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_13dccca407c5512c71977c8ccca55dd19143742aff7d9298740fafb3bb7ed488->leave($__internal_13dccca407c5512c71977c8ccca55dd19143742aff7d9298740fafb3bb7ed488_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77d982a8f01631435ac0320f8288411469b7ce575ca6ff24a6c4cd0166e03d5f = $this->env->getExtension("native_profiler");
        $__internal_77d982a8f01631435ac0320f8288411469b7ce575ca6ff24a6c4cd0166e03d5f->enter($__internal_77d982a8f01631435ac0320f8288411469b7ce575ca6ff24a6c4cd0166e03d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_77d982a8f01631435ac0320f8288411469b7ce575ca6ff24a6c4cd0166e03d5f->leave($__internal_77d982a8f01631435ac0320f8288411469b7ce575ca6ff24a6c4cd0166e03d5f_prof);

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
