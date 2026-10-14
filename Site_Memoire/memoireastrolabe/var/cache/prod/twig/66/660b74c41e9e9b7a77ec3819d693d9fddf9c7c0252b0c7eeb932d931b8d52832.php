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

/* labels/listeApi.html.twig */
class __TwigTemplate_f29d9d9417992f4f7b82550105c8655ce49a0430f27f76487f318a3a27445a00 extends Template
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
        $context["labels"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeLabels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 4
            echo "\t";
            $context["groupes"] = [];
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["label"], "getVisibleGroupes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 6
                echo "\t\t";
                $context["genresMusicaux"] = [];
                // line 7
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getVisibleGenresMusicaux", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["genreMusical"]) {
                    // line 8
                    echo "\t\t\t";
                    $context["categoriesMusicales"] = [];
                    // line 9
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getCategorieMusicales", [], "any", false, false, false, 9));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorieMusical"]) {
                        // line 10
                        echo "\t\t\t\t";
                        $context["categorieMusicales"] = [twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 10) => ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 10), "nom" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getNom", [], "any", false, false, false, 10), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_categorieMusicale", ["id" => twig_get_attribute($this->env, $this->source, $context["categorieMusical"], "getId", [], "any", false, false, false, 10)]))]];
                        // line 11
                        echo "\t\t\t\t";
                        $context["categoriesMusicales"] = twig_array_merge(($context["categoriesMusicales"] ?? null), ($context["categorieMusicales"] ?? null));
                        // line 12
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "\t\t\t";
                    $context["genresMusicales"] = [twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 13) => ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 13), "nom" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getNom", [], "any", false, false, false, 13), "categorieMusicales" => ($context["categoriesMusicales"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 13)]))]];
                    // line 14
                    echo "\t\t\t";
                    $context["genresMusicaux"] = twig_array_merge(($context["genresMusicaux"] ?? null), ($context["genresMusicales"] ?? null));
                    // line 15
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genreMusical'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "\t
\t\t";
                // line 17
                $context["groupeArray"] = [twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 17) => ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 17), "nom" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getNom", [], "any", false, false, false, 17), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getDateCreation", [], "any", false, false, false, 17), "biographie" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getBiographie", [], "any", false, false, false, 17), "lienImage" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getLienImage", [], "any", false, false, false, 17), "image" => (( !(null === twig_get_attribute($this->env, $this->source,                 // line 18
$context["groupe"], "getImage", [], "any", false, false, false, 18))) ? (($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home")) . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["groupe"], "imageFile"))) : ("")), "genresMusicaux" =>                 // line 19
($context["genresMusicaux"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 19)]))]];
                // line 20
                echo "\t\t";
                $context["groupes"] = twig_array_merge(($context["groupes"] ?? null), ($context["groupeArray"] ?? null));
                // line 21
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t";
            $context["labelArr"] = [twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 22) => ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 22), "nom" => twig_get_attribute($this->env, $this->source, $context["label"], "getNom", [], "any", false, false, false, 22), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["label"], "getDateCreation", [], "any", false, false, false, 22), "description" => twig_get_attribute($this->env, $this->source, $context["label"], "getDescription", [], "any", false, false, false, 22), "logo" => twig_get_attribute($this->env, $this->source, $context["label"], "getLogo", [], "any", false, false, false, 22), "lienLogo" => twig_get_attribute($this->env, $this->source, $context["label"], "getLienLogo", [], "any", false, false, false, 22), "groupes" => ($context["groupes"] ?? null), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 22)]))]];
            // line 23
            echo "\t";
            $context["labels"] = twig_array_merge(($context["labels"] ?? null), ($context["labelArr"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo $this->extensions['App\Twig\CustomExtension']->unescape(($context["labels"] ?? null));
        echo "
";
        $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_9_);
    }

    public function getTemplateName()
    {
        return "labels/listeApi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 1,  119 => 25,  112 => 23,  109 => 22,  103 => 21,  100 => 20,  98 => 19,  97 => 18,  96 => 17,  93 => 16,  87 => 15,  84 => 14,  81 => 13,  75 => 12,  72 => 11,  69 => 10,  64 => 9,  61 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "labels/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/labels/listeApi.html.twig");
    }
}
