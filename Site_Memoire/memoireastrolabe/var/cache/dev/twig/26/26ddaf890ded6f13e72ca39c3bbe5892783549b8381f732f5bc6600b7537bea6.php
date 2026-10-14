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

/* workflow/index.html.twig */
class __TwigTemplate_0e4f954d111af380f9182b7320ea28953d79d99e2dc72bc8e9399cb83744b829 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/extend_admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workflow/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workflow/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/extend_admin/base.html.twig", "workflow/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Création d'un Evenement - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("workflowcss");
        echo "
    ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("select2css");
        echo "
    ";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("progressBarcss");
        echo "
    ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dropifycss");
        echo "
    ";
        // line 11
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("formRequired");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <h1 class=\"main-title text-center color-dark-green\">Création d'un événement</h1>
    <div id=\"timeLine\">
        ";
        // line 19
        $this->loadTemplate("components/progressBar.html.twig", "workflow/index.html.twig", 19)->display([]);
        // line 20
        echo "    </div>
    <div class=\"responsive-carousel d-flex align-items-center pswp-gallery\" id=\"mainSlide\">
        ";
        // line 22
        $this->loadTemplate("workflow/slides/slide1.html.twig", "workflow/index.html.twig", 22)->display($context);
        // line 23
        echo "        ";
        $this->loadTemplate("workflow/slides/slide2.html.twig", "workflow/index.html.twig", 23)->display($context);
        // line 24
        echo "        ";
        $this->loadTemplate("workflow/slides/slide3.html.twig", "workflow/index.html.twig", 24)->display($context);
        // line 25
        echo "        ";
        $this->loadTemplate("workflow/slides/slide4.html.twig", "workflow/index.html.twig", 25)->display($context);
        // line 26
        echo "    </div>
    <div id=\"afterMainSlide\" class=\"d-flex mx-auto justify-content-center m-3\">
        <button id=\"progress-prev\" type=\"button\" class=\"slick-btn btn btn-outline-primary m-3\">Précédent</button>
        <button id=\"progress-next\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 35
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("workflowjs");
        echo "
    ";
        // line 36
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("progressBarjs");
        echo "
    ";
        // line 37
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dropify");
        echo "
    <script>
        var routeAddEtiquette = \"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_etiquette")), "html", null, true);
        echo "\";
        var routeAddGenreMusic = \"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_genreMusical")), "html", null, true);
        echo "\";
        var routeAddTypeEvent = \"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_typeEvenement")), "html", null, true);
        echo "\";
        var routeAddLieu = \"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_lieu")), "html", null, true);
        echo "\";
        var routeAddLabel = \"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_label")), "html", null, true);
        echo "\";
        var routeAddNat = \"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_nationalite")), "html", null, true);
        echo "\";
        var routeAddInsrtument = \"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_instrument")), "html", null, true);
        echo "\";
        var routeAddMusicien = \"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_musicien")), "html", null, true);
        echo "\";
        var routeAddGroup = \"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_groupe")), "html", null, true);
        echo "\";
        var routeVerifEvent = \"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verif_evenement")), "html", null, true);
        echo "\";
        var routeVerifPassage = \"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verif_passage")), "html", null, true);
        echo "\";
        var routeVerifMedia = \"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verif_ressource")), "html", null, true);
        echo "\";
        var routeAddEvent = \"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_event")), "html", null, true);
        echo "\";
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "workflow/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 51,  243 => 50,  239 => 49,  235 => 48,  231 => 47,  227 => 46,  223 => 45,  219 => 44,  215 => 43,  211 => 42,  207 => 41,  203 => 40,  199 => 39,  194 => 37,  190 => 36,  186 => 35,  181 => 34,  171 => 33,  156 => 26,  153 => 25,  150 => 24,  147 => 23,  145 => 22,  141 => 20,  139 => 19,  135 => 17,  125 => 16,  112 => 11,  108 => 10,  104 => 9,  100 => 8,  96 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/extend_admin/base.html.twig' %}

{% block title %} Création d'un Evenement - {{ parent() }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('workflowcss')}}
    {{ encore_entry_link_tags('select2css')}}
    {{ encore_entry_link_tags('progressBarcss')}}
    {{ encore_entry_link_tags('dropifycss')}}
    {{ encore_entry_link_tags('formRequired')}}

{% endblock %}
{# {% form_theme eventForm  'form/custom_event_ressources.html.twig'%} #}

{% block body %}
    <h1 class=\"main-title text-center color-dark-green\">Création d'un événement</h1>
    <div id=\"timeLine\">
        {% include 'components/progressBar.html.twig' only %}
    </div>
    <div class=\"responsive-carousel d-flex align-items-center pswp-gallery\" id=\"mainSlide\">
        {% include 'workflow/slides/slide1.html.twig' %}
        {% include 'workflow/slides/slide2.html.twig' %}
        {% include 'workflow/slides/slide3.html.twig' %}
        {% include 'workflow/slides/slide4.html.twig' %}
    </div>
    <div id=\"afterMainSlide\" class=\"d-flex mx-auto justify-content-center m-3\">
        <button id=\"progress-prev\" type=\"button\" class=\"slick-btn btn btn-outline-primary m-3\">Précédent</button>
        <button id=\"progress-next\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags('workflowjs') }}
    {{ encore_entry_script_tags('progressBarjs') }}
    {{ encore_entry_script_tags('dropify') }}
    <script>
        var routeAddEtiquette = \"{{ (absolute_url(path('add_etiquette') ))}}\";
        var routeAddGenreMusic = \"{{ (absolute_url(path('add_genreMusical') ))}}\";
        var routeAddTypeEvent = \"{{ (absolute_url(path('add_typeEvenement') ))}}\";
        var routeAddLieu = \"{{ (absolute_url(path('add_lieu') ))}}\";
        var routeAddLabel = \"{{ (absolute_url(path('add_label') ))}}\";
        var routeAddNat = \"{{ (absolute_url(path('add_nationalite') ))}}\";
        var routeAddInsrtument = \"{{ (absolute_url(path('add_instrument') ))}}\";
        var routeAddMusicien = \"{{ (absolute_url(path('add_musicien') ))}}\";
        var routeAddGroup = \"{{ (absolute_url(path('add_groupe') ))}}\";
        var routeVerifEvent = \"{{ (absolute_url(path('verif_evenement') ))}}\";
        var routeVerifPassage = \"{{ (absolute_url(path('verif_passage') ))}}\";
        var routeVerifMedia = \"{{ (absolute_url(path('verif_ressource') ))}}\";
        var routeAddEvent = \"{{(absolute_url(path('add_event')))}}\";
    </script>
{% endblock %}", "workflow/index.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\workflow\\index.html.twig");
    }
}
