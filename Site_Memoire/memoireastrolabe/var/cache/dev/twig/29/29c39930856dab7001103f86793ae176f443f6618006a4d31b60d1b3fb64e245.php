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
class __TwigTemplate_ed0c2b6b0bdb8d468f492308574b42dbf17422701d612e764da450009eb07bdf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genres_musicaux/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genres_musicaux/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["genresMusicauxArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeGenresMusicaux"]) || array_key_exists("listeGenresMusicaux", $context) ? $context["listeGenresMusicaux"] : (function () { throw new RuntimeError('Variable "listeGenresMusicaux" does not exist.', 3, $this->source); })()));
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
                $context["groupes"] = twig_array_merge((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 11, $this->source); })()), (isset($context["groupeArray"]) || array_key_exists("groupeArray", $context) ? $context["groupeArray"] : (function () { throw new RuntimeError('Variable "groupeArray" does not exist.', 11, $this->source); })()));
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
                    $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 20, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 20, $this->source); })()));
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
                    $context["ressources"] = twig_array_merge((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 25, $this->source); })()), (isset($context["ressourceArray"]) || array_key_exists("ressourceArray", $context) ? $context["ressourceArray"] : (function () { throw new RuntimeError('Variable "ressourceArray" does not exist.', 25, $this->source); })()));
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
                            $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 40, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 40, $this->source); })()));
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
                            $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 44, $this->source); })()), (isset($context["labelArray"]) || array_key_exists("labelArray", $context) ? $context["labelArray"] : (function () { throw new RuntimeError('Variable "labelArray" does not exist.', 44, $this->source); })()));
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
                                $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 50, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 50, $this->source); })()));
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
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getPrenom", [], "any", false, false, false, 54), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getNomScene", [], "any", false, false, false, 54), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getDateNaissance", [], "any", false, false, false, 54), "etiquettes" => (isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 54, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getId", [], "any", false, false, false, 54)]))];
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
                                $context["instruments"] = twig_array_merge((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 59, $this->source); })()), (isset($context["instrumentArray"]) || array_key_exists("instrumentArray", $context) ? $context["instrumentArray"] : (function () { throw new RuntimeError('Variable "instrumentArray" does not exist.', 59, $this->source); })()));
                                // line 60
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 61
                            echo "\t\t\t\t\t";
                            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 61) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 61), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 61), "musicien" => (isset($context["musicien"]) || array_key_exists("musicien", $context) ? $context["musicien"] : (function () { throw new RuntimeError('Variable "musicien" does not exist.', 61, $this->source); })()), "instruments" => (isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 61, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 61)]))]];
                            // line 62
                            echo "\t\t\t\t\t";
                            $context["membres"] = twig_array_merge((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 62, $this->source); })()), (isset($context["membreArray"]) || array_key_exists("membreArray", $context) ? $context["membreArray"] : (function () { throw new RuntimeError('Variable "membreArray" does not exist.', 62, $this->source); })()));
                            // line 63
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "\t\t\t\t";
                        $context["groupe"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getId", [], "any", false, false, false, 64), "dateCreation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getDateCreation", [], "any", false, false, false, 64), "biographie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getBiographie", [], "any", false, false, false, 64), "image" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getImage", [], "any", false, false, false, 64), "etiquettes" => (isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 64, $this->source); })()), "labels" => (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 64, $this->source); })()), "membres" => (isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 64, $this->source); })()), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getVisibleNationalite", [], "any", false, false, false, 64))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getVisibleNationalite", [], "any", false, false, false, 64), "getNom", [], "any", false, false, false, 64)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 64), "getId", [], "any", false, false, false, 64)]))];
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
                    $context["passageArray"] = [twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 80) => ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 80), "dateDebut" => (isset($context["dateDebPass"]) || array_key_exists("dateDebPass", $context) ? $context["dateDebPass"] : (function () { throw new RuntimeError('Variable "dateDebPass" does not exist.', 80, $this->source); })()), "dateFin" => (isset($context["dateFinPass"]) || array_key_exists("dateFinPass", $context) ? $context["dateFinPass"] : (function () { throw new RuntimeError('Variable "dateFinPass" does not exist.', 80, $this->source); })()), "groupe" => (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 80, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_passage", ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 80)]))]];
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
                $context["evenementArr"] = [twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 83) => ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 83), "type" => (( !(null === twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 83))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 83), "getLabel", [], "any", false, false, false, 83)) : (null)), "lienImage" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getLienImage", [], "any", false, false, false, 83), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 84
