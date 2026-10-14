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
class __TwigTemplate_db36888e5567b10aab1ffb0ccee7edb4c8cb76e610f19c81d7a021b3e08c1f49 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["evenementsArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEvenements"]) || array_key_exists("listeEvenements", $context) ? $context["listeEvenements"] : (function () { throw new RuntimeError('Variable "listeEvenements" does not exist.', 3, $this->source); })()));
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
                $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 7, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 7, $this->source); })()));
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
                $context["ressources"] = twig_array_merge((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 12, $this->source); })()), (isset($context["ressourceArray"]) || array_key_exists("ressourceArray", $context) ? $context["ressourceArray"] : (function () { throw new RuntimeError('Variable "ressourceArray" does not exist.', 12, $this->source); })()));
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
                $context["genresMusicaux"] = twig_array_merge((isset($context["genresMusicaux"]) || array_key_exists("genresMusicaux", $context) ? $context["genresMusicaux"] : (function () { throw new RuntimeError('Variable "genresMusicaux" does not exist.', 23, $this->source); })()), (isset($context["genreMusicalArray"]) || array_key_exists("genreMusicalArray", $context) ? $context["genreMusicalArray"] : (function () { throw new RuntimeError('Variable "genreMusicalArray" does not exist.', 23, $this->source); })()));
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
                        $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 36, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 36, $this->source); })()));
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
                            $context["categoriesMusical"] = twig_array_merge((isset($context["categoriesMusical"]) || array_key_exists("categoriesMusical", $context) ? $context["categoriesMusical"] : (function () { throw new RuntimeError('Variable "categoriesMusical" does not exist.', 42, $this->source); })()), (isset($context["categorieMusicalArray"]) || array_key_exists("categorieMusicalArray", $context) ? $context["categorieMusicalArray"] : (function () { throw new RuntimeError('Variable "categorieMusicalArray" does not exist.', 42, $this->source); })()));
                            // line 43
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "\t\t\t\t";
                        $context["genreArray"] = [twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 44) => ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 44), "nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "any", false, false, false, 44), "categorie" => (isset($context["categoriesMusical"]) || array_key_exists("categoriesMusical", $context) ? $context["categoriesMusical"] : (function () { throw new RuntimeError('Variable "categoriesMusical" does not exist.', 44, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 44)]))]];
                        // line 45
                        echo "\t\t\t\t";
                        $context["genres"] = twig_array_merge((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 45, $this->source); })()), (isset($context["genreArray"]) || array_key_exists("genreArray", $context) ? $context["genreArray"] : (function () { throw new RuntimeError('Variable "genreArray" does not exist.', 45, $this->source); })()));
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
                        $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 49, $this->source); })()), (isset($context["labelArray"]) || array_key_exists("labelArray", $context) ? $context["labelArray"] : (function () { throw new RuntimeError('Variable "labelArray" does not exist.', 49, $this->source); })()));
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
                                $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 56, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 56, $this->source); })()));
                                // line 57
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 58
                            echo "\t\t\t\t\t";
                            $context["musicien"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getId", [], "any", false, false, false, 58), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getNom", [], "any", false, false, false, 58), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getPrenom", [], "any", false, false, false, 58), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getLienImage", [], "any", false, false, false, 58), "image" => ($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "imageFile")), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getNomScene", [], "any", false, false, false, 58), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getDateNaissance", [], "any", false, false, false, 58), "etiquettes" => (isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 58, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 58), "getId", [], "any", false, false, false, 58)]))];
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
                                $context["instruments"] = twig_array_merge((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 62, $this->source); })()), (isset($context["instrumentArray"]) || array_key_exists("instrumentArray", $context) ? $context["instrumentArray"] : (function () { throw new RuntimeError('Variable "instrumentArray" does not exist.', 62, $this->source); })()));
                                // line 63
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 64
                            echo "\t\t\t\t\t";
                            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 64) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 64), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 64), "musicien" => (isset($context["musicien"]) || array_key_exists("musicien", $context) ? $context["musicien"] : (function () { throw new RuntimeError('Variable "musicien" does not exist.', 64, $this->source); })()), "instruments" => (isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 64, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 64)]))]];
                            // line 65
                            echo "\t\t\t\t\t";
                            $context["membres"] = twig_array_merge((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 65, $this->source); })()), (isset($context["membreArray"]) || array_key_exists("membreArray", $context) ? $context["membreArray"] : (function () { throw new RuntimeError('Variable "membreArray" does not exist.', 65, $this->source); })()));
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
(isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 75, $this->source); })()), "genreMusicaux" => (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 75, $this->source); })()), "labels" =>                     // line 76
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 76, $this->source); })()), "membres" => (isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 76, $this->source); })()), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 77
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
                $context["passageArray"] = [twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 95) => ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 95), "dateDebut" => (isset($context["dateDebPass"]) || array_key_exists("dateDebPass", $context) ? $context["dateDebPass"] : (function () { throw new RuntimeError('Variable "dateDebPass" does not exist.', 95, $this->source); })()), "dateFin" => (isset($context["dateFinPass"]) || array_key_exists("dateFinPass", $context) ? $context["dateFinPass"] : (function () { throw new RuntimeError('Variable "dateFinPass" does not exist.', 95, $this->source); })()), "groupe" => (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 95, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_passage", ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 95)]))]];
                // line 96
                echo "\t\t";
                $context["passages"] = twig_array_merge((isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 96, $this->source); })()), (isset($context["passageArray"]) || array_key_exists("passageArray", $context) ? $context["passageArray"] : (function () { throw new RuntimeError('Variable "passageArray" does not exist.', 96, $this->source); })()));
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
(isset($context["genresMusicaux"]) || array_key_exists("genresMusicaux", $context) ? $context["genresMusicaux"] : (function () { throw new RuntimeError('Variable "genresMusicaux" does not exist.', 100, $this->source); })()), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 101
$context["evenement"], "getDateDebut", [], "any", false, false, false, 101), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 101), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 101), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 101), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 101), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 101), "etiquettes" => (isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 101, $this->source); })()), "ressources" => (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 101, $this->source); })()), "lieu" => (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 101, $this->source); })()), "passages" => (isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 101, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 101)]))]];
            // line 102
            echo "\t";
            $context["evenementsArr"] = twig_array_merge((isset($context["evenementsArr"]) || array_key_exists("evenementsArr", $context) ? $context["evenementsArr"] : (function () { throw new RuntimeError('Variable "evenementsArr" does not exist.', 102, $this->source); })()), (isset($context["evenementArr"]) || array_key_exists("evenementArr", $context) ? $context["evenementArr"] : (function () { throw new RuntimeError('Variable "evenementArr" does not exist.', 102, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["evenementsArr"]) || array_key_exists("evenementsArr", $context) ? $context["evenementsArr"] : (function () { throw new RuntimeError('Variable "evenementsArr" does not exist.', 104, $this->source); })()));
        echo "

";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  382 => 1,  376 => 104,  369 => 102,  367 => 101,  366 => 100,  365 => 99,  363 => 98,  357 => 97,  354 => 96,  351 => 95,  348 => 94,  345 => 93,  342 => 92,  339 => 91,  337 => 90,  334 => 89,  331 => 88,  328 => 87,  325 => 86,  322 => 85,  320 => 84,  317 => 83,  314 => 82,  311 => 81,  307 => 79,  305 => 78,  304 => 77,  303 => 76,  302 => 75,  301 => 74,  300 => 73,  299 => 72,  298 => 71,  297 => 70,  296 => 69,  293 => 68,  287 => 67,  284 => 66,  281 => 65,  278 => 64,  272 => 63,  269 => 62,  266 => 61,  261 => 60,  258 => 59,  255 => 58,  249 => 57,  246 => 56,  243 => 55,  238 => 54,  235 => 53,  232 => 52,  227 => 51,  221 => 50,  218 => 49,  215 => 48,  210 => 47,  204 => 46,  201 => 45,  198 => 44,  192 => 43,  189 => 42,  186 => 41,  181 => 40,  178 => 39,  173 => 38,  167 => 37,  164 => 36,  162 => 35,  159 => 34,  154 => 33,  151 => 32,  148 => 31,  145 => 30,  142 => 29,  139 => 28,  134 => 27,  132 => 26,  129 => 25,  123 => 24,  120 => 23,  117 => 22,  112 => 21,  110 => 20,  107 => 19,  104 => 18,  101 => 17,  96 => 15,  91 => 14,  85 => 13,  82 => 12,  79 => 11,  74 => 10,  71 => 9,  65 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set evenementsArr = { } %}
{% for evenement in listeEvenements %}
\t{% set etiquettes = { } %}
\t{% for etiquette in evenement.getVisibleEtiquettes %}
\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles, 'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t{% endfor %}
\t{% set ressources = { } %}
\t{% for ressource in evenement.getVisibleRessources %}
\t\t{% set ressourceArray = { (ressource.getId) : { 'id':ressource.getId, 'lien':ressource.getLien , 'titre':ressource.getTitre, 'typeRessource':ressource.getType.getLabel, 'url': (absolute_url(path('detail_ressource', {'id' : ressource.getId}))) } } %}
\t\t{% set ressources = ressources|merge(ressourceArray) %}
\t{% endfor %}
\t{% if evenement.getVisibleLieu != null %} 
\t\t{% set lieu = { 'ville':(evenement.getVisibleLieu.getVille), 'CP':(evenement.getVisibleLieu.getCP), 'adresse':(evenement.getVisibleLieu.getAdresse), 'nomBatiment':(evenement.getVisibleLieu.getNomBatiment), 'url': (absolute_url(path('detail_lieu', {'id' : evenement.getVisibleLieu.getId}))) } %} 
\t{% else %}
\t\t{% set lieu = {} %}
\t{% endif %}

\t{% set genresMusicaux = { } %}
\t{% for genreMusical in evenement.getVisibleGenresMusicaux %}
\t\t{% set genreMusicalArray ={(genreMusical.getId): {'id': genreMusical.getId, 'nom': genreMusical.getNom }}%}
\t\t{% set genresMusicaux = genresMusicaux|merge(genreMusicalArray) %}
\t{% endfor %}

\t{% set passages = { } %}
\t{% for passage in evenement.getVisiblePassages %}
\t\t{% set etiquettes = { } %}
\t\t{% set genres = { } %}
\t\t{% set labels = { } %}
\t\t{% set membres = { } %}
\t\t{% if passage.getVisibleGroupe is not null %}
\t\t\t{% for etiquette in passage.getVisibleGroupe.getVisibleEtiquettes %}

\t\t\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles, 'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t\t{% endfor %}
\t\t\t{% for genre in passage.getVisibleGroupe.getVisibleGenresMusicaux %}
\t\t\t\t{% set categoriesMusical = { } %}
\t\t\t\t{% for categorieMusical in genre.getCategorieMusicales %}
\t\t\t\t\t{% set categorieMusicalArray = { (categorieMusical.getId): { 'id' : categorieMusical.getId, 'nom':categorieMusical.getNom, 'url': (absolute_url(path('detail_categorieMusicale', {'id' : categorieMusical.getId}))) } } %}
\t\t\t\t\t{% set categoriesMusical = categoriesMusical|merge(categorieMusicalArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{% set genreArray ={ (genre.getId) : { 'id':genre.getId, 'nom':genre.getNom,  'categorie':categoriesMusical, 'url': (absolute_url(path('detail_genreMusical', {'id' : genre.getId}))) } } %}
\t\t\t\t{% set genres = genres|merge(genreArray) %}
\t\t\t{% endfor %}
\t\t\t{% for label in passage.getVisibleGroupe.getVisibleLabels %}
\t\t\t\t{% set labelArray = { (label.getId) : { 'id':label.getId, 'nom':label.getNom, 'url': (absolute_url(path('detail_label', {'id' : label.getId}))) } } %}
\t\t\t\t{% set labels = labels|merge(labelArray) %}
\t\t\t{% endfor %}
\t\t\t{% for membre in passage.getVisibleGroupe.getVisibleMembres %}
\t\t\t\t{% set etiquettes = { } %}
\t\t\t\t{% if membre.getVisibleMusicien is not null %}
\t\t\t\t\t{% for etiquette in membre.getVisibleMusicien.getVisibleEtiquettes %}
\t\t\t\t\t\t{% set etiquetteArray ={ (etiquette.getId): { 'id':etiquette.getId, 'motsCles':etiquette.getMotsCles, 'url': (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } } %}
\t\t\t\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% set musicien ={ 'id':membre.getVisibleMusicien.getId, 'nom':membre.getVisibleMusicien.getNom, 'prenom':membre.getVisibleMusicien.getPrenom,'lienImage':membre.getVisibleMusicien.getLienImage,'image':(absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleMusicien, 'imageFile')),'nomScene':membre.getVisibleMusicien.getNomScene, 'dateNaissance':membre.getVisibleMusicien.getDateNaissance, 'etiquettes':etiquettes, 'url': (absolute_url(path('detail_musicien', {'id' : membre.getVisibleMusicien.getId}))) } %}
\t\t\t\t\t{% set instruments ={} %}
\t\t\t\t\t{% for instrument in membre.getVisibleInstruments %}
\t\t\t\t\t\t{% set instrumentArray ={ (instrument.getId) : { 'id':instrument.getId, 'nom':instrument.getNom, 'url': (absolute_url(path('detail_instrument', {'id' : instrument.getId}))) } } %}
\t\t\t\t\t\t{% set instruments = instruments|merge(instrumentArray) %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% set membreArray ={ (membre.getId) : { 'id':membre.getId, 'actif':membre.getActif, 'musicien':musicien, 'instruments' : instruments, 'url': (absolute_url(path('detail_membre', {'id' : membre.getId}))) } } %}
\t\t\t\t\t{% set membres = membres|merge(membreArray) %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t\t
\t\t\t{% set groupe = { 
\t\t\t\t'id' : passage.getVisibleGroupe.getId,  
\t\t\t\t'lienImage':passage.getVisibleGroupe.getLienImage,
\t\t\t\t'image':passage.getVisibleGroupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(passage.getVisibleGroupe, 'imageFile')) ): '', 
\t\t\t\t'dateCreation':passage.getVisibleGroupe.getDateCreation, 
\t\t\t\t'biographie':passage.getVisibleGroupe.getBiographie, 
\t\t\t\t'etiquettes':etiquettes, 'genreMusicaux':genres, 
\t\t\t\t'labels':labels, 'membres':membres, 
\t\t\t\t'nationalite': passage.getVisibleGroupe.getVisibleNationalite is not null ? passage.getVisibleGroupe.getVisibleNationalite.getNom : null,
\t\t\t \t'url': (absolute_url(path('detail_groupe', {'id' : passage.getVisibleGroupe.getId}))) } %}
\t\t
\t\t{% else %}
\t\t\t{% set groupe =  null %}
\t\t{% endif %}

\t\t{% if  passage.getDateDebut is defined and  passage.getDateDebut is not null %}
\t\t\t{% set dateDebPass =  passage.getDateDebut.format(\"d-m-Y H:i\") %}
\t\t{% else %}
\t\t\t{% set dateDebPass =  null %}
\t\t{% endif %}

\t\t{% if  passage.getDateFin is defined and  passage.getDateFin is not null %}
\t\t\t{% set dateFinPass =  passage.getDateFin.format(\"d-m-Y H:i\") %}
\t\t{% else %}
\t\t\t{% set dateFinPass =  null %}
\t\t{% endif %}
\t\t{% set passageArray = { (passage.getId) : { 'id':passage.getId, 'dateDebut':dateDebPass , 'dateFin':dateFinPass, 'groupe':groupe, 'url': (absolute_url(path('detail_passage', {'id' : passage.getId}))) } } %}
\t\t{% set passages = passages|merge(passageArray) %}
\t{% endfor %}
\t{% set evenementArr = { (evenement.getId) :{ 'id' : (evenement.getId), 'type': (evenement.getVisibleTypeEvenements != null) ? evenement.getVisibleTypeEvenements.getLabel : \"\", 'lienImage':evenement.getLienImage,
\t'image':evenement.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(evenement, 'imageFile')) ): '', 
\t'genreMusical': genresMusicaux,
\t \"dateDebut\": (evenement.getDateDebut.format(\"d-m-Y H:i\")), \"dateFin\": (evenement.getDateFin.format(\"d-m-Y H:i\")), \"description\": (evenement.getDescription), \"titre\": (evenement.getTitre), 'etiquettes' : etiquettes, 'ressources' : ressources, 'lieu':lieu, 'passages':passages, 'url': (absolute_url(path('detail_api_evenement', {'id' : evenement.getId}))) } } %}
\t{% set evenementsArr = evenementsArr|merge(evenementArr) %}
{% endfor %}
{{ evenementsArr|unescape|raw }}

{% endapply %}
", "evenements/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\evenements\\listeApi.html.twig");
    }
}
