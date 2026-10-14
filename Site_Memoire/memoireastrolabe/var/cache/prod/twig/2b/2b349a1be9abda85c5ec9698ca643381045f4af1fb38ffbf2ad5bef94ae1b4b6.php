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

/* etiquettes/listeApi.html.twig */
class __TwigTemplate_9727c1b78d9f12571a2f75e8d334ab1cd0db72adb1c0071bd0c4fd2fdd03e265 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start(function () { return ''; });
        // line 2
        $context["etiquettesArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeEtiquettes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
            // line 4
            echo "\t";
            $context["ressources"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etiquette"], "getVisibleRessources", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                // line 6
                echo "\t\t";
                $context["ressourceArray"] = [twig_get_attribute($this->env, $this->source,                 // line 8
$context["ressource"], "getId", [], "any", false, false, false, 8) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 9
$context["ressource"], "getId", [], "any", false, false, false, 9), "lien" => twig_get_attribute($this->env, $this->source,                 // line 10
$context["ressource"], "getLien", [], "any", false, false, false, 10), "titre" => twig_get_attribute($this->env, $this->source,                 // line 11
$context["ressource"], "getTitre", [], "any", false, false, false, 11), "nomFile" => twig_get_attribute($this->env, $this->source,                 // line 12
$context["ressource"], "getNom", [], "any", false, false, false, 12), "type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 13
$context["ressource"], "getType", [], "any", false, false, false, 13), "getLabel", [], "any", false, false, false, 13), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_ressource", ["id" => twig_get_attribute($this->env, $this->source,                 // line 14
$context["ressource"], "getId", [], "any", false, false, false, 14)]))]];
                // line 17
                echo "\t\t";
                $context["ressources"] = twig_array_merge(($context["ressources"] ?? null), ($context["ressourceArray"] ?? null));
                // line 18
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t";
            $context["musiciens"] = [];
            // line 20
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etiquette"], "getVisibleMusiciens", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["musicien"]) {
                // line 21
                echo "
