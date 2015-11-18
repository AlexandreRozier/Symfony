<?php

/* TestMainBundle::layout.html.twig */
class __TwigTemplate_641abfd5dccda2334eda4f7c2c5d98fab06a9cc5930732c64c8b7c3fff510fa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TestMainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'testmain_body' => array($this, 'block_testmain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6c262394f3818b7b098c00d7f4261baf622ecb444a392e412bfc4e84adbae5f = $this->env->getExtension("native_profiler");
        $__internal_c6c262394f3818b7b098c00d7f4261baf622ecb444a392e412bfc4e84adbae5f->enter($__internal_c6c262394f3818b7b098c00d7f4261baf622ecb444a392e412bfc4e84adbae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c262394f3818b7b098c00d7f4261baf622ecb444a392e412bfc4e84adbae5f->leave($__internal_c6c262394f3818b7b098c00d7f4261baf622ecb444a392e412bfc4e84adbae5f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_01c744b286f5d77ab08e92e6922586407186b06797ca8881e68218fa90bb7501 = $this->env->getExtension("native_profiler");
        $__internal_01c744b286f5d77ab08e92e6922586407186b06797ca8881e68218fa90bb7501->enter($__internal_01c744b286f5d77ab08e92e6922586407186b06797ca8881e68218fa90bb7501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_01c744b286f5d77ab08e92e6922586407186b06797ca8881e68218fa90bb7501->leave($__internal_01c744b286f5d77ab08e92e6922586407186b06797ca8881e68218fa90bb7501_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7d7a7d045ebd5e708bb3d54d0418e87654140234dcc4e5d71b37ae7d5f2e0f1 = $this->env->getExtension("native_profiler");
        $__internal_c7d7a7d045ebd5e708bb3d54d0418e87654140234dcc4e5d71b37ae7d5f2e0f1->enter($__internal_c7d7a7d045ebd5e708bb3d54d0418e87654140234dcc4e5d71b37ae7d5f2e0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h1>Partie Principale</h1>
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"alert alert-info\">
      ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  <hr>
  ";
        // line 14
        $this->displayBlock('testmain_body', $context, $blocks);
        
        $__internal_c7d7a7d045ebd5e708bb3d54d0418e87654140234dcc4e5d71b37ae7d5f2e0f1->leave($__internal_c7d7a7d045ebd5e708bb3d54d0418e87654140234dcc4e5d71b37ae7d5f2e0f1_prof);

    }

    public function block_testmain_body($context, array $blocks = array())
    {
        $__internal_761f8be26a9c4ad758c1c9a21be182a5c8905874a0a8441d7858a731c0e1e728 = $this->env->getExtension("native_profiler");
        $__internal_761f8be26a9c4ad758c1c9a21be182a5c8905874a0a8441d7858a731c0e1e728->enter($__internal_761f8be26a9c4ad758c1c9a21be182a5c8905874a0a8441d7858a731c0e1e728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testmain_body"));

        // line 15
        echo "  ";
        
        $__internal_761f8be26a9c4ad758c1c9a21be182a5c8905874a0a8441d7858a731c0e1e728->leave($__internal_761f8be26a9c4ad758c1c9a21be182a5c8905874a0a8441d7858a731c0e1e728_prof);

    }

    public function getTemplateName()
    {
        return "TestMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  80 => 14,  77 => 13,  68 => 10,  65 => 9,  61 => 8,  57 => 6,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*   <h1>Partie Principale</h1>*/
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/*     <div class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </div>*/
/*   {% endfor %}*/
/*   <hr>*/
/*   {% block testmain_body %}*/
/*   {% endblock %}*/
/* {% endblock %}*/
/* */
