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

/* groupes/listeApi.html.twig */
class __TwigTemplate_b825980d9b00eb81c7891aec5e33b8824f1bbdefb30ad2bba79154b5bc006025 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupes/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupes/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["groupesArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeGroupes"]) || array_key_exists("listeGroupes", $context) ? $context["listeGroupes"] : (function () { throw new RuntimeError('Variable "listeGroupes" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 4
            echo "\t";
            $context["etiquettes"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleEtiquettes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                // line 6
                echo "\t\t";
                $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source,                 // line 7
$context["etiquette"], "getId", [], "any", false, false, false, 7) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 8
$context["etiquette"], "getId", [], "any", false, false, false, 8), "motsCles" => twig_get_attribute($this->env, $this->source,                 // line 9
$context["etiquette"], "getMotsCles", [], "any", false, false, false, 9), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source,                 // line 11
$context["etiquette"], "getId", [], "any", false, false, false, 11)]))]];
                // line 14
                echo "\t\t";
                $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 14, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 14, $this->source); })()));
                // line 15
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t";
            $context["passages"] = [];
            // line 17
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisiblePassages", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                // line 18
                echo "        ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 18), null))) {
                    // line 19
                    echo "            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 19), "getVisibleLieu", [], "any", false, false, false, 19))) {
                        // line 20
                        echo "                ";
                        $context["lieu"] = ["ville" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 22
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 22), "getVisibleLieu", [], "any", false, false, false, 22), "getVille", [], "any", false, false, false, 22), "CP" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 23
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 23), "getVisibleLieu", [], "any", false, false, false, 23), "getCP", [], "any", false, false, false, 23), "adresse" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 24
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 24), "getVisibleLieu", [], "any", false, false, false, 24), "getAdresse", [], "any", false, false, false, 24), "nomBatiment" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 25
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 25), "getVisibleLieu", [], "any", false, false, false, 25), "getNomBatiment", [], "any", false, false, false, 25), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_lieu", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 26
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 26), "getVisibleLieu", [], "any", false, false, false, 26), "getId", [], "any", false, false, false, 26)]))];
                        // line 28
                        echo "            ";
                    } else {
                        // line 29
                        echo "                ";
                        $context["lieu"] = null;
                        // line 30
                        echo "            ";
                    }
                    // line 31
                    echo "
            ";
                    // line 32
                    $context["evenement"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 34
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 34), "getId", [], "any", false, false, false, 34), "type" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 35
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 35), "getTypeEvenement", [], "any", false, false, false, 35))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 35), "getTypeEvenement", [], "any", false, false, false, 35), "getLabel", [], "any", false, false, false, 35)) : (null)), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 36
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 36), "getImage", [], "any", false, false, false, 36))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 36), "imageFile"))) : ("")), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 37
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 37), "getLienImage", [], "any", false, false, false, 37), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 38
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 38), "getDateDebut", [], "any", false, false, false, 38), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 38), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 39
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 39), "getDateFin", [], "any", false, false, false, 39), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 39), "description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 40
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 40), "getDescription", [], "any", false, false, false, 40), "titre" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 41
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 41), "getTitre", [], "any", false, false, false, 41), "lieu" =>                     // line 43
(isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 43, $this->source); })())];
                    // line 45
                    echo "        ";
                } else {
                    // line 46
                    echo "             ";
                    $context["evenement"] = null;
                    // line 47
                    echo "        ";
                }
                // line 48
                echo "            
        ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", true, true, false, 49) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 49)))) {
                    // line 50
                    echo "\t\t\t";
                    $context["dateDebPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 50), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 50);
                    // line 51
                    echo "\t\t";
                } else {
                    // line 52
                    echo "\t\t\t";
                    $context["dateDebPass"] = null;
                    // line 53
                    echo "\t\t";
                }
                // line 54
                echo "
