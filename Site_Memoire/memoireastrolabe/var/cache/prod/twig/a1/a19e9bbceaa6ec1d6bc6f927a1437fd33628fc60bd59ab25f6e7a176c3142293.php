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
class __TwigTemplate_5932bb3c2449a2d4977877266eaab17f7bd2ce1a06d303081fd7ae9947a0eb08 extends Template
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
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "ressources", [], "any", false, false, false, 9)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "ressources", [], "any", false, false, false, 9)), "vars", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9) + 1), "html", null, true))) : (print (0)));
        echo "\"
                data-prototype=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "ressources", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "prototype", [], "any", false, false, false, 10), 'rest'), "html_attr");
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["etiquetteForm4"] ?? null), 'form_start', ["attr" => ["id" => "etiquetteForm4"]]);
        echo "
                    <div class=\"mx-auto col-lg-6 inputCol\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["etiquetteForm4"] ?? null), "motsCles", [], "any", false, false, false, 26), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                        </div>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["etiquetteForm4"] ?? null), 'form_end');
        echo "
                
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"lienMedia vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button id=\"addEtiquette4\" type=\"button\" class=\"vertical-prev slick-btn btn btn-outline-success m-3\">Valider</button>
            </div>
        </div>
    </div>
</div>";
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
        return array (  80 => 29,  74 => 26,  69 => 24,  52 => 10,  48 => 9,  45 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "workflow/slides/slide3.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/workflow/slides/slide3.html.twig");
    }
}
