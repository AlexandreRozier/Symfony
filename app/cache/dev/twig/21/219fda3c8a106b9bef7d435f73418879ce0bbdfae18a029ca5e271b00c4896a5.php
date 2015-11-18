<?php

/* ::layout.html.twig */
class __TwigTemplate_ab8b094be977441b899bc251ce8738d75582166a5342abc6474635cfacfa4406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb49c6d1ccbe7816f9c6a55ac4cd107b67355f82ed389ccf40c46ff75e0a3412 = $this->env->getExtension("native_profiler");
        $__internal_bb49c6d1ccbe7816f9c6a55ac4cd107b67355f82ed389ccf40c46ff75e0a3412->enter($__internal_bb49c6d1ccbe7816f9c6a55ac4cd107b67355f82ed389ccf40c46ff75e0a3412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" http-equiv=\"Content-Type; charset=utf-8\"/>

    <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body id=\"main_container\">
<div class=\"container\" >


    <div class=\"hero-unit\" id=\"header\">
        <h1>Web-o-matic</h1>
        <p>Création d'un bundle de Blog</p>
        <p>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("main_redirect");
        echo "\" class=\"btn btn-primary btn-large\">
                Mon People VIA
            </a>

        </p>
    </div>

    <div class=\"row\">
        <div class=\"span3\" id=\"menu\">
            ";
        // line 34
        $this->loadTemplate("::navbar.html.twig", "::layout.html.twig", 34)->display($context);
        // line 35
        echo "        </div>
        <div class=\"span9\" id=\"content\">
            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "        </div>
        <hr>
        <footer>
            <p>The sky is the limit</p>
        </footer>
    </div>
    ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "</body>
</html>
";
        
        $__internal_bb49c6d1ccbe7816f9c6a55ac4cd107b67355f82ed389ccf40c46ff75e0a3412->leave($__internal_bb49c6d1ccbe7816f9c6a55ac4cd107b67355f82ed389ccf40c46ff75e0a3412_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f212f759a6d4e5dd9110990d3953a1d29b329a827a4bebc1a708689e8216695 = $this->env->getExtension("native_profiler");
        $__internal_2f212f759a6d4e5dd9110990d3953a1d29b329a827a4bebc1a708689e8216695->enter($__internal_2f212f759a6d4e5dd9110990d3953a1d29b329a827a4bebc1a708689e8216695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "            Web - o - matic
        ";
        
        $__internal_2f212f759a6d4e5dd9110990d3953a1d29b329a827a4bebc1a708689e8216695->leave($__internal_2f212f759a6d4e5dd9110990d3953a1d29b329a827a4bebc1a708689e8216695_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83840fa457e3c1c533309f58ac97596e24ab55724987a20b8965e5317b77a451 = $this->env->getExtension("native_profiler");
        $__internal_83840fa457e3c1c533309f58ac97596e24ab55724987a20b8965e5317b77a451->enter($__internal_83840fa457e3c1c533309f58ac97596e24ab55724987a20b8965e5317b77a451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"  type=\"text/css\"/>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main_style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  type=\"text/css\"/>
    ";
        
        $__internal_83840fa457e3c1c533309f58ac97596e24ab55724987a20b8965e5317b77a451->leave($__internal_83840fa457e3c1c533309f58ac97596e24ab55724987a20b8965e5317b77a451_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_86bcc62dff0dcf2e2ca265682c01e86173899c78e225aa9ed90661d2a88ec20c = $this->env->getExtension("native_profiler");
        $__internal_86bcc62dff0dcf2e2ca265682c01e86173899c78e225aa9ed90661d2a88ec20c->enter($__internal_86bcc62dff0dcf2e2ca265682c01e86173899c78e225aa9ed90661d2a88ec20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "            ";
        
        $__internal_86bcc62dff0dcf2e2ca265682c01e86173899c78e225aa9ed90661d2a88ec20c->leave($__internal_86bcc62dff0dcf2e2ca265682c01e86173899c78e225aa9ed90661d2a88ec20c_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36f4ffcdfff38ecc8895507118930f2999e1610f09b8f88131979c481a7fac7d = $this->env->getExtension("native_profiler");
        $__internal_36f4ffcdfff38ecc8895507118930f2999e1610f09b8f88131979c481a7fac7d->enter($__internal_36f4ffcdfff38ecc8895507118930f2999e1610f09b8f88131979c481a7fac7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_36f4ffcdfff38ecc8895507118930f2999e1610f09b8f88131979c481a7fac7d->leave($__internal_36f4ffcdfff38ecc8895507118930f2999e1610f09b8f88131979c481a7fac7d_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  145 => 46,  139 => 45,  132 => 38,  126 => 37,  117 => 13,  112 => 12,  106 => 11,  98 => 8,  92 => 7,  83 => 49,  81 => 45,  73 => 39,  71 => 37,  67 => 35,  65 => 34,  53 => 25,  41 => 15,  39 => 11,  36 => 10,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html" http-equiv="Content-Type; charset=utf-8"/>*/
/* */
/*     <title>*/
/*         {% block title %}*/
/*             Web - o - matic*/
/*         {% endblock %}*/
/*     </title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"  type="text/css"/>*/
/*         <link href="{{ asset('css/main_style.css') }}" rel="stylesheet"  type="text/css"/>*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body id="main_container">*/
/* <div class="container" >*/
/* */
/* */
/*     <div class="hero-unit" id="header">*/
/*         <h1>Web-o-matic</h1>*/
/*         <p>Création d'un bundle de Blog</p>*/
/*         <p>*/
/*             <a href="{{ path('main_redirect')}}" class="btn btn-primary btn-large">*/
/*                 Mon People VIA*/
/*             </a>*/
/* */
/*         </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="span3" id="menu">*/
/*             {% include '::navbar.html.twig' %}*/
/*         </div>*/
/*         <div class="span9" id="content">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <hr>*/
/*         <footer>*/
/*             <p>The sky is the limit</p>*/
/*         </footer>*/
/*     </div>*/
/*     {% block javascripts %}*/
/*         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>*/
/*         <script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