\t\t";
                // line 55
                if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 55)))) {
                    // line 56
                    echo "\t\t\t";
                    $context["dateFinPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 56), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 56);
                    // line 57
                    echo "\t\t";
                } else {
                    // line 58
                    echo "\t\t\t";
                    $context["dateFinPass"] = null;
                    // line 59
                    echo "\t\t";
                }
                // line 60
                echo "
\t\t
        ";
                // line 62
                if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", true, true, false, 62) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 62)))) {
                    // line 63
                    echo "            ";
                    $context["dateDebPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 63), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 63);
                    // line 64
                    echo "        ";
                } else {
                    // line 65
                    echo "            ";
                    $context["dateDebPass"] = null;
                    // line 66
                    echo "        ";
                }
                // line 67
                echo "
        ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 68)))) {
                    // line 69
                    echo "            ";
                    $context["dateFinPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 69), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 69);
                    // line 70
                    echo "        ";
                } else {
                    // line 71
                    echo "            ";
                    $context["dateFinPass"] = null;
                    // line 72
                    echo "        ";
                }
                // line 73
                echo "
        ";
                // line 74
                $context["passageArr"] = [twig_get_attribute($this->env, $this->source,                 // line 76
$context["passage"], "getId", [], "any", false, false, false, 76) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 78
$context["passage"], "getId", [], "any", false, false, false, 78), "evenement" =>                 // line 79
(isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 79, $this->source); })()), "dateDebut" =>                 // line 80
(isset($context["dateDebPass"]) || array_key_exists("dateDebPass", $context) ? $context["dateDebPass"] : (function () { throw new RuntimeError('Variable "dateDebPass" does not exist.', 80, $this->source); })()), "dateFin" =>                 // line 81
(isset($context["dateFinPass"]) || array_key_exists("dateFinPass", $context) ? $context["dateFinPass"] : (function () { throw new RuntimeError('Variable "dateFinPass" does not exist.', 81, $this->source); })())]];
                // line 85
                echo "        ";
                $context["passages"] = twig_array_merge((isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 85, $this->source); })()), (isset($context["passageArr"]) || array_key_exists("passageArr", $context) ? $context["passageArr"] : (function () { throw new RuntimeError('Variable "passageArr" does not exist.', 85, $this->source); })()));
                // line 86
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "
\t";
            // line 88
            $context["genres"] = [];
            // line 89
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleGenresMusicaux", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 90
                echo "\t\t";
                $context["categories"] = [];
                // line 91
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genre"], "categorieMusicales", [], "any", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 92
                    echo "\t\t\t";
                    $context["categoriesArray"] = [twig_get_attribute($this->env, $this->source,                     // line 93
$context["categorie"], "getId", [], "any", false, false, false, 93) => ["id" => twig_get_attribute($this->env, $this->source,                     // line 94
$context["categorie"], "getId", [], "any", false, false, false, 94), "nom" => twig_get_attribute($this->env, $this->source,                     // line 95
$context["categorie"], "getNom", [], "any", false, false, false, 95), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source,                     // line 96
$context["categorie"], "getId", [], "any", false, false, false, 96)]))]];
                    // line 99
                    echo "
\t\t\t";
                    // line 100
                    $context["categories"] = twig_array_merge((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 100, $this->source); })()), (isset($context["categoriesArray"]) || array_key_exists("categoriesArray", $context) ? $context["categoriesArray"] : (function () { throw new RuntimeError('Variable "categoriesArray" does not exist.', 100, $this->source); })()));
                    // line 101
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "
\t\t";
                // line 103
                $context["genreArray"] = [twig_get_attribute($this->env, $this->source,                 // line 104
$context["genre"], "getId", [], "any", false, false, false, 104) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 105
$context["genre"], "getId", [], "any", false, false, false, 105), "nom" => twig_get_attribute($this->env, $this->source,                 // line 106
$context["genre"], "getNom", [], "any", false, false, false, 106), "categories" =>                 // line 107
(isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 107, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source,                 // line 109
$context["genre"], "getId", [], "any", false, false, false, 109)]))]];
                // line 112
                echo "\t\t";
                $context["genres"] = twig_array_merge((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 112, $this->source); })()), (isset($context["genreArray"]) || array_key_exists("genreArray", $context) ? $context["genreArray"] : (function () { throw new RuntimeError('Variable "genreArray" does not exist.', 112, $this->source); })()));
                // line 113
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "
\t";
            // line 115
            $context["labels"] = [];
            // line 116
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleLabels", [], "any", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 117
                echo "\t\t";
                $context["labelArray"] = [twig_get_attribute($this->env, $this->source,                 // line 118
$context["label"], "getId", [], "any", false, false, false, 118) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 119
$context["label"], "getId", [], "any", false, false, false, 119), "nom" => twig_get_attribute($this->env, $this->source,                 // line 120
$context["label"], "getNom", [], "any", false, false, false, 120), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source,                 // line 121
$context["label"], "getId", [], "any", false, false, false, 121)]))]];
                // line 124
                echo "
