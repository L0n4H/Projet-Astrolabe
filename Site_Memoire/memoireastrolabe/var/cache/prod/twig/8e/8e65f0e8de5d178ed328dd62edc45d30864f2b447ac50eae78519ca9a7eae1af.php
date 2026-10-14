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

/* workflow/slides/slide1.html.twig */
class __TwigTemplate_1efe1fb203b12b2775d5b0642f3e9c6e094c8a35ff59fe7a57fd5230353e4bf8 extends Template
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
        echo "<div class=\"nested-slide\" id=\"Slide1\">
    <h2 class=\"slide-title slide-component event\">Informations sur l'événement</h2>
    <div id=\"Slide1-slide\">
        <div id=\"Slide1-slide-child-1\">
            <div>
                ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["eventForm"] ?? null), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "titre", [], "any", false, false, false, 9), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "imageFile", [], "any", false, false, false, 15), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "lien", [], "any", false, false, false, 21), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "typeEvenement", [], "any", false, false, false, 27), 'row');
        echo "
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un type d'événement</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "lieu", [], "any", false, false, false, 31), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienLieu vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un Lieu</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6 inputCol\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "dateDebut", [], "any", false, false, false, 38), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                        <div class=\"col-sm-6 inputCol\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "dateFin", [], "any", false, false, false, 42), 'row');
        echo "                               
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "genresMusicaux", [], "any", false, false, false, 48), 'row');
        echo "
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un genre musical</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "etiquettes", [], "any", false, false, false, 52), 'row');
        echo "
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                        </div>
                    </div>
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "description", [], "any", false, false, false, 56), 'row');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "_token", [], "any", false, false, false, 57), 'row');
        echo "
                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["eventForm"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button id=\"verifEvent\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide1-slide-child-2\">
            <h2 class=\"nested-slide-child-title\">Création de Lieu</h2>
            <div>
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["lieuForm"] ?? null), 'form_start', ["attr" => ["id" => "lieuForm"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["lieuForm"] ?? null), "ville", [], "any", false, false, false, 74), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["lieuForm"] ?? null), "CP", [], "any", false, false, false, 78), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["lieuForm"] ?? null), "nomBatiment", [], "any", false, false, false, 84), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["lieuForm"] ?? null), "adresse", [], "any", false, false, false, 88), 'row');
        echo "
                            <span class=\"invali-feedback\"></span> 
                    </div>
                </div>
                ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["lieuForm"] ?? null), 'form_end');
        echo "
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"lienRetourEvent vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button id=\"addLieu\" type=\"button\" class=\" slick-btn btn btn-outline-success m-3\">Ajouter ce lieu</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide1-slide-child-3\">
            <h2 class=\"nested-slide-child-title\">Informations complémentaires</h2>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création de type d'événement</h4>
                ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeEventForm"] ?? null), 'form_start', ["attr" => ["id" => "typeEventForm"]]);
        echo "
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["typeEventForm"] ?? null), "label", [], "any", false, false, false, 108), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["typeEventForm"] ?? null), "label", [], "any", false, false, false, 110), 'widget');
        echo "
                        <button id=\"addTypeEvent\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeEventForm"] ?? null), 'form_end');
        echo "
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création d'étiquettes</h4>
                ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["etiquetteForm"] ?? null), 'form_start', ["attr" => ["id" => "etiquetteForm"]]);
        echo "
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["etiquetteForm"] ?? null), "motsCles", [], "any", false, false, false, 121), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["etiquetteForm"] ?? null), "motsCles", [], "any", false, false, false, 123), 'widget');
        echo "
                        <button id=\"addEtiquette\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["etiquetteForm"] ?? null), 'form_end');
        echo "
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-0 mt-3\">Création de genre musical</h4>
                ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeMusicForm"] ?? null), 'form_start', ["attr" => ["id" => "typeMusicForm"]]);
        echo "
                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["typeMusicForm"] ?? null), "nom", [], "any", false, false, false, 134), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["typeMusicForm"] ?? null), "nom", [], "any", false, false, false, 136), 'widget');
        echo "
                        <button id=\"addGenreMusic\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeMusicForm"] ?? null), 'form_end');
        echo "
            </div>
            <div class=\"m-3\">
                <button type=\"button\" class=\"lienRetourEvent vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "workflow/slides/slide1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 142,  261 => 136,  256 => 134,  252 => 133,  245 => 129,  236 => 123,  231 => 121,  227 => 120,  220 => 116,  211 => 110,  206 => 108,  202 => 107,  184 => 92,  177 => 88,  170 => 84,  161 => 78,  154 => 74,  148 => 71,  132 => 58,  128 => 57,  124 => 56,  117 => 52,  110 => 48,  101 => 42,  94 => 38,  84 => 31,  77 => 27,  68 => 21,  59 => 15,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "workflow/slides/slide1.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/workflow/slides/slide1.html.twig");
    }
}
