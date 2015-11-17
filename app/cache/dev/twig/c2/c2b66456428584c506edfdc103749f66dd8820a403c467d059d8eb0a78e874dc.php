<?php

/* TestBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_982b5bc1e3ea164bacb5f0013c055818ab24bb54cb28fc35b40cf5f0cc9909e7 extends Twig_Template
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
        $__internal_a487de3110359aa48a9941a14ea40020f13ffbf4693746e19892f08c0f924915 = $this->env->getExtension("native_profiler");
        $__internal_a487de3110359aa48a9941a14ea40020f13ffbf4693746e19892f08c0f924915->enter($__internal_a487de3110359aa48a9941a14ea40020f13ffbf4693746e19892f08c0f924915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:formulaire.html.twig"));

        // line 1
        echo "<h3> Formulaire d'article</h3>
<div class=\"well\">
  <form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")), array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "



    <div>
      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre de l'aricle"));
        echo "
      ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
      ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
    </div>


    <div>
      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label" => "Contenu de l'article"));
        echo "
      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget');
        echo "
    </div>
    <div>
      ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'label', array("label" => "Catégories"));
        echo "
      ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'errors');
        echo "
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'widget');
        echo "
    </div>

    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <br/>
      <input type=\"submit\" class=\"btn btn-primary\" />

  </form>
</div>
";
        
        $__internal_a487de3110359aa48a9941a14ea40020f13ffbf4693746e19892f08c0f924915->leave($__internal_a487de3110359aa48a9941a14ea40020f13ffbf4693746e19892f08c0f924915_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  78 => 23,  74 => 22,  70 => 21,  64 => 18,  60 => 17,  56 => 16,  48 => 11,  44 => 10,  40 => 9,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/* <h3> Formulaire d'article</h3>*/
/* <div class="well">*/
/*   <form action="{{path(target,{'id':id})}}" method="post" {{form_enctype(form)}}>*/
/*     {{form_errors(form)}}*/
/* */
/* */
/* */
/*     <div>*/
/*       {{form_label(form.titre,"Titre de l'aricle")}}*/
/*       {{form_errors(form.titre)}}*/
/*       {{form_widget(form.titre)}}*/
/*     </div>*/
/* */
/* */
/*     <div>*/
/*       {{form_label(form.contenu,"Contenu de l'article")}}*/
/*       {{form_errors(form.contenu)}}*/
/*       {{form_widget(form.contenu)}}*/
/*     </div>*/
/*     <div>*/
/*       {{form_label(form.categories,"Catégories")}}*/
/*       {{form_errors(form.categories)}}*/
/*       {{form_widget(form.categories)}}*/
/*     </div>*/
/* */
/*     {{form_rest(form)}}*/
/*     <br/>*/
/*       <input type="submit" class="btn btn-primary" />*/
/* */
/*   </form>*/
/* </div>*/
/* */
