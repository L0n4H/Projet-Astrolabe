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

/* lieux/listeApi.html.twig */
class __TwigTemplate_3d2e5cb5b28d3db16e9a0d0aef5f0f6e79a6f422171430341a1909877242b285 extends Template
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
        $context["lieuxArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeLieux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 4
            echo "\t";
            $context["evenements"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lieu"], "getVisibleEvenements", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 6
                echo "\t\t";
                $context["evenementArray"] = [twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 6) => ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 6), "titre" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getTitre", [], "any", false, false, false, 6), "dateDebut" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateDebut", [], "any", false, false, false, 6), "dateFin" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDateFin", [], "any", false, false, false, 6), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 7
$context["evenement"], "getImage", [], "any", false, false, false, 7))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["evenement"], "imageFile"))) : ("")), "lienImage" => twig_get_attribute($this->env, $this->source,                 // line 8
$context["evenement"], "getLienImage", [], "any", false, false, false, 8), "description" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getDescription", [], "any", false, false, false, 8), "type" => (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 8), null))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "getVisibleTypeEvenements", [], "any", false, false, false, 8), "getLabel", [], "any", false, false, false, 8)) : (null)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_api_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "getId", [], "any", false, false, false, 8)]))]];
                // line 9
                echo "\t\t";
                $context["evenements"] = twig_array_merge(($context["evenements"] ?? null), ($context["evenementArray"] ?? null));
                // line 10
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t";
            $context["lieuArr"] = [twig_get_attribute($this->env, $this->source, $context["lieu"], "getID", [], "any", false, false, false, 11) => ["id" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getID", [], "any", false, false, false, 11), "ville" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getVille", [], "any", false, false, false, 11), "CP" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getCP", [], "any", false, false, false, 11), "adresse" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getAdresse", [], "any", false, false, false, 11), "nomBatiment" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getNomBatiment", [], "any", false, false, false, 11), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_lieu", ["id" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getId", [], "any", false, false, false, 11)])), "evenements" => ($context["evenements"] ?? null)]];
            // line 12
            echo "\t";
            $context["lieuxArr"] = twig_array_merge(($context["lieuxArr"] ?? null), ($context["lieuArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["lieuxArr"] ?? null));
        echo "
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "lieux/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 1,  77 => 14,  70 => 12,  67 => 11,  61 => 10,  58 => 9,  56 => 8,  55 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "lieux/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/lieux/listeApi.html.twig");
    }
}
