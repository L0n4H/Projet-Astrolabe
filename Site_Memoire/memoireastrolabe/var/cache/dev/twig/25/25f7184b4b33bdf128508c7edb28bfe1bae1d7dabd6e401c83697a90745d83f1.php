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
class __TwigTemplate_32e9f8c6912bd9521f8eaed7e7124ea72c2c722359a206761a97828521a1ce21 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ressources/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ressources/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["ressources"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeRessources"]) || array_key_exists("listeRessources", $context) ? $context["listeRessources"] : (function () { throw new RuntimeError('Variable "listeRessources" does not exist.', 3, $this->source); })()));
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
                    $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 9, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 9, $this->source); })()));
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
                            $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 22, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 22, $this->source); })()));
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
                            $context["genres"] = twig_array_merge((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 27, $this->source); })()), (isset($context["genreArray"]) || array_key_exists("genreArray", $context) ? $context["genreArray"] : (function () { throw new RuntimeError('Variable "genreArray" does not exist.', 27, $this->source); })()));
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
                            $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 32, $this->source); })()), (isset($context["labelArray"]) || array_key_exists("labelArray", $context) ? $context["labelArray"] : (function () { throw new RuntimeError('Variable "labelArray" does not exist.', 32, $this->source); })()));
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
                                    $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 40, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 40, $this->source); })()));
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
(isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 44, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 44), "getId", [], "any", false, false, false, 44)]))];
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
                                $context["instruments"] = twig_array_merge((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 51, $this->source); })()), (isset($context["instrumentArray"]) || array_key_exists("instrumentArray", $context) ? $context["instrumentArray"] : (function () { throw new RuntimeError('Variable "instrumentArray" does not exist.', 51, $this->source); })()));
                                // line 52
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 53
                            echo "\t\t\t\t\t";
                            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 53) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 53), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 53), "musicien" => (isset($context["musicien"]) || array_key_exists("musicien", $context) ? $context["musicien"] : (function () { throw new RuntimeError('Variable "musicien" does not exist.', 53, $this->source); })()), "instruments" => (isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 53, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 53)]))]];
                            // line 54
                            echo "\t\t\t\t\t";
                            $context["membres"] = twig_array_merge((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 54, $this->source); })()), (isset($context["membreArray"]) || array_key_exists("membreArray", $context) ? $context["membreArray"] : (function () { throw new RuntimeError('Variable "membreArray" does not exist.', 54, $this->source); })()));
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
(isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 63, $this->source); })()), "genreMusicaux" =>                         // line 64
(isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 64, $this->source); })()), "labels" =>                         // line 65
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 65, $this->source); })()), "membres" =>                         // line 66
(isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 66, $this->source); })()), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 67
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
(isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 78, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_passage", ["id" => twig_get_attribute($this->env, $this->source,                     // line 79
$context["passage"], "getId", [], "any", false, false, false, 79)]))]];
                    // line 81
                    echo "\t\t\t";
                    $context["passages"] = twig_array_merge((isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 81, $this->source); })()), (isset($context["passageArray"]) || array_key_exists("passageArray", $context) ? $context["passageArray"] : (function () { throw new RuntimeError('Variable "passageArray" does not exist.', 81, $this->source); })()));
                    // line 82
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "\t\t";
                $context["evenementArr"] = ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 83), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateDebut", [], "any", false, false, false, 83), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 83), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 83), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 83), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 83), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 83), "etiquettes" => (isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 83, $this->source); })()), "lieu" => (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 83, $this->source); })()), "passages" => (isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 83, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 83)]))];
                // line 84
                echo "\t\t";
                $context["evenementsArr"] = twig_array_merge((isset($context["evenementsArr"]) || array_key_exists("evenementsArr", $context) ? $context["evenementsArr"] : (function () { throw new RuntimeError('Variable "evenementsArr" does not exist.', 84, $this->source); })()), (isset($context["evenementArr"]) || array_key_exists("evenementArr", $context) ? $context["evenementArr"] : (function () { throw new RuntimeError('Variable "evenementArr" does not exist.', 84, $this->source); })()));
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
                $context["etiquettesRess"] = twig_array_merge((isset($context["etiquettesRess"]) || array_key_exists("etiquettesRess", $context) ? $context["etiquettesRess"] : (function () { throw new RuntimeError('Variable "etiquettesRess" does not exist.', 89, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 89, $this->source); })()));
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
                $context["groupes"] = twig_array_merge((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 94, $this->source); })()), (isset($context["groupeArray"]) || array_key_exists("groupeArray", $context) ? $context["groupeArray"] : (function () { throw new RuntimeError('Variable "groupeArray" does not exist.', 94, $this->source); })()));
                // line 95
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t";
            $context["ressourceArr"] = [twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 96) => ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 96), "lien" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getLien", [], "any", false, false, false, 96), "titre" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getTitre", [], "any", false, false, false, 96), "image" => (( !(null === twig_get_attribute($this->env, $this->source, $context["ressource"], "getNom", [], "any", false, false, false, 96))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["ressource"], "file"))) : ("")), "etiquettes" => (isset($context["etiquettesRess"]) || array_key_exists("etiquettesRess", $context) ? $context["etiquettesRess"] : (function () { throw new RuntimeError('Variable "etiquettesRess" does not exist.', 96, $this->source); })()), "evenements" => (isset($context["evenementsArr"]) || array_key_exists("evenementsArr", $context) ? $context["evenementsArr"] : (function () { throw new RuntimeError('Variable "evenementsArr" does not exist.', 96, $this->source); })()), "groupes" => (isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 96, $this->source); })()), "credits" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getCredits", [], "any", false, false, false, 96), "type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ressource"], "getType", [], "any", false, false, false, 96), "getLabel", [], "any", false, false, false, 96), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_ressource", ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 96)]))]];
            // line 97
            echo "\t";
            $context["ressources"] = twig_array_merge((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 97, $this->source); })()), (isset($context["ressourceArr"]) || array_key_exists("ressourceArr", $context) ? $context["ressourceArr"] : (function () { throw new RuntimeError('Variable "ressourceArr" does not exist.', 97, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 99, $this->source); })()));
        echo "
