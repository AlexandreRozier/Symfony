<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f5982b0944002d2d03a6dafebcee40808147b6a8ea218e8d08e593d2efe79fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fd7acbc38b633f0399dc52589d505de27022094ae89214487dfd86ef029cce1 = $this->env->getExtension("native_profiler");
        $__internal_7fd7acbc38b633f0399dc52589d505de27022094ae89214487dfd86ef029cce1->enter($__internal_7fd7acbc38b633f0399dc52589d505de27022094ae89214487dfd86ef029cce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd7acbc38b633f0399dc52589d505de27022094ae89214487dfd86ef029cce1->leave($__internal_7fd7acbc38b633f0399dc52589d505de27022094ae89214487dfd86ef029cce1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dda4440e85cc6c0880429fe120948c4b35de042caf896f9e56f3502c4787706 = $this->env->getExtension("native_profiler");
        $__internal_9dda4440e85cc6c0880429fe120948c4b35de042caf896f9e56f3502c4787706->enter($__internal_9dda4440e85cc6c0880429fe120948c4b35de042caf896f9e56f3502c4787706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_9dda4440e85cc6c0880429fe120948c4b35de042caf896f9e56f3502c4787706->leave($__internal_9dda4440e85cc6c0880429fe120948c4b35de042caf896f9e56f3502c4787706_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_842736a3ddfea69ad4dde23493f8613396b444f05bb3ff25cdbf854ccdebad9e = $this->env->getExtension("native_profiler");
        $__internal_842736a3ddfea69ad4dde23493f8613396b444f05bb3ff25cdbf854ccdebad9e->enter($__internal_842736a3ddfea69ad4dde23493f8613396b444f05bb3ff25cdbf854ccdebad9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_842736a3ddfea69ad4dde23493f8613396b444f05bb3ff25cdbf854ccdebad9e->leave($__internal_842736a3ddfea69ad4dde23493f8613396b444f05bb3ff25cdbf854ccdebad9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends('::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/* */
/*     {% for key, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="alert alert-{{ key }}">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
