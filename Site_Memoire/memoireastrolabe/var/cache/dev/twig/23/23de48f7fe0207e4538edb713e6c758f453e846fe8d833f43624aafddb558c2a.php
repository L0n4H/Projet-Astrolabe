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

/* instruments/listeApi.html.twig */
class __TwigTemplate_b80d2a305da63329e64e566a8354fa870ebc021da6538c14dacaf907137a4b5e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instruments/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instruments/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["instruments"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeInstruments"]) || array_key_exists("listeInstruments", $context) ? $context["listeInstruments"] : (function () { throw new RuntimeError('Variable "listeInstruments" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
            // line 4
            echo "\t";
            $context["membres"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["instrument"], "getVisibleMembres", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 6
                echo "        ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 6))) {
                    // line 7
                    echo "            ";
                    $context["musicien"] = [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 9
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 9), "getId", [], "any", false, false, false, 9) => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 11
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 11), "getId", [], "any", false, false, false, 11), "nomScene" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 12
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 12), "getNomScene", [], "any", false, false, false, 12), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 13
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 13), "getNom", [], "any", false, false, false, 13), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 14
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 14), "getPrenom", [], "any", false, false, false, 14), "dateNaissance" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 15
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 15), "getDateNaissance", [], "any", false, false, false, 15), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 16
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 16), "getLienImage", [], "any", false, false, false, 16), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 17
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 17), "getImage", [], "any", false, false, false, 17))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleMusicien", [], "any", false, false, false, 17), "imageFile"))) : ("")), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 18
$context["membre"], "getVisibleMusicien", [], "any", false, false, false, 18), "getId", [], "any", false, false, false, 18)]))]];
                    // line 21
                    echo "        ";
                } else {
                    // line 22
                    echo "            ";
                    $context["musicien"] = [];
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 24))) {
                    // line 25
                    echo "            ";
                    $context["groupe"] = [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 27
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 27), "getId", [], "any", false, false, false, 27) => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 29
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 29), "getId", [], "any", false, false, false, 29), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 30
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 30), "getNom", [], "any", false, false, false, 30), "dateCreation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 31
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 31), "getDateCreation", [], "any", false, false, false, 31), "lienImage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 32
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 32), "getLienImage", [], "any", false, false, false, 32), "image" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 33
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 33), "getImage", [], "any", false, false, false, 33))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 33), "imageFile"))) : ("")), "biographie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 34
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 34), "getBiographie", [], "any", false, false, false, 34), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 35
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 35), "getVisibleNationalite", [], "any", false, false, false, 35))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 35), "getVisibleNationalite", [], "any", false, false, false, 35), "getNom", [], "any", false, false, false, 35)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_groupe", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 36
$context["membre"], "getVisibleGroupe", [], "any", false, false, false, 36), "getId", [], "any", false, false, false, 36)]))]];
                    // line 39
                    echo "        ";
                } else {
                    // line 40
                    echo "            ";
                    $context["groupe"] = [];
                    // line 41
                    echo "        ";
                }
                // line 42
                echo "        
        ";
                // line 43
                $context["membreArray"] = [twig_get_attribute($this->env, $this->source,                 // line 44
$context["membre"], "getId", [], "any", false, false, false, 44) => ["id" => twig_get_attribute($this->env, $this->source,                 // line 45
$context["membre"], "getId", [], "any", false, false, false, 45), "musicien" =>                 // line 46
(isset($context["musicien"]) || array_key_exists("musicien", $context) ? $context["musicien"] : (function () { throw new RuntimeError('Variable "musicien" does not exist.', 46, $this->source); })()), "groupe" =>                 // line 47
(isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 47, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source,                 // line 48
$context["membre"], "getId", [], "any", false, false, false, 48)]))]];
                // line 51
                echo "\t\t";
                $context["membres"] = twig_array_merge((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 51, $this->source); })()), (isset($context["membreArray"]) || array_key_exists("membreArray", $context) ? $context["membreArray"] : (function () { throw new RuntimeError('Variable "membreArray" does not exist.', 51, $this->source); })()));
                // line 52
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t";
            $context["instrumentArr"] = [twig_get_attribute($this->env, $this->source,             // line 55
$context["instrument"], "getId", [], "any", false, false, false, 55) => ["id" => twig_get_attribute($this->env, $this->source,             // line 57
$context["instrument"], "getId", [], "any", false, false, false, 57), "nom" => twig_get_attribute($this->env, $this->source,             // line 58
$context["instrument"], "getNom", [], "any", false, false, false, 58), "membres" =>             // line 60
(isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 60, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source,             // line 61
$context["instrument"], "getId", [], "any", false, false, false, 61)]))]];
            // line 64
            echo "\t";
            $context["instruments"] = twig_array_merge((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 64, $this->source); })()), (isset($context["instrumentArr"]) || array_key_exists("instrumentArr", $context) ? $context["instrumentArr"] : (function () { throw new RuntimeError('Variable "instrumentArr" does not exist.', 64, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 66, $this->source); })()));
        echo "
