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

/* ressources/listeApi.html.twig */
class __TwigTemplate_5f61751080411261eb0dff9d4e9565f72e4831f128a58590c2a756df1f5fdd5c extends Template
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
        $context["ressources"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeRessources"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 4
            echo "\t";
            $context["evenementsArr"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ressource"], "getVisibleEvenements", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 6
                echo "\t\t";
                $context["etiquettes"] = [];
                // line 7
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleEtiquettes", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                    // line 8
                    echo "\t\t\t";
                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 8) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 8), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 8), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 8)]))]];
                    // line 9
                    echo "\t\t\t";
                    $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                    // line 10
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 11))) {
                    // line 12
                    echo "\t\t\t";
                    $context["lieu"] = ["ville" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 12), "getVille", [], "any", false, false, false, 12), "CP" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 12), "getCP", [], "any", false, false, false, 12), "adresse" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 12), "getAdresse", [], "any", false, false, false, 12), "nomBatiment" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 12), "getNomBatiment", [], "any", false, false, false, 12), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_lieu", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 12), "getId", [], "any", false, false, false, 12)]))];
                    // line 13
                    echo "\t\t";
                } else {
                    // line 14
                    echo "\t\t\t";
                    $context["lieu"] = null;
                    // line 15
                    echo "\t\t";
                }
                // line 16
                echo "\t\t";
                $context["passages"] = [];
                // line 17
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisiblePassages", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                    // line 18
                    echo "\t\t\t";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 18))) {
                        // line 19
                        echo "\t\t\t\t";
                        $context["etiquettes"] = [];
                        // line 20
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 20), "getVisibleEtiquettes", [], "any", false, false, false, 20));
                        foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                            // line 21
                            echo "\t\t\t\t\t";
                            $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 21) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 21), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 21), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 21)]))]];
                            // line 22
                            echo "\t\t\t\t\t";
                            $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                            // line 23
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "\t\t\t\t";
                        $context["genres"] = [];
                        // line 25
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 25), "getVisibleGenresMusicaux", [], "any", false, false, false, 25));
                        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                            // line 26
                            echo "\t\t\t\t\t";
                            $context["genreArray"] = [twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 26) => ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 26), "nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "any", false, false, false, 26), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 26)]))]];
                            // line 27
                            echo "\t\t\t\t\t";
                            $context["genres"] = twig_array_merge(($context["genres"] ?? null), ($context["genreArray"] ?? null));
                            // line 28
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "\t\t\t\t";
                        $context["labels"] = [];
                        // line 30
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 30), "getVisibleLabels", [], "any", false, false, false, 30));
                        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                            // line 31
                            echo "\t\t\t\t\t";
                            $context["labelArray"] = [twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 31) => ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 31), "nom" => twig_get_attribute($this->env, $this->source, $context["label"], "getNom", [], "any", false, false, false, 31), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 31)]))]];
                            // line 32
                            echo "\t\t\t\t\t";
                            $context["labels"] = twig_array_merge(($context["labels"] ?? null), ($context["labelArray"] ?? null));
                            // line 33
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "\t\t\t\t";
                        $context["membres"] = [];
                        // line 35
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 35), "getVisibleMembres", [], "any", false, false, false, 35));
                        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                            // line 36
                            echo "\t\t\t\t\t";
                            $context["etiquettes"] = [];
                            // line 37
                            echo "\t\t\t\t\t";
                            if ( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 37))) {
                                // line 38
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 38), "getVisibleEtiquettes", [], "any", false, false, false, 38));
                                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                                    // line 39
                                    echo "\t\t\t\t\t\t\t";
                                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 39) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 39), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 39), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 39)]))]];
                                    // line 40
                                    echo "\t\t\t\t\t\t\t";
                                    $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                                    // line 41
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 42
                                echo "\t\t\t\t\t\t";
                                $context["musicien"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 42), "getId", [], "any", false, false, false, 42), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 42), "getNom", [], "any", false, false, false, 42), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 42), "getPrenom", [], "any", false, false, false, 42), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 42), "getNomScene", [], "any", false, false, false, 42), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 42), "getDateNaissance", [], "any", false, false, false, 42), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 42), "getLienImage", [], "any", false, false, false, 42), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                 // line 43
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 43), "getImage", [], "any", false, false, false, 43))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 43), "imageFile"))) : ("")), "etiquettes" =>                                 // line 44
($context["etiquettes"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 44), "getId", [], "any", false, false, false, 44)]))];
                                // line 45
                                echo "\t\t\t\t\t";
                            } else {
                                // line 46
                                echo "\t\t\t\t\t\t";
                                $context["musicien"] = [];
                                // line 47
                                echo "\t\t\t\t\t";
                            }
                            // line 48
                            echo "\t\t\t\t\t";
                            $context["instruments"] = [];
                            // line 49
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleInstruments", [], "any", false, false, false, 49));
                            foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
                                // line 50
                                echo "\t\t\t\t\t\t";
                                $context["instrumentArray"] = [twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 50) => ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 50), "nom" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getNom", [], "any", false, false, false, 50), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 50)]))]];
                                // line 51
                                echo "\t\t\t\t\t\t";
                                $context["instruments"] = twig_array_merge(($context["instruments"] ?? null), ($context["instrumentArray"] ?? null));
                                // line 52
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 53
                            echo "\t\t\t\t\t";
                            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 53) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 53), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 53), "musicien" => ($context["musicien"] ?? null), "instruments" => ($context["instruments"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 53)]))]];
                            // line 54
                            echo "\t\t\t\t\t";
                            $context["membres"] = twig_array_merge(($context["membres"] ?? null), ($context["membreArray"] ?? null));
                            // line 55
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 56
                        echo "\t\t\t\t";
                        $context["groupe"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 58
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 58), "getId", [], "any", false, false, false, 58), "dateCreation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 59
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 59), "getDateCreation", [], "any", false, false, false, 59), "biographie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 60
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 60), "getBiographie", [], "any", false, false, false, 60), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 61
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 61), "getLienImage", [], "any", false, false, false, 61), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 62
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 62), "getImage", [], "any", false, false, false, 62))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 62), "imageFile"))) : ("")), "etiquettes" =>                         // line 63
($context["etiquettes"] ?? null), "genreMusicaux" =>                         // line 64
($context["genres"] ?? null), "labels" =>                         // line 65
($context["labels"] ?? null), "membres" =>                         // line 66
($context["membres"] ?? null), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 67
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 67), "getVisibleNationalite", [], "any", false, false, false, 67))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 67), "getVisibleNationalite", [], "any", false, false, false, 67), "getNom", [], "any", false, false, false, 67)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 68
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 68), "getId", [], "any", false, false, false, 68)]))];
                        // line 69
                        echo "\t\t\t";
                    } else {
                        // line 70
                        echo "\t\t\t\t";
                        $context["groupe"] = [];
                        // line 71
                        echo "\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t";
                    $context["passageArray"] = [twig_get_attribute($this->env, $this->source,                     // line 73
$context["passage"], "getId", [], "any", false, false, false, 73) => ["id" => twig_get_attribute($this->env, $this->source,                     // line 75
$context["passage"], "getId", [], "any", false, false, false, 75), "dateDebut" => (( !(null === twig_get_attribute($this->env, $this->source,                     // line 76
$context["passage"], "getDateDebut", [], "any", false, false, false, 76))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 76), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 76)) : (null)), "dateFin" => (( !(null === twig_get_attribute($this->env, $this->source,                     // line 77
$context["passage"], "getDateFin", [], "any", false, false, false, 77))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 77), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 77)) : (null)), "groupe" =>                     // line 78
($context["groupe"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_passage", ["id" => twig_get_attribute($this->env, $this->source,                     // line 79
$context["passage"], "getId", [], "any", false, false, false, 79)]))]];
                    // line 81
                    echo "\t\t\t";
                    $context["passages"] = twig_array_merge(($context["passages"] ?? null), ($context["passageArray"] ?? null));
                    // line 82
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "\t\t";
                $context["evenementArr"] = ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 83), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateDebut", [], "any", false, false, false, 83), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 83), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 83), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 83), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 83), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 83), "etiquettes" => ($context["etiquettes"] ?? null), "lieu" => ($context["lieu"] ?? null), "passages" => ($context["passages"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 83)]))];
                // line 84
                echo "\t\t";
                $context["evenementsArr"] = twig_array_merge(($context["evenementsArr"] ?? null), ($context["evenementArr"] ?? null));
                // line 85
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t";
            $context["etiquettesRess"] = [];
            // line 87
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ressource"], "getVisibleEtiquettes", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                // line 88
                echo "\t\t";
                $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 88) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 88), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 88), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 88)]))]];
                // line 89
                echo "\t\t";
                $context["etiquettesRess"] = twig_array_merge(($context["etiquettesRess"] ?? null), ($context["etiquetteArray"] ?? null));
                // line 90
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t";
            $context["groupes"] = [];
            // line 92
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ressource"], "getVisibleGroupes", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 93
                echo "\t\t";
                $context["groupeArray"] = [twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 93) => ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 93), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getDateCreation", [], "any", false, false, false, 93), "biographie" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getBiographie", [], "any", false, false, false, 93), "image" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getImage", [], "any", false, false, false, 93), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 93))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 93), "getNom", [], "any", false, false, false, 93)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 93)]))]];
                // line 94
                echo "\t\t";
                $context["groupes"] = twig_array_merge(($context["groupes"] ?? null), ($context["groupeArray"] ?? null));
                // line 95
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t";
            $context["ressourceArr"] = [twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 96) => ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 96), "lien" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getLien", [], "any", false, false, false, 96), "titre" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getTitre", [], "any", false, false, false, 96), "image" => (( !(null === twig_get_attribute($this->env, $this->source, $context["ressource"], "getNom", [], "any", false, false, false, 96))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["ressource"], "file"))) : ("")), "etiquettes" => ($context["etiquettesRess"] ?? null), "evenements" => ($context["evenementsArr"] ?? null), "groupes" => ($context["groupes"] ?? null), "credits" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getCredits", [], "any", false, false, false, 96), "type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ressource"], "getType", [], "any", false, false, false, 96), "getLabel", [], "any", false, false, false, 96), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_ressource", ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 96)]))]];
            // line 97
            echo "\t";
            $context["ressources"] = twig_array_merge(($context["ressources"] ?? null), ($context["ressourceArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["ressources"] ?? null));
        echo "
";
        $___internal_parse_11_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_11_);
    }

    public function getTemplateName()
    {
        return "ressources/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 1,  339 => 99,  332 => 97,  329 => 96,  323 => 95,  320 => 94,  317 => 93,  312 => 92,  309 => 91,  303 => 90,  300 => 89,  297 => 88,  292 => 87,  289 => 86,  283 => 85,  280 => 84,  277 => 83,  271 => 82,  268 => 81,  266 => 79,  265 => 78,  264 => 77,  263 => 76,  262 => 75,  261 => 73,  259 => 72,  256 => 71,  253 => 70,  250 => 69,  248 => 68,  247 => 67,  246 => 66,  245 => 65,  244 => 64,  243 => 63,  242 => 62,  241 => 61,  240 => 60,  239 => 59,  238 => 58,  236 => 56,  230 => 55,  227 => 54,  224 => 53,  218 => 52,  215 => 51,  212 => 50,  207 => 49,  204 => 48,  201 => 47,  198 => 46,  195 => 45,  193 => 44,  192 => 43,  190 => 42,  184 => 41,  181 => 40,  178 => 39,  173 => 38,  170 => 37,  167 => 36,  162 => 35,  159 => 34,  153 => 33,  150 => 32,  147 => 31,  142 => 30,  139 => 29,  133 => 28,  130 => 27,  127 => 26,  122 => 25,  119 => 24,  113 => 23,  110 => 22,  107 => 21,  102 => 20,  99 => 19,  96 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  67 => 10,  64 => 9,  61 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ressources/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/ressources/listeApi.html.twig");
    }
}