\t\t";
                // line 125
                $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 125, $this->source); })()), (isset($context["labelArray"]) || array_key_exists("labelArray", $context) ? $context["labelArray"] : (function () { throw new RuntimeError('Variable "labelArray" does not exist.', 125, $this->source); })()));
                // line 126
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t";
            $context["membres"] = [];
            // line 128
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleMembres", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 129
                echo "\t\t";
                $context["etiquettes"] = [];
                // line 130
                echo "        ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 130))) {
                    // line 131
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 131), "getVisibleEtiquettes", [], "any", false, false, false, 131));
                    foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                        // line 132
                        echo "                ";
                        $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source,                         // line 133
$context["etiquette"], "getId", [], "any", false, false, false, 133) => ["id" => twig_get_attribute($this->env, $this->source,                         // line 134
$context["etiquette"], "getId", [], "any", false, false, false, 134), "motsCles" => twig_get_attribute($this->env, $this->source,                         // line 135
$context["etiquette"], "getMotsCles", [], "any", false, false, false, 135), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source,                         // line 136
$context["etiquette"], "getId", [], "any", false, false, false, 136)]))]];
                        // line 139
                        echo "                ";
                        $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 139, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 139, $this->source); })()));
                        // line 140
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "
            ";
                    // line 142
                    $context["musicien"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 143
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 143), "getId", [], "any", false, false, false, 143), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 144
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 144), "getNom", [], "any", false, false, false, 144), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 145
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 145), "getPrenom", [], "any", false, false, false, 145), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 146
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 146), "getNomScene", [], "any", false, false, false, 146), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 147
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 147), "getDateNaissance", [], "any", false, false, false, 147), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 148
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 148), "getLienImage", [], "any", false, false, false, 148), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 149
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 149), "getImage", [], "any", false, false, false, 149))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 149), "imageFile"))) : ("")), "etiquettes" =>                     // line 150
(isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 150, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 151
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 151), "getId", [], "any", false, false, false, 151)]))];
                    // line 153
                    echo "        ";
                } else {
                    // line 154
                    echo "\t\t    ";
                    $context["musicien"] = [];
                    // line 155
                    echo "        ";
                }
                // line 156
                echo "\t\t";
                $context["instruments"] = [];
                // line 157
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleInstruments", [], "any", false, false, false, 157));
                foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
                    // line 158
                    echo "\t
