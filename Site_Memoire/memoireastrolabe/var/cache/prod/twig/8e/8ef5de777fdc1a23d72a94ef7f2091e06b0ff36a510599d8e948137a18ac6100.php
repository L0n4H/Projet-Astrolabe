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

/* evenements/listeApi.html.twig */
class __TwigTemplate_123dbcfd5b36f2f2c24ff85ad8fe95334a44be85dd04e7d414a50ea04fbb288a extends Template
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
        $context["evenementsArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeEvenements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 4
            echo "\t";
            $context["etiquettes"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleEtiquettes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                // line 6
                echo "\t\t";
                $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 6) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 6), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 6), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 6)]))]];
                // line 7
                echo "\t\t";
                $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                // line 8
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t";
            $context["ressources"] = [];
            // line 10
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleRessources", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                // line 11
                echo "\t\t";
                $context["ressourceArray"] = [twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 11) => ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 11), "lien" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getLien", [], "any", false, false, false, 11), "titre" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getTitre", [], "any", false, false, false, 11), "typeRessource" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ressource"], "getType", [], "any", false, false, false, 11), "getLabel", [], "any", false, false, false, 11), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_ressource", ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 11)]))]];
                // line 12
                echo "\t\t";
                $context["ressources"] = twig_array_merge(($context["ressources"] ?? null), ($context["ressourceArray"] ?? null));
                // line 13
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 14), null))) {
                echo " 
\t\t";
                // line 15
                $context["lieu"] = ["ville" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 15), "getVille", [], "any", false, false, false, 15), "CP" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 15), "getCP", [], "any", false, false, false, 15), "adresse" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 15), "getAdresse", [], "any", false, false, false, 15), "nomBatiment" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 15), "getNomBatiment", [], "any", false, false, false, 15), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_lieu", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleLieu", [], "any", false, false, false, 15), "getId", [], "any", false, false, false, 15)]))];
                echo " 
\t";
            } else {
                // line 17
                echo "\t\t";
                $context["lieu"] = [];
                // line 18
                echo "\t";
            }
            // line 19
            echo "
\t";
            // line 20
            $context["genresMusicaux"] = [];
            // line 21
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleGenresMusicaux", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["genreMusical"]) {
                // line 22
                echo "\t\t";
                $context["genreMusicalArray"] = [twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 22) => ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 22), "nom" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getNom", [], "any", false, false, false, 22)]];
                // line 23
                echo "\t\t";
                $context["genresMusicaux"] = twig_array_merge(($context["genresMusicaux"] ?? null), ($context["genreMusicalArray"] ?? null));
                // line 24
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genreMusical'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
\t";
            // line 26
            $context["passages"] = [];
            // line 27
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisiblePassages", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                // line 28
                echo "\t\t";
                $context["etiquettes"] = [];
                // line 29
                echo "\t\t";
                $context["genres"] = [];
                // line 30
                echo "\t\t";
                $context["labels"] = [];
                // line 31
                echo "\t\t";
                $context["membres"] = [];
                // line 32
                echo "\t\t";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 33), "getVisibleEtiquettes", [], "any", false, false, false, 33));
                    foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                        // line 34
                        echo "
