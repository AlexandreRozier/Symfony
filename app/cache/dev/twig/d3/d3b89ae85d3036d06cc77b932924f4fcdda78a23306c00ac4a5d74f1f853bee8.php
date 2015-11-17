<?php

/* TestBlogBundle:Blog:categorySearch.html.twig */
class __TwigTemplate_ba93c0e1d0f927bd9f960983447370b8a885a40b4e660b871ba889c4588cb739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBlogBundle::layout.html.twig", "TestBlogBundle:Blog:categorySearch.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2d6995f9b7551356c308e7715bd717b575afd50afa6297a134b6bf0913a57c6 = $this->env->getExtension("native_profiler");
        $__internal_c2d6995f9b7551356c308e7715bd717b575afd50afa6297a134b6bf0913a57c6->enter($__internal_c2d6995f9b7551356c308e7715bd717b575afd50afa6297a134b6bf0913a57c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:categorySearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d6995f9b7551356c308e7715bd717b575afd50afa6297a134b6bf0913a57c6->leave($__internal_c2d6995f9b7551356c308e7715bd717b575afd50afa6297a134b6bf0913a57c6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a94a6e7e78289a7acdf893242b927a9aeff62c44288e436af9b2720bd4781159 = $this->env->getExtension("native_profiler");
        $__internal_a94a6e7e78289a7acdf893242b927a9aeff62c44288e436af9b2720bd4781159->enter($__internal_a94a6e7e78289a7acdf893242b927a9aeff62c44288e436af9b2720bd4781159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h3> Formulaire d'article</h3>
<div class=\"well\">
    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("blog_categorySearch");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "




        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <br/>
        <input type=\"submit\" class=\"btn btn-primary\" />

    </form>
</div>
";
        
        $__internal_a94a6e7e78289a7acdf893242b927a9aeff62c44288e436af9b2720bd4781159->leave($__internal_a94a6e7e78289a7acdf893242b927a9aeff62c44288e436af9b2720bd4781159_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:categorySearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  50 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends'TestBlogBundle::layout.html.twig' %}*/
/* {% block body %}*/
/* <h3> Formulaire d'article</h3>*/
/* <div class="well">*/
/*     <form action="{{path('blog_categorySearch')}}" method="post" {{form_enctype(form)}}>*/
/*         {{form_errors(form)}}*/
/* */
/* */
/* */
/* */
/*         {{form_rest(form)}}*/
/*         <br/>*/
/*         <input type="submit" class="btn btn-primary" />*/
/* */
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
