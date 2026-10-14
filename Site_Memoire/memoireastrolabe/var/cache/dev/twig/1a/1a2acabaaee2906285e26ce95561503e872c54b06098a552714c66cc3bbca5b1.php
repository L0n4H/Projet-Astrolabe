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
class __TwigTemplate_ce307cca8d2e9ea330762d48f66c744adf04047be9113cdbb82390f494817dfa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "types_evenements/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "types_evenements/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["typesEvenementsArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listetypesEvenements"]) || array_key_exists("listetypesEvenements", $context) ? $context["listetypesEvenements"] : (function () { throw new RuntimeError('Variable "listetypesEvenements" does not exist.', 3, $this->source); })()));
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
                    $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 9, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 9, $this->source); })()));
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
                    $context["ressources"] = twig_array_merge((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 14, $this->source); })()), (isset($context["ressourceArray"]) || array_key_exists("ressourceArray", $context) ? $context["ressourceArray"] : (function () { throw new RuntimeError('Variable "ressourceArray" does not exist.', 14, $this->source); })()));
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
                            $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 27, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 27, $this->source); })()));
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
                                $context["categoriesMusical"] = twig_array_merge((isset($context["categoriesMusical"]) || array_key_exists("categoriesMusical", $context) ? $context["categoriesMusical"] : (function () { throw new RuntimeError('Variable "categoriesMusical" does not exist.', 34, $this->source); })()), (isset($context["categorieMusicalArray"]) || array_key_exists("categorieMusicalArray", $context) ? $context["categorieMusicalArray"] : (function () { throw new RuntimeError('Variable "categorieMusicalArray" does not exist.', 34, $this->source); })()));
                                // line 35
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 36
                            echo "\t\t\t\t\t";
                            $context["genreArray"] = [twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 36) => ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 36), "nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "any", false, false, false, 36), "categorie" => (isset($context["categoriesMusical"]) || array_key_exists("categoriesMusical", $context) ? $context["categoriesMusical"] : (function () { throw new RuntimeError('Variable "categoriesMusical" does not exist.', 36, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 36)]))]];
                            // line 37
                            echo "\t\t\t\t\t";
                            $context["genres"] = twig_array_merge((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 37, $this->source); })()), (isset($context["genreArray"]) || array_key_exists("genreArray", $context) ? $context["genreArray"] : (function () { throw new RuntimeError('Variable "genreArray" does not exist.', 37, $this->source); })()));
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
                            $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 42, $this->source); })()), (isset($context["labelArray"]) || array_key_exists("labelArray", $context) ? $context["labelArray"] : (function () { throw new RuntimeError('Variable "labelArray" does not exist.', 42, $this->source); })()));
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
                                    $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 50, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 50, $this->source); })()));
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
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getPrenom", [], "any", false, false, false, 54), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getNomScene", [], "any", false, false, false, 54), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getDateNaissance", [], "any", false, false, false, 54), "etiquettes" => (isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 54, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 54), "getId", [], "any", false, false, false, 54)]))];
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
                                $context["instruments"] = twig_array_merge((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 61, $this->source); })()), (isset($context["instrumentArray"]) || array_key_exists("instrumentArray", $context) ? $context["instrumentArray"] : (function () { throw new RuntimeError('Variable "instrumentArray" does not exist.', 61, $this->source); })()));
                                // line 62
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 63
                            echo "\t\t\t\t\t";
                            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 63) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 63), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 63), "musicien" => (isset($context["musicien"]) || array_key_exists("musicien", $context) ? $context["musicien"] : (function () { throw new RuntimeError('Variable "musicien" does not exist.', 63, $this->source); })()), "instruments" => (isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 63, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 63)]))]];
                            // line 64
                            echo "\t\t\t\t\t";
                            $context["membres"] = twig_array_merge((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 64, $this->source); })()), (isset($context["membreArray"]) || array_key_exists("membreArray", $context) ? $context["membreArray"] : (function () { throw new RuntimeError('Variable "membreArray" does not exist.', 64, $this->source); })()));
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
(isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 86, $this->source); })()), "genreMusicaux" =>                         // line 87
(isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 87, $this->source); })()), "labels" =>                         // line 88
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 88, $this->source); })()), "membres" =>                         // line 89
(isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 89, $this->source); })()), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 90
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 90), "getVisibleNationalite", [], "any", false, false, false, 90))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 90), "getVisibleNationalite", [], "any", false, false, false, 90), "getNom", [], "any", false, false, false, 90)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 91
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 91), "getId", [], "any", false, false, false, 91)]))];
                        // line 93
                        echo "\t\t\t\t";
                        $context["passageArray"] = [twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 93) => ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 93), "dateDebut" => (isset($context["dateDebPass"]) || array_key_exists("dateDebPass", $context) ? $context["dateDebPass"] : (function () { throw new RuntimeError('Variable "dateDebPass" does not exist.', 93, $this->source); })()), "dateFin" => (isset($context["dateFinPass"]) || array_key_exists("dateFinPass", $context) ? $context["dateFinPass"] : (function () { throw new RuntimeError('Variable "dateFinPass" does not exist.', 93, $this->source); })()), "groupe" => (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 93, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_passage", ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 93)]))]];
                        // line 94
                        echo "\t\t\t\t";
                        $context["passages"] = twig_array_merge((isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 94, $this->source); })()), (isset($context["passageArray"]) || array_key_exists("passageArray", $context) ? $context["passageArray"] : (function () { throw new RuntimeError('Variable "passageArray" does not exist.', 94, $this->source); })()));
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
$context["evenement"], "getDateDebut", [], "any", false, false, false, 101), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 101), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 101), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 101), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 101), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 101), "etiquettes" => (isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 101, $this->source); })()), "ressources" => (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 101, $this->source); })()), "lieu" => (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 101, $this->source); })()), "passages" => (isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 101, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 101)]))]];
                // line 102
                echo "\t\t";
                $context["evenements"] = twig_array_merge((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 102, $this->source); })()), (isset($context["evenementArr"]) || array_key_exists("evenementArr", $context) ? $context["evenementArr"] : (function () { throw new RuntimeError('Variable "evenementArr" does not exist.', 102, $this->source); })()));
                // line 103
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t";
            $context["typeEvenementArr"] = [twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getID", [], "any", false, false, false, 104) => ["id" => twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getID", [], "any", false, false, false, 104), "label" => twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getLabel", [], "any", false, false, false, 104), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_typeEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["typeEvenement"], "getId", [], "any", false, false, false, 104)])), "evenements" => (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 104, $this->source); })())]];
            // line 105
            echo "\t";
            $context["typesEvenementsArr"] = twig_array_merge((isset($context["typesEvenementsArr"]) || array_key_exists("typesEvenementsArr", $context) ? $context["typesEvenementsArr"] : (function () { throw new RuntimeError('Variable "typesEvenementsArr" does not exist.', 105, $this->source); })()), (isset($context["typeEvenementArr"]) || array_key_exists("typeEvenementArr", $context) ? $context["typeEvenementArr"] : (function () { throw new RuntimeError('Variable "typeEvenementArr" does not exist.', 105, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeEvenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["typesEvenementsArr"]) || array_key_exists("typesEvenementsArr", $context) ? $context["typesEvenementsArr"] : (function () { throw new RuntimeError('Variable "typesEvenementsArr" does not exist.', 107, $this->source); })()));
        echo "
";
        $___internal_parse_13_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_13_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  382 => 1,  377 => 107,  370 => 105,  367 => 104,  361 => 103,  358 => 102,  356 => 101,  355 => 100,  353 => 99,  347 => 98,  344 => 97,  341 => 96,  338 => 95,  335 => 94,  332 => 93,  330 => 91,  329 => 90,  328 => 89,  327 => 88,  326 => 87,  325 => 86,  324 => 85,  323 => 84,  322 => 83,  321 => 82,  320 => 81,  319 => 79,  316 => 78,  313 => 77,  310 => 76,  307 => 75,  304 => 74,  302 => 73,  299 => 72,  296 => 71,  293 => 70,  290 => 69,  287 => 68,  285 => 67,  282 => 66,  276 => 65,  273 => 64,  270 => 63,  264 => 62,  261 => 61,  258 => 60,  253 => 59,  250 => 58,  247 => 57,  244 => 56,  241 => 55,  239 => 54,  238 => 53,  236 => 52,  230 => 51,  227 => 50,  224 => 49,  219 => 48,  216 => 47,  213 => 46,  208 => 45,  205 => 44,  199 => 43,  196 => 42,  193 => 41,  188 => 40,  185 => 39,  179 => 38,  176 => 37,  173 => 36,  167 => 35,  164 => 34,  161 => 33,  156 => 32,  153 => 31,  148 => 30,  145 => 29,  139 => 28,  136 => 27,  133 => 26,  128 => 25,  125 => 24,  122 => 23,  117 => 22,  114 => 21,  111 => 20,  108 => 19,  105 => 18,  102 => 17,  99 => 16,  93 => 15,  90 => 14,  87 => 13,  82 => 12,  79 => 11,  73 => 10,  70 => 9,  67 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set typesEvenementsArr = { } %}
{% for typeEvenement in listetypesEvenements %}
\t{% set evenements = { } %}
\t{% for evenement in typeEvenement.getVisibleEvenements %}
\t\t{% set etiquettes = { } %}
\t\t{% for etiquette in evenement.getVisibleEtiquettes %}
\t\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles, 'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t{% endfor %}
\t\t{% set ressources = { } %}
\t\t{% for ressource in evenement.getVisibleRessources %}
\t\t\t{% set ressourceArray = { (ressource.getId) : { 'id':ressource.getId, 'lien':ressource.getLien , 'titre': (ressource.getTitre),'nomFile': (ressource.getNom), 'typeRessource':ressource.getType.getLabel } } %}
\t\t\t{% set ressources = ressources|merge(ressourceArray) %}
\t\t{% endfor %}
\t\t{% if evenement.getVisibleLieu is not  null %}
\t\t\t{% set lieu = { 'ville':(evenement.getLieu.getVille), 'CP':(evenement.getLieu.getCP), 'adresse':(evenement.getLieu.getAdresse), 'nomBatiment':(evenement.getLieu.getNomBatiment), 'url': (absolute_url(path('detail_lieu', {'id' : evenement.getLieu.getId}))) } %}
\t\t{% else %}
\t\t\t{% set lieu = null %}
\t\t{% endif %}
\t\t{% set passages = { } %}
\t\t{% for passage in evenement.getVisiblePassages %}
\t\t\t{% if passage.getVisibleGroupe is not null %}
\t\t\t\t{% set etiquettes = { } %}
\t\t\t\t{% for etiquette in passage.getVisibleGroupe.getVisibleEtiquettes %}
\t\t\t\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles, 'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set genres = { } %}
\t\t\t\t{% for genre in passage.getVisibleGroupe.getVisibleGenresMusicaux %}
\t\t\t\t\t{% set categoriesMusical = { } %}
\t\t\t\t\t{% for categorieMusical in genre.getCategorieMusicales %}
\t\t\t\t\t\t{% set categorieMusicalArray = { (categorieMusical.getId): { 'id' : categorieMusical.getId, 'nom':categorieMusical.getNom, 'url': (absolute_url(path('detail_categorieMusicale', {'id' : categorieMusical.getId}))) } } %}
\t\t\t\t\t\t{% set categoriesMusical = categoriesMusical|merge(categorieMusicalArray) %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% set genreArray ={ (genre.getId) : { 'id':genre.getId, 'nom':genre.getNom, 'categorie':categoriesMusical, 'url': (absolute_url(path('detail_genreMusical', {'id' : genre.getId}))) } } %}
\t\t\t\t\t{% set genres = genres|merge(genreArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set labels = { } %}
\t\t\t\t{% for label in passage.getVisibleGroupe.getVisibleLabels %}
\t\t\t\t\t{% set labelArray = { (label.getId) : { 'id':label.getId, 'nom':label.getNom, 'url': (absolute_url(path('detail_label', {'id' : label.getId}))) } } %}
\t\t\t\t\t{% set labels = labels|merge(labelArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set membres = { } %}
\t\t\t\t{% for membre in passage.getVisibleGroupe.getVisibleMembres %}
\t\t\t\t\t{% if membre.getVisibleMusicien is not null %}
\t\t\t\t\t\t{% set etiquettes = { } %}
\t\t\t\t\t\t{% for etiquette in membre.getVisibleMusicien.getVisibleEtiquettes %}
\t\t\t\t\t\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,  'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t\t\t\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% set musicien ={ 'id':membre.getVisibleMusicien.getId, 'nom':membre.getVisibleMusicien.getNom, 'lienImage':membre.getVisibleMusicien.getLienImage,
\t\t\t\t\t\t'image':membre.getVisibleMusicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleMusicien, 'imageFile')) ): '', 
\t\t\t\t\t\t'prenom':membre.getVisibleMusicien.getPrenom, 'nomScene':membre.getVisibleMusicien.getNomScene, 'dateNaissance':membre.getVisibleMusicien.getDateNaissance, 'etiquettes':etiquettes, 'url': (absolute_url(path('detail_musicien', {'id' : membre.getVisibleMusicien.getId}))) } %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% set musicien ={} %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% set instruments ={} %}
\t\t\t\t\t{% for instrument in membre.getVisibleInstruments %}
\t\t\t\t\t\t{% set instrumentArray ={ (instrument.getId) : { 'id':instrument.getId, 'nom':instrument.getNom, 'url': (absolute_url(path('detail_instrument', {'id' : instrument.getId}))) } } %}
\t\t\t\t\t\t{% set instruments = instruments|merge(instrumentArray) %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% set membreArray ={ (membre.getId) : { 'id':membre.getId, 'actif':membre.getActif, 'musicien':musicien, 'instruments' : instruments, 'url': (absolute_url(path('detail_membre', {'id' : membre.getId}))) } } %}
\t\t\t\t\t{% set membres = membres|merge(membreArray) %}
\t\t\t\t{% endfor %}
\t\t\t
\t\t\t\t{% if  passage.getDateDebut is defined and  passage.getDateDebut is not null %}
\t\t\t\t\t{% set dateDebPass =  passage.getDateDebut.format(\"d-m-Y H:i\") %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set dateDebPass =  null %}
\t\t\t\t{% endif %}

\t\t\t\t{% if  passage.getDateFin is defined and  passage.getDateFin is not null %}
\t\t\t\t\t{% set dateFinPass =  passage.getDateFin.format(\"d-m-Y H:i\") %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set dateFinPass =  null %}
\t\t\t\t{% endif %}

\t\t\t\t{% set groupe = 
\t\t\t\t{ 
\t\t\t\t\t'id' : passage.getVisibleGroupe.getId, 
\t\t\t\t\t'dateCreation':passage.getVisibleGroupe.getDateCreation, 
\t\t\t\t\t'biographie':passage.getVisibleGroupe.getBiographie, 
\t\t\t\t\t'lienImage':passage.getVisibleGroupe.getLienImage,
\t\t\t\t\t'image':passage.getVisibleGroupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(passage.getVisibleGroupe, 'imageFile')) ): '', 
\t\t\t\t\t'etiquettes':etiquettes, 
\t\t\t\t\t'genreMusicaux':genres, 
\t\t\t\t\t'labels':labels, 
\t\t\t\t\t'membres':membres, 
\t\t\t\t\t'nationalite': passage.getVisibleGroupe.getVisibleNationalite is not null ? passage.getVisibleGroupe.getVisibleNationalite.getNom : null, 
\t\t\t\t\t'url': (absolute_url(path('detail_groupe', {'id' : passage.getVisibleGroupe.getId}))) 
\t\t\t\t} %}
\t\t\t\t{% set passageArray = { (passage.getId) : { 'id':passage.getId, 'dateDebut':dateDebPass , 'dateFin':dateFinPass, 'groupe':groupe, 'url': (absolute_url(path('detail_passage', {'id' : passage.getId}))) } } %}
\t\t\t\t{% set passages = passages|merge(passageArray) %}
\t\t\t{% else %}
\t\t\t\t{% set groupe = {} %}
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t{% set evenementArr = { (evenement.getId) :{ 'id' : (evenement.getId),'lienImage':evenement.getLienImage,
\t\t'image':evenement.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(evenement, 'imageFile')) ): '', 
\t\t\"dateDebut\": (evenement.getDateDebut.format(\"d-m-Y H:i\")), \"dateFin\": (evenement.getDateFin.format(\"d-m-Y H:i\")), \"description\": (evenement.getDescription), \"titre\": (evenement.getTitre), 'etiquettes' : etiquettes, 'ressources' : ressources, 'lieu':lieu, 'passages':passages, 'url': (absolute_url(path('detail_api_evenement', {'id' : evenement.getId}))) } } %}
\t\t{% set evenements = evenements|merge(evenementArr) %}
\t{% endfor %}
\t{% set typeEvenementArr = { (typeEvenement.getID):{ \"id\":typeEvenement.getID, \"label\":typeEvenement.getLabel, 'url': (absolute_url(path('detail_typeEvenement', {'id' : typeEvenement.getId}))), 'evenements':evenements, } } %}
\t{% set typesEvenementsArr = typesEvenementsArr|merge(typeEvenementArr) %}
{% endfor %}
{{ typesEvenementsArr|unescape|raw }}
{% endapply  %}
", "types_evenements/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\types_evenements\\listeApi.html.twig");
    }
}
