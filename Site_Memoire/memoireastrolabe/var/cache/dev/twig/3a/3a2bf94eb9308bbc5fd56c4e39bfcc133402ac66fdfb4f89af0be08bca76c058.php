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

/* nationalites/listeApi.html.twig */
class __TwigTemplate_b0d5ae436c73bc3540a963d4b86b3972b7668b86a80fbb168f255ab98526fd26 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nationalites/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nationalites/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["nationalites"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeNationalite"]) || array_key_exists("listeNationalite", $context) ? $context["listeNationalite"] : (function () { throw new RuntimeError('Variable "listeNationalite" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nationalite"]) {
            // line 4
            echo "\t";
            $context["groupes"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nationalite"], "getVisibleGroupes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 6
                echo "\t\t";
                $context["labels"] = [];
                // line 7
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleLabels", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 8
                    echo "\t\t\t";
                    $context["labelArr"] = [twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 8) => ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 8), "nom" => twig_get_attribute($this->env, $this->source, $context["label"], "getNom", [], "any", false, false, false, 8), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["label"], "getDateCreation", [], "any", false, false, false, 8), "description" => twig_get_attribute($this->env, $this->source, $context["label"], "getDescription", [], "any", false, false, false, 8), "logo" => twig_get_attribute($this->env, $this->source, $context["label"], "getLogo", [], "any", false, false, false, 8), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 8)]))]];
                    // line 9
                    echo "\t\t\t";
                    $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 9, $this->source); })()), (isset($context["labelArr"]) || array_key_exists("labelArr", $context) ? $context["labelArr"] : (function () { throw new RuntimeError('Variable "labelArr" does not exist.', 9, $this->source); })()));
                    // line 10
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t";
                $context["genresMusicales"] = [];
                // line 12
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleGenresMusicaux", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["genreMusical"]) {
                    // line 13
                    echo "\t\t\t";
                    $context["categoriesMusicales"] = [];
                    // line 14
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getCategorieMusicales", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorieMusical"]) {
                        // line 15
                        echo "\t\t\t\t";
                        $context["categorieMusicaleArr"] = [twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 15) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 15), "nom" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getNom", [], "any", false, false, false, 15), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 15)]))]];
                        // line 16
                        echo "\t\t\t\t";
                        $context["categoriesMusicales"] = twig_array_merge((isset($context["categoriesMusicales"]) || array_key_exists("categoriesMusicales", $context) ? $context["categoriesMusicales"] : (function () { throw new RuntimeError('Variable "categoriesMusicales" does not exist.', 16, $this->source); })()), (isset($context["categorieMusicaleArr"]) || array_key_exists("categorieMusicaleArr", $context) ? $context["categorieMusicaleArr"] : (function () { throw new RuntimeError('Variable "categorieMusicaleArr" does not exist.', 16, $this->source); })()));
                        // line 17
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "\t\t\t";
                    $context["genreMusicalArray"] = [twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 18) => ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 18), "nom" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getNom", [], "any", false, false, false, 18), "categoriesMusicales" => (isset($context["categoriesMusicales"]) || array_key_exists("categoriesMusicales", $context) ? $context["categoriesMusicales"] : (function () { throw new RuntimeError('Variable "categoriesMusicales" does not exist.', 18, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 18)]))]];
                    // line 19
                    echo "\t\t\t";
                    $context["genresMusicales"] = twig_array_merge((isset($context["genresMusicales"]) || array_key_exists("genresMusicales", $context) ? $context["genresMusicales"] : (function () { throw new RuntimeError('Variable "genresMusicales" does not exist.', 19, $this->source); })()), (isset($context["genreMusicalArray"]) || array_key_exists("genreMusicalArray", $context) ? $context["genreMusicalArray"] : (function () { throw new RuntimeError('Variable "genreMusicalArray" does not exist.', 19, $this->source); })()));
                    // line 20
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genreMusical'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t";
                $context["etiquettesGroupe"] = [];
                // line 22
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleEtiquettes", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                    // line 23
                    echo "\t\t\t";
                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 23) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 23), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 23), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 23)]))]];
                    // line 24
                    echo "\t\t\t";
                    $context["etiquettesGroupe"] = twig_array_merge((isset($context["etiquettesGroupe"]) || array_key_exists("etiquettesGroupe", $context) ? $context["etiquettesGroupe"] : (function () { throw new RuntimeError('Variable "etiquettesGroupe" does not exist.', 24, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 24, $this->source); })()));
                    // line 25
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t";
                $context["groupeArray"] = [twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 26) => ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 26), "nom" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getNom", [], "any", false, false, false, 26), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getDateCreation", [], "any", false, false, false, 26), "biographie" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getBiographie", [], "any", false, false, false, 26), "lienImage" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getLienImage", [], "any", false, false, false, 26), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 27
