<?php

/* TestBlogBundle:Blog:article.html.twig */
class __TwigTemplate_dccb76a341e6247c0117c09e5942ab198b23f27cc31a90c6e00e0c8d2f82df19 extends Twig_Template
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
        $__internal_2164ba7472203462a006fb7d104a894009a121b0cb02ca467b0eaac22b8ab1be = $this->env->getExtension("native_profiler");
        $__internal_2164ba7472203462a006fb7d104a894009a121b0cb02ca467b0eaac22b8ab1be->enter($__internal_2164ba7472203462a006fb7d104a894009a121b0cb02ca467b0eaac22b8ab1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Blog:article.html.twig"));

        // line 1
        $context["isAccueil"] = ((array_key_exists("isAccueil", $context)) ? (_twig_default_filter((isset($context["isAccueil"]) ? $context["isAccueil"] : $this->getContext($context, "isAccueil")), false)) : (false));
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "publication", array()), "html", null, true);
        echo "

<h2>
    ";
        // line 6
        if ((isset($context["isAccueil"]) ? $context["isAccueil"] : $this->getContext($context, "isAccueil"))) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "</h2>

<i>
    Le ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo ", par ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array()), "html", null, true);
        echo ".
</i>

";
        // line 19
        if ( !(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()))) {
            // line 20
            echo "
    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
         alt=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\"/>
";
        }
        // line 24
        echo "
<div class=\"well\">
    ";
        // line 26
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array());
        echo "
</div>

";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()), "count", array()) > 0)) {
            // line 30
            echo "    <div class=\"well well-small\">
        <p>
            <i>
                Catégories :
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 35
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 36
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </i>
        </p>
    </div>
";
        }
        
        $__internal_2164ba7472203462a006fb7d104a894009a121b0cb02ca467b0eaac22b8ab1be->leave($__internal_2164ba7472203462a006fb7d104a894009a121b0cb02ca467b0eaac22b8ab1be_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  120 => 36,  114 => 35,  97 => 34,  91 => 30,  89 => 29,  83 => 26,  79 => 24,  74 => 22,  70 => 21,  67 => 20,  65 => 19,  57 => 16,  52 => 13,  46 => 11,  40 => 8,  35 => 7,  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set isAccueil = isAccueil|default(false) %}*/
/* */
/* {{ article.publication }}*/
/* */
/* <h2>*/
/*     {% if isAccueil %}*/
/*         <a href="{{path('blog_voir',{'id':article.id})}}">*/
/*             {{article.titre}}*/
/*         </a>*/
/*     {% else %}*/
/*         {{article.titre}}*/
/*     {% endif %}*/
/* </h2>*/
/* */
/* <i>*/
/*     Le {{article.date|date('d/m/Y')}}, par {{article.auteur}}.*/
/* </i>*/
/* */
/* {% if article.image is not null %}*/
/* */
/*     <img src="{{ asset(article.image.webPath) }}"*/
/*          alt="{{ article.image.alt }}"/>*/
/* {% endif %}*/
/* */
/* <div class="well">*/
/*     {{article.contenu|raw}}*/
/* </div>*/
/* */
/* {% if article.categories.count > 0 %}*/
/*     <div class="well well-small">*/
/*         <p>*/
/*             <i>*/
/*                 Catégories :*/
/*                 {% for categorie in article.categories %}*/
/*                     {{categorie.nom}}{% if not loop.last %}, {% endif %}*/
/*                 {% endfor %}*/
/*             </i>*/
/*         </p>*/
/*     </div>*/
/* {% endif %}*/
/* */
