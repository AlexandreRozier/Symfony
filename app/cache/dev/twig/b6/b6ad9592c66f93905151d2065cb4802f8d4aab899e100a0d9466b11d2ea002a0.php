<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_82d7f1cf581eaf87a844da4ce4cc290dc99bc1f4baefd8e107c0745c151599dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6e963ee6986db21c857539f280ca095aab9b4dab0c2c34033b8d7d942c963c7 = $this->env->getExtension("native_profiler");
        $__internal_f6e963ee6986db21c857539f280ca095aab9b4dab0c2c34033b8d7d942c963c7->enter($__internal_f6e963ee6986db21c857539f280ca095aab9b4dab0c2c34033b8d7d942c963c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e963ee6986db21c857539f280ca095aab9b4dab0c2c34033b8d7d942c963c7->leave($__internal_f6e963ee6986db21c857539f280ca095aab9b4dab0c2c34033b8d7d942c963c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d36d2dc8f9102296f701c931baea7943d27c7f1bee6bec1acc549cb1ad4e63d0 = $this->env->getExtension("native_profiler");
        $__internal_d36d2dc8f9102296f701c931baea7943d27c7f1bee6bec1acc549cb1ad4e63d0->enter($__internal_d36d2dc8f9102296f701c931baea7943d27c7f1bee6bec1acc549cb1ad4e63d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d36d2dc8f9102296f701c931baea7943d27c7f1bee6bec1acc549cb1ad4e63d0->leave($__internal_d36d2dc8f9102296f701c931baea7943d27c7f1bee6bec1acc549cb1ad4e63d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_537aa20db01b75e6c59a53b18f7950284b362d8edb72c2a5e94fa1eed4a9bd60 = $this->env->getExtension("native_profiler");
        $__internal_537aa20db01b75e6c59a53b18f7950284b362d8edb72c2a5e94fa1eed4a9bd60->enter($__internal_537aa20db01b75e6c59a53b18f7950284b362d8edb72c2a5e94fa1eed4a9bd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_537aa20db01b75e6c59a53b18f7950284b362d8edb72c2a5e94fa1eed4a9bd60->leave($__internal_537aa20db01b75e6c59a53b18f7950284b362d8edb72c2a5e94fa1eed4a9bd60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c33ecf480523db2438c34e4c3a86f33b795ec4728a37237cab7ba9a5848f64e5 = $this->env->getExtension("native_profiler");
        $__internal_c33ecf480523db2438c34e4c3a86f33b795ec4728a37237cab7ba9a5848f64e5->enter($__internal_c33ecf480523db2438c34e4c3a86f33b795ec4728a37237cab7ba9a5848f64e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c33ecf480523db2438c34e4c3a86f33b795ec4728a37237cab7ba9a5848f64e5->leave($__internal_c33ecf480523db2438c34e4c3a86f33b795ec4728a37237cab7ba9a5848f64e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