$context["groupe"], "getImage", [], "any", false, false, false, 27))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["groupe"], "imageFile"))) : ("")), "etiquettes" =>                 // line 28
(isset($context["etiquettesGroupe"]) || array_key_exists("etiquettesGroupe", $context) ? $context["etiquettesGroupe"] : (function () { throw new RuntimeError('Variable "etiquettesGroupe" does not exist.', 28, $this->source); })()), "genresMusicaux" => (isset($context["genresMusicales"]) || array_key_exists("genresMusicales", $context) ? $context["genresMusicales"] : (function () { throw new RuntimeError('Variable "genresMusicales" does not exist.', 28, $this->source); })()), "labels" => (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 28, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 28)]))]];
                // line 29
                echo "\t\t";
                $context["groupes"] = twig_array_merge((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 29, $this->source); })()), (isset($context["groupeArray"]) || array_key_exists("groupeArray", $context) ? $context["groupeArray"] : (function () { throw new RuntimeError('Variable "groupeArray" does not exist.', 29, $this->source); })()));
                // line 30
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t";
            $context["musiciens"] = [];
            // line 32
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nationalite"], "getVisibleMusiciens", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["musicien"]) {
                // line 33
                echo "\t\t";
                $context["etiquettesMus"] = [];
                // line 34
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["musicien"], "getVisibleEtiquettes", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                    // line 35
                    echo "\t\t\t";
                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 35), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 35)]))]];
                    // line 36
                    echo "\t\t\t";
                    $context["etiquettesMus"] = twig_array_merge((isset($context["etiquettesMus"]) || array_key_exists("etiquettesMus", $context) ? $context["etiquettesMus"] : (function () { throw new RuntimeError('Variable "etiquettesMus" does not exist.', 36, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 36, $this->source); })()));
                    // line 37
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t";
                $context["musicienArray"] = [twig_get_attribute($this->env, $this->source, $context["musicien"], "getId", [], "any", false, false, false, 38) => ["id" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getId", [], "any", false, false, false, 38), "nom" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getNom", [], "any", false, false, false, 38), "prenom" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getPrenom", [], "any", false, false, false, 38), "nomScene" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getNomScene", [], "any", false, false, false, 38), "dateNaisance" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getDateNaissance", [], "any", false, false, false, 38), "lienImage" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getLienImage", [], "any", false, false, false, 38), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 39
