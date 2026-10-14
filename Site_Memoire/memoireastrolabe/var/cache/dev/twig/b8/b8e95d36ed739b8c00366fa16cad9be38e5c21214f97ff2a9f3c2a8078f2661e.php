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
class __TwigTemplate_adae336329e33aa7574dcdffce8cc8b7c825cd4a30347aed8dbd07a49baa9d41 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories_musicales/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories_musicales/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["categoriesMusicales"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCategoriesMusicales"]) || array_key_exists("listeCategoriesMusicales", $context) ? $context["listeCategoriesMusicales"] : (function () { throw new RuntimeError('Variable "listeCategoriesMusicales" does not exist.', 3, $this->source); })()));
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
                $context["genresMusicales"] = twig_array_merge((isset($context["genresMusicales"]) || array_key_exists("genresMusicales", $context) ? $context["genresMusicales"] : (function () { throw new RuntimeError('Variable "genresMusicales" does not exist.', 7, $this->source); })()), (isset($context["genreMusicalArray"]) || array_key_exists("genreMusicalArray", $context) ? $context["genreMusicalArray"] : (function () { throw new RuntimeError('Variable "genreMusicalArray" does not exist.', 7, $this->source); })()));
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
            $context["categorieMusicaleArr"] = [twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 10) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 10), "categoriePrincipale" => (isset($context["categoriePrincipale"]) || array_key_exists("categoriePrincipale", $context) ? $context["categoriePrincipale"] : (function () { throw new RuntimeError('Variable "categoriePrincipale" does not exist.', 10, $this->source); })()), "genresMusicaux" => (isset($context["genresMusicales"]) || array_key_exists("genresMusicales", $context) ? $context["genresMusicales"] : (function () { throw new RuntimeError('Variable "genresMusicales" does not exist.', 10, $this->source); })()), "nom" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getNom", [], "any", false, false, false, 10)]];
            // line 11
            echo "\t";
            $context["categoriesMusicales"] = twig_array_merge((isset($context["categoriesMusicales"]) || array_key_exists("categoriesMusicales", $context) ? $context["categoriesMusicales"] : (function () { throw new RuntimeError('Variable "categoriesMusicales" does not exist.', 11, $this->source); })()), (isset($context["categorieMusicaleArr"]) || array_key_exists("categorieMusicaleArr", $context) ? $context["categorieMusicaleArr"] : (function () { throw new RuntimeError('Variable "categorieMusicaleArr" does not exist.', 11, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["categoriesMusicales"]) || array_key_exists("categoriesMusicales", $context) ? $context["categoriesMusicales"] : (function () { throw new RuntimeError('Variable "categoriesMusicales" does not exist.', 13, $this->source); })()));
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
        return "categories_musicales/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 1,  84 => 13,  77 => 11,  74 => 10,  71 => 9,  65 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set categoriesMusicales = {} %}
{% for categorieMusical in listeCategoriesMusicales %}
\t{% set genresMusicales = { } %}
\t{% for genreMusical in categorieMusical.getVisibleGenresMusicaux %}
\t\t{%  set genreMusicalArray ={(genreMusical.getId): {'id': genreMusical.getId, 'nom': genreMusical.getNom,'url':  (absolute_url(path('detail_genreMusical', {'id' : genreMusical.getId}))) }}%}
\t\t{% set genresMusicales = genresMusicales|merge(genreMusicalArray) %}
\t{% endfor %}
\t{% set categoriePrincipale = {'id': categorieMusical.categoriePrincipale.getId, 'nom': categorieMusical.categoriePrincipale.getNom,'url':  (absolute_url(path('detail_genreMusical', {'id' : categorieMusical.categoriePrincipale.getId}))) } %}
\t{% set categorieMusicaleArr =  {(categorieMusical.getId) :{'id' : (categorieMusical.getId),\"categoriePrincipale\": categoriePrincipale,\"genresMusicaux\": genresMusicales,\"nom\": (categorieMusical.getNom),} } %}
\t{% set categoriesMusicales = categoriesMusicales|merge(categorieMusicaleArr) %}
{% endfor %}
{{ categoriesMusicales|unescape|raw }}
{% endapply %}
", "categories_musicales/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/categories_musicales/listeApi.html.twig");
    }
}
