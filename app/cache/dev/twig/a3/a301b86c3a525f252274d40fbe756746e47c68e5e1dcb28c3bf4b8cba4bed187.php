<?php

/* TestBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_ef2b37a94ecb4b6c081e23d73bb9234ccb0bb24c45588ef5e1c11597b21a642b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBlogBundle::layout.html.twig", "TestBlogBundle:Blog:modifier.html.twig", 1);
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
        $__internal_26b9cd371e39fb8e7dac10b4e4ebc408d896e53b4976e6cb462a1b049d09c926 = $this->env->getExtension("native_profiler");
        $__internal_26b9cd371e39fb8e7dac10b4e4ebc408d896e53b4976e6cb462a1b049d09c926->enter($__internal_26b9cd371e39fb8e7dac10b4e4ebc408d896e53b4976e6cb462a1b049d09c926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26b9cd371e39fb8e7dac10b4e4ebc408d896e53b4976e6cb462a1b049d09c926->leave($__internal_26b9cd371e39fb8e7dac10b4e4ebc408d896e53b4976e6cb462a1b049d09c926_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf7c9846240d96638e8272fa8c29712fb42a5a67ddf5482beeb822e06ab7e663 = $this->env->getExtension("native_profiler");
        $__internal_cf7c9846240d96638e8272fa8c29712fb42a5a67ddf5482beeb822e06ab7e663->enter($__internal_cf7c9846240d96638e8272fa8c29712fb42a5a67ddf5482beeb822e06ab7e663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cf7c9846240d96638e8272fa8c29712fb42a5a67ddf5482beeb822e06ab7e663->leave($__internal_cf7c9846240d96638e8272fa8c29712fb42a5a67ddf5482beeb822e06ab7e663_prof);

    }

    // line 7
    public function block_testblog_body($context, array $blocks = array())
    {
        $__internal_c28fb13835a2e1a089e05c835af97d6fb91ae6110f282d2feee1798a0b8d87df = $this->env->getExtension("native_profiler");
        $__internal_c28fb13835a2e1a089e05c835af97d6fb91ae6110f282d2feee1798a0b8d87df->enter($__internal_c28fb13835a2e1a089e05c835af97d6fb91ae6110f282d2feee1798a0b8d87df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testblog_body"));

        // line 8
        echo "<h2>Modifier un article</h2>
<p>
  NB: Vous éditez un article déjà existant, ne le changez pas trop pour éviter aux memebres de ne pas comprendre ce qu'il se passe.
</p>


  ";
        // line 14
        $this->loadTemplate("TestBlogBundle:Blog:formulaire.html.twig", "TestBlogBundle:Blog:modifier.html.twig", 14)->display(array_merge($context, array("target" => "blog_modifier", "id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))));
        // line 15
        echo "

<p>
  <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
    <i class=\"icon-chevron-left\"></i>
    Retour à l'article
  </a>
</p>

";
        
        $__internal_c28fb13835a2e1a089e05c835af97d6fb91ae6110f282d2feee1798a0b8d87df->leave($__internal_c28fb13835a2e1a089e05c835af97d6fb91ae6110f282d2feee1798a0b8d87df_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  67 => 15,  65 => 14,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TestBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* Modifier un article - {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block testblog_body %}*/
/* <h2>Modifier un article</h2>*/
/* <p>*/
/*   NB: Vous éditez un article déjà existant, ne le changez pas trop pour éviter aux memebres de ne pas comprendre ce qu'il se passe.*/
/* </p>*/
/* */
/* */
/*   {% include 'TestBlogBundle:Blog:formulaire.html.twig' with {'target':'blog_modifier','id':article.id} %}*/
/* */
/* */
/* <p>*/
/*   <a href="{{ path('blog_voir',{'id':article.id}) }}" class="btn">*/
/*     <i class="icon-chevron-left"></i>*/
/*     Retour à l'article*/
/*   </a>*/
/* </p>*/
/* */
/* {% endblock %}*/
/* */
