<?php

/* TestBlogBundle:Blog:categorySearchResult.html.twig */
class __TwigTemplate_484695698a955b288e92f172ecafa1a652b9f4406b25dd09a39c518c56a11f33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBlogBundle::layout.html.twig", "TestBlogBundle:Blog:categorySearchResult.html.twig", 1);
        $this->blocks = array(
            'testblog_body' => array($this, 'block_testblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab62244aabcdfbc733f7118d6457b6cf42ee5bde146180a19c4a31e5c7baef72 = $this->env->getExtension("native_profiler");
        $__internal_ab62244aabcdfbc733f7118d6457b6cf42ee5bde146180a19c4a31e5c7baef72->enter($__internal_ab62244aabcdfbc733f7118d6457b6cf42ee5bde146180a19c4a31e5c7baef72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:categorySearchResult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab62244aabcdfbc733f7118d6457b6cf42ee5bde146180a19c4a31e5c7baef72->leave($__internal_ab62244aabcdfbc733f7118d6457b6cf42ee5bde146180a19c4a31e5c7baef72_prof);

    }

    // line 3
    public function block_testblog_body($context, array $blocks = array())
    {
        $__internal_9b0b5b26a9700f5a7b8b92bfd6f5060e6d2e69af2e55d90a0e0d23d95e61ca11 = $this->env->getExtension("native_profiler");
        $__internal_9b0b5b26a9700f5a7b8b92bfd6f5060e6d2e69af2e55d90a0e0d23d95e61ca11->enter($__internal_9b0b5b26a9700f5a7b8b92bfd6f5060e6d2e69af2e55d90a0e0d23d95e61ca11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testblog_body"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        
        $__internal_9b0b5b26a9700f5a7b8b92bfd6f5060e6d2e69af2e55d90a0e0d23d95e61ca11->leave($__internal_9b0b5b26a9700f5a7b8b92bfd6f5060e6d2e69af2e55d90a0e0d23d95e61ca11_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:categorySearchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'TestBlogBundle::layout.html.twig' %}*/
/* */
/* {% block testblog_body %}*/
/* */
/*     {% for article in articles %}*/
/*         {{ article.titre }}*/
/*     {% endfor %}*/
/* */
/*     {% endblock %}*/
