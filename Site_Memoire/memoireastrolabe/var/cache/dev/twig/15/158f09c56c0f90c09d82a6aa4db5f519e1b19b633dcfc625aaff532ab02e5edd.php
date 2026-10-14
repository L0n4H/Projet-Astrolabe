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

/* etiquettes/listeApi.html.twig */
class __TwigTemplate_a1127e5bf377d7b9d24b7339c56a8e40bf678978dfaef665a44fdf0dc079df4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etiquettes/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etiquettes/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["etiquettesArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEtiquettes"]) || array_key_exists("listeEtiquettes", $context) ? $context["listeEtiquettes"] : (function () { throw new RuntimeError('Variable "listeEtiquettes" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etiquette"]) {
            // line 4
            echo "\t";
            $context["ressources"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etiquette"], "getVisibleRessources", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                // line 6
                echo "\t\t";
                $context["ressourceArray"] = [twig_get_attribute($this->env, $this->source,                 // line 8
$context["ressource"], "getId", [], "any", false, false, false, 8) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 9
$context["ressource"], "getId", [], "any", false, false, false, 9), "lien" => twig_get_attribute($this->env, $this->source,                 // line 10
$context["ressource"], "getLien", [], "any", false, false, false, 10), "titre" => twig_get_attribute($this->env, $this->source,                 // line 11
$context["ressource"], "getTitre", [], "any", false, false, false, 11), "nomFile" => twig_get_attribute($this->env, $this->source,                 // line 12
$context["ressource"], "getNom", [], "any", false, false, false, 12), "type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 13
$context["ressource"], "getType", [], "any", false, false, false, 13), "getLabel", [], "any", false, false, false, 13), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_ressource", ["id" => twig_get_attribute($this->env, $this->source,                 // line 14
$context["ressource"], "getId", [], "any", false, false, false, 14)]))]];
                // line 17
                echo "\t\t";
                $context["ressources"] = twig_array_merge((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 17, $this->source); })()), (isset($context["ressourceArray"]) || array_key_exists("ressourceArray", $context) ? $context["ressourceArray"] : (function () { throw new RuntimeError('Variable "ressourceArray" does not exist.', 17, $this->source); })()));
                // line 18
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t";
            $context["musiciens"] = [];
            // line 20
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etiquette"], "getVisibleMusiciens", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["musicien"]) {
                // line 21
                echo "
