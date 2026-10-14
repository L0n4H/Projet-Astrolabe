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

/* nationalites/listeApi.html.twig */
class __TwigTemplate_9b4f709029c8d30a1aeba3350719f05a27450f9bc1f262965909a47ca6a1c685 extends Template
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
        $context["nationalites"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeNationalite"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nationalite"]) {
            // line 4
            echo "\t";
            $context["groupes"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nationalite"], "getVisibleGroupes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 6
                echo "\t\t";
                $context["labels"] = [];
                // line 7
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleLabels", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 8
                    echo "\t\t\t";
                    $context["labelArr"] = [twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 8) => ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 8), "nom" => twig_get_attribute($this->env, $this->source, $context["label"], "getNom", [], "any", false, false, false, 8), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["label"], "getDateCreation", [], "any", false, false, false, 8), "description" => twig_get_attribute($this->env, $this->source, $context["label"], "getDescription", [], "any", false, false, false, 8), "logo" => twig_get_attribute($this->env, $this->source, $context["label"], "getLogo", [], "any", false, false, false, 8), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 8)]))]];
                    // line 9
                    echo "\t\t\t";
                    $context["labels"] = twig_array_merge(($context["labels"] ?? null), ($context["labelArr"] ?? null));
                    // line 10
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t";
                $context["genresMusicales"] = [];
                // line 12
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleGenresMusicaux", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["genreMusical"]) {
                    // line 13
                    echo "\t\t\t";
                    $context["categoriesMusicales"] = [];
                    // line 14
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getCategorieMusicales", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorieMusical"]) {
                        // line 15
                        echo "\t\t\t\t";
                        $context["categorieMusicaleArr"] = [twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 15) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 15), "nom" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getNom", [], "any", false, false, false, 15), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 15)]))]];
                        // line 16
                        echo "\t\t\t\t";
                        $context["categoriesMusicales"] = twig_array_merge(($context["categoriesMusicales"] ?? null), ($context["categorieMusicaleArr"] ?? null));
                        // line 17
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "\t\t\t";
                    $context["genreMusicalArray"] = [twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 18) => ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 18), "nom" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getNom", [], "any", false, false, false, 18), "categoriesMusicales" => ($context["categoriesMusicales"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 18)]))]];
                    // line 19
                    echo "\t\t\t";
                    $context["genresMusicales"] = twig_array_merge(($context["genresMusicales"] ?? null), ($context["genreMusicalArray"] ?? null));
                    // line 20
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genreMusical'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t";
                $context["etiquettesGroupe"] = [];
                // line 22
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleEtiquettes", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                    // line 23
                    echo "\t\t\t";
                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 23) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 23), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 23), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 23)]))]];
                    // line 24
                    echo "\t\t\t";
                    $context["etiquettesGroupe"] = twig_array_merge(($context["etiquettesGroupe"] ?? null), ($context["etiquetteArray"] ?? null));
                    // line 25
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t";
                $context["groupeArray"] = [twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 26) => ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 26), "nom" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getNom", [], "any", false, false, false, 26), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getDateCreation", [], "any", false, false, false, 26), "biographie" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getBiographie", [], "any", false, false, false, 26), "lienImage" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getLienImage", [], "any", false, false, false, 26), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 27
$context["groupe"], "getImage", [], "any", false, false, false, 27))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["groupe"], "imageFile"))) : ("")), "etiquettes" =>                 // line 28
($context["etiquettesGroupe"] ?? null), "genresMusicaux" => ($context["genresMusicales"] ?? null), "labels" => ($context["labels"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 28)]))]];
                // line 29
                echo "\t\t";
                $context["groupes"] = twig_array_merge(($context["groupes"] ?? null), ($context["groupeArray"] ?? null));
                // line 30
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t";
            $context["musiciens"] = [];
            // line 32
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nationalite"], "getVisibleMusiciens", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["musicien"]) {
                // line 33
                echo "\t\t";
                $context["etiquettesMus"] = [];
                // line 34
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["musicien"], "getVisibleEtiquettes", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                    // line 35
                    echo "\t\t\t";
                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 35), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35)]))]];
                    // line 36
                    echo "\t\t\t";
                    $context["etiquettesMus"] = twig_array_merge(($context["etiquettesMus"] ?? null), ($context["etiquetteArray"] ?? null));
                    // line 37
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t";
                $context["musicienArray"] = [twig_get_attribute($this->env, $this->source, $context["musicien"], "getId", [], "any", false, false, false, 38) => ["id" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getId", [], "any", false, false, false, 38), "nom" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getNom", [], "any", false, false, false, 38), "prenom" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getPrenom", [], "any", false, false, false, 38), "nomScene" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getNomScene", [], "any", false, false, false, 38), "dateNaisance" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getDateNaissance", [], "any", false, false, false, 38), "lienImage" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getLienImage", [], "any", false, false, false, 38), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 39
$context["musicien"], "getImage", [], "any", false, false, false, 39))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["musicien"], "imageFile"))) : ("")), "etiquettes" =>                 // line 40
($context["etiquettesMus"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getId", [], "any", false, false, false, 40)]))]];
                // line 41
                echo "\t\t";
                $context["musiciens"] = twig_array_merge(($context["musiciens"] ?? null), ($context["musicienArray"] ?? null));
                // line 42
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musicien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t";
            // line 44
            echo "\t";
            $context["nationaliteArr"] = [twig_get_attribute($this->env, $this->source, $context["nationalite"], "getId", [], "any", false, false, false, 44) => ["id" => twig_get_attribute($this->env, $this->source, $context["nationalite"], "getId", [], "any", false, false, false, 44), "nom" => twig_get_attribute($this->env, $this->source, $context["nationalite"], "getNom", [], "any", false, false, false, 44), "groupes" => ($context["groupes"] ?? null), "musiciens" => ($context["musiciens"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_nationalite", ["id" => twig_get_attribute($this->env, $this->source, $context["nationalite"], "getId", [], "any", false, false, false, 44)]))]];
            // line 45
            echo "\t";
            $context["nationalites"] = twig_array_merge(($context["nationalites"] ?? null), ($context["nationaliteArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nationalite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["nationalites"] ?? null));
        echo "
";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_4_);
    }

    public function getTemplateName()
    {
        return "nationalites/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 1,  201 => 47,  194 => 45,  191 => 44,  189 => 43,  183 => 42,  180 => 41,  178 => 40,  177 => 39,  175 => 38,  169 => 37,  166 => 36,  163 => 35,  158 => 34,  155 => 33,  150 => 32,  147 => 31,  141 => 30,  138 => 29,  136 => 28,  135 => 27,  133 => 26,  127 => 25,  124 => 24,  121 => 23,  116 => 22,  113 => 21,  107 => 20,  104 => 19,  101 => 18,  95 => 17,  92 => 16,  89 => 15,  84 => 14,  81 => 13,  76 => 12,  73 => 11,  67 => 10,  64 => 9,  61 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nationalites/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/nationalites/listeApi.html.twig");
    }
}