\t\t\t";
                    // line 159
                    $context["instrumentArray"] = [twig_get_attribute($this->env, $this->source,                     // line 160
$context["instrument"], "getId", [], "any", false, false, false, 160) => ["id" => twig_get_attribute($this->env, $this->source,                     // line 161
$context["instrument"], "getId", [], "any", false, false, false, 161), "nom" => twig_get_attribute($this->env, $this->source,                     // line 162
$context["instrument"], "getNom", [], "any", false, false, false, 162), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source,                     // line 163
$context["instrument"], "getId", [], "any", false, false, false, 163)]))]];
                    // line 166
                    echo "\t\t\t";
                    $context["instruments"] = twig_array_merge((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 166, $this->source); })()), (isset($context["instrumentArray"]) || array_key_exists("instrumentArray", $context) ? $context["instrumentArray"] : (function () { throw new RuntimeError('Variable "instrumentArray" does not exist.', 166, $this->source); })()));
                    // line 167
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "\t\t";
                $context["membreArray"] = [twig_get_attribute($this->env, $this->source,                 // line 169
$context["membre"], "getId", [], "any", false, false, false, 169) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 170
$context["membre"], "getId", [], "any", false, false, false, 170), "actif" => twig_get_attribute($this->env, $this->source,                 // line 171
$context["membre"], "getActif", [], "any", false, false, false, 171), "musicien" =>                 // line 172
(isset($context["musicien"]) || array_key_exists("musicien", $context) ? $context["musicien"] : (function () { throw new RuntimeError('Variable "musicien" does not exist.', 172, $this->source); })()), "instruments" =>                 // line 173
(isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 173, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source,                 // line 174
$context["membre"], "getId", [], "any", false, false, false, 174)]))]];
                // line 177
                echo "\t\t";
                $context["membres"] = twig_array_merge((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 177, $this->source); })()), (isset($context["membreArray"]) || array_key_exists("membreArray", $context) ? $context["membreArray"] : (function () { throw new RuntimeError('Variable "membreArray" does not exist.', 177, $this->source); })()));
                // line 178
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t";
            $context["ressources"] = [];
            // line 180
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleRessources", [], "any", false, false, false, 180));
            foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                // line 181
                echo "\t\t";
                $context["ressourceArray"] = [twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 181) => ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 181), "lien" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getLien", [], "any", false, false, false, 181), "titre" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getTitre", [], "any", false, false, false, 181), "nomFile" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getNom", [], "any", false, false, false, 181), "typeRessource" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ressource"], "getType", [], "any", false, false, false, 181), "getLabel", [], "any", false, false, false, 181)]];
                // line 182
                echo "\t\t";
                $context["ressources"] = twig_array_merge((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 182, $this->source); })()), (isset($context["ressourceArray"]) || array_key_exists("ressourceArray", $context) ? $context["ressourceArray"] : (function () { throw new RuntimeError('Variable "ressourceArray" does not exist.', 182, $this->source); })()));
                // line 183
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t";
            $context["groupeArr"] = [twig_get_attribute($this->env, $this->source,             // line 186
$context["groupe"], "getId", [], "any", false, false, false, 186) => ["id" => twig_get_attribute($this->env, $this->source,             // line 187
$context["groupe"], "getId", [], "any", false, false, false, 187), "nom" => twig_get_attribute($this->env, $this->source,             // line 188
$context["groupe"], "getNom", [], "any", false, false, false, 188), "dateCreation" => twig_get_attribute($this->env, $this->source,             // line 189
$context["groupe"], "dateCreation", [], "any", false, false, false, 189), "biographie" => twig_get_attribute($this->env, $this->source,             // line 190
$context["groupe"], "getBiographie", [], "any", false, false, false, 190), "image" => twig_get_attribute($this->env, $this->source,             // line 191
$context["groupe"], "getImage", [], "any", false, false, false, 191), "passages" =>             // line 192
(isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 192, $this->source); })()), "etiquettes" =>             // line 193
(isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 193, $this->source); })()), "lienImage" => twig_get_attribute($this->env, $this->source,             // line 194
$context["groupe"], "getLienImage", [], "any", false, false, false, 194), "image" => (( !(null === twig_get_attribute($this->env, $this->source,             // line 195
$context["groupe"], "getImage", [], "any", false, false, false, 195))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["groupe"], "imageFile"))) : ("")), "genreMusicaux" =>             // line 196
(isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 196, $this->source); })()), "labels" =>             // line 197
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 197, $this->source); })()), "membres" =>             // line 198
(isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 198, $this->source); })()), "ressources" =>             // line 199
(isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 199, $this->source); })()), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source,             // line 200
$context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 200))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 200), "getNom", [], "any", false, false, false, 200)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source,             // line 201
$context["groupe"], "getId", [], "any", false, false, false, 201)]))]];
            // line 205
            echo "\t";
            $context["groupesArr"] = twig_array_merge((isset($context["groupesArr"]) || array_key_exists("groupesArr", $context) ? $context["groupesArr"] : (function () { throw new RuntimeError('Variable "groupesArr" does not exist.', 205, $this->source); })()), (isset($context["groupeArr"]) || array_key_exists("groupeArr", $context) ? $context["groupeArr"] : (function () { throw new RuntimeError('Variable "groupeArr" does not exist.', 205, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["groupesArr"]) || array_key_exists("groupesArr", $context) ? $context["groupesArr"] : (function () { throw new RuntimeError('Variable "groupesArr" does not exist.', 207, $this->source); })()));
        echo "
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_1_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "groupes/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 1,  448 => 207,  441 => 205,  439 => 201,  438 => 200,  437 => 199,  436 => 198,  435 => 197,  434 => 196,  433 => 195,  432 => 194,  431 => 193,  430 => 192,  429 => 191,  428 => 190,  427 => 189,  426 => 188,  425 => 187,  424 => 186,  422 => 184,  416 => 183,  413 => 182,  410 => 181,  405 => 180,  402 => 179,  396 => 178,  393 => 177,  391 => 174,  390 => 173,  389 => 172,  388 => 171,  387 => 170,  386 => 169,  384 => 168,  378 => 167,  375 => 166,  373 => 163,  372 => 162,  371 => 161,  370 => 160,  369 => 159,  366 => 158,  361 => 157,  358 => 156,  355 => 155,  352 => 154,  349 => 153,  347 => 151,  346 => 150,  345 => 149,  344 => 148,  343 => 147,  342 => 146,  341 => 145,  340 => 144,  339 => 143,  338 => 142,  335 => 141,  329 => 140,  326 => 139,  324 => 136,  323 => 135,  322 => 134,  321 => 133,  319 => 132,  314 => 131,  311 => 130,  308 => 129,  303 => 128,  300 => 127,  294 => 126,  292 => 125,  289 => 124,  287 => 121,  286 => 120,  285 => 119,  284 => 118,  282 => 117,  277 => 116,  275 => 115,  272 => 114,  266 => 113,  263 => 112,  261 => 109,  260 => 107,  259 => 106,  258 => 105,  257 => 104,  256 => 103,  253 => 102,  247 => 101,  245 => 100,  242 => 99,  240 => 96,  239 => 95,  238 => 94,  237 => 93,  235 => 92,  230 => 91,  227 => 90,  222 => 89,  220 => 88,  217 => 87,  211 => 86,  208 => 85,  206 => 81,  205 => 80,  204 => 79,  203 => 78,  202 => 76,  201 => 74,  198 => 73,  195 => 72,  192 => 71,  189 => 70,  186 => 69,  184 => 68,  181 => 67,  178 => 66,  175 => 65,  172 => 64,  169 => 63,  167 => 62,  163 => 60,  160 => 59,  157 => 58,  154 => 57,  151 => 56,  149 => 55,  146 => 54,  143 => 53,  140 => 52,  137 => 51,  134 => 50,  132 => 49,  129 => 48,  126 => 47,  123 => 46,  120 => 45,  118 => 43,  117 => 41,  116 => 40,  115 => 39,  114 => 38,  113 => 37,  112 => 36,  111 => 35,  110 => 34,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  95 => 26,  94 => 25,  93 => 24,  92 => 23,  91 => 22,  89 => 20,  86 => 19,  83 => 18,  78 => 17,  75 => 16,  69 => 15,  66 => 14,  64 => 11,  63 => 9,  62 => 8,  61 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set groupesArr =  {} %}
{% for groupe in listeGroupes %}
\t{% set etiquettes =  { } %}
\t{% for etiquette in groupe.getVisibleEtiquettes %}
\t\t{%  set etiquetteArray ={
            (etiquette.getId): {
                'id':etiquette.getId, 
                'motsCles':etiquette.getMotsCles,
                
                'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) 
            } 
        }%}
\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t{% endfor %}
\t{% set passages =  { } %}
\t{% for passage in groupe.getVisiblePassages %}
        {% if passage.getVisibleEvenement != null %}
            {% if  passage.getVisibleEvenement.getVisibleLieu is not null  %}
                {% set lieu = 
                {
                'ville':(passage.getVisibleEvenement.getVisibleLieu.getVille),
                'CP':(passage.getVisibleEvenement.getVisibleLieu.getCP),
                'adresse':(passage.getVisibleEvenement.getVisibleLieu.getAdresse),
                'nomBatiment':(passage.getVisibleEvenement.getVisibleLieu.getNomBatiment),
                'url':  (absolute_url(path('detail_lieu', {'id' : passage.getVisibleEvenement.getVisibleLieu.getId}))) 
                }%}
            {% else %}
                {% set lieu = null %}
            {% endif %}

            {% set evenement = 
            {  
            'id' : passage.getVisibleEvenement.getId,
            'type': passage.getVisibleEvenement.getTypeEvenement is not null ? passage.getVisibleEvenement.getTypeEvenement.getLabel : null,
            'image':passage.getVisibleEvenement.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(passage.getVisibleEvenement, 'imageFile')) ): '', 
            'lienImage':passage.getVisibleEvenement.getLienImage,
            \"dateDebut\": (passage.getVisibleEvenement.getDateDebut.format(\"d-m-Y H:i\")),
            \"dateFin\": (passage.getVisibleEvenement.getDateFin.format(\"d-m-Y H:i\")),
            \"description\": (passage.getVisibleEvenement.getDescription),
            \"titre\": (passage.getVisibleEvenement.getTitre),
            
            'lieu':lieu,
            }%}
        {% else %}
             {% set evenement = null %}
        {% endif %}
            
        {% if  passage.getDateDebut is defined and  passage.getDateDebut is not null %}
