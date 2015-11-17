<?php

/* TestBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_aa87e6d346d711d5b37756158cf90f8e6d586f1923acd12454c9f2d12812f461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8184f95e94fb407734dab7033b04cffae92cbe721cb3fabfcd60b84b637b4ffd = $this->env->getExtension("native_profiler");
        $__internal_8184f95e94fb407734dab7033b04cffae92cbe721cb3fabfcd60b84b637b4ffd->enter($__internal_8184f95e94fb407734dab7033b04cffae92cbe721cb3fabfcd60b84b637b4ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:menu.html.twig"));

        // line 1
        echo "<li class=\"nav-header\"> Les derniers articles</li>

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "
      <li><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
";
        
        $__internal_8184f95e94fb407734dab7033b04cffae92cbe721cb3fabfcd60b84b637b4ffd->leave($__internal_8184f95e94fb407734dab7033b04cffae92cbe721cb3fabfcd60b84b637b4ffd_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <li class="nav-header"> Les derniers articles</li>*/
/* */
/*     {% for article in liste_articles %}*/
/* */
/*       <li><a href="{{path('blog_voir',{'id':article.id})}}">{{article.titre}}</a></li>*/
/*     {% endfor %}*/
/* */
/* */