$context["evenement"], "getImage", [], "any", false, false, false, 84))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["evenement"], "imageFile"))) : ("")), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 85
$context["evenement"], "getDateDebut", [], "any", false, false, false, 85), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 85), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 85), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 85), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 85), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 85), "etiquettes" => (isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 85, $this->source); })()), "ressources" => (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 85, $this->source); })()), "lieu" => (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 85, $this->source); })()), "passages" => (isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 85, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 85)]))]];
                // line 86
                echo "\t\t";
                $context["evenementsArr"] = twig_array_merge((isset($context["evenementsArr"]) || array_key_exists("evenementsArr", $context) ? $context["evenementsArr"] : (function () { throw new RuntimeError('Variable "evenementsArr" does not exist.', 86, $this->source); })()), (isset($context["evenementArr"]) || array_key_exists("evenementArr", $context) ? $context["evenementArr"] : (function () { throw new RuntimeError('Variable "evenementArr" does not exist.', 86, $this->source); })()));
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
                $context["categoriesMusicales"] = twig_array_merge((isset($context["categoriesMusicales"]) || array_key_exists("categoriesMusicales", $context) ? $context["categoriesMusicales"] : (function () { throw new RuntimeError('Variable "categoriesMusicales" does not exist.', 93, $this->source); })()), (isset($context["categorieMusicalArray"]) || array_key_exists("categorieMusicalArray", $context) ? $context["categorieMusicalArray"] : (function () { throw new RuntimeError('Variable "categorieMusicalArray" does not exist.', 93, $this->source); })()));
                // line 94
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t";
            $context["genreMusicalArr"] = [twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getID", [], "any", false, false, false, 95) => ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getID", [], "any", false, false, false, 95), "nom" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getNom", [], "any", false, false, false, 95), "groupes" => (isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 95, $this->source); })()), "evenements" => (isset($context["evenementsArr"]) || array_key_exists("evenementsArr", $context) ? $context["evenementsArr"] : (function () { throw new RuntimeError('Variable "evenementsArr" does not exist.', 95, $this->source); })()), "categoriesMusicales" => (isset($context["categoriesMusicales"]) || array_key_exists("categoriesMusicales", $context) ? $context["categoriesMusicales"] : (function () { throw new RuntimeError('Variable "categoriesMusicales" does not exist.', 95, $this->source); })())]];
            // line 96
            echo "\t";
            $context["genresMusicauxArr"] = twig_array_merge((isset($context["genresMusicauxArr"]) || array_key_exists("genresMusicauxArr", $context) ? $context["genresMusicauxArr"] : (function () { throw new RuntimeError('Variable "genresMusicauxArr" does not exist.', 96, $this->source); })()), (isset($context["genreMusicalArr"]) || array_key_exists("genreMusicalArr", $context) ? $context["genreMusicalArr"] : (function () { throw new RuntimeError('Variable "genreMusicalArr" does not exist.', 96, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genreMusical'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["genresMusicauxArr"]) || array_key_exists("genresMusicauxArr", $context) ? $context["genresMusicauxArr"] : (function () { throw new RuntimeError('Variable "genresMusicauxArr" does not exist.', 98, $this->source); })()));
        echo "
";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_3_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  371 => 1,  366 => 98,  359 => 96,  356 => 95,  350 => 94,  347 => 93,  344 => 92,  339 => 91,  337 => 90,  334 => 89,  332 => 88,  326 => 87,  323 => 86,  321 => 85,  320 => 84,  318 => 83,  312 => 82,  309 => 81,  307 => 80,  304 => 79,  301 => 78,  298 => 77,  295 => 76,  292 => 75,  290 => 74,  287 => 73,  284 => 72,  281 => 71,  278 => 70,  275 => 69,  272 => 68,  269 => 67,  266 => 66,  263 => 65,  260 => 64,  254 => 63,  251 => 62,  248 => 61,  242 => 60,  239 => 59,  237 => 58,  234 => 57,  229 => 56,  226 => 55,  224 => 54,  223 => 53,  221 => 52,  215 => 51,  212 => 50,  209 => 49,  204 => 48,  201 => 47,  196 => 46,  190 => 45,  187 => 44,  184 => 43,  179 => 42,  173 => 41,  170 => 40,  167 => 39,  162 => 38,  159 => 37,  156 => 36,  153 => 35,  150 => 34,  145 => 33,  142 => 32,  139 => 31,  136 => 30,  133 => 29,  130 => 28,  127 => 27,  121 => 26,  118 => 25,  115 => 24,  110 => 23,  107 => 22,  101 => 21,  98 => 20,  95 => 19,  90 => 18,  87 => 17,  82 => 16,  79 => 15,  76 => 13,  70 => 12,  67 => 11,  65 => 10,  64 => 9,  63 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set genresMusicauxArr = { } %}
{% for genreMusical in listeGenresMusicaux %}
\t{% set groupes = { } %}
\t{% for groupe in genreMusical.getVisibleGroupes %}
\t
\t\t{% set groupeArray = {(groupe.getId):{'id':groupe.getId,'dateCreation':groupe.getDateCreation, 'biographie':groupe.getBiographie,'lienImage':groupe.getLienImage,
\t\t'image':groupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(groupe, 'imageFile')) ): '', 
\t\t'nationalite':groupe.getVisibleNationalite is not null ? groupe.getVisibleNationalite.getNom : null ,
\t\t'url':(absolute_url(path('detail_groupe',{'id':groupe.getId})))}} %}
\t\t{% set groupes = groupes|merge(groupeArray) %}
\t{% endfor %}

\t{# ajouter evenement #}
\t{% set evenementsArr = { } %}
\t{% for evenement in genreMusical.getVisibleEvenements %}
\t\t{% set etiquettes = { } %}
\t\t{% for etiquette in evenement.getVisibleEtiquettes %}
\t\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles, 'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t{% endfor %}
\t\t{% set ressources = { } %}
\t\t{% for ressource in evenement.getVisibleRessources %}
\t\t\t{% set ressourceArray = { (ressource.getId) : { 'id':ressource.getId, 'lien':ressource.getLien , 'titre': (ressource.getTitre),'nomFile': (ressource.getNom), 'typeRessource':ressource.getType.getLabel, 'url': (absolute_url(path('detail_ressource', {'id' : ressource.getId}))) } } %}
\t\t\t{% set ressources = ressources|merge(ressourceArray) %}
\t\t{% endfor %}
\t\t{% if evenement.getVisibleLieu != null %}
\t\t\t{% set lieu = { 'ville':(evenement.getVisibleLieu.getVille), 'CP':(evenement.getVisibleLieu.getCP), 'adresse':(evenement.getVisibleLieu.getAdresse), 'nomBatiment':(evenement.getVisibleLieu.getNomBatiment), 'url': (absolute_url(path('detail_lieu', {'id' : evenement.getVisibleLieu.getId}))) } %}
\t\t{% else %}
\t\t\t{% set lieu = null %}
\t\t{% endif %}
\t\t{% set passages = { } %}
\t\t{% for passage in evenement.getVisiblePassages %}
\t\t\t{% set etiquettes = { } %}
\t\t\t{% set labels = { } %}
\t\t\t{% set membres = { } %}
\t\t\t{% if passage.getVisibleGroupe is not null %}
\t\t\t\t{% for etiquette in passage.getVisibleGroupe.getVisibleEtiquettes %}
\t\t\t\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% for label in passage.getVisibleGroupe.getVisibleLabels %}
\t\t\t\t\t{% set labelArray = { (label.getId) : { 'id':label.getId, 'nom':label.getNom, 'url': (absolute_url(path('detail_label', {'id' : label.getId}))) } } %}
\t\t\t\t\t{% set labels = labels|merge(labelArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% for membre in passage.getVisibleGroupe.getVisibleMembres %}
\t\t\t\t\t{% set etiquettes = { } %}
\t\t\t\t\t{% for etiquette in membre.getVisibleMusicien.getVisibleEtiquettes %}
\t\t\t\t\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles, 'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t\t\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% set musicien ={ 'id':membre.getVisibleMusicien.getId, 'nom':membre.getVisibleMusicien.getNom, 'lienImage':membre.getVisibleMusicien.getLienImage,
\t\t\t\t\t'image':membre.getVisibleMusicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleMusicien, 'imageFile')) ): '', 
\t\t\t\t\t'prenom':membre.getVisibleMusicien.getPrenom, 'nomScene':membre.getVisibleMusicien.getNomScene, 'dateNaissance':membre.getVisibleMusicien.getDateNaissance, 'etiquettes':etiquettes, 'url': (absolute_url(path('detail_musicien', {'id' : membre.getVisibleMusicien.getId}))) } %}
\t\t\t\t\t{% set instruments ={} %}
\t\t\t\t\t{% for instrument in membre.getVisibleInstruments %}
\t\t\t\t\t
\t\t\t\t\t\t{% set instrumentArray ={ (instrument.getId) : { 'id':instrument.getId, 'nom':instrument.getNom, 'url': (absolute_url(path('detail_instrument', {'id' : instrument.getId}))) } } %}
\t\t\t\t\t\t{% set instruments = instruments|merge(instrumentArray) %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% set membreArray ={ (membre.getId) : { 'id':membre.getId, 'actif':membre.getActif, 'musicien':musicien, 'instruments' : instruments, 'url': (absolute_url(path('detail_membre', {'id' : membre.getId}))) } } %}
\t\t\t\t\t{% set membres = membres|merge(membreArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set groupe = { 'id' : passage.getVisibleGroupe.getId, 'dateCreation':passage.getVisibleGroupe.getDateCreation, 'biographie':passage.getVisibleGroupe.getBiographie, 'image':passage.getVisibleGroupe.getImage, 'etiquettes':etiquettes, 'labels':labels, 'membres':membres, 'nationalite': passage.getVisibleGroupe.getVisibleNationalite is not null ? passage.getVisibleGroupe.getVisibleNationalite.getNom : null, 'url': (absolute_url(path('detail_groupe', {'id' : passage.getVisibleGroupe.getId}))) } %}
\t\t\t{% else %}
\t\t\t\t{% set groupe =  null %}
\t\t\t{% endif %}
\t\t\t{% if  passage.getDateDebut is defined and  passage.getDateDebut is not null %}
\t\t\t\t{% set dateDebPass =  passage.getDateDebut.format(\"d-m-Y H:i\") %}
\t\t\t{% else %}
\t\t\t\t{% set dateDebPass =  null %}
\t\t\t{% endif %}

\t\t\t{% if  passage.getDateFin is defined and  passage.getDateFin is not null %}
\t\t\t\t{% set dateFinPass =  passage.getDateFin.format(\"d-m-Y H:i\") %}
\t\t\t{% else %}
\t\t\t\t{% set dateFinPass =  null %}
\t\t\t{% endif %}
\t\t\t
\t\t\t{% set passageArray = { (passage.getId) : { 'id':passage.getId, 'dateDebut':dateDebPass , 'dateFin':dateFinPass, 'groupe':groupe, 'url': (absolute_url(path('detail_passage', {'id' : passage.getId}))) } } %}
\t\t\t{% set passages = passages|merge(passageArray) %}
\t\t{% endfor %}
\t\t{% set evenementArr = { (evenement.getId) :{ 'id' : (evenement.getId), 'type': (evenement.getVisibleTypeEvenements is not null) ? evenement.getVisibleTypeEvenements.getLabel : null, 'lienImage':evenement.getLienImage,
\t\t'image':evenement.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(evenement, 'imageFile')) ): '', 
\t\t \"dateDebut\": (evenement.getDateDebut.format(\"d-m-Y H:i\")), \"dateFin\": (evenement.getDateFin.format(\"d-m-Y H:i\")), \"description\": (evenement.getDescription), \"titre\": (evenement.getTitre), 'etiquettes' : etiquettes, 'ressources' : ressources, 'lieu':lieu, 'passages':passages, 'url': (absolute_url(path('detail_api_evenement', {'id' : evenement.getId}))) } } %}
\t\t{% set evenementsArr = evenementsArr|merge(evenementArr) %}
\t{% endfor %}
\t{# end evenement #}

\t{% set categoriesMusicales = { } %}
\t{% for categorieMusical in genreMusical.getCategorieMusicales %}
\t\t{% set categorieMusicalArray = {(categorieMusical.getId):{'id':categorieMusical.getId,'nom':categorieMusical.getNom,'url':(absolute_url(path('detail_categorieMusicale',{'id':categorieMusical.getId})))}} %}
\t\t{% set categoriesMusicales = categoriesMusicales|merge(categorieMusicalArray) %}
\t{% endfor %}
\t{% set genreMusicalArr = {(genreMusical.getID):{\"id\":genreMusical.getID,\"nom\":genreMusical.getNom,\"groupes\":groupes,\"evenements\":evenementsArr,\"categoriesMusicales\":categoriesMusicales}} %}
\t{% set genresMusicauxArr = genresMusicauxArr|merge(genreMusicalArr) %}
{% endfor %}
{{ genresMusicauxArr|unescape|raw }}
{% endapply %}
", "genres_musicaux/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\genres_musicaux\\listeApi.html.twig");
    }
}
