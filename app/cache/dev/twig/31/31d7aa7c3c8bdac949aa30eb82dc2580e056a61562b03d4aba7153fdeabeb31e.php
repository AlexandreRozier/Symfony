<?php

/* TestMainBundle:Main:index.html.twig */
class __TwigTemplate_e82df5a8e69c01fd7495d0ae4de2f1884e8ca1dcedaa5e54d62934576176f0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestMainBundle::layout.html.twig", "TestMainBundle:Main:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0a9d14099709b912ffe8c89a2134d0cae028d7f57035ffe90e9682fe8327d8c = $this->env->getExtension("native_profiler");
        $__internal_d0a9d14099709b912ffe8c89a2134d0cae028d7f57035ffe90e9682fe8327d8c->enter($__internal_d0a9d14099709b912ffe8c89a2134d0cae028d7f57035ffe90e9682fe8327d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestMainBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0a9d14099709b912ffe8c89a2134d0cae028d7f57035ffe90e9682fe8327d8c->leave($__internal_d0a9d14099709b912ffe8c89a2134d0cae028d7f57035ffe90e9682fe8327d8c_prof);

    }

    public function getTemplateName()
    {
        return "TestMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'TestMainBundle::layout.html.twig' %}*/
/* */
/* */
/* */
/* */
