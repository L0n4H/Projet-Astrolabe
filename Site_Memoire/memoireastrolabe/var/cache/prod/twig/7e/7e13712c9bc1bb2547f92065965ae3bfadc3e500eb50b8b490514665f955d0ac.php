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

/* types_evenements/listeApi.html.twig */
class __TwigTemplate_c11ee38afc05b56d780620a8a56a86e09f7404ce3611ad38b4bc2b677e0ebece extends Template
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
        $context["typesEvenementsArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listetypesEvenements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typeEvenement"]) {
            // line 4
            echo "\t";
            $context["evenements"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getVisibleEvenements", [], "any", false, false, false, 5));
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
                $context["ressources"] = [];
                // line 12
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleRessources", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                    // line 13
                    echo "\t\t\t";
                    $context["ressourceArray"] = [twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 13) => ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 13), "lien" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getLien", [], "any", false, false, false, 13), "titre" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getTitre", [], "any", false, false, false, 13), "nomFile" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getNom", [], "any", false, false, false, 13), "typeRessource" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ressource"], "getType", [], "any", false, false, false, 13), "getLabel", [], "any", false, false, false, 13)]];
                    // line 14
                    echo "\t\t\t";
                    $context["ressources"] = twig_array_merge(($context["ressources"] ?? null), ($context["ressourceArray"] ?? null));
                    // line 15
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "\t\t";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 16))) {
                    // line 17
                    echo "\t\t\t";
                    $context["lieu"] = ["ville" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getLieu", [], "any", false, false, false, 17), "getVille", [], "any", false, false, false, 17), "CP" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getLieu", [], "any", false, false, false, 17), "getCP", [], "any", false, false, false, 17), "adresse" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getLieu", [], "any", false, false, false, 17), "getAdresse", [], "any", false, false, false, 17), "nomBatiment" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getLieu", [], "any", false, false, false, 17), "getNomBatiment", [], "any", false, false, false, 17), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_lieu", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getLieu", [], "any", false, false, false, 17), "getId", [], "any", false, false, false, 17)]))];
                    // line 18
                    echo "\t\t";
                } else {
                    // line 19
                    echo "\t\t\t";
                    $context["lieu"] = null;
                    // line 20
                    echo "\t\t";
                }
                // line 21
                echo "\t\t";
                $context["passages"] = [];
                // line 22
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisiblePassages", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                    // line 23
                    echo "\t\t\t";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 23))) {
                        // line 24
                        echo "\t\t\t\t";
                        $context["etiquettes"] = [];
                        // line 25
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 25), "getVisibleEtiquettes", [], "any", false, false, false, 25));
                        foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                            // line 26
                            echo "\t\t\t\t\t";
                            $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 26) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 26), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 26), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 26)]))]];
                            // line 27
                            echo "\t\t\t\t\t";
                            $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                            // line 28
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "\t\t\t\t";
                        $context["genres"] = [];
                        // line 30
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 30), "getVisibleGenresMusicaux", [], "any", false, false, false, 30));
                        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                            // line 31
                            echo "\t\t\t\t\t";
                            $context["categoriesMusical"] = [];
                            // line 32
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genre"], "getCategorieMusicales", [], "any", false, false, false, 32));
                            foreach ($context['_seq'] as $context["_key"] => $context["categorieMusical"]) {
                                // line 33
                                echo "\t\t\t\t\t\t";
                                $context["categorieMusicalArray"] = [twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 33) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 33), "nom" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getNom", [], "any", false, false, false, 33), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 33)]))]];
                                // line 34
                                echo "\t\t\t\t\t\t";
                                $context["categoriesMusical"] = twig_array_merge(($context["categoriesMusical"] ?? null), ($context["categorieMusicalArray"] ?? null));
                                // line 35
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 36
                            echo "\t\t\t\t\t";
                            $context["genreArray"] = [twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 36) => ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 36), "nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "any", false, false, false, 36), "categorie" => ($context["categoriesMusical"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 36)]))]];
                            // line 37
                            echo "\t\t\t\t\t";
                            $context["genres"] = twig_array_merge(($context["genres"] ?? null), ($context["genreArray"] ?? null));
                            // line 38
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "\t\t\t\t";
                        $context["labels"] = [];
                        // line 40
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 40), "getVisibleLabels", [], "any", false, false, false, 40));
                        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                            // line 41
                            echo "\t\t\t\t\t";
                            $context["labelArray"] = [twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 41) => ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 41), "nom" => twig_get_attribute($this->env, $this->source, $context["label"], "getNom", [], "any", false, false, false, 41), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 41)]))]];
                            // line 42
                            echo "\t\t\t\t\t";
                            $context["labels"] = twig_array_merge(($context["labels"] ?? null), ($context["labelArray"] ?? null));
                            // line 43
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "\t\t\t\t";
                        $context["membres"] = [];
                        // line 45
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 45), "getVisibleMembres", [], "any", false, false, false, 45));
                        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                            // line 46
                            echo "\t\t\t\t\t";
                            if ( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 46))) {
                                // line 47
                                echo "\t\t\t\t\t\t";
                                $context["etiquettes"] = [];
                                // line 48
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 48), "getVisibleEtiquettes", [], "any", false, false, false, 48));
                                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                                    // line 49
                                    echo "\t\t\t\t\t\t\t";
                                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 49) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 49), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 49), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 49)]))]];
                                    // line 50
                                    echo "\t\t\t\t\t\t\t";
                                    $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                                    // line 51
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 52
                                echo "\t\t\t\t\t\t";
                                $context["musicien"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 52), "getId", [], "any", false, false, false, 52), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 52), "getNom", [], "any", false, false, false, 52), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 52), "getLienImage", [], "any", false, false, false, 52), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                 // line 53
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 53), "getImage", [], "any", false, false, false, 53))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 53), "imageFile"))) : ("")), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                 // line 54
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getPrenom", [], "any", false, false, false, 54), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getNomScene", [], "any", false, false, false, 54), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getDateNaissance", [], "any", false, false, false, 54), "etiquettes" => ($context["etiquettes"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getId", [], "any", false, false, false, 54)]))];
                                // line 55
                                echo "\t\t\t\t\t";
                            } else {
                                // line 56
                                echo "\t\t\t\t\t\t";
                                $context["musicien"] = [];
                                // line 57
                                echo "\t\t\t\t\t";
                            }
                            // line 58
                            echo "\t\t\t\t\t";
                            $context["instruments"] = [];
                            // line 59
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleInstruments", [], "any", false, false, false, 59));
                            foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
                                // line 60
                                echo "\t\t\t\t\t\t";
                                $context["instrumentArray"] = [twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 60) => ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 60), "nom" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getNom", [], "any", false, false, false, 60), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 60)]))]];
                                // line 61
                                echo "\t\t\t\t\t\t";
                                $context["instruments"] = twig_array_merge(($context["instruments"] ?? null), ($context["instrumentArray"] ?? null));
                                // line 62
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 63
                            echo "\t\t\t\t\t";
                            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 63) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 63), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 63), "musicien" => ($context["musicien"] ?? null), "instruments" => ($context["instruments"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 63)]))]];
                            // line 64
                            echo "\t\t\t\t\t";
                            $context["membres"] = twig_array_merge(($context["membres"] ?? null), ($context["membreArray"] ?? null));
                            // line 65
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "\t\t\t
\t\t\t\t";
                        // line 67
                        if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 67)))) {
                            // line 68
                            echo "\t\t\t\t\t";
                            $context["dateDebPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 68), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 68);
                            // line 69
                            echo "\t\t\t\t";
                        } else {
                            // line 70
                            echo "\t\t\t\t\t";
                            $context["dateDebPass"] = null;
                            // line 71
                            echo "\t\t\t\t";
                        }
                        // line 72
                        echo "
\t\t\t\t";
                        // line 73
                        if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", true, true, false, 73) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 73)))) {
                            // line 74
                            echo "\t\t\t\t\t";
                            $context["dateFinPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 74), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 74);
                            // line 75
                            echo "\t\t\t\t";
                        } else {
                            // line 76
                            echo "\t\t\t\t\t";
                            $context["dateFinPass"] = null;
                            // line 77
                            echo "\t\t\t\t";
                        }
                        // line 78
                        echo "
\t\t\t\t";
                        // line 79
                        $context["groupe"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 81
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 81), "getId", [], "any", false, false, false, 81), "dateCreation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 82
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 82), "getDateCreation", [], "any", false, false, false, 82), "biographie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 83
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 83), "getBiographie", [], "any", false, false, false, 83), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 84
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 84), "getLienImage", [], "any", false, false, false, 84), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 85
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 85), "getImage", [], "any", false, false, false, 85))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 85), "imageFile"))) : ("")), "etiquettes" =>                         // line 86
($context["etiquettes"] ?? null), "genreMusicaux" =>                         // line 87
($context["genres"] ?? null), "labels" =>                         // line 88
($context["labels"] ?? null), "membres" =>                         // line 89
($context["membres"] ?? null), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 90
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 90), "getVisibleNationalite", [], "any", false, false, false, 90))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 90), "getVisibleNationalite", [], "any", false, false, false, 90), "getNom", [], "any", false, false, false, 90)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 91
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 91), "getId", [], "any", false, false, false, 91)]))];
                        // line 93
                        echo "\t\t\t\t";
                        $context["passageArray"] = [twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 93) => ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 93), "dateDebut" => ($context["dateDebPass"] ?? null), "dateFin" => ($context["dateFinPass"] ?? null), "groupe" => ($context["groupe"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_passage", ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 93)]))]];
                        // line 94
                        echo "\t\t\t\t";
                        $context["passages"] = twig_array_merge(($context["passages"] ?? null), ($context["passageArray"] ?? null));
                        // line 95
                        echo "\t\t\t";
                    } else {
                        // line 96
                        echo "\t\t\t\t";
                        $context["groupe"] = [];
                        // line 97
                        echo "\t\t\t";
                    }
                    // line 98
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "\t\t";
                $context["evenementArr"] = [twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 99) => ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 99), "lienImage" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getLienImage", [], "any", false, false, false, 99), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 100
