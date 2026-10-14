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
class __TwigTemplate_a01bb55b36bca421f1597b53e05d366bc86249c51ab662e4b801a6c832610905 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "labels/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "labels/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["labels"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeLabels"]) || array_key_exists("listeLabels", $context) ? $context["listeLabels"] : (function () { throw new RuntimeError('Variable "listeLabels" does not exist.', 3, $this->source); })()));
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
                        $context["categoriesMusicales"] = twig_array_merge((isset($context["categoriesMusicales"]) || array_key_exists("categoriesMusicales", $context) ? $context["categoriesMusicales"] : (function () { throw new RuntimeError('Variable "categoriesMusicales" does not exist.', 11, $this->source); })()), (isset($context["categorieMusicales"]) || array_key_exists("categorieMusicales", $context) ? $context["categorieMusicales"] : (function () { throw new RuntimeError('Variable "categorieMusicales" does not exist.', 11, $this->source); })()));
                        // line 12
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieMusical'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "\t\t\t";
                    $context["genresMusicales"] = [twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 13) => ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 13), "nom" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getNom", [], "any", false, false, false, 13), "categorieMusicales" => (isset($context["categoriesMusicales"]) || array_key_exists("categoriesMusicales", $context) ? $context["categoriesMusicales"] : (function () { throw new RuntimeError('Variable "categoriesMusicales" does not exist.', 13, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_genreMusical", ["id" => twig_get_attribute($this->env, $this->source, $context["genreMusical"], "getId", [], "any", false, false, false, 13)]))]];
                    // line 14
                    echo "\t\t\t";
                    $context["genresMusicaux"] = twig_array_merge((isset($context["genresMusicaux"]) || array_key_exists("genresMusicaux", $context) ? $context["genresMusicaux"] : (function () { throw new RuntimeError('Variable "genresMusicaux" does not exist.', 14, $this->source); })()), (isset($context["genresMusicales"]) || array_key_exists("genresMusicales", $context) ? $context["genresMusicales"] : (function () { throw new RuntimeError('Variable "genresMusicales" does not exist.', 14, $this->source); })()));
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
(isset($context["genresMusicaux"]) || array_key_exists("genresMusicaux", $context) ? $context["genresMusicaux"] : (function () { throw new RuntimeError('Variable "genresMusicaux" does not exist.', 19, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_membre", ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "any", false, false, false, 19)]))]];
                // line 20
                echo "\t\t";
                $context["groupes"] = twig_array_merge((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 20, $this->source); })()), (isset($context["groupeArray"]) || array_key_exists("groupeArray", $context) ? $context["groupeArray"] : (function () { throw new RuntimeError('Variable "groupeArray" does not exist.', 20, $this->source); })()));
                // line 21
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t";
            $context["labelArr"] = [twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 22) => ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 22), "nom" => twig_get_attribute($this->env, $this->source, $context["label"], "getNom", [], "any", false, false, false, 22), "dateCreation" => twig_get_attribute($this->env, $this->source, $context["label"], "getDateCreation", [], "any", false, false, false, 22), "description" => twig_get_attribute($this->env, $this->source, $context["label"], "getDescription", [], "any", false, false, false, 22), "logo" => twig_get_attribute($this->env, $this->source, $context["label"], "getLogo", [], "any", false, false, false, 22), "lienLogo" => twig_get_attribute($this->env, $this->source, $context["label"], "getLienLogo", [], "any", false, false, false, 22), "groupes" => (isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 22, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_label", ["id" => twig_get_attribute($this->env, $this->source, $context["label"], "getId", [], "any", false, false, false, 22)]))]];
            // line 23
            echo "\t";
            $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 23, $this->source); })()), (isset($context["labelArr"]) || array_key_exists("labelArr", $context) ? $context["labelArr"] : (function () { throw new RuntimeError('Variable "labelArr" does not exist.', 23, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 25, $this->source); })()));
        echo "
";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_6_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  130 => 1,  125 => 25,  118 => 23,  115 => 22,  109 => 21,  106 => 20,  104 => 19,  103 => 18,  102 => 17,  99 => 16,  93 => 15,  90 => 14,  87 => 13,  81 => 12,  78 => 11,  75 => 10,  70 => 9,  67 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set labels = {} %}
{% for label in listeLabels %}
\t{% set groupes = { } %}
\t{% for groupe in label.getVisibleGroupes %}
\t\t{% set genresMusicaux = {} %}
\t\t{% for genreMusical in groupe.getVisibleGenresMusicaux %}
\t\t\t{% set categoriesMusicales = {} %}
\t\t\t{% for categorieMusical in genreMusical.getCategorieMusicales %}
\t\t\t\t{% set categorieMusicales = {(categorieMusical.getId) : {'id': categorieMusical.getId,'nom': categorieMusical.getNom,'url': absolute_url(path('detail_categorieMusicale', {'id': categorieMusical.getId}))}}%}
\t\t\t\t{% set categoriesMusicales = categoriesMusicales|merge(categorieMusicales) %}
\t\t\t{% endfor %}
\t\t\t{% set genresMusicales = {(genreMusical.getId) : {'id': genreMusical.getId,'nom': genreMusical.getNom,'categorieMusicales': categoriesMusicales,'url': absolute_url(path('detail_genreMusical', {'id' : genreMusical.getId}))}}%}
\t\t\t{% set genresMusicaux = genresMusicaux|merge(genresMusicales) %}
\t\t{% endfor %}
\t
\t\t{%  set groupeArray = {(groupe.getId): {'id': (groupe.getId), 'nom' : (groupe.getNom),'dateCreation': (groupe.getDateCreation),'biographie': (groupe.getBiographie),'lienImage':groupe.getLienImage,
\t\t'image':groupe.getImage is not null ? ((absolute_url(url('home')))~(vich_uploader_asset(groupe, 'imageFile')) ): '', 
\t\t'genresMusicaux': genresMusicaux,'url':  (absolute_url(path('detail_membre', {'id' : groupe.getId}))) } }   %}
\t\t{% set groupes = groupes|merge(groupeArray) %}
\t{% endfor %}
\t{% set labelArr =  {(label.getId) :{'id' : (label.getId),\"nom\": (label.getNom),\"dateCreation\": (label.getDateCreation),\"description\": (label.getDescription),\"logo\" : (label.getLogo), 'lienLogo':label.getLienLogo, \"groupes\" : groupes,'url':  (absolute_url(path('detail_label', {'id' : label.getId})))} } %}
\t{% set labels = labels|merge(labelArr) %}
{% endfor %}
{{ labels|unescape|raw }}
{% endapply %}
", "labels/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\labels\\listeApi.html.twig");
    }
}
