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

/* passages/listeApi.html.twig */
class __TwigTemplate_d48a5e504abcc23961886ca384b5a119e05471abf930a082559f149a3e3f916e extends Template
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
        $context["passages"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listePassages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
            // line 4
            echo "\t";
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 4), null)) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 4)))) {
                // line 5
                echo "\t\t";
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 5), "getVisibleLieu", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "\t\t\t";
                    $context["lieu"] = ["ville" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 6), "getVisibleLieu", [], "any", false, false, false, 6), "getVille", [], "any", false, false, false, 6), "CP" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 6), "getVisibleLieu", [], "any", false, false, false, 6), "getCP", [], "any", false, false, false, 6), "adresse" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 6), "getVisibleLieu", [], "any", false, false, false, 6), "getAdresse", [], "any", false, false, false, 6), "nomBatiment" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 6), "getVisibleLieu", [], "any", false, false, false, 6), "getNomBatiment", [], "any", false, false, false, 6), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_lieu", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 6), "getVisibleLieu", [], "any", false, false, false, 6), "getId", [], "any", false, false, false, 6)]))];
                    // line 7
                    echo "\t\t";
                } else {
                    // line 8
                    echo "\t\t\t";
                    $context["lieu"] = null;
                    // line 9
                    echo "\t\t";
                }
                // line 10
                echo "\t
\t\t";
                // line 11
                $context["evenement"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 11), "getId", [], "any", false, false, false, 11), "type" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 11), "getTypeEvenement", [], "any", false, false, false, 11))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 11), "getTypeEvenement", [], "any", false, false, false, 11), "getLabel", [], "any", false, false, false, 11)) : (null)), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 11), "getDateDebut", [], "any", false, false, false, 11), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 11), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 11), "getDateFin", [], "any", false, false, false, 11), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 11), "description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 11), "getDescription", [], "any", false, false, false, 11), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 12
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 12), "getImage", [], "any", false, false, false, 12))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 12), "imageFile"))) : ("")), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 13
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 13), "getLienImage", [], "any", false, false, false, 13), "titre" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 13), "getTitre", [], "any", false, false, false, 13), "lieu" => ($context["lieu"] ?? null)];
                // line 14
                echo "\t
\t\t";
                // line 15
                $context["genres"] = [];
                // line 16
                echo "
