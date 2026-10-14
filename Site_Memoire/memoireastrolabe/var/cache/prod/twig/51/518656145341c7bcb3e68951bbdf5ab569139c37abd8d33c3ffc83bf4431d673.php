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

/* genres_musicaux/listeApi.html.twig */
class __TwigTemplate_4a8851d587481f0d320e2aa991fae0c7e4e670b658632b71a62c3eb07b5cbc5b extends Template
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
        $context["genresMusicauxArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeGenresMusicaux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genreMusical"]) {
            // line 4
            echo "\t";
            $context["groupes"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getVisibleGroupes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 6
                echo "\t
\t\t";
                // line 7
                $context["groupeArray"] = [twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 7) => ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 7), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getDateCreation", [], "any", false, false, false, 7), "biographie" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getBiographie", [], "any", false, false, false, 7), "lienImage" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getLienImage", [], "any", false, false, false, 7), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 8
$context["groupe"], "getImage", [], "any", false, false, false, 8))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["groupe"], "imageFile"))) : ("")), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 9
$context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 9))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 9), "getNom", [], "any", false, false, false, 9)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source,                 // line 10
$context["groupe"], "getId", [], "any", false, false, false, 10)]))]];
                // line 11
                echo "\t\t";
                $context["groupes"] = twig_array_merge(($context["groupes"] ?? null), ($context["groupeArray"] ?? null));
                // line 12
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "
\t";
            // line 15
            echo "\t";
            $context["evenementsArr"] = [];
            // line 16
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getVisibleEvenements", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 17
                echo "\t\t";
                $context["etiquettes"] = [];
                // line 18
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleEtiquettes", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                    // line 19
                    echo "\t\t\t";
                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 19) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 19), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 19), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 19)]))]];
                    // line 20
                    echo "\t\t\t";
                    $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                    // line 21
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t";
                $context["ressources"] = [];
                // line 23
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleRessources", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                    // line 24
                    echo "\t\t\t";
                    $context["ressourceArray"] = [twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 24) => ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 24), "lien" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getLien", [], "any", false, false, false, 24), "titre" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getTitre", [], "any", false, false, false, 24), "nomFile" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getNom", [], "any", false, false, false, 24), "typeRessource" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ressource"], "getType", [], "any", false, false, false, 24), "getLabel", [], "any", false, false, false, 24), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_ressource", ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 24)]))]];
                    // line 25
                    echo "\t\t\t";
                    $context["ressources"] = twig_array_merge(($context["ressources"] ?? null), ($context["ressourceArray"] ?? null));
                    // line 26
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 27), null))) {
                    // line 28
                    echo "\t\t\t";
                    $context["lieu"] = ["ville" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 28), "getVille", [], "any", false, false, false, 28), "CP" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 28), "getCP", [], "any", false, false, false, 28), "adresse" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 28), "getAdresse", [], "any", false, false, false, 28), "nomBatiment" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 28), "getNomBatiment", [], "any", false, false, false, 28), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_lieu", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 28), "getId", [], "any", false, false, false, 28)]))];
                    // line 29
                    echo "\t\t";
                } else {
                    // line 30
                    echo "\t\t\t";
                    $context["lieu"] = null;
                    // line 31
                    echo "\t\t";
                }
                // line 32
                echo "\t\t";
                $context["passages"] = [];
                // line 33
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisiblePassages", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                    // line 34
                    echo "\t\t\t";
                    $context["etiquettes"] = [];
                    // line 35
                    echo "\t\t\t";
                    $context["labels"] = [];
                    // line 36
                    echo "\t\t\t";
                    $context["membres"] = [];
                    // line 37
                    echo "\t\t\t";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 37))) {
                        // line 38
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 38), "getVisibleEtiquettes", [], "any", false, false, false, 38));
                        foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                            // line 39
                            echo "\t\t\t\t\t";
                            $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 39) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 39), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 39), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 39)]))]];
                            // line 40
                            echo "\t\t\t\t\t";
                            $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                            // line 41
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 42), "getVisibleLabels", [], "any", false, false, false, 42));
                        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                            // line 43
                            echo "\t\t\t\t\t";
                            $context["labelArray"] = [twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 43) => ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 43), "nom" => twig_get_attribute($this->env, $this->source, $context["label"], "getNom", [], "any", false, false, false, 43), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 43)]))]];
                            // line 44
                            echo "\t\t\t\t\t";
                            $context["labels"] = twig_array_merge(($context["labels"] ?? null), ($context["labelArray"] ?? null));
                            // line 45
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 46
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 46), "getVisibleMembres", [], "any", false, false, false, 46));
                        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                            // line 47
                            echo "\t\t\t\t\t";
                            $context["etiquettes"] = [];
                            // line 48
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 48), "getVisibleEtiquettes", [], "any", false, false, false, 48));
                            foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                                // line 49
                                echo "\t\t\t\t\t\t";
                                $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 49) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 49), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 49), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 49)]))]];
                                // line 50
                                echo "\t\t\t\t\t\t";
                                $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                                // line 51
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 52
                            echo "\t\t\t\t\t";
                            $context["musicien"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 52), "getId", [], "any", false, false, false, 52), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 52), "getNom", [], "any", false, false, false, 52), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 52), "getLienImage", [], "any", false, false, false, 52), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 53
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 53), "getImage", [], "any", false, false, false, 53))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 53), "imageFile"))) : ("")), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 54
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getPrenom", [], "any", false, false, false, 54), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getNomScene", [], "any", false, false, false, 54), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getDateNaissance", [], "any", false, false, false, 54), "etiquettes" => ($context["etiquettes"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getId", [], "any", false, false, false, 54)]))];
                            // line 55
                            echo "\t\t\t\t\t";
                            $context["instruments"] = [];
                            // line 56
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleInstruments", [], "any", false, false, false, 56));
                            foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
                                // line 57
                                echo "\t\t\t\t\t
