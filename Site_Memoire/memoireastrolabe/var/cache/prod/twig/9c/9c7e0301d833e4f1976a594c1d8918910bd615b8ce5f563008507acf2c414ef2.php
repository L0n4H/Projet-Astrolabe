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
class __TwigTemplate_a9d937b99ecd11a872b27d873cc2c2755296f33c05bff1f2ec996cc2f085daa2 extends Template
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
        $context["groupesArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeGroupes"] ?? null));
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
                $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
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
($context["lieu"] ?? null)];
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
($context["evenement"] ?? null), "dateDebut" =>                 // line 80
($context["dateDebPass"] ?? null), "dateFin" =>                 // line 81
($context["dateFinPass"] ?? null)]];
                // line 85
                echo "        ";
                $context["passages"] = twig_array_merge(($context["passages"] ?? null), ($context["passageArr"] ?? null));
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
                    $context["categories"] = twig_array_merge(($context["categories"] ?? null), ($context["categoriesArray"] ?? null));
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
($context["categories"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source,                 // line 109
$context["genre"], "getId", [], "any", false, false, false, 109)]))]];
                // line 112
                echo "\t\t";
                $context["genres"] = twig_array_merge(($context["genres"] ?? null), ($context["genreArray"] ?? null));
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
                $context["labels"] = twig_array_merge(($context["labels"] ?? null), ($context["labelArray"] ?? null));
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
                        $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
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
($context["etiquettes"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 151
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
                    $context["instruments"] = twig_array_merge(($context["instruments"] ?? null), ($context["instrumentArray"] ?? null));
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
($context["musicien"] ?? null), "instruments" =>                 // line 173
($context["instruments"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source,                 // line 174
$context["membre"], "getId", [], "any", false, false, false, 174)]))]];
                // line 177
                echo "\t\t";
                $context["membres"] = twig_array_merge(($context["membres"] ?? null), ($context["membreArray"] ?? null));
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
                $context["ressources"] = twig_array_merge(($context["ressources"] ?? null), ($context["ressourceArray"] ?? null));
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
($context["passages"] ?? null), "etiquettes" =>             // line 193
($context["etiquettes"] ?? null), "lienImage" => twig_get_attribute($this->env, $this->source,             // line 194
$context["groupe"], "getLienImage", [], "any", false, false, false, 194), "image" => (( !(null === twig_get_attribute($this->env, $this->source,             // line 195
$context["groupe"], "getImage", [], "any", false, false, false, 195))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["groupe"], "imageFile"))) : ("")), "genreMusicaux" =>             // line 196
($context["genres"] ?? null), "labels" =>             // line 197
($context["labels"] ?? null), "membres" =>             // line 198
($context["membres"] ?? null), "ressources" =>             // line 199
($context["ressources"] ?? null), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source,             // line 200
$context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 200))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 200), "getNom", [], "any", false, false, false, 200)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source,             // line 201
$context["groupe"], "getId", [], "any", false, false, false, 201)]))]];
            // line 205
            echo "\t";
            $context["groupesArr"] = twig_array_merge(($context["groupesArr"] ?? null), ($context["groupeArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["groupesArr"] ?? null));
        echo "
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_1_);
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
        return array (  447 => 1,  442 => 207,  435 => 205,  433 => 201,  432 => 200,  431 => 199,  430 => 198,  429 => 197,  428 => 196,  427 => 195,  426 => 194,  425 => 193,  424 => 192,  423 => 191,  422 => 190,  421 => 189,  420 => 188,  419 => 187,  418 => 186,  416 => 184,  410 => 183,  407 => 182,  404 => 181,  399 => 180,  396 => 179,  390 => 178,  387 => 177,  385 => 174,  384 => 173,  383 => 172,  382 => 171,  381 => 170,  380 => 169,  378 => 168,  372 => 167,  369 => 166,  367 => 163,  366 => 162,  365 => 161,  364 => 160,  363 => 159,  360 => 158,  355 => 157,  352 => 156,  349 => 155,  346 => 154,  343 => 153,  341 => 151,  340 => 150,  339 => 149,  338 => 148,  337 => 147,  336 => 146,  335 => 145,  334 => 144,  333 => 143,  332 => 142,  329 => 141,  323 => 140,  320 => 139,  318 => 136,  317 => 135,  316 => 134,  315 => 133,  313 => 132,  308 => 131,  305 => 130,  302 => 129,  297 => 128,  294 => 127,  288 => 126,  286 => 125,  283 => 124,  281 => 121,  280 => 120,  279 => 119,  278 => 118,  276 => 117,  271 => 116,  269 => 115,  266 => 114,  260 => 113,  257 => 112,  255 => 109,  254 => 107,  253 => 106,  252 => 105,  251 => 104,  250 => 103,  247 => 102,  241 => 101,  239 => 100,  236 => 99,  234 => 96,  233 => 95,  232 => 94,  231 => 93,  229 => 92,  224 => 91,  221 => 90,  216 => 89,  214 => 88,  211 => 87,  205 => 86,  202 => 85,  200 => 81,  199 => 80,  198 => 79,  197 => 78,  196 => 76,  195 => 74,  192 => 73,  189 => 72,  186 => 71,  183 => 70,  180 => 69,  178 => 68,  175 => 67,  172 => 66,  169 => 65,  166 => 64,  163 => 63,  161 => 62,  157 => 60,  154 => 59,  151 => 58,  148 => 57,  145 => 56,  143 => 55,  140 => 54,  137 => 53,  134 => 52,  131 => 51,  128 => 50,  126 => 49,  123 => 48,  120 => 47,  117 => 46,  114 => 45,  112 => 43,  111 => 41,  110 => 40,  109 => 39,  108 => 38,  107 => 37,  106 => 36,  105 => 35,  104 => 34,  103 => 32,  100 => 31,  97 => 30,  94 => 29,  91 => 28,  89 => 26,  88 => 25,  87 => 24,  86 => 23,  85 => 22,  83 => 20,  80 => 19,  77 => 18,  72 => 17,  69 => 16,  63 => 15,  60 => 14,  58 => 11,  57 => 9,  56 => 8,  55 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "groupes/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/groupes/listeApi.html.twig");
    }
}
