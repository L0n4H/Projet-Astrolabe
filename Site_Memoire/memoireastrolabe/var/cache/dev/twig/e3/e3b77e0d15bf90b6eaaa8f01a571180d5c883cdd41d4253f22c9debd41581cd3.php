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
class __TwigTemplate_4bea8d9a58d343d372b912e92724097de63f21db65fc14e02f856463b94e2dc2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passages/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passages/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["passages"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listePassages"]) || array_key_exists("listePassages", $context) ? $context["listePassages"] : (function () { throw new RuntimeError('Variable "listePassages" does not exist.', 3, $this->source); })()));
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
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 13), "getLienImage", [], "any", false, false, false, 13), "titre" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 13), "getTitre", [], "any", false, false, false, 13), "lieu" => (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 13, $this->source); })())];
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
$context["passage"], "getVisibleEvenement", [], "any", false, false, false, 20), "getLienImage", [], "any", false, false, false, 20), "titre" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleEvenement", [], "any", false, false, false, 20), "getTitre", [], "any", false, false, false, 20), "lieu" => (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 20, $this->source); })())];
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
                            $context["categories"] = twig_array_merge((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 26, $this->source); })()), (isset($context["categoriesArray"]) || array_key_exists("categoriesArray", $context) ? $context["categoriesArray"] : (function () { throw new RuntimeError('Variable "categoriesArray" does not exist.', 26, $this->source); })()));
                            // line 27
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "\t\t\t\t";
                        $context["genreArray"] = [twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 28) => ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 28), "nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "any", false, false, false, 28), "categories" => (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 28)]))]];
                        // line 29
                        echo "\t\t\t\t";
                        $context["genres"] = twig_array_merge((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 29, $this->source); })()), (isset($context["genreArray"]) || array_key_exists("genreArray", $context) ? $context["genreArray"] : (function () { throw new RuntimeError('Variable "genreArray" does not exist.', 29, $this->source); })()));
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
(isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 45, $this->source); })()), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 45), "getVisibleNationalite", [], "any", false, false, false, 45))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 45), "getVisibleNationalite", [], "any", false, false, false, 45), "getNom", [], "any", false, false, false, 45)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 45), "getId", [], "any", false, false, false, 45)]))];
                // line 46
                echo "\t\t";
                $context["passageArr"] = [twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 46) => ["id" => twig_get_attribute($this->env, $this->source, $context["passage"], "getId", [], "any", false, false, false, 46), "dateDebut" => (isset($context["dateDebPass"]) || array_key_exists("dateDebPass", $context) ? $context["dateDebPass"] : (function () { throw new RuntimeError('Variable "dateDebPass" does not exist.', 46, $this->source); })()), "dateFin" => (isset($context["dateFinPass"]) || array_key_exists("dateFinPass", $context) ? $context["dateFinPass"] : (function () { throw new RuntimeError('Variable "dateFinPass" does not exist.', 46, $this->source); })()), "evenement" => (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 46, $this->source); })()), "groupe" => (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 46, $this->source); })())]];
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
            $context["passages"] = twig_array_merge((isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 50, $this->source); })()), (isset($context["passageArr"]) || array_key_exists("passageArr", $context) ? $context["passageArr"] : (function () { throw new RuntimeError('Variable "passageArr" does not exist.', 50, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 52, $this->source); })()));
        echo "