$context["evenement"], "getImage", [], "any", false, false, false, 100))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["evenement"], "imageFile"))) : ("")), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 101
$context["evenement"], "getDateDebut", [], "any", false, false, false, 101), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 101), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 101), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 101), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 101), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 101), "etiquettes" => ($context["etiquettes"] ?? null), "ressources" => ($context["ressources"] ?? null), "lieu" => ($context["lieu"] ?? null), "passages" => ($context["passages"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 101)]))]];
                // line 102
                echo "\t\t";
                $context["evenements"] = twig_array_merge(($context["evenements"] ?? null), ($context["evenementArr"] ?? null));
                // line 103
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t";
            $context["typeEvenementArr"] = [twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getID", [], "any", false, false, false, 104) => ["id" => twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getID", [], "any", false, false, false, 104), "label" => twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getLabel", [], "any", false, false, false, 104), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_typeEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getId", [], "any", false, false, false, 104)])), "evenements" => ($context["evenements"] ?? null)]];
            // line 105
            echo "\t";
            $context["typesEvenementsArr"] = twig_array_merge(($context["typesEvenementsArr"] ?? null), ($context["typeEvenementArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeEvenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["typesEvenementsArr"] ?? null));
        echo "
";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_3_);
    }

    public function getTemplateName()
    {
        return "types_evenements/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 1,  371 => 107,  364 => 105,  361 => 104,  355 => 103,  352 => 102,  350 => 101,  349 => 100,  347 => 99,  341 => 98,  338 => 97,  335 => 96,  332 => 95,  329 => 94,  326 => 93,  324 => 91,  323 => 90,  322 => 89,  321 => 88,  320 => 87,  319 => 86,  318 => 85,  317 => 84,  316 => 83,  315 => 82,  314 => 81,  313 => 79,  310 => 78,  307 => 77,  304 => 76,  301 => 75,  298 => 74,  296 => 73,  293 => 72,  290 => 71,  287 => 70,  284 => 69,  281 => 68,  279 => 67,  276 => 66,  270 => 65,  267 => 64,  264 => 63,  258 => 62,  255 => 61,  252 => 60,  247 => 59,  244 => 58,  241 => 57,  238 => 56,  235 => 55,  233 => 54,  232 => 53,  230 => 52,  224 => 51,  221 => 50,  218 => 49,  213 => 48,  210 => 47,  207 => 46,  202 => 45,  199 => 44,  193 => 43,  190 => 42,  187 => 41,  182 => 40,  179 => 39,  173 => 38,  170 => 37,  167 => 36,  161 => 35,  158 => 34,  155 => 33,  150 => 32,  147 => 31,  142 => 30,  139 => 29,  133 => 28,  130 => 27,  127 => 26,  122 => 25,  119 => 24,  116 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  87 => 15,  84 => 14,  81 => 13,  76 => 12,  73 => 11,  67 => 10,  64 => 9,  61 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "types_evenements/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/types_evenements/listeApi.html.twig");
    }
}
