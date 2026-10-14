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
class __TwigTemplate_8b4df7d272cd395b3beb07617e29757392e49924c09330304ddc58057bee1d77 extends Template
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
        $context["musiciensArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeMusiciens"] ?? null));
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
                $context["etiquettes"] = twig_array_merge(($context["etiquettes"] ?? null), ($context["etiquetteArray"] ?? null));
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
                    $context["instruments"] = twig_array_merge(($context["instruments"] ?? null), ($context["instrumentArray"] ?? null));
                    // line 15
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "\t\t";
                $context["membreArray"] = [twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 16) => ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 16), "groupe" => (( !(null === twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 16))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "getVisibleGroupe", [], "any", false, false, false, 16), "getNom", [], "any", false, false, false, 16)) : ("")), "actif" => twig_get_attribute($this->env, $this->source, $context["membre"], "getActif", [], "any", false, false, false, 16), "instruments" => ($context["instruments"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["membre"], "getId", [], "any", false, false, false, 16)]))]];
                // line 17
                echo "\t\t";
                $context["membres"] = twig_array_merge(($context["membres"] ?? null), ($context["membreArray"] ?? null));
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
($context["etiquettes"] ?? null), "nationalite" => (( !(null === twig_get_attribute($this->env, $this->source, $context["musicien"], "getVisibleNationalite", [], "any", false, false, false, 21))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["musicien"], "getVisibleNationalite", [], "any", false, false, false, 21), "getNom", [], "any", false, false, false, 21)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_musicien", ["id" => twig_get_attribute($this->env, $this->source, $context["musicien"], "getId", [], "any", false, false, false, 21)])), "membre" => ($context["membres"] ?? null)]];
            // line 22
            echo "\t";
            $context["musiciensArr"] = twig_array_merge(($context["musiciensArr"] ?? null), ($context["musicienArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musicien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["musiciensArr"] ?? null));
        echo "
";
        $___internal_parse_12_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_12_);
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
        return array (  122 => 1,  117 => 24,  110 => 22,  108 => 21,  107 => 20,  105 => 19,  99 => 18,  96 => 17,  93 => 16,  87 => 15,  84 => 14,  81 => 13,  76 => 12,  73 => 11,  68 => 10,  65 => 9,  59 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "musiciens/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/musiciens/listeApi.html.twig");
    }
}