$context["musicien"], "getImage", [], "any", false, false, false, 39))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["musicien"], "imageFile"))) : ("")), "etiquettes" =>                 // line 40
(isset($context["etiquettesMus"]) || array_key_exists("etiquettesMus", $context) ? $context["etiquettesMus"] : (function () { throw new RuntimeError('Variable "etiquettesMus" does not exist.', 40, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getId", [], "any", false, false, false, 40)]))]];
                // line 41
                echo "\t\t";
                $context["musiciens"] = twig_array_merge((isset($context["musiciens"]) || array_key_exists("musiciens", $context) ? $context["musiciens"] : (function () { throw new RuntimeError('Variable "musiciens" does not exist.', 41, $this->source); })()), (isset($context["musicienArray"]) || array_key_exists("musicienArray", $context) ? $context["musicienArray"] : (function () { throw new RuntimeError('Variable "musicienArray" does not exist.', 41, $this->source); })()));
                // line 42
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musicien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t";
            // line 44
            echo "\t";
            $context["nationaliteArr"] = [twig_get_attribute($this->env, $this->source, $context["nationalite"], "getId", [], "any", false, false, false, 44) => ["id" => twig_get_attribute($this->env, $this->source, $context["nationalite"], "getId", [], "any", false, false, false, 44), "nom" => twig_get_attribute($this->env, $this->source, $context["nationalite"], "getNom", [], "any", false, false, false, 44), "groupes" => (isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 44, $this->source); })()), "musiciens" => (isset($context["musiciens"]) || array_key_exists("musiciens", $context) ? $context["musiciens"] : (function () { throw new RuntimeError('Variable "musiciens" does not exist.', 44, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_nationalite", ["id" => twig_get_attribute($this->env, $this->source, $context["nationalite"], "getId", [], "any", false, false, false, 44)]))]];
            // line 45
            echo "\t";
            $context["nationalites"] = twig_array_merge((isset($context["nationalites"]) || array_key_exists("nationalites", $context) ? $context["nationalites"] : (function () { throw new RuntimeError('Variable "nationalites" does not exist.', 45, $this->source); })()), (isset($context["nationaliteArr"]) || array_key_exists("nationaliteArr", $context) ? $context["nationaliteArr"] : (function () { throw new RuntimeError('Variable "nationaliteArr" does not exist.', 45, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nationalite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["nationalites"]) || array_key_exists("nationalites", $context) ? $context["nationalites"] : (function () { throw new RuntimeError('Variable "nationalites" does not exist.', 47, $this->source); })()));
        echo "
";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nationalites/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 1,  207 => 47,  200 => 45,  197 => 44,  195 => 43,  189 => 42,  186 => 41,  184 => 40,  183 => 39,  181 => 38,  175 => 37,  172 => 36,  169 => 35,  164 => 34,  161 => 33,  156 => 32,  153 => 31,  147 => 30,  144 => 29,  142 => 28,  141 => 27,  139 => 26,  133 => 25,  130 => 24,  127 => 23,  122 => 22,  119 => 21,  113 => 20,  110 => 19,  107 => 18,  101 => 17,  98 => 16,  95 => 15,  90 => 14,  87 => 13,  82 => 12,  79 => 11,  73 => 10,  70 => 9,  67 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set nationalites = {} %}
{% for nationalite in listeNationalite %}
\t{% set groupes = {} %}
\t{% for groupe in nationalite.getVisibleGroupes %}
\t\t{% set labels = {} %}
\t\t{% for label in groupe.getVisibleLabels %}
\t\t\t{% set labelArr =  {(label.getId) :{'id' : (label.getId),\"nom\": (label.getNom),\"dateCreation\": (label.getDateCreation),\"description\": (label.getDescription),\"logo\" : (label.getLogo),'url':  (absolute_url(path('detail_label', {'id' : label.getId})))} } %}
\t\t\t{% set labels = labels|merge(labelArr) %}
\t\t{% endfor %}
\t\t{% set genresMusicales = { } %}
\t\t{% for genreMusical in groupe.getVisibleGenresMusicaux %}
\t\t\t{% set categoriesMusicales = {} %}
\t\t\t{% for categorieMusical in genreMusical.getCategorieMusicales %}
\t\t\t\t{% set categorieMusicaleArr =  {(categorieMusical.getId) :{'id' : (categorieMusical.getId),\"nom\": (categorieMusical.getNom),'url':  (absolute_url(path('detail_categorieMusicale', {'id' : categorieMusical.getId})))} } %}
\t\t\t\t{% set categoriesMusicales = categoriesMusicales|merge(categorieMusicaleArr) %}
\t\t\t{% endfor %}
\t\t\t{%  set genreMusicalArray ={(genreMusical.getId): {'id': genreMusical.getId, 'nom': genreMusical.getNom,'categoriesMusicales': categoriesMusicales,'url':  (absolute_url(path('detail_genreMusical', {'id' : genreMusical.getId}))) } }   %}
\t\t\t{% set genresMusicales = genresMusicales|merge(genreMusicalArray) %}
\t\t{% endfor %}
\t\t{% set etiquettesGroupe = { } %}
\t\t{% for etiquette in groupe.getVisibleEtiquettes %}
\t\t\t{%  set etiquetteArray ={(etiquette.getId): {'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } }   %}
\t\t\t{% set etiquettesGroupe = etiquettesGroupe|merge(etiquetteArray) %}
\t\t{% endfor %}
\t\t{% set groupeArray = {(groupe.getId) : {'id': (groupe.getId),'nom' : (groupe.getNom),'dateCreation': (groupe.getDateCreation),'biographie': (groupe.getBiographie),'lienImage':groupe.getLienImage,
\t\t'image':groupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(groupe, 'imageFile')) ): '', 
\t\t'etiquettes' : etiquettesGroupe,'genresMusicaux': genresMusicales,'labels': labels, 'url' : absolute_url(path('detail_groupe' , {'id': groupe.getId }))}}%}
\t\t{% set groupes = groupes|merge(groupeArray) %}
\t{% endfor %}
\t{% set musiciens = {} %}
\t{% for musicien in nationalite.getVisibleMusiciens %}
\t\t{% set etiquettesMus = { } %}
\t\t{% for etiquette in musicien.getVisibleEtiquettes %}
\t\t\t{%  set etiquetteArray ={(etiquette.getId): {'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } }   %}
\t\t\t{% set etiquettesMus = etiquettesMus|merge(etiquetteArray) %}
\t\t{% endfor %}
\t\t{% set musicienArray = {(musicien.getId) : {'id': (musicien.getId),'nom' : (musicien.getNom),'prenom' : (musicien.getPrenom),'nomScene': (musicien.getNomScene),'dateNaisance': (musicien.getDateNaissance),'lienImage':musicien.getLienImage,
\t\t'image':musicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(musicien, 'imageFile')) ): '',
\t\t'etiquettes': etiquettesMus,'url' : absolute_url(path('detail_musicien' , {'id': musicien.getId }))}}%}
\t\t{% set musiciens = musiciens|merge(musicienArray) %}
\t{% endfor %}
\t{# \"lienDrapeau\": (nationalite.getLienDrapeau), #}
\t{% set nationaliteArr =  {(nationalite.getId) :{'id' : (nationalite.getId),\"nom\": (nationalite.getNom),\"groupes\": groupes,\"musiciens\" : musiciens,'url':  (absolute_url(path('detail_nationalite', {'id' : nationalite.getId})))} } %}
\t{% set nationalites = nationalites|merge(nationaliteArr) %}
{% endfor %}
{{ nationalites|unescape|raw }}
{% endapply %}
", "nationalites/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/nationalites/listeApi.html.twig");
    }
}
