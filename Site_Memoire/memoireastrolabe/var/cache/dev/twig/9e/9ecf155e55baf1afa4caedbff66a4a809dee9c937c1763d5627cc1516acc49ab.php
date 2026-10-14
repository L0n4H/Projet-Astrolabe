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

/* evenements/listeFront.html.twig */
class __TwigTemplate_316bbce115e59f98b98e2ff107254dcdbe0b7309243128565d156d6bc378d45a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/listeFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/listeFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/listeFront.html.twig", 1);
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

        echo "Evenements - ";
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("cardscss");
        echo "
    ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("select2css");
        echo "
    ";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("evenementscss");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"filters\">
        <select name=\"event_annee\" id=\"event_annee\" class=\"select2 annee\">
            <option value=\"\">ANNÉE</option>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["index"] => $context["date"]) {
            // line 17
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </select>
        <select name=\"event_trimestre\" id=\"event_trimestre\" class=\"select2 trimestre\">
            <option value=\"\">TRIMESTRE</option>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trimestres"]) || array_key_exists("trimestres", $context) ? $context["trimestres"] : (function () { throw new RuntimeError('Variable "trimestres" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["trimestre"] => $context["values"]) {
            // line 23
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, json_encode($context["values"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["trimestre"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['trimestre'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </select>
        <div class=\"events_genre\">
            <select name=\"event_genre\" id=\"event_genre\" class=\"select2 genre\">
                <option value=\"\">STYLE MUSICAL</option>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["index"] => $context["genre"]) {
            // line 30
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </select>
            <div class=\"event_genre_strict\">
                <input type=\"checkbox\" name=\"event_genre_strict\" id=\"event_genre_strict\">
                <label for=\"event_genre_strict\">Rechercher les genres proches</label>
            </div>
        </div>
        <select name=\"event_type\" id=\"event_type\" class=\"select2 type\">
            <option value=\"\">TYPE</option>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["index"] => $context["type"]) {
            // line 41
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "label", [], "any", false, false, false, 41), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </select>
        <select name=\"event_lieux\" id=\"event_lieux\" class=\"select2 lieux\">
            <option value=\"\">LIEU</option>
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["index"] => $context["lieu"]) {
            // line 47
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
                    (";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "CP", [], "any", false, false, false, 48), "html", null, true);
            echo ") ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "ville", [], "any", false, false, false, 48), "html", null, true);
            echo "
                    ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["lieu"], "nomBatiment", [], "any", false, false, false, 49)) {
                // line 50
                echo "                        | ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "nomBatiment", [], "any", false, false, false, 50), "html", null, true);
                echo "
                    ";
            }
            // line 52
            echo "                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </select>
        <div class=\"search ms-auto\">
            <input type=\"search\" name=\"event_search\" id=\"event_search\" placeholder=\"Rechercher...\" class=\"search-input\">
        </div>
    </div>

    <div id=\"container-event\">
        <div class=\"row\" id=\"container-evenement\">
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEvenements"]) || array_key_exists("listeEvenements", $context) ? $context["listeEvenements"] : (function () { throw new RuntimeError('Variable "listeEvenements" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 63
            echo "                ";
            $this->loadTemplate("components/card.html.twig", "evenements/listeFront.html.twig", 63)->display(twig_to_array(["evenement" => $context["evenement"]]));
            // line 64
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </div>
    </div>

    <div class=\"d-flex flex-wrap flex-wrap justify-content-center p-5\" id=\"pagination\">
        ";
        // line 69
        $this->loadTemplate("components/pagination.html.twig", "evenements/listeFront.html.twig", 69)->display($context);
        // line 70
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var search_route = \"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_evenements");
        echo "\";
        var card_route = \"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_card");
        echo "\";
        var categorie_musicale_route = \"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_categoriesMusicales");
        echo "\";
    </script>
    ";
        // line 80
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("filtersjs");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenements/listeFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 80,  313 => 78,  309 => 77,  305 => 76,  299 => 74,  289 => 73,  278 => 70,  276 => 69,  270 => 65,  264 => 64,  261 => 63,  257 => 62,  247 => 54,  240 => 52,  234 => 50,  232 => 49,  226 => 48,  221 => 47,  217 => 46,  212 => 43,  201 => 41,  197 => 40,  187 => 32,  176 => 30,  172 => 29,  166 => 25,  155 => 23,  151 => 22,  146 => 19,  135 => 17,  131 => 16,  126 => 13,  116 => 12,  104 => 9,  100 => 8,  96 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Evenements - {{ parent() }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('cardscss') }}
    {{ encore_entry_link_tags('select2css') }}
    {{ encore_entry_link_tags('evenementscss') }}
{% endblock %}

{% block body %}
    <div class=\"filters\">
        <select name=\"event_annee\" id=\"event_annee\" class=\"select2 annee\">
            <option value=\"\">ANNÉE</option>
            {% for index, date in dates %}
                <option value=\"{{date}}\">{{date}}</option>
            {% endfor %}
        </select>
        <select name=\"event_trimestre\" id=\"event_trimestre\" class=\"select2 trimestre\">
            <option value=\"\">TRIMESTRE</option>
            {% for trimestre, values in trimestres %}
                <option value=\"{{values|json_encode()}}\">{{trimestre}}</option>
            {% endfor %}
        </select>
        <div class=\"events_genre\">
            <select name=\"event_genre\" id=\"event_genre\" class=\"select2 genre\">
                <option value=\"\">STYLE MUSICAL</option>
                {% for index, genre in genres %}
                    <option value=\"{{genre.id}}\">{{genre.nom}}</option>
                {% endfor %}
            </select>
            <div class=\"event_genre_strict\">
                <input type=\"checkbox\" name=\"event_genre_strict\" id=\"event_genre_strict\">
                <label for=\"event_genre_strict\">Rechercher les genres proches</label>
            </div>
        </div>
        <select name=\"event_type\" id=\"event_type\" class=\"select2 type\">
            <option value=\"\">TYPE</option>
            {% for index, type in types %}
                <option value=\"{{type.id}}\">{{type.label}}</option>
            {% endfor %}
        </select>
        <select name=\"event_lieux\" id=\"event_lieux\" class=\"select2 lieux\">
            <option value=\"\">LIEU</option>
            {% for index, lieu in lieux %}
                <option value=\"{{lieu.id}}\">
                    ({{lieu.CP}}) {{lieu.ville}}
                    {% if lieu.nomBatiment %}
                        | {{lieu.nomBatiment}}
                    {% endif %}
                </option>
            {% endfor %}
        </select>
        <div class=\"search ms-auto\">
            <input type=\"search\" name=\"event_search\" id=\"event_search\" placeholder=\"Rechercher...\" class=\"search-input\">
        </div>
    </div>

    <div id=\"container-event\">
        <div class=\"row\" id=\"container-evenement\">
            {% for evenement in listeEvenements %}
                {% include 'components/card.html.twig' with {'evenement': evenement} only %}
            {% endfor %}
        </div>
    </div>

    <div class=\"d-flex flex-wrap flex-wrap justify-content-center p-5\" id=\"pagination\">
        {% include 'components/pagination.html.twig'%}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        var search_route = \"{{ path('search_evenements') }}\";
        var card_route = \"{{ path('event_card') }}\";
        var categorie_musicale_route = \"{{ path('liste_categoriesMusicales') }}\";
    </script>
    {{ encore_entry_script_tags('filtersjs') }}
{% endblock %}", "evenements/listeFront.html.twig", "/home/lastrolalx/memoireastrolabe/templates/evenements/listeFront.html.twig");
    }
}
