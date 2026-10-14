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
class __TwigTemplate_26cdcbd9fa6799b3c5be866a77f9e5d7fb79b6d7feb07fa0ed826f6420f307e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieux/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieux/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["lieuxArr"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeLieux"]) || array_key_exists("listeLieux", $context) ? $context["listeLieux"] : (function () { throw new RuntimeError('Variable "listeLieux" does not exist.', 3, $this->source); })()));
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
                $context["evenements"] = twig_array_merge((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 9, $this->source); })()), (isset($context["evenementArray"]) || array_key_exists("evenementArray", $context) ? $context["evenementArray"] : (function () { throw new RuntimeError('Variable "evenementArray" does not exist.', 9, $this->source); })()));
                // line 10
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t";
            $context["lieuArr"] = [twig_get_attribute($this->env, $this->source, $context["lieu"], "getID", [], "any", false, false, false, 11) => ["id" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getID", [], "any", false, false, false, 11), "ville" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getVille", [], "any", false, false, false, 11), "CP" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getCP", [], "any", false, false, false, 11), "adresse" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getAdresse", [], "any", false, false, false, 11), "nomBatiment" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getNomBatiment", [], "any", false, false, false, 11), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_lieu", ["id" => twig_get_attribute($this->env, $this->source, $context["lieu"], "getId", [], "any", false, false, false, 11)])), "evenements" => (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 11, $this->source); })())]];
            // line 12
            echo "\t";
            $context["lieuxArr"] = twig_array_merge((isset($context["lieuxArr"]) || array_key_exists("lieuxArr", $context) ? $context["lieuxArr"] : (function () { throw new RuntimeError('Variable "lieuxArr" does not exist.', 12, $this->source); })()), (isset($context["lieuArr"]) || array_key_exists("lieuArr", $context) ? $context["lieuArr"] : (function () { throw new RuntimeError('Variable "lieuArr" does not exist.', 12, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["lieuxArr"]) || array_key_exists("lieuxArr", $context) ? $context["lieuxArr"] : (function () { throw new RuntimeError('Variable "lieuxArr" does not exist.', 14, $this->source); })()));
        echo "
";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_7_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  88 => 1,  83 => 14,  76 => 12,  73 => 11,  67 => 10,  64 => 9,  62 => 8,  61 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set lieuxArr =  { } %}
{% for lieu in listeLieux %}
\t{% set evenements =  { } %}
\t{% for evenement in lieu.getVisibleEvenements %}
\t\t{% set evenementArray = {(evenement.getId):{'id' : evenement.getId,'titre':evenement.getTitre,'dateDebut':evenement.getDateDebut,'dateFin':evenement.getDateFin,
\t\t'image':evenement.getImage is not null ? (absolute_url(url('home')))~(vich_uploader_asset(evenement, 'imageFile')): '', 
\t\t'lienImage':evenement.getLienImage,'description': evenement.getDescription,'type': (evenement.getVisibleTypeEvenements != null) ? evenement.getVisibleTypeEvenements.getLabel : null, 'url':  (absolute_url(path('detail_api_evenement', {'id' : evenement.getId}))) }}%}
\t\t{% set evenements = evenements|merge(evenementArray) %}
\t{% endfor %}
\t{% set lieuArr ={(lieu.getID):{\"id\":lieu.getID,\"ville\":lieu.getVille,\"CP\":lieu.getCP,\"adresse\":lieu.getAdresse,'nomBatiment':(lieu.getNomBatiment),'url':  (absolute_url(path('detail_lieu', {'id' : lieu.getId}))),'evenements':evenements                    }}    %}
\t{% set lieuxArr = lieuxArr|merge(lieuArr) %}
{% endfor %}
{{ lieuxArr|unescape|raw }}
{% endapply %}
", "lieux/listeApi.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\lieux\\listeApi.html.twig");
    }
}
