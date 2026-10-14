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

/* musiciens/listeApi.html.twig */
class __TwigTemplate_717ada01afedc4705799690d40df55805dd87dc93e18e1aacb0074bf5e64f87c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musiciens/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musiciens/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["musiciensArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMusiciens"]) || array_key_exists("listeMusiciens", $context) ? $context["listeMusiciens"] : (function () { throw new RuntimeError('Variable "listeMusiciens" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["musicien"]) {
            // line 4
            echo "\t";
            $context["etiquettes"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["musicien"], "getVisibleEtiquettes", [], "any", false, false, false, 5));
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
            $context["membres"] = [];
            // line 10
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["musicien"], "getVisibleMembres", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 11
                echo "\t\t";
                $context["instruments"] = [];
                // line 12
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleInstruments", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
                    // line 13
                    echo "\t\t\t";
                    $context["instrumentArray"] = [twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 13) => ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 13), "nom" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getNom", [], "any", false, false, false, 13), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "getId", [], "any", false, false, false, 13)]))]];
                    // line 14
                    echo "\t\t\t";
                    $context["instruments"] = twig_array_merge((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 14, $this->source); })()), (isset($context["instrumentArray"]) || array_key_exists("instrumentArray", $context) ? $context["instrumentArray"] : (function () { throw new RuntimeError('Variable "instrumentArray" does not exist.', 14, $this->source); })()));
                    // line 15
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "\t\t";
                $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 16) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 16), "groupe" => (( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 16))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 16), "getNom", [], "any", false, false, false, 16)) : ("")), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 16), "instruments" => (isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 16, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 16)]))]];
                // line 17
                echo "\t\t";
                $context["membres"] = twig_array_merge((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 17, $this->source); })()), (isset($context["membreArray"]) || array_key_exists("membreArray", $context) ? $context["membreArray"] : (function () { throw new RuntimeError('Variable "membreArray" does not exist.', 17, $this->source); })()));
                // line 18
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t";
            $context["musicienArr"] = [twig_get_attribute($this->env, $this->source, $context["musicien"], "getID", [], "any", false, false, false, 19) => ["id" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getID", [], "any", false, false, false, 19), "nom de Scene" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getNomScene", [], "any", false, false, false, 19), "nom" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getNom", [], "any", false, false, false, 19), "prenom" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getPrenom", [], "any", false, false, false, 19), "date de naissance" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getDateNaissance", [], "any", false, false, false, 19), "lienImage" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getLienImage", [], "any", false, false, false, 19), "image" => (( !(null === twig_get_attribute($this->env, $this->source,             // line 20
$context["musicien"], "getImage", [], "any", false, false, false, 20))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["musicien"], "imageFile"))) : ("")), "etiquettes" =>             // line 21
(isset($context["etiquettes"]) || array_key_exists("etiquettes", $context) ? $context["etiquettes"] : (function () { throw new RuntimeError('Variable "etiquettes" does not exist.', 21, $this->source); })()), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, $context["musicien"], "getVisibleNationalite", [], "any", false, false, false, 21))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["musicien"], "getVisibleNationalite", [], "any", false, false, false, 21), "getNom", [], "any", false, false, false, 21)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getId", [], "any", false, false, false, 21)])), "membre" => (isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 21, $this->source); })())]];
            // line 22
            echo "\t";
            $context["musiciensArr"] = twig_array_merge((isset($context["musiciensArr"]) || array_key_exists("musiciensArr", $context) ? $context["musiciensArr"] : (function () { throw new RuntimeError('Variable "musiciensArr" does not exist.', 22, $this->source); })()), (isset($context["musicienArr"]) || array_key_exists("musicienArr", $context) ? $context["musicienArr"] : (function () { throw new RuntimeError('Variable "musicienArr" does not exist.', 22, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musicien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["musiciensArr"]) || array_key_exists("musiciensArr", $context) ? $context["musiciensArr"] : (function () { throw new RuntimeError('Variable "musiciensArr" does not exist.', 24, $this->source); })()));
        echo "
";
        $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_9_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "musiciens/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 1,  123 => 24,  116 => 22,  114 => 21,  113 => 20,  111 => 19,  105 => 18,  102 => 17,  99 => 16,  93 => 15,  90 => 14,  87 => 13,  82 => 12,  79 => 11,  74 => 10,  71 => 9,  65 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set musiciensArr =  { } %}
{% for musicien in listeMusiciens %}
\t{% set etiquettes = { } %}
\t{% for etiquette in musicien.getVisibleEtiquettes %}
\t\t{%  set etiquetteArray ={(etiquette.getId): {'id':etiquette.getId, 'motsCles':etiquette.getMotsCles,'url':  (absolute_url(path('detail_etiquette', {'id' : etiquette.getId}))) } }   %}
\t\t{% set etiquettes = etiquettes|merge(etiquetteArray) %}
\t{% endfor %}
\t{% set membres = { } %}
\t{% for membre in musicien.getVisibleMembres %}
\t\t{% set instruments = { } %}
\t\t{% for instrument in membre.getVisibleInstruments %}
\t\t\t{%  set instrumentArray ={(instrument.getId): {'id':instrument.getId, 'nom':instrument.getNom,'url':  (absolute_url(path('detail_instrument', {'id' : instrument.getId}))) } }   %}
\t\t\t{% set instruments = instruments|merge(instrumentArray) %}
\t\t{% endfor %}
\t\t{%  set membreArray ={(membre.getId): {'id':membre.getId, 'groupe':membre.getVisibleGroupe is not null ? membre.getVisibleGroupe.getNom,'actif':membre.getActif,'instruments':instruments,'url':  (absolute_url(path('detail_membre', {'id' : membre.getId}))) } }   %}
\t\t{% set membres = membres|merge(membreArray) %}
\t{% endfor %}
\t{% set musicienArr ={(musicien.getID):{\"id\":musicien.getID,\"nom de Scene\":musicien.getNomScene,\"nom\":musicien.getNom,\"prenom\":musicien.getPrenom,'date de naissance':(musicien.getDateNaissance),'lienImage':musicien.getLienImage,
\t'image':musicien.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(musicien, 'imageFile')) ): '',
\t'etiquettes':etiquettes,'nationalite': musicien.getVisibleNationalite is not null ? musicien.getVisibleNationalite.getNom : null ,'url':  (absolute_url(path('detail_musicien', {'id' : musicien.getId}))),'membre':membres}}    %}
\t{% set musiciensArr = musiciensArr|merge(musicienArr) %}
{% endfor %}
{{ musiciensArr|unescape|raw }}
{% endapply %}
", "musiciens/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\musiciens\\listeApi.html.twig");
    }
}