\t\t";
                // line 22
                $context["musicienArr"] = [twig_get_attribute($this->env, $this->source,                 // line 24
$context["musicien"], "getId", [], "any", false, false, false, 24) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 25
$context["musicien"], "getId", [], "any", false, false, false, 25), "nom" => twig_get_attribute($this->env, $this->source,                 // line 26
$context["musicien"], "getNom", [], "any", false, false, false, 26), "prenom" => twig_get_attribute($this->env, $this->source,                 // line 27
$context["musicien"], "getPrenom", [], "any", false, false, false, 27), "lienImage" => twig_get_attribute($this->env, $this->source,                 // line 28
$context["musicien"], "getLienImage", [], "any", false, false, false, 28), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 29
$context["musicien"], "getImage", [], "any", false, false, false, 29))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["musicien"], "imageFile"))) : ("")), "nomScene" => twig_get_attribute($this->env, $this->source,                 // line 30
$context["musicien"], "getNomScene", [], "any", false, false, false, 30), "dateNaissance" => twig_get_attribute($this->env, $this->source,                 // line 31
$context["musicien"], "getDateNaissance", [], "any", false, false, false, 31), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source,                 // line 32
$context["musicien"], "getId", [], "any", false, false, false, 32)]))]];
                // line 36
                echo "\t\t";
                $context["musiciens"] = twig_array_merge((isset($context["musiciens"]) || array_key_exists("musiciens", $context) ? $context["musiciens"] : (function () { throw new RuntimeError('Variable "musiciens" does not exist.', 36, $this->source); })()), (isset($context["musicienArr"]) || array_key_exists("musicienArr", $context) ? $context["musicienArr"] : (function () { throw new RuntimeError('Variable "musicienArr" does not exist.', 36, $this->source); })()));
                // line 37
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musicien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t";
            $context["groupes"] = [];
            // line 39
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etiquette"], "getVisibleGroupes", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 40
                echo "\t\t";
                $context["groupe"] = [twig_get_attribute($this->env, $this->source,                 // line 43
$context["groupe"], "getId", [], "any", false, false, false, 43) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 44
$context["groupe"], "getId", [], "any", false, false, false, 44), "nom" => twig_get_attribute($this->env, $this->source,                 // line 45
$context["groupe"], "getNom", [], "any", false, false, false, 45), "dateCreation" => twig_get_attribute($this->env, $this->source,                 // line 46
$context["groupe"], "dateCreation", [], "any", false, false, false, 46), "lienImage" => twig_get_attribute($this->env, $this->source,                 // line 47
$context["groupe"], "getLienImage", [], "any", false, false, false, 47), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 48
$context["groupe"], "getImage", [], "any", false, false, false, 48))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["groupe"], "imageFile"))) : ("")), "biographie" => twig_get_attribute($this->env, $this->source,                 // line 49
$context["groupe"], "getBiographie", [], "any", false, false, false, 49), "image" => twig_get_attribute($this->env, $this->source,                 // line 50
$context["groupe"], "getImage", [], "any", false, false, false, 50), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 51
$context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 51))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleNationalite", [], "any", false, false, false, 51), "getNom", [], "any", false, false, false, 51)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source,                 // line 52
$context["groupe"], "getId", [], "any", false, false, false, 52)]))]];
                // line 56
                echo "\t\t";
                $context["groupes"] = twig_array_merge((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 56, $this->source); })()), $context["groupe"]);
                // line 57
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
    ";
            // line 59
            $context["evenements"] = [];
            // line 60
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["etiquette"], "getVisibleEvenements", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 61
                echo "\t\t";
                $context["evenementArray"] = [twig_get_attribute($this->env, $this->source,                 // line 63
$context["evenement"], "getId", [], "any", false, false, false, 63) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 65
$context["evenement"], "getId", [], "any", false, false, false, 65), "titre" => twig_get_attribute($this->env, $this->source,                 // line 66
$context["evenement"], "getTitre", [], "any", false, false, false, 66), "dateDebut" => twig_get_attribute($this->env, $this->source,                 // line 67
$context["evenement"], "getDateDebut", [], "any", false, false, false, 67), "dateFin" => twig_get_attribute($this->env, $this->source,                 // line 68
$context["evenement"], "getDateFin", [], "any", false, false, false, 68), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 69
$context["evenement"], "getImage", [], "any", false, false, false, 69))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["evenement"], "imageFile"))) : ("")), "lienImage" => twig_get_attribute($this->env, $this->source,                 // line 70
$context["evenement"], "getLienImage", [], "any", false, false, false, 70), "description" => twig_get_attribute($this->env, $this->source,                 // line 71
$context["evenement"], "getDescription", [], "any", false, false, false, 71), "type" => (((0 !== twig_compare(twig_get_attribute($this->env, $this->source,                 // line 72
$context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 72), null))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 72), "getLabel", [], "any", false, false, false, 72)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source,                 // line 73
$context["evenement"], "getId", [], "any", false, false, false, 73)]))]];
                // line 76
                echo "\t\t";
                $context["evenements"] = twig_array_merge((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 76, $this->source); })()), (isset($context["evenementArray"]) || array_key_exists("evenementArray", $context) ? $context["evenementArray"] : (function () { throw new RuntimeError('Variable "evenementArray" does not exist.', 76, $this->source); })()));
                // line 77
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
\t";
            // line 79
            $context["etiquetteArr"] = [twig_get_attribute($this->env, $this->source,             // line 81
$context["etiquette"], "getId", [], "any", false, false, false, 81) => ["id" => twig_get_attribute($this->env, $this->source,             // line 82
$context["etiquette"], "getId", [], "any", false, false, false, 82), "motsCles" => twig_get_attribute($this->env, $this->source,             // line 83
$context["etiquette"], "getMotsCles", [], "any", false, false, false, 83), "groupes" =>             // line 84
(isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 84, $this->source); })()), "ressources" =>             // line 85
(isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 85, $this->source); })()), "evenements" =>             // line 86
(isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 86, $this->source); })()), "musiciens" =>             // line 87
(isset($context["musiciens"]) || array_key_exists("musiciens", $context) ? $context["musiciens"] : (function () { throw new RuntimeError('Variable "musiciens" does not exist.', 87, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_etiquette", ["id" => twig_get_attribute($this->env, $this->source,             // line 88
$context["etiquette"], "getId", [], "any", false, false, false, 88)]))]];
            // line 91
            echo "\t";
            $context["etiquettesArr"] = twig_array_merge((isset($context["etiquettesArr"]) || array_key_exists("etiquettesArr", $context) ? $context["etiquettesArr"] : (function () { throw new RuntimeError('Variable "etiquettesArr" does not exist.', 91, $this->source); })()), (isset($context["etiquetteArr"]) || array_key_exists("etiquetteArr", $context) ? $context["etiquetteArr"] : (function () { throw new RuntimeError('Variable "etiquetteArr" does not exist.', 91, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiquette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["etiquettesArr"]) || array_key_exists("etiquettesArr", $context) ? $context["etiquettesArr"] : (function () { throw new RuntimeError('Variable "etiquettesArr" does not exist.', 93, $this->source); })()));
        echo "
";
        $___internal_parse_10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_10_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "etiquettes/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 1,  191 => 93,  184 => 91,  182 => 88,  181 => 87,  180 => 86,  179 => 85,  178 => 84,  177 => 83,  176 => 82,  175 => 81,  174 => 79,  171 => 78,  165 => 77,  162 => 76,  160 => 73,  159 => 72,  158 => 71,  157 => 70,  156 => 69,  155 => 68,  154 => 67,  153 => 66,  152 => 65,  151 => 63,  149 => 61,  144 => 60,  142 => 59,  139 => 58,  133 => 57,  130 => 56,  128 => 52,  127 => 51,  126 => 50,  125 => 49,  124 => 48,  123 => 47,  122 => 46,  121 => 45,  120 => 44,  119 => 43,  117 => 40,  112 => 39,  109 => 38,  103 => 37,  100 => 36,  98 => 32,  97 => 31,  96 => 30,  95 => 29,  94 => 28,  93 => 27,  92 => 26,  91 => 25,  90 => 24,  89 => 22,  86 => 21,  81 => 20,  78 => 19,  72 => 18,  69 => 17,  67 => 14,  66 => 13,  65 => 12,  64 => 11,  63 => 10,  62 => 9,  61 => 8,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set etiquettesArr =  {} %}
{% for etiquette in listeEtiquettes %}
\t{% set ressources =  { } %}
\t{% for ressource in etiquette.getVisibleRessources %}
\t\t{%  set ressourceArray =
        { 
            (ressource.getId) : {
                'id':ressource.getId, 
                'lien':ressource.getLien , 
                'titre': (ressource.getTitre),
                'nomFile': (ressource.getNom),
                'type': ressource.getType.getLabel,
                'url':  (absolute_url(path('detail_ressource', {'id' : ressource.getId}))) 
            } 
        }%}
\t\t{% set ressources = ressources|merge(ressourceArray) %}
\t{% endfor %}
\t{% set musiciens = { } %}
\t{% for musicien in etiquette.getVisibleMusiciens %}

\t\t{%  set 
            musicienArr = {
                (musicien.getId) :{
                'id':musicien.getId, 
                'nom':musicien.getNom,
                'prenom':musicien.getPrenom,
                'lienImage':musicien.getLienImage,
                'image':musicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(musicien, 'imageFile')) ): '', 
                'nomScene':musicien.getNomScene,
                'dateNaissance':musicien.getDateNaissance,
                'url':  (absolute_url(path('detail_musicien', {'id' : musicien.getId}))) 
                }
            } 
        %}
