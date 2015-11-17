<?php

/* TestBlogBundle:Blog:supprimer.html.twig */
class __TwigTemplate_aad17f21e12d339642c8ff181e221cf9e93afc5e7af2ff6fe7ba8f4f29ce03bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBlogBundle::layout.html.twig", "TestBlogBundle:Blog:supprimer.html.twig", 1);
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
        $__internal_139fd812d78410462a0eff29ae9814257ed0c1b514b43d59af2953364766c153 = $this->env->getExtension("native_profiler");
        $__internal_139fd812d78410462a0eff29ae9814257ed0c1b514b43d59af2953364766c153->enter($__internal_139fd812d78410462a0eff29ae9814257ed0c1b514b43d59af2953364766c153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_139fd812d78410462a0eff29ae9814257ed0c1b514b43d59af2953364766c153->leave($__internal_139fd812d78410462a0eff29ae9814257ed0c1b514b43d59af2953364766c153_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f80aa72df8d74207a29d87351be494c6c77825080aab368ba0684516409dc5b7 = $this->env->getExtension("native_profiler");
        $__internal_f80aa72df8d74207a29d87351be494c6c77825080aab368ba0684516409dc5b7->enter($__internal_f80aa72df8d74207a29d87351be494c6c77825080aab368ba0684516409dc5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Supprimer un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f80aa72df8d74207a29d87351be494c6c77825080aab368ba0684516409dc5b7->leave($__internal_f80aa72df8d74207a29d87351be494c6c77825080aab368ba0684516409dc5b7_prof);

    }

    // line 7
    public function block_testblog_body($context, array $blocks = array())
    {
        $__internal_f78147092208479d12eb4528828dce4a3142d05d3bdb09b73018898b0ae41be9 = $this->env->getExtension("native_profiler");
        $__internal_f78147092208479d12eb4528828dce4a3142d05d3bdb09b73018898b0ae41be9->enter($__internal_f78147092208479d12eb4528828dce4a3142d05d3bdb09b73018898b0ae41be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testblog_body"));

        // line 8
        echo "<h2>Supprimer un article</h2>
<p>
   Etes-vous certain de vouloir supprimer l'article \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo " ?\"
</p>

<form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\"
      method=\"post\">
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn\">
        <i class=\"icon-chevron-left\"></i>
        Retour à l'article
    </a>
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>

";
        
        $__internal_f78147092208479d12eb4528828dce4a3142d05d3bdb09b73018898b0ae41be9->leave($__internal_f78147092208479d12eb4528828dce4a3142d05d3bdb09b73018898b0ae41be9_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  72 => 15,  67 => 13,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {%  extends "TestBlogBundle::layout.html.twig"%}*/
/* */
/* {% block title %}*/
/*     Supprimer un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block testblog_body %}*/
/* <h2>Supprimer un article</h2>*/
/* <p>*/
/*    Etes-vous certain de vouloir supprimer l'article "{{ article.titre }} ?"*/
/* </p>*/
/* */
/* <form action="{{ path('blog_supprimer',{'id':article.id}) }}"*/
/*       method="post">*/
/*     <a href="{{ path('blog_voir',{'id':article.id}) }}"*/
/*        class="btn">*/
/*         <i class="icon-chevron-left"></i>*/
/*         Retour à l'article*/
/*     </a>*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {{ form_rest(form) }}*/
/* </form>*/
/* */
/* {% endblock %}*/