\t\t";
                // line 22
                $context["musicienArr"] = [twig_get_attribute($this->env, $this->source,                 // line 24
$context["musicien"], "getId", [], "any", false, false, false, 24) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 25
$context["musicien"], "getId", [], "any", false, false, false, 25), "nom" => twig_get_attribute($this->env, $this->source,                 // line 26
$context["musicien"], "getNom", [], "any", false, false, false, 26), "prenom" => twig_get_attribute($this->env, $this->source,                 // line 27
$context["musicien"], "getPrenom", [], "any", false, false, false, 27), "lienImage" => twig_get_attribute($this->env, $this->source,                 // line 28
$context["musicien"], "getLienImage", [], "any", false, false, false, 28), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 29
$context["musicien"], "getImage", [], "any", false, false, false, 29))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["musicien"], "imageFile"))) : ("")), "nomScene" => twig_get_attribute($this->env, $this->source,                 // line 30
$context["musicien"], "getNomScene", [], "any", false, false, false, 30), "dateNaissance" => twig_get_attribute($this->env, $this->source,                 // line 31
$context["musicien"], "getDateNaissance", [], "any", false, false, false, 31), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source,                 // line 32
$context["musicien"], "getId", [], "any", false, false, false, 32)]))]];
                // line 36
                echo "\t\t";
                $context["musiciens"] = twig_array_merge(($context["musiciens"] ?? null), ($context["musicienArr"] ?? null));
                // line 37
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musicien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t";
            $context["groupes"] = [];
            // line 39
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etiquette"], "getVisibleGroupes", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 40
                echo "\t\t";
                $context["groupe"] = [twig_get_attribute($this->env, $this->source,                 // line 43
$context["groupe"], "getId", [], "any", false, false, false, 43) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 44
$context["groupe"], "getId", [], "any", false, false, false, 44), "nom" => twig_get_attribute($this->env, $this->source,                 // line 45
$context["groupe"], "getNom", [], "any", false, false, false, 45), "dateCreation" => twig_get_attribute($this->env, $this->source,                 // line 46
$context["groupe"], "dateCreation", [], "any", false, false, false, 46), "lienImage" => twig_get_attribute($this->env, $this->source,                 // line 47
$context["groupe"], "getLienImage", [], "any", false, false, false, 47), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 48
$context["groupe"], "getImage", [], "any", false, false, false, 48))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["groupe"], "imageFile"))) : ("")), "biographie" => twig_get_attribute($this->env, $this->source,                 // line 49
$context["groupe"], "getBiographie", [], "any", false, false, false, 49), "image" => twig_get_attribute($this->env, $this->source,                 // line 50
$context["groupe"], "getImage", [], "any", false, false, false, 50), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 51
$context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 51))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 51), "getNom", [], "any", false, false, false, 51)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source,                 // line 52
$context["groupe"], "getId", [], "any", false, false, false, 52)]))]];
                // line 56
                echo "\t\t";
                $context["groupes"] = twig_array_merge(($context["groupes"] ?? null), $context["groupe"]);
                // line 57
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
    ";
            // line 59
            $context["evenements"] = [];
            // line 60
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etiquette"], "getVisibleEvenements", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 61
                echo "\t\t";
                $context["evenementArray"] = [twig_get_attribute($this->env, $this->source,                 // line 63
$context["evenement"], "getId", [], "any", false, false, false, 63) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 65
$context["evenement"], "getId", [], "any", false, false, false, 65), "titre" => twig_get_attribute($this->env, $this->source,                 // line 66
$context["evenement"], "getTitre", [], "any", false, false, false, 66), "dateDebut" => twig_get_attribute($this->env, $this->source,                 // line 67
$context["evenement"], "getDateDebut", [], "any", false, false, false, 67), "dateFin" => twig_get_attribute($this->env, $this->source,                 // line 68
$context["evenement"], "getDateFin", [], "any", false, false, false, 68), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 69
$context["evenement"], "getImage", [], "any", false, false, false, 69))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["evenement"], "imageFile"))) : ("")), "lienImage" => twig_get_attribute($this->env, $this->source,                 // line 70
$context["evenement"], "getLienImage", [], "any", false, false, false, 70), "description" => twig_get_attribute($this->env, $this->source,                 // line 71
$context["evenement"], "getDescription", [], "any", false, false, false, 71), "type" => (((0 !== twig_compare(twig_get_attribute($this->env, $this->source,                 // line 72
$context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 72), null))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 72), "getLabel", [], "any", false, false, false, 72)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source,                 // line 73
$context["evenement"], "getId", [], "any", false, false, false, 73)]))]];
                // line 76
                echo "\t\t";
                $context["evenements"] = twig_array_merge(($context["evenements"] ?? null), ($context["evenementArray"] ?? null));
                // line 77
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
\t";
            // line 79
            $context["etiquetteArr"] = [twig_get_attribute($this->env, $this->source,             // line 81
$context["etiquette"], "getId", [], "any", false, false, false, 81) => ["id" => twig_get_attribute($this->env, $this->source,             // line 82
$context["etiquette"], "getId", [], "any", false, false, false, 82), "motsCles" => twig_get_attribute($this->env, $this->source,             // line 83
$context["etiquette"], "getMotsCles", [], "any", false, false, false, 83), "groupes" =>             // line 84
($context["groupes"] ?? null), "ressources" =>             // line 85
($context["ressources"] ?? null), "evenements" =>             // line 86
($context["evenements"] ?? null), "musiciens" =>             // line 87
($context["musiciens"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source,             // line 88
$context["etiquette"], "getId", [], "any", false, false, false, 88)]))]];
            // line 91
            echo "\t";
            $context["etiquettesArr"] = twig_array_merge(($context["etiquettesArr"] ?? null), ($context["etiquetteArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["etiquettesArr"] ?? null));
        echo "
";
        $___internal_parse_10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_10_);
    }

    public function getTemplateName()
    {
        return "etiquettes/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 1,  185 => 93,  178 => 91,  176 => 88,  175 => 87,  174 => 86,  173 => 85,  172 => 84,  171 => 83,  170 => 82,  169 => 81,  168 => 79,  165 => 78,  159 => 77,  156 => 76,  154 => 73,  153 => 72,  152 => 71,  151 => 70,  150 => 69,  149 => 68,  148 => 67,  147 => 66,  146 => 65,  145 => 63,  143 => 61,  138 => 60,  136 => 59,  133 => 58,  127 => 57,  124 => 56,  122 => 52,  121 => 51,  120 => 50,  119 => 49,  118 => 48,  117 => 47,  116 => 46,  115 => 45,  114 => 44,  113 => 43,  111 => 40,  106 => 39,  103 => 38,  97 => 37,  94 => 36,  92 => 32,  91 => 31,  90 => 30,  89 => 29,  88 => 28,  87 => 27,  86 => 26,  85 => 25,  84 => 24,  83 => 22,  80 => 21,  75 => 20,  72 => 19,  66 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "etiquettes/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/etiquettes/listeApi.html.twig");
    }
}
