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

/* workflow/slides/slide3.html.twig */
class __TwigTemplate_4719421d1cb91f92e5682b5458b701d8010fab3ff6806d36bc006e7f5d88e443 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workflow/slides/slide3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workflow/slides/slide3.html.twig"));

        // line 1
        echo "<div class=\"nested-slide\" id=\"Slide3\">
    <h2 class=\"slide-title slide-component mx-auto\" style=\"width:fit-content;\">Ajout de Médias</h2>
    <div id=\"Slide3-slide\">
        <div id=\"Slide3-slide-child-1\">
            <h2 class=\"nested-slide-child-title\">Création de ressources</h2>
            <div id=\"eventRessource\">
                ";
        // line 8
        echo "                <div class=\"ressources\"
                data-index=\"";
        // line 9
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 9, $this->source); })()), "ressources", [], "any", false, false, false, 9)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 9, $this->source); })()), "ressources", [], "any", false, false, false, 9)), "vars", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9) + 1), "html", null, true))) : (print (0)));
        echo "\"
                data-prototype=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 10, $this->source); })()), "ressources", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "prototype", [], "any", false, false, false, 10), 'rest'), "html_attr");
        echo "\"
                >
                    <div class=\"accordion\"></div>
                </div>
                <button type=\"button\" class=\"add_item_link btn\" data-collection-holder-class=\"ressources\"><i class=\"fas fa-plus color-green\"></i> Ajouter une ressource</button>
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"slick-btn btn btn-outline-primary m-3 goBack\">Précédent</button>
                <button id=\"verifMedia\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
            </div>
        </div>
        <div id=\"Slide3-slide-child-2\">
            <h2 class=\"nested-slide-child-title\">Ajout d'étiquettes</h2>
            <div>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["etiquetteForm4"]) || array_key_exists("etiquetteForm4", $context) ? $context["etiquetteForm4"] : (function () { throw new RuntimeError('Variable "etiquetteForm4" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["id" => "etiquetteForm4"]]);
        echo "
                    <div class=\"mx-auto col-lg-6 inputCol\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["etiquetteForm4"]) || array_key_exists("etiquetteForm4", $context) ? $context["etiquetteForm4"] : (function () { throw new RuntimeError('Variable "etiquetteForm4" does not exist.', 26, $this->source); })()), "motsCles", [], "any", false, false, false, 26), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                        </div>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["etiquetteForm4"]) || array_key_exists("etiquetteForm4", $context) ? $context["etiquetteForm4"] : (function () { throw new RuntimeError('Variable "etiquetteForm4" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
                
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"lienMedia vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button id=\"addEtiquette4\" type=\"button\" class=\"vertical-prev slick-btn btn btn-outline-success m-3\">Valider</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "workflow/slides/slide3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  80 => 26,  75 => 24,  58 => 10,  54 => 9,  51 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nested-slide\" id=\"Slide3\">
    <h2 class=\"slide-title slide-component mx-auto\" style=\"width:fit-content;\">Ajout de Médias</h2>
    <div id=\"Slide3-slide\">
        <div id=\"Slide3-slide-child-1\">
            <h2 class=\"nested-slide-child-title\">Création de ressources</h2>
            <div id=\"eventRessource\">
                {# {{form_row(eventForm.ressources)}} #}
                <div class=\"ressources\"
                data-index=\"{{ eventForm.ressources|length > 0 ? eventForm.ressources|last.vars.name + 1 : 0 }}\"
                data-prototype=\"{{ form_rest(eventForm.ressources.vars.prototype)|e('html_attr') }}\"
                >
                    <div class=\"accordion\"></div>
                </div>
                <button type=\"button\" class=\"add_item_link btn\" data-collection-holder-class=\"ressources\"><i class=\"fas fa-plus color-green\"></i> Ajouter une ressource</button>
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"slick-btn btn btn-outline-primary m-3 goBack\">Précédent</button>
                <button id=\"verifMedia\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
            </div>
        </div>
        <div id=\"Slide3-slide-child-2\">
            <h2 class=\"nested-slide-child-title\">Ajout d'étiquettes</h2>
            <div>
                {{ form_start(etiquetteForm4,{ 'attr' : { 'id': 'etiquetteForm4' }}) }}
                    <div class=\"mx-auto col-lg-6 inputCol\">
                        {{ form_row(etiquetteForm4.motsCles) }}
                        <span class=\"invalid-feedback\"></span> 
                        </div>
                {{ form_end(etiquetteForm4) }}
                
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"lienMedia vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button id=\"addEtiquette4\" type=\"button\" class=\"vertical-prev slick-btn btn btn-outline-success m-3\">Valider</button>
            </div>
        </div>
    </div>
</div>", "workflow/slides/slide3.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/workflow/slides/slide3.html.twig");
    }
}
