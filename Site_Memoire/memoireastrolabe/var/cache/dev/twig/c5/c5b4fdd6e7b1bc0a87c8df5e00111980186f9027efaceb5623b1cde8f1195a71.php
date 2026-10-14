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

/* membres/listeApi.html.twig */
class __TwigTemplate_3b5b4f34810c993a959cd0e389077ff07da531c06ef186de6059b9f68a5c75db extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membres/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membres/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["membres"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMembres"]) || array_key_exists("listeMembres", $context) ? $context["listeMembres"] : (function () { throw new RuntimeError('Variable "listeMembres" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 4
            echo "\t";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 4))) {
                // line 5
                echo "\t\t";
                $context["etiquettes"] = [];
                // line 6
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 6), "getVisibleEtiquettes", [], "any", false, false, false, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
                    // line 7
                    echo "\t\t\t";
                    $context["etiquetteArray"] = [twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 7) => ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 7), "motsCles" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getMotsCles", [], "any", false, false, false, 7), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source, $context["etiquette"], "getId", [], "any", false, false, false, 7)]))]];
                    // line 8
                    echo "\t\t\t";
                    $context["etiquettes"] = twig_array_merge((isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 8, $this->source); })()), (isset($context["etiquetteArray"]) || array_key_exists("etiquetteArray", $context) ? $context["etiquetteArray"] : (function () { throw new RuntimeError('Variable "etiquetteArray" does not exist.', 8, $this->source); })()));
                    // line 9
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "\t\t";
                $context["musicien"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 10), "getId", [], "any", false, false, false, 10), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 10), "getNom", [], "any", false, false, false, 10), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 10), "getPrenom", [], "any", false, false, false, 10), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 10), "getNomScene", [], "any", false, false, false, 10), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 10), "getDateNaissance", [], "any", false, false, false, 10), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 10), "getLienImage", [], "any", false, false, false, 10), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 11
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 11), "getImage", [], "any", false, false, false, 11))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 11), "imageFile"))) : ("")), "etiquettes" =>                 // line 12
(isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 12, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 12), "getId", [], "any", false, false, false, 12)]))];
                // line 13
                echo "\t";
            } else {
                // line 14
                echo "\t\t";
                $context["musicien"] = [];
                // line 15
                echo "\t";
            }
            // line 16
            echo "\t";
            $context["instruments"] = [];
            // line 17
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleInstruments", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
                // line 18
                echo "\t\t";
                $context["instrumentArray"] = [twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 18) => ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 18), "nom" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getNom", [], "any", false, false, false, 18), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 18)]))]];
                // line 19
                echo "\t\t";
                $context["instruments"] = twig_array_merge((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 19, $this->source); })()), (isset($context["instrumentArray"]) || array_key_exists("instrumentArray", $context) ? $context["instrumentArray"] : (function () { throw new RuntimeError('Variable "instrumentArray" does not exist.', 19, $this->source); })()));
                // line 20
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t";
            $context["genres"] = [];
            // line 22
            echo "\t";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 22))) {
                // line 23
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 23), "getVisibleGenresMusicaux", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 24
                    echo "\t\t\t";
                    $context["categories"] = [];
                    // line 25
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genre"], "categorieMusicales", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                        // line 26
                        echo "\t\t\t\t";
                        $context["categoriesArray"] = [twig_get_attribute($this->env, $this->source, $context["categorie"], "getId", [], "any", false, false, false, 26) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "getId", [], "any", false, false, false, 26), "nom" => twig_get_attribute($this->env, $this->source, $context["categorie"], "getNom", [], "any", false, false, false, 26), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "getId", [], "any", false, false, false, 26)]))]];
                        // line 27
                        echo "\t\t\t\t";
                        $context["categories"] = twig_array_merge((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 27, $this->source); })()), (isset($context["categoriesArray"]) || array_key_exists("categoriesArray", $context) ? $context["categoriesArray"] : (function () { throw new RuntimeError('Variable "categoriesArray" does not exist.', 27, $this->source); })()));
                        // line 28
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "\t\t\t";
                    $context["genreArray"] = [twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 29) => ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 29), "nom" => twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "any", false, false, false, 29), "categories" => (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 29, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genre"], "getId", [], "any", false, false, false, 29)]))]];
                    // line 30
                    echo "\t\t\t";
                    $context["genres"] = twig_array_merge((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 30, $this->source); })()), (isset($context["genreArray"]) || array_key_exists("genreArray", $context) ? $context["genreArray"] : (function () { throw new RuntimeError('Variable "genreArray" does not exist.', 30, $this->source); })()));
                    // line 31
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t";
                $context["groupe"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 32), "getId", [], "any", false, false, false, 32), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 32), "getNom", [], "any", false, false, false, 32), "dateCreation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 32), "dateCreation", [], "any", false, false, false, 32), "biographie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 32), "getBiographie", [], "any", false, false, false, 32), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 32), "getLienImage", [], "any", false, false, false, 32), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 33
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 33), "getImage", [], "any", false, false, false, 33))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 33), "imageFile"))) : ("")), "genreMusicaux" =>                 // line 34
(isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 34, $this->source); })()), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 34), "getVisibleNationalite", [], "any", false, false, false, 34))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 34), "getVisibleNationalite", [], "any", false, false, false, 34), "getNom", [], "any", false, false, false, 34)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 34), "getId", [], "any", false, false, false, 34)]))];
                // line 35
                echo "\t";
            } else {
                // line 36
                echo "\t\t";
                $context["groupe"] = [];
                // line 37
                echo "\t";
            }
            // line 38
            echo "\t";
            $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 38) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 38), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 38), "musicien" => (isset($context["musicien"]) || array_key_exists("musicien", $context) ? $context["musicien"] : (function () { throw new RuntimeError('Variable "musicien" does not exist.', 38, $this->source); })()), "instruments" => (isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 38, $this->source); })()), "groupe" => (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 38, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 38)]))]];
            // line 39
            echo "\t";
            $context["membres"] = twig_array_merge((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 39, $this->source); })()), (isset($context["membreArray"]) || array_key_exists("membreArray", $context) ? $context["membreArray"] : (function () { throw new RuntimeError('Variable "membreArray" does not exist.', 39, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 41, $this->source); })()));
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
        return "membres/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 1,  175 => 41,  168 => 39,  165 => 38,  162 => 37,  159 => 36,  156 => 35,  154 => 34,  153 => 33,  151 => 32,  145 => 31,  142 => 30,  139 => 29,  133 => 28,  130 => 27,  127 => 26,  122 => 25,  119 => 24,  114 => 23,  111 => 22,  108 => 21,  102 => 20,  99 => 19,  96 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  77 => 12,  76 => 11,  74 => 10,  68 => 9,  65 => 8,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set membres = { } %}
{% for membre in listeMembres %}
\t{% if membre.getVisibleMusicien is not null %}
\t\t{% set etiquettes = { } %}
\t\t{% for etiquette in membre.getVisibleMusicien.getVisibleEtiquettes %}
\t\t\t{%  set etiquetteArray ={(etiquette.getId): {'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } }   %}
\t\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t\t{% endfor %}
\t\t{%  set musicien ={'id':membre.getVisibleMusicien.getId, 'nom':membre.getVisibleMusicien.getNom,'prenom':membre.getVisibleMusicien.getPrenom,'nomScene':membre.getVisibleMusicien.getNomScene,'dateNaissance':membre.getVisibleMusicien.getDateNaissance,'lienImage':membre.getVisibleMusicien.getLienImage,
\t\t'image':membre.getVisibleMusicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleMusicien, 'imageFile')) ): '', 
\t\t'etiquettes':etiquettes,'url':  (absolute_url(path('detail_musicien', {'id' : membre.getVisibleMusicien.getId}))) } %}
\t{% else %}
\t\t{%  set musicien ={} %}
\t{% endif %}
\t{%  set instruments ={} %}
\t{% for instrument in membre.getVisibleInstruments %}
\t\t{%  set instrumentArray ={(instrument.getId) : {'id':instrument.getId, 'nom':instrument.getNom,'url':  (absolute_url(path('detail_instrument', {'id' : instrument.getId}))) }} %}
\t\t{% set instruments = instruments|merge(instrumentArray) %}
\t{% endfor %}
\t{% set genres = { } %}
\t{% if membre.getVisibleGroupe is not null %}
\t\t{% for genre in membre.getVisibleGroupe.getVisibleGenresMusicaux %}
\t\t\t{% set categories = { } %}
\t\t\t{% for categorie in genre.categorieMusicales %}
\t\t\t\t{%  set categoriesArray ={(categorie.getId) : {'id':categorie.getId, 'nom':categorie.getNom,'url':  (absolute_url(path('detail_categorieMusicale', {'id' : categorie.getId}))) }} %}
\t\t\t\t{% set categories = categories|merge(categoriesArray) %}
\t\t\t{% endfor %}
\t\t\t{%  set genreArray ={(genre.getId) : {'id':genre.getId, 'nom':genre.getNom,'categories': categories,'url':  (absolute_url(path('detail_genreMusical', {'id' : genre.getId}))) }} %}
\t\t\t{% set genres = genres|merge(genreArray) %}
\t\t{% endfor %}
\t\t{% set groupe =  {'id' : (membre.getVisibleGroupe.getId),\"nom\": (membre.getVisibleGroupe.getNom),'dateCreation' : membre.getVisibleGroupe.dateCreation,'biographie':membre.getVisibleGroupe.getBiographie,'lienImage':membre.getVisibleGroupe.getLienImage,
\t\t'image':membre.getVisibleGroupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleGroupe, 'imageFile')) ): '', 
\t\t'genreMusicaux':genres,'nationalite': membre.getVisibleGroupe.getVisibleNationalite is not null ? membre.getVisibleGroupe.getVisibleNationalite.getNom : null,'url':  (absolute_url(path('detail_groupe', {'id' : membre.getVisibleGroupe.getId}))) } %}
\t{% else %}
\t\t{% set groupe =  {} %}
\t{% endif %}
\t{%  set membreArray ={(membre.getId) : {'id':membre.getId, 'actif':membre.getActif,'musicien':musicien,'instruments' : instruments,'groupe' : groupe,'url':  (absolute_url(path('detail_membre', {'id' : membre.getId}))) }} %}
\t{% set membres = membres|merge(membreArray) %}
{% endfor %}
{{ membres|unescape|raw }}
{% endapply %}
", "membres/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/membres/listeApi.html.twig");
    }
}
