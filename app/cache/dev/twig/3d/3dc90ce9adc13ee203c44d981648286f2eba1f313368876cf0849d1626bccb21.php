<?php

/* TestBlogBundle:Blog:index.html.twig */
class __TwigTemplate_770310d8aef34f714a146bd5bdf1e5eec40992e7ba1ce910e4e06886c64e4065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBlogBundle::layout.html.twig", "TestBlogBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'testblog_body' => array($this, 'block_testblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b37aaf3a5379932a56830c387486054d4b482766c2beda7c498a0e193993679 = $this->env->getExtension("native_profiler");
        $__internal_5b37aaf3a5379932a56830c387486054d4b482766c2beda7c498a0e193993679->enter($__internal_5b37aaf3a5379932a56830c387486054d4b482766c2beda7c498a0e193993679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b37aaf3a5379932a56830c387486054d4b482766c2beda7c498a0e193993679->leave($__internal_5b37aaf3a5379932a56830c387486054d4b482766c2beda7c498a0e193993679_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c894939e490a959ea04884c8be9acb15765d0bc643b2ec54461e2ecd93e85846 = $this->env->getExtension("native_profiler");
        $__internal_c894939e490a959ea04884c8be9acb15765d0bc643b2ec54461e2ecd93e85846->enter($__internal_c894939e490a959ea04884c8be9acb15765d0bc643b2ec54461e2ecd93e85846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c894939e490a959ea04884c8be9acb15765d0bc643b2ec54461e2ecd93e85846->leave($__internal_c894939e490a959ea04884c8be9acb15765d0bc643b2ec54461e2ecd93e85846_prof);

    }

    // line 6
    public function block_testblog_body($context, array $blocks = array())
    {
        $__internal_3a43beb776d3af9f0e4dbc36b5c779cecc3321050a6283dcda681af07acc8fd5 = $this->env->getExtension("native_profiler");
        $__internal_3a43beb776d3af9f0e4dbc36b5c779cecc3321050a6283dcda681af07acc8fd5->enter($__internal_3a43beb776d3af9f0e4dbc36b5c779cecc3321050a6283dcda681af07acc8fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testblog_body"));

        // line 7
        echo "  <h2>Liste des articles</h2>

  <ul id=\"articles-container\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "      ";
            $this->loadTemplate("TestBlogBundle:Blog:article.html.twig", "TestBlogBundle:Blog:index.html.twig", 11)->display(array_merge($context, array("isAccueil" => true)));
            // line 12
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 13
            echo "      <li>Pas (encore !) d'articles</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </ul>
";
        
        $__internal_3a43beb776d3af9f0e4dbc36b5c779cecc3321050a6283dcda681af07acc8fd5->leave($__internal_3a43beb776d3af9f0e4dbc36b5c779cecc3321050a6283dcda681af07acc8fd5_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  96 => 13,  83 => 12,  80 => 11,  62 => 10,  57 => 7,  51 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "TestBlogBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*   Accueil - {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block testblog_body %}*/
/*   <h2>Liste des articles</h2>*/
/* */
/*   <ul id="articles-container">*/
/*     {% for article in articles %}*/
/*       {% include 'TestBlogBundle:Blog:article.html.twig' with{'isAccueil':true}%}*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'articles</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endblock %}*/
/* */
