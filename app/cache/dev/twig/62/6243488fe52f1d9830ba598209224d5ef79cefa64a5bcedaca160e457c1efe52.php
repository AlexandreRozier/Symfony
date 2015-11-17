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
            'testblog_body' => array($this, 'block_testblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0055bad62c6ae1ff1e3f78debea68f3c73353cac968e4a0385fc9de93cfdac0 = $this->env->getExtension("native_profiler");
        $__internal_b0055bad62c6ae1ff1e3f78debea68f3c73353cac968e4a0385fc9de93cfdac0->enter($__internal_b0055bad62c6ae1ff1e3f78debea68f3c73353cac968e4a0385fc9de93cfdac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0055bad62c6ae1ff1e3f78debea68f3c73353cac968e4a0385fc9de93cfdac0->leave($__internal_b0055bad62c6ae1ff1e3f78debea68f3c73353cac968e4a0385fc9de93cfdac0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5514322c48f56187c1eda6b9511d3c2aa7c5214065f78f545a48b06be50fcdf8 = $this->env->getExtension("native_profiler");
        $__internal_5514322c48f56187c1eda6b9511d3c2aa7c5214065f78f545a48b06be50fcdf8->enter($__internal_5514322c48f56187c1eda6b9511d3c2aa7c5214065f78f545a48b06be50fcdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Blog
";
        
        $__internal_5514322c48f56187c1eda6b9511d3c2aa7c5214065f78f545a48b06be50fcdf8->leave($__internal_5514322c48f56187c1eda6b9511d3c2aa7c5214065f78f545a48b06be50fcdf8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d74e2fec2f02643e5d9b9651b19f980f8f3880b3dc1f2e600577cd24d8f295e = $this->env->getExtension("native_profiler");
        $__internal_7d74e2fec2f02643e5d9b9651b19f980f8f3880b3dc1f2e600577cd24d8f295e->enter($__internal_7d74e2fec2f02643e5d9b9651b19f980f8f3880b3dc1f2e600577cd24d8f295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->displayBlock('testblog_body', $context, $blocks);
        
        $__internal_7d74e2fec2f02643e5d9b9651b19f980f8f3880b3dc1f2e600577cd24d8f295e->leave($__internal_7d74e2fec2f02643e5d9b9651b19f980f8f3880b3dc1f2e600577cd24d8f295e_prof);

    }

    public function block_testblog_body($context, array $blocks = array())
    {
        $__internal_3bdbb358c8aecbcd64b1b1b35e872f386c36f72e0de6aa26a0d687d96640bc36 = $this->env->getExtension("native_profiler");
        $__internal_3bdbb358c8aecbcd64b1b1b35e872f386c36f72e0de6aa26a0d687d96640bc36->enter($__internal_3bdbb358c8aecbcd64b1b1b35e872f386c36f72e0de6aa26a0d687d96640bc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testblog_body"));

        // line 15
        echo "  ";
        
        $__internal_3bdbb358c8aecbcd64b1b1b35e872f386c36f72e0de6aa26a0d687d96640bc36->leave($__internal_3bdbb358c8aecbcd64b1b1b35e872f386c36f72e0de6aa26a0d687d96640bc36_prof);

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
        return array (  91 => 15,  79 => 14,  76 => 13,  67 => 10,  64 => 9,  60 => 8,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/*   Blog*/
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
/*   {% block testblog_body %}*/
/*   {% endblock %}*/
/* {% endblock %}*/
/* */
