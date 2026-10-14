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

/* categories_musicales/listeApi.html.twig */
class __TwigTemplate_c239b74f352ed86a6b9e56370ba5446422bba37fe0bd736f315154e7388565e4 extends Template
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
        $context["categoriesMusicales"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeCategoriesMusicales"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorieMusical"]) {
            // line 4
            echo "\t";
            $context["genresMusicales"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getVisibleGenresMusicaux", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["genreMusical"]) {
                // line 6
                echo "\t\t";
                $context["genreMusicalArray"] = [twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 6) => ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 6), "nom" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getNom", [], "any", false, false, false, 6), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 6)]))]];
                // line 7
                echo "\t\t";
                $context["genresMusicales"] = twig_array_merge(($context["genresMusicales"] ?? null), ($context["genreMusicalArray"] ?? null));
                // line 8
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genreMusical'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t";
            $context["categoriePrincipale"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "categoriePrincipale", [], "any", false, false, false, 9), "getId", [], "any", false, false, false, 9), "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "categoriePrincipale", [], "any", false, false, false, 9), "getNom", [], "any", false, false, false, 9), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "categoriePrincipale", [], "any", false, false, false, 9), "getId", [], "any", false, false, false, 9)]))];
            // line 10
            echo "\t";
            $context["categorieMusicaleArr"] = [twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 10) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 10), "categoriePrincipale" => ($context["categoriePrincipale"] ?? null), "genresMusicaux" => ($context["genresMusicales"] ?? null), "nom" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getNom", [], "any", false, false, false, 10)]];
            // line 11
            echo "\t";
            $context["categoriesMusicales"] = twig_array_merge(($context["categoriesMusicales"] ?? null), ($context["categorieMusicaleArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["categoriesMusicales"] ?? null));
        echo "
";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_5_);
    }

    public function getTemplateName()
    {
        return "categories_musicales/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 1,  78 => 13,  71 => 11,  68 => 10,  65 => 9,  59 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "categories_musicales/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/categories_musicales/listeApi.html.twig");
    }
}
