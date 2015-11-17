<?php

/* TestBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_e7748b995866c7e913ec710668020c2bfc8d32191f73dfe1492421763005756a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBlogBundle::layout.html.twig", "TestBlogBundle:Blog:voir.html.twig", 1);
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
        $__internal_6528e732fb6c3555c458663b209a97b4ad05e3823e533441600c8227fb703887 = $this->env->getExtension("native_profiler");
        $__internal_6528e732fb6c3555c458663b209a97b4ad05e3823e533441600c8227fb703887->enter($__internal_6528e732fb6c3555c458663b209a97b4ad05e3823e533441600c8227fb703887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6528e732fb6c3555c458663b209a97b4ad05e3823e533441600c8227fb703887->leave($__internal_6528e732fb6c3555c458663b209a97b4ad05e3823e533441600c8227fb703887_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed181905ed42e5695d774ad571dac1751a549e1ad0d63bb7307d109fd3aac1ca = $this->env->getExtension("native_profiler");
        $__internal_ed181905ed42e5695d774ad571dac1751a549e1ad0d63bb7307d109fd3aac1ca->enter($__internal_ed181905ed42e5695d774ad571dac1751a549e1ad0d63bb7307d109fd3aac1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_ed181905ed42e5695d774ad571dac1751a549e1ad0d63bb7307d109fd3aac1ca->leave($__internal_ed181905ed42e5695d774ad571dac1751a549e1ad0d63bb7307d109fd3aac1ca_prof);

    }

    // line 3
    public function block_testblog_body($context, array $blocks = array())
    {
        $__internal_4d0233c4c46e8dbba8ce192ee9f44696ddc2fbea1bf12a34fe2de4263ac44f54 = $this->env->getExtension("native_profiler");
        $__internal_4d0233c4c46e8dbba8ce192ee9f44696ddc2fbea1bf12a34fe2de4263ac44f54->enter($__internal_4d0233c4c46e8dbba8ce192ee9f44696ddc2fbea1bf12a34fe2de4263ac44f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testblog_body"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("TestBlogBundle:Blog:article.html.twig", "TestBlogBundle:Blog:voir.html.twig", 5)->display(array_merge($context, array("article" => (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")))));
        // line 6
        echo "

<p>
  <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\" class=\"btn\">
    <i class=\"icon-chevron-left\"></i>
    Retour à la liste
  </a>
  <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
    <i class=\"icon-edit\"></i>
    Modifier l'article
  </a>
  <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
    <i class=\"icon-trash\"></i>
    Supprimer l'article
  </a>
</p>

";
        
        $__internal_4d0233c4c46e8dbba8ce192ee9f44696ddc2fbea1bf12a34fe2de4263ac44f54->leave($__internal_4d0233c4c46e8dbba8ce192ee9f44696ddc2fbea1bf12a34fe2de4263ac44f54_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  71 => 13,  64 => 9,  59 => 6,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "TestBlogBundle::layout.html.twig" %}*/
/* {% block title %}Lecture d'un article - {{parent()}}{% endblock %}*/
/* {% block testblog_body %}*/
/* */
/* {% include 'TestBlogBundle:Blog:article.html.twig' with {'article':article} %}*/
/* */
/* */
/* <p>*/
/*   <a href="{{path('blog_accueil')}}" class="btn">*/
/*     <i class="icon-chevron-left"></i>*/
/*     Retour à la liste*/
/*   </a>*/
/*   <a href="{{path('blog_modifier', {'id':article.id}) }}" class="btn">*/
/*     <i class="icon-edit"></i>*/
/*     Modifier l'article*/
/*   </a>*/
/*   <a href="{{path('blog_supprimer',{'id':article.id})}}" class="btn">*/
/*     <i class="icon-trash"></i>*/
/*     Supprimer l'article*/
/*   </a>*/
/* </p>*/
/* */
/* {% endblock %}*/
/* */