\t\t\t\t\t\t";
                                // line 58
                                $context["instrumentArray"] = [twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 58) => ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 58), "nom" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getNom", [], "any", false, false, false, 58), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 58)]))]];
                                // line 59
                                echo "\t\t\t\t\t\t";
                                $context["instruments"] = twig_array_merge(($context["instruments"] ?? null), ($context["instrumentArray"] ?? null));
                                // line 60
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 61
                            echo "\t\t\t\t\t";
                            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 61) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 61), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 61), "musicien" => ($context["musicien"] ?? null), "instruments" => ($context["instruments"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 61)]))]];
                            // line 62
                            echo "\t\t\t\t\t";
                            $context["membres"] = twig_array_merge(($context["membres"] ?? null), ($context["membreArray"] ?? null));
                            // line 63
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "\t\t\t\t";
                        $context["groupe"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getId", [], "any", false, false, false, 64), "dateCreation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getDateCreation", [], "any", false, false, false, 64), "biographie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getBiographie", [], "any", false, false, false, 64), "image" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getImage", [], "any", false, false, false, 64), "etiquettes" => ($context["etiquettes"] ?? null), "labels" => ($context["labels"] ?? null), "membres" => ($context["membres"] ?? null), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getVisibleNationalite", [], "any", false, false, false, 64))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getVisibleNationalite", [], "any", false, false, false, 64), "getNom", [], "any", false, false, false, 64)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getId", [], "any", false, false, false, 64)]))];
                        // line 65
                        echo "\t\t\t";
                    } else {
                        // line 66
                        echo "\t\t\t\t";
                        $context["groupe"] = null;
                        // line 67
                        echo "\t\t\t";
                    }
                    // line 68
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 68)))) {
                        // line 69
                        echo "\t\t\t\t";
                        $context["dateDebPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 69), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 69);
                        // line 70
                        echo "\t\t\t";
                    } else {
                        // line 71
                        echo "\t\t\t\t";
                        $context["dateDebPass"] = null;
                        // line 72
                        echo "\t\t\t";
                    }
                    // line 73
                    echo "
\t\t\t";
                    // line 74
                    if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", true, true, false, 74) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 74)))) {
                        // line 75
                        echo "\t\t\t\t";
                        $context["dateFinPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 75), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 75);
                        // line 76
                        echo "\t\t\t";
                    } else {
                        // line 77
                        echo "\t\t\t\t";
                        $context["dateFinPass"] = null;
                        // line 78
                        echo "\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t
\t\t\t";
                    // line 80
                    $context["passageArray"] = [twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 80) => ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 80), "dateDebut" => ($context["dateDebPass"] ?? null), "dateFin" => ($context["dateFinPass"] ?? null), "groupe" => ($context["groupe"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_passage", ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 80)]))]];
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
                $context["evenementArr"] = [twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 83) => ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 83), "type" => (( !(null === twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 83))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 83), "getLabel", [], "any", false, false, false, 83)) : (null)), "lienImage" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getLienImage", [], "any", false, false, false, 83), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 84
