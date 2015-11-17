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
        $__internal_7c01ef3c387c7ac16e1050be69be3ee1f151b902cc824c6e64bbba471579bfd0 = $this->env->getExtension("native_profiler");
        $__internal_7c01ef3c387c7ac16e1050be69be3ee1f151b902cc824c6e64bbba471579bfd0->enter($__internal_7c01ef3c387c7ac16e1050be69be3ee1f151b902cc824c6e64bbba471579bfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" http-equiv=\"Content-Type; charset=utf-8\"/>

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>

  <body id=\"main_container\">
    <div class=\"container\" >


      <div class=\"hero-unit\" id=\"header\">
        <h1>Web-o-matic</h1>
        <p>Création d'un bundle de Blog</p>
        <p>
          <a class=\"btn btn-primary btn-large\">
            Lire le tutoriel
          </a>
        </p>
      </div>

      <div class=\"row\">
        <div class=\"span3\" id=\"menu\">
        ";
        // line 29
        $this->loadTemplate("::navbar.html.twig", "::layout.html.twig", 29)->display($context);
        // line 30
        echo "        </div>
          <div class=\"span9\" id=\"content\">
              ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "          </div>
        <hr>
        <footer>
          <p>The sky is the limit</p>
        </footer>
      </div>
      ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
  </html>
";
        
        $__internal_7c01ef3c387c7ac16e1050be69be3ee1f151b902cc824c6e64bbba471579bfd0->leave($__internal_7c01ef3c387c7ac16e1050be69be3ee1f151b902cc824c6e64bbba471579bfd0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3eff02b5aa2895d5597acd044b1f892add726b240f4b4d3555a03f526bdce78 = $this->env->getExtension("native_profiler");
        $__internal_e3eff02b5aa2895d5597acd044b1f892add726b240f4b4d3555a03f526bdce78->enter($__internal_e3eff02b5aa2895d5597acd044b1f892add726b240f4b4d3555a03f526bdce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e3eff02b5aa2895d5597acd044b1f892add726b240f4b4d3555a03f526bdce78->leave($__internal_e3eff02b5aa2895d5597acd044b1f892add726b240f4b4d3555a03f526bdce78_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_555b543996cf498019b49f4c30218bef760ddb0499e69f5bef6c4b5f3d276fab = $this->env->getExtension("native_profiler");
        $__internal_555b543996cf498019b49f4c30218bef760ddb0499e69f5bef6c4b5f3d276fab->enter($__internal_555b543996cf498019b49f4c30218bef760ddb0499e69f5bef6c4b5f3d276fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"  type=\"text/css\"/>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main_style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  type=\"text/css\"/>
    ";
        
        $__internal_555b543996cf498019b49f4c30218bef760ddb0499e69f5bef6c4b5f3d276fab->leave($__internal_555b543996cf498019b49f4c30218bef760ddb0499e69f5bef6c4b5f3d276fab_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4e48cc3f3d2fc1ea51ef72faebe6ca2c5742512c82ec6e7e05a96617c06ee8e = $this->env->getExtension("native_profiler");
        $__internal_e4e48cc3f3d2fc1ea51ef72faebe6ca2c5742512c82ec6e7e05a96617c06ee8e->enter($__internal_e4e48cc3f3d2fc1ea51ef72faebe6ca2c5742512c82ec6e7e05a96617c06ee8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "              ";
        
        $__internal_e4e48cc3f3d2fc1ea51ef72faebe6ca2c5742512c82ec6e7e05a96617c06ee8e->leave($__internal_e4e48cc3f3d2fc1ea51ef72faebe6ca2c5742512c82ec6e7e05a96617c06ee8e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1c953fbd80d823e534acb9a776bf83bbc8df249531383e7bf153b4bfc4942c7 = $this->env->getExtension("native_profiler");
        $__internal_c1c953fbd80d823e534acb9a776bf83bbc8df249531383e7bf153b4bfc4942c7->enter($__internal_c1c953fbd80d823e534acb9a776bf83bbc8df249531383e7bf153b4bfc4942c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
      <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      ";
        
        $__internal_c1c953fbd80d823e534acb9a776bf83bbc8df249531383e7bf153b4bfc4942c7->leave($__internal_c1c953fbd80d823e534acb9a776bf83bbc8df249531383e7bf153b4bfc4942c7_prof);

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
        return array (  139 => 42,  136 => 41,  130 => 40,  123 => 33,  117 => 32,  108 => 9,  103 => 8,  97 => 7,  86 => 6,  77 => 44,  75 => 40,  67 => 34,  65 => 32,  61 => 30,  59 => 29,  39 => 11,  37 => 7,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta http-equiv="Content-Type" content="text/html" http-equiv="Content-Type; charset=utf-8"/>*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"  type="text/css"/>*/
/*         <link href="{{ asset('css/main_style.css') }}" rel="stylesheet"  type="text/css"/>*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body id="main_container">*/
/*     <div class="container" >*/
/* */
/* */
/*       <div class="hero-unit" id="header">*/
/*         <h1>Web-o-matic</h1>*/
/*         <p>Création d'un bundle de Blog</p>*/
/*         <p>*/
/*           <a class="btn btn-primary btn-large">*/
/*             Lire le tutoriel*/
/*           </a>*/
/*         </p>*/
/*       </div>*/
/* */
/*       <div class="row">*/
/*         <div class="span3" id="menu">*/
/*         {% include '::navbar.html.twig' %}*/
/*         </div>*/
/*           <div class="span9" id="content">*/
/*               {% block body %}*/
/*               {% endblock %}*/
/*           </div>*/
/*         <hr>*/
/*         <footer>*/
/*           <p>The sky is the limit</p>*/
/*         </footer>*/
/*       </div>*/
/*       {% block javascripts %}*/
/*       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>*/
/*       <script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>*/
/*       {% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
