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

/* types_ressources/listeApi.html.twig */
class __TwigTemplate_24f76d638e6fd52f44ee1256c17093b44f8a2ad1814b092e79520a30a406b8e5 extends Template
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
        $context["typesRessources"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeTypeRessources"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typeRessource"]) {
            // line 4
            echo "\t";
            $context["ressources"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["typeRessource"], "getVisibleRessources", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                // line 6
                echo "\t\t";
                $context["ressourceArr"] = [twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 6) => ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 6), "lien" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getLien", [], "any", false, false, false, 6), "titre" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getTitre", [], "any", false, false, false, 6), "nomFile" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getNom", [], "any", false, false, false, 6), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_ressource", ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "getId", [], "any", false, false, false, 6)]))]];
                // line 7
                echo "\t\t";
                $context["ressources"] = twig_array_merge(($context["ressources"] ?? null), ($context["ressourceArr"] ?? null));
                // line 8
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t";
            $context["typeRessourceArr"] = [twig_get_attribute($this->env, $this->source, $context["typeRessource"], "getId", [], "any", false, false, false, 9) => ["id" => twig_get_attribute($this->env, $this->source, $context["typeRessource"], "getId", [], "any", false, false, false, 9), "label" => twig_get_attribute($this->env, $this->source, $context["typeRessource"], "getLabel", [], "any", false, false, false, 9), "ressources" => ($context["ressources"] ?? null)]];
            // line 10
            echo "\t";
            $context["typesRessources"] = twig_array_merge(($context["typesRessources"] ?? null), ($context["typeRessourceArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeRessource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["typesRessources"] ?? null));
        echo "
";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_2_);
    }

    public function getTemplateName()
    {
        return "types_ressources/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 1,  75 => 12,  68 => 10,  65 => 9,  59 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "types_ressources/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/types_ressources/listeApi.html.twig");
    }
}