\t\t{% set musiciens = musiciens|merge(musicienArr) %}
\t{% endfor %}
\t{% set groupes = { } %}
\t{% for groupe in etiquette.getVisibleGroupes %}
\t\t{% set 
            groupe =  
            {
                (groupe.getId) :{
                'id' : (groupe.getId),
                \"nom\": (groupe.getNom),
                'dateCreation' : groupe.dateCreation,
                'lienImage':groupe.getLienImage,
                'image':groupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(groupe, 'imageFile')) ): '', 
                'biographie':groupe.getBiographie,
                'image':groupe.getImage,
                'nationalite': groupe.getVisibleNationalite is not null ? groupe.getVisibleNationalite.getNom : null,
                'url':  (absolute_url(path('detail_groupe', {'id' : groupe.getId}))) 
                } 
            }
        %}
\t\t{% set groupes = groupes|merge(groupe) %}
\t{% endfor %}

    {% set evenements =  { } %}
\t{% for evenement in etiquette.getVisibleEvenements %}
\t\t{% set evenementArray = 
            {
                (evenement.getId):
                {
                    'id' : evenement.getId,
                    'titre':evenement.getTitre,
                    'dateDebut':evenement.getDateDebut,
                    'dateFin':evenement.getDateFin,
\t\t            'image':evenement.getImage is not null ? (absolute_url(url('home')))~(vich_uploader_asset(evenement, 'imageFile')): '', 
\t\t            'lienImage':evenement.getLienImage,
                    'description': evenement.getDescription,
                    'type': (evenement.getVisibleTypeEvenements != null) ? evenement.getVisibleTypeEvenements.getLabel : null, 
                    'url':  (absolute_url(path('detail_api_evenement', {'id' : evenement.getId}))) 
                }
            }%}
\t\t{% set evenements = evenements|merge(evenementArray) %}
\t{% endfor %}

\t{% set 
        etiquetteArr =  {
            (etiquette.getId) :{
            'id' : (etiquette.getId),
            \"motsCles\": (etiquette.getMotsCles),
            'groupes' : groupes,
            'ressources' : ressources,
            'evenements' : evenements,
            'musiciens':musiciens,
            'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) 
        }
    }%}
\t{% set etiquettesArr = etiquettesArr|merge(etiquetteArr) %}
{% endfor %}
{{ etiquettesArr|unescape|raw }}
{% endapply %}
", "etiquettes/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/etiquettes/listeApi.html.twig");
    }
}