";
        $___internal_parse_11_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_11_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  200 => 1,  195 => 52,  188 => 50,  185 => 49,  182 => 48,  179 => 47,  176 => 46,  174 => 45,  173 => 44,  171 => 43,  168 => 42,  165 => 41,  162 => 40,  159 => 39,  157 => 38,  154 => 37,  151 => 36,  148 => 35,  145 => 34,  142 => 33,  139 => 32,  133 => 31,  127 => 30,  124 => 29,  121 => 28,  115 => 27,  112 => 26,  109 => 25,  104 => 24,  101 => 23,  96 => 22,  93 => 21,  91 => 20,  90 => 19,  88 => 18,  84 => 17,  81 => 16,  79 => 15,  76 => 14,  74 => 13,  73 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set passages =  { } %}
{% for passage in listePassages %}
\t{% if passage.getVisibleEvenement != null and passage.getVisibleGroupe is not null  %}
\t\t{% if passage.getVisibleEvenement.getVisibleLieu is not null %}
\t\t\t{% set lieu = {'ville':(passage.getVisibleEvenement.getVisibleLieu.getVille),'CP':(passage.getVisibleEvenement.getVisibleLieu.getCP),'adresse':(passage.getVisibleEvenement.getVisibleLieu.getAdresse),'nomBatiment':(passage.getVisibleEvenement.getVisibleLieu.getNomBatiment),'url':  (absolute_url(path('detail_lieu', {'id' : passage.getVisibleEvenement.getVisibleLieu.getId}))) }%}
\t\t{% else %}
\t\t\t{% set lieu =  null %}
\t\t{% endif %}
\t
\t\t{% set evenement = {  'id' : passage.getVisibleEvenement.getId,'type':passage.getVisibleEvenement.getTypeEvenement is not null ? passage.getVisibleEvenement.getTypeEvenement.getLabel : null,\"dateDebut\": (passage.getVisibleEvenement.getDateDebut.format(\"d-m-Y H:i\")),\"dateFin\": (passage.getVisibleEvenement.getDateFin.format(\"d-m-Y H:i\")),\"description\": (passage.getVisibleEvenement.getDescription),
\t\t'image':passage.getVisibleEvenement.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(passage.getVisibleEvenement, 'imageFile')) ): '', 
\t\t'lienImage':passage.getVisibleEvenement.getLienImage,\"titre\": (passage.getVisibleEvenement.getTitre),'lieu':lieu,}%}
\t
\t\t{% set genres = { } %}

\t\t{% for genre in passage.getVisibleGroupe.getVisibleGenresMusicaux %}
\t\t\t{% set evenement = {  'id' : passage.getVisibleEvenement.getId,'type': (passage.getVisibleEvenement.getVisibleTypeEvenements != null) ? passage.getVisibleEvenement.getVisibleTypeEvenements.getLabel : \"\",\"dateDebut\": (passage.getVisibleEvenement.getDateDebut.format(\"d-m-Y H:i\")),\"dateFin\": (passage.getVisibleEvenement.getDateFin.format(\"d-m-Y H:i\")),\"description\": (passage.getVisibleEvenement.getDescription),
\t\t\t'image':passage.getVisibleEvenement.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(passage.getVisibleEvenement, 'imageFile')) ): '', 
\t\t\t'lienImage':passage.getVisibleEvenement.getLienImage,\"titre\": (passage.getVisibleEvenement.getTitre),'lieu':lieu,}%}
\t\t\t{% set genres = { } %}
\t\t\t{% for genre in passage.getVisibleGroupe.getVisibleGenresMusicaux %}
\t\t\t\t{% set categories = { } %}
\t\t\t\t{% for categorie in genre.categorieMusicales %}
\t\t\t\t\t{%  set categoriesArray ={(categorie.getId) : {'id':categorie.getId, 'nom':categorie.getNom,'url':  (absolute_url(path('detail_categorieMusicale', {'id' : categorie.getId}))) }} %}
\t\t\t\t\t{% set categories = categories|merge(categoriesArray) %}
\t\t\t\t{% endfor %}
\t\t\t\t{%  set genreArray ={(genre.getId) : {'id':genre.getId, 'nom':genre.getNom,'categories': categories,'url':  (absolute_url(path('detail_genreMusical', {'id' : genre.getId}))) }} %}
\t\t\t\t{% set genres = genres|merge(genreArray) %}
\t\t\t{% endfor %}
\t\t{% endfor %}
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
\t\t{% set groupe =  {'id' : (passage.getVisibleGroupe.getId),\"nom\": (passage.getVisibleGroupe.getNom),'dateCreation' : passage.getVisibleGroupe.dateCreation,'biographie':passage.getVisibleGroupe.getBiographie,'lienImage':passage.getVisibleGroupe.getLienImage,
\t\t'image':passage.getVisibleGroupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(passage.getVisibleGroupe, 'imageFile')) ): '', 
\t\t'genreMusicaux':genres,'nationalite': passage.getVisibleGroupe.getVisibleNationalite is not null ? passage.getVisibleGroupe.getVisibleNationalite.getNom : null,'url':  (absolute_url(path('detail_groupe', {'id' : passage.getVisibleGroupe.getId}))) } %}
\t\t{% set passageArr = {(passage.getId) : {  'id' : passage.getId,\"dateDebut\": dateDebPass,\"dateFin\": dateFinPass,\"evenement\" : evenement,'groupe' : groupe}}%}
\t{% else %}
\t\t\t{% set passageArr =  null %}
\t{% endif %}
\t{% set passages = passages|merge(passageArr) %}
{% endfor %}
{{ passages|unescape|raw }}
{% endapply %}
", "passages/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\passages\\listeApi.html.twig");
    }
}
