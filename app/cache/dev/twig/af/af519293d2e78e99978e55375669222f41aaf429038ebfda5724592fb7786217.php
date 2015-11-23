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
        $__internal_b4423ee68ac7e58211a6c714914a98f38d372bf7b9823f61f29e4c6604b7fdaa = $this->env->getExtension("native_profiler");
        $__internal_b4423ee68ac7e58211a6c714914a98f38d372bf7b9823f61f29e4c6604b7fdaa->enter($__internal_b4423ee68ac7e58211a6c714914a98f38d372bf7b9823f61f29e4c6604b7fdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b4423ee68ac7e58211a6c714914a98f38d372bf7b9823f61f29e4c6604b7fdaa->leave($__internal_b4423ee68ac7e58211a6c714914a98f38d372bf7b9823f61f29e4c6604b7fdaa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab7615c6b9b39960822f9b4e48493e761cf4f47d434f2df9175f6a7bcdd2d45e = $this->env->getExtension("native_profiler");
        $__internal_ab7615c6b9b39960822f9b4e48493e761cf4f47d434f2df9175f6a7bcdd2d45e->enter($__internal_ab7615c6b9b39960822f9b4e48493e761cf4f47d434f2df9175f6a7bcdd2d45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Menu";
        
        $__internal_ab7615c6b9b39960822f9b4e48493e761cf4f47d434f2df9175f6a7bcdd2d45e->leave($__internal_ab7615c6b9b39960822f9b4e48493e761cf4f47d434f2df9175f6a7bcdd2d45e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f510835b2b8cfc84c985a6afdaf8408620a3cc98bb8be49b920d304692b0b6a = $this->env->getExtension("native_profiler");
        $__internal_4f510835b2b8cfc84c985a6afdaf8408620a3cc98bb8be49b920d304692b0b6a->enter($__internal_4f510835b2b8cfc84c985a6afdaf8408620a3cc98bb8be49b920d304692b0b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f510835b2b8cfc84c985a6afdaf8408620a3cc98bb8be49b920d304692b0b6a->leave($__internal_4f510835b2b8cfc84c985a6afdaf8408620a3cc98bb8be49b920d304692b0b6a_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_03ce600183e6b536af21c19f47da0996ff7950004eff96ebd75f3b44343e0635 = $this->env->getExtension("native_profiler");
        $__internal_03ce600183e6b536af21c19f47da0996ff7950004eff96ebd75f3b44343e0635->enter($__internal_03ce600183e6b536af21c19f47da0996ff7950004eff96ebd75f3b44343e0635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_03ce600183e6b536af21c19f47da0996ff7950004eff96ebd75f3b44343e0635->leave($__internal_03ce600183e6b536af21c19f47da0996ff7950004eff96ebd75f3b44343e0635_prof);

    }

    // line 27
    public function block_nav($context, array $blocks = array())
    {
        $__internal_56387c597aa85b302b96ec4c3359af3bedfd78b5c3b3eaeb6029391d75307a66 = $this->env->getExtension("native_profiler");
        $__internal_56387c597aa85b302b96ec4c3359af3bedfd78b5c3b3eaeb6029391d75307a66->enter($__internal_56387c597aa85b302b96ec4c3359af3bedfd78b5c3b3eaeb6029391d75307a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_56387c597aa85b302b96ec4c3359af3bedfd78b5c3b3eaeb6029391d75307a66->leave($__internal_56387c597aa85b302b96ec4c3359af3bedfd78b5c3b3eaeb6029391d75307a66_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f823a277948a9d655af5b87e126289986f7a6a358faefa990800f7ad418465a = $this->env->getExtension("native_profiler");
        $__internal_0f823a277948a9d655af5b87e126289986f7a6a358faefa990800f7ad418465a->enter($__internal_0f823a277948a9d655af5b87e126289986f7a6a358faefa990800f7ad418465a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f823a277948a9d655af5b87e126289986f7a6a358faefa990800f7ad418465a->leave($__internal_0f823a277948a9d655af5b87e126289986f7a6a358faefa990800f7ad418465a_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9f1edc48f3aa4feffef99c1986b2cc4ad68629b061780ab02e8bec6dd4c0842b = $this->env->getExtension("native_profiler");
        $__internal_9f1edc48f3aa4feffef99c1986b2cc4ad68629b061780ab02e8bec6dd4c0842b->enter($__internal_9f1edc48f3aa4feffef99c1986b2cc4ad68629b061780ab02e8bec6dd4c0842b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_9f1edc48f3aa4feffef99c1986b2cc4ad68629b061780ab02e8bec6dd4c0842b->leave($__internal_9f1edc48f3aa4feffef99c1986b2cc4ad68629b061780ab02e8bec6dd4c0842b_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7aded88671fb683c28ad75c949f1bde6141b9595b5c499c826f1cec3dee1ab4d = $this->env->getExtension("native_profiler");
        $__internal_7aded88671fb683c28ad75c949f1bde6141b9595b5c499c826f1cec3dee1ab4d->enter($__internal_7aded88671fb683c28ad75c949f1bde6141b9595b5c499c826f1cec3dee1ab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7aded88671fb683c28ad75c949f1bde6141b9595b5c499c826f1cec3dee1ab4d->leave($__internal_7aded88671fb683c28ad75c949f1bde6141b9595b5c499c826f1cec3dee1ab4d_prof);

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
