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
class __TwigTemplate_dfaf3d1aee325a46e18714ff1c4006e1443da39c12d3a06c59834762273c8271 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "evenements/listeFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Evenements - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <div class=\"filters\">
        <select name=\"event_annee\" id=\"event_annee\" class=\"select2 annee\">
            <option value=\"\">ANNÉE</option>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dates"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["trimestres"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["listeEvenements"] ?? null));
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
    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  264 => 80,  259 => 78,  255 => 77,  251 => 76,  245 => 74,  241 => 73,  236 => 70,  234 => 69,  228 => 65,  222 => 64,  219 => 63,  215 => 62,  205 => 54,  198 => 52,  192 => 50,  190 => 49,  184 => 48,  179 => 47,  175 => 46,  170 => 43,  159 => 41,  155 => 40,  145 => 32,  134 => 30,  130 => 29,  124 => 25,  113 => 23,  109 => 22,  104 => 19,  93 => 17,  89 => 16,  84 => 13,  80 => 12,  74 => 9,  70 => 8,  66 => 7,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evenements/listeFront.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/evenements/listeFront.html.twig");
    }
}
