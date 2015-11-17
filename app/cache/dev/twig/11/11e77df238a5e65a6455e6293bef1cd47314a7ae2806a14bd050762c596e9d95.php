<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e4aa41675a782d27705764b4ad824f5496d0e230b9ed48169dc7010d445a7ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_41d9d977894bd3230e189e1d8a8f2ca082d9b69b2c1de288a643c172a7c80461 = $this->env->getExtension("native_profiler");
        $__internal_41d9d977894bd3230e189e1d8a8f2ca082d9b69b2c1de288a643c172a7c80461->enter($__internal_41d9d977894bd3230e189e1d8a8f2ca082d9b69b2c1de288a643c172a7c80461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41d9d977894bd3230e189e1d8a8f2ca082d9b69b2c1de288a643c172a7c80461->leave($__internal_41d9d977894bd3230e189e1d8a8f2ca082d9b69b2c1de288a643c172a7c80461_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3aa16a6497ad3d53052544a1707a2aee716aa1eae3a854367cd60dbf0e6ac8c = $this->env->getExtension("native_profiler");
        $__internal_c3aa16a6497ad3d53052544a1707a2aee716aa1eae3a854367cd60dbf0e6ac8c->enter($__internal_c3aa16a6497ad3d53052544a1707a2aee716aa1eae3a854367cd60dbf0e6ac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c3aa16a6497ad3d53052544a1707a2aee716aa1eae3a854367cd60dbf0e6ac8c->leave($__internal_c3aa16a6497ad3d53052544a1707a2aee716aa1eae3a854367cd60dbf0e6ac8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
