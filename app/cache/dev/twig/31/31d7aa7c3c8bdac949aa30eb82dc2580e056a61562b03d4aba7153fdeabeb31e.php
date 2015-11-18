<?php

/* TestMainBundle:Main:index.html.twig */
class __TwigTemplate_e82df5a8e69c01fd7495d0ae4de2f1884e8ca1dcedaa5e54d62934576176f0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestMainBundle::layout.html.twig", "TestMainBundle:Main:index.html.twig", 1);
        $this->blocks = array(
            'testmain_body' => array($this, 'block_testmain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ff44669b461f819fc30f71059f4890ef0ba75341e2039b0137771ff8bf49945 = $this->env->getExtension("native_profiler");
        $__internal_0ff44669b461f819fc30f71059f4890ef0ba75341e2039b0137771ff8bf49945->enter($__internal_0ff44669b461f819fc30f71059f4890ef0ba75341e2039b0137771ff8bf49945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestMainBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ff44669b461f819fc30f71059f4890ef0ba75341e2039b0137771ff8bf49945->leave($__internal_0ff44669b461f819fc30f71059f4890ef0ba75341e2039b0137771ff8bf49945_prof);

    }

    // line 3
    public function block_testmain_body($context, array $blocks = array())
    {
        $__internal_96ed9677ca27e7687c21945e835355035d52f98e5719dcae3a4dfa7924baa147 = $this->env->getExtension("native_profiler");
        $__internal_96ed9677ca27e7687c21945e835355035d52f98e5719dcae3a4dfa7924baa147->enter($__internal_96ed9677ca27e7687c21945e835355035d52f98e5719dcae3a4dfa7924baa147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testmain_body"));

        // line 4
        echo "
    <div class=\"well\">
        <p><h2>Bienvenue sur ce site de démonstration Symfony 2.7.</h2>
            Vous y trouverez un Bundle de blog <b>réutilisable</b>, une gestion des utilisateurs sécurisée
            grâce au FOSUserBundle, et une gestion propre des entités sous-jacente.<br/><br/>
        <blockquote class=\"alert-info\">
            L'objectif de ce site est de travailler <b>l'architecture MVC</b>, ainsi que l'utilisation de <b>frameworks
            PHP.</b>
        </blockquote>


        </p>

    </div>
";
        
        $__internal_96ed9677ca27e7687c21945e835355035d52f98e5719dcae3a4dfa7924baa147->leave($__internal_96ed9677ca27e7687c21945e835355035d52f98e5719dcae3a4dfa7924baa147_prof);

    }

    public function getTemplateName()
    {
        return "TestMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'TestMainBundle::layout.html.twig' %}*/
/* */
/* {% block testmain_body %}*/
/* */
/*     <div class="well">*/
/*         <p><h2>Bienvenue sur ce site de démonstration Symfony 2.7.</h2>*/
/*             Vous y trouverez un Bundle de blog <b>réutilisable</b>, une gestion des utilisateurs sécurisée*/
/*             grâce au FOSUserBundle, et une gestion propre des entités sous-jacente.<br/><br/>*/
/*         <blockquote class="alert-info">*/
/*             L'objectif de ce site est de travailler <b>l'architecture MVC</b>, ainsi que l'utilisation de <b>frameworks*/
/*             PHP.</b>*/
/*         </blockquote>*/
/* */
/* */
/*         </p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
