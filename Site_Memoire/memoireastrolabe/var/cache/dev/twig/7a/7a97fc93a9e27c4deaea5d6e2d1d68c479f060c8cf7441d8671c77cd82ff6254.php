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
class __TwigTemplate_b876bbabdb3c89818ed9dd5d254052d877ceca755aaac84054817a8e7bf46bbe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "types_ressources/listeApi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "types_ressources/listeApi.html.twig"));

        // line 1
        ob_start();
        // line 2
        $context["typesRessources"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeTypeRessources"]) || array_key_exists("listeTypeRessources", $context) ? $context["listeTypeRessources"] : (function () { throw new RuntimeError('Variable "listeTypeRessources" does not exist.', 3, $this->source); })()));
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
                $context["ressources"] = twig_array_merge((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 7, $this->source); })()), (isset($context["ressourceArr"]) || array_key_exists("ressourceArr", $context) ? $context["ressourceArr"] : (function () { throw new RuntimeError('Variable "ressourceArr" does not exist.', 7, $this->source); })()));
                // line 8
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t";
            $context["typeRessourceArr"] = [twig_get_attribute($this->env, $this->source, $context["typeRessource"], "getId", [], "any", false, false, false, 9) => ["id" => twig_get_attribute($this->env, $this->source, $context["typeRessource"], "getId", [], "any", false, false, false, 9), "label" => twig_get_attribute($this->env, $this->source, $context["typeRessource"], "getLabel", [], "any", false, false, false, 9), "ressources" => (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 9, $this->source); })())]];
            // line 10
            echo "\t";
            $context["typesRessources"] = twig_array_merge((isset($context["typesRessources"]) || array_key_exists("typesRessources", $context) ? $context["typesRessources"] : (function () { throw new RuntimeError('Variable "typesRessources" does not exist.', 10, $this->source); })()), (isset($context["typeRessourceArr"]) || array_key_exists("typeRessourceArr", $context) ? $context["typeRessourceArr"] : (function () { throw new RuntimeError('Variable "typeRessourceArr" does not exist.', 10, $this->source); })()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeRessource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo $this->extensions['App\Twig\CustomExtension']->unescape((isset($context["typesRessources"]) || array_key_exists("typesRessources", $context) ? $context["typesRessources"] : (function () { throw new RuntimeError('Variable "typesRessources" does not exist.', 12, $this->source); })()));
        echo "
";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  86 => 1,  81 => 12,  74 => 10,  71 => 9,  65 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set typesRessources =  { } %}
{% for typeRessource in listeTypeRessources %}
\t{% set ressources =  { } %}
\t{% for ressource in typeRessource.getVisibleRessources %}
\t\t{% set ressourceArr = {(ressource.getId) : {'id':ressource.getId, 'lien':ressource.getLien , 'titre': (ressource.getTitre),'nomFile': (ressource.getNom),'url':  (absolute_url(path('detail_ressource', {'id' : ressource.getId}))) } }%}
\t\t{% set ressources = ressources|merge(ressourceArr) %}
\t{% endfor %}
\t{% set typeRessourceArr = {(typeRessource.getId) :{  'id' : typeRessource.getId,'label':typeRessource.getLabel,\"ressources\": ressources}}%}
\t{% set typesRessources = typesRessources|merge(typeRessourceArr) %}
{% endfor %}
{{ typesRessources|unescape|raw }}
{% endapply %}
", "types_ressources/listeApi.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/types_ressources/listeApi.html.twig");
    }
}
