<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/dashboard.html.twig */
class __TwigTemplate_c75a8c756a26377b1c0b332a2b0f5bc4be98c4d5716c0063cc108491da0e4500 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        // line 3
        $context["url_evenement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\EvenementCrudController"], "method", false, false, false, 3), "setAction", [0 => "index"], "method", false, false, false, 3);
        // line 4
        $context["url_groupe"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\GroupeCrudController"], "method", false, false, false, 4), "setAction", [0 => "index"], "method", false, false, false, 4);
        // line 5
        $context["url_musique"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\GenreMusicalCrudController"], "method", false, false, false, 5), "setAction", [0 => "index"], "method", false, false, false, 5);
        // line 6
        $context["url_ressource"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\RessourceCrudController"], "method", false, false, false, 6), "setAction", [0 => "index"], "method", false, false, false, 6);
        // line 7
        $context["url_admin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\UserCrudController"], "method", false, false, false, 7), "setAction", [0 => "index"], "method", false, false, false, 7);
        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 10
        echo "<title>Administration - MemoireAstrolabe</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 14
        echo "<h1 class=\"text-center mb-5\">Administration</h1>
<div class=\"custom-container row w-100 m-0\">
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url_evenement"]) || array_key_exists("url_evenement", $context) ? $context["url_evenement"] : (function () { throw new RuntimeError('Variable "url_evenement" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/evenement.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Événement
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url_groupe"]) || array_key_exists("url_groupe", $context) ? $context["url_groupe"] : (function () { throw new RuntimeError('Variable "url_groupe" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/groupe.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Groupe
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url_musique"]) || array_key_exists("url_musique", $context) ? $context["url_musique"] : (function () { throw new RuntimeError('Variable "url_musique" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/musique.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Musique
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["url_ressource"]) || array_key_exists("url_ressource", $context) ? $context["url_ressource"] : (function () { throw new RuntimeError('Variable "url_ressource" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/ressources.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Médias
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["url_admin"]) || array_key_exists("url_admin", $context) ? $context["url_admin"] : (function () { throw new RuntimeError('Variable "url_admin" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/administration.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Administration
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  173 => 61,  160 => 51,  156 => 50,  143 => 40,  139 => 39,  126 => 29,  122 => 28,  109 => 18,  105 => 17,  100 => 14,  90 => 13,  80 => 10,  70 => 9,  59 => 1,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% set url_evenement = ea_url().setController('App\\\\Controller\\\\Admin\\\\EvenementCrudController').setAction('index') %}
{% set url_groupe    = ea_url().setController('App\\\\Controller\\\\Admin\\\\GroupeCrudController').setAction('index') %}
{% set url_musique   = ea_url().setController('App\\\\Controller\\\\Admin\\\\GenreMusicalCrudController').setAction('index') %}
{% set url_ressource = ea_url().setController('App\\\\Controller\\\\Admin\\\\RessourceCrudController').setAction('index') %}
{% set url_admin     = ea_url().setController('App\\\\Controller\\\\Admin\\\\UserCrudController').setAction('index') %}

{% block page_title -%}
    <title>Administration - MemoireAstrolabe</title>
{%- endblock %}

{% block page_content %}
<h1 class=\"text-center mb-5\">Administration</h1>
<div class=\"custom-container row w-100 m-0\">
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"{{ url_evenement }}\" class=\"h-100 w-100\">
            <div style=\"background-image: url({{ asset('/build/images/evenement.png') }})\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Événement
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"{{ url_groupe }}\" class=\"h-100 w-100\">
            <div style=\"background-image: url({{ asset('/build/images/groupe.png') }})\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Groupe
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"{{ url_musique }}\" class=\"h-100 w-100\">
            <div style=\"background-image: url({{ asset('/build/images/musique.png') }})\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Musique
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"{{ url_ressource }}\" class=\"h-100 w-100\">
            <div style=\"background-image: url({{ asset('/build/images/ressources.png') }})\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Médias
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"{{ url_admin }}\" class=\"h-100 w-100\">
            <div style=\"background-image: url({{ asset('/build/images/administration.png') }})\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Administration
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
{% endblock %}", "admin/dashboard.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/admin/dashboard.html.twig");
    }
}