\t\t";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 17), "getVisibleGenresMusicaux", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 18
                    echo "\t\t\t";
                    $context["evenement"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 18), "getId", [], "any", false, false, false, 18), "type" => (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 18), "getVisibleTypeEvenements", [], "any", false, false, false, 18), null))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 18), "getVisibleTypeEvenements", [], "any", false, false, false, 18), "getLabel", [], "any", false, false, false, 18)) : ("")), "dateDebut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 18), "getDateDebut", [], "any", false, false, false, 18), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 18), "dateFin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 18), "getDateFin", [], "any", false, false, false, 18), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 18), "description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 18), "getDescription", [], "any", false, false, false, 18), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 19
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 19), "getImage", [], "any", false, false, false, 19))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 19), "imageFile"))) : ("")), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 20
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 20), "getLienImage", [], "any", false, false, false, 20), "titre" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 20), "getTitre", [], "any", false, false, false, 20), "lieu" => ($context["lieu"] ?? null)];
                    // line 21
                    echo "\t\t\t";
                    $context["genres"] = [];
                    // line 22
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 22), "getVisibleGenresMusicaux", [], "any", false, false, false, 22));
                    foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                        // line 23
                        echo "\t\t\t\t";
                        $context["categories"] = [];
                        // line 24
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genre"], "categorieMusicales", [], "any", false, false, false, 24));
                        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                            // line 25
                            echo "\t\t\t\t\t";
                            $context["categoriesArray"] = [twig_get_attribute($this->env, $this->source, $context["categorie"], "getId", [], "any", false, false, false, 25) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "getId", [], "any", false, false, false, 25), "nom" => twig_get_attribute($this->env, $this->source, $context["categorie"], "getNom", [], "any", false, false, false, 25), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "getId", [], "any", false, false, false, 25)]))]];
                            // line 26
                            echo "\t\t\t\t\t";
                            $context["categories"] = twig_array_merge(($context["categories"] ?? null), ($context["categoriesArray"] ?? null));
                            // line 27
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "\t\t\t\t";
                        $context["genreArray"] = [twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 28) => ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 28), "nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "any", false, false, false, 28), "categories" => ($context["categories"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 28)]))]];
                        // line 29
                        echo "\t\t\t\t";
                        $context["genres"] = twig_array_merge(($context["genres"] ?? null), ($context["genreArray"] ?? null));
                        // line 30
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 32)))) {
                    // line 33
                    echo "\t\t\t";
                    $context["dateDebPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 33), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 33);
                    // line 34
                    echo "\t\t";
                } else {
                    // line 35
                    echo "\t\t\t";
                    $context["dateDebPass"] = null;
                    // line 36
                    echo "\t\t";
                }
                // line 37
                echo "
\t\t";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 38)))) {
                    // line 39
                    echo "\t\t\t";
                    $context["dateFinPass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 39), "format", [0 => "d-m-Y H:i"], "method", false, false, false, 39);
                    // line 40
                    echo "\t\t";
                } else {
                    // line 41
                    echo "\t\t\t";
                    $context["dateFinPass"] = null;
                    // line 42
                    echo "\t\t";
                }
                // line 43
                echo "\t\t";
                $context["groupe"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 43), "getId", [], "any", false, false, false, 43), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 43), "getNom", [], "any", false, false, false, 43), "dateCreation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 43), "dateCreation", [], "any", false, false, false, 43), "biographie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 43), "getBiographie", [], "any", false, false, false, 43), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 43), "getLienImage", [], "any", false, false, false, 43), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 44
$context["passage"], "getVisibleGroupe", [], "any", false, false, false, 44), "getImage", [], "any", false, false, false, 44))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 44), "imageFile"))) : ("")), "genreMusicaux" =>                 // line 45
($context["genres"] ?? null), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 45), "getVisibleNationalite", [], "any", false, false, false, 45))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 45), "getVisibleNationalite", [], "any", false, false, false, 45), "getNom", [], "any", false, false, false, 45)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 45), "getId", [], "any", false, false, false, 45)]))];
                // line 46
                echo "\t\t";
                $context["passageArr"] = [twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 46) => ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 46), "dateDebut" => ($context["dateDebPass"] ?? null), "dateFin" => ($context["dateFinPass"] ?? null), "evenement" => ($context["evenement"] ?? null), "groupe" => ($context["groupe"] ?? null)]];
                // line 47
                echo "\t";
            } else {
                // line 48
                echo "\t\t\t";
                $context["passageArr"] = null;
                // line 49
                echo "\t";
            }
            // line 50
            echo "\t";
            $context["passages"] = twig_array_merge(($context["passages"] ?? null), ($context["passageArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["passages"] ?? null));
        echo "
";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_6_);
    }

    public function getTemplateName()
    {
        return "passages/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 1,  189 => 52,  182 => 50,  179 => 49,  176 => 48,  173 => 47,  170 => 46,  168 => 45,  167 => 44,  165 => 43,  162 => 42,  159 => 41,  156 => 40,  153 => 39,  151 => 38,  148 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  133 => 32,  127 => 31,  121 => 30,  118 => 29,  115 => 28,  109 => 27,  106 => 26,  103 => 25,  98 => 24,  95 => 23,  90 => 22,  87 => 21,  85 => 20,  84 => 19,  82 => 18,  78 => 17,  75 => 16,  73 => 15,  70 => 14,  68 => 13,  67 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "passages/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/passages/listeApi.html.twig");
    }
}
