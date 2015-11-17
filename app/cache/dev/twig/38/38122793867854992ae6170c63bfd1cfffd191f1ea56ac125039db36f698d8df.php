<?php

/* ::navbar.html.twig */
class __TwigTemplate_81162be20a55d5848eb6ce752bc9ff0a7f4e513d32b2c8d3ba713df772c87ae1 extends Twig_Template
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
        $__internal_64a2f7ac3d276bfde1912cfbe974c6bf72287d029a273507e48a84d194575303 = $this->env->getExtension("native_profiler");
        $__internal_64a2f7ac3d276bfde1912cfbe974c6bf72287d029a273507e48a84d194575303->enter($__internal_64a2f7ac3d276bfde1912cfbe974c6bf72287d029a273507e48a84d194575303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

        // line 1
        echo "<div class=\"nav  nav-pills nav-stacked well\">

    <div id=\"brand-container\">
        <a class=\"navbar-brand\" href=\"#\">Web-o-matic</a>
    </div>




    <li class=\"text-center\">

        ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "            Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
            <br/>
            <div class=\"btn-block\">
                <a class=\"btn btn-info btn-block\" href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
            </div>

        ";
        } else {
            // line 20
            echo "            Vous n'êtes pas connecté.

            <div class=\"btn-block\">
                <a class=\"btn btn-info btn-block\" href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
            </div>

        ";
        }
        // line 27
        echo "    </li>
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("main_index");
        echo "\">Accueil</a>

    </li>

    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Partie Blog<b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\">Accueil du blog</a></li>

            <li class=\"nav-header\">
                Fonctions
            </li>

            <li >

                ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 45
            echo "
                    <a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("blog_ajouter");
            echo "\">Ajouter un article</a>

                ";
        } else {
            // line 49
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"> Vous devez être loggé pour accéder à ces fonctions.</a>

                ";
        }
        // line 52
        echo "            </li>

                ";
        // line 54
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TestBlogBundle:Blog:menu", array("articles_number" => 3)));
        echo "


        </ul>
    </li>

















</div>";
        
        $__internal_64a2f7ac3d276bfde1912cfbe974c6bf72287d029a273507e48a84d194575303->leave($__internal_64a2f7ac3d276bfde1912cfbe974c6bf72287d029a273507e48a84d194575303_prof);

    }

    public function getTemplateName()
    {
        return "::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 54,  106 => 52,  99 => 49,  93 => 46,  90 => 45,  88 => 44,  77 => 36,  67 => 29,  63 => 27,  56 => 23,  51 => 20,  44 => 16,  37 => 13,  35 => 12,  22 => 1,);
    }
}
/* <div class="nav  nav-pills nav-stacked well">*/
/* */
/*     <div id="brand-container">*/
/*         <a class="navbar-brand" href="#">Web-o-matic</a>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/*     <li class="text-center">*/
/* */
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             Connecté en tant que {{ app.user.username }}*/
/*             <br/>*/
/*             <div class="btn-block">*/
/*                 <a class="btn btn-info btn-block" href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*             </div>*/
/* */
/*         {% else %}*/
/*             Vous n'êtes pas connecté.*/
/* */
/*             <div class="btn-block">*/
/*                 <a class="btn btn-info btn-block" href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/*             </div>*/
/* */
/*         {% endif %}*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{path('main_index')}}">Accueil</a>*/
/* */
/*     </li>*/
/* */
/*     <li class="dropdown">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Partie Blog<b class="caret"></b></a>*/
/*         <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('blog_accueil') }}">Accueil du blog</a></li>*/
/* */
/*             <li class="nav-header">*/
/*                 Fonctions*/
/*             </li>*/
/* */
/*             <li >*/
/* */
/*                 {% if is_granted('ROLE_AUTEUR') %}*/
/* */
/*                     <a href="{{path('blog_ajouter')}}">Ajouter un article</a>*/
/* */
/*                 {% else %}*/
/*                     <a href="{{ path('fos_user_security_login') }}"> Vous devez être loggé pour accéder à ces fonctions.</a>*/
/* */
/*                 {% endif %}*/
/*             </li>*/
/* */
/*                 {{ render(controller("TestBlogBundle:Blog:menu",{'articles_number':3})) }}*/
/* */
/* */
/*         </ul>*/
/*     </li>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* </div>*/