\t\t\t\t";
                        // line 35
                        $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 35), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35)]))]];
                        // line 36
                        echo "\t\t\t\t";
                        $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                        // line 37
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 38), "getVisibleGenresMusicaux", [], "any", false, false, false, 38));
                    foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                        // line 39
                        echo "\t\t\t\t";
                        $context["categoriesMusical"] = [];
                        // line 40
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genre"], "getCategorieMusicales", [], "any", false, false, false, 40));
                        foreach ($context['_seq'] as $context["_key"] => $context["categorieMusical"]) {
                            // line 41
                            echo "\t\t\t\t\t";
                            $context["categorieMusicalArray"] = [twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 41) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 41), "nom" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getNom", [], "any", false, false, false, 41), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 41)]))]];
                            // line 42
                            echo "\t\t\t\t\t";
                            $context["categoriesMusical"] = twig_array_merge(($context["categoriesMusical"] ?? null), ($context["categorieMusicalArray"] ?? null));
                            // line 43
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "\t\t\t\t";
                        $context["genreArray"] = [twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 44) => ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 44), "nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "any", false, false, false, 44), "categorie" => ($context["categoriesMusical"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 44)]))]];
                        // line 45
                        echo "\t\t\t\t";
                        $context["genres"] = twig_array_merge(($context["genres"] ?? null), ($context["genreArray"] ?? null));
                        // line 46
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 47), "getVisibleLabels", [], "any", false, false, false, 47));
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 48
                        echo "\t\t\t\t";
                        $context["labelArray"] = [twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 48) => ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 48), "nom" => twig_get_attribute($this->env, $this->source, $context["label"], "getNom", [], "any", false, false, false, 48), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 48)]))]];
                        // line 49
                        echo "\t\t\t\t";
                        $context["labels"] = twig_array_merge(($context["labels"] ?? null), ($context["labelArray"] ?? null));
                        // line 50
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 51), "getVisibleMembres", [], "any", false, false, false, 51));
                    foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                        // line 52
                        echo "\t\t\t\t";
                        $context["etiquettes"] = [];
                        // line 53
                        echo "\t\t\t\t";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 53))) {
                            // line 54
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getVisibleEtiquettes", [], "any", false, false, false, 54));
                            foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                                // line 55
                                echo "\t\t\t\t\t\t";
                                $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 55) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 55), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 55), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 55)]))]];
                                // line 56
                                echo "\t\t\t\t\t\t";
                                $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
                                // line 57
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 58
                            echo "\t\t\t\t\t";
                            $context["musicien"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getId", [], "any", false, false, false, 58), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getNom", [], "any", false, false, false, 58), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getPrenom", [], "any", false, false, false, 58), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getLienImage", [], "any", false, false, false, 58), "image" => ($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "imageFile")), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getNomScene", [], "any", false, false, false, 58), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getDateNaissance", [], "any", false, false, false, 58), "etiquettes" => ($context["etiquettes"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getId", [], "any", false, false, false, 58)]))];
                            // line 59
                            echo "\t\t\t\t\t";
                            $context["instruments"] = [];
                            // line 60
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleInstruments", [], "any", false, false, false, 60));
                            foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
                                // line 61
                                echo "\t\t\t\t\t\t";
                                $context["instrumentArray"] = [twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 61) => ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 61), "nom" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getNom", [], "any", false, false, false, 61), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 61)]))]];
                                // line 62
                                echo "\t\t\t\t\t\t";
                                $context["instruments"] = twig_array_merge(($context["instruments"] ?? null), ($context["instrumentArray"] ?? null));
                                // line 63
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 64
                            echo "\t\t\t\t\t";
                            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 64) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 64), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 64), "musicien" => ($context["musicien"] ?? null), "instruments" => ($context["instruments"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 64)]))]];
                            // line 65
                            echo "\t\t\t\t\t";
                            $context["membres"] = twig_array_merge(($context["membres"] ?? null), ($context["membreArray"] ?? null));
                            // line 66
                            echo "\t\t\t\t";
                        }
                        // line 67
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "\t\t\t
\t\t\t";
                    // line 69
                    $context["groupe"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 70
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 70), "getId", [], "any", false, false, false, 70), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 71
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 71), "getLienImage", [], "any", false, false, false, 71), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 72
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 72), "getImage", [], "any", false, false, false, 72))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 72), "imageFile"))) : ("")), "dateCreation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 73
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 73), "getDateCreation", [], "any", false, false, false, 73), "biographie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 74
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 74), "getBiographie", [], "any", false, false, false, 74), "etiquettes" =>                     // line 75
($context["etiquettes"] ?? null), "genreMusicaux" => ($context["genres"] ?? null), "labels" =>                     // line 76
($context["labels"] ?? null), "membres" => ($context["membres"] ?? null), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 77
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 77), "getVisibleNationalite", [], "any", false, false, false, 77))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 77), "getVisibleNationalite", [], "any", false, false, false, 77), "getNom", [], "any", false, false, false, 77)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 78
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 78), "getId", [], "any", false, false, false, 78)]))];
                    // line 79
                    echo "\t\t