";
        $___internal_parse_12_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_12_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  350 => 1,  345 => 99,  338 => 97,  335 => 96,  329 => 95,  326 => 94,  323 => 93,  318 => 92,  315 => 91,  309 => 90,  306 => 89,  303 => 88,  298 => 87,  295 => 86,  289 => 85,  286 => 84,  283 => 83,  277 => 82,  274 => 81,  272 => 79,  271 => 78,  270 => 77,  269 => 76,  268 => 75,  267 => 73,  265 => 72,  262 => 71,  259 => 70,  256 => 69,  254 => 68,  253 => 67,  252 => 66,  251 => 65,  250 => 64,  249 => 63,  248 => 62,  247 => 61,  246 => 60,  245 => 59,  244 => 58,  242 => 56,  236 => 55,  233 => 54,  230 => 53,  224 => 52,  221 => 51,  218 => 50,  213 => 49,  210 => 48,  207 => 47,  204 => 46,  201 => 45,  199 => 44,  198 => 43,  196 => 42,  190 => 41,  187 => 40,  184 => 39,  179 => 38,  176 => 37,  173 => 36,  168 => 35,  165 => 34,  159 => 33,  156 => 32,  153 => 31,  148 => 30,  145 => 29,  139 => 28,  136 => 27,  133 => 26,  128 => 25,  125 => 24,  119 => 23,  116 => 22,  113 => 21,  108 => 20,  105 => 19,  102 => 18,  97 => 17,  94 => 16,  91 => 15,  88 => 14,  85 => 13,  82 => 12,  79 => 11,  73 => 10,  70 => 9,  67 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set ressources = {} %}
{% for ressource in listeRessources %}
\t{% set evenementsArr = {} %}
\t{% for evenement in ressource.getVisibleEvenements %}
\t\t{% set etiquettes =  { } %}
\t\t{% for etiquette in evenement.getVisibleEtiquettes %}
\t\t\t{%  set etiquetteArray ={(etiquette.getId): {'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } }   %}
\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t{% endfor %}
\t\t{% if evenement.getVisibleLieu is not null %}
\t\t\t{% set lieu = {'ville':(evenement.getVisibleLieu.getVille),'CP':(evenement.getVisibleLieu.getCP),'adresse':(evenement.getVisibleLieu.getAdresse),'nomBatiment':(evenement.getVisibleLieu.getNomBatiment),'url':  (absolute_url(path('detail_lieu', {'id' : evenement.getVisibleLieu.getId}))) }%}
\t\t{% else %}
\t\t\t{% set lieu = null %}
\t\t{% endif %}
\t\t{% set passages =  { } %}
\t\t{% for passage in evenement.getVisiblePassages %}
\t\t\t{% if passage.getVisibleGroupe is not null %}
\t\t\t\t{% set etiquettes = { } %}
\t\t\t\t{% for etiquette in passage.getVisibleGroupe.getVisibleEtiquettes %}
\t\t\t\t\t{%  set etiquetteArray ={(etiquette.getId): {'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } }   %}
\t\t\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set genres = { } %}
\t\t\t\t{% for genre in passage.getVisibleGroupe.getVisibleGenresMusicaux %}
\t\t\t\t\t{%  set genreArray ={(genre.getId) : {'id':genre.getId, 'nom':genre.getNom,'url':  (absolute_url(path('detail_genreMusical', {'id' : genre.getId}))) }} %}
\t\t\t\t\t{% set genres = genres|merge(genreArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set labels = { } %}
\t\t\t\t{% for label in passage.getVisibleGroupe.getVisibleLabels %}
\t\t\t\t\t{%  set labelArray ={(label.getId) : {'id':label.getId, 'nom':label.getNom,'url':  (absolute_url(path('detail_label', {'id' : label.getId}))) }}%}
\t\t\t\t\t{% set labels = labels|merge(labelArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set membres = { } %}
\t\t\t\t{% for membre in passage.getVisibleGroupe.getVisibleMembres %}
\t\t\t\t\t{% set etiquettes = { } %}
\t\t\t\t\t{% if membre.getVisibleMusicien is not null %}
\t\t\t\t\t\t{% for etiquette in membre.getVisibleMusicien.getVisibleEtiquettes %}
\t\t\t\t\t\t\t{%  set etiquetteArray ={(etiquette.getId): {'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } }   %}
\t\t\t\t\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{%  set musicien ={'id':membre.getVisibleMusicien.getId, 'nom':membre.getVisibleMusicien.getNom,'prenom':membre.getVisibleMusicien.getPrenom,'nomScene':membre.getVisibleMusicien.getNomScene,'dateNaissance':membre.getVisibleMusicien.getDateNaissance,'lienImage':membre.getVisibleMusicien.getLienImage,
\t\t\t\t\t\t'image':membre.getVisibleMusicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleMusicien, 'imageFile')) ): '', 
\t\t\t\t\t\t'etiquettes':etiquettes,'url':  (absolute_url(path('detail_musicien', {'id' : membre.getVisibleMusicien.getId}))) } %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{%  set musicien ={} %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{%  set instruments ={} %}
\t\t\t\t\t{% for instrument in membre.getVisibleInstruments %}
\t\t\t\t\t\t{%  set instrumentArray ={(instrument.getId) : {'id':instrument.getId, 'nom':instrument.getNom,'url':  (absolute_url(path('detail_instrument', {'id' : instrument.getId}))) }} %}
\t\t\t\t\t\t{% set instruments = instruments|merge(instrumentArray) %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{%  set membreArray ={(membre.getId) : {'id':membre.getId, 'actif':membre.getActif,'musicien':musicien,'instruments' : instruments,'url':  (absolute_url(path('detail_membre', {'id' : membre.getId}))) }} %}
\t\t\t\t\t{% set membres = membres|merge(membreArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set groupe = 
\t\t\t\t\t{
\t\t\t\t\t\t'id' : passage.getVisibleGroupe.getId,
\t\t\t\t\t\t'dateCreation':passage.getVisibleGroupe.getDateCreation,
\t\t\t\t\t\t'biographie':passage.getVisibleGroupe.getBiographie,
\t\t\t\t\t\t'lienImage':passage.getVisibleGroupe.getLienImage,
\t\t\t\t\t\t'image':passage.getVisibleGroupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(passage.getVisibleGroupe, 'imageFile')) ): '', 
\t\t\t\t\t\t'etiquettes':etiquettes,
\t\t\t\t\t\t'genreMusicaux':genres,
\t\t\t\t\t\t'labels':labels,
\t\t\t\t\t\t'membres':membres,
\t\t\t\t\t\t'nationalite': passage.getVisibleGroupe.getVisibleNationalite is not null ? passage.getVisibleGroupe.getVisibleNationalite.getNom : null,
\t\t\t\t\t\t'url':  (absolute_url(path('detail_groupe', {'id' : passage.getVisibleGroupe.getId}))) }%}
\t\t\t{% else %}
\t\t\t\t{% set groupe = {} %}
\t\t\t{% endif %}
\t\t\t{%  set passageArray ={ 
\t\t\t\t(passage.getId) :
\t\t\t\t{
\t\t\t\t\t'id':passage.getId, 
\t\t\t\t\t'dateDebut':passage.getDateDebut is not null ? passage.getDateDebut.format(\"d-m-Y H:i\") : null, 
\t\t\t\t\t'dateFin':passage.getDateFin is not null ? passage.getDateFin.format(\"d-m-Y H:i\") : null ,
\t\t\t\t\t'groupe':groupe,
\t\t\t\t\t'url':  (absolute_url(path('detail_passage', {'id' : passage.getId}))) 
\t\t\t\t}} %}
\t\t\t{% set passages = passages|merge(passageArray) %}
\t\t{% endfor %}
\t\t{% set evenementArr =  {'id' : (evenement.getId),\"dateDebut\": (evenement.getDateDebut.format(\"d-m-Y H:i\")),\"dateFin\": (evenement.getDateFin.format(\"d-m-Y H:i\")),\"description\": (evenement.getDescription),\"titre\": (evenement.getTitre),'etiquettes' : etiquettes,'lieu':lieu,'passages':passages,'url':  (absolute_url(path('detail_api_evenement', {'id' : evenement.getId}))) } %}
\t\t{% set evenementsArr = evenementsArr|merge(evenementArr) %}
\t{% endfor %}
\t{% set etiquettesRess = { } %}
\t{% for etiquette in ressource.getVisibleEtiquettes %}
\t\t{%  set etiquetteArray = {(etiquette.getId):{'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } }   %}
\t\t{% set etiquettesRess = etiquettesRess|merge(etiquetteArray) %}
\t{% endfor %}
\t{% set groupes = { } %}
\t{% for groupe in ressource.getVisibleGroupes %}
\t\t{% set groupeArray = {(groupe.getId):{'id':groupe.getId,'dateCreation':groupe.getDateCreation,'biographie':groupe.getBiographie,'image':groupe.getImage,'nationalite':groupe.getVisibleNationalite is not null ? groupe.getVisibleNationalite.getNom : null ,'url':(absolute_url(path('detail_groupe',{'id':groupe.getId})))}} %}
\t\t{% set groupes = groupes|merge(groupeArray) %}
\t{% endfor %}
\t{% set ressourceArr =  {(ressource.getId) :{'id' : (ressource.getId),\"lien\": (ressource.getLien),'titre': (ressource.getTitre),'image':ressource.getNom is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(ressource, 'file')) ): '',\"etiquettes\": etiquettesRess,\"evenements\" : evenementsArr,\"groupes\": groupes,\"credits\" : ressource.getCredits,'type': (ressource.getType.getLabel),'url':  (absolute_url(path('detail_ressource', {'id' : ressource.getId})))} } %}
\t{% set ressources = ressources|merge(ressourceArr) %}
{% endfor %}
{{ ressources|unescape|raw }}
{% endapply %}
", "ressources/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\ressources\\listeApi.html.twig");
    }
}
