<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_de5f029bc49b2725255eede0e121665b017bf30bfa3e61d317fb893627caa5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_912c99d844dd7eee449cfae4892321d6630ed77e161624bf3b7c6ae63458e70f = $this->env->getExtension("native_profiler");
        $__internal_912c99d844dd7eee449cfae4892321d6630ed77e161624bf3b7c6ae63458e70f->enter($__internal_912c99d844dd7eee449cfae4892321d6630ed77e161624bf3b7c6ae63458e70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_912c99d844dd7eee449cfae4892321d6630ed77e161624bf3b7c6ae63458e70f->leave($__internal_912c99d844dd7eee449cfae4892321d6630ed77e161624bf3b7c6ae63458e70f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7bace33f158d599a1d5c40de74a48e22b806304bd5b8dc201786aef28e6fc35 = $this->env->getExtension("native_profiler");
        $__internal_a7bace33f158d599a1d5c40de74a48e22b806304bd5b8dc201786aef28e6fc35->enter($__internal_a7bace33f158d599a1d5c40de74a48e22b806304bd5b8dc201786aef28e6fc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a7bace33f158d599a1d5c40de74a48e22b806304bd5b8dc201786aef28e6fc35->leave($__internal_a7bace33f158d599a1d5c40de74a48e22b806304bd5b8dc201786aef28e6fc35_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