$context["evenement"], "getImage", [], "any", false, false, false, 84))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["evenement"], "imageFile"))) : ("")), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 85
$context["evenement"], "getDateDebut", [], "any", false, false, false, 85), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 85), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 85), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 85), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 85), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 85), "etiquettes" => ($context["etiquettes"] ?? null), "ressources" => ($context["ressources"] ?? null), "lieu" => ($context["lieu"] ?? null), "passages" => ($context["passages"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 85)]))]];
                // line 86
                echo "\t\t";
                $context["evenementsArr"] = twig_array_merge(($context["evenementsArr"] ?? null), ($context["evenementArr"] ?? null));
                // line 87
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t";
            // line 89
            echo "
\t";
            // line 90
            $context["categoriesMusicales"] = [];
            // line 91
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getCategorieMusicales", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["categorieMusical"]) {
                // line 92
                echo "\t\t";
                $context["categorieMusicalArray"] = [twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 92) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 92), "nom" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getNom", [], "any", false, false, false, 92), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 92)]))]];
                // line 93
                echo "\t\t";
                $context["categoriesMusicales"] = twig_array_merge(($context["categoriesMusicales"] ?? null), ($context["categorieMusicalArray"] ?? null));
                // line 94
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t";
            $context["genreMusicalArr"] = [twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getID", [], "any", false, false, false, 95) => ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getID", [], "any", false, false, false, 95), "nom" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getNom", [], "any", false, false, false, 95), "groupes" => ($context["groupes"] ?? null), "evenements" => ($context["evenementsArr"] ?? null), "categoriesMusicales" => ($context["categoriesMusicales"] ?? null)]];
            // line 96
            echo "\t";
            $context["genresMusicauxArr"] = twig_array_merge(($context["genresMusicauxArr"] ?? null), ($context["genreMusicalArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genreMusical'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["genresMusicauxArr"] ?? null));
        echo "
";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_7_);
    }

    public function getTemplateName()
    {
        return "genres_musicaux/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 1,  360 => 98,  353 => 96,  350 => 95,  344 => 94,  341 => 93,  338 => 92,  333 => 91,  331 => 90,  328 => 89,  326 => 88,  320 => 87,  317 => 86,  315 => 85,  314 => 84,  312 => 83,  306 => 82,  303 => 81,  301 => 80,  298 => 79,  295 => 78,  292 => 77,  289 => 76,  286 => 75,  284 => 74,  281 => 73,  278 => 72,  275 => 71,  272 => 70,  269 => 69,  266 => 68,  263 => 67,  260 => 66,  257 => 65,  254 => 64,  248 => 63,  245 => 62,  242 => 61,  236 => 60,  233 => 59,  231 => 58,  228 => 57,  223 => 56,  220 => 55,  218 => 54,  217 => 53,  215 => 52,  209 => 51,  206 => 50,  203 => 49,  198 => 48,  195 => 47,  190 => 46,  184 => 45,  181 => 44,  178 => 43,  173 => 42,  167 => 41,  164 => 40,  161 => 39,  156 => 38,  153 => 37,  150 => 36,  147 => 35,  144 => 34,  139 => 33,  136 => 32,  133 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  115 => 26,  112 => 25,  109 => 24,  104 => 23,  101 => 22,  95 => 21,  92 => 20,  89 => 19,  84 => 18,  81 => 17,  76 => 16,  73 => 15,  70 => 13,  64 => 12,  61 => 11,  59 => 10,  58 => 9,  57 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "genres_musicaux/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/genres_musicaux/listeApi.html.twig");
    }
}