";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_5_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "instruments/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 1,  141 => 66,  134 => 64,  132 => 61,  131 => 60,  130 => 58,  129 => 57,  128 => 55,  126 => 53,  120 => 52,  117 => 51,  115 => 48,  114 => 47,  113 => 46,  112 => 45,  111 => 44,  110 => 43,  107 => 42,  104 => 41,  101 => 40,  98 => 39,  96 => 36,  95 => 35,  94 => 34,  93 => 33,  92 => 32,  91 => 31,  90 => 30,  89 => 29,  88 => 27,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  74 => 21,  72 => 18,  71 => 17,  70 => 16,  69 => 15,  68 => 14,  67 => 13,  66 => 12,  65 => 11,  64 => 9,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set instruments = {} %}
{% for instrument in listeInstruments %}
\t{% set membres = { } %}
\t{% for membre in instrument.getVisibleMembres %}
        {% if membre.getVisibleMusicien is not null %}
            {% set musicien = 
            {
                (membre.getVisibleMusicien.getId) : 
                {
                    'id' : membre.getVisibleMusicien.getId,
                    'nomScene' : membre.getVisibleMusicien.getNomScene,
                    'nom' : membre.getVisibleMusicien.getNom,
                    'prenom' : membre.getVisibleMusicien.getPrenom,
                    'dateNaissance': membre.getVisibleMusicien.getDateNaissance,
                    'lienImage':membre.getVisibleMusicien.getLienImage,
                    'image':membre.getVisibleMusicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleMusicien, 'imageFile')) ): '', 
                    'url': absolute_url(path('detail_musicien', {'id': membre.getVisibleMusicien.getId}))
                }
            }%}
        {% else %}
            {% set musicien = {} %}
        {% endif %}
        {% if membre.getVisibleGroupe is not null %}
            {% set groupe = 
            {
                (membre.getVisibleGroupe.getId): 
                {
                    'id': membre.getVisibleGroupe.getId,
                    'nom': membre.getVisibleGroupe.getNom,
                    'dateCreation': membre.getVisibleGroupe.getDateCreation,
                    'lienImage':membre.getVisibleGroupe.getLienImage,
                    'image':membre.getVisibleGroupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(membre.getVisibleGroupe, 'imageFile')) ): '', 
                    'biographie':membre.getVisibleGroupe.getBiographie,
                    'nationalite': membre.getVisibleGroupe.getVisibleNationalite is not null ? membre.getVisibleGroupe.getVisibleNationalite.getNom : null,
                    'url' : absolute_url(path('detail_groupe', {'id': membre.getVisibleGroupe.getId}))
                }
            }%}
        {% else %}
            {% set groupe = {} %}
        {% endif %}
        
        {%  set membreArray ={
            (membre.getId): {
                'id': (membre.getId),
                'musicien' : musicien, 
                'groupe': groupe,
                'url':  (absolute_url(path('detail_membre', {'id' : membre.getId}))) 
            } 
        }%}
\t\t{% set membres = membres|merge(membreArray) %}
\t{% endfor %}
\t{% set instrumentArr =  
    {
        (instrument.getId) :
        {
            'id' : (instrument.getId),
            \"nom\": (instrument.getNom),
            
            \"membres\": membres,
            'url':  (absolute_url(path('detail_instrument', {'id' : instrument.getId})))
        } 
    }%}
\t{% set instruments = instruments|merge(instrumentArr) %}
{% endfor %}
{{ instruments|unescape|raw }}
{% endapply %}
", "instruments/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\instruments\\listeApi.html.twig");
    }
}
