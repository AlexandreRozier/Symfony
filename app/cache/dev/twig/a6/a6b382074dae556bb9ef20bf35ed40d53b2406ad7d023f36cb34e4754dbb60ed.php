<?php

/* TestBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_73975e21828ff5249dd3bc1d26813d6ba1a7aa2b7285e22fd6205c4f431600ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestBlogBundle::layout.html.twig", "TestBlogBundle:Blog:ajouter.html.twig", 1);
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
        $__internal_893f4dd8e66782414d9ea56c607da621a4d75bd4da39a818fc13e93a391a9341 = $this->env->getExtension("native_profiler");
        $__internal_893f4dd8e66782414d9ea56c607da621a4d75bd4da39a818fc13e93a391a9341->enter($__internal_893f4dd8e66782414d9ea56c607da621a4d75bd4da39a818fc13e93a391a9341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893f4dd8e66782414d9ea56c607da621a4d75bd4da39a818fc13e93a391a9341->leave($__internal_893f4dd8e66782414d9ea56c607da621a4d75bd4da39a818fc13e93a391a9341_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_109a9e2d3ebd07a36d7d5790aeb00f0e2f130198f8ec49c06872b928da3dad6c = $this->env->getExtension("native_profiler");
        $__internal_109a9e2d3ebd07a36d7d5790aeb00f0e2f130198f8ec49c06872b928da3dad6c->enter($__internal_109a9e2d3ebd07a36d7d5790aeb00f0e2f130198f8ec49c06872b928da3dad6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_109a9e2d3ebd07a36d7d5790aeb00f0e2f130198f8ec49c06872b928da3dad6c->leave($__internal_109a9e2d3ebd07a36d7d5790aeb00f0e2f130198f8ec49c06872b928da3dad6c_prof);

    }

    // line 7
    public function block_testblog_body($context, array $blocks = array())
    {
        $__internal_c3d541b879e5935a42bfbb854a8cf058df85cd6a2d22f34bbd9e3e698b4ea20b = $this->env->getExtension("native_profiler");
        $__internal_c3d541b879e5935a42bfbb854a8cf058df85cd6a2d22f34bbd9e3e698b4ea20b->enter($__internal_c3d541b879e5935a42bfbb854a8cf058df85cd6a2d22f34bbd9e3e698b4ea20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testblog_body"));

        // line 8
        echo "
  <h2>Ajouter un article</h2>
  
  ";
        // line 11
        $this->loadTemplate("TestBlogBundle:Blog:formulaire.html.twig", "TestBlogBundle:Blog:ajouter.html.twig", 11)->display(array_merge($context, array("target" => "blog_ajouter", "id" => null)));
        // line 12
        echo "

";
        
        $__internal_c3d541b879e5935a42bfbb854a8cf058df85cd6a2d22f34bbd9e3e698b4ea20b->leave($__internal_c3d541b879e5935a42bfbb854a8cf058df85cd6a2d22f34bbd9e3e698b4ea20b_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TestBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   Ajouter un article - {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block testblog_body %}*/
/* */
/*   <h2>Ajouter un article</h2>*/
/*   */
/*   {% include 'TestBlogBundle:Blog:formulaire.html.twig' with {'target':'blog_ajouter','id':null} %}*/
/* */
/* */
/* {% endblock %}*/
/* */