\t\t";
                } else {
                    // line 81
                    echo "\t\t\t";
                    $context["groupe"] = null;
                    // line 82
                    echo "\t\t";
                }
                // line 83
                echo "
\t\t";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", true, true, false, 84) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 84)))) {
                    // line 85
                    echo "\t\t\t";
                    $context["dateDebPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 85), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 85);
                    // line 86
                    echo "\t\t";
                } else {
                    // line 87
                    echo "\t\t\t";
                    $context["dateDebPass"] = null;
                    // line 88
                    echo "\t\t";
                }
                // line 89
                echo "
\t\t";
                // line 90
                if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", true, true, false, 90) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 90)))) {
                    // line 91
                    echo "\t\t\t";
                    $context["dateFinPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 91), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 91);
                    // line 92
                    echo "\t\t";
                } else {
                    // line 93
                    echo "\t\t\t";
                    $context["dateFinPass"] = null;
                    // line 94
                    echo "\t\t";
                }
                // line 95
                echo "\t\t";
                $context["passageArray"] = [twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 95) => ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 95), "dateDebut" => ($context["dateDebPass"] ?? null), "dateFin" => ($context["dateFinPass"] ?? null), "groupe" => ($context["groupe"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_passage", ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 95)]))]];
                // line 96
                echo "\t\t";
                $context["passages"] = twig_array_merge(($context["passages"] ?? null), ($context["passageArray"] ?? null));
                // line 97
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t";
            $context["evenementArr"] = [twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 98) => ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 98), "type" => (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 98), null))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 98), "getLabel", [], "any", false, false, false, 98)) : ("")), "lienImage" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getLienImage", [], "any", false, false, false, 98), "image" => (( !(null === twig_get_attribute($this->env, $this->source,             // line 99
$context["evenement"], "getImage", [], "any", false, false, false, 99))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["evenement"], "imageFile"))) : ("")), "genreMusical" =>             // line 100
($context["genresMusicaux"] ?? null), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 101
$context["evenement"], "getDateDebut", [], "any", false, false, false, 101), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 101), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 101), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 101), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 101), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 101), "etiquettes" => ($context["etiquettes"] ?? null), "ressources" => ($context["ressources"] ?? null), "lieu" => ($context["lieu"] ?? null), "passages" => ($context["passages"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 101)]))]];
            // line 102
            echo "\t";
            $context["evenementsArr"] = twig_array_merge(($context["evenementsArr"] ?? null), ($context["evenementArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["evenementsArr"] ?? null));
        echo "

";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_8_);
    }

    public function getTemplateName()
    {
        return "evenements/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 1,  370 => 104,  363 => 102,  361 => 101,  360 => 100,  359 => 99,  357 => 98,  351 => 97,  348 => 96,  345 => 95,  342 => 94,  339 => 93,  336 => 92,  333 => 91,  331 => 90,  328 => 89,  325 => 88,  322 => 87,  319 => 86,  316 => 85,  314 => 84,  311 => 83,  308 => 82,  305 => 81,  301 => 79,  299 => 78,  298 => 77,  297 => 76,  296 => 75,  295 => 74,  294 => 73,  293 => 72,  292 => 71,  291 => 70,  290 => 69,  287 => 68,  281 => 67,  278 => 66,  275 => 65,  272 => 64,  266 => 63,  263 => 62,  260 => 61,  255 => 60,  252 => 59,  249 => 58,  243 => 57,  240 => 56,  237 => 55,  232 => 54,  229 => 53,  226 => 52,  221 => 51,  215 => 50,  212 => 49,  209 => 48,  204 => 47,  198 => 46,  195 => 45,  192 => 44,  186 => 43,  183 => 42,  180 => 41,  175 => 40,  172 => 39,  167 => 38,  161 => 37,  158 => 36,  156 => 35,  153 => 34,  148 => 33,  145 => 32,  142 => 31,  139 => 30,  136 => 29,  133 => 28,  128 => 27,  126 => 26,  123 => 25,  117 => 24,  114 => 23,  111 => 22,  106 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  90 => 15,  85 => 14,  79 => 13,  76 => 12,  73 => 11,  68 => 10,  65 => 9,  59 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evenements/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/evenements/listeApi.html.twig");
    }
}
