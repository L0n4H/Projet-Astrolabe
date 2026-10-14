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
class __TwigTemplate_4fa9a1fef64aac55aec0a648141e3e6f1d3bd8f20dfc6b3b2ca6bad613adc5ec extends Template
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
        $context["instruments"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeInstruments"] ?? null));
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
($context["musicien"] ?? null), "groupe" =>                 // line 47
($context["groupe"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source,                 // line 48
$context["membre"], "getId", [], "any", false, false, false, 48)]))]];
                // line 51
                echo "\t\t";
                $context["membres"] = twig_array_merge(($context["membres"] ?? null), ($context["membreArray"] ?? null));
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
($context["membres"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_instrument", ["id" => twig_get_attribute($this->env, $this->source,             // line 61
$context["instrument"], "getId", [], "any", false, false, false, 61)]))]];
            // line 64
            echo "\t";
            $context["instruments"] = twig_array_merge(($context["instruments"] ?? null), ($context["instrumentArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["instruments"] ?? null));
        echo "
";
        $___internal_parse_14_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_14_);
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
        return array (  140 => 1,  135 => 66,  128 => 64,  126 => 61,  125 => 60,  124 => 58,  123 => 57,  122 => 55,  120 => 53,  114 => 52,  111 => 51,  109 => 48,  108 => 47,  107 => 46,  106 => 45,  105 => 44,  104 => 43,  101 => 42,  98 => 41,  95 => 40,  92 => 39,  90 => 36,  89 => 35,  88 => 34,  87 => 33,  86 => 32,  85 => 31,  84 => 30,  83 => 29,  82 => 27,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  66 => 18,  65 => 17,  64 => 16,  63 => 15,  62 => 14,  61 => 13,  60 => 12,  59 => 11,  58 => 9,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "instruments/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/instruments/listeApi.html.twig");
    }
}
