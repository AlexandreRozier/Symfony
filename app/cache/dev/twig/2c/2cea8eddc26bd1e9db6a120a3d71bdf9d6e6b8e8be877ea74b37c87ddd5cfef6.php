<?php

/* TestBlogBundle::layout.html.twig */
class __TwigTemplate_524f20d66d94b45b1ce1c9ff52dce8801868b2de06a58efd232c7afe15f6c29c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TestBlogBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'testblog_body' => array($this, 'block_testblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18968d82f3aa633e1bdddc2fa054eaed25f088f227f61de03f2c673690baa966 = $this->env->getExtension("native_profiler");
        $__internal_18968d82f3aa633e1bdddc2fa054eaed25f088f227f61de03f2c673690baa966->enter($__internal_18968d82f3aa633e1bdddc2fa054eaed25f088f227f61de03f2c673690baa966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18968d82f3aa633e1bdddc2fa054eaed25f088f227f61de03f2c673690baa966->leave($__internal_18968d82f3aa633e1bdddc2fa054eaed25f088f227f61de03f2c673690baa966_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d48f214614f62625d5d37e840c4950d227a6d3cba596eeedd6d61d11e144cc09 = $this->env->getExtension("native_profiler");
        $__internal_d48f214614f62625d5d37e840c4950d227a6d3cba596eeedd6d61d11e144cc09->enter($__internal_d48f214614f62625d5d37e840c4950d227a6d3cba596eeedd6d61d11e144cc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Blog
";
        
        $__internal_d48f214614f62625d5d37e840c4950d227a6d3cba596eeedd6d61d11e144cc09->leave($__internal_d48f214614f62625d5d37e840c4950d227a6d3cba596eeedd6d61d11e144cc09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9044154d41db998aaba1a2f87386c4d784925b94917353e3b281490e23806ce3 = $this->env->getExtension("native_profiler");
        $__internal_9044154d41db998aaba1a2f87386c4d784925b94917353e3b281490e23806ce3->enter($__internal_9044154d41db998aaba1a2f87386c4d784925b94917353e3b281490e23806ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h1>Partie Blog</h1>
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
        $this->displayBlock('testblog_body', $context, $blocks);
        
        $__internal_9044154d41db998aaba1a2f87386c4d784925b94917353e3b281490e23806ce3->leave($__internal_9044154d41db998aaba1a2f87386c4d784925b94917353e3b281490e23806ce3_prof);

    }

    public function block_testblog_body($context, array $blocks = array())
    {
        $__internal_edcfa3b17ffea08ff11543a3bb00ee8f84989bc798206d430622cf6971ea6426 = $this->env->getExtension("native_profiler");
        $__internal_edcfa3b17ffea08ff11543a3bb00ee8f84989bc798206d430622cf6971ea6426->enter($__internal_edcfa3b17ffea08ff11543a3bb00ee8f84989bc798206d430622cf6971ea6426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testblog_body"));

        // line 15
        echo "  ";
        
        $__internal_edcfa3b17ffea08ff11543a3bb00ee8f84989bc798206d430622cf6971ea6426->leave($__internal_edcfa3b17ffea08ff11543a3bb00ee8f84989bc798206d430622cf6971ea6426_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  79 => 14,  76 => 13,  67 => 10,  64 => 9,  60 => 8,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/*   Blog*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*   <h1>Partie Blog</h1>*/
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/*     <div class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </div>*/
/*   {% endfor %}*/
/*   <hr>*/
/*   {% block testblog_body %}*/
/*   {% endblock %}*/
/* {% endblock %}*/
/* */