\t\t\t{% set dateDebPass =  passage.getDateDebut.format(\"d-m-Y H:i\") %}
\t\t{% else %}
\t\t\t{% set dateDebPass =  null %}
\t\t{% endif %}

\t\t{% if  passage.getDateFin is defined and  passage.getDateFin is not null %}
\t\t\t{% set dateFinPass =  passage.getDateFin.format(\"d-m-Y H:i\") %}
\t\t{% else %}
\t\t\t{% set dateFinPass =  null %}
\t\t{% endif %}

\t\t
        {% if  passage.getDateDebut is defined and  passage.getDateDebut is not null %}
            {% set dateDebPass =  passage.getDateDebut.format(\"d-m-Y H:i\") %}
        {% else %}
            {% set dateDebPass =  null %}
        {% endif %}

        {% if  passage.getDateFin is defined and  passage.getDateFin is not null %}
            {% set dateFinPass =  passage.getDateFin.format(\"d-m-Y H:i\") %}
        {% else %}
            {% set dateFinPass =  null %}
        {% endif %}

        {% set passageArr = 
        {
            ( passage.getId):
            {  
                'id' : passage.getId,
                'evenement':evenement,
                \"dateDebut\": dateDebPass,
                \"dateFin\": dateFinPass,
            }
        }
        %}
        {% set passages = passages|merge(passageArr) %}
\t{% endfor %}

\t{% set genres = { } %}
\t{% for genre in groupe.getVisibleGenresMusicaux %}
\t\t{% set categories = { } %}
\t\t{% for categorie in genre.categorieMusicales %}
\t\t\t{%  set categoriesArray ={
                (categorie.getId) : {
                    'id':categorie.getId, 
                    'nom':categorie.getNom,
                    'url':  (absolute_url(path('detail_categorieMusicale', {'id' : categorie.getId}))) 
                }
            }%}

\t\t\t{% set categories = categories|merge(categoriesArray) %}
\t\t{% endfor %}

\t\t{%  set genreArray ={
            (genre.getId) : {
                'id':genre.getId, 
                'nom':genre.getNom,
                'categories': categories,
                
                'url':  (absolute_url(path('detail_genreMusical', {'id' : genre.getId}))) 
            }
        }%}
\t\t{% set genres = genres|merge(genreArray) %}
\t{% endfor %}

\t{% set labels = { } %}
\t{% for label in groupe.getVisibleLabels %}
\t\t{%  set labelArray = {
            (label.getId) : {
                'id':label.getId, 
                'nom':label.getNom,
                'url':  (absolute_url(path('detail_label', {'id' : label.getId}))) 
            }
        }%}

\t\t{% set labels = labels|merge(labelArray) %}
\t{% endfor %}
\t{% set membres = { } %}
\t{% for membre in groupe.getVisibleMembres %}
\t\t{% set etiquettes = { } %}
        {% if membre.getVisibleMusicien is not null %}
            {% for etiquette in membre.getVisibleMusicien.getVisibleEtiquettes %}
                {%  set etiquetteArray ={
                    (etiquette.getId): {
                        'id':etiquette.getId, 
                        'motsCles':etiquette.getMotsCles,
                        'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) 
                    } 
                }%}
                {% set etiquettes = etiquettes|merge(etiquetteArray) %}
            {% endfor %}

            {%  set musicien ={
                'id':membre.getVisibleMusicien.getId, 
                'nom':membre.getVisibleMusicien.getNom,
                'prenom':membre.getVisibleMusicien.getPrenom,
                'nomScene':membre.getVisibleMusicien.getNomScene,
                'dateNaissance':membre.getVisibleMusicien.getDateNaissance,
                'lienImage':membre.getVisibleMusicien.getLienImage,
                'image':membre.getVisibleMusicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleMusicien, 'imageFile')) ): '', 
                'etiquettes':etiquettes,
                'url':  (absolute_url(path('detail_musicien', {'id' : membre.getVisibleMusicien.getId}))) 
            } %}
        {% else %}
\t\t    {%  set musicien ={} %}
        {% endif %}
\t\t{%  set instruments ={} %}
\t\t{% for instrument in membre.getVisibleInstruments %}
\t
\t\t\t{%  set instrumentArray ={
                (instrument.getId) : {
                    'id':instrument.getId, 
                    'nom':instrument.getNom,
                    'url':  (absolute_url(path('detail_instrument', {'id' : instrument.getId}))) 
                }
            } %}
\t\t\t{% set instruments = instruments|merge(instrumentArray) %}
\t\t{% endfor %}
\t\t{%  set membreArray ={
            (membre.getId) : {
                'id':membre.getId, 
                'actif':membre.getActif,
                'musicien':musicien,
                'instruments' : instruments,
                'url':  (absolute_url(path('detail_membre', {'id' : membre.getId}))) 
            }
        }%}
\t\t{% set membres = membres|merge(membreArray) %}
\t{% endfor %}
\t{% set ressources = { } %}
\t{% for ressource in groupe.getVisibleRessources %}
\t\t{% set ressourceArray = { (ressource.getId) : { 'id':ressource.getId, 'lien':ressource.getLien , 'titre': (ressource.getTitre),'nomFile': (ressource.getNom), 'typeRessource':ressource.getType.getLabel } } %}
\t\t{% set ressources = ressources|merge(ressourceArray) %}
\t{% endfor %}
\t{% set 
        groupeArr =  {
            (groupe.getId) :{
                'id' : (groupe.getId),
                \"nom\": (groupe.getNom),
                'dateCreation' : groupe.dateCreation,
                'biographie':groupe.getBiographie,
                'image':groupe.getImage,
                'passages' : passages,
                'etiquettes':etiquettes,
                'lienImage':groupe.getLienImage,
                'image':groupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(groupe, 'imageFile')) ): '', 
                'genreMusicaux':genres,
                'labels':labels,
                'membres':membres,
                'ressources' : ressources,
                'nationalite': groupe.getVisibleNationalite is not null ? groupe.getVisibleNationalite.getNom : null,
                'url':  (absolute_url(path('detail_groupe', {'id' : groupe.getId}))) 
            }
        } 
    %}
\t{% set groupesArr = groupesArr|merge(groupeArr) %}
{% endfor %}
{{ groupesArr|unescape|raw }}
{% endapply  %}
", "groupes/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/groupes/listeApi.html.twig");
    }
}
